@extends('layout')
@section('title', 'Home Page')
@section('content')
<ol class="breadcrumbs breadcrumbs--two" itemscope itemtype="http://schema.org/BreadcrumbList">
    <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
        <a class="breadcrumb" href="/" itemprop="item">
        <span itemprop="name">
            <i class="fa-solid fa-house"></i>
            <span>Home</span>
        </span>
        </a>
        <meta itemprop="position" content="1" />
    </li>
    <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
        <a class="breadcrumb" href="/v1/blog/" itemprop="item">
        <span itemprop="name">
            <i class="bx bx-news features-item-icon"></i>
            <span>Blog</span>
            </span>
        </a>
        <meta itemprop="position" content="2" />
    </li>
    <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
        <span class="breadcrumb">
        <span itemprop="name">{{$news->name}}</span>
        </span>
        <meta itemprop="position" content="3" />
    </li>
</ol>
<div class="blog-container">
    <div class="blog-content">
        <h3 class="entry-title">{{$news->name}}</h3>
        <div class="blog-content-header">
            <button class="view"><i class="fa-solid fa-street-view"></i>  {{ $news->user->full_name}}</button>
            <button class="share"><i class="fa-solid fa-calendar-days"></i>  {{ $news->created_at->format('d-m-Y') }}</button>
        </div>
        <div class="blog-content-image">
            <img src="{{asset($news->image_path)}}" alt="Image">
        </div>
        @if($news->category == 3)
        <div class="blog-content-window">
            <button class="down"><i class="fa-solid fa-download"></i>  {{ __('messages.Down') }}</button>
            <button class="view"><i class="fa-solid fa-street-view"></i>  {{ __('messages.Views') }}</button>
            <button class="share"><i class="fa-regular fa-share-from-square"></i>  {{ __('messages.Shares') }}</button>
        </div>
        @endif
        <div class="blog-content-news">
            {!!$news->description!!}
        </div>
    </div>
    <div class="blog-aside">
        <div class="all-news">
            <h2>{{ __('messages.Recent News') }}</h2>
            <a href="#">{{ __('messages.All Recent News') }}</a>
        </div>
        <div class="list-blog no-croll">
            @foreach($new as $item)
            <div class="blog-item">
                <a href="{{ route('show_home.news', ['id' => $item->id]) }}">
                    <div class="blog-item-image">
                        <img src="{{asset($item->image_path)}}" />
                    </div>
                    <div class="blog-item-content">
                        @if($item->category == 1)
                            <div class="category travel">{{ __('messages.Traveling') }} <span>{{ $item->created_at->format('d-m-Y') }}</span></div>
                        @elseif($item->category == 2)
                            <div class="category technology">{{ __('messages.Technology') }} <span>{{ $item->created_at->format('d-m-Y') }}</span></div>
                        @elseif($item->category == 3)
                            <div class="category programming">{{ __('messages.Programming') }} <span>{{ $item->created_at->format('d-m-Y') }}</span></div>
                        @elseif($item->category == 4)
                            <div class="category design">{{ __('messages.Design') }} <span>{{ $item->created_at->format('d-m-Y') }}</span></div>
                        @elseif($item->category == 5)
                            <div class="category fitness">{{ __('messages.Fitness') }} <span>{{ $item->created_at->format('d-m-Y') }}</span></div>
                        @elseif($item->category == 6)
                            <div class="category culture">{{ __('messages.Culture') }} <span>{{ $item->created_at->format('d-m-Y') }}</span></div>
                        @elseif($item->category == 7)
                            <div class="category creativity">{{ __('messages.Creativity') }} <span>{{ $item->created_at->format('d-m-Y') }}</span></div>
                        @else
                            <div class="category sports">{{ __('messages.Sports') }} <span>{{ $item->created_at->format('d-m-Y') }}</span></div>
                        @endif
                        <h3>{{ $item->name}}</h3>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
        <div class="list-category-blog mt-30">
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
    document.addEventListener('DOMContentLoaded', () => {
        const link = document.querySelector('.all-news a[href="#"]');
        const listBlog = document.querySelector('.list-blog');

        if (link && listBlog) {
        link.addEventListener('click', (event) => {
            event.preventDefault();
            listBlog.classList.toggle('croll');
        });
        }
    });
    window.onload = function() {
        if (window.location.pathname.startsWith('/v1/blog/')) {
            var containerBody = document.querySelector('.container-body');
            if (containerBody) {
                containerBody.classList.add('overflow-auto');
            }
        }
    }
</script>
@endsection