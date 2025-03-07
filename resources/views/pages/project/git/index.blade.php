@extends('page')
@section('title', 'Home Page')
@section('content')

<div class="project-info">
    <div class="project-info-left">
        @include('pages.project.sidebar.index', ['name' => $project->name])
    </div>
    <div class="project-info-right">
        <div class="project-info-git">
            <h3>Repositories</h3>
            <div class="w-full p-10 flex-direction bg-white border-radius-5">
                <div class="w-full">
                    <input type="text" name="url" class="w-full input border-radius-5" value="{{ $gitRepo->repo_url }}"  placeholder="URL:"/> 
                </div>
            </div>
        </div>
        <div class="project-info-git">
        @if (!empty($branches))
            <h3>Branches</h3>
            <ul>
                @foreach ($branches as $branch)
                    <li>{{ $branch['name'] }}</li>
                @endforeach
            </ul>
        @else
            <p>Không có branches nào.</p>
        @endif
        </div>
        <div class="project-info-git-commit">
            <h3>Commits</h3>
            <ul>
                @foreach($commits as $commit)
                    <li>
                        <strong>{{ $commit['commit']['author']['name'] }}</strong>: 
                        {{ $commit['commit']['message'] }} <br>
                        🕒 Ngày commit: {{ \Carbon\Carbon::parse($commit['commit']['committer']['date'])->format('d/m/Y H:i') }} <br>
                        🔗 <a href="{{ $commit['html_url'] }}" target="_blank">Xem Commit</a>
                        <a href="{{ $commit['html_url'] }}" target="_blank">Xem Commit</a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
<script src="{{ asset('js/pages/project.js') }}"></script>


@endsection
