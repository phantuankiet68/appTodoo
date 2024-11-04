<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UpSkillHub.vn </title>
    <link rel="stylesheet" href="{{ asset('css/layout.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.5/gsap.min.js"></script>
    <script src="https://unpkg.com/imagesloaded@4.1.4/imagesloaded.pkgd.min.js"></script>
</head>
<body>
    <div class="webHome">
        <header> 
            <div class="header-aside">
                <div class="header-aside-list">
                    <a href="">Kết nối <i class="fa-solid fa-wifi"></i> | </a>
                    <a href="">Facebook <i class="fa-brands fa-facebook"></i> | </a> 
                    <a href="">Tiktok <i class="fa-brands fa-tiktok"></i></a> 
                </div>
                <div class="header-aside-list">
                    @if (Auth::check())
                        <a href="#" onclick="logout()" id="logoutLink"><i class="fa-regular fa-user"></i> Đăng xuất</a>
                    @else
                        <a href="#login" onclick="Login();"><i class="fa-regular fa-user"></i> Đăng nhập |</a>
                        <a href="#register" onclick="Register();"><i class="fa-regular fa-user"></i> Đăng ký</a>
                    @endif  
                </div>
            </div>
            <div class="header-home">
                <div class="header-top">
                    <h3>UpSkillHub</h3>
                </div>
                <nav>
                    <ul>
                        <li><a href="{{ route('home.index') }}" onclick="setActiveItem(1);" class="item"><i class="fa-solid fa-house"></i> Home</a></li>
                        <li><a href="{{ route('home.index') }}" onclick="setActiveItem(2);" class="item"><i class="fa-solid fa-address-card"></i> About Us</a></li>
                        <li><a href="{{ route('home.index') }}" onclick="setActiveItem(3);" class="item"><i class="fa-solid fa-gears"></i> Services</a></li>
                        <li><a href="{{ route('home.index') }}" onclick="setActiveItem(4);" class="item"><i class="fa-brands fa-product-hunt"></i> Product</a></li>
                        <li><a href="{{ route('home.index') }}" onclick="setActiveItem(5);" class="item"><i class="fa-solid fa-file-contract"></i> Contact Us</a></li>
                        @if (Auth::check())
                            <li><a href="" onclick="showDivMenu()"  class="item"><i class="fa-regular fa-user"></i> {{ Auth::user()->full_name }}</a></li>
                        @endif
                    </ul>
                </nav>
            </div>
        </header>
        <div class="container">
            
        </div>
    </div>
    <script src="{{ asset('js/layout.js') }}"></script>
    <div class="popup-modal" id="imagePopup" style="display: none;">
        <span class="close-popup">&times;</span>
        <img class="popup-content" id="popupImage" src="" alt="Popup Image">
    </div>
    <div class="modal" id="CreateLogin">
        <div class="ModelCreateLogin">
            <form id="contentForm" method="POST" action="{{ route('login') }}">
                @csrf
                <h2>Đăng nhập</h2>
                @if (session('success'))
                    <div id="login-alert" class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                <div class="form-input-category">
                    <input type="email" class="input-name" name="email" placeholder="Nhập email">
                </div>
                <div class="form-input-category">
                    <input type="password" class="input-name" name="password" placeholder="Nhập password">
                </div>
                <div class="form-input-category">
                    <a href="">Quên mật khẩu?</a>
                </div>
                <div class="form-btn">
                    <button type="submit">Đăng nhập</button>
                </div>
                <div class="BtnCloseCreate" onclick="closeCreateLogin()">
                    <p>X</p>
                </div>
            </form>
        </div>
    </div>

        <div class="modal" id="CreateRegister">
        <div class="ModelCreateRegister">
        <form id="contentForm" action="{{ route('register') }}" method="POST" onsubmit="return validateForm()">
            @csrf
            <h2>Đăng Ký</h2>
            <div class="form-input-category">
                <input type="text" class="input-name" name="full_name" id="full_name" placeholder="Nhập Họ và tên">
                <span class="input-error" id="full_name_error"></span>
            </div>
            <div class="form-input-category">
                <input type="email" class="input-name" name="email" id="email" placeholder="Nhập email">
                <span class="input-error" id="email_error"></span>
            </div>
            <div class="form-input-category">
                <input type="password" class="input-name" name="password" id="password" placeholder="Nhập password">
                <span class="input-error" id="password_error"></span>
            </div>
            <div class="form-input-category">
                <input type="password" class="input-name" name="password_confirmation" id="password_confirmation" placeholder="Nhập confirm password">
                <span class="input-error" id="password_confirmation_error"></span>
            </div>
            <div class="form-input-category">
                <input type="text" class="input-name" name="phone" id="phone" placeholder="Nhập phone">
                <span class="input-error" id="phone_error"></span>
            </div>
            <div class="form-input-category">
                <input type="text" class="input-name" name="address" id="address" placeholder="Nhập địa chỉ">
                <span class="input-error" id="address_error"></span>
            </div>
            <div class="form-input-category">
                <input type="text" class="input-name" name="gender" id="gender" placeholder="Nhập giới tính">
                <span class="input-error" id="gender_error"></span>
            </div>
            <input type="hidden" class="input-name" name="roles" value="0">
            <div class="form-btn">
                <button type="submit">Đăng Ký</button>
            </div>
            <div class="BtnCloseCreate" onclick="closeCreateRegister()">
                <p>X</p>
            </div>
        </form>
        </div>
    </div>
    
    @if (session('success'))
        <div id="popup-category" class="popup-category success">
            {{ session('success') }}
        </div>
    @endif
    @if (session('error'))
        <div id="popup-category" class="popup-category error">
            {{ session('error') }}
        </div>
    @endif

    @if ($errors->any())
        <div id="popup-category" class="popup-category error">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif


    <script>
        function logout() {
            fetch("{{ route('logout') }}", {
                method: "POST",
                headers: {
                    "Content-Type": "application/json",
                    "X-CSRF-TOKEN": "{{ csrf_token() }}"
                },
                body: JSON.stringify({})
            })
            .then(response => {
                if (response.ok) {
                    document.cookie.split(";").forEach(cookie => {
                        document.cookie = cookie
                            .replace(/^ +/, "")
                            .replace(/=.*/, "=;expires=" + new Date(0).toUTCString() + ";path=/");
                    });
                    window.location.href = "{{ route('home.index') }}";
                }
            })
            .catch(error => console.error("Logout failed:", error));
        }
    </script>
</body>
</html>