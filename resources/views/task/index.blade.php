@extends('app')

@section('title', 'Home Page')

@section('content')
<div class="todo">
    <div class="todoHeader topHeaderTodo">
        <div class="topHeader">
            <h2>{{ __('messages.Issue') }}</h2> | <span>{{ __('messages.Home') }}</span>
        </div>
        <div class="bodyHeader formSearchIssue">
            <form action="{{ route('issue.index') }}" method="GET" class="formSearch formIssue">
                <div class="formInputSearch">
                    <input type="text" name="search" placeholder="{{ __('messages.Search by subject, key, description...') }}" value="{{ request('search') }}">
                </div>
                <button type="submit" class="add-search"><i class="fa-solid fa-magnifying-glass"></i></button>
            </form>
        </div>
        <div class="footerHeader">
            <button class="btn-add" onclick="openStask()">{{ __('messages.Add New') }}</button>
        </div>
    </div>
    <div class="TaskBodyContent">
        <div class="col-9">
            <div class="body-todo body-tables-todo">
                <div class="recent--patient">
                    <div class="tables">
                        <table>
                            <thead>
                                <tr>
                                    <th class="text-center" style="width:80px;">ID</th>
                                    <th>{{ __('messages.Name') }}</th>
                                    <th style="width:250px; margin-right: 15px;">{{ __('messages.Description') }}</th>
                                    <th class="text-center">{{ __('messages.Start Date') }}</th>
                                    <th class="text-center">{{ __('messages.Create by') }}</th>
                                    <th class="text-center">{{ __('messages.Show') }}</th>
                                    <th class="text-center">{{ __('messages.Status') }}</th>
                                    <th class="text-center">{{ __('messages.Settings') }}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($tasks as $item)
                                <tr>
                                    <td class="jus-center">
                                        <p class="td-1">{{ $item->id }}</p>
                                    </td>
                                    <td>{{ $item->name }}</td>
                                    <td>
                                        <div class="text-truncate" style="width: 250px;">
                                            {!! $item->description !!}
                                        </div>
                                    </td>
                                    <td class="text-center">{{ $item->current_start }}</td>
                                    <td class="text-center">{{ $item->user ? $item->user->full_name : 'Không có danh mục' }}</td>
                                    <td class="text-center">
                                        <button class="btn-show"><i class="fa-regular fa-eye"></i></button>
                                    </td>
                                    <td class="text-center"> 
                                        <input type="checkbox" name="todo[]" id="todo_{{ $item->id }}" 
                                            value="1" {{ $item->status == 1 ? 'checked' : '' }}>
                                    </td>
                                    <td class="text-center">
                                        <a href="#" onclick="showEditTodoPopup({{ $item->id }})">
                                            <i class="fa-regular fa-pen-to-square edit"></i>
                                        </a>
                                        <a href="#" onclick="showDeleteTodoPopup({{ $item->id }})">
                                            <i class="fa-solid fa-trash delete"></i>
                                        </a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="d-flex justify-content-center link-margin">
                            {{ $tasks->links('') }} 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@if (session('success'))
    <div id="popup-category" class="popup-category success">
        {{ session('success') }}
    </div>
@endif


@if (session('success_update'))
    <div id="popup-category" class="popup-category success">
        {{ session('success_update') }}
    </div>
@endif

@if ($errors->any())
    <div id="popup-category" class="popup-category error">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif


<div class="model" id="CreateTask">
    <div class="ModelCreateTodo">
        <form method="POST" action="{{ route('tasks.store') }}">
            @csrf
            <h2>{{ __('messages.Add New') }}</h2>
            @if (Auth::check())
                <input type="hidden" name="user_id" value="{{ Auth::user()->id }}"/>
            @endif
            <div class="form-input-category">
                <label for="name">{{ __('messages.Name') }}</label>
                <input type="text" class="input-name" name="name">
            </div>
            <div class="form-textarea-category">
                <label for="description">{{ __('messages.Description') }}</label>
                <textarea id="editor" name="description"></textarea>
            </div>
            <div class="form-group-info">
                <div class="form-input-category">
                    <label for="current_start">{{ __('messages.Start Date') }}</label>
                    <input type="date" class="input-name" id="current_start" name="current_start">
                </div>
                <div class="form-select-category">
                    <label for="status">{{ __('messages.Status') }}</label>
                    <select name="status" id="status">
                        <option value="1">{{ __('messages.Show') }}</option>
                        <option value="0">{{ __('messages.Hide') }}</option>
                    </select>
                </div>
            </div>
            <div class="form-btn">
                <button type="submit">{{ __('messages.Add New') }}</button>
            </div>
            <div class="BtnCloseCreate" onclick="closeCreateTask()">
                <p>X</p>
            </div>
        </form>
    </div>
</div>



<div class="ModelEditTodoForm">
    <form method="POST" id="edit-todo-form">
        @csrf
        @method('PUT')
        <h2>{{ __('messages.Update') }}</h5>
        <input type="hidden" id="todo-id" value="id"/>
        @if (Auth::check())
            <input type="hidden" id="user_id" name="user_id" value="{{ Auth::user()->id }}"/>
        @endif
        <div class="form-input-category">
            <label for="name">{{ __('messages.Name') }}</label>
            <input type="text" class="input-name" id="todo-name" name="name">
        </div>
        <div class="form-textarea-category">
            <label for="description">{{ __('messages.Description') }}</label>
            <textarea id="editor1" name="description"><div id="todo-description"></div></textarea> 
        </div>
        <div class="form-group-info">
            <div class="form-input-category">
                <label for="name">{{ __('messages.Start Date') }}</label>
                <input type="date" class="input-name" id="todo-date-start" name="date_start">
            </div>
            <div class="form-input-category">
                <label for="name">{{ __('messages.End Date') }}</label>
                <input type="date" class="input-name" id="todo-date-end" name="date_end">
            </div>
        </div>
        <div class="form-group-info">
            <div class="form-select-category">
                <label for="todo-status">{{ __('messages.Status') }}</label>
                <select name="status" id="todo-status">
                    <option value="0">{{ __('messages.Hide') }}</option>
                    <option value="1">{{ __('messages.Show') }}</option>
                </select>
            </div>
        </div>
        <div class="form-btn">
            <button type="submit">{{ __('messages.Update') }}</button>
        </div>
        <div class="BtnCloseCreate" onclick="closeEditTodoFromPopup()">
            <p>X</p>
        </div>
    </form>
</div>

<div class="modelDeleteFormTodo">
    <form method="POST" id="delete-todo-form">
        @csrf
        @method('DELETE')
        <h3>{{ __('messages.Are you sure you want to delete?') }}</h3>
        <div class="form-btn-delete">
            <button>{{ __('messages.Delete') }}</button>
        </div>
        <div class="BtnCloseCategoryTask" onclick="closeDeleteTodoFormPopup()">
            <p>X</p>
        </div>
    </form>
</div>


<script>
    CKEDITOR.replace('editor');
    CKEDITOR.replace('editor1');
</script>
<script>

window.onload = function() {
    const today = new Date();
    today.setDate(today.getDate() + 1); 

    const dd = String(today.getDate()).padStart(2, '0'); 
    const mm = String(today.getMonth() + 1).padStart(2, '0'); 
    const yyyy = today.getFullYear(); 

    const formattedDate = `${yyyy}-${mm}-${dd}`;
    document.getElementById("current_start").value = formattedDate; 
}

document.addEventListener('DOMContentLoaded', function() {
    const popup = document.querySelector('#popup-category');
    if (popup) {
        popup.style.display = 'block';

        setTimeout(() => {
            popup.style.display = 'none';
        }, 5000);
    }
});

function openStask() {
    const CreateTask = document.getElementById('CreateTask')
    if (CreateTask.style.display === 'none' || CreateTask.style.display === '') {
        CreateTask.style.display = 'block'; 
    } else {
        CreateTask.style.display = 'none';
    }
}

function closeCreateTask() {
    const CreateTask = document.getElementById('CreateTask')
    if (CreateTask.style.display === 'none' || CreateTask.style.display === '') {
        CreateTask.style.display = 'block'; 
    } else {
        CreateTask.style.display = 'none';
    }
}



function closeCreateTodoPopup() {
    const modelCreateTask = document.querySelector('.ModelCreateTodo');
    
    // Kiểm tra nếu popup đang ẩn (display: none)
    if (modelCreateTask.style.display === 'none' || modelCreateTask.style.display === '') {
        modelCreateTask.style.display = 'block'; // Hiển thị popup
    } else {
        modelCreateTask.style.display = 'none'; // Ẩn popup
    }
}

// Xử lý hiển thị thông tin vào form edit todo
function showEditTodoPopup(todoId) {
    const ModelEditTodoForm = document.querySelectorAll(".ModelEditTodoForm");
    const isVisible = ModelEditTodoForm[0].style.display !== 'none';

    ModelEditTodoForm.forEach(task => {
        task.style.display = isVisible ? 'none' : 'block';
    });
    fetch(`/todo/${todoId}`)
    .then(response => response.json())
    .then(data => {
        console.log(data);
        document.getElementById('todo-id').value = todoId;
        document.getElementById('todo-category-id').value = data.category_id;
        document.getElementById('todo-name').value = data.name;
        CKEDITOR.instances['editor1'].setData(data.description); // Dùng CKEditor API
        document.getElementById('todo-date-start').value = data.date_start;
        document.getElementById('todo-date-end').value = data.date_end;
        document.getElementById('todo-status').value = data.status;
    })
}

// Chức năng cập nhật thông tin qua API cho todo
document.getElementById('edit-todo-form').onsubmit = function(event) {
    event.preventDefault();
    const todoId = document.getElementById('todo-id').value;
    this.action = `/todo/${todoId}`;
    this.submit();
}

// Ẩn hiện popup form edit todo
function closeEditTodoFromPopup() {
    const editTodoPopup = document.querySelector('.ModelEditTodoForm');
    
    if (editTodoPopup.style.display === 'none' || editTodoPopup.style.display === '') {
        editTodoPopup.style.display = 'block'; // Hiển thị popup
    } else {
        editTodoPopup.style.display = 'none'; // Ẩn popup
    }
}

// Ẩn hiện popup form delete todo
function showDeleteTodoPopup(todoId) {
    const deletePopup = document.querySelector('.modelDeleteFormTodo');
    deletePopup.style.display = 'block';
    const deleteFormTodo = document.getElementById('delete-todo-form');
    deleteForm.action = `/todo/${todoId}`;
}

// Ẩn hiện popup form delete todo
function closeDeleteTodoFormPopup() {
    const deletePopupDelete = document.querySelector('.modelDeleteFormTodo');
    if (deletePopupDelete.style.display === 'none' || deletePopupDelete.style.display === '') {
        deletePopupDelete.style.display = 'block';
    } else {
        deletePopupDelete.style.display = 'none';
    }
}

// Xử lý hiển thị thông tin vào form edit category task
function showEditPopup(taskId) {
    const modelCreateCategoryTasks = document.querySelectorAll(".ModelCreateCategoryTask");

    const isVisible = modelCreateCategoryTasks[0].style.display !== 'none';

    modelCreateCategoryTasks.forEach(task => {
        task.style.display = isVisible ? 'none' : 'block';
    });
    fetch(`/category_task/${taskId}`)
    .then(response => response.json())
    .then(data => {
        console.log(data);
        document.getElementById('task-id').value = taskId;
        document.getElementById('name_task').value = data.name;
        document.getElementById('description_task').value = data.description;
        document.getElementById('status_task').value = data.status;
    })
}

// Chức năng cập nhật thông tin qua API cho category task
document.getElementById('edit-task-form').onsubmit = function(event) {
    event.preventDefault();
    const taskId = document.getElementById('task-id').value;
    
    this.action = `/category_task/${taskId}`;
    this.submit();
}

// Chức năng đóng category task
function closeEditPopup() {
    const modelCreateTask = document.querySelector('.ModelCreateCategoryTask');
    
    // Kiểm tra nếu popup đang ẩn (display: none)
    if (modelCreateTask.style.display === 'none' || modelCreateTask.style.display === '') {
        modelCreateTask.style.display = 'block'; // Hiển thị popup
    } else {
        modelCreateTask.style.display = 'none'; // Ẩn popup
    }
}

// Chức năng xóa thông tin qua API cho category task
function showDeletePopup(taskId) {
    const deletePopup = document.querySelector('.ModelDeleteCategoryTask');
    deletePopup.style.display = 'block';
    const deleteForm = document.getElementById('delete-form');
    deleteForm.action = `/category_task/${taskId}`;
}

// Kiểm tra nếu popup đang ẩn (display: none)
function closeDeletePopup() {
    const deletePopup = document.querySelector('.ModelDeleteCategoryTask');
    if (deletePopup.style.display === 'none' || deletePopup.style.display === '') {
        deletePopup.style.display = 'block'; 
    } else {
        deletePopup.style.display = 'none';
    }
}



</script>

@endsection
