@extends('page')
@section('title', 'Home Page')
@section('content')

<div class="english-vocabulary">
    <div class="english-vocabulary-item d-flex space-between gap-10">
        <div class="w-50 bg-white h-full p-10 border-radius-5">
            <h3>>> {{ __('messages.Lesson') }}</h3>
            <form id="vocabularyForm" action="{{ route('lessons.store') }}" method="POST" class="mt-10">
            @csrf
                <p class="title-nav"><i class="fa-solid fa-plus"></i> {{ __('messages.Add Lesson') }}</p>
                <div class="w-full mt-10">
                    <label>{{ __('messages.Name') }}</label>
                    <input type="text" name="name" class="w-full input  mt-5"/> 
                </div>
                <div class="w-full mt-10">
                    <label>{{ __('messages.Title') }}</label>
                    <input type="text" name="title" class="w-full input  mt-5"/> 
                </div>
                <input type="hidden" name="difficulty" value="1"/> 
                <div class="w-full mt-10">
                    <div class="w-full d-flex gap-5 flex-direction">
                        <label>{{ __('messages.Language') }}</label>
                        <select class="seclect" name="language">
                            <option value="1">Việt Nam</option>
                            <option value="2">English</option>
                            <option value="3">Japan</option>
                        </select>
                    </div>
                </div>
                <button class="button mt-10" type="submit">{{ __('messages.Submit') }}</button>
            </form>
            <div class="w-full mt-10">
                <label>{{ __('messages.Search text') }}</label>
                <input type="text" name="search" class="w-full input  mt-5"  placeholder="{{ __('messages.Search name...') }}"/> 
            </div>
            <div class="english-vocabulary-list-item d-flex flex-direction gap-10">
            @foreach ($lessons as $item)
                <div class="lesson-item" data-id="{{ $item->id }}">
                    <input class="input-name" type="text" value="{{ $item->name }}">:
                    <input class="input-title" type="text" value="{{ $item->title }}">
                    <button class="save-btn">Lưu</button>
                </div>
            @endforeach
            </div>
        </div>
        <div class="w-50 bg-white h-full p-10 border-radius-5">
            <h3>>{{ __('messages.Vocabulary') }}</h3>
            <form action="{{ route('vocabulary.store') }}" method="POST" class="mt-10">
            @csrf
                <p class="title-nav"><i class="fa-solid fa-plus"></i> {{ __('messages.Add Vocabulary') }}</p>

                <div class="w-full mt-10">
                    <div class="w-full d-flex gap-5 flex-direction">
                        <label>{{ __('messages.Lesson') }}</label>
                        <select class="seclect" name="lesson_id" id="lesson_id">
                            @foreach ($lessons as $item)
                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="w-full mt-10">
                    <div class="w-full d-flex gap-5 flex-direction">
                        <label>{{ __('messages.Language') }}</label>
                        <select class="seclect" name="language" id="language">
                            <option value="1">Việt Nam</option>
                            <option value="2">English</option>
                            <option value="3">Japan</option>
                        </select>
                    </div>
                </div>
                <input type="hidden" name="difficulty" value="1"/> 
                <div class="w-full mt-10">
                    <label>{{ __('messages.Name') }}</label>
                    <input type="text" name="name" id="name" class="w-full input mt-5" required /> 
                </div>

                <div class="w-full mt-10">
                    <label>{{ __('messages.Meaning') }}</label>
                    <input type="text" name="meaning" id="meaning" class="w-full input mt-5" required /> 
                </div>

                <div class="w-full mt-10">
                    <label>{{ __('messages.Example') }}</label>
                    <input type="text" name="example" id="example" class="w-full input mt-5" /> 
                </div>

                <div class="w-full mt-10">
                    <label>{{ __('messages.Translation') }}</label>
                    <input type="text" name="translation" id="translation" class="w-full input mt-5" /> 
                </div>
                <div class="w-full mt-10">
                    <label>{{ __('messages.Pronunciation') }}</label>
                    <input type="text" name="pronunciation" id="pronunciation" class="w-full input mt-5" /> 
                </div>
                <div class="w-full mt-10">
                    <div class="w-full d-flex gap-5 flex-direction">
                        <label>{{ __('messages.Level') }}</label>
                        <select class="seclect" name="level" id="level">
                            <option value="1">Basic</option>
                            <option value="2">Pro</option>
                        </select>
                    </div>
                </div>
                <div class="w-full mt-10">
                    <div class="w-full d-flex gap-5 flex-direction">
                        <select class="seclect" name="status" id="status">
                            <option value="1">{{ __('messages.Show') }}</option>
                            <option value="0">{{ __('messages.Hide') }}</option>
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
            <a href="{{ route('englishs.index') }}">Back</a>
            <a href="{{ route('get.index_add_vocabulary')}}" class="active">Vocabulary</a>
            <a href="{{ route('get.index_add_passage')}}">Passage</a>
            <a href="{{ route('get.index_add_structure')}}">Structure</a>
            <a href="{{ route('get.index_quiz_item')}}">Test Vocabulary</a>
            <a href="{{ route('get.index_quiz_structure')}}">Test Structure</a>
        </div>
        <div class="english-vocabulary-item-search">
            <div class="w-full m-10">
                <label>{{ __('messages.Search text') }}</label>
                <input type="text" id="searchVocabulary" name="search" class="w-full input mt-5" placeholder="{{ __('messages.Search name...') }}" />
            </div>
        </div>
        <div class="w-full h-full d-flex flex-direction gap-10">
            <div class="english-vocabulary-theader">
                <p style="width:25%; font-size: 13px;">{{ __('messages.Name') }}</p>
                <p style="width:30%; font-size: 13px;">{{ __('messages.Meaning') }}</p>
                <p style="width:30%; font-size: 13px;">{{ __('messages.Pronunciation') }}</p>
                <p style="width:12%; font-size: 13px;text-align: center;">{{ __('messages.Action') }}</p>
            </div>
            <div class="english-tbody-scroll" id="vocabularyList">
                @foreach ($vocabularies as $item)
                <div class="english-vocabulary-tbody">
                    <p style="width:25%; font-size: 13px;">{{ $item->name }}</p>
                    <p style="width:30%; font-size: 13px;">{{ $item->meaning }}</p>
                    <p style="width:30%; font-size: 13px;">{{ $item->pronunciation }}</p>
                    <p style="width:12%; font-size: 13px; text-align: center;">
                        <button class="edit-english" onclick="editVocabulary(this)" 
                                data-id="{{ $item->id }}" 
                                data-name="{{ $item->name }}" 
                                data-structure="{{ $item->structure }}" 
                                data-example="{{ $item->example }}" 
                                data-translation="{{ $item->translation }}" 
                                data-explanation="{{ $item->explanation }}" 
                                data-pronunciation="{{ $item->pronunciation }}" 
                                data-meaning="{{ $item->meaning }}" 
                                data-level="{{ $item->level }}" 
                                data-status="{{ $item->status }}" 
                                data-lesson="{{ $item->lesson_id }}">
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


<!-- <script>
    document.addEventListener("DOMContentLoaded", function () {
        const inputs = document.querySelectorAll("input, select");

        inputs.forEach(input => {
            let savedValue = localStorage.getItem(input.name);
            if (savedValue) {
                input.value = savedValue;
            }

            input.addEventListener("input", function () {
                localStorage.setItem(input.name, input.value);
            });

            input.addEventListener("change", function () {
                localStorage.setItem(input.name, input.value);
            });
        });
    });
</script> -->

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
    function editVocabulary(button) {
        const id = button.getAttribute("data-id");
        const name = button.getAttribute("data-name") || "";
        const example = button.getAttribute("data-example") || "";
        const translation = button.getAttribute("data-translation") || "";
        const pronunciation = button.getAttribute("data-pronunciation") || "";
        const meaning = button.getAttribute("data-meaning") || "";
        const level = button.getAttribute("data-level") || "1";
        const status = button.getAttribute("data-status") || "1";
        const lessonId = button.getAttribute("data-lesson") || "";

        // Cập nhật giá trị vào form dựa theo ID
        document.getElementById("name").value = name;
        document.getElementById("example").value = example;
        document.getElementById("translation").value = translation;
        document.getElementById("pronunciation").value = pronunciation;
        document.getElementById("meaning").value = meaning;
        document.getElementById("level").value = level;
        document.getElementById("status").value = status;
        document.getElementById("lesson_id").value = lessonId;

        // Cập nhật action của form
        const form = document.getElementById("vocabularyForm");
        form.action = `/v1/vocabulary/update/${id}`;

        // Hiển thị nút "Edit", ẩn nút "Submit"
        document.getElementById("submit").style.display = "none";
        document.getElementById("edit").style.display = "block";
    }



   document.addEventListener("DOMContentLoaded", function () {
    function searchVocabulary() {
        let query = document.getElementById("searchVocabulary").value;
        let vocabularyList = document.getElementById("vocabularyList");

        if (!vocabularyList) {
            console.error("Error: vocabularyList not found!");
            return;
        }

        fetch(`/v1/search-vocabulary?query=${query}`)
            .then(response => response.json())
            .then(data => {
                vocabularyList.innerHTML = "";

                if (data.length === 0) {
                    vocabularyList.innerHTML = `<p style="text-align: center; font-size: 13px;">No results found</p>`;
                } else {
                    data.forEach(item => {
                        vocabularyList.innerHTML += `
                            <div class="english-vocabulary-tbody">
                                <p style="width:25%; font-size: 13px;">${item.name}</p>
                                <p style="width:30%; font-size: 13px;">${item.meaning}</p>
                                <p style="width:30%; font-size: 13px;">${item.pronunciation}</p>
                                <p style="width:12%; font-size: 13px; text-align: center;">
                                    <button class="edit-english" onclick="editStructure(this)">
                                        <i class="fa-solid fa-pen-to-square"></i>
                                    </button>
                                    <button class="delete-english" onclick="deleteStructure(this)">
                                        <i class="fa-solid fa-trash"></i>
                                    </button>
                                </p>
                            </div>
                        `;
                    });
                }
            })
            .catch(error => console.error("Error fetching vocabulary:", error));
    }

    document.getElementById("searchVocabulary")?.addEventListener("keyup", searchVocabulary);
});



    document.addEventListener("DOMContentLoaded", function () {
        document.querySelectorAll(".save-btn").forEach((button) => {
            button.addEventListener("click", function () {
                let lessonDiv = this.closest(".lesson-item");
                let lessonId = lessonDiv.dataset.id;
                let name = lessonDiv.querySelector(".input-name").value;
                let title = lessonDiv.querySelector(".input-title").value;

                fetch(`/v1/lessons/update/${lessonId}`, {
                    method: "PUT", 
                    headers: {
                        "Content-Type": "application/json",
                        "X-CSRF-TOKEN": document.querySelector('meta[name="csrf-token"]').content
                    },
                    body: JSON.stringify({ name, title }),
                })
                .then(response => response.json())
                .then(data => alert("Cập nhật thành công!"))
                .catch(error => console.error("Lỗi:", error));
            });
        });
    });
</script>

@endsection
