@extends('page')
@section('title', 'Home Page')
@section('content')

<div class="project-info">
    <div class="project-info-left">
        @include('pages.project.sidebar.index', ['name' => $project->name])
    </div>
    <div class="project-info-right">
        <div class="project-right-body">
            <form action="{{ route('projects.storeIssue') }}" method="POST" class="form-project" enctype="multipart/form-data">
                @csrf
                <div class="d-flex space-between align-items-center p-10 bg-white">
                    <h2>{{ __('messages.Add Issue') }}</h2>
                    <button type="submit" class="add-issue">{{ __('messages.Add Issue') }}</button>
                </div>
                <input type="hidden" name="project_id" value="{{ $project->id }}"/>
                @if (Auth::check())
                    <input type="hidden" name="user_id" value="{{ Auth::user()->id }}" readonly/>
                @endif
                <div class="d-flex space-between align-items-center gap-10">
                    <div class="w-70 input-big mt-10">
                        <input type="text" name="title" placeholder="{{ __('messages.Enter expense details...') }}">
                    </div>
                    <div class="w-30 input-big mt-10">
                        <input type="text" id="projectName" name="key" value="aaa-" readonly>
                    </div>
                </div>

                <div class="form-textarea-category mt-10">
                    <textarea class="textarea" name="description" id="editor" placeholder="{{ __('messages.Use @mention to notify a colleague...') }}"></textarea>
                </div>

                <div class="d-flex space-between gap-10 mt-13">
                    <div class="w-50 d-flex flex-direction gap-13.5">
                        <div class="d-flex space-between gap-10">
                            <div class="form-input">
                                <label for="start_date">{{ __('messages.Start Date') }}</label>
                                <input type="date" name="start_date" id="start_date" /> 
                            </div>
                            <div class="form-input">
                                <label for="due_date">{{ __('messages.Due Date') }}</label>
                                <input type="date" name="due_date" id="due_date" />
                            </div>
                        </div>
                        <div class="d-flex space-between gap-10">
                            <div class="form-select">
                                <label for="status">{{ __('messages.Status') }}</label>
                                <select name="status" id="status">
                                    <option value="1">{{ __('messages.Open') }}</option>
                                    <option value="2">{{ __('messages.In Progress') }}</option>
                                    <option value="3">{{ __('messages.Resolved') }}</option>
                                    <option value="4">{{ __('messages.Closed') }}</option>
                                </select>
                            </div>
                        </div>
                        <div class="d-flex space-between gap-10">
                            <div class="form-select">
                                <label for="priority">{{ __('messages.Priority') }}</label>
                                <select name="priority" id="priority">
                                    <option value="1">{{ __('messages.Low') }}</option>
                                    <option value="2">{{ __('messages.Normal') }}</option>
                                    <option value="3">{{ __('messages.High') }}</option>
                                </select>
                            </div>
                        </div>
                        <div class="d-flex space-between gap-10">
                            <div class="form-select">
                                <label for="category">{{ __('messages.Category') }}</label>
                                <select name="category" id="category">
                                    <option value="1">{{ __('messages.Investigation') }}</option>
                                    <option value="2">{{ __('messages.Bug Fixing') }}</option>
                                    <option value="3">{{ __('messages.Create New') }}</option>
                                </select>
                            </div>
                        </div>
                        <div class="d-flex space-between gap-10">
                            <div class="form-select">
                                <label for="assignee">{{ __('messages.Assignee') }}</label>
                                <select name="assignee" id="assignee">
                                    @foreach ($members as $item)
                                        @if ($item->user)
                                            <option value="{{ $item->user->id }}">{{ $item->user->full_name }}</option>
                                        @else
                                            <option disabled>{{ __('messages.No User') }}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="d-flex space-between gap-10">
                            <div class="form-select">
                                <label for="milestone">{{ __('messages.Milestone') }}</label>
                                <select name="milestone" id="milestone">
                                    <option value="1">{{ __('messages.Deployment') }}</option>
                                    <option value="2">{{ __('messages.Completed') }}</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="w-50">
                        <div class="upload-container" onclick="document.getElementById('fileInput').click();">
                            <p>{{ __('messages.Click or Drag files to upload') }}</p>
                            <input type="file" id="fileInput" name="attachments[]" multiple accept="image/*">
                        </div>
                        <div class="preview-container" id="previewContainer"></div>
                    </div>
                </div>
            </form>
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
<script src="{{ asset('js/pages/project.js') }}"></script>
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
    document.addEventListener("DOMContentLoaded", function () {
        fetch('/v1/get/get-projects')
            .then(response => response.json())
            .then(projects => {
                let maxNumber = 0;

                projects.forEach(name => {
                    let match = name.match(/aaa-(\d+)$/);
                    if (match) {
                        let num = parseInt(match[1], 10);
                        maxNumber = Math.max(maxNumber, num);
                    }
                });

                let newNumber = (maxNumber + 1).toString().padStart(4, '0');
                document.getElementById("projectName").value = "aaa-" + newNumber;
            })
            .catch(error => console.error("Lỗi tải dữ liệu:", error));
    });

    document.getElementById('fileInput').addEventListener('change', function(event) {
        const files = event.target.files;
        const previewContainer = document.getElementById('previewContainer');

        for (let file of files) {
            const reader = new FileReader();
            reader.onload = function(e) {
                const div = document.createElement('div');
                div.classList.add('image-preview');
                div.innerHTML = `
                    <img src="${e.target.result}" alt="Uploaded Image">
                    <button class="remove-btn">&times;</button>
                `;
                div.querySelector('.remove-btn').addEventListener('click', function() {
                    div.remove();
                });
                previewContainer.appendChild(div);
            };
            reader.readAsDataURL(file);
        }
    });
</script>

@endsection
