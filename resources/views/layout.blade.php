<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>"TriSkill" tượng trưng cho ba kỹ năng: Lập trình, tiếng Anh và tiếng Nhật.</title>
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
    <link rel="manifest" href="{{ asset('site.webmanifest') }}">
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
                    <a href="#home"><i class="fa-solid fa-house"></i> {{ __('messages.Home') }}</a>
                </li>
                <li>
                    <a href="#about"><i class="fa-regular fa-address-card"></i> {{ __('messages.About') }}</a>
                </li>
                <li>
                    <a href="#service"> <i class="fa-brands fa-servicestack"></i> {{ __('messages.Service') }}</a>
                </li>
                <li>
                    <a href="#product"><i class="fa-brands fa-product-hunt"></i> {{ __('messages.Product') }}</a>
                </li>
                <li>
                    <a href="#download-app"><i class="fa-solid fa-file"></i> {{ __('messages.Document') }}</a>
                </li>
                <li>
                    <a href="#download-app"><i class="fa-solid fa-blog"></i> {{ __('messages.Blog') }}</a>
                </li>
                <li>
                    <a href="#contact"><i class="fa-regular fa-address-book"></i> {{ __('messages.Contact') }}</a>
                </li>
                <li>
                    <a href="#contact"><i class="fa-brands fa-windows"></i> {{ __('messages.Dashboard') }}</a>
                </li>
            </ul>
        </nav>
    </header>
    <div class="app-wrapper">
        <div class="container-wrapper">
            <div class="main">
                <div class="hero">
                    <div class="page-left-item">
                        <div class="banner">
                            <div class="banner-left">
                                <div class="content">
                                    <div class="banner-title">
                                        <h1>TRYSKILL</h1>
                                        <p>{{ __('messages.🌟 Personal Website – A Place to Mark the Journey & Develop Skills 🌟') }}</p>
                                        <p>{{ __('messages.💻 If you are passionate about technology, want to learn how to write efficient code, or explore the world of programming from scratch, then this is the place for you!') }}</p>
                                        <p>{{ __('messages.🌏 Additionally, I provide English and Japanese learning resources to help you improve your language skills, so you can confidently communicate and work in an international environment.') }}</p>
                                        <p>{{ __('messages.📌 Let learn, grow, and conquer new challenges together! Are you ready? 😃') }}</p>
                                    </div>
                                    <div class="images">
                                        <img src="{{asset('assets/images/w-3.jpg')}}">
                                        <img src="{{asset('assets/images/w-2.jpg')}}">
                                        <img src="{{asset('assets/images/w-1.jpg')}}">
                                    </div>
                                    <div class="btm-slides">
                                        <span onclick="btm_slide(1)"></span>
                                        <span onclick="btm_slide(2)"></span>
                                        <span onclick="btm_slide(3)"></span>
                                    </div>
                                    <div class="sliders left" onclick="side_slide(-1)">
                                        <span class="fas fa-angle-left"></span>
                                    </div>
                                    <div class="sliders right" onclick="side_slide(1)">
                                        <span class="fas fa-angle-right"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="banner-right">
                                <div class="banner-right-top">
                                    <div class="banner-right-top-img">
                                        <img src="{{asset('assets/images/w-4.jpg')}}" />
                                    </div>
                                </div>
                                <div class="banner-right-body">
                                    <div class="banner-right-body-img">
                                        <img src="{{asset('assets/images/w-5.jpg')}}" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <section>
                <div class="row">
                    <div class="column">
                    <div class="card">
                        <div class="icon">
                        <i class="fa-solid fa-user"></i>
                        </div>
                        <h3>{{ __('messages.SEO Consultancy') }}</h3>
                        <p>{{ __('messages.Help optimize websites, improve search rankings, and achieve sustainable revenue growth') }}</p>
                    </div>
                    </div>
                    <div class="column">
                    <div class="card">
                        <div class="icon">
                        <i class="fa-solid fa-shield-halved"></i>
                        </div>
                        <h3>{{ __('messages.Competitor Analysis') }}</h3>
                        <p>{{ __('messages.Help you understand competitors, identify opportunities, and develop optimal strategies to excel in the market') }}</p>
                    </div>
                    </div>
                    <div class="column">
                    <div class="card">
                        <div class="icon">
                        <i class="fa-solid fa-headset"></i>
                        </div>
                        <h3>{{ __('messages.Marketing') }}</h3>
                        <p>{{ __('messages.Help build a strong brand, increase engagement, and attract customers through social media platforms') }}</p>
                    </div>
                    </div>
                    <div class="column">
                    <div class="card">
                        <div class="icon">
                        <i class="fa-solid fa-headset"></i>
                        </div>
                        <h3>{{ __('messages.Web Development') }}</h3>
                        <p>{{ __('messages.Provide professional website design and development solutions, optimizing user experience') }}</p>
                    </div>
                    </div>
                </div>
                </section>
                <section class="about-container">
                    <div class="layout-tile">
                        <h3>{{ __('messages.About') }}</h3>
                        <div class="layout-tile-btn">
                            <a href="">{{ __('messages.More here') }} <i class="fa-solid fa-circle-right"></i></a>
                        </div>
                    </div>
                    <div class="about">
                        <div class="about-left">
                            <div class="about-left-img">
                                <img src="{{asset('assets/images/product-home.png')}}" />
                            </div>
                        </div>
                        <div class="about-right">
                            <h1>{{ __('messages.We help you better understand AI, coding, English, and Japanese') }}</h1>
                            <div class="about-right-content">
                                <p>{{ __('messages.AI (Artificial Intelligence): Helps customers understand how AI works, its real-world applications, and how it can benefit their work or business.') }}</p>
                                <p>{{ __('messages.Coding: Supports customers in learning or improving their programming skills, from basic languages to advanced techniques tailored to real-world needs.') }}</p>
                                <p>{{ __('messages.English: Provides tools and methods to improve communication, writing, and comprehension skills in English, from basic to advanced levels.') }}</p>
                                <p>{{ __('messages.Japanese: Provides training or support in learning Japanese, from language acquisition to understanding culture, and applying it to work and daily communication.') }}</p>    
                                <p><i>{{ __('messages.We aim to support customers in enhancing their knowledge and skills in four key areas: AI, coding, English, and Japanese, to help them develop personally, expand career opportunities, and achieve sustainable success in the era of technology and integration.') }}</i></p>
                            </div>
                            <div class="about-right-footer">
                                <div class="about-right-footer-box">
                                    <span class="about-icon"><i class="fa fa-users"></i></span>
                                    <div>
                                        <h4>{{ __('messages.Dedicated Team') }}</h4>
                                        <span>{{ __('messages.Confirmation') }}</span>
                                    </div>
                                </div>
                                <div class="about-right-footer-box">
                                    <span class="about-icon"><i class="fa fa-phone"></i></span>
                                    <div>
                                        <h4>{{ __('messages.24/7 Available') }}</h4>
                                        <span>{{ __('messages.Confirmation') }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section id="about">
                    <div class="layout-tile">
                        <h3>{{ __('messages.New Interface') }}</h3>
                        <div class="layout-tile-btn">
                            <a href="">{{ __('messages.More here') }} <i class="fa-solid fa-circle-right"></i></a>
                        </div>
                    </div>
                    <div class="wiki-body">
                        <div class="swiper mySwiper container">
                            <div class="swiper-wrapper content">
                                @foreach($interfaces as $item)
                                <div class="swiper-slide card card-interface" onclick="showInterface('{{ $item->id }}')">
                                    <img src="{{ asset($item->image_path) }}" alt="">
                                    <span>{{ $item->title }}</span>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </section>
                <section id="about">
                    <div class="layout-tile">
                        <h3>{{ __('messages.Service') }}</h3>
                        <div class="layout-tile-btn">
                            <a href="">{{ __('messages.More here') }} <i class="fa-solid fa-circle-right"></i></a>
                        </div>
                    </div>
                    <div class="service">
                        <div class="service-right">
                            <div class="service-right-slide">
                                <button data-target="service-1"><i class="fa fa-bars text-primary me-3"></i>{{ __('messages.Self-Introduction') }}</button>
                                <button data-target="service-2"><i class="fa fa-bars text-primary me-3"></i>{{ __('messages.Front-end Development') }}</button>
                                <button data-target="service-3"><i class="fa fa-bars text-primary me-3"></i>{{ __('messages.Back-end Development') }}</button>
                                <button data-target="service-4"><i class="fa fa-bars text-primary me-3"></i>{{ __('messages.Full-task Developer') }}</button>
                                <button data-target="service-5"><i class="fa fa-bars text-primary me-3"></i>{{ __('messages.New Research') }}</button>
                                <button data-target="service-6"><i class="fa fa-bars text-primary me-3"></i>{{ __('messages.Remote Service') }}</button>
                            </div>
                        </div>
                        <div class="service-left">
                            <div class="service-left-body active" id="service-1">
                                <div class="service-left-body-img">
                                    <img src="{{asset('assets/images/team1.jpg')}}" />
                                </div>
                                <div class="service-left-body-content">
                                    <h3>{{ __('messages.3 years of experience working as a web developer') }}</h3>
                                    <p>{{ __('messages.My name is Phan Tuấn Kiệt. I am from Bến Tre and currently living and working in Ho Chi Minh City.') }}</p>
                                    <p class="text-red">{{ __('messages.Graduated from Ho Chi Minh City University of Technology.') }}</p>
                                    <p>- {{ __('messages.I have over 3 years of professional experience in web development.') }}</p>
                                    <p>- {{ __('messages.I have over 1 year of experience working as a front-end developer at a company specializing in outsourcing.') }}</p>
                                    <p>- {{ __('messages.And 2 years working as an in-house developer. In the role of a full-task developer, I have successfully contributed to projects such as GrownUpWord, VJP-Connect, Plain-International, and several internal company systems.') }}</p>
                                    <p>- {{ __('messages.Currently, I am working for an international company, where I have had the opportunity to participate in various diverse and challenging projects.') }}</p>
                                    <p>* {{ __('messages.The ability to adapt to different work environments and contribute effectively to both domestic and international teams is a key factor that enables me to deliver high-quality solutions.') }}</p>
                                </div>
                            </div>
                            <div class="service-left-body" id="service-2">
                                <div class="service-left-body-img">
                                    <img src="{{asset('assets/images/service1.png')}}" />
                                </div>
                                <div class="service-left-body-content">
                                    <h3>{{ __('messages.As a User Interface Developer') }}</h3>
                                    <p>{{ __('messages.I specialize in creating intuitive, engaging, and user-friendly web interfaces that provide a seamless experience.') }}</p> 
                                    <p>- {{ __('messages.My role involves translating design ideas into functional and interactive websites using modern web technologies such as HTML5, CSS3, and JavaScript, along with frameworks like React, Angular, or Vue.js.') }}</p>
                                    <p>- {{ __('messages.I have the ability to collaborate closely with UX designers, ensuring cross-browser compatibility and optimizing performance across various devices.') }}</p>
                                    <p>- {{ __('messages.I have experience working with UX/UI design tools like Figma and Adobe XD to transform wireframe and prototype designs into functional interfaces that deliver value to users.') }}</p> 
                                    <p>* {{ __('messages.Additionally, I am proficient in handling Excel files for data management, supporting project planning, and analysis. However, I use Git and Backlog to manage versions and track project progress more effectively.') }}</p>
                                </div>
                            </div>
                            <div class="service-left-body" id="service-3">
                                <div class="service-left-body-img">
                                    <img src="{{asset('assets/images/service2.png')}}" />
                                </div>
                                <div class="service-left-body-content">
                                    <h3>{{ __('messages.Back-end Developer') }}</h3>
                                    <p>{{ __('messages.I specialize in building and maintaining server-side logic, powering web applications.') }}</p> 
                                    <p>- {{ __('messages.My expertise lies in designing scalable and secure systems, developing APIs, and managing databases to ensure seamless integration and functionality across multiple platforms.') }}</p>
                                    <p>- {{ __('messages.In my role, I collaborate closely with front-end developers, UX designers, and other stakeholders to create end-to-end solutions that meet the needs of both users and businesses.') }}</p>
                                    <p>- {{ __('messages.I have extensive experience with modern back-end technologies such as Node.js, Python (Django/Flask), CSharp, Java (Spring Boot), and PHP (Laravel).') }}</p>
                                    <p>*{{ __('messages.Additionally, I am proficient in managing database systems such as MySQL, PostgreSQL, MongoDB, and MySQL Workbench, with a focus on data optimization and efficient processing. However, I recognize the need to improve my skills in using Git and Backlog to manage versions and track work progress more effectively during project development.') }}</p>
                                </div>
                            </div>
                            <div class="service-left-body" id="service-4">
                                <div class="service-left-body-img">
                                    <img src="{{asset('assets/images/service3.png')}}" />
                                </div>
                                <div class="service-left-body-content">
                                    <h3>{{ __('messages.Full-task Developer') }}</h3>
                                    <p>{{ __('messages.I am responsible for the entire software development process, from UI/UX design (Front-end) to server-side logic implementation (Back-end), as well as deployment and system maintenance.') }}</p>
                                    <p>- {{ __('messages.Front-end: Proficient in HTML5, CSS3, JavaScript, along with frameworks such as React.js, Vue.js, and Angular. I focus on user experience (UX) and optimizing interface performance.') }}</p>
                                    <p>- {{ __('messages.Back-end: Experienced with Node.js, Python (Django/Flask), Java (Spring Boot), PHP (Laravel), and C#. I specialize in API development, database optimization (MySQL, PostgreSQL, MongoDB), and ensuring system security.') }}</p>
                                    <p>- {{ __('messages.Deployment & System Management: Proficient in the Ubuntu environment, using Git and Backlog for project management, along with Docker and CI/CD to optimize the deployment process.') }}</p>
                                    <p>* {{ __('messages.Additionally, I have knowledge of FTP and Docker, allowing me to efficiently transfer and deploy applications, set up containers for independent development environments, and optimize the CI/CD process.') }}</p>
                                </div>
                            </div>
                            <div class="service-left-body" id="service-5">
                                <div class="service-left-body-img">
                                    <img src="{{asset('assets/images/service4.png')}}" />
                                </div>
                                <div class="service-left-body-content">
                                    <h3>{{ __('messages.New research') }}</h3>
                                    <p>{{ __('messages.Currently, I am working with SVF Design, using source code from WingArc. My responsibilities include designing, customizing, and optimizing templates, reports, and layouts to meet specific customer requirements.') }}</p> 
                                    <p>- {{ __('messages.By leveraging the tools and frameworks of WingArc, I ensure that the output product is both aesthetically pleasing and performs efficiently.') }}</p> 
                                    <p>- {{ __('messages.My role also includes collaborating with teams to seamlessly integrate SVF solutions into the current system while maintaining high standards of accuracy and performance.') }}</p>
                                    <p>- {{ __('messages.This project is also a great challenge for me, as it requires a deep understanding of the underlying technology as well as dedication in mastering the documentation and tools.') }} </p>    
                                    <p>* {{ __('messages.I have put a lot of effort into researching and studying the relevant documentation, which allowed me to overcome the initial challenges and achieve significant results. By continuously improving my knowledge and skills, I aim to deliver better solutions and make the most of this valuable learning experience.') }}</p>
                                </div>
                            </div>
                            <div class="service-left-body" id="service-6">
                                <div class="service-left-body-img">
                                    <img src="{{asset('assets/images/service5.png')}}" />
                                </div>
                                <div class="service-left-body-content">
                                    <h3>{{ __('messages.Remote service') }}</h3>
                                    <p>{{ __('messages.Price: negotiable') }}</p>
                                    <div class="item_service d-flex align-center gap-10"><span>01</span> <p>{{ __('messages.Number of new and modified screens.') }}</p></div>
                                    <div class="item_service d-flex align-center gap-10"><span>02</span> <p>{{ __('messages.Use HTML, CSS, and responsive design to complete.') }}</p></div>
                                    <div class="item_service d-flex align-center gap-10"><span>03</span> <p>{{ __('messages.Use JavaScript to complete.') }}</p></div>
                                    <div class="item_service d-flex align-center gap-10"><span>04</span> <p>{{ __('messages.Use Frontend Development Tools to complete.') }}</p></div>
                                    <div class="item_service d-flex align-center gap-10"><span>05</span> <p>{{ __('messages.Use Backend Development Tools to complete.') }}</p></div>
                                    <div class="item_service d-flex align-center gap-10"><span>06</span> <p>{{ __('messages.Deployment & Hosting.') }}</p></div>
                                    <div class="item_service d-flex align-center gap-10"><span>07</span> <p>{{ __('messages.Testing.') }}</p></div>
                                    <div class="item_service d-flex align-center gap-10"><span>08</span> <p>{{ __('messages.6-month warranty for the work.') }}</p></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section  id="Team">
                    <div class="layout-tile">
                        <h3>{{ __('messages.Team') }}</h3>
                        <div class="layout-tile-btn">
                            <a href="">{{ __('messages.More here') }} <i class="fa-solid fa-circle-right"></i></a>
                        </div>
                    </div>
                    <div class="slider-container swiper">
                        <div class="swiper mySwiper container">
                            <div class="swiper-wrapper content">
                                @foreach($teams as $item)
                                <div class="swiper-slide card">
                                    <div class="box2"></div>
                                    <div class="card-content">
                                        <div class="image">
                                            <img src="{{ asset($item->image_path) }}" alt="">
                                        </div>
                                        <div class="media-icons">
                                            <i class="fab fa-facebook"></i>
                                            <i class="fab fa-twitter"></i>
                                            <i class="fab fa-github"></i>
                                        </div>
                                        <div class="name-profession">
                                            <span class="name">{{ $item->name }}</span>
                                            <span class="profession">{{ $item->level }}</span>
                                        </div>
                                        <div class="rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                        <div class="about-name">
                                            {!! $item->description !!}
                                        </div>
                                        <div class="button b2">
                                            <button class="aboutMe">{{ __('messages.Contact Me') }}</button>
                                            <button class="hireMe">{{ __('messages.Hire Me') }}</button>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </section>
                <section id="about">
                    <div class="layout-tile">
                        <h3>{{ __('messages.Document') }}</h3>
                        <div class="layout-tile-btn">
                            <a href="">{{ __('messages.More here') }} <i class="fa-solid fa-circle-right"></i></a>
                        </div>
                    </div>
                    <div class="blog_container">
                        <div class="blog_products">
                            @foreach($documents as $item)
                            <div class="blog_product">
                                <div class="blog_product-img">
                                    <img src="{{ asset($item->image_path) }}" />
                                </div>
                                <div class="name">{{ $item->title }}</div>
                                <div class="user-document">
                                    <p><i class="fa-solid fa-user"></i> {{ $item->user ? $item->user->full_name : 'Không có danh mục' }}</p>
                                    <p><i class="fa-solid fa-calendar-days"></i> {{ $item->created_at }}</p>
                                </div>
                                <div class="user-document-like">
                                    <p class="eye-gray"><i class="fa-solid fa-eye"></i> 200</p>
                                    <p class="eye-blue"><i class="fa-solid fa-thumbs-up"></i> 200</p>
                                    <p class="eye-green"><i class="fa-solid fa-share"></i> 200</p>
                                </div>
                            </div>
                            @endforeach
                            @foreach($documents as $item)
                            <div class="blog_product">
                                <div class="blog_product-img">
                                    <img src="{{ asset($item->image_path) }}" />
                                </div>
                                <div class="name">{{ $item->title }}</div>
                                <div class="user-document">
                                    <p><i class="fa-solid fa-user"></i> {{ $item->user ? $item->user->full_name : 'Không có danh mục' }}</p>
                                    <p><i class="fa-solid fa-calendar-days"></i> {{ $item->created_at }}</p>
                                </div>
                                <div class="user-document-like">
                                    <p class="eye-gray"><i class="fa-solid fa-eye"></i> 200</p>
                                    <p class="eye-blue"><i class="fa-solid fa-thumbs-up"></i> 200</p>
                                    <p class="eye-green"><i class="fa-solid fa-share"></i> 200</p>
                                </div>
                            </div>
                            @endforeach
                            @foreach($documents as $item)
                            <div class="blog_product">
                                <div class="blog_product-img">
                                    <img src="{{ asset($item->image_path) }}" />
                                </div>
                                <div class="name">{{ $item->title }}</div>
                                <div class="user-document">
                                    <p><i class="fa-solid fa-user"></i> {{ $item->user ? $item->user->full_name : 'Không có danh mục' }}</p>
                                    <p><i class="fa-solid fa-calendar-days"></i> {{ $item->created_at }}</p>
                                </div>
                                <div class="user-document-like">
                                    <p class="eye-gray"><i class="fa-solid fa-eye"></i> 200</p>
                                    <p class="eye-blue"><i class="fa-solid fa-thumbs-up"></i> 200</p>
                                    <p class="eye-green"><i class="fa-solid fa-share"></i> 200</p>
                                </div>
                            </div>
                            @endforeach
                            @foreach($documents as $item)
                            <div class="blog_product">
                                <div class="blog_product-img">
                                    <img src="{{ asset($item->image_path) }}" />
                                </div>
                                <div class="name">{{ $item->title }}</div>
                                <div class="user-document">
                                    <p><i class="fa-solid fa-user"></i> {{ $item->user ? $item->user->full_name : 'Không có danh mục' }}</p>
                                    <p><i class="fa-solid fa-calendar-days"></i> {{ $item->created_at }}</p>
                                </div>
                                <div class="user-document-like">
                                    <p class="eye-gray"><i class="fa-solid fa-eye"></i> 200</p>
                                    <p class="eye-blue"><i class="fa-solid fa-thumbs-up"></i> 200</p>
                                    <p class="eye-green"><i class="fa-solid fa-share"></i> 200</p>
                                </div>
                            </div>
                            @endforeach
                            @foreach($documents as $item)
                            <div class="blog_product">
                                <div class="blog_product-img">
                                    <img src="{{ asset($item->image_path) }}" />
                                </div>
                                <div class="name">{{ $item->title }}</div>
                                <div class="user-document">
                                    <p><i class="fa-solid fa-user"></i> {{ $item->user ? $item->user->full_name : 'Không có danh mục' }}</p>
                                    <p><i class="fa-solid fa-calendar-days"></i> {{ $item->created_at }}</p>
                                </div>
                                <div class="user-document-like">
                                    <p class="eye-gray"><i class="fa-solid fa-eye"></i> 200</p>
                                    <p class="eye-blue"><i class="fa-solid fa-thumbs-up"></i> 200</p>
                                    <p class="eye-green"><i class="fa-solid fa-share"></i> 200</p>
                                </div>
                            </div>
                            @endforeach
                            @foreach($documents as $item)
                            <div class="blog_product">
                                <div class="blog_product-img">
                                    <img src="{{ asset($item->image_path) }}" />
                                </div>
                                <div class="name">{{ $item->title }}</div>
                                <div class="user-document">
                                    <p><i class="fa-solid fa-user"></i> {{ $item->user ? $item->user->full_name : 'Không có danh mục' }}</p>
                                    <p><i class="fa-solid fa-calendar-days"></i> {{ $item->created_at }}</p>
                                </div>
                                <div class="user-document-like">
                                    <p class="eye-gray"><i class="fa-solid fa-eye"></i> 200</p>
                                    <p class="eye-blue"><i class="fa-solid fa-thumbs-up"></i> 200</p>
                                    <p class="eye-green"><i class="fa-solid fa-share"></i> 200</p>
                                </div>
                            </div>
                            @endforeach

                        </div>
                    </div>
                </section>
                <section id="about">
                    <div class="layout-tile">
                        <h3>{{ __('messages.Wiki') }}</h3>
                        <div class="layout-tile-btn">
                            <a href="">{{ __('messages.More here') }} <i class="fa-solid fa-circle-right"></i></a>
                        </div>
                    </div>
                    <div class="wiki-body">
                        <div class="swiper mySwiper container">
                            <div class="swiper-wrapper content">
                                @foreach($wikis as $item)
                                <div class="swiper-slide card card-interface">
                                    <img src="{{ asset($item->image_path) }}" />
                                    <div class="name">{{ $item->title }}</div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </section>
                <section id="about">
                    <div class="layout-tile">
                        <h3>Blog</h3>
                        <div class="layout-tile-btn">
                            <a href="">Xem thêm <i class="fa-solid fa-circle-right"></i></a>
                        </div>
                    </div>
                    <div class="blog_container">
                        <div class="blog_products">
                             @foreach($news as $item)
                            <div class="blog_product">
                                <div class="blog_product-img">
                                    <img src="{{ asset($item->image_path) }}" />
                                </div>
                                <div class="name">{{ $item->name }}</div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </section>
                <section class="stats">
                    <div class="stats-container">
                        <div class="stat">
                            <div class="icon">🚀</div>
                            <h2>000+</h2>
                            <p>Dịch Vụ Cung Cấp</p>
                        </div>
                        <div class="stat">
                            <div class="icon">📍</div>
                            <h2>000+</h2>
                            <p>Địa Điểm</p>
                        </div>
                        <div class="stat">
                            <div class="icon">💳</div>
                            <h2>000+</h2>
                            <p>Giao Dịch Thành Công</p>
                        </div>
                        <div class="stat">
                            <div class="icon">📁</div>
                            <h2>000+</h2>
                            <p>Tài Liệu</p>
                        </div>
                    </div>
                </section>
                <section id="about">
                        <div class="layout-tile">
                            <h3>{{ __('messages.Contact') }}</h3>
                            <div class="layout-tile-btn">
                                <a href="">Xem thêm <i class="fa-solid fa-circle-right"></i></a>
                            </div>
                        </div>
                        <section id="section-wrapper">
                            <div class="box-wrapper">
                                <div class="info-wrap">
                                    <h3 class="info-sub-title">{{ __('messages.Take a moment to fill out the form, and our dedicated team of experts will get back to you within 24 hours. We are always ready to listen and provide the most suitable solutions, ensuring you receive the best support possible!') }}</h3>
                                    <ul class="info-details">
                                        <li>
                                            <div class="contact-icon">
                                                <b></b>
                                                <i class="fas fa-location-dot"></i>
                                            </div>
                                            <div class="text-contact">
                                                <p>{{ __('messages.Address') }}:</p> <a href="tel:+ 0768173369">{{__('messages.Tan The Hoa, Tan Phu District, Ho Chi Minh City.')}}</a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="contact-icon">
                                                <b></b>
                                                <i class="fas fa-phone-alt"></i>
                                            </div>
                                            <div class="text-contact">
                                                <p>{{ __('messages.Phone') }}:</p> <a href="tel:+ 0768173369">+ 0768173369</a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="contact-icon">
                                                <b></b>
                                                <i class="fas fa-paper-plane"></i>
                                            </div>
                                            <div class="text-contact">
                                                <p >{{ __('messages.Email') }}:</p> 
                                                <a  href="mailto:tuankietity@gmail.com">tuankietity@gmail.com</a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="contact-icon">
                                                <b></b>
                                                <i class="fas fa-globe"></i>
                                            </div>
                                            <div class="text-contact">
                                                <p class="mx-10">{{ __('messages.Website') }}:</p> <a class="mx-10" href="https://www.upskillhub.io.vn/">https://www.upskillhub.io.vn/</a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="contact-icon">
                                                <b></b>
                                                <i class="fab fa-facebook"></i>
                                            </div>
                                            <div class="text-contact">
                                                <p class="mx-10">{{ __('messages.Website') }}:</p> <a class="mx-10" href="#">{{ __('messages.Updating') }}</a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="contact-icon">
                                                <b></b>
                                                <i class="fab fa-linkedin-in"></i>
                                            </div>
                                            <div class="text-contact">
                                                <a class="mx-10" href="https://www.linkedin.com/in/phan-tuấn-kiệt-00bab2283">https://www.linkedin.com/in/phan-tuấn-kiệt-00bab2283</a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="contact-form-container">
                                    <form class="contact-form" action="{{ route('send.contact') }}" method="POST">
                                        @csrf
                                        <div class="form-group">
                                            <label for="name">{{ __('messages.Name') }}</label>
                                            <input type="text" name="name" placeholder="{{ __('messages.Name') }}" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="email">{{ __('messages.Email') }}</label>
                                            <input type="email" name="email" placeholder="{{ __('messages.Email') }}" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="subject">{{ __('messages.Subject') }}</label>
                                            <input type="text" name="subject" placeholder="{{ __('messages.Subject') }}" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="message">{{ __('messages.Message') }}</label>
                                            <textarea name="message" placeholder="{{ __('messages.Message') }}" rows="5" required></textarea>
                                        </div>
                                        <button type="submit" class="btn">{{ __('messages.Send') }}</button>
                                    </form>
                                </div>
                            </div>
                        </section>
                    </section>
            </div>
        </div>
    </div>
    <section class="download-app" id="download-app">
        <footer class="footer">
            <ul class="social-icon">
              <li class="social-icon__item"><a class="social-icon__link" href="#">
                <i class="fab fa-facebook"></i></a>
               </li>
              <li class="social-icon__item"><a class="social-icon__link" href="#">
                <i class="fab fa-twitter"></i>
                </a></li>
              <li class="social-icon__item"><a class="social-icon__link" href="#">
                <i class="fa-brands fa-instagram"></i>
                </a></li>
              <li class="social-icon__item"><a class="social-icon__link" href="#">
                <i class="fab fa-linkedin-in"></i>
                </a></li>
            </ul>
            <ul class="menu">
              <li class="menu__item"><a class="menu__link" href="#">{{ __('messages.Home') }}</a></li>
              <li class="menu__item"><a class="menu__link" href="#">{{ __('messages.About') }}</a></li>
              <li class="menu__item"><a class="menu__link" href="#">{{ __('messages.Feature') }}</a></li>
              <li class="menu__item"><a class="menu__link" href="#">{{ __('messages.Course') }}</a></li>
              <li class="menu__item"><a class="menu__link" href="#">{{ __('messages.Service') }}</a></li>
              <li class="menu__item"><a class="menu__link" href="#">{{ __('messages.Product') }}</a></li>
              <li class="menu__item"><a class="menu__link" href="#">{{ __('messages.Question') }}</a></li>
              <li class="menu__item"><a class="menu__link" href="#">{{ __('messages.Contact') }}</a></li>
            </ul>
            <p>&copy;2025 {{ __('messages.Phan Tuan Kiet') }} | {{ __('messages.All Rights Reserved') }}</p>
          </footer>
    </section>
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
            <div class="login">
                <div class="title">Đăng ký!</div>
                <div class="des">
                    We are glad to have you back! <br> beeb missed!
                </div>
                <div class="group">
                    <input type="text" class="input-name" name="full_name" id="full_name" placeholder="Nhập Họ và tên">
                </div>
                <div class="group">
                    <input type="email" name="email" placeholder="Nhập email">
                </div>
                <div class="group">
                    <input type="password" name="password" placeholder="Nhập password">
                </div>
                <div class="group">
                    <input type="password" class="input-name" name="password_confirmation" id="password_confirmation" placeholder="Nhập confirm password">
                    <span class="input-error" id="password_confirmation_error"></span>
                </div>
                <div class="group">
                    <input type="text" class="input-name" name="phone" id="phone" placeholder="Nhập phone">
                </div>
                <div class="group">
                    <input type="text" class="input-name" name="address" id="address" placeholder="Nhập địa chỉ">
                </div>
                <div class="group">
                    <input type="text" class="input-name" name="gender" id="gender" placeholder="Nhập giới tính">
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
        var swiper = new Swiper(".mySwiper", {
            slidesPerView: 4,
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
            });
        var indexValue = 1;
        showImg(indexValue);

        // Tự động chuyển ảnh sau mỗi 10 giây
        setInterval(function() {
        side_slide(1); // Chuyển sang ảnh kế tiếp
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
            
            // Đóng tất cả các accordion items khác
            document.querySelectorAll('.accordion-item').forEach(item => {
                if (item !== accordionItem) {
                    item.classList.remove('active');
                }
            });

            // Toggle trạng thái của accordion item hiện tại
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