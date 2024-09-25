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

        // Tìm user theo email
        $existingUser = User::where('email', $request->email)->first();

        if ($existingUser) {
            // Kiểm tra mật khẩu có khớp với hash trong database không
            if (Hash::check($request->password, $existingUser->password)) {

                auth()->attempt($request->only('email', 'password'));
                $user = Auth::user();
                $request->session()->regenerate();
            } else {
                return redirect()->route('login')->with('error', 'Mật khẩu không chính xác!');
            }
        } else {
            // Nếu không tìm thấy user với email này
            return redirect()->route('login')->with('error', 'Tài khoản không tồn tại!');
        }
    
        } catch (\Exception $e) {
            // Xử lý ngoại lệ nếu có lỗi trong quá trình đăng ký
            return redirect()->back()->with('error', 'Đã xảy ra lỗi trong quá trình đăng ký. Vui lòng thử lại.')->withInput();
        }
    }
}
