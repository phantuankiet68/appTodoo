@extends('app')

@section('title', 'Home Page')

@section('content')
<div class="todo">
    <div class="todoHeader">
        <div class="bodyHeader">
            <form action="">
                <div class="Users--right--btns">
                    <select name="roles" id="roles" class="select-dropdown doctor--filter">
                        <option>Date of Month</option>
                        <option value="0">Xác nhận</option> 
                        <option value="1">Chưa xác nhận</option> 
                    </select>
                </div>
            </form>
        </div>
        <div class="headerToQuesionRight">
            <form action="" method="GET" class="formSearch">
                <div class="formInputSearch">
                    <input type="text" name="search" placeholder="Tìm kiếm theo tên, email hoặc ngày tạo" value="{{ request('search') }}">
                    <button type="submit" class="add-search">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </button>
                </div>
            </form>
        </div>
    </div>
    <div class="component-container UserContainer">
        <div class="component-color">
            <div class="component-card">
                <div class="body-todo">
                    <div class="recent--patient">
                        <div class="tables">
                            <table>
                                <thead>
                                    <tr>
                                        <th>{{ __('messages.Name') }}</th>
                                        <th>{{ __('messages.Email') }}</th>
                                        <th  class="text-center">{{ __('messages.[Phone Number]') }}</th>
                                        <th class="text-center">{{ __('messages.Date Created') }}</th>
                                        <th class="text-center">{{ __('messages.Active') }}</th>
                                        <th class="text-center">{{ __('messages.Status') }}</th>
                                        <th class="text-center">{{ __('messages.Show') }}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($users as $item)
                                        <tr>
                                            <td>{{ $item->full_name }}</td>
                                            <td>{{ $item->email }}</td>
                                            <td class="text-center">0{{ $item->phone }}</td>
                                            <td class="text-center">{{ $item->created_at->format('d-m-Y') }}</td>
                                            <td class="text-center">{{ $item->roles == 1 ? 'Xác nhận' : 'Chưa xác nhận' }}</td>
                                            <td class="text-center"> 
                                                <input type="checkbox" value="1" {{ $item->roles == 1 ? 'checked' : '' }} onclick="updateRoles({{ $item->id }})">
                                            </td>
                                            <td class="text-center">
                                                <button class="btn-show" onclick="updateRoles({{ $item->id }})">
                                                    <i class="fa-solid fa-check-to-slot"></i>
                                                </button>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function updateRoles(id) {
        const url = "{{ route('settings.index', ['itemId' => ':id']) }}".replace(':id', id);
        window.location.href = url;
    }
</script>
@endsection