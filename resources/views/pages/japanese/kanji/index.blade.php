@extends('page')
@section('title', 'Home Page')
@section('content')

<div class="english-info">
    <div class="kanji-left">
        <div class="kanji-left-list">
            @foreach ( $Kanji as $item )
            <div class="kanji-left-card animated-gradient">
                <div class="kanji-left-card-body">
                    <p>🔹Kanji: {{ $item->kanji }}</p>
                    <p>🔹Nghĩa Hán tự: {{ $item->meaning_han }}</p>
                    <p>🔹Âm Hán Nhật: {{ $item->onyomi }}</p>
                    <p>📍Ví dụ câu: {{ $item->example_sentence }}</p>
                    <p>➡️ Nghĩa của câu: {{ $item->example_meaning }}</p>
                </div>
            </div>
            @endforeach
        </div>
        <div class="kanji-left-write">
        
        </div>
    </div>
    <div class="english-right">
        <div class="back p-10 bg-white border-radius-5">
            <a href="{{ route('japaneses.index')}}" class="d-flex gap-5 w-full"><i class="fa-solid fa-clock-rotate-left"></i>{{ __('messages.Go back') }}</a>
        </div>
        <div class="back p-10 bg-white border-radius-5">
            <a href="{{ route('japaneses.index')}}" class="d-flex gap-5 w-full"><i class="fa-solid fa-pen-to-square"></i>{{ __('messages.Multiple-choice test') }}</a>
        </div>
        <div class="back p-10 bg-white border-radius-5">
            <a href="{{ route('japaneses.index')}}" class="d-flex gap-5 w-full"><i class="fa-solid fa-pen-to-square"></i>{{ __('messages.Writing test') }}</a>
        </div>
        <div class="back p-10 bg-white border-radius-5">
            <a href="{{ route('japaneses.index')}}" class="d-flex gap-5 w-full"><i class="fa-solid fa-bookmark"></i>{{ __('messages.Related passage') }}</a>
        </div>
        <div class="back p-10 bg-white border-radius-5">
            <a href="{{ route('japaneses.index')}}" class="d-flex gap-5 w-full"><i class="fa-solid fa-check"></i>{{ __('messages.Learned quantity') }}: 5</a>
        </div>
        <div class="back p-10 bg-white border-radius-5">
            <a href="{{ route('japaneses.index')}}" class="d-flex gap-5 w-full"><i class="fa-solid fa-check"></i>{{ __('messages.Successfully completed') }}: 1</a>
        </div>
        <div class="english-right-body">

        </div>
    </div>
</div>
<div class="fab-container">
    <button class="fab main-fab" id="fabMain"><i class="fa-solid fa-list"></i></button>
    <div class="fab-menu">
        <a href="" class="fab fab-item">📄</a>
        <a href="" class="fab fab-item">⚙️</a>
        <a href="{{ route('kanji.index_add')}}" class="fab fab-item">+</a>
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
