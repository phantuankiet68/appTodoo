@extends('app')

@section('title', 'Home Page')

@section('content')
<div class="todo">
    <div class="projecTodoBody">
        <div class="CVBody">
            <div class="cv-container-left">
                <div class="CVTab">
                    <div class="tab">
                        <button class="tablinks active" onclick="openTab(event, 'Tab1')">Cv mẫu</button>
                        <button class="tablinks" onclick="openTab(event, 'Tab2')">Cv của tôi</button>
                    </div>
                    <div id="Tab1" class="tabcontent" style="display: flex; gap: 10px; flex-wrap: wrap;">
                        <div class="listTab">
                            <img src="./assets/images/cv_1.jpg" alt="">
                            <div class="boxtextCV Vietnamese">
                                <i class="fa-solid fa-plus"></i> Tạo mới
                            </div>
                        </div>
                        <div class="listTab">
                            <img src="./assets/images/cv_1.jpg" alt="">
                            <div class="boxtextCV Vietnamese">
                                <i class="fa-solid fa-plus"></i> Tạo mới
                            </div>
                        </div>
                        <div class="listTab">
                            <img src="./assets/images/cv_1.jpg" alt="">
                            <div class="boxtextCV Vietnamese">
                                <i class="fa-solid fa-plus"></i> Tạo mới
                            </div>
                        </div>
                        <div class="listTab">
                            <img src="./assets/images/cv_1.jpg" alt="">
                            <div class="boxtextCV Vietnamese">
                                <i class="fa-solid fa-plus"></i> Tạo mới
                            </div>
                        </div>
                        <div class="listTab">
                            <img src="./assets/images/cv_1.jpg" alt="">
                            <div class="boxtextCV Vietnamese">
                                <i class="fa-solid fa-plus"></i> Tạo mới
                            </div>
                        </div>
                        <div class="listTab">
                            <img src="./assets/images/cv_1.jpg" alt="">
                            <div class="boxtextCV Vietnamese">
                                <i class="fa-solid fa-plus"></i> Tạo mới
                            </div>
                        </div>
                        <div class="listTab">
                            <img src="./assets/images/cv_1.jpg" alt="">
                            <div class="boxtextCV Vietnamese">
                                <i class="fa-solid fa-plus"></i> Tạo mới
                            </div>
                        </div>
                        <div class="listTab">
                            <img src="./assets/images/cv_1.jpg" alt="">
                            <div class="boxtextCV Vietnamese">
                                <i class="fa-solid fa-plus"></i> Tạo mới
                            </div>
                        </div>
                        <div class="listTab">
                            <img src="./assets/images/cv_1.jpg" alt="">
                            <div class="boxtextCV Vietnamese">
                                <i class="fa-solid fa-plus"></i> Tạo mới
                            </div>
                        </div>
                        <div class="listTab">
                            <img src="./assets/images/cv_1.jpg" alt="">
                            <div class="boxtextCV Vietnamese">
                                <i class="fa-solid fa-plus"></i> Tạo mới
                            </div>
                        </div>
                    </div>
                    <div id="Tab2" class="tabcontent" style="display: none; gap: 10px; flex-wrap: wrap;">
                    <div class="listTab">
                            <img src="./assets/images/cv_1.jpg" alt="">
                            <div class="boxtextCV Vietnamese">
                                <i class="fa-solid fa-plus"></i> Tạo mới
                            </div>
                        </div>
                        <div class="listTab">
                            <img src="./assets/images/cv_1.jpg" alt="">
                            <div class="boxtextCV Vietnamese">
                                <i class="fa-solid fa-plus"></i> Tạo mới
                            </div>
                        </div>
                        <div class="listTab">
                            <img src="./assets/images/cv_1.jpg" alt="">
                            <div class="boxtextCV Vietnamese">
                                <i class="fa-solid fa-plus"></i> Tạo mới
                            </div>
                        </div>
                        <div class="listTab">
                            <img src="./assets/images/cv_1.jpg" alt="">
                            <div class="boxtextCV Vietnamese">
                                <i class="fa-solid fa-plus"></i> Tạo mới
                            </div>
                        </div>
                        <div class="listTab">
                            <img src="./assets/images/cv_1.jpg" alt="">
                            <div class="boxtextCV Vietnamese">
                                <i class="fa-solid fa-plus"></i> Tạo mới
                            </div>
                        </div>
                        <div class="listTab">
                            <img src="./assets/images/cv_1.jpg" alt="">
                            <div class="boxtextCV Vietnamese">
                                <i class="fa-solid fa-plus"></i> Tạo mới
                            </div>
                        </div>
                        <div class="listTab">
                            <img src="./assets/images/cv_1.jpg" alt="">
                            <div class="boxtextCV Vietnamese">
                                <i class="fa-solid fa-plus"></i> Tạo mới
                            </div>
                        </div>
                        <div class="listTab">
                            <img src="./assets/images/cv_1.jpg" alt="">
                            <div class="boxtextCV Vietnamese">
                                <i class="fa-solid fa-plus"></i> Tạo mới
                            </div>
                        </div>
                        <div class="listTab">
                            <img src="./assets/images/cv_1.jpg" alt="">
                            <div class="boxtextCV Vietnamese">
                                <i class="fa-solid fa-plus"></i> Tạo mới
                            </div>
                        </div>
                        <div class="listTab">
                            <img src="./assets/images/cv_1.jpg" alt="">
                            <div class="boxtextCV Vietnamese">
                                <i class="fa-solid fa-plus"></i> Tạo mới
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
                                <i class="fa-solid fa-plus"></i> Tạo mới
                            </div>
                        </div>
                        <div class="listTab">
                            <img src="./assets/images/cv_1.jpg" alt="">
                            <div class="boxtextCV japanese">
                                <i class="fa-solid fa-plus"></i> Tạo mới
                            </div>
                        </div>
                        <div class="listTab">
                            <img src="./assets/images/cv_1.jpg" alt="">
                            <div class="boxtextCV japanese">
                                <i class="fa-solid fa-plus"></i> Tạo mới
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection