@extends('layout')
@section('title', 'Home Page')
@section('content')
<div class="blog-container">
    <div class="blog-content">
        <div class="entry-crumbs">
            <span><a title="" class="entry-crumb" href="/">Home</a></span> 
            <i class="fa-solid fa-chevron-right"></i> 
            <span><a title="View all posts in JavaScript" class="entry-crumb" href="/v1/blog/">JavaScript</a></span> 
            <i class="fa-solid fa-chevron-right"></i>
            <span class="td-bred-no-url-last">{{$news->name}}</span>
        </div>
        <h3 class="entry-title">{{$news->name}}</h3>
        <div class="blog-content-header">
            <button class="view"><i class="fa-solid fa-street-view"></i>  {{ $news->user->full_name}}</button>
            <button class="share"><i class="fa-solid fa-calendar-days"></i>  {{ $news->created_at->format('d-m-Y') }}</button>
        </div>
        <div class="blog-content-image">
            <img src="{{asset($news->image_path)}}" alt="Image">
        </div>
        <div class="blog-content-window">
            <button class="down"><i class="fa-solid fa-download"></i>  {{ __('messages.Down') }}</button>
            <button class="view"><i class="fa-solid fa-street-view"></i>  {{ __('messages.Views') }}</button>
            <button class="share"><i class="fa-regular fa-share-from-square"></i>  {{ __('messages.Shares') }}</button>
        </div>
        <div class="blog-content-news">
            {!!$news->description!!}
        </div>
    </div>
    <div class="blog-aside">
        <div class="list-category-blog">
            <a href="" class="category">{{ __('messages.Traveling') }} <i class="fa-solid fa-plus"></i></a>
            <a href="" class="category">{{ __('messages.Technology') }} <i class="fa-solid fa-plus"></i></a>
            <a href="" class="category">{{ __('messages.Programming') }} <i class="fa-solid fa-plus"></i></a>
            <a href="" class="category">{{ __('messages.Design') }} <i class="fa-solid fa-plus"></i></a>
            <a href="" class="category">{{ __('messages.Fitness') }} <i class="fa-solid fa-plus"></i></a>
            <a href="" class="category">{{ __('messages.Culture') }} <i class="fa-solid fa-plus"></i></a>
            <a href="" class="category">{{ __('messages.Creativity') }} <i class="fa-solid fa-plus"></i></a>
            <a href="" class="category">{{ __('messages.Sports') }} <i class="fa-solid fa-plus"></i></a>
        </div>
        <div class="list-control">
            <h3>All List</h3>
            <p>{{ __('messages.Total views:') }} 50 views</p>
            <p>{{ __('messages.Total downloads:') }} 50 views</p>
            <p>{{ __('messages.Total shares:') }} 50 views</p>
        </div>
    </div>
</div>
<script>
    window.onload = function() {
        // Kiểm tra URL hiện tại
        if (window.location.pathname.startsWith('/v1/blog/')) {
            var containerBody = document.querySelector('.container-body');
            if (containerBody) {
                containerBody.classList.add('overflow-auto');
            }
        }
    }
</script>
@endsection