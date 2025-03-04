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
            <h2>{{ __('messages.Add new') }}</h2>
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
                <textarea class="textarea" name="description" id="editor"></textarea>
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
    <div class="ModelCreateTodo">
        <div class="buttonAction">
            <button class="edit" onclick="showTab('edit')"><i class="fa-solid fa-pen-to-square"></i> {{ __('messages.Edit') }}</button>
            <button class="delete" onclick="showTab('delete')"><i class="fa-solid fa-trash"></i> {{ __('messages.Delete') }}</button>
        </div>

        <div class="editContentQuestion" id="edit">
            <form method="POST" id="edit-task-form" action="">
                @csrf
                @method('PUT')
                <input type="hidden" id="task_id" name="task_id" value=""/>
                @if (Auth::check())
                    <input type="hidden" name="user_id" value="{{ Auth::user()->id }}"/>
                @endif
                <div class="form-input-category">
                    <label for="name">{{ __('messages.Name') }}</label>
                    <input type="text" class="input-name" name="name" id="showNameEdit">
                </div>
                <div class="form-textarea-category">
                    <label for="description">{{ __('messages.Content') }}</label>
                    <textarea class="textarea" name="description" id="editor1"></textarea>
                </div>
                <div class="form-group-info">
                    <div class="form-input-category">
                        <label for="current_start">{{ __('messages.Start Date') }}</label>
                        <input type="date" class="input-name" id="showCurrentEdit" name="current_start">
                    </div>
                    <div class="form-select-category">
                        <label for="status">{{ __('messages.Status') }}</label>
                        <select name="status" id="status">
                            <option value="1">{{ __('messages.Show') }}</option>
                            <option value="0">{{ __('messages.Hide') }}</option>
                        </select>
                    </div>
                </div>
                <div class="form-btn">
                    <button type="submit">{{ __('messages.Update') }}</button>
                </div>
            </form>
        </div>

        <div class="deleteContentQuestion" id="delete" style="display: none;">
            <form method="POST" id="delete-Code">
                @csrf
                @method('DELETE')
                <input type="hidden" id="task_id" name="task_id" />
                <h3 class="text-center px-10">{{ __('messages.Are you sure you want to delete?') }}</h3>
                <p class="text-center" id="showNameDelete"></p> 
                <div class="form-btn-delete">
                    <button type="submit">{{ __('messages.Delete') }}</button>
                </div>
            </form>
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



    function showTab(tab) {
        document.getElementById('edit').style.display = 'none';
        document.getElementById('delete').style.display = 'none';
        document.getElementById(tab).style.display = 'block';
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
            if (document.getElementById('showName')) {
                document.getElementById('showName').innerHTML = data.name || "N/A";
            }

            if (document.getElementById('showNameEdit')) {
                document.getElementById('showNameEdit').value = data.name || "";
            }

            if (document.getElementById('showCurrentEdit')) {
                document.getElementById('showCurrentEdit').value = data.current_start || "";
            }

            if (document.getElementById('showNameDelete')) {
                document.getElementById('showNameDelete').innerHTML = data.name || "";
            }

            if (editorInstance) {
                editorInstance.setData(data.description);
            } else {
                console.error("⚠️ Editor instance not found.");
            }

            if (document.getElementById('task_id')) {
                document.getElementById('task_id').value = data.id || "";
            }
        })
        .catch(error => console.error('Error fetching task:', error));
    }

    document.getElementById('edit-task-form').onsubmit = function(event) {
        event.preventDefault();

        const taskIdInput = document.getElementById('task_id');
        if (!taskIdInput) {
            console.error("Task ID input not found.");
            return;
        }

        const taskId = taskIdInput.value;
        if (!taskId) {
            console.error("Task ID is empty.");
            return;
        }

        this.action = `/v1/tasks/${taskId}`; 
        this.submit();
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
            method: 'PATCH', // hoặc 'PUT', tùy thuộc vào API của bạn
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': '{{ csrf_token() }}' // Thêm token CSRF nếu cần
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
