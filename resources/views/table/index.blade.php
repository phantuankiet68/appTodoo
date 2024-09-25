@extends('app')

@section('title', 'Home Page')

@section('content')
<div class="todo">
    <div class="todoHeader">
        <div class="topHeader">
            <h2>Email</h2> | <span>Home</span>
        </div>
        <div class="bodyHeader">
            <form action="">
                <div class="Users--right--btns">
                    <select name="date" id="date" class="select-dropdown doctor--filter">
                        <option>Date of Month</option>
                        <option value="free">Admin</option>
                        <option value="scheduled">Users</option>
                    </select>
                </div>
            </form>
            <form action="">
                <div class="Users--right--btns">
                    <select name="date" id="date" class="select-dropdown doctor--filter">
                        <option>Category</option>
                        <option value="free">Admin</option>
                        <option value="scheduled">Users</option>
                    </select>
                </div>
            </form>
            <form action="" class="formSearch">
                <div class="formInputSearch">
                    <input type="text" value="">
                </div>
                <button class="add-search"><i class="fa-solid fa-magnifying-glass"></i></button>
            </form>
        </div>
        <div class="headerToQuesionRight">
            <button type="button" class="create"><i class="fa-solid fa-plus"></i> Danh muc</button>
            <button type="button" class="change"><i class="fa-solid fa-cash-register"></i> Thay đổi</button>
            <button type="button" class="create"><i class="fa-solid fa-plus"></i> Tạo mới</button>
        </div>
    </div>
    <div class="component-container">
        <div class="component-container-left">
            <h4>All Chats</h4>
            <div class="form-search-chat">
                <form action="">
                    <div class="form-input-search">
                        <input type="text">
                    </div>
                    <button type="submit">search</button>
                </form>
            </div>
            <div class="componentTab">
                <a href="#">Card</a>
                <a href="#">Button</a>
                <a href="#">Banner</a>
            </div>
        </div>
        <div class="component-container-right">
            <div class="component-card">
                <div class="c_card">
                    <img src="../assets/images/path.jpg" alt="Image">
                    <div class="overlay">
                        Thông tin hiển thị
                        <button>xem</button>
                    </div>
                </div>
                <div class="c_card">
                    <img src="../assets/images/path.jpg" alt="Image">
                    <div class="overlay">
                        Thông tin hiển thị
                        <button>xem</button>
                    </div>
                </div>
                <div class="c_card">
                    <img src="../assets/images/path.jpg" alt="Image">
                    <div class="overlay">
                        Thông tin hiển thị
                        <button>xem</button>
                    </div>
                </div>
                <div class="c_card">
                    <img src="../assets/images/path.jpg" alt="Image">
                    <div class="overlay">
                        Thông tin hiển thị
                        <button>xem</button>
                    </div>
                </div>
                <div class="c_card">
                    <img src="../assets/images/path.jpg" alt="Image">
                    <div class="overlay">
                        Thông tin hiển thị
                        <button>xem</button>
                    </div>
                </div>
                <div class="c_card">
                    <img src="../assets/images/path.jpg" alt="Image">
                    <div class="overlay">
                        Thông tin hiển thị
                        <button>xem</button>
                    </div>
                </div>

                <div class="c_card">
                    <img src="../assets/images/path.jpg" alt="Image">
                    <div class="overlay">
                        Thông tin hiển thị
                        <button>xem</button>
                    </div>
                </div>
                <div class="c_card">
                    <img src="../assets/images/path.jpg" alt="Image">
                    <div class="overlay">
                        Thông tin hiển thị
                        <button>xem</button>
                    </div>
                </div>
                <div class="c_card">
                    <img src="../assets/images/path.jpg" alt="Image">
                    <div class="overlay">
                        Thông tin hiển thị
                        <button>xem</button>
                    </div>
                </div>
                <div class="c_card">
                    <img src="../assets/images/path.jpg" alt="Image">
                    <div class="overlay">
                        Thông tin hiển thị
                        <button>xem</button>
                    </div>
                </div>
                <div class="c_card">
                    <img src="../assets/images/path.jpg" alt="Image">
                    <div class="overlay">
                        Thông tin hiển thị
                        <button>xem</button>
                    </div>
                </div>
                <div class="c_card">
                    <img src="../assets/images/path.jpg" alt="Image">
                    <div class="overlay">
                        Thông tin hiển thị
                        <button id="openModalCard">xem</button>
                    </div>
                </div>
                <div class="c_card">
                    <img src="../assets/images/path.jpg" alt="Image">
                    <div class="overlay">
                        Thông tin hiển thị
                        <button id="openModalCard">xem</button>
                    </div>
                </div>
                <div class="c_card">
                    <img src="../assets/images/path.jpg" alt="Image">
                    <div class="overlay">
                        Thông tin hiển thị
                        <button id="openModalCard">xem</button>
                    </div>
                </div>
                <div class="c_card">
                    <img src="../assets/images/path.jpg" alt="Image">
                    <div class="overlay">
                        Thông tin hiển thị
                        <button>xem</button>
                    </div>
                </div>
                <div class="c_card">
                    <img src="../assets/images/path.jpg" alt="Image">
                    <div class="overlay">
                        Thông tin hiển thị
                        <button id="openModalCard">xem</button>
                    </div>
                </div>
                <div class="c_card">
                    <img src="../assets/images/path.jpg" alt="Image">
                    <div class="overlay">
                        Thông tin hiển thị
                        <button id="openModalCard">xem</button>
                    </div>
                </div>
                <div class="c_card">
                    <img src="../assets/images/path.jpg" alt="Image">
                    <div class="overlay">
                        Thông tin hiển thị
                        <button id="openModalCard">xem</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection