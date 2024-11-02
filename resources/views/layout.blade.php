<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UpSkillHub.vn </title>
    <link rel="stylesheet" href="{{ asset('css/layout.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
                    <a href=""><i class="fa-regular fa-user"></i> Đăng nhập | Đăng ký</a>
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
                        <li><a href="#" onclick="setActiveItem(5);" class="item"><i class="fa-solid fa-object-group"></i> Design</a></li>
                        <li><a href="#" onclick="setActiveItem(6);" class="item"><i class="fa-solid fa-file-contract"></i> Contact Us</a></li>
                        <li><a href="" onclick="showDivMenu()" class="item"><i class="fa-solid fa-magnifying-glass"></i> Search</a></li>
                        <li><a href="" onclick="showDivMenu()"class="get-start">Get start</a></li>
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
                    <div class="patern-layer-one" style="background-image: url(images/main-slider/pattern-1.png)"></div>
                    <div class="slidershow middle">
                        <div class="slides">
                            <input type="radio" name="r" id="r1" checked>
                            <input type="radio" name="r" id="r2">
                            <input type="radio" name="r" id="r3">
                            <input type="radio" name="r" id="r4">
                            <input type="radio" name="r" id="r5">
                            <div class="slide s1">
                            <img src="{{asset('assets/images/user1.jpg')}}" alt="">
                            </div>
                            <div class="slide">
                            <img src="{{asset('assets/images/user2.jpg')}}" alt="">
                            </div>
                            <div class="slide">
                            <img src="{{asset('assets/images/user3.jpg')}}" alt="">
                            </div>
                            <div class="slide">
                            <img src="{{asset('assets/images/user4.jpg')}}" alt="">
                            </div>
                            <div class="slide">
                            <img src="{{asset('assets/images/user5.jpg')}}" alt="">
                            </div>
                        </div>

                        <div class="navigation">
                            <label for="r1" class="bar"></label>
                            <label for="r2" class="bar"></label>
                            <label for="r3" class="bar"></label>
                            <label for="r4" class="bar"></label>
                            <label for="r5" class="bar"></label>
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
                    <div class="row-services">
                        <div class="service">
                            <div class="services">
                                <div class="service-logo">
                                    <i class="fa-solid fa-pen-ruler"></i>
                                </div>
                                <h4>Website Developer</h4>
                                <div class="service-content">
                                    <p>Chúng tôi có hơn 4 năm kinh nghiệm làm việc về HTML, CSS, JAVASCRIPT và đã có kinh nghiệm làm việc thực tế trên 2 năm. Tạo trang theo yêu cầu từ người dùng hoặc figma/XD</p>
                                </div>
                                <div class="service-content">
                                    <h3>Design từ 50k - 200k</h3>
                                </div>
                                <div class="service-text">
                                    <p><i class="fa-regular fa-square-check"></i> Sử dụng HTML/CSS/JS</p>
                                    <p><i class="fa-regular fa-square-check"></i> 6 tháng hỗ trợ và cập nhật</p>
                                    <p><i class="fa-regular fa-square-check"></i> Sử dụng cá nhân hoặc thương mại</p>
                                    <p><i class="fa-regular fa-square-check"></i> Tạo ứng dụng không giới hạn</p>
                                    <p><i class="fa-regular fa-square-check"></i> Có thể sử dung nhiều nhà phát triển css</p>
                                    <p><i class="fa-regular fa-square-check"></i> Sử dụng trong ứng dụng</p>
                                    <p><i class="fa-regular fa-square-check"></i> Response</p>
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
                                <h4>App Developer</h4>
                                <div class="service-content">
                                    <p>Chúng tôi có hơn 2 năm kinh nghiệm thực tế làm việc với JAVA, REACT NATIVE chúng tôi có thể tham gia ngay vào dự án chi phí sẽ tùy thuộc vào yêu cầu của khách hàng.</p>
                                </div>
                                <div class="service-content">
                                    <h3>Đang cập nhật</h3>
                                </div>
                                <div class="service-text">
                                    <p><i class="fa-regular fa-square-check"></i> Sử dụng HTML/CSS/JS/XML</p>
                                    <p><i class="fa-regular fa-square-check"></i> 6 tháng hỗ trợ và cập nhật</p>
                                    <p><i class="fa-regular fa-square-check"></i> Sử dụng cá nhân hoặc thương mại</p>
                                    <p><i class="fa-regular fa-square-check"></i> Tạo ứng dụng không giới hạn</p>
                                    <p><i class="fa-regular fa-square-check"></i> Có thể sử dung nhiều nhà phát triển css</p>
                                    <p><i class="fa-regular fa-square-check"></i> Sử dụng trong ứng dụng</p>
                                    <p><i class="fa-regular fa-square-check"></i> Response</p>
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
                                <h4>Remote</h4>
                                <div class="service-content">
                                    <p>Chúng tôi có hơn 2 năm kinh nghiệm thực tế làm việc cả về front-end lẫn back-end chúng tôi có thể tham gia ngay vào dự án chi phí sẽ tùy thuộc vào yêu cầu của khách hàng. <a href="#item2">Skill</a></p>
                                </div>
                                <div class="service-content">
                                    <h3>Đang cập nhật</h3>
                                </div>
                                <div class="service-text">
                                    <p><i class="fa-regular fa-square-check"></i> Thời gian thực hiện 6h30 đến 10h mỗi tối</p>
                                    <p><i class="fa-regular fa-square-check"></i> 6 tháng hỗ trợ và cập nhật</p>
                                    <p><i class="fa-regular fa-square-check"></i> Sử dụng cá nhân hoặc thương mại</p>
                                    <p><i class="fa-regular fa-square-check"></i> Có thể sử dung nhiều nhà phát triển css</p>
                                    <p><i class="fa-regular fa-square-check"></i> Sử dụng trong ứng dụng</p>
                                    <p><i class="fa-regular fa-square-check"></i> Response</p>
                                </div>
                            </div>
                            <div class="shadowOne"></div>
                            <div class="shadowTwo"></div>
                        </div>
                    </div>
                </div>
                <div class="page-left-item" id="item4">
                    4
                </div>
                <div class="page-left-item" id="item5">
                    5
                </div>
                <div class="page-left-item" id="item6">
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
                <div class="page-right-item" id="item6">
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
                <div class="page-right-item" id="item5">
                    5
                </div>
                <div class="page-right-item" id="item4">
                    4
                </div>
                <div class="page-right-item" id="item3">
                    <div class="row">
                        <div class="column">
                            <div class="card">
                            <div class="icon-wrapper">
                                <i class="fa-solid fa-passport"></i>
                            </div>
                            <h3>Web developer</h3>
                            <p>
                                Chúng tôi sẽ tạo ra các khóa học giúp người dùng dễ dàng học tập và ứng dụng kiến thức vào công việc một cách thuận tiện và hiệu quả hơn.
                            </p>
                            </div>
                        </div>
                        <div class="column">
                            <div class="card">
                            <div class="icon-wrapper">
                                <i class="fa-solid fa-object-ungroup"></i>
                            </div>
                            <h3>UX/UI Design</h3>
                            <p>
                                Chúng tôi sẽ nghiên cứu nhu cầu của người dùng để phát triển các component có sẵn, mang đến giải pháp giúp sản phẩm dễ sử dụng và tối ưu hóa trải nghiệm người dùng.
                            </p>
                            </div>
                        </div>
                        <div class="column">
                            <div class="card">
                            <div class="icon-wrapper">
                                <i class="fas fa-wrench"></i>
                            </div>
                            <h3>Content creation</h3>
                            <p>
                                Chúng tôi lập ra kế hoạch, sản xuất và chia sẻ nội dung một cách cụ thể. Nhầm mục đích là cung cấp giá trị, thông tin đến truyền đạt kiến thức hoặc giải quyết vấn đề.
                            </p>
                            </div>
                        </div>
                        <div class="column">
                            <div class="card">
                            <div class="icon-wrapper">
                                <i class="fa-solid fa-list-check"></i>
                            </div>
                            <h3>Task Issue</h3>
                            <p>
                                Trong công việc, Thường một dự án sẽ được phân ra thành nhiều giai đoạn để tiện cho việc giải quyết vấn đề để hoàn thành công việc trong một khoảng thời gian nhất định.
                            </p>
                            </div>
                        </div>
                            <div class="column">
                                <div class="card">
                                <div class="icon-wrapper">
                                    <i class="fa-solid fa-money-bill"></i>
                                </div>
                                <h3>Financial</h3>
                                <p>
                                    Chúng tôi đã tạo ra quá trình lập kế hoạch, theo dõi và kiểm soát việc sử dụng tài chính cá nhân nhằm đảm bảo sự ổn định về tài chính từ đó cải thiện chất lượng cuộc sống.
                                </p>
                                </div>
                            </div>
                            <div class="column">
                                <div class="card">
                                <div class="icon-wrapper">
                                    <i class="fa-solid fa-table-list"></i>
                                </div>
                                <h3>Daily Task</h3>
                                <p>
                                    Chúng tôi tạo hệ thống nhằm mục đích liệt kê các nhiệm vụ cần làm trong ngày và đánh giá công việc một cách tỉ mỉ và tiện lợi, giúp người dùng dễ dàng quản lý.
                                </p>
                                </div>
                            </div>
                            <div class="column">
                                <div class="card">
                                <div class="icon-wrapper">
                                    <i class="fa-solid fa-book-open-reader"></i>
                                </div>
                                <h3>Japanese</h3>
                                <p>
                                    Chúng tôi tạo ra khóa học nhầm mục đích giúp bạn có thể học thêm được kiến thức và tóm tắc trong nhiều cách ứng sử khác nhau và trong đó có cả bài test để kiểm tra chất lượng.
                                </p>
                                </div>
                            </div>
                            <div class="column">
                                <div class="card">
                                <div class="icon-wrapper">
                                    <i class="fa-solid fa-book-open-reader"></i>
                                </div>
                                <h3>English</h3>
                                <p>
                                    Chúng tôi tạo ra khóa học nhầm mục đích giúp bạn có thể học thêm được kiến thức và tóm tắc trong nhiều cách ứng sử khác nhau và trong đó có cả bài test để kiểm tra chất lượng.
                                </p>
                                </div>
                            </div>
                            <div class="column">
                                <div class="card">
                                    <div class="icon-wrapper">
                                        <i class="fa-regular fa-calendar"></i>
                                    </div>
                                    <h3>Calendar</h3>
                                    <p>
                                        Chúng tôi tạo ra nhầm mục đích quản lý các thông tin cần thiết và sắp xếp công việc dựa trên việc sắp xếp với thời gian nhất định.
                                    </p>
                                </div>
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
                    <div class="row">
                        <div class="column">
                            <div class="card">
                            <div class="icon-wrapper">
                                <i class="fa-solid fa-passport"></i>
                            </div>
                            <h3>Web developer</h3>
                            <p>
                                Chúng tôi sẽ tạo ra các khóa học giúp người dùng dễ dàng học tập và ứng dụng kiến thức vào công việc một cách thuận tiện và hiệu quả hơn.
                            </p>
                            </div>
                        </div>
                        <div class="column">
                            <div class="card">
                            <div class="icon-wrapper">
                                <i class="fa-solid fa-object-ungroup"></i>
                            </div>
                            <h3>UX/UI Design</h3>
                            <p>
                                Chúng tôi sẽ nghiên cứu nhu cầu của người dùng để phát triển các component có sẵn, mang đến giải pháp giúp sản phẩm dễ sử dụng và tối ưu hóa trải nghiệm người dùng.
                            </p>
                            </div>
                        </div>
                        <div class="column">
                            <div class="card">
                            <div class="icon-wrapper">
                                <i class="fas fa-wrench"></i>
                            </div>
                            <h3>Content creation</h3>
                            <p>
                                Chúng tôi lập ra kế hoạch, sản xuất và chia sẻ nội dung một cách cụ thể. Nhầm mục đích là cung cấp giá trị, thông tin đến truyền đạt kiến thức hoặc giải quyết vấn đề.
                            </p>
                            </div>
                        </div>
                        <div class="column">
                            <div class="card">
                            <div class="icon-wrapper">
                                <i class="fa-solid fa-list-check"></i>
                            </div>
                            <h3>Task Issue</h3>
                            <p>
                                Trong công việc, Thường một dự án sẽ được phân ra thành nhiều giai đoạn để tiện cho việc giải quyết vấn đề để hoàn thành công việc trong một khoảng thời gian nhất định.
                            </p>
                            </div>
                        </div>
                        <div class="column">
                            <div class="card">
                            <div class="icon-wrapper">
                                <i class="fa-solid fa-money-bill"></i>
                            </div>
                            <h3>Financial</h3>
                            <p>
                                Chúng tôi đã tạo ra quá trình lập kế hoạch, theo dõi và kiểm soát việc sử dụng tài chính cá nhân nhằm đảm bảo sự ổn định về tài chính từ đó cải thiện chất lượng cuộc sống.
                            </p>
                            </div>
                        </div>
                        <div class="column">
                            <div class="card">
                            <div class="icon-wrapper">
                                <i class="fa-solid fa-table-list"></i>
                            </div>
                            <h3>Daily Task</h3>
                            <p>
                                Chúng tôi tạo hệ thống nhằm mục đích liệt kê các nhiệm vụ cần làm trong ngày và đánh giá công việc một cách tỉ mỉ và tiện lợi, giúp người dùng dễ dàng quản lý.
                            </p>
                            </div>
                        </div>
                        <div class="column">
                            <div class="card">
                            <div class="icon-wrapper">
                                <i class="fa-solid fa-book-open-reader"></i>
                            </div>
                            <h3>Japanese</h3>
                            <p>
                                Chúng tôi tạo ra khóa học nhầm mục đích giúp bạn có thể học thêm được kiến thức và tóm tắc trong nhiều cách ứng sử khác nhau và trong đó có cả bài test để kiểm tra chất lượng.
                            </p>
                            </div>
                        </div>
                        <div class="column">
                            <div class="card">
                            <div class="icon-wrapper">
                                <i class="fa-solid fa-book-open-reader"></i>
                            </div>
                            <h3>English</h3>
                            <p>
                                Chúng tôi tạo ra khóa học nhầm mục đích giúp bạn có thể học thêm được kiến thức và tóm tắc trong nhiều cách ứng sử khác nhau và trong đó có cả bài test để kiểm tra chất lượng.
                            </p>
                            </div>
                        </div>
                        <div class="column">
                            <div class="card">
                            <div class="icon-wrapper">
                                <i class="fa-regular fa-calendar"></i>
                            </div>
                            <h3>Calendar</h3>
                            <p>
                                Chúng tôi tạo ra nhầm mục đích quản lý các thông tin cần thiết và sắp xếp công việc dựa trên việc sắp xếp với thời gian nhất định.
                            </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
    <script src="{{ asset('js/layout.js') }}"></script>
</body>
</html>