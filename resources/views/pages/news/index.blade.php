@extends('layout')
@section('title', 'Home Page')
@section('content')
<div class="blog-container">
    <div class="main-article">
        <img alt="Person wearing VR headset with colorful background" src="https://placehold.co/600x400"/>
        <h1> VR Is the Use of Computer Technology to Create a Simulated Environment.</h1>
        <div class="meta">
            <span>By Ashley Graham</span>
            <span>July 23, 2018</span>
            <span>4k {{ __('messages.Down') }}</span>
            <span>4k {{ __('messages.Views') }}</span>
            <span> 230 {{ __('messages.Shares') }}</span>
        </div>
    </div>
    <div class="recent-news">
        <div class="all-news">
            <h2>{{ __('messages.Recent News') }}</h2>
            <a href="#">{{ __('messages.All Recent News') }}</a>
        </div>
        <div class="list-blog no-croll">
            <div class="blog-item">
                <a href="">
                    <div class="blog-item-image">
                        <img alt="Person with a dog" src="https://placehold.co/80x80"/>
                    </div>
                    <div class="blog-item-content">
                        <div class="category travel">{{ __('messages.Traveling') }} <span>20-10-2023</span></div>
                        <h3>50 Years After The Moon Landing: How Close Is Space Travel, Really?</h3>
                    </div>
                </a>
            </div>
            <div class="blog-item">
                <a href="">
                    <div class="blog-item-image">
                        <img alt="Person with a dog" src="https://placehold.co/80x80"/>
                    </div>
                    <div class="blog-item-content">
                        <div class="category technology">{{ __('messages.Technology') }} <span>20-10-2023</span></div>
                        <h3>50 Years After The Moon Landing: How Close Is Space Travel, Really?</h3>
                    </div>
                </a>
            </div>
            <div class="blog-item">
                <a href="">
                    <div class="blog-item-image">
                        <img alt="Person with a dog" src="https://placehold.co/80x80"/>
                    </div>
                    <div class="blog-item-content">
                        <div class="category programming">{{ __('messages.Programming') }} <span>20-10-2023</span></div>
                        <h3>50 Years After The Moon Landing: How Close Is Space Travel, Really?</h3>
                    </div>
                </a>
            </div>
            <div class="blog-item">
                <a href="">
                    <div class="blog-item-image">
                        <img alt="Person with a dog" src="https://placehold.co/80x80"/>
                    </div>
                    <div class="blog-item-content">
                        <div class="category design">{{ __('messages.Design') }} <span>20-10-2023</span></div>
                        <h3>50 Years After The Moon Landing: How Close Is Space Travel, Really?</h3>
                    </div>
                </a>
            </div>
            <div class="blog-item">
                <a href="">
                    <div class="blog-item-image">
                        <img alt="Person with a dog" src="https://placehold.co/80x80"/>
                    </div>
                    <div class="blog-item-content">
                        <div class="category fitness">{{ __('messages.Fitness') }} <span>20-10-2023</span></div>
                        <h3>50 Years After The Moon Landing: How Close Is Space Travel, Really?</h3>
                    </div>
                </a>
            </div>
            <div class="blog-item">
                <a href="">
                    <div class="blog-item-image">
                        <img alt="Person with a dog" src="https://placehold.co/80x80"/>
                    </div>
                    <div class="blog-item-content">
                        <div class="category culture">{{ __('messages.Culture') }} <span>20-10-2023</span></div>
                        <h3>50 Years After The Moon Landing: How Close Is Space Travel, Really?</h3>
                    </div>
                </a>
            </div>
            <div class="blog-item">
                <a href="">
                    <div class="blog-item-image">
                        <img alt="Person with a dog" src="https://placehold.co/80x80"/>
                    </div>
                    <div class="blog-item-content">
                        <div class="category creativity">{{ __('messages.Creativity') }} <span>20-10-2023</span></div>
                        <h3>50 Years After The Moon Landing: How Close Is Space Travel, Really?</h3>
                    </div>
                </a>
            </div>
            <div class="blog-item">
                <a href="">
                    <div class="blog-item-image">
                        <img alt="Person with a dog" src="https://placehold.co/80x80"/>
                    </div>
                    <div class="blog-item-content">
                        <div class="category sports">{{ __('messages.Sports') }} <span>20-10-2023</span></div>
                        <h3>50 Years After The Moon Landing: How Close Is Space Travel, Really?</h3>
                    </div>
                </a>
            </div>
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