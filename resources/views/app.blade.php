<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/media.css') }}">
    <link rel="stylesheet" href="{{ asset('css/model.css') }}">
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://cdn.ckeditor.com/ckeditor5/37.0.0/classic/ckeditor.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.7.0/styles/github-dark.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.7.0/highlight.min.js"></script>
    <script>hljs.highlightAll();</script>
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/images//logo-website.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/images//logo-website.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/images//logo-website.png') }}">
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
                <ul class="navSidebar">
                    <li class="menu-item">
                        <a class="hoverMenu" href="#"><div class="subBoxMenu"><i class="fa-solid fa-house-chimney-window"></i> {{ __('messages.Home') }} </div>
                            <div class="chevron">
                                <i class="fa-solid fa-chevron-right"></i>
                            </div>
                        </a>
                        <ul class="subSidebar">
                            <li><a href="{{ route('news.index') }}"><div class="subBoxMenu"><i class="fa-solid fa-diamond"></i> News</div></a></li>
                            <li><a href="{{ route('project.index') }}"><div class="subBoxMenu"><i class="fa-solid fa-diamond"></i> Project</div></a></li>
                            <li><a href="{{ route('teams.index') }}"><div class="subBoxMenu"><i class="fa-solid fa-diamond"></i> Team</div></a></li>
                            <li><a href="{{ route('documents.index') }}"><div class="subBoxMenu"><i class="fa-solid fa-diamond"></i> Document</div></a></li>
                            <li><a href="{{ route('interfaces.index') }}"><div class="subBoxMenu"><i class="fa-solid fa-diamond"></i> Interface</div></a></li>
                            <li><a href="{{ route('wikis.index') }}"><div class="subBoxMenu"><i class="fa-solid fa-diamond"></i> Wiki</div></a></li>
                            <li><a href="{{ route('blogs.index') }}"><div class="subBoxMenu"><i class="fa-solid fa-diamond"></i> {{ __('messages.Blog') }}</div></a></li>
                            <li><a href="{{ route('products.index') }}"><div class="subBoxMenu"><i class="fa-solid fa-diamond"></i> Product</div></a></li>
                        </ul>
                    </li>
                    <div class="title-menu"><span>{{ __('messages.Application') }}</span></div>
                    <li><a class="hoverMenu" href="{{ route('dashboard.index') }}"><div class="subBoxMenu"><i class="fa-solid fa-house"></i> {{ __('messages.Dashboard') }}</div></a></li>
                    @if($can_view_setting)
                    <li><a class="hoverMenu" href="{{ route('user.index') }}"><div class="subBoxMenu"><i class="fa-solid fa-gear"></i> {{ __('messages.Settings') }}</div></a></li>
                    @endif
                    <li><a class="hoverMenu" href="{{ route('information.index') }}"><div class="subBoxMenu"><i class="fa-regular fa-message"></i> {{ __('messages.Information') }}</div></a></li>
                    @if($can_view_posts)
                    <li><a class="hoverMenu" href="{{ route('chat.index') }}"><div class="subBoxMenu"><i class="fa-regular fa-file"></i> {{ __('messages.Posts') }}</div></a></li>
                    @endif
                    @if($can_view_chat)
                    <li><a class="hoverMenu" href="{{ route('message.index') }}"><div class="subBoxMenu"><i class="fa-regular fa-message"></i> {{ __('messages.Chat') }}</div></a></li>
                    @endif
                    <div class="title-menu"><span>{{ __('messages.Tasks') }}</span></div>
                    @if($can_view_issue)
                    <li class="menu-item">
                        <a class="hoverMenu" href="javascript:void(0)"><div class="subBoxMenu"><i class="fa-solid fa-box-tissue"></i> {{ __('messages.Tasks') }} </div>
                            <div class="chevron">
                                <i class="fa-solid fa-chevron-right"></i>
                            </div>
                        </a>
                        <ul class="subSidebar">
                                <li>
                                    <a class="hoverMenu" href="{{ route('issue.index') }}">
                                        <div class="subBoxMenu">
                                            <i class="fa-solid fa-box-tissue"></i> {{ __('messages.Issues') }}
                                        </div>
                                    </a>
                                </li>
                            @if($can_view_task)
                            <li><a href="{{ route('tasks.index') }}"><div class="subBoxMenu"><i class="fa-regular fa-circle"></i> {{ __('messages.Tasks') }}</div></a></li>
                            <li><a href="{{ route('workflows.index') }}"><div class="subBoxMenu"><i class="fa-regular fa-circle"></i> {{ __('messages.Workflow') }}</div></a></li>
                            @endif
                        </ul>
                    </li>
                    @endif
                    @if($can_view_japanese)
                    <li class="menu-item">
                        <a class="hoverMenu" href="#"><div class="subBoxMenu"><i class="fa-solid fa-fire"></i> {{ __('messages.Japanese') }} </div>
                            <div class="chevron">
                                <i class="fa-solid fa-chevron-right"></i>
                            </div>
                        </a>
                        <ul class="subSidebar">
                            @if($can_view_add_japanese)
                            <li><a href="{{ route('japanese.addJapanese') }}"><div class="subBoxMenu"><i class="fa-regular fa-circle"></i> {{ __('messages.Add New') }}</div></a></li>
                            @endif
                            <li><a href="{{ route('japanese.index') }}"><div class="subBoxMenu"><i class="fa-regular fa-circle"></i> {{ __('messages.Japanese') }}</div></a></li>
                            <li><a href="{{ route('learn_more_test.index') }}"><div class="subBoxMenu"><i class="fa-regular fa-circle"></i> {{ __('messages.Learn vocabulary') }}</div></a></li>
                            @if($can_view_learn_japanese)
                            <li><a href="{{ route('learn_more.index') }}"><div class="subBoxMenu"><i class="fa-regular fa-circle"></i> {{ __('messages.Learn vocabulary') }}</div></a></li>
                            @endif
                        </ul>
                    </li>
                    @endif
                    @if($can_view_english)
                    <li class="menu-item">
                        <a class="hoverMenu" href="#"><div class="subBoxMenu"><i class="fa-solid fa-fire"></i> {{ __('messages.English') }} </div>
                            <div class="chevron">
                                <i class="fa-solid fa-chevron-right"></i>
                            </div>
                        </a>
                        <ul class="subSidebar">
                            @if($can_view_add_english)
                            <li><a href="{{ route('english.addEnglish') }}"><div class="subBoxMenu"><i class="fa-regular fa-circle"></i> {{ __('messages.Add New') }}</div></a></li>
                            @endif
                            <li><a href="{{ route('english.index') }}"><div class="subBoxMenu"><i class="fa-regular fa-circle"></i> {{ __('messages.English') }}</div></a></li>
                            @if($can_view_learn_english)
                            <li><a href="{{ route('learn_more_english.index') }}"><div class="subBoxMenu"><i class="fa-regular fa-circle"></i> {{ __('messages.Learn vocabulary') }}</div></a></li>
                            @endif
                        </ul>
                    </li>
                    @endif
                    @if($can_view_question)
                    <li class="menu-item">
                        <a class="hoverMenu" href="#"><div class="subBoxMenu"><i class="fa-solid fa-fire"></i> {{ __('messages.Question') }} </div>
                            <div class="chevron">
                                <i class="fa-solid fa-chevron-right"></i>
                            </div>
                        </a>
                        <ul class="subSidebar">
                            <li><a href="{{ route('question.index') }}"><div class="subBoxMenu"><i class="fa-regular fa-circle"></i> {{ __('messages.Question') }}</div></a></li>
                            @if($can_view_word)
                            <li><a href="{{ route('question.index') }}"><div class="subBoxMenu"><i class="fa-regular fa-circle"></i> {{ __('messages.Word') }}</div></a></li>
                            @endif
                            @if($can_view_excel)
                            <li><a href="{{ route('question.index') }}"><div class="subBoxMenu"><i class="fa-regular fa-circle"></i> {{ __('messages.Excel') }}</div></a></li>
                            @endif
                        </ul>
                    </li>
                    @endif
                    <div class="title-menu"><span>{{ __('messages.User Interface') }}</span></div>
                    @if($can_view_test_code)
                    <li><a class="hoverMenu" href="{{ route('test_code.index') }}"><div class="subBoxMenu"><i class="fa-solid fa-check-to-slot"></i> {{ __('messages.Test code') }}</div></a></li>
                    @endif
                    @if($can_view_component)
                    <li class="menu-item">
                        <a class="hoverMenu" href="#"><div class="subBoxMenu"><i class="fa-brands fa-codepen"></i> {{ __('messages.Code') }} </div>
                            <div class="chevron">
                                <i class="fa-solid fa-chevron-right"></i>
                            </div>
                        </a>
                        <ul class="subSidebar">
                            <li><a href="{{ route('component.index') }}"><div class="subBoxMenu"><i class="fa-regular fa-circle"></i> {{ __('messages.Component') }}</div></a></li>
                            @if($can_view_color)
                            <li><a href="{{ route('colors.index') }}"><div class="subBoxMenu"><i class="fa-regular fa-circle"></i> {{ __('messages.Color') }}</div></a></li>
                            @endif
                        </ul>
                    </li>
                    @endif
                    @if($can_view_html)
                    <li class="menu-item">
                        <a class="hoverMenu" href="#"><div class="subBoxMenu"><i class="fa-brands fa-codepen"></i> {{ __('messages.Front-end') }} </div>
                            <div class="chevron">
                                <i class="fa-solid fa-chevron-right"></i>
                            </div>
                        </a>
                        <ul class="subSidebar">
                            <li><a href="{{ route('codes.index') }}"><div class="subBoxMenu"><i class="fa-regular fa-circle"></i> {{ __('messages.HTML/CSS') }}</div></a></li>
                            @if($can_view_angular)
                            <li><a href="{{ route('colors.index') }}"><div class="subBoxMenu"><i class="fa-regular fa-circle"></i> {{ __('messages.Angular') }}</div></a></li>
                            @endif
                        </ul>
                    </li>
                    @endif
                    @if($can_view_php)
                    <li class="menu-item">
                        <a class="hoverMenu" href="#"><div class="subBoxMenu"><i class="fa-brands fa-codepen"></i> {{ __('messages.Back-end') }} </div>
                            <div class="chevron">
                                <i class="fa-solid fa-chevron-right"></i>
                            </div>
                        </a>
                        <ul class="subSidebar">
                            <li><a href="{{ route('codes.index') }}"><div class="subBoxMenu"><i class="fa-regular fa-circle"></i> {{ __('messages.PHP') }}</div></a></li>
                            @if($can_view_javascript)
                            <li><a href="{{ route('colors.index') }}"><div class="subBoxMenu"><i class="fa-regular fa-circle"></i> {{ __('messages.Java') }}</div></a></li>
                            @endif
                        </ul>
                    </li>
                    @endif
                    @if($can_view_ftp)
                    <li class="menu-item">
                        <a class="hoverMenu" href="#"><div class="subBoxMenu"><i class="fa-brands fa-codepen"></i> {{ __('messages.SQL') }} </div>
                            <div class="chevron">
                                <i class="fa-solid fa-chevron-right"></i>
                            </div>
                        </a>
                        <ul class="subSidebar">
                            <li><a href="{{ route('codes.index') }}"><div class="subBoxMenu"><i class="fa-regular fa-circle"></i> {{ __('messages.FTP') }}</div></a></li>
                            @if($can_view_mysqlworkbench)
                            <li><a href="{{ route('colors.index') }}"><div class="subBoxMenu"><i class="fa-regular fa-circle"></i> {{ __('messages.MySqlWorkBench') }}</div></a></li>
                            @endif
                        </ul>
                    </li>
                    @endif
                    @if($can_view_error)
                    <li><a class="hoverMenu" href="/calendar"><div class="subBoxMenu"><i class="fa-regular fa-calendar"></i> {{ __('messages.Error') }}</div></a></li>
                    @endif
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
                                    <a class="dropdown-item" href="lang/ja"><img src="{{asset('assets/images/japan.jpg')}}" width="25px"> Japan</a>
                                    <a class="dropdown-item" href="lang/en"><img src="{{asset('assets/images/english.jpg')}}" width="25px"> English</a>
                                </div>
                            </li>
                        </div>
                        <div class="star">
                            <div class="d-flex">
                                <i class="fa-solid fa-star color-yellow"></i>
                                Stars
                            </div>
                            <div class="form-star">
                                <div class="triangleleft"></div>
                                <div class="list-star">
                                    <div class="star-id">
                                        <img src="{{asset('assets/images/english.jpg')}}" alt="" srcset="">
                                    </div>
                                    <div class="star-info">
                                        học sinh vô bổ của tôi không biết là html css javascript
                                    </div> 
                                </div>
                                <div class="list-star">
                                    <div class="star-id">
                                        <img src="{{asset('assets/images/english.jpg')}}" alt="" srcset="">
                                    </div>
                                    <div class="star-info">
                                        học sinh vô bổ của tôi không biết là html css javascript
                                    </div> 
                                </div>
                                <div class="list-star">
                                    <div class="star-id">
                                        <img src="{{asset('assets/images/english.jpg')}}" alt="" srcset="">
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
                                Email
                            </div>
                            <div class="form-star">
                                <div class="triangleleft"></div>
                                <div class="list-star">
                                    <div class="star-id">
                                        <img src="{{asset('assets/images/english.jpg')}}" alt="" srcset="">
                                    </div>
                                    <div class="star-info">
                                        học sinh vô bổ của tôi không biết là html css javascript
                                    </div> 
                                </div>
                                <div class="list-star">
                                    <div class="star-id">
                                        <img src="{{asset('assets/images/english.jpg')}}" alt="" srcset="">
                                    </div>
                                    <div class="star-info">
                                        học sinh vô bổ của tôi không biết là html css javascript
                                    </div> 
                                </div>
                                <div class="list-star">
                                    <div class="star-id">
                                        <img src="{{asset('assets/images/english.jpg')}}" alt="" srcset="">
                                    </div>
                                    <div class="star-info">
                                        học sinh vô bổ của tôi không biết là html css javascript
                                    </div> 
                                </div>
                            </div>
                        </div>
                    </div>
                
                    <div class="service">
                        <div class="lightDask">
                            <button id="toggle-mode"><i class="fa-solid fa-circle"></i></button>
                        </div>
                        <div class="notify">
                            <div class="d-flex">
                                <i class="fa-solid fa-bell"></i>
                                Notification
                            </div>
                            <div class="form-notify">
                                <div class="triangle"></div>
                                <div class="list-notify">
                                    <div class="notify-id">
                                        <img src="{{asset('assets/images/english.jpg')}}" alt="" srcset="">
                                    </div>
                                    <div class="notify-info">
                                        học sinh vô bổ của tôi không biết là html css javascript
                                    </div> 
                                </div>
                                <div class="list-notify">
                                    <div class="notify-id">
                                        <img src="{{asset('assets/images/english.jpg')}}" alt="" srcset="">
                                    </div>
                                    <div class="notify-info">
                                        học sinh vô bổ của tôi không biết là html css javascript
                                    </div> 
                                </div>
                                <div class="list-notify">
                                    <div class="notify-id">
                                        <img src="{{asset('assets/images/english.jpg')}}" alt="" srcset="">
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
                                Settings
                            </a>
                            <div class="form-setting">
                                <div class="triangle"></div>
                                <div class="list-setting">
                                    <div class="setting-info">
                                        <a href="#">Personal Informations</a>
                                    </div> 
                                </div>
                                <div class="list-setting">
                                    <div class="setting-info">
                                        <a href="">Change Password</a>
                                    </div> 
                                </div>
                                <div class="list-setting">
                                    <div class="setting-info">
                                        <a href="">Change Wallpaper</a>
                                    </div> 
                                </div>
                                <div class="list-setting">
                                    <div class="setting-info">
                                        <a href="">Add User</a>
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
    <script src="{{ asset('js/services.js') }}"></script>
    <script src="{{ asset('js/pages.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dompurify/2.3.10/purify.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
</body>
</html>