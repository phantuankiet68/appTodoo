@extends('app')

@section('title', 'Home Page')

@section('content')
<div class="todo">
    <div class="jobMonthBody">
        <div class="todoCol-5">
            <div id="form-container"></div>
            <button onclick="generateForm()">Tạo form</button>
        </div>
        <div class="todoCol-5">
            <div class="title-todo">
                <h2>Date</h2>|<span>Todo</span>
            </div>
            <div class="header-todo">
                <div class="Users--right--btns">
                    <span class="totalDate">Date: 30</span>
                </div>
                <div class="Users--right--btns">
                    <span class="totalDate">Time Job: 64</span>
                </div>
                <div class="Users--right--btns">
                    <span class="totalDate">Day Job: 2</span>
                </div>
                <div class="Users--right--btns">
                    <span class="totalDate">Day off: 2</span>
                </div>
                <div class="Users--right--btns">
                    <span class="totalDate">Total salary: 2</span>
                </div>
            </div>
            <div class="body-todo">
                <div class="recent--patient">
                    <div class="tables">
                        <table>
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Begin</th>
                                    <th>End</th>
                                    <th>Time</th>
                                    <th>Status</th>
                                    <th>Settings</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Cameron Williamson</td>
                                    <td>30/07/2022</td>
                                    <td>Male</td>
                                    <td>8/H</td>
                                    <td class="text-center">
                                        <input type="checkbox" name="" id="">
                                    </td>
                                    <td><span><i class="fa-regular fa-pen-to-square edit"></i><i class="fa-solid fa-trash delete"></i></i></span></td>
                                </tr>
                                <tr>
                                    <td>Cameron Williamson</td>
                                    <td>30/07/2022</td>
                                    <td>Male</td>
                                    <td>8/H</td>
                                    <td class="text-center">
                                        <input type="checkbox" name="" id="">
                                    </td>
                                    <td><span><i class="fa-regular fa-pen-to-square edit"></i><i class="fa-solid fa-trash delete"></i></i></span></td>
                                </tr>
                                <tr>
                                    <td>Cameron Williamson</td>
                                    <td>30/07/2022</td>
                                    <td>Male</td>
                                    <td>8/H</td>
                                    <td class="text-center">
                                        <input type="checkbox" name="" id="">
                                    </td>
                                    <td><span><i class="fa-regular fa-pen-to-square edit"></i><i class="fa-solid fa-trash delete"></i></i></span></td>
                                </tr>
                                <tr>
                                    <td>Cameron Williamson</td>
                                    <td>30/07/2022</td>
                                    <td>Male</td>
                                    <td>8/H</td>
                                    <td class="text-center">
                                        <input type="checkbox" name="" id="">
                                    </td>
                                    <td><span><i class="fa-regular fa-pen-to-square edit"></i><i class="fa-solid fa-trash delete"></i></i></span></td>
                                </tr>

                                <tr>
                                    <td>Cameron Williamson</td>
                                    <td>30/07/2022</td>
                                    <td>Male</td>
                                    <td>8/H</td>
                                    <td class="text-center">
                                        <input type="checkbox" name="" id="">
                                    </td>
                                    <td><span><i class="fa-regular fa-pen-to-square edit"></i><i class="fa-solid fa-trash delete"></i></i></span></td>
                                </tr>
                                <tr>
                                    <td>Cameron Williamson</td>
                                    <td>30/07/2022</td>
                                    <td>Male</td>
                                    <td>8/H</td>
                                    <td class="text-center">
                                        <input type="checkbox" name="" id="">
                                    </td>
                                    <td><span><i class="fa-regular fa-pen-to-square edit"></i><i class="fa-solid fa-trash delete"></i></i></span></td>
                                </tr>
                                <tr>
                                    <td>Cameron Williamson</td>
                                    <td>30/07/2022</td>
                                    <td>Male</td>
                                    <td>8/H</td>
                                    <td class="text-center">
                                        <input type="checkbox" name="" id="">
                                    </td>
                                    <td><span><i class="fa-regular fa-pen-to-square edit"></i><i class="fa-solid fa-trash delete"></i></i></span></td>
                                </tr>
                                <tr>
                                    <td>Cameron Williamson</td>
                                    <td>30/07/2022</td>
                                    <td>Male</td>
                                    <td>8/H</td>
                                    <td class="text-center">
                                        <input type="checkbox" name="" id="">
                                    </td>
                                    <td><span><i class="fa-regular fa-pen-to-square edit"></i><i class="fa-solid fa-trash delete"></i></i></span></td>
                                </tr>
                                <tr>
                                    <td>Cameron Williamson</td>
                                    <td>30/07/2022</td>
                                    <td>Male</td>
                                    <td>8/H</td>
                                    <td class="text-center">
                                        <input type="checkbox" name="" id="">
                                    </td>
                                    <td><span><i class="fa-regular fa-pen-to-square edit"></i><i class="fa-solid fa-trash delete"></i></i></span></td>
                                </tr>
                                <tr>
                                    <td>Cameron Williamson</td>
                                    <td>30/07/2022</td>
                                    <td>Male</td>
                                    <td>8/H</td>
                                    <td class="text-center">
                                        <input type="checkbox" name="" id="">
                                    </td>
                                    <td><span><i class="fa-regular fa-pen-to-square edit"></i><i class="fa-solid fa-trash delete"></i></i></span></td>
                                </tr>
                                <tr>
                                    <td>Cameron Williamson</td>
                                    <td>30/07/2022</td>
                                    <td>Male</td>
                                    <td>8/H</td>
                                    <td class="text-center">
                                        <input type="checkbox" name="" id="">
                                    </td>
                                    <td><span><i class="fa-regular fa-pen-to-square edit"></i><i class="fa-solid fa-trash delete"></i></i></span></td>
                                </tr>
                                <tr>
                                    <td>Cameron Williamson</td>
                                    <td>30/07/2022</td>
                                    <td>Male</td>
                                    <td>8/H</td>
                                    <td class="text-center">
                                        <input type="checkbox" name="" id="">
                                    </td>
                                    <td><span><i class="fa-regular fa-pen-to-square edit"></i><i class="fa-solid fa-trash delete"></i></i></span></td>
                                </tr>
                                <tr>
                                    <td>Cameron Williamson</td>
                                    <td>30/07/2022</td>
                                    <td>Male</td>
                                    <td>8/H</td>
                                    <td class="text-center">
                                        <input type="checkbox" name="" id="">
                                    </td>
                                    <td><span><i class="fa-regular fa-pen-to-square edit"></i><i class="fa-solid fa-trash delete"></i></i></span></td>
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