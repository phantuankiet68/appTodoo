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
        <div class="chart2">
            <div class="header">
                <h2>Projects</h2>
                <div class="status">
                    30 done this month
                </div>
                <div class="options">
                    <i class="fas fa-ellipsis-h"></i>
                </div>
            </div>
            <div class="dashboard-table">
                <table class="table">
                    <thead>
                        <tr>
                            <th>COMPANIES</th>
                            <th>MEMBERS</th>
                            <th>BUDGET</th>
                            <th>COMPLETION</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="project-name">
                                <img alt="Company logo" height="20" src="https://storage.googleapis.com/a1aa/image/qmuKw41GQXIeQyGEDCwHdp6pTnGccYUa1Y7iKgMyHXauMrfTA.jpg" width="20"/>
                                Soft UI XD Version
                            </td>
                            <td class="members">
                                <img alt="Member 1" height="30" src="https://storage.googleapis.com/a1aa/image/DvfqH5lGEsRDTKRTXEfc3Ave5y02ob6eeJvTndDSkpVyLz6fE.jpg" width="30"/>
                                <img alt="Member 2" height="30" src="https://storage.googleapis.com/a1aa/image/t62etIOhyD2bAKG0Y4jPWo4MfWuqUVb0K7Tv0jm7GzhYZWfnA.jpg" width="30"/>
                                <img alt="Member 3" height="30" src="https://storage.googleapis.com/a1aa/image/P2MjJXejbKT9YSgoB0qTqz6ewh0TgBotG2wI3hfE1gZAzsePB.jpg" width="30"/>
                                <img alt="Member 4" height="30" src="https://storage.googleapis.com/a1aa/image/EXE54NvtOcYnCBNqJybdJ1On7yzJSfXTMrwrSBZ43SNtMrfTA.jpg" width="30"/>
                            </td>
                            <td>
                                $14,000
                            </td>
                            <td>
                                <div class="progress-bar">
                                <div class="progress progress-60">
                                </div>
                                <div class="progress-text">60%</div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="project-name">
                                <img alt="Company logo" height="20" src="https://storage.googleapis.com/a1aa/image/qmuKw41GQXIeQyGEDCwHdp6pTnGccYUa1Y7iKgMyHXauMrfTA.jpg" width="20"/>
                                Add Progress Track
                            </td>
                            <td class="members">
                                <img alt="Member 1" height="30" src="https://storage.googleapis.com/a1aa/image/DvfqH5lGEsRDTKRTXEfc3Ave5y02ob6eeJvTndDSkpVyLz6fE.jpg" width="30"/>
                                <img alt="Member 2" height="30" src="https://storage.googleapis.com/a1aa/image/t62etIOhyD2bAKG0Y4jPWo4MfWuqUVb0K7Tv0jm7GzhYZWfnA.jpg" width="30"/>
                                <img alt="Member 3" height="30" src="https://storage.googleapis.com/a1aa/image/P2MjJXejbKT9YSgoB0qTqz6ewh0TgBotG2wI3hfE1gZAzsePB.jpg" width="30"/>
                            </td>
                            <td>
                                $3,000
                            </td>
                            <td>
                                <div class="progress-bar">
                                <div class="progress progress-10">
                                </div>
                                <div class="progress-text">10%</div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="project-name">
                                <img alt="Company logo" height="20" src="https://storage.googleapis.com/a1aa/image/qmuKw41GQXIeQyGEDCwHdp6pTnGccYUa1Y7iKgMyHXauMrfTA.jpg" width="20"/>
                                Fix Platform Errors
                            </td>
                            <td class="members">
                                <img alt="Member 1" height="30" src="https://storage.googleapis.com/a1aa/image/DvfqH5lGEsRDTKRTXEfc3Ave5y02ob6eeJvTndDSkpVyLz6fE.jpg" width="30"/>
                                <img alt="Member 2" height="30" src="https://storage.googleapis.com/a1aa/image/t62etIOhyD2bAKG0Y4jPWo4MfWuqUVb0K7Tv0jm7GzhYZWfnA.jpg" width="30"/>
                                <img alt="Member 3" height="30" src="https://storage.googleapis.com/a1aa/image/P2MjJXejbKT9YSgoB0qTqz6ewh0TgBotG2wI3hfE1gZAzsePB.jpg" width="30"/>
                            </td>
                            <td>
                                Not set
                            </td>
                            <td>
                                <div class="progress-bar">
                                <div class="progress progress-100">
                                </div>
                                <div class="progress-text">100%</div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="project-name">
                                <img alt="Company logo" height="20" src="https://storage.googleapis.com/a1aa/image/qmuKw41GQXIeQyGEDCwHdp6pTnGccYUa1Y7iKgMyHXauMrfTA.jpg" width="20"/>
                                Launch our Mobile App
                            </td>
                            <td class="members">
                                <img alt="Member 1" height="30" src="https://storage.googleapis.com/a1aa/image/DvfqH5lGEsRDTKRTXEfc3Ave5y02ob6eeJvTndDSkpVyLz6fE.jpg" width="30"/>
                                <img alt="Member 2" height="30" src="https://storage.googleapis.com/a1aa/image/t62etIOhyD2bAKG0Y4jPWo4MfWuqUVb0K7Tv0jm7GzhYZWfnA.jpg" width="30"/>
                                <img alt="Member 3" height="30" src="https://storage.googleapis.com/a1aa/image/P2MjJXejbKT9YSgoB0qTqz6ewh0TgBotG2wI3hfE1gZAzsePB.jpg" width="30"/>
                                <img alt="Member 4" height="30" src="https://storage.googleapis.com/a1aa/image/EXE54NvtOcYnCBNqJybdJ1On7yzJSfXTMrwrSBZ43SNtMrfTA.jpg" width="30"/>
                            </td>
                            <td>
                                $20,500
                            </td>
                            <td>
                                <div class="progress-bar">
                                <div class="progress progress-100">
                                </div>
                                <div class="progress-text">100%</div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="project-name">
                                <img alt="Company logo" height="20" src="https://storage.googleapis.com/a1aa/image/qmuKw41GQXIeQyGEDCwHdp6pTnGccYUa1Y7iKgMyHXauMrfTA.jpg" width="20"/>
                                Add the New Pricing Page
                            </td>
                            <td class="members">
                                <img alt="Member 1" height="30" src="https://storage.googleapis.com/a1aa/image/DvfqH5lGEsRDTKRTXEfc3Ave5y02ob6eeJvTndDSkpVyLz6fE.jpg" width="30"/>
                            </td>
                            <td>
                                $500
                            </td>
                            <td>
                                <div class="progress-bar">
                                <div class="progress progress-25">
                                </div>
                                <div class="progress-text">25%</div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="project-name">
                                <img alt="Company logo" height="20" src="https://storage.googleapis.com/a1aa/image/qmuKw41GQXIeQyGEDCwHdp6pTnGccYUa1Y7iKgMyHXauMrfTA.jpg" width="20"/>
                                Redesign New Online Shop
                            </td>
                            <td class="members">
                                <img alt="Member 1" height="30" src="https://storage.googleapis.com/a1aa/image/DvfqH5lGEsRDTKRTXEfc3Ave5y02ob6eeJvTndDSkpVyLz6fE.jpg" width="30"/>
                                <img alt="Member 2" height="30" src="https://storage.googleapis.com/a1aa/image/t62etIOhyD2bAKG0Y4jPWo4MfWuqUVb0K7Tv0jm7GzhYZWfnA.jpg" width="30"/>
                                <img alt="Member 3" height="30" src="https://storage.googleapis.com/a1aa/image/P2MjJXejbKT9YSgoB0qTqz6ewh0TgBotG2wI3hfE1gZAzsePB.jpg" width="30"/>
                            </td>
                            <td>
                                $2,000
                            </td>
                            <td>
                                <div class="progress-bar">
                                <div class="progress progress-40">
                                </div>
                                <div class="progress-text">40%</div>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>      
            </div>
        </div>
        <div id="wrapper" class="chart-one">
            <div class="chart-container">
                <div class="chart-title">Products</div>
                <div class="legend">
                    <div class="legend-item">
                        <div class="legend-color legend-furniture"></div>
                        <div>Furniture</div>
                    </div>
                    <div class="legend-item">
                        <div class="legend-color legend-office-supplies"></div>
                        <div>Office Supplies</div>
                    </div>
                    <div class="legend-item">
                        <div class="legend-color legend-technology"></div>
                        <div>Technology</div>
                    </div>
                </div>
                <canvas id="salesChart"></canvas>
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
<script>
    const ctx = document.getElementById('salesChart').getContext('2d');
    const salesChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['HTML/CSS', 'javaScript', 'ReactJS', 'VueJs', 'TypeScript', 'Angular', 'Figma', 'Photoshop', 'VR', 'Laravel/Php', 'NodeJs', 'C#', 'Ipad', 'Phones'],
            datasets: [
                {
                    label: 'Remote',
                    data: [500, 200, 128, 200, 290, 100, 1000, 50, 900, 2000, 1800, 0, 2000, 1000],
                    backgroundColor: '#4e8cff',
                    barThickness: 10
                },
                {
                    label: 'Out Source',
                    data: [200, 300, 100, 190, 127, 260, 580, 26, 1200, 1800, 200, 0, 1000, 2000],
                    backgroundColor: '#3ce7d0',
                    barThickness: 10
                },
                {
                    label: 'Technology',
                    data: [300, 200, 280, 260, 280, 320, 360, 182, 260, 1000, 180, 3000, 2500, 120],
                    backgroundColor: '#ffb84e',
                    barThickness: 10
                }
            ]
        },
        options: {
            responsive: true,
            scales: {
                x: {
                    stacked: true,
                    grid: {
                        display: false
                    }
                },
                y: {
                    stacked: true,
                    grid: {
                        color: '#555'
                    },
                    ticks: {
                        callback: function(value) {
                            return '$' + value + 'K';
                        }
                    }
                },
            },
            plugins: {
                legend: {
                    display: false
                }
            }
        }
    });
    const ctxT = document.getElementById('reportChart').getContext('2d');
    const data = {
        datasets: [
            {
                data: [100, 100],
                backgroundColor: ['#00d1b2', '#e0e0e0'],
                hoverBackgroundColor: ['#00d1b2', '#e0e0e0'],
                borderWidth: 0,
                cutout: '80%'
            },
            {
                data: [80, 120],
                backgroundColor: ['#00e5b2', '#e0e0e0'],
                hoverBackgroundColor: ['#00e5b2', '#e0e0e0'],
                borderWidth: 0,
                cutout: '60%'
            },
            {
                data: [69, 131],
                backgroundColor: ['#b2f5ea', '#e0e0e0'],
                hoverBackgroundColor: ['#b2f5ea', '#e0e0e0'],
                borderWidth: 0,
                cutout: '40%'
            }
        ]
    };

    const options = {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
            legend: {
                display: false
            },
            tooltip: {
                enabled: false
            }
        }
    };

    new Chart(ctxT, {
        type: 'doughnut',
        data: data,
        options: options
    });

</script>
@endsection