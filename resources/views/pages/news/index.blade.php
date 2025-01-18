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
</ol>
<div class="blog-container">
    <div class="main-article">
    @if($news_first)
        <img src="{{asset($news_first->image_path)}}" alt="Image">
        <a href="{{ route('show_home.news', ['id' => $news_first->id]) }}">
            <h1>{{ $news_first->name }}</h1>
        </a>
        <div class="meta">
            <span>{{ $news_first->user->full_name}}</span>
            <span>{{ $news_first->created_at->format('d-m-Y') }}</span>
        </div>
        <div class="view-box">
            @if($news_first->category == 3)
                <span class="down"><i class="fa-solid fa-download"></i> 4k {{ __('messages.Down') }}</span>
            @endif
            <span class="view"><i class="fa-solid fa-street-view"></i> 4k {{ __('messages.Views') }}</span>
            <span class="share"><i class="fa-regular fa-share-from-square"></i>  230 {{ __('messages.Shares') }}</span>
        </div>
    @else
        <p class="not-found-search">{{ __('messages.No results found for the keyword') }}</p>
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
        
        <form method="GET" action="{{ route('index_home.news') }}">
            <div class="search-box">
                <input id="date-input" name="search_key" placeholder="{{ __('messages.Please enter key.....') }}" type="text">
                <button id="search-btn" type="submit">
                    <i class="fas fa-search"></i>
                </button>
            </div>
            <div class="list-category-blog">
                <a href="#" class="category" data-category="1">{{ __('messages.Traveling') }} <i class="fa-solid fa-plus"></i></a>
                <a href="#" class="category" data-category="2">{{ __('messages.Technology') }} <i class="fa-solid fa-plus"></i></a>
                <a href="#" class="category" data-category="3">{{ __('messages.Programming') }} <i class="fa-solid fa-plus"></i></a>
                <a href="#" class="category" data-category="4">{{ __('messages.Design') }} <i class="fa-solid fa-plus"></i></a>
                <a href="#" class="category" data-category="5">{{ __('messages.Fitness') }} <i class="fa-solid fa-plus"></i></a>
                <a href="#" class="category" data-category="6">{{ __('messages.Culture') }} <i class="fa-solid fa-plus"></i></a>
                <a href="#" class="category" data-category="7">{{ __('messages.Creativity') }} <i class="fa-solid fa-plus"></i></a>
                <a href="#" class="category" data-category="8">{{ __('messages.Sports') }} <i class="fa-solid fa-plus"></i></a>
            </div>
            <input type="hidden" name="category" id="selected-category">
        </form>
        <div class="list-control">
            <h3>All List</h3>
            <p>{{ __('messages.Total views:') }} {{$totalViews}} views</p>
            <p>{{ __('messages.Total downloads:') }} 50 views</p>
            <p>{{ __('messages.Total shares:') }} 50 views</p>
        </div>
    </div>
</div>
<script>
   document.querySelectorAll('.list-category-blog .category').forEach(function(categoryLink) {
        categoryLink.addEventListener('click', function(event) {
            event.preventDefault();
            const categoryValue = categoryLink.getAttribute('data-category');
            document.getElementById('selected-category').value = categoryValue;
            categoryLink.closest('form').submit();
        });
    });
    document.getElementById('search-btn').addEventListener('click', function () {
        var searchKey = document.getElementById('search-key').value;
        window.location.href = '?search_key=' + encodeURIComponent(searchKey);
    });
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