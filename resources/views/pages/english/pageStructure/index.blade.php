@extends('page')
@section('title', 'Home Page')
@section('content')

<div class="english-info">
    <div class="english-left">
        <div class="english-show-structure">
            @foreach ( $structures as $item )
            <div class="english-show-card">
                <p>{{ __('messages.Structure learning') }}: {{ $item->name }}</p>
                <p class="english-show-name"><b>{{ $item->structure }}</b></p>
                <p class="english-show-example">{{ __('messages.Example') }}:  {{ $item->example }}</p>
                <p class="english-show-translation">{{ __('messages.Translation') }}:  {{ $item->translation }}</p>
                <p class="english-show-meaning">{{ __('messages.Explanation') }}:  {{ $item->explanation }}</p>
            </div>
            @endforeach
        </div>
    </div>
    <div class="english-right">
        <div class="english-right-top">
            <a href="{{ route('showLesson', urlencode($lesson->name)) }}">{{ __('messages.Passage') }}</a>
            <a href="{{ route('showVocabulary', urlencode($lesson->name)) }}">{{ __('messages.Vocabulary learning') }}</a>
            <a href="{{ route('showStructure', urlencode($lesson->name)) }}" class="active">{{ __('messages.Structure learning') }}</a>
            <a  href="{{ route('showLearnVocabulary', urlencode($lesson->name)) }}">{{ __('messages.Learn vocabulary') }}</a>
            <a href="{{ route('showCheckVocabulary', urlencode($lesson->name)) }}">{{ __('messages.Vocabulary checking') }}</a>
            <a href="{{ route('showCheckStructure', urlencode($lesson->name)) }}">{{ __('messages.Structure checking') }}</a>
        </div>
        <div class="english-right-body-show">
            <p>{{ __('messages.why_cant_learn') }}</p>
            <p>{{ __('messages.why_difficult') }}</p>
            <p>{{ __('messages.why_forget') }}</p>
            <p>{{ __('messages.why_not_fluent') }}</p>
            <p>{{ __('messages.why_nervous') }}</p>
            <p>{{ __('messages.why_bad_pronunciation') }}</p>
            <p>{{ __('messages.why_understand_but_not_speak') }}</p>
            <p>{{ __('messages.why_confusing_grammar') }}</p>
            <p>{{ __('messages.why_listening_skills') }}</p>
            <p>{{ __('messages.why_no_motivation') }}</p>
        </div>
    </div>
</div>


<script>
    document.addEventListener("DOMContentLoaded", function () {
        let navItem = document.querySelector(".nav-item a.nav-link");

        navItem.style.display = "none";

        navItem.addEventListener("mouseover", function () {
            dropdown.style.display = "none";
        });

    });
</script>

@endsection
