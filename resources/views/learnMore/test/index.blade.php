@extends('app')

@section('title', 'Home Page')

@section('content')
<div class="todo">
    <div class="learnMore">
        <div class="learnMore-container">
            @include('components.slider')
        </div>
        <div class="learnMore-container">
            <div class="learnMore-setting">
                <a href="{{ route('learn_more.index') }}">Prev <i class="fa-solid fa-rotate-left"></i></a>
                <button onclick="reloadPage(event);">Load Data <i class="fa-brands fa-windows"></i></button>
                <button onclick="changeValue()">Changes <i class="fa-solid fa-right-left"></i></button>
                <a href="{{ route('learn_more.pdf') }}">DownLoad <i class="fa-solid fa-download"></i></a>
                <button onclick="changeListValue()">List<i class="fa-brands fa-expeditedssl"></i></button>
            </div>
        </div>
        <div class="learnMore-test">
        @foreach($tests as $item)
            <div class="learnMore-list">
                <div class="learnMore-item">
                    <input type="text" id="meaning_of_vocabulary_{{ $loop->index }}" value="{{$item->meaning_of_vocabulary}}" data-meaning-of-vocabulary="{{$item->meaning_of_vocabulary}}">
                </div>
                <div class="learnMore-item">
                    <input type="text" id="vocabulary_{{ $loop->index }}" value="{{$item->vocabulary}}" data-vocabulary="{{$item->vocabulary}}">
                </div>
                <div class="learnMore-item">
                    <input type="text" id="meaning_of_example_{{ $loop->index }}" value="{{$item->meaning_of_example}}" data-meaning-of-example="{{$item->meaning_of_example}}">
                </div>
                <div class="learnMore-item">
                    <input type="text" id="example_{{ $loop->index }}" value="{{$item->example}}" data-example="{{$item->example}}">
                </div>
            </div>
        @endforeach
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
@endsection