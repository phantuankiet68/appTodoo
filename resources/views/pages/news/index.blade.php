@extends('layout')
@section('title', 'Home Page')
@section('content')
<div class="blog-container">
    <div class="main-article">
        @if($news_first && $news_first->image_path)
            <img src="{{asset($news_first->image_path)}}" alt="Image">
        @else
            <p>No image available</p>
        @endif
        <a href="{{ route('show_home.news', ['id' => $news_first->id]) }}">
            <h1>{{ $news_first->name }}</h1>
        </a>
        <div class="meta">
            <span>{{ $news_first->user->full_name}}</span>
            <span>{{ $news_first->created_at->format('d-m-Y') }}</span>
        </div>
        @if($news_first->category == 3)
        <div class="view-box">
            <span class="down"><i class="fa-solid fa-download"></i> 4k {{ __('messages.Down') }}</span>
            <span class="view"><i class="fa-solid fa-street-view"></i> 4k {{ __('messages.Views') }}</span>
            <span class="share"><i class="fa-regular fa-share-from-square"></i>  230 {{ __('messages.Shares') }}</span>
        </div>
        @endif
    </div>
    <div class="recent-news">
        <div class="all-news">
            <h2>{{ __('messages.Recent News') }}</h2>
            <a href="#">{{ __('messages.All Recent News') }}</a>
        </div>
        <div class="list-blog no-croll">
            @foreach($news as $item)
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
    </div>
    <div class="blog-aside">
        <div class="search-box">
            <input id="date-input" placeholder="{{ __('messages.Enter date (dd-mm-yyyy)') }}"  type="text">
            <button id="search-btn">
                <i class="fas fa-search"></i>
            </button>
        </div>
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
    const currentPath = window.location.pathname;

    if (currentPath === "/v1/blog") {
        const containerBody = document.querySelector('.container-body');
        if (containerBody) {
            containerBody.classList.add('overflow-auto');
        }
    }
</script>
@endsection