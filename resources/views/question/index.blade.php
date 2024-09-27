@extends('app')

@section('title', 'Home Page')

@section('content')
<div class="todo">
    <div class="questions">
        <div class="tabs">
            <button class="tablinks" onclick="openTab(event, 'q1')">Câu hỏi thông thường</button>
            <button class="tablinks" onclick="openTab(event, 'q2')">Câu hỏi phỏng vấn</button>
            <button class="tablinks" onclick="openTab(event, 'q3')">Câu hỏi ngôn ngữ</button>
        </div>

        <div id="q1" class="tabcontent" style="display:block">
            <div class="headerToQuesion">
                <div class="headerToQuesionLeft">
                    <form action="">
                        <div class="Users--right--btns">
                            <select name="date" id="date" class="select-dropdown doctor--filter">
                                <option>Fillter</option>
                                <option value="free">Done</option>
                                <option value="scheduled">Unfinished</option>
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
                    <form action="">
                        <div class="Users--right--btns">
                            <select name="date" id="date" class="select-dropdown doctor--filter">
                                <option>Assignment</option>
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
                    <button type="button" class="change"><i class="fa-solid fa-cash-register"></i> Thay đổi</button>
                    <button type="button" class="down"><i class="fa-solid fa-download"></i> DownLoad</button>
                    <button type="button" class="create"><i class="fa-solid fa-plus"></i> Tạo mới</button>
                </div>
            </div>
            <div class="body-todo">
                <div class="recent--patient">
                    <div class="tables">
                        <table>
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Câu hỏi</th>
                                    <th>Trả lời</th>
                                    <th>Ngày tạo</th>
                                    <th class="text-center">Người tạo</th>
                                    <th>Cập nhật</th>
                                    <th class="text-center">Trạng thái</th>
                                    <th class="text-center">Settings</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><p class="keyId">1</p></td>
                                    <td style="width: 20%;">Cameron Williamson ádsd đ áds d á ds sad</td>
                                    <td style="width: 30%;"><p class="text-truncate">aaaaaaaaaaaaaaaaaaaaaaaaaaaaasssssssssssssssssssssssssssss sssssssssssssssssssssssssssss</p></td>
                                    <td>30/07/2022</td>
                                    <td class="text-center">Male</td>
                                    <td>30/07/2022</td>
                                    <td class="text-center"> <input type="checkbox" name="" id=""></td>
                                    <td class="text-center"><span><i class="fa-regular fa-pen-to-square edit"></i><i class="fa-solid fa-trash delete"></i></i></span></td>
                                </tr>
                                <tr>
                                    <td><p class="keyId">1</p></td>
                                    <td style="width: 20%;">Cameron Williamson ádsd đ áds d á ds sad</td>
                                    <td style="width: 30%;"><p class="text-truncate">aaaaaaaaaaaaaaaaaaaaaaaaaaaaasssssssssssssssssssssssssssss sssssssssssssssssssssssssssss</p></td>
                                    <td>30/07/2022</td>
                                    <td class="text-center">Male</td>
                                    <td>30/07/2022</td>
                                    <td class="text-center"> <input type="checkbox" name="" id=""></td>
                                    <td class="text-center"><span><i class="fa-regular fa-pen-to-square edit"></i><i class="fa-solid fa-trash delete"></i></i></span></td>
                                </tr>
                                <tr>
                                    <td><p class="keyId">1</p></td>
                                    <td style="width: 20%;">Cameron Williamson ádsd đ áds d á ds sad</td>
                                    <td style="width: 30%;"><p class="text-truncate">aaaaaaaaaaaaaaaaaaaaaaaaaaaaasssssssssssssssssssssssssssss sssssssssssssssssssssssssssss</p></td>
                                    <td>30/07/2022</td>
                                    <td class="text-center">Male</td>
                                    <td>30/07/2022</td>
                                    <td class="text-center"> <input type="checkbox" name="" id=""></td>
                                    <td class="text-center"><span><i class="fa-regular fa-pen-to-square edit"></i><i class="fa-solid fa-trash delete"></i></i></span></td>
                                </tr>
                                <tr>
                                    <td><p class="keyId">1</p></td>
                                    <td style="width: 20%;">Cameron Williamson ádsd đ áds d á ds sad</td>
                                    <td style="width: 30%;"><p class="text-truncate">aaaaaaaaaaaaaaaaaaaaaaaaaaaaasssssssssssssssssssssssssssss sssssssssssssssssssssssssssss</p></td>
                                    <td>30/07/2022</td>
                                    <td class="text-center">Male</td>
                                    <td>30/07/2022</td>
                                    <td class="text-center"> <input type="checkbox" name="" id=""></td>
                                    <td class="text-center"><span><i class="fa-regular fa-pen-to-square edit"></i><i class="fa-solid fa-trash delete"></i></i></span></td>
                                </tr>
                                <tr>
                                    <td><p class="keyId">1</p></td>
                                    <td style="width: 20%;">Cameron Williamson ádsd đ áds d á ds sad</td>
                                    <td style="width: 30%;"><p class="text-truncate">aaaaaaaaaaaaaaaaaaaaaaaaaaaaasssssssssssssssssssssssssssss sssssssssssssssssssssssssssss</p></td>
                                    <td>30/07/2022</td>
                                    <td class="text-center">Male</td>
                                    <td>30/07/2022</td>
                                    <td class="text-center"> <input type="checkbox" name="" id=""></td>
                                    <td class="text-center"><span><i class="fa-regular fa-pen-to-square edit"></i><i class="fa-solid fa-trash delete"></i></i></span></td>
                                </tr>
                                <tr>
                                    <td><p class="keyId">1</p></td>
                                    <td style="width: 20%;">Cameron Williamson ádsd đ áds d á ds sad</td>
                                    <td style="width: 30%;"><p class="text-truncate">aaaaaaaaaaaaaaaaaaaaaaaaaaaaasssssssssssssssssssssssssssss sssssssssssssssssssssssssssss</p></td>
                                    <td>30/07/2022</td>
                                    <td class="text-center">Male</td>
                                    <td>30/07/2022</td>
                                    <td class="text-center"> <input type="checkbox" name="" id=""></td>
                                    <td class="text-center"><span><i class="fa-regular fa-pen-to-square edit"></i><i class="fa-solid fa-trash delete"></i></i></span></td>
                                </tr>
                                <tr>
                                    <td><p class="keyId">1</p></td>
                                    <td style="width: 20%;">Cameron Williamson ádsd đ áds d á ds sad</td>
                                    <td style="width: 30%;"><p class="text-truncate">aaaaaaaaaaaaaaaaaaaaaaaaaaaaasssssssssssssssssssssssssssss sssssssssssssssssssssssssssss</p></td>
                                    <td>30/07/2022</td>
                                    <td class="text-center">Male</td>
                                    <td>30/07/2022</td>
                                    <td class="text-center"> <input type="checkbox" name="" id=""></td>
                                    <td class="text-center"><span><i class="fa-regular fa-pen-to-square edit"></i><i class="fa-solid fa-trash delete"></i></i></span></td>
                                </tr>
                                <tr>
                                    <td><p class="keyId">1</p></td>
                                    <td style="width: 20%;">Cameron Williamson ádsd đ áds d á ds sad</td>
                                    <td style="width: 30%;"><p class="text-truncate">aaaaaaaaaaaaaaaaaaaaaaaaaaaaasssssssssssssssssssssssssssss sssssssssssssssssssssssssssss</p></td>
                                    <td>30/07/2022</td>
                                    <td class="text-center">Male</td>
                                    <td>30/07/2022</td>
                                    <td class="text-center"> <input type="checkbox" name="" id=""></td>
                                    <td class="text-center"><span><i class="fa-regular fa-pen-to-square edit"></i><i class="fa-solid fa-trash delete"></i></i></span></td>
                                </tr>
                                <tr>
                                    <td><p class="keyId">1</p></td>
                                    <td style="width: 20%;">Cameron Williamson ádsd đ áds d á ds sad</td>
                                    <td style="width: 30%;"><p class="text-truncate">aaaaaaaaaaaaaaaaaaaaaaaaaaaaasssssssssssssssssssssssssssss sssssssssssssssssssssssssssss</p></td>
                                    <td>30/07/2022</td>
                                    <td class="text-center">Male</td>
                                    <td>30/07/2022</td>
                                    <td class="text-center"> <input type="checkbox" name="" id=""></td>
                                    <td class="text-center"><span><i class="fa-regular fa-pen-to-square edit"></i><i class="fa-solid fa-trash delete"></i></i></span></td>
                                </tr>

                                <tr>
                                    <td><p class="keyId">1</p></td>
                                    <td style="width: 20%;">Cameron Williamson ádsd đ áds d á ds sad</td>
                                    <td style="width: 30%;"><p class="text-truncate">aaaaaaaaaaaaaaaaaaaaaaaaaaaaasssssssssssssssssssssssssssss sssssssssssssssssssssssssssss</p></td>
                                    <td>30/07/2022</td>
                                    <td class="text-center">Male</td>
                                    <td>30/07/2022</td>
                                    <td class="text-center"> <input type="checkbox" name="" id=""></td>
                                    <td class="text-center"><span><i class="fa-regular fa-pen-to-square edit"></i><i class="fa-solid fa-trash delete"></i></i></span></td>
                                </tr>
                                <tr>
                                    <td><p class="keyId">1</p></td>
                                    <td style="width: 20%;">Cameron Williamson ádsd đ áds d á ds sad</td>
                                    <td style="width: 30%;"><p class="text-truncate">aaaaaaaaaaaaaaaaaaaaaaaaaaaaasssssssssssssssssssssssssssss sssssssssssssssssssssssssssss</p></td>
                                    <td>30/07/2022</td>
                                    <td class="text-center">Male</td>
                                    <td>30/07/2022</td>
                                    <td class="text-center"> <input type="checkbox" name="" id=""></td>
                                    <td class="text-center"><span><i class="fa-regular fa-pen-to-square edit"></i><i class="fa-solid fa-trash delete"></i></i></span></td>
                                </tr>
                                <tr>
                                    <td><p class="keyId">1</p></td>
                                    <td style="width: 20%;">Cameron Williamson ádsd đ áds d á ds sad</td>
                                    <td style="width: 30%;"><p class="text-truncate">aaaaaaaaaaaaaaaaaaaaaaaaaaaaasssssssssssssssssssssssssssss sssssssssssssssssssssssssssss</p></td>
                                    <td>30/07/2022</td>
                                    <td class="text-center">Male</td>
                                    <td>30/07/2022</td>
                                    <td class="text-center"> <input type="checkbox" name="" id=""></td>
                                    <td class="text-center"><span><i class="fa-regular fa-pen-to-square edit"></i><i class="fa-solid fa-trash delete"></i></i></span></td>
                                </tr>
                                <tr>
                                    <td><p class="keyId">1</p></td>
                                    <td style="width: 20%;">Cameron Williamson ádsd đ áds d á ds sad</td>
                                    <td style="width: 30%;"><p class="text-truncate">aaaaaaaaaaaaaaaaaaaaaaaaaaaaasssssssssssssssssssssssssssss sssssssssssssssssssssssssssss</p></td>
                                    <td>30/07/2022</td>
                                    <td class="text-center">Male</td>
                                    <td>30/07/2022</td>
                                    <td class="text-center"> <input type="checkbox" name="" id=""></td>
                                    <td class="text-center"><span><i class="fa-regular fa-pen-to-square edit"></i><i class="fa-solid fa-trash delete"></i></i></span></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div id="q2" class="tabcontent">
            <div class="headerToQuesion">
                <div class="headerToQuesionLeft">
                    <form action="">
                        <div class="Users--right--btns">
                            <select name="date" id="date" class="select-dropdown doctor--filter">
                                <option>Fillter</option>
                                <option value="free">Done</option>
                                <option value="scheduled">Unfinished</option>
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
                    <form action="">
                        <div class="Users--right--btns">
                            <select name="date" id="date" class="select-dropdown doctor--filter">
                                <option>Assignment</option>
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
                    <button type="button" class="change"><i class="fa-solid fa-cash-register"></i> Thay đổi</button>
                    <button type="button" class="down"><i class="fa-solid fa-download"></i> DownLoad</button>
                    <button type="button" class="create"><i class="fa-solid fa-plus"></i> Tạo mới</button>
                </div>
            </div>
            <div class="body-todo">
                <div class="recent--patient">
                    <div class="tables">
                        <table>
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Câu hỏi</th>
                                    <th>Trả lời</th>
                                    <th>Ngày tạo</th>
                                    <th class="text-center">Người tạo</th>
                                    <th>Cập nhật</th>
                                    <th class="text-center">Trạng thái</th>
                                    <th class="text-center">Settings</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><p class="keyId">1</p></td>
                                    <td style="width: 20%;">Cameron Williamson ádsd đ áds d á ds sad</td>
                                    <td style="width: 30%;"><p class="text-truncate">aaaaaaaaaaaaaaaaaaaaaaaaaaaaasssssssssssssssssssssssssssss sssssssssssssssssssssssssssss</p></td>
                                    <td>30/07/2022</td>
                                    <td class="text-center">Male</td>
                                    <td>30/07/2022</td>
                                    <td class="text-center"> <input type="checkbox" name="" id=""></td>
                                    <td class="text-center"><span><i class="fa-regular fa-pen-to-square edit"></i><i class="fa-solid fa-trash delete"></i></i></span></td>
                                </tr>
                                <tr>
                                    <td><p class="keyId">1</p></td>
                                    <td style="width: 20%;">Cameron Williamson ádsd đ áds d á ds sad</td>
                                    <td style="width: 30%;"><p class="text-truncate">aaaaaaaaaaaaaaaaaaaaaaaaaaaaasssssssssssssssssssssssssssss sssssssssssssssssssssssssssss</p></td>
                                    <td>30/07/2022</td>
                                    <td class="text-center">Male</td>
                                    <td>30/07/2022</td>
                                    <td class="text-center"> <input type="checkbox" name="" id=""></td>
                                    <td class="text-center"><span><i class="fa-regular fa-pen-to-square edit"></i><i class="fa-solid fa-trash delete"></i></i></span></td>
                                </tr>
                                <tr>
                                    <td><p class="keyId">1</p></td>
                                    <td style="width: 20%;">Cameron Williamson ádsd đ áds d á ds sad</td>
                                    <td style="width: 30%;"><p class="text-truncate">aaaaaaaaaaaaaaaaaaaaaaaaaaaaasssssssssssssssssssssssssssss sssssssssssssssssssssssssssss</p></td>
                                    <td>30/07/2022</td>
                                    <td class="text-center">Male</td>
                                    <td>30/07/2022</td>
                                    <td class="text-center"> <input type="checkbox" name="" id=""></td>
                                    <td class="text-center"><span><i class="fa-regular fa-pen-to-square edit"></i><i class="fa-solid fa-trash delete"></i></i></span></td>
                                </tr>
                                <tr>
                                    <td><p class="keyId">1</p></td>
                                    <td style="width: 20%;">Cameron Williamson ádsd đ áds d á ds sad</td>
                                    <td style="width: 30%;"><p class="text-truncate">aaaaaaaaaaaaaaaaaaaaaaaaaaaaasssssssssssssssssssssssssssss sssssssssssssssssssssssssssss</p></td>
                                    <td>30/07/2022</td>
                                    <td class="text-center">Male</td>
                                    <td>30/07/2022</td>
                                    <td class="text-center"> <input type="checkbox" name="" id=""></td>
                                    <td class="text-center"><span><i class="fa-regular fa-pen-to-square edit"></i><i class="fa-solid fa-trash delete"></i></i></span></td>
                                </tr>
                                <tr>
                                    <td><p class="keyId">1</p></td>
                                    <td style="width: 20%;">Cameron Williamson ádsd đ áds d á ds sad</td>
                                    <td style="width: 30%;"><p class="text-truncate">aaaaaaaaaaaaaaaaaaaaaaaaaaaaasssssssssssssssssssssssssssss sssssssssssssssssssssssssssss</p></td>
                                    <td>30/07/2022</td>
                                    <td class="text-center">Male</td>
                                    <td>30/07/2022</td>
                                    <td class="text-center"> <input type="checkbox" name="" id=""></td>
                                    <td class="text-center"><span><i class="fa-regular fa-pen-to-square edit"></i><i class="fa-solid fa-trash delete"></i></i></span></td>
                                </tr>
                                <tr>
                                    <td><p class="keyId">1</p></td>
                                    <td style="width: 20%;">Cameron Williamson ádsd đ áds d á ds sad</td>
                                    <td style="width: 30%;"><p class="text-truncate">aaaaaaaaaaaaaaaaaaaaaaaaaaaaasssssssssssssssssssssssssssss sssssssssssssssssssssssssssss</p></td>
                                    <td>30/07/2022</td>
                                    <td class="text-center">Male</td>
                                    <td>30/07/2022</td>
                                    <td class="text-center"> <input type="checkbox" name="" id=""></td>
                                    <td class="text-center"><span><i class="fa-regular fa-pen-to-square edit"></i><i class="fa-solid fa-trash delete"></i></i></span></td>
                                </tr>
                                <tr>
                                    <td><p class="keyId">1</p></td>
                                    <td style="width: 20%;">Cameron Williamson ádsd đ áds d á ds sad</td>
                                    <td style="width: 30%;"><p class="text-truncate">aaaaaaaaaaaaaaaaaaaaaaaaaaaaasssssssssssssssssssssssssssss sssssssssssssssssssssssssssss</p></td>
                                    <td>30/07/2022</td>
                                    <td class="text-center">Male</td>
                                    <td>30/07/2022</td>
                                    <td class="text-center"> <input type="checkbox" name="" id=""></td>
                                    <td class="text-center"><span><i class="fa-regular fa-pen-to-square edit"></i><i class="fa-solid fa-trash delete"></i></i></span></td>
                                </tr>
                                <tr>
                                    <td><p class="keyId">1</p></td>
                                    <td style="width: 20%;">Cameron Williamson ádsd đ áds d á ds sad</td>
                                    <td style="width: 30%;"><p class="text-truncate">aaaaaaaaaaaaaaaaaaaaaaaaaaaaasssssssssssssssssssssssssssss sssssssssssssssssssssssssssss</p></td>
                                    <td>30/07/2022</td>
                                    <td class="text-center">Male</td>
                                    <td>30/07/2022</td>
                                    <td class="text-center"> <input type="checkbox" name="" id=""></td>
                                    <td class="text-center"><span><i class="fa-regular fa-pen-to-square edit"></i><i class="fa-solid fa-trash delete"></i></i></span></td>
                                </tr>
                                <tr>
                                    <td><p class="keyId">1</p></td>
                                    <td style="width: 20%;">Cameron Williamson ádsd đ áds d á ds sad</td>
                                    <td style="width: 30%;"><p class="text-truncate">aaaaaaaaaaaaaaaaaaaaaaaaaaaaasssssssssssssssssssssssssssss sssssssssssssssssssssssssssss</p></td>
                                    <td>30/07/2022</td>
                                    <td class="text-center">Male</td>
                                    <td>30/07/2022</td>
                                    <td class="text-center"> <input type="checkbox" name="" id=""></td>
                                    <td class="text-center"><span><i class="fa-regular fa-pen-to-square edit"></i><i class="fa-solid fa-trash delete"></i></i></span></td>
                                </tr>

                                <tr>
                                    <td><p class="keyId">1</p></td>
                                    <td style="width: 20%;">Cameron Williamson ádsd đ áds d á ds sad</td>
                                    <td style="width: 30%;"><p class="text-truncate">aaaaaaaaaaaaaaaaaaaaaaaaaaaaasssssssssssssssssssssssssssss sssssssssssssssssssssssssssss</p></td>
                                    <td>30/07/2022</td>
                                    <td class="text-center">Male</td>
                                    <td>30/07/2022</td>
                                    <td class="text-center"> <input type="checkbox" name="" id=""></td>
                                    <td class="text-center"><span><i class="fa-regular fa-pen-to-square edit"></i><i class="fa-solid fa-trash delete"></i></i></span></td>
                                </tr>
                                <tr>
                                    <td><p class="keyId">1</p></td>
                                    <td style="width: 20%;">Cameron Williamson ádsd đ áds d á ds sad</td>
                                    <td style="width: 30%;"><p class="text-truncate">aaaaaaaaaaaaaaaaaaaaaaaaaaaaasssssssssssssssssssssssssssss sssssssssssssssssssssssssssss</p></td>
                                    <td>30/07/2022</td>
                                    <td class="text-center">Male</td>
                                    <td>30/07/2022</td>
                                    <td class="text-center"> <input type="checkbox" name="" id=""></td>
                                    <td class="text-center"><span><i class="fa-regular fa-pen-to-square edit"></i><i class="fa-solid fa-trash delete"></i></i></span></td>
                                </tr>
                                <tr>
                                    <td><p class="keyId">1</p></td>
                                    <td style="width: 20%;">Cameron Williamson ádsd đ áds d á ds sad</td>
                                    <td style="width: 30%;"><p class="text-truncate">aaaaaaaaaaaaaaaaaaaaaaaaaaaaasssssssssssssssssssssssssssss sssssssssssssssssssssssssssss</p></td>
                                    <td>30/07/2022</td>
                                    <td class="text-center">Male</td>
                                    <td>30/07/2022</td>
                                    <td class="text-center"> <input type="checkbox" name="" id=""></td>
                                    <td class="text-center"><span><i class="fa-regular fa-pen-to-square edit"></i><i class="fa-solid fa-trash delete"></i></i></span></td>
                                </tr>
                                <tr>
                                    <td><p class="keyId">1</p></td>
                                    <td style="width: 20%;">Cameron Williamson ádsd đ áds d á ds sad</td>
                                    <td style="width: 30%;"><p class="text-truncate">aaaaaaaaaaaaaaaaaaaaaaaaaaaaasssssssssssssssssssssssssssss sssssssssssssssssssssssssssss</p></td>
                                    <td>30/07/2022</td>
                                    <td class="text-center">Male</td>
                                    <td>30/07/2022</td>
                                    <td class="text-center"> <input type="checkbox" name="" id=""></td>
                                    <td class="text-center"><span><i class="fa-regular fa-pen-to-square edit"></i><i class="fa-solid fa-trash delete"></i></i></span></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div id="q3" class="tabcontent">
            <div class="headerToQuesion">
                <div class="headerToQuesionLeft">
                    <form action="">
                        <div class="Users--right--btns">
                            <select name="date" id="date" class="select-dropdown doctor--filter">
                                <option>Fillter</option>
                                <option value="free">Done</option>
                                <option value="scheduled">Unfinished</option>
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
                    <form action="">
                        <div class="Users--right--btns">
                            <select name="date" id="date" class="select-dropdown doctor--filter">
                                <option>Assignment</option>
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
                    <button type="button" class="change"><i class="fa-solid fa-cash-register"></i> Thay đổi</button>
                    <button type="button" class="down"><i class="fa-solid fa-download"></i> DownLoad</button>
                    <button type="button" class="create"><i class="fa-solid fa-plus"></i> Tạo mới</button>
                </div>
            </div>
            <div class="body-todo">
                <div class="recent--patient">
                    <div class="tables">
                        <table>
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Câu hỏi</th>
                                    <th>Trả lời</th>
                                    <th>Ngày tạo</th>
                                    <th class="text-center">Người tạo</th>
                                    <th>Cập nhật</th>
                                    <th class="text-center">Trạng thái</th>
                                    <th class="text-center">Settings</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><p class="keyId">1</p></td>
                                    <td style="width: 20%;">Cameron Williamson ádsd đ áds d á ds sad</td>
                                    <td style="width: 30%;"><p class="text-truncate">aaaaaaaaaaaaaaaaaaaaaaaaaaaaasssssssssssssssssssssssssssss sssssssssssssssssssssssssssss</p></td>
                                    <td>30/07/2022</td>
                                    <td class="text-center">Male</td>
                                    <td>30/07/2022</td>
                                    <td class="text-center"> <input type="checkbox" name="" id=""></td>
                                    <td class="text-center"><span><i class="fa-regular fa-pen-to-square edit"></i><i class="fa-solid fa-trash delete"></i></i></span></td>
                                </tr>
                                <tr>
                                    <td><p class="keyId">1</p></td>
                                    <td style="width: 20%;">Cameron Williamson ádsd đ áds d á ds sad</td>
                                    <td style="width: 30%;"><p class="text-truncate">aaaaaaaaaaaaaaaaaaaaaaaaaaaaasssssssssssssssssssssssssssss sssssssssssssssssssssssssssss</p></td>
                                    <td>30/07/2022</td>
                                    <td class="text-center">Male</td>
                                    <td>30/07/2022</td>
                                    <td class="text-center"> <input type="checkbox" name="" id=""></td>
                                    <td class="text-center"><span><i class="fa-regular fa-pen-to-square edit"></i><i class="fa-solid fa-trash delete"></i></i></span></td>
                                </tr>
                                <tr>
                                    <td><p class="keyId">1</p></td>
                                    <td style="width: 20%;">Cameron Williamson ádsd đ áds d á ds sad</td>
                                    <td style="width: 30%;"><p class="text-truncate">aaaaaaaaaaaaaaaaaaaaaaaaaaaaasssssssssssssssssssssssssssss sssssssssssssssssssssssssssss</p></td>
                                    <td>30/07/2022</td>
                                    <td class="text-center">Male</td>
                                    <td>30/07/2022</td>
                                    <td class="text-center"> <input type="checkbox" name="" id=""></td>
                                    <td class="text-center"><span><i class="fa-regular fa-pen-to-square edit"></i><i class="fa-solid fa-trash delete"></i></i></span></td>
                                </tr>
                                <tr>
                                    <td><p class="keyId">1</p></td>
                                    <td style="width: 20%;">Cameron Williamson ádsd đ áds d á ds sad</td>
                                    <td style="width: 30%;"><p class="text-truncate">aaaaaaaaaaaaaaaaaaaaaaaaaaaaasssssssssssssssssssssssssssss sssssssssssssssssssssssssssss</p></td>
                                    <td>30/07/2022</td>
                                    <td class="text-center">Male</td>
                                    <td>30/07/2022</td>
                                    <td class="text-center"> <input type="checkbox" name="" id=""></td>
                                    <td class="text-center"><span><i class="fa-regular fa-pen-to-square edit"></i><i class="fa-solid fa-trash delete"></i></i></span></td>
                                </tr>
                                <tr>
                                    <td><p class="keyId">1</p></td>
                                    <td style="width: 20%;">Cameron Williamson ádsd đ áds d á ds sad</td>
                                    <td style="width: 30%;"><p class="text-truncate">aaaaaaaaaaaaaaaaaaaaaaaaaaaaasssssssssssssssssssssssssssss sssssssssssssssssssssssssssss</p></td>
                                    <td>30/07/2022</td>
                                    <td class="text-center">Male</td>
                                    <td>30/07/2022</td>
                                    <td class="text-center"> <input type="checkbox" name="" id=""></td>
                                    <td class="text-center"><span><i class="fa-regular fa-pen-to-square edit"></i><i class="fa-solid fa-trash delete"></i></i></span></td>
                                </tr>
                                <tr>
                                    <td><p class="keyId">1</p></td>
                                    <td style="width: 20%;">Cameron Williamson ádsd đ áds d á ds sad</td>
                                    <td style="width: 30%;"><p class="text-truncate">aaaaaaaaaaaaaaaaaaaaaaaaaaaaasssssssssssssssssssssssssssss sssssssssssssssssssssssssssss</p></td>
                                    <td>30/07/2022</td>
                                    <td class="text-center">Male</td>
                                    <td>30/07/2022</td>
                                    <td class="text-center"> <input type="checkbox" name="" id=""></td>
                                    <td class="text-center"><span><i class="fa-regular fa-pen-to-square edit"></i><i class="fa-solid fa-trash delete"></i></i></span></td>
                                </tr>
                                <tr>
                                    <td><p class="keyId">1</p></td>
                                    <td style="width: 20%;">Cameron Williamson ádsd đ áds d á ds sad</td>
                                    <td style="width: 30%;"><p class="text-truncate">aaaaaaaaaaaaaaaaaaaaaaaaaaaaasssssssssssssssssssssssssssss sssssssssssssssssssssssssssss</p></td>
                                    <td>30/07/2022</td>
                                    <td class="text-center">Male</td>
                                    <td>30/07/2022</td>
                                    <td class="text-center"> <input type="checkbox" name="" id=""></td>
                                    <td class="text-center"><span><i class="fa-regular fa-pen-to-square edit"></i><i class="fa-solid fa-trash delete"></i></i></span></td>
                                </tr>
                                <tr>
                                    <td><p class="keyId">1</p></td>
                                    <td style="width: 20%;">Cameron Williamson ádsd đ áds d á ds sad</td>
                                    <td style="width: 30%;"><p class="text-truncate">aaaaaaaaaaaaaaaaaaaaaaaaaaaaasssssssssssssssssssssssssssss sssssssssssssssssssssssssssss</p></td>
                                    <td>30/07/2022</td>
                                    <td class="text-center">Male</td>
                                    <td>30/07/2022</td>
                                    <td class="text-center"> <input type="checkbox" name="" id=""></td>
                                    <td class="text-center"><span><i class="fa-regular fa-pen-to-square edit"></i><i class="fa-solid fa-trash delete"></i></i></span></td>
                                </tr>
                                <tr>
                                    <td><p class="keyId">1</p></td>
                                    <td style="width: 20%;">Cameron Williamson ádsd đ áds d á ds sad</td>
                                    <td style="width: 30%;"><p class="text-truncate">aaaaaaaaaaaaaaaaaaaaaaaaaaaaasssssssssssssssssssssssssssss sssssssssssssssssssssssssssss</p></td>
                                    <td>30/07/2022</td>
                                    <td class="text-center">Male</td>
                                    <td>30/07/2022</td>
                                    <td class="text-center"> <input type="checkbox" name="" id=""></td>
                                    <td class="text-center"><span><i class="fa-regular fa-pen-to-square edit"></i><i class="fa-solid fa-trash delete"></i></i></span></td>
                                </tr>

                                <tr>
                                    <td><p class="keyId">1</p></td>
                                    <td style="width: 20%;">Cameron Williamson ádsd đ áds d á ds sad</td>
                                    <td style="width: 30%;"><p class="text-truncate">aaaaaaaaaaaaaaaaaaaaaaaaaaaaasssssssssssssssssssssssssssss sssssssssssssssssssssssssssss</p></td>
                                    <td>30/07/2022</td>
                                    <td class="text-center">Male</td>
                                    <td>30/07/2022</td>
                                    <td class="text-center"> <input type="checkbox" name="" id=""></td>
                                    <td class="text-center"><span><i class="fa-regular fa-pen-to-square edit"></i><i class="fa-solid fa-trash delete"></i></i></span></td>
                                </tr>
                                <tr>
                                    <td><p class="keyId">1</p></td>
                                    <td style="width: 20%;">Cameron Williamson ádsd đ áds d á ds sad</td>
                                    <td style="width: 30%;"><p class="text-truncate">aaaaaaaaaaaaaaaaaaaaaaaaaaaaasssssssssssssssssssssssssssss sssssssssssssssssssssssssssss</p></td>
                                    <td>30/07/2022</td>
                                    <td class="text-center">Male</td>
                                    <td>30/07/2022</td>
                                    <td class="text-center"> <input type="checkbox" name="" id=""></td>
                                    <td class="text-center"><span><i class="fa-regular fa-pen-to-square edit"></i><i class="fa-solid fa-trash delete"></i></i></span></td>
                                </tr>
                                <tr>
                                    <td><p class="keyId">1</p></td>
                                    <td style="width: 20%;">Cameron Williamson ádsd đ áds d á ds sad</td>
                                    <td style="width: 30%;"><p class="text-truncate">aaaaaaaaaaaaaaaaaaaaaaaaaaaaasssssssssssssssssssssssssssss sssssssssssssssssssssssssssss</p></td>
                                    <td>30/07/2022</td>
                                    <td class="text-center">Male</td>
                                    <td>30/07/2022</td>
                                    <td class="text-center"> <input type="checkbox" name="" id=""></td>
                                    <td class="text-center"><span><i class="fa-regular fa-pen-to-square edit"></i><i class="fa-solid fa-trash delete"></i></i></span></td>
                                </tr>
                                <tr>
                                    <td><p class="keyId">1</p></td>
                                    <td style="width: 20%;">Cameron Williamson ádsd đ áds d á ds sad</td>
                                    <td style="width: 30%;"><p class="text-truncate">aaaaaaaaaaaaaaaaaaaaaaaaaaaaasssssssssssssssssssssssssssss sssssssssssssssssssssssssssss</p></td>
                                    <td>30/07/2022</td>
                                    <td class="text-center">Male</td>
                                    <td>30/07/2022</td>
                                    <td class="text-center"> <input type="checkbox" name="" id=""></td>
                                    <td class="text-center"><span><i class="fa-regular fa-pen-to-square edit"></i><i class="fa-solid fa-trash delete"></i></i></span></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection