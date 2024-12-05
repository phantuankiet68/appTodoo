@extends('app')

@section('title', 'Admin')

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
            <div class="card card-3">
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

<div class="cod-dashboard-8">
    <div class="overview-three">
        <div id="wrapper" class="chart-one">
            <div id="chart"></div>
        </div>
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
    </div>
    <div class="overview-two">
        <div class="chart2">
            <div id="chart-timeline"></div>
        </div>
        <div class="chart1">
            <div class="legend-container">
                <div class="legend-item"><span class="legend-color" style="background-color: #008FFB;"></span>Admin</div>
                <div class="legend-item"><span class="legend-color" style="background-color: #00E396;"></span>User</div>
                <div class="legend-item"><span class="legend-color" style="background-color: #FEB019;"></span>Custom</div>
            </div>
            <div id="chart1"></div>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
<script>
    
     var options = {
        series: [44, 55, 13],
        chart: {
            type: 'pie',
            height: 270
        },
        labels: ['Admin', 'User', 'Student'],
        legend: {
            show: false
        },
        colors: ['#008FFB', '#00E396', '#FEB019', '#FF4560'],
        responsive: [{
            breakpoint: 480,
            options: {
                chart: {
                    width: 300
                },
                legend: {
                    position: 'bottom'
                }
            }
        }]
    };

    var chart = new ApexCharts(document.querySelector("#chart1"), options);
    chart.render();

    var options = {
          series: [{
          data: [
            [1327359600000,30.95],
            [1327446000000,31.34],
            [1327532400000,31.18],
            [1327618800000,31.05],
            [1327878000000,31.00],
            [1327964400000,30.95],
            [1328050800000,31.24],
            [1328137200000,31.29],
            [1328223600000,31.85],
            [1328482800000,31.86],
            [1328569200000,32.28],
            [1328655600000,32.10],
            [1328742000000,32.65],
            [1328828400000,32.21],
            [1329087600000,32.35],
            [1329174000000,32.44],
            [1329260400000,32.46],
            [1329346800000,32.86],
            [1329433200000,32.75],
            [1329778800000,32.54],
            [1329865200000,32.33],
            [1329951600000,32.97],
            [1330038000000,33.41],
            [1330297200000,33.27],
            [1330383600000,33.27],
            [1330470000000,32.89],
            [1330556400000,33.10],
            [1330642800000,33.73],
            [1330902000000,33.22],
            [1330988400000,31.99],
            [1331074800000,32.41],
            [1331161200000,33.05],
            [1331247600000,33.64],
            [1331506800000,33.56],
            [1331593200000,34.22],
            [1331679600000,33.77],
            [1331766000000,34.17],
            [1331852400000,33.82],
            [1332111600000,34.51],
            [1332198000000,33.16],
            [1332284400000,33.56],
            [1332370800000,33.71],
            [1332457200000,33.81],
            [1332712800000,34.40],
            [1332799200000,34.63],
            [1332885600000,34.46],
            [1332972000000,34.48],
            [1333058400000,34.31],
            [1333317600000,34.70],
            [1333404000000,34.31],
            [1333490400000,33.46],
            [1333576800000,33.59],
            [1333922400000,33.22],
            [1334008800000,32.61],
            [1334095200000,33.01],
            [1334181600000,33.55],
            [1334268000000,33.18],
            [1334527200000,32.84],
            [1334613600000,33.84],
          ]
        }],
          chart: {
          id: 'area-datetime',
          type: 'area',
          height: 320,
          zoom: {
            autoScaleYaxis: true
          }
        },
        annotations: {
          yaxis: [{
            y: 30,
            borderColor: '#999',
            label: {
              show: true,
              text: 'Support',
              style: {
                color: "#fff",
                background: '#00E396'
              }
            }
          }],
          xaxis: [{
            x: new Date('14 Nov 2012').getTime(),
            borderColor: '#999',
            yAxisIndex: 0,
            label: {
              show: true,
              text: 'Rally',
              style: {
                color: "#fff",
                background: '#775DD0'
              }
            }
          }]
        },
        dataLabels: {
          enabled: false
        },
        markers: {
          size: 0,
          style: 'hollow',
        },
        xaxis: {
          type: 'datetime',
          min: new Date('01 Mar 2012').getTime(),
          tickAmount: 6,
        },
        tooltip: {
          x: {
            format: 'dd MMM yyyy'
          }
        },
        fill: {
          type: 'gradient',
          gradient: {
            shadeIntensity: 1,
            opacityFrom: 0.7,
            opacityTo: 0.9,
            stops: [0, 100]
          }
        },
        };

        var chart = new ApexCharts(document.querySelector("#chart-timeline"), options);
        chart.render();
      
      
        var resetCssClasses = function(activeEl) {
        var els = document.querySelectorAll('button')
        Array.prototype.forEach.call(els, function(el) {
          el.classList.remove('active')
        })
      
        activeEl.target.classList.add('active')
      }
      
      function generateMinuteWiseTimeSeries(startDate, endDate, interval) {
        // Logic để tạo dãy thời gian theo phút
        var times = [];
        for (var time = startDate; time <= endDate; time.setMinutes(time.getMinutes() + interval)) {
            times.push(new Date(time));
        }
        return times;
    }


	document.addEventListener('DOMContentLoaded', function() {
    fetch('/monthly-costs')
        .then(response => response.json())
        .then(data => {
            if (Array.isArray(data)) {
                const months = ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"];
                const seriesData = new Array(12).fill(0);

                data.forEach(item => {
                    seriesData[item.month - 1] = item.totalSpending;
                });

                var options = {
                    chart: {
                        type: 'bar',
                        height: 280,
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