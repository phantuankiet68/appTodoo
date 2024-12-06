@extends('app')

@section('title', 'Home Page')

@section('menu')
    <!-- @if(Auth::check() && $setting && Auth::user()->id == $setting->user_id && $setting->setting == 1)
      
    @endif -->
    <ul class="navSidebar">
                    <div class="title-menu"><span>{{ __('messages.Application') }}</span></div>
                    <li><a class="hoverMenu" href="{{ route('dashboard.index') }}"><div class="subBoxMenu"><i class="fa-solid fa-house"></i> {{ __('messages.Dashboard') }}</div></a></li>
                    <li><a class="hoverMenu" href="{{ route('user.index') }}"><div class="subBoxMenu"><i class="fa-solid fa-gear"></i> {{ __('messages.Settings') }}</div></a></li>
                    <li><a class="hoverMenu" href="{{ route('issue.index') }}"><div class="subBoxMenu"><i class="fa-solid fa-box-tissue"></i> {{ __('messages.Issues') }} </div></a></li>
                    <li><a class="hoverMenu" href="{{ route('cv.index') }}"><div class="subBoxMenu"><i class="fa-regular fa-file"></i> {{ __('messages.Curriculum Vitae') }}</div></a></li>
                    <li><a class="hoverMenu" href="/calendar"><div class="subBoxMenu"><i class="fa-regular fa-calendar"></i> {{ __('messages.Calendar') }}</div></a></li>
                    <div class="title-menu"><span>{{ __('messages.Tasks') }}</span></div>
                    <li class="menu-item">
                        <a class="hoverMenu" href="#"><div class="subBoxMenu"><i class="fa-solid fa-box-tissue"></i> {{ __('messages.Tasks') }} </div>
                            <div class="chevron">
                                <i class="fa-solid fa-chevron-right"></i>
                            </div>
                        </a>
                        <ul class="subSidebar">
                            <li><a href="{{ route('tasks.index') }}"><div class="subBoxMenu"><i class="fa-regular fa-circle"></i> {{ __('messages.Tasks') }}</div></a></li>
                            <li><a href="{{ route('workflows.index') }}"><div class="subBoxMenu"><i class="fa-regular fa-circle"></i> {{ __('messages.Workflow') }}</div></a></li>
                            <li><a href="{{ route('salaries.index') }}"><div class="subBoxMenu"><i class="fa-regular fa-circle"></i> {{ __('messages.Salary') }}</div></a></li>
                            <li><a href="{{ route('expense.index') }}"><div class="subBoxMenu"><i class="fa-regular fa-circle"></i> {{ __('messages.Expenses') }}</div></a></li>
                        </ul>
                    </li>
                    <li class="menu-item">
                        <a class="hoverMenu" href="#"><div class="subBoxMenu"><i class="fa-solid fa-fire"></i> {{ __('messages.Japanese') }} </div>
                            <div class="chevron">
                                <i class="fa-solid fa-chevron-right"></i>
                            </div>
                        </a>
                        <ul class="subSidebar">
                            <li><a href="{{ route('japanese.addJapanese') }}"><div class="subBoxMenu"><i class="fa-regular fa-circle"></i> {{ __('messages.Add New') }}</div></a></li>
                            <li><a href="{{ route('japanese.index') }}"><div class="subBoxMenu"><i class="fa-regular fa-circle"></i> {{ __('messages.Japanese') }}</div></a></li>
                            <li><a href="{{ route('learn_more.index') }}"><div class="subBoxMenu"><i class="fa-regular fa-circle"></i> {{ __('messages.Learn vocabulary') }}</div></a></li>
                        </ul>
                    </li>
                    <li class="menu-item">
                        <a class="hoverMenu" href="#"><div class="subBoxMenu"><i class="fa-solid fa-fire"></i> {{ __('messages.English') }} </div>
                            <div class="chevron">
                                <i class="fa-solid fa-chevron-right"></i>
                            </div>
                        </a>
                        <ul class="subSidebar">
                            <li><a href="{{ route('english.addEnglish') }}"><div class="subBoxMenu"><i class="fa-regular fa-circle"></i> {{ __('messages.Add New') }}</div></a></li>
                            <li><a href="{{ route('english.index') }}"><div class="subBoxMenu"><i class="fa-regular fa-circle"></i> {{ __('messages.English') }}</div></a></li>
                            <li><a href="{{ route('learn_more_english.index') }}"><div class="subBoxMenu"><i class="fa-regular fa-circle"></i> {{ __('messages.Learn vocabulary') }}</div></a></li>
                        </ul>
                    </li>
                    <li class="menu-item">
                        <a class="hoverMenu" href="#"><div class="subBoxMenu"><i class="fa-solid fa-fire"></i> {{ __('messages.Question') }} </div>
                            <div class="chevron">
                                <i class="fa-solid fa-chevron-right"></i>
                            </div>
                        </a>
                        <ul class="subSidebar">
                            <li><a href="{{ route('question.index') }}"><div class="subBoxMenu"><i class="fa-regular fa-circle"></i> {{ __('messages.Question') }}</div></a></li>
                            <li><a href="{{ route('question.index') }}"><div class="subBoxMenu"><i class="fa-regular fa-circle"></i> {{ __('messages.Word') }}</div></a></li>
                            <li><a href="{{ route('question.index') }}"><div class="subBoxMenu"><i class="fa-regular fa-circle"></i> {{ __('messages.Excel') }}</div></a></li>
                        </ul>
                    </li>
                    <div class="title-menu"><span>{{ __('messages.User Interface') }}</span></div>
                    <li><a class="hoverMenu" href="{{ route('test_code.index') }}"><div class="subBoxMenu"><i class="fa-solid fa-check-to-slot"></i> {{ __('messages.Test code') }}</div></a></li>
                    <li class="menu-item">
                        <a class="hoverMenu" href="#"><div class="subBoxMenu"><i class="fa-brands fa-codepen"></i> {{ __('messages.Code') }} </div>
                            <div class="chevron">
                                <i class="fa-solid fa-chevron-right"></i>
                            </div>
                        </a>
                        <ul class="subSidebar">
                            <li><a href="{{ route('component.index') }}"><div class="subBoxMenu"><i class="fa-regular fa-circle"></i> {{ __('messages.Component') }}</div></a></li>
                            <li><a href="{{ route('colors.index') }}"><div class="subBoxMenu"><i class="fa-regular fa-circle"></i> {{ __('messages.Color') }}</div></a></li>
                        </ul>
                    </li>
                    <li class="menu-item">
                        <a class="hoverMenu" href="#"><div class="subBoxMenu"><i class="fa-brands fa-codepen"></i> {{ __('messages.Front-end') }} </div>
                            <div class="chevron">
                                <i class="fa-solid fa-chevron-right"></i>
                            </div>
                        </a>
                        <ul class="subSidebar">
                            <li><a href="{{ route('codes.index') }}"><div class="subBoxMenu"><i class="fa-regular fa-circle"></i> {{ __('messages.HTML/CSS') }}</div></a></li>
                            <li><a href="{{ route('javascripts.index') }}"><div class="subBoxMenu"><i class="fa-regular fa-circle"></i> {{ __('messages.Javascript') }}</div></a></li>
                            <li><a href="{{ route('vuejs.index') }}"><div class="subBoxMenu"><i class="fa-regular fa-circle"></i> {{ __('messages.VueJS') }}</div></a></li>
                            <li><a href="{{ route('reactjs.index') }}"><div class="subBoxMenu"><i class="fa-regular fa-circle"></i> {{ __('messages.ReactJS') }}</div></a></li>
                            <li><a href="{{ route('component.index') }}"><div class="subBoxMenu"><i class="fa-regular fa-circle"></i> {{ __('messages.JqueryJS') }}</div></a></li>
                            <li><a href="{{ route('colors.index') }}"><div class="subBoxMenu"><i class="fa-regular fa-circle"></i> {{ __('messages.Angular') }}</div></a></li>
                        </ul>
                    </li>
                    <li class="menu-item">
                        <a class="hoverMenu" href="#"><div class="subBoxMenu"><i class="fa-brands fa-codepen"></i> {{ __('messages.Back-end') }} </div>
                            <div class="chevron">
                                <i class="fa-solid fa-chevron-right"></i>
                            </div>
                        </a>
                        <ul class="subSidebar">
                            <li><a href="{{ route('codes.index') }}"><div class="subBoxMenu"><i class="fa-regular fa-circle"></i> {{ __('messages.PHP') }}</div></a></li>
                            <li><a href="{{ route('javascripts.index') }}"><div class="subBoxMenu"><i class="fa-regular fa-circle"></i> {{ __('messages.Laravel') }}</div></a></li>
                            <li><a href="{{ route('vuejs.index') }}"><div class="subBoxMenu"><i class="fa-regular fa-circle"></i> {{ __('messages.NodeJS') }}</div></a></li>
                            <li><a href="{{ route('reactjs.index') }}"><div class="subBoxMenu"><i class="fa-regular fa-circle"></i> {{ __('messages.C#') }}</div></a></li>
                            <li><a href="{{ route('component.index') }}"><div class="subBoxMenu"><i class="fa-regular fa-circle"></i> {{ __('messages.JqueryJS') }}</div></a></li>
                            <li><a href="{{ route('colors.index') }}"><div class="subBoxMenu"><i class="fa-regular fa-circle"></i> {{ __('messages.Java') }}</div></a></li>
                        </ul>
                    </li>
                    <li class="menu-item">
                        <a class="hoverMenu" href="#"><div class="subBoxMenu"><i class="fa-brands fa-codepen"></i> {{ __('messages.SQL') }} </div>
                            <div class="chevron">
                                <i class="fa-solid fa-chevron-right"></i>
                            </div>
                        </a>
                        <ul class="subSidebar">
                            <li><a href="{{ route('codes.index') }}"><div class="subBoxMenu"><i class="fa-regular fa-circle"></i> {{ __('messages.FTP') }}</div></a></li>
                            <li><a href="{{ route('javascripts.index') }}"><div class="subBoxMenu"><i class="fa-regular fa-circle"></i> {{ __('messages.UBUTU') }}</div></a></li>
                            <li><a href="{{ route('vuejs.index') }}"><div class="subBoxMenu"><i class="fa-regular fa-circle"></i> {{ __('messages.MySQL') }}</div></a></li>
                            <li><a href="{{ route('reactjs.index') }}"><div class="subBoxMenu"><i class="fa-regular fa-circle"></i> {{ __('messages.SQLServer') }}</div></a></li>
                            <li><a href="{{ route('component.index') }}"><div class="subBoxMenu"><i class="fa-regular fa-circle"></i> {{ __('messages.Mongo') }}</div></a></li>
                            <li><a href="{{ route('colors.index') }}"><div class="subBoxMenu"><i class="fa-regular fa-circle"></i> {{ __('messages.MySqlWorkBench') }}</div></a></li>
                        </ul>
                    </li>
                    <li><a class="hoverMenu" href="/calendar"><div class="subBoxMenu"><i class="fa-regular fa-calendar"></i> {{ __('messages.Error') }}</div></a></li>
                </ul>
@endsection