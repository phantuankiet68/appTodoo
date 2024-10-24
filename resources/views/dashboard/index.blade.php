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
                        <h1>{{$sum_user}}</h1>
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
                        <h5 class="card--title">Total Task</h5>
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
                        <h5 class="card--title">Japanese</h5>
                        <h1>{{$sum_japanese}}</h1>
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
<div class="cod-dashboard-8">
    <div class="dashboard-weather">
        <div class="dashboard-clock">
            <div class="clock">
                <div class="hour-hand"></div>
                <div class="minute-hand"></div>
                <div class="second-hand"></div>
                <div class="center-point"></div>
            </div>
        </div>
        <div class="dashboardCalendar">
            <div id="calendar"></div>
        </div>
        <div class="dashboardWeather">
            <form id="weather-form">
                <input type="text" id="city" placeholder="Nhập thành phố">
                <input type="text" id="country" placeholder="Nhập quốc gia">
                <button type="submit">Tìm kiếm</button>
            </form>
            <div id="weather-result"></div>
        </div>
    </div>
    <div class="dashboard-chart">
        <div style="height: 380px;">
            <div id="chartContainer" style="height: 430px; width: 100%;"></div>
        </div>
    </div>
</div>
<script src="https://cdn.canvasjs.com/canvasjs.min.js"></script>
<script>
  window.onload = function () {

var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	theme: "light2",
	title: {
		text: "Monthly Sales Data"
	},
	axisX: {
		valueFormatString: "MMM"
	},
	axisY: {
		prefix: "$",
		labelFormatter: addSymbols
	},
	toolTip: {
		shared: true
	},
	legend: {
		cursor: "pointer",
		itemclick: toggleDataSeries
	},
	data: [
	{
		type: "column",
		name: "Actual Sales",
		showInLegend: true,
		xValueFormatString: "MMMM YYYY",
		yValueFormatString: "$#,##0",
		dataPoints: [
			{ x: new Date(2016, 0), y: 20000 },
			{ x: new Date(2016, 1), y: 30000 },
			{ x: new Date(2016, 2), y: 25000 },
			{ x: new Date(2016, 3), y: 70000, indexLabel: "High Renewals" },
			{ x: new Date(2016, 4), y: 50000 },
			{ x: new Date(2016, 5), y: 35000 },
			{ x: new Date(2016, 6), y: 30000 },
			{ x: new Date(2016, 7), y: 43000 },
			{ x: new Date(2016, 8), y: 35000 },
			{ x: new Date(2016, 9), y:  30000},
			{ x: new Date(2016, 10), y: 40000 },
			{ x: new Date(2016, 11), y: 50000 }
		]
	}, 
	{
		type: "line",
		name: "Expected Sales",
		showInLegend: true,
		yValueFormatString: "$#,##0",
		dataPoints: [
			{ x: new Date(2016, 0), y: 40000 },
			{ x: new Date(2016, 1), y: 42000 },
			{ x: new Date(2016, 2), y: 45000 },
			{ x: new Date(2016, 3), y: 45000 },
			{ x: new Date(2016, 4), y: 47000 },
			{ x: new Date(2016, 5), y: 43000 },
			{ x: new Date(2016, 6), y: 42000 },
			{ x: new Date(2016, 7), y: 43000 },
			{ x: new Date(2016, 8), y: 41000 },
			{ x: new Date(2016, 9), y: 45000 },
			{ x: new Date(2016, 10), y: 42000 },
			{ x: new Date(2016, 11), y: 50000 }
		]
	},
	{
		type: "area",
		name: "Profit",
		markerBorderColor: "white",
		markerBorderThickness: 2,
		showInLegend: true,
		yValueFormatString: "$#,##0",
		dataPoints: [
			{ x: new Date(2016, 0), y: 5000 },
			{ x: new Date(2016, 1), y: 7000 },
			{ x: new Date(2016, 2), y: 6000},
			{ x: new Date(2016, 3), y: 30000 },
			{ x: new Date(2016, 4), y: 20000 },
			{ x: new Date(2016, 5), y: 15000 },
			{ x: new Date(2016, 6), y: 13000 },
			{ x: new Date(2016, 7), y: 20000 },
			{ x: new Date(2016, 8), y: 15000 },
			{ x: new Date(2016, 9), y:  10000},
			{ x: new Date(2016, 10), y: 19000 },
			{ x: new Date(2016, 11), y: 22000 }
		]
	}]
});
chart.render();

function addSymbols(e) {
	var suffixes = ["", "K", "M", "B"];
	var order = Math.max(Math.floor(Math.log(Math.abs(e.value)) / Math.log(1000)), 0);

	if(order > suffixes.length - 1)                	
		order = suffixes.length - 1;

	var suffix = suffixes[order];      
	return CanvasJS.formatNumber(e.value / Math.pow(1000, order)) + suffix;
}

