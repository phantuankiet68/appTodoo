@extends('page')
@section('title', 'Home Page')
@section('content')

<div class="english-vocabulary">
    <div class="english-vocabulary-item d-flex space-between gap-10">
        <div class="w-full bg-white h-full p-10 border-radius-5">
            <form id="lessonForm" action="{{ route('kanjis.store') }}" method="POST">
            @csrf
                <p class="title-nav"><i class="fa-solid fa-plus"></i> {{ __('messages.Add Lesson') }}</p>
                <div class="w-full mt-10">
                    <label>{{ __('messages.Name') }}</label>
                    <input type="text"  id="lesson" name="lesson" class="w-full input  mt-5"/> 
                </div>
                <div class="w-full mt-10">
                    <label>{{ __('messages.Title') }}</label>
                    <input type="text"  id="title" name="title" class="w-full input  mt-5"/> 
                </div>
                <div class="w-full mt-10">
                    <div class="w-full d-flex gap-5 flex-direction">
                        <label>{{ __('messages.Level') }}</label>
                        <select class="seclect" name="level">
                            <option value="N5">N5</option>
                            <option value="N4">N4</option>
                            <option value="N3">N3</option>
                            <option value="N2">N2</option>
                            <option value="N1">N1</option>
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
                    <input class="input-name" type="text" value="{{ $item->lesson }}">:
                    <input class="input-title" type="text" value="{{ $item->title }}">
                    <button class="save-btn">Lưu</button>
                </div>
            @endforeach
            </div>
        </div>
    </div>
    <div class="english-vocabulary-item-body">
        <form method="GET" action="{{ route('kanji.index_add') }}">
            <div class="english-vocabulary-item-top">
                <a href="{{ route('kanji.index') }}" class="d-flex gap-5 w-20">
                    <i class="fa-solid fa-circle-chevron-left"></i> Back
                </a>
                <a href="{{ route('kanji.index_add') }}" class="d-flex gap-5 w-20">
                    <i class="fa-solid fa-circle-chevron-left"></i> Kanji
                </a>
                <a href="{{ route('kanji.index_test') }}" class="d-flex gap-5 w-20">
                    <i class="fa-solid fa-circle-chevron-left"></i> Test
                </a>
                <a href="{{ route('kanji.index') }}" class="d-flex gap-5 w-25">
                    <i class="fa-solid fa-circle-chevron-left"></i> Đoạn văn
                </a>
                <div class="w-full">
                    <input type="text" id="searchVocabulary" name="search" class="w-full input"
                        placeholder="{{ __('messages.Search name...') }}" value="{{ request('search') }}" />
                </div>
                <div class="w-20">
                    <button type="submit" class="button-submit">{{ __('messages.Search') }}</button>
                </div>
            </div>
        </form>
        <div class="w-full d-flex bg-white p-10 border-radius-5">
            <form class="w-full d-flex wrap gap-5" action="{{ route('kanji.store') }}" method="POST">
            @csrf
                <div class="w-20">
                    <div class="w-full d-flex gap-5 flex-direction">
                        <select class="seclect" name="lesson_kanjis_id">
                            @foreach ($lessons as $item)
                                <option value="{{ $item->id }}">{{ $item->lesson }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="w-20">
                    <div class="w-full d-flex gap-5 flex-direction">
                        <select class="seclect" name="language">
                            <option value="1">Việt Nam</option>
                            <option value="2">English</option>
                            <option value="3">Japan</option>
                        </select>
                    </div>
                </div>

                <div class="w-20">
                    <input type="text" name="kanji" class="w-full input" required placeholder="kanji"/> 
                </div>

                <div class="w-20">
                    <input type="text" name="meaning_han" class="w-full input" required placeholder="Meaning"/> 
                </div>

                <div class="w-20">
                    <input type="text" name="onyomi" class="w-full input" placeholder="Âm Hán Nhật"/> 
                </div>

                <div class="w-20">
                    <input type="text" name="compounds" class="w-full input mt-5" placeholder="Các từ ghép"/> 
                </div>
                <div class="w-20">
                    <input type="text" name="related_words" class="w-full input mt-5" placeholder="Từ vựng liên quan"/> 
                </div>
                <div class="w-20">
                    <input type="text" name="example_sentence" class="w-full input mt-5" placeholder="Ví dụ câu"/> 
                </div>
                <div class="w-20">
                    <input type="text" name="example_meaning" class="w-full input mt-5" placeholder="Nghĩa câu ví dụ" /> 
                </div>
                <div class="w-20 mt-5">
                    <button class="button-submit cursor" type="submit">{{ __('messages.Submit') }}</button>
                </div>
            </form>
        </div>
        <div class="w-full h-full d-flex flex-direction gap-10">
            <div class="english-vocabulary-theader">
                <p style="width:5%; font-size: 13px;">ID</p>
                <p style="width:10%; font-size: 13px;">Kanji</p>
                <p style="width:10%; font-size: 13px;">{{ __('messages.Meaning') }}</p>
                <p style="width:10%; font-size: 13px;">{{ __('messages.Language') }}</p>
                <p style="width:20%; font-size: 13px;">Âm Hán Nhật</p>
                <p style="width:30%; font-size: 13px;">Ví dụ</p>
                <p style="width:10%; font-size: 13px;text-align: center;">{{ __('messages.Lesson') }}</p>
                <p style="width:12%; font-size: 13px;text-align: center;">{{ __('messages.Action') }}</p>
            </div>
            <div class="kanji-tbody-scroll" id="vocabularyList">
                @foreach ($kanjis as $item)
                <div class="english-vocabulary-tbody">
                    <p style="width:5%; font-size: 13px;">{{ $item->id }}</p>
                    <p style="width:10%; font-size: 13px;">{{ $item->kanji }}</p>
                    <p style="width:10%; font-size: 13px;">{{ $item->meaning_han }}</p>
                    @if ($item->language == 1)
                        <p style="width:10%; font-size: 13px; text-align: center;">VN</p>
                    @else
                        <p style="width:10%; font-size: 13px; text-align: center;">EN</p>
                    @endif
                    <p style="width:20%; font-size: 13px;">{{ $item->onyomi }}</p>
                    <div style="width:30%;" class="trustTitle1">
                        <p style="width:100%; font-size: 13px; text-align: center;">{{ $item->example_sentence }}</p>
                    </div>
                    <p style="width:10%; font-size: 13px; text-align: center;">{{ $item->lesson->lesson }}</p>
                    <p style="width:12%; font-size: 13px; text-align: center;">
                        <button class="edit-english" onclick="editKanji('{{ $item->id }}')">
                            <i class="fa-solid fa-pen-to-square"></i>
                        </button>
                        <button class="delete-english" onclick="deleteKanji('{{ $item->id }}')" >
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

<div class="model" id="kanjiEdit" style="display: none;">
    <div class="modelEditKanji">
        <form class="w-full d-flex flex-direction gap-5" id="kanjiEditForm" method="POST">
            @csrf
            @method('PUT')

            <div class="w-full">
                <input type="text" name="kanji" id="kanjiInput" class="w-full input" required placeholder="Kanji"/>
            </div>
            <div class="w-full">
                <input type="text" name="meaning_han" id="meaningHanInput" class="w-full input" required placeholder="Meaning"/>
            </div>
            <div class="w-full">
                <input type="text" name="onyomi" id="onyomiInput" class="w-full input" placeholder="Âm Hán Nhật"/>
            </div>
            <div class="w-full">
                <input type="text" name="compounds" id="compoundsInput" class="w-full input mt-5" placeholder="Các từ ghép"/>
            </div>
            <div class="w-full">
                <input type="text" name="related_words" id="relatedWordsInput" class="w-full input mt-5" placeholder="Từ vựng liên quan"/>
            </div>
            <div class="w-full">
                <input type="text" name="example_sentence" id="exampleSentenceInput" class="w-full input mt-5" placeholder="Ví dụ câu"/>
            </div>
            <div class="w-full">
                <input type="text" name="example_meaning" id="exampleMeaningInput" class="w-full input mt-5" placeholder="Nghĩa câu ví dụ"/>
            </div>
            <div class="w-full mt-5">
                <button class="button-submit cursor" type="submit">{{ __('messages.Update') }}</button>
            </div>
        </form>
        <div class="BtnCloseCreate" onclick="closekanjiEdit()">
            <p>X</p>
        </div>
    </div>
</div>

<div class="model" id="kanjiDelete" style="display: none;">
    <div class="modelDeleteKanji">
        <form class="w-full d-flex flex-direction gap-10" id="kanjiDeleteForm" method="POST">
            @csrf
            @method('DELETE')    
            <p>Bạn có chắc là muốn xóa hay không?</p>
            <button type="submit" class="delete">Delete</button>
        </form>
        <div class="BtnCloseCreate" onclick="closekanjiDelete()">
            <p>X</p>
        </div>
    </div>  
</div>

<script>
    function closekanjiEdit() {
        const kanjiEdit = document.getElementById('kanjiEdit')
        if (kanjiEdit.style.display === 'none' || kanjiEdit.style.display === '') {
            kanjiEdit.style.display = 'block'; 
        } else {
            kanjiEdit.style.display = 'none';
        }
    }
    
    function deleteKanji(id) {
        document.querySelector("#kanjiDeleteForm").action = `/v1/kanji/${id}`;
        document.getElementById("kanjiDelete").style.display = "block";
    }


    function closekanjiDelete() {
        const kanjiDelete = document.getElementById('kanjiDelete')
        if (kanjiDelete.style.display === 'none' || kanjiDelete.style.display === '') {
            kanjiDelete.style.display = 'block'; 
        } else {
            kanjiDelete.style.display = 'none';
        }
    }

    document.querySelector("#kanjiDeleteForm").addEventListener("submit", function (e) {
        e.preventDefault();
        
        let form = this;
        let action = form.action;

        fetch(action, {
            method: "DELETE",
            headers: {
                "X-CSRF-TOKEN": document.querySelector("meta[name='csrf-token']").getAttribute("content"),
                "Content-Type": "application/json",
            },
        })
        .then(response => response.json())
        .then(data => {
            alert(data.message || "Xóa thành công!");
            document.getElementById("kanjiDelete").style.display = "none";
            location.reload();
        })
        .catch(error => {
            console.error("Lỗi khi xóa Kanji:", error);
            alert("Lỗi: " + error.message);
        });
    });

    function editKanji(id) {
        fetch(`/v1/kanji/${id}`)
        .then(response => {
            if (!response.ok) {
                throw new Error("Không tìm thấy Kanji");
            }
            return response.json();
        })
        .then(data => {
            document.querySelector("input[name='kanji']").value = data.kanji;
            document.querySelector("input[name='meaning_han']").value = data.meaning_han;
            document.querySelector("input[name='onyomi']").value = data.onyomi;
            document.querySelector("input[name='compounds']").value = data.compounds;
            document.querySelector("input[name='related_words']").value = data.related_words;
            document.querySelector("input[name='example_sentence']").value = data.example_sentence;
            document.querySelector("input[name='example_meaning']").value = data.example_meaning;
            console.log(data);
            document.querySelector("#kanjiEditForm").action = `/v1/kanji/${data.id}`;
            document.getElementById("kanjiEdit").style.display = "block";
        })
        .catch(error => {
            console.error("Lỗi khi lấy dữ liệu Kanji:", error);
            alert("Lỗi: " + error.message);
        });
    }



</script>
<script>
document.addEventListener("DOMContentLoaded", function () {
    const lessonInput = document.getElementById("lesson");
    const titleInput = document.getElementById("title");

    if (lessonInput) {
        const savedLesson = localStorage.getItem("lesson");
        if (savedLesson) {
            lessonInput.value = savedLesson;
        }
        lessonInput.addEventListener("input", () => {
            localStorage.setItem("lesson", lessonInput.value);
        });
    }

    if (titleInput) {
        const savedTitle = localStorage.getItem("title");
        if (savedTitle) {
            titleInput.value = savedTitle;
        }
        titleInput.addEventListener("input", () => {
            localStorage.setItem("title", titleInput.value);
        });
    }

});

</script>

<script>
document.addEventListener("DOMContentLoaded", function () {
    const inputs = document.querySelectorAll("form input, form select");

    inputs.forEach(input => {
        if (localStorage.getItem(input.name)) {
            input.value = localStorage.getItem(input.name);
        }

        input.addEventListener("input", () => {
            localStorage.setItem(input.name, input.value);
        });
    });

});
</script>


@endsection
