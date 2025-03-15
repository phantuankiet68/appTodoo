@extends('page')
@section('title', 'Home Page')
@section('content')

<div class="english-vocabulary">
    <div class="english-vocabulary-item d-flex space-between gap-10">
        <div class="w-full bg-white h-full p-10 border-radius-5">
            <h3>>{{ __('messages.Vocabulary') }}</h3>
            <form id="structureForm" action="{{ route('structure.store') }}" method="POST" class="mt-10">
            @csrf
                <p class="title-nav"><i class="fa-solid fa-plus"></i> {{ __('messages.Add Vocabulary') }}</p>
                <div class="w-full mt-10 d-flex gap-10">
                    <div class="w-50 d-flex gap-5 flex-direction">
                        <label>{{ __('messages.Lesson') }}</label>
                        <select class="seclect" name="lesson_id">
                            @foreach ($lessons as $item)
                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="w-50 d-flex gap-5 flex-direction">
                        <div class="w-full d-flex gap-5 flex-direction">
                            <label>{{ __('messages.Language') }}</label>
                            <select class="seclect" name="language">
                                <option value="1">Việt Nam</option>
                                <option value="2">English</option>
                                <option value="3">Japan</option>
                            </select>
                        </div>
                    </div>
                </div>
                
                <input type="hidden" name="difficulty" value="2"/> 

                <div class="w-full mt-10">
                    <label for="name">{{ __('messages.Name') }}</label>
                    <input type="text" name="name" class="w-full input mt-5" required /> 
                </div>

                <div class="w-full mt-10">
                    <label for="structure">Structure</label>
                    <input type="text" name="structure" class="w-full input mt-5" required /> 
                </div>

                <div class="w-full mt-10">
                    <label for="example">{{ __('messages.Example') }}</label>
                    <input type="text" name="example" class="w-full input mt-5" /> 
                </div>

                <div class="w-full mt-10">
                    <label for="translation">{{ __('messages.Translation') }}</label>
                    <input type="text" name="translation" class="w-full input mt-5" /> 
                </div>
                <div class="w-full mt-10">
                    <label for="explanation">Explanation</label>
                    <input type="text" name="explanation" class="w-full input mt-5" /> 
                </div>
                <div class="w-full mt-10">
                    <div class="w-full d-flex gap-5 flex-direction">
                        <label for="name">{{ __('messages.Level') }}</label>
                        <select class="seclect" name="level">
                            <option value="1">Basic</option>
                            <option value="2">Pro</option>
                        </select>
                    </div>
                </div>
                <div class="w-full mt-10">
                    <div class="w-full d-flex gap-5 flex-direction">
                        <label for="status">{{ __('messages.Status') }}</label>
                        <select class="seclect" name="status">
                            <option value="1">{{ __('messages.Show') }}</option>
                            <option value="2">{{ __('messages.Hide') }}</option>
                        </select>
                    </div>
                </div>
                <button id="submit" class="button mt-10" type="submit">{{ __('messages.Submit') }}</button>
                <button id="edit" class="button mt-10" type="submit" style="display: none;">{{ __('messages.Edit') }}</button>
            </form>
        </div>
    </div>
    <div class="english-vocabulary-item">
        <div class="english-vocabulary-item-top">
            <a href="{{ route('japaneses.index') }}">Back</a>
            <a href="{{ route('japanese.index_add_vocabulary')}}">Vocabulary</a>
            <a href="{{ route('japanese.index_add_passage')}}">Passage</a>
            <a href="{{ route('japanese.index_add_structure')}}"  class="active">Structure</a>
            <a href="{{ route('japanese.index_quiz_item')}}">Test Vocabulary</a>
            <a href="{{ route('japanese.index_quiz_structure')}}">Test Structure</a>
        </div>
        <div class="w-full h-full d-flex flex-direction gap-10">
            <div class="english-vocabulary-theader">
                <p style="width:20%">{{ __('messages.Name') }}</p>
                <p style="width:35%">Structure</p>
                <p style="width:15%; text-align: center;">{{ __('messages.Status') }}</p>
                <p style="width:10%; text-align: center;">{{ __('messages.Level') }}</p>
                <p style="width:15%; text-align: center;">{{ __('messages.Action') }}</p>
            </div>
            <div class="english-tbody-scroll">
                @foreach ($structures as $item)
                <div class="english-vocabulary-tbody">
                    <p style="width:20%">{{ $item->name }}</p>
                    <p style="width:35%">{{ $item->structure }}</p>
                    <div style="width:15%;display: flex; justify-content: center;">
                        @if ($item->status == 0)
                            <p class="hidden text-center">Hide</p>
                        @else
                            <p class="show text-center">Show</p>
                        @endif
                    </div>
                    <div style="width:10%;display: flex; justify-content: center;">
                        @if ($item->level == 1)
                            <p class="basic text-center">Basic</p>
                        @else
                            <p class="show text-center">Pro</p>
                        @endif
                    </div>
                    <p style="width:15%; text-align: center;">
                        <button class="edit-english" onclick="editStructure(this)" data-id="{{ $item->id }}"
                                data-name="{{ $item->name }}" data-structure="{{ $item->structure }}"
                                data-example="{{ $item->example }}" data-translation="{{ $item->translation }}"
                                data-explanation="{{ $item->explanation }}" data-level="{{ $item->level }}"
                                data-status="{{ $item->status }}" data-lesson="{{ $item->lesson_id }}">
                            <i class="fa-solid fa-pen-to-square"></i>
                        </button>
                        <button class="delete-english" onclick="deleteStructure(this)">
                            <i class="fa-solid fa-trash"></i>
                        </button>
                    </p>
                </div>
                @endforeach
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

@if (session('error'))
<div id="popup-error">
    <ul class="notifications">
        <li class="toast error hide">
            <div class="column">
                <i class="fa-solid fa-circle-check"></i>
                <span>Error:  {{ session('error') }}.</span>
            </div>
        </li>
    </ul>
</div>
@endif

@if ($errors->any())
    <div id="popup-error">
        <ul class="notifications">
            @foreach ($errors->all() as $error)
                <li class="toast error hide">
                    <div class="column">
                        <i class="fa-solid fa-circle-check"></i>
                        <span>Error:  {{ $error }}.</span>
                    </div>
                </li>
            @endforeach
        </ul>
    </div>
@endif


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
</script>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        const form = document.getElementById("structureForm");
        const inputs = form.querySelectorAll("input, select");

        inputs.forEach(input => {
            const savedValue = localStorage.getItem(input.name);
            if (savedValue) {
                input.value = savedValue;
            }
        });

        inputs.forEach(input => {
            input.addEventListener("input", function () {
                localStorage.setItem(input.name, input.value);
            });
        });

    });


    function editStructure(button) {
        const id = button.getAttribute("data-id");
        const name = button.getAttribute("data-name");
        const structure = button.getAttribute("data-structure");
        const example = button.getAttribute("data-example");
        const translation = button.getAttribute("data-translation");
        const explanation = button.getAttribute("data-explanation");
        const level = button.getAttribute("data-level");
        const status = button.getAttribute("data-status");
        const lessonId = button.getAttribute("data-lesson");

        document.querySelector('input[name="name"]').value = name;
        document.querySelector('input[name="structure"]').value = structure;
        document.querySelector('input[name="example"]').value = example;
        document.querySelector('input[name="translation"]').value = translation;
        document.querySelector('input[name="explanation"]').value = explanation;
        document.querySelector('select[name="level"]').value = level;
        document.querySelector('select[name="status"]').value = status;
        document.querySelector('select[name="lesson_id"]').value = lessonId;

        const form = document.getElementById("structureForm");
        form.action = `/v1/structure/update/${id}`; 

        document.getElementById("submit").style.display = "none";
        document.getElementById("edit").style.display = "block";
    }



</script>

@endsection
