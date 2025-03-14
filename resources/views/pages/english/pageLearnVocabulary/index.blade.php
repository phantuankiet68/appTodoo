@extends('page')
@section('title', 'Home Page')
@section('content')

<div class="english-info">
    <div class="english-left">
        <div class="w-full d-flex flex-direction gap-10">
            <div class="w-full d-flex align-items p-10 bg-white border-radius-5 space-between">
                <p>Học từ vựng tiếng anh</p>
                <button class="button-change"><i class="fa-solid fa-arrow-right-arrow-left"></i> Change</button>
            </div>
            <div class="w-full d-flex gap-10 overflow-auto">
                <div class="w-38 d-flex flex-direction gap-10 word-column">
                    @foreach ($vocabularie as $item)
                    <div class="custom-button">
                        <div class="icon">✔</div>
                        <div class="text text-container" data-id="{{ $item->id }}" data-name="{{ $item->name }}" data-meaning="{{ $item->meaning }}">
                            {{ $item->name }}
                        </div>
                    </div>
                    @endforeach
                </div>

                <!-- Cột nhập nghĩa -->
                <div class="w-38 d-flex flex-direction gap-10 input-column">
                    @foreach ($vocabularie as $item)
                    <div class="custom-button">
                        <div class="icon">✔</div>
                        <div class="text">
                            <input type="text" data-id="{{ $item->id }}" data-answer="{{ strtolower(trim($item->meaning)) }}">
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="w-25 d-flex flex-direction gap-10 english-learn-enter">
                    @foreach ($vocabularie as $item)
                    <div class="custom-button">
                        <div class="icon" id="icon-{{ $item->id }}">❔</div> <!-- Mặc định là ❔ -->
                        <div class="text" id="result-{{ $item->id }}">
                            Waiting...
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <div class="english-right">
        <div class="english-right-top">
            <a href="{{ route('showLesson', urlencode($lesson->name)) }}">{{ __('messages.Passage') }}</a>
            <a href="{{ route('showVocabulary', urlencode($lesson->name)) }}">{{ __('messages.Vocabulary learning') }}</a>
            <a href="{{ route('showStructure', urlencode($lesson->name)) }}" >{{ __('messages.Structure learning') }}</a>
            <a  href="{{ route('showLearnVocabulary', urlencode($lesson->name)) }}" class="active">{{ __('messages.Learn vocabulary') }}</a>
            <a href="{{ route('showCheckVocabulary', urlencode($lesson->name)) }}">{{ __('messages.Vocabulary checking') }}</a>
            <a href="{{ route('showCheckStructure', urlencode($lesson->name)) }}">{{ __('messages.Structure checking') }}</a>
        </div>
        <div class="english-right-body-show">
            <p>{{ __('messages.why_cant_learn') }}</p>
            <p>{{ __('messages.why_difficult') }}</p>
            <p>{{ __('messages.why_forget') }}</p>
            <p>{{ __('messages.why_not_fluent') }}</p>
            <p>{{ __('messages.why_nervous') }}</p>
            <p>{{ __('messages.why_bad_pronunciation') }}</p>
            <p>{{ __('messages.why_understand_but_not_speak') }}</p>
            <p>{{ __('messages.why_confusing_grammar') }}</p>
            <p>{{ __('messages.why_listening_skills') }}</p>
            <p>{{ __('messages.why_no_motivation') }}</p>
        </div>
    </div>
</div>


<script>
    document.addEventListener("DOMContentLoaded", function () {
        let navItem = document.querySelector(".nav-item a.nav-link");

        navItem.style.display = "none";

        navItem.addEventListener("mouseover", function () {
            dropdown.style.display = "none";
        });

    });
    document.addEventListener("DOMContentLoaded", function () {
    const changeButton = document.querySelector(".button-change");
    let isNameMode = true;

    changeButton.addEventListener("click", function () {
        isNameMode = !isNameMode;
        let hasError = false;

        document.querySelectorAll(".text-container").forEach((textDiv) => {
            let name = textDiv.getAttribute("data-name");
            let meaning = textDiv.getAttribute("data-meaning");

            if ((!isNameMode && !meaning) || (isNameMode && !name)) {
                hasError = true;
                return;
            }

            textDiv.textContent = isNameMode ? name : meaning;
        });

        document.querySelectorAll(".input-column input").forEach((input) => {
            let name = input.closest(".custom-button").querySelector(".text-container").getAttribute("data-name");
            let meaning = input.closest(".custom-button").querySelector(".text-container").getAttribute("data-meaning");

            if ((!isNameMode && !meaning) || (isNameMode && !name)) {
                hasError = true;
                return;
            }

            input.setAttribute("data-answer", isNameMode ? meaning.toLowerCase() : name.toLowerCase());
            input.placeholder = isNameMode ? "Nhập nghĩa..." : "Nhập từ...";
        });

        if (hasError) {
            alert("Không thể chuyển đổi vì dữ liệu không hợp lệ!");
        }
    });
});

document.addEventListener("DOMContentLoaded", function () {
    const inputs = document.querySelectorAll(".input-column input");

    inputs.forEach(input => {
        input.addEventListener("input", function () {
            let userAnswer = this.value.trim().toLowerCase();
            let correctAnswer = this.getAttribute("data-answer").trim().toLowerCase();
            let id = this.getAttribute("data-id");
            let iconElement = document.getElementById(`icon-${id}`);
            let resultElement = document.getElementById(`result-${id}`);

            // Kiểm tra cả 2 trường hợp name -> meaning và meaning -> name
            let matchingElement = document.querySelector(`.text-container[data-id='${id}']`);
            let alternativeCorrectAnswer = matchingElement ? matchingElement.getAttribute("data-name").trim().toLowerCase() : "";

            if (userAnswer === correctAnswer || userAnswer === alternativeCorrectAnswer) {
                iconElement.textContent = "✔"; // Đổi icon thành dấu tích xanh
                iconElement.style.color = "green";
                resultElement.textContent = "Correct!";
                resultElement.style.color = "green";
            } else if (userAnswer === "") {
                iconElement.textContent = "❔"; // Quay lại icon mặc định nếu trống
                iconElement.style.color = "black";
                resultElement.textContent = "Waiting...";
                resultElement.style.color = "black";
            } else {
                iconElement.textContent = "✖"; // Đổi icon thành dấu X đỏ
                iconElement.style.color = "red";
                resultElement.textContent = "Incorrect!";
                resultElement.style.color = "red";
            }
        });
    });
});




</script>

@endsection
