<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator; // Import đúng Validator
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

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
            // Validate dữ liệu
            $validator = Validator::make($request->all(), [
                'full_name' => 'required|string|max:255',
                'email' => 'required|string|email|max:255|unique:users', // unique:users để kiểm tra xem email đã tồn tại hay chưa
                'password' => 'required|string|min:6',
                'phone' => 'required',
                'gender' => 'required',
                'roles' => 'required'
            ]);
    
            // Nếu có lỗi, trả về với thông báo lỗi
            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput();
            }
    
            // Kiểm tra nếu email đã tồn tại
            $existingUser = User::where('email', $request->email)->first();
            if ($existingUser) {
                // Trả về lỗi nếu đã có tài khoản với email này
                return redirect()->back()->with('error', 'Đã có tài khoản với email này. Vui lòng sử dụng email khác.')->withInput();
            }
    
            // Tạo user mới
            User::create([
                'full_name' => $request->full_name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'phone' => $request->phone,
                'gender' => $request->gender,
                'roles' => $request->roles
            ]);
    
            // Chuyển hướng đến dashboard hoặc trang chủ sau khi đăng ký thành công
            return redirect()->route('todo')->with('success', 'Đăng ký thành công!');
    
        } catch (\Exception $e) {
            // Xử lý ngoại lệ nếu có lỗi trong quá trình đăng ký
            return redirect()->back()->with('error', 'Đã xảy ra lỗi trong quá trình đăng ký. Vui lòng thử lại.')->withInput();
        }
    }
       // Hiển thị form đăng ký
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
