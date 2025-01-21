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
                <a href="">
                    <div>
                        <i class="fa-solid fa-bell"></i>
                    </div> 
                    <div>
                        {{ __('messages.Notification') }}
                    </div>
                </a>
                <span class="liner"></span>
                <a href="">
                    <div>
                        <i class="fa-solid fa-circle-exclamation"></i>
                    </div> 
                    <div>
                        {{ __('messages.Notification') }}
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
    <section class="hero">
        <div class="page-left-item">
            <div class="banner">
                <div class="banner-left">
                    <div class="banner-left-slide">
                        <div class="banner-left-slide">
                            <div class="banner-left-slide-img">
                                <img src="{{asset('assets/images/banner3.png')}}" />
                            </div>
                            <div class="banner-left-slide-img" style="display: none">
                                <img src="{{asset('assets/images/banner1.png')}}" />
                            </div>
                            <div class="banner-left-slide-img">
                                <img src="{{asset('assets/images/banner2.png')}}" />
                            </div>
                        </div>
                    </div>
                    <div class="banner-left-prev"><i class="fa-solid fa-angle-left"></i></div>
                    <div class="banner-left-next"><i class="fa-solid fa-angle-right"></i></div>
                </div>
                <div class="banner-right">
                    <div class="banner-right-top">
                        <div class="banner-right-top-img">
                            <img src="{{asset('assets/images/banner-top-1.png')}}" />
                        </div>
                        <div class="banner-right-top-1">
                            <span>Đứng đầu trong công nghệ mới</span>
                        </div>
                        <div class="banner-right-top-2">
                            <span> Khả năng học từ dữ liệu</span>
                        </div>
                        <div class="banner-right-top-3">
                            <span>Tạo Sinh Nội Dung</span>
                        </div>
                        <div class="banner-right-top-4">
                            <span>Tư duy tự lập và ra quyết định</span>
                        </div>
                        <div class="banner-right-top-5">
                            <span>Xử lý ngôn ngữ tự nhiên</span>
                        </div>
                    </div>
                    <div class="banner-right-body">
                        <div class="banner-right-body-img">
                            <img src="{{asset('assets/images/banner-body-1.png')}}" />
                        </div>
                        <div class="banner-right-body-1">
                            <span>Top 3 công nghệ</span>
                        </div>
                        <div class="banner-right-body-2">
                            <span> Tự động hóa marketing</span>
                        </div>
                        <div class="banner-right-body-3">
                            <span>Tính linh hoạt và đa dạng kênh</span>
                        </div>
                        <div class="banner-right-body-4">
                            <span>Phân tích và đo lường hiệu quả chiến dịch</span>
                        </div>
                        <div class="banner-right-body-5">
                            <span>Tiếp cận khách hàng chính xác và cá nhân hóa</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="title-space">
        <h2 style="--w: 50vw;--c: rgb(55 170 255 / 40%);--b:4px;--g:-5px">{{ __('messages.About') }}</h2>
    </div>
    <section>
        <div class="about">
            <div class="about-left">
                <div class="about-left-img">
                    <img src="{{asset('assets/images/about1.png')}}" />
                </div>
                <div class="line-about">
                    <span class="ai">AI</span>
                    <span class="code">Code</span>
                    <span class="english">English</span>
                    <span class="japanese">Japanese</span>
                </div>
            </div>
            <div class="about-right">
                <h1>We help you better understand AI, coding, English, and Japanese.</h1>
                <div class="about-right-content">
                    <p>AI (Trí tuệ nhân tạo): Giúp khách hàng hiểu cách AI hoạt động, ứng dụng AI vào thực tế, và cách nó có thể mang lại lợi ích cho công việc hoặc doanh nghiệp của họ.</p>
                    <p>Coding (Lập trình): Hỗ trợ khách hàng học hoặc cải thiện kỹ năng lập trình, từ các ngôn ngữ cơ bản đến các kỹ thuật nâng cao phù hợp với nhu cầu thực tế.</p>
                    <p>English (Tiếng Anh): Cung cấp công cụ và phương pháp để cải thiện khả năng giao tiếp, viết, và hiểu tiếng Anh, từ cơ bản đến nâng cao.</p>
                    <p>Japanese (Tiếng Nhật): Đào tạo hoặc hỗ trợ học tiếng Nhật, từ việc học ngôn ngữ đến hiểu văn hóa, ứng dụng vào công việc và giao tiếp hàng ngày.</p>    
                    <p><i>Chúng tôi hướng đến việc hỗ trợ khách hàng nâng cao kiến thức và kỹ năng trong bốn lĩnh vực quan trọng: AI, lập trình, tiếng Anh và tiếng Nhật, nhằm giúp họ phát triển bản thân, mở rộng cơ hội nghề nghiệp và đạt được thành công bền vững trong thời đại công nghệ và hội nhập.</i></p>
                </div>
                <div class="about-right-footer">
                    <div class="about-right-footer-box">
                        <span class="about-icon"><i class="fa fa-times"></i></span>
                        <div>
                            <h4>No Hidden Cost</h4>
                            <span>xác nhận</span>
                        </div>
                    </div>
                    <div class="about-right-footer-box">
                        <span class="about-icon"><i class="fa fa-users"></i></span>
                        <div>
                            <h4>Dedicated Team</h4>
                            <span>xác nhận</span>
                        </div>
                    </div>
                    <div class="about-right-footer-box">
                        <span class="about-icon"><i class="fa fa-phone"></i></span>
                        <div>
                            <h4>24/7 Available</h4>
                            <span>xác nhận</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="title-space-box">
        <h2 style="--w: 50vw;--c: rgb(55 170 255 / 40%);--b:4px;--g:-5px">{{ __('messages.Product') }}</h2>
    </div>
    <section id="about">
        <div class="product">
            <div class="product-left">
                <h1>We develop dashboards to manage personal matters more efficiently and flexibly.</h1>
                <div class="product-left-content">
                    <p>Our solution empowers you to take full control of your personal management with ease.</p>
                    <p>Experience a smarter, more dynamic way to stay organized and achieve your goals!</p>
                    <p>Để đạt được kết quả như mong muốn, hãy luôn nỗ lực hết mình và chịu trách nhiệm với những hành động của bản thân. Sự kiên trì và ý thức trách nhiệm chính là chìa khóa dẫn đến thành công!</p>
                    <p>Join us today and unlock the potential of seamless personal management!</p>
                    <div class="product-left-content-btn">
                        <button>Đăng ký ngay</button>
                    </div>
                </div>
            </div>
            <div class="product-right">
                <div class="product-right-img">
                    <img src="{{asset('assets/images/product-home.png')}}" />
                </div>
            </div>
        </div>
    </section>
    <div class="title-space-body">
        <h2 style="--w: 50vw;--c: rgb(55 170 255 / 40%);--b:4px;--g:-5px">{{ __('messages.Service') }}</h2>
    </div>
    <section id="about">
        <div class="service">
            <div class="service-left">
                <div class="service-left-body active" id="service-1">
                    <div class="service-left-body-img">
                        <img src="{{asset('assets/images/service.png')}}" />
                    </div>
                    <div class="service-left-body-content">
                        <h3>3 years of experience working as a web developer.</h3>
                        <p>Tôi tốt nghiệp trường Đại Học Công Nghệ TP.Hồ Chí Minh</p>
                        <p>Tôi có hơn 3 năm kinh nghiệm chuyên môn trong lĩnh vực phát triển web, bao gồm hơn 1 năm làm việc với vai trò nhà phát triển outsource và 2 năm làm việc như một nhân sự nội bộ. Hiện tại, tôi đang làm việc cho một công ty quốc tế, nơi tôi đã có cơ hội tham gia vào nhiều dự án đa dạng và đầy thử thách. Trong vai trò là một full-task developer, tôi đã đóng góp thành công vào các dự án như GrownUpWord, VJP-Connect, Plain-International và một số hệ thống nội bộ của công ty.</p>
                        <p>Khả năng thích nghi với các môi trường làm việc khác nhau và đóng góp hiệu quả cho cả đội ngũ trong nước và quốc tế là yếu tố quan trọng giúp tôi mang lại các giải pháp chất lượng cao. Tôi đam mê tạo ra các ứng dụng web hiệu quả, có khả năng mở rộng và thân thiện với người dùng, đồng thời luôn tìm kiếm cơ hội để phát triển và cải thiện trong lĩnh vực không ngừng thay đổi này.</p>
                    </div>
                </div>
                <div class="service-left-body" id="service-2">
                    <div class="service-left-body-img">
                        <img src="{{asset('assets/images/service1.png')}}" />
                    </div>
                    <div class="service-left-body-content">
                        <h3>Với cương vị là nhà phát triển về Giao diện người dùng</h3>
                        <p>tôi chuyên tạo ra các giao diện web trực quan, hấp dẫn và thân thiện với người dùng, mang lại trải nghiệm liền mạch. Vai trò của tôi bao gồm việc chuyển đổi các ý tưởng thiết kế thành các trang web chức năng và tương tác bằng cách sử dụng các công nghệ web hiện đại như HTML5, CSS3 và JavaScript, cùng với các framework như React, Angular hoặc Vue.js.</p>
                        <p>Tôi có khả năng phối hợp chặt chẽ với các nhà thiết kế UX, đảm bảo tính tương thích đa trình duyệt và tối ưu hóa hiệu suất trên nhiều thiết bị.</p>
                        <p>Tôi có kinh nghiệm làm việc với các công cụ thiết kế UX/UI như Figma và Adobe XD để chuyển đổi các bản thiết kế wireframe và prototype thành các giao diện thực tế, mang lại giá trị cho người dùng. Ngoài ra, tôi cũng thành thạo trong việc xử lý file Excel để quản lý dữ liệu và hỗ trợ quá trình lập kế hoạch hoặc phân tích liên quan đến dự án.</p>
                    </div>
                </div>
                <div class="service-left-body" id="service-3">
                    <div class="service-left-body-img">
                        <img src="{{asset('assets/images/service2.png')}}" />
                    </div>
                    <div class="service-left-body-content">
                        <h3>Với cương vị là nhà phát triển về Back-end</h3>
                        <p>Tôi chuyên xây dựng và duy trì logic phía server, cung cấp sức mạnh cho các ứng dụng web. Chuyên môn của tôi nằm ở việc thiết kế các hệ thống có khả năng mở rộng và bảo mật, phát triển API và quản lý cơ sở dữ liệu để đảm bảo tích hợp và chức năng liền mạch trên nhiều nền tảng.</p>
                        <p>Trong vai trò của mình, tôi phối hợp chặt chẽ với các nhà phát triển front-end, nhà thiết kế UX và các bên liên quan khác để tạo ra các giải pháp từ đầu đến cuối, đáp ứng yêu cầu của cả người dùng và doanh nghiệp. Tôi có kinh nghiệm sâu rộng với các công nghệ back-end hiện đại như Node.js, Python (Django/Flask), CShap, Java (Spring Boot), và PHP (Laravel).</p>
                        <p>Ngoài ra, tôi thành thạo trong việc quản lý hệ thống cơ sở dữ liệu như MySQL, PostgreSQL, MongoDB, và MySQL Workbench, với trọng tâm là tối ưu hóa và xử lý dữ liệu hiệu quả. </p>
                    </div>
                </div>
                <div class="service-left-body" id="service-4">
                    <div class="service-left-body-img">
                        <img src="{{asset('assets/images/service3.png')}}" />
                    </div>
                    <div class="service-left-body-content">
                        <h3>Với cương vị là nhà phát triển Full-task</h3>
                        <p>Tôi đảm nhận trách nhiệm trên toàn bộ ngăn xếp phát triển, bao gồm cả phát triển front-end và back-end, cũng như triển khai và bảo trì hệ thống (Run-end Development). Chuyên môn của tôi bao quát một loạt các công nghệ và công cụ, đảm bảo cung cấp các giải pháp mạnh mẽ, có khả năng mở rộng và hiệu quả cho các hệ thống phức tạp.</p>
                        <p>Tôi có kinh nghiệm thực tiễn làm việc với môi trường Ubuntu 20.04 và 22.04, nơi tôi quản lý máy chủ, cấu hình ứng dụng và xử lý các công việc triển khai. Kiến thức về FTP và Docker cho phép tôi chuyển giao và triển khai ứng dụng một cách hiệu quả, thiết lập các container cho môi trường phát triển độc lập và tối ưu hóa quy trình CI/CD.</p>
                    </div>
                </div>
                <div class="service-left-body" id="service-5">
                    <div class="service-left-body-img">
                        <img src="{{asset('assets/images/service4.png')}}" />
                    </div>
                    <div class="service-left-body-content">
                        <h3>Nghiên cứu mới</h3>
                        <p>Hiện tại, tôi đang làm việc với SVF Design, sử dụng mã nguồn từ WingArc. Trách nhiệm của tôi bao gồm thiết kế, tùy chỉnh và tối ưu hóa các mẫu tài liệu, báo cáo và bố cục để đáp ứng các yêu cầu cụ thể của khách hàng. Tận dụng các công cụ và framework của WingArc, tôi đảm bảo rằng sản phẩm đầu ra vừa có tính thẩm mỹ cao vừa hoạt động hiệu quả. Vai trò của tôi cũng bao gồm việc phối hợp với các nhóm để tích hợp các giải pháp SVF vào hệ thống hiện tại một cách liền mạch, đồng thời duy trì các tiêu chuẩn cao về độ chính xác và hiệu suất.</p>
                        <p>Dự án này cũng là một thử thách lớn đối với tôi, vì nó đòi hỏi sự hiểu biết sâu sắc về công nghệ nền tảng cũng như sự tận tâm trong việc làm chủ tài liệu và các công cụ. Tôi đã dành nhiều nỗ lực để nghiên cứu và tìm hiểu tài liệu liên quan, nhờ đó vượt qua được những khó khăn ban đầu và đạt được những kết quả đáng kể. Bằng cách không ngừng cải thiện kiến thức và kỹ năng, tôi mong muốn mang lại các giải pháp tốt hơn và tận dụng tối đa trải nghiệm học tập quý báu này.</p>
                    </div>
                </div>
                <div class="service-left-body" id="service-6">
                    <div class="service-left-body-img">
                        <img src="{{asset('assets/images/service5.png')}}" />
                    </div>
                    <div class="service-left-body-content">
                        <h3>Dịch vụ Remote</h3>
                        <p>Giá cả: thương lượng</p>
                        <div class="item_service d-flex align-center gap-10"><span>01</span> <p>Number of new and modified screens.</p></div>
                        <div class="item_service d-flex align-center gap-10"><span>02</span> <p>Use HTML, CSS, and responsive design to complete</p></div>
                        <div class="item_service d-flex align-center gap-10"><span>03</span> <p>Use JavaScript to complete.</p></div>
                        <div class="item_service d-flex align-center gap-10"><span>04</span> <p>Use Frontend Development Tools to complete.</p></div>
                        <div class="item_service d-flex align-center gap-10"><span>05</span> <p>Use Backend Development Tools to complete.</p></div>
                        <div class="item_service d-flex align-center gap-10"><span>06</span> <p>Deployment & Hosting</p></div>
                        <div class="item_service d-flex align-center gap-10"><span>07</span> <p>Testing</p></div>
                        <div class="item_service d-flex align-center gap-10"><span>08</span> <p>Bảo hành cho công việc 6 tháng</p></div>
                    </div>
                </div>
            </div>
            <div class="service-right">
                <div class="service-right-slide">
                    <button data-target="service-1"><i class="fa fa-bars text-primary me-3"></i> Self-introduction</button>
                    <button data-target="service-2"><i class="fa fa-bars text-primary me-3"></i> Front-end Development</button>
                    <button data-target="service-3"><i class="fa fa-bars text-primary me-3"></i> Back-end Development</button>
                    <button data-target="service-4"><i class="fa fa-bars text-primary me-3"></i> Nhà phát triển Full-task</button>
                    <button data-target="service-5"><i class="fa fa-bars text-primary me-3"></i> Nghiên cứu mới</button>
                    <button data-target="service-6"><i class="fa fa-bars text-primary me-3"></i> Dịch vụ Remote</button>
                </div>
            </div>
        </div>
    </section>
    <div class="title-space-box">
        <h2 style="--w: 50vw;--c: rgb(232 79 0 / 40%);--b:4px;--g:-5px">{{ __('messages.Team') }}</h2>
    </div>
    <section class="download-app background-path"  id="about">
        <div class="row">
          <div class="column">
            <img src="{{asset('assets/images/backgrounda.png')}}" />
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
          </div>
        </div>
    </section>
    <div class="title-space-body">
        <h2 style="--w: 50vw;--c: rgb(232 79 0 / 40%);--b:4px;--g:-5px">{{ __('messages.Blog') }}</h2>
    </div>
    <section id="about">
        <div class="row">
          <div class="column">
            a
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
    <div class="title-space-body">
        <h2 style="--w: 50vw;--c: rgb(232 79 0 / 40%);--b:4px;--g:-5px">{{ __('messages.Contact') }}</h2>
    </div>
    <section id="about">
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
    <section class="path-service">
        <div class="path-service">
            <div class="section" style="border-color: orange;">
                <div class="icon">🎨</div>
                <h3>THIẾT KẾ</h3>
                <p>Phân tích các yêu cầu hình BPD, thiết kế giao diện.</p>
            </div>
            <div class="section" style="border-color: green;">
                <div class="icon">⚙️</div>
                <h3>THỰC HIỆN</h3>
                <p>Lập trình các chức năng theo yêu cầu.</p>
            </div>
            <div class="section" style="border-color: blue;">
                <div class="icon">🔍</div>
                <h3>KIỂM THỬ</h3>
                <p>Xem xét các module chức năng.</p>
            </div>
            <div class="section" style="border-color: red;">
                <div class="icon">📊</div>
                <h3>KHẢO SÁT DỰ ÁN</h3>
                <p>Lập kế hoạch khảo sát và kiểm tra hiệu quả.</p>
            </div>
            <div class="section" style="border-color: yellow;">
                <div class="icon">🚀</div>
                <h3>TRIỂN KHAI VÀ BẢO TRÌ</h3>
                <p>Lập kế hoạch triển khai và bảo trì hệ thống.</p>
            </div>        
        </div>
    </section>
    <section id="features">
        <div class="title-home">
            <span class="title-left"></span>
            <h2>{{ __('messages.New Features') }}</h2>
            <span class="title-right"></span>
        </div>
        <div class="title-desc">
            <p class="section-desc">{{ __('messages.Experience Now') }}</p>
        </div>
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
    <section>
        <div class="slider-container swiper">
            <div class="slider-home">
                <div class="card-home swiper-wrapper">
                    <div class="card-home-item swiper-slide">
                        <img src="{{asset('assets/images/userAI.jpg')}}" alt="James Wilson" class="user-img">
                        <h2 class="user-name">Phan Tuấn Kiệt</h2>
                        <p class="user-profession">Software Developer</p>
                        <button class="message-btn">Liên hệ ngay</button>
                    </div>
                    <div class="card-home-item swiper-slide">
                        <img src="{{asset('assets/images/userAI.jpg')}}" alt="James Wilson" class="user-img">
                        <h2 class="user-name">Nguyễn Trung Nghĩa</h2>
                        <p class="user-profession">Software Developer</p>
                        <button class="message-btn">Liên hệ ngay</button>
                    </div>
                    <div class="card-home-item swiper-slide">
                        <img src="{{asset('assets/images/userAI.jpg')}}" alt="James Wilson" class="user-img">
                        <h2 class="user-name">Nguyễn Tường Vi</h2>
                        <p class="user-profession">Software Developer</p>
                        <button class="message-btn">Liên hệ ngay</button>
                    </div>
                    <div class="card-home-item swiper-slide">
                        <img src="{{asset('assets/images/userAI.jpg')}}" alt="James Wilson" class="user-img">
                        <h2 class="user-name">Lê Quang Huy</h2>
                        <p class="user-profession">Software Developer</p>
                        <button class="message-btn">Liên hệ ngay</button>
                    </div>
                    <div class="card-home-item swiper-slide">
                        <img src="{{asset('assets/images/userAI.jpg')}}" alt="James Wilson" class="user-img">
                        <h2 class="user-name">Trần Minh Thuận</h2>
                        <p class="user-profession">Software Developer</p>
                        <button class="message-btn">Liên hệ ngay</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="courses" id="service">
        <div class="title-home">
            <span class="title-left"></span>
            <h2>{{ __('messages.New Service') }}</h2>
            <span class="title-right"></span>
        </div>
        <div class="title-desc">
            <p class="section-desc">{{ __('messages.Unlock Now') }}</p>
        </div>
       <div class="pricing-design"> 
            <div class="pricing-table">
                <h1>Bảng Giá</h1>
                <div class="item"><span>01</span> <p>Number of new and modified screens.</p></div>
                <div class="item"><span>02</span> <p>Use HTML, CSS, and responsive design to complete</p></div>
                <div class="item"><span>03</span> <p>Use JavaScript to complete.</p></div>
                <div class="item"><span>04</span> <p>Use Frontend Development Tools to complete.</p></div>
                <div class="item"><span>05</span> <p>Use Backend Development Tools to complete.</p></div>
                <div class="item"><span>06</span> <p>Deployment & Hosting</p></div>
                <div class="item"><span>07</span> <p>The product is under a safe warranty for 6 months.</p></div>
            </div>
            <div class="pricing-table-box1">
                <h1>10$</h1>
                <div class="item"><span><i class="fa-solid fa-pen-to-square"></i></span> <p> 1 screens</p></div>
                <div class="item Possible"><span><i class="fa-solid fa-check"></i></span> <p> Possible</p></div>
                <div class="item Possible"><span><i class="fa-solid fa-check"></i></span> <p> Possible</p></div>
                <div class="item NotPossible"><span><i class="fa-solid fa-xmark"></i></span> <p> Not Possible</p></div>
                <div class="item NotPossible"><span><i class="fa-solid fa-xmark"></i></span> <p> Not Possible</p></div>
                <div class="item NotPossible"><span><i class="fa-solid fa-xmark"></i></span> <p> Not Possible</p></div>
                <div class="item Possible"><span><i class="fa-solid fa-check"></i></span> <p> Possible</p></div>
            </div>
            <div class="pricing-table-box2">
                <h1>20$</h1>
                <div class="item"><span><i class="fa-solid fa-pen-to-square"></i></span> <p> 3 screens</p></div>
                <div class="item Possible"><span><i class="fa-solid fa-check"></i></span> <p> Possible</p></div>
                <div class="item Possible"><span><i class="fa-solid fa-check"></i></span> <p> Possible</p></div>
                <div class="item Possible"><span><i class="fa-solid fa-check"></i></span> <p> Possible</p></div>
                <div class="item NotPossible"><span><i class="fa-solid fa-xmark"></i></span> <p> Not Possible</p></div>
                <div class="item NotPossible"><span><i class="fa-solid fa-xmark"></i></span> <p> Not Possible</p></div>
                <div class="item Possible"><span><i class="fa-solid fa-check"></i></span> <p> Possible</p></div>
            </div>
            <div class="pricing-table-box3">
                <h1>30$</h1>
                <div class="item"><span><i class="fa-solid fa-pen-to-square"></i></span> <p> 5 screens</p></div>
                <div class="item Possible"><span><i class="fa-solid fa-check"></i></span> <p> Possible</p></div>
                <div class="item Possible"><span><i class="fa-solid fa-check"></i></span> <p> Possible</p></div>
                <div class="item Possible"><span><i class="fa-solid fa-check"></i></span> <p> Possible</p></div>
                <div class="item Possible"><span><i class="fa-solid fa-check"></i></span> <p> Possible</p></div>
                <div class="item NotPossible"><span><i class="fa-solid fa-xmark"></i></span> <p> Not Possible</p></div>
                <div class="item Possible"><span><i class="fa-solid fa-check"></i></span> <p> Possible</p></div>
            </div>
            <div class="pricing-table-box4">
                <h1>100$</h1>
                <div class="item"><span><i class="fa-solid fa-pen-to-square"></i></span> <p> 10 screens</p></div>
                <div class="item Possible"><span><i class="fa-solid fa-check"></i></span> <p> Possible</p></div>
                <div class="item Possible"><span><i class="fa-solid fa-check"></i></span> <p> Possible</p></div>
                <div class="item Possible"><span><i class="fa-solid fa-check"></i></span> <p> Possible</p></div>
                <div class="item Possible"><span><i class="fa-solid fa-check"></i></span> <p> Possible</p></div>
                <div class="item Possible"><span><i class="fa-solid fa-check"></i></span> <p> Possible</p></div>
                <div class="item Possible"><span><i class="fa-solid fa-check"></i></span> <p> Possible</p></div>
            </div>
       </div>
    </section>
    <section>
        <div class="wrapper-service">
            <div class="itemLeft item1"><p>HTML5/CSS3</p></div>
            <div class="itemLeft item2"><p>Bootstrap</p></div>
            <div class="itemLeft item3"><p>Tailwind CSS</p></div>
            <div class="itemLeft item4"><p>Ant Design</p></div>
            <div class="itemLeft item5"><p>UI element</p></div>
            <div class="itemLeft item6"><p>JavaScript</p></div>
            <div class="itemLeft item7"><p>React.js</p></div>
            <div class="itemLeft item8"><p>Next.js</p></div>
            <div class="itemLeft item9"><p>Vue.js</p></div>
            <div class="itemLeft item10"><p>Nuxt.js</p></div>
            <div class="itemLeft item11"><p>TypeScript</p></div>
            <div class="itemLeft item12"><p>Angular</p></div>
            <div class="itemLeft item13"><p>Package Managers</p></div>
            <div class="itemLeft item14"><p>Git</p></div>
            <div class="itemLeft item15"><p>Backlog</p></div>
            <div class="itemLeft item16"><p>Figma</p></div>
            <div class="itemLeft item17"><p>Adobe XD</p></div>
            <div class="itemLeft item18"><p>Canva</p></div>
            <div class="itemLeft item19"><p>Photoshop</p></div>
            <div class="itemLeft item20"><p>OpenAi</p></div>
            <div class="itemLeft item21"><p>Postman</p></div>
            <div class="itemLeft item22"><p>Swagger</p></div>
            <div class="itemLeft item23"><p>Selenium</p></div>
          </div>
          <div class="wrapper-service">
            <div class="itemRight item1"></div>
            <div class="itemRight item1"><p>Node.js</p></div>
            <div class="itemRight item2"><p>PHP (Laravel)</p></div>
            <div class="itemRight item3"><p>Java (Spring)</p></div>
            <div class="itemRight item4"><p>C# (.NET)</p></div>
            <div class="itemRight item5"><p>Python(Django)</p></div>
            <div class="itemRight item6"><p>MySQL</p></div>
            <div class="itemRight item7"><p>PostgreSQL</p></div>
            <div class="itemRight item8"><p>MongoDB (NoSQL)</p></div>
            <div class="itemRight item9"><p>SQL Server</p></div>
            <div class="itemRight item10"><p>MySQL Workbench</p></div>
            <div class="itemRight item11"><p>Apache</p></div>
            <div class="itemRight item12"><p>Nginx</p></div>
            <div class="itemRight item13"><p>IIS</p></div>
            <div class="itemRight item14"><p>Postman</p></div>
            <div class="itemRight item15"><p>Swagger</p></div>
            <div class="itemRight item16"><p>Docker</p></div>
            <div class="itemRight item17"><p>FTP</p></div>
            <div class="itemRight item18"><p>Ubuntu</p></div>
            <div class="itemRight item19"><p>Webpack</p></div>
            <div class="itemRight item20"><p>Gulp</p></div>
            <div class="itemRight item21"><p>Grunt</p></div>
          </div>
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
        document.addEventListener("DOMContentLoaded", function () {
            const slides = document.querySelectorAll(".banner-left-slide-img");
            const prevButton = document.querySelector(".banner-left-prev");
            const nextButton = document.querySelector(".banner-left-next");
            let currentSlide = 0;
            let autoSlideInterval;

            function showSlide(index) {
                slides.forEach((slide, idx) => {
                    if (idx === index) {
                        slide.classList.add("active");
                        slide.style.display = "block";
                    } else {
                        slide.classList.remove("active");
                        slide.style.display = "none";
                    }
                });
            }

            function nextSlide() {
                currentSlide = (currentSlide + 1) % slides.length;
                showSlide(currentSlide);
            }

            function prevSlide() {
                currentSlide = (currentSlide - 1 + slides.length) % slides.length;
                showSlide(currentSlide);
            }

            function startAutoSlide() {
                autoSlideInterval = setInterval(nextSlide, 20000);
            }

            function stopAutoSlide() {
                clearInterval(autoSlideInterval);
            }

            showSlide(currentSlide);
            startAutoSlide();

            prevButton.addEventListener("click", () => {
                stopAutoSlide();
                prevSlide();
                startAutoSlide();
            });

            nextButton.addEventListener("click", () => {
                stopAutoSlide();
                nextSlide();
                startAutoSlide();
            });
        });

        var i = 0;
        let slides = document.querySelectorAll(".slide");
        let slider = document.querySelector(".slider");
        var pause = false;
        function moveRight() {
            slides[i].className = "slide";
            i = (i + 1) % slides.length;
            slides[i].className = "slide active";
            let Xvalue = -160 * i;
            slider.style.transform = `translateX(${Xvalue}px)`;
        }
        function moveLeft() {
            slides[i].className = "slide";
            i = (i - 1 + slides.length) % slides.length;
            slides[i].className = "slide active";
            let Xvalue = -160 * i;
            slider.style.transform = `translateX(${Xvalue}px)`;
        }

        const interval = setInterval(() => {
            if (!pause) {
            moveRight();
            }
        }, 2000);

        function playPause() {
            let state = document.querySelector(".icon");
            if (state.innerHTML == "pause") {
            state.innerHTML = "play_arrow";
            pause = true;
            } else {
            state.innerHTML = "pause";
            pause = false;
            }
        }
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