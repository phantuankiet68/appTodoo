@extends('app')

@section('title', 'Home Page')

@section('content')
<div class="cod-dashboard-2">
    <div class="overview">
        <div class="cards">
            <div class="card card-1">
                <div class="card--data">
                    <div class="card--content">
                        <h5 class="card--title">Total User</h5>
                        <h1>{{$sum_english}}</h1>
                    </div>
                    <i class="fa-solid fa-user ri-user-2-line card--icon--lg"></i>
                </div>
                <div class="card--stats">
                    <span><i class="fa-solid fa-hand-point-up ri-bar-chart-fill card--icon stat--icon"></i>{{$percentage}}%</span>
                    <span><i class="fa-solid fa-minus ri-arrow-up-s-fill card--icon up--arrow"></i>{{$subtraction_user}}</span>
                    <span><i class="fa-solid fa-plus card--icon down--arrow"></i>{{$sum_user}}</span>
                </div>
            </div>
            <div class="card card-2">
                <div class="card--data">
                    <div class="card--content">
                        <h5 class="card--title">Total Issue</h5>
                        <h1>{{$sum_task}}</h1>
                    </div>
                    <i class="fa-solid fa-window-maximize ri-user-line card--icon--lg"></i>
                </div>
                <div class="card--stats">
                    <span><i class="fa-solid fa-hand-point-up ri-bar-chart-fill card--icon stat--icon"></i>{{$percentage_task}}%</span>
                    <span><i class="fa-solid fa-minus ri-arrow-up-s-fill card--icon up--arrow"></i>{{$subtraction_task}}</span>
                    <span><i class="fa-solid fa-plus card--icon down--arrow"></i>{{$sum_task}}</span>
                </div>
            </div>
            <div class="card card-2">
                <div class="card--data">
                    <div class="card--content">
                    <h5 class="card--title">Total Issue</h5>
                    <h1>{{$sum_component}}</h1>
                    </div>
                    <i class="fa-solid fa-window-maximize ri-user-line card--icon--lg"></i>
                </div>
                <div class="card--stats">
                    <span><i class="fa-solid fa-hand-point-up ri-bar-chart-fill card--icon stat--icon"></i>{{$percentage_component}}%</span>
                    <span><i class="fa-solid fa-minus ri-arrow-up-s-fill card--icon up--arrow"></i>{{$subtraction_component}}</span>
                    <span><i class="fa-solid fa-plus card--icon down--arrow"></i>{{$sum_component}}</span>
                </div>
            </div>
            <div class="card card-4">
                <div class="card--data">
                    <div class="card--content">
                        <h5 class="card--title">Total Event</h5>
                        <h1>{{$sum_event}}</h1>
                    </div>
                    <i class="fa-solid fa-book ri-calendar-2-line card--icon--lg"></i>
                </div>
                <div class="card--stats">
                    <span><i class="fa-solid fa-hand-point-up ri-bar-chart-fill card--icon stat--icon"></i>{{$percentage_event}}%</span>
                    <span><i class="fa-solid fa-minus ri-arrow-up-s-fill card--icon up--arrow"></i>{{$subtraction_event}}</span>
                    <span><i class="fa-solid fa-plus card--icon down--arrow"></i>{{$sum_event}}</span>
                </div>
            </div>
            <div class="card card-5">
                <div class="card--data">
                    <div class="card--content">
                        <h5 class="card--title">Toltal Post</h5>
                        <h1>{{$sum_post}}</h1>
                    </div>
                    <i class="fa-solid fa-gem ri-calendar-2-line card--icon--lg"></i>
                </div>
                <div class="card--stats">
                    <span><i class="fa-solid fa-hand-point-up ri-bar-chart-fill card--icon stat--icon"></i>{{$percentage_post}}65%</span>
                    <span><i class="fa-solid fa-minus ri-arrow-up-s-fill card--icon up--arrow"></i>{{$subtraction_post}}</span>
                    <span><i class="fa-solid fa-plus card--icon down--arrow"></i>{{$sum_post}}</span>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="cod-dashboard-2">
    <div class="overview">
        <div class="cards">
            <div class="card card-1">
                <div class="card--data">
                    <div class="card--content">
                        <h5 class="card--title">Total English</h5>
                        <h1>{{$sum_english}}</h1>
                    </div>
                    <i class="fa-solid fa-user ri-user-2-line card--icon--lg"></i>
                </div>
                <div class="card--stats">
                    <span><i class="fa-solid fa-hand-point-up ri-bar-chart-fill card--icon stat--icon"></i>{{$percentage_english}}%</span>
                    <span><i class="fa-solid fa-minus ri-arrow-up-s-fill card--icon up--arrow"></i>{{$subtraction_english}}</span>
                    <span><i class="fa-solid fa-plus card--icon down--arrow"></i>{{$sum_english}}</span>
                </div>
            </div>
            <div class="card card-2">
                <div class="card--data">
                    <div class="card--content">
                        <h5 class="card--title">Total Japanese</h5>
                        <h1>{{$sum_japanese}}</h1>
                    </div>
                    <i class="fa-solid fa-window-maximize ri-user-line card--icon--lg"></i>
                </div>
                <div class="card--stats">
                    <span><i class="fa-solid fa-hand-point-up ri-bar-chart-fill card--icon stat--icon"></i>{{$percentage_japanese}}%</span>
                    <span><i class="fa-solid fa-minus ri-arrow-up-s-fill card--icon up--arrow"></i>{{$subtraction_japanese}}</span>
                    <span><i class="fa-solid fa-plus card--icon down--arrow"></i>{{$sum_japanese}}</span>
                </div>
            </div>
            <div class="card card-3">
                <div class="card--data">
                    <div class="card--content">
                        <h5 class="card--title">Total Component</h5>
                        <h1>{{$sum_component}}</h1>
                    </div>
                    <i class="fa-solid fa-book ri-calendar-2-line card--icon--lg"></i>
                </div>
                <div class="card--stats">
                    <span><i class="fa-solid fa-hand-point-up ri-bar-chart-fill card--icon stat--icon"></i>{{$percentage_japanese}}%</span>
                    <span><i class="fa-solid fa-minus ri-arrow-up-s-fill card--icon up--arrow"></i>{{$subtraction_japanese}}</span>
                    <span><i class="fa-solid fa-plus card--icon down--arrow"></i>{{$sum_japanese}}</span>
                </div>
            </div>
            <div class="card card-4">
                <div class="card--data">
                    <div class="card--content">
                        <h5 class="card--title">English</h5>
                        <h1>{{$sum_english}}</h1>
                    </div>
                    <i class="fa-solid fa-book ri-calendar-2-line card--icon--lg"></i>
                </div>
                <div class="card--stats">
                    <span><i class="fa-solid fa-hand-point-up ri-bar-chart-fill card--icon stat--icon"></i>{{$percentage_english}}%</span>
                    <span><i class="fa-solid fa-minus ri-arrow-up-s-fill card--icon up--arrow"></i>{{$subtraction_english}}</span>
                    <span><i class="fa-solid fa-plus card--icon down--arrow"></i>{{$sum_english}}</span>
                </div>
            </div>
            <div class="card card-5">
                <div class="card--data">
                    <div class="card--content">
                        <h5 class="card--title">Component</h5>
                        <h1>{{$sum_component}}</h1>
                    </div>
                    <i class="fa-solid fa-gem ri-calendar-2-line card--icon--lg"></i>
                </div>
                <div class="card--stats">
                    <span><i class="fa-solid fa-hand-point-up ri-bar-chart-fill card--icon stat--icon"></i>{{$percentage_component}}65%</span>
                    <span><i class="fa-solid fa-minus ri-arrow-up-s-fill card--icon up--arrow"></i>{{$subtraction_component}}</span>
                    <span><i class="fa-solid fa-plus card--icon down--arrow"></i>{{$sum_component}}</span>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="cod-dashboard-6">
    <div class="ideaUser">
        <div class="ideaUserForm">
            <form action="{{ route('idea.store') }}" method="POST">
            @csrf
                <input type="text" name="comment" placeholder="Hãy cho tôi xin ý kiến....">
                @if (Auth::check())
                    <input type="hidden" name="user_id" value="{{ Auth::user()->id }}"/>
                @endif
                <button type="submit">send</button>
            </form>
        </div>
        <div class="content-idea-user">
            @foreach($ideas as $idea)
            <div class="comment-idea-user">
                <blockquote>
                    “{{$idea->comment}}”
                    <span class="author">- {{$idea->user->full_name}}</span>
                </blockquote>
            </div>  
           @endforeach
        </div>    
    </div>
    <div id="wrapper">
        <div id="chart"></div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
<script>
	document.addEventListener('DOMContentLoaded', function() {
    fetch('/monthly-costs')
        .then(response => response.json())
        .then(data => {
            console.log(data); // Kiểm tra cấu trúc của dữ liệu
            if (Array.isArray(data)) {
                const months = ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"];
                const seriesData = new Array(12).fill(0);

                data.forEach(item => {
                    seriesData[item.month - 1] = item.totalSpending;
                });

                var options = {
                    chart: {
                        type: 'bar',
                        height: 350
                    },
                    series: [{
                        name: 'Expenses',
                        data: seriesData
                    }],
                    xaxis: {
                        categories: months
                    }
                };

                var chart = new ApexCharts(document.querySelector("#chart"), options);
                chart.render();
            } else {
                console.error("Phản hồi không phải là một mảng:", data);
            }
        })
        .catch(error => console.error("Lỗi khi gọi API:", error));
    });
</script>
@endsection