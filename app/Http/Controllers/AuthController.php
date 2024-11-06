<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator; // Import đúng Validator
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\Profile;

class AuthController extends Controller
{
    // Hiển thị form đăng ký
    public function showRegisterForm()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), [
                'full_name' => 'required|string|max:255',
                'email' => 'required|string|email|max:255|unique:users',
                'password' => 'required|string|min:6|confirmed',    
                'phone' => 'required',
                'address' => 'nullable|string|max:255',
                'gender' => 'required',
                'roles' => 'required'
            ],[
                'full_name.required' => __('validation.fullname_required'),
                'email.required' => __('validation.email_required'),
                'password.required' => __('validation.password_required'),
                'password.confirmed' => __('validation.password_confirmation'),
                'phone.required' => __('validation.phone_required'),
                'address.required' => __('validation.address_required'),
                'gender.required' => __('validation.gender_required'),
            ]);

            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput();
            }

            $existingUser = User::where('email', $request->email)->first();
            if ($existingUser) {
                return redirect()->back()->with('error', 'Đã có tài khoản với email này. Vui lòng sử dụng email khác.')->withInput();
            }

            $user = User::create([
                'full_name' => $request->full_name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'phone' => $request->phone,
                'address' => $request->address,
                'gender' => $request->gender,
                'roles' => $request->roles,
            ]);

            Profile::create([
                'user_id' => $user->id,
                'name' => $request->full_name,
                'email' => $request->email,
                'phone' => $request->phone,
                'date_of_birth' => $request->date_of_birth,
                'gender' => $request->gender,
                'link_facebook' => $request->link_facebook,
                'link_instagram' => $request->link_instagram,
                'link_linkin' => $request->link_linkin,
                'link_link' => $request->link_link,
                'address' => $request->address,
                'description' => $request->description,
                'roles' => $request->roles
            ]);

            return redirect()->route('home.index')->with('success', 'Đăng ký thành công!');

        } catch (\Exception $e) {
            return redirect()->route('home.index')->with('error', 'Đã xảy ra lỗi trong quá trình đăng ký. Vui lòng thử lại.')->withInput();
        }
    }
    
    public function showLoginForm()
    {
        return view('auth.login');
    }
    
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        if (Auth::attempt($request->only('email', 'password'))) {
            $request->session()->regenerate();

            return redirect()->route('home.index')->with('success', 'Đăng nhập thành công!');
        }
        else{
            return redirect()->route('home.index')->with('error', 'Email hoặc mật khẩu không chính xác!');
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('home.index')->with('success', 'Đăng xuất thành công!');
    }
}
