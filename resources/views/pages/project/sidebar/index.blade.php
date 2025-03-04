<div class="project-info-left-menu">
    <a href="" class="active">
        <i class="fa-solid fa-house"></i> {{ __('messages.Home') }}
    </a>
    <a href="{{ route('add_issue', ['name' => $name ?? 'default-project']) }}">
        <i class="fa-solid fa-plus"></i> {{ __('messages.Add Issue') }}
    </a>
    <a href="">
        <i class="fa-solid fa-list"></i> {{ __('messages.Issues') }}
    </a>
    <a href="">
        <i class="fa-solid fa-sliders"></i> {{ __('messages.Board') }}
    </a>
    <a href="">
        <i class="fa-solid fa-chart-gantt"></i> {{ __('messages.Gantt Chart') }}
    </a>
    <a href="">
        <i class="fa-solid fa-file"></i> {{ __('messages.Document') }}
    </a>
    <a href="">
        <i class="fa-solid fa-file-word"></i> {{ __('messages.Wiki') }}
    </a>
    <a href="">
        <i class="fa-solid fa-file-lines"></i> {{ __('messages.File') }}
    </a>
    <a href="">
        <i class="fa-solid fa-code-commit"></i> {{ __('messages.Git') }}
    </a>
    <a href="">
        <i class="fa-solid fa-users"></i> {{ __('messages.Members') }}
    </a>
    <a href="">
        <i class="fa-solid fa-gear"></i> {{ __('messages.Setting') }}
    </a>
</div>