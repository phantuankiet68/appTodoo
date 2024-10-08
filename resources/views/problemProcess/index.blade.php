@extends('app')

@section('title', 'Home Page')

@section('content')
<div class="todo">
    <div class="todoHeader processTop">
        <div class="topHeader">
            <h2>{{ __('messages.Workflow') }}</h2> | <span>{{ __('messages.Home') }}</span>
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
            <button type="button" class="change"><i class="fa-solid fa-download"></i> {{ __('messages.Download') }}</button>
        </div>
    </div>
    <div class="projecTodoBody projecTodoBodyProcess">
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
    </div>
</div>

@endsection