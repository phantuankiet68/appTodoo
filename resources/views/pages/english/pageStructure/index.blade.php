@extends('page')
@section('title', 'Home Page')
@section('content')

<div class="english-info">
    <div class="english-left">
        <div class="english-show-structure">
            @foreach ( $structures as $item )
            <div class="english-show-card">
                <p>{{ __('messages.Structure learning') }}: {{ $item->name }}</p>
                <p class="english-show-name"><b>{{ $item->structure }}</b></p>
                <p class="english-show-example">{{ __('messages.Example') }}:  {{ $item->example }}</p>
                <p class="english-show-translation">{{ __('messages.Translation') }}:  {{ $item->translation }}</p>
                <p class="english-show-meaning">{{ __('messages.Explanation') }}:  {{ $item->explanation }}</p>
            </div>
            @endforeach
        </div>
    </div>
    <div class="english-right">
        <div class="english-right-top">
            <a href="{{ route('showLesson', urlencode($lesson->name)) }}">{{ __('messages.Passage') }}</a>
            <a href="{{ route('showVocabulary', urlencode($lesson->name)) }}">{{ __('messages.Vocabulary learning') }}</a>
            <a href="{{ route('showStructure', urlencode($lesson->name)) }}" class="active">{{ __('messages.Structure learning') }}</a>
            <a  href="{{ route('showLearnVocabulary', urlencode($lesson->name)) }}">{{ __('messages.Learn vocabulary') }}</a>
            <a href="">{{ __('messages.Vocabulary checking') }}</a>
            <a href="">{{ __('messages.Structure checking') }}</a>
        </div>
        <div class="w-full mt-10">
            <input type="text" name="url" class="w-full input"  placeholder="URL:"/> 
        </div>
        <div class="english-right-body">
            @foreach ($lessons as $item)
                <a href="{{ route('showLesson', $item->name) }}">{{ $item->name }}</a>
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
