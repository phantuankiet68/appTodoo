@extends('app')

@section('title', 'Home Page')

@section('content')
<div class="todo">
    <div class="todoHeader topHeaderTodo">
        <div class="topHeader">
            <h2>{{ __('messages.Issue') }}</h2> | <span>{{ __('messages.Home') }}</span>
        </div>
        <div class="bodyHeader">
            <form action="">
                <div class="Users--right--btns">
                    <select name="date" id="date" class="select-dropdown doctor--filter">
                        <option>Date of Month</option>
                        <option value="free">Admin</option>
                        <option value="scheduled">Users</option>
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
            <form action="">
                <div class="Users--right--btns">
                    <select name="date" id="date" class="select-dropdown doctor--filter">
                        <option >Filter</option>
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
        <div class="footerHeader">
            <button class="btn-add" id="openStaskIssue" onclick="openStaskIssue()">{{ __('messages.Add New') }}</button>
        </div>
    </div>
    <div class="projecTodoBody">
        <div class="recent--patient body-tables-issue">
            <div class="tables">
                <table>
                    <thead>
                        <tr>
                            <th class="t-center" style="width: 60px;">ID</th>
                            <th>{{ __('messages.Key') }}</th>
                            <th>{{ __('messages.Subject') }}</th>
                            <th>{{ __('messages.Create by') }}</th>
                            <th>{{ __('messages.Level') }}</th>
                            <th>{{ __('messages.Status') }}</th>
                            <th>{{ __('messages.Start Date') }}</th>
                            <th>{{ __('messages.End Date') }}</th>
                            <th>{{ __('messages.Category') }}</th>
                            <th>{{ __('messages.Settings') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($issues as $issue)
                        <tr>
                            <td class="jus-center">
                                <p class="td-1">{{$issue->id}}</p>
                            </td>
                            <td><a class="key_issue" href="https://fontawesome.com/">{{$issue->key}}</a></td>
                            <td><p class="text-truncate">{!!$issue->description!!}</p></td>
                            <td>
                                <div class="table_user">
                                    <p>{{ $issue->user ? $issue->user->full_name : 'Không có danh mục' }}</p>
                                </div>
                            </td>
                            <td class="pending">
                                @if ($issue->level = 1)
                                <p class="importantIssue">Important</p>
                                @else
                                <p class="normalIssue">Normal</p>
                                @endif
                            </td>
                            <td class="pending">
                                @if ($issue->status = 2)
                                <p class="resolvedIssue">Resolved</p>
                                @elseif ($issue->status = 1)
                                <p class="inProgressIssue">In Progress</p>
                                @else
                                <p class="openIssue">Open</p>
                                @endif
                            </td>
                            <td>{{$issue->start_date}}</td>
                            <td>{{$issue->end_date}}</td>
                            <td>{{ $issue->category ? $issue->category->name : 'Không có danh mục' }}</td>
                            <td class="text-center">
                                <a href="{{ route('issue.show', $issue->id) }}">
                                    <i class="fa-regular fa-pen-to-square edit"></i>
                                </a>
                                <a href="#" onclick="showDeleteIssuePopup({{ $issue->id }})">
                                    <i class="fa-solid fa-trash delete"></i>
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="pagination">
                    <button id="prev" onclick="prevPage()">Prev</button>
                    <span id="page-info">1</span>
                    <span id="page-info">2</span>
                    <button id="next" onclick="nextPage()">Next</button>
                </div>
            </div>
        </div>
        <div class="projecTodoBodyNotify">
            <div class="projectTodoNotify">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                @if (session('success_create'))
                    <div class="alert alert-success">
                        {{ session('success_create') }}
                    </div>
                @endif
                <div class="projectTodoNotifyHeader">
                    <h3>{{ __('messages.Category') }}</h3>
                    <button class="btnCategory" onclick="CreateCategoryForm()">{{ __('messages.Add New') }}</button>
                </div>
                <div class="body-category-todo">
                <div class="recent--patient">
                    <div class="tables">
                        <table>
                            <thead>
                                <tr>
                                    <th>{{ __('messages.Name') }}</th>
                                    <th class="text-center">{{ __('messages.Status') }}</th>
                                    <th class="text-center">{{ __('messages.Settings') }}</th>
                                </tr>
                            </thead>
                            <tbody>
                               @foreach($category as $cate)
                                <tr>
                                    <td>{{$cate->name}}</td>
                                    <td class="text-center "> 
                                        <input type="checkbox" name="status[]" id="status_{{ $cate->id }}" 
                                            value="1" {{ $cate->status == 1 ? 'checked' : '' }}>
                                    <td class="text-center">
                                        <a href="#" onclick="showEditPopup({{ $cate->id }})">
                                            <i class="fa-regular fa-pen-to-square edit"></i>
                                        </a>
                                        <a href="#" onclick="showDeletePopup({{ $cate->id }})">
                                            <i class="fa-solid fa-trash delete"></i>
                                        </a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="d-flex justify-content-center link-margin">
                          
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
</div>

<div class="ModelCreateCategory">
    <form method="POST" action="{{ route('category.store') }}">
    @csrf
        <h2>{{ __('messages.Add New') }}</h5>
        @if (Auth::check())
            <input type="hidden" id="user_id" name="user_id" value="{{ Auth::user()->id }}"/>
        @endif
        <input type="hidden" id="key" name="key" value="3"/>
        <div class="form-input-category">
            <label for="name">{{ __('messages.Name') }}</label>
            <input type="text" class="input-name" id="name" name="name">
        </div>
        <div class="form-select-category mt-10">
            <label for="status">{{ __('messages.Status') }}</label>
            <select name="status" id="status">
                <option value="0">{{ __('messages.Hide') }}</option>
                <option value="1">{{ __('messages.Show') }}</option>
            </select>
        </div>
        <div class="form-btn">
            <button>{{ __('messages.Add') }}</button>
        </div>
        <div class="BtnCloseCategoryTask" onclick="closeCreateCategoryFormPopup()">
            <p>X</p>
        </div>
    </form>
</div>

<div class="ModelEidtCategory">
   <form method="POST" id="edit-category-form">
        @csrf
        @method('PUT')
        <h2>{{ __('messages.Update') }}</h5>
        <input type="hidden" id="category-id" value="id"/>
        @if (Auth::check())
            <input type="hidden" id="user_id" name="user_id" value="{{ Auth::user()->id }}"/>
        @endif
        <input type="hidden" id="key" name="key" value="3"/>
        <div class="form-input-category mt-10">
            <label for="name">{{ __('messages.Name') }}</label>
            <input type="text" class="input-name" id="category-name" name="name">
        </div>
        <div class="form-select-category mt-10">
            <label for="status">{{ __('messages.Status') }}</label>
            <select name="status" id="category-status">
                <option value="0">{{ __('messages.Hide') }}</option>
                <option value="1">{{ __('messages.Show') }}</option>
            </select>
        </div>
        <div class="form-btn">
            <button>{{ __('messages.Update') }}</button>
        </div>
        <div class="BtnCloseCategoryTask" onclick="closeEditCategory()">
            <p>X</p>
        </div>
    </form>
</div>

<div class="ModelCreateIssue">
    <form  method="POST" action="{{ route('issue.store') }}" >
    @csrf
        <h2>{{ __('messages.Add New') }}</h5>
        @if (Auth::check())
            <input type="hidden" id="user_id" name="user_id" value="{{ Auth::user()->id }}"/>
        @endif
        <div class="form-input-category">
            <label for="subject">{{ __('messages.Subject') }}</label>
            <input type="text" class="input-name" id="subject" name="subject">
        </div>
        <div class="form-group-info">
            <div class="form-input-category">
                <label for="key">{{ __('messages.Key') }}</label>
                <input type="text" class="input-name" id="key_issue" name="key">
                <button type="button" class="btnGenerate" onclick="generateButton()" >Generate</button>
            </div>
            <div class="form-select-category">
                <label for="level">{{ __('messages.Level') }}</label>
                <select name="level" id="level">
                    <option value="0">{{ __('messages.Normal') }}</option>
                    <option value="1">{{ __('messages.Important') }}</option>
                </select>
            </div>
        </div>
        <div class="form-textarea-category">
            <label for="description">{{ __('messages.Description') }}</label>
            <textarea id="editor" name="description"></textarea> 
        </div>
        <div class="form-input-category mt-10">
            <label for="reference">{{ __('messages.Reference') }}</label>
            <input type="text" class="input-name" id="reference" name="reference">
        </div>
        <div class="form-group-info">
            <div class="form-input-category">
                <label for="start_date">{{ __('messages.Start Date') }}</label>
                <input type="date" class="input-name" id="start_date" name="start_date">
            </div>
            <div class="form-input-category">
                <label for="end_date">{{ __('messages.End Date') }}</label>
                <input type="date" class="input-name" id="end_date" name="end_date">
            </div>
        </div>
        <div class="form-group-info">
            <div class="form-select-category">
                <label for="status">{{ __('messages.Category') }}</label>
                <select name="category_id" id="status">
                @foreach($category as $cate)
                    <option value="{{ $cate->id }}">{{ $cate->name }}</option>
                @endforeach
                </select>
            </div>
            <div class="form-select-category">
                <label for="status">{{ __('messages.Status') }}</label>
                <select name="status" id="status">
                    <option value="0">{{ __('messages.Not done') }}</option>
                    <option value="1">{{ __('messages.Done') }}</option>
                    <option value="2">{{ __('messages.Just created') }}</option>
                </select>
            </div>
        </div>
        <div class="form-btn">
            <button type="submit">{{ __('messages.Add') }}</button>
        </div>
        <div class="BtnCloseCreate" onclick="closeCreateIssuePopup()">
            <p>X</p>
        </div>
    </form>
</div>
<div class="modelDeleteFormIssue">
    <form method="POST" id="delete-issue-form">
        @csrf
        @method('DELETE')
        <h3>{{ __('messages.Are you sure you want to delete?') }}</h3>
        <div class="form-btn-delete">
            <button>{{ __('messages.Delete') }}</button>
        </div>
        <div class="BtnClose" onclick="closeDeleteIssueFormPopup()">
            <p>X</p>
        </div>
    </form>
</div>

<script>
    CKEDITOR.replace('editor');
</script>

<script>

    function openStaskIssue() {
        const modelCreateIssue = document.querySelector('.ModelCreateIssue');
        
        // Kiểm tra nếu popup đang ẩn (display: none)
        if (modelCreateIssue.style.display === 'none' || modelCreateIssue.style.display === '') {
            modelCreateIssue.style.display = 'block'; // Hiển thị popup
        } else {
            modelCreateIssue.style.display = 'none'; // Ẩn popup
        }
    }
    function closeCreateIssuePopup() {
        const modelCreateIssue = document.querySelector('.ModelCreateIssue');
        
        // Kiểm tra nếu popup đang ẩn (display: none)
        if (modelCreateIssue.style.display === 'none' || modelCreateIssue.style.display === '') {
            modelCreateIssue.style.display = 'block'; // Hiển thị popup
        } else {
            modelCreateIssue.style.display = 'none'; // Ẩn popup
        }
    }

    // Ẩn hiện popup form delete Issue
    function showDeleteIssuePopup(issueId) {
        const deletePopup = document.querySelector('.modelDeleteFormIssue');
        deletePopup.style.display = 'block';
        const deleteFormIssue = document.getElementById('delete-issue-form');
        deleteForm.action = `/issue/${issueId}`;
    }

    // Ẩn hiện popup form delete issue
    function closeDeleteIssueFormPopup() {
        const deletePopupDelete = document.querySelector('.modelDeleteFormIssue');
        if (deletePopupDelete.style.display === 'none' || deletePopupDelete.style.display === '') {
            deletePopupDelete.style.display = 'block';
        } else {
            deletePopupDelete.style.display = 'none';
        }
    }


    

    function generateButton() {
        const key_issue = document.getElementById('key_issue');
        const randomNum = Math.floor(Math.random() * 999) + 1;
        const newKey = "IS_" + String(randomNum).padStart(3, '0'); // Đảm bảo số có 3 chữ số
        key_issue.value = newKey;
    }

    function showEditPopup(categoryId) {
        const ModelEditTodoForm = document.querySelectorAll(".ModelEidtCategory");
        const isVisible = ModelEditTodoForm[0].style.display !== 'none';

        ModelEditTodoForm.forEach(task => {
            task.style.display = isVisible ? 'none' : 'block';
        });
        fetch(`/category/${categoryId}`)
        .then(response => response.json())
        .then(data => {
            document.getElementById('category-id').value = categoryId;
            document.getElementById('category-name').value = data.name;
            document.getElementById('category-status').value = data.status;
        })
    }

    document.getElementById('edit-category-form').onsubmit = function(event) {
        event.preventDefault();
        const categoryId = document.getElementById('category-id').value;
        
        this.action = `/category/${categoryId}`;
        this.submit();
    }

    function closeEditCategory() {
        const modelCreateTask = document.querySelector('.ModelEidtCategory');
        if (modelCreateTask.style.display === 'none' || modelCreateTask.style.display === '') {
            modelCreateTask.style.display = 'block'; 
        } else {
            modelCreateTask.style.display = 'none';
        }
    }

    function ModelEidtCategory() {
        const modelCreateTask = document.querySelector('.ModelCreateCategory');
        if (modelCreateTask.style.display === 'none' || modelCreateTask.style.display === '') {
            modelCreateTask.style.display = 'block'; 
        } else {
            modelCreateTask.style.display = 'none';
        }
    }

    function CreateCategoryForm() {
        const modelCreateTask = document.querySelector('.ModelCreateCategory');
        if (modelCreateTask.style.display === 'none' || modelCreateTask.style.display === '') {
            modelCreateTask.style.display = 'block'; 
        } else {
            modelCreateTask.style.display = 'none';
        }
    }
    function closeCreateCategoryFormPopup() {
        const modelCreateTask = document.querySelector('.ModelCreateCategory');
        if (modelCreateTask.style.display === 'none' || modelCreateTask.style.display === '') {
            modelCreateTask.style.display = 'block'; 
        } else {
            modelCreateTask.style.display = 'none';
        }
    }
    
    
</script>
@endsection