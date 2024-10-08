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
    <div class="projecTodoBody">
        <div class="projectCol-8">
            <div class="board">                      
                <div class="lanes">
                <div class="swim-lane" id="todo-lane">
                        <h3 class="heading">TODO</h3>
                        <div class="task" draggable="true">
                            <div class="normal d-flex">
                                <h3>Set up nature</h3>
                                <div class="bar-icon-click">
                                    <i class="fa-regular fa-eye"></i>
                                </div>
                            </div>
                            <p>Learn about VB.Net, set up the Visual Studio environment</p>
                            <div class="progress-container">
                                <div class="progress-bar" style="width: 75%;"></div>
                                <div class="progress-bar-box">
                                    <span>75%</span>
                                </div>
                            </div>
                            <div class="listAction">
                                <div class="actionComunicate">
                                    <span><i class="fa-regular fa-comment"></i><sup>3</sup></span>
                                    <span><i class="fa-solid fa-users"></i><sup>3</sup></span>
                                </div>
                                <div class="actionUsers">
                                    <div class="images-users">
                                        <img src="./assets/images/user1.jpg" alt="">
                                    </div>
                                    <div class="images-users">
                                        <img src="./assets/images/user1.jpg" alt="">
                                    </div>
                                    <div class="images-users">
                                        <img src="./assets/images/user1.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="task" draggable="true">
                            <div class="normal d-flex">
                                <h3>Set up nature</h3>
                                <div class="bar-icon-click">
                                    <i class="fa-regular fa-eye"></i>
                                </div>
                            </div>
                            <p>Learn about VB.Net, set up the Visual Studio environment</p>
                            <div class="progress-container">
                                <div class="progress-bar" style="width: 75%;"></div>
                                <div class="progress-bar-box">
                                    <span>75%</span>
                                </div>
                            </div>
                            <div class="listAction">
                                <div class="actionComunicate">
                                    <span><i class="fa-regular fa-comment"></i><sup>3</sup></span>
                                    <span><i class="fa-solid fa-users"></i><sup>3</sup></span>
                                </div>
                                <div class="actionUsers">
                                    <div class="images-users">
                                        <img src="./assets/images/user1.jpg" alt="">
                                    </div>
                                    <div class="images-users">
                                        <img src="./assets/images/user1.jpg" alt="">
                                    </div>
                                    <div class="images-users">
                                        <img src="./assets/images/user1.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="task" draggable="true">
                            <div class="normal d-flex">
                                <h3>Set up nature</h3>
                                <div class="bar-icon-click">
                                    <i class="fa-regular fa-eye"></i>
                                </div>
                            </div>
                            <p>Learn about VB.Net, set up the Visual Studio environment</p>
                            <div class="progress-container">
                                <div class="progress-bar" style="width: 75%;"></div>
                                <div class="progress-bar-box">
                                    <span>75%</span>
                                </div>
                            </div>
                            <div class="listAction">
                                <div class="actionComunicate">
                                    <span><i class="fa-regular fa-comment"></i><sup>3</sup></span>
                                    <span><i class="fa-solid fa-users"></i><sup>3</sup></span>
                                </div>
                                <div class="actionUsers">
                                    <div class="images-users">
                                        <img src="./assets/images/user1.jpg" alt="">
                                    </div>
                                    <div class="images-users">
                                        <img src="./assets/images/user1.jpg" alt="">
                                    </div>
                                    <div class="images-users">
                                        <img src="./assets/images/user1.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="task" draggable="true">
                            <div class="normal d-flex">
                                <h3>Set up nature</h3>
                                <div class="bar-icon-click">
                                    <i class="fa-regular fa-eye"></i>
                                </div>
                            </div>
                            <p>Learn about VB.Net, set up the Visual Studio environment</p>
                            <div class="progress-container">
                                <div class="progress-bar" style="width: 75%;"></div>
                                <div class="progress-bar-box">
                                    <span>75%</span>
                                </div>
                            </div>
                            <div class="listAction">
                                <div class="actionComunicate">
                                    <span><i class="fa-regular fa-comment"></i><sup>3</sup></span>
                                    <span><i class="fa-solid fa-users"></i><sup>3</sup></span>
                                </div>
                                <div class="actionUsers">
                                    <div class="images-users">
                                        <img src="./assets/images/user1.jpg" alt="">
                                    </div>
                                    <div class="images-users">
                                        <img src="./assets/images/user1.jpg" alt="">
                                    </div>
                                    <div class="images-users">
                                        <img src="./assets/images/user1.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            
                    <div class="swim-lane">
                        <h3 class="heading">Doing</h3>
                        <div class="task" draggable="true">
                            <div class="normal d-flex">
                                <h3>Set up nature</h3>
                                <div class="bar-icon-click">
                                    <i class="fa-regular fa-eye"></i>
                                </div>
                            </div>
                            <p>Learn about VB.Net, set up the Visual Studio environment</p>
                            <div class="progress-container">
                                <div class="progress-bar" style="width: 75%;"></div>
                                <div class="progress-bar-box">
                                    <span>75%</span>
                                </div>
                            </div>
                            <div class="listAction">
                                <div class="actionComunicate">
                                    <span><i class="fa-regular fa-comment"></i><sup>3</sup></span>
                                    <span><i class="fa-solid fa-users"></i><sup>3</sup></span>
                                </div>
                                <div class="actionUsers">
                                    <div class="images-users">
                                        <img src="./assets/images/user1.jpg" alt="">
                                    </div>
                                    <div class="images-users">
                                        <img src="./assets/images/user1.jpg" alt="">
                                    </div>
                                    <div class="images-users">
                                        <img src="./assets/images/user1.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="task" draggable="true">
                            <div class="normal d-flex">
                                <h3>Set up nature</h3>
                                <div class="bar-icon-click">
                                    <i class="fa-regular fa-eye"></i>
                                </div>
                            </div>
                            <p>Learn about VB.Net, set up the Visual Studio environment</p>
                            <div class="progress-container">
                                <div class="progress-bar" style="width: 75%;"></div>
                                <div class="progress-bar-box">
                                    <span>75%</span>
                                </div>
                            </div>
                            <div class="listAction">
                                <div class="actionComunicate">
                                    <span><i class="fa-regular fa-comment"></i><sup>3</sup></span>
                                    <span><i class="fa-solid fa-users"></i><sup>3</sup></span>
                                </div>
                                <div class="actionUsers">
                                    <div class="images-users">
                                        <img src="./assets/images/user1.jpg" alt="">
                                    </div>
                                    <div class="images-users">
                                        <img src="./assets/images/user1.jpg" alt="">
                                    </div>
                                    <div class="images-users">
                                        <img src="./assets/images/user1.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            
                    <div class="swim-lane">
                        <h3 class="heading">Testing</h3>
                        <div class="task" draggable="true">
                            <div class="normal d-flex">
                                <h3>Set up nature</h3>
                                <div class="bar-icon-click">
                                    <i class="fa-regular fa-eye"></i>
                                </div>
                            </div>
                            <p>Learn about VB.Net, set up the Visual Studio environment</p>
                            <div class="progress-container">
                                <div class="progress-bar" style="width: 75%;"></div>
                                <div class="progress-bar-box">
                                    <span>75%</span>
                                </div>
                            </div>
                            <div class="listAction">
                                <div class="actionComunicate">
                                    <span><i class="fa-regular fa-comment"></i><sup>3</sup></span>
                                    <span><i class="fa-solid fa-users"></i><sup>3</sup></span>
                                </div>
                                <div class="actionUsers">
                                    <div class="images-users">
                                        <img src="./assets/images/user1.jpg" alt="">
                                    </div>
                                    <div class="images-users">
                                        <img src="./assets/images/user1.jpg" alt="">
                                    </div>
                                    <div class="images-users">
                                        <img src="./assets/images/user1.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="task" draggable="true">
                            <div class="normal d-flex">
                                <h3>Set up nature</h3>
                                <div class="bar-icon-click">
                                    <i class="fa-regular fa-eye"></i>
                                </div>
                            </div>
                            <p>Learn about VB.Net, set up the Visual Studio environment</p>
                            <div class="progress-container">
                                <div class="progress-bar" style="width: 75%;"></div>
                                <div class="progress-bar-box">
                                    <span>75%</span>
                                </div>
                            </div>
                            <div class="listAction">
                                <div class="actionComunicate">
                                    <span><i class="fa-regular fa-comment"></i><sup>3</sup></span>
                                    <span><i class="fa-solid fa-users"></i><sup>3</sup></span>
                                </div>
                                <div class="actionUsers">
                                    <div class="images-users">
                                        <img src="./assets/images/user1.jpg" alt="">
                                    </div>
                                    <div class="images-users">
                                        <img src="./assets/images/user1.jpg" alt="">
                                    </div>
                                    <div class="images-users">
                                        <img src="./assets/images/user1.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swim-lane">
                        <h3 class="heading">Done</h3>
                        <div class="task" draggable="true">
                            <div class="normal d-flex">
                                <h3>Set up nature</h3>
                                <div class="bar-icon-click">
                                    <i class="fa-regular fa-eye"></i>
                                </div>
                            </div>
                            <p>Learn about VB.Net, set up the Visual Studio environment</p>
                            <div class="progress-container">
                                <div class="progress-bar" style="width: 75%;"></div>
                                <div class="progress-bar-box">
                                    <span>75%</span>
                                </div>
                            </div>
                            <div class="listAction">
                                <div class="actionComunicate">
                                    <span><i class="fa-regular fa-comment"></i><sup>3</sup></span>
                                    <span><i class="fa-solid fa-users"></i><sup>3</sup></span>
                                </div>
                                <div class="actionUsers">
                                    <div class="images-users">
                                        <img src="./assets/images/user1.jpg" alt="">
                                    </div>
                                    <div class="images-users">
                                        <img src="./assets/images/user1.jpg" alt="">
                                    </div>
                                    <div class="images-users">
                                        <img src="./assets/images/user1.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="task" draggable="true">
                            <div class="normal d-flex">
                                <h3>Set up nature</h3>
                                <div class="bar-icon-click">
                                    <i class="fa-regular fa-eye"></i>
                                </div>
                            </div>
                            <p>Learn about VB.Net, set up the Visual Studio environment</p>
                            <div class="progress-container">
                                <div class="progress-bar" style="width: 75%;"></div>
                                <div class="progress-bar-box">
                                    <span>75%</span>
                                </div>
                            </div>
                            <div class="listAction">
                                <div class="actionComunicate">
                                    <span><i class="fa-regular fa-comment"></i><sup>3</sup></span>
                                    <span><i class="fa-solid fa-users"></i><sup>3</sup></span>
                                </div>
                                <div class="actionUsers">
                                    <div class="images-users">
                                        <img src="./assets/images/user1.jpg" alt="">
                                    </div>
                                    <div class="images-users">
                                        <img src="./assets/images/user1.jpg" alt="">
                                    </div>
                                    <div class="images-users">
                                        <img src="./assets/images/user1.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="projectCol-2">
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