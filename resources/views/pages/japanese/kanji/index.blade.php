@extends('page')
@section('title', 'Home Page')
@section('content')

<div class="english-info">
    <div class="kanji-left">
        <div class="kanji-left-list">
        @foreach ( $kanji as $item )
            <div href="javascript:void(0)" class="kanji-left-card animated-gradient" >
                <div class="kanji-left-card-body">
                    <p>🔹{{ __('messages.Kanji') }}: {{ $item->kanji }}</p>
                    <p>🔹{{ __('messages.Meaning of Kanji') }}: {{ $item->meaning_han }}</p>
                    <p>🔹{{ __('messages.Onyomi & Kunyomi') }}: {{ $item->onyomi }}</p>
                    <p>📍{{ __('messages.Example') }}: {{ $item->example_sentence }}</p>
                    <p>➡️ {{ __('messages.Meaning of the sentence') }}: {{ $item->example_meaning }}</p>
                </div>
            </div>
        @endforeach
        </div>
        <div class="kanji-left-write">
            <form method="GET" action="{{ route('kanji.index') }}">
                <div class="w-full d-flex space-between align-items gap-5">
                    <input type="text" name="search" class="input-search" placeholder="Nhập Kanji hoặc nghĩa..." value="{{ request('search') }}">
                    <button type="submit" class="button-submit w-10 cursor">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </button>
                </div>
            </form>

            @if(!empty($search))
                <div class="w-full d-flex flex-direction line-height-6 bg-white p-5 border-radius-5">
                    @if($kanjis->isNotEmpty())
                        @foreach($kanjis as $kanjiItem)
                            <p id="kanjiText">🔹 {{ __('messages.Kanji') }}: {{ $kanjiItem->kanji }}</p>
                            <p id="onyomiText">🔹 {{ __('messages.Onyomi & Kunyomi') }}: {{ $kanjiItem->onyomi }}</p>
                            <p id="compoundsText">🔹 {{ __('messages.Compounds') }}: {{ $kanjiItem->compounds ?? 'N/A' }}</p>
                            <p id="related_wordsText">🔹 {{ __('messages.Related words') }}: {{ $kanjiItem->related_words ?? 'N/A' }}</p>
                            <p id="exampleText">📍 {{ __('messages.Example') }}: {{ $kanjiItem->example_sentence ?? 'N/A' }}</p>
                            <p id="exampleMeaningText">➡️ {{ __('messages.Meaning of the sentence') }}: {{ $kanjiItem->example_meaning ?? 'N/A' }}</p>
                            <hr>
                        @endforeach
                    @else
                        <p>{{ __('messages.No results found') }}</p>
                    @endif
                </div>
            @endif
            <div class="w-full d-flex gap-10">
                <div class="c-n">
                    <p style="font-size: 30px;">📝</p>
                    <p>N5</p>
                </div>
                <div class="c-n">
                    <p style="font-size: 30px;">📝</p>
                    <p>N4</p>
                </div>
                <div class="c-n">
                    <p style="font-size: 30px;">📝</p>
                    <p>N3</p>
                </div>
                <div class="c-n">
                    <p style="font-size: 30px;">📝</p>
                    <p>N2</p>
                </div>
                <div class="c-n">
                    <p style="font-size: 30px;">📝</p>
                    <p>N1</p>
                </div>
            </div>
            <div class="d-flex flex-direction line-height-6 bg-white p-10 border-radius-5 gap-10">
                <div class="w-full line-height-6">
                    <p>{{ __('messages.kanji_rules.title') }}</p>
                    <p class="mt-5">{{ __('messages.kanji_rules.rule1') }}</p>
                    <p>{{ __('messages.kanji_rules.desc1') }}</p>
                    <p>{{ __('messages.kanji_rules.example1') }}</p>
                    <p class="mt-5">{{ __('messages.kanji_rules.rule2') }}</p>
                    <p>{{ __('messages.kanji_rules.desc2') }}</p>
                    <p>{{ __('messages.kanji_rules.example2') }}</p>
                    <p class="mt-5">{{ __('messages.kanji_rules.rule3') }}</p>
                    <p>{{ __('messages.kanji_rules.desc3') }}</p>
                    <p>{{ __('messages.kanji_rules.example3') }}</p>
                    <p class="mt-5">{{ __('messages.kanji_rules.rule4') }}</p>
                    <p>{{ __('messages.kanji_rules.desc4') }}</p>
                    <p>{{ __('messages.kanji_rules.example4') }}</p>
                    <p class="mt-5">{{ __('messages.kanji_rules.rule5') }}</p>
                    <p>{{ __('messages.kanji_rules.desc5') }}</p>
                    <p>{{ __('messages.kanji_rules.example5') }}</p>
                </div>
            </div>
        </div>
    </div>
    <div class="english-right">
        <div class="english-right-body">
            @foreach ($lessons as $item)
                <a href="{{ route('kanji.lesson', ['lesson_id' => $item->id]) }}">
                    {{ $item->lesson }} : {{ $item->title }}
                </a>
            @endforeach
        </div>
        <div class="w-full">
            <img src="{{ asset('assets/images/kanji.png') }}" class="img">
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
