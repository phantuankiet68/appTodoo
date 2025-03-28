@extends('page')
@section('title', 'Home Page')
@section('content')

<div class="english-info">
    <div class="kanji-left">
        <div class="kanji-left-write">
            @foreach ($test_kanjis as $index => $item)
                <div class="w-full bg-white p-10 border-radius-5 line-height-6">
                    <p class="question-name">Question <span>{{ $index + 1 }}</span> of 20: {{ $item->question }}</p>
                    <div class="d-flex wrap gap-10 mt-10">
                        <div class="w-48 p-10 border border-radius-5 hover" onclick="selectAnswer('{{ $index }}', '{{ $item->option_a }}')">
                            <p>{{ $item->option_a }}</p>
                        </div>
                        <div class="w-48 p-10 border border-radius-5 hover" onclick="selectAnswer('{{ $index }}', '{{ $item->option_b }}')">
                            <p>{{ $item->option_b }}</p>
                        </div>
                        <div class="w-48 p-10 border border-radius-5 hover" onclick="selectAnswer('{{ $index }}', '{{ $item->option_c }}')">
                            <p>{{ $item->option_c }}</p>
                        </div>
                        <div class="w-48 p-10 border border-radius-5 hover" onclick="selectAnswer('{{ $index }}', '{{ $item->option_d }}')">
                            <p>{{ $item->option_d }}</p>
                        </div>
                    </div>
                </div>    
            @endforeach
        </div>

        <div class="kanji-left-list">
            @foreach ($test_kanjis as $index => $item)
                <div class="w-48 d-flex flex-direction bg-white p-10 border-radius-5 line-height-6">
                    <p><span>{{ $index + 1 }}</span>: <span id="Result-{{ $index }}"></span></p>
                    <p id="Check-{{ $index }}"></p>
                </div>    
            @endforeach
            <div class="w-full d-flex align-items-center">
                <button onclick="checkAnswers()" class="button">Nộp</button>
            </div>
        </div>
    </div>
    <div class="english-right">
        <div class="back p-10 bg-white border-radius-5">
            <a href="{{ route('kanji.index')}}" class="d-flex gap-5 w-full"><i class="fa-solid fa-clock-rotate-left"></i>{{ __('messages.Go back') }}</a>
        </div>
        <div class="d-flex gap-10 wrap">
            <div class="group back w-48 bg-white border-radius-5">
                <a href="{{ route('japaneses.index')}}" class="d-flex  flex-direction align-items-center gap-5 w-full"><i class="fa-solid fa-pen-to-square"></i>{{ __('messages.Multiple-choice test') }}</a>
            </div>
            <div class="group back w-48 bg-white border-radius-5">
                <a href="{{ route('japaneses.index')}}" class="d-flex  flex-direction align-items-center gap-5 w-full"><i class="fa-solid fa-pen-to-square"></i>{{ __('messages.Writing test') }}</a>
            </div>
            <div class="group back w-48 bg-white border-radius-5">
                <a href="{{ route('japaneses.index')}}" class="d-flex  flex-direction align-items-center gap-5 w-full"><i class="fa-solid fa-bookmark"></i>{{ __('messages.Related passage') }}</a>
            </div>
            <div class="group back w-48 bg-white border-radius-5">
                <a href="{{ route('japaneses.index')}}" class="d-flex  flex-direction align-items-center gap-5 w-full"><i class="fa-solid fa-clock"></i>Start</a>
            </div>
        </div>
        <div class="back p-10 bg-white border-radius-5 d-flex gap-5">
            <i class="fa-solid fa-hourglass-start"></i>Thời gian đã học: 30:00:00
        </div>
        <div class="cookie w-full bg-white d-flex flex-direction gap-10">
            <h3>Fortune Cookie</h3>
            <h1>🥠</h1>
            <p id="fortuneMessage">Click the cookie to get your fortune!</p>
            <button id="openCookie">Open Cookie</button>
        </div>
    </div>
</div>
<div id="test-kanjis-data" data-answers='@json($test_kanjis->pluck("correct_answer"))'></div>

<script>
    let userAnswers = {};

    function selectAnswer(index, answer) {
        userAnswers[index] = answer;
        document.getElementById('Result-' + index).innerText = answer;
    }

    function checkAnswers() {
        let correctAnswers = JSON.parse(document.getElementById('test-kanjis-data').dataset.answers);

        correctAnswers.forEach((correctAnswer, index) => {
            let userAnswer = userAnswers[index] || "";

            let userAnswerClean = userAnswer.split('.')[0].trim(); 

            console.log(`Question ${index + 1}: Clean User Answer = ${userAnswerClean}, Correct Answer = ${correctAnswer}`);

            if (userAnswerClean === correctAnswer.trim()) {
                document.getElementById('Check-' + index).innerText = "✅ Correct!";
                document.getElementById('Check-' + index).style.color = "green";
            } else {
                document.getElementById('Check-' + index).innerText = `❌ Incorrect! Correct answer: ${correctAnswer}`;
                document.getElementById('Check-' + index).style.color = "red";
            }
        });
    }

    let fortunes = [
        "You will have a great day today! 🌟",
        "Something unexpected will make you smile. 😊",
        "Success is coming your way! 🚀",
        "A pleasant surprise is waiting for you. 🎁",
        "You will make a new friend soon. 🤝",
        "An exciting opportunity will present itself. 🎉",
        "Happiness is closer than you think! ❤️",
        "Be patient. Good things take time. ⏳",
        "A big change is coming in your life. Embrace it! 🔄",
        "Your kindness will return to you in unexpected ways. 💖",
        "You will soon cross paths with someone important. 🌍",
        "Good fortune will follow you wherever you go. 🍀",
        "A dream you have will soon come true. 🌙",
        "Trust your instincts; they will guide you well. 🧭",
        "Adventure is out there—be ready! 🏔️",
        "You will soon receive great news. 📩",
    ];

    document.getElementById("openCookie").addEventListener("click", function () {
        let randomIndex = Math.floor(Math.random() * fortunes.length);
        document.getElementById("fortuneMessage").innerText = fortunes[randomIndex];
    });
</script>


@endsection
