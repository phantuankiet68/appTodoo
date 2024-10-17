@extends('app')

@section('title', 'Home Page')

@section('content')
<div class="todo">
    <div class="todoHeader topHeaderTodo">
        <div class="topHeader">
            <h2>{{ __('messages.Tasks') }}</h2> | <span>{{ __('messages.Home') }}</span>
        </div>
        <div class="bodyHeader formSearchIssue">
            <form action="{{ route('tasks.index') }}" method="GET" class="formSearch formIssue">
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
                                    <th class="text-center">{{ __('messages.Start Date') }}</th>
                                    <th class="text-center">{{ __('messages.Status') }}</th>
                                    <th class="text-center">{{ __('messages.Show') }}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($tasks as $item)
                                <tr>
                                    <td class="jus-center">
                                        <p class="td-1">{{ $item->id }}</p>
                                    </td>
                                    <td class="prop-text" style="width: 350px;">
                                        <div class="text-truncate">
                                            {{ $item->name }}
                                        </div>
                                    </td>
                                    <td>
                                        <div class="text-truncate" style="width: 250px;">
                                            {!! $item->description !!}
                                        </div>
                                    </td>
                                    <td class="text-center">{{ $item->current_start }}</td>
                                    <td class="text-center">{{ $item->user ? $item->user->full_name : 'Không có danh mục' }}</td>
                                    <th class="text-center">{{ $item->created_at->format('d/m/Y') }}</th>
                                    <td class="text-center"> 
                                        <input type="checkbox" name="todo[]" id="todo_{{ $item->id }}" 
                                            value="1" {{ $item->status == 1 ? 'checked' : '' }}>
                                    </td>
                                    <td class="text-center">
                                        <button class="btn-show" onclick="showTaskPopup({{ $item->id }})"><i class="fa-regular fa-eye"></i></button>
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
                @include('components.editor')
                <input type="text" name="description" id="hiddenContent" style="display:none;">
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

<div class="model" id="showTask">
    <div class="ModelCreateTodo">
        <div class="buttonAction">
            <button class="show" onclick="showTab('show')"><i class="fa-solid fa-eye"></i> Show</button>
            <button class="edit" onclick="showTab('edit')"><i class="fa-solid fa-pen-to-square"></i> Edit</button>
            <button class="delete" onclick="showTab('delete')"><i class="fa-solid fa-trash"></i> Delete</button>
        </div>

        <div class="showContentComponent" id="show">
            <div class="showNameComponent">
               <span>{{ __('messages.Create by') }}: <b id="showUser"></b></span>
               <p>{{ __('messages.Date Created') }}: <i id="showCurrentDate"></i></p>
            </div>
            <span id="showName"></span>
            <div id="showDescription"></div>
        </div>

        <div class="editContentQuestion" id="edit" style="display: none;">
            <div class="titleEditError">
                <h2>🌟 Khám Phá Sự Đơn Giản trong Quản Lý Component! 🌟</h2>
                <p>Chúng tôi rất vui mừng thông báo rằng chức năng Chỉnh sửa (Edit) cho Component đang trong quá trình hoàn thiện! Với tính năng này, bạn sẽ có khả năng cập nhật và điều chỉnh nội dung một cách dễ dàng, giúp nội dung của bạn luôn nổi bật và phù hợp. Bên cạnh đó, tính năng Thêm cho phép bạn bổ sung những Component mới đầy sáng tạo, trong khi tính năng Xóa giúp loại bỏ những thành phần không còn cần thiết. Chúng tôi đang nỗ lực mang đến cho bạn trải nghiệm quản lý Component tốt nhất, giúp tối ưu hóa quy trình làm việc và nâng cao giá trị cho dự án của bạn. Hãy cùng chờ đón những cập nhật thú vị sắp tới!</p>
            </div>
        </div>

        <div class="deleteContentQuestion" id="delete" style="display: none;">
            <form method="POST" id="delete-Code">
                @csrf
                @method('DELETE')
                <input type="hidden" id="task_id" name="task_id" />
                <h3 class="text-center">{{ __('messages.Are you sure you want to delete?') }}</h3>
                <p class="text-center" id="showNameDelete"></p> 
                <div class="form-btn-delete">
                    <button type="submit">{{ __('messages.Delete') }}</button>
                </div>
            </form>
        </div>
        <div class="BtnCloseCategoryTask" onclick="closeDeleteTask()">
            <p>X</p>
        </div>
    </div>
</div>



<!-- <div class="ModelEditTodoForm">
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
</div> -->

<script>
function updateComment() {
    let commentContent = document.getElementById('commentContentPost').value;
    document.getElementById('comment').value = commentContent;
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

function showTab(tab) {
    document.getElementById('show').style.display = 'none';
    document.getElementById('edit').style.display = 'none';
    document.getElementById('delete').style.display = 'none';
    document.getElementById(tab).style.display = 'block';
}
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

// Xử lý hiển thị thông tin vào form edit todo
function showTaskPopup(taskId) {
    const showTaskPopup = document.getElementById('showTask');
    showTaskPopup.style.display = 'block';
    fetch(`/tasks/${taskId}`)
    .then(response => response.json())
    .then(data => {
        document.getElementById('showUser').innerHTML = data.user.full_name;
        document.getElementById('showCurrentDate').innerHTML = data.current_start;
        document.getElementById('showName').innerHTML = data.name;
        document.getElementById('showNameDelete').innerHTML = data.name;
        document.getElementById('showDescription').innerHTML = data.description;
        document.getElementById('task_id').value = data.id;
    })
}


function closeDeleteTask() {
    const showTaskPopup = document.getElementById('showTask')
    if (showTaskPopup.style.display === 'none' || showTaskPopup.style.display === '') {
        showTaskPopup.style.display = 'block'; 
    } else {
        showTaskPopup.style.display = 'none';
    }
}




</script>

@endsection
