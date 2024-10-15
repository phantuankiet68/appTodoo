@extends('app')

@section('title', 'Home Page')

@section('content')
<div class="todo">
    <div class="jobMonthBody">
        <div class="todoCol-5">
            <div class="todoHeader topHeaderTodo">
                <div class="topHeader">
                    <h2>{{ __('messages.Salary') }}</h2> | <span>{{ __('messages.Home') }}</span>
                </div>
            </div>
            <div class="salaryBody">
                <form  method="POST" action="{{ route('salaries.store') }}">
                @csrf
                    @if (Auth::check())
                        <input type="hidden" class="input-name" name="user_id" value="{{ Auth::user()->id }}" readonly/>
                    @endif
                    <div class="form-input-category mt-10">
                        <label for="reference">{{ __('messages.Name') }}</label>
                        @if (Auth::check())
                            <input type="text" class="input-name" name="name" value="{{ Auth::user()->full_name }}" readonly/>
                        @endif
                    </div>
                    <div class="form-input-category mt-10">
                        <label for="reference">{{ __('messages.Date Created') }}</label>
                        <input type="text" class="input-name" id="current_date" name="current_date" readonly>
                    </div>
                    <div class="form-textarea-category">
                        <label for="description">{{ __('messages.Description') }}</label>
                        <textarea class="textareaDescription" name="description"></textarea> 
                    </div>
                    <div class="form-group-info">
                        <div class="form-input-category">
                            <label for="name">{{ __('messages.Start Date') }}</label>
                            <input type="time" class="input-name" id="current_time_start" name="current_time_start">
                        </div>
                        <div class="form-input-category">
                            <label for="name">{{ __('messages.End Date') }}</label>
                            <input type="time" class="input-name" id="current_time_end" name="current_time_end">
                        </div>
                    </div>
                    <div class="form-input-category mt-10">
                        <label for="reference">{{ __('messages.Total working time') }}</label>
                        <input type="text" class="input-name" name="total_working_time" readonly>
                    </div>
                    <div class="form-group-info">
                        <div class="form-input-category">
                            <label for="name">{{ __('messages.Start Date') }}</label>
                            <input type="time" class="input-name" id="current_time_overtime_start" name="date_start" value="08:00">
                        </div>
                        <div class="form-input-category">
                            <label for="name">{{ __('messages.End Date') }}</label>
                            <input type="time" class="input-name" id="current_time_overtime_end" name="date_end" value="17:10">
                        </div>
                    </div>
                    <div class="form-input-category mt-10">
                        <label for="reference">{{ __('messages.Total overtime') }}</label>
                        <input type="text" class="input-name" id="total_overtime" name="total_overtime" readonly>
                    </div>
                    <div class="form-btn">
                        <button type="submit">{{ __('messages.Add New') }}</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="todoCol-5 jobsalary">
            <div class="tabs">
                <button class="tablinks active" onclick="openTab1(event, 'Tab1')">{{ __('messages.Workday Information') }}</button>
                <button class="tablinks" onclick="openTab1(event, 'Tab2')">{{ __('messages.Calculate Salary') }}</button>
            </div>

            <div id="Tab1" class="tabcontent" style="display: block;">
                <div class="title-todo">
                    <h2>{{ __('messages.Date') }}</h2>|<span>{{ __('messages.Work or Task') }}</span>
                </div>
                <div class="header-todo">
                    @php
                        $currentLanguage = app()->getLocale(); // Get the current language
                    @endphp

                    <div class="Users--right--btns">
                        <button class="totalDate">
                            @if ($currentLanguage === 'ja')
                                1{{ __('messages.Month') }}: 2
                            @else
                                {{ __('messages.Month') }} 1: 30
                            @endif
                        </button>
                    </div>
                    <div class="Users--right--btns">
                        <button class="totalDate">
                            @if ($currentLanguage === 'ja')
                                2{{ __('messages.Month') }}: 2
                            @else
                                {{ __('messages.Month') }} 2: 64
                            @endif
                        </button>
                    </div>
                    <div class="Users--right--btns">
                        <button class="totalDate">
                            @if ($currentLanguage === 'ja')
                                3{{ __('messages.Month') }}: 2
                            @else
                                {{ __('messages.Month') }} 3: 2
                            @endif
                        </button>
                    </div>
                    <div class="Users--right--btns">
                        <button class="totalDate">
                            @if ($currentLanguage === 'ja')
                                4{{ __('messages.Month') }}: 2
                            @else
                                {{ __('messages.Month') }} 4: 2
                            @endif
                        </button>
                    </div>
                    <div class="Users--right--btns">
                        <button class="totalDate">
                            @if ($currentLanguage === 'ja')
                                5{{ __('messages.Month') }}: 2
                            @else
                                {{ __('messages.Month') }} 5: 2
                            @endif
                        </button>
                    </div>
                    <div class="Users--right--btns">
                        <button class="totalDate">
                            @if ($currentLanguage === 'ja')
                                6{{ __('messages.Month') }}: 2
                            @else
                                {{ __('messages.Month') }} 6: 2
                            @endif
                        </button>
                    </div>
                    <div class="Users--right--btns">
                        <button class="totalDate">
                            @if ($currentLanguage === 'ja')
                                7{{ __('messages.Month') }}: 2
                            @else
                                {{ __('messages.Month') }} 7: 30
                            @endif
                        </button>
                    </div>
                    <div class="Users--right--btns">
                        <button class="totalDate">
                            @if ($currentLanguage === 'ja')
                                8{{ __('messages.Month') }}: 2
                            @else
                                {{ __('messages.Month') }} 8: 64
                            @endif
                        </button>
                    </div>
                    <div class="Users--right--btns">
                        <button class="totalDate">
                            @if ($currentLanguage === 'ja')
                                9{{ __('messages.Month') }}: 2
                            @else
                                {{ __('messages.Month') }} 9: 2
                            @endif
                        </button>
                    </div>
                    <div class="Users--right--btns">
                        <button class="totalDate">
                            @if ($currentLanguage === 'ja')
                                10{{ __('messages.Month') }}: 2
                            @else
                                {{ __('messages.Month') }} 10: 2
                            @endif
                        </button>
                    </div>
                    <div class="Users--right--btns">
                        <button class="totalDate">
                            @if ($currentLanguage === 'ja')
                                11{{ __('messages.Month') }}: 2
                            @else
                                {{ __('messages.Month') }} 11: 2
                            @endif
                        </button>
                    </div>
                    <div class="Users--right--btns">
                        <button class="totalDate">
                            @if ($currentLanguage === 'ja')
                                12{{ __('messages.Month') }}: 2
                            @else
                                {{ __('messages.Month') }} 12: 2
                            @endif
                        </button>
                    </div>
                </div>

                <div class="body-todo">
                    <div class="recent--patient">
                        <div class="tables">
                            <table>
                                <thead>
                                    <tr>
                                        <th>{{ __('messages.Name') }}</th>
                                        <th class="text-center">{{ __('messages.Date Created') }}</th>
                                        <th class="text-center">{{ __('messages.Time Job') }}</th>
                                        <th class="text-center">{{ __('messages.Status') }}</th>
                                        <th class="text-center">{{ __('messages.Settings') }}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($salary as $sala)
                                    <tr>
                                        <td>
                                            <div class="text-truncate" style="width: 200px;">
                                                {{ $sala->data }}   
                                            </div>
                                        </td>
                                        <td class="text-center">{{ $sala->full_date }}</td>
                                        <td class="text-center">{{ $sala->working_hours }} {{ __('messages.Hour') }}
                                        <td class="text-center"> 
                                            <input type="checkbox" name="sala[]" id="sala{{ $sala->id }}" 
                                                value="1" {{ $sala->status == 1 ? 'checked' : '' }}>
                                        </td>
                                        <td class="text-center"><span><i class="fa-regular fa-pen-to-square edit"></i><i class="fa-solid fa-trash delete"></i></i></span></td>
                                    </tr>
                                </tbody>
                                @endforeach
                            </table>
                            <div class="pagination">
                                <button id="prev" onclick="prevPage()">Prev</button>
                                <span id="page-info">1</span>
                                <span id="page-info">2</span>
                                <button id="next" onclick="nextPage()">Next</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="Tab2" class="tabcontent">
                <div class="calculateSalary">
                    <div class="calculateSalary-9">
                        <div class="form-group-info">
                            <div class="form-number-category">
                                <label for="name">{{ __('messages.Number of day') }}</label>
                                <input type="text" class="input-name" id="todo-date-start" name="date_start">
                            </div>
                            <div class="form-hours-category">
                                <label for="name">{{ __('messages.Number of working hours') }}</label>
                                <input type="text" class="input-name" id="todo-date-start" name="date_start">
                            </div>
                        </div>
                        <div class="form-group-info">
                             <div class="form-number-category">
                                <label for="name">{{ __('messages.Wages') }}</label>
                                <input type="text" class="input-name" id="todo-date-start" name="date_start">
                            </div>
                            <div class="form-hours-category">
                                <label for="name">{{ __('messages.Number of days off') }}</label>
                                <input type="text" class="input-name" id="todo-date-start" name="date_start">
                            </div>
                        </div>
                        <div class="form-group-info">
                             <div class="form-hours-category">
                                <label for="name">{{ __('messages.Personal tax') }}</label>
                                <input type="text" class="input-name" id="todo-date-start" name="date_start">
                            </div>
                            <div class="form-hours-category">
                                <label for="name">{{ __('messages.Number of leave days') }}</label>
                                <input type="text" class="input-name" id="todo-date-start" name="date_start">
                            </div>
                        </div>
                        <p class="space-letping">
                        <div class="form-total-category mt-5">
                            <label for="name">{{ __('messages.Total income before tax') }}</label>
                            <input type="text" class="input-name" id="todo-name" name="name">
                        </div>
                        <div class="form-total-category mt-5">
                            <label for="name">{{ __('messages.Adjusted total income') }}</label>
                            <input type="text" class="input-name" id="todo-name" name="name">
                        </div>
                        <div class="form-total-category mt-5">
                            <label for="name">{{ __('messages.Total income after tax') }}</label>
                            <input type="text" class="input-name" id="todo-name" name="name">
                        </div>
                        <div class="form-total-category mt-5">
                            <label for="name">{{ __('messages.Total income of the year') }}</label>
                            <input type="text" class="input-name" id="todo-name" name="name">
                        </div>
                    </div>
                    <div class="calculateSalary-3">

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    const today = new Date();

    const formattedDate = today.getFullYear() + '-' + 
                            String(today.getMonth() + 1).padStart(2, '0') + '-' + 
                            String(today.getDate()).padStart(2, '0');

    document.getElementById('current_date').value = formattedDate;
    document.getElementById('current_time_start').value = "08:00";
    document.getElementById('current_time_end').value = "17:10";
    document.getElementById('current_time_overtime_start').value = "17:10";
    document.getElementById('current_time_overtime_end').value = "17:10";

    function calculateOvertime() {
        const startTime = document.getElementById('current_time_overtime_start').value;
        const endTime = document.getElementById('current_time_overtime_end').value;

        // Chuyển đổi thời gian sang phút
        const [startHours, startMinutes] = startTime.split(':').map(Number);
        const [endHours, endMinutes] = endTime.split(':').map(Number);

        const startTotalMinutes = startHours * 60 + startMinutes;
        const endTotalMinutes = endHours * 60 + endMinutes;

        // Tính tổng thời gian làm thêm
        let totalMinutes = endTotalMinutes - startTotalMinutes;

        // Nếu thời gian end nhỏ hơn start, điều chỉnh qua ngày hôm sau
        if (totalMinutes < 0) {
            totalMinutes += 24 * 60;
        }

        // Nếu thời gian bắt đầu và kết thúc giống nhau
        if (totalMinutes === 0 && startTime !== endTime) {
            document.getElementById('total_overtime').value = "không";
        } else {
            const overtimeHours = Math.floor(totalMinutes / 60);
            const overtimeMinutes = totalMinutes % 60;

            document.getElementById('total_overtime').value = `${overtimeHours} giờ ${overtimeMinutes} phút`;
        }
    }

    document.getElementById('current_time_overtime_start').addEventListener('input', calculateOvertime);
    document.getElementById('current_time_overtime_end').addEventListener('input', calculateOvertime);
    calculateOvertime();
    function calculateWorkingTime() {
        const startTime = document.getElementById('current_time_start').value;
        const endTime = document.getElementById('current_time_end').value;

        // Kiểm tra nếu chưa chọn thời gian
        if (!startTime || !endTime) {
            return;
        }

        // Chuyển đổi thời gian sang phút
        const [startHours, startMinutes] = startTime.split(':').map(Number);
        const [endHours, endMinutes] = endTime.split(':').map(Number);

        const startTotalMinutes = startHours * 60 + startMinutes;
        const endTotalMinutes = endHours * 60 + endMinutes;

        // Tính tổng thời gian làm việc
        let totalMinutes = endTotalMinutes - startTotalMinutes;

        // Nếu thời gian end nhỏ hơn start, điều chỉnh qua ngày hôm sau
        if (totalMinutes < 0) {
            totalMinutes += 24 * 60;
        }

        // Trừ 65 phút từ tổng thời gian làm việc
        totalMinutes -= 70;

        // Đảm bảo tổng số phút không âm
        if (totalMinutes < 0) {
            totalMinutes = 0;
        }

        // Chuyển đổi tổng thời gian thành giờ và phút
        const workingHours = Math.floor(totalMinutes / 60);
        const workingMinutes = totalMinutes % 60;

        // Hiển thị tổng thời gian làm việc
        document.querySelector('input[name="total_working_time"]').value = `${workingHours} giờ ${workingMinutes} phút`;
    }

    // Lắng nghe sự kiện thay đổi thời gian
    document.getElementById('current_time_start').addEventListener('input', calculateWorkingTime);
    document.getElementById('current_time_end').addEventListener('input', calculateWorkingTime);

    // Gọi hàm để tính toán ngay từ đầu (nếu cần)
    calculateWorkingTime();

</script>
<script>
function getDaysInMonth(month, year) {
    return new Date(year, month, 0).getDate();
}

function getMonthButtonText(month, count, language) {
    if (language === 'ja') { 
        return `${count}月 ${month}`; 
    } else { 
        return `${month} ${count}`;
    }
}

</script>
@endsection