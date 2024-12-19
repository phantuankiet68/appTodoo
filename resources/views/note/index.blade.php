@extends('app')

@section('title', 'Home Page')

@section('content')
<div class="todo">
    <div class="infoController">
        @include('info-user')
        <div class="InformationRight">
            <div class="note-container">
                <div class="taskeu-container">
                    <div class="todo-container">
                        <form action="{{ route('link.store')}}" method="POST">
                            @csrf
                            @if (Auth::check())
                                <input type="hidden" name="user_id" value="{{ Auth::user()->id }}" />
                            @endif
                            <div class="input-container">
                                <input type="text" name="link" placeholder="Add a new link...">
                                <button type="submit" >+</button>
                            </div>
                        </form>
                        @foreach($links as $item)
                            <div class="button-group">
                                <a href="{{$item->link}}" target="_blank">Link tab</a>
                                <p>{{$item->link}}</p>
                                <button onclick="showDeletePopup({{ $item->id }})">
                                    x
                                </button>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="taskeu-container">
                    <div class="todo-container">
                        <form action="{{ route('note.store')}}" method="POST">
                            @csrf
                            @if (Auth::check())
                                <input type="hidden" name="user_id" value="{{ Auth::user()->id }}" />
                            @endif
                            <div class="input-container">
                                <input type="text" name="note" placeholder="Add a new note...">
                                <button type="submit">+</button>
                            </div>
                        </form>
                        @foreach($notes as $item)
                            <div class="button-group">
                                <a href="" target="_blank">Link tab</a>
                                <p>{{$item->note}}</p>
                                <button onclick="showDeletePopupA({{ $item->id }})">
                                    x
                                </button>
                            </div>
                        @endforeach
                    </div>
                </div>
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

<div class="modelDeleteFormIssue">
    <form method="POST" id="delete-issue-form">
        @csrf
        <input type="hidden" name="_method" value="DELETE">
        <h3>{{ __('messages.Are you sure you want to delete?') }}</h3>
        <div class="form-btn-delete">
            <button type="submit">{{ __('messages.Delete') }}</button>
        </div>
        <div class="BtnClose" onclick="closeDeletePopup()">
            <p>X</p>
        </div>
    </form>
</div>

<div class="modelDeleteFormA">
    <form method="POST" id="delete-note-form">
        @csrf
        <input type="hidden" name="_method" value="DELETE">
        <h3>{{ __('messages.Are you sure you want to delete?') }}</h3>
        <div class="form-btn-delete">
            <button type="submit">{{ __('messages.Delete') }}</button>
        </div>
        <div class="BtnClose" onclick="closeDeletePopup()">
            <p>X</p>
        </div>
    </form>
</div>

<script>
    function showDeletePopup(itemId) {
        const deletePopup = document.querySelector('.modelDeleteFormIssue');
        deletePopup.style.display = 'block';
        const deleteForm = document.getElementById('delete-issue-form');
        deleteForm.action = `/v1/system/link/${itemId}`;
    }
    function closeDeletePopup() {
        const deletePopupDelete = document.querySelector('.modelDeleteFormIssue');
        if (deletePopupDelete.style.display === 'none' || deletePopupDelete.style.display === '') {
            deletePopupDelete.style.display = 'block';
        } else {
            deletePopupDelete.style.display = 'none';
        }
    }

    function showDeletePopupA(itemId) {
        const deletePopup = document.querySelector('.modelDeleteFormA');
        deletePopup.style.display = 'block';
        const deleteForm = document.getElementById('delete-note-form');
        deleteForm.action = `/v1/system/notes/${itemId}`;
    }


    function closeDeletePopupA() {
        const deletePopupDelete = document.querySelector('.modelDeleteFormA');
        if (deletePopupDelete.style.display === 'none' || deletePopupDelete.style.display === '') {
            deletePopupDelete.style.display = 'block';
        } else {
            deletePopupDelete.style.display = 'none';
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

</script>
@endsection