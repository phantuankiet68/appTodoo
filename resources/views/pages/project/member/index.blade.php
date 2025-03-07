@extends('page')
@section('title', 'Home Page')
@section('content')

<div class="project-info">
    <div class="project-info-left">
        @include('pages.project.sidebar.index', ['name' => $project->name])
    </div>
    <div class="project-info-right">
        <div class="project-member">
            <i class="fa-solid fa-users"></i>
            <h3>{{ __('messages.Members') }}</h3>
        </div>   
        <div class="d-flex space-between gap-10">
            <div class="project-teams-Leader">
                <div class="d-flex space-between align-items bg-white gap-10 p-10">
                    <h3><i class="fa-solid fa-user"></i> {{ __('messages.Project Leader') }}</h3>
                    <button class="add-member" onclick="addMember()"><i class="fa-solid fa-plus"></i> {{ __('messages.Add new') }}</button>
                </div>
                <div class="project-teams-Leader-search">
                    <p>{{ __('messages.Filter user') }}</p>
                    <form action="{{ route('member_issue', ['name' => $project->name]) }}" method="GET">
                        <input type="text" class="search-filter-user" name="search_leader" 
                            placeholder="{{ __('messages.Please enter your name...') }}" 
                            value="{{ request('search_leader') }}">
                        <button type="submit">{{ __('messages.Search') }}</button>
                    </form>
                </div>
                <div class="project-teams-Leader-table">
                    <div class="project-teams-Leader-table-header">
                        <p class="w-20">{{ __('messages.Image') }}</p>
                        <p class="w-30">{{ __('messages.Name') }}</p>
                        <p class="w-25">{{ __('messages.Role') }}</p>
                        <p class="w-25">{{ __('messages.Joined on') }}</p>
                    </div>
                    <div class="project-teams-Leader-table-scroll">
                    @if ($member_leader->isEmpty())
                        <p>{{ __('messages.There are no members in this project.') }}</p>
                    @else
                        @foreach ($member_leader as $item)
                            <div class="project-teams-Leader-table-body">
                                <div class="Leader-table-body-img w-20">
                                    <div class="user-info-img">
                                        <img src="{{ asset($item->user->image ?? 'assets/images/service1.png') }}" alt="">
                                    </div>
                                </div>
                                <p class="w-30">{{ $item->user->full_name }}</p>
                                <p class="w-25">{{ $item->role == 0 ? __('messages.Leader') : __('messages.Member') }}</p>
                                <p class="w-25">23-06-2023</p>
                            </div>
                        @endforeach
                    @endif
                    </div>
                </div>
            </div>
            <div class="project-teams-Leader">
                <div class="d-flex space-between align-items bg-white gap-10 p-10">
                    <h3><i class="fa-solid fa-user"></i> {{ __('messages.Project Members') }}</h3>
                    <button class="add-member" onclick="addMember()"><i class="fa-solid fa-plus"></i> {{ __('messages.Add new') }}</button>
                </div>
                <div class="project-teams-Leader-search">
                    <p>{{ __('messages.Filter user') }}</p>
                    <form action="{{ route('member_issue', ['name' => $project->name]) }}" method="GET">
                        <input type="text" class="search-filter-user" name="search_member" 
                            placeholder="{{ __('messages.Please enter your name...') }}" 
                            value="{{ request('search_member') }}">
                        <button type="submit">{{ __('messages.Search') }}</button>
                    </form>
                </div>
                <div class="project-teams-Leader-table">
                    <div class="project-teams-Leader-table-header">
                        <p class="w-20">{{ __('messages.Image') }}</p>
                        <p class="w-30">{{ __('messages.Name') }}</p>
                        <p class="w-25">{{ __('messages.Role') }}</p>
                        <p class="w-25">{{ __('messages.Joined on') }}</p>
                    </div>
                    <div class="project-teams-Leader-table-scroll">
                        @if ($members->isEmpty())
                            <p>{{ __('messages.There are no members in this project.') }}</p>
                        @else
                            @foreach ($members as $item)
                                <div class="project-teams-Leader-table-body">
                                    <div class="Leader-table-body-img w-20">
                                        <div class="user-info-img">
                                            <img src="{{ asset($item->user->image ?? 'assets/images/service1.png') }}" alt="">
                                        </div>
                                    </div>
                                    <p class="w-30">{{ $item->user->full_name }}</p>
                                    <p class="w-25">{{ $item->role == 0 ? __('messages.Leader') : __('messages.Member') }}</p>
                                    <p class="w-25">23-06-2023</p>
                                </div>
                            @endforeach
                        @endif
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

@if (session('error'))
<div id="popup-error">
    <ul class="notifications">
        <li class="toast error hide">
            <div class="column">
                <i class="fa-solid fa-circle-check"></i>
                <span>Error:  {{ session('error') }}.</span>
            </div>
        </li>
    </ul>
</div>
@endif

@if ($errors->any())
    <div id="popup-error">
        <ul class="notifications">
            @foreach ($errors->all() as $error)
                <li class="toast error hide">
                    <div class="column">
                        <i class="fa-solid fa-circle-check"></i>
                        <span>Error:  {{ $error }}.</span>
                    </div>
                </li>
            @endforeach
        </ul>
    </div>
@endif

<div class="model" id="createMember">
    <div class="ModelCreateMember">
    <h2>{{ __('messages.Add new') }}</h5>
        @if (Auth::check())
            <input type="hidden" id="user_id" name="user_id" value="{{ Auth::user()->id }}"/>
        @endif
        <input type="hidden" name="project_id" value="{{ $project->id }}"/>

        <div class="form-input-category mt-10">
            <label for="status">{{ __('messages.Member') }}</label>
            <input type="text" class="input-name" id="name" name="name" autocomplete="off">
        </div>

        <div class="preview-name" style=" padding: 5px;"></div>

        <div id="selected-users" style="margin-top: 10px; display: flex; flex-direction: column; gap: 10px;"></div>

        <input type="hidden" name="user_ids" id="user_ids">

        <div class="form-select-category mt-10">
            <label for="role">{{ __('messages.Role') }}</label>
            <select name="role">
                <option value="0">{{ __('messages.Leader') }}</option>
                <option value="1">{{ __('messages.Member') }}</option>
            </select>
        </div>
        <div class="form-btn">
            <button>{{ __('messages.Add new') }}</button>
        </div>
        <div class="BtnCloseCategoryTask" onclick="closeMember()">
            <p>X</p>
        </div>
    </div>
</div>

<script>
    function addMember() {
        const createMember = document.querySelector('#createMember');
        if (createMember.style.display === 'none' || createMember.style.display === '') {
            createMember.style.display = 'block'; 
        } else {
            createMember.style.display = 'none';
        }
    }

    function closeMember() {
        const createMember = document.querySelector('#createMember');
        if (createMember.style.display === 'none' || createMember.style.display === '') {
            createMember.style.display = 'block'; 
        } else {
            createMember.style.display = 'none';
        }
    }
    
</script>

<script src="{{ asset('js/pages/project.js') }}"></script>


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function () {
    let selectedUsers = []; 

    $("#name").on("keyup", function () {
        let query = $(this).val().trim();

        if (query.length > 1) {
            $.ajax({
                url: "/search-users",
                type: "GET",
                data: { name: query },
                dataType: "json",
                success: function (response) {
                    let suggestionBox = $(".preview-name");
                    suggestionBox.empty(); 

                    response.forEach(user => {
                        if (!selectedUsers.some(u => u.id === user.id)) {
                            suggestionBox.append(`
                                <p class="user-suggestion" data-id="${user.id}" data-name="${user.full_name}">
                                    ${user.full_name} - ${user.email}
                                </p>
                            `);
                        }
                    });

                    $(".user-suggestion").on("click", function () {
                        let userId = $(this).data("id");
                        let userName = $(this).data("name");

                        if (!selectedUsers.some(u => u.id === userId)) {
                            selectedUsers.push({ id: userId, name: userName });

                            $("#selected-users").append(`
                                <div class="selected-user">
                                    <span>${userName}</span>
                                    <span class="remove-user" data-id="${userId}" style="cursor: pointer;"> X</span>
                                </div>
                            `);

                            $("#user_ids").val(selectedUsers.map(u => u.id).join(",")); 
                        }

                        $(".preview-name").empty();
                        $("#name").val("");
                    });
                },
                error: function (xhr, status, error) {
                    console.error("Lỗi API:", xhr.status, xhr.responseText);
                }
            });
        }
    });

    $(document).on("click", ".remove-user", function () {
        let userId = $(this).data("id");
        selectedUsers = selectedUsers.filter(u => u.id !== userId);
        $(this).parent().remove();
        $("#user_ids").val(selectedUsers.map(u => u.id).join(","));
    });
});

$(document).ready(function () {
    $("#createMember button").on("click", function (e) {
        e.preventDefault();

        let userIds = $("#user_ids").val();
        let role = $("select[name='role']").val();
        let projectId = $("input[name='project_id']").val();

        if (!userIds) {
            alert("Vui lòng chọn ít nhất một thành viên!");
            return;
        }

        $.ajax({
            url: `/v1/projects/${projectId}/add-members`,
            type: "POST",
            data: {
                _token: "{{ csrf_token() }}",
                user_ids: userIds,
                role: role
            },
            success: function (response) {
                alert(response.message);
                location.reload();
            },
            error: function (xhr) {
                alert("Có lỗi xảy ra! Vui lòng thử lại.");
                console.error(xhr.responseText);
            }
        });
    });
});

</script>


@endsection
