@extends('app')

@section('title', 'Home Page')

@section('content')
<div class="todo">
    <div class="japanese-header">
        <div class="japanese-header-left">
            <a href="/japanese/{{ $path_id }}"><i class="fa-solid fa-circle-left"></i> Quay lại</a>
        </div>
        <div class="japanese-header-right">
            <a href="/quiz/{{ $path_id }}">Tiếp theo <i class="fa-solid fa-circle-right"></i></a>
        </div>
    </div>
    <div class="japanese-container-box">
        <div class="formTab">
            <div class="listFormGrammar">
                @foreach($structure as $item)
                <div class="formGrammar">
                    <h4>{{$item->structure}}</h4>
                    <p>{{$item->meaning_of_structure}}</p>
                    <p>VD: {{$item->example}}</p>
                    <p>{{$item->meaning_of_example}}</p>
                </div>
                @endforeach
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