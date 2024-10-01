@extends('app')

@section('title', 'Home Page')

@section('content')
<div class="todo">
    <div class="todoHeader topHeaderTodo">
        <div class="topHeader">
            <h2>Vấn đề</h2> | <span>Trang chủ</span>
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
            <button class="btn-add" id="openStaskIssue">Vấn đề mới mới</button>
        </div>
    </div>
    <div class="projecTodoBody">
        <div class="recent--patient body-tables-issue">
            <div class="tables">
                <table>
                    <thead>
                        <tr>
                            <th class="t-center" style="width: 60px;">ID</th>
                            <th>Key</th>
                            <th>Subject</th>
                            <th>Create_by</th>
                            <th>Status</th>
                            <th>Begin</th>
                            <th>End</th>
                            <th>Category</th>
                            <th>Settings</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="jus-center">
                                <p class="td-1">1</p>
                            </td>
                            <td><a class="key_issue" href="https://fontawesome.com/">CRH_185</a></td>
                            <td><p class="text-truncate">aaaaaaaaaaaaaaaaaaaaaaaaaaaaassssssssssssssssssssss ssssssssssssssssssssssssssssssssssss</p></td>
                            <td>
                                <div class="table_user">
                                    <div class="table_user_image">
                                        <img src="../assets/images/user.jpg" alt="" srcset="">
                                    </div>
                                    <p>Tuấn</p>
                                </div>
                            </td>
                            <!-- <td class="pending"><p class="openIssue">Open</p></td> -->
                            <!-- <td class="pending"><p class="inProgressIssue">In Progress</p></td> -->
                            <td class="pending"><p class="resolvedIssue">Resolved</p></td>
                            <td>30/07/2022</td>
                            <td>30/07/2022</td>
                            <td>HashTask</td>
                            <td><span><i class="fa-regular fa-pen-to-square edit"></i><i class="fa-solid fa-trash delete"></i></i></span></td>
                        </tr>
                        <tr>
                            <td class="jus-center">
                                <p class="td-1">1</p>
                            </td>
                            <td><a class="key_issue" href="https://fontawesome.com/">CRH_185</a></td>
                            <td><p class="text-truncate">aaaaaaaaaaaaaaaaaaaaaaaaaaaaasssssssssssssssssssssssssssss sssssssssssssssssssssssssssss</p></td>
                            <td>
                                <div class="table_user">
                                    <div class="table_user_image">
                                        <img src="../assets/images/user.jpg" alt="" srcset="">
                                    </div>
                                    <p>Tuấn</p>
                                </div>
                            </td>
                            <td class="pending"><p class="openIssue">Open</p></td>
                            <!-- <td class="pending"><p class="inProgressIssue">In Progress</p></td> -->
                            <!-- <td class="pending"><p class="resolvedIssue">Resolved</p></td> -->
                            <td>30/07/2022</td>
                            <td>30/07/2022</td>
                            <td>HashTask</td>
                            <td><span><i class="fa-regular fa-pen-to-square edit"></i><i class="fa-solid fa-trash delete"></i></i></span></td>
                        </tr>
                        <tr>
                            <td class="jus-center">
                                <p class="td-1">1</p>
                            </td>
                            <td><a class="key_issue" href="https://fontawesome.com/">CRH_185</a></td>
                            <td><p class="text-truncate">aaaaaaaaaaaaaaaaaaaaaaaaaaaaasssssssssssssssssssssssssssss sssssssssssssssssssssssssssss</p></td>
                            <td>
                                <div class="table_user">
                                    <div class="table_user_image">
                                        <img src="../assets/images/user.jpg" alt="" srcset="">
                                    </div>
                                    <p>Tuấn</p>
                                </div>
                            </td>
                            <td class="pending"><p class="openIssue">Open</p></td>
                            <!-- <td class="pending"><p class="inProgressIssue">In Progress</p></td> -->
                            <!-- <td class="pending"><p class="resolvedIssue">Resolved</p></td> -->
                            <td>30/07/2022</td>
                            <td>30/07/2022</td>
                            <td>HashTask</td>
                            <td><span><i class="fa-regular fa-pen-to-square edit"></i><i class="fa-solid fa-trash delete"></i></i></span></td>
                        </tr>
                        <tr>
                            <td class="jus-center">
                                <p class="td-1">1</p>
                            </td>
                            <td><a class="key_issue" href="https://fontawesome.com/">CRH_185</a></td>
                            <td><p class="text-truncate">aaaaaaaaaaaaaaaaaaaaaaaaaaaaasssssssssssssssssssssssssssss sssssssssssssssssssssssssssss</p></td>
                            <td>
                                <div class="table_user">
                                    <div class="table_user_image">
                                        <img src="../assets/images/user.jpg" alt="" srcset="">
                                    </div>
                                    <p>Tuấn</p>
                                </div>
                            </td>
                            <td class="pending"><p class="openIssue">Open</p></td>
                            <!-- <td class="pending"><p class="inProgressIssue">In Progress</p></td> -->
                            <!-- <td class="pending"><p class="resolvedIssue">Resolved</p></td> -->
                            <td>30/07/2022</td>
                            <td>30/07/2022</td>
                            <td>HashTask</td>
                            <td><span><i class="fa-regular fa-pen-to-square edit"></i><i class="fa-solid fa-trash delete"></i></i></span></td>
                        </tr>
                        <tr>
                            <td class="jus-center">
                                <p class="td-1">1</p>
                            </td>
                            <td><a class="key_issue" href="https://fontawesome.com/">CRH_185</a></td>
                            <td><p class="text-truncate">aaaaaaaaaaaaaaaaaaaaaaaaaaaaasssssssssssssssssssssssssssss sssssssssssssssssssssssssssss</p></td>
                            <td>
                                <div class="table_user">
                                    <div class="table_user_image">
                                        <img src="../assets/images/user.jpg" alt="" srcset="">
                                    </div>
                                    <p>Tuấn</p>
                                </div>
                            </td>
                            <td class="pending"><p class="openIssue">Open</p></td>
                            <!-- <td class="pending"><p class="inProgressIssue">In Progress</p></td> -->
                            <!-- <td class="pending"><p class="resolvedIssue">Resolved</p></td> -->
                            <td>30/07/2022</td>
                            <td>30/07/2022</td>
                            <td>HashTask</td>
                            <td><span><i class="fa-regular fa-pen-to-square edit"></i><i class="fa-solid fa-trash delete"></i></i></span></td>
                        </tr>
                        <tr>
                            <td class="jus-center">
                                <p class="td-1">1</p>
                            </td>
                            <td><a class="key_issue" href="https://fontawesome.com/">CRH_185</a></td>
                            <td><p class="text-truncate">aaaaaaaaaaaaaaaaaaaaaaaaaaaaasssssssssssssssssssssssssssss sssssssssssssssssssssssssssss</p></td>
                            <td>
                                <div class="table_user">
                                    <div class="table_user_image">
                                        <img src="../assets/images/user.jpg" alt="" srcset="">
                                    </div>
                                    <p>Tuấn</p>
                                </div>
                            </td>
                            <td class="pending"><p class="openIssue">Open</p></td>
                            <!-- <td class="pending"><p class="inProgressIssue">In Progress</p></td> -->
                            <!-- <td class="pending"><p class="resolvedIssue">Resolved</p></td> -->
                            <td>30/07/2022</td>
                            <td>30/07/2022</td>
                            <td>HashTask</td>
                            <td><span><i class="fa-regular fa-pen-to-square edit"></i><i class="fa-solid fa-trash delete"></i></i></span></td>
                        </tr>
                        <tr>
                            <td class="jus-center">
                                <p class="td-1">1</p>
                            </td>
                            <td><a class="key_issue" href="https://fontawesome.com/">CRH_185</a></td>
                            <td><p class="text-truncate">aaaaaaaaaaaaaaaaaaaaaaaaaaaaasssssssssssssssssssssssssssss sssssssssssssssssssssssssssss</p></td>
                            <td>
                                <div class="table_user">
                                    <div class="table_user_image">
                                        <img src="../assets/images/user.jpg" alt="" srcset="">
                                    </div>
                                    <p>Tuấn</p>
                                </div>
                            </td>
                            <td class="pending"><p class="openIssue">Open</p></td>
                            <!-- <td class="pending"><p class="inProgressIssue">In Progress</p></td> -->
                            <!-- <td class="pending"><p class="resolvedIssue">Resolved</p></td> -->
                            <td>30/07/2022</td>
                            <td>30/07/2022</td>
                            <td>HashTask</td>
                            <td><span><i class="fa-regular fa-pen-to-square edit"></i><i class="fa-solid fa-trash delete"></i></i></span></td>
                        </tr>
                        <tr>
                            <td class="jus-center">
                                <p class="td-1">1</p>
                            </td>
                            <td><a class="key_issue" href="https://fontawesome.com/">CRH_185</a></td>
                            <td><p class="text-truncate">aaaaaaaaaaaaaaaaaaaaaaaaaaaaasssssssssssssssssssssssssssss sssssssssssssssssssssssssssss</p></td>
                            <td>
                                <div class="table_user">
                                    <div class="table_user_image">
                                        <img src="../assets/images/user.jpg" alt="" srcset="">
                                    </div>
                                    <p>Tuấn</p>
                                </div>
                            </td>
                            <td class="pending"><p class="openIssue">Open</p></td>
                            <!-- <td class="pending"><p class="inProgressIssue">In Progress</p></td> -->
                            <!-- <td class="pending"><p class="resolvedIssue">Resolved</p></td> -->
                            <td>30/07/2022</td>
                            <td>30/07/2022</td>
                            <td>HashTask</td>
                            <td><span><i class="fa-regular fa-pen-to-square edit"></i><i class="fa-solid fa-trash delete"></i></i></span></td>
                        </tr>
                        <tr>
                            <td class="jus-center">
                                <p class="td-1">1</p>
                            </td>
                            <td><a class="key_issue" href="https://fontawesome.com/">CRH_185</a></td>
                            <td><p class="text-truncate">aaaaaaaaaaaaaaaaaaaaaaaaaaaaasssssssssssssssssssssssssssss sssssssssssssssssssssssssssss</p></td>
                            <td>
                                <div class="table_user">
                                    <div class="table_user_image">
                                        <img src="../assets/images/user.jpg" alt="" srcset="">
                                    </div>
                                    <p>Tuấn</p>
                                </div>
                            </td>
                            <td class="pending"><p class="openIssue">Open</p></td>
                            <!-- <td class="pending"><p class="inProgressIssue">In Progress</p></td> -->
                            <!-- <td class="pending"><p class="resolvedIssue">Resolved</p></td> -->
                            <td>30/07/2022</td>
                            <td>30/07/2022</td>
                            <td>HashTask</td>
                            <td><span><i class="fa-regular fa-pen-to-square edit"></i><i class="fa-solid fa-trash delete"></i></i></span></td>
                        </tr>
                        <tr>
                            <td class="jus-center">
                                <p class="td-1">1</p>
                            </td>
                            <td><a class="key_issue" href="https://fontawesome.com/">CRH_185</a></td>
                            <td><p class="text-truncate">aaaaaaaaaaaaaaaaaaaaaaaaaaaaasssssssssssssssssssssssssssss sssssssssssssssssssssssssssss</p></td>
                            <td>
                                <div class="table_user">
                                    <div class="table_user_image">
                                        <img src="../assets/images/user.jpg" alt="" srcset="">
                                    </div>
                                    <p>Tuấn</p>
                                </div>
                            </td>
                            <td class="pending"><p class="openIssue">Open</p></td>
                            <!-- <td class="pending"><p class="inProgressIssue">In Progress</p></td> -->
                            <!-- <td class="pending"><p class="resolvedIssue">Resolved</p></td> -->
                            <td>30/07/2022</td>
                            <td>30/07/2022</td>
                            <td>HashTask</td>
                            <td><span><i class="fa-regular fa-pen-to-square edit"></i><i class="fa-solid fa-trash delete"></i></i></span></td>
                        </tr>
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
    <form  method="POST" action="{{ route('todo.store') }}" >
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
                <input type="text" class="input-name" id="key" name="key">
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
        <div class="BtnCloseCreate" onclick="closeCreateTodoPopup()">
            <p>X</p>
        </div>
    </form>
</div>

<script>
    CKEDITOR.replace('editor');
</script>
<script>
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