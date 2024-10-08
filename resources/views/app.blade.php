<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/media.css') }}">
    <link rel="stylesheet" href="{{ asset('css/model.css') }}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script type="text/javascript" src="http://js.nicedit.com/nicEdit-latest.js"></script>
    <script src="https://cdn.ckeditor.com/4.20.1/standard/ckeditor.js"></script>
</head>
<body>
    <div id="app">
        <div class="row">
            <div class="sidebar">
                <div class="logo">
                    <div class="box-logo">
                        <i class="fa-solid fa-user"></i>
                    </div>
                </div>
                <div class="name-user">
                @if (Auth::check())
                    <h2>{{ Auth::user()->full_name }}</h2>
                @endif
                </div>
                <ul class="nav-menu mt-20">
                    <li><a href="{{ route('dashboard.index') }}"><i class="fa-solid fa-house"></i>{{ __('messages.Dashboard') }}</a></li>
                    <li><a href="{{ route('chat.index') }}"><i class="fa-regular fa-message"></i>{{ __('messages.Message') }}</a></li>
                    <li ><a href="{{ route('issue.index') }}" id="issue"><i class="fa-solid fa-box-tissue"></i>{{ __('messages.Issues') }}</a></li>
                    <li class="bg-grey"><a href="javascript:void(0)" id="todo"><i class="fa-solid fa-cloud"></i>{{ __('messages.Tasks') }}</a><span id="chevronTodo"><i class="fa-solid fa-chevron-up"></i></span></li>
                    <li class="dropDownTodo"><a href="{{ route('todo.index') }}"><i class="fa-regular fa-circle"></i>{{ __('messages.Tasks') }}</a></li>
                    <li class="dropDownTodo"><a href="{{ route('work_flow.index') }}"><i class="fa-regular fa-circle"></i>{{ __('messages.Workflow') }}</a></li>
                    <li class="dropDownTodo"><a href="{{ route('salary.index') }}"><i class="fa-solid fa-money-bill"></i>{{ __('messages.Salary') }}</a></li>
                    <li class="dropDownTodo"><a href="{{ route('expense.index') }}"><i class="fa-solid fa-money-bill"></i>{{ __('messages.Expenses') }}</a></li>
                    <li class="dropDownTodo"><a href="{{ route('food.index') }}"><i class="fa-solid fa-money-bill"></i>{{ __('messages.Food') }}</a></li>
                    <li class="titleMenu">{{ __('messages.Application') }}</li>
                    <li><a href="{{ route('cv.index') }}"><i class="fa-regular fa-file"></i>{{ __('messages.Curriculum Vitae') }}</a></li>
                    <li><a href="/calendar"><i class="fa-regular fa-calendar"></i>{{ __('messages.Calendar') }}</a></li>
                    <li><a href="{{ route('sent.index') }}"><i class="fa-regular fa-envelope"></i>{{ __('messages.Email') }}</a></li>
                    <li class="titleMenu">{{ __('messages.Lesson') }}</li>
                    <li class="bg-grey"><a href="javascript:void(0)" id="Japanese"><i class="fa-solid fa-fire"></i>{{ __('messages.Japanese') }}</a><span id="chevronJapanese"><i class="fa-solid fa-chevron-up"></i></span></li>
                    <li class="dropDownJapanese"><a href="{{ route('japanese.addJapanese') }}"><i class="fa-regular fa-circle"></i>{{ __('messages.Add New') }}</a></li>
                    <li class="dropDownJapanese"><a href="{{ route('japanese.index') }}"><i class="fa-regular fa-circle"></i>{{ __('messages.Japanese') }}</a></li>
                    <li class="dropDownJapanese"><a href="{{ route('japanese.index') }}"><i class="fa-regular fa-circle"></i>{{ __('messages.Learn vocabulary') }}</a></li>
                    <li class="bg-grey"><a href="javascript:void(0)" id="English"><i class="fa-solid fa-fire"></i>{{ __('messages.English') }}</a><span id="chevronEnglish"><i class="fa-solid fa-chevron-up"></i></span></li>
                    <li class="dropDownEnglish"><a href="{{ route('english.addEnglish') }}"><i class="fa-regular fa-circle"></i>{{ __('messages.Add New') }}</a></li>
                    <li class="dropDownEnglish"><a href="{{ route('english.index') }}"><i class="fa-regular fa-circle"></i>{{ __('messages.English') }}</a></li>
                    <li class="dropDownEnglish"><a href="{{ route('english.index') }}"><i class="fa-regular fa-circle"></i>{{ __('messages.Learn vocabulary') }}</a></li>
                    <li class="bg-grey"><a href="javascript:void(0)" id="Question"><i class="fa-solid fa-fire"></i>{{ __('messages.Learn more') }}</a><span id="chevronQuestion"><i class="fa-solid fa-chevron-up"></i></span></li>
                    <li class="dropDownQuestion"><a href="{{ route('question.index') }}"><i class="fa-regular fa-circle"></i>{{ __('messages.Question') }}</a></li>
                    <li class="dropDownQuestion"><a href="{{ route('question.index') }}"><i class="fa-regular fa-circle"></i>{{ __('messages.Word') }}</a></li>
                    <li class="dropDownQuestion"><a href="{{ route('question.index') }}"><i class="fa-regular fa-circle"></i>{{ __('messages.Excel') }}</a></li>
                    <li class="titleMenu">{{ __('messages.User Interface') }}</li>
                    <li class="bg-grey"><a href="javascript:void(0)" id="code"><i class="fa-brands fa-codepen"></i>{{ __('messages.Code') }}</a><span id="codeChevron"><i class="fa-solid fa-chevron-up"></i></span></li>
                    <li class="dropDownCode"><a href="{{ route('component.index') }}"><i class="fa-solid fa-expand"></i>{{ __('messages.Component') }}</a></li>
                    <li class="dropDownCode"><a href="{{ route('color.index') }}"><i class="fa-solid fa-fill"></i>{{ __('messages.Color') }}</a></li>
                    <li class="bg-grey"><a href="javascript:void(0)" id="FrontEnd"><i class="fa-brands fa-codepen"></i>{{ __('messages.Front-end') }}</a><span id="chevronFrontEnd"><i class="fa-solid fa-chevron-up"></i></span></li>
                    <li class="dropDownFrontEnd"><a href="#"><i class="fa-regular fa-circle"></i>HTML</a></li>
                    <li class="dropDownFrontEnd"><a href="#"><i class="fa-regular fa-circle"></i>CSS</a></li>
                    <li class="dropDownFrontEnd"><a href="#"><i class="fa-regular fa-circle"></i>Javascript</a></li>
                    <li class="dropDownFrontEnd"><a href="#"><i class="fa-regular fa-circle"></i>VueJS</a></li>
                    <li class="dropDownFrontEnd"><a href="#"><i class="fa-regular fa-circle"></i>ReactJS</a></li>
                    <li class="dropDownFrontEnd"><a href="#"><i class="fa-regular fa-circle"></i>JqueryJS</a></li>
                    <li class="dropDownFrontEnd"><a href="#"><i class="fa-regular fa-circle"></i>Angular</a></li>
                    <li class="bg-grey"><a href="javascript:void(0)" id="BackEnd"><i class="fa-brands fa-codepen"></i>{{ __('messages.Back-end') }}</a><span id="chevronBackEnd"><i class="fa-solid fa-chevron-up"></i></span></li>
                    <li class="dropDownBackEnd"><a href="#"><i class="fa-regular fa-circle"></i>PHP</a></li>
                    <li class="dropDownBackEnd"><a href="#"><i class="fa-regular fa-circle"></i>Laravel</a></li>
                    <li class="dropDownBackEnd"><a href="#"><i class="fa-regular fa-circle"></i>NodeJS</a></li>
                    <li class="dropDownBackEnd"><a href="#"><i class="fa-regular fa-circle"></i>C#</a></li>
                    <li class="dropDownBackEnd"><a href="#"><i class="fa-regular fa-circle"></i>Java</a></li>
                    <li class="bg-grey"><a href="javascript:void(0)" id="Sql"><i class="fa-brands fa-codepen"></i>{{ __('messages.SQL') }}</a><span id="chevronSql"><i class="fa-solid fa-chevron-up"></i></span></li>
                    <li class="dropDownSql"><a href="#"><i class="fa-regular fa-circle"></i>FTP</a></li>
                    <li class="dropDownSql"><a href="#"><i class="fa-regular fa-circle"></i>UBUTU</a></li>
                    <li class="dropDownSql"><a href="#"><i class="fa-regular fa-circle"></i>MySQL</a></li>
                    <li class="dropDownSql"><a href="#"><i class="fa-regular fa-circle"></i>SQLServer</a></li>
                    <li class="dropDownSql"><a href="#"><i class="fa-regular fa-circle"></i>Mongo</a></li>
                    <li class="dropDownSql"><a href="#"><i class="fa-regular fa-circle"></i>MySqlWorkBench</a></li>
                    <li><a href="#"><i class="fa-solid fa-triangle-exclamation"></i>{{ __('messages.Error') }}</a></li>
                </ul>
            </div>
            <div class="Container">
                <div class="cod-top-header">
                    <div class="top-nav-here">
                        <div class="toggle">
                            <i class="fa-solid fa-bars"></i>
                        </div>
                        <div class="language-selector">
                            @php $locale = session()->get('locale'); @endphp
                            @php $locale = session()->get('locale'); @endphp
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    @switch($locale)
                                        @case('vi')
                                        <img src="{{asset('assets/images/vietnam.jpg')}}" width="25px"> Việt Nam
                                        @break
                                        @case('en')
                                        <img src="{{asset('assets/images/english.jpg')}}" width="25px"> English
                                        @break
                                        @default
                                        <img src="{{asset('assets/images/japan.jpg')}}" width="25px"> Japan
                                    @endswitch
                                    <span class="caret"></span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="lang/vi"><img src="{{asset('assets/images/vietnam.jpg')}}" width="25px"> Việt Nam</a>
                                    <a class="dropdown-item" href="lang/en"><img src="{{asset('assets/images/english.jpg')}}" width="25px"> English</a>
                                    <a class="dropdown-item" href="lang/ja"><img src="{{asset('assets/images/japan.jpg')}}" width="25px"> Japan</a>
                                </div>
                            </li>
                        </div>
                        <div class="star">
                            <div class="d-flex">
                                <i class="fa-solid fa-star color-yellow"></i>
                                {{ __('messages.Stars') }}
                            </div>
                            <div class="form-star">
                                <div class="triangleleft"></div>
                                <div class="list-star">
                                    <div class="star-id">
                                        <img src="./a-path.gif" alt="" srcset="">
                                    </div>
                                    <div class="star-info">
                                        học sinh vô bổ của tôi không biết là html css javascript
                                    </div> 
                                </div>
                                <div class="list-star">
                                    <div class="star-id">
                                        <img src="./a-path.gif" alt="" srcset="">
                                    </div>
                                    <div class="star-info">
                                        học sinh vô bổ của tôi không biết là html css javascript
                                    </div> 
                                </div>
                                <div class="list-star">
                                    <div class="star-id">
                                        <img src="./a-path.gif" alt="" srcset="">
                                    </div>
                                    <div class="star-info">
                                        học sinh vô bổ của tôi không biết là html css javascript
                                    </div> 
                                </div>
                            </div>
                        </div>
                        <div class="star">
                            <div class="d-flex">
                                <i class="fa-solid fa-envelope"></i>
                                {{ __('messages.Email') }}
                            </div>
                            <div class="form-star">
                                <div class="triangleleft"></div>
                                <div class="list-star">
                                    <div class="star-id">
                                        <img src="./a-path.gif" alt="" srcset="">
                                    </div>
                                    <div class="star-info">
                                        học sinh vô bổ của tôi không biết là html css javascript
                                    </div> 
                                </div>
                                <div class="list-star">
                                    <div class="star-id">
                                        <img src="./a-path.gif" alt="" srcset="">
                                    </div>
                                    <div class="star-info">
                                        học sinh vô bổ của tôi không biết là html css javascript
                                    </div> 
                                </div>
                                <div class="list-star">
                                    <div class="star-id">
                                        <img src="./a-path.gif" alt="" srcset="">
                                    </div>
                                    <div class="star-info">
                                        học sinh vô bổ của tôi không biết là html css javascript
                                    </div> 
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-search">
                        <form action="">
                            <input type="text">
                            <div class="box-icon-search">
                                <i class="fa-solid fa-magnifying-glass"></i>
                            </div>
                        </form>
                    </div>
                    <div class="service">
                        <div class="lightDask">
                            <button id="toggle-mode"><i class="fa-solid fa-circle"></i></button>
                        </div>
                        <div class="notify">
                            <div class="d-flex">
                                <i class="fa-solid fa-bell"></i>
                                {{ __('messages.Notification') }}
                            </div>
                            <div class="form-notify">
                                <div class="triangle"></div>
                                <div class="list-notify">
                                    <div class="notify-id">
                                        <img src="./a-path.gif" alt="" srcset="">
                                    </div>
                                    <div class="notify-info">
                                        học sinh vô bổ của tôi không biết là html css javascript
                                    </div> 
                                </div>
                                <div class="list-notify">
                                    <div class="notify-id">
                                        <img src="./a-path.gif" alt="" srcset="">
                                    </div>
                                    <div class="notify-info">
                                        học sinh vô bổ của tôi không biết là html css javascript
                                    </div> 
                                </div>
                                <div class="list-notify">
                                    <div class="notify-id">
                                        <img src="./a-path.gif" alt="" srcset="">
                                    </div>
                                    <div class="notify-info">
                                        học sinh vô bổ của tôi không biết là html css javascript
                                    </div> 
                                </div>
                            </div>
                        </div>
                        <div class="setting">
                            <a href="#" class="d-flex">
                                <i class="fa-solid fa-gear"></i>
                                {{ __('messages.Settings') }}
                            </a>
                            <div class="form-setting">
                                <div class="triangle"></div>
                                <div class="list-setting">
                                    <div class="setting-info">
                                        <a href="#">{{ __('messages.Personal Informations') }}</a>
                                    </div> 
                                </div>
                                <div class="list-setting">
                                    <div class="setting-info">
                                        <a href="">{{ __('messages.Change Password') }}</a>
                                    </div> 
                                </div>
                                <div class="list-setting">
                                    <div class="setting-info">
                                        <a href="">{{ __('messages.Change Wallpaper') }}</a>
                                    </div> 
                                </div>
                                <div class="list-setting">
                                    <div class="setting-info">
                                        <a href="">{{ __('messages.Add User') }}</a>
                                    </div> 
                                </div>
                            </div>
                        </div>
                        <div class="logOut">
                            <a href=""> {{ __('messages.Log out') }}</a>
                        </div>
                    </div>
                </div>
                <div class="dashboard-content">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>
       
    <script src="{{ asset('js/index.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dompurify/2.3.10/purify.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
</body>
</html>