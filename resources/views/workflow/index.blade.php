@extends('app')

@section('title', 'Home Page')

@section('content')
<div class="todo">
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



<script>s
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