function toggleDataSeries(e) {
	if (typeof (e.dataSeries.visible) === "undefined" || e.dataSeries.visible) {
		e.dataSeries.visible = false;
	} else {
		e.dataSeries.visible = true;
	}
	e.chart.render();
}

}
    const form = document.getElementById('weather-form');
    const result = document.getElementById('weather-result');
    const apiKey = 'ff532977349290d86ac2bc3243a8ca5a'; // Thay thế bằng API key của bạn
    const nameInput = document.getElementById('city');
    nameInput.value = 'Cần giuộc';
    const countryInput = document.getElementById('country');
    countryInput.value = 'Việt Nam';
    form.addEventListener('submit', (event) => {
        event.preventDefault();
        const city = document.getElementById('city').value;
        const country = document.getElementById('country').value;   
        const today = new Date();
        const day = today.getDate();
        const month = today.getMonth() + 1;
        const year = today.getFullYear();

        // Định dạng ngày tháng
        const formattedDate = `${day}/${month}/${year}`;

        fetch(`https://api.openweathermap.org/data/2.5/weather?q=${city},${country}&appid=${apiKey}&units=metric`)   

            .then(response => response.json())
            .then(data => {
                console.log(data);
                result.innerHTML = `
                    <div class="days-forecast">
                        <p class="text-center">Dự báo ngày ${formattedDate}</h2>
                        <ul class="weather-cards">
                            <li class="card mb-4">
                                <p>( ___${data.name}___ )</p>
                                <p>Nhiệt độ: ${data.main.temp}°C</p>
                                <p>Tốc độ gió: Nhẹ</p>
                                <p>Mô tả: ${data.weather[0].description}</p>
                            </li>
                        </ul>
                    </div>
                `;
            })
            .catch(error => {
                console.error('Lỗi:', error);
                result.innerHTML = 'Không tìm thấy dữ liệu';
            });
    });
    const calendar = document.getElementById('calendar');

    function getDaysInMonth(year, month) {
        return new Date(year, month + 1, 0).getDate();
    }

    function generateCalendar(month, year) {
        const today = new Date();
        const currentDate = today.getDate(); // Lấy ngày hiện tại
        const currentMonth = today.getMonth(); // Lấy tháng hiện tại (0-11)
        const currentYear = today.getFullYear(); // Lấy năm hiện tại

        // Tạo bảng lịch
        const calendar = document.getElementById('calendar');
        const daysInMonth = new Date(currentYear, currentMonth + 1, 0).getDate(); // Số ngày trong tháng hiện tại
        const firstDay = new Date(currentYear, currentMonth, 1).getDay(); // Ngày đầu tiên của tháng

        let html = '<table><tbody>';
        html += '<tr><th>Sun</th><th>Mon</th><th>Tue</th><th>Wed</th><th>Thu</th><th>Fri</th><th>Sat</th></tr><tr>';

        // Thêm các ô trống cho các ngày trước ngày đầu tiên
        for (let i = 0; i < firstDay; i++) {
            html += '<td></td>';
        }

        // Thêm các ngày trong tháng
        for (let day = 1; day <= daysInMonth; day++) {
            // Kiểm tra nếu ngày là ngày hiện tại
            if (day === currentDate) {
                html += `<td class="active">${day}</td>`; // Thêm class active cho ngày hiện tại
            } else {
                html += `<td>${day}</td>`;
            }

            // Nếu ngày là thứ 7, chuyển sang hàng mới
            if ((day + firstDay) % 7 === 0) {
                html += '</tr><tr>';
            }
        }

        html += '</tr></tbody></table>';
        calendar.innerHTML = html; // Cập nhật nội dung của calendar
    }

    // Lấy ngày hiện tại
    const today = new Date();
    const currentMonth = today.getMonth();
    const currentYear = today.getFullYear();

    // Hiển thị lịch
    generateCalendar(currentMonth, currentYear);
    function getVietnamTime() {
        // Lấy giờ Việt Nam bằng cách chính xác theo múi giờ
        return new Date().toLocaleString('en-US', { timeZone: 'Asia/Ho_Chi_Minh' });
    }

    function updateClock() {
        // Sử dụng thời gian từ múi giờ Việt Nam
        const now = new Date(getVietnamTime());
        const seconds = now.getSeconds();
        const minutes = now.getMinutes();
        const hours = now.getHours();

        const secondsDegrees = (seconds / 60) * 360 + 90;
        const minutesDegrees = (minutes / 60) * 360 + (seconds / 60) * 6 + 90;
        const hoursDegrees = (hours % 12 / 12) * 360 + (minutes / 60) * 30 + 90;

        document.querySelector('.second-hand').style.transform = `rotate(${secondsDegrees}deg)`;
        document.querySelector('.minute-hand').style.transform = `rotate(${minutesDegrees}deg)`;
        document.querySelector('.hour-hand').style.transform = `rotate(${hoursDegrees}deg)`;
    }

    // Cập nhật đồng hồ mỗi giây
    setInterval(updateClock, 1000);

    // Gọi hàm cập nhật ngay lập tức khi tải trang
    updateClock();


</script>
@endsection