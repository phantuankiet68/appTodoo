@extends('app')

@section('title', 'Home Page')

@section('content')
<div class="todo">
    <div class="todoHeader">
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
            <button type="button" class="create" onclick="CreateColorForm()"><i class="fa-solid fa-plus"></i> Tạo mới</button>
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
                                            <th class="text-center">{{ $item->created_at->format('d/m/Y') }}</th>
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
    function updateRoles(userId) {
        const checkbox = document.querySelector(`input[type="checkbox"][value="1"][onclick="updateRoles(${userId})"]`);
        const roles = checkbox.checked ? 0 : 1;

        fetch(`/user/update-roles/${userId}`, {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content') 
            },
            body: JSON.stringify({ roles: roles })
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                alert(data.message);
                // Tải lại trang sau khi cập nhật thành công
                window.location.reload();
            } else {
                alert('Failed to update user roles.');
            }
        })
        .catch(error => {
            console.error('Error:', error);
            alert('An error occurred. Please try again.');
        });
    }
</script>
@endsection