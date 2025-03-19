@extends('page')
@section('title', 'Home Page')
@section('content')

<div class="task-info">
    <div class="workflow">
        <div class="projectCol-8">
            <div class="board">                      
                <div class="lanes">
                    <div class="swim-lane" id="todo-lane">
                        <div class="heading-lane">
                            <div class="heading-lane-title">
                                <span><i class="fa-solid fa-circle"></i></span>
                                <p class="heading">{{ __('messages.Open') }}</p>
                                <button class="total-open">{{ $statusCounts['open'] }}</button>
                            </div>
                            <p onclick="openStask()"><i class="fa-solid fa-plus"></i></p> 
                        </div>
                        @foreach ($tasks as $item)
                            @if ($item->status === 'open')
                                <div class="task" draggable="true" data-id="{{ $item->id }}">
                                    <div class="task_normal d-flex space-between">
                                        <p>{{ $item->current_start }}</p>
                                        <div class="bar-icon-click" onclick="showTaskPopup('{{ $item->id }}')">
                                            <i class="fa-regular fa-eye"></i>
                                        </div>
                                    </div>
                                    <div class="title-footer-wrap">
                                        <p class="name-wrap">{{ $item->name }}</p>
                                        <p class="create-by">{{ $item->user ? $item->user->full_name : 'Không có danh mục' }}</p>
                                    </div>
                                    <div class="progress-container">
                                        <div class="progress-bar" style="width: 0%;"></div>
                                        <div class="progress-bar-box">
                                            <span>0%</span>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </div>
            
                    <div class="swim-lane">
                        <div class="heading-lane">
                            <div class="heading-lane-title progress">
                                <span><i class="fa-solid fa-circle"></i></span>
                                <p class="heading">{{ __('messages.Doing') }}</p>
                                <button class="total-progress">{{ $statusCounts['doing'] }}</button>
                            </div>
                            <p><i class="fa-solid fa-plus"></i></p> 
                        </div>
                        @foreach ($tasks as $item)
                            @if ($item->status === 'doing')
                                <div class="task" draggable="true" data-id="{{ $item->id }}">
                                    <div class="task_two d-flex space-between">
                                        <p>{{ $item->current_start }}</p>
                                        <div class="bar-icon-click" onclick="showTaskPopup('{{ $item->id }}')">
                                            <i class="fa-regular fa-eye"></i>
                                        </div>
                                    </div>
                                    <div class="title-footer-wrap">
                                        <p class="name-wrap">{{ $item->name }}</p>
                                        <p class="create-by">{{ $item->user ? $item->user->full_name : 'Không có danh mục' }}</p>
                                    </div>
                                    <div class="progress-container">
                                        <div class="progress-bar" style="width: 50%;"></div>
                                        <div class="progress-bar-box">
                                            <span>50%</span>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </div>
            
                    <div class="swim-lane">
                        <div class="heading-lane">
                            <div class="heading-lane-title testing">
                                <span><i class="fa-solid fa-circle"></i></span>
                                <p class="heading">{{ __('messages.Testing') }}</p>
                                <button class="total-testing">{{ $statusCounts['testing'] }}</button>
                            </div>
                            <p><i class="fa-solid fa-plus"></i></p> 
                        </div>
                        @foreach ($tasks as $item)
                            @if ($item->status === 'testing')
                                <div class="task" draggable="true" data-id="{{ $item->id }}">
                                    <div class="task_three d-flex space-between">
                                        <p>{{ $item->current_start }}</p>
                                        <div class="bar-icon-click" onclick="showTaskPopup('{{ $item->id }}')">
                                            <i class="fa-regular fa-eye"></i>
                                        </div>
                                    </div>
                                    <div class="title-footer-wrap">
                                        <p class="name-wrap">{{ $item->name }}</p>
                                        <p class="create-by">{{ $item->user ? $item->user->full_name : 'Không có danh mục' }}</p>
                                    </div>
                                    <div class="progress-container">
                                        <div class="progress-bar" style="width: 75%;"></div>
                                        <div class="progress-bar-box">
                                            <span>75%</span>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </div>
                    <div class="swim-lane">
                        <div class="heading-lane">
                            <div class="heading-lane-title done">
                                <span><i class="fa-solid fa-circle"></i></span>
                                <p class="heading">{{ __('messages.Done') }}</p>
                                <button class="total-done">{{ $statusCounts['done'] }}</button>
                            </div>
                            <p><i class="fa-solid fa-plus"></i></p> 
                        </div>
                        @foreach ($tasks as $item)
                            @if ($item->status === 'done')
                                <div class="task" draggable="true" data-id="{{ $item->id }}">
                                    <div class="task_four d-flex space-between">
                                        <p>{{ $item->current_start }}</p>
                                        <div class="bar-icon-click" onclick="showTaskPopup('{{ $item->id }}')">
                                            <i class="fa-regular fa-eye"></i>
                                        </div>
                                    </div>
                                    <div class="title-footer-wrap">
                                        <p class="name-wrap">{{ $item->name }}</p>
                                        <p class="create-by">{{ $item->user ? $item->user->full_name : 'Không có danh mục' }}</p>
                                    </div>
                                    <div class="progress-container">
                                        <div class="progress-bar" style="width: 100%;"></div>
                                        <div class="progress-bar-box">
                                            <span>100%</span>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="model" id="CreateTask">
    <div class="ModelCreateTodo">
        <form id="contentForm" method="POST" action="{{ route('tasks.store') }}">
            @csrf
            <div class="form-btn">
                <button type="submit">{{ __('messages.Save changes') }}</button>
            </div>
            @if (Auth::check())
                <input type="hidden" name="user_id" value="{{ Auth::user()->id }}"/>
            @endif
            <div class="form-input-category">
                <label for="name">{{ __('messages.Name') }}</label>
                <input type="text" class="input-name" id="name_validate" name="name">
            </div>
            <div class="form-textarea-category">
                <label for="description">{{ __('messages.Content') }}</label>
                <textarea name="description" id="hiddenDescription" style="display: none;"></textarea>
                @include('pages.components.editor.index', ['name' => 'description'])
            </div>
            <div class="form-group-info">
                <div class="form-input-category">
                    <label for="current_start">{{ __('messages.Start Date') }}</label>
                    <input type="date" class="input-name" id="current_start" name="current_start">
                </div>
                <div class="form-select-category">
                    <label for="status">{{ __('messages.Status') }}</label>
                    <select name="status">
                        <option value="1">{{ __('messages.Show') }}</option>
                        <option value="0">{{ __('messages.Hide') }}</option>
                    </select>
                </div>
            </div>
            <div class="BtnCloseCreate" onclick="closeCreateTask()">
                <p>X</p>
            </div>
        </form>
    </div>
</div>

<div class="model" id="showTask">
    <div class="ModelCreateTodo modelTask">
        <p class="title-model" id="showName"></p>
        <p id="showDescription" class="mt-10"></p>
        <div class="d-flex w-full space-between mt-10">
            <p id="showStatus" class="showStatus"></p>
            <p id="showCurrentStart" class="showCurrentStart">✅</p>
        </div>
        <div class="BtnCloseCategoryTask" onclick="closeDeleteTask()">
            <p>X</p>
        </div>
    </div>
</div>


@if (session('success'))
<div id="popup-success">
    <ul class="notifications">
        <li class="toast success hide">
            <div class="column-notifications">
                <i class="fa-solid fa-circle-check"></i>
                <span>Success:  {{ session('success') }}.</span>
            </div>
        </li>
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

<script src="{{ asset('js/editor/index.js') }}"></script>

<script>
    document.getElementById("contentForm").addEventListener("submit", function() {
        let editorContent = document.getElementById("text-input").innerHTML; 
        document.getElementById("hiddenDescription").value = editorContent;
    });

    document.getElementById("contentForm").addEventListener("submit", function() {
        let editorContent = document.getElementById("text-input").innerHTML; 
        document.getElementById("edit-task-form").value = editorContent;
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
        const popup = document.querySelector('#popup-category');
        if (popup) {
            popup.style.display = 'block';

            setTimeout(() => {
                popup.style.display = 'none';
            }, 5000);
        }
    });
    function closeDeleteTask() {
        const showTaskPopup = document.getElementById('showTask')
        if (showTaskPopup.style.display === 'none' || showTaskPopup.style.display === '') {
            showTaskPopup.style.display = 'block'; 
        } else {
            showTaskPopup.style.display = 'none';
        }
    }


    function showTaskPopup(taskId) {
        const showTaskPopup = document.getElementById('showTask');
        showTaskPopup.style.display = 'block';

        fetch(`/v1/tasks/${taskId}`)
        .then(response => {
            if (!response.ok) {
                throw new Error('Network response was not ok: ' + response.statusText);
            }
            return response.json();
        })
        .then(data => {
            document.getElementById('showName').textContent = "✅" + data.name || 'Không có tên';
            document.getElementById('showDescription').innerHTML = data.description && data.description.trim() !== '' ? data.description : 'Không có mô tả';
            document.getElementById('showStatus').textContent = data.status || 'Chưa có trạng thái';
            document.getElementById('showCurrentStart').textContent = data.current_start ? data.current_start : 'Chưa bắt đầu';
        })
        .catch(error => console.error('Error fetching task:', error));
    }

    function closeCreateTask() {
        const CreateTask = document.getElementById('CreateTask')
        if (CreateTask.style.display === 'none' || CreateTask.style.display === '') {
            CreateTask.style.display = 'block'; 
        } else {
            CreateTask.style.display = 'none';
        }
    }
    function openStask() {
        const CreateTask = document.getElementById('CreateTask')
        if (CreateTask.style.display === 'none' || CreateTask.style.display === '') {
            CreateTask.style.display = 'block'; 
        } else {
            CreateTask.style.display = 'none';
        }
    }



    function closeShowWorkflow() {
        const showWorkflow = document.getElementById('showWorkflow')
        if (showWorkflow.style.display === 'none' || showWorkflow.style.display === '') {
            showWorkflow.style.display = 'block'; 
        } else {
            showWorkflow.style.display = 'none';
        }
    }

    const statusMap = {
        'Open': 'open',
        'In progress': 'doing',
        'Testing': 'testing',
        'Done': 'done'
    };



    const tasks = document.querySelectorAll('.task');
    const lanes = document.querySelectorAll('.swim-lane');

    tasks.forEach(task => {
        task.addEventListener('dragstart', () => {
            task.classList.add('dragging');
        });

        task.addEventListener('dragend', () => {
            task.classList.remove('dragging');
            const status = task.closest('.swim-lane').querySelector('.heading').textContent.toLowerCase();
            updateTaskStatus(task.dataset.id, status);
        });
    });

    lanes.forEach(lane => {
        lane.addEventListener('dragover', (e) => {
            e.preventDefault();
            const draggingTask = document.querySelector('.dragging');
            lane.appendChild(draggingTask);
        });
    });
    function updateTaskStatus(taskId, newStatus) {
        fetch(`/update-status/${taskId}`, {
            method: 'PATCH',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            },
            body: JSON.stringify({ status: newStatus })
        })
        .then(response => {
            if (!response.ok) {
                throw new Error('Network response was not ok');
            }
            return response.json();
        })
        .then(data => {
        })
        .catch((error) => {
            console.error('Error:', error);
        });
    }
</script>

@endsection
