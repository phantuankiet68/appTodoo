<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>"TriSkill" tượng trưng cho ba kỹ năng: Lập trình, tiếng Anh và tiếng Nhật.</title>
    <!-- <link rel="stylesheet" href="{{ asset('css/layout.css') }}"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.5/gsap.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet" />
    {{-- <link rel="stylesheet" href="{{ asset('css/layout-one.css') }}"> --}}
    <link rel="stylesheet" href="{{ asset('css/media-layout.css') }}">
    <link rel="stylesheet" href="{{ asset('css/local.css') }}">
    <link rel="stylesheet" href="{{ asset('css/dark.css') }}">
    <link href="https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/images//logo-website.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/images//logo-website.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/images//logo-website.png') }}">
</head>

<body>
    @php
        $locale = session()->get('locale', 'vi');
        App::setLocale($locale);
    @endphp
    <div class="side-bar collapse">
        <div class="logo-name-wrapper">
            <div class="logo-name">
                <img src="{{ asset('assets/images/logo-website.png') }}"     width="40" class="logo" alt="logo app" srcset="" />
                <span class="logo-name__name">TRYSKILL</span>
            </div>
            <button class="logo-name__button">
                <i class="bx bx-arrow-from-left logo-name__icon" id="logo-name__icon"></i>
            </button>
        </div>
        <ul class="features-list">
            <li class="features-item inbox active">
                <i class="bx bxs-home-alt features-item-icon inbox-icon"><span class="status"></span></i>
                <i class="fa-solid fa-house"></i>
                <span class="features-item-text">Home</span>
                <span class="tooltip">Home</span>
            </li>
            <li class="features-item spam">
                <i class="bx bxs-calendar-check features-item-icon"></i>
                <span class="features-item-text">Calendar</span>
                <span class="inbox-number blue">99</span>
                <span class="tooltip">Calendar</span>
            </li>
            <li class="features-item spam">
                <i class="bx bx-news features-item-icon"></i>
                <span class="features-item-text">News</span>
                <span class="inbox-number red">99</span>
                <span class="tooltip">News</span>
            </li>
            <li class="features-item spam">
                <i class="bx bxs-chat features-item-icon"></i>
                <span class="features-item-text">Chat</span>
                <span class="inbox-number yellow">99</span>
                <span class="tooltip">Chat</span>
            </li>
            <li class="features-item draft">
                <i class="bx bx-file-blank features-item-icon"></i>
                <span class="features-item-text">Project</span>
                <span class="inbox-number organ">99</span>
                <span class="tooltip">Project</span>
            </li>

            <li class="features-item star">
                <i class="bx bx-star features-item-icon"></i>
                <span class="features-item-text">Task</span>
                <span class="inbox-number green">99</span>
                <span class="tooltip">Task</span>
            </li>
            <li class="features-item sent">
                <i class="bx bx-send features-item-icon"></i>
                <span class="features-item-text">Sent</span>
                <span class="inbox-number purple">99</span>
                <span class="tooltip">Sent</span>
            </li>
            <li class="features-item trash">
                <i class="bx bxs-bar-chart-alt-2 features-item-icon"></i>
                <span class="features-item-text">Expense</span>
                <span class="inbox-number light-blue">99</span>
                <span class="tooltip">Expense</span>
            </li>
        </ul>

        <ul class="category-list">
            <li class="features-item spam">
                <i class="bx bxs-add-to-queue features-item-icon"></i>
                <span class="features-item-text">English</span>
                <span class="inbox-number blue">99</span>
                <span class="tooltip">English</span>
            </li>
            <li class="features-item spam">
                <i class="bx bxs-add-to-queue features-item-icon"></i>
                <span class="features-item-text">Japanese</span>
                <span class="inbox-number blue">99</span>
                <span class="tooltip">Japanese</span>
            </li>
            <li class="features-item spam">
                <i class="bx bxs-add-to-queue features-item-icon"></i>
                <span class="features-item-text">Question</span>
                <span class="inbox-number blue">99</span>
                <span class="tooltip">Question</span>
            </li>
            <li class="features-item spam">
                <i class="bx bx-edit features-item-icon"></i>
                <span class="features-item-text">Note</span>
                <span class="inbox-number blue">99</span>
                <span class="tooltip">Note</span>
            </li>
        </ul>

        <ul class="chat-list">
            <li class="features-item spam">
                <i class="bx bx-code-block features-item-icon"></i>
                <span class="features-item-text">Code</span>
                <span class="inbox-number blue">99</span>
                <span class="tooltip">Code</span>
            </li>
            <li class="features-item spam">
                <i class="bx bx-code-block features-item-icon"></i>
                <span class="features-item-text">Component</span>
                <span class="inbox-number blue">99</span>
                <span class="tooltip">Component</span>
            </li>
            <li class="features-item spam">
                <i class="bx bx-alarm-exclamation features-item-icon"></i>
                <span class="features-item-text">Error</span>
                <span class="inbox-number blue">99</span>
                <span class="tooltip">Error</span>
            </li>
            <li class="features-item spam">
                <i class="bx bxs-folder-minus features-item-icon"></i>
                <span class="features-item-text">Remote</span>
                <span class="inbox-number blue">99</span>
                <span class="tooltip">Remote</span>
            </li>
        </ul>
    </div>
    <div class="container collapse">
        <header id="home">
            <div class="navbar">
                <div class="navbar-left">
                    <div class="menu-item">
                        <div class="toggle-container menu-active">
                            <input type="checkbox" id="toggle" class="toggle">
                            <label for="toggle" class="toggle-label">
                              <span class="light-icon">&#9728;</span> <!-- Biểu tượng mặt trời -->
                              <span class="dark-icon">&#9790;</span> <!-- Biểu tượng mặt trăng -->
                            </label>
                          </div>
                    </div>
                    <div class="menu-item dropdown menu-active">
                        <i class="fas fa-th-large">
                        </i>
                        <span>
                            Mega Menu
                        </span>
                    </div>
                    <div class="menu-item dropdown menu-active">
                        <i class="fas fa-cog">
                        </i>
                        <span>
                            Settings
                        </span>
                    </div>
                    <div class="menu-item dropdown menu-active">
                        <i class="fas fa-project-diagram">
                        </i>
                        <span>
                            Projects
                        </span>
                    </div>
                </div>
                <div class="navbar-right">
                    <div class="menu-item nav-notify">
                        <i class="fas fa-th"></i>
                        <span class="badge-green">
                            6
                        </span>
                    </div>
                    <div class="menu-item nav-notify">
                        <i class="fas fa-bell">
                        </i>
                        <span class="badge">
                            5
                        </span>
                    </div>
                    <div class="menu-item nav-notify">
                        <i class="fas fa-list-check"></i>
                        <span class="badge-organ">
                            6
                        </span>
                    </div>
                    <div class="menu-item">
                        <nav>
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
                                    <a class="dropdown-item" href="{{ url('/vi') }}">
                                        <img src="{{ asset('assets/images/vietnam.jpg') }}" width="25px"> Việt Nam
                                    </a>
                                    <a class="dropdown-item" href="{{ url('/ja') }}">
                                        <img src="{{ asset('assets/images/japan.jpg') }}" width="25px"> Japan
                                    </a>
                                    <a class="dropdown-item" href="{{ url('/en') }}">
                                        <img src="{{ asset('assets/images/english.jpg') }}" width="25px"> English
                                    </a>
                                </div>
                            </li>
                        </nav>
                    </div>
                    @if (Auth::check())
                        <div class="profile">
                            <img alt="Profile picture" height="30"
                                src="https://storage.googleapis.com/a1aa/image/linx8Jhlu7pJJJxVczUlT2G9BZGYAgLDXEm8eqdl3Iw0eEDUA.jpg"
                                width="30" />
                            <span>
                                Alina Mclourd
                            </span>
                            <i class="fas fa-light fa-caret-down"></i>
                            <div class="sub-profile">
                                <div class="d-flex flex-direction gap-10">
                                    <a href="" class="d-flex align-items gap-10"><i class="fa-sharp fas fa-user-secret"></i>Profile</a>
                                    <a href="" class="d-flex align-items gap-10"><i class="fa-solid fa-layer-group"></i> Quản lí</a>
                                    <a href="" class="d-flex align-items gap-10" ><i class="fa-solid fa-gear"></i>Setting</a>
                                    <a href="/"  onclick="logout()" class="d-flex align-items gap-10"><i class="bx bx-log-out" ></i>Logout</a>
                                </div>
                            </div>
                        </div>
                    @else
                        <a href="#login" class="btn-login" onclick="Login();"><i class="fa-regular fa-user"></i> {{ __('messages.Login') }}</a>
                        <a href="#register" class="btn-login" onclick="Register();"><i class="fa-regular fa-user"></i> {{ __('messages.Register') }}</a>
                    @endif  
                </div>
            </div>
        </header>
    </div>

    <script src="{{ asset('js/layout.js') }}"></script>
    <div class="modal" id="CreateLogin">
        <div class="ModelCreateLogin">
            <form method="POST" action="{{ url(app()->getLocale() . '/login') }}">
                @csrf
                <div class="login">
                    <div class="title">{{ __('messages.Login') }}</div>
                    <div class="group">
                        <input type="email" name="email" placeholder="{{ __('messages.Enter email...') }}">
                    </div>
                    <div class="group">
                        <input type="password" id="password" name="password"
                            placeholder="{{ __('messages.Enter password...') }}">
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
                    {{-- <div class="or">
                        {{ __('messages.Or continue with') }}
                    </div>
                    <div class="list">
                        <a href="" class="item">
                            <img src="https://cdn1.iconfinder.com/data/icons/google-s-logo/150/Google_Icons-09-512.png" alt="">
                        </a>
                        <a href="" class="item">
                            <img src="https://museumandgallery.org/wp-content/uploads/2020/03/Facebook-Icon-Facebook-Logo-Social-Media-Fb-Logo-Facebook-Logo-PNG-and-Vector-with-Transparent-Background-for-Free-Download.png" alt="">
                        </a>
                    </div> --}}
                    <div class="register">
                        {{ __('messages.Not a member?') }} <a href="#register" class="btn-login-box" onclick="Register();">{{ __('messages.Register now') }}</a>
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
            <form action="{{ route('register') }}" method="POST" onsubmit="return validateForm()">
                @csrf
                <div class="login">
                    <div class="title">Đăng ký!</div>
                    <div class="des">
                        We are glad to have you back! <br> beeb missed!
                    </div>
                    <div class="group">
                        <input type="text" class="input-name" name="full_name" id="full_name"
                            placeholder="Nhập Họ và tên">
                    </div>
                    <div class="group">
                        <input type="email" name="email" placeholder="Nhập email">
                    </div>
                    <div class="group">
                        <input type="password" name="password" placeholder="Nhập password">
                    </div>
                    <div class="group">
                        <input type="password" class="input-name" name="password_confirmation"
                            id="password_confirmation" placeholder="Nhập confirm password">
                        <span class="input-error" id="password_confirmation_error"></span>
                    </div>
                    <div class="group">
                        <input type="text" class="input-name" name="phone" id="phone"
                            placeholder="Nhập phone">
                    </div>
                    <div class="group">
                        <input type="text" class="input-name" name="address" id="address"
                            placeholder="Nhập địa chỉ">
                    </div>
                    <div class="group">
                        <input type="text" class="input-name" name="gender" id="gender"
                            placeholder="Nhập giới tính">
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
                        <span>Success: {{ session('success') }}.</span>
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
                        <span>Error: {{ session('error') }}.</span>
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
                            <span>Error: {{ $error }}.</span>
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>
    @endif

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <script>
    document.addEventListener('DOMContentLoaded', function() {
        const toggle = document.getElementById('toggle');
        const savedMode = localStorage.getItem('theme');

        // Set initial mode based on localStorage
        if (savedMode) {
            document.body.classList.add(savedMode);
            toggle.checked = savedMode === 'dark-mode';
        } else {
            document.body.classList.add('light-mode'); // Default mode
        }

        toggle.addEventListener('change', function() {
            if (this.checked) {
                document.body.classList.add('dark-mode');
                document.body.classList.remove('light-mode');
                localStorage.setItem('theme', 'dark-mode');
            } else {
                document.body.classList.add('light-mode');
                document.body.classList.remove('dark-mode');
                localStorage.setItem('theme', 'light-mode');
            }
        });
    });

        // window.addEventListener('load', function() {
        //     document.getElementById('loading').style.display = 'flex';

        //     setTimeout(function() {
        //     document.getElementById('loading').style.display = 'none';
        //     }, 5000);
        // });
        let sideBar = document.querySelector('.side-bar');
        let arrowCollapse = document.querySelector('#logo-name__icon');
        const Container = document.querySelector('.container');
        sideBar.onclick = () => {
            sideBar.classList.toggle('collapse');
            Container.classList.toggle('collapse');
            arrowCollapse.classList.toggle('collapse');
            if (arrowCollapse.classList.contains('collapse')) {
                arrowCollapse.classList ='bx bx-arrow-from-right logo-name__icon collapse';
            } else {
                arrowCollapse.classList = 'bx bx-arrow-from-left logo-name__icon';
            }
        };
        document.addEventListener('DOMContentLoaded', function() {
            const profile = document.querySelector('.profile');
            const subProfile = document.querySelector('.sub-profile');

            profile.addEventListener('click', function(event) {
                subProfile.style.display = subProfile.style.display === 'block' ? 'none' : 'block';
                event.stopPropagation(); // Prevents the click event from propagating to the document
            });

            document.addEventListener('click', function() {
                subProfile.style.display = 'none';
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
                    return response.json();
                } else {
                    throw new Error('Logout failed');
                }
            })
            .then(data => {
                if (data.success) {
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
