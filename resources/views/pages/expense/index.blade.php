@extends('page')
@section('title', 'Home Page')
@section('content')

<div class="expense-info">
    <div class="expense-info-top">
        <form action="{{ route('expenses.store') }}" method="POST" class="form-design">
        @csrf
            @if (Auth::check())
                <input type="hidden" class="input-name" name="user_id" value="{{ Auth::user()->id }}" readonly/>
            @endif
            <div class="input-big">
                <input type="text" name="title" placeholder="{{ __('messages.Enter expense details...') }}">
            </div>
            <div class="input-normal">
                <input type="number" name="money" placeholder="{{ __('messages.Enter expense amount...') }}">
            </div>
            <div class="input-small">
                <select name="choose" id="">
                    <option value="1">{{ __('messages.Food') }}</option>
                    <option value="2">{{ __('messages.Sports') }}</option>
                    <option value="3">{{ __('messages.E-wallet') }}</option>
                    <option value="4">{{ __('messages.Other shopping') }}</option>
                    <option value="5">{{ __('messages.Other expenses') }}</option>
                    <option value="6">{{ __('messages.House for rent') }}</option>
                </select>
            </div>
            <div class="input-small">
                <input type="date" name="current_date"  id="dateInput">
            </div>
            <button type="submit"><i class="fa-solid fa-plus"></i> {{ __('messages.Add new') }}</button>
        </form>
    </div>
    <div class="expense-info-body">
        <div class="expense-info-body-left">
            <div class="expense-info-body-left-theader">
                <p style="width: 20%;">{{ __('messages.Date') }}</p>
                <p style="width: 50%;">{{ __('messages.Subject') }}</p>
                <p style="width: 15%;">{{ __('messages.Money') }}</p>
                <p style="width: 15%;text-align: center;">{{ __('messages.Action') }}</p>
            </div>
            <div class="expense-info-body-left-tbody-scroll">
                @foreach ($expenses as $item)
                    <div class="expense-info-body-left-tbody">
                        <p style="width: 20%;">{{ $item->current_date }}</p>
                        <p style="width: 50%;">{{ $item->title }}</p>
                        <p style="width: 15%;">{{ $item->money }}K VND</p>
                        <button style="width: 15%;padding: 10px 5px;background: #fe4c4c;color: #fff;border-radius: 5px;">{{ __('messages.Remove') }}</button>
                    </div>
                @endforeach
            </div>
            
        </div>
        <div class="expense-info-body-right">
            <div class="expense-info-body-right-top">
                <div class="expense-info-body-right-top-body">
                    <p>Tháng 1: 5000k VND</p>
                    <p>Tháng 2: 5000k VND</p>
                    <p>Tháng 3: 5000k VND</p>
                    <p>Tháng 4: 5000k VND</p>
                    <p>Tháng 5: 5000k VND</p>
                    <p>Tháng 6: 5000k VND</p>
                    <p>Tháng 7: 5000k VND</p>
                    <p>Tháng 8: 5000k VND</p>
                    <p>Tháng 9: 5000k VND</p>
                    <p>Tháng 10: 5000k VND</p>
                    <p>Tháng 11: 5000k VND</p>
                    <p>Tháng 12: 5000k VND</p>
                </div>
            </div>
            <canvas id="expenseChart" width="600" height="400"></canvas>
        </div>
    </div>
</div>

@if (session('success'))
<div id="popup-success">
    <ul class="notifications">
        <li class="toast success hide">
            <div class="column">
                <i class="fa-solid fa-circle-check"></i>
                <span>Success:  {{ session('success') }}.</span>
            </div>
        </li>
    </ul>
</div>
@endif

@if (session('success_update'))
    <div id="popup-category" class="popup-category success">
        {{ session('success_update') }}
    </div>
@endif


@if ($errors->any())
    <div id="popup-category" class="popup-category error">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif


<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
     document.addEventListener('DOMContentLoaded', function() {
        const popup = document.querySelector('#popup-success');
        if (popup) {
            popup.style.display = 'flex';
            setTimeout(() => {
                popup.style.display = 'none';
            }, 6000);
        }
    });
    document.addEventListener('DOMContentLoaded', function() {
        const popup = document.querySelector('#popup-category');
        if (popup) {
            popup.style.display = 'block';

            setTimeout(() => {
                popup.style.display = 'none';
            }, 5000);
        }
    });
    document.addEventListener("DOMContentLoaded", function () {
        let today = new Date();
        let formattedDate = today.toISOString().split('T')[0];
        document.getElementById("dateInput").value = formattedDate;
    });
    document.addEventListener("DOMContentLoaded", function () {
            const ctx = document.getElementById('expenseChart').getContext('2d');

            new Chart(ctx, {
                type: 'line', // Biểu đồ đường
                data: {
                    labels: ['2024-04-15', '2024-04-16', '2024-04-17', '2024-04-18', '2024-04-19'], // Ngày
                    datasets: [{
                        label: 'Daily Expense Monitoring',
                        data: [200, 250, 500, 200, 1200], // Dữ liệu chi tiêu
                        borderColor: 'blue', // Màu đường
                        backgroundColor: 'rgba(173, 216, 230, 0.5)', // Màu nền mờ
                        borderWidth: 1.5, // Độ dày đường
                        pointBackgroundColor: 'blue', // Màu điểm dữ liệu
                        pointRadius: 4, // Kích thước điểm dữ liệu
                        fill: true // Tô màu bên dưới đường
                    }]
                },
                options: {
                    responsive: true,
                    scales: {
                        x: {
                            type: 'category', // Trục X dạng danh mục (ngày)
                            title: {
                                display: true,
                                text: 'Date'
                            }
                        },
                        y: {
                            beginAtZero: true, // Bắt đầu từ 0
                            title: {
                                display: true,
                                text: 'Expense (VND)'
                            }
                        }
                    },
                    plugins: {
                        legend: {
                            display: true,
                            position: 'top' // Hiển thị tiêu đề trên cùng
                        }
                    }
                }
            });
        });
</script>

@endsection
