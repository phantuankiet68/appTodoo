@extends('layout')

@section('title', 'Home Page')

@section('content')
<div class="mt-120">
    <div class="breadcrumb flat">
        <a href="/" class="active">{{ __('messages.Home') }}</a>
        <a href="{{ route('blogs.list') }}">{{ __('messages.Blog') }}</a>
        <a href="#">{{ $blogs->id }} {{ $blogs->title }}</a>
    </div>
    <h1>{{ $blogs->title }}</h1>
    <div class="interfaces-content">
        <div class="interfaces-content-left">
            <div class="interfaces-title">
                <p><i class="fa-solid fa-user"></i> {{ $blogs->user ? $blogs->user->full_name : __('messages.Updating') }}</p>
                <p><i class="fa-solid fa-calendar-days"></i> {{ $blogs->created_at }}</p>
                <div class="action-view">
                    <p><i class="fa-solid fa-eye"></i> {{ $totalViews }}</p>
                    <form id="likeForm" action="{{ route('store_like.blogs', $blogs->id) }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                    <p class="eye-blue" onclick="document.getElementById('likeForm').submit()" style="cursor:pointer;">
                        <i class="fa-solid fa-thumbs-up"></i> {{ $totalLikes }}
                    </p>
                    <form id="shareForm" action="{{ route('store_share.blogs', $blogs->id) }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                    <p class="eye-green" onclick="document.getElementById('shareForm').submit()" style="cursor:pointer;">
                        <i class="fa-solid fa-share"></i> {{ $totalShares }}
                    </p>
                </div>
            </div>
            <div class="interfaces-content-left-image">
                <img src="{{ asset($blogs->image_path) }}" alt="">
            </div>
            <p>
                {!! $blogs->content !!}
            </p>
            @if (!empty($blogs->html))
                <h3>HTML</h3>
                <div class="code m-10">
                    <pre>
                        <code id="html-code">{!! htmlspecialchars_decode($blogs->html) !!}</code>
                    </pre>
                    <button class="copy" onclick="copyToClipboard('html-code')">Copy</button>
                    @if ($blogs->choose == 1)
                        <div class="show-code">
                            <p>{{ __('messages.You need to pay the registration fee!') }}</p>
                        </div>
                    @endif
                </div>
            @endif
            @if (!empty($blogs->css))
                <h3>CSS</h3>
                <div class="code m-10">
                    <pre>
                        <code id="css-code">{!! htmlspecialchars_decode($blogs->css) !!}</code>
                    </pre>
                    <button class="copy" onclick="copyToClipboard('css-code')">Copy</button>
                    @if ($blogs->choose == 1)
                        <div class="show-code">
                            <p>{{ __('messages.You need to pay the registration fee!') }}</p>
                        </div>
                    @endif
                </div>
            @endif
            @if (!empty($blogs->javascript))
                <h3>Javascript</h3>
                <div class="code m-10">
                    <pre>
                        <code id="javascript-code">{!! htmlspecialchars_decode($blogs->javascript) !!}</code>
                    </pre>
                    <button class="copy" onclick="copyToClipboard('javascript-code')">Copy</button>
                    @if ($blogs->choose == 1)
                        <div class="show-code">
                            <p>{{ __('messages.You need to pay the registration fee!') }}</p>
                        </div>
                    @endif
                </div>
            @endif
            @if (!empty($blogs->front_end))
                <h3>Front end</h3>
                <div class="code m-10">
                    <pre>
                        <code id="front_end-code">{!! htmlspecialchars_decode($blogs->front_end) !!}</code>
                    </pre>
                    <button class="copy" onclick="copyToClipboard('front_end-code')">Copy</button>
                    @if ($blogs->choose == 1)
                        <div class="show-code">
                            <p>{{ __('messages.You need to pay the registration fee!') }}</p>
                        </div>
                    @endif
                </div>
            @endif
            @if (!empty($blogs->back_end))
                <h3>Back end</h3>
                <div class="code m-10">
                    <pre>
                        <code id="back_end-code">{!! htmlspecialchars_decode($blogs->back_end) !!}</code>
                    </pre>
                    <button class="copy" onclick="copyToClipboard('back_end-code')">Copy</button>
                    @if ($blogs->choose == 1)
                        <div class="show-code">
                            <p>{{ __('messages.You need to pay the registration fee!') }}</p>
                        </div>
                    @endif
                </div>
            @endif
            <p>
                {!! $blogs->description !!}
            </p>
        </div>
        <div class="interfaces-content-right">
            <p class="post-interface">{{ __('messages.RelatedPosts') }}</p>
            @foreach($blogList as $item)
            <div class="interfaces-content-right-card">
                <div class="interfaces-content-right-card-img">
                    <img src="{{ asset($item->image_path) }}" />
                </div>
                <div class="interfaces-content-right-card-text">
                    <p class="trustTitle">{{ $item->title }}</p>
                    <p>{{ $item->created_at }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<script>
    function copyToClipboard(elementId) {
        let codeElement = document.getElementById(elementId);
        if (!codeElement) return;

        let textToCopy = codeElement.innerText || codeElement.textContent;
        let textArea = document.createElement("textarea");
        textArea.value = textToCopy;
        document.body.appendChild(textArea);
        textArea.select();
        document.execCommand("copy");
        document.body.removeChild(textArea);
        alert("Copied: " + elementId + " thành công!");
    }
</script>
@endsection