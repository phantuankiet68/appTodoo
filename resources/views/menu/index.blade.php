@extends('app')

@section('title', 'Home Page')

@section('menu')
    <li>
        @if(Auth::check() && $setting && Auth::user()->id == $setting->user_id && $setting->setting == 1)
            <a class="hoverMenu" href="{{ route('dashboard.index') }}">
                <div class="subBoxMenu">
                    <i class="fa-solid fa-house"></i> {{ __('messages.Dashboard') }}
                </div>
            </a>
        @endif
    </li>
@endsection