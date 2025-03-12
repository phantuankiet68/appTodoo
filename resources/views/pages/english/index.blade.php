@extends('page')
@section('title', 'Home Page')
@section('content')

<div class="english-info">
    <div class="english-left">
        <div class="english-left-vocabulary">
            @foreach ($vocabularies as $item)
            <div class="english-left-vocabulary-item">
                <p>{{ $item->name }}</p>
                <p>{{ $item->pronunciation }}</p>
                <p>{{ $item->meaning }}</p>
            </div>    
            @endforeach
        </div>
        @if ($passage)
            <div class="english-left-passage">
                {!! $passage->description !!}
            </div>
        @else
            <p>No passage found.</p>
        @endif
    </div>
    <div class="english-right">
        <div class="english-right-top">
            <a href="">{{ __('messages.Passage') }}</a>
            <a href="">{{ __('messages.Vocabulary learning') }}</a>
            <a href="">{{ __('messages.Structure learning') }}</a>
            <a href="">{{ __('messages.Vocabulary checking') }}</a>
            <a href="">{{ __('messages.Vocabulary checking') }}</a>
            <a href="">{{ __('messages.Structure checking') }}</a>
        </div>
        <div class="w-full mt-10">
            <input type="text" name="url" class="w-full input"  placeholder="URL:"/> 
        </div>
        <div class="english-right-body">
            @foreach ($lessons as $item)
                <a href="{{ route('showLesson', urlencode($item->name)) }}">{{ $item->name }}</a>
            @endforeach
        </div>
    </div>
</div>

<div class="fab-container">
    <button class="fab main-fab" id="fabMain"><i class="fa-solid fa-list"></i></button>
    <div class="fab-menu">
        <a href="" class="fab fab-item">📄</a>
        <a href="" class="fab fab-item">⚙️</a>
        <a href="{{ route('get.index_add_vocabulary')}}" class="fab fab-item">+</a>
    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", () => {
        const fabMain = document.getElementById("fabMain");
        const fabMenu = document.querySelector(".fab-menu");

        fabMain.addEventListener("click", () => {
            fabMenu.classList.toggle("openfad");
        });
    });
</script>

@endsection
