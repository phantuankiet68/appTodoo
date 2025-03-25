@extends('page')
@section('title', 'Home Page')
@section('content')

<div class="english-info">
    <div class="english-left">
    <div class="w-full d-flex flex-direction gap-10">
        <div class="w-full d-flex align-items p-10 bg-white border-radius-5 space-between">
            <p>Kiểm tra từ vựng</p>
            <div class="w-25">
                <button class="button-change">Kết quả đúng: <span id="correct-count">0</span></button>
                <button class="button-change">Kết quả sai: <span id="incorrect-count">0</span></button>
            </div>
        </div>
        <div class="w-full flex-direction d-flex gap-10 overflow-auto">
            @foreach ($quizItem as $index => $item)
                <div class="ckeck-vocabulary" data-correct="{{ $item->correct_answer }}" data-answered="false">
                    <p id="question-{{ $index }}">{{ $item->question }}</p>
                    <div class="w-full d-flex gap-10 space-between">
                        <div class="ckeck-vocabulary-value" data-option="A" onclick="checkAnswer(this, '{{ $item->correct_answer }}', '{{ $item->explanation }}', '{{ $index }}')">
                            {{ $item->option_a }}
                        </div>
                        <div class="ckeck-vocabulary-value" data-option="B" onclick="checkAnswer(this, '{{ $item->correct_answer }}', '{{ $item->explanation }}', '{{ $index }}')">
                            {{ $item->option_b }}
                        </div>
                        <div class="ckeck-vocabulary-value" data-option="C" onclick="checkAnswer(this, '{{ $item->correct_answer }}', '{{ $item->explanation }}', '{{ $index }}')">
                            {{ $item->option_c }}
                        </div>
                        <div class="ckeck-vocabulary-value" data-option="D" onclick="checkAnswer(this, '{{ $item->correct_answer }}', '{{ $item->explanation }}', '{{ $index }}')">
                            {{ $item->option_d }}
                        </div>
                    </div>
                    <div class="ckeck-vocabulary-error correct hidden">
                        <p class="success">Bạn đã chọn đáp án đúng!</p>
                    </div>
                    <div class="ckeck-vocabulary-error incorrect hidden">
                        <p class="red">Bạn đã chọn đáp án sai!</p>
                        <p class="explanation-text"></p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    </div>
    <div class="english-right">
        <div class="english-right-top">
            <a href="{{ route('japanese.showLesson', urlencode($lesson->name)) }}">{{ __('messages.Passage') }}</a>
            <a href="{{ route('japanese.showVocabulary', urlencode($lesson->name)) }}">{{ __('messages.Vocabulary learning') }}</a>
            <a href="{{ route('japanese.showStructure', urlencode($lesson->name)) }}" >{{ __('messages.Structure learning') }}</a>
            <a  href="{{ route('japanese.showLearnVocabulary', urlencode($lesson->name)) }}">{{ __('messages.Learn vocabulary') }}</a>
            <a href="{{ route('japanese.showCheckVocabulary', urlencode($lesson->name)) }}" class="active">{{ __('messages.Vocabulary checking') }}</a>
            <a href="{{ route('japanese.showCheckStructure', urlencode($lesson->name)) }}">{{ __('messages.Structure checking') }}</a>
        </div>
        <div class="show-more">
            <div class="english-right-body-show">
                <p>✅Sơ đồ tư duy (Mind Map)</p>
                <p>✅Sơ đồ phân loại (Classification Diagram)</p>
                <p>✅Sơ đồ tiến trình (Flowchart)</p>
                <p>✅Sơ đồ so sánh (Comparison Chart)</p>
                <p>✅Sơ đồ SWOT</p>
            </div>
        </div>
        <div class="show-image-footer">
            <div class="show-image">
                <img src="{{ asset('assets/images/ai.png') }}">
                <button class="button">Voice</button>
            </div>
        </div>
    </div>
</div>


<script>
    let correctCount = 0;
    let incorrectCount = 0;
    let totalQuestions = document.querySelectorAll(".ckeck-vocabulary").length;

    function checkAnswer(element, correctAnswer, explanation, index) {
        let parentDiv = element.closest(".ckeck-vocabulary");

        // Kiểm tra nếu đã chọn trước đó thì không làm gì cả
        if (parentDiv.getAttribute("data-answered") === "true") {
            return;
        }

        let selectedOption = element.getAttribute("data-option");
        let questionElement = document.getElementById(`question-${index}`);
        let correctDiv = parentDiv.querySelector(".correct");
        let incorrectDiv = parentDiv.querySelector(".incorrect");
        let explanationText = incorrectDiv.querySelector(".explanation-text");

        // Ẩn thông báo trước khi kiểm tra
        correctDiv.classList.add("hidden");
        incorrectDiv.classList.add("hidden");

        // Xóa class cũ khỏi câu hỏi
        questionElement.classList.remove("success", "red");

        if (selectedOption === correctAnswer) {
            correctDiv.classList.remove("hidden");
            questionElement.classList.add("success"); // Thêm class success nếu chọn đúng
            correctCount++;
        } else {
            incorrectDiv.classList.remove("hidden");
            explanationText.innerText = explanation;
            questionElement.classList.add("red"); // Thêm class red nếu chọn sai
            incorrectCount++;
        }

        // Đánh dấu câu hỏi này đã được trả lời
        parentDiv.setAttribute("data-answered", "true");

        // Cập nhật số lượng câu đúng/sai
        document.getElementById("correct-count").innerText = correctCount;
        document.getElementById("incorrect-count").innerText = incorrectCount;

        // Kiểm tra nếu đã trả lời hết tất cả câu hỏi
        let answeredQuestions = document.querySelectorAll('.ckeck-vocabulary[data-answered="true"]').length;
        if (answeredQuestions === totalQuestions) {
            alert(`Hoàn thành! Kết quả:\n✅ Đúng: ${correctCount}\n❌ Sai: ${incorrectCount}`);
        }
    }






</script>

@endsection
