@extends('page')
@section('title', 'Home Page')
@section('content')

<div class="english-info">
    <div class="kanji-left">
        <div class="kanji-left-list">
        @foreach ( $kanjis as $item )
            <a href="javascript:void(0)" class="kanji-left-card animated-gradient" 
            onclick="updateKanjiCanvas(
                '{{ $item->kanji }}', 
                '{{ $item->meaning_han }}', 
                '{{ $item->onyomi }}', 
                '{{ $item->compounds }}', 
                '{{ $item->related_words }}', 
                '{{ $item->example_sentence }}', 
                '{{ $item->example_meaning }}'
            )">
                <div class="kanji-left-card-body">
                    <p>🔹{{ __('messages.Kanji') }}: {{ $item->kanji }}</p>
                    <p>🔹{{ __('messages.Meaning of Kanji') }}: {{ $item->meaning_han }}</p>
                    <p>🔹{{ __('messages.Onyomi & Kunyomi') }}: {{ $item->onyomi }}</p>
                    <p>📍{{ __('messages.Example') }}: {{ $item->example_sentence }}</p>
                    <p>➡️ {{ __('messages.Meaning of the sentence') }}: {{ $item->example_meaning }}</p>
                </div>
            </a>
        @endforeach
        </div>
        <div class="kanji-left-write">
            <div class="w-full d-flex space-between align-items">
                <p class="kanji-name">📍{{ __('messages.Learning Kanji vocabulary') }}</p>
                <div class="buttons">
                    <button onclick="clearCanvas()">Xóa</button>
                    <button onclick="saveCanvas()">Lưu</button>
                </div>
            </div>
            <div class="canvas-container border-radius-5">
                <canvas id="kanjiCanvas" width="400" height="400"></canvas>
            </div>
            <div class="w-full d-flex flex-direction line-height-6 bg-white p-10 border-radius-5">
                <p id="kanjiText">🔹{{ __('messages.Kanji') }}: 🔹{{ __('messages.Meaning of Kanji') }}:</p>
                <p id="compoundsText">🔹{{ __('messages.Compounds') }}:</p>
                <p id="related_wordsText">🔹{{ __('messages.Related words') }}:</p>
                <p id="exampleText">📍{{ __('messages.Example') }}:</p>
                <p id="exampleMeaningText">➡️ {{ __('messages.Meaning of the sentence') }}:</p>
            </div>
        </div>
    </div>
    <div class="english-right">
        <div class="back p-10 bg-white border-radius-5">
            <a href="{{ route('kanji.index')}}" class="d-flex gap-5 w-full"><i class="fa-solid fa-clock-rotate-left"></i>{{ __('messages.Go back') }}</a>
        </div>
        <div class="d-flex gap-10 wrap">
            <div class="group back w-48 bg-white border-radius-5">
                <a href="{{ route('kanji.test', ['lesson_id' => $lesson->id]) }}" class="d-flex  flex-direction align-items-center gap-5 w-full"><i class="fa-solid fa-pen-to-square"></i>{{ __('messages.Multiple-choice test') }}</a>
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

<script>
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

    let currentKanji = "何";
    function updateKanjiCanvas(kanji, meaning, onyomi, compounds, related_words, example, exampleMeaning) {
        const canvas = document.getElementById("kanjiCanvas");
        const ctx = canvas.getContext("2d");

        currentKanji = kanji;
        drawnStrokes = [];
        ctx.clearRect(0, 0, canvas.width, canvas.height);
        drawKanjiSample();

        if (document.getElementById("kanjiText")) {
            document.getElementById("kanjiText").innerHTML = `🔹Kanji: ${kanji} ||🔹Meaning of Kanji: ${meaning} || 🔹Onyomi & Kunyomi: ${onyomi}`;
        }
        if (document.getElementById("compoundsText")) {
            document.getElementById("compoundsText").innerHTML = `🔹Compounds: ${compounds}`;
        }
        if (document.getElementById("related_wordsText")) {
            document.getElementById("related_wordsText").innerHTML = `🔹Related Words: ${related_words}`;
        }
        if (document.getElementById("exampleText")) {
            document.getElementById("exampleText").innerHTML = `📍Example: ${example}`;
        }
        if (document.getElementById("exampleMeaningText")) {
            document.getElementById("exampleMeaningText").innerHTML = `➡️ Meaning of the sentence: ${exampleMeaning}`;
        }
    }

    // --- Cấu hình Canvas ---
    const canvas = document.getElementById("kanjiCanvas");
    const ctx = canvas.getContext("2d");
    let drawing = false;
    let drawnStrokes = [];

    function drawKanjiSample() {
        ctx.clearRect(0, 0, canvas.width, canvas.height);
        ctx.font = "220px Arial";
        ctx.fillStyle = "rgba(0, 0, 0, 0.2)";
        ctx.textAlign = "center";
        ctx.textBaseline = "middle";
        ctx.fillText(currentKanji, canvas.width / 2, canvas.height / 2);

        ctx.strokeStyle = "red";
        ctx.lineWidth = 15;
        ctx.lineCap = "round";
        for (let stroke of drawnStrokes) {
            ctx.beginPath();
            ctx.moveTo(stroke[0][0], stroke[0][1]);
            for (let point of stroke) {
                ctx.lineTo(point[0], point[1]);
            }
            ctx.stroke();
        }
    }

    // Lần đầu tiên vẽ chữ Kanji mặc định
    drawKanjiSample();

    canvas.addEventListener("mousedown", (event) => {
        drawing = true;
        drawnStrokes.push([[event.offsetX, event.offsetY]]);
    });

    canvas.addEventListener("mouseup", () => {
        drawing = false;
        drawKanjiSample();
    });

    canvas.addEventListener("mousemove", (event) => {
        if (!drawing) return;
        let lastStroke = drawnStrokes[drawnStrokes.length - 1];
        lastStroke.push([event.offsetX, event.offsetY]);
        drawKanjiSample();
    });

    // Xóa canvas và vẽ lại chữ Kanji mờ
    function clearCanvas() {
        drawnStrokes = [];
        drawKanjiSample();
    }

    // Lưu ảnh canvas
    function saveCanvas() {
        const link = document.createElement("a");
        link.href = canvas.toDataURL("image/png");
        link.download = "kanji.png";
        link.click();
    }



</script>

@endsection
