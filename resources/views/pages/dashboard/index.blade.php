@extends('page')
@section('title', 'Home Page')
@section('content')

<div class="dashboard">
    <div class="dashboard-left">
        <div class="list-card">
            <div class="list-card-column">
                <div class="list-card-column-box">
                    <div class="header-card-box">
                        <span>Total Note</span>
                        <p><i class="fa-solid fa-note-sticky"></i></p>
                    </div>
                    <h2>25</h2>
                    <div class="footer-card-box">
                        <span><i class="fa-solid fa-hand-point-up ri-bar-chart-fill card--icon stat--icon"></i>5.5%</span>
                        <span><i class="fa-solid fa-minus ri-arrow-up-s-fill card--icon up--arrow"></i>189</span>
                        <span><i class="fa-solid fa-plus card--icon down--arrow"></i>11</span>
                    </div>
                </div>
                <div class="list-card-column-box">
                    <div class="header-card-box">
                        <span>Total Friend</span>
                        <p><i class="fa-solid fa-user-group"></i></p>
                    </div>
                    <h2>25</h2>
                    <div class="footer-card-box">
                        <span><i class="fa-solid fa-hand-point-up ri-bar-chart-fill card--icon stat--icon"></i>5.5%</span>
                        <span><i class="fa-solid fa-minus ri-arrow-up-s-fill card--icon up--arrow"></i>189</span>
                        <span><i class="fa-solid fa-plus card--icon down--arrow"></i>11</span>
                    </div>
                </div>
                <div class="list-card-column-box">
                    <div class="header-card-box">
                        <span>Total Chi tiêu</span>
                        <p><i class="fa-solid fa-chart-gantt"></i></p>
                    </div>
                    <h2>25</h2>
                    <div class="footer-card-box">
                        <span><i class="fa-solid fa-hand-point-up ri-bar-chart-fill card--icon stat--icon"></i>5.5%</span>
                        <span><i class="fa-solid fa-minus ri-arrow-up-s-fill card--icon up--arrow"></i>189</span>
                        <span><i class="fa-solid fa-plus card--icon down--arrow"></i>11</span>
                    </div>
                </div>
                <div class="list-card-column-box">
                    <div class="header-card-box">
                        <span>Total Lương</span>
                        <p><i class="fa-solid fa-money-bill-trend-up"></i></p>
                    </div>
                    <h2>25</h2>
                    <div class="footer-card-box">
                        <span><i class="fa-solid fa-hand-point-up ri-bar-chart-fill card--icon stat--icon"></i>5.5%</span>
                        <span><i class="fa-solid fa-minus ri-arrow-up-s-fill card--icon up--arrow"></i>189</span>
                        <span><i class="fa-solid fa-plus card--icon down--arrow"></i>11</span>
                    </div>
                </div>
                <div class="list-card-column-box">
                    <div class="header-card-box">
                        <span>Total Dự án</span>
                        <p><i class="fa-solid fa-list"></i></p>
                    </div>
                    <h2>25</h2>
                    <div class="footer-card-box">
                        <span><i class="fa-solid fa-hand-point-up ri-bar-chart-fill card--icon stat--icon"></i>5.5%</span>
                        <span><i class="fa-solid fa-minus ri-arrow-up-s-fill card--icon up--arrow"></i>189</span>
                        <span><i class="fa-solid fa-plus card--icon down--arrow"></i>11</span>
                    </div>
                </div>
                <div class="list-card-column-box">
                    <div class="header-card-box">
                        <span>Total Issue</span>
                        <p><i class="fa-solid fa-chalkboard"></i></p>
                    </div>
                    <h2>25</h2>
                    <div class="footer-card-box">
                        <span><i class="fa-solid fa-hand-point-up ri-bar-chart-fill card--icon stat--icon"></i>5.5%</span>
                        <span><i class="fa-solid fa-minus ri-arrow-up-s-fill card--icon up--arrow"></i>189</span>
                        <span><i class="fa-solid fa-plus card--icon down--arrow"></i>11</span>
                    </div>
                </div>
                <div class="list-card-column-box">
                    <div class="header-card-box">
                        <span>Total English</span>
                        <p><i class="fa-solid fa-note-sticky"></i></p>
                    </div>
                    <h2>25</h2>
                    <div class="footer-card-box">
                        <span><i class="fa-solid fa-hand-point-up ri-bar-chart-fill card--icon stat--icon"></i>5.5%</span>
                        <span><i class="fa-solid fa-minus ri-arrow-up-s-fill card--icon up--arrow"></i>189</span>
                        <span><i class="fa-solid fa-plus card--icon down--arrow"></i>11</span>
                    </div>
                </div>
                <div class="list-card-column-box">
                    <div class="header-card-box">
                        <span>Total Japanese</span>
                        <p><i class="fa-solid fa-note-sticky"></i></p>
                    </div>
                    <h2>25</h2>
                    <div class="footer-card-box">
                        <span><i class="fa-solid fa-hand-point-up ri-bar-chart-fill card--icon stat--icon"></i>5.5%</span>
                        <span><i class="fa-solid fa-minus ri-arrow-up-s-fill card--icon up--arrow"></i>189</span>
                        <span><i class="fa-solid fa-plus card--icon down--arrow"></i>11</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="dashboard-left-column">
            <div class="dashboard-left-column-card">
                <div class="dashboard-left-column-card-item">
                    <p>Thời gian hoạt động</p>
                    <p class="total-table">Tổng: 48 giờ</p>
                </div>
                <div class="dashboard-left-column-card-table">
                    <div class="header-table">
                        <p>STT</p>
                        <p>Ngày pam gia</p>
                        <p>Bắt đầu</p>
                        <p>Kết thúc</p>
                        <p>Tổng giờ</p>
                    </div>
                    <div class="body-table-scroll">
                        <div class="body-table">
                            <p class="stt">01</p>
                            <p class="date">01-03-2025</p>
                            <p>8:00:00</p>
                            <p>16:00:00</p>
                            <p class="time">8:00</p>
                        </div>
                        <div class="body-table">
                            <p class="stt">01</p>
                            <p class="date">01-03-2025</p>
                            <p>8:00:00</p>
                            <p>16:00:00</p>
                            <p class="time">8:00</p>
                        </div>
                        <div class="body-table">
                            <p class="stt">01</p>
                            <p class="date">01-03-2025</p>
                            <p>8:00:00</p>
                            <p>16:00:00</p>
                            <p class="time">8:00</p>
                        </div>
                        <div class="body-table">
                            <p class="stt">01</p>
                            <p class="date">01-03-2025</p>
                            <p>8:00:00</p>
                            <p>16:00:00</p>
                            <p class="time">8:00</p>
                        </div>
                        <div class="body-table">
                            <p class="stt">01</p>
                            <p class="date">01-03-2025</p>
                            <p>8:00:00</p>
                            <p>16:00:00</p>
                            <p class="time">8:00</p>
                        </div>
                        <div class="body-table">
                            <p class="stt">01</p>
                            <p class="date">01-03-2025</p>
                            <p>8:00:00</p>
                            <p>16:00:00</p>
                            <p class="time">8:00</p>
                        </div>
                        <div class="body-table">
                            <p class="stt">01</p>
                            <p class="date">01-03-2025</p>
                            <p>8:00:00</p>
                            <p>16:00:00</p>
                            <p class="time">8:00</p>
                        </div>
                        <div class="body-table">
                            <p class="stt">01</p>
                            <p class="date">01-03-2025</p>
                            <p>8:00:00</p>
                            <p>16:00:00</p>
                            <p class="time">8:00</p>
                        </div>
                        <div class="body-table">
                            <p class="stt">01</p>
                            <p class="date">01-03-2025</p>
                            <p>8:00:00</p>
                            <p>16:00:00</p>
                            <p class="time">8:00</p>
                        </div>
                        <div class="body-table">
                            <p class="stt">01</p>
                            <p class="date">01-03-2025</p>
                            <p>8:00:00</p>
                            <p>16:00:00</p>
                            <p class="time">8:00</p>
                        </div>

                        
                    </div>
                </div>
            </div>
            <div class="dashboard-left-column-card">
                <div class="dashboard-left-column-card-item">
                    <p>Thời gian hoạt động</p>
                    <p class="total-table">Tổng: 48 giờ</p>
                </div>
                <div class="dashboard-left-column-card-table">
                    <div class="header-table">
                        <p>STT</p>
                        <p>Ngày pam gia</p>
                        <p>Nhiệm vụ</p>
                        <p>Hoàn thành</p>
                        <p>Tổng giờ</p>
                    </div>
                    <div class="body-table-scroll">
                        <div class="body-table">
                            <p class="stt">01</p>
                            <p class="date">01-03-2025</p>
                            <p>ES-KVN_145</p>
                            <p>chưa</p>
                            <p class="time">8:00</p>
                        </div>
                        <div class="body-table">
                            <p class="stt">01</p>
                            <p class="date">01-03-2025</p>
                            <p>ES-KVN_145</p>
                            <p>chưa</p>
                            <p class="time">8:00</p>
                        </div>
                        <div class="body-table">
                            <p class="stt">01</p>
                            <p class="date">01-03-2025</p>
                            <p>ES-KVN_145</p>
                            <p>chưa</p>
                            <p class="time">8:00</p>
                        </div>
                        <div class="body-table">
                            <p class="stt">01</p>
                            <p class="date">01-03-2025</p>
                            <p>ES-KVN_145</p>
                            <p>chưa</p>
                            <p class="time">8:00</p>
                        </div>
                        <div class="body-table">
                            <p class="stt">01</p>
                            <p class="date">01-03-2025</p>
                            <p>ES-KVN_145</p>
                            <p>chưa</p>
                            <p class="time">8:00</p>
                        </div>
                        <div class="body-table">
                            <p class="stt">01</p>
                            <p class="date">01-03-2025</p>
                            <p>ES-KVN_145</p>
                            <p>chưa</p>
                            <p class="time">8:00</p>
                        </div>
                        <div class="body-table">
                            <p class="stt">01</p>
                            <p class="date">01-03-2025</p>
                            <p>ES-KVN_145</p>
                            <p>chưa</p>
                            <p class="time">8:00</p>
                        </div>
                        <div class="body-table">
                            <p class="stt">01</p>
                            <p class="date">01-03-2025</p>
                            <p>ES-KVN_145</p>
                            <p>chưa</p>
                            <p class="time">8:00</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="dashboard-right">
        <div class="dashboard-right-column-card">
            <div class="dashboard-left-column-card-item">
                <p>Thời gian hoạt động</p>
                <p class="total-table">Tổng: 48 giờ</p>
            </div>
            <div class="dashboard-left-column-card-table">
                <div class="header-table">
                    <p>STT</p>
                    <p>Họ và tên</p>
                    <p>Nick name</p>
                    <p>Trạng thái</p>
                </div>
                <div class="body-table-scroll-right">
                    <div class="body-table">
                        <p class="img"><img src="{{ asset('assets/images/service1.png') }}" alt=""></p>
                        <p class="date">Phan Tuấn Kiệt</p>
                        <p class="date">Cute</p>
                        <p class="time">Đang hoạt động</p>
                    </div>
                    <div class="body-table">
                        <p class="img"><img src="{{ asset('assets/images/service1.png') }}" alt=""></p>
                        <p class="date">Phan Tuấn Kiệt</p>
                        <p class="date">Cute</p>
                        <p class="time">Đang hoạt động</p>
                    </div>
                    <div class="body-table">
                        <p class="img"><img src="{{ asset('assets/images/service1.png') }}" alt=""></p>
                        <p class="date">Phan Tuấn Kiệt</p>
                        <p class="date">Cute</p>
                        <p class="time">Đang hoạt động</p>
                    </div>
                    <div class="body-table">
                        <p class="img"><img src="{{ asset('assets/images/service1.png') }}" alt=""></p>
                        <p class="date">Phan Tuấn Kiệt</p>
                        <p class="date">Cute</p>
                        <p class="time">Đang hoạt động</p>
                    </div>
                    <div class="body-table">
                        <p class="img"><img src="{{ asset('assets/images/service1.png') }}" alt=""></p>
                        <p class="date">Phan Tuấn Kiệt</p>
                        <p class="date">Cute</p>
                        <p class="time">Đang hoạt động</p>
                    </div>
                    <div class="body-table">
                        <p class="img"><img src="{{ asset('assets/images/service1.png') }}" alt=""></p>
                        <p class="date">Phan Tuấn Kiệt</p>
                        <p class="date">Cute</p>
                        <p class="time">Đang hoạt động</p>
                    </div>

                </div>
            </div>
        </div>
        <div class="service-value">
            <div class="service-value-left">
                <i class="fa-solid fa-chalkboard"></i> Tiền lương tháng
            </div>
            <div class="service-value-right">
                <p>50000 VND</p>
            </div>
        </div>
        <div class="service-value">
            <div class="service-value-left">
                <i class="fa-solid fa-chalkboard"></i> Tiền thuê nhà
            </div>
            <div class="service-value-right">
                <p>50000 VND</p>
            </div>
        </div>
        <div class="service-value">
            <div class="service-value-left">
                <i class="fa-solid fa-chalkboard"></i> Tiền chi tiêu
            </div>
            <div class="service-value-right">
                <p>50000 VND</p>
            </div>
        </div>

        <div class="service-value">
            <div class="service-value-left">
                <i class="fa-solid fa-chalkboard"></i> Tiền mua sắm
            </div>
            <div class="service-value-right">
                <p>50000 VND</p>
            </div>
        </div>

        <div class="service-value">
            <div class="service-value-left">
                <i class="fa-solid fa-chalkboard"></i> Tiền còn lại
            </div>
            <div class="service-value-right">
                <p>500000-300000 = 200000 VND</p>
            </div>
        </div>
        
    </div>
</div>


<script>

</script>
@endsection