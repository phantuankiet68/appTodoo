@extends('app')

@section('title', 'Home Page')

@section('content')
<div class="todo">
    <div class="todoHeader topHeaderTodo">
        <div class="topHeader">
            <h2>Vấn đề</h2> | <span>Trang chủ</span>
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
            <form action="">
                <div class="Users--right--btns">
                    <select name="date" id="date" class="select-dropdown doctor--filter">
                        <option>Assignment</option>
                        <option value="free">Admin</option>
                        <option value="scheduled">Users</option>
                    </select>
                </div>
            </form>
            <form action="">
                <div class="Users--right--btns">
                    <select name="date" id="date" class="select-dropdown doctor--filter">
                        <option >Filter</option>
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
            <button class="btn-add" id="openStaskIssue">Vấn đề mới mới</button>
        </div>
    </div>
    <div class="projecTodoBody">
        <div class="recent--patient body-tables-todo">
            <div class="tables">
                <table>
                    <thead>
                        <tr>
                            <th class="t-center" style="width: 120px;">Issue type</th>
                            <th>Key</th>
                            <th style="width: 360px;">Subject</th>
                            <th>Create_by</th>
                            <th>Status</th>
                            <th>Begin</th>
                            <th>End</th>
                            <th>Category</th>
                            <th>Settings</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="jus-center">
                                <p class="td-1">1</p>
                            </td>
                            <td><a class="key_issue" href="https://fontawesome.com/">CRH_185</a></td>
                            <td><p class="text-truncate">aaaaaaaaaaaaaaaaaaaaaaaaaaaaasssssssssssssssssssssssssssss sssssssssssssssssssssssssssss</p></td>
                            <td>
                                <div class="table_user">
                                    <div class="table_user_image">
                                        <img src="../assets/images/user.jpg" alt="" srcset="">
                                    </div>
                                    <p>Tuấn</p>
                                </div>
                            </td>
                            <!-- <td class="pending"><p class="openIssue">Open</p></td> -->
                            <!-- <td class="pending"><p class="inProgressIssue">In Progress</p></td> -->
                            <td class="pending"><p class="resolvedIssue">Resolved</p></td>
                            <td>30/07/2022</td>
                            <td>30/07/2022</td>
                            <td>HashTask</td>
                            <td><span><i class="fa-regular fa-pen-to-square edit"></i><i class="fa-solid fa-trash delete"></i></i></span></td>
                        </tr>
                        <tr></tr>
                            <td class="jus-center">
                                <p class="td-1">1</p>
                            </td>
                            <td><a class="key_issue" href="https://fontawesome.com/">CRH_185</a></td>
                            <td><p class="text-truncate">aaaaaaaaaaaaaaaaaaaaaaaaaaaaasssssssssssssssssssssssssssss sssssssssssssssssssssssssssss</p></td>
                            <td>
                                <div class="table_user">
                                    <div class="table_user_image">
                                        <img src="../assets/images/user.jpg" alt="" srcset="">
                                    </div>
                                    <p>Tuấn</p>
                                </div>
                            </td>
                            <!-- <td class="pending"><p class="openIssue">Open</p></td> -->
                            <!-- <td class="pending"><p class="inProgressIssue">In Progress</p></td> -->
                            <td class="pending"><p class="resolvedIssue">Resolved</p></td>
                            <td>30/07/2022</td>
                            <td>30/07/2022</td>
                            <td>HashTask</td>
                            <td><span><i class="fa-regular fa-pen-to-square edit"></i><i class="fa-solid fa-trash delete"></i></i></span></td>
                        </tr>
                        <tr>
                            <td class="jus-center">
                                <p class="td-1">1</p>
                            </td>
                            <td><a class="key_issue" href="https://fontawesome.com/">CRH_185</a></td>
                            <td><p class="text-truncate">aaaaaaaaaaaaaaaaaaaaaaaaaaaaasssssssssssssssssssssssssssss sssssssssssssssssssssssssssss</p></td>
                            <td>
                                <div class="table_user">
                                    <div class="table_user_image">
                                        <img src="../assets/images/user.jpg" alt="" srcset="">
                                    </div>
                                    <p>Tuấn</p>
                                </div>
                            </td>
                            <td class="pending"><p class="openIssue">Open</p></td>
                            <!-- <td class="pending"><p class="inProgressIssue">In Progress</p></td> -->
                            <!-- <td class="pending"><p class="resolvedIssue">Resolved</p></td> -->
                            <td>30/07/2022</td>
                            <td>30/07/2022</td>
                            <td>HashTask</td>
                            <td><span><i class="fa-regular fa-pen-to-square edit"></i><i class="fa-solid fa-trash delete"></i></i></span></td>
                        </tr>
                        <tr>
                            <td class="jus-center">
                                <p class="td-1">1</p>
                            </td>
                            <td><a class="key_issue" href="https://fontawesome.com/">CRH_185</a></td>
                            <td><p class="text-truncate">aaaaaaaaaaaaaaaaaaaaaaaaaaaaasssssssssssssssssssssssssssss sssssssssssssssssssssssssssss</p></td>
                            <td>
                                <div class="table_user">
                                    <div class="table_user_image">
                                        <img src="../assets/images/user.jpg" alt="" srcset="">
                                    </div>
                                    <p>Tuấn</p>
                                </div>
                            </td>
                            <td class="pending"><p class="openIssue">Open</p></td>
                            <!-- <td class="pending"><p class="inProgressIssue">In Progress</p></td> -->
                            <!-- <td class="pending"><p class="resolvedIssue">Resolved</p></td> -->
                            <td>30/07/2022</td>
                            <td>30/07/2022</td>
                            <td>HashTask</td>
                            <td><span><i class="fa-regular fa-pen-to-square edit"></i><i class="fa-solid fa-trash delete"></i></i></span></td>
                        </tr>
                        <tr>
                            <td class="jus-center">
                                <p class="td-1">1</p>
                            </td>
                            <td><a class="key_issue" href="https://fontawesome.com/">CRH_185</a></td>
                            <td><p class="text-truncate">aaaaaaaaaaaaaaaaaaaaaaaaaaaaasssssssssssssssssssssssssssss sssssssssssssssssssssssssssss</p></td>
                            <td>
                                <div class="table_user">
                                    <div class="table_user_image">
                                        <img src="../assets/images/user.jpg" alt="" srcset="">
                                    </div>
                                    <p>Tuấn</p>
                                </div>
                            </td>
                            <td class="pending"><p class="openIssue">Open</p></td>
                            <!-- <td class="pending"><p class="inProgressIssue">In Progress</p></td> -->
                            <!-- <td class="pending"><p class="resolvedIssue">Resolved</p></td> -->
                            <td>30/07/2022</td>
                            <td>30/07/2022</td>
                            <td>HashTask</td>
                            <td><span><i class="fa-regular fa-pen-to-square edit"></i><i class="fa-solid fa-trash delete"></i></i></span></td>
                        </tr>
                        <tr>
                            <td class="jus-center">
                                <p class="td-1">1</p>
                            </td>
                            <td><a class="key_issue" href="https://fontawesome.com/">CRH_185</a></td>
                            <td><p class="text-truncate">aaaaaaaaaaaaaaaaaaaaaaaaaaaaasssssssssssssssssssssssssssss sssssssssssssssssssssssssssss</p></td>
                            <td>
                                <div class="table_user">
                                    <div class="table_user_image">
                                        <img src="../assets/images/user.jpg" alt="" srcset="">
                                    </div>
                                    <p>Tuấn</p>
                                </div>
                            </td>
                            <td class="pending"><p class="openIssue">Open</p></td>
                            <!-- <td class="pending"><p class="inProgressIssue">In Progress</p></td> -->
                            <!-- <td class="pending"><p class="resolvedIssue">Resolved</p></td> -->
                            <td>30/07/2022</td>
                            <td>30/07/2022</td>
                            <td>HashTask</td>
                            <td><span><i class="fa-regular fa-pen-to-square edit"></i><i class="fa-solid fa-trash delete"></i></i></span></td>
                        </tr>
                        <tr>
                            <td class="jus-center">
                                <p class="td-1">1</p>
                            </td>
                            <td><a class="key_issue" href="https://fontawesome.com/">CRH_185</a></td>
                            <td><p class="text-truncate">aaaaaaaaaaaaaaaaaaaaaaaaaaaaasssssssssssssssssssssssssssss sssssssssssssssssssssssssssss</p></td>
                            <td>
                                <div class="table_user">
                                    <div class="table_user_image">
                                        <img src="../assets/images/user.jpg" alt="" srcset="">
                                    </div>
                                    <p>Tuấn</p>
                                </div>
                            </td>
                            <td class="pending"><p class="openIssue">Open</p></td>
                            <!-- <td class="pending"><p class="inProgressIssue">In Progress</p></td> -->
                            <!-- <td class="pending"><p class="resolvedIssue">Resolved</p></td> -->
                            <td>30/07/2022</td>
                            <td>30/07/2022</td>
                            <td>HashTask</td>
                            <td><span><i class="fa-regular fa-pen-to-square edit"></i><i class="fa-solid fa-trash delete"></i></i></span></td>
                        </tr>
                        <tr>
                            <td class="jus-center">
                                <p class="td-1">1</p>
                            </td>
                            <td><a class="key_issue" href="https://fontawesome.com/">CRH_185</a></td>
                            <td><p class="text-truncate">aaaaaaaaaaaaaaaaaaaaaaaaaaaaasssssssssssssssssssssssssssss sssssssssssssssssssssssssssss</p></td>
                            <td>
                                <div class="table_user">
                                    <div class="table_user_image">
                                        <img src="../assets/images/user.jpg" alt="" srcset="">
                                    </div>
                                    <p>Tuấn</p>
                                </div>
                            </td>
                            <td class="pending"><p class="openIssue">Open</p></td>
                            <!-- <td class="pending"><p class="inProgressIssue">In Progress</p></td> -->
                            <!-- <td class="pending"><p class="resolvedIssue">Resolved</p></td> -->
                            <td>30/07/2022</td>
                            <td>30/07/2022</td>
                            <td>HashTask</td>
                            <td><span><i class="fa-regular fa-pen-to-square edit"></i><i class="fa-solid fa-trash delete"></i></i></span></td>
                        </tr>
                        <tr>
                            <td class="jus-center">
                                <p class="td-1">1</p>
                            </td>
                            <td><a class="key_issue" href="https://fontawesome.com/">CRH_185</a></td>
                            <td><p class="text-truncate">aaaaaaaaaaaaaaaaaaaaaaaaaaaaasssssssssssssssssssssssssssss sssssssssssssssssssssssssssss</p></td>
                            <td>
                                <div class="table_user">
                                    <div class="table_user_image">
                                        <img src="../assets/images/user.jpg" alt="" srcset="">
                                    </div>
                                    <p>Tuấn</p>
                                </div>
                            </td>
                            <td class="pending"><p class="openIssue">Open</p></td>
                            <!-- <td class="pending"><p class="inProgressIssue">In Progress</p></td> -->
                            <!-- <td class="pending"><p class="resolvedIssue">Resolved</p></td> -->
                            <td>30/07/2022</td>
                            <td>30/07/2022</td>
                            <td>HashTask</td>
                            <td><span><i class="fa-regular fa-pen-to-square edit"></i><i class="fa-solid fa-trash delete"></i></i></span></td>
                        </tr>
                        <tr>
                            <td class="jus-center">
                                <p class="td-1">1</p>
                            </td>
                            <td><a class="key_issue" href="https://fontawesome.com/">CRH_185</a></td>
                            <td><p class="text-truncate">aaaaaaaaaaaaaaaaaaaaaaaaaaaaasssssssssssssssssssssssssssss sssssssssssssssssssssssssssss</p></td>
                            <td>
                                <div class="table_user">
                                    <div class="table_user_image">
                                        <img src="../assets/images/user.jpg" alt="" srcset="">
                                    </div>
                                    <p>Tuấn</p>
                                </div>
                            </td>
                            <td class="pending"><p class="openIssue">Open</p></td>
                            <!-- <td class="pending"><p class="inProgressIssue">In Progress</p></td> -->
                            <!-- <td class="pending"><p class="resolvedIssue">Resolved</p></td> -->
                            <td>30/07/2022</td>
                            <td>30/07/2022</td>
                            <td>HashTask</td>
                            <td><span><i class="fa-regular fa-pen-to-square edit"></i><i class="fa-solid fa-trash delete"></i></i></span></td>
                        </tr>
                        <tr>
                            <td class="jus-center">
                                <p class="td-1">1</p>
                            </td>
                            <td><a class="key_issue" href="https://fontawesome.com/">CRH_185</a></td>
                            <td><p class="text-truncate">aaaaaaaaaaaaaaaaaaaaaaaaaaaaasssssssssssssssssssssssssssss sssssssssssssssssssssssssssss</p></td>
                            <td>
                                <div class="table_user">
                                    <div class="table_user_image">
                                        <img src="../assets/images/user.jpg" alt="" srcset="">
                                    </div>
                                    <p>Tuấn</p>
                                </div>
                            </td>
                            <td class="pending"><p class="openIssue">Open</p></td>
                            <!-- <td class="pending"><p class="inProgressIssue">In Progress</p></td> -->
                            <!-- <td class="pending"><p class="resolvedIssue">Resolved</p></td> -->
                            <td>30/07/2022</td>
                            <td>30/07/2022</td>
                            <td>HashTask</td>
                            <td><span><i class="fa-regular fa-pen-to-square edit"></i><i class="fa-solid fa-trash delete"></i></i></span></td>
                        </tr>
                    </tbody>
                </table>
                <div class="pagination">
                    <button id="prev" onclick="prevPage()">Prev</button>
                    <span id="page-info">1</span>
                    <span id="page-info">2</span>
                    <button id="next" onclick="nextPage()">Next</button>
                </div>
            </div>
        </div>
        <div class="projecTodoBodyNotify">
            <div class="projectTodoNotify">
                <div class="projectTodoNotifyHeader">
                    <h3>Recent Update</h3>
                    <i class="fa-solid fa-caret-up"></i>
                </div>
                <div class="projectTodoNotifyBody">
                    <a href="">
                        <div class="notifyUsers">
                            <div class="imgNotify">
                                <div class="imagesNotify">
                                    <img src="./assets/images/user1.jpg" alt="">
                                </div>
                                <span> Bakusumi</span>
                            </div>
                            <div class="updateContentNotify">
                                <p>update <button type="button">comment</button></p>
                            </div>
                        </div>
                        <div class="notifyBodyContent">
                            <h4>TAKAYAMA_GAS_USR_KIKAN-211 請求書・コンビニ払込票の出力順</h5>
                            <span>@筒井　亮太 様 <br> 
                                ありがとうございます。<br>
                                印刷会社様に確認を取ってみます。
                            </span>
                        </div>
                        <div class="footerTodoNotify">
                            <div class="getDate">
                                <span>update 25 phút trước</span>
                            </div>
                            <div class="getIconStars">

                            </div>
                        </div>
                    </a>
                </div>
                <div class="projectTodoNotifyBody">
                    <a href="">
                        <div class="notifyUsers">
                            <div class="imgNotify">
                                <div class="imagesNotify">
                                    <img src="./assets/images/user1.jpg" alt="">
                                </div>
                                <span> Bakusumi</span>
                            </div>
                            <div class="updateContentNotify">
                                <p>update <button type="button">comment</button></p>
                            </div>
                        </div>
                        <div class="notifyBodyContent">
                            <h4>TAKAYAMA_GAS_USR_KIKAN-211 請求書・コンビニ払込票の出力順</h5>
                            <span>@筒井　亮太 様 <br> 
                                ありがとうございます。<br>
                                印刷会社様に確認を取ってみます。
                            </span>
                        </div>
                        <div class="footerTodoNotify">
                            <div class="getDate">
                                <span>update 25 phút trước</span>
                            </div>
                            <div class="getIconStars">

                            </div>
                        </div>
                    </a>
                </div>
                <div class="projectTodoNotifyBody">
                    <a href="">
                        <div class="notifyUsers">
                            <div class="imgNotify">
                                <div class="imagesNotify">
                                    <img src="./assets/images/user1.jpg" alt="">
                                </div>
                                <span> Bakusumi</span>
                            </div>
                            <div class="updateContentNotify">
                                <p>update <button type="button">comment</button></p>
                            </div>
                        </div>
                        <div class="notifyBodyContent">
                            <h4>TAKAYAMA_GAS_USR_KIKAN-211 請求書・コンビニ払込票の出力順</h5>
                            <span>@筒井　亮太 様 <br> 
                                ありがとうございます。<br>
                                印刷会社様に確認を取ってみます。
                            </span>
                        </div>
                        <div class="footerTodoNotify">
                            <div class="getDate">
                                <span>update 25 phút trước</span>
                            </div>
                            <div class="getIconStars">

                            </div>
                        </div>
                    </a>
                </div>
                <div class="projectTodoNotifyBody">
                    <a href="">
                        <div class="notifyUsers">
                            <div class="imgNotify">
                                <div class="imagesNotify">
                                    <img src="./assets/images/user1.jpg" alt="">
                                </div>
                                <span> Bakusumi</span>
                            </div>
                            <div class="updateContentNotify">
                                <p>update <button type="button">comment</button></p>
                            </div>
                        </div>
                        <div class="notifyBodyContent">
                            <h4>TAKAYAMA_GAS_USR_KIKAN-211 請求書・コンビニ払込票の出力順</h5>
                            <span>@筒井　亮太 様 <br> 
                                ありがとうございます。<br>
                                印刷会社様に確認を取ってみます。
                            </span>
                        </div>
                        <div class="footerTodoNotify">
                            <div class="getDate">
                                <span>update 25 phút trước</span>
                            </div>
                            <div class="getIconStars">

                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection