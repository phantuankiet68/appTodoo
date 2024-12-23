@extends('app')

@section('title', 'Home Page')

@section('content')
<div class="todo">
    <div class="japanese-container">
        <div class="japanese-container-left">
            <h4>All lessons</h4>
            <div class="lessonList mt-10">
                @foreach($category as $cate)
                    <a href="/japanese/{{ $cate->id }}">{{ $cate->name }}  <i class="fa-solid fa-lock icon-lock"></i></a>
                @endforeach
            </div>
        </div>
        <div class="japanese-container-right background-lesson">
            
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