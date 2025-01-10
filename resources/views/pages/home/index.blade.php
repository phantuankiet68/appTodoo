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
                                <button>Trải nghiệm ngay</button>
                            </div>
                        </div>
                        <div class="column">
                            <div class="app-feature">
                                <div>
                                <i class="fas fa-star"></i>
                                <h3>Giới thiệu</h3>
                                </div>
                                <p>
                                    "Tryskill" có thể đại diện cho một hành trình hoặc nỗ lực trong việc học và cải thiện kỹ năng trong lĩnh vực công nghệ. <br>
                                    Một chương trình, ứng dụng hoặc nền tảng học tập: ứng dụng giúp người dùng rèn luyện và cải thiện kỹ năng của mình thông qua các thử thách và bài học thực hành.
                                </p>
                            </div>
                            <div class="app-feature">
                                <div>
                                <i class="fas fa-star"></i>
                                <h3>{{ __('messages.Practical Application') }}</h3>
                                </div>
                                <p>
                                    Biến kiến thức thành kỹ năng! Website cung cấp bài tập lập trình, thực hành tiếng Anh, tiếng Nhật để bạn áp dụng ngay vào thực tế, nâng cao hiệu quả học tập và phát triển bản thân.
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
                                Tải bài giảng để học mọi lúc, mọi nơi, không lo mất mạng! Chinh phục lập trình, tiếng Anh, tiếng Nhật dễ dàng với tài liệu luôn sẵn trong tay.
                                </p>
                            </div>
                        </div>
                        </div>
                    </section>
                </div>
                <div class="slide" style="background-color: #fff;">
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
                </div>
                <div class="slide" style="background-color: #fff;">
                    <div class="main-content">
                        <h3 class="title">WordPress</h3>
                        <div class="sub-header">コピペでできる便利カスタマイズまとめ</div>
                        <div class="list-card">
                            <div class="card">
                                <div class="card-user-img">
                                    <img src="{{asset('assets/images/userAI.jpg')}}" alt="James Wilson" class="user-img">
                                </div>
                                <p class="text-center">Phan Tuấn Kiệt</p>
                                <p class="card-title mt-10">【Software Developer】</p>
                                <div class="content-expert-show mx-20">
                                    <i class="fa-duotone fas fa-caret-left"></i>
                                    <button class="btn-show">Liên hệ ngay</button>
                                    <i class="fa-duotone fas fa-caret-right"></i>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-user-img">
                                    <img src="{{asset('assets/images/userAI.jpg')}}" alt="James Wilson" class="user-img">
                                </div>
                                <p class="text-center">Phan Tuấn Kiệt</p>
                                <p class="card-title mt-10">【Software Developer】</p>
                                <div class="content-expert-show mx-20">
                                    <i class="fa-duotone fas fa-caret-left"></i>
                                    <button class="btn-show">Liên hệ ngay</button>
                                    <i class="fa-duotone fas fa-caret-right"></i>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-user-img">
                                    <img src="{{asset('assets/images/userAI.jpg')}}" alt="James Wilson" class="user-img">
                                </div>
                                <p class="text-center">Phan Tuấn Kiệt</p>
                                <p class="card-title mt-10">【Software Developer】</p>
                                <div class="content-expert-show mx-20">
                                    <i class="fa-duotone fas fa-caret-left"></i>
                                    <button class="btn-show">Liên hệ ngay</button>
                                    <i class="fa-duotone fas fa-caret-right"></i>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-user-img">
                                    <img src="{{asset('assets/images/userAI.jpg')}}" alt="James Wilson" class="user-img">
                                </div>
                                <p class="text-center">Phan Tuấn Kiệt</p>
                                <p class="card-title mt-10">【Software Developer】</p>
                                <div class="content-expert-show mx-20">
                                    <i class="fa-duotone fas fa-caret-left"></i>
                                    <button class="btn-show">Liên hệ ngay</button>
                                    <i class="fa-duotone fas fa-caret-right"></i>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-user-img">
                                    <img src="{{asset('assets/images/userAI.jpg')}}" alt="James Wilson" class="user-img">
                                </div>
                                <p class="text-center">Phan Tuấn Kiệt</p>
                                <p class="card-title mt-10">【Software Developer】</p>
                                <div class="content-expert-show mx-20">
                                    <i class="fa-duotone fas fa-caret-left"></i>
                                    <button class="btn-show">Liên hệ ngay</button>
                                    <i class="fa-duotone fas fa-caret-right"></i>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-user-img">
                                    <img src="{{asset('assets/images/userAI.jpg')}}" alt="James Wilson" class="user-img">
                                </div>
                                <p class="text-center">Phan Tuấn Kiệt</p>
                                <p class="card-title mt-10">【Software Developer】</p>
                                <div class="content-expert-show mx-20">
                                    <i class="fa-duotone fas fa-caret-left"></i>
                                    <button class="btn-show">Liên hệ ngay</button>
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
                                <h3>SEO Consultancy</h3>
                                <p>Tối ưu hóa trang web của bạn để xếp hạng cao hơn trên công cụ tìm kiếm, thu hút nhiều lượt truy cập và tăng khả năng chuyển đổi. </p>
                            </div>
                            <div class="path-card-item">
                                <div class="card-icon">
                                    <i class="fas fa-chart-line"></i>
                                </div>
                                <h3>Competitor Analysis</h3>
                                <p>Phân tích đối thủ cạnh tranh giúp bạn nhận diện cơ hội, thách thức và xây dựng chiến lược vượt trội. Tối ưu hóa điểm mạnh để tạo ra lợi thế cạnh tranh bền vững!</p>
                            </div>
                            <div class="path-card-item">
                                <div class="card-icon">
                                    <i class="fas fa-share-alt"></i>
                                </div>
                                <h3>Social Marketing</h3>
                                <p>Tiếp thị xã hội giúp bạn tiếp cận mục tiêu và xây dựng mối quan hệ với khách hàng. Tận dụng mạng xã hội để thúc đẩy sự phát triển cho thương hiệu!</p>
                            </div>
                            <div class="path-card-item">
                                <div class="card-icon">
                                    <i class="fas fa-code"></i>
                                </div>
                                <h3>Web Development</h3>
                                <p>Phát triển web giúp xây dựng trang web chất lượng, tối ưu hiệu suất. Tạo giải pháp web mạnh mẽ để thúc đẩy sự phát triển và thành công cho doanh nghiệp!</p>
                            </div>
                            <div class="path-card-item">
                                <div class="card-icon">
                                    <i class="fas fa-pen-nib"></i>
                                </div>
                                <h3>Content Marketing</h3>
                                <p>Content Marketing tạo ra nội dung giá trị, thu hút và giữ chân khách hàng. Xây dựng chiến lược nội dung để nâng cao nhận thức và lòng tin!</p>
                            </div>
                            <div class="path-card-item">
                                <div class="card-icon">
                                    <i class="fas fa-envelope"></i>
                                </div>
                                <h3>Email Marketing</h3>
                                <p>Email Marketing giúp tiếp cận khách hàng trực tiếp và tăng cường tương tác. Xây dựng chiến lược email hiệu quả để thúc đẩy doanh thu và phát triển thương hiệu!</p>
                            </div>
                            <div class="path-card-item">
                                <div class="card-icon">
                                    <i class="fas fa-bullhorn"></i>
                                </div>
                                <h3>Pay-Per-Click</h3>
                                <p>Pay-Per-Click giúp tiếp cận khách hàng tiềm năng và tối ưu hóa chi phí quảng cáo. Tăng trưởng nhanh chóng và hiệu quả với chiến lược PPC thông minh!</p>
                            </div>
                            <div class="path-card-item">
                                <div class="card-icon">
                                    <i class="fas fa-paint-brush"></i>
                                </div>
                                <h3>UX/UI Design</h3>
                                <p>UX/UI Design tạo ra trải nghiệm người dùng mượt mà và giao diện hấp dẫn. Tối ưu hóa thiết kế để nâng cao sự hài lòng và tương tác của người dùng!</p>
                            </div>

                        </div>
                    </section>
                </div>
                <div class="slide" style="background-color: #fff;">
                    <div class="main-content">
                    <div class="pricing-design"> 
                                <div class="pricing-table">
                                    <h1>Bảng Giá</h1>
                                    <div class="item"><span>01</span> <p>Number of new and modified screens.</p></div>
                                    <div class="item"><span>02</span> <p>Use HTML, CSS, and responsive design to complete</p></div>
                                    <div class="item"><span>03</span> <p>Use JavaScript to complete.</p></div>
                                    <div class="item"><span>04</span> <p>Use Frontend Development Tools to complete.</p></div>
                                    <div class="item"><span>05</span> <p>Use Backend Development Tools to complete.</p></div>
                                    <div class="item"><span>06</span> <p>Deployment &amp; Hosting</p></div>
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
                    </div>
                </div>
                <div class="slide" style="background-color: #fff;">
                    <div class="main-content">
                        <h3 class="title">WordPress</h3>
                        <div class="sub-header">コピペでできる便利カスタマイズまとめ</div>
                        <div class="list-card">
                            <div class="card">
                                <div class="card-img">
                                    <img alt="リンクカードの作り方" src="{{ asset('assets/images/project1.png') }}"/>
                                </div>
                                <div class="project-user">
                                    <p>Phan Tuan kiet</p>
                                </div>
                                <p class="card-title">【VJP-CONNECT】</p>
                                <div class="content-expert-show">
                                    <i class="fa-duotone fas fa-caret-left"></i>
                                    <button class="btn-show">Xem hồ sơ</button>
                                    <i class="fa-duotone fas fa-caret-right"></i>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-img">
                                    <img alt="リンクカードの作り方" src="{{ asset('assets/images/project1.png') }}"/>
                                </div>
                                <div class="project-user">
                                    <p>Phan Tuan kiet</p>
                                </div>
                                <p class="card-title">【VJP-CONNECT】</p>
                                <div class="content-expert-show">
                                    <i class="fa-duotone fas fa-caret-left"></i>
                                    <button class="btn-show">Xem hồ sơ</button>
                                    <i class="fa-duotone fas fa-caret-right"></i>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-img">
                                    <img alt="リンクカードの作り方" src="{{ asset('assets/images/project1.png') }}"/>
                                </div>
                                <div class="project-user">
                                    <p>Phan Tuan kiet</p>
                                </div>
                                <p class="card-title">【VJP-CONNECT】</p>
                                <div class="content-expert-show">
                                    <i class="fa-duotone fas fa-caret-left"></i>
                                    <button class="btn-show">Xem hồ sơ</button>
                                    <i class="fa-duotone fas fa-caret-right"></i>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-img">
                                    <img alt="リンクカードの作り方" src="{{ asset('assets/images/project1.png') }}"/>
                                </div>
                                <div class="project-user">
                                    <p>Phan Tuan kiet</p>
                                </div>
                                <p class="card-title">【VJP-CONNECT】</p>
                                <div class="content-expert-show">
                                    <i class="fa-duotone fas fa-caret-left"></i>
                                    <button class="btn-show">Xem hồ sơ</button>
                                    <i class="fa-duotone fas fa-caret-right"></i>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-img">
                                    <img alt="リンクカードの作り方" src="{{ asset('assets/images/project1.png') }}"/>
                                </div>
                                <div class="project-user">
                                    <p>Phan Tuan kiet</p>
                                </div>
                                <p class="card-title">【VJP-CONNECT】</p>
                                <div class="content-expert-show">
                                    <i class="fa-duotone fas fa-caret-left"></i>
                                    <button class="btn-show">Xem hồ sơ</button>
                                    <i class="fa-duotone fas fa-caret-right"></i>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-img">
                                    <img alt="リンクカードの作り方" src="{{ asset('assets/images/project1.png') }}"/>
                                </div>
                                <div class="project-user">
                                    <p>Phan Tuan kiet</p>
                                </div>
                                <p class="card-title">【VJP-CONNECT】</p>
                                <div class="content-expert-show">
                                    <i class="fa-duotone fas fa-caret-left"></i>
                                    <button class="btn-show">Xem hồ sơ</button>
                                    <i class="fa-duotone fas fa-caret-right"></i>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-img">
                                    <img alt="リンクカードの作り方" src="{{ asset('assets/images/project1.png') }}"/>
                                </div>
                                <div class="project-user">
                                    <p>Phan Tuan kiet</p>
                                </div>
                                <p class="card-title">【VJP-CONNECT】</p>
                                <div class="content-expert-show">
                                    <i class="fa-duotone fas fa-caret-left"></i>
                                    <button class="btn-show">Xem hồ sơ</button>
                                    <i class="fa-duotone fas fa-caret-right"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slide" style="background-color: #fff;">
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
                </div>
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

<script>
    document.addEventListener("DOMContentLoaded", function () {
        const slider = document.querySelector(".slider");
        const pagination = document.querySelector(".pagination");
        let currentIndex = 0;

        function updateSlider(index) {
            currentIndex = index;
            slider.style.transform = `translateY(-${currentIndex * 100}vh)`;
            updatePagination();
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
        updatePagination();
        });
</script>
@endsection