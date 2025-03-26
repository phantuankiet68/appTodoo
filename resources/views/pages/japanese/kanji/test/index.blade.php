@extends('page')
@section('title', 'Home Page')
@section('content')

<div class="english-vocabulary">
    <div class="kanji-test-item d-flex space-between gap-10">
        <div class="w-full d-flex bg-white p-10 border-radius-5">
            <form class="w-full d-flex flex-direction gap-6" action="{{ route('kanjis.storeTest') }}" method="POST">
            @csrf
                <div class="w-full">
                    <div class="w-full d-flex gap-5 flex-direction">
                        <label>Lesson</label>
                        <select class="seclect" name="lesson_kanjis_id">
                            @foreach ($lessons as $item)
                                <option value="{{ $item->id }}">{{ $item->lesson }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="w-full">
                    <div class="w-full d-flex gap-5 flex-direction">
                        <label>Language</label>
                        <select class="seclect" name="language">
                            <option value="1">Việt Nam</option>
                            <option value="2">English</option>
                            <option value="3">Japan</option>
                        </select>
                    </div>
                </div>

                <div class="w-full">
                    <label>Question</label>
                    <input type="text" name="question" class="w-full input mt-5" required/> 
                </div>

                <div class="w-full">
                    <label>Đáp án A</label>
                    <input type="text" name="option_a" class="w-full input mt-5" required/> 
                </div>

                <div class="w-full">
                    <label>Đáp án B</label>
                    <input type="text" name="option_b" class="w-full input mt-5" /> 
                </div>

                <div class="w-full">
                    <label>Đáp án C</label>
                    <input type="text" name="option_c" class="w-full input mt-5"/> 
                </div>
                <div class="w-full">
                    <label>Đáp án D</label>
                    <input type="text" name="option_d" class="w-full input mt-5"/> 
                </div>
                <div class="w-full">
                    <label>Đáp án đúng</label>
                    <input type="text" name="correct_answer" class="w-full input mt-5"/> 
                </div>
                <div class="w-full">
                    <label>Giải thích</label>
                    <input type="text" name="explanation" class="w-full input mt-5" /> 
                </div>
                <input type="hidden" name="difficulty" class="w-full input" value="1"/> 
                <div class="w-full">
                    <div class="w-full d-flex gap-5 flex-direction">
                        <label>{{ __('messages.Level') }}</label>
                        <select class="seclect" name="level">
                            <option value="1">Basic</option>
                            <option value="2">Pro</option>
                        </select>
                    </div>
                </div>
                <div class="w-full mt-10">
                    <button class="button-submit cursor" type="submit">{{ __('messages.Submit') }}</button>
                </div>
            </form>
        </div>
    </div>
    <div class="kanji-item-body">
        <form method="GET" action="{{ route('kanji.index_test') }}">
            <div class="english-vocabulary-item-top">
                <a href="{{ route('kanji.index') }}" class="d-flex gap-5 w-20">
                    <i class="fa-solid fa-circle-chevron-left"></i> Back
                </a>
                <a href="{{ route('kanji.index_add') }}" class="d-flex gap-5 w-20">
                    <i class="fa-solid fa-circle-chevron-left"></i> Kanji
                </a>
                <a href="{{ route('kanji.index_test') }}" class="d-flex gap-5 w-20 active">
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
        <div class="w-full h-full d-flex flex-direction gap-10">
            <div class="english-vocabulary-theader">
                <p style="width:5%; font-size: 13px;">ID</p>
                <p style="width:20%; font-size: 13px;">Câu hỏi</p>
                <p style="width:10%; font-size: 13px;">Đáp án A</p>
                <p style="width:10%; font-size: 13px;">Đáp án B</p>
                <p style="width:10%; font-size: 13px;">Đáp án C</p>
                <p style="width:10%; font-size: 13px;">Đáp án D</p>
                <p style="width:10%; font-size: 13px;">Đáp án đúng</p>
                <p style="width:10%; font-size: 13px;text-align: center;">Ngôn ngữ</p>
                <p style="width:12%; font-size: 13px;text-align: center;">{{ __('messages.Action') }}</p>
            </div>
            <div class="kanji-tbody-test-scroll">
                @foreach ($test_kanjis as $item)
                <div class="english-vocabulary-tbody">
                    <p style="width:5%; font-size: 13px;">{{ $item->id }}</p>
                    <div style="width:20%;" class="trustTitle1">
                        <p style="width:100%; font-size: 13px;">{{ $item->question }}</p>
                    </div>
                    <p style="width:10%; font-size: 13px;">{{ $item->option_a }}</p>
                    <p style="width:10%; font-size: 13px;">{{ $item->option_b }}</p>
                    <p style="width:10%; font-size: 13px;">{{ $item->option_c }}</p>
                    <p style="width:10%; font-size: 13px;">{{ $item->option_d }}</p>
                    <p style="width:10%; font-size: 13px;">{{ $item->correct_answer }}</p>
                    @if ($item->language == 1)
                        <p style="width:10%; font-size: 13px; text-align: center;">VN</p>
                    @else
                        <p style="width:10%; font-size: 13px; text-align: center;">EN</p>
                    @endif
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

<div class="model" id="editTestKanji">
    <div class="modelEditKanji">
        <form class="w-full d-flex flex-direction gap-5" id="EditForm" method="POST">
            @csrf
            @method('PUT')

            <div class="w-full">
                <div class="w-full d-flex gap-5 flex-direction">
                    <label>Lesson</label>
                    <select class="seclect" name="lesson_kanjis_id">
                        @foreach ($lessons as $item)
                            <option value="{{ $item->id }}">{{ $item->lesson }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="w-full">
                <div class="w-full d-flex gap-5 flex-direction">
                    <label>Language</label>
                    <select class="seclect" name="language">
                        <option value="1">Việt Nam</option>
                        <option value="2">English</option>
                        <option value="3">Japan</option>
                    </select>
                </div>
            </div>

            <div class="w-full">
                <label>Question</label>
                <input type="text" name="question" id="question" class="w-full input mt-5" required/> 
            </div>

            <div class="w-full">
                <label>Đáp án A</label>
                <input type="text" name="option_a" id="option_a" class="w-full input mt-5" required/> 
            </div>

            <div class="w-full">
                <label>Đáp án B</label>
                <input type="text" name="option_b" id="option_b" class="w-full input mt-5" /> 
            </div>

            <div class="w-full">
                <label>Đáp án C</label>
                <input type="text" name="option_c" id="option_c" class="w-full input mt-5"/> 
            </div>
            <div class="w-full">
                <label>Đáp án D</label>
                <input type="text" name="option_d" id="option_d"class="w-full input mt-5"/> 
            </div>
            <div class="w-full">
                <label>Đáp án đúng</label>
                <input type="text" name="correct_answer" id="correct_answer" class="w-full input mt-5"/> 
            </div>
            <div class="w-full">
                <label>Giải thích</label>
                <input type="text" name="explanation" id="explanation" class="w-full input mt-5" /> 
            </div>
            <input type="hidden" name="difficulty" class="w-full input" value="1"/> 
            <div class="w-full">
                <div class="w-full d-flex gap-5 flex-direction">
                    <label>{{ __('messages.Level') }}</label>
                    <select class="seclect" name="level" id="level">
                        <option value="1">Basic</option>
                        <option value="2">Pro</option>
                    </select>
                </div>
            </div>
            <div class="w-full mt-10">
                <button class="button-submit cursor" type="submit">{{ __('messages.Submit') }}</button>
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
        const editTestKanji = document.getElementById('editTestKanji')
        if (editTestKanji.style.display === 'none' || editTestKanji.style.display === '') {
            editTestKanji.style.display = 'block'; 
        } else {
            editTestKanji.style.display = 'none';
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
        document.querySelectorAll("form").forEach(form => {
            const inputs = form.querySelectorAll("input, select, textarea");
            inputs.forEach(input => localStorage.removeItem(input.name));
        })
        fetch(`/v1/show/kanjis/test/${id}`)
            .then(response => {
                if (!response.ok) {
                    throw new Error("Không tìm thấy dữ liệu Kanji");
                }
                return response.json();
            })
            .then(data => {
                document.querySelector("select[name='lesson_kanjis_id']").value = data.lesson_kanjis_id;
                document.querySelector("select[name='language']").value = data.language;
                document.querySelector("#question").value = data.question;
                document.querySelector("#option_a").value = data.option_a;
                document.querySelector("#option_b").value = data.option_b;
                document.querySelector("#option_c").value = data.option_c;
                document.querySelector("#option_d").value = data.option_d;
                document.querySelector("#correct_answer").value = data.correct_answer;
                document.querySelector("#explanation").value = data.explanation;
                document.querySelector("#level").value = data.level;

                document.getElementById("EditForm").action = `/v1/kanjis/test/update/${data.id}`;

                document.getElementById("editTestKanji").style.display = "block";

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
