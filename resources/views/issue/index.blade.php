@extends('app')

@section('title', 'Home Page')

@section('content')
<div class="todo issueTodo">
    <div class="todoHeader topHeaderTodo">
        <div class="topHeader">
            <h3>{{ __('messages.Issue') }}</h3> | <span>{{ __('messages.Home') }}</span>
        </div>
        <div class="bodyHeader formSearchIssue">
            <form action="{{ route('issue.index') }}" method="GET" id="filterForm" class="formSearch formIssue">
                <div class="Users--right--btns">
                    <select name="category_id" id="category" class="select-dropdown doctor--filter" onchange="updateFilters();">
                        <option value="All" {{ request('category_id') == 'All' ? 'selected' : '' }}>{{ __('messages.All') }}</option>
                        @foreach($categories as $cat)
                            <option value="{{ $cat->id }}" {{ request('category_id') == $cat->id ? 'selected' : '' }}>{{ $cat->name }}</option>
                        @endforeach
                    </select>
                </div>
            
                <div class="formInputSearch">
                    <select name="user_id" id="user" class="select-dropdown" onchange="updateFilters();">
                        <option value="">{{ __('messages.Select user') }}</option>
                        @foreach($users as $user)
                            <option value="{{ $user->id }}" {{ request('user_id') == $user->id ? 'selected' : '' }}>
                                {{ $user->full_name }}
                            </option>
                        @endforeach
                    </select>
                </div>
            </form>
            <form action="{{ route('issue.index') }}" method="GET" class="formSearch formIssue">
                <div class="formInputSearch">
                    <input type="text" name="search" placeholder="{{ __('messages.Search by subject, key, description...') }}" value="{{ request('search') }}">
                </div>
                <button type="submit" class="add-search"><i class="fa-solid fa-magnifying-glass"></i></button>
            </form>
        </div>
        <div class="footerHeader">
            <button class="btn-show" id="openStaskIssue" onclick="openCategoryIssue()">{{ __('messages.Show Category') }}</button>
            <button class="btn-add" id="openStaskIssue" onclick="openStaskIssue()">{{ __('messages.Add New') }}</button>
        </div>
    </div>
    <div class="projecTodoBody">
        <div class="recent--patient body-tables-issue">
            <div class="tables">
                @if ($issues->isEmpty())
                    <div class="alert alert-warning alert-search">
                        <span> {{ __('messages.No results found for the keyword') }}"<strong>{{ $search }}</strong>"</span>
                        <p>{{ __('messages.Please try again with a different keyword.') }}</p>
                    </div>
                @else
                <table>
                    <thead>
                        <tr>
                            <th class="t-center" style="width: 60px;">ID</th>
                            <th>{{ __('messages.Key') }}</th>
                            <th>{{ __('messages.Subject') }}</th>
                            <th>{{ __('messages.Create by') }}</th>
                            <th>{{ __('messages.Level') }}</th>
                            <th>{{ __('messages.Status') }}</th>
                            <th class="text-center">{{ __('messages.Notification') }}</th>
                            <th>{{ __('messages.Start Date') }}</th>
                            <th>{{ __('messages.End Date') }}</th>
                            <th>{{ __('messages.Category') }}</th>
                            <th class="text-center">{{ __('messages.Settings') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($issues as $issue)
                        <tr>
                            <td class="jus-center">
                                <p class="td-1">{{$issue->id}}</p>
                            </td>
                            <td><a class="key_issue" href="#">{{$issue->key}}</a></td>
                            <td><div class="text-truncate">{!!$issue->description!!}</p></td>
                            <td>
                                <div class="table_user">
                                    <p>{{ $issue->user ? $issue->user->full_name : 'Không có danh mục' }}</p>
                                </div>
                            </td>
                            <td class="pending">
                                @if ($issue->level == 1)
                                <p class="importantIssue">{{ __('messages.Important') }}</p>
                                @else
                                <p class="normalIssue">{{ __('messages.Normal') }}</p>
                                @endif
                            </td>
                            <td class="pending">
                                @if ($issue->status == 2)
                                    <p class="resolvedIssue">{{ __('messages.Done') }}</p>
                                @elseif ($issue->status == 1)
                                    <p class="inProgressIssue">{{ __('messages.In progress') }}</p>
                                @else
                                    <p class="openIssue">{{ __('messages.Open') }}</p>
                                @endif
                            </td>
                            <td>
                                <div class="notification-cut">
                                    @php
                                        $currentDate = \Carbon\Carbon::now();
                                    @endphp
                                    @if ($issue->status != 2 && \Carbon\Carbon::parse($issue->end_date)->lt($currentDate))
                                        <span class="notification-red"></span>
                                    @else
                                        <span class="notification-green"></span>
                                    @endif
                                </div>
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
                @endif
                <div class="d-flex justify-content-center link-margin">
                    {{ $issues->links() }}
                </div>
            </div>
        </div>
        <div class="categoryHidden">
            <div class="projectTodoNotify">
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
                               @foreach($categories as $cate)
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

@if (session('success_create'))
    <div id="popup-category" class="popup-category success">
        {{ session('success_create') }}
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


@if ($errors->any())
    <div id="popup-category" class="popup-category error">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

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
<div class="model" id="ModelCreateIssue">
    <div class="ModelCreateIssue">
        <form method="POST" class="modelForm" action="{{ route('issue.store') }}" enctype="multipart/form-data">
            @csrf
            <h2>{{ __('messages.Add New') }}</h2>
            
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
                    <button type="button" class="btnGenerate" onclick="generateButton()">Generate</button>
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
                        @foreach($categories as $cate)
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
        
            <div class="upload-container">
                <button id="fileUploadButton" type="button">
                    <i class="fa fa-upload"></i> Choose Files To Upload
                </button>
                <input type="file" id="fileInput" name="images[]" multiple accept="image/*" style="display: none;">
                <p id="fileCount">No files chosen</p>
                <div id="fileList"></div>
            </div>
        
            <div class="form-btn">
                <button type="submit">{{ __('messages.Add') }}</button>
            </div>
        
            <div class="BtnCloseCreate" onclick="closeCreateIssuePopup()">
                <p>X</p>
            </div>
        </form>
    </div>
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
    ClassicEditor
      .create(document.querySelector('#editor'))
      .then(editor => {
        editorInstance = editor; 
      })
      .catch(error => {
          console.error(error);
      });
    
    ClassicEditor
      .create(document.querySelector('#editor1'))
      .then(editor => {
        console.log(editor) 
      })
      .catch(error => {
          console.error(error);
      });
    </script>

<script>
    let selectedFiles = []; // Array to store selected files
const maxFiles = 3; // Limit the number of files to 3

document.getElementById('fileUploadButton').addEventListener('click', function(event) {
    event.preventDefault(); // Prevent form submission on button click
    document.getElementById('fileInput').click(); // Open the file input dialog
});

document.getElementById('fileInput').addEventListener('change', function(event) {
    const newFiles = Array.from(event.target.files);

    // Check if total number of files exceeds the max limit
    if (selectedFiles.length + newFiles.length > maxFiles) {
        alert(`You can only upload up to ${maxFiles} images.`);
        return; // Prevent adding more files
    }

    // Add new files to selectedFiles
    selectedFiles = selectedFiles.concat(newFiles);
    updateFileList(); // Update the file display list
});

// Function to update the file list display
function updateFileList() {
    const fileList = document.getElementById('fileList');
    const fileCount = document.getElementById('fileCount');
    fileList.innerHTML = '';

    if (selectedFiles.length > 0) {
        fileCount.textContent = `${selectedFiles.length} Files Chosen`;
    } else {
        fileCount.textContent = 'No files chosen';
    }

    selectedFiles.forEach(file => {
        const fileItem = document.createElement('div');
        fileItem.className = 'file-item';

        const fileName = document.createElement('span');
        fileName.className = 'file-name';
        fileName.textContent = file.name;

        const fileSize = document.createElement('span');
        fileSize.className = 'file-size';
        fileSize.textContent = formatFileSize(file.size);

        fileItem.appendChild(fileName);
        fileItem.appendChild(fileSize);
        fileList.appendChild(fileItem);
    });
}

// Function to format file size for display
function formatFileSize(bytes) {
    const sizes = ['Bytes', 'KB', 'MB', 'GB', 'TB'];
    if (bytes === 0) return '0 Byte';
    const i = parseInt(Math.floor(Math.log(bytes) / Math.log(1024)));
    return Math.round(bytes / Math.pow(1024, i), 2) + ' ' + sizes[i];
}

// Before form submission, add files to form data
document.querySelector('.modelForm').addEventListener('submit', function(event) {
    const fileInput = document.getElementById('fileInput');
    const dataTransfer = new DataTransfer();

    selectedFiles.forEach(file => {
        dataTransfer.items.add(file);
    });

    fileInput.files = dataTransfer.files; // Assign selected files to input for submission
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

    function updateFilters() {
        const categoryId = document.getElementById('category').value;
        const userId = document.getElementById('user').value;

        let url = '{{ route('issue.index') }}?';
        if (categoryId) {
            url += 'category_id=' + categoryId + '&';
        }
        if (userId) {
            url += 'user_id=' + userId;
        }
        window.location.href = url;
    }

    function openCategoryIssue(){
        const openCategoryIssue = document.querySelector('.categoryHidden');
        if (openCategoryIssue.style.display === 'none' || openCategoryIssue.style.display === '') {
            openCategoryIssue.style.display = 'block'; // Hiển thị popup
        } else {
            openCategoryIssue.style.display = 'none'; // Ẩn popup
        }
    }
    function openStaskIssue() {
        const ModelCreateIssue = document.getElementById('ModelCreateIssue')
        if (ModelCreateIssue.style.display === 'none' || ModelCreateIssue.style.display === '') {
            ModelCreateIssue.style.display = 'block'; 
        } else {
            ModelCreateIssue.style.display = 'none';
        }
    }
    function closeCreateIssuePopup() {
        const ModelCreateIssue = document.getElementById('ModelCreateIssue')
        if (ModelCreateIssue.style.display === 'none' || ModelCreateIssue.style.display === '') {
            ModelCreateIssue.style.display = 'block'; 
        } else {
            ModelCreateIssue.style.display = 'none';
        }
    }

    function showDeleteIssuePopup(issueId) {
        const deletePopup = document.querySelector('.modelDeleteFormIssue');
        deletePopup.style.display = 'block';
        const deleteFormIssue = document.getElementById('delete-issue-form');
        deleteForm.action = `/issue/${issueId}`;
    }

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