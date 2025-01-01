@extends('app')
@section('title', 'Home Page')
@section('content')
<div class="project-wrapper">
    <div class="project-wrapper-left">
        <h1>Tạo dự án mới</h1>
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
        
            <div class="form-select-category">
                <label for="users">Thêm người dùng:</label>
                <div class="select-container">
                    <input type="text" id="select-input" placeholder="Pick a user..." readonly>
                    <div class="options" id="options">
                        @foreach ($users as $user)
                            <label>
                                <input type="checkbox" value="{{ $user->id }}" class="option-checkbox">
                                {{ $user->email }}
                            </label>
                        @endforeach
                    </div>
                </div>
            </div>

            <div class="form-input-category mt-5">
                <label for="git">Git:</label>
                <input type="text" class="input-name" name="git" id="git" placeholder="Nhập URL Git (Tùy chọn)" required>
            </div>

            <div class="form-input-category mt-5">
                <label for="file">Tải file:</label>
                <input type="file" class="input-name" name="file" id="file" accept=".pdf, .docx, .jpg, .png" required>
            </div>
            <div class="form-input-category mt-5">
                <label for="document">Tải tài liệu:</label>
                <input type="file" class="input-name" name="document" id="document" accept=".pdf, .docx, .jpg, .png" required>
            </div>
            <div class="form-input-category mt-5">
                <label for="image">Tải hình ảnh:</label>
                <input type="file" name="image" id="image" accept="image/*" class="input-name" required>
            </div>
            <div class="form-btn">
                <button type="submit">{{ __('messages.Save changes') }}</button>
            </div>
        </form>
    </div>
    <div class="project-wrapper-right">
        <h1>Dự án của bạn</h1>

        @foreach ($projects as $project)
            <div>
                <h2>{{ $project->name }}</h2>
                <p>{{ $project->description }}</p>
                <img src="{{ asset($project->images) }}" alt="Project Image">
            </div>
        @endforeach
    </div>
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
</script>
<script>
    const selectInput = document.getElementById('select-input');
    const optionsDiv = document.getElementById('options');

    selectInput.addEventListener('click', () => {
        optionsDiv.style.display = optionsDiv.style.display === 'block' ? 'none' : 'block';
    });

    const checkboxes = document.querySelectorAll('.option-checkbox');
    checkboxes.forEach(checkbox => {
        checkbox.addEventListener('change', () => {
            const selectedOptions = Array.from(checkboxes)
                .filter(i => i.checked)
                .map(i => i.parentElement.textContent.trim());
            selectInput.value = selectedOptions.join(', ');
        });
    });

    // Close options when clicking outside
    document.addEventListener('click', (event) => {
        if (!selectInput.contains(event.target) && !optionsDiv.contains(event.target)) {
            optionsDiv.style.display = 'none';
        }
    });
</script>
@endsection