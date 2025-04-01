@extends('layout')

@section('metaTitle', 'Trang Chủ - Học Tiếng Nhật & Lập Trình')
@section('metaDescription', 'Trang chủ của website cung cấp kiến thức học tiếng Nhật, tự học tiếng Anh và lập trình.')
@section('content')
<div class="hero">
    <div class="page-left-item">
        <div class="banner">
            <div class="banner-left">
                <div class="content">
                    <div class="banner-title">
                        <h1>TRYSKILL</h1>
                        <p class="p-file">➡️{{ __('messages.A Place to Mark the Journey & Develop Skills.') }}</p>
                        <div class="d-flex">
                            <p>➡️</p>
                            <p>{{ __('messages.If you are passionate about technology, want to learn how to write efficient code, or explore the world of programming from scratch, then this is the place for you!') }}</p>
                        </div>
                        <div class="d-flex">
                            <p>➡️</p>
                            <p>{{ __('messages.Let learn, grow, and conquer new challenges together! Are you ready? 😃') }}</p>
                        </div>
                        <br/>
                        <div class="register-btn">
                            <button>Đăng ký ngay</button>
                        </div>
                    </div>
                    <div class="images">
                        <img src="{{asset('assets/images/banner.png')}}">
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
    <div class="about">
        <div class="about-left-img">
            <img src="{{asset('assets/images/about.png')}}" />
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
        <h3>{{ __('messages.Wiki') }}</h3>
        <div class="layout-tile-btn">
            <a href="{{ route('wikis.list') }}">{{ __('messages.More here') }} <i class="fa-solid fa-circle-right"></i></a>
        </div>
    </div>
    <div class="wiki-body">
        <div class="swiper mySwiper container">
            <div class="swiper-wrapper content">
                @foreach($wikis as $item)
                <a href="{{ route('wikis.view', $item->id) }}" class="swiper-slide card card-interface">
                    <img src="{{ asset($item->image_path) }}" />
                    <p class="name">{{ $item->title }}</p>
                </a>
                @endforeach
            </div>
        </div>
    </div>
</section>
<section id="about">
    <div class="layout-tile">
        <h3>{{ __('messages.New Experience') }}</h3>
        <div class="layout-tile-btn">
            <a href="{{ route('new_experience.list') }}">{{ __('messages.More here') }} <i class="fa-solid fa-circle-right"></i></a>
        </div>
    </div>
    <div class="wiki-body">
        <div class="swiper mySwiper container">
            <div class="swiper-wrapper content">
                @foreach($interfaces as $item)
                <a href="{{ route('new_experience.view', $item->id) }}" class="swiper-slide card card-interface">
                    <img src="{{ asset($item->image_path) }}" alt="">
                    <p>{{ $item->title }}</p>
                </a>
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
                <button data-target="service-1"><i class="fa fa-bars text-primary me-3"></i>{{ __('messages.Front-end Development') }}</button>
                <button data-target="service-2"><i class="fa fa-bars text-primary me-3"></i>{{ __('messages.Back-end Development') }}</button>
                <button data-target="service-3"><i class="fa fa-bars text-primary me-3"></i>{{ __('messages.Full-task Developer') }}</button>
                <button data-target="service-4"><i class="fa fa-bars text-primary me-3"></i>{{ __('messages.New Research') }}</button>
                <button data-target="service-5"><i class="fa fa-bars text-primary me-3"></i>{{ __('messages.Remote Service') }}</button>
            </div>
        </div>
        <div class="service-left">
            <div class="service-left-body active" id="service-1">
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
            <div class="service-left-body" id="service-2">
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
            <div class="service-left-body" id="service-3">
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
            <div class="service-left-body" id="service-4">
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
            <div class="service-left-body" id="service-5">
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
            <a href="{{ route('teams.list') }}">{{ __('messages.More here') }} <i class="fa-solid fa-circle-right"></i></a>
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
            <a href="{{ route('documents.list') }}">{{ __('messages.More here') }} <i class="fa-solid fa-circle-right"></i></a>
        </div>
    </div>
    <div class="blog_container">
        <div class="blog_products">
            @foreach($documents as $item)
            <a href="{{ route('documents.view', $item->id) }}" class="blog_product">
                <div class="blog_product-img">
                    <img src="{{ asset($item->image_path) }}" />
                </div>
                <div class="name trustTitle">{{ $item->title }}</div>
                <div class="trustTitle5">{!! $item->description !!}</div>
            </a>
            @endforeach                            
        </div>
    </div>
</section>
<section id="about">
    <div class="layout-tile">
        <h3>{{ __('messages.New Experience') }}</h3>
        <div class="layout-tile-btn">
            <a href="{{ route('new_experience.list') }}">{{ __('messages.More here') }} <i class="fa-solid fa-circle-right"></i></a>
        </div>
    </div>
    <div class="wiki-body">
        <div class="swiper mySwiper container">
            <div class="swiper-wrapper content">
                @foreach($interfaces as $item)
                <a href="{{ route('new_experience.view', $item->id) }}" class="swiper-slide card card-interface">
                    <img src="{{ asset($item->image_path) }}" alt="">
                    <p>{{ $item->title }}</p>
                </a>
                @endforeach
            </div>
        </div>
    </div>
</section>
<section id="about">
    <div class="layout-tile">
        <h3>{{ __('messages.Blog') }}</h3>
        <div class="layout-tile-btn">
            <a href="{{ route('blogs.list') }}">{{ __('messages.More here') }} <i class="fa-solid fa-circle-right"></i></a>
        </div>
    </div>
    <div class="blog_container">
        <div class="blog_products">
                @foreach($blogs as $item)
            <a href="{{ route('blogs.view', $item->id) }}" class="blog_product">
                <div class="blog_product-img">
                    <img src="{{ asset($item->image_path) }}" />
                </div>
                <div class="name">{{ $item->title }}</div>
                <div class="trustTitle5">{!! $item->content !!}</div>
            </a>
            @endforeach
        </div>
    </div>
</section>
<section id="about">
    <div class="layout-tile">
        <h3>{{ __('messages.Contact') }}</h3>
    </div>
    <section id="section-wrapper">
        <div class="box-wrapper">
            <div class="info-wrap">
                <img src="{{asset('assets/images/contact.png')}}" />
            </div>
            <div class="contact-form-container">
            <h3 class="info-sub-title">{{ __('messages.Take a moment to fill out the form, and our dedicated team of experts will get back to you within 24 hours. We are always ready to listen and provide the most suitable solutions, ensuring you receive the best support possible!') }}</h3>
                <form class="contact-form" action="{{ route('send.contact') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label>{{ __('messages.Name') }}</label>
                        <input type="text" name="name" placeholder="{{ __('messages.Name') }}" required>
                    </div>
                    <div class="form-group">
                        <label>{{ __('messages.Email') }}</label>
                        <input type="email" name="email" placeholder="{{ __('messages.Email') }}" required>
                    </div>
                    <div class="form-group">
                        <label>{{ __('messages.Subject') }}</label>
                        <input type="text" name="subject" placeholder="{{ __('messages.Subject') }}" required>
                    </div>
                    <div class="form-group">
                        <label>{{ __('messages.Message') }}</label>
                        <textarea name="message" placeholder="{{ __('messages.Message') }}" rows="5" required></textarea>
                    </div>
                    <button type="submit" class="btn">{{ __('messages.Send') }}</button>
                </form>
            </div>
        </div>
    </section>
</section>
@endsection