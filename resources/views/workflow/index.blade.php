@extends('app')

@section('title', 'Home Page')

@section('content')
<div class="todo">
<div class="todoHeader">
        <div class="topHeader">
            <h2>Email</h2> | <span>Home</span>
        </div>
        <div class="headerToQuesionRight">
            <button type="button" class="change"><i class="fa-solid fa-cash-register"></i> Thay đổi</button>
            <button type="button" class="create" onclick="openWordFlow()"><i class="fa-solid fa-plus"></i> Tạo mới</button>
        </div>
    </div>
    <div class="projecTodoBody mt-10">
        <div class="projectCol-8">
            <div class="board">                      
                <div class="lanes">
                    <div class="swim-lane" id="todo-lane">
                        <h3 class="heading">Open</h3> 
                        @foreach ($workflows as $item)
                            @if ($item->status === 'open')
                                <div class="task" draggable="true" data-id="{{ $item->id }}">
                                    <div class="normal d-flex">
                                        <h3>{{ $item->name }}</h3>
                                        <div class="bar-icon-click" onclick="showWorkflowPopup({{ $item->id }})">
                                            <i class="fa-regular fa-eye"></i>
                                        </div>
                                    </div>
                                    <div class="text-description">{!! $item->description !!}</div>
                                    <div class=" mt-10">
                                        <p>{{ __('messages.Date Created') }}: {{ $item->current_start }}</p>
                                        <p>{{ __('messages.Create by') }}: {{ $item->user ? $item->user->full_name : 'Không có danh mục' }}</p>
                                    </div>
                                    <div class="progress-container mt-10">
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
                        <h3 class="heading">Doing</h3>
                        @foreach ($workflows as $item)
                            @if ($item->status === 'doing')
                                <div class="task" draggable="true" data-id="{{ $item->id }}">
                                    <div class="normal d-flex">
                                        <h3>{{ $item->name }}</h3>
                                        <div class="bar-icon-click" onclick="showWorkflowPopup({{ $item->id }})">
                                            <i class="fa-regular fa-eye"></i>
                                        </div>
                                    </div>
                                    <div class="text-description">{!! $item->description !!}</div>
                                    <div class=" mt-10">
                                        <p>{{ __('messages.Date Created') }}: {{ $item->current_start }}</p>
                                        <p>{{ __('messages.Create by') }}: {{ $item->user ? $item->user->full_name : 'Không có danh mục' }}</p>
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
                        <h3 class="heading">Testing</h3>
                        @foreach ($workflows as $item)
                            @if ($item->status === 'testing')
                                <div class="task" draggable="true" data-id="{{ $item->id }}">
                                    <div class="normal d-flex">
                                        <h3>{{ $item->name }}</h3>
                                        <div class="bar-icon-click" onclick="showWorkflowPopup({{ $item->id }})">
                                            <i class="fa-regular fa-eye"></i>
                                        </div>
                                    </div>
                                    <div class="text-description">{!! $item->description !!}</div>
                                    <div class=" mt-10">
                                        <p>{{ __('messages.Date Created') }}: {{ $item->current_start }}</p>
                                        <p>{{ __('messages.Create by') }}: {{ $item->user ? $item->user->full_name : 'Không có danh mục' }}</p>
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
                        <h3 class="heading">Done</h3>
                        @foreach ($workflows as $item)
                            @if ($item->status === 'done')
                                <div class="task" draggable="true" data-id="{{ $item->id }}">
                                    <div class="normal d-flex">
                                        <h3>{{ $item->name }}</h3>
                                        <div class="bar-icon-click" onclick="showWorkflowPopup({{ $item->id }})">
                                            <i class="fa-regular fa-eye"></i>
                                        </div>
                                    </div>
                                    <div class="text-description">{!! $item->description !!}</div>
                                    <div class=" mt-10">
                                        <p>{{ __('messages.Date Created') }}: {{ $item->current_start }}</p>
                                        <p>{{ __('messages.Create by') }}: {{ $item->user ? $item->user->full_name : 'Không có danh mục' }}</p>
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
                </div>
            </div>
        </div>
    </div>
</div>

<div class="model" id="createWordFlow">
    <div class="ModelCreateTodo">
        <form method="POST" action="{{ route('workflows.store') }}">
        @csrf
            <h2>{{ __('messages.Add New Workflow') }}</h2>
            @if (Auth::check())
                <input type="hidden" name="user_id" value="{{ Auth::user()->id }}"/>
            @endif
            <div class="form-input-category">
                <label for="name">{{ __('messages.Name') }}</label>
                <input type="text" class="input-name" name="name" required>
            </div>
            <div class="form-textarea-category">
                <label for="description">{{ __('messages.Description') }}</label>
                @include('components.editor')
                <input type="text" name="description" id="hiddenContent" style="display:none;">
            </div>
            <div class="form-group-info">
                <div class="form-input-category">
                    <label for="current_start">{{ __('messages.Start Date') }}</label>
                    <input type="date" class="input-name" id="current_start" name="current_start">
                </div>
                <div class="form-select-category">
                    <label for="status">{{ __('messages.Status') }}</label>
                    <select name="status" id="status" required>
                        <option value="open">{{ __('messages.Open') }}</option>
                        <option value="doing">{{ __('messages.Doing') }}</option>
                        <option value="testing">{{ __('messages.Testing') }}</option>
                        <option value="done">{{ __('messages.Done') }}</option>
                    </select>
                </div>
            </div>
            <div class="form-btn">
                <button type="submit">{{ __('messages.Add New') }}</button>
            </div>
            <div class="BtnCloseCreate" onclick="closeCreateWorkflow()">
                <p>X</p>
            </div>
        </form>
    </div>
</div>

<div class="model" id="showWorkflow">
    <div class="ModelCreateTodo">
        <div class="title-show">
            <span>Name: <b id="showName"></b></span>
            <div class="div-flex">Create by: <p id="showUser"></p></div>
            <p>Date created: <i id="showCurrentDate"></i></p>
        </div>
        <div class="showContentComponent" id="show">
            <div class="showWorkflowComponent">
                <div id="showDescription"></div>
            </div>
        </div>
        <div class="BtnCloseCreate" onclick="closeShowWorkflow()">
            <p>X</p>
        </div>
    </div>
</div>



<script>

function updateComment() {
    let commentContent = document.getElementById('commentContentPost').value;
    document.getElementById('comment').value = commentContent;
}
document.addEventListener('DOMContentLoaded', function() {
    const popup = document.querySelector('#popup-category');
    if (popup) {
        popup.style.display = 'block';

        setTimeout(() => {
            popup.style.display = 'none';
        }, 5000);
    }
});


function showWorkflowPopup(taskId) {
    const showWorkflowPopup = document.getElementById('showWorkflow');
    showWorkflowPopup.style.display = 'block';
    fetch(`/tasks/${taskId}`)
    .then(response => response.json())
    .then(data => {
        console.log(data);
        document.getElementById('showUser').innerHTML = data.user.full_name;
        document.getElementById('showCurrentDate').innerHTML = data.current_start;
        document.getElementById('showName').innerHTML = data.name;
        document.getElementById('showDescription').innerHTML = data.description;
    })
}


function closeShowWorkflow() {
    const showWorkflow = document.getElementById('showWorkflow')
    if (showWorkflow.style.display === 'none' || showWorkflow.style.display === '') {
        showWorkflow.style.display = 'block'; 
    } else {
        showWorkflow.style.display = 'none';
    }
}


window.onload = function() {
    const today = new Date();
    today.setDate(today.getDate() + 1); 

    const dd = String(today.getDate()).padStart(2, '0'); 
    const mm = String(today.getMonth() + 1).padStart(2, '0'); 
    const yyyy = today.getFullYear(); 

    const formattedDate = `${yyyy}-${mm}-${dd}`;
    document.getElementById("current_start").value = formattedDate; 
}

function openWordFlow() {
    const CreateWordFlow = document.getElementById('createWordFlow')
    if (CreateWordFlow.style.display === 'none' || CreateWordFlow.style.display === '') {
        CreateWordFlow.style.display = 'block'; 
    } else {
        CreateWordFlow.style.display = 'none';
    }
}

function closeCreateWorkflow() {
    const CreateWordFlow = document.getElementById('createWordFlow')
    if (CreateWordFlow.style.display === 'none' || CreateWordFlow.style.display === '') {
        CreateWordFlow.style.display = 'block'; 
    } else {
        CreateWordFlow.style.display = 'none';
    }
}
const tasks = document.querySelectorAll('.task');
const lanes = document.querySelectorAll('.swim-lane');

tasks.forEach(task => {
    task.addEventListener('dragstart', () => {
        task.classList.add('dragging');
    });

    task.addEventListener('dragend', () => {
        task.classList.remove('dragging');
        // Cập nhật trạng thái
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
        console.log('Success:', data);
        // Cập nhật lại UI nếu cần
    })
    .catch((error) => {
        console.error('Error:', error);
    });
}
</script>
@endsection