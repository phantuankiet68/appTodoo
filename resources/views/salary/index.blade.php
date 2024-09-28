@extends('app')

@section('title', 'Home Page')

@section('content')
<div class="todo">
    <div class="jobMonthBody">
        <div class="todoCol-5">
        <form action="{{ route('salary.store') }}" method="POST" class="salary-tap">
            @csrf
            <div id="form-container"></div>
            <button class="createDate" type="button" onclick="generateForm()">{{ __('messages.Create Form') }}</button>
        </form>
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
function generateForm() {
    const today = new Date();
    const month = today.getMonth() + 1;
    const year = today.getFullYear();
    const daysInMonth = getDaysInMonth(month, year);

    const formContainer = document.getElementById('form-container');
    formContainer.innerHTML = ''; 

    for (let d = 1; d <= daysInMonth; d++) {
        const formGroup = document.createElement('div');
        formGroup.classList.add('form-group');

        // Input cho dữ liệu
        const inputData = document.createElement('input');
        inputData.type = 'text';
        inputData.name = `day${d}_data`;
        inputData.placeholder = `{{ __('messages.Enter data for the day') }} ${d}/${month}...`;

        // Input cho thời gian bắt đầu
        const startTimeLabel = document.createElement('label');
        startTimeLabel.innerText = `{{ __('messages.Start') }}`;
        const startTimeInput = document.createElement('input');
        startTimeInput.type = 'time';
        startTimeInput.name = `day${d}_start_time`;

        // Input cho thời gian kết thúc
        const endTimeLabel = document.createElement('label');
        endTimeLabel.innerText = `{{ __('messages.End') }}:`;
        const endTimeInput = document.createElement('input');
        endTimeInput.type = 'time';
        endTimeInput.name = `day${d}_end_time`;

        formGroup.appendChild(inputData);
        formGroup.appendChild(startTimeLabel);
        formGroup.appendChild(startTimeInput);
        formGroup.appendChild(endTimeLabel);
        formGroup.appendChild(endTimeInput);

        formContainer.appendChild(formGroup);
    }
}

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