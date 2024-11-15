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
        <img src="{{asset('assets/images/header-shape.svg')}}" id="header-shape" />
        <div class="hero-content">
            <h1>Let's Make Learning Fun</h1>
            <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi nihil
            eum culpa, quisquam dolores porro voluptate expedita illo doloribus
            nulla. Corporis fugiat sed excepturi odio, odit nam officia sequi at.
            </p>
            <div class="btn-container">
            <button class="primary-btn btn">Start Learning</button>
            <button class="secondary-btn btn">Explore More</button>
            </div>
        </div>
        <div class="hero-img">
            <img src="{{asset('assets/images/hero-image.svg')}}" />
        </div>
    </section>
    <section class="features" id="features">
        <h2>Why Choose Us</h2>
        <p class="section-desc">
            We at study smart provide you with engaging video lessons taught by the
            top educators using smart techniques.
         </p>
        <div class="row">
            <div class="column">
                <i class="fas fa-star"></i>
                <h3>Engaging Lectures</h3>
                <p>
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Vel veniam
                    voluptatibus nobis id perspiciatis ratione reiciendis quisquam
                    assumenda minima. Facere.
                </p>
            </div>
            <div class="column">
            <i class="fas fa-thumbs-up"></i>
            <h3>Top Educators</h3>
            <p>
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Cumque
                nesciunt harum ducimus eum esse dolore debitis! Officiis autem est
                dolor.
            </p>
            </div>
            <div class="column">
            <i class="fas fa-graduation-cap"></i>
            <h3>Self Paced</h3>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio
                eveniet quasi aut quibusdam incidunt debitis voluptas qui enim modi
                rem!
            </p>
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
      <div class="row">
        <div class="column">
          <div class="testimonial-image">
            <img src="{{asset('assets/images/person-1.jpg')}}" />
          </div>
          <p>
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Est alias
            eligendi quia explicabo dolorem dignissimos nisi consequatur nobis
            quaerat quas iure nostrum laudantium similique ea iste sequi tempore
            natus, repellat quae deleniti. Veritatis sit deserunt rerum cum
            consectetur voluptate nisi.
          </p>
          <h3>Mark King</h3>
        </div>
        <div class="column">
          <div class="testimonial-image">
            <img src="{{asset('assets/images/person-2.jpg')}}"  />
          </div>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis
            exercitationem, deleniti illo modi voluptatibus, voluptatem totam ea
            consequuntur sint, sit voluptas laboriosam? Aperiam, iure sequi sunt
            assumenda molestiae recusandae, harum id aliquam ipsam eveniet
            ratione cupiditate libero quasi nobis nulla.
          </p>
          <h3>Rose Smith</h3>
        </div>
      </div>
    </section>
    <!------ Section: Download App ------>
    <section class="download-app" id="download-app">
      <h2>Download Our App</h2>
      <p class="section-desc">
        Unloack all new amazing features with our mobile app.
      </p>
      <div class="row">
        <div class="column">
          <img src="download-app.png" />
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
    <div class="modal" id="CreateLogin">
        <div class="ModelCreateLogin">
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <h2>Đăng nhập</h2>
                @if (session('success'))
                    <div id="login-alert" class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
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
    </div> -->
    
    @if (session('success'))
        <div id="popup-category" class="popup-category success">
            {{ session('success') }}
        </div>
    @endif
    @if (session('error'))
        <div id="popup-category" class="popup-category error">
            {{ session('error') }}
        </div>
    @endif

    @if ($errors->any())
        <div id="popup-category" class="popup-category error">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif


    <script>
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
</body>
</html>