@extends('page')
@section('title', 'Home Page')
@section('content')

<div class="note-info">
    <div class="note-info-top">
    <form action="{{ route('notes.store') }}" method="POST" class="form-design">
        @csrf
            @if (Auth::check())
                <input type="hidden" class="input-name" name="user_id" value="{{ Auth::user()->id }}" readonly/>
            @endif
            <div class="input-big">
                <input type="text" name="title" placeholder="{{ __('messages.Enter expense details...') }}">
            </div>
            <div class="input-big">
                <input type="url" name="url" placeholder="URL">
            </div>
            <div class="input-normal">
                <input type="date" name="current_date"  id="dateInput">
            </div>
            <button type="submit"><i class="fa-solid fa-plus"></i> {{ __('messages.Add new') }}</button>
        </form>
    </div>
    <div class="note-container" id="note">
        @if ($notepad->isNotEmpty())
            @foreach ($notepad as $item)
            <div class="draggable-text" data-id="{{ $item->id }}"  data-top="{{ $item->top }}" data-left="{{ $item->left }}" >
                <p class="current_date">{{ $item->current_date }}  <button class="btn-close" onclick="deleteExpense('{{ $item->id }}')">X</button></p>
                <p class="title_note">{{ $item->title }}</p>
                <a  href="{{ $item->url }}" class="url_link">
                    <p><i class="fa-solid fa-link"></i></p>
                    <p>{{ $item->url }}</p>
                </a>
            </div>
            @endforeach
        @else
            <p>Không có ghi chú nào.</p>
        @endif
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

@if (session('success_update'))
    <div id="popup-category" class="popup-category success">
        {{ session('success_update') }}
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

document.addEventListener("DOMContentLoaded", function () {
    document.querySelectorAll('.draggable-text').forEach(function (el) {
        let top = el.getAttribute('data-top') || 100;
        let left = el.getAttribute('data-left') || 100;
        el.style.top = top + "px";
        el.style.left = left + "px";
    });
});
document.addEventListener("DOMContentLoaded", function () {
    document.querySelectorAll(".draggable-text").forEach(textElement => {
        let offsetX, offsetY, isDragging = false;

        textElement.addEventListener("mousedown", (e) => {
            isDragging = true;
            offsetX = e.clientX - textElement.offsetLeft;
            offsetY = e.clientY - textElement.offsetTop;
            textElement.style.zIndex = "1000"; // Đưa lên trên cùng
        });

        document.addEventListener("mousemove", (e) => {
            if (!isDragging) return;

            let newX = e.clientX - offsetX;
            let newY = e.clientY - offsetY;

            // Giới hạn trong khung note-container
            const container = document.getElementById("note");
            const maxX = container.offsetWidth - textElement.offsetWidth;
            const maxY = container.offsetHeight - textElement.offsetHeight;

            newX = Math.max(0, Math.min(newX, maxX));
            newY = Math.max(0, Math.min(newY, maxY));

            textElement.style.left = `${newX}px`;
            textElement.style.top = `${newY}px`;
        });

        document.addEventListener("mouseup", () => {
            if (!isDragging) return;
            isDragging = false;
            textElement.style.zIndex = "1";

            // Gửi vị trí mới lên server để lưu
            let noteId = textElement.getAttribute("data-id");
            let newTop = parseInt(textElement.style.top);
            let newLeft = parseInt(textElement.style.left);

            fetch("{{ route('notes.updatePosition') }}", {
                method: "POST",
                headers: {
                    "Content-Type": "application/json",
                    "X-CSRF-TOKEN": document.querySelector('meta[name="csrf-token"]').content
                },
                body: JSON.stringify({
                    id: noteId,
                    top: newTop,
                    left: newLeft
                })
            })
            .then(response => response.json())
            .catch(error => console.error("Error:", error));
        });
    });
});

</script>

<script>
    
    document.addEventListener("DOMContentLoaded", function () {
        let today = new Date();
        let formattedDate = today.toISOString().split('T')[0];
        document.getElementById("dateInput").value = formattedDate;
    });

    document.querySelectorAll(".draggable-text").forEach(textElement => {
        let offsetX, offsetY, isDragging = false;

        textElement.addEventListener("mousedown", (e) => {
            isDragging = true;
            offsetX = e.clientX - textElement.offsetLeft;
            offsetY = e.clientY - textElement.offsetTop;
            textElement.style.zIndex = "1000"; // Đưa lên trên cùng
        });

        document.addEventListener("mousemove", (e) => {
            if (!isDragging) return;
            let newX = e.clientX - offsetX;
            let newY = e.clientY - offsetY;

            // Giới hạn trong khung note-container
            const container = document.getElementById("note");
            const maxX = container.offsetWidth - textElement.offsetWidth;
            const maxY = container.offsetHeight - textElement.offsetHeight;

            newX = Math.max(0, Math.min(newX, maxX));
            newY = Math.max(0, Math.min(newY, maxY));

            textElement.style.left = `${newX}px`;
            textElement.style.top = `${newY}px`;
        });

        document.addEventListener("mouseup", () => {
            isDragging = false;
            textElement.style.zIndex = "1";
        });
    });

    function deleteExpense(id) {
        if (confirm("Are you sure you want to delete this expense?")) {
            fetch(`/v1/notes/${id}`, {
                method: 'DELETE',
                headers: {
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content,
                    'Content-Type': 'application/json'
                }
            })
            .then(response => response.json())
            .then(data => {
                alert(data.message);
                location.reload();
            })
            .catch(error => console.error('Error:', error));
        }
    }


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

 
</script>

@endsection
