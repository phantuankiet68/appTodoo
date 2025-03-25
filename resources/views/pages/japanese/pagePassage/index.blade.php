@extends('page')
@section('title', 'Home Page')
@section('content')

<div class="english-info">
    <div class="english-left">
        <div class="english-left-vocabulary">
            @foreach ($vocabularies as $item)
            <div class="english-left-vocabulary-item">
                <p>{{ $item->name }}</p>
                <p>{{ $item->pronunciation }}</p>
                <p>{{ $item->meaning }}</p>
            </div>    
            @endforeach
        </div>
        @if ($passage)
            <div class="english-left-passage">
                {!! $passage->description !!}
            </div>
        @else
            <p>No passage found.</p>
        @endif
    </div>
    <div class="english-right">
        <div class="back p-10 bg-white border-radius-5">
            <a href="{{ route('japaneses.index')}}" class="d-flex gap-5 w-full"><i class="fa-solid fa-clock-rotate-left"></i>{{ __('messages.Go back') }}</a>
        </div>
        <div class="english-right-top">
            <a href="{{ route('japanese.showLesson', urlencode($lesson->name)) }}" class="active">{{ __('messages.Passage') }}</a>
            <a href="{{ route('japanese.showVocabulary', urlencode($lesson->name)) }}">{{ __('messages.Vocabulary learning') }}</a>
            <a href="{{ route('japanese.showStructure', urlencode($lesson->name)) }}">{{ __('messages.Structure learning') }}</a>
            <a  href="{{ route('japanese.showLearnVocabulary', urlencode($lesson->name)) }}">{{ __('messages.Learn vocabulary') }}</a>
            <a href="{{ route('japanese.showCheckVocabulary', urlencode($lesson->name)) }}">{{ __('messages.Vocabulary checking') }}</a>
            <a href="{{ route('japanese.showCheckStructure', urlencode($lesson->name)) }}">{{ __('messages.Structure checking') }}</a>
        </div>
        <div class="show-more">
            <div class="english-right-body-show">
                <p>✅{{ __('messages.Mind Map') }}</p>
                <p>✅{{ __('messages.Classification Chart') }}</p>
                <p>✅{{ __('messages.Flowchart') }}</p>
                <p>✅{{ __('messages.Comparison Chart') }}</p>
                <p>✅{{ __('messages.SWOT Analysis Chart') }}</p>
            </div>
        </div>
        <div class="show-image-footer">
            <div class="show-image">
                <img src="{{ asset('assets/images/ai.png') }}">
                <button class="button">{{ __('messages.Voice') }}</button>
            </div>
        </div>
    </div>
</div>



@endsection
