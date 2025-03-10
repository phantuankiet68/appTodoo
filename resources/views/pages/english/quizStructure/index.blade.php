@extends('page')
@section('title', 'Home Page')
@section('content')

<div class="english-vocabulary">
    <div class="w-30 d-flex space-between gap-10">
        <div class="w-full bg-white h-full p-10 border-radius-5">
            <form id="quizForm" action="{{ route('storeQuizItem.store') }}" method="POST" class="mt-10">
            @csrf
                <div class="w-full mt-10">
                    <div class="w-full d-flex gap-5 flex-direction">
                        <label for="lesson_id">{{ __('messages.Lesson') }}</label>
                        <select class="seclect" name="lesson_id">
                            @foreach ($lessons as $item)
                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <input type="hidden" name="quiz_category_id" value="2" required /> 

                <input type="hidden" name="language" value="2" required /> 

                <div class="w-full mt-10">
                    <label for="question">Question</label>
                    <input type="text" name="question" class="w-full input mt-5" required /> 
                </div>

                <div class="w-full mt-10">
                    <label for="option_a">Option A</label>
                    <input type="text" name="option_a" class="w-full input mt-5" required /> 
                </div>

                <div class="w-full mt-10">
                    <label for="option_b">Option B</label>
                    <input type="text" name="option_b" class="w-full input mt-5" required /> 
                </div>

                <div class="w-full mt-10">
                    <label for="option_c">Option C</label>
                    <input type="text" name="option_c" class="w-full input mt-5" required /> 
                </div>

                <div class="w-full mt-10">
                    <label for="option_d">Option D</label>
                    <input type="text" name="option_d" class="w-full input mt-5" required /> 
                </div>

                <div class="w-full mt-10">
                    <label for="correct_answer">Answer</label>
                    <input type="text" name="correct_answer" class="w-full input mt-5" /> 
                </div>

                <div class="w-full mt-10">
                    <label for="explanation">Explanation</label>
                    <input type="text" name="explanation" class="w-full input mt-5" required /> 
                </div>

                <div class="w-full mt-10">
                    <div class="w-full d-flex gap-5 flex-direction">
                        <label for="name">{{ __('messages.Level') }}</label>
                        <select class="seclect" name="level">
                            <option value="1">Basic</option>
                            <option value="2">Pro</option>
                        </select>
                    </div>
                </div>
                <div class="w-full mt-10">
                    <div class="w-full d-flex gap-5 flex-direction">
                        <label for="name">{{ __('messages.Status') }}</label>
                        <select class="seclect" name="status">
                            <option value="1">{{ __('messages.Show') }}</option>
                            <option value="0">{{ __('messages.Hide') }}</option>
                        </select>
                    </div>
                </div>

                <button id="submit" class="button mt-10" type="submit">{{ __('messages.Submit') }}</button>
                <button id="edit" class="button mt-10" type="submit" style="display: none;">{{ __('messages.Edit') }}</button>
            </form>
        </div>
    </div>
    <div class="w-70">
        <div class="english-vocabulary-item-top">
            <a href="{{ route('englishs.index') }}">Back</a>
            <a href="{{ route('get.index_add_vocabulary')}}">Vocabulary</a>
            <a href="{{ route('get.index_add_passage')}}">Passage</a>
            <a href="{{ route('get.index_add_structure')}}">Học cấu trúc</a>
            <a href="{{ route('get.index_quiz_item')}}">Kiểm tra từ vựng </a>
            <a href="{{ route('get.index_quiz_structure')}}" class="active">Kiểm tra cấu trúc</a>
        </div>
        <div class="w-full h-full d-flex flex-direction gap-10">
            <div class="english-vocabulary-theader">
                <p style="width:25%">Question</p>
                <p style="width:15%">Answer</p>
                <p style="width:35%">Explanation</p>
                <p style="width:10%; text-align: center;">{{ __('messages.Level') }}</p>
                <p style="width:15%; text-align: center;">{{ __('messages.Action') }}</p>
            </div>
            @foreach ($quizItems as $item)
            <div class="english-vocabulary-tbody">
                <p style="width:25%">{{ $item->question }}</p>
                <p style="width:15%">{{ $item->correct_answer }}</p>
                <div class="trustTitle1" style="width:35%">
                    <p>{{ $item->explanation }}</p>
                </div>
                <div style="width:10%;display: flex; justify-content: center;">
                    @if ($item->level == 1)
                        <p class="basic text-center">Basic</p>
                    @else
                        <p class="show text-center">Pro</p>
                    @endif
                </div>
                <p style="width:15%; text-align: center;">
                    <button class="edit-english" 
                        onclick="editQuizItem(this)" 
                        data-id="{{ $item->id }}" 
                        data-question="{{ $item->question }}" 
                        data-option-a="{{ $item->option_a }}" 
                        data-option-b="{{ $item->option_b }}" 
                        data-option-c="{{ $item->option_c }}" 
                        data-option-d="{{ $item->option_d }}" 
                        data-correct-answer="{{ $item->correct_answer }}" 
                        data-explanation="{{ $item->explanation }}" 
                        data-level="{{ $item->level }}" 
                        data-status="{{ $item->status }}" 
                        data-lesson-id="{{ $item->lesson_id }}">
                        <i class="fa-solid fa-pen-to-square"></i>
                    </button>

                    <button class="delete-english" onclick="deleteStructure(this)">
                        <i class="fa-solid fa-trash"></i>
                    </button>
                </p>
            </div>
            @endforeach
        </div>
    </div>
</div>

@if (session('success'))
<div id="popup-success">
    <ul class="notifications">
        <li class="toast success hide">
            <div class="column">
                <i class="fa-solid fa-circle-check"></i>
                <span>Success:  {{ session('success') }}.</span>
            </div>
        </li>
    </ul>
</div>
@endif

@if (session('error'))
<div id="popup-error">
    <ul class="notifications">
        <li class="toast error hide">
            <div class="column">
                <i class="fa-solid fa-circle-check"></i>
                <span>Error:  {{ session('error') }}.</span>
            </div>
        </li>
    </ul>
</div>
@endif

@if ($errors->any())
    <div id="popup-error">
        <ul class="notifications">
            @foreach ($errors->all() as $error)
                <li class="toast error hide">
                    <div class="column">
                        <i class="fa-solid fa-circle-check"></i>
                        <span>Error:  {{ $error }}.</span>
                    </div>
                </li>
            @endforeach
        </ul>
    </div>
@endif


<script>
    document.addEventListener('DOMContentLoaded', function() {
        const popup = document.querySelector('#popup-success');
        if (popup) {
            popup.style.display = 'flex';
            setTimeout(() => {
                popup.style.display = 'none';
            }, 6000);
        }
    });

    document.addEventListener('DOMContentLoaded', function() {
        const popup = document.querySelector('#popup-category');
        if (popup) {
            popup.style.display = 'block';

            setTimeout(() => {
                popup.style.display = 'none';
            }, 5000);
        }
    });
</script>
<script>
    function editQuizItem(button) {
        let id = button.getAttribute("data-id");
        let question = button.getAttribute("data-question");
        let optionA = button.getAttribute("data-option-a");
        let optionB = button.getAttribute("data-option-b");
        let optionC = button.getAttribute("data-option-c");
        let optionD = button.getAttribute("data-option-d");
        let correctAnswer = button.getAttribute("data-correct-answer");
        let explanation = button.getAttribute("data-explanation");
        let level = button.getAttribute("data-level");
        let status = button.getAttribute("data-status");
        let lessonId = button.getAttribute("data-lesson-id");

        document.querySelector("input[name='question']").value = question;
        document.querySelector("input[name='option_a']").value = optionA;
        document.querySelector("input[name='option_b']").value = optionB;
        document.querySelector("input[name='option_c']").value = optionC;
        document.querySelector("input[name='option_d']").value = optionD;
        document.querySelector("input[name='correct_answer']").value = correctAnswer;
        document.querySelector("input[name='explanation']").value = explanation;
        document.querySelector("select[name='level']").value = level;
        document.querySelector("select[name='status']").value = status;
        document.querySelector("select[name='lesson_id']").value = lessonId;

        const form = document.getElementById("quizForm");
        form.action = `/v1/quiz-items/update/${id}`; 

        document.getElementById("submit").style.display = "none";
        document.getElementById("edit").style.display = "block";
    }

</script>

@endsection
