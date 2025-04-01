@extends('layout')
@section('content')
<div class="mt-120">
    <div class="d-flex space-between">
        <div class="breadcrumb flat">
            <a href="/" class="active">{{ __('messages.Home') }}</a>
            <a href="{{ route('blogs.list') }}">{{ __('messages.Product') }}</a>
        </div>
    </div>
    <div class="list-new_experience">   
        <div class="list-new_product-left">
            @foreach($products as $item)
            <div class="product-new">
                <div class="product-new-img">
                    <img src="{{ asset($item->image_path) }}" alt="">
                </div>
                <span>{{ $item->title }}</span>
                <div class="text-truncate4">{!! $item->description !!}</div>
                <div class="button b2">
                    <button class="aboutMe">{{ __('messages.Contact Me') }}</button>
                    <button class="hireMe">{{ __('messages.Show') }}</button>
                </div>
                <div class="card-product-list created_at-product">
                    <p><i class="fa-solid fa-calendar-days"></i> {{ $item->created_at->format('Y-m-d') }}</p>
                    <p>{{ $item->user->full_name}}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

@endsection