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
                <a href="{{ route('projects.showIssueDetail', ['name' => $project->name, 'key' => $item->key]) }}" class="project-info-right-body-left-item">
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
                <div class="project-info-right-body-right-note">
                    <p class="mb-5">* {{ __('messages.Notes') }}</p>
                    <form action="{{ route('projects.note') }}" method="POST" class="form-note">
                    @csrf
                        @if (Auth::check())
                            <input type="hidden" name="user_id" value="{{ Auth::user()->id }}" readonly/>
                        @endif
                        <input type="hidden" name="project_id" value="{{ $project->id }}"/>
                        <div class="height-22vh w-full d-flex gap-5 flex-direction">
                            <div class="form-textarea-category mt-10">
                                <textarea class="textarea" name="description" id="editor" placeholder="{{ __('messages.Use @mention to notify a colleague...') }}"></textarea>
                            </div>
                        </div>
                        <button class="button" type="submit">Submit</button>
                    </form>
                    <div class="project-info-right-body-right-note-list">
                        @foreach ($notes as $item)
                        <div class="project-info-right-body-right-note-item">
                            <div class="user-info bg-organce p-10 space-between">
                                <div class="text-create-issue">
                                    <p class="name">{{ $item->user->full_name }}</p>
                                </div>
                                <button>3 month</button>
                            </div>
                            <div class="w-full p-10">
                                {!! $item->description !!}
                            </div>
                        </div>
                        @endforeach
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
<script>
    ClassicEditor
        .create(document.querySelector('#editor'))
        .then(editor => {
            editorInstance = editor; 
        })
        .catch(error => {
            console.error(error);
        });

</script>
@endsection
