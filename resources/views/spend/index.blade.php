@extends('app')

@section('title', 'Home Page')

@section('content')
<div class="todo">
    <div class="jobMonthBody">
        <div class="todoCol-5">
            <div id="form-container1"></div>
            <button onclick="generateForm1()">Tạo form</button>
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
@endsection