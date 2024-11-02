@extends('app')

@section('title', 'Home Page')

@section('content')
<div class="todo">
    <div class="learnMore">
        <div class="learnMore-container">
            <form method="POST" action="{{ route('learn_more.store') }}" class="formCreate">
            @csrf
                @if (Auth::check())
                    <input type="hidden" id="" name="user_id" value="{{ Auth::user()->id }}"/>
                @endif
                <input type="hidden" id="language_id" name="language_id" value="3"/>
                <div class="form-group-info">
                    <div class="form-input-category">
                        <label for="name">{{ __('messages.Vocabulary') }}</label>
                        <input type="text" class="input-name" name="vocabulary">
                    </div>
                    <div class="form-input-category">
                        <label for="name">{{ __('messages.Meaning') }}</label>
                        <input type="text" class="input-name" name="meaning_of_vocabulary">
                    </div>
                </div>
                <div class="form-group-info">
                    <div class="form-input-category">
                        <label for="name">{{ __('messages.Example') }}</label>
                        <input type="text" class="input-name" name="example">
                    </div>
                    <div class="form-input-category">
                        <label for="name">{{ __('messages.Meaning') }}</label>
                        <input type="text" class="input-name" name="meaning_of_example">
                    </div>
                </div>
                <div class="form-group-info">
                    <div class="form-select-category">
                        <label for="todo-status">{{ __('messages.Status') }}</label>
                        <select name="status" id="todo-status">
                            <option value="5">{{ __('messages.Lesson 1') }}</option>
                            <option value="1">{{ __('messages.Lesson 2') }}</option>
                            <option value="1">{{ __('messages.Lesson 3') }}</option>
                            <option value="1">{{ __('messages.Lesson 4') }}</option>
                            <option value="1">{{ __('messages.Lesson 5') }}</option>
                            <option value="1">{{ __('messages.Lesson 6') }}</option>
                            <option value="1">{{ __('messages.Lesson 7') }}</option>
                            <option value="1">{{ __('messages.Lesson 8') }}</option>
                            <option value="1">{{ __('messages.Lesson 9') }}</option>
                            <option value="1">{{ __('messages.Lesson 10') }}</option>
                            <option value="1">{{ __('messages.Lesson 11') }}</option>
                            <option value="1">{{ __('messages.Lesson 12') }}</option>
                            <option value="1">{{ __('messages.Lesson 13') }}</option>
                            <option value="1">{{ __('messages.Lesson 14') }}</option>
                            <option value="1">{{ __('messages.Lesson 15') }}</option>
                            <option value="1">{{ __('messages.Lesson 16') }}</option>
                            <option value="1">{{ __('messages.Lesson 17') }}</option>
                            <option value="1">{{ __('messages.Lesson 18') }}</option>
                            <option value="1">{{ __('messages.Lesson 19') }}</option>
                            <option value="1">{{ __('messages.Lesson 20') }}</option>
                            <option value="1">{{ __('messages.Lesson 21') }}</option>
                            <option value="1">{{ __('messages.Lesson 22') }}</option>
                            <option value="1">{{ __('messages.Lesson 23') }}</option>
                            <option value="1">{{ __('messages.Lesson 24') }}</option>
                            <option value="1">{{ __('messages.Lesson 25') }}</option>
                            <option value="1">{{ __('messages.Lesson 26') }}</option>
                            <option value="1">{{ __('messages.Lesson 27') }}</option>
                            <option value="1">{{ __('messages.Lesson 28') }}</option>
                            <option value="1">{{ __('messages.Lesson 29') }}</option>
                            <option value="1">{{ __('messages.Lesson 30') }}</option>
                            <option value="1">{{ __('messages.Lesson 31') }}</option>
                            <option value="1">{{ __('messages.Lesson 32') }}</option>
                            <option value="1">{{ __('messages.Lesson 33') }}</option>
                            <option value="1">{{ __('messages.Lesson 34') }}</option>
                            <option value="1">{{ __('messages.Lesson 35') }}</option>
                            <option value="1">{{ __('messages.Lesson 36') }}</option>
                            <option value="1">{{ __('messages.Lesson 37') }}</option>
                            <option value="1">{{ __('messages.Lesson 38') }}</option>
                            <option value="1">{{ __('messages.Lesson 39') }}</option>
                            <option value="1">{{ __('messages.Lesson 40') }}</option>
                            <option value="1">{{ __('messages.Lesson 41') }}</option>
                            <option value="1">{{ __('messages.Lesson 42') }}</option>
                            <option value="1">{{ __('messages.Lesson 43') }}</option>
                            <option value="1">{{ __('messages.Lesson 44') }}</option>
                            <option value="1">{{ __('messages.Lesson 45') }}</option>
                            <option value="1">{{ __('messages.Lesson 46') }}</option>
                            <option value="1">{{ __('messages.Lesson 47') }}</option>
                            <option value="1">{{ __('messages.Lesson 48') }}</option>
                            <option value="1">{{ __('messages.Lesson 49') }}</option>
                            <option value="1">{{ __('messages.Lesson 50') }}</option>
                        </select>
                    </div>
                    <div class="saveChange">
                        <button type="submit">{{ __('messages.Save changes') }}</button>
                    </div>
                </div>
            </form>
            <div class="mt-10">
                <p>Tìm kiếm:</p>
                <form action="{{ route('learn_more.index') }}" method="GET" class="formSearchInput">
                    <div class="formInputSearch">
                        <input type="text" name="search">
                    </div>
                    <button class="add-search"><i class="fa-solid fa-magnifying-glass"></i></button>
                </form>
            </div>
        </div>
        <div class="learnMore-table">
            <div class="recent--patient">
                <div class="tables">
                    @if ($learn_more->isEmpty())
                        <div class="alert alert-warning alert-search">
                            <span> {{ __('messages.No results found for the keyword') }}</span>
                            <p>{{ __('messages.Please try again with a different keyword.') }}</p>
                        </div>
                    @else
                    <table>
                        <thead>
                            <tr>
                                <th style="width:60px;">ID</th>
                                <th>{{ __('messages.Name') }}</th>
                                <th>{{ __('messages.Meaning') }}</th>
                                <th>{{ __('messages.Example') }}</th>
                                <th>{{ __('messages.Meaning') }}</th>
                                <th class="text-center">{{ __('messages.Start Date') }}</th>
                                <th class="text-center">{{ __('messages.Status') }}</th>
                                <th class="text-center">{{ __('messages.Show') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($learn_more as $item)
                            <tr>
                                <td>
                                    <p class="td-1">{{ $item->id }}</p>
                                </td>
                                <td class="prop-text">
                                    <div class="text-truncate">
                                        {{ $item->vocabulary }}
                                    </div>
                                </td>
                                <td class="prop-text">
                                    <div class="text-truncate">
                                        {{ $item->meaning_of_vocabulary }}
                                    </div>
                                </td>
                                <td class="prop-text">
                                    <div class="text-truncate">
                                        {{ $item->example }}
                                    </div>
                                </td>
                                <td class="prop-text">
                                    <div class="text-truncate">
                                        {{ $item->meaning_of_example }}
                                    </div>
                                </td>
                                <td class="text-center">{{ $item->created_at->format('d/m/Y') }}</td>
                                <td class="text-center"> 
                                    <input type="checkbox" name="todo[]" id="todo_{{ $item->id }}" 
                                        value="1" {{ $item->status == 1 ? 'checked' : '' }}>
                                </td>
                                <td class="text-center">
                                    <button class="btn-show" onclick="showPopup({{ $item->id }})"><i class="fa-regular fa-eye"></i></button>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    @endif
                    <div class="d-flex justify-content-center link-margin">
                        {{ $learn_more->links() }}
                    </div>
                </div>
            </div>
        </div>
        <div class="menuMove">
            <div class="nav-content">
              <div class="toggle-btn">
                <i class='bx bx-plus'></i>
              </div>
              <span style="--i:1;">
                <a href="#"  onclick="reloadPage(event);"><i class="fa-solid fa-spinner"></i></a>
              </span>
              <span style="--i:2;">
                <a href="#"><i class="fa-solid fa-square-plus"></i></a>
              </span>
              <span style="--i:3;">
                <a href="{{ route('learn_more_test.index') }}"><i class="fa-solid fa-check-to-slot"></i></a>
              </span>
              <span style="--i:4;">
                <a href="{{ route('learn_more.pdf') }}"><i class="fa-solid fa-circle-down"></i></a>
              </span>
              <span style="--i:5;">
                <a href="{{ route('learn_more.index') }}"><i class="fa-solid fa-house"></i></a>
              </span>
            </div>
        </div>
    </div>
</div>


<div class="model" id="showLearnMore">
    <div class="ModelCreateUpdate">
        <div class="buttonAction">
            <button class="show" onclick="showTab('show')"><i class="fa-solid fa-eye"></i> Show</button>
            <button class="delete" onclick="showTab('delete')"><i class="fa-solid fa-trash"></i> Delete</button>
        </div>

        <div class="showContentComponent" id="show">
            <form method="POST" id="edit-learn-more">
                @csrf
                @method('PUT')
                @if (Auth::check())
                    <input type="hidden" id="" name="user_id" value="{{ Auth::user()->id }}"/>
                @endif
                <input type="hidden" id="learnMore_id" value="id"/>
                <input type="hidden" id="language_id" name="language_id" value="3"/>
                <div class="form-input-category mt-10">
                    <label for="name">{{ __('messages.Vocabulary') }}</label>
                    <input type="text" class="input-name" id="vocabulary" name="vocabulary">
                </div>
                <div class="form-input-category mt-10">
                    <label for="name">{{ __('messages.Meaning') }}</label>
                    <input type="text" class="input-name" id="meaning_of_vocabulary" name="meaning_of_vocabulary">
                </div>
                <div class="form-input-category mt-10">
                    <label for="name">{{ __('messages.Example') }}</label>
                    <input type="text" class="input-name" id="example" name="example">
                </div>
                <div class="form-input-category mt-10">
                    <label for="name">{{ __('messages.Meaning') }}</label>
                    <input type="text" class="input-name" id="meaning_of_example" name="meaning_of_example">
                </div>
                <div class="saveChange mt-10">
                    <button type="submit">Save changes</button>
                </div>
            </form>
        </div>
        <div class="deleteContentQuestion" id="delete" style="display: none;">
            <form method="POST" id="delete-Code">
                @csrf
                @method('DELETE')
                <input type="hidden" id="learnMore_id" name="learnMore_id" />
                <h3 class="text-center">{{ __('messages.Are you sure you want to delete?') }}</h3>
                <p class="text-center" id="delete-vocabulary"></p> 
                <div class="form-btn-delete">
                    <button type="submit">{{ __('messages.Delete') }}</button>
                </div>
            </form>
        </div>
        <div class="BtnCloseCategoryTask" onclick="closeCodeForm()">
            <p>X</p>
        </div>
    </div>
</div>

@if (session('success'))
    <div id="popup-category" class="popup-category success">
        {{ session('success') }}
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
    function reloadPage(event) {
        event.preventDefault();
        window.location.reload();
    }
    const nav = document.querySelector(".menuMove"),
        toggleBtn = nav.querySelector(".toggle-btn");
        toggleBtn.addEventListener("click" , () =>{
        nav.classList.toggle("open");
    });
    // js code to make draggable nav
    function onDrag({movementY}) { //movementY gets mouse vertical value
        const navStyle = window.getComputedStyle(nav), //getting all css style of nav
            navTop = parseInt(navStyle.top), // getting nav top value & convert it into string
            navHeight = parseInt(navStyle.height), // getting nav height value & convert it into string
            windHeight = window.innerHeight; // getting window height
        nav.style.top = navTop > 0 ? `${navTop + movementY}px` : "1px";
        if(navTop > windHeight - navHeight){
        nav.style.top = `${windHeight - navHeight}px`;
        }
    }
    //this function will call when user click mouse's button and  move mouse on nav
    nav.addEventListener("mousedown", () =>{
        nav.addEventListener("mousemove", onDrag);
    });
    //these function will call when user relase mouse button and leave mouse from nav
    nav.addEventListener("mouseup", () =>{
        nav.removeEventListener("mousemove", onDrag);
    });
    nav.addEventListener("mouseleave", () =>{
        nav.removeEventListener("mousemove", onDrag);
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

    function showTab(tab) {
        document.getElementById('show').style.display = 'none';
        document.getElementById('delete').style.display = 'none';
        document.getElementById(tab).style.display = 'block';
    }

    function showPopup(itemId) {
        const showPopup = document.getElementById('showLearnMore');
        showPopup.style.display = 'block';
        fetch(`/learn_more/${itemId}`)
        .then(response => response.json())
        .then(data => {
            document.getElementById('vocabulary').value = data.vocabulary;
            document.getElementById('meaning_of_vocabulary').value = data.meaning_of_vocabulary;
            document.getElementById('example').value = data.example;
            document.getElementById('meaning_of_example').value = data.meaning_of_example;
            document.getElementById('learnMore_id').value = data.id;
            document.getElementById('delete-vocabulary').innerHTML = data.vocabulary;
        })
    }

    document.getElementById('edit-learn-more').onsubmit = function(event) {
        event.preventDefault();
        const itemId = document.getElementById('learnMore_id').value;
        this.action = `/learn_more/${itemId}`;
        this.submit();
    }

    function closeCodeForm(){
        const closeCodeForm = document.getElementById('showLearnMore');
        if (closeCodeForm.style.display === 'none' || closeCodeForm.style.display === '') {
            closeCodeForm.style.display = 'block'; // Hiển thị popup
        } else {
            closeCodeForm.style.display = 'none'; // Ẩn popup
        }
    }
</script>
@endsection