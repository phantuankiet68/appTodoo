@extends('app')

@section('title', 'Home Page')

@section('content')
<div class="news-container">
    <div class="news-container-body">
        <div class="news-container-form">
            <div class="title-sub">
                <h3>Tạo sản phẩm mới</h3>
            </div>
            <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                @if (Auth::check())
                    <input type="hidden" id="user_id" name="user_id" value="{{ Auth::user()->id }}">
                @endif
                <div class="form-input-category">
                    <label>Title</label>
                    <input type="text" class="input-name" name="title" required>
                </div>
                <div class="form-select-category mt-5">
                    <label>Language</label>
                    <select name="language" id="language">
                        <option value="1">Việt Nam</option>
                        <option value="2">English</option>
                        <option value="3">Japan</option>
                    </select>
                </div>
                <div class="form-textarea-category">
                    <label for="description">Code</label>
                    <textarea id="editor" name="description"></textarea>
                </div>
                <div class="form-input-category mt-5">
                    <label for="file">Image</label>
                    <input type="file" class="input-name" name="image_path">
                </div>
                <div class="form-select-category mt-10">
                    <label for="status">Status</label>
                    <select name="status" id="status">
                        <option value="1">Show</option>
                        <option value="0">Hide</option>
                    </select>
                </div>
                <div class="form-btn">
                    <button type="submit">Save changes</button>
                </div>
            </form>
        </div>
        <div class="news-container-table">
        <div class="tables">
                <table>
                    <thead>
                        <tr>
                            <th class="t-center" style="width: 60px;">ID</th>
                            <th class="ml-3">title</th>
                            <th class="text-center">Create by</th>
                            <th class="ml-3">Languages</th>
                            <th class="ml-3">Status</th>
                            <th class="text-center">Settings</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($products as $item)
                        <tr>
                            <td class="jus-center">
                                <p class="td-1">{{$item->id}}</p>
                            </td>
                            <td class="ml-3"><div class="text-truncate">{!!$item->title!!}</p></td>
                            <td>
                                <div class="table_user text-center">
                                    <p>{{ $item->user ? $item->user->full_name : 'Không có danh mục' }}</p>
                                </div>
                            </td>
                            <td class="pending ml-3">
                                @if ($item->status == 1)
                                    <p class="resolvedIssue">Show</p>
                                @else
                                    <p class="openIssue">Hide</p>
                                @endif
                            </td>
                            <td class="text-center">{{ $item->created_at->format('d-m-Y') }}</td>
                            <td class="text-center">
                                <a href="">
                                    <i class="fa-regular fa-pen-to-square edit"></i>
                                </a>
                                <a href="#">
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
    document.addEventListener('DOMContentLoaded', () => {
    const fileInput = document.getElementById('fileInput');
    const browseButton = document.getElementById('browseButton');
    const uploadedFiles = document.getElementById('uploadedFiles');
    const uploadBox = document.querySelector('.upload-box');

    browseButton.addEventListener('click', () => fileInput.click());

    uploadBox.addEventListener('dragover', (e) => {
        e.preventDefault();
        uploadBox.classList.add('dragging');
    });

    uploadBox.addEventListener('dragleave', () => {
        uploadBox.classList.remove('dragging');
    });

    uploadBox.addEventListener('drop', (e) => {
        e.preventDefault();
        uploadBox.classList.remove('dragging');
        handleFiles(e.dataTransfer.files);
    });

    fileInput.addEventListener('change', () => handleFiles(fileInput.files));

    function handleFiles(files) {
        // Ẩn phần upload-box
        uploadBox.style.display = 'none';

        Array.from(files).forEach((file) => {
            const fileReader = new FileReader();
            const fileItem = document.createElement('div');
            fileItem.className = 'file-item';

            // Create file preview
            fileReader.onload = (e) => {
                const preview = document.createElement('img');
                preview.src = e.target.result;
                fileItem.appendChild(preview);
            };

            // Create progress bar
            const progressBarContainer = document.createElement('div');
            progressBarContainer.className = 'progress-bar';
            const progressBar = document.createElement('div');
            progressBar.className = 'progress';
            progressBarContainer.appendChild(progressBar);

            // Simulate upload progress
            setTimeout(() => {
                progressBar.style.width = '100%';
            }, 300);

            // Add remove button
            const removeButton = document.createElement('span');
            removeButton.className = 'remove-file';
            removeButton.innerHTML = '✖';
            removeButton.addEventListener('click', () => {
                fileItem.remove();
                // Hiển thị lại phần upload-box nếu không còn file nào
                if (uploadedFiles.children.length === 0) {
                    uploadBox.style.display = 'block';
                }
            });

            fileItem.appendChild(progressBarContainer);
            fileItem.appendChild(removeButton);
            uploadedFiles.appendChild(fileItem);

            fileReader.readAsDataURL(file);
        });
    }
});
</script>
@endsection