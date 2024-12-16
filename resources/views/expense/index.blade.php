@extends('app')

@section('title', 'Home Page')

@section('content')
<div class="todo">
    <div class="infoController">
        @include('info-user')
        <div class="InformationRight">
            <div class="salary-container">
                <form action="{{ route('expense.store') }}" method="POST">
                @csrf
                    <div class="button-spend">
                        <button type="submit">{{ __('messages.Confirm') }}</button>
                    </div>
                    <div class="table-spend">
                        @if (Auth::check())
                            <input type="hidden" id="task-id" name="user_id" value="{{ Auth::user()->id }}"/>
                        @endif
                        <table>
                            <thead>
                                <th>{{ __('messages.Expense item') }}</th>
                                <th>{{ __('messages.Amount of money') }}</th>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>{{ __('messages.Current date') }}</td>
                                    <td>
                                        <input type="text" id="current_date" name="current_date" placeholder="Nhập Số tiền chi tiêu....">
                                    </td>
                                </tr>
                                <tr>
                                    <td>{{ __('messages.Breakfast') }}</td>
                                    <td>
                                        <div class="flex-spend">
                                            <input type="number" id="breakfast" name="breakfast" onkeypress="return isNumber(event);" class="tien" placeholder="Nhập Số tiền chi tiêu....">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>{{ __('messages.Lunch') }}</td>
                                    <td>
                                        <div class="flex-spend">
                                            <input type="text" id="lunch" name="lunch" onkeypress="return isNumber(event);" class="tien" placeholder="Nhập Số tiền chi tiêu....">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>{{ __('messages.Afternoon meal') }}</td>
                                    <td>
                                        <div class="flex-spend">
                                            <input type="text" id="afternoon_meal" name="afternoon_meal" onkeypress="return isNumber(event);" class="tien" placeholder="Nhập Số tiền chi tiêu....">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>{{ __('messages.Dinner') }}</td>
                                    <td>
                                        <div class="flex-spend">
                                            <input type="text" id="dinner" name="dinner" onkeypress="return isNumber(event);" class="tien" placeholder="Nhập Số tiền chi tiêu....">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>{{ __('messages.Coffee') }}</td>
                                    <td>
                                        <div class="flex-spend">
                                            <input type="text" id="coffee" name="coffee" onkeypress="return isNumber(event);" class="tien" placeholder="Nhập Số tiền chi tiêu....">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>{{ __('messages.Fuel') }}</td>
                                    <td>
                                        <div class="flex-spend">
                                            <input type="text" id="fuel" name="fuel" onkeypress="return isNumber(event);" class="tien" placeholder="Nhập Số tiền chi tiêu....">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>{{ __('messages.Sports') }}</td>
                                    <td>
                                        <div class="flex-spend">
                                            <input type="text" id="sports" name="sports" onkeypress="return isNumber(event);" class="tien" placeholder="Nhập Số tiền chi tiêu....">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>{{ __('messages.E-wallet') }}</td>
                                    <td>
                                        <div class="flex-spend">
                                            <input type="text" id="e_wallet" name="e_wallet" onkeypress="return isNumber(event);" class="tien" placeholder="Nhập Số tiền chi tiêu....">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>{{ __('messages.Other shopping') }}</td>
                                    <td>
                                        <div class="flex-spend">
                                            <input type="text" id="other_shopping" name="other_shopping" onkeypress="return isNumber(event);" class="tien" placeholder="Nhập Số tiền chi tiêu....">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>{{ __('messages.Other expenses') }}</td>
                                    <td>
                                        <div class="flex-spend">
                                            <input type="text" id="other_expenses" name="other_expenses" onkeypress="return isNumber(event);" class="tien" placeholder="Nhập Số tiền chi tiêu....">
                                        </div>
                                    </td>
                                </tr>
                                <tr id="tienTro">
                                    <td>{{ __('messages.Rent') }}</td>
                                    <td>
                                        <div class="flex-spend">
                                            <input type="text" id="rent" name="rent" onkeypress="return isNumber(event);" class="tien" placeholder="Nhập Số tiền chi tiêu....">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>{{ __('messages.Total spending today') }}</td>
                                    <td>
                                        <div class="flex-spend">
                                            <input type="text" id="total_spending_today" name="total_spending_today" class="tien" placeholder="Nhập Số tiền chi tiêu....">
                                        </div>
                                    </td>
                                </tr>                            
                            </tbody>
                        </table>
                        <div class="noted">
                            <span class="red">*</span><span> {{ __('messages.Please enter the amount spent here!') }}</span>
                        </div>
                    </div>
                </form>
                <div class="expenseBody">
                    <div class="header-spend">
                        <div class="spendWisely">
                            <div class="percentSpend">
                                <span class="colorOne">30%</span>
                                <p>{{ __('messages.Rent') }}</p>
                            </div>
                            <div class="feeSpend">
                                <p>{{ number_format($totalRent, 0, ',', '.') }} VND</p>
                            </div>
                        </div>
                        <div class="spendWisely">
                            <div class="percentSpend">
                                <span class="colortwo">15%</span>
                                <p>{{ __('messages.Food Expenses') }}</p>
                            </div>
                            <div class="feeSpend">
                                <p>{{ number_format($totalFoodExpense, 0, ',', '.') }} VND</p>
                            </div>
                        </div>
                        <div class="spendWisely">
                            <div class="percentSpend">
                                <span class="colorThree">5%</span>
                                <p>{{ __('messages.E-wallet') }}</p>
                            </div>
                            <div class="feeSpend">
                                <p>{{ number_format($totalEWallet, 0, ',', '.') }} VND</p>
                            </div>
                        </div>
                        <div class="spendWisely">
                            <div class="percentSpend">
                                <span class="colorFour">5%</span>
                                <p>{{ __('messages.Sports') }}</p>
                            </div>
                            <div class="feeSpend">
                                <p>{{ number_format($totalSports, 0, ',', '.') }} VND</p>
                            </div>
                        </div>
                        <div class="spendWisely">
                            <div class="percentSpend">
                                <span class="colorFive">5%</span>
                                <p>{{ __('messages.Other shopping') }}</p>
                            </div>
                            <div class="feeSpend">
                                <p>{{ number_format($totalOtherExpenses, 0, ',', '.') }} VND</p>
                            </div>
                        </div>
                        <div class="costOffEntry">
                            <div class="percentSpend">
                                <p>{{ __('messages.Expenses') }}</p>
                            </div>
                            <div class="feeSpend">
                                <p>{{ number_format($totalAllExpenses, 0, ',', '.') }} VND</p>
                            </div>
                        </div>
                    </div>
                    <div class="title-todo">
                        <div class="title-todo-top">
                            <h2>{{ __('messages.Total') }}</h2>|<span>{{ __('messages.Expenses') }}</span>
                        </div>
                        <div class="title-todo-bottom">
                            <a href="{{ route('expenses.export.pdf') }}">Down PDF</a>
                        </div>
                    </div>
                    <div class="body-todo">
                        <div class="recent--patient">
                            <div class="tables">
                                <table>
                                    <thead>
                                        <tr>
                                            <th>Date</th>
                                            <th>Name</th>
                                            <th class="text-center">Money</th>
                                            <th class="text-center">Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($expense as $expenses)
                                        <tr>
                                            <td>{{$expenses -> current_date}}</td>
                                            <td>{{ $expenses->user ? $expenses->user->full_name : 'Không có danh mục' }}</td>
                                            <td class="text-center">{{ number_format($expenses -> total_spending_today, 0, ',', '.') }} VND</td>
                                            <td class="text-center">
                                                @if ($expenses->total_spending_today <= 80000)
                                                    <span class="expense_low">Chi phí thấp</span>
                                                @elseif ($expenses->total_spending_today > 80000 && $expenses->total_spending_today <= 120000)
                                                    <span class="expense_normal">Chi phí vừa</span>
                                                @else
                                                    <span class="expense_hight">Chi phí cao</span>
                                                @endif
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                <div class="d-flex justify-content-center link-margin">
                                    {{ $expense->links('') }} <!-- Hoặc pagination::bootstrap-4 nếu bạn sử dụng Bootstrap 4 -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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
    document.addEventListener("DOMContentLoaded", function() {
        const today = new Date();
        const currentDay = today.getDate();
        const tienTroRow = document.getElementById("tienTro");
        const currentDateInput = document.getElementById("current_date");
        const allTienInputs = document.querySelectorAll(".tien"); 
        const inputs = document.querySelectorAll(".tien");
        const totalInput = document.getElementById("total_spending_today");

        const formattedDate = today.getFullYear() + '-' + 
                      (today.getMonth() + 1).toString().padStart(2, '0') + '-' + 
                      today.getDate().toString().padStart(2, '0');


        allTienInputs.forEach(input => {
            input.value = 0; 
        });
        currentDateInput.value = formattedDate;


        if (currentDay === 10) {
            tienTroRow.classList.remove("hidden");  // Hiển thị nếu là ngày 10
        } else {
            tienTroRow.classList.add("hidden");  // Ẩn nếu không phải ngày 10
        }

        allTienInputs.forEach(input => {
            input.value = 0; // Đặt giá trị mặc định là 0

            // Tạo nút nhấp nháy
            const blinkButton = document.createElement("button");
            blinkButton.classList.add("blink-button");
            blinkButton.textContent = "*";
            input.parentNode.appendChild(blinkButton);
        });

        // Function to format numbers in Vietnamese currency format
        function formatCurrency(value) {
            return value.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".") + " VND";
        }

        // Function to round to the nearest thousand
        function roundToNearestThousand(value) {
            return Math.round(value / 1000) * 1000; // Round to nearest thousand
        }

        // Update the total when the input changes
        inputs.forEach(input => {
            input.addEventListener("input", function () {
                let total = 0;

                inputs.forEach(input => {
                    const value = parseFloat(input.value) || 0; // Get value and default to 0 if NaN
                    total += value; // Sum up the values
                });

                // Round the total to the nearest thousand
                total = roundToNearestThousand(total);

                // Set the total input's value formatted
                totalInput.value = formatCurrency(total); // Format as currency
            });
        });
    });
    function isNumber(evt) {
        var charCode = evt.which ? evt.which : evt.keyCode;
        // Chỉ cho phép nhập số (0-9)
        if (charCode < 48 || charCode > 57) {
        return false;
        }
        return true;
    }
</script>
@endsection