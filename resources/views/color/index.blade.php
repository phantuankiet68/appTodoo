@extends('app')

@section('title', 'Home Page')

@section('content')
<div class="todo">
    <div class="todoHeader">
        <div class="topHeader">
            <h2>Email</h2> | <span>Home</span>
        </div>
        <div class="bodyHeader">
            <form action="">
                <div class="Users--right--btns">
                    <select name="date" id="date" class="select-dropdown doctor--filter">
                        <option>Date of Month</option>
                        <option value="free">Admin</option>
                        <option value="scheduled">Users</option>
                    </select>
                </div>
            </form>
            <form action="">
                <div class="Users--right--btns">
                    <select name="date" id="date" class="select-dropdown doctor--filter">
                        <option>Category</option>
                        <option value="free">Admin</option>
                        <option value="scheduled">Users</option>
                    </select>
                </div>
            </form>
            <form action="" class="formSearch">
                <div class="formInputSearch">
                    <input type="text" value="">
                </div>
                <button class="add-search"><i class="fa-solid fa-magnifying-glass"></i></button>
            </form>
        </div>
        <div class="headerToQuesionRight">
            <button type="button" class="change"><i class="fa-solid fa-cash-register"></i>Download</button>
            <button type="button" class="create" onclick="CreateColorForm()"><i class="fa-solid fa-plus"></i> Tạo mới</button>
        </div>
    </div>
    <div class="component-container">
        <div class="component-color">
            <div class="component-card">
                @foreach($colors as $item)
                <div class="color_card">
                    <div style="background-color: {{ trim($item->description) }}" class="color-new">
                        <p class="p-color">{{$item->name}}</p>
                    </div>
                    <div class="color-box">
                        <p>{{$item->description}}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
<div class="model" id="createColor">
    <div class="modelCreateFromSmall" id="Color">
        <form  method="POST" action="{{ route('colors.store') }}" enctype="multipart/form-data">
        @csrf
            @if (Auth::check())
                <input type="hidden" id="user_id" name="user_id" value="{{ Auth::user()->id }}"/>
            @endif
            <h2>{{ __('messages.Add New') }}</h5>
            <input type="hidden" name="language_id" value="3"/>

            <div class="form-input-category mt-10">
                <label for="name">{{ __('messages.Name') }}</label>
                <input type="text" class="input-name" name="name">
            </div>
            <div class="form-textarea-category">
                <label for="description">{{ __('messages.Description') }}</label>
                <textarea class="textarea" name="description"></textarea> 
            </div>
            <div class="form-btn">
                <button>{{ __('messages.Add') }}</button>
            </div>
            <div class="BtnCloseCategoryTask" onclick="closeColorForm()">
                <p>X</p>
            </div>
        </form>
    </div>
</div>
<script>
    function CreateColorForm(){
        const CreateColorForm = document.getElementById('createColor')
        if (CreateColorForm.style.display === 'none' || CreateColorForm.style.display === '') {
            CreateColorForm.style.display = 'block'; 
        } else {
            CreateColorForm.style.display = 'none';
        }
    }

    function closeColorForm() {
        const CreateColorForm = document.getElementById('createColor')
        if (CreateColorForm.style.display === 'none' || CreateColorForm.style.display === '') {
            CreateColorForm.style.display = 'block'; 
        } else {
            CreateColorForm.style.display = 'none';
        }
    }
</script>
@endsection