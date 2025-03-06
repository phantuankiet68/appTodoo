@extends('page')
@section('title', 'Home Page')
@section('content')

<div class="project-info">
    <div class="project-info-left">
        @include('pages.project.sidebar.index', ['name' => $project->name])
    </div>
    <div class="project-info-right">
        <div class="project-info-right-top">
            <h3><i class="fa-solid fa-registered"></i> {{ $project->name }}</h3>
            <div  class="project-info-right-top-header">
                <button class="open">{{ __('messages.Open') }}: 1</button>
                <button class="doing">{{ __('messages.Doing') }}: 1</button>
                <button class="testing">{{ __('messages.Testing') }}: 1</button>
                <button class="done">{{ __('messages.Done') }}: 1</button>
            </div>
        </div>
        <div class="project-info-right-body">
            <div class="project-info-right-body-left">
                @foreach ($issues as $item)
                <a href="#" class="project-info-right-body-left-item">
                    <div class="project-info-right-body-left-item-top">
                        <div class="user-info">
                            <div class="user-info-img">
                                <img src="{{ asset('assets/images/service1.png') }}" alt="">
                            </div>
                            <div class="text-create-issue">
                                <p class="name">{{ $item->user->full_name }}</p>
                                <p>Assign: {{ $item->assignee->full_name }}</p>
                            </div>
                            <button class="text-add-issue">Create Issue</button>
                        </div>
                        <p>{{ \Carbon\Carbon::parse($item->created_at)->diffForHumans() }}</p>
                    </div>    
                    <div class="project-info-right-body-left-item-body">
                        <h3>{{ $item->title }}</h3>
                        <div class="trustTitle3">
                            {!! $item->description !!}
                        </div>
                    </div>
                </a>
                @endforeach
            </div>
            <div class="project-info-right-body-right">
                <div class="project-info-right-body-right-search">
                    <form action="">
                        <div class="w-full d-flex gap-5 flex-direction">
                            <label for="">{{ __('messages.Search') }}</label>
                            <input type="text" name="" id="">
                        </div>
                    </form>
                </div>
                <div class="project-info-right-body-right-note">
                    <p>* {{ __('messages.Notes') }}</p>
                    <form action="">
                        <div class="w-full d-flex gap-5 flex-direction">
                            <input type="text" name="" id="">
                        </div>
                    </form>
                    <div class="project-info-right-body-right-note-list">
                        <div class="project-info-right-body-right-note-item">
                            <div class="user-info space-between">
                                <div class="text-create-issue">
                                    <p class="name">Phan Tuấn Kiệt</p>
                                </div>
                                <button>3 month</button>
                            </div>
                            <p>Học theo phong cách w3 schooll</p>
                        </div>
                        <div class="project-info-right-body-right-note-item">
                            <div class="user-info space-between">
                                <div class="text-create-issue">
                                    <p class="name">Phan Tuấn Kiệt</p>
                                </div>
                                <button>3 month</button>
                            </div>
                            <p>Học theo phong cách w3 schooll</p>
                        </div>
                        <div class="project-info-right-body-right-note-item">
                            <div class="user-info space-between">
                                <div class="text-create-issue">
                                    <p class="name">Phan Tuấn Kiệt</p>
                                </div>
                                <button>3 month</button>
                            </div>
                            <p>Học theo phong cách w3 schooll</p>
                        </div>
                        <div class="project-info-right-body-right-note-item">
                            <div class="user-info space-between">
                                <div class="text-create-issue">
                                    <p class="name">Phan Tuấn Kiệt</p>
                                </div>
                                <button>3 month</button>
                            </div>
                            <p>Học theo phong cách w3 schooll</p>
                        </div>
                        <div class="project-info-right-body-right-note-item">
                            <div class="user-info space-between">
                                <div class="text-create-issue">
                                    <p class="name">Phan Tuấn Kiệt</p>
                                </div>
                                <button>3 month</button>
                            </div>
                            <p>Học theo phong cách w3 schooll</p>
                        </div>
                        <div class="project-info-right-body-right-note-item">
                            <div class="user-info space-between">
                                <div class="text-create-issue">
                                    <p class="name">Phan Tuấn Kiệt</p>
                                </div>
                                <button>3 month</button>
                            </div>
                            <p>Học theo phong cách w3 schooll</p>
                        </div>
                        <div class="project-info-right-body-right-note-item">
                            <div class="user-info space-between">
                                <div class="text-create-issue">
                                    <p class="name">Phan Tuấn Kiệt</p>
                                </div>
                                <button>3 month</button>
                            </div>
                            <p>Học theo phong cách w3 schooll</p>
                        </div>
                        <div class="project-info-right-body-right-note-item">
                            <div class="user-info space-between">
                                <div class="text-create-issue">
                                    <p class="name">Phan Tuấn Kiệt</p>
                                </div>
                                <button>3 month</button>
                            </div>
                            <p>Học theo phong cách w3 schooll</p>
                        </div>
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
<script src="{{ asset('js/pages/project.js') }}"></script>

@endsection
