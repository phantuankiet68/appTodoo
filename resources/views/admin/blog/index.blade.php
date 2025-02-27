
@extends('app')

@section('title', 'Home Page')

@section('content')
<div class="news-container">
    <div class="news-container-body">
        <div class="news-container-form interfaces">
            <div class="title-sub">
                <h3>Tạo New Experience mới</h3>
            </div>
            <form id="editForm" action="{{ route('blogs.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <!-- @method('PUT') -->
                <input type="hidden" name="id" id="interface_id" value="">
                @if (Auth::check())
                    <input type="hidden" id="user_id" name="user_id" value="{{ Auth::user()->id }}">
                @endif
                <div class="form-input-category mt-5">
                    <label for="stt">Title</label>
                    <input type="text" class="input-name" name="title" id="title" required>
                </div>
                <div class="form-select-category mt-5">
                    <label for="choose">choose</label>
                    <select name="choose" id="choose">
                        <option value="0">free</option>
                        <option value="1">Pay a fee</option>
                    </select>
                </div>
                <div class="form-select-category mt-5">
                    <label for="status">Language</label>
                    <select name="language" id="language">
                        <option value="1">Việt Nam</option>
                        <option value="2">English</option>
                        <option value="3">Japan</option>
                    </select>
                </div>
                <div class="form-textarea-category">
                    <label for="content">content</label>
                    <textarea id="editor" name="content"></textarea>
                </div>
                <div class="form-textarea-category">
                    <label for="description">description</label>
                    <textarea id="editor1" name="description"></textarea>
                </div>
                <div class="form-textarea-category">
                    <label for="description">HTML</label>
                    <textarea id="editor2" name="html"></textarea>
                </div>
                
                <div class="form-textarea-category">
                    <label for="description">CSS</label>
                    <textarea id="editor3" name="css"></textarea>
                </div>

                <div class="form-textarea-category">
                    <label for="description">Javascript</label>
                    <textarea id="editor4" name="javascript"></textarea>
                </div>
                <div class="form-textarea-category">
                    <label for="description">Front end</label>
                    <textarea id="editor5" name="front_end"></textarea>
                </div>
                <div class="form-textarea-category">
                    <label for="description">Back end</label>
                    <textarea id="editor6" name="back_end"></textarea>
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
                            <th class="t-center" style="width: 60px;">STT</th>
                            <th class="ml-3">Title</th>
                            <th class="text-center">Create at</th>
                            <th class="ml-3">Languages</th>
                            <th class="ml-3">Status</th>
                            <th class="text-center">Settings</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($blogs as $item)
                        <tr>
                            <td class="jus-center">
                                <p class="td-1">{{$item->id}}</p>
                            </td>
                            <td class="ml-3"><div class="text-truncate">{!!$item->title!!}</p></td>
                            <td>
                                <div class="table_user text-center">
                                    <p>{{ $item->created_at->format('d-m-Y') }}</p>
                                </div>
                            </td>
                            <td class="text-center">{{ $item->language }}</td>
                            <td class="pending ml-3">
                                @if ($item->status == 1)
                                    <p class="resolvedIssue">Show</p>
                                @else
                                    <p class="openIssue">Hide</p>
                                @endif
                            </td>
                            <td class="text-center">
                                <a href="javascript:void(0);" onclick="showEditInterface('{{ $item->id }}');">
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
    ClassicEditor
        .create(document.querySelector('#editor1'))
        .then(editor => {
            editorInstance = editor; 
        })
        .catch(error => {
            console.error(error);
        });
    ClassicEditor
        .create(document.querySelector('#editor2'), {
            allowedContent: true,
            extraAllowedContent: 'pre code; span[class];',
            removePlugins: ['Autoformat', 'PasteFromOffice']
        })
        .catch(error => {
            console.error(error);
        });
    ClassicEditor
        .create(document.querySelector('#editor3'), {
            allowedContent: true,
            extraAllowedContent: 'pre code; span[class];',
            removePlugins: ['Autoformat', 'PasteFromOffice']
        })
        .catch(error => {
            console.error(error);
        });
    ClassicEditor
        .create(document.querySelector('#editor4'), {
            allowedContent: true,
            extraAllowedContent: 'pre code; span[class];',
            removePlugins: ['Autoformat', 'PasteFromOffice']
        })
        .catch(error => {
            console.error(error);
        });
    ClassicEditor
        .create(document.querySelector('#editor5'), {
            allowedContent: true,
            extraAllowedContent: 'pre code; span[class];',
            removePlugins: ['Autoformat', 'PasteFromOffice']
        })
        .catch(error => {
            console.error(error);
        });
    ClassicEditor
        .create(document.querySelector('#editor6'), {
            allowedContent: true,
            extraAllowedContent: 'pre code; span[class];',
            removePlugins: ['Autoformat', 'PasteFromOffice']
        })
        .catch(error => {
            console.error(error);
        });
</script>

<script>
    function showEditInterface(id) {
        fetch("{{ url('interfaces/show') }}/" + id)
        .then(response => response.json())
        .then(data => {
            document.getElementById('interface_id').value = data.id;
            document.getElementById('title').value = data.title;
            document.getElementById('language').value = data.language;
            document.getElementById('status').value = data.status;

            if (editorInstance) {
                editorInstance.setData(data.description);
            } else {
                document.querySelector('textarea[name="description"]').value = data.description;
            }
            document.getElementById('editForm').action = "{{ url('interfaces') }}/" + id;
            document.getElementById('editForm').style.display = 'block';
        })
        .catch(error => console.error('Error:', error));
    }
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
        uploadBox.style.display = 'none';

        Array.from(files).forEach((file) => {
            const fileReader = new FileReader();
            const fileItem = document.createElement('div');
            fileItem.className = 'file-item';
            fileReader.onload = (e) => {
                const preview = document.createElement('img');
                preview.src = e.target.result;
                fileItem.appendChild(preview);
            };
            const progressBarContainer = document.createElement('div');
            progressBarContainer.className = 'progress-bar';
            const progressBar = document.createElement('div');
            progressBar.className = 'progress';
            progressBarContainer.appendChild(progressBar);
            setTimeout(() => {
                progressBar.style.width = '100%';
            }, 300);
            const removeButton = document.createElement('span');
            removeButton.className = 'remove-file';
            removeButton.innerHTML = '✖';
            removeButton.addEventListener('click', () => {
                fileItem.remove();
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
