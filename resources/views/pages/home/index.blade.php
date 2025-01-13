@extends('layout')
@section('title', 'Home Page')
@section('content')
<div class="slider-container">
    <div class="d-flex align-items">
        <div class="slide-one-left">
            <div class="slider">
                <div class="slide" style="background-color: #fff;">
                    <section class="download-app background-path"  id="about">
                        <div class="row">
                        <div class="column background-column">
                            <img src="{{asset('assets/images/pattern-1.png')}}" />
                            <div class="btn-web-develop">
                                <button>{{ __('messages.Experience Now') }}</button>
                            </div>
                        </div>
                        <div class="column">
                            <div class="app-feature">
                                <div>
                                <i class="fas fa-star"></i>
                                <h3>{{ __('messages.About') }}</h3>
                                </div>
                                <p>
                                   {{ __('messages.Tryskill can represent a journey or an effort in learning and improving skills in the field of technology. A program, application, or learning platform: an app that helps users practice and enhance their skills through challenges and practical lessons.') }}
                                </p>
                            </div>
                            <div class="app-feature">
                                <div>
                                <i class="fas fa-star"></i>
                                <h3>{{ __('messages.Practical Application') }}</h3>
                                </div>
                                <p>
                                {{ __('messages.Transform knowledge into skills! A website offering programming exercises, English, and Japanese practice to help you apply what you have learned in real-life scenarios, enhance learning efficiency, and foster personal development.') }}
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
                                    {{ __('messages.Download lectures to study anytime, anywhere, without worrying about losing internet connection! Conquer programming, English, and Japanese effortlessly with materials always at your fingertips.') }}
                                </p>
                            </div>
                        </div>
                        </div>
                    </section>
                </div>
                <div class="slide" style="background-color: #fff;">
                    <div class="main-content">
                        <h3 class="title">{{ __('messages.News') }}</h3>
                        <div class="sub-header">{{ __('messages.Latest News') }}</div>
                        <div class="list-card">
                        @if($news->isEmpty())
                            <p>{{ __('messages.No News Available') }}</p>
                        @else
                            @foreach($news as $item)
                            <div class="card">
                                <div class="card-img">
                                    <img src="{{asset($item->image_path)}}" />
                                </div>
                                <div class="project-user">
                                    <p>{{ $item->created_at->format('d-m-Y') }}</p>
                                </div>
                                <p class="card-title">【{{ $item->name}}】</p>
                                <div class="content-expert-show">
                                    <i class="fa-duotone fas fa-caret-left"></i>
                                    <button class="btn-show" onclick="ShowNews('{{ $item->id }}')">{{ __('messages.See More') }}</button>
                                    <i class="fa-duotone fas fa-caret-right"></i>
                                </div>
                            </div>
                            @endforeach
                        @endif
                        </div>
                    </div>
                </div>
                <div class="slide" style="background-color: #fff;">
                    <div class="main-content">
                        <h3 class="title">{{ __('messages.Website members') }}</h3>
                        <div class="sub-header">{{ __('messages.Total members') }}</div>
                        <div class="list-card">
                            <div class="card">
                                <div class="card-user-img">
                                    <img src="{{asset('assets/images/userAI.jpg')}}" alt="James Wilson" class="user-img">
                                </div>
                                <p class="text-center">{{ __('messages.Phan Tuan Kiet') }}</p>
                                <p class="card-title mt-10">【{{ __('messages.Website Developer') }}】</p>
                                <div class="content-expert-show mx-20">
                                    <i class="fa-duotone fas fa-caret-left"></i>
                                    <button class="btn-show">{{ __('messages.Contact Us Now') }}</button>
                                    <i class="fa-duotone fas fa-caret-right"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slide" style="background-color: #fff;">
                    <section class="path-app">
                        <div class="path-container">
                            <div class="path-card-item">
                                <div class="card-icon">
                                    <i class="fas fa-search"></i>
                                </div>
                                <h3>{{ __('messages.SEO Consultancy') }}</h3>
                                <p>{{ __('messages.Optimize your website to rank higher on search engines, attract more traffic, and increase conversion rates.') }}</p>
                            </div>
                            <div class="path-card-item">
                                <div class="card-icon">
                                    <i class="fas fa-chart-line"></i>
                                </div>
                                <h3>{{ __('messages.Competitor Analysis') }}</h3>
                                <p>{{ __('messages.Competitor analysis helps you identify opportunities, challenges, and build superior strategies. Optimize your strengths to create sustainable competitive advantages!') }}</p>
                            </div>
                            <div class="path-card-item">
                                <div class="card-icon">
                                    <i class="fas fa-share-alt"></i>
                                </div>
                                <h3>{{ __('messages.Social Marketing') }}</h3>
                                <p>{{ __('messages.Social marketing helps you reach your goals and build strong relationships with customers. Leverage social media to drive growth for your brand!') }}</p>
                            </div>
                            <div class="path-card-item">
                                <div class="card-icon">
                                    <i class="fas fa-code"></i>
                                </div>
                                <h3>{{ __('messages.Web Development') }}</h3>
                                <p>{{ __('messages.Web development helps build high-quality websites and optimize performance. Create powerful web solutions to drive growth and success for your business!') }}</p>
                            </div>
                            <div class="path-card-item">
                                <div class="card-icon">
                                    <i class="fas fa-pen-nib"></i>
                                </div>
                                <h3>{{ __('messages.Content Marketing') }}</h3>
                                <p>{{ __('messages.Create valuable content to attract and retain customers. Develop a content strategy to enhance awareness and build trust!') }}</p>
                            </div>
                            <div class="path-card-item">
                                <div class="card-icon">
                                    <i class="fas fa-envelope"></i>
                                </div>
                                <h3>{{ __('messages.Email Marketing') }}</h3>
                                <p>{{ __('messages.Reach customers directly and boost engagement. Build effective email strategies to drive revenue and grow your brand!') }}</p>
                            </div>
                            <div class="path-card-item">
                                <div class="card-icon">
                                    <i class="fas fa-bullhorn"></i>
                                </div>
                                <h3>{{ __('messages.Pay-Per-Click') }}</h3>
                                <p>{{ __('messages.Reach potential customers and optimize advertising costs. Achieve rapid growth with smart PPC strategies!') }}</p>
                            </div>
                            <div class="path-card-item">
                                <div class="card-icon">
                                    <i class="fas fa-paint-brush"></i>
                                </div>
                                <h3>{{ __('messages.UX/UI Design') }}</h3>
                                <p>{{ __('messages.Create smooth user experiences and appealing interfaces. Optimize designs to improve user satisfaction and engagement!') }}</p>
                            </div>

                        </div>
                    </section>
                </div>
                <div class="slide" style="background-color: #fff;">
                    <div class="main-content">
                        <div class="pricing-design"> 
                                <div class="pricing-table">
                                    <h1>{{ __('messages.Pricing Table') }}</h1>
                                    <div class="item"><span>01</span> <p>{{ __('messages.Number of new and modified screens:') }}</p></div>
                                    <div class="item"><span>02</span> <p>{{ __('messages.Use HTML, CSS, and responsive design to complete:') }}</p></div>
                                    <div class="item"><span>03</span> <p>{{ __('messages.Use JavaScript to complete:') }}</p></div>
                                    <div class="item"><span>04</span> <p>{{ __('messages.Use Frontend Development Tools to complete:') }}</p></div>
                                    <div class="item"><span>05</span> <p>{{ __('messages.Use Backend Development Tools to complete:') }}</p></div>
                                    <div class="item"><span>06</span> <p>{{ __('messages.Deployment & Hosting:') }}</p></div>
                                    <div class="item"><span>07</span> <p>{{ __('messages.The product is under a safe warranty for 6 months.') }}</p></div>
                                </div>
                                <div class="pricing-table-box1">
                                    <h1>10$</h1>
                                    <div class="item"><span><i class="fa-solid fa-pen-to-square"></i></span> <p> 1 {{ __('messages.Screens') }}</p></div>
                                    <div class="item Possible"><span><i class="fa-solid fa-check"></i></span> <p> {{ __('messages.Possible') }}</p></div>
                                    <div class="item Possible"><span><i class="fa-solid fa-check"></i></span> <p> {{ __('messages.Possible') }}</p></div>
                                    <div class="item NotPossible"><span><i class="fa-solid fa-xmark"></i></span> <p> {{ __('messages.Not Possible') }}</p></div>
                                    <div class="item NotPossible"><span><i class="fa-solid fa-xmark"></i></span> <p> {{ __('messages.Not Possible') }}</p></div>
                                    <div class="item NotPossible"><span><i class="fa-solid fa-xmark"></i></span> <p> {{ __('messages.Not Possible') }}</p></div>
                                    <div class="item Possible"><span><i class="fa-solid fa-check"></i></span> <p> {{ __('messages.Possible') }}</p></div>
                                </div>
                                <div class="pricing-table-box2">
                                    <h1>20$</h1>
                                    <div class="item"><span><i class="fa-solid fa-pen-to-square"></i></span> <p> 3 {{ __('messages.Screens') }}</p></div>
                                    <div class="item Possible"><span><i class="fa-solid fa-check"></i></span> <p> {{ __('messages.Possible') }}</p></div>
                                    <div class="item Possible"><span><i class="fa-solid fa-check"></i></span> <p> {{ __('messages.Possible') }}</p></div>
                                    <div class="item Possible"><span><i class="fa-solid fa-check"></i></span> <p> {{ __('messages.Possible') }}</p></div>
                                    <div class="item NotPossible"><span><i class="fa-solid fa-xmark"></i></span> <p> {{ __('messages.Not Possible') }}</p></div>
                                    <div class="item NotPossible"><span><i class="fa-solid fa-xmark"></i></span> <p> {{ __('messages.Not Possible') }}</p></div>
                                    <div class="item Possible"><span><i class="fa-solid fa-check"></i></span> <p> {{ __('messages.Possible') }}</p></div>
                                </div>
                                <div class="pricing-table-box3">
                                    <h1>30$</h1>
                                    <div class="item"><span><i class="fa-solid fa-pen-to-square"></i></span> <p> 5 {{ __('messages.Screens') }}</p></div>
                                    <div class="item Possible"><span><i class="fa-solid fa-check"></i></span> <p> {{ __('messages.Possible') }}</p></div>
                                    <div class="item Possible"><span><i class="fa-solid fa-check"></i></span> <p> {{ __('messages.Possible') }}</p></div>
                                    <div class="item Possible"><span><i class="fa-solid fa-check"></i></span> <p> {{ __('messages.Possible') }}</p></div>
                                    <div class="item Possible"><span><i class="fa-solid fa-check"></i></span> <p> {{ __('messages.Possible') }}</p></div>
                                    <div class="item NotPossible"><span><i class="fa-solid fa-xmark"></i></span> <p> {{ __('messages.Not Possible') }}</p></div>
                                    <div class="item Possible"><span><i class="fa-solid fa-check"></i></span> <p> {{ __('messages.Possible') }}</p></div>
                                </div>
                                <div class="pricing-table-box4">
                                    <h1>100$</h1>
                                    <div class="item"><span><i class="fa-solid fa-pen-to-square"></i></span> <p> 10 {{ __('messages.Screens') }}</p></div>
                                    <div class="item Possible"><span><i class="fa-solid fa-check"></i></span> <p> {{ __('messages.Possible') }}</p></div>
                                    <div class="item Possible"><span><i class="fa-solid fa-check"></i></span> <p> {{ __('messages.Possible') }}</p></div>
                                    <div class="item Possible"><span><i class="fa-solid fa-check"></i></span> <p> {{ __('messages.Possible') }}</p></div>
                                    <div class="item Possible"><span><i class="fa-solid fa-check"></i></span> <p> {{ __('messages.Possible') }}</p></div>
                                    <div class="item Possible"><span><i class="fa-solid fa-check"></i></span> <p> {{ __('messages.Possible') }}</p></div>
                                    <div class="item Possible"><span><i class="fa-solid fa-check"></i></span> <p> {{ __('messages.Possible') }}</p></div>
                                </div>
                        </div>
                    </div>
                </div>
                <div class="slide" style="background-color: #fff;">
                    <div class="main-content">
                        <h3 class="title">{{ __('messages.Project') }}</h3>
                        <div class="sub-header">{{ __('messages.Projects participated in') }}</div>
                        <div class="list-card">
                            @if($projects->isEmpty())
                                <p>{{ __('messages.No News Available') }}</p>
                            @else
                                @foreach($projects as $item)
                                <div class="card">
                                    <div class="card-img">
                                        <img src="{{asset($item->image_path)}}" />
                                    </div>
                                    <div class="project-user">
                                        <p>{{ $item->created_at->format('d-m-Y') }}</p>
                                    </div>
                                    <p class="card-title">【{{ $item->name}}】</p>
                                    <div class="content-expert-show">
                                        <i class="fa-duotone fas fa-caret-left"></i>
                                        <button class="btn-show" onclick="ShowProject('{{ $item->id }}')">{{ __('messages.See More') }}</button>
                                        <i class="fa-duotone fas fa-caret-right"></i>
                                    </div>
                                </div>
                                @endforeach
                            @endif
                        </div>
                    </div>
                </div>
                <!-- <div class="slide" style="background-color: #fff;">
                    <div class="main-content">
                        <h3 class="title">WordPress</h3>
                        <div class="sub-header">コピペでできる便利カスタマイズまとめ</div>
                        <div class="list-card">
                            <div class="card">
                                <div class="card-img">
                                    <img src="{{asset('assets/images/news1.png')}}" />
                                </div>
                                <div class="project-user">
                                    <p>15-8-2000</p>
                                </div>
                                <p class="card-title">【VJP-CONNECT】</p>
                                <div class="content-expert-show">
                                    <i class="fa-duotone fas fa-caret-left"></i>
                                    <button class="btn-show">Xem thêm</button>
                                    <i class="fa-duotone fas fa-caret-right"></i>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-img">
                                    <img src="{{asset('assets/images/news1.png')}}" />
                                </div>
                                <div class="project-user">
                                    <p>15-8-2000</p>
                                </div>
                                <p class="card-title">【VJP-CONNECT】</p>
                                <div class="content-expert-show">
                                    <i class="fa-duotone fas fa-caret-left"></i>
                                    <button class="btn-show">Xem thêm</button>
                                    <i class="fa-duotone fas fa-caret-right"></i>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-img">
                                    <img src="{{asset('assets/images/news1.png')}}" />
                                </div>
                                <div class="project-user">
                                    <p>15-8-2000</p>
                                </div>
                                <p class="card-title">【VJP-CONNECT】</p>
                                <div class="content-expert-show">
                                    <i class="fa-duotone fas fa-caret-left"></i>
                                    <button class="btn-show">Xem thêm</button>
                                    <i class="fa-duotone fas fa-caret-right"></i>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-img">
                                    <img src="{{asset('assets/images/news1.png')}}" />
                                </div>
                                <div class="project-user">
                                    <p>15-8-2000</p>
                                </div>
                                <p class="card-title">【VJP-CONNECT】</p>
                                <div class="content-expert-show">
                                    <i class="fa-duotone fas fa-caret-left"></i>
                                    <button class="btn-show">Xem thêm</button>
                                    <i class="fa-duotone fas fa-caret-right"></i>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-img">
                                    <img src="{{asset('assets/images/news1.png')}}" />
                                </div>
                                <div class="project-user">
                                    <p>15-8-2000</p>
                                </div>
                                <p class="card-title">【VJP-CONNECT】</p>
                                <div class="content-expert-show">
                                    <i class="fa-duotone fas fa-caret-left"></i>
                                    <button class="btn-show">Xem thêm</button>
                                    <i class="fa-duotone fas fa-caret-right"></i>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-img">
                                    <img src="{{asset('assets/images/news1.png')}}" />
                                </div>
                                <div class="project-user">
                                    <p>15-8-2000</p>
                                </div>
                                <p class="card-title">【VJP-CONNECT】</p>
                                <div class="content-expert-show">
                                    <i class="fa-duotone fas fa-caret-left"></i>
                                    <button class="btn-show">Xem thêm</button>
                                    <i class="fa-duotone fas fa-caret-right"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
                <div class="slide" style="background-color: #fff;">
                    <div class="main-content">
                        <section id="section-wrapper">
                            <div class="box-wrapper">
                                <div class="info-wrap">
                                    <h3 class="info-sub-title">Hãy dành một chút thời gian để điền vào biểu mẫu, và đội ngũ chuyên gia tận tâm của chúng tôi sẽ nhanh chóng liên hệ lại với bạn trong vòng 24 giờ. Chúng tôi luôn sẵn sàng lắng nghe và mang đến giải pháp phù hợp nhất, đảm bảo bạn nhận được sự hỗ trợ tốt nhất!</h3>
                                    <ul class="info-details">
                                        <li>
                                            <div class="contact-icon">
                                                <b></b>
                                                <i class="fas fa-location-dot"></i>
                                            </div>
                                            <div class="text-contact">
                                                <p>Địa chỉ :</p> <a href="tel:+ 0768173369">Tân Thế Hòa, quận Tân Phú, Thành Phố Hồ Chí Minh.</a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="contact-icon">
                                                <b></b>
                                                <i class="fas fa-phone-alt"></i>
                                            </div>
                                            <div class="text-contact">
                                                <p>Điện thoại:</p> <a href="tel:+ 0768173369">+ 0768173369</a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="contact-icon">
                                                <b></b>
                                                <i class="fas fa-paper-plane"></i>
                                            </div>
                                            <div class="text-contact">
                                                <p>Email:</p> 
                                                <a href="mailto:tuankietity@gmail.com">tuankietity@gmail.com</a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="contact-icon">
                                                <b></b>
                                                <i class="fas fa-globe"></i>
                                            </div>
                                            <div class="text-contact">
                                                <p class="mx-10">Trang web:</p> <a class="mx-10" href="https://www.upskillhub.io.vn/">https://www.upskillhub.io.vn/</a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="contact-icon">
                                                <b></b>
                                                <i class="fab fa-facebook"></i>
                                            </div>
                                            <div class="text-contact">
                                                <p class="mx-10">Trang web:</p> <a class="mx-10" href="#">Đang cập nhật.</a>
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
                                    <form class="contact-form" action="https://tryskill.io.vn/send-contact" method="POST">
                                        <input type="hidden" name="_token" value="w3Tsbgf8fsIOnRm8PMG08BK5ujfwODdzMQyejY5c">                        <div class="form-group">
                                            <label for="name">Tên</label>
                                            <input type="text" name="name" placeholder="Tên" required="">
                                        </div>
                                        <div class="form-group">
                                            <label for="email">Email</label>
                                            <input type="email" name="email" placeholder="Email" required="">
                                        </div>
                                        <div class="form-group">
                                            <label for="subject">Chủ đề</label>
                                            <input type="text" name="subject" placeholder="Chủ đề" required="">
                                        </div>
                                        <div class="form-group">
                                            <label for="message">Tin nhắn</label>
                                            <textarea name="message" placeholder="Tin nhắn" rows="5" required=""></textarea>
                                        </div>
                                        <button type="submit" class="btn">Gửi</button>
                                    </form>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
        @include('pages.components.aside.index')
    </div>
</div>
<div class="modal" id="modelNews">
    <div class="showNewsPopup">
        <div class="showNewsPopupLeft">
            <img src="" />
        </div>
        <div class="showNewsPopupRight">
            <h3>Học thoi nào</h3>  
            <div class="showNewsPopupRightContent">
                
            </div>                        
        </div>
        <div class="BtnClose" onclick="closeShowNews()">
            <p>X</p>
        </div>
    </div>
</div>


<div class="modal" id="modelProject">
    <div class="showProjectPopup">
        <div class="showProjectPopupLeft">
            <img src="" />
        </div>
        <div class="showProjectPopupRight">
            <h3>Học thoi nào</h3>  
            <div class="showProjectPopupRightContent">
                
            </div>                        
        </div>
        <div class="BtnClose" onclick="closeShowProject()">
            <p>X</p>
        </div>
    </div>
</div>

<style>
    .pricing-table-box1 h1::after {
        content: "{{ __('messages.Starter') }}";
    }
    .pricing-table-box2 h1::after {
        content: "{{ __('messages.Business') }}";
    }
    .pricing-table-box3 h1::after {
        content: "{{ __('messages.Professional') }}";
    }
    .pricing-table-box4 h1::after {
        content: "{{ __('messages.Premium') }}";
    }
</style>
<script>
    function ShowProject(id) {
        const showPopupNews = document.getElementById('modelProject');
        if (showPopupNews.style.display === 'none' || showPopupNews.style.display === '') {
            showPopupNews.style.display = 'block';
            fetch(`/show/project/${id}`)
            .then(response => {
                if (!response.ok) {
                    throw new Error('Tin tức không tồn tại');
                }
                return response.json();
            })
            .then(data => {
                document.querySelector('.showProjectPopupRight h3').innerText = data.name;
                document.querySelector('.showProjectPopupRightContent').innerHTML = data.description;
                document.querySelector('.showProjectPopupLeft img').src = data.image_path;
                const showPopupNews = document.getElementById('modelProject');
                showPopupNews.classList.add('show');
            })
            .catch(error => {
                console.error(error);
                alert('Không thể tải tin tức. Vui lòng thử lại.');
            });
        } else {
            showPopupNews.style.display = 'none';
        }
    }

    function closeShowProject() {
        const showPopupNews = document.getElementById('modelProject');
        if (showPopupNews.style.display === 'none' || showPopupNews.style.display === '') {
            showPopupNews.style.display = 'block';
        } else {
            showPopupNews.style.display = 'none';
        }
    }
    function ShowNews(id) {
        const showPopupNews = document.getElementById('modelNews');
        if (showPopupNews.style.display === 'none' || showPopupNews.style.display === '') {
            showPopupNews.style.display = 'block';
            fetch(`/show/news/${id}`)
            .then(response => {
                if (!response.ok) {
                    throw new Error('Tin tức không tồn tại');
                }
                return response.json();
            })
            .then(data => {
                document.querySelector('.showNewsPopupRight h3').innerText = data.name;
                document.querySelector('.showNewsPopupRightContent').innerHTML = data.description;
                document.querySelector('.showNewsPopupLeft img').src = data.image_path;
                const showPopupNews = document.getElementById('modelNews');
                showPopupNews.classList.add('show');
            })
            .catch(error => {
                console.error(error);
                alert('Không thể tải tin tức. Vui lòng thử lại.');
            });
        } else {
            showPopupNews.style.display = 'none';
        }
    }

    function closeShowNews() {
        const showPopupNews = document.getElementById('modelNews');
        if (showPopupNews.style.display === 'none' || showPopupNews.style.display === '') {
            showPopupNews.style.display = 'block';
        } else {
            showPopupNews.style.display = 'none';
        }
    }


    document.addEventListener("DOMContentLoaded", function () {
        const slider = document.querySelector(".slider");
        const pagination = document.querySelector(".pagination");
        let currentIndex = 0;

        const savedIndex = localStorage.getItem("currentIndex");
        if (savedIndex !== null) {
            currentIndex = parseInt(savedIndex, 10);
        }

        function updateSlider(index) {
            currentIndex = index;
            slider.style.transform = `translateY(-${currentIndex * 100}vh)`;
            updatePagination();

            localStorage.setItem("currentIndex", currentIndex);
        }

        function updatePagination() {
            const buttons = pagination.querySelectorAll("button");
            buttons.forEach((button, index) => {
                button.classList.toggle("active", index === currentIndex);
            });
        }

        for (let i = 0; i < slider.childElementCount; i++) {
            const button = document.createElement("button");
            button.textContent = `Pages ${i + 1}`;
            button.addEventListener("click", () => updateSlider(i));
            pagination.appendChild(button);
        }

        updateSlider(currentIndex);
    });
</script>
@endsection