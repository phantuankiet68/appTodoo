@extends('app')

@section('title', 'Home Page')

@section('content')
<div class="todo">
    <div class="jobMonthBody">
        <div class="todoCol-7">
            <form action="">
                <div class="table-spend">
                    @if (Auth::check())
                        <input type="hidden" id="task-id" name="user_id" value="{{ Auth::user()->id }}"/>
                    @endif
                    <table>
                        <thead>
                            <th>Khoản chi tiêu</th>
                            <th>Số tiền</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Ngày hiện tại</td>
                                <td>
                                    <input type="text" id="current_date" name="current_date" placeholder="Nhập Số tiền chi tiêu....">
                                </td>
                            </tr>
                            <tr>
                                <td>Bữa Sáng</td>
                                <td>
                                    <div class="flex-spend">
                                        <input type="text" id="breakfast" name="breakfast" class="tien" placeholder="Nhập Số tiền chi tiêu....">
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Bữa trưa</td>
                                <td>
                                    <div class="flex-spend">
                                        <input type="text" id="lunch" name="lunch" class="tien" placeholder="Nhập Số tiền chi tiêu....">
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Bữa chiều</td>
                                <td>
                                    <div class="flex-spend">
                                        <input type="text" id="afternoon_meal" name="afternoon_meal" class="tien" placeholder="Nhập Số tiền chi tiêu....">
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Bữa tối</td>
                                <td>
                                    <div class="flex-spend">
                                        <input type="text" id="dinner" name="dinner" class="tien" placeholder="Nhập Số tiền chi tiêu....">
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Cà phê</td>
                                <td>
                                    <div class="flex-spend">
                                        <input type="text" id="coffee" name="coffee" class="tien" placeholder="Nhập Số tiền chi tiêu....">
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Xăng</td>
                                <td>
                                    <div class="flex-spend">
                                        <input type="text" id="fuel" name="fuel" class="tien" placeholder="Nhập Số tiền chi tiêu....">
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Thể thao</td>
                                <td>
                                    <div class="flex-spend">
                                        <input type="text" id="sports" name="sports" class="tien" placeholder="Nhập Số tiền chi tiêu....">
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Ví điện tử</td>
                                <td>
                                    <div class="flex-spend">
                                        <input type="text" id="e_wallet" name="e_wallet" class="tien" placeholder="Nhập Số tiền chi tiêu....">
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Mua sắm khác</td>
                                <td>
                                    <div class="flex-spend">
                                        <input type="text" id="other_shopping" name="other_shopping" class="tien" placeholder="Nhập Số tiền chi tiêu....">
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Chi phí khác</td>
                                <td>
                                    <div class="flex-spend">
                                        <input type="text" id="other_expenses" name="other_expenses" class="tien" placeholder="Nhập Số tiền chi tiêu....">
                                    </div>
                                </td>
                            </tr>
                            <tr id="tienTro">
                                <td>tiền trọ</td>
                                <td>
                                    <div class="flex-spend">
                                        <input type="text" id="rent" name="rent" class="tien" placeholder="Nhập Số tiền chi tiêu....">
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Tổng chi tiêu hôm nay</td>
                                <td>
                                    <div class="flex-spend">
                                        <input type="text" id="total_spending_today" name="total_spending_today" class="tien" placeholder="Nhập Số tiền chi tiêu....">
                                    </div>
                                </td>
                            </tr>                            
                        </tbody>
                    </table>
                    <div class="noted">
                        <span class="red">*</span><span>Hãy nhập số tiền chi tiêu vào đây!</span>
                    </div>
                    <div class="noted">
                        <span>Hãy xác nhận trước 12 giờ. Hãy cố gắng quản lí chi tiêu để biết mình đang chi tiêu như thế nào và cần cải cách mức độ chi tiêu ra sao!</span>
                    </div>
                    <div class="button-spend">
                        <button type="submit">Xác nhận</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="todoCol-5">
            <div class="header-spend">
                <div class="costOfEntry">
                    <div class="percentSpend">
                        <p>Chi phí vào</p>
                    </div>
                    <div class="feeSpend">
                        <p>3000000</p>
                    </div>
            </div>
            <div class="spendWisely">
                    <div class="percentSpend">
                        <span class="colorOne">30%</span>
                        <p>Thuê nhà</p>
                    </div>
                    <div class="feeSpend">
                        <p>3000000</p>
                    </div>
            </div>
            <div class="spendWisely">
                    <div class="percentSpend">
                        <span class="colortwo">15%</span>
                        <p>Tiền ăn</p>
                    </div>
                    <div class="feeSpend">
                        <p>3000000</p>
                    </div>
                </div>
                <div class="spendWisely">
                    <div class="percentSpend">
                        <span class="colorThree">5%</span>
                        <p>Ví điện tử</p>
                    </div>
                    <div class="feeSpend">
                        <p>3000000</p>
                    </div>
                </div>
                <div class="spendWisely">
                    <div class="percentSpend">
                        <span class="colorFour">5%</span>
                        <p>Thể thao</p>
                    </div>
                    <div class="feeSpend">
                        <p>3000000</p>
                    </div>
                </div>
                <div class="spendWisely">
                    <div class="percentSpend">
                        <span class="colorFive">5%</span>
                        <p>Mua sắm khác</p>
                    </div>
                    <div class="feeSpend">
                        <p>3000000</p>
                    </div>
                </div>
                <div class="costOffEntry">
                    <div class="percentSpend">
                        <p>Chi phí ra</p>
                    </div>
                    <div class="feeSpend">
                        <p>3000000</p>
                    </div>
            </div>
            </div>
            <div class="title-todo">
                <h2>Total</h2>|<span>Spend Wisely</span>
            </div>
            <div class="body-todo">
                <div class="recent--patient">
                    <div class="tables">
                        <table>
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th class="text-center">Money</th>
                                    <th class="text-center">Date</th>
                                    <th class="text-center">Status</th>
                                    <th class="text-center">Settings</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Cameron Williamson</td>
                                    <td class="text-center">3000000</td>
                                    <td class="text-center">30/07/2022</td>
                                    <td class="text-center">
                                        <input type="checkbox" name="" id="">
                                    </td>
                                    <td class="text-center"><span><i class="fa-regular fa-pen-to-square edit"></i><i class="fa-solid fa-trash delete"></i></i></span></td>
                                </tr>
                                <tr>
                                    <td>Cameron Williamson</td>
                                    <td class="text-center">3000000</td>
                                    <td class="text-center">30/07/2022</td>
                                    <td class="text-center">
                                        <input type="checkbox" name="" id="">
                                    </td>
                                    <td class="text-center"><span><i class="fa-regular fa-pen-to-square edit"></i><i class="fa-solid fa-trash delete"></i></i></span></td>
                                </tr>
                                <tr>
                                    <td>Cameron Williamson</td>
                                    <td class="text-center">3000000</td>
                                    <td class="text-center">30/07/2022</td>
                                    <td class="text-center">
                                        <input type="checkbox" name="" id="">
                                    </td>
                                    <td class="text-center"><span><i class="fa-regular fa-pen-to-square edit"></i><i class="fa-solid fa-trash delete"></i></i></span></td>
                                </tr>
                                <tr>
                                    <td>Cameron Williamson</td>
                                    <td class="text-center">3000000</td>
                                    <td class="text-center">30/07/2022</td>
                                    <td class="text-center">
                                        <input type="checkbox" name="" id="">
                                    </td>
                                    <td class="text-center"><span><i class="fa-regular fa-pen-to-square edit"></i><i class="fa-solid fa-trash delete"></i></i></span></td>
                                </tr>
                                <tr>
                                    <td>Cameron Williamson</td>
                                    <td class="text-center">3000000</td>
                                    <td class="text-center">30/07/2022</td>
                                    <td class="text-center">
                                        <input type="checkbox" name="" id="">
                                    </td>
                                    <td class="text-center"><span><i class="fa-regular fa-pen-to-square edit"></i><i class="fa-solid fa-trash delete"></i></i></span></td>
                                </tr>
                                <tr>
                                    <td>Cameron Williamson</td>
                                    <td class="text-center">3000000</td>
                                    <td class="text-center">30/07/2022</td>
                                    <td class="text-center">
                                        <input type="checkbox" name="" id="">
                                    </td>
                                    <td class="text-center"><span><i class="fa-regular fa-pen-to-square edit"></i><i class="fa-solid fa-trash delete"></i></i></span></td>
                                </tr>
                                <tr>
                                    <td>Cameron Williamson</td>
                                    <td class="text-center">3000000</td>
                                    <td class="text-center">30/07/2022</td>
                                    <td class="text-center">
                                        <input type="checkbox" name="" id="">
                                    </td>
                                    <td class="text-center"><span><i class="fa-regular fa-pen-to-square edit"></i><i class="fa-solid fa-trash delete"></i></i></span></td>
                                </tr>
                            
                            </tbody>
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
    </div>
</div>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const today = new Date();
        const currentDay = today.getDate();  // Lấy ngày hiện tại (số ngày trong tháng)
        const tienTroRow = document.getElementById("tienTro");
        const formattedDate = today.toLocaleDateString('en-GB'); // Định dạng ngày theo DD/MM/YYYY
        const currentDateInput = document.getElementById("current_date");
        const allTienInputs = document.querySelectorAll(".tien"); 
        const inputs = document.querySelectorAll(".tien");
        const totalInput = document.getElementById("total_spending_today");


        allTienInputs.forEach(input => {
            input.value = 0; // Ví dụ: Thiết lập tất cả các ô nhập liệu "tien" có giá trị mặc định là 0
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
</script>
@endsection