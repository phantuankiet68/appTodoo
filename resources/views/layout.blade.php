<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UpSkillHub.vn </title>
    <link rel="stylesheet" href="{{ asset('css/layout.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.5/gsap.min.js"></script>
    <script src="https://unpkg.com/imagesloaded@4.1.4/imagesloaded.pkgd.min.js"></script>
</head>
<body>
    <div class="webHome">
        <header> 
            <div class="header-aside">
                <div class="header-aside-list">
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
                    <ul>
                        <li><a href="#" onclick="setActiveItem(1);" class="item"><i class="fa-solid fa-house"></i> Home</a></li>
                        <li><a href="#" onclick="setActiveItem(2);" class="item"><i class="fa-solid fa-address-card"></i> About Us</a></li>
                        <li><a href="#" onclick="setActiveItem(3);" class="item"><i class="fa-solid fa-gears"></i> Services</a></li>
                        <li><a href="#" onclick="setActiveItem(4);" class="item"><i class="fa-brands fa-product-hunt"></i> Product</a></li>
                        <li><a href="#" onclick="setActiveItem(5);" class="item"><i class="fa-solid fa-file-contract"></i> Contact Us</a></li>
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
            <!-- <div class="controll">
                <div class="controll-page">
                    <button><i class="fa-regular fa-circle-up"></i></button>
                    <button><i class="fa-regular fa-circle-down"></i></button>
                </div>
            </div> -->
            <section class="page-left"  id="extraItems">
                <div class="page-left-item banner activeItem" id="item1">
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
                            <div class="expertise">
                                <h3>My Expertise</h3>
                                <ul>
                                    <li>
                                        <span class="expertise-logo">
                                            <i class="fab fa-html5"></i>
                                        </span>
                                        <p>HTML</p>
                                    </li>
                                    <li>
                                        <span class="expertise-logo">
                                            <i class="fab fa-css3-alt"></i>
                                        </span>
                                        <p>CSS</p>
                                    </li>
                                    <li>
                                        <span class="expertise-logo">
                                            <i class="fab fa-node-js"></i>
                                        </span>
                                        <p>Java Script</p>
                                    </li>
                                    <li>
                                        <span class="expertise-logo">
                                            <i class="fab fa-react"></i>
                                        </span>
                                        <p>React Js</p>
                                    </li>
                                    <li>
                                        <span class="expertise-logo">
                                            <i class="fab fa-react"></i>
                                        </span>
                                        <p>Next Js</p>
                                    </li>
                                    <li>
                                        <span class="expertise-logo">
                                            <i class="fab fa-react"></i>
                                        </span>
                                        <p>React Native</p>
                                    </li>
                                    <li>
                                        <span class="expertise-logo">
                                            <i class="fab fa-react"></i>
                                        </span>
                                        <p>TypeScript</p>
                                    </li>
                                    <li>
                                        <span class="expertise-logo">
                                            <i class="fa-brands fa-vuejs"></i>
                                        </span>
                                        <p>Vue Js</p>
                                    </li>
                                    <li>
                                        <span class="expertise-logo">
                                            <i class="fa-brands fa-vuejs"></i>
                                        </span>
                                        <p>Nust Js</p>
                                    </li>
                                    <li>
                                        <span class="expertise-logo">
                                            <i class="fa-brands fa-angular"></i>
                                        </span>
                                        <p>Angular</p>
                                    </li>
                                    <li>
                                        <span class="expertise-logo">
                                            <i class="fa-brands fa-php"></i>
                                        </span>
                                        <p>PHP</p>
                                    </li>
                                    <li>
                                        <span class="expertise-logo">
                                            <i class="fa-brands fa-laravel"></i>
                                        </span>
                                        <p>Laravel</p>
                                    </li>
                                    <li>
                                        <span class="expertise-logo">
                                            <i class="fa-brands fa-wordpress"></i>
                                        </span>
                                        <p>WordPress</p>
                                    </li>
                                    <li>
                                        <span class="expertise-logo">
                                            <i class="fa-brands fa-hive"></i>
                                        </span>
                                        <p>Asp.net</p>
                                    </li>
                                    <li>
                                        <span class="expertise-logo">
                                            <i class="fa-brands fa-hive"></i>
                                        </span>
                                        <p>Vb.net</p>
                                    </li>
                                    <li>
                                        <span class="expertise-logo">
                                            <i class="fa-brands fa-hive"></i>
                                        </span>
                                        <p>C#</p>
                                    </li>
                                    <li>
                                        <span class="expertise-logo">
                                            <i class="fa-brands fa-bootstrap"></i>
                                        </span>
                                        <p>Bootstrap</p>
                                    </li>
                                    <li>
                                        <span class="expertise-logo">
                                            <i class="fa-brands fa-codepen"></i>
                                        </span>
                                        <p>Taiwin</p>
                                    </li>
                                    <li>
                                        <span class="expertise-logo">
                                            <i class="fa-solid fa-cloud"></i>
                                        </span>
                                        <p>AWS Cloude</p>
                                    </li>
                                    <li>
                                        <span class="expertise-logo">
                                            <i class="fa-brands fa-java"></i>
                                        </span>
                                        <p>Java</p>
                                    </li>
                                    <li>
                                        <span class="expertise-logo">
                                            <i class="fa-brands fa-github"></i>
                                        </span>
                                        <p>Git</p>
                                    </li>
                                    <li>
                                        <span class="expertise-logo">
                                            <i class="fa-brands fa-linux"></i>
                                        </span>
                                        <p>Linux</p>
                                    </li>
                                    <li>
                                        <span class="expertise-logo">
                                            <i class="fa-brands fa-linux"></i>
                                        </span>
                                        <p>FTP</p>
                                    </li>
                                    <li>
                                        <span class="expertise-logo">
                                            <i class="fa-brands fa-ubuntu"></i>
                                        </span>
                                        <p>Ubuntu</p>
                                    </li>
                                    <li>
                                        <span class="expertise-logo">
                                            <i class="fa-brands fa-node-js"></i>
                                        </span>
                                        <p>Node js</p>
                                    </li>
                                    <li>
                                        <span class="expertise-logo">
                                            <i class="fa-solid fa-database"></i>
                                        </span>
                                        <p>Mysql</p>
                                    </li>
                                    <li>
                                        <span class="expertise-logo">
                                            <i class="fa-solid fa-database"></i>
                                        </span>
                                        <p>Sql wordbench</p>
                                    </li>
                                    <li>
                                        <span class="expertise-logo">
                                            <i class="fa-solid fa-database"></i>
                                        </span>
                                        <p>Sql server</p>
                                    </li>
                                    <li>
                                        <span class="expertise-logo">
                                            <i class="fa-solid fa-database"></i>
                                        </span>
                                        <p>Mongo DB</p>
                                    </li>
                                    <li>
                                        <span class="expertise-logo">
                                            <i class="fa-solid fa-chart-simple"></i>
                                        </span>
                                        <p>Chart</p>
                                    </li>
                                    <li>
                                        <span class="expertise-logo">
                                            <i class="fa-regular fa-file-word"></i>
                                        </span>
                                        <p>Word</p>
                                    </li>
                                    <li>
                                        <span class="expertise-logo">
                                            <i class="fa-regular fa-file-excel"></i>
                                        </span>
                                        <p>Excel</p>
                                    </li>
                                    <li>
                                        <span class="expertise-logo">
                                            <i class="fa-regular fa-file-excel"></i>
                                        </span>
                                        <p>Photoshop</p>
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
                                <th class="trigger"><p>WebSite Bán hàng</p><span>plus</span></th>
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
                                <td><p>$20</p></td>
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
                                    <img src="{{asset('assets/images/banner.jpg')}}" alt="">
                                </div>
                            </div>
                            <div class="page-product-item">
                                <div class="page-product-image">
                                    <img src="{{asset('assets/images/banner.jpg')}}" alt="">
                                </div>
                            </div>
                            <div class="page-product-item">
                                <div class="page-product-image">
                                    <img src="{{asset('assets/images/banner.jpg')}}" alt="">
                                </div>
                            </div>
                            <div class="page-product-item">
                                <div class="page-product-image">
                                    <img src="{{asset('assets/images/banner.jpg')}}" alt="">
                                </div>
                            </div>
                            <div class="page-product-item">
                                <div class="page-product-image">
                                    <img src="{{asset('assets/images/banner.jpg')}}" alt="">
                                </div>
                            </div>
                            <div class="page-product-item">
                                <div class="page-product-image">
                                    <img src="{{asset('assets/images/banner.jpg')}}" alt="">
                                </div>
                            </div>
                            <div class="page-product-item">
                                <div class="page-product-image">
                                    <img src="{{asset('assets/images/banner.jpg')}}" alt="">
                                </div>
                            </div>
                            <div class="page-product-item">
                                <div class="page-product-image">
                                    <img src="{{asset('assets/images/banner.jpg')}}" alt="">
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
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31370.626025749472!2d106.66400590893154!3d10.631586977374146!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x317530bed1f060a3%3A0x70f4e114ba50e13e!2zTG9uZyBI4bqtdSwgVGjDoG5oIHBo4buRIEjhu5MgQ2jDrSBNaW5oLCBMb25nIEFuLCBWaeG7h3QgTmFt!5e0!3m2!1svi!2s!4v1730427208407!5m2!1svi!2s" width="100%" height="330" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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
                        <div class="form-contact-body">

                        </div>
                        <div class="form-contact-footer">

                        </div>
                    </div>
                </div>
                <div class="page-right-item" id="item4">
                    <div class="page-product">
                        <div class="page-product-list">
                            <div class="page-product-item">
                                <div class="page-product-image">
                                    <img src="{{asset('assets/images/bannersales2.jpg')}}" alt="">
                                </div>
                            </div>
                            <div class="page-product-item">
                                <div class="page-product-image">
                                    <img src="{{asset('assets/images/banner.jpg')}}" alt="">
                                </div>
                            </div>
                            <div class="page-product-item">
                                <div class="page-product-image">
                                    <img src="{{asset('assets/images/banner.jpg')}}" alt="">
                                </div>
                            </div>
                            <div class="page-product-item">
                                <div class="page-product-image">
                                    <img src="{{asset('assets/images/banner.jpg')}}" alt="">
                                </div>
                            </div>
                            <div class="page-product-item">
                                <div class="page-product-image">
                                    <img src="{{asset('assets/images/banner.jpg')}}" alt="">
                                </div>
                            </div>
                            <div class="page-product-item">
                                <div class="page-product-image">
                                    <img src="{{asset('assets/images/banner.jpg')}}" alt="">
                                </div>
                            </div>
                            <div class="page-product-item">
                                <div class="page-product-image">
                                    <img src="{{asset('assets/images/banner.jpg')}}" alt="">
                                </div>
                            </div>
                            <div class="page-product-item">
                                <div class="page-product-image">
                                    <img src="{{asset('assets/images/banner.jpg')}}" alt="">
                                </div>
                            </div>
                            <div class="page-product-item">
                                <div class="page-product-image">
                                    <img src="{{asset('assets/images/banner.jpg')}}" alt="">
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
                                    <p>Các khóa học giúp người dùng học tập và áp dụng kiến thức vào công việc một cách thuận tiện và hiệu quả. Các khóa học này được thiết kế nhằm mang lại trải nghiệm học tập dễ hiểu, thực tiễn, và phù hợp với nhu cầu công việc, giúp người học nhanh chóng nâng cao kỹ năng và đạt được kết quả mong muốn.</p>
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
                                    <p>Chúng tôi sẽ nghiên cứu nhu cầu của người dùng để phát triển các thành phần có sẵn, cung cấp giải pháp giúp sản phẩm dễ sử dụng và tối ưu hóa trải nghiệm người dùng. Những component này được thiết kế nhằm đáp ứng các yêu cầu thực tế, giúp người dùng thao tác nhanh chóng, thuận tiện và mang lại hiệu quả cao trong quá trình sử dụng.</p>
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
                                    <p>Trong công việc, một dự án thường được chia thành nhiều giai đoạn để dễ dàng quản lý và giải quyết từng vấn đề, giúp hoàn thành công việc trong khoảng thời gian nhất định. Việc phân chia này giúp đội ngũ tập trung vào từng mục tiêu cụ thể, đảm bảo tiến độ và chất lượng của dự án theo từng giai đoạn. </p>
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
                                    <p>Chúng tôi thiết kế các khóa học tiếng Anh và tiếng Nhật nhằm giúp bạn nâng cao kiến thức và rèn luyện kỹ năng giao tiếp trong nhiều tình huống khác nhau. Từ cơ bản đến nâng cao.Khóa học bao gồm các bài học cô đọng và bài kiểm tra để đánh giá chất lượng, giúp bạn học hiệu quả và tiến bộ nhanh chóng.</p>
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
                                    <p>Chúng tôi phát triển hệ thống với mục đích quản lý thông tin quan trọng và sắp xếp công việc theo một lịch trình nhất định. Công cụ này hỗ trợ người dùng tổ chức công việc một cách khoa học, giúp theo dõi tiến độ, đảm bảo hoàn thành đúng thời hạn. Nhờ vào khả năng quản lý linh hoạt và hiệu quả, hệ thống này góp phần tối ưu hóa quy trình làm việc.</p>
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
                <div class="page-right-item activeItem" id="item1">
                    <div class="banner-row">
                        <div class="banner-part-left">
                           
                        </div>
                        <div class="banner-part-right">
                        
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
    <script src="{{ asset('js/layout.js') }}"></script>
    <div class="popup-modal" id="imagePopup" style="display: none;">
        <span class="close-popup">&times;</span>
        <img class="popup-content" id="popupImage" src="" alt="Popup Image">
    </div>
    <div class="modal" id="CreateLogin">
        <div class="ModelCreateLogin">
            <form id="contentForm" method="POST" action="{{ route('login') }}">
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
        <form id="contentForm" action="{{ route('register') }}" method="POST" onsubmit="return validateForm()">
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