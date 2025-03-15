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
                <div class="w-full">
                    <label>Tìm kiếm từ vựng</label>
                    <div class="w-full d-flex gap-10">
                        <input type="text" class="input-search" id="search-input" placeholder="search">
                        <button class="button-search" id="search-button">
                            <i class="fa-solid fa-magnifying-glass"></i>
                        </button>
                    </div>
                </div>
            </div>
            <div class="show-result-english">
                <p class="english-show-name"><b id="word-name"></b><i id="word-pronunciation"></i></p>
                <p class="english-show-meaning">{{ __('messages.Meaning of the word') }}: <span id="word-meaning"></span></p>
                <p class="english-show-example">{{ __('messages.Example') }}: <span id="word-example"></span></p>
                <p class="english-show-translation">{{ __('messages.Translation') }}: <span id="word-translation"></span></p>
            </div>
            <div class="english-left-footer-choose">
                <a class="english-left-footer-card">
                    <p>🈚</p>
                    <p>漢字</p>
                </a>
                <a class="english-left-footer-card">
                    <p>✍️</p>
                    <p>試験</p>
                </a>
                <a class="english-left-footer-card">
                    <p>📝</p>
                    <p>面接質問</p>
                </a>
                <a class="english-left-footer-card">
                    <p>🔝</p>
                    <p>高度</p>
                </a>
            </div>
            <div class="english-left-footer">
                <div class="w-full">
                    <p class="bold">{{ __('messages.title') }}</p>
                    <p class="mt-5">{{ __('messages.intro') }}</p>
                    
                    @foreach (['job_opportunity', 'scholarship', 'technology', 'culture', 'global_influence'] as $key)
                        <h3>{{ __('messages.' . $key) }}</h3>
                        <p>{{ __('messages.' . $key . '_desc') }}</p>
                    @endforeach

                    <p><strong>{{ __('messages.conclusion') }}</strong></p>
                </div>
            </div>
        </div>
    </div>
    <div class="english-right">
        <div class="english-right-body">
            @foreach ($lessons as $item)
                <a href="{{ route('japanese.showLesson', urlencode($item->name)) }}">{{ $item->name }} : {{ $item->title }}</a>
            @endforeach
        </div>
        <div class="w-full d-flex flex-direction gap-10 mt-10">
            <a class="w-full p-10 bg-white border-radius-5 bg-blue-hover" href="https://mazii.net/vi-VN/mazii-ai" target="_blank">📚 Mazii</a>
            <a class="w-full p-10 bg-white border-radius-5 bg-blue-hover" href="https://chatgpt.com/" target="_blank">🤖 Chat GPT</a>
            <a class="w-full p-10 bg-white border-radius-5 bg-blue-hover" href="https://www.blackbox.ai/" target="_blank">💬 blackbox AI</a>
            <a class="w-full p-10 bg-white border-radius-5 bg-blue-hover" href="https://you.com/" target="_blank">📖 You AI</a>
            <a class="w-full p-10 bg-white border-radius-5 bg-blue-hover" href="https://www.perplexity.ai/" target="_blank">🔤 Perplexity AI</a>
        </div>
    </div>
</div>

<div class="fab-container">
    <button class="fab main-fab" id="fabMain"><i class="fa-solid fa-list"></i></button>
    <div class="fab-menu">
        <a href="" class="fab fab-item">📄</a>
        <a href="" class="fab fab-item">⚙️</a>
        <a href="{{ route('japanese.index_add_vocabulary')}}" class="fab fab-item">+</a>
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

        fetch(`/v1/search/vocabulary?query=${query}`)
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
