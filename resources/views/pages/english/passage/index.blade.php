@extends('page')
@section('title', 'Home Page')
@section('content')

<div class="english-vocabulary">
    <div class="english-vocabulary-item d-flex space-between gap-10">
        <div class="w-full bg-white h-full p-10 border-radius-5">
            <h3>>{{ __('messages.Lesson') }}</h3>
            <form id="passageForm" class="mt-10">
                @csrf
                <p class="title-nav"><i class="fa-solid fa-plus"></i> {{ __('messages.Add Lesson') }}</p>
            </form>

            <div class="w-full mt-10">
                <div class="w-full d-flex gap-5 flex-direction">
                    <label for="lesson_id">{{ __('messages.Lesson') }}</label>
                    <select class="seclect" name="lesson_id" id="lesson_id">
                        @foreach ($lessons as $item)
                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            @include('pages.components.editor.index')

            <textarea name="description" id="hidden-description" style="display:none;"></textarea>
            <input type="hidden" name="passage_id" id="passage_id">
            <input type="hidden" name="language" id="language" value="2">
            <button id="submitBtn" class="button mt-10">{{ __('messages.Submit') }}</button>
            <button id="editBtn" class="button mt-10" style="display: none;">{{ __('messages.Submit') }}</button>
        </div>
    </div>
    <div class="english-vocabulary-item">
        <div class="english-vocabulary-item-top">
            <a href="{{ route('englishs.index') }}">Back</a>
            <a href="{{ route('get.index_add_vocabulary')}}" class="active">Vocabulary</a>
            <a href="{{ route('get.index_add_passage')}}">Passage</a>
            <a href="{{ route('get.index_add_structure')}}">Học cấu trúc</a>
            <a href="">Kiểm tra từ vựng</a>
            <a href="">Kiểm tra cấu trúc</a>
        </div>
        <div class="w-full h-full d-flex flex-direction gap-10">
            <div class="english-vocabulary-theader">
                <p style="width:15%">{{ __('messages.Lesson') }}</p>
                <p style="width:20%">{{ __('messages.Created by') }}</p>
                <p style="width:50%">{{ __('messages.Description') }}</p>
                <p style="width:15%; text-align: center;">{{ __('messages.Action') }}</p>
            </div>
            @foreach ($passages as $item)
            <div class="english-vocabulary-tbody" data-id="{{ $item->id }}">
                <p style="width:15%">{{ $item->lesson->name }}</p>
                <p style="width:20%">{{ $item->user->full_name }}</p>
                <div class="trustTitle1" style="width:50%; text-align: center;">{!! $item->description !!}</div>
                <p style="width:15%; text-align: center;">
                    <button class="edit-english" onclick="editEnglish(this)">
                        <i class="fa-solid fa-pen-to-square"></i>
                    </button>
                    <button class="delete-english" onclick="deleteEnglish(this)">
                        <i class="fa-solid fa-trash"></i>
                    </button>
                </p>
            </div>
            @endforeach
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
    function editEnglish(button) {
        let parentDiv = button.closest(".english-vocabulary-tbody");

        let descriptionElement = parentDiv.querySelector(".trustTitle1");
        let description = descriptionElement ? descriptionElement.innerHTML : '';

        let textInput = document.getElementById("text-input");
        if (textInput) {
            textInput.innerHTML = description;
        } else {
            console.error("❌ Không tìm thấy phần tử #text-input");
        }

        let passageId = parentDiv.getAttribute("data-id");
        if (passageId) {
            document.getElementById("passage_id").value = passageId;
        } else {
            console.error("❌ Không tìm thấy ID của passage");
        }

        document.getElementById("submitBtn").style.display = "none";
        document.getElementById("editBtn").style.display = "inline-block";
    }

   document.getElementById("editBtn").addEventListener("click", function () {
        let passageId = document.getElementById("passage_id").value;
        let updatedDescription = document.getElementById("text-input").innerHTML;

        if (!passageId) {
            console.error("❌ Không tìm thấy ID của passage");
            return;
        }

        fetch(`/v1/passage/${passageId}`, {
            method: "PUT",
            headers: {
                "Content-Type": "application/json",
                "Accept": "application/json",
                "X-CSRF-TOKEN": document.querySelector('meta[name="csrf-token"]').getAttribute("content")
            },
            body: JSON.stringify({
                description: updatedDescription
            })
        })
        .then(response => {
            if (!response.ok) {
                throw new Error(`HTTP error! Status: ${response.status}`);
            }
            return response.json();
        })
        .then(data => {
            alert("✅ Cập nhật thành công:", data);
            location.reload();
        })
        .catch(error => {
            console.error("❌ Lỗi:", error);
        });
    });

    function deleteEnglish(button) {
        let passageId = button.getAttribute("data-id");

        if (passageId) {
            document.getElementById("passage_id").value = passageId;
        } else {
            console.error("❌ Không tìm thấy ID của passage");
        }

        if (!confirm("Bạn có chắc chắn muốn xoá?")) {
            return;
        }

        fetch(`/v1/passage/${passageId}`, {
            method: "DELETE",
            headers: {
                "Content-Type": "application/json",
                "Accept": "application/json",
                "X-CSRF-TOKEN": document.querySelector('meta[name="csrf-token"]').getAttribute("content")
            }
        })
        .then(response => {
            if (!response.ok) {
                throw new Error(`HTTP error! Status: ${response.status}`);
            }
            return response.json();
        })
        .then(data => {
            console.log("✅ Xóa thành công:", data);
            button.closest("tr").remove();
            location.reload();
        })
        .catch(error => {
            console.error("❌ Lỗi:", error);
        });
    }

    function deleteEnglish(button) {
        let passageId = button.closest(".english-vocabulary-tbody").getAttribute("data-id");

        if (!passageId || passageId === "null") {
            console.error("❌ Không tìm thấy ID của passage");
            return;
        }

        if (!confirm("Bạn có chắc chắn muốn xoá?")) {
            return;
        }

        fetch(`/v1/passage/${passageId}`, {
            method: "DELETE",
            headers: {
                "Content-Type": "application/json",
                "Accept": "application/json",
                "X-CSRF-TOKEN": document.querySelector('meta[name="csrf-token"]').getAttribute("content")
            }
        })
        .then(response => {
            if (!response.ok) {
                throw new Error(`HTTP error! Status: ${response.status}`);
            }
            return response.json();
        })
        .then(data => {
            console.log("✅ Xóa thành công:", data);
            location.reload();
        })
        .catch(error => {
            console.error("❌ Lỗi:", error);
        });
    }




</script>



<script src="{{ asset('js/editor/index.js') }}"></script>
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
    document.addEventListener('DOMContentLoaded', function () {
        const submitBtn = document.getElementById('submitBtn');
        const lessonSelect = document.getElementById('lesson_id');
        const descriptionField = document.getElementById('hidden-description');
        const languageField = document.getElementById('language');

        submitBtn.addEventListener('click', function (event) {
            event.preventDefault();

            const editorContent = document.getElementById('text-input').innerHTML;
            descriptionField.value = editorContent;

            fetch("{{ route('passage.store') }}", {
                method: "POST",
                headers: {
                    "X-CSRF-TOKEN": document.querySelector('input[name="_token"]').value,
                    "Content-Type": "application/json"
                },
                body: JSON.stringify({
                    lesson_id: lessonSelect.value,
                    language: languageField.value,
                    description: descriptionField.value
                })
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    alert("Lưu thành công!");
                    location.reload();
                } else {
                    alert("Có lỗi xảy ra, vui lòng thử lại.");
                }
            })
            .catch(error => console.error("Lỗi:", error));
        });
    });

</script>

@endsection
