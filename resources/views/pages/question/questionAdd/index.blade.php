@extends('page')
@section('title', 'Home Page')
@section('content')
<div class="question-add">
    <div class="question-add-left">
        <div class="w-full bg-white h-full p-10 border-radius-5">
            <form id="questionForm" class="mt-10">
                @csrf
                <p class="title-nav"><i class="fa-solid fa-plus"></i> Add Question</p>
            </form>
            <div class="w-full mt-10">
                <div class="w-full d-flex gap-5 flex-direction">
                    <label>{{ __('messages.Category') }}</label>
                    <select class="seclect" name="question_category_id" >
                        @foreach ($question_category as $item)
                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="w-full mt-10 d-flex gap-5 flex-direction">
                <label for="lesson_id">{{ __('messages.Question') }}</label>
                <input type="text" name="question" id="hidden-question" class="input">
            </div>
            @include('pages.components.editor.index')

            <textarea name="answer" id="hidden-answer" style="display:none;"></textarea>

            <button id="submitBtn" class="button mt-10">{{ __('messages.Submit') }}</button>
            <button id="editBtn" class="button mt-10" style="display: none;">{{ __('messages.Submit') }}</button>
        </div>
    </div>
    <div class="question-add-right">
        <div class="w-full h-full d-flex flex-direction gap-10">
            <div class="english-vocabulary-theader">
                <p style="width:5%">ID</p>
                <p style="width:20%">{{ __('messages.Created by') }}</p>
                <p style="width:50%">{{ __('messages.Question') }}</p>
                <p style="width:15%; text-align: center;">{{ __('messages.Action') }}</p>
            </div>
            @foreach ($questions as $item)
            <div class="english-vocabulary-tbody" data-id="{{ $item->id }}">
                <p style="width:5%">{{ $item->id }}</p>
                <p style="width:20%">{{ $item->user->full_name }}</p>
                <div class="trustTitle1" style="width:50%;">{!! $item->question !!}</div>
                <p style="width:15%; text-align: center;">
                    <button class="edit-english" onclick="editEnglish(this)">
                        <i class="fa-solid fa-pen-to-square"></i>
                    </button>
                    <button class="delete-english" onclick="deleteEnglish(this)">
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
<script src="{{ asset('js/editor/index.js') }}"></script>
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
   document.addEventListener('DOMContentLoaded', function () {
    const submitBtn = document.getElementById('submitBtn');
    const questionCategorySelect = document.querySelector('.seclect'); // Dùng querySelector thay vì getElementById
    const questionField = document.getElementById('hidden-question');
    const answerField = document.getElementById('hidden-answer');
    const editorContentDiv = document.getElementById('text-input'); // Kiểm tra nếu tồn tại

    submitBtn.addEventListener('click', function (event) {
        event.preventDefault();

        if (!questionCategorySelect || !questionField || !answerField || !editorContentDiv) {
            console.error("Một hoặc nhiều phần tử không tồn tại!");
            return;
        }

        const editorContent = editorContentDiv.innerHTML;
        answerField.value = editorContent;

        fetch("{{ route('questions.store') }}", {
            method: "POST",
            headers: {
                "X-CSRF-TOKEN": document.querySelector('input[name="_token"]').value,
                "Content-Type": "application/json"
            },
            body: JSON.stringify({
                question_category_id: questionCategorySelect.value,
                question: questionField.value,
                answer: editorContent,
            })
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                alert("Lưu thành công!");
                location.reload();
            } else {
                alert("Có lỗi xảy ra, vui lòng thử lại.");
            }
        })
        .catch(error => console.error("Lỗi:", error));
    });
});


</script>
@endsection
