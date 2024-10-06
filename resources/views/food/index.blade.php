@extends('app')

@section('title', 'Home Page')

@section('content')
<div class="todo">
    <div class="todoHeader">
        <div class="topHeader">
            <h2>Email</h2> | <span>Home</span>
        </div>
        <div class="bodyHeader">
            <form action="">
                <div class="Users--right--btns">
                    <select name="date" id="date" class="select-dropdown doctor--filter">
                        <option>Date of Month</option>
                        <option value="free">Admin</option>
                        <option value="scheduled">Users</option>
                    </select>
                </div>
            </form>
            <form action="">
                <div class="Users--right--btns">
                    <select name="date" id="date" class="select-dropdown doctor--filter">
                        <option>Category</option>
                        <option value="free">Admin</option>
                        <option value="scheduled">Users</option>
                    </select>
                </div>
            </form>
            <form action="" class="formSearch">
                <div class="formInputSearch">
                    <input type="text" value="">
                </div>
                <button class="add-search"><i class="fa-solid fa-magnifying-glass"></i></button>
            </form>
        </div>
        <div class="headerToQuesionRight">
            <button type="button" class="create"><i class="fa-solid fa-plus"></i> Danh muc</button>
            <button type="button" class="change"><i class="fa-solid fa-cash-register"></i> Thay đổi</button>
            <button type="button" class="create"><i class="fa-solid fa-plus"></i> Tạo mới</button>
        </div>
    </div>
    <div class="jobMonthBody">
        <div class="todoCol-5 mt-20">
            <form action="{{ route('expense.store') }}" method="POST">
            @csrf
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
                        </tbody>
                    </table>
                    <div class="button-spend">
                        <button type="submit">{{ __('messages.Confirm') }}</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<script>
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