@extends('app')

@section('title', 'Home Page')

@section('content')
<div class="todo">
    <div class="TodoBodyContent">
        <div class="col-3">
            <div class="title-todo">
                <h2>{{ __('messages.Category') }}</h2>|<span>{{ __('messages.Tasks') }}</span>
            </div>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            @if (session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
            @endif
            <div class="header-todo">
                <form action="" class="formSearch">
                    <div class="formInputSearch">
                        <input type="text" value="">
                    </div>
                    <button class="add-search"><i class="fa-solid fa-magnifying-glass"></i></button>
                </form>
                <div class="headerTopSpeed">
                    <button class="btn-add" id="showCategoryBtn">{{ __('messages.Add New') }}</button>
                    <div class="CreateCategory">
                        <form method="POST" action="{{ route('category_task.store') }}">
                        @csrf
                            <div class="form-input-category">
                                <label for="name">{{ __('messages.Name') }}</label>
                                <input type="text" class="input-name" id="name" name="name">
                            </div>
                            <div class="form-textarea-category">
                                <label for="description">{{ __('messages.Description') }}</label>
                                <textarea name="description"  id="description" class="textArea_description"></textarea>
                            </div>
                            <div class="form-select-category">
                                <label for="status">{{ __('messages.Status') }}</label>
                                <select name="status" id="status">
                                    <option value="0">{{ __('messages.Hide') }}</option>
                                    <option value="1">{{ __('messages.Show') }}</option>
                                </select>
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
                                @foreach($categoryTasks as $task)
                                <tr>
                                    <td>{{ $task->name }}</td>
                                    <td>{{ $task->created_at->format('d-m-Y') }}</td>
                                    <td class="text-center"> 
                                        <input type="checkbox" name="status[]" id="status_{{ $task->id }}" 
                                            value="1" {{ $task->status == 1 ? 'checked' : '' }}>
                                    </td>
                                    <td class="text-center">
                                        <a href="{{ route('category_task.edit', $task->id) }}"><i class="fa-regular fa-pen-to-square edit"></i></a>
                                        <form action="{{ route('category_task.destroy', $task->id) }}" method="POST" style="display:inline-block;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="button"><i class="fa-solid fa-trash delete"></i></button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="d-flex justify-content-center link-margin">
                            {{ $categoryTasks->links('') }} <!-- Hoặc pagination::bootstrap-4 nếu bạn sử dụng Bootstrap 4 -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-9">
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
<script>
    setTimeout(function() {
        let alert = document.getElementById('categorytask-alert');
        if (alert) {
            alert.style.display = 'none';
        }
    }, 5000);
</script>
@endsection