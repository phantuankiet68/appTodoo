@extends('app')

@section('title', 'Home Page')

@section('content')
<div class="todo">
    <div class="TodoBodyContent">
        <div class="col-3">
            <div class="title-todo">
                <h2>{{ __('messages.Category') }}</h2>|<span>{{ __('messages.Tasks') }}</span>
            </div>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            @if (session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
            @endif
            <div class="header-todo">
                <form action="" class="formSearch">
                    <div class="formInputSearch">
                        <input type="text" value="">
                    </div>
                    <button class="add-search"><i class="fa-solid fa-magnifying-glass"></i></button>
                </form>
                <div class="headerTopSpeed">
                    <button class="btn-add" id="showCategoryBtn">{{ __('messages.Add New') }}</button>
                    <div class="CreateCategory">
                        <form method="POST" action="{{ route('category_task.store') }}">
                        @csrf
                            @if (Auth::check())
                                <input type="hidden" id="user_id" name="user_id" value="{{ Auth::user()->id }}"/>
                            @endif
                            <div class="form-input-category">
                                <label for="name">{{ __('messages.Name') }}</label>
                                <input type="text" class="input-name" id="name" name="name">
                            </div>
                            <div class="form-textarea-category">
                                <label for="description">{{ __('messages.Description') }}</label>
                                <textarea name="description"  id="description" class="textArea_description"></textarea>
                            </div>
                            <div class="form-select-category">
                                <label for="status">{{ __('messages.Status') }}</label>
                                <select name="status" id="status">
                                    <option value="0">{{ __('messages.Hide') }}</option>
                                    <option value="1">{{ __('messages.Show') }}</option>
                                </select>
                            </div>
                            <div class="form-btn">
                                <button>{{ __('messages.Add') }}</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="body-category-todo">
                <div class="recent--patient">
                    <div class="tables">
                        <table>
                            <thead>
                                <tr>
                                    <th>{{ __('messages.Name') }}</th>
                                    <th class="th-none">{{ __('messages.Date Created') }}</th>
                                    <th class="text-center">{{ __('messages.Status') }}</th>
                                    <th class="text-center">{{ __('messages.Settings') }}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($categoryTasks as $task)
                                <tr>
                                    <td>{{ $task->name }}</td>
                                    <td class="td-none">{{ $task->created_at->format('d-m-Y') }}</td>
                                    <td class="text-center "> 
                                        <input type="checkbox" name="status[]" id="status_{{ $task->id }}" 
                                            value="1" {{ $task->status == 1 ? 'checked' : '' }}>
                                    </td>
                                    <td class="text-center">
                                        <a href="#" onclick="showEditPopup({{ $task->id }})">
                                            <i class="fa-regular fa-pen-to-square edit"></i>
                                        </a>
                                        <a href="#" onclick="showDeletePopup({{ $task->id }})">
                                            <i class="fa-solid fa-trash delete"></i>
                                        </a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="d-flex justify-content-center link-margin">
                            {{ $categoryTasks->links('') }} <!-- Hoặc pagination::bootstrap-4 nếu bạn sử dụng Bootstrap 4 -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-9">
            <div class="title-todo">
                <h2>{{ __('messages.Project') }}</h2>|<span>{{ __('messages.Tasks') }}</span>
            </div>
            <div class="header-todo-Content">
                <div class="header-todo-left">
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
                    <form action="" class="formSearch">
                        <div class="formInputSearch">
                            <input type="text" value="">
                        </div>
                        <button class="add-search"><i class="fa-solid fa-magnifying-glass"></i></button>
                    </form>
                </div>
                <div class="header-todo-right">
                    <button class="btn-add" id="openTodoCreate"  fdprocessedid="z9dji27">{{ __('messages.Add New') }}</button>
                </div>
            </div>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            @if (session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
            @endif
            <div class="body-todo body-tables-todo">
                <div class="recent--patient FormTable_800">
                    <div class="tables ScrollTable">
                        <table>
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>{{ __('messages.Name') }}</th>
                                    <th style="width:250px; margin-right: 15px;">{{ __('messages.Description') }}</th>
                                    <th class="text-center">{{ __('messages.Start Date') }}</th>
                                    <th class="text-center">{{ __('messages.Create by') }}</th>
                                    <th class="text-center">{{ __('messages.End Date') }}</th>
                                    <th>{{ __('messages.Category') }}</th>
                                    <th>{{ __('messages.Status') }}</th>
                                    <th>{{ __('messages.Settings') }}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($todos as $todo)
                                <tr>
                                    <td>{{ $todo->id }}</td>
                                    <td>{{ $todo->name }}</td>
                                    <td>
                                        <div class="text-truncate" style="width: 250px;">
                                            {!! $todo->description !!}
                                        </div>
                                    </td>
                                    <td class="text-center">{{ $todo->date_start }}</td>
                                    <td class="text-center">{{ $todo->userTodo ? $todo->userTodo->full_name : 'Không có danh mục' }}</td>
                                    <td class="text-center">{{ $todo->date_end }}</td>
                                    <td>{{ $todo->categoryTodo ? $todo->categoryTodo->name : 'Không có danh mục' }}</td>
                                    <td class="text-center"> 
                                        <input type="checkbox" name="todo[]" id="todo_{{ $todo->id }}" 
                                            value="1" {{ $todo->status == 1 ? 'checked' : '' }}>
                                    </td>
                                    <td class="text-center">
                                        <a href="#" onclick="showEditTodoPopup({{ $todo->id }})">
                                            <i class="fa-regular fa-pen-to-square edit"></i>
                                        </a>
                                        <a href="#" onclick="showDeleteTodoPopup({{ $todo->id }})">
                                            <i class="fa-solid fa-trash delete"></i>
                                        </a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="d-flex justify-content-center link-margin">
                            {{ $todos->links('') }} <!-- Hoặc pagination::bootstrap-4 nếu bạn sử dụng Bootstrap 4 -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="ModelCreateCategoryTask">
        <form method="POST" id="edit-task-form">
        @csrf
        @method('PUT')
        <input type="hidden" id="task-id" value="id"/>
        <div class="form-input-category">
            <label for="name">{{ __('messages.Name') }}</label>
            <input type="text" class="input-name" id="name_task" name="name">
        </div>
        <div class="form-textarea-category">
            <label for="description">{{ __('messages.Description') }}</label>
            <textarea name="description"  id="description_task" class="textArea_description"></textarea>
        </div>
        <div class="form-select-category">
            <label for="status">{{ __('messages.Status') }}</label>
            <select name="status" id="status_task">
                <option value="0">{{ __('messages.Hide') }}</option>
                <option value="1">{{ __('messages.Show') }}</option>
            </select>
        </div>
        <div class="form-btn">
            <button>{{ __('messages.Update') }}</button>
        </div>
        <div class="BtnCloseEditTask" onclick="closeEditPopup()">
            <p>X</p>
        </div>
    </form>
</div>

<div class="ModelDeleteCategoryTask">
    <form method="POST" id="delete-form">
        @csrf
        @method('DELETE')
        <h3>{{ __('messages.Are you sure you want to delete?') }}</h3>
        <div class="form-btn-delete">
            <button>{{ __('messages.Delete') }}</button>
        </div>
        <div class="BtnCloseCategoryTask" onclick="closeDeletePopup()">
            <p>X</p>
        </div>
    </form>
</div>

<div class="ModelCreateTodo">
    <form  method="POST" action="{{ route('todo.store') }}" >
    @csrf
        <h2>{{ __('messages.Add New') }}</h5>
        @if (Auth::check())
            <input type="hidden" id="task-id" name="user_id" value="{{ Auth::user()->id }}"/>
        @endif
        <div class="form-input-category">
            <label for="name">{{ __('messages.Name') }}</label>
            <input type="text" class="input-name" id="name_task" name="name">
        </div>
        <div class="form-textarea-category">
            <label for="description">{{ __('messages.Description') }}</label>
            <textarea id="editor" name="description"></textarea> 
        </div>
        <div class="form-group-info">
            <div class="form-input-category">
                <label for="name">{{ __('messages.Start Date') }}</label>
                <input type="date" class="input-name" id="name_task" name="date_start">
            </div>
            <div class="form-input-category">
                <label for="name">{{ __('messages.End Date') }}</label>
                <input type="date" class="input-name" id="name_task" name="date_end">
            </div>
        </div>
        <div class="form-group-info">
            <div class="form-select-category">
                <label for="status">{{ __('messages.Category') }}</label>
                <select name="category_id" id="status">
                @foreach($categoryTasks as $task)
                    <option value="{{ $task->id }}">{{ $task->name }}</option>
                @endforeach
                </select>
            </div>
            <div class="form-select-category">
                <label for="status">{{ __('messages.Status') }}</label>
                <select name="status" id="status">
                    <option value="0">{{ __('messages.Hide') }}</option>
                    <option value="1">{{ __('messages.Show') }}</option>
                </select>
            </div>
        </div>
        <div class="form-btn">
            <button type="submit">{{ __('messages.Add') }}</button>
        </div>
        <div class="BtnCloseCreate" onclick="closeCreateTodoPopup()">
            <p>X</p>
        </div>
    </form>
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
                <label for="status">{{ __('messages.Category') }}</label>
                <select name="category_id" id="todo-category-id">
                @foreach($categoryTasks as $task)
                    <option value="{{ $task->id }}">{{ $task->name }}</option>
                @endforeach
                </select>
            </div>
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

// Chức năng đóng category task
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
