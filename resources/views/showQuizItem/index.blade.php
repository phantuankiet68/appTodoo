@extends('app')

@section('title', 'Home Page')

@section('content')
<div class="todo">
    <div class="japanese-header">
        <div class="japanese-header-left">
            <a href="/japanese/{{ $path_id }}"><i class="fa-solid fa-circle-left"></i> Quay lại</a>
        </div>
        <div class="japanese-header-right">
            <a href="/japanese/{{ $path_id_x }}">Tiếp theo <i class="fa-solid fa-circle-right"></i></a>
        </div>
    </div>
    <div class="japanese-container-box">
        <div class="formTab">
            <div class="tab3Container">
                @if(session('error'))
                    <div class="alert alert-danger">{{ session('error') }}</div>
                @endif
                @if(session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif
                <form id="quiz-form" class="formQuiz" method="POST" action="{{ route('quiz.submit') }}">
                    @csrf
                    @if (Auth::check())
                        <input type="hidden" id="user_id" name="user_id" value="{{ Auth::user()->id }}"/>
                    @endif
                    <input type="hidden" name="category_id" value="{{ $QuizItems->first()->category_id }}">
                    <input type="hidden" name="language_id" value="3">
                    @foreach($QuizItems as $quiz)
                        <div class="question">
                            <p>{{ $quiz->question }}</p>
                            <input type="radio" name="questions[{{ $quiz->id }}]" value="a"> {{ $quiz->answer_a }} <br>
                            <input type="radio" name="questions[{{ $quiz->id }}]" value="b"> {{ $quiz->answer_b }} <br>
                            <input type="radio" name="questions[{{ $quiz->id }}]" value="c"> {{ $quiz->answer_c }} <br>
                            <input type="radio" name="questions[{{ $quiz->id }}]" value="d"> {{ $quiz->answer_d }} <br>
                        </div>
                    @endforeach
                    <div class="submitBtn">
                        <button type="submit">Nộp</button>
                    </div>
                </form>
                <div class="formResult">
                    @foreach($result as $item)
                    <p class="red">{{ __('messages.Congratulations to you.') }}</p>
                    <p >{{ __('messages.You have passed the test with a perfect score, exceeding my expectations!') }}</p>
                    <p>Tổng số câu: {{ $item->correct_answers + $item->wrong_answers }} câu.</p>
                    <p>Bạn đã làm đúng: {{$item->correct_answers}} câu.</p>
                    <p>Bạn đã làm sai: {{$item->wrong_answers}} câu.</p>
                    <p></p>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    function openTabJapanese(event, tabId) {
        var tabContents = document.querySelectorAll('.tab-content');
        tabContents.forEach(function(tabContent) {
            tabContent.classList.remove('active');
        });
        var tabButtons = document.querySelectorAll('.tablinks');
        tabButtons.forEach(function(btn) {
            btn.classList.remove('active');
        });

        document.getElementById(tabId).classList.add('active');
        event.currentTarget.classList.add('active');
        localStorage.setItem('activeTab', tabId);
    }
    window.onload = function() {
        var activeTab = localStorage.getItem('activeTab');
        if (activeTab) {
            document.getElementById(activeTab).classList.add('active');
            document.querySelector(`button[onclick="openTabJapanese(event, '${activeTab}')"]`).classList.add('active');
        } else {
            document.getElementById('tab1').classList.add('active');
            document.querySelector(`button[onclick="openTabJapanese(event, 'tab1')"]`).classList.add('active');
        }
    };
</script>
@endsection