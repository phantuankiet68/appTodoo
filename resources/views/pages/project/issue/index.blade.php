@extends('page')
@section('title', 'Home Page')
@section('content')

<div class="project-info">
    <div class="project-info-left">
        @include('pages.project.sidebar.index', ['name' => $project->name])
    </div>
    <div class="project-info-right">
       <div class="project-info-issue">
            <h2>Search Conditions</h2>
            <form action="{{ route('projects.showIssues', ['name' => $project->name]) }}" method="GET" class="d-flex space-between gap-10 align-items-center">
                <div class="form-select">
                    <select name="status" id="status" class="w-full border-radius-5">
                        <option value="">{{ __('messages.All') }}</option>
                        <option value="1">{{ __('messages.Open') }}</option>
                        <option value="2">{{ __('messages.In Progress') }}</option>
                        <option value="3">{{ __('messages.Resolved') }}</option>
                        <option value="4">{{ __('messages.Closed') }}</option>
                    </select>
                </div>
                <div class="form-select">
                    <select name="priority" id="priority" class="w-full border-radius-5">
                        <option value="">{{ __('messages.All') }}</option>
                        <option value="1">{{ __('messages.Low') }}</option>
                        <option value="2">{{ __('messages.Normal') }}</option>
                        <option value="3">{{ __('messages.High') }}</option>
                    </select>
                </div>
                <div class="form-select">
                    <select name="category" id="category" class="w-full border-radius-5">
                        <option value="">{{ __('messages.All') }}</option>
                        <option value="1">{{ __('messages.Investigation') }}</option>
                        <option value="2">{{ __('messages.Bug Fixing') }}</option>
                        <option value="3">{{ __('messages.Create New') }}</option>
                    </select>
                </div>
                <div class="form-select">
                    <select name="assignee" id="assignee" class="w-full border-radius-5">
                        <option value="">{{ __('messages.All') }}</option>
                        @foreach ($members as $item)
                            @if ($item->user)
                                <option value="{{ $item->user->id }}">{{ $item->user->full_name }}</option>
                            @else
                                <option disabled>{{ __('messages.No User') }}</option>
                            @endif
                        @endforeach
                    </select>
                </div>
                <div class="form-select">
                    <select name="milestone" id="milestone" class="w-full border-radius-5">
                        <option value="">{{ __('messages.All') }}</option>
                        <option value="1">{{ __('messages.Deployment') }}</option>
                        <option value="2">{{ __('messages.Completed') }}</option>
                    </select>
                </div>
                <div class="input-big">
                    <input type="text" name="title" id="title" class="input-search-title" placeholder="{{ __('messages.Enter expense details...') }}">
                </div>
            </form>
            <div class="project-info-issue-table">
                <div class="project-info-issue-table-header">
                    <p class="w-10">Key</p>
                    <p class="w-25">{{ __('messages.Subject') }}</p>
                    <p class="w-10">{{ __('messages.Created by') }}</p>
                    <p class="w-10 text-center">{{ __('messages.Status') }}</p>
                    <p class="w-20">{{ __('messages.Assignee') }}</p>
                    <p class="w-10">{{ __('messages.Start Date') }}</p>
                    <p class="w-10">{{ __('messages.Due Date') }}</p>
                </div>
                <div class="project-info-issue-table-scroll">
                    @foreach ($issues as $item)
                    <div class="project-info-issue-table-body">
                        <div class="w-10">
                            <p class="key">{{  $item->key}}</p>
                        </div>
                        <p class="w-25 trustTitle">{{  $item->title}}</p>
                        <p class="w-10">{{  $item->user->full_name}}</p>
                        <div class="w-10">
                        @if ($item->status == 1)
                            <p class="open text-center">{{ __('messages.Open') }}</p>
                        @elseif ($item->status == 2)
                            <p class="in-progress text-center">{{ __('messages.In Progress') }}</p>
                        @elseif ($item->status == 3)
                            <p class="resolved text-center">{{ __('messages.Resolved') }}</p>
                        @else
                            <p class="closed text-center" >{{ __('messages.Closed') }}</p>
                        @endif
                        </div>
                        <div class="w-20 d-flex gap-10 align-items-center">
                            <div class="user-info-img">
                                <img src="{{ asset($item->assignee->image ?? 'assets/images/1740035601_team6.jpg') }}" alt="">
                            </div>
                            <p>{{  $item->assignee->full_name}} <br/> {{  $item->assignee->gender}}</p>
                        </div>
                        <p class="w-10 start_date">{{  $item->start_date}}</p>
                        <p class="w-10 {{ now()->gt(\Carbon\Carbon::parse($item->due_date)) ? 'red' : 'start_date' }}">
                            {{ $item->due_date }}
                        </p>
                    </div>
                    @endforeach
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
<script src="{{ asset('js/pages/project.js') }}"></script>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        const form = document.querySelector("form"); // Chọn form
        const inputs = form.querySelectorAll("select, input"); // Chọn tất cả select và input

        inputs.forEach((input) => {
            input.addEventListener("change", function () {
                form.submit(); // Tự động submit form khi có thay đổi
            });
        });
    });
</script>


@endsection
