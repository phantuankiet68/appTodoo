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
            <button type="button" class="create" onclick="CreateCategoryForm()"><i class="fa-solid fa-plus"></i> Danh muc</button>
            <button type="button" class="change"><i class="fa-solid fa-cash-register"></i> Thay đổi</button>
        </div>
    </div>
    <div class="add-japanese-container">
        <div class="add-col-2">
            <div class="projectTodoNotify">
                <div class="projectTodoNotifyHeader">
                    <form action="" class="formSearch">
                        <div class="formInputSearch">
                            <input type="text" value="">
                        </div>
                        <button class="add-search"><i class="fa-solid fa-magnifying-glass"></i></button>
                    </form>
                    <button class="btnCategory" onclick="CreateCategoryForm()">{{ __('messages.Add New') }}</button>
                </div>
                <div class="body-category-todo mt-10">
                    <div class="recent--patient">
                        <div class="tables">
                            <table>
                                <thead>
                                    <tr>
                                        <th>{{ __('messages.Name') }}</th>
                                        <th>{{ __('messages.Meaning of word') }}</th>
                                        <th class="text-center">{{ __('messages.Settings') }}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>今日は</td>
                                        <td> Chào buổi trưa</td>
                                        <td class="text-center">
                                            <a href="#" onclick="showEditPopup()">
                                                <i class="fa-regular fa-pen-to-square edit"></i>
                                            </a>
                                            <a href="#" onclick="showDeletePopup()">
                                                <i class="fa-solid fa-trash delete"></i>
                                            </a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="add-col-5">
            <div class="projectTodoNotify">
                <div class="projectTodoNotifyHeader">
                    <form action="" class="formSearch">
                        <div class="formInputSearch">
                            <input type="text" value="">
                        </div>
                        <button class="add-search"><i class="fa-solid fa-magnifying-glass"></i></button>
                    </form>
                    <button class="btnCategory" onclick="CreateCategoryForm()">{{ __('messages.Add New') }}</button>
                </div>
                <div class="body-category-todo mt-10">
                    <div class="recent--patient">
                        <div class="tables">
                            <table>
                                <thead>
                                    <tr>
                                        <th>{{ __('messages.Structure') }}</th>
                                        <th>{{ __('messages.Structural meaning') }}</th>
                                        <th class="text-center">{{ __('messages.Settings') }}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>あまり~ない : không ~ lắm</td>
                                        <td>
                                            <div class="text-truncate">
                                                「あまり」là phó từ biểu thị mức độ. Khi làm chức năng bổ nghĩa cho tính từ thì 「あまり」 được đặt trước tính từ.
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <a href="#" onclick="showEditPopup()">
                                                <i class="fa-regular fa-pen-to-square edit"></i>
                                            </a>
                                            <a href="#" onclick="showDeletePopup()">
                                                <i class="fa-solid fa-trash delete"></i>
                                            </a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="add-col-5">
            <div class="projectTodoNotify">
                <div class="projectTodoNotifyHeader">
                    <form action="" class="formSearch">
                        <div class="formInputSearch">
                            <input type="text" value="">
                        </div>
                        <button class="add-search"><i class="fa-solid fa-magnifying-glass"></i></button>
                    </form>
                    <button class="btnCategory" onclick="CreateCategoryForm()">{{ __('messages.Add New') }}</button>
                </div>
                <div class="body-category-todo mt-10">
                    <div class="recent--patient">
                        <div class="tables">
                            <table>
                                <thead>
                                    <tr>
                                        <th>{{ __('messages.Name') }}</th>
                                        <th>{{ __('messages.Meaning of word') }}</th>
                                        <th class="text-center">{{ __('messages.Status') }}</th>
                                        <th class="text-center">{{ __('messages.Settings') }}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>今日は</td>
                                        <td> Chào buổi trưa</td>
                                        <td class="text-center "> 
                                            <input type="checkbox" name="" id="status" value="1">
                                        <td class="text-center">
                                            <a href="#" onclick="showEditPopup()">
                                                <i class="fa-regular fa-pen-to-square edit"></i>
                                            </a>
                                            <a href="#" onclick="showDeletePopup()">
                                                <i class="fa-solid fa-trash delete"></i>
                                            </a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="ModelCreateCategory">
    <form method="POST" action="{{ route('category.store') }}">
    @csrf
        <h2>{{ __('messages.Add New') }}</h5>
        @if (Auth::check())
            <input type="hidden" id="user_id" name="user_id" value="{{ Auth::user()->id }}"/>
        @endif
        <input type="hidden" id="key" name="key" value="5"/>
        <div class="form-input-category">
            <label for="name">{{ __('messages.Name') }}</label>
            <input type="text" class="input-name" id="name" name="name">
        </div>
        <div class="form-select-category mt-10">
            <label for="status">{{ __('messages.Status') }}</label>
            <select name="status" id="status">
                <option value="0">{{ __('messages.Hide') }}</option>
                <option value="1">{{ __('messages.Show') }}</option>
            </select>
        </div>
        <div class="form-btn">
            <button>{{ __('messages.Add') }}</button>
        </div>
        <div class="BtnCloseCategoryTask" onclick="closeCreateCategoryFormPopup()">
            <p>X</p>
        </div>
    </form>
</div>

<div class="ModelCreateCategory">
    <form method="POST" action="">
    @csrf
        <h2>{{ __('messages.Add New') }}</h5>
        <input type="hidden" id="key" name="key" value="5"/>
        <div class="form-input-category">
            <label for="name">{{ __('messages.Name') }}</label>
            <input type="text" class="input-name" id="name" name="name">
        </div>
        <div class="form-select-category mt-10">
            <label for="status">{{ __('messages.Status') }}</label>
            <select name="status" id="status">
                @foreach($category as $cate)
                    <option value="{{ $cate->id }}">{{ $cate->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-btn">
            <button>{{ __('messages.Add') }}</button>
        </div>
        <div class="BtnCloseCategoryTask" onclick="closeCreateCategoryFormPopup()">
            <p>X</p>
        </div>
    </form>
</div>

<script>
    function CreateCategoryForm() {
        const modelCreateTask = document.querySelector('.ModelCreateCategory');
        if (modelCreateTask.style.display === 'none' || modelCreateTask.style.display === '') {
            modelCreateTask.style.display = 'block'; 
        } else {
            modelCreateTask.style.display = 'none';
        }
    }
    function closeCreateCategoryFormPopup() {
        const modelCreateTask = document.querySelector('.ModelCreateCategory');
        if (modelCreateTask.style.display === 'none' || modelCreateTask.style.display === '') {
            modelCreateTask.style.display = 'block'; 
        } else {
            modelCreateTask.style.display = 'none';
        }
    }
</script>

@endsection