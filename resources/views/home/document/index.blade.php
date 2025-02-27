@extends('layout')
@section('content')
<div class="mt-120">
    <div class="breadcrumb flat">
        <a href="/" class="active">{{ __('messages.Home') }}</a>
        <a href="{{ route('documents.list') }}">{{ __('messages.Document') }}</a>
    </div>
    <div class="list-new_experience">   
        <div class="list-new_experience-left">
            @foreach($documents as $item)
            <a href="{{ route('documents.view', $item->id) }}" class="list-new_experience-left-new">
                <div class="list-new_experience-left-new-img">
                    <img src="{{ asset($item->image_path) }}" alt="">
                </div>
                <div class="list-new_experience-left-new-content">
                    <span>{{ $item->title }}</span>
                    <div class="trustTitle3">{!! $item->description !!}</div>
                    <div class="list-new_experience-left-new-content-footer">
                        <div class="list-new_experience-left-new-content-footer-left">
                            <p><i class="fa-solid fa-user"></i> {{ $item->user ? $item->user->full_name : __('messages.Updating') }} || {{ $item->created_at->format('Y-m-d') }}</p>
                        </div>
                        <div class="list-new_experience-left-new-content-footer-right">
                            <p class="eye-gray"><i class="fa-solid fa-eye"></i> {{ $item->views_count }}</p>
                            <p class="eye-blue"><i class="fa-solid fa-thumbs-up"></i> {{ $item->likes_count }}</p>
                            <p class="eye-green"><i class="fa-solid fa-share"></i> {{ $item->shares_count }}</p>
                        </div>
                    </div>
                </div>
            </a>
            @endforeach
        </div>
        <div class="list-new_experience-right">
            <div class="list-new_experience-right-total">
                <h3>{{ __('messages.Total Quantity') }}</h3>
                <p>{{ __('messages.Total Views') }}: {{ $totalViews }} <i class="fa-solid fa-eye"></i></p>
                <p>{{ __('messages.Total Likes') }}: {{ $totalLikes }} <i class="fa-solid fa-thumbs-up"></i></p>
                <p>{{ __('messages.Total Shares') }}: {{ $totalShares }} <i class="fa-solid fa-share"></i></p>
            </div>
            <div class="list-new_experience-right-sales">
                <img src="{{asset('assets/images/seles-remote.jpg')}}" />
                <div class="list-new_experience-right-sales-content">
                    <div class="list-new_experience-right-sales-content-top">
                        <h2>{{ __('messages.Remote') }}</h2>
                        <p>{{ __('messages.Are you looking for someone to work remotely?') }}</p>
                        <p>{{ __('messages.Contact us now') }}</p>
                        <button>{{ __('messages.Contact Now') }}</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection