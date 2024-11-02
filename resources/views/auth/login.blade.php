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
        <!------------------ Login Box --------------------->
        <div class="box-login" id="login">
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="top-header">
                    <h3>Hello, Again</h3>
                    <small>We are happy to have you back.</small>
                </div>
                @if (session('success'))
                    <div id="login-alert" class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                @if (session('error'))
                    <div id="login-alert" class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                @endif
                <div class="input-group">
                    <div class="input-field">
                        <input type="text" class="input-box" id="logEmail" name="email" required>
                        <label for="logEmail">Email address</label>
                    </div>
                    <div class="input-field">
                        <input type="password" class="input-box" id="logPassword" name="password" required>
                        <label for="logPassword">Password</label>
                        <div class="eye-area">
                                <div class="eye-box" onclick="myLogPassword()">
                                    <i class="fa-regular fa-eye" id="eye"></i>
                                    <i class="fa-regular fa-eye-slash" id="eye-slash"></i>
                                </div>
                        </div>
                    </div>
                    <div class="remember">
                        <input type="checkbox" id="formCheck" class="check">
                        <label for="formCheck"> Remember Me</label>
                    </div>
                    <div class="input-field">
                        <input type="submit" class="input-submit" value="Sign In">
                    </div>
                    <div class="forgot">
                        <a href="#">Forgot password?</a>
                    </div>
                </div>
            </form>
        </div>
      
    <div class="switch login">
        <a href="{{ route('login') }}" class="login">Login</a>
        <a href="{{ route('register') }}" class="register">Register</a>
        <div class="btn-active" id="btn"></div>
    </div>

    </div>
 </div>
 <script>
    setTimeout(function() {
        let alert = document.getElementById('login-alert');
        if (alert) {
            alert.style.display = 'none';
        }
    }, 5000);
</script>
 <script src="{{ asset('js/login.js') }}"></script>
</body>
</html>