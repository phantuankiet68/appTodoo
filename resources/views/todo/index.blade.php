@extends('app')

@section('title', 'Home Page')

@section('content')
<div class="todo">
    <div class="TodoBodyContent">
        <div class="col-3">
            <div class="title-todo">
                <h2>{{ __('messages.Category') }}</h2>|<span>{{ __('messages.Tasks') }}</span>
            </div>
            <div class="header-todo">
                <form action="">
                    <div class="Users--right--btns">
                        <select name="date" id="date" class="select-dropdown doctor--filter" fdprocessedid="rdgk6g">
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
                <div class="headerTopSpeed">
                    <button class="btn-add" id="showCategoryBtn">{{ __('messages.Add New') }}</button>
                    <div class="CreateCategory">
                        <form action="">
                            <div class="form-input-category">
                                <label for="name">{{ __('messages.Name') }}</label>
                                <input type="text" class="input-name" id="name" name="name">
                            </div>
                            <div class="form-textarea-category">
                                <label for="description">{{ __('messages.Description') }}</label>
                                <textarea name="description"  id="description" class="textArea_description"></textarea>
                            </div>
                            <div class="form-btn">
                                <button>{{ __('messages.Add') }}</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="body-category-todo">
                <div class="recent--patient">
                    <div class="tables">
                        <table>
                            <thead>
                                <tr>
                                    <th>{{ __('messages.Name') }}</th>
                                    <th>{{ __('messages.Date Created') }}</th>
                                    <th class="text-center">{{ __('messages.Status') }}</th>
                                    <th class="text-center">{{ __('messages.Settings') }}</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Cameron Williamson</td>
                                    <td>30/07/2022</td>
                                    <td class="text-center"> 
                                        <input type="checkbox" name="" id="">
                                    </td>
                                    <td class="text-center"><span><i class="fa-regular fa-pen-to-square edit"></i><i class="fa-solid fa-trash delete"></i></i></span></td>
                                </tr>
                                <tr>
                                    <td>Cameron Williamson</td>
                                    <td>30/07/2022</td>
                                    <td class="text-center"> 
                                        <input type="checkbox" name="" id="">
                                    </td>
                                    <td class="text-center"><span><i class="fa-regular fa-pen-to-square edit"></i><i class="fa-solid fa-trash delete"></i></i></span></td>
                                </tr>
                                <tr>
                                    <td>Cameron Williamson</td>
                                    <td>30/07/2022</td>
                                    <td class="text-center"> 
                                        <input type="checkbox" name="" id="">
                                    </td>
                                    <td class="text-center"><span><i class="fa-regular fa-pen-to-square edit"></i><i class="fa-solid fa-trash delete"></i></i></span></td>
                                </tr>
                                <tr>
                                    <td>Cameron Williamson</td>
                                    <td>30/07/2022</td>
                                    <td class="text-center"> 
                                        <input type="checkbox" name="" id="">
                                    </td>
                                    <td class="text-center"><span><i class="fa-regular fa-pen-to-square edit"></i><i class="fa-solid fa-trash delete"></i></i></span></td>
                                </tr>
                                <tr>
                                    <td>Cameron Williamson</td>
                                    <td>30/07/2022</td>
                                    <td class="text-center"> 
                                        <input type="checkbox" name="" id="">
                                    </td>
                                    <td class="text-center"><span><i class="fa-regular fa-pen-to-square edit"></i><i class="fa-solid fa-trash delete"></i></i></span></td>
                                </tr>
                                <tr>
                                    <td>Cameron Williamson</td>
                                    <td>30/07/2022</td>
                                    <td class="text-center"> 
                                        <input type="checkbox" name="" id="">
                                    </td>
                                    <td class="text-center"><span><i class="fa-regular fa-pen-to-square edit"></i><i class="fa-solid fa-trash delete"></i></i></span></td>
                                </tr>
                                <tr>
                                    <td>Cameron Williamson</td>
                                    <td>30/07/2022</td>
                                    <td class="text-center"> 
                                        <input type="checkbox" name="" id="">
                                    </td>
                                    <td class="text-center"><span><i class="fa-regular fa-pen-to-square edit"></i><i class="fa-solid fa-trash delete"></i></i></span></td>
                                </tr>
                                <tr>
                                    <td>Cameron Williamson</td>
                                    <td>30/07/2022</td>
                                    <td class="text-center"> 
                                        <input type="checkbox" name="" id="">
                                    </td>
                                    <td class="text-center"><span><i class="fa-regular fa-pen-to-square edit"></i><i class="fa-solid fa-trash delete"></i></i></span></td>
                                </tr>
                                <tr>
                                    <td>Cameron Williamson</td>
                                    <td>30/07/2022</td>
                                    <td class="text-center"> 
                                        <input type="checkbox" name="" id="">
                                    </td>
                                    <td class="text-center"><span><i class="fa-regular fa-pen-to-square edit"></i><i class="fa-solid fa-trash delete"></i></i></span></td>
                                </tr>

                                <tr>
                                    <td>Cameron Williamson</td>
                                    <td>30/07/2022</td>
                                    <td class="text-center"> 
                                        <input type="checkbox" name="" id="">
                                    </td>
                                    <td class="text-center"><span><i class="fa-regular fa-pen-to-square edit"></i><i class="fa-solid fa-trash delete"></i></i></span></td>
                                </tr>
                                <tr>
                                    <td>Cameron Williamson</td>
                                    <td>30/07/2022</td>
                                    <td class="text-center"> 
                                        <input type="checkbox" name="" id="">
                                    </td>
                                    <td class="text-center"><span><i class="fa-regular fa-pen-to-square edit"></i><i class="fa-solid fa-trash delete"></i></i></span></td>
                                </tr>
                                <tr>
                                    <td>Cameron Williamson</td>
                                    <td>30/07/2022</td>
                                    <td class="text-center"> 
                                        <input type="checkbox" name="" id="">
                                    </td>
                                    <td class="text-center"><span><i class="fa-regular fa-pen-to-square edit"></i><i class="fa-solid fa-trash delete"></i></i></span></td>
                                </tr>
                                <tr>
                                    <td>Cameron Williamson</td>
                                    <td>30/07/2022</td>
                                    <td class="text-center"> 
                                        <input type="checkbox" name="" id="">
                                    </td>
                                    <td class="text-center"><span><i class="fa-regular fa-pen-to-square edit"></i><i class="fa-solid fa-trash delete"></i></i></span></td>
                                </tr>
                                
                            </tbody>
                        </table>
                        <div class="pagination">
                            <button id="prev" onclick="prevPage()">{{ __('messages.Prev') }}</button>
                            <span id="page-info">1</span>
                            <span id="page-info">2</span>
                            <button id="next" onclick="nextPage()">{{ __('messages.Next') }}</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-7">
            <div class="title-todo">
                <h2>{{ __('messages.Project') }}</h2>|<span>{{ __('messages.Tasks') }}</span>
            </div>
            <div class="header-todo-Content">
                <div class="header-todo-left">
                    <form action="">
                        <div class="Users--right--btns">
                            <select name="date" id="date" class="select-dropdown doctor--filter">
                                <option>Fillter</option>
                                <option value="free">Done</option>
                                <option value="scheduled">Unfinished</option>
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
                    <form action="">
                        <div class="Users--right--btns">
                            <select name="date" id="date" class="select-dropdown doctor--filter">
                                <option>Assignment</option>
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
                <div class="header-todo-right">
                    <button class="btn-add" id="openStaskIssue" fdprocessedid="z9dji27">{{ __('messages.Add New') }}</button>
                </div>
            </div>
            <div class="body-todo body-tables-todo">
                <div class="recent--patient">
                    <div class="tables">
                        <table>
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>{{ __('messages.Title') }}</th>
                                    <th style="width:200px;">{{ __('messages.Description') }}</th>
                                    <th>{{ __('messages.Date Created') }}</th>
                                    <th class="text-center">{{ __('messages.Create by') }}</th>
                                    <th>{{ __('messages.Update') }}</th>
                                    <th>{{ __('messages.Category') }}</th>
                                    <th>{{ __('messages.Status') }}</th>
                                    <th>{{ __('messages.Settings') }}</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Cameron Williamson</td>
                                    <td>
                                        <p class="text-truncate">aaaaaaaaaaaaaaaaaaaaaaaaaaaaasssssssssssssssssssssssssssss sssssssssssssssssssssssssssss</p>
                                    </td>
                                    <td>30/07/2022</td>
                                    <td class="text-center">Admin</td>
                                    <td>30/07/2022</td>
                                    <td>Làm việc nhà</td>
                                    <td class="text-center"> <input type="checkbox" name="" id=""></td>
                                    <td><span><i class="fa-regular fa-pen-to-square edit"></i><i class="fa-solid fa-trash delete"></i></i></span></td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>Cameron Williamson</td>
                                    <td>
                                        <p class="text-truncate">aaaaaaaaaaaaaaaaaaaaaaaaaaaaasssssssssssssssssssssssssssss sssssssssssssssssssssssssssss</p>
                                    </td>
                                    <td>30/07/2022</td>
                                    <td class="text-center">Admin</td>
                                    <td>30/07/2022</td>
                                    <td>Làm việc nhà</td>
                                    <td class="text-center"> <input type="checkbox" name="" id=""></td>
                                    <td><span><i class="fa-regular fa-pen-to-square edit"></i><i class="fa-solid fa-trash delete"></i></i></span></td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>Cameron Williamson</td>
                                    <td>
                                        <p class="text-truncate">aaaaaaaaaaaaaaaaaaaaaaaaaaaaasssssssssssssssssssssssssssss sssssssssssssssssssssssssssss</p>
                                    </td>
                                    <td>30/07/2022</td>
                                    <td class="text-center">Admin</td>
                                    <td>30/07/2022</td>
                                    <td>Làm việc nhà</td>
                                    <td class="text-center"> <input type="checkbox" name="" id=""></td>
                                    <td><span><i class="fa-regular fa-pen-to-square edit"></i><i class="fa-solid fa-trash delete"></i></i></span></td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>Cameron Williamson</td>
                                    <td>
                                        <p class="text-truncate">aaaaaaaaaaaaaaaaaaaaaaaaaaaaasssssssssssssssssssssssssssss sssssssssssssssssssssssssssss</p>
                                    </td>
                                    <td>30/07/2022</td>
                                    <td class="text-center">Admin</td>
                                    <td>30/07/2022</td>
                                    <td>Làm việc nhà</td>
                                    <td class="text-center"> <input type="checkbox" name="" id=""></td>
                                    <td><span><i class="fa-regular fa-pen-to-square edit"></i><i class="fa-solid fa-trash delete"></i></i></span></td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>Cameron Williamson</td>
                                    <td>
                                        <p class="text-truncate">aaaaaaaaaaaaaaaaaaaaaaaaaaaaasssssssssssssssssssssssssssss sssssssssssssssssssssssssssss</p>
                                    </td>
                                    <td>30/07/2022</td>
                                    <td class="text-center">Admin</td>
                                    <td>30/07/2022</td>
                                    <td>Làm việc nhà</td>
                                    <td class="text-center"> <input type="checkbox" name="" id=""></td>
                                    <td><span><i class="fa-regular fa-pen-to-square edit"></i><i class="fa-solid fa-trash delete"></i></i></span></td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>Cameron Williamson</td>
                                    <td>
                                        <p class="text-truncate">aaaaaaaaaaaaaaaaaaaaaaaaaaaaasssssssssssssssssssssssssssss sssssssssssssssssssssssssssss</p>
                                    </td>
                                    <td>30/07/2022</td>
                                    <td class="text-center">Admin</td>
                                    <td>30/07/2022</td>
                                    <td>Làm việc nhà</td>
                                    <td class="text-center"> <input type="checkbox" name="" id=""></td>
                                    <td><span><i class="fa-regular fa-pen-to-square edit"></i><i class="fa-solid fa-trash delete"></i></i></span></td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>Cameron Williamson</td>
                                    <td>
                                        <p class="text-truncate">aaaaaaaaaaaaaaaaaaaaaaaaaaaaasssssssssssssssssssssssssssss sssssssssssssssssssssssssssss</p>
                                    </td>
                                    <td>30/07/2022</td>
                                    <td class="text-center">Admin</td>
                                    <td>30/07/2022</td>
                                    <td>Làm việc nhà</td>
                                    <td class="text-center"> <input type="checkbox" name="" id=""></td>
                                    <td><span><i class="fa-regular fa-pen-to-square edit"></i><i class="fa-solid fa-trash delete"></i></i></span></td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>Cameron Williamson</td>
                                    <td>
                                        <p class="text-truncate">aaaaaaaaaaaaaaaaaaaaaaaaaaaaasssssssssssssssssssssssssssss sssssssssssssssssssssssssssss</p>
                                    </td>
                                    <td>30/07/2022</td>
                                    <td class="text-center">Admin</td>
                                    <td>30/07/2022</td>
                                    <td>Làm việc nhà</td>
                                    <td class="text-center"> <input type="checkbox" name="" id=""></td>
                                    <td><span><i class="fa-regular fa-pen-to-square edit"></i><i class="fa-solid fa-trash delete"></i></i></span></td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>Cameron Williamson</td>
                                    <td>
                                        <p class="text-truncate">aaaaaaaaaaaaaaaaaaaaaaaaaaaaasssssssssssssssssssssssssssss sssssssssssssssssssssssssssss</p>
                                    </td>
                                    <td>30/07/2022</td>
                                    <td class="text-center">Admin</td>
                                    <td>30/07/2022</td>
                                    <td>Làm việc nhà</td>
                                    <td class="text-center"> <input type="checkbox" name="" id=""></td>
                                    <td><span><i class="fa-regular fa-pen-to-square edit"></i><i class="fa-solid fa-trash delete"></i></i></span></td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>Cameron Williamson</td>
                                    <td>
                                        <p class="text-truncate">aaaaaaaaaaaaaaaaaaaaaaaaaaaaasssssssssssssssssssssssssssss sssssssssssssssssssssssssssss</p>
                                    </td>
                                    <td>30/07/2022</td>
                                    <td class="text-center">Admin</td>
                                    <td>30/07/2022</td>
                                    <td>Làm việc nhà</td>
                                    <td class="text-center"> <input type="checkbox" name="" id=""></td>
                                    <td><span><i class="fa-regular fa-pen-to-square edit"></i><i class="fa-solid fa-trash delete"></i></i></span></td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>Cameron Williamson</td>
                                    <td>
                                        <p class="text-truncate">aaaaaaaaaaaaaaaaaaaaaaaaaaaaasssssssssssssssssssssssssssss sssssssssssssssssssssssssssss</p>
                                    </td>
                                    <td>30/07/2022</td>
                                    <td class="text-center">Admin</td>
                                    <td>30/07/2022</td>
                                    <td>Làm việc nhà</td>
                                    <td class="text-center"> <input type="checkbox" name="" id=""></td>
                                    <td><span><i class="fa-regular fa-pen-to-square edit"></i><i class="fa-solid fa-trash delete"></i></i></span></td>
                                </tr>

                                <tr>
                                    <td>1</td>
                                    <td>Cameron Williamson</td>
                                    <td>
                                        <p class="text-truncate">aaaaaaaaaaaaaaaaaaaaaaaaaaaaasssssssssssssssssssssssssssss sssssssssssssssssssssssssssss</p>
                                    </td>
                                    <td>30/07/2022</td>
                                    <td class="text-center">Admin</td>
                                    <td>30/07/2022</td>
                                    <td>Làm việc nhà</td>
                                    <td class="text-center"> <input type="checkbox" name="" id=""></td>
                                    <td><span><i class="fa-regular fa-pen-to-square edit"></i><i class="fa-solid fa-trash delete"></i></i></span></td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>Cameron Williamson</td>
                                    <td>
                                        <p class="text-truncate">aaaaaaaaaaaaaaaaaaaaaaaaaaaaasssssssssssssssssssssssssssss sssssssssssssssssssssssssssss</p>
                                    </td>
                                    <td>30/07/2022</td>
                                    <td class="text-center">Admin</td>
                                    <td>30/07/2022</td>
                                    <td>Làm việc nhà</td>
                                    <td class="text-center"> <input type="checkbox" name="" id=""></td>
                                    <td><span><i class="fa-regular fa-pen-to-square edit"></i><i class="fa-solid fa-trash delete"></i></i></span></td>
                                </tr>
                                
                            </tbody>
                        </table>
                        <div class="pagination">
                            <button id="prev" onclick="prevPage()">{{ __('messages.Prev') }}</button>
                            <span id="page-info">1</span>
                            <span id="page-info">2</span>
                            <button id="next" onclick="nextPage()">{{ __('messages.Next') }}</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="modalCreateCategoryTask" class="modalCreateCategoryTask">
    <div class="CreateCategoryTaskContent">
        <span id="close-modal-btn" class="close">&times;</span>
        <h2>Modal Add</h2>
        <p>This is a sample modal popup window.</p>
        <p>Click the close button or outside the modal to close it.</p>
    </div>
</div>
@endsection