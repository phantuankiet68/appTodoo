@extends('app')

@section('title', 'Home Page')

@section('content')

<div id="calendar"></div>
<div class="ModelCreateCalendar">
    <form  method="POST" action="{{ route('event.store') }}" >
    @csrf
        <h2>{{ __('messages.Add New') }}</h5>
        @if (Auth::check())
            <input type="hidden" id="user_id" name="user_id" value="{{ Auth::user()->id }}"/>
        @endif
        <div class="form-group-info">
            <div class="form-input-category">
                <label for="start_date">{{ __('messages.Start Date') }}</label>
                <input type="date" class="input-name" id="start_date" name="start">
            </div>
            <div class="form-input-category">
                <label for="end_date">{{ __('messages.End Date') }}</label>
                <input type="date" class="input-name" id="end_date" name="end">
            </div>
        </div>
        <div class="form-input-category mt-10">
            <label for="subject">{{ __('messages.Subject') }}</label>
            <input type="text" class="input-name" id="title" name="title">
        </div>
        <div class="form-input-category mt-10">
            <label>{{ __('messages.Color') }}</label><br>
            <label><input type="checkbox" name="colors[]" value="#ff0000"> Red</label><br>
            <label><input type="checkbox" name="colors[]" value="#00ff00"> Green</label><br>
            <label><input type="checkbox" name="colors[]" value="#0000ff"> Blue</label><br>
            <label><input type="checkbox" name="colors[]" value="#ffff00"> Yellow</label><br>
            <label><input type="checkbox" name="colors[]" value="#ff00ff"> Magenta</label><br>
            <label><input type="checkbox" name="colors[]" value="#00ffff"> Cyan</label><br>
            <label><input type="checkbox" name="colors[]" value="#000000"> Black</label><br>
            <label><input type="checkbox" name="colors[]" value="#ffffff"> White</label><br>
        </div>
        <div class="form-btn">
            <button type="submit">{{ __('messages.Add') }}</button>
        </div>
        <div class="BtnCloseCreate" onclick="closeCreateCalendar()">
            <p>X</p>
        </div>
    </form>
</div>

<div class="ModelEditCalendar" style="display:none;">
    <div class="clickDelete">
        <div class="form-btn-delete">
            <button>{{ __('messages.Delete') }}</button>
        </div>
    </div>
    <form method="POST" id="edit-event-form">
        @csrf
        @method('PUT')
        @if (Auth::check())
            <input type="hidden" id="user_id" name="user_id" value="{{ Auth::user()->id }}"/>
        @endif
        <input type="hidden" id="event_id" name="event_id" value="">
        <h2>{{ __('messages.Update') }}</h2>
        <div class="form-group-info">
            <div class="form-input-category">
                <label for="event_start">{{ __('messages.Start Date') }}</label>
                <input type="date" class="input-name" id="event_start" name="start">
            </div>
            <div class="form-input-category">
                <label for="event_end">{{ __('messages.End Date') }}</label>
                <input type="date" class="input-name" id="event_end" name="end">
            </div>
        </div>
        <div class="form-input-category mt-10">
            <label for="event_title">{{ __('messages.Subject') }}</label>
            <input type="text" class="input-name" id="event_title" name="title">
        </div>
        <div class="form-btn">
            <button type="submit">{{ __('messages.Update') }}</button>
        </div>
        <div class="BtnCloseCreate" onclick="closeEditCalendarModal()">
            <p>X</p>
        </div>
    </form>
</div>
<div class="ModelDeleteCalendar">
    <form method="POST" id="delete-form">
        @csrf
        @method('DELETE')
        <h3>{{ __('messages.Are you sure you want to delete?') }}</h3>
        <div class="form-btn-delete">
            <button>{{ __('messages.Delete') }}</button>
        </div>
    </form>
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
    function closeCreateCalendar() {
        const ModelCreateCalendar = document.querySelector('.ModelCreateCalendar');
        
        if (ModelCreateCalendar.style.display === 'none' || ModelCreateCalendar.style.display === '') {
            ModelCreateCalendar.style.display = 'block'; 
        } else {
            ModelCreateCalendar.style.display = 'none'; 
        }
    }

    document.getElementById('edit-event-form').onsubmit = function(event) {
        event.preventDefault();
        const eventId = document.getElementById('event_id').value;
        this.action = `/event/${eventId}`;
        this.submit();
    }

    function closeEditCalendarModal() {
        const ModelEditCalendar = document.querySelector('.ModelEditCalendar');
        if (ModelEditCalendar.style.display === 'none' || ModelEditCalendar.style.display === '') {
            ModelEditCalendar.style.display = 'block'; 
        } else {
            ModelEditCalendar.style.display = 'none'; 
        }
    }
    document.querySelector('.form-btn-delete button').addEventListener('click', function() {
        const eventId = document.getElementById('event_id').value;
        console.log(eventId);
        const deletePopup = document.querySelector('.ModelDeleteCalendar');
        deletePopup.style.display = 'block';
        const deleteForm = document.getElementById('delete-form');
        deleteForm.action = `/event/${eventId}`;
    });


</script>
@vite('resources/js/app.js')
@endsection
