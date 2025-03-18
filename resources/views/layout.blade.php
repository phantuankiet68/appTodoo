<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <title>@yield('metaTitle', 'Default Title')</title>
    <meta name="description" content="{{ $metaDescription ?? 'Mô tả mặc định của trang' }}">
    <meta name="keywords" content="học tiếng Nhật, tự học tiếng Nhật, phương pháp học Nhật ngữ, lập trình, tiếng Anh">
    <meta property="og:title" content="{{ $metaTitle ?? 'Mô tả mặc định của trang'  }}">
    <meta property="og:description" content="{{ $metaDescription ?? 'Mô tả mặc định của trang' }}">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:image" content="{{ asset('images/default-og-image.jpg') }}"> -->
    <meta name="robots" content="index, follow">
    <!-- <link rel="stylesheet" href="{{ asset('css/layout.css') }}"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.5/gsap.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet"/>
    <link rel="stylesheet" href="{{ asset('css/layout-one.css') }}">
    <link rel="stylesheet" href="{{ asset('css/media-layout.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/images//logo-website.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/images//logo-website.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/images//logo-website.png') }}">
    </head>
<body>
    @php
        $locale = session()->get('locale', 'vi');
        App::setLocale($locale);
    @endphp
    <button id="scroll-top">
        <i class="fas fa-arrow-up"></i>
    </button>
    <header id="home">
        <div class="header-aside">
            <div class="header-aside-list hidden">
                <a href="">{{ __('messages.Connect') }} <i class="fa-solid fa-wifi"></i> | </a>
                <a href="">{{ __('messages.Facebook') }} <i class="fa-brands fa-facebook"></i> | </a> 
                <a href="">{{ __('messages.TikTok') }} <i class="fa-brands fa-tiktok"></i></a> 
            </div>
            <div class="header-aside-list">
                <a href="" class="header-aside-list-bell">
                    <div>
                        <i class="fa-solid fa-bell"></i>
                    </div> 
                    <div>
                        {{ __('messages.Notification') }}
                    </div>
                    <div class="header-aside-list-body-notification">
                        <div class="aside-box"></div>
                        <h3>{{ __('messages.New Notification') }}</h3>
                        <p>{{ __('messages.There are no new notifications at the moment! Please log in to see more details.') }}</p>
                    </div>
                </a>
                <span class="liner"></span>
                <a href="">
                    <div>
                        <i class="fa-solid fa-circle-exclamation"></i>
                    </div> 
                    <div>
                        {{ __('messages.Help') }}
                    </div>
                    <div class="header-aside-list-body-help">
                        <div class="aside-box"></div>
                        <h3>{{ __('messages.New Notification') }}</h3>
                        <p>{{ __('messages.There are no new notifications at the moment! Please log in to see more details.') }}</p>
                    </div>
                </a> 
                <span class="liner"></span>
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        @switch($locale)
                            @case('vi')
                            <img src="{{ asset('assets/images/vietnam.jpg') }}" width="25px"> Việt Nam
                            @break
                            @case('en')
                            <img src="{{ asset('assets/images/english.jpg') }}" width="25px"> English
                            @break
                            @default
                            <img src="{{ asset('assets/images/japan.jpg') }}" width="25px"> Japan
                        @endswitch
                        <span class="caret"></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ url()->current() }}?lang=vi">
                            <img src="{{ asset('assets/images/vietnam.jpg') }}" width="25px"> Việt Nam
                        </a>
                        <a class="dropdown-item" href="{{ url()->current() }}?lang=ja">
                            <img src="{{ asset('assets/images/japan.jpg') }}" width="25px"> Japan
                        </a>
                        <a class="dropdown-item" href="{{ url()->current() }}?lang=en">
                            <img src="{{ asset('assets/images/english.jpg') }}" width="25px"> English
                        </a>
                    </div>
                </li>   
                <span class="liner"></span>
                @if (Auth::check())
                    <a href="/" onclick="logout()" class="btn-login" id="logoutLink"><i class="fa-regular fa-user"></i> {{ __('messages.Logout') }}</a>
                @else
                    <a href="#login" class="btn-login" onclick="Login();"> {{ __('messages.Login') }}</a>
                    <a href="#register" class="btn-login" onclick="Register();"> {{ __('messages.Register') }}</a>
                @endif                 
            </div>
        </div>
        <nav>
            <li class="nav-item dropdown">
                <div class="txtBanner">
                    <div  class="txtBannerImage">
                        <img src="{{ asset('assets/images/logo-website.png') }}" alt="">
                    </div>
                    <h3>TRYSKILL</h3>
                </div>
            </li>
            <i class="fas fa-bars" id="ham-menu"></i>
            <ul id="nav-bar">
                <li>
                    <a href="/"><i class="fa-solid fa-house"></i> {{ __('messages.Home') }}</a>
                </li>
                <li>
                    <a href="{{ route('wikis.list') }}"><i class="fa-regular fa-address-card"></i> {{ __('messages.About') }}</a>
                </li>
                <li>
                    <a href="{{ route('wikis.list') }}"><i class="fa-regular fa-address-card"></i> {{ __('messages.Wiki') }}</a>
                </li>
                <li>
                    <a href="#service"> <i class="fa-brands fa-servicestack"></i> {{ __('messages.Service') }}</a>
                </li>
                <li>
                    <a href="#product"><i class="fa-brands fa-product-hunt"></i> {{ __('messages.Product') }}</a>
                </li>
                <li>
                    <a href="{{ route('documents.list') }}"><i class="fa-solid fa-file"></i> {{ __('messages.Document') }}</a>
                </li>
                <li>
                    <a href="{{ route('blogs.list') }}"><i class="fa-solid fa-blog"></i> {{ __('messages.Blog') }}</a>
                </li>
                <li>
                    <a href="#contact"><i class="fa-regular fa-address-book"></i> {{ __('messages.Contact') }}</a>
                </li>
                <li>
                    <a href="/v1/home"><i class="fa-brands fa-windows"></i> {{ __('messages.Dashboard') }}</a>
                </li>
            </ul>
        </nav>
    </header>
    <div class="app-wrapper">
        <div class="container-wrapper">
            <div class="main">
                @yield('content')
            </div>
        </div>
    </div>
    <section class="download-app" id="download-app">
        <footer class="footer">
            <div class="footer-container">
                <div class="footer-left">
                    <div class="footer-logo">
                        <img src="{{ asset('assets/images/logo-website.png') }}" alt="Real Homes Logo"> TRYSKILL
                    </div>
                    <div class="footer-description">
                    <p>{{ __('messages.🌏 Additionally, I provide English and Japanese learning resources to help you improve your language skills, so you can confidently communicate and work in an international environment.') }}</p>
                    </div>
                </div>
                <div class="stats-container">
                    <div class="stat">
                        <div class="icon">🚀</div>
                        <h2>000+</h2>
                        <p>{{ __('messages.Provided Services') }}</p>
                    </div>
                    <div class="stat">
                        <div class="icon">📍</div>
                        <h2>000+</h2>
                        <p>{{ __('messages.Location') }}</p>
                    </div>
                    <div class="stat">
                        <div class="icon">💳</div>
                        <h2>000+</h2>
                        <p>{{ __('messages.Successful Transactions') }}</p>
                    </div>
                    <div class="stat">
                        <div class="icon">📁</div>
                        <h2>000+</h2>
                        <p>{{ __('messages.Documents') }}</p>
                    </div>
                </div>
            </div>
            
            <!-- Phần hỗ trợ -->
            <div class="help-section">
            <div class="help-container">
                <div class="help-text">{{ __('messages.Need Help?') }}</div>
                    <div class="contact-options">
                        <a href="tel:1-800-555-4321" class="contact-phone">
                            <i class="fa-solid fa-phone-volume"></i>+ 0768173369
                        </a>
                        <a href="https://wa.me/18005554321" class="contact-whatsapp">
                            <i>zalo</i> 0768173369
                        </a>
                        <a href="mailto:tuankietity@gmail.com" class="contact-email">
                            <i class="fa-solid fa-envelope"></i> tuankietity@gmail.com
                        </a>
                        <a href="https://www.upskillhub.io.vn/" class="contact-email">
                            <i class="fas fa-globe"></i> https://www.upskillhub.io.vn/
                        </a>
                    </div>
                </div>
            </div>
            
            <!-- Phần copyright -->
            <div class="copyright">
                <div class="copyright-container">
                    <p>{{ __('messages.© 2023. All rights reserved. Designed by') }} <a href="#">{{ __('messages.Phan Tuan Kiet') }}</a></p>
                    
                    <!-- Social media icons -->
                    <div class="social-icons-footer">
                        <a href="#" class="facebook"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="twitter"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="instagram"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="youtube"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
            </div>
        </footer>
    </section>
    <script src="{{ asset('js/layout.js') }}"></script>
    <div class="modal" id="CreateLogin">
        <div class="ModelCreateLogin">
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="login">
                    <div class="title">{{ __('messages.Login') }}</div>
                    <div class="group">
                        <label for="email">Email</label>
                        <input type="email" name="email" placeholder="{{ __('messages.Enter email...') }}">
                    </div>
                    <div class="group">
                        <label for="password">Password</label>
                        <input type="password" id="password" name="password" placeholder="{{ __('messages.Enter password...') }}">
                        <span id="showPassword">
                            <i class="fa-solid fa-eye" id="toggle-password"></i>
                        </span>
                    </div>
                    <div class="recovery">
                        <a href="">{{ __('messages.Recover password') }}</a>
                    </div>
                    <div class="signIn">
                        <button type="submit">{{ __('messages.Login') }}</button>
                    </div>
                    <div class="register">
                     {{ __('messages.Not a member?') }} <a href="#register" class="btn-login" onclick="Register();">{{ __('messages.Register now') }}</a>
                    </div>

                </div>
            </form>
        </div>
    </div>
    {{-- <div class="modal" id="">
        <div class="ModelCreateRegister">
            <form action="{{ route('forgot.password') }}" method="POST">
                @csrf
                <div class="login">
                    <img src="{{ asset('assets/images/forgot.png') }}" width="80" class="image-forgot" alt="Exclamation mark icon indicating a warning or important notice" />
                    <h3 class="title">{{ __('messages.Forgot Password') }}</h3>
                    <p class="message">{{ __('messages.Enter your email and we will send you a link to reset your password.') }}</p>
                    <div class="group">
                        <input type="email" name="email" placeholder="{{ __('messages.Enter email...') }}" required>
                    </div>
                    <div class="signIn">
                        <button type="submit">{{ __('messages.Forgot Password') }}</button>
                    </div>
                </div>
            </form>
        </div>
    </div> --}}
    <!-- <div class="modal" id="CreateRegister"> -->
     <div class="modal" id="CreateRegister">
        <div class="ModelCreateRegister">
        <form  action="{{ route('register') }}" method="POST" onsubmit="return validateForm()">
            @csrf
            <div class="register">
                <div class="title">Đăng ký</div>
                <div class="group">
                    <label for="full_name">Họ và tên</label>
                    <input type="text" class="input-name" name="full_name" id="full_name" placeholder="Nhập Họ và tên">
                </div>
                <div class="group">
                    <label for="email">Email</label>
                    <input type="email" name="email" placeholder="Nhập email">
                </div>
                <div class="group">
                    <label for="password">Password</label>
                    <input type="text" id="password_register" name="password" readonly>
                </div>
                <div class="group">
                    <label for="password_confirmation">Confirmation Password</label>
                    <input type="text" class="input-name" name="password_confirmation" id="password_confirmation" readonly>
                </div>
                <div class="group">
                    <label for="phone">Phone</label>
                    <input type="text" class="input-name" name="phone" id="phone">
                </div>
                <div class="group">
                    <label for="address">Address</label>
                    <input type="text" class="input-name" name="address" id="address">
                </div>
                <div class="group">
                    <label for="gender">Gender</label>
                    <select name="gender">
                        <option value="0">Nam</option>
                        <option value="1">Nữ</option>
                    </select>
                </div>
                <input type="hidden" class="input-name" name="roles" value="0">
                <div class="signIn">
                    <button type="submit">Đăng Ký</button>
                </div>
            </div>
        </form>
        </div>
    </div>
    <div class="modal" id="loading">
        <div class="loading">
            <div class="ring"></div>
            <div class="ring"></div>
            <div class="ring"></div>
            <div class="wavy">
                <span style="--i:1;">L</span>
                <span style="--i:2;">o</span>
                <span style="--i:3;">a</span>
                <span style="--i:4;">d</span>
                <span style="--i:5;">i</span>
                <span style="--i:6;">n</span>
                <span style="--i:7;">g</span>
                <span style="--i:8;">.</span>
                <span style="--i:9;">.</span>
                <span style="--i:10;">.</span>
            </div>
        </div>
    </div>


    @if (session('success'))
    <div id="popup-success">
        <ul class="notifications">
            <li class="toast success hide">
                <div class="column">
                    <i class="fa-solid fa-circle-check"></i>
                    <span>Success:  {{ session('success') }}.</span>
                </div>
            </li>
        </ul>
    </div>
    @endif

    @if (session('error'))
    <div id="popup-error">
        <ul class="notifications">
            <li class="toast error hide">
                <div class="column">
                    <i class="fa-solid fa-circle-check"></i>
                    <span>Error:  {{ session('error') }}.</span>
                </div>
            </li>
        </ul>
    </div>
    @endif

    @if ($errors->any())
        <div id="popup-error">
            <ul class="notifications">
                @foreach ($errors->all() as $error)
                    <li class="toast error hide">
                        <div class="column">
                            <i class="fa-solid fa-circle-check"></i>
                            <span>Error:  {{ $error }}.</span>
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>
    @endif

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <script>
        
        function generatePassword(length = 20) {
            const charset = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_+";
            let password = "";
            for (let i = 0; i < length; i++) {
                password += charset.charAt(Math.floor(Math.random() * charset.length));
            }
            return password;
        }

        function autoFillPasswords() {
            if (window.location.hash === "#register") {
                const passwordField = document.getElementById("password_register");
                const confirmPasswordField = document.getElementById("password_confirmation");

                if (passwordField && confirmPasswordField) {
                    const generatedPassword = generatePassword();
                    passwordField.value = generatedPassword;
                    confirmPasswordField.value = generatedPassword;
                }
            }
        }

        window.addEventListener("load", autoFillPasswords);
        window.addEventListener("hashchange", autoFillPasswords);


        var swiper = new Swiper(".mySwiper", {
            spaceBetween: 30,
            grabCursor: true,
            autoplay: {
                delay: 2500,
                disableOnInteraction: false,
                pauseOnMouseEnter: true,
            },
            slidesPerGroup: 1,
            loop: true,
            loopFillGroupWithBlank: true,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            breakpoints: {

                1025: { 
                    slidesPerView: 4,
                },
                0: {
                    slidesPerView: 2,
                }
            }
        });
        var indexValue = 1;
        showImg(indexValue);


        setInterval(function() {
        side_slide(1);
        }, 10000);

        function btm_slide(e) {
        showImg(indexValue = e);
        }

        function side_slide(e) {
        showImg(indexValue += e);
        }

        function showImg(e) {
        var i;
        const img = document.querySelectorAll('.banner-left .content .images img');
        const slider = document.querySelectorAll('.btm-slides span');

        if (e > img.length) {
            indexValue = 1;
        }
        if (e < 1) {
            indexValue = img.length;
        }

        for (i = 0; i < img.length; i++) {
            img[i].style.display = "none";
        }

        for (i = 0; i < slider.length; i++) {
            slider[i].style.background = "rgba(255,255,255,0.1)";
        }

        img[indexValue - 1].style.display = "block";
        slider[indexValue - 1].style.background = "white";
        }

        document.addEventListener("DOMContentLoaded", function () {
            const buttons = document.querySelectorAll(".service-right-slide button");
            const services = document.querySelectorAll(".service-left-body");

            buttons.forEach(button => {
                button.addEventListener("click", function () {
                    // Lấy target từ data-target
                    const target = this.getAttribute("data-target");

                    // Ẩn tất cả các phần tử service-left-body
                    services.forEach(service => {
                        service.classList.remove("active");
                    });

                    // Hiển thị phần tử tương ứng
                    const activeService = document.getElementById(target);
                    if (activeService) {
                        activeService.classList.add("active");
                    }
                });
            });
        });
       

        //window.addEventListener('load', function() {
           //document.getElementById('loading').style.display = 'flex';

           // setTimeout(function() {
              //  document.getElementById('loading').style.display = 'none';
            //}, 5000);
        //});
        document.getElementById('toggle-password').addEventListener('click', function () {
            const passwordInput = document.getElementById('password');
            const toggleIcon = this;

            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                toggleIcon.classList.remove('fa-eye');
                toggleIcon.classList.add('fa-eye-slash');
            } else {
                passwordInput.type = 'password';
                toggleIcon.classList.remove('fa-eye-slash');
                toggleIcon.classList.add('fa-eye');
            }
        });

    document.querySelectorAll('.accordion-header').forEach(header => {
        header.addEventListener('click', () => {
            const accordionItem = header.parentElement;
        
            document.querySelectorAll('.accordion-item').forEach(item => {
                if (item !== accordionItem) {
                    item.classList.remove('active');
                }
            });

            accordionItem.classList.toggle('active');
        });
    });
        document.addEventListener('DOMContentLoaded', function() {
            const popup = document.querySelector('#popup-success');
            if (popup) {
                popup.style.display = 'flex';
                setTimeout(() => {
                    popup.style.display = 'none';
                }, 6000);
            }
        });

        document.addEventListener('DOMContentLoaded', function() {
            const popup = document.querySelector('#popup-error');
            if (popup) {
                popup.style.display = 'flex';
                setTimeout(() => {
                    popup.style.display = 'none';
                }, 6000);
            }
        });

        let hamMenuIcon = document.getElementById("ham-menu");
        let navBar = document.getElementById("nav-bar");
        let navLinks = navBar.querySelectorAll("li");
        let scrollTopBtn = document.getElementById("scroll-top");

        hamMenuIcon.addEventListener("click", () => {
            navBar.classList.toggle("active");
            hamMenuIcon.classList.toggle("fa-times");
        });
        navLinks.forEach((navLinks) => {
            navLinks.addEventListener("click", () => {
                navBar.classList.remove("active");
                hamMenuIcon.classList.toggle("fa-times");
            });
        });

        let header = document.querySelector("header");
        window.onscroll = () => {
        let pos = document.documentElement.scrollTop;
        if (pos > 0) {
            header.classList.add("sticky");
        } else {
            header.classList.remove("sticky");
        }
        if (pos > 300) {
            scrollTopBtn.style.display = "grid";
        } else {
            scrollTopBtn.style.display = "none";
        }

        scrollTopBtn.addEventListener("click", () => {
            document.documentElement.scrollTop = 0;
        });
        };

        document.addEventListener("DOMContentLoaded", function() {
            const menuButton = document.getElementById("ham-menu");
            const navBar = document.getElementById("nav-bar");

            menuButton.addEventListener("click", function() {
                navBar.classList.toggle("on");
            });
        });

        function logout() {
            const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

            fetch("{{ route('logout') }}", {
                method: "POST",
                headers: {
                    "Content-Type": "application/json",
                    "X-CSRF-TOKEN": csrfToken
                },
            })
            .then(response => {
                if (response.ok) {
                    return response.json(); // Trích xuất JSON từ phản hồi
                } else {
                    throw new Error('Logout failed');
                }
            })
            .then(data => {
                if (data.success) {
                    // Xóa cookie và điều hướng về trang chủ
                    document.cookie.split(";").forEach(cookie => {
                        document.cookie = cookie
                            .replace(/^ +/, "")
                            .replace(/=.*/, "=;expires=" + new Date(0).toUTCString() + ";path=/");
                    });

                    window.location.href = "{{ route('home.index', ['locale' => session('locale', 'vi')]) }}";

                }
            })
            .catch(error => console.error("Logout failed:", error));
        }

    </script>
    <script src="{{ asset('js/layout.js') }}"></script>
</body>
</html>