@extends('app')

@section('title', 'Home Page')

@section('content')
<div class="todo">
    <div class="projecTodoBody">
        <div class="CVBody">
            <div class="cv-container-left">
                <div class="CVTab">
                    <div class="tab">
                        <button class="tablinks active" onclick="openTab(event, 'Tab1')">Cv của tôi</button>
                        <button class="tablinks" onclick="openTab(event, 'Tab2')">Cv mẫu</button>
                    </div>
                    <div id="Tab1" class="tabcontent" style="display: block;">
                        <div class="listTab">
                            <img src="./assets/images/cv_1.jpg" alt="">
                            <div class="boxtextCV Vietnamese">
                                <i class="fa-solid fa-plus"></i> Tạo CV tiếng việt
                            </div>
                        </div>
                        <div class="listTab">
                            <img src="./assets/images/cv_1.jpg" alt="">
                            <div class="boxtextCV english">
                                <i class="fa-solid fa-plus"></i> Tạo CV tiếng anh
                            </div>
                        </div>
                        <div class="listTab">
                            <img src="./assets/images/cv_1.jpg" alt="">
                            <div class="boxtextCV japanese">
                                <i class="fa-solid fa-plus"></i> Tạo CV tiếng việt
                            </div>
                        </div>
                    </div>
                    <div id="Tab2" class="tabcontent">
                        <div class="listTab">
                            <img src="./assets/images/cv_1.jpg" alt="">
                            <div class="boxtextCV Vietnamese">
                                <i class="fa-solid fa-plus"></i> Tạo CV tiếng việt
                            </div>
                        </div>
                        <div class="listTab">
                            <img src="./assets/images/cv_1.jpg" alt="">
                            <div class="boxtextCV english">
                                <i class="fa-solid fa-plus"></i> Tạo CV tiếng anh
                            </div>
                        </div>
                        <div class="listTab">
                            <img src="./assets/images/cv_1.jpg" alt="">
                            <div class="boxtextCV japanese">
                                <i class="fa-solid fa-plus"></i> Tạo CV tiếng việt
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="cv-container-right">
                <div class="boxDownPDF">
                    <button onclick="downloadPDF()">Download as PDF</button>
                </div>
                <div id="cv" class="CVInfocontainer">
                    <div class="avatar">
                        <img src="https://i.pinimg.com/564x/eb/57/6f/eb576ff023487bcb1fa3ad61ee7b23ee.jpg" alt="">
                    </div>
                    <div class="name">
                            <h1>HO HOANG</h1>
                            <div class="specialize">Frond-End Developer</div>
                            <ul class="contact">
                                <li>
                                    <span>P</span> +84123456789
                                </li>
                                <li>
                                    <span>E</span> hohoang.dev@gmail.com
                                </li>
                                <li>
                                    <span>W</span> lundevweb.com
                                </li>
                            </ul>
                    </div>
                    <div class="info">
                            <ul>
                                <li>From <b>HCMC</b> - VietNam</li>
                                <li>01/01/0101</li>
                                <li>AAAA University</li>
                            </ul>
                    </div>
                    <div class="intro">
                        <h2>INTRODUCE MYSELT</h2>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit eligendi omnis quasi dolores modi eius aliquam ipsum soluta, dolore tenetur excepturi praesentium porro alias itaque enim labore qui necessitatibus molestias hic cum deserunt ab! Illum sed eveniet distinctio, alias sunt repudiandae labore a dolorum tenetur? Harum deleniti mollitia odio neque.
                    </div>
                    <div class="experience">
                        <h2>EXPERIENCE</h2>
                
                        <div class="item">
                            <h4>Frond-end Developer</h4>
                            <div class="time">
                            <span>2020 - 2022</span>
                            <span>ABC D company</span>
                            </div>
                            <div class="des">
                                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Architecto accusantium officia nobis quas excepturi consectetur quidem quia est neque doloremque.
                            </div>
                        </div>
                
                            <div class="item">
                                <h4>Student</h4>
                                <div class="time">
                                <span>2015 - 2019</span>
                                <span>ACDC University</span>
                                </div>
                                <div class="des">
                                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Architecto accusantium officia nobis quas excepturi consectetur quidem quia est neque doloremque.
                                </div>
                            </div>
                            <h2 class="skills">
                                SKILLS
                            </h2>
                            <ul>
                                <li>HTML</li>
                                <li>CSS</li>
                                <li>Bootstrap</li>
                                <li>Javascript</li>
                                <li>PHP</li>
                                <li>MySql</li>
                                <li>Git</li>
                                <li>Laravel</li>
                            </ul>
                
                    </div>
                    <div class="project">
                        <h2>PROJECTS</h2>
                        <div class="item">
                            <h4>Website shopping</h4>
                            <div class="time">
                                2020
                            </div>
                            <div class="web">
                                www.lundevweb.com
                            </div>
                            <div class="location">
                                Frond-end Developer
                            </div>
                            <div class="des">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto consequatur amet sed, est eum facilis repellendus 
                                atque perspiciatis iste porro nobis autem explicabo expedita fugiat nostrum. Eveniet eum autem culpa!
                                <ul>
                                    <li>Lorem ipsum dolordolores.</li>
                                    <li>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consequuntur, dolores.</li>
                                    <li>Lorem ipsum dolor sit amet consectetur dolores.</li>
                                </ul>
                            </div>
                        </div>
                
                        <div class="item">
                            <h4>Website shopping</h4>
                            <div class="time">
                                2020
                            </div>
                            <div class="web">
                                www.lundevweb.com
                            </div>
                            <div class="location">
                                Frond-end Developer
                            </div>
                            <div class="des">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto consequatur amet sed, est eum facilis repellendus 
                                atque perspiciatis iste porro nobis autem explicabo expedita fugiat nostrum. Eveniet eum autem culpa!
                                <ul>
                                    <li>Lorem ipsum dolordolores.</li>
                                    <li>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consequuntur, dolores.</li>
                                    <li>Lorem ipsum dolor sit amet consectetur dolores.</li>
                                </ul>
                            </div>
                        </div>
                
                        <div class="item">
                            <h4>Website shopping</h4>
                            <div class="time">
                                2020
                            </div>
                            <div class="web">
                                www.lundevweb.com
                            </div>
                            <div class="location">
                                Frond-end Developer
                            </div>
                            <div class="des">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto consequatur amet sed, est eum facilis repellendus 
                                atque perspiciatis iste porro nobis autem explicabo expedita fugiat nostrum. Eveniet eum autem culpa!
                                <ul>
                                    <li>Lorem ipsum dolordolores.</li>
                                    <li>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consequuntur, dolores.</li>
                                    <li>Lorem ipsum dolor sit amet consectetur dolores.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    </div>
            </div>
        </div>
    </div>
</div>
@endsection