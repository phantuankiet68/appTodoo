@extends('layoutPages')

@section('title', 'Home Page')

@section('content')
<div class="mt-120">
    <div class="breadcrumb flat">
        <a href="/" class="active">{{ __('messages.Home') }}</a>
        <a href="{{ route('teams.list') }}">{{ __('messages.Team') }}</a>
    </div>
    <div class="list-team">
        @foreach($teams as $item)
        <div class="card-team">
            <div class="box2"></div>
            <div class="card-content">
                <div class="image">
                    <img src="{{ asset($item->image_path) }}" alt="">
                </div>
                <div class="media-icons">
                    <i class="fab fa-facebook"></i>
                    <i class="fab fa-twitter"></i>
                    <i class="fab fa-github"></i>
                </div>
                <div class="name-profession">
                    <span class="name">{{ $item->name }}</span>
                    <span class="profession">{{ $item->level }}</span>
                </div>
                <div class="rating">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <div class="about-name">
                    {!! $item->description !!}
                </div>
                <div class="button b2">
                    <button class="aboutMe">{{ __('messages.Contact Me') }}</button>
                    <button class="hireMe">{{ __('messages.Hire Me') }}</button>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

@endsection