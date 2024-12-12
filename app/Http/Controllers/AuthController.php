<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator; // Import đúng Validator
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\Profile;
use App\Models\Setting;

class AuthController extends Controller
{

    
    public function changePasswordView()
    {
        return view('changePassword.index');
    }

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
            
            Setting::create([
                'user_id' => $user->id, 
                'setting' => $request->input('setting', 0),
                'issue' => $request->input('issue', 0),
                'cv' => $request->input('cv', 0),
                'calendar' => $request->input('calendar', 0),
                'task' => $request->input('task', 0),
                'workflow' => $request->input('workflow', 0),
                'salary' => $request->input('salary', 0),
                'expense' => $request->input('expense', 0),
                'add_japanese' => $request->input('add_japanese', 0),
                'japanese' => $request->input('japanese', 0),
                'learn_japanese' => $request->input('learn_japanese', 0),
                'add_english' => $request->input('add_english', 0),
                'english' => $request->input('english', 0),
                'learn_english' => $request->input('learn_english', 0),
                'question' => $request->input('question', 0),
                'word' => $request->input('word', 0),
                'excel' => $request->input('excel', 0),
                'test_code' => $request->input('test_code', 0),
                'component' => $request->input('component', 0),
                'color' => $request->input('color', 0),
                'html' => $request->input('html', 0),
                'js' => $request->input('js', 0),
                'vue' => $request->input('vue', 0),
                'react' => $request->input('react', 0),
                'jquery' => $request->input('jquery', 0),
                'angular' => $request->input('angular', 0),
                'php' => $request->input('php', 0),
                'laravel' => $request->input('laravel', 0),
                'node' => $request->input('node', 0),
                'cshap' => $request->input('cshap', 0),
                'java' => $request->input('java', 0),
                'javascript' => $request->input('javascript', 0),
                'ftp' => $request->input('ftp', 0),
                'ubuntu' => $request->input('ubuntu', 0),
                'mysql' => $request->input('mysql', 0),
                'sqlsever' => $request->input('sqlsever', 0),
                'mongo' => $request->input('mongo', 0),
                'mysqlworkbench' => $request->input('mysqlworkbench', 0),
                'postgreSQL' => $request->input('postgreSQL', 0),
                'error' => $request->input('error', 0),
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
            return redirect()->back()->with('success', 'Đăng nhập thành công!');
        }
        else{
            return redirect()->back()->with('error', 'Email hoặc mật khẩu không chính xác!');
        }

    }

   
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken(); 

        if ($request->ajax()) {
            return response()->json(['success' => true]);
        }

        return redirect()->route('home.index')->with('success', 'Đăng xuất thành công!');
    }
    public function changePassword(Request $request, $id)
    {
        if (Auth::id() != $id) {
            return redirect()->back()->withErrors(['error' => 'Unauthorized action.']);
        }
        $request->validate([
            'current_password' => 'required',
            'new_password' => 'required|min:8|confirmed',
        ]);

        $user = Auth::user();

        if (!$user instanceof User) {
            return redirect()->back()->withErrors(['error' => 'User not found.']);
        }

        if (!Hash::check($request->current_password, $user->password)) {
            return redirect()->back()->withErrors(['current_password' => 'Current password is incorrect.']);
        }

        $user->password = Hash::make($request->new_password);
        $user->save(); 

        return redirect()->back()->with('success', 'Password changed successfully.');
    }
}
