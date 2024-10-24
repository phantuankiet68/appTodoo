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
                'password' => 'required|string|min:6',
                'phone' => 'required',
                'gender' => 'required',
                'roles' => 'required'
            ]);
    
            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput();
            }
    
            $existingUser = User::where('email', $request->email)->first();
            if ($existingUser) {
                return redirect()->back()->with('error', 'Đã có tài khoản với email này. Vui lòng sử dụng email khác.')->withInput();
            }
    
            User::create([
                'full_name' => $request->full_name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'phone' => $request->phone,
                'gender' => $request->gender,
                'roles' => $request->roles
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
            return redirect()->route('todo')->with('success', 'Đăng ký thành công!');
    
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Đã xảy ra lỗi trong quá trình đăng ký. Vui lòng thử lại.')->withInput();
        }
    }
    public function showLoginForm()
    {
        return view('auth.login');
    }
    
    public function login(Request $request)
    {
        try {
            // Validate đầu vào
            $request->validate([
                'email' => 'required|email',
                'password' => 'required|min:6',
            ]);

            // Kiểm tra thông tin đăng nhập với Laravel auth
            if (Auth::attempt($request->only('email', 'password'))) {
                // Đăng nhập thành công, tạo lại session
                $request->session()->regenerate();

                // Chuyển hướng đến trang dashboard hoặc trang mong muốn
                return redirect()->route('dashboard.index')->with('success', 'Đăng nhập thành công!');
            }

            // Nếu thông tin không khớp, trả về thông báo lỗi
            return redirect()->route('login.index')->with('error', 'Email hoặc mật khẩu không chính xác!');
            
        } catch (\Exception $e) {
            // Xử lý ngoại lệ nếu có lỗi trong quá trình đăng nhập
            \Log::error('Error occurred during login: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Đã xảy ra lỗi trong quá trình đăng nhập. Vui lòng thử lại.')->withInput();
        }
    }
}
