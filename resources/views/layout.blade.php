<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UpSkillHub.vn </title>
    <!-- <link rel="stylesheet" href="{{ asset('css/layout.css') }}"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.5/gsap.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet"/>
    <link rel="stylesheet" href="{{ asset('css/layout-one.css') }}">
    <link rel="stylesheet" href="{{ asset('css/media-layout.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <script src="https://cdn.jsdelivr.net/npm/particles.js"></script>
</head>
<body>
    @php
        $locale = session()->get('locale', 'vi');
        App::setLocale($locale);
    @endphp
    <button id="scroll-top">
        <i class="fas fa-arrow-up"></i>
    </button>
    <header>
        <div class="header-aside">
            <div class="header-aside-list hidden">
                <a href="">{{ __('messages.Connect') }} <i class="fa-solid fa-wifi"></i> | </a>
                <a href="">{{ __('messages.Facebook') }} <i class="fa-brands fa-facebook"></i> | </a> 
                <a href="">{{ __('messages.TikTok') }} <i class="fa-brands fa-tiktok"></i></a> 
            </div>
            <div class="header-aside-list">
                @if (Auth::check())
                    <a href="/" onclick="logout()" class="btn-login" id="logoutLink"><i class="fa-regular fa-user"></i> {{ __('messages.Logout') }}</a>
                @else
                    <a href="#login" class="btn-login" onclick="Login();"><i class="fa-regular fa-user"></i> {{ __('messages.Login') }}</a>
                    <a href="#register" class="btn-login" onclick="Register();"><i class="fa-regular fa-user"></i> {{ __('messages.Register') }}</a>
                @endif  
            </div>
        </div>
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
            <i class="fas fa-bars" id="ham-menu"></i>
            <ul id="nav-bar">
                <li>
                    <a href="#home">{{ __('messages.Home') }}</a>
                </li>
                <li>
                    <a href="#courses">{{ __('messages.About') }}</a>
                </li>
                <li>
                    <a href="#features">{{ __('messages.Feature') }}</a>
                </li>
                <li>
                    <a href="#courses">{{ __('messages.Course') }}</a>
                </li>
                <li>
                    <a href="#testimonial">{{ __('messages.Service') }}</a>
                </li>
                <li>
                    <a href="#download-app">{{ __('messages.Product') }}</a>
                </li>
                <li>
                    <a href="#download-app">{{ __('messages.Question') }}</a>
                </li>
                <li>
                    <a href="#download-app">{{ __('messages.Contact') }}</a>
                </li>
            </ul>
        </nav>
    </header>
    <section class="hero" id="home">
        <div class="page-left-item banner">
            <div id="particles-js"></div>
            <div class="patern-layer-one"></div>
            <div class="patern-layer-two"></div>
            <div class="slidershow middle">
                <div class="slides">
                    <div class="slide s1"></div>
                </div>
            </div>
            <div class="patern-layer-content">
                <div class="patern-layer-UpSkillHub">
                    <h1>UpSkillHub</h1>
                    <div class="wavy">
                        <span style="--i:1;">W</span>
                        <span style="--i:2;">E</span>
                        <span style="--i:3;">B</span>
                        <span style="--i:4;">S</span>
                        <span style="--i:5;">I</span>
                        <span style="--i:6;">T</span>
                        <span style="--i:7;">E</span>
                        <span style="--i:8;">D</span>
                        <span style="--i:9;">E</span>
                        <span style="--i:10;">V</span>
                        <span style="--i:11;">E</span>
                        <span style="--i:12;">L</span>
                        <span style="--i:13;">O</span>
                        <span style="--i:14;">P</span>
                    </div>
                    <div class="btn-more-here">
                        <a href="#About" class="btn-more">{{ __('messages.More here') }}</a>
                        <a href="/dashboard" class="btn-dashboard">{{ __('messages.Dashboard') }}</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="path-app" id="path-app">
        <div class="path-container">
            <div class="path-list-card">
                <div class="path-card">
                    <div class="path-card-box">
                        <div class="path-card-content">
                            <div class="path-icon">
                                <h2>01</h2>
                            </div>
                            <h3>{{ __('messages.Online Programs') }}</h3>
                            <p>{{ __('messages.Features of Online Programs:') }}<br/>
                                {{ __('messages.Flexible, affordable, and rich in content with structured learning paths. Ideal for professionals, students, and those exploring new fields.') }}
                            </p>
                            <div class="btn-register">
                                <button onclick="Register();"> {{ __('messages.Register') }}</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="path-card">
                    <div class="path-card-box">
                        <div class="path-card-content">
                            <div class="path-icon">
                                <h2>02</h2>
                            </div>
                            <h3>{{ __('messages.Coding Programs') }}</h3>
                            <p>{{ __('messages.Features of Coding Programs:') }}<br/>
                                {{ __('messages.Learn basic programming, practice hands-on, and build a portfolio. Suitable for professionals, students, and those enhancing coding skills.') }}
                            </p>
                            <div class="btn-register">
                                <button onclick="Register();"> {{ __('messages.Register') }}</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="path-card">
                    <div class="path-card-box">
                        <div class="path-card-content">
                            <div class="path-icon">
                                <h2>03</h2>
                            </div>
                            <h3>{{ __('messages.English Programs') }}</h3>
                            <p>{{ __('messages.Features of English Programs:') }}<br/>
                                {{ __('messages.Improve listening, speaking, reading, and writing with content for all levels. Perfect for students, professionals, and those seeking global communication.') }}
                            </p>
                            <div class="btn-register">
                                <button onclick="Register();"> {{ __('messages.Register') }}</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="path-card">
                    <div class="path-card-box">
                        <div class="path-card-content">
                            <div class="path-icon">
                                <h2>04</h2>
                            </div>
                            <h3>{{ __('messages.Japanese Programs') }}</h3>
                            <p>{{ __('messages.Features of Japanese Programs:') }}<br/>
                                {{ __('messages.Learn Japanese from basics, focusing on grammar, communication. Ideal for professionals, students, and those aiming to work or study in Japan.') }}
                            </p>
                            <div class="btn-register">
                                <button onclick="Register();"> {{ __('messages.Register') }}</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="download-app" id="download-app">
        <div class="title-home">
            <span class="title-left"></span>
            <h2>{{ __('messages.About Us') }}</h2>
            <span class="title-right"></span>
        </div>
        <p class="section-desc">
            {{ __('messages.Unlock all the amazing new features with our software') }}
        </p>
        <div class="row">
          <div class="column">
            <img src="{{asset('assets/images/download-app.png')}}" />
          </div>
          <div class="column">
            <div class="app-feature">
                <div>
                  <i class="fas fa-star"></i>
                  <h3>{{ __('messages.Practical Application') }}</h3>
                </div>
                <p>
                    {{ __('messages.Practical application allows users to apply learned knowledge and skills to daily life or work tasks. On the website, this feature helps you practice through programming exercises or English and Japanese language activities, enhancing learning effectiveness and personal growth.') }}
                </p>
              </div>
            <div class="app-feature">
                <div>
                    <i class="fas fa-star"></i>
                    <h3>{{ __('messages.Set Reminders') }}</h3>
                </div>
                <p>
                    {{ __('messages.The reminder feature on the website helps you manage your time and tasks more effectively. You can schedule study sessions, practice routines, or complete personal tasks on time, ensuring you never miss important commitments.') }}
                </p>
            </div>
            <div class="app-feature">
                <div>
                    <i class="fas fa-star"></i>
                    <h3>{{ __('messages.Download Lectures') }}</h3>
                </div>
                <p>
                    {{ __('messages.Downloading lectures lets you access learning materials anytime, anywhere, even without an internet connection. This feature offers flexibility, making it easier to study programming, English, and Japanese effectively.') }}
                </p>
            </div>
            <div class="download-btns">
              <a href="#google-play">
                <img src="{{asset('assets/images/google-play.png')}}" />
              </a>
              <a href="#app-store">
                <img src="{{asset('assets/images/app-store.png')}}" />
              </a>
            </div>
          </div>
        </div>
    </section>
    <section class="features" id="features">
        <div class="title-home">
            <span class="title-left"></span>
            <h2>{{ __('messages.New Features') }}</h2>
            <span class="title-right"></span>
        </div>
        <p class="section-desc">
            {{ __('messages.Unlock all the amazing new features with our software') }}
        </p>
        <div class="row-services">
            <div class="service">
                <div class="services">
                    <div class="service-logo">
                        <i class="fa-solid fa-pen-ruler"></i>
                    </div>
                    <h4>{{ __('messages.Website Developer') }}</h4>
                    <div class="service-content">
                        <p>{{ __('messages.Courses help users learn and apply knowledge to their work conveniently and effectively. These courses are designed to provide an easy-to-understand and practical learning experience, enabling learners to quickly improve their skills and achieve desired results.') }}</p>
                    </div>
                </div>
                <div class="shadowOne"></div>
                <div class="shadowTwo"></div>
            </div>
            <div class="service">
                <div class="services">
                    <div class="service-logo">
                        <i class="fa-brands fa-app-store"></i>
                    </div>
                    <h4>{{ __('messages.UX/UI Design') }}</h4>
                    <div class="service-content">
                        <p>{{ __('messages.We will research user needs to develop ready-to-use components that provide solutions for ease of use and optimization. These components are designed to meet practical requirements, ensuring high efficiency during usage.') }}</p>
                    </div>
                </div>
                <div class="shadowOne"></div>
                <div class="shadowTwo"></div>
            </div>
            <div class="service">
                <div class="services">
                    <div class="service-logo">
                        <i class="fa-brands fa-app-store"></i>
                    </div>
                    <h4>{{ __('messages.Task Issue') }}</h4>
                    <div class="service-content">
                        <p>{{ __('messages.In work, a project is often divided into multiple phases to facilitate management and address each issue effectively, ensuring completion within a specific timeframe. This division helps maintain the progress and quality of the project at each stage.') }} </p>
                    </div>
                </div>
                <div class="shadowOne"></div>
                <div class="shadowTwo"></div>
            </div>
            <div class="service">
                <div class="services">
                    <div class="service-logo">
                        <i class="fa-brands fa-app-store"></i>
                    </div>
                    <h4>{{ __('messages.Financial') }}</h4>
                    <div class="service-content">
                        <p>{{ __('messages.We have developed a process for planning, tracking, and managing personal finances to ensure financial stability, thereby improving the quality of life. This process helps users manage their expenses effectively, achieve financial goals, and maintain balance in their lives.') }}</p>
                    </div>
                </div>
                <div class="shadowOne"></div>
                <div class="shadowTwo"></div>
            </div>
            <div class="service">
                <div class="services">
                    <div class="service-logo">
                        <i class="fa-brands fa-app-store"></i>
                    </div>
                    <h4>{{ __('messages.Languages') }}</h4>
                    <div class="service-content">
                        <p>{{ __('messages.We design English and Japanese courses to help you enhance your knowledge and improve communication skills in various situations, from basic to advanced levels. The courses include concise lessons and assessments to evaluate progress, ensuring effective learning and rapid improvement.') }}</p>
                    </div>
                </div>
                <div class="shadowOne"></div>
                <div class="shadowTwo"></div>
            </div>
            <div class="service">
                <div class="services">
                    <div class="service-logo">
                        <i class="fa-brands fa-app-store"></i>
                    </div>
                    <h4>{{ __('messages.Calendar') }}</h4>
                    <div class="service-content">
                        <p>{{ __('messages.We develop a system designed to manage important information and organize tasks within a specific schedule. This tool helps users structure their work scientifically, track progress, and ensure deadlines are met. It provides flexible and efficient management capabilities.') }}</p>
                    </div>
                </div>
                <div class="shadowOne"></div>
                <div class="shadowTwo"></div>
            </div>
            <div class="service">
                <div class="services">
                    <div class="service-logo">
                        <i class="fa-brands fa-app-store"></i>
                    </div>
                    <h4>{{ __('messages.English') }}</h4>
                    <div class="service-content">
                        <p>{{ __('messages.We develop an English learning method aimed at helping learners manage important information and organize their study time scientifically. This tool assists learners in structuring an effective study plan, tracking progress, and achieving their goals within the set timeframe.') }}</p>
                    </div>
                </div>
                <div class="shadowOne"></div>
                <div class="shadowTwo"></div>
            </div>
            <div class="service">
                <div class="services">
                    <div class="service-logo">
                        <i class="fa-brands fa-app-store"></i>
                    </div>
                    <h4>{{ __('messages.Japanese') }}</h4>
                    <div class="service-content">
                        <p>{{ __('messages.We develop a Japanese learning method aimed at helping learners manage important information and organize their study time scientifically. This method assists learners in structuring an effective study plan, tracking progress, and achieving their goals within the desired timeframe.') }}</p>
                    </div>
                </div>
                <div class="shadowOne"></div>
                <div class="shadowTwo"></div>
            </div>
        </div>
      </div>
    </section>
    <section class="courses" id="courses">
        <div class="title-home">
            <span class="title-left"></span>
            <h2>{{ __('messages.New Courses') }}</h2>
            <span class="title-right"></span>
        </div>
        <p class="section-desc">
            {{ __('messages.With a variety of diverse and exciting courses to choose from, explore our most popular ones.') }}
        </p>
        <div class="row">
            <div class="column">
            <img src="{{asset('assets/images/public.jpg')}}" />
            <h3>{{ __('messages.English Learning Program') }}</h3>
            <p>
                {{ __('messages.Do you want to read English documents fluently and write emails and essays professionally?') }}<br/>
                {{ __('messages.Understand academic materials deeply and quickly.') }}<br/>
                {{ __('messages.Practical exercises, detailed error corrections, step by step.') }}<br/>
                {{ __('messages.Suitable for all levels, from beginners to advanced.') }}
            </p>
            <div class="courses-btn">
                <button class="btn secondary-btn">{{ __('messages.Join Now') }}</button>
            </div>
            </div>
            <div class="column">
            <img src="{{asset('assets/images/photography.jpg')}}" />
            <h3>{{ __('messages.Japanese Learning Program') }}</h3>
            <p>
                {{ __('messages.Do you want to read Japanese documents fluently and write emails and essays professionally?') }}<br/>
                {{ __('messages.Understand academic materials deeply and quickly.') }}<br/>
                {{ __('messages.Practical exercises, detailed error corrections, step by step.') }}<br/>
                {{ __('messages.Suitable for all levels, from beginners to advanced.') }}
            </p>
            <div class="courses-btn">
                <button class="btn secondary-btn">{{ __('messages.Join Now') }}</button>
            </div>
            </div>
            <div class="column">
            <img src="{{asset('assets/images/typing.jpg')}}" />
            <h3>{{ __('messages.Programming Learning Program') }}</h3>
            <p>
                {{ __('messages.Do you want to read programming documents fluently and write code professionally?') }}<br/>
                {{ __('messages.Understand academic materials deeply and quickly.') }}<br/>
                {{ __('messages.Practical exercises, detailed error corrections, step by step.') }}<br/>
                {{ __('messages.Suitable for all levels, from beginners to advanced.') }}
            </p>
            <div class="courses-btn">
                <button class="btn secondary-btn">{{ __('messages.Join Now') }}</button>
            </div>
            </div>
        </div>
    </section>
    <section class="testimonial" id="testimonial">
        <div class="title-home">
            <span class="title-left"></span>
            <h2>{{ __('messages.UP Members') }}</h2>
            <span class="title-right"></span>
        </div>
        <p class="section-desc">
            {{ __('messages.Currently, the team has 5 members and over 1 year of practical working experience.') }}
        </p>
        <div class="slider-container swiper">
            <div class="slider-home">
                <div class="card-home swiper-wrapper">
                    <div class="card-home-item swiper-slide">
                        <img src="{{asset('assets/images/user1.jpg')}}" alt="James Wilson" class="user-img">
                        <h2 class="user-name">Phan Tuấn Kiệt</h2>
                        <p class="user-profession">Software Developer</p>
                        <p class="user-content">
                            Đã tốt nghiệp đại học Công nghệ.<br/>
                            Đã có hơn 1 năm Kinh nghiệm làm việc thực tế tại công ty nước ngoài. <br/>
                            Đã và Đang làm việc tại công ty nhật.<br/>
                            Đã có bằng tiếng nhật tương đương N3 và đang cải thiện trình độ tiếng anh.
                            Đang tìm kiếm việc làm Remote.
                        </p>
                        <button class="message-btn">Liên hệ ngay</button>
                    </div>
                    <div class="card-home-item swiper-slide">
                        <img src="{{asset('assets/images/user1.jpg')}}" alt="James Wilson" class="user-img">
                        <h2 class="user-name">Nguyễn Trung Nghĩa</h2>
                        <p class="user-profession">Software Developer</p>
                        <p class="user-content">
                            Đã tốt nghiệp đại học Công nghệ.<br/>
                            Đã có hơn 1 năm Kinh nghiệm làm việc thực tế tại công ty nước ngoài. <br/>
                            Đã và Đang làm việc tại công ty nhật.<br/>
                            Đã có bằng tiếng nhật tương đương N3 và đang cải thiện trình độ tiếng anh.
                            Đang tìm kiếm việc làm Remote.
                        </p>
                        <button class="message-btn">Liên hệ ngay</button>
                    </div>
                    <div class="card-home-item swiper-slide">
                        <img src="{{asset('assets/images/user1.jpg')}}" alt="James Wilson" class="user-img">
                        <h2 class="user-name">Nguyễn Tường Vi</h2>
                        <p class="user-profession">Software Developer</p>
                        <p class="user-content">
                            Đã tốt nghiệp đại học Công nghệ.<br/>
                            Đã có hơn 1 năm Kinh nghiệm làm việc thực tế tại công ty nước ngoài. <br/>
                            Đã và Đang làm việc tại công ty nhật.<br/>
                            Đã có bằng tiếng nhật tương đương N3 và đang cải thiện trình độ tiếng anh.
                            Đang tìm kiếm việc làm Remote.
                        </p>
                        <button class="message-btn">Liên hệ ngay</button>
                    </div>
                    <div class="card-home-item swiper-slide">
                        <img src="{{asset('assets/images/user1.jpg')}}" alt="James Wilson" class="user-img">
                        <h2 class="user-name">Lê Quang Huy</h2>
                        <p class="user-profession">Software Developer</p>
                        <p class="user-content">
                            Đã tốt nghiệp đại học Công nghệ.<br/>
                            Đã có hơn 1 năm Kinh nghiệm làm việc thực tế tại công ty nước ngoài. <br/>
                            Đã và Đang làm việc tại công ty nhật.<br/>
                            Đã có bằng tiếng nhật tương đương N3 và đang cải thiện trình độ tiếng anh.
                            Đang tìm kiếm việc làm Remote.
                        </p>
                        <button class="message-btn">Liên hệ ngay</button>
                    </div>
                    <div class="card-home-item swiper-slide">
                        <img src="{{asset('assets/images/user1.jpg')}}" alt="James Wilson" class="user-img">
                        <h2 class="user-name">Trần Minh Thuận</h2>
                        <p class="user-profession">Software Developer</p>
                        <p class="user-content">
                            Đã tốt nghiệp đại học Công nghệ.<br/>
                            Đã có hơn 1 năm Kinh nghiệm làm việc thực tế tại công ty nước ngoài. <br/>
                            Đã và Đang làm việc tại công ty nhật.<br/>
                            Đã có bằng tiếng nhật tương đương N3 và đang cải thiện trình độ tiếng anh.
                            Đang tìm kiếm việc làm Remote.
                        </p>
                        <button class="message-btn">Liên hệ ngay</button>
                    </div>
                </div>
                <div class="swiper-pagination"></div>

                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>
        </div>
    </section>
    <section class="courses" id="courses">
        <div class="title-home">
            <span class="title-left"></span>
            <h2>{{ __('messages.New Service') }}</h2>
            <span class="title-right"></span>
        </div>
        <p class="section-desc">
            {{ __('messages.Unlock all the amazing new features with our software') }}
        </p>
        <div class="pricing-section">
            <div class="pricing-cards">
                <div class="pricing-card table" id="service1">
                    <div class="price-tag">
                        <div class="price-header">Design UX/UI</div>
                        <div class="price-body">
                            <span class="currency">$</span>
                            <span class="price">***</span>
                            <span class="cents">.000 VND</span>
                        </div>
                    </div>
                    <ul class="features">
                        <li><span class="pricing-success"><i class="fa-solid fa-check"></i></span>Tạo ra các trang web chuẩn HTML5, CSS3 với mã nguồn sạch sẽ. Có thể sử dụng các Thư viện CSS đa năng dành cho css.</li>
                        <li><span class="pricing-success"><i class="fa-solid fa-check"></i></span>Sử dụng hiệu ứng chuyển động mượt mà và các tính năng động.</li>
                        <li><span class="pricing-success"><i class="fa-solid fa-check"></i></span>Sử dụng JavaScript để nâng cao tính tương tác.</li>
                        <li><span class="pricing-success"><i class="fa-solid fa-check"></i></span>Giao diện web được tối ưu hóa trên tất cả các thiết bị, từ desktop, tablet đến điện thoại di động.</li>
                        <li><span class="pricing-success"><i class="fa-solid fa-check"></i></span>sử dụng WordPress để tạo ra những trang web dễ dàng cập nhật, chỉnh sửa và mở rộng.</li>
                        <li><span class="pricing-success"><i class="fa-solid fa-check"></i></span>sử dụng validation được thực hiện để đảm bảo rằng trang web hoạt động chính xác và không có lỗi.</li>
                        <li><span class="pricing-success"><i class="fa-solid fa-check"></i></span>Dịch vụ cập nhật thiết kế và tính năng sau 6 tháng.</li>
                    </ul>
                </div>
                <div class="pricing-card table" id="service2"> 
                    <div class="ribbon"><span>Recommend</span></div>
                    <div class="price-tag">
                        <div class="price-header">Dashboard</div>
                        <div class="price-body">
                            <span class="currency">$</span>
                            <span class="price">20</span>
                            <span class="cents">.000 VND</span>
                        </div>
                    </div>
                    <ul class="features">
                        <li><span class="pricing-success"><i class="fa-solid fa-check"></i></span>Web Developer - Giúp người dùng học và ứng dụng kiến thức lập trình vào công việc một cách hiệu quả và tiện lợi</li>
                        <li><span class="pricing-success"><i class="fa-solid fa-check"></i></span>Content Creation - Hướng dẫn lập kế hoạch, sản xuất và chia sẻ nội dung một cách hấp dẫn và hiệu quả.</li>
                        <li><span class="pricing-success"><i class="fa-solid fa-check"></i></span>Task Issue - Quản lý dự án, chia công việc thành nhiều giai đoạn để tối ưu hóa hiệu suất.</li>
                        <li><span class="pricing-success"><i class="fa-solid fa-check"></i></span>Financial - Cung cấp công cụ lập kế hoạch tài chính, giám sát và quản lý chi tiêu cá nhân.</li>
                        <li><span class="pricing-success"><i class="fa-solid fa-check"></i></span>Daily Task - Giúp người dùng liệt kê và quản lý công việc hàng ngày một cách tỉ mỉ và tiện lợi.</li>
                        <li><span class="pricing-success"><i class="fa-solid fa-check"></i></span>Japanese & English - Các khóa học ngoại ngữ nhằm giúp người học nắm vững kiến thức và kiểm tra kỹ năng của mình.</li>
                    </ul>
                </div>
                <div class="pricing-card table" id="service3"> 
                    <div class="price-tag">
                        <div class="price-header">Website Developer</div>
                        <div class="price-body">
                            <span class="currency">$</span>
                            <span class="price">***</span>
                            <span class="cents">.000 VND</span>
                        </div>
                    </div>
                    <ul class="features">
                        <li><span class="pricing-success"><i class="fa-solid fa-check"></i></span>Hiện Tại team chúng tôi có hơn 5 người và đã có kinh nghiệm làm việc thực tế tại các công ty nước ngoài.</li>
                        <li><span class="pricing-success"><i class="fa-solid fa-check"></i></span>Chúng tôi đã có hơn 2 năm kinh nghiệm làm việc thực tế và đã tốt nghiệp đaị học theo chuyên ngành Công Nghệ Thông Tin, chuyên ngành Công Nghệ Phần Mềm.</li>
                        <li><span class="pricing-success"><i class="fa-solid fa-check"></i></span>Chúng tôi có thể tham gia và thích nghi với cương vị là 1 người full-stack về lập trình website.</li>
                        <li><span class="pricing-success"><i class="fa-solid fa-check"></i></span>Thời gian làm remote từ 7h đến 12h tối mỗi ngày và có thể làm fulltime vào thứ 7 và chủ nhật.</li>
                        <li><span class="pricing-success"><i class="fa-solid fa-check"></i></span>Nếu các bạn đang có 1 dự án về website hãy liên hệ chúng tôi để trao đổi thêm thông tin.</li>
                        <li><span class="pricing-success"><i class="fa-solid fa-check"></i></span>Cảm ơn mọi người vì đã tham quan về trang của chúng tôi! Rất chân thành và cảm ơn.</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="courses" id="courses">
        <div class="title-home">
            <span class="title-left"></span>
            <h2>{{ __('messages.New Product') }}</h2>
            <span class="title-right"></span>
        </div>
        <div class="section-desc">
            <div class="section-desc-spacebetween">
                <button><i class="fa-regular fa-circle-up"></i></button>
                {{ __('messages.Unlock all the amazing new features with our software') }}
                <button><i class="fa-regular fa-circle-down"></i></button>
            </div>
        </div>
        <div class="product-container">
            <div class="product-card">
                <div style="padding: 20px;text-align: center;font-size:12px;">
                <h1>Apps</h1>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ultrices in iaculis nunc sed augue.
                </p>
                <button class="sh_btn">Read more</button>
                </div>
                <div class="cover">
                    <div class="coverFront">
                        <div>
                            <img src="{{asset('assets/images/1730874816_product1.jpg')}}" alt="" class="sh_img">
                        </div>
                    </div>
                <div class="coverBack"></div>
                </div>
            </div>
            <div class="product-card">
                <div style="padding: 20px;text-align: center;font-size:12px;">
                <h1>Apps</h1>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ultrices in iaculis nunc sed augue.
                </p>
                <button class="sh_btn">Read more</button>
                </div>
                <div class="cover">
                    <div class="coverFront">
                        <div>
                            <img src="{{asset('assets/images/1730874816_product1.jpg')}}" alt="" class="sh_img">
                        </div>
                    </div>
                <div class="coverBack"></div>
                </div>
            </div>
            <div class="product-card">
                <div style="padding: 20px;text-align: center;font-size:12px;">
                <h1>Apps</h1>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ultrices in iaculis nunc sed augue.
                </p>
                <button class="sh_btn">Read more</button>
                </div>
                <div class="cover">
                    <div class="coverFront">
                        <div>
                            <img src="{{asset('assets/images/1730874816_product1.jpg')}}" alt="" class="sh_img">
                        </div>
                    </div>
                <div class="coverBack"></div>
                </div>
            </div>
            <div class="product-card">
                <div style="padding: 20px;text-align: center;font-size:12px;">
                <h1>Apps</h1>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ultrices in iaculis nunc sed augue.
                </p>
                <button class="sh_btn">Read more</button>
                </div>
                <div class="cover">
                    <div class="coverFront">
                        <div>
                            <img src="{{asset('assets/images/1730874816_product1.jpg')}}" alt="" class="sh_img">
                        </div>
                    </div>
                <div class="coverBack"></div>
                </div>
            </div>
            <div class="product-card">
                <div style="padding: 20px;text-align: center;font-size:12px;">
                <h1>Apps</h1>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ultrices in iaculis nunc sed augue.
                </p>
                <button class="sh_btn">Read more</button>
                </div>
                <div class="cover">
                    <div class="coverFront">
                        <div>
                            <img src="{{asset('assets/images/1730874816_product1.jpg')}}" alt="" class="sh_img">
                        </div>
                    </div>
                <div class="coverBack"></div>
                </div>
            </div>
            <div class="product-card">
                <div style="padding: 20px;text-align: center;font-size:12px;">
                <h1>Apps</h1>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ultrices in iaculis nunc sed augue.
                </p>
                <button class="sh_btn">Read more</button>
                </div>
                <div class="cover">
                    <div class="coverFront">
                        <div>
                            <img src="{{asset('assets/images/1730874816_product1.jpg')}}" alt="" class="sh_img">
                        </div>
                    </div>
                <div class="coverBack"></div>
                </div>
            </div>
        </div>
    </section>
    <section class="courses" id="courses">
        <div class="title-home">
            <span class="title-left"></span>
            <h2>{{ __('messages.General Questions') }}</h2>
            <span class="title-right"></span>
        </div>
        <p class="section-desc">
            {{ __('messages.These are some questions related to the product I am currently using.') }}
        </p>
        <div class="accordion">
            <div class="accordion-item active">
                <div class="accordion-header">
                    <span>{{ __('messages.How do I register an account?') }}</span>
                    <span class="icon">+</span>
                </div>
                <div class="accordion-content">
                    <blockquote>
                        “ {{ __('messages.Click on the "Register" button at the top corner of the page. Fill in your personal information, such as email and password, and confirm through the email sent to your inbox. It only takes a few minutes to complete. After registering, you can access all features on the website. If you encounter any issues, don’t hesitate to contact the support team for prompt assistance!') }} ”
                        <span class="author">- {{ __('messages.Phan Tuan Kiet') }}</span>
                    </blockquote>
                </div>
            </div>
            <div class="accordion-item">
                <div class="accordion-header">
                    <span>{{ __('messages.Can I change my personal information?') }}</span>
                    <span class="icon">+</span>
                </div>
                <div class="accordion-content">
                    <blockquote>
                        “ {{ __('messages.You can easily update your personal information at any time. Simply go to the "Personal Profile" section in your account. Click on the information you wish to edit and save the changes. The system will update immediately, allowing you to continue using the service without interruption. Don’t forget to review and ensure your details are always accurate to avoid any potential disruptions in service.') }} ”
                        <span class="author">- {{ __('messages.Phan Tuan Kiet') }}</span>
                    </blockquote>
                </div>
            </div>
            <div class="accordion-item">
                <div class="accordion-header">
                    <span>{{ __('messages.What payment methods are supported?') }}</span>
                    <span class="icon">+</span>
                </div>
                <div class="accordion-content">
                    <blockquote>
                        “ {{ __('messages.We support various convenient payment methods, including bank transfers, credit cards, and e-wallets such as Momo and ZaloPay. All transactions are encrypted to ensure absolute security. You can choose the method that suits you best. Our payment system is integrated with modern security features, giving you peace of mind when using it.') }} ”
                        <span class="author">- {{ __('messages.Phan Tuan Kiet') }}</span>
                    </blockquote>
                </div>
            </div>
            <div class="accordion-item">
                <div class="accordion-header">
                    <span>{{ __('messages.Can I request a refund?') }}</span>
                    <span class="icon">+</span>
                </div>
                <div class="accordion-content">
                    <blockquote>
                        “ {{ __('messages.Yes, you can request a refund if you are not satisfied with the product or service. Simply submit a refund request through the customer support section within 7 days of the transaction. Our support team will handle your request promptly and transparently. Don’t forget to review the refund policy carefully before submitting your request. Your satisfaction is our top priority!') }} ”
                        <span class="author">- {{ __('messages.Phan Tuan Kiet') }}</span>
                    </blockquote>
                </div>
            </div>
            <div class="accordion-item">
                <div class="accordion-header">
                    <span>{{ __('messages.How can I contact customer support?') }}</span>
                    <span class="icon">+</span>
                </div>
                <div class="accordion-content">
                    <blockquote>
                        “ {{ __('messages.You can reach us through various channels. Send an email, call our hotline, or use the 24/7 live chat feature on our website. Our team is always ready to assist you with the utmost dedication. We are committed to addressing all your concerns and providing the best solutions as quickly as possible. Don’t hesitate—contact us whenever you need!') }} ”
                        <span class="author">- {{ __('messages.Phan Tuan Kiet') }}</span>
                    </blockquote>
                </div>
            </div>
            <div class="accordion-item">
                <div class="accordion-header">
                    <span>{{ __('messages.How do I recover my account password?') }}</span>
                    <span class="icon">+</span>
                </div>
                <div class="accordion-content">
                    <blockquote>
                        “ {{ __('messages.If you forget your password, simply click "Forgot Password" on the login page. Enter your registered email, and we will send password recovery instructions to your email. Follow the steps in the email to create a new password. This process is secured to ensure the safety of your account. If you do not receive the email, please check your spam folder or contact our support team for immediate assistance.') }} ”
                        <span class="author">- {{ __('messages.Phan Tuan Kiet') }}</span>
                    </blockquote>
                    
                </div>
            </div>
            <div class="accordion-item">
                <div class="accordion-header">
                    <span>{{ __('messages.Can I cancel my account?') }}</span>
                    <span class="icon">+</span>
                </div>
                <div class="accordion-content">
                    <blockquote>
                        “ {{ __('messages.You have full rights to cancel your account if you no longer wish to use the service. Go to "Account Settings" and select the "Cancel Account" option. Please think carefully before proceeding, as this action will delete all your data. If you need assistance or prefer to pause your account instead of canceling, our support team is always ready to help you find a more suitable solution.') }} ”
                        <span class="author">- {{ __('messages.Phan Tuan Kiet') }}</span>
                    </blockquote>
                </div>
            </div>
            <div class="accordion-item">
                <div class="accordion-header">
                    <span>{{ __('messages.What offers are available for new customers?') }}</span>
                    <span class="icon">+</span>
                </div>
                <div class="accordion-content">
                    <blockquote>
                        “ {{ __('messages.We always have attractive promotional offers for new customers. For example, a 10% discount on your first purchase or a free 7-day trial. Promotions are regularly updated on our homepage or via email. Don’t miss the chance to experience high-quality services at the best cost. Sign up today to receive exclusive offers just for you!') }} ”
                        <span class="author">- {{ __('messages.Phan Tuan Kiet') }}</span>
                    </blockquote>
                </div>
            </div>
        </div>
    </section>
    <section class="courses" id="courses">
        <div class="title-home">
            <span class="title-left"></span>
            <h2>{{ __('messages.Contact Us Now') }}</h2>
            <span class="title-right"></span>
        </div>
        <p class="section-desc">
            {{ __('messages.Feel free to reach out to us for answers to your questions.') }}
        </p>
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
                <h2>Đăng nhập</h2>
                <div class="form-input-category">
                    <label for="email">Email</label>
                    <input type="email" class="input-name" name="email" placeholder="Nhập email">
                </div>
                <div class="form-input-category">
                    <label for="password">Password</label>
                    <input type="password" id="password" class="input-name" name="password" placeholder="Nhập password">
                    <i class="fa-solid fa-eye" id="toggle-password"></i>
                </div>
                <div class="form-login-input">
                    <div class="remember">
                        <input type="checkbox" name="remember" id="">
                        <span>Ghi nhớ mật khẩu</span>
                    </div>
                    <a href="">Quên mật khẩu?</a>
                </div>
                <div class="form-btn">
                    <button type="submit">Đăng nhập</button>
                </div>
                <div class="media-options">
                    <a href="#" class="field google">
                      <span>Login with Google</span>
                    </a>
                </div>
                <div class="BtnCloseCreate" onclick="closeCreateLogin()">
                    <p>X</p>
                </div>
            </form>
        </div>
    </div>

     <div class="modal" id="CreateRegister">
        <div class="ModelCreateRegister">
        <form  action="{{ route('register') }}" method="POST" onsubmit="return validateForm()">
            @csrf
            <h2>Đăng Ký</h2>
            <div class="form-input-category">
                <label for="full_name">Họ và tên <span class="red">*</span></label>
                <input type="text" class="input-name" name="full_name" id="full_name" placeholder="Nhập Họ và tên">
                <span class="input-error" id="full_name_error"></span>
            </div>
            <div class="form-input-category">
                <label for="email">Email <span class="red">*</span></label>
                <input type="email" class="input-name" name="email" id="email" placeholder="Nhập email">
                <span class="input-error" id="email_error"></span>
            </div>
            <div class="form-input-category">
                <label for="password">Password <span class="red">*</span></label>
                <input type="password" class="input-name" name="password" id="password" placeholder="Nhập password">
                <span class="input-error" id="password_error"></span>
            </div>
            <div class="form-input-category">
                <label for="password_confirmation">Password Confirmation <span class="red">*</span></label>
                <input type="password" class="input-name" name="password_confirmation" id="password_confirmation" placeholder="Nhập confirm password">
                <span class="input-error" id="password_confirmation_error"></span>
            </div>
            <div class="form-input-category">
                <label for="phone">Phone <span class="red">*</span></label>
                <input type="text" class="input-name" name="phone" id="phone" placeholder="Nhập phone">
                <span class="input-error" id="phone_error"></span>
            </div>
            <div class="form-input-category">
                <label for="address">Address <span class="red">*</span></label>
                <input type="text" class="input-name" name="address" id="address" placeholder="Nhập địa chỉ">
                <span class="input-error" id="address_error"></span>
            </div>
            <div class="form-input-category">
                <label for="gender">Gender <span class="red">*</span></label>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.imagesloaded/5.0.0/imagesloaded.pkgd.min.js"></script>
    <script src="https://unpkg.com/imagesloaded@5/imagesloaded.pkgd.min.js"></script>
    <script src="{{ asset('js/layout.js') }}"></script>
</body>
</html>