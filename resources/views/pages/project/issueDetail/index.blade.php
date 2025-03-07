@extends('page')
@section('title', 'Home Page')
@section('content')

<div class="project-info">
    <div class="project-info-left">
        @include('pages.project.sidebar.index', ['name' => $project->name])
    </div>
    <div class="project-info-right">
        <div class="project-issue-detail">
            <div class="project-issue-detail-left">
                <div class="project-issue-detail-top">
                    <div class="project-issue-detail-title">
                        <p class="issue-key">{{ $issue->key }}</p>
                        <p class="issue-title">{{ $issue->title }}</p>
                    </div>
                </div>
                <div class="project-issue-detail-header">
                    <div class="d-flex align-items-center gap-10 project-issue-detail-header-user">
                        <div class="user-info-img">
                            <img src="{{ asset($issue->assignee->image ?? 'assets/images/1740035601_team6.jpg') }}" alt="">
                        </div>
                        <div class="d-flex flex-direction">
                            <p class="name">
                                {{ $issue->user->full_name }}
                            </p>
                            <p>{{ $issue->created_at }}</p>
                        </div>
                    </div>
                    <div class="project-issue-detail-button">
                        @if (Auth::id() === $issue->user_id)
                            <button><i class="fa-solid fa-pen-to-square"></i> Edit</button>
                        @endif
                    </div>
                </div>
                <div class="project-issue-detail-body">
                    {!! $issue->description !!}    
                </div>
                <div class="project-issue-detail-image">
                    @foreach ( $attachment as $item)
                    <div class="issue-image-list">
                        <img onclick="showImage(this)" src="{{ asset($item->file_path	 ?? 'assets/images/1740035601_team6.jpg') }}" alt="">
                    </div>
                    @endforeach
                </div>
                <div class="issue-attachment-title">
                    <p>Attachments</p>
                    <button onclick="showUploadFile()">{{ __('messages.Upload file') }}</button>
                </div>
                <div class="project-issue-detail-right-file gap-10">
                    <div class="d-flex flex-direction gap-10">
                    @foreach ($attachment as $item)
                        @if (!Str::startsWith($item->file_path, 'assets/images'))
                            <a href="{{ url($item->file_path) }}" target="_blank">{{ $item->file_path }}</a>
                        @endif
                    @endforeach
                    </div>
                </div>
                <div class="issue-comment-title">
                    <p>Comments</p>
                </div>
                <div class="project-issue-detail-comment">
                    @foreach ($comments as  $item)
                    <div class="project-issue-detail-list-comment">
                        <div class="d-flex align-items-center space-between">
                            <div class="d-flex align-items-center gap-10 project-issue-detail-header-user">
                                <div class="user-info-img">
                                    <img src="{{ asset($item->user->image ?? 'assets/images/1740035601_team6.jpg') }}" alt="">
                                </div>
                                <div class="d-flex flex-direction">
                                    <p class="name">
                                        {{ $item->user->full_name }}
                                    </p>
                                    <p>{{ $item->created_at }}</p>
                                </div>
                            </div>
                            <div class="project-issue-detail-button">
                                <button><i class="fa-solid fa-pen-to-square"></i> Edit</button>
                            </div>
                        </div>
                        <div class="project-issue-detail-comment-content">
                            <ul>
                                <li>
                                    <i class="fa-solid fa-circle"></i> status: 
                                    @if ($item->status == 1)
                                        {{ __('messages.Open') }}
                                    @elseif ($item->status == 2)
                                        {{ __('messages.In Progress') }}
                                    @elseif ($item->status == 3)
                                        {{ __('messages.Resolved') }}
                                    @else
                                        {{ __('messages.Closed') }}
                                    @endif
                                </li>
                                <li><i class="fa-solid fa-circle"></i> Assignee: {{ $item->assignee->full_name }}</li>
                                @if (!empty($item->url))
                                <li><a href="{{ $item->url}}"><i class="fa-solid fa-circle"></i> Url: {{ $item->url}}</li></a>
                                @endif
                            </ul>
                            <div class="w-full p-10">
                                <img onclick="showImage(this)" class="w-30 height-auto cursor border-radius-5" src="{{ asset($item->image ?? 'assets/images/1736782284_project3.png') }}" alt="">
                            </div>
                            <div class="w-full">
                                {!! $item->description !!}
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="project-issue-detail-right gap-10">
                <div class="project-issue-detail-right-top space-between">
                    <div class="d-flex gap-10">
                        <p>{{ $issue->start_date }}</p>
                        <p>-</p>
                        <p>{{ $issue->due_date }}</p>
                    </div>
                    <div class="project-issue-detail-right-top-button">
                        @if (strtotime(now()) > strtotime($issue->due_date))
                            <button class="btn btn-danger">Trễ thời hạn</button>
                        @else
                            <button class="btn btn-success">Đúng thời hạn</button>
                        @endif
                    </div>
                </div>
                <div class="project-issue-detail-right-body gap-10">
                    <div class="d-flex gap-10 align-items-center  border-radius-5 space-between p-10 bg-white">
                        <div class="w-50">{{ __('messages.Status') }}</div>
                        <p class="text-blue"><i class="fa-solid fa-arrow-right"></i></p>
                        <div class="w-50">
                            @if ($issue->status == 1)
                                <p>{{ __('messages.Open') }}</p>
                            @elseif ($issue->status == 2)
                                <p>{{ __('messages.In Progress') }}</p>
                            @elseif ($issue->status == 3)
                                <p>{{ __('messages.Resolved') }}</p>
                            @else
                                <p>{{ __('messages.Closed') }}</p>
                            @endif
                        </div>
                    </div>
                    <div class="d-flex gap-10 align-items-center  border-radius-5 space-between p-10 bg-white">
                        <div class="w-50">{{ __('messages.Priority') }}</div>
                        <p class="text-blue"><i class="fa-solid fa-arrow-right"></i></p>
                        <div class="w-50">
                            @if ($issue->priority == 1)
                                <p>{{ __('messages.Low') }}</p>
                            @elseif ($issue->priority == 2)
                                <p>{{ __('messages.Normal') }}</p>
                            @else
                                <p>{{ __('messages.High') }}</p>
                            @endif
                        </div>
                    </div>
                    <div class="d-flex gap-10 align-items-center  border-radius-5 space-between p-10 bg-white">
                        <div class="w-50">{{ __('messages.Category') }}</div>
                        <p class="text-blue"><i class="fa-solid fa-arrow-right"></i></p>
                        <div class="w-50">
                            @if ($issue->category == 1)
                                <p>{{ __('messages.Investigation') }}</p>
                            @elseif ($issue->category == 2)
                                <p>{{ __('messages.Bug Fixing') }}</p>
                            @else
                                <p >{{ __('messages.Create New') }}</p>
                            @endif
                        </div>
                    </div>
                    <div class="d-flex gap-10 align-items-center  border-radius-5 space-between p-10 bg-white">
                        <div class="w-50">{{ __('messages.Assignee') }}</div>
                        <p class="text-blue"><i class="fa-solid fa-arrow-right"></i></p>
                        <div class="w-50">
                           <p class="assignee">{{ $issue->assignee->full_name }}</p>
                        </div>
                    </div>
                    <div class="d-flex gap-10 align-items-center  border-radius-5 space-between p-10 bg-white">
                        <div class="w-50">{{ __('messages.Category') }}</div>
                        <p class="text-blue"><i class="fa-solid fa-arrow-right"></i></p>
                        <div class="w-50">
                            @if ($issue->milestone == 1)
                                <p class="category">{{ __('messages.Deployment') }}</p>
                            @else
                                <p class="category" >{{ __('messages.Completed') }}</p>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="project-issue-detail-right-comment">
                    <form action="{{ route('comment.store') }}" method="POST" enctype="multipart/form-data" class="form-comment">
                    @csrf
                        <input type="hidden" name="issue_project_id" value="{{ $issue->id }}"/>
                        @if (Auth::check())
                            <input type="hidden" name="user_id" value="{{ Auth::user()->id }}" readonly/>
                        @endif
                        <div class="d-flex gap-10">
                            <div class="w-50 d-flex gap-5 flex-direction">
                                <label for="status">{{ __('messages.Status') }}</label>
                                <select class="seclect" name="status" id="status">
                                    <option value="1">{{ __('messages.Open') }}</option>
                                    <option value="2">{{ __('messages.In Progress') }}</option>
                                    <option value="3">{{ __('messages.Resolved') }}</option>
                                    <option value="4">{{ __('messages.Closed') }}</option>
                                </select>
                            </div>
                            <div class="w-50 d-flex gap-5 flex-direction">
                                <label for="assignee">{{ __('messages.Assignee') }}</label>
                                <select class="seclect" name="assignee" id="assignee">
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
                        <div class="form-textarea-category mt-10">
                            <textarea class="textarea" name="description" id="editor" placeholder="{{ __('messages.Use @mention to notify a colleague...') }}"></textarea>
                        </div>
                        <div class="w-full mt-10">
                            <input type="text" name="url" class="w-full input"  placeholder="URL:"/> 
                        </div>
                        <div class="w-full mt-10">
                            <input type="file" name="image" class="w-full input"/> 
                        </div>
                        <button class="button">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="model" id="ModelShowImage">
    <div class="ModelShowImage">
    <img id="previewImage" class="w-full height-auto cursor border-radius-5" src="{{ asset($item->image ?? 'assets/images/1740035601_team6.jpg') }}" alt="">
        <div class="BtnCloseCategoryTask" onclick="closeShowImage()">
            <p>X</p>
        </div>
    </div>
</div>

<div class="model" id="ModelUploadFile">
    <div class="ModelUploadFile">
        <form action="{{ route('files.store.issue') }}" method="POST" enctype="multipart/form-data">
        @csrf
            <input type="hidden" name="issue_project_id" value="{{ $issue->id }}"/>
            <div class="w-full">
                <div class="upload-container" onclick="document.getElementById('fileInput').click();">
                    <p>{{ __('messages.Click or Drag files to upload') }}</p>
                    <input type="file" id="fileInput" name="attachments[]" multiple accept="image/*">
                </div>
                <div class="preview-container" id="previewContainer"></div>
                <button class="button mt-10">Submit</button>
            </div>
            <div class="BtnCloseCategoryTask" onclick="closeUploadFile()">
                <p>X</p>
            </div>
        </form>
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
   function showImage(imgElement) {
        var imgSrc = imgElement.src; 
        var previewImage = document.getElementById("previewImage"); 
        var ModelShowImage = document.getElementById("ModelShowImage");

        if (previewImage) {
            previewImage.src = imgSrc;
        }

        console.log(imgElement);

        ModelShowImage.style.display = "block";
    }


    function closeShowImage() {
        const ModelShowImage = document.querySelector('#ModelShowImage');
        if (ModelShowImage.style.display === 'none' || ModelShowImage.style.display === '') {
            ModelShowImage.style.display = 'block'; 
        } else {
            ModelShowImage.style.display = 'none';
        }
    }

    function showUploadFile() {
        const ModelUploadFile = document.querySelector('#ModelUploadFile');
        if (ModelUploadFile.style.display === 'none' || ModelUploadFile.style.display === '') {
            ModelUploadFile.style.display = 'block'; 
        } else {
            ModelUploadFile.style.display = 'none';
        }
    }

    function closeUploadFile() {
        const ModelUploadFile = document.querySelector('#ModelUploadFile');
        if (ModelUploadFile.style.display === 'none' || ModelUploadFile.style.display === '') {
            ModelUploadFile.style.display = 'block'; 
        } else {
            ModelUploadFile.style.display = 'none';
        }
    }

    document.getElementById('fileInput').addEventListener('change', function(event) {
        const files = event.target.files;
        const previewContainer = document.getElementById('previewContainer');
        previewContainer.innerHTML = ""; // Xóa nội dung cũ trước khi hiển thị mới

        for (let file of files) {
            const div = document.createElement('div');
            div.classList.add('file-preview');
            div.innerHTML = `
                <p>${file.name}</p>
                <button class="remove-btn">&times;</button>
            `;

            div.querySelector('.remove-btn').addEventListener('click', function() {
                div.remove();
            });

            previewContainer.appendChild(div);
        }
    });
    
</script>


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
@endsection
