@extends('app')

@section('title', 'Home Page')

@section('content')
<div class="todo">
    <div class="questions">
    <div class="headerToQuesion">
        <div class="headerToQuesionLeft">
            <form action="" class="formSearch">
                <div class="formInputSearch">
                    <input type="text" value="">
                </div>
                <button class="add-search"><i class="fa-solid fa-magnifying-glass"></i></button>
            </form>
            <form action="">
                <div class="Users--right--btns">
                    <select name="date" id="date" class="select-dropdown doctor--filter">
                        <option>Fillter</option>
                        <option value="free">Done</option>
                        <option value="scheduled">Unfinished</option>
                    </select>
                </div>
            </form>
            <form action="">
                <div class="Users--right--btns">
                    <select name="date" id="date" class="select-dropdown doctor--filter">
                        <option>Category</option>
                        <option value="free">Admin</option>
                        <option value="scheduled">Users</option>
                    </select>
                </div>
            </form>
            <form action="">
                <div class="Users--right--btns">
                    <select name="date" id="date" class="select-dropdown doctor--filter">
                        <option>Assignment</option>
                        <option value="free">Admin</option>
                        <option value="scheduled">Users</option>
                    </select>
                </div>
            </form>
        </div>
        <div class="headerToQuesionRight">
            <button type="button" class="down"><i class="fa-solid fa-download"></i> DownLoad</button>
            <button type="button" class="create" onclick="CreateQuestionForm()"><i class="fa-solid fa-plus"></i> Tạo mới</button>
        </div>
    </div>
    <div class="body-todo">
        <div class="questionList hover-container">
            @foreach($questions as $item)
            <div class="questionItem" onclick="showEditQuestion({{$item->id}})">
                <div class="questionContent">
                    <span class="questionTop">Câu hỏi: </span>
                    <p class="questionBottom">{{$item->question}}</p>
                </div>
                <div class="answerContent mt-10">
                    <span class="answerTop">Câu trả lời: </span>
                    <p class="answerBottom">{{$item->answer}}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    </div>
</div>
<div class="modelCreateFrom" id="createQuestion">
    <form method="POST" action="{{ route('question.store') }}">
    @csrf
        <h2>{{ __('messages.Add New') }}</h5>
        @if (Auth::check())
            <input type="hidden" id="user_id" name="user_id" value="{{ Auth::user()->id }}"/>
        @endif
        <div class="form-textarea-category">
            <label for="description">{{ __('messages.Question') }}</label>
            <textarea class="textareaQuestion" name="question"></textarea> 
        </div>
        <div class="form-textarea-category">
            <label for="description">{{ __('messages.Structural meaning') }}</label>
            <textarea class="textareaQuestion" name="answer"></textarea> 
        </div>
        <div class="form-btn">
            <button>{{ __('messages.Add') }}</button>
        </div>
        <div class="BtnCloseCategoryTask" onclick="closeQuestionForm()">
            <p>X</p>
        </div>
    </form>
</div>

<div class="model" id="showQuestionForm">
    <div class="modelShowFrom">
        <div class="buttonAction">
            <button class="show" onclick="showTab('show')"><i class="fa-solid fa-eye"></i> Show</button>
            <button class="edit" onclick="showTab('edit')"><i class="fa-solid fa-pen-to-square"></i> Edit</button>
            <button class="delete" onclick="showTab('delete')"><i class="fa-solid fa-trash"></i> Delete</button>
        </div>

        <div class="showContentQuestion" id="show">
            <div class="popupShowQuestion">
                <span class="questionTop">Câu hỏi: </span>
                <p class="questionBottom" id="showQuestion1"></p>
            </div>
            <div class="popupShowQuestion mt-10">
                <span class="answerTop">Câu trả lời: </span>
                <p class="answerBottom" id="showQuestion2"></p>
            </div>
        </div>

        <div class="editContentQuestion" id="edit" style="display: none;">
            <form method="POST" id="edit-question-form">
            @csrf
            @method('PUT')
                <input type="hidden" id="question_id" name="question_id"/>
                @if (Auth::check())
                    <input type="hidden" id="user_id" name="user_id" value="{{ Auth::user()->id }}"/>
                @endif
                <div class="form-textarea-category">
                    <label for="description">{{ __('messages.Question') }}</label>
                    <textarea class="textareaQuestion" name="question" id="question"></textarea> 
                </div>
                <div class="form-textarea-category">
                    <label for="description">{{ __('messages.Structural meaning') }}</label>
                    <textarea class="textareaQuestion" name="answer" id="answer"></textarea> 
                </div>
                <div class="form-btn">
                    <button>{{ __('messages.Update') }}</button>
                </div>
            </form>
        </div>

        <div class="deleteContentQuestion" id="delete" style="display: none;">
            <form method="POST" id="delete-Question">
                @csrf
                @method('DELETE')
                <h3 class="text-center">{{ __('messages.Are you sure you want to delete?') }}</h3>
                <p id="deleteQuestion"></p>
                <div class="form-btn-delete">
                    <button type="submit">{{ __('messages.Delete') }}</button>
                </div>
            </form>
        </div>
        <div class="BtnCloseCategoryTask" onclick="closeShowQuestion()">
            <p>X</p>
        </div>
    </div>
</div>



<script>
      function showTab(tab) {
        // Ẩn tất cả các tab
        document.getElementById('show').style.display = 'none';
        document.getElementById('edit').style.display = 'none';
        document.getElementById('delete').style.display = 'none';

        // Hiển thị tab được nhấn
        document.getElementById(tab).style.display = 'block';
    }
    function CreateQuestionForm(){
        const createQuestion = document.getElementById('createQuestion')
        if (createQuestion.style.display === 'none' || createQuestion.style.display === '') {
            createQuestion.style.display = 'block'; 
        } else {
            createQuestion.style.display = 'none';
        }
    }

    function closeQuestionForm() {
        const createQuestion = document.getElementById('createQuestion')
        if (createQuestion.style.display === 'none' || createQuestion.style.display === '') {
            createQuestion.style.display = 'block'; 
        } else {
            createQuestion.style.display = 'none';
        }
    }
    function showEditQuestion(questionId) {
        const showQuestionForm = document.getElementById('showQuestionForm');
        showQuestionForm.style.display = 'block';

        fetch(`/question/${questionId}`)
        .then(response => response.json())
        .then(data => {
            document.getElementById('question_id').value = questionId;
            document.getElementById('showQuestion1').innerHTML = data.question;
            document.getElementById('showQuestion2').innerHTML = data.answer;
            document.getElementById('question').innerHTML = data.question;
            document.getElementById('answer').innerHTML = data.answer;
            document.getElementById('deleteQuestion').innerHTML = data.question;
        })
    }
    
    document.getElementById('edit-question-form').onsubmit = function(event) {
        event.preventDefault();
        const questionId = document.getElementById('question_id').value;
        this.action = `/question/${questionId}`;
        this.submit();
    }

    document.getElementById('delete-Question').onsubmit = function(event) {
        event.preventDefault();
        const questionId = document.getElementById('question_id').value;
        this.action = `/question/${questionId}`;
        this.submit();
    }

    function closeShowQuestion() {
        const showQuestionForm = document.getElementById('showQuestionForm')
        if (showQuestionForm.style.display === 'none' || showQuestionForm.style.display === '') {
            showQuestionForm.style.display = 'block'; 
        } else {
            showQuestionForm.style.display = 'none';
        }
    }


</script>
@endsection