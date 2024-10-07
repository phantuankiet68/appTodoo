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
                <button class="hover-text" >Click để xem chi tiết</button>
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
            <button class="show"><i class="fa-solid fa-eye"></i> show</button>
            <button class="edit"><i class="fa-solid fa-pen-to-square"></i> edit</button>
            <button class="delete"><i class="fa-solid fa-trash"></i> delete</button>
        </div>
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
</div>



<div class="modelEditForm" id="editStructure">
    <form method="POST" id="edit-structure">
        @csrf
        @method('PUT')
        <h2>{{ __('messages.Update') }}</h5>
        <input type="hidden" id="structure_id" value="id"/>
        <input type="hidden" id="language_id" name="language_id" value="2"/>

        <div class="form-input-category mt-10">
            <label for="name">{{ __('messages.Structure') }}</label>
            <input type="text" class="input-name" id="structure" name="structure">
        </div>
        <div class="form-textarea-category">
            <label for="description">{{ __('messages.Structural meaning') }}</label>
            <textarea class="textarea" id="meaning_of_structure" name="meaning_of_structure"></textarea> 
        </div>
        <div class="form-input-category mt-10">
            <label for="name">{{ __('messages.Example') }}</label>
            <input type="text" class="input-name" id="example" name="example">
        </div>
        <div class="form-textarea-category">
            <label for="description">{{ __('messages.Meaning of Example') }}</label>
            <textarea class="textarea" id="meaning_of_example" name="meaning_of_example"></textarea> 
        </div>  
        <div class="form-btn">
            <button>{{ __('messages.Add') }}</button>
        </div>
        <div class="BtnCloseCategoryTask" onclick="closeEditStructure()">
            <p>X</p>
        </div>
    </form>
</div>

<div class="modelDelete" id="DeleteStructure">
    <form method="POST" id="delete-Structure">
        @csrf
        @method('DELETE')
        <h3>{{ __('messages.Are you sure you want to delete?') }}</h3>
        <div class="form-btn-delete">
            <button>{{ __('messages.Delete') }}</button>
        </div>
        <div class="BtnCloseCategoryTask" onclick="closeDeleteStructure()">
            <p>X</p>
        </div>
    </form>
</div>

<script>
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

        fetch(`/quiz/${QuizItemId}`)
        .then(response => response.json())
        .then(data => {
            console.log(data);
            document.getElementById('quiz_id').value = QuizItemId;
            document.getElementById('language_id').value = data.language_id;
            document.getElementById('category_id').value = data.category_id;
            document.getElementById('question').value = data.question;
            document.getElementById('answer_a').value = data.answer_a;
            document.getElementById('answer_b').value = data.answer_b;
            document.getElementById('answer_c').value = data.answer_c;
            document.getElementById('answer_d').value = data.answer_d;
            document.getElementById('answer_correct').value = data.answer_correct;
        })
    }


</script>
@endsection