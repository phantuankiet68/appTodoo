<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
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
</head>
<body>
    <button id="scroll-top">
        <i class="fas fa-arrow-up"></i>
    </button>
    <header>
        <div class="header-aside">
            <div class="header-aside-list hidden">
                <a href="">Kết nối <i class="fa-solid fa-wifi"></i> | </a>
                <a href="">Facebook <i class="fa-brands fa-facebook"></i> | </a> 
                <a href="">Tiktok <i class="fa-brands fa-tiktok"></i></a> 
            </div>
            <div class="header-aside-list">
                @if (Auth::check())
                    <a href="#" onclick="logout()" class="btn-login" id="logoutLink"><i class="fa-regular fa-user"></i> Đăng xuất</a>
                @else
                    <a href="#login" class="btn-login" onclick="Login();"><i class="fa-regular fa-user"></i> Đăng nhập</a>
                    <a href="#register" class="btn-login" onclick="Register();"><i class="fa-regular fa-user"></i> Đăng ký</a>
                @endif  
            </div>
        </div>
        <nav>
            <a href="#home" id="logo">UpSkillHub</a>
            <i class="fas fa-bars" id="ham-menu"></i>
            <ul id="nav-bar">
                <li>
                    <a href="#home">Home</a>
                </li>
                <li>
                    <a href="#courses">Abouts</a>
                </li>
                <li>
                    <a href="#features">Features</a>
                </li>
                <li>
                    <a href="#courses">Courses</a>
                </li>
                <li>
                    <a href="#testimonial">Services</a>
                </li>
                <li>
                    <a href="#download-app">Product</a>
                </li>
                <li>
                    <a href="#download-app">Tools</a>
                </li>
                <li>
                    <a href="#download-app">Contact</a>
                </li>
            </ul>
        </nav>
    </header>
    <section class="hero" id="home">
        <div class="page-left-item banner">
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
                        <a href="#About" class="btn-more">More here</a>
                        <a href="/dashboard" class="btn-dashboard">Dashboard</a>
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
                            <h3>Online Programs</h3>
                            <p>Đặc điểm của Online Programs:<br/>
                                Linh hoạt, Chi phí hợp lý hơn, Chương trình phong phú, Có kế hoạch.
                                Dành cho cả  người đang đi làm, sinh viên và Những người muốn học thêm một lĩnh vực mới...
                            </p>
                            <div class="btn-register">
                                <button>register</button>
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
                            <h3>Coding Programs</h3>
                            <p>Đặc điểm của Coding Programs:<br/>
                                Học lập trình cơ bản, ham gia khóa học hoặc tự học, Luyện tập thực tế, Tham gia cộng đồng lập trình, Xây dựng portfolio.
                                Dành cho cả  người đang đi làm, sinh viên...
                            </p>
                            <div class="btn-register">
                                <button>register</button>
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
                            <h3>English Programs</h3>
                            <p>Đặc điểm của English Programs:<br/>
                                Cải thiện kỹ năng cơ bản về ngôn ngữ:
                                Nghe, Nói, Đọc, Viết, Chuẩn bị cho học thuật hoặc công việc, Nâng cao sự tự tin.
                                Dành cho cả  người đang đi làm, sinh viên...
                            </p>
                            <div class="btn-register">
                                <button>register</button>
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
                            <h3>Japanese Programs</h3>
                            <p>Đặc điểm Japanese Programs:<br/>
                                Cải thiện kỹ năng cơ bản về ngôn ngữ:
                                Nghe, Nói, Đọc, Viết, Chuẩn bị cho học thuật hoặc công việc, Nâng cao sự tự tin.
                                Dành cho cả  người đang đi làm, sinh viên...
                            </p>
                            <div class="btn-register">
                                <button>register</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="download-app" id="download-app">
        <h2>Download Our App</h2>
        <p class="section-desc">
          Unloack all new amazing features with our mobile app.
        </p>
        <div class="row">
          <div class="column">
            <img src="{{asset('assets/images/download-app.png')}}" />
          </div>
          <div class="column">
            <div class="app-feature">
              <div>
                <i class="fas fa-star"></i>
                <h3>Set Reminders</h3>
              </div>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                Excepturi autem accusamus accusantium officia?
              </p>
            </div>
            <div class="app-feature">
              <div>
                <i class="fas fa-star"></i>
                <h3>Download Lectures</h3>
              </div>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                Excepturi autem accusamus accusantium officia?
              </p>
            </div>
            <div class="app-feature">
              <div>
                <i class="fas fa-star"></i>
                <h3>30,000+ Lectures</h3>
              </div>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                Excepturi autem accusamus accusantium officia?
              </p>
            </div>
            <div class="download-btns">
              <a href="#google-play">
                <img src="google-play.png" />
              </a>
              <a href="#app-store">
                <img src="app-store.png" />
              </a>
            </div>
          </div>
        </div>
      </section>
    <section class="features" id="features">
        <h2>Why Choose Us</h2>
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
    </section>
    <section class="courses" id="courses">
      <h2>Our Popular Courses</h2>
      <p class="section-desc">
        With over 30,000 courses to choose from, check out out most popular
        courses.
      </p>
      <div class="row">
        <div class="column">
          <img src="{{asset('assets/images/public.jpg')}}" />
          <h3>Public Speaking</h3>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos facere
            voluptatibus natus. Amet, cupiditate illo?
          </p>
          <div class="courses-btn">
            <button class="btn secondary-btn">Learn More</button>
          </div>
        </div>
        <div class="column">
          <img src="{{asset('assets/images/photography.jpg')}}" />
          <h3>Photography</h3>
          <p>
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sit nulla
            dolor nostrum animi veniam rem.
          </p>
          <div class="courses-btn">
            <button class="btn secondary-btn">Learn More</button>
          </div>
        </div>
        <div class="column">
          <img src="{{asset('assets/images/typing.jpg')}}" />
          <h3>Typing</h3>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores
            voluptatibus temporibus dolorem sit ipsam adipisci?
          </p>
          <div class="courses-btn">
            <button class="btn secondary-btn">Learn More</button>
          </div>
        </div>
      </div>
    </section>
    <section class="testimonial" id="testimonial">
      <h2>What Our Students Say</h2>
      <p class="section-desc">
        We provide a learning experience that is not available elsewhere. We
        have over 50,000 happy students.
      </p>
        <div class="slider-container swiper">
            <div class="slider-home">
                <div class="card-home swiper-wrapper">
                    <div class="card-home-item swiper-slide">
                        <img src="{{asset('assets/images/user1.jpg')}}" alt="James Wilson" class="user-img">
                        <h2 class="user-name">James Wilson</h2>
                        <p class="user-profession">Software Developer</p>
                        <button class="message-btn">Message</button>
                    </div>
                    <div class="card-home-item swiper-slide">
                        <img src="{{asset('assets/images/user1.jpg')}}" alt="James Wilson" class="user-img">
                        <h2 class="user-name">James Wilson</h2>
                        <p class="user-profession">Software Developer</p>
                        <button class="message-btn">Message</button>
                    </div>
                    <div class="card-home-item swiper-slide">
                        <img src="{{asset('assets/images/user1.jpg')}}" alt="James Wilson" class="user-img">
                        <h2 class="user-name">James Wilson</h2>
                        <p class="user-profession">Software Developer</p>
                        <button class="message-btn">Message</button>
                    </div>
                    <div class="card-home-item swiper-slide">
                        <img src="{{asset('assets/images/user1.jpg')}}" alt="James Wilson" class="user-img">
                        <h2 class="user-name">James Wilson</h2>
                        <p class="user-profession">Software Developer</p>
                        <button class="message-btn">Message</button>
                    </div>
                    <div class="card-home-item swiper-slide">
                        <img src="{{asset('assets/images/user1.jpg')}}" alt="James Wilson" class="user-img">
                        <h2 class="user-name">James Wilson</h2>
                        <p class="user-profession">Software Developer</p>
                        <button class="message-btn">Message</button>
                    </div>
                    <div class="card-home-item swiper-slide">
                        <img src="{{asset('assets/images/user1.jpg')}}" alt="James Wilson" class="user-img">
                        <h2 class="user-name">James Wilson</h2>
                        <p class="user-profession">Software Developer</p>
                        <button class="message-btn">Message</button>
                    </div>
                    <div class="card-home-item swiper-slide">
                        <img src="{{asset('assets/images/user1.jpg')}}" alt="James Wilson" class="user-img">
                        <h2 class="user-name">James Wilson</h2>
                        <p class="user-profession">Software Developer</p>
                        <button class="message-btn">Message</button>
                    </div>
                    <div class="card-home-item swiper-slide">
                        <img src="{{asset('assets/images/user1.jpg')}}" alt="James Wilson" class="user-img">
                        <h2 class="user-name">James Wilson</h2>
                        <p class="user-profession">Software Developer</p>
                        <button class="message-btn">Message</button>
                    </div>
                </div>
                <div class="swiper-pagination"></div>

                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>
        </div>
    </section>
    <section class="courses" id="courses">
        <h2>Our Popular Courses</h2>
        <p class="section-desc">
            With over 30,000 courses to choose from, check out out most popular
            courses.
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
                <div class="pricing-card standard table" id="service2"> 
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
    <!------ Section: Download App ------>
    <section class="download-app" id="download-app">
        <div style="height: 400px;"> </div>
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
            <form method="POST" action="{{ route('login') }}">
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


         const cards = document.querySelectorAll('.pricing-card');

        cards.forEach(card => {
            card.addEventListener('click', () => {
                cards.forEach(c => c.classList.remove('standard'));
                card.classList.add('standard');
            });
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.imagesloaded/5.0.0/imagesloaded.pkgd.min.js"></script>
    <script src="https://unpkg.com/imagesloaded@5/imagesloaded.pkgd.min.js"></script>
    <script src="{{ asset('js/layout.js') }}"></script>
</body>
</html>