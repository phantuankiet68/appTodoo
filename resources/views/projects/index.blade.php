@extends('app')
@section('title', 'Home Page')
@section('content')
<div class="project-wrapper">
    <div class="project-wrapper-left">
        <form action="{{ route('projects.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-input-category">
                <label for="name">Tên dự án:</label>
                <input type="text" class="input-name" name="name" id="name" required>
            </div>
            @if (Auth::check())
                <input type="hidden" name="user_id" value="{{ Auth::user()->id }}"/>
            @endif
            <div class="form-textarea-category">
                <label for="description">{{ __('messages.Description') }}</label>
                <textarea id="editor" name="description"></textarea> 
            </div>
        
            <div class="form-select-category  mt-10">
                <label for="users">Thêm người dùng:</label>
                <div class="select-container">
                    <input type="text" id="select-input" placeholder="Pick a user..." readonly>
                    <div class="options" id="options">
                        @foreach ($users as $user)
                            <label>
                                <input type="checkbox" name="users[]" value="{{ $user->id }}" class="option-checkbox">
                                {{ $user->email }}
                            </label>
                        @endforeach
                    </div>
                </div>
                @error('users')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-input-category m-10">
                <label for="git">Git:</label>
                <input type="text" class="input-name" name="git" id="git" placeholder="Nhập URL Git (Tùy chọn)" required>
            </div>
            <div class="mt-10 upload-container">
                <input type="file" name="file" id="fileInput" class="file-input" multiple>
                <label for="fileInput" class="file-dropzone">
                    <span>Choose sql</span> or drop here
                </label>
                <div id="fileList" class="file-list"></div>
            </div>
            <div class="mt-10 upload-container">
                <input type="file" class="input-name file-input" name="document" id="document" accept=".pdf, .docx, .jpg, .png" multiple required>
                <label for="document" class="file-dropzone">
                    <span>Choose document</span> or drop here
                </label>
                <div id="documentList" class="file-list"></div>
            </div>
            <div class="mt-10 upload-container">
                <input type="file" class="input-name file-input" name="image" id="image"  accept="image/*"  required>
                <label for="image" class="file-dropzone">
                    <span>Choose image</span> or drop here
                </label>
                <div id="imageList" class="file-list"></div>
            </div>
            <div class="form-btn center">
                <button type="submit">{{ __('messages.Save changes') }}</button>
            </div>
        </form>
    </div>
    <div class="project-wrapper-right">
        <div class="project-right-header">
            <button class="tonggle-add">
                <i class="fa-solid fa-plus"></i>
            </button>
            <form action="{{ route('issue.index') }}" method="GET" id="filterForm" class="formSearch formIssue">
                <div class="Users--right--btns formInputSearch">
                    <select name="category_id" class="select-dropdown doctor--filter" onchange="updateFilters();">
                        <option value="0">{{ __('messages.Hide') }}</option>
                        <option value="1">{{ __('messages.Show') }}</option>
                    </select>
                </div>
            
                <div class="formInputSearch">
                    <select name="user_id" id="user" class="select-dropdown" onchange="updateFilters();">
                        <option value="">{{ __('messages.Select user') }}</option>
                        <option value="0">{{ __('messages.Hide') }}</option>
                        <option value="1">{{ __('messages.Show') }}</option>
                    </select>
                </div>
            </form>
            <form action="{{ route('issue.index') }}" method="GET" class="formSearch formIssue">
                <div class="formInputSearch">
                    <input type="text" name="search" placeholder="{{ __('messages.Search by subject, key, description...') }}" value="{{ request('search') }}">
                    <button type="submit" class="add-search"><i class="fa-solid fa-magnifying-glass"></i></button>
                </div>
            </form>
        </div>
        <div class="project-right-body">
            <div class="project-header">
                <p style="width: 22%">Plan Name</p>
                <p style="width: 22%">Storage</p>
                <p style="width: 22%">Monthly Visitor</p>
                <p style="width: 15%">Domains</p>
                <p style="width: 10%">Status</p>
            </div>
            <div class="project-right-body-cr">
                @foreach ($projects as $project)
                <a href="{{ route('projects.show', $project->id) }}" class="project-list">
                    <div class="domain-info">
                        <div class="domain-info-left">
                            <div class="project-image">
                                <img src="{{ asset($project->images) }}" alt="Project Image">
                            </div>
                        </div>
                        <div class="domain-info-right">
                            <span class="domain-name">{{ $project->name }}</span>
                            <span class="plan">{{ $project->user->full_name }}</span>
                        </div>
                    </div>
                    <div class="progress-bar">
                        <div class="bar">
                            <div class="fill"></div>
                        </div>
                        <span class="text">Đã hoàn thành: 25</span>
                    </div>
                    <div class="progress-bar">
                        <div class="bar">
                            <div class="fill"></div>
                        </div>
                        <span class="text">Chưa hoàn thành: 5</span>
                    </div>
                    <div class="circle-progress">
                        <div class="circle">1/10</div>
                    </div>
                    <div class="status">Active</div>
                </a>
                @endforeach
            </div>
            
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
    ClassicEditor
      .create(document.querySelector('#editor'))
      .then(editor => {
        editorInstance = editor; 
      })
      .catch(error => {
          console.error(error);
      });
</script>
<script>
    document.querySelector('.tonggle-add').addEventListener('click', function() {
        var projectWrapper = document.querySelector('.project-wrapper-left');
        if (projectWrapper.style.display === 'flex') {
            projectWrapper.style.display = 'none';
        } else {
            projectWrapper.style.display = 'flex';
        }
    });
</script>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        const fileInput = document.getElementById("image");
        const fileList = document.getElementById("imageList");

        fileInput.addEventListener("change", function (event) {
            const files = event.target.files;
            fileList.innerHTML = "";
            for (const file of files) {
                const listItem = document.createElement("div");
                listItem.className = "file-list-item";
                listItem.innerHTML = `
                    <span>${file.name}</span>
                    <span>${(file.size / 1024).toFixed(1)} KB</span>
                    <span class="file-remove" data-file="${file.name}">X</span>
                `;

                fileList.appendChild(listItem);
            }

            const removeButtons = document.querySelectorAll(".file-remove");
            removeButtons.forEach((button) => {
                button.addEventListener("click", function () {
                    const fileName = this.getAttribute("data-file");
                    const parent = this.parentElement;
                    parent.remove();
                    console.log(`Removed: ${fileName}`);
                });
            });
        });

        const dropzone = document.querySelector(".upload-container");
        dropzone.addEventListener("dragover", (event) => {
            event.preventDefault();
            dropzone.style.borderColor = "#007bff";
        });

        dropzone.addEventListener("dragleave", () => {
            dropzone.style.borderColor = "#cccccc";
        });

        dropzone.addEventListener("drop", (event) => {
            event.preventDefault();
            dropzone.style.borderColor = "#cccccc";

            const files = event.dataTransfer.files;
            fileInput.files = files;
            fileInput.dispatchEvent(new Event("change"));
        });
    });
    document.addEventListener("DOMContentLoaded", function () {
        const fileInput = document.getElementById("document");
        const fileList = document.getElementById("documentList");

        fileInput.addEventListener("change", function (event) {
            const files = event.target.files;
            fileList.innerHTML = "";
            for (const file of files) {
                const listItem = document.createElement("div");
                listItem.className = "file-list-item";
                listItem.innerHTML = `
                    <span>${file.name}</span>
                    <span>${(file.size / 1024).toFixed(1)} KB</span>
                    <span class="file-remove" data-file="${file.name}">X</span>
                `;

                fileList.appendChild(listItem);
            }
            const removeButtons = document.querySelectorAll(".file-remove");
            removeButtons.forEach((button) => {
                button.addEventListener("click", function () {
                    const fileName = this.getAttribute("data-file");
                    const parent = this.parentElement;
                    parent.remove();
                    console.log(`Removed: ${fileName}`);
                });
            });
        });
        const dropzone = document.querySelector(".upload-container");
        dropzone.addEventListener("dragover", (event) => {
            event.preventDefault();
            dropzone.style.borderColor = "#007bff";
        });

        dropzone.addEventListener("dragleave", () => {
            dropzone.style.borderColor = "#cccccc";
        });

        dropzone.addEventListener("drop", (event) => {
            event.preventDefault();
            dropzone.style.borderColor = "#cccccc";

            const files = event.dataTransfer.files;
            fileInput.files = files;
            fileInput.dispatchEvent(new Event("change"));
        });
    });
    document.addEventListener("DOMContentLoaded", function () {
        const fileInput = document.getElementById("fileInput");
        const fileList = document.getElementById("fileList");

        fileInput.addEventListener("change", function (event) {
            const files = event.target.files;
            fileList.innerHTML = "";
            for (const file of files) {
                const listItem = document.createElement("div");
                listItem.className = "file-list-item";
                listItem.innerHTML = `
                    <span>${file.name}</span>
                    <span>${(file.size / 1024).toFixed(1)} KB</span>
                    <span class="file-remove" data-file="${file.name}">X</span>
                `;

                fileList.appendChild(listItem);
            }
            const removeButtons = document.querySelectorAll(".file-remove");
            removeButtons.forEach((button) => {
                button.addEventListener("click", function () {
                    const fileName = this.getAttribute("data-file");
                    const parent = this.parentElement;
                    parent.remove();
                    console.log(`Removed: ${fileName}`);
                });
            });
        });
        const dropzone = document.querySelector(".upload-container");
        dropzone.addEventListener("dragover", (event) => {
            event.preventDefault();
            dropzone.style.borderColor = "#007bff";
        });

        dropzone.addEventListener("dragleave", () => {
            dropzone.style.borderColor = "#cccccc";
        });

        dropzone.addEventListener("drop", (event) => {
            event.preventDefault();
            dropzone.style.borderColor = "#cccccc";

            const files = event.dataTransfer.files;

            fileInput.files = files;

            fileInput.dispatchEvent(new Event("change"));
        });
    });
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
            const popup = document.querySelector('#popup-error');
            if (popup) {
                popup.style.display = 'flex';
                setTimeout(() => {
                    popup.style.display = 'none';
                }, 6000);
            }
        });
        document.addEventListener('DOMContentLoaded', function () {
            const selectInput = document.getElementById('select-input');
            const optionsDiv = document.getElementById('options');
            const checkboxes = document.querySelectorAll('.option-checkbox');

            selectInput.addEventListener('click', () => {
                optionsDiv.style.display = optionsDiv.style.display === 'block' ? 'none' : 'block';
            });

            checkboxes.forEach(checkbox => {
                checkbox.addEventListener('change', () => {
                    const selectedOptions = Array.from(checkboxes)
                        .filter(i => i.checked)
                        .map(i => i.parentElement.textContent.trim());
                    selectInput.value = selectedOptions.join(', ') || 'Pick a user...';
                });
            });

            document.addEventListener('click', (event) => {
                if (!selectInput.contains(event.target) && !optionsDiv.contains(event.target)) {
                    optionsDiv.style.display = 'none';
                }
            });
        });

</script>
@endsection