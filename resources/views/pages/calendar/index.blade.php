@extends('layout')
@section('title', 'Home Page')
@section('content')

<div class="calendar">
    <div class="calendar-left">
        <div class="calendar-container">
            <div class="search-box">
                <input id="date-input" placeholder="{{ __('messages.Enter date (dd-mm-yyyy)') }}"  type="text">
                <button id="search-btn">
                    <i class="fas fa-search"></i>
                </button>
            </div>
            <div class="title-search">
                <span>{{ __('messages.Search event') }}</span>
            </div>
            <form action="{{ route('calendar.index') }}" method="GET">
                <div class="search-box">
                    <input id="date-input" name="search"  placeholder="{{ __('messages.Enter title...') }}"  type="text" value="{{ request('search') }}">
                    <button id="search-btn" type="submit">
                        <i class="fas fa-search"></i>
                    </button>
                </div>
            </form>
            <div class="tables">
                <table>
                    <thead>
                        <tr>
                            <th>{{ __('messages.Name') }}</th>
                            <th class="text-center">{{ __('messages.Start Date') }}</th>
                            <th class="text-center">{{ __('messages.End Date') }}</th>
                        </tr>
                    </thead>
                    <tbody class="tbody-event">
                        @foreach($events as $item)
                        <tr>
                            <td>
                                <div class="text-truncate" style="width: 100%;">
                                    {{ $item->title }}   
                                </div>
                            </td>
                            <td class="text-center">{{ \Carbon\Carbon::parse($item->start)->format('d-m-Y') }}</td>
                            <td class="text-center">{{ \Carbon\Carbon::parse($item->end)->format('d-m-Y') }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="calendar-right">
        <div id="calendar"></div>
    </div>
</div>
<div class="ModelCreateCalendar">
    <form  method="POST" action="{{ route('event.store') }}" >
    @csrf
        @if (Auth::check())
            <input type="hidden" id="user_id" name="user_id" value="{{ Auth::user()->id }}"/>
        @endif
        <div class="form-group-info">
            <div class="form-input-category">
                <input type="date" class="input-name" id="start_date" name="start">
            </div>
            <div class="form-input-category">
                <input type="date" class="input-name" id="end_date" name="end">
            </div>
        </div>
        <div class="form-input-category mt-10">
            <label for="subject">{{ __('messages.Subject') }}</label>
            <input type="text" class="input-name" id="title" name="title">
        </div>
        <div class="form-input-category mt-5">
            <div id="color-dropdown" class="color-dropdown">
                <label><input type="checkbox" name="color" value="#f65c5c"> <span class="color-circle" style="background-color: #f65c5c"></span> Red</label>
                <label><input type="checkbox" name="color" value="#6ce35e"> <span class="color-circle" style="background-color: #6ce35e"></span> Green</label>
                <label><input type="checkbox" name="color" value="#7e7ef5"> <span class="color-circle" style="background-color: #7e7ef5;"></span> Blue</label>
                <label><input type="checkbox" name="color" value="#e8b856"> <span class="color-circle" style="background-color: #e8b856;"></span> Yellow</label>
                <label><input type="checkbox" name="color" value="#f67cf6"> <span class="color-circle" style="background-color: #f67cf6;"></span> Magenta</label>
                <label><input type="checkbox" name="color" value="#4edede"> <span class="color-circle" style="background-color: #4edede;"></span> Cyan</label>
                <label><input type="checkbox" name="color" value="#4e4e4e"> <span class="color-circle" style="background-color: #4e4e4e;"></span> Black</label>
                <label><input type="checkbox" name="color" value="#ffffff"> <span class="color-circle" style="background-color: #ffffff; border: 1px solid #ccc;"></span> White</label>
            </div>
            <div class="form-select">
                <div class="form-input-category">
                    <label for="location">{{ __('messages.Location') }}</label>
                    <input type="text" class="input-name" name="location">
                </div>
                <div class="form-textarea-category">
                    <label for="description">{{ __('messages.Description') }}</label>
                    <textarea id="editor" class="textArea_description" name="description"></textarea> 
                </div>
                <div class="form-select-category mt-5">
                    <label for="order">{{ __('messages.Calendar') }}</label>
                    <select name="order">
                        <option value="0">{{ __('messages.Team Meeting') }}</option>
                        <option value="1">{{ __('messages.Birthday') }}</option>
                        <option value="2">{{ __('messages.Project Report Submission') }}</option>
                        <option value="3">{{ __('messages.Periodic Health Checkup') }}</option>
                        <option value="4">{{ __('messages.Language Learning') }}</option>
                        <option value="5">{{ __('messages.Traveling') }}</option>
                        <option value="6">{{ __('messages.Joining a Course') }}</option>
                        <option value="7">{{ __('messages.Friends Gathering') }}</option>
                        <option value="8">{{ __('messages.Part-time Job') }}</option>
                        <option value="9">{{ __('messages.Work') }}</option>
                        <option value="10">{{ __('messages.Study') }}</option>
                        <option value="11">{{ __('messages.Holiday') }}</option>
                        <option value="12">{{ __('messages.Party') }}</option>
                    </select>
                </div>
                <div class="form-select-category mt-5">
                    <label for="status">{{ __('messages.Status') }}</label>
                    <select name="status">
                        <option value="free">{{ __('messages.Free') }}</option>
                        <option value="busy">{{ __('messages.Busy') }}</option>
                    </select>
                </div>
                <div class="form-select-category mt-5">
                    <label for="display_mode">{{ __('messages.Display Mode') }}</label>
                    <select name="display_mode">
                        <option value="0">{{ __('messages.Hide') }}</option>
                        <option value="1">{{ __('messages.Show') }}</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="form-btn">
            <button type="submit">{{ __('messages.Add New Event') }}</button>
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
        <div class="form-group-info mt-30">
            <div class="form-input-category">
                <input type="date" class="input-name" id="event_start" name="start">
            </div>
            <div class="form-input-category">
                <input type="date" class="input-name" id="event_end" name="end">
            </div>
        </div>
        <div class="form-input-category mt-10">
            <label for="event_title">{{ __('messages.Subject') }}</label>
            <input type="text" class="input-name" id="event_title" name="title">
        </div>
        <div class="form-textarea-category">
            <label for="description">{{ __('messages.Description') }}</label>
            <textarea id="editor" class="textArea_description" name="description"></textarea> 
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
        const deletePopup = document.querySelector('.ModelDeleteCalendar');
        deletePopup.style.display = 'block';
        const deleteForm = document.getElementById('delete-form');
        deleteForm.action = `/event/${eventId}`;
    });


</script>
@vite('resources/js/app.js')
@endsection