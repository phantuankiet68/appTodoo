@extends('app')

@section('title', 'Home Page')

@section('content')
<div class="cod-dashboard-2">
    <div class="overview">
        <div class="title">
            <h2 class="section--title">Overview</h2>
            <select name="date" id="date" class="select-dropdown">
                <option value="today">Today</option>
                <option value="lastweek">Last Week</option>
                <option value="lastmonth">Last Month</option>
                <option value="lastyear">Last Year</option>
                <option value="alltime">All Time</option>
            </select>
        </div>
        <div class="cards">
            <div class="card card-1">
                <div class="card--data">
                    <div class="card--content">
                        <h5 class="card--title">Total User</h5>
                        <h1>152</h1>
                    </div>
                    <i class="fa-solid fa-user ri-user-2-line card--icon--lg"></i>
                </div>
                <div class="card--stats">
                    <span><i class="fa-solid fa-hand-point-up ri-bar-chart-fill card--icon stat--icon"></i>65%</span>
                    <span><i class="fa-solid fa-minus ri-arrow-up-s-fill card--icon up--arrow"></i>10</span>
                    <span><i class="fa-solid fa-minus ri-arrow-down-s-fill card--icon down--arrow"></i>2</span>
                </div>
            </div>
            <div class="card card-2">
                <div class="card--data">
                    <div class="card--content">
                        <h5 class="card--title">Total Patients</h5>
                        <h1>1145</h1>
                    </div>
                    <i class="fa-solid fa-window-maximize ri-user-line card--icon--lg"></i>
                </div>
                <div class="card--stats">
                    <span><i class="fa-solid fa-hand-point-up ri-bar-chart-fill card--icon stat--icon"></i>65%</span>
                    <span><i class="fa-solid fa-minus ri-arrow-up-s-fill card--icon up--arrow"></i>10</span>
                    <span><i class="fa-solid fa-minus ri-arrow-down-s-fill card--icon down--arrow"></i>2</span>
                </div>
            </div>
            <div class="card card-3">
                <div class="card--data">
                    <div class="card--content">
                        <h5 class="card--title">Japanese</h5>
                        <h1>102</h1>
                    </div>
                    <i class="fa-solid fa-book ri-calendar-2-line card--icon--lg"></i>
                </div>
                <div class="card--stats">
                    <span><i class="fa-solid fa-hand-point-up ri-bar-chart-fill card--icon stat--icon"></i>65%</span>
                    <span><i class="fa-solid fa-minus ri-arrow-up-s-fill card--icon up--arrow"></i>10</span>
                    <span><i class="fa-solid fa-minus ri-arrow-down-s-fill card--icon down--arrow"></i>2</span>
                </div>
            </div>
            <div class="card card-4">
                <div class="card--data">
                    <div class="card--content">
                        <h5 class="card--title">English</h5>
                        <h1>15</h1>
                    </div>
                    <i class="fa-solid fa-book ri-calendar-2-line card--icon--lg"></i>
                </div>
                <div class="card--stats">
                    <span><i class="fa-solid fa-hand-point-up ri-bar-chart-fill card--icon stat--icon"></i>65%</span>
                    <span><i class="fa-solid fa-minus ri-arrow-up-s-fill card--icon up--arrow"></i>10</span>
                    <span><i class="fa-solid fa-minus ri-arrow-down-s-fill card--icon down--arrow"></i>2</span>
                </div>
            </div>
            <div class="card card-5">
                <div class="card--data">
                    <div class="card--content">
                        <h5 class="card--title">Component</h5>
                        <h1>15</h1>
                    </div>
                    <i class="fa-solid fa-gem ri-calendar-2-line card--icon--lg"></i>
                </div>
                <div class="card--stats">
                    <span><i class="fa-solid fa-hand-point-up ri-bar-chart-fill card--icon stat--icon"></i>65%</span>
                    <span><i class="fa-solid fa-minus ri-arrow-up-s-fill card--icon up--arrow"></i>10</span>
                    <span><i class="fa-solid fa-minus ri-arrow-down-s-fill card--icon down--arrow"></i>2</span>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="cod-dashboard-8">
    <div class="Users">
        <div class="title">
            <h2 class="section--title">Users</h2>
            <div class="Users--right--btns">
                <select name="date" id="date" class="select-dropdown doctor--filter">
                    <option >Filter</option>
                    <option value="free">Admin</option>
                    <option value="scheduled">Users</option>
                </select>
                <button class="add"><i class="ri-add-line"></i>Add User</button>
            </div>
        </div>
        <div class="Users--cards">
            <a href="#" class="doctor--card">
                <div class="img--box--cover">
                    <div class="img--box">
                        <img src="assets/images/user1.jpg" alt="">
                    </div>
                </div>
                <p class="free">Kiet</p>
            </a>
            <a href="#" class="doctor--card">
                <div class="img--box--cover">
                    <div class="img--box">
                        <img src="assets/images/user2.jpg" alt="">
                    </div>
                </div>
                <p class="scheduled">pendy</p>
            </a>
            <a href="#" class="doctor--card">
                <div class="img--box--cover">
                    <div class="img--box">
                        <img src="assets/images/user3.jpg" alt="">
                    </div>
                </div>
                <p class="scheduled">Hoson</p>
            </a>
            <a href="#" class="doctor--card">
                <div class="img--box--cover">
                    <div class="img--box">
                        <img src="assets/images/user4.jpg" alt="">
                    </div>
                </div>
                <p class="free">barac</p>
            </a>
            <a href="#" class="doctor--card">
                <div class="img--box--cover">
                    <div class="img--box">
                        <img src="assets/images/user5.jpg" alt="">
                    </div>
                </div>
                <p class="scheduled">Hopphy</p>
            </a>
            <a href="#" class="doctor--card">
                <div class="img--box--cover">
                    <div class="img--box">
                        <img src="assets/images/user6.jpg" alt="">
                    </div>
                </div>
                <p class="free">Nowsa</p>
            </a>
            <a href="#" class="doctor--card">
                <div class="img--box--cover">
                    <div class="img--box">
                        <img src="assets/images/user7.jpg" alt="">
                    </div>
                </div>
                <p class="scheduled">Cousn</p>
            </a>
            <a href="#" class="doctor--card">
                <div class="img--box--cover">
                    <div class="img--box">
                        <img src="assets/images/user7.jpg" alt="">
                    </div>
                </div>
                <p class="scheduled">quasd</p>
            </a>
            <a href="#" class="doctor--card">
                <div class="img--box--cover">
                    <div class="img--box">
                        <img src="assets/images/user7.jpg" alt="">
                    </div>
                </div>
                <p class="scheduled">Thuan</p>
            </a>
        </div>
    </div>
    <div class="cod-dashboard-box">
        <div class="chart-container">
            <h2 class="section--title">Chart</h2>
            <canvas id="myChart" width="600" height="260"></canvas>
            <canvas id="heartRateChart" width="600" height="260"></canvas>
        </div>
        <div class="user-content">
            <div class="recent--patients">
                <div class="table">
                    <table>
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Date in</th>
                                <th>Gender</th>
                                <th>Age</th>
                                <th>Status</th>
                                <th>Settings</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Cameron Williamson</td>
                                <td>30/07/2022</td>
                                <td>Male</td>
                                <td>61kg</td>
                                <td class="pending">pending</td>
                                <td><span><i class="ri-edit-line edit"></i><i class="ri-delete-bin-line delete"></i></span></td>
                            </tr>
                            <tr>
                                <td>George Washington</td>
                                <td>30/07/2022</td>
                                <td>Male</td>
                                <td>54kg</td>
                                <td class="confirmed">Confirmed</td>
                                <td><span><i class="ri-edit-line edit"></i><i class="ri-delete-bin-line delete"></i></span></td>
                            </tr>
                            <tr>
                                <td>John Adams</td>
                                <td>29/07/2022</td>
                                <td>Male</td>
                                <td>56kg</td>
                                <td class="confirmed">Confirmed</td>
                                <td><span><i class="ri-edit-line edit"></i><i class="ri-delete-bin-line delete"></i></span></td>
                            </tr>
                            <tr>
                                <td>Thomas Jefferson</td>
                                <td>29/07/2022</td>
                                <td>Male</td>
                                <td>11kg</td>
                                <td class="rejected">Rejected</td>
                                <td><span><i class="ri-edit-line edit"></i><i class="ri-delete-bin-line delete"></i></span></td>
                            </tr>
                            <tr>
                                <td>James Madison</td>
                                <td>29/07/2022</td>
                                <td>Male</td>
                                <td>69kg</td>
                                <td class="confirmed">Confirmed</td>
                                <td><span><i class="ri-edit-line edit"></i><i class="ri-delete-bin-line delete"></i></span></td>
                            </tr>
                            <tr>
                                <td>Andrew Jackson</td>
                                <td>28/07/2022</td>
                                <td>Male</td>
                                <td>88kg</td>
                                <td class="confirmed">Confirmed</td>
                                <td><span><i class="ri-edit-line edit"></i><i class="ri-delete-bin-line delete"></i></span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection