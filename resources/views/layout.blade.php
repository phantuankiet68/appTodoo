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
                Bạn muốn đọc tài liệu tiếng Anh trôi chảy và viết email, bài luận chuyên nghiệp?<br/>
                Hiểu sâu và nhanh các tài liệu học thuật.<br/>
                Bài tập thực tế, sửa lỗi chi tiết, theo từng bước.<br/>
                Phù hợp cho mọi trình độ, từ người mới bắt đầu đến nâng cao.<br/>
            </p>
            <div class="courses-btn">
                <button class="btn secondary-btn">{{ __('messages.Join Now') }}</button>
            </div>
            </div>
            <div class="column">
            <img src="{{asset('assets/images/photography.jpg')}}" />
            <h3>{{ __('messages.Japanese Learning Program') }}</h3>
            <p>
                Bạn muốn đọc tài liệu tiếng Nhật trôi chảy và viết email, bài luận chuyên nghiệp?<br/>
                Hiểu sâu và nhanh các tài liệu học thuật.<br/>
                Bài tập thực tế, sửa lỗi chi tiết, theo từng bước.<br/>
                Phù hợp cho mọi trình độ, từ người mới bắt đầu đến nâng cao.<br/>
            </p>
            <div class="courses-btn">
                <button class="btn secondary-btn">{{ __('messages.Join Now') }}</button>
            </div>
            </div>
            <div class="column">
            <img src="{{asset('assets/images/typing.jpg')}}" />
            <h3>{{ __('messages.Programming Learning Program') }}</h3>
            <p>
                Bạn muốn đọc tài liệu Lập trình trôi chảy và viết code chuyên nghiệp?<br/>
                Hiểu sâu và nhanh các tài liệu học thuật.<br/>
                Bài tập thực tế, sửa lỗi chi tiết, theo từng bước.<br/>
                Phù hợp cho mọi trình độ, từ người mới bắt đầu đến nâng cao.<br/>
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
            <h2>Thành viên UP</h2>
            <span class="title-right"></span>
        </div>
        <p class="section-desc">
            hiện tại có 5 thành viên nhóm. Và đã có hơn 1 năm kinh nghiệm làm việc thức tế.
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
            <h2>Dịch vụ mới</h2>
            <span class="title-right"></span>
        </div>
        <p class="section-desc">
            hiện tại có 5 thành viên nhóm. Và đã có hơn 1 năm kinh nghiệm làm việc thức tế.
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
            <h2>Sản phẩm mới</h2>
            <span class="title-right"></span>
        </div>
        <div class="section-desc">
            <div class="section-desc-spacebetween">
                <button><i class="fa-regular fa-circle-up"></i></button>
                <p>Mở khóa tất cả các tính năng tuyệt vời mới với phần mềm của chúng tôi.</p>
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
            <h2>Câu hỏi chung</h2>
            <span class="title-right"></span>
        </div>
        <p class="section-desc">
            Đây là một số câu hỏi liên quan đến sản phẩm tôi đang đưa vào sử dụng.
        </p>
        <div class="accordion">
            <div class="accordion-item active">
                <div class="accordion-header">
                    <span>Làm thế nào để đăng ký tài khoản?</span>
                    <span class="icon">+</span>
                </div>
                <div class="accordion-content">
                    <blockquote>
                        “ Nhấp vào nút "Đăng ký" ở góc trên cùng của trang. Điền đầy đủ thông tin cá nhân, như email và mật khẩu, và xác nhận qua email được gửi đến hộp thư của bạn. Chỉ mất vài phút để hoàn tất. Sau khi đăng ký, bạn có thể truy cập vào tất cả các tính năng trên website. Nếu gặp sự cố, đừng ngần ngại liên hệ với đội ngũ hỗ trợ để được giúp đỡ nhanh chóng! ”
                        <span class="author">- Phan Tuấn Kiệt</span>
                    </blockquote>
                </div>
            </div>
            <div class="accordion-item">
                <div class="accordion-header">
                    <span>Tôi có thể thay đổi thông tin cá nhân không?</span>
                    <span class="icon">+</span>
                </div>
                <div class="accordion-content">
                    <blockquote>
                        “ Bạn hoàn toàn có thể thay đổi thông tin cá nhân bất cứ lúc nào. Truy cập vào mục "Hồ sơ cá nhân" trong tài khoản của bạn. Chỉ cần nhấp vào thông tin bạn muốn chỉnh sửa và lưu thay đổi. Hệ thống sẽ cập nhật ngay lập tức để bạn tiếp tục sử dụng. Đừng quên kiểm tra và đảm bảo thông tin luôn chính xác để tránh bất kỳ sự gián đoạn nào trong dịch vụ. ”
                        <span class="author">- Phan Tuấn Kiệt</span>
                    </blockquote>
                </div>
            </div>
            <div class="accordion-item">
                <div class="accordion-header">
                    <span>Phương thức thanh toán được hỗ trợ là gì?</span>
                    <span class="icon">+</span>
                </div>
                <div class="accordion-content">
                    <blockquote>
                        “ Chúng tôi hỗ trợ nhiều phương thức thanh toán tiện lợi, bao gồm chuyển khoản ngân hàng, thẻ tín dụng, và ví điện tử như Momo, ZaloPay. Mọi giao dịch đều được mã hóa để đảm bảo an toàn tuyệt đối. Bạn có thể lựa chọn phương thức phù hợp nhất với mình. Hệ thống thanh toán của chúng tôi được tích hợp bảo mật hiện đại, giúp bạn yên tâm khi sử dụng. ”
                        <span class="author">- Phan Tuấn Kiệt</span>
                    </blockquote>
                </div>
            </div>
            <div class="accordion-item">
                <div class="accordion-header">
                    <span>Tôi có thể yêu cầu hoàn tiền không?</span>
                    <span class="icon">+</span>
                </div>
                <div class="accordion-content">
                    <blockquote>
                        “ Có, bạn có thể yêu cầu hoàn tiền nếu không hài lòng với sản phẩm hoặc dịch vụ. Chỉ cần gửi yêu cầu hoàn tiền qua mục hỗ trợ khách hàng trong vòng 7 ngày kể từ khi giao dịch được thực hiện. Đội ngũ hỗ trợ của chúng tôi sẽ xử lý yêu cầu nhanh chóng và minh bạch. Đừng quên tham khảo kỹ chính sách hoàn tiền trước khi gửi yêu cầu. Sự hài lòng của bạn là ưu tiên hàng đầu của chúng tôi! ”
                        <span class="author">- Phan Tuấn Kiệt</span>
                    </blockquote>
                </div>
            </div>
            <div class="accordion-item">
                <div class="accordion-header">
                    <span>Làm cách nào để liên hệ với bộ phận hỗ trợ khách hàng?</span>
                    <span class="icon">+</span>
                </div>
                <div class="accordion-content">
                    <blockquote>
                        “ Bạn có thể liên hệ với chúng tôi qua nhiều kênh khác nhau. Gửi email, gọi hotline, hoặc sử dụng tính năng chat trực tuyến 24/7 trên website. Đội ngũ của chúng tôi luôn sẵn sàng hỗ trợ bạn với tinh thần tận tâm nhất. Chúng tôi cam kết giải đáp mọi thắc mắc và đưa ra giải pháp tốt nhất trong thời gian nhanh nhất có thể. Đừng ngần ngại, hãy liên hệ ngay khi bạn cần! ”
                        <span class="author">- Phan Tuấn Kiệt</span>
                    </blockquote>
                </div>
            </div>
            <div class="accordion-item">
                <div class="accordion-header">
                    <span>Làm thế nào để khôi phục mật khẩu tài khoản?</span>
                    <span class="icon">+</span>
                </div>
                <div class="accordion-content">
                    <blockquote>
                        “ Nếu bạn quên mật khẩu, chỉ cần nhấp vào "Quên mật khẩu" trên trang đăng nhập. Nhập email đã đăng ký và chúng tôi sẽ gửi hướng dẫn khôi phục mật khẩu đến email của bạn. Làm theo các bước trong email để tạo mật khẩu mới. Quy trình này được bảo mật để đảm bảo tài khoản của bạn an toàn. Nếu không nhận được email, vui lòng kiểm tra hộp thư rác hoặc liên hệ với đội ngũ hỗ trợ để được giúp đỡ ngay. ”
                        <span class="author">- Phan Tuấn Kiệt</span>
                    </blockquote>
                    
                </div>
            </div>
            <div class="accordion-item">
                <div class="accordion-header">
                    <span>Tôi có thể hủy tài khoản của mình không?</span>
                    <span class="icon">+</span>
                </div>
                <div class="accordion-content">
                    <blockquote>
                        “ Bạn hoàn toàn có quyền hủy tài khoản nếu không còn sử dụng dịch vụ. Truy cập vào "Cài đặt tài khoản" và chọn tùy chọn "Hủy tài khoản". Hãy cân nhắc kỹ trước khi thực hiện, vì hành động này sẽ xóa toàn bộ dữ liệu của bạn. Nếu cần hỗ trợ hoặc muốn tạm ngừng tài khoản thay vì hủy, đội ngũ hỗ trợ của chúng tôi luôn sẵn sàng giúp bạn tìm giải pháp phù hợp hơn. ”
                        <span class="author">- Phan Tuấn Kiệt</span>
                    </blockquote>
                </div>
            </div>
            <div class="accordion-item">
                <div class="accordion-header">
                    <span>Có những ưu đãi nào dành cho khách hàng mới?</span>
                    <span class="icon">+</span>
                </div>
                <div class="accordion-content">
                    <blockquote>
                        “  Chúng tôi luôn có nhiều chương trình ưu đãi hấp dẫn dành cho khách hàng mới. Ví dụ: Giảm giá 10% cho lần mua đầu tiên hoặc gói dùng thử miễn phí trong 7 ngày. Các chương trình khuyến mãi được cập nhật thường xuyên trên trang chủ hoặc qua email. Đừng bỏ lỡ cơ hội trải nghiệm các dịch vụ chất lượng với chi phí tốt nhất. Đăng ký ngay hôm nay để nhận ưu đãi dành riêng cho bạn!”
                        <span class="author">- Phan Tuấn Kiệt</span>
                    </blockquote>
                </div>
            </div>
        </div>
    </section>
    <section class="courses" id="courses">
        <div class="title-home">
            <span class="title-left"></span>
            <h2>Liên hệ ngay</h2>
            <span class="title-right"></span>
        </div>
        <p class="section-desc">
            Hãy liên hệ với chúng tôi để được giải đáp các thắt mắt từ bạn.
        </p>
        <section id="section-wrapper">
            <div class="box-wrapper">
                <div class="info-wrap">
                    <h3 class="info-sub-title">Hãy dành một chút thời gian để điền vào biểu mẫu, và đội ngũ chuyên gia tận tâm của chúng tôi sẽ nhanh chóng liên hệ lại với bạn trong vòng 24 giờ. Chúng tôi luôn sẵn sàng lắng nghe và mang đến giải pháp phù hợp nhất, đảm bảo bạn nhận được sự hỗ trợ tốt nhất!</h3>
                    <ul class="info-details">
                        <li>
                            <i class="fas fa-location-dot"></i>
                            <span>Địa chỉ:</span> <a href="tel:+ 0768173369">phường Tân Thế Hòa, quận Tân Phú, Thành Phố Hồ Chí Minh.</a>
                        </li>
                        <li>
                            <i class="fas fa-phone-alt"></i>
                            <span class="mx-10">Phone:</span> <a class="mx-10" href="tel:+ 0768173369">+ 0768173369</a>
                        </li>
                        <li>
                            <i class="fas fa-paper-plane"></i>
                            <span class="mx-10">Email:</span> <a class="mx-10" href="mailto:tuankietity@gmail.com">tuankietity@gmail.com</a>
                        </li>
                        <li>
                            <i class="fas fa-globe"></i>
                            <span class="mx-10">Website:</span> <a class="mx-10" href="#">yoursite.com</a>
                        </li>
                    </ul>
                    <ul class="social-icons">
                        <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                    </ul>
                </div>
                <div class="form-wrap">
                    <form action="#" method="POST">
                        <div class="form-fields">
                            <div class="form-group w-full">
                                <input type="text" class="fname" placeholder="Tiêu đề">
                            </div>
                            <div class="form-group">
                                <input type="text" class="fname" placeholder="Họ và tên">
                            </div>
                            <div class="form-group">
                                <input type="text" class="lname" placeholder="Người nhận">
                            </div>
                            <div class="form-group">
                                <input type="email" class="email" placeholder="CC">
                            </div>
                            <div class="form-group">
                                <input type="number" class="phone" placeholder="Phone">
                            </div>
                            <div class="form-group">
                                <textarea name="message" id="" placeholder="Write your message"></textarea>
                            </div>
                        </div>
                        <input type="submit" value="Gửi" class="submit-button">
                    </form>
                </div>
            </div>
        </section>
    </section>
    <!------ Section: Download App ------>
    <section class="download-app" id="download-app">
        <div class="darksoul-footer">
            <div class="darksoul-footer-top">
        
            </div>
            <div class="darksoul-footer-content">
                <div class="darksoul-footer-section">
                    <h1 class="darksoul-footer-heading">DarkSoul</h1>
                </div>
                <div class="darksoul-footer-section">
                    <ul class="d-footer-ul">
                        <li class="d-footer-li-h"><b>Links</b></li>
                        <li class="d-footer-li">Home</li>
                        <li class="d-footer-li">About</li>
                        <li class="d-footer-li">Blog</li>
                        <li class="d-footer-li">Design</li>
                        <li class="d-footer-li">Documentation</li>
                    </ul>
                </div>
                <div class="darksoul-footer-section">
                    <ul class="d-footer-ul">
                        <li class="d-footer-li-h"><b>Blog</b></li>
                        <li class="d-footer-li">UI / UX</li>
                        <li class="d-footer-li">CodePens</li>
                        <li class="d-footer-li">Codedamn</li>
                        <li class="d-footer-li">Figma</li>
                        <li class="d-footer-li">Oracle EBS</li>
                    </ul>
                </div>
                <div class="darksoul-footer-section">
                    <ul class="d-footer-ul">
                        <li class="d-footer-li-h"><b>Privacy policy</b></li>
                        <li class="d-footer-li-h"><b>Contact Us</b></li>
                        
                    </ul>
                </div>
                <div class="darksoul-footer-section">
                    <div class="logo-head">
                        <b>Follow me on</b>
                    </div>
                    <div class="logo">
                       <a href="https://www.instagram.com/dark.soul.io/" target="_blank"><img width="30" height="30" src="https://img.icons8.com/ios-glyphs/100/instagram-new.png" alt="instagram-new"/></a>
                       <a href="https://www.youtube.com/channel/UCooCOD2j8Q4Y9ysYZIFzI_w" target="_blank"><img width="30" height="30" src="https://img.icons8.com/ios-filled/100/youtube-squared.png" alt="youtube-squared"/></a>
                        <a href="https://dribbble.com/dark-soul" target="_blank"><img width="25" height="25" src="https://img.icons8.com/offices/100/dribbble.png" alt="dribbble"/></a>
                    </div>    
                </div>
            </div>
            <div class="darksoul-footer-bottom">
                <div class="darksoul-footer-bottom-sec">
                    <p>Icons by <a href="https://icons8.com/" target="_blank">Icons8</a></p>
                </div>
                <div class="darksoul-footer-bottom-sec">
                    <p>Designed & Created by <a href="https://darksoul-codepen.github.io/" target="_blank">DarkSoul</a></p>
                </div>
                <div class="darksoul-footer-bottom-sec">
                    <p>&copy; 2024 DarkSoul</p>
                </div>
                
            </div>
            
        </div>
    </section>
    <!-- <div class="webHome">
        <header> 
            <div class="header-aside">
                <div class="header-aside-list hidden">
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
                    <div class="tonggle-menu">
                        <button onclick="showMenu()"><i class="fa-solid fa-bars"></i></button>
                    </div>
                    <ul id="menu">
                        <li><a href="/" onclick="setActiveItem(1);" class="item"><i class="fa-solid fa-house"></i> Home</a></li>
                        <li><a href="#About" onclick="setActiveItem(2);" class="item"><i class="fa-solid fa-address-card"></i> About Us</a></li>
                        <li><a href="#Services" onclick="setActiveItem(3);" class="item"><i class="fa-solid fa-gears"></i> Services</a></li>
                        <li><a href="#Product" onclick="setActiveItem(4);" class="item"><i class="fa-brands fa-product-hunt"></i> Product</a></li>
                        <li><a href="#Contact" onclick="setActiveItem(5);" class="item"><i class="fa-solid fa-file-contract"></i> Contact Us</a></li>
                        @if (Auth::check())
                            <li>
                                <a href="{{ route('profile.show', ['full_name' => str_replace(' ', '-', Auth::user()->full_name)]) }}" class="item">
                                    <i class="fa-regular fa-user"></i> {{ Auth::user()->full_name }}
                                </a>
                            </li>
                        @endif
                    </ul>
                </nav>
            </div>
        </header>
        <div class="container">
            
            <section class="page-left"  id="extraItems">
                <div class="page-left-item banner" id="item1">
                    <div class="patern-layer-one"></div>
                    <div class="patern-layer-two"></div>
                    <div class="slidershow middle">
                        <div class="slides">
                            <div class="slide s1">
                                <img src="{{asset('assets/images/banner1.jpg')}}" alt="">
                            </div>
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
                                <a href="#About" onclick="setActiveItem(2);" class="btn-more">More here</a>
                                <a href="/dashboard" class="btn-dashboard">Dashboard</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="page-left-item" id="item2">
                    <section id="about-section">
                        <div class="about-right">
                            <h1>About Us</h1>
                            <p>Hệ thống khóa học và công cụ của chúng tôi được thiết kế nhằm hỗ trợ người dùng phát triển kỹ năng cá nhân và nâng cao hiệu quả công việc. </p>
                            <p>
                                1. Web Developer - Giúp người dùng học và ứng dụng kiến thức lập trình vào công việc một cách hiệu quả và tiện lợi.<br/>
                                2. UX/UI Design - Nghiên cứu nhu cầu của người dùng để phát triển các thành phần giao diện thân thiện và dễ sử dụng.<br/>
                                3. Content Creation - Hướng dẫn lập kế hoạch, sản xuất và chia sẻ nội dung một cách hấp dẫn và hiệu quả.<br/>
                                4. Task Issue - Quản lý dự án, chia công việc thành nhiều giai đoạn để tối ưu hóa hiệu suất.<br/>
                                5. Financial - Cung cấp công cụ lập kế hoạch tài chính, giám sát và quản lý chi tiêu cá nhân.<br/>
                                6. Daily Task - Giúp người dùng liệt kê và quản lý công việc hàng ngày một cách tỉ mỉ và tiện lợi.<br/>
                                7. Japanese & English - Các khóa học ngoại ngữ nhằm giúp người học nắm vững kiến thức và kiểm tra kỹ năng của mình.<br/>
                                8. Calendar - Quản lý lịch trình và sắp xếp công việc, giúp người dùng tổ chức thời gian hiệu quả hơn.<br/>
                                *Lưu ý: Có nhận làm remote website + đồ án các loại nếu được yêu cầu<br/>
                            </p>
                            <div class="address">
                                <ul>
                                    <li>
                                        <span class="address-logo">
                                            <i class="fas fa-paper-plane"></i>
                                        </span>
                                        <p>Address</p>
                                        <span class="saprater">:</span>
                                        <p>Xã Long Hậu, huyện Cần Giuộc, tỉnh Long An</p>
                                    </li>
                                    <li>
                                        <span class="address-logo">
                                            <i class="fas fa-phone-alt"></i>
                                        </span>
                                        <p>Phone No</p>
                                        <span class="saprater">:</span>
                                        <p>+033 537 9851</p>
                                    </li>
                                    <li>
                                        <span class="address-logo">
                                            <i class="far fa-envelope"></i>
                                        </span>
                                        <p>Email ID</p>
                                        <span class="saprater">:</span>
                                        <p>tuankietity@gmail.com</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </section>            
                </div>
                <div class="page-left-item" id="item3">
                    <section class="table-wrapper">
                        <table>
                            <thead>
                            <tr>
                                <th></th>
                                <th class="trigger"><p>Design UX/UI</p><span>Basic</span></th>
                                <th class="trigger"><p>Design UX/UI</p><span>plus</span></th>
                                <th class="trigger"><p>Website Develop</p><span>Basic</span></th>
                                <th class="trigger"><p>Website Develop</p><span>plus</span></th>
                                <th class="trigger"><p>WebSite</p><span>plus</span></th>
                                <th class="trigger"><p>Remote</p><span>plus</span></th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td><p><strong>Price</strong></p></td>
                                <td><p>$10</p></td>
                                <td><p>$20</p></td>
                                <td><p>$15</p></td>
                                <td><p>$25</p></td>
                                <td><p>$38</p></td>
                                <td><p>$30</p></td>
                            </tr>
                            <tr>
                                <td><p><strong>Html/Xml/Css</strong></p></td>
                                <td><p class="icon-check"><i class="fa-solid fa-circle-check"></i></p></td>
                                <td><p class="icon-check"><i class="fa-solid fa-circle-check"></i></p></td>
                                <td><p class="icon-check"><i class="fa-solid fa-circle-check"></i></p></td>
                                <td><p class="icon-check"><i class="fa-solid fa-circle-check"></i></p></td>
                                <td><p class="icon-check"><i class="fa-solid fa-circle-check"></i></p></td>
                                <td><p class="icon-check"><i class="fa-solid fa-circle-check"></i></p></td>
                            </tr>
                            <tr>
                                <td><p><strong>Javascript</strong></p></td>
                                <td><p class="icon-check"><i class="fa-solid fa-circle-check"></i></p></td>
                                <td><p class="icon-check"><i class="fa-solid fa-circle-check"></i></p></td>
                                <td><p class="icon-check"><i class="fa-solid fa-circle-check"></i></p></td>
                                <td><p class="icon-check"><i class="fa-solid fa-circle-check"></i></p></td>
                                <td><p class="icon-check"><i class="fa-solid fa-circle-check"></i></p></td>
                                <td><p class="icon-check"><i class="fa-solid fa-circle-check"></i></p></td>
                            </tr>
                            <tr>
                                <td><p><strong>Response</strong></p></td>
                                <td><p class="icon-check"><i class="fa-solid fa-circle-check"></i></p></td>
                                <td><p class="icon-check"><i class="fa-solid fa-circle-check"></i></p></td>
                                <td><p class="icon-check"><i class="fa-solid fa-circle-check"></i></p></td>
                                <td><p class="icon-check"><i class="fa-solid fa-circle-check"></i></p></td>
                                <td><p class="icon-check"><i class="fa-solid fa-circle-check"></i></p></td>
                                <td><p class="icon-check"><i class="fa-solid fa-circle-check"></i></p></td>
                            </tr>
                            <tr>
                                <td><p><strong>Animation</strong></p></td>
                                <td><p class="icon-check-error"><i class="fa-solid fa-circle-check"></i></p></td>
                                <td><p class="icon-check"><i class="fa-solid fa-circle-check"></i></p></td>
                                <td><p class="icon-check-error"><i class="fa-solid fa-circle-check"></i></p></td>
                                <td><p class="icon-check"><i class="fa-solid fa-circle-check"></i></p></td>
                                <td><p class="icon-check"><i class="fa-solid fa-circle-check"></i></p></td>
                                <td><p class="icon-check"><i class="fa-solid fa-circle-check"></i></p></td>
                            </tr>
                            <tr>
                                <td><p><strong>Database</strong></p></td>
                                <td><p class="icon-check-error"><i class="fa-solid fa-circle-check"></i></p></td>
                                <td><p class="icon-check-error"><i class="fa-solid fa-circle-check"></i></p></td>
                                <td><p class="icon-check-error"><i class="fa-solid fa-circle-check"></i></p></td>
                                <td><p class="icon-check"><i class="fa-solid fa-circle-check"></i></p></td>
                                <td><p class="icon-check"><i class="fa-solid fa-circle-check"></i></p></td>
                                <td><p class="icon-check"><i class="fa-solid fa-circle-check"></i></p></td>
                            </tr>
                            <tr>
                                <td><p><strong>Framework</strong></p></td>
                                <td><p class="icon-check-error"><i class="fa-solid fa-circle-check"></i></p></td>
                                <td><p class="icon-check-error"><i class="fa-solid fa-circle-check"></i></p></td>
                                <td><p class="icon-check"><i class="fa-solid fa-circle-check"></i></p></td>
                                <td><p class="icon-check"><i class="fa-solid fa-circle-check"></i></p></td>
                                <td><p class="icon-check"><i class="fa-solid fa-circle-check"></i></p></td>
                                <td><p class="icon-check"><i class="fa-solid fa-circle-check"></i></p></td>
                            </tr>
                            <tr>
                                <td><p><strong>Front-end</strong></p></td>
                                <td><p class="icon-check-error"><i class="fa-solid fa-circle-check"></i></p></td>
                                <td><p class="icon-check-error"><i class="fa-solid fa-circle-check"></i></p></td>
                                <td><p class="icon-check"><i class="fa-solid fa-circle-check"></i></p></td>
                                <td><p class="icon-check"><i class="fa-solid fa-circle-check"></i></p></td>
                                <td><p class="icon-check"><i class="fa-solid fa-circle-check"></i></p></td>
                                <td><p class="icon-check"><i class="fa-solid fa-circle-check"></i></p></td>
                            </tr>
                            <tr>
                                <td><p><strong>Back-end</strong></p></td>
                                <td><p class="icon-check-error"><i class="fa-solid fa-circle-check"></i></p></td>
                                <td><p class="icon-check-error"><i class="fa-solid fa-circle-check"></i></p></td>
                                <td><p class="icon-check"><i class="fa-solid fa-circle-check"></i></p></td>
                                <td><p class="icon-check"><i class="fa-solid fa-circle-check"></i></p></td>
                                <td><p class="icon-check"><i class="fa-solid fa-circle-check"></i></p></td>
                                <td><p class="icon-check"><i class="fa-solid fa-circle-check"></i></p></td>
                            </tr>
                            <tr>
                                <td><p><strong>Linux</strong></p></td>
                                <td><p class="icon-check-error"><i class="fa-solid fa-circle-check"></i></p></td>
                                <td><p class="icon-check-error"><i class="fa-solid fa-circle-check"></i></p></td>
                                <td><p class="icon-check"><i class="fa-solid fa-circle-check"></i></p></td>
                                <td><p class="icon-check"><i class="fa-solid fa-circle-check"></i></p></td>
                                <td><p class="icon-check"><i class="fa-solid fa-circle-check"></i></p></td>
                                <td><p class="icon-check"><i class="fa-solid fa-circle-check"></i></p></td>
                            </tr>
                            <tr>
                                <td><p><strong>Update</strong></p> <p>6 tháng</p></td>
                                <td><p class="icon-check-error"><i class="fa-solid fa-circle-check"></i></p></td>
                                <td><p class="icon-check-error"><i class="fa-solid fa-circle-check"></i></p></td>
                                <td><p class="icon-check"><i class="fa-solid fa-circle-check"></i></p></td>
                                <td><p class="icon-check"><i class="fa-solid fa-circle-check"></i></p></td>
                                <td><p class="icon-check"><i class="fa-solid fa-circle-check"></i></p></td>
                                <td><p class="icon-check"><i class="fa-solid fa-circle-check"></i></p></td>
                            </tr>
                            </tbody>
                        </table>
                    </section>
                </div>
                <div class="page-left-item" id="item4">
                    <div class="page-product">
                        <div class="page-product-list">
                            <div class="page-product-item">
                                <div class="page-product-image">
                                    <img src="{{asset('assets/images/product1.jpg')}}" alt="">
                                </div>
                            </div>
                            <div class="page-product-item">
                                <div class="page-product-image">
                                    <img src="{{asset('assets/images/product2.jpg')}}" alt="">
                                </div>
                            </div>
                            <div class="page-product-item">
                                <div class="page-product-image">
                                    <img src="{{asset('assets/images/product3.jpg')}}" alt="">
                                </div>
                            </div>
                            <div class="page-product-item">
                                <div class="page-product-image">
                                    <img src="{{asset('assets/images/product4.jpg')}}" alt="">
                                </div>
                            </div>
                            <div class="page-product-item">
                                <div class="page-product-image">
                                    <img src="{{asset('assets/images/product5.jpg')}}" alt="">
                                </div>
                            </div>
                            <div class="page-product-item">
                                <div class="page-product-image">
                                    <img src="{{asset('assets/images/product6.jpg')}}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="page-left-item" id="item5">
                    <div class="row-contact">
                        <h3>Contact Us</h3>
                        <form name="myForm" action="/file.php" onsubmit="return validateForm()" method="post">
                            <div class="form-contact">
                                <div class="form-contact-group">
                                    <div class="form-contact-input">
                                        <label>Your name <span class="required">*</span></label>
                                        <input type="text" name="name" class="long"/>
                                        <span class="error" id="errorname"></span>
                                    </div>
                                    <div class="form-contact-input">
                                        <label>Your name <span class="required">*</span></label>
                                        <input type="text" name="name" class="long"/>
                                        <span class="error" id="errorname"></span>
                                    </div>
                                </div>
                                <div class="form-contact-input">
                                    <label>Your name <span class="required">*</span></label>
                                    <input type="text" name="name" class="long"/>
                                    <span class="error" id="errorname"></span>
                                </div>
                                <div class="form-contact-input">
                                    <label>Your name <span class="required">*</span></label>
                                    <input type="text" name="name" class="long"/>
                                    <span class="error" id="errorname"></span>
                                </div>
                                <div class="form-contact-input">
                                    <label>Your name <span class="required">*</span></label>
                                    <textarea type="text" name="name" class="long"></textarea>
                                    <span class="error" id="errorname"></span>
                                </div>
                                <div class="form-contact-button">
                                    <button type="submit">Send</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </section>
            <section class="page-right" id="extraItems">
                <div class="page-right-item" id="item5">
                    <div class="row-contact">
                        <div class="form-contact-top">
                            <p>Hãy gửi tin nhắn cho chúng tôi và chúng tôi sẽ phản hồi bạn sớm nhất.</p>
                            <p>Ngày/giờ làm việc: Thứ Hai - Thứ Sáu, 9 giờ sáng - 4 giờ chiều theo giờ PST.</p>
                            <h4>Liện hệ cá nhân</h4>
                            <div class="form-contac-text">
                                <p><i class="fa-solid fa-location-dot"></i>Address: xã Long Hậu, huyện Cần Giuộc, tỉnh Long An.</p>
                                <p><i class="fa-solid fa-phone"></i>Phone: 0365656525</p>
                                <p><i class="fa-regular fa-envelope"></i>Email: tuankietity@gmail.com</p>
                            </div>
                            <h4>Liện hệ qua map</h4>
                            <div class="form-contac-text">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31370.626025749472!2d106.66400590893154!3d10.631586977374146!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x317530bed1f060a3%3A0x70f4e114ba50e13e!2zTG9uZyBI4bqtdSwgVGjDoG5oIHBo4buRIEjhu5MgQ2jDrSBNaW5oLCBMb25nIEFuLCBWaeG7h3QgTmFt!5e0!3m2!1svi!2s!4v1730427208407!5m2!1svi!2s" width="100%" height="235" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                            <h4>Liện hệ mạng xã hội</h4>
                            <div class="form-contact-send">
                                <a href="">
                                    <i class="fa-brands fa-facebook"></i>
                                </a>
                                <a href="">
                                    <i class="fa-brands fa-linkedin"></i>
                                </a>
                                <a href="">
                                    <i class="fa-brands fa-tiktok"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="page-right-item" id="item4">
                    <div class="page-product">
                        <div class="page-product-list">
                            <div class="page-product-item">
                                <div class="page-product-image">
                                    <img src="{{asset('assets/images/product7.jpg')}}" alt="">
                                </div>
                            </div>
                            <div class="page-product-item">
                                <div class="page-product-image">
                                    <img src="{{asset('assets/images/product8.jpg')}}" alt="">
                                </div>
                            </div>
                            <div class="page-product-item">
                                <div class="page-product-image">
                                    <img src="{{asset('assets/images/product9.jpg')}}" alt="">
                                </div>
                            </div>
                            <div class="page-product-item">
                                <div class="page-product-image">
                                    <img src="{{asset('assets/images/product10.jpg')}}" alt="">
                                </div>
                            </div>
                            <div class="page-product-item">
                                <div class="page-product-image">
                                    <img src="{{asset('assets/images/product11.jpg')}}" alt="">
                                </div>
                            </div>
                            <div class="page-product-item">
                                <div class="page-product-image">
                                    <img src="{{asset('assets/images/product12.jpg')}}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="page-right-item" id="item3">
                    <div class="row-services">
                        <div class="service">
                            <div class="services">
                                <div class="service-logo">
                                    <i class="fa-solid fa-pen-ruler"></i>
                                </div>
                                <h4>Website Developer</h4>
                                <div class="service-content">
                                    <p>Các khóa học giúp người dùng học tập và áp dụng kiến thức vào công việc một cách thuận tiện và hiệu quả. Các khóa học này được thiết kế nhằm mang lại trải nghiệm học tập dễ hiểu, thực tiễn, giúp người học nhanh chóng nâng cao kỹ năng và đạt được kết quả mong muốn.</p>
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
                                <h4>UX/UI Design</h4>
                                <div class="service-content">
                                    <p>Chúng tôi sẽ nghiên cứu nhu cầu của người dùng để phát triển các thành phần có sẵn, cung cấp giải pháp giúp sản phẩm dễ sử dụng và tối ưu hóa. Những thành phần này được thiết kế nhằm đáp ứng các yêu cầu thực tế, mang lại hiệu quả cao trong quá trình sử dụng.</p>
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
                                <h4>Task Issue</h4>
                                <div class="service-content">
                                    <p>Trong công việc, một dự án thường được chia thành nhiều giai đoạn để dễ dàng quản lý và giải quyết từng vấn đề, giúp hoàn thành công việc trong khoảng thời gian nhất định. Việc phân chia này giúp, đảm bảo tiến độ và chất lượng của dự án theo từng giai đoạn. </p>
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
                                <h4>Financial</h4>
                                <div class="service-content">
                                    <p>Chúng tôi đã xây dựng quy trình lập kế hoạch, theo dõi và quản lý tài chính cá nhân nhằm đảm bảo sự ổn định tài chính, từ đó nâng cao chất lượng cuộc sống. Quy trình này giúp người dùng quản lý chi tiêu hiệu quả, đạt được các mục tiêu tài chính và duy trì sự cân bằng trong cuộc sống.</p>
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
                                <h4>Languages</h4>
                                <div class="service-content">
                                    <p>Chúng tôi thiết kế các khóa học tiếng Anh và tiếng Nhật nhằm giúp bạn nâng cao kiến thức và rèn luyện kỹ năng giao tiếp trong nhiều tình huống. Từ cơ bản đến nâng cao. Khóa học bao gồm các bài học cô đọng và bài kiểm tra để đánh giá chất lượng, giúp bạn học hiệu quả và tiến bộ nhanh chóng.</p>
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
                                <h4>Calendar</h4>
                                <div class="service-content">
                                    <p>Chúng tôi phát triển hệ thống với mục đích quản lý thông tin quan trọng và sắp xếp công việc theo một lịch trình nhất định. Công cụ này hỗ trợ người dùng tổ chức công việc một cách khoa học, giúp theo dõi tiến độ, đảm bảo hoàn thành đúng thời hạn. Nhờ vào khả năng quản lý linh hoạt và hiệu quả.</p>
                                </div>
                            </div>
                            <div class="shadowOne"></div>
                            <div class="shadowTwo"></div>
                        </div>
                    </div>
                </div>
                <div class="page-right-item" id="item2">
                    <div class="wrapper-item">
                        <div class="shape-1"></div>
                        <div class="shape-2"></div>
                        <div class="container-item">
                            <h3>Front-end</h3>
                            <div class="skills">
                                <div class="details">
                                    <span>HTML</span>
                                    <span>90%</span>
                                </div>
                                <div class="bar">
                                    <div id="html-bar"></div>
                                </div>
                            </div>
                            <div class="skills">
                                <div class="details">
                                    <span>CSS/SCSS</span>
                                    <span>85%</span>
                                </div>
                                <div class="bar">
                                    <div id="css-bar"></div>
                                </div>
                            </div>
                            <div class="skills">
                                <div class="details">
                                    <span>Javascript</span>
                                    <span>72%</span>
                                </div>
                                <div class="bar">
                                    <div id="js-bar"></div>
                                </div>
                            </div>
                            <div class="skills">
                                <div class="details">
                                    <span>React JS</span>
                                    <span>75%</span>
                                </div>
                                <div class="bar">
                                    <div id="css-bar"></div>
                                </div>
                            </div>
                            <div class="skills">
                                <div class="details">
                                    <span>Next JS</span>
                                    <span>68%</span>
                                </div>
                                <div class="bar">
                                    <div id="react-bar"></div>
                                </div>
                            </div>
                            <div class="skills">
                                <div class="details">
                                    <span>React Native</span>
                                    <span>68%</span>
                                </div>
                                <div class="bar">
                                    <div id="react-bar"></div>
                                </div>
                            </div>
                            <div class="skills">
                                <div class="details">
                                    <span>jQuery</span>
                                    <span>70%</span>
                                </div>
                                <div class="bar">
                                    <div id="jQuery-bar"></div>
                                </div>
                            </div>
                            <div class="skills">
                                <div class="details">
                                    <span>Typescript</span>
                                    <span>68%</span>
                                </div>
                                <div class="bar">
                                    <div id="react-bar"></div>
                                </div>
                            </div>
                            <div class="skills">
                                <div class="details">
                                    <span>Vue JS</span>
                                    <span>75%</span>
                                </div>
                                <div class="bar">
                                    <div id="css-bar"></div>
                                </div>
                            </div>
                            <div class="skills">
                                <div class="details">
                                    <span>Nust Js</span>
                                    <span>68%</span>
                                </div>
                                <div class="bar">
                                    <div id="react-bar"></div>
                                </div>
                            </div>
                            <div class="skills">
                                <div class="details">
                                    <span>Angular</span>
                                    <span>68%</span>
                                </div>
                                <div class="bar">
                                    <div id="react-bar"></div>
                                </div>
                            </div>
                            <h3>Back-end</h3>
                            <div class="skills">
                                <div class="details">
                                    <span>PHP/Laravel</span>
                                    <span>72%</span>
                                </div>
                                <div class="bar">
                                    <div id="js-bar"></div>
                                </div>
                            </div>
                            <div class="skills">
                                <div class="details">
                                    <span>WordPress</span>
                                    <span>68%</span>
                                </div>
                                <div class="bar">
                                    <div id="react-bar"></div>
                                </div>
                            </div>
                            <div class="skills">
                                <div class="details">
                                    <span>DOT.Net</span>
                                    <span>68%</span>
                                </div>
                                <div class="bar">
                                    <div id="react-bar"></div>
                                </div>
                            </div>
                            <div class="skills">
                                <div class="details">
                                    <span>Node JS</span>
                                    <span>72%</span>
                                </div>
                                <div class="bar">
                                    <div id="js-bar"></div>
                                </div>
                            </div>
                            <div class="skills">
                                <div class="details">
                                    <span>Java</span>
                                    <span>68%</span>
                                </div>
                                <div class="bar">
                                    <div id="react-bar"></div>
                                </div>
                            </div>
                        </div>
                        <div class="container-item">
                            <h3>Linux</h3>
                            <div class="skills">
                                <div class="details">
                                    <span>AWS</span>
                                    <span>68%</span>
                                </div>
                                <div class="bar">
                                    <div id="react-bar"></div>
                                </div>
                            </div>
                            <div class="skills">
                                <div class="details">
                                    <span>FTP</span>
                                    <span>72%</span>
                                </div>
                                <div class="bar">
                                    <div id="js-bar"></div>
                                </div>
                            </div>
                            <div class="skills">
                                <div class="details">
                                    <span>Ubuntu 22.4</span>
                                    <span>75%</span>
                                </div>
                                <div class="bar">
                                    <div id="css-bar"></div>
                                </div>
                            </div>
                            <h3>SQL</h3>
                            <div class="skills">
                                <div class="details">
                                    <span>SQL server</span>
                                    <span>68%</span>
                                </div>
                                <div class="bar">
                                    <div id="react-bar"></div>
                                </div>
                            </div>
                            <div class="skills">
                                <div class="details">
                                    <span>My SQL</span>
                                    <span>72%</span>
                                </div>
                                <div class="bar">
                                    <div id="js-bar"></div>
                                </div>
                            </div>
                            <div class="skills">
                                <div class="details">
                                    <span>Mongo DB</span>
                                    <span>68%</span>
                                </div>
                                <div class="bar">
                                    <div id="react-bar"></div>
                                </div>
                            </div>
                            <div class="skills">
                                <div class="details">
                                    <span>SQL workbench</span>
                                    <span>68%</span>
                                </div>
                                <div class="bar">
                                    <div id="react-bar"></div>
                                </div>
                            </div>
                            <h3>Khác</h3>
                            <div class="skills">
                                <div class="details">
                                    <span>Git</span>
                                    <span>72%</span>
                                </div>
                                <div class="bar">
                                    <div id="js-bar"></div>
                                </div>
                            </div>
                            <div class="skills">
                                <div class="details">
                                    <span>Bootstrap</span>
                                    <span>75%</span>
                                </div>
                                <div class="bar">
                                    <div id="css-bar"></div>
                                </div>
                            </div>
                            <div class="skills">
                                <div class="details">
                                    <span>Taiwin</span>
                                    <span>68%</span>
                                </div>
                                <div class="bar">
                                    <div id="react-bar"></div>
                                </div>
                            </div>
                            <div class="skills">
                                <div class="details">
                                    <span>Chart</span>
                                    <span>68%</span>
                                </div>
                                <div class="bar">
                                    <div id="react-bar"></div>
                                </div>
                            </div>
                            <div class="skills">
                                <div class="details">
                                    <span>Three JS</span>
                                    <span>68%</span>
                                </div>
                                <div class="bar">
                                    <div id="react-bar"></div>
                                </div>
                            </div>
                            <div class="skills">
                                <div class="details">
                                    <span>Word</span>
                                    <span>72%</span>
                                </div>
                                <div class="bar">
                                    <div id="js-bar"></div>
                                </div>
                            </div>
                            <div class="skills">
                                <div class="details">
                                    <span>Excel</span>
                                    <span>72%</span>
                                </div>
                                <div class="bar">
                                    <div id="js-bar"></div>
                                </div>
                            </div>
                            <div class="skills">
                                <div class="details">
                                    <span>VR/AR</span>
                                    <span>68%</span>
                                </div>
                                <div class="bar">
                                    <div id="react-bar"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="page-right-item" id="item1">
                    <div class="banner-row">
                        <div class="overlay"></div>
                        <div class="banner-part-content">
                            <h1>UpSkillHub viết tắt Upskilling Center</h1>
                            <blockquote>
                                 "UpSkillHub" gợi ý rằng đây là một nền tảng hoặc trung tâm trực tuyến (online hub) cung cấp các tài nguyên, khóa học hoặc công cụ để giúp người dùng nâng cao kỹ năng của mình. Trang web này có thể tập trung vào việc phát triển kỹ năng nghề nghiệp, học tập suốt đời, hoặc các kỹ năng cá nhân cần thiết trong nhiều lĩnh vực khác nhau.
                            </blockquote>
                            <blockquote>
                                UpSkillHub là nền tảng cung cấp đa dạng công cụ và tài nguyên nhằm giúp người dùng nâng cao kỹ năng và tối ưu hóa hiệu suất làm việc. Với chuyên mục Web Developer, người dùng có thể học và áp dụng kiến thức lập trình một cách hiệu quả. Chuyên mục UX/UI Design hướng dẫn nghiên cứu và phát triển các giao diện thân thiện, dễ sử dụng, trong khi Content Creation giúp lập kế hoạch, sản xuất và chia sẻ nội dung hấp dẫn. Phần Task Issue hỗ trợ quản lý dự án, chia nhỏ công việc để đạt hiệu suất tối ưu. Công cụ Financial cung cấp các giải pháp lập kế hoạch và quản lý chi tiêu cá nhân, còn Daily Task giúp người dùng theo dõi công việc hàng ngày tỉ mỉ và tiện lợi. Với Japanese & English, người học có thể nắm vững ngoại ngữ và kiểm tra kỹ năng của mình. Ngoài ra, Calendar hỗ trợ quản lý lịch trình và sắp xếp công việc, giúp tổ chức thời gian hiệu quả hơn. Đặc biệt, UpSkillHub nhận thực hiện các dự án website hoặc đồ án từ xa theo yêu cầu.
                            </blockquote>
                            <blockquote>
                                “LEARN, GROW, AND EXCEL – YOUR JOURNEY STARTS HERE AT UPSKILLHUB.”
                                <span class="author">- Phan Tuan Kiet</span>
                            </blockquote>
                            <a href="#" class="button">BUY NOW</a>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div> -->
    <script src="{{ asset('js/layout.js') }}"></script>
    <!-- <div class="popup-modal" id="imagePopup" style="display: none;">
        <span class="close-popup">&times;</span>
        <img class="popup-content" id="popupImage" src="" alt="Popup Image">
    </div>
    -->
    <div class="modal" id="CreateLogin">
        <div class="ModelCreateLogin">
            <form method="POST" action="{{ url(app()->getLocale() . '/login') }}">
                @csrf
                <h2>Đăng nhập</h2>
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
        <form  action="{{ route('register') }}" method="POST" onsubmit="return validateForm()">
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

                    window.location.href = "{{ route('home.index') }}";
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