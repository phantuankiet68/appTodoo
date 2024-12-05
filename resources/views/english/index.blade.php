@extends('app')

@section('title', 'Home Page')

@section('content')
<div class="todo">
    <div class="japanese-container">
        <div class="japanese-container-left">
            <h4>All lessons</h4>
            <div class="lessonList mt-10">
                @foreach($category as $cate)
                <button>{{ $cate->name }} </button>
                @endforeach
            </div>
        </div>
        <div class="japanese-container-right">
            <div class="error-content lesson1">
                @foreach($paragraph as $para)
                <div class="error-content-left">
                    <div class="imageerror">
                        <img src="{{ asset('assets/images/' . $para->image) }}" alt="Image">
                    </div>
                    <div>{!!$para->description!!}</div>
                </div>
                @endforeach
                <div class="error-content-right">
                    <div class="tab">
                        <button class="tablinks" onclick="openTabJapanese(event, 'tab1')">Từ vựng</button>
                        <button class="tablinks" onclick="openTabJapanese(event, 'tab2')">Ngữ pháp</button>
                        <button class="tablinks" onclick="openTabJapanese(event, 'tab3')">Kiểm Tra</button>
                    </div>
                
                    <div id="tab1" class="tab-content formTab">
                        <div class="listFormVocalory mt-10">
                            @foreach($vocabulary as $voca)
                            <div class="formVocalory">
                                <h4>{{$voca->name}}</h4>
                                <p>Nghĩa: {{$voca->meaning_of_word}}</p>
                                <div class="jus-spaceween">
                                    <p>Romaji: {{$voca->romaji}}</p>
                                    <i class="fa-solid fa-volume-low"></i>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                
                    <div id="tab2" class="tab-content formTab">
                        <div class="listFormGrammar mt-10">
                            @foreach($structures as $structure)
                            <div class="formGrammar">
                                <h4>{{$structure->structure}}</h4>
                                <p>{{$structure->meaning_of_structure}}</p>
                                <p>VD: {{$structure->example}}</p>
                                <p>{{$structure->meaning_of_example}}</p>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <div id="tab3" class="tab-content formTab">
                        <div class="tab3Container mt-10">
                            <h3 class="text-center"><b>Trắc nghiệm Tiếng nhật.</b></h1>
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
                                <input type="hidden" name="language_id" value="2">
                                @foreach($QuizItems as $quiz)
                                <input type="hidden" name="category_id" value="{{ $quiz->category_id }}">
                                    <div class="question">
                                        <p>{{ $quiz->question }}</p>
                                        <input type="radio" name="questions[{{ $quiz->id }}]" value="a"> {{ $quiz->answer_a }} <br>
                                        <input type="radio" name="questions[{{ $quiz->id }}]" value="b"> {{ $quiz->answer_b }} <br>
                                        <input type="radio" name="questions[{{ $quiz->id }}]" value="c"> {{ $quiz->answer_c }} <br>
                                        <input type="radio" name="questions[{{ $quiz->id }}]" value="d"> {{ $quiz->answer_d }} <br>
                                        
                                        <!-- Đáp án đúng ẩn đi để so sánh (không cần thiết ở đây) -->
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