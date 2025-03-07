<div class="project-info-left-menu">
    <a href="" data-menu="home_issue">
        <i class="fa-solid fa-house"></i> {{ __('messages.Home') }}
    </a>
    <a href="{{ route('add_issue', ['name' => $name ?? 'default-project']) }}" data-menu="add_issue">
        <i class="fa-solid fa-plus"></i> {{ __('messages.Add Issue') }}
    </a>
    <a href="{{ route('projects.showIssues', ['name' => $name ?? 'default-project']) }}" data-menu="issue_issue">
        <i class="fa-solid fa-list"></i> {{ __('messages.Issues') }}
    </a>
    <a href="" data-menu="board_issue">
        <i class="fa-solid fa-sliders"></i> {{ __('messages.Board') }}
    </a>
    <a href="" data-menu="gantt_issue">
        <i class="fa-solid fa-chart-gantt"></i> {{ __('messages.Gantt Chart') }}
    </a>
    <a href="" data-menu="document_issue">
        <i class="fa-solid fa-file"></i> {{ __('messages.Document') }}
    </a>
    <a href="{{ route('get.git', ['name' => $name ?? 'default-project']) }}" data-menu="git_issue">
        <i class="fa-solid fa-code-commit"></i> {{ __('messages.Git') }}
    </a>
    <a href="{{ route('member_issue', ['name' => $name ?? 'default-project']) }}" data-menu="member_issue">
        <i class="fa-solid fa-users"></i> {{ __('messages.Members') }}
    </a>
    <a href="" data-menu="setting_issue">
        <i class="fa-solid fa-gear"></i> {{ __('messages.Setting') }}
    </a>
</div>