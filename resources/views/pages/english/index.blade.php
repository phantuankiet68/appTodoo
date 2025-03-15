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
        <div class="english-left-body">
            <div class="english-left-body-search">
                <input type="text" class="input-search" id="search-input" placeholder="search">
                <button class="button-search" id="search-button">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </button>
            </div>
            <div class="show-result-english">
                <p class="english-show-name"><b id="word-name"></b><i id="word-pronunciation"></i></p>
                <p class="english-show-meaning">{{ __('messages.Meaning of the word') }}: <span id="word-meaning"></span></p>
                <p class="english-show-example">{{ __('messages.Example') }}: <span id="word-example"></span></p>
                <p class="english-show-translation">{{ __('messages.Translation') }}: <span id="word-translation"></span></p>
            </div>
            <div class="english-left-footer">
                <p class="bold">{{ __('messages.importance') }}</p>
                <p class="mt-5">{{ __('messages.description') }}</p>
                <p class="bold mt-10">{{ __('messages.advice_title') }}</p>
                <p class="mt-5">{{ __('messages.practice') }}</p>
                <p class="mt-5">{{ __('messages.confidence') }}</p>
                <p class="mt-5">{{ __('messages.vocabulary') }}</p>
                <p class="mt-5">{{ __('messages.community') }}</p>
                <p class="mt-5">{{ __('messages.writing') }}</p>
                <p class="bold mt-10">{{ __('messages.future') }}</p>
            </div>

        </div>
    </div>
    <div class="english-right">
        <div class="w-full">
            <input type="text" name="url" class="w-full input"  placeholder="URL:"/> 
        </div>
        <div class="english-right-body">
            @foreach ($lessons as $item)
                <a href="{{ route('showLesson', urlencode($item->name)) }}">{{ $item->name }}: {{ $item->title }}</a>
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

    document.getElementById('search-button').addEventListener('click', function () {
        let query = document.getElementById('search-input').value.trim();
        let resultContainer = document.querySelector('.show-result-english');
        if (query === '') {
            alert('Vui lòng nhập từ cần tìm!');
            return;
        }

        fetch(`/v1/vocabulary/search?query=${query}`)
            .then(response => response.json())
            .then(data => {
                if (data) {
                    document.getElementById('word-name').innerText = data.name || 'Không tìm thấy';
                    document.getElementById('word-meaning').innerText = data.meaning || 'N/A';
                    document.getElementById('word-example').innerText = data.example || 'N/A';
                    document.getElementById('word-translation').innerText = data.translation || 'N/A';
                    document.getElementById('word-pronunciation').innerText = data.pronunciation || 'N/A';
                    resultContainer.style.display = 'block';
                } else {
                    alert('Không tìm thấy từ vựng!');
                }
            })
            .catch(error => console.error('Lỗi:', error));
    });


</script>

@endsection
