@extends('layoutPages')

@section('title', 'Home Page')

@section('content')
<div class="mt-120">
    <div class="breadcrumb flat">
        <a href="/" class="active">{{ __('messages.Home') }}</a>
        <a href="{{ route('new_experience.list') }}">{{ __('messages.New Experience') }}</a>
        <a href="#">{{ $interfaces->id }} {{ $interfaces->title }}</a>
    </div>
    <h1>{{ $interfaces->title }}</h1>
    <div class="interfaces-content">
        <div class="interfaces-content-left">
            <div class="interfaces-title">
                <p><i class="fa-solid fa-user"></i> {{ $interfaces->user ? $interfaces->user->full_name : __('messages.Updating') }}</p>
                <p><i class="fa-solid fa-calendar-days"></i> {{ $interfaces->created_at }}</p>
                <div class="action-view">
                    <p><i class="fa-solid fa-eye"></i> {{ $totalViews }}</p>
                    <form id="likeForm" action="{{ route('store_like.new_experience', $interfaces->id) }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                    <p class="eye-blue" onclick="document.getElementById('likeForm').submit()" style="cursor:pointer;">
                        <i class="fa-solid fa-thumbs-up"></i> {{ $totalLikes }}
                    </p>
                    <form id="shareForm" action="{{ route('store_share.new_experience', $interfaces->id) }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                    <p class="eye-green" onclick="document.getElementById('shareForm').submit()" style="cursor:pointer;">
                        <i class="fa-solid fa-share"></i> {{ $totalShares }}
                    </p>
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
            <p class="post-interface">{{ __('messages.RelatedPosts') }}</p>
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