@extends('layoutPages')

@section('title', 'Home Page')

@section('content')
<div class="mt-120">
    <div class="breadcrumb flat">
        <a href="/" class="active">HOME</a>
        <a href="#">New Experience</a>
        <a href="#">{{ $interfaces->id }} {{ $interfaces->title }}</a>
    </div>
    <h1>{{ $interfaces->title }}</h1>
    <div class="interfaces-content">
        <div class="interfaces-content-left">
            <div class="interfaces-title">
                <p><i class="fa-solid fa-user"></i> {{ $interfaces->user ? $interfaces->user->full_name : 'Đang cập nhật' }}</p>
                <p><i class="fa-solid fa-calendar-days"></i> {{ $interfaces->created_at }}</p>
                <div class="action-view">
                    <p><i class="fa-solid fa-eye"></i> 200</p>
                    <p><i class="fa-solid fa-thumbs-up"></i> 200</p>
                    <p><i class="fa-solid fa-share"></i> 200</p>
                    <p><i class="fa-solid fa-comment"></i> 200</p>
                </div>
            </div>
            <div class="interfaces-content-left-image">
                <img src="{{ asset($interfaces->image_path) }}" alt="">
            </div>
            <p>
                {!! $interfaces->description !!}
            </p>
        </div>
        <div class="interfaces-content-right">
            <p class="post-interface">Bài viết liên quan</p>
            @foreach($interfaceList as $item)
            <div class="interfaces-content-right-card">
                <div class="interfaces-content-right-card-img">
                    <img src="{{ asset($item->image_path) }}" />
                </div>
                <div class="interfaces-content-right-card-text">
                    <p class="trustTitle">{{ $item->title }}</p>
                    <p>{{ $item->created_at }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

@endsection