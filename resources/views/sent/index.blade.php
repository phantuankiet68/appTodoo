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
        <div class="footerHeader">
            <button id="openModalEmail" class="btn-add">write a message</button>
        </div>
    </div>
    <div class="email-container">
        <div class="email-container-left">
            <h4>All Email</h4>
            <ul>
                <li><a href="#" onclick="showLesson('lesson1')">Phan Tuấn Kiệt</a></li>
                <li><a href="#" onclick="showLesson('lesson2')">Đoàn Thi thu Trang</a></li>
                <li><a href="#" onclick="showLesson('lesson3')">VJP-Connect</a></li>
            </ul>
        </div>
        <div class="email-container-right">
            <div class="email-content lesson1">
                <h2>[LAMPART] Xác nhận thông tin ứng tuyển vị trí Thực Tập Sinh PHP</h2>
                <p><b>Recruit</b><i> < recruit@lampart-vn.com > </i></p>
                <p class="spaceWait">.........................................................................................................................................................................................................................................</p>
                <p>Chào bạn, <br/>
                    Trước hết, cám ơn bạn đã quan tâm và ứng tuyển vào vị trí Thực Tập Sinh PHP của công ty Lampart.<br/>
                    Để hỗ trợ cho quá trình review CV, nhờ bạn bổ sung CV Tiếng Anh (nếu chưa có) và cung cấp đầy đủ thông tin ở form đính kèm mail.<br/>
                    ***Lưu ý: Chúng tôi sẽ tiến hành xử lý hồ sơ ứng tuyển của bạn khi nhận được form thông tin hoàn chỉnh, vui lòng kiểm tra kỹ thông tin trước khi gửi lại.<br/>
                    Sau khi bạn xác nhận những thông tin trên, phía công ty Lampart sẽ review CV và dựa vào kết quả review để tiến hành các bước tuyển dụng tiếp theo.<br/>
                    Để hỗ trợ quá trình đánh giá được diễn ra sớm nhất, nhờ bạn hoàn tất Form đính kèm với đầy đủ thông tin và gửi lại cho chúng tôi trước 10:00 AM ngày 21/08/2024 nhé.<br/>
                    (Sau thời gian này nếu không nhận được thông tin điền form từ bạn, chúng tôi hiểu rằng bạn không còn quan tâm tới Lampart nữa và sẽ ngưng quy trình tuyển dụng đối với hồ sơ của bạn)<br/>
                    Thông tin tham khảo:<br/>
                    Quy trình tuyển dụng - Vị trí Internship<br/>
                    Vòng 1: Thực hiện test trực tiếp tại văn phòng<br/>
                    Vòng 2: Phỏng vấn trực tiếp tại văn phòng<br/>
                </p>
                <p class="spaceWait">.........................................................................................................................................................................................................................................</p>
                <p><b> 2 tệp đính kèm</b>: Gmail đã quét</p>
                <div class="dis-flex">
                    <div class="cardEmail">
                        <img src="./a-path.png" alt="File Image" class="cardEmail-img">
                        <div class="cardEmail-info">
                            <p>Image-File.jpg</p>
                            <p>1.7 MB</p>
                        </div>
                        <div class="cardEmail-actions">
                            <button onclick="addToDrive()">Add to Drive</button>
                        </div>
                    </div>
                    <div class="cardEmail">
                        <img src="./a-path.png" alt="File Image" class="cardEmail-img">
                        <div class="cardEmail-info">
                            <p>Image-File.jpg</p>
                            <p>1.7 MB</p>
                        </div>
                        <div class="cardEmail-actions">
                            <button onclick="addToDrive()">Add to Drive</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="lesson-content lesson2" style="display:none;">
                Bài 2: Giới thiệu về một ngày làm việc của bạn.
            </div>
            <div class="lesson-content lesson3" style="display:none;">
                Bài 3: Giới thiệu về sở thích của bạn
            </div>
        </div>
    </div>
</div>
@endsection