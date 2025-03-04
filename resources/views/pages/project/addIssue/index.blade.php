@extends('page')
@section('title', 'Home Page')
@section('content')

<div class="project-info">
    <div class="project-info-left">
        @include('pages.project.sidebar.index')
    </div>
    <div class="project-info-right">
        <div class="project-right-body">
           <form action="" class="form-project">
            @csrf
                <div class="d-flex space-between align-items-center p-10 bg-white">
                    <h2>{{ __('messages.Add Issue') }}</h2>
                    <button type="submit" class="add-issue">{{ __('messages.Add Issue') }}</button>
                </div>
                @if (Auth::check())
                    <input type="hidden" class="input-name" name="user_id" value="{{ Auth::user()->id }}" readonly/>
                @endif
                <div class="input-big mt-10">
                    <input type="text" name="title" placeholder="{{ __('messages.Enter expense details...') }}">
                </div>
                <div class="form-textarea-category mt-10">
                    <textarea class="textarea" name="description" id="editor" placeholder="Add a description, use @mention to notify a colleague..."></textarea>
                </div>
                <div class="d-flex space-between gap-10 mt-13">
                    <div class="w-50 d-flex flex-direction gap-13.5">
                        <div class="d-flex space-between gap-10">
                            <div class="form-input">
                                <label for="status">{{ __('messages.Start Date') }}</label>
                                <input type="date" name="" id="" /> 
                            </div>
                            <div class="form-input">
                                <label for="status">{{ __('messages.Due Date') }}</label>
                                <input type="date" name="" id="" />
                            </div>
                        </div>
                        <div class="d-flex space-between gap-10">
                            <div class="form-select">
                                <label for="status">{{ __('messages.Status') }}</label>
                                <select name="status" id="status">
                                    <option value="1">{{ __('messages.Show') }}</option>
                                    <option value="0">{{ __('messages.Hide') }}</option>
                                </select>
                            </div>
                        </div>
                        <div class="d-flex space-between gap-10">
                            <div class="form-select">
                                <label for="status">{{ __('messages.Priority') }}</label>
                                <select name="status" id="status">
                                    <option value="1">{{ __('messages.Show') }}</option>
                                    <option value="0">{{ __('messages.Hide') }}</option>
                                </select>
                            </div>
                        </div>
                        <div class="d-flex space-between gap-10">
                            <div class="form-select">
                                <label for="status">{{ __('messages.Category') }}</label>
                                <select name="status" id="status">
                                    <option value="1">{{ __('messages.Show') }}</option>
                                    <option value="0">{{ __('messages.Hide') }}</option>
                                </select>
                            </div>
                        </div>
                        <div class="d-flex space-between gap-10">
                            <div class="form-select">
                                <label for="status">{{ __('messages.Assignee') }}</label>
                                <select name="status" id="status">
                                    <option value="1">{{ __('messages.Show') }}</option>
                                    <option value="0">{{ __('messages.Hide') }}</option>
                                </select>
                            </div>
                        </div>
                        <div class="d-flex space-between gap-10">
                            <div class="form-select">
                                <label for="status">{{ __('messages.Milestone') }}</label>
                                <select name="status" id="status">
                                    <option value="1">{{ __('messages.Show') }}</option>
                                    <option value="0">{{ __('messages.Hide') }}</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="w-50">
                        <div class="upload-container" onclick="document.getElementById('fileInput').click();">
                            <p>Click or Drag files to upload</p>
                            <input type="file" id="fileInput" multiple accept="image/*">
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
