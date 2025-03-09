@extends('page')
@section('title', 'Home Page')
@section('content')

<div class="english-vocabulary">
    <div class="english-vocabulary-item d-flex space-between gap-10">
        <div class="w-full bg-white h-full p-10 border-radius-5">
            <h3>>{{ __('messages.Lesson') }}</h3>
            <form action="{{ route('lessons.store') }}" method="POST" class="mt-10">
            @csrf
                <p class="title-nav"><i class="fa-solid fa-plus"></i> {{ __('messages.Add Lesson') }}</p>
                <div class="w-full mt-10">
                    <div class="w-full d-flex gap-5 flex-direction">
                        <label for="lesson_id">{{ __('messages.Lesson') }}</label>
                        <select class="seclect" name="lesson_id">
                            @foreach ($lessons as $item)
                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                @include('pages.components.editor.index')
                <button class="button mt-10" type="submit">{{ __('messages.Submit') }}</button>
            </form>
        </div>
    </div>
    <div class="english-vocabulary-item">
    <div class="english-vocabulary-item-top">
            <a href="{{ route('englishs.index') }}">Back</a>
            <a href="{{ route('get.index_add_vocabulary')}}">Vocabulary</a>
            <a href="{{ route('get.index_add_passage')}}" class="active">Passage</a>
            <a href="">Học cấu trúc</a>
            <a href="">Kiểm tra từ vựng</a>
            <a href="">Kiểm tra cấu trúc</a>
        </div>
        <div class="w-full h-full d-flex flex-direction gap-10">
            <div class="english-vocabulary-theader">
                <p style="width:25%">{{ __('messages.Name') }}</p>
                <p style="width:25%">{{ __('messages.Meaning') }}</p>
                <p style="width:25%">{{ __('messages.Pronunciation') }}</p>
                <p style="width:10%; text-align: center;">{{ __('messages.Level') }}</p>
                <p style="width:15%; text-align: center;">{{ __('messages.Action') }}</p>
            </div>
            @foreach ($passages as $item)
            <div class="english-vocabulary-tbody">
                <p style="width:25%">{{ $item->name }}</p>
                <p style="width:25%">{{ $item->meaning }}</p>
                <p style="width:25%">{{ $item->pronunciation }}</p>
                <p style="width:10%; text-align: center;">{{ $item->level }}</p>
                <p style="width:15%; text-align: center;">{{ __('messages.Action') }}</p>
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
        document.querySelectorAll(".save-btn").forEach((button) => {
            button.addEventListener("click", function () {
                let lessonDiv = this.closest(".lesson-item");
                let lessonId = lessonDiv.dataset.id;
                let name = lessonDiv.querySelector(".input-name").value;
                let title = lessonDiv.querySelector(".input-title").value;

                fetch(`/v1/englishs/lessons/update/${lessonId}`, {
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
