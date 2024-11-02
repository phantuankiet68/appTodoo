<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Login | Ludiflex</title>
</head>
<body>
    
 <div class="container">
    <div class="box">
     <!-------------------- Register --------------------------->
     <div class="box-register" id="register">
        <form action="{{ route('register') }}" method="POST">
        @csrf
            <div class="top-header">
                <h3>Sign Up, Now</h3>
                <small>We are happy to have you with us.</small>
            </div>
            <!-- Hiển thị thông báo thành công -->
            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            <!-- Hiển thị lỗi -->
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="input-group">
                <div class="input-field">
                    <input type="text" class="input-box" id="regUser" name="full_name" required>
                    <label for="regUser">Username</label>
                </div>
                <div class="input-field">
                    <input type="email" class="input-box" id="regEmail" name="email" required>
                    <label for="regEmail">Email address</label>
                </div>
                <div class="input-field">
                    <input type="password" class="input-box" id="regPassword" name="password" required>
                    <label for="regPassword">Password</label>
                    <div class="eye-area">
                            <div class="eye-box" onclick="myRegPassword()">
                                <i class="fa-regular fa-eye" id="eye-2"></i>
                                <i class="fa-regular fa-eye-slash" id="eye-slash-2"></i>
                            </div>
                    </div>
                </div>
                <div class="input-field">
                    <input type="text" class="input-box" id="regPhone" name="phone" required>
                    <label for="regPhone">phone</label>
                </div>
                <div class="input-field">
                    <input type="text" class="input-box" id="regRole" name="roles" required>
                    <label for="regRole">Role</label>
                </div>
                <div class="input-field">
                   <select name="gender" id="gender">
                        <option value="0">male</option>
                        <option value="1">Fe male</option>
                   </select>
                </div>
                <input type="hidden" id="" name="date_of_birth" value="2024-01-01"/>
                <input type="hidden" id="" name="link_facebook" value="Please enter the information."/>
                <input type="hidden" id="" name="link_instagram" value="Please enter the information."/>
                <input type="hidden" id="" name="link_linkin" value="Please enter the information."/>
                <input type="hidden" id="" name="link_link" value="Please enter the information."/>
                <input type="hidden" id="" name="address" value="Please enter the information."/>
                <input type="hidden" id="" name="description" value="Please enter the information."/>
                <div class="input-field">
                    <input type="submit" class="input-submit" value="Sign In">
                </div>
            </div>
        </form>
    </div>

    <!------------------------ Switch -------------------------->
      
    <div class="switch">
        <a href="{{ route('login') }}" class="login">Login</a>
        <a href="{{ route('register') }}" class="register">Register</a>
        <div class="btn-active" id="btn"></div>
    </div>

    </div>
 </div>

 <script src="{{ asset('js/login.js') }}"></script>
</body>
</html>