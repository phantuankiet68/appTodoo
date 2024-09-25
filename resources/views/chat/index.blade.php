@extends('app')

@section('title', 'Home Page')

@section('content')
<div class="todo">
    <div class="chat-container">
        <div class="email-container-left">
            <h4>All Chats</h4>
            <div class="form-search-chat">
                <form action="">
                    <div class="form-input-search">
                        <input type="text">
                    </div>
                    <button type="submit">search</button>
                </form>
            </div>
            <ul>
                <li><a href="#" onclick="showLesson('lesson1')">Phan Tuấn Kiệt</a></li>
                <li><a href="#" onclick="showLesson('lesson2')">Đoàn Thi thu Trang</a></li>
                <li><a href="#" onclick="showLesson('lesson3')">VJP-Connect</a></li>
            </ul>
        </div>
        <div class="chat-container-right">
            <div class="chatContent">
                <div class="chatTopContent">
                    <div class="chatTopContentMain">
                        <div class="chatContentUserImages">
                            <img src="./assets/images/user.jpg" alt="" srcset="">
                        </div>
                        <div class="chatContentUser">
                            <h3>Phan Tuấn Kiệt</h3>
                            <div class="action-Chat">
                                <p class="pround"></p>
                                <p>Đang hoạt động</p>
                            </div>
                        </div>
                    </div>
                    <div class="chatTopContentFooter">
                        <div class="searchInfoChat">
                            <div class="chat-form-input">
                                <input type="text" class="chat-input-search">
                            </div>
                            <button class="buttonSearch"><i class="fa-solid fa-magnifying-glass"></i></button>
                        </div>
                    </div>
                </div>
                <div class="chatBodyContent">
                        
                </div>
                <div class="chatFooterContent">
                    <div class="chat-form-input">
                        <input type="text" class="form-chat-input">
                    </div>
                    <button class="buttonSearch"><i class="fa-solid fa-paper-plane"></i></button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection