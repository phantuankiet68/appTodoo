@extends('app')

@section('title', 'Home Page')

@section('content')
<div class="todo">
    <div class="japanese-container">
        <div class="japanese-container-left">
            <h4>All lessons</h4>
            <div class="lessonList mt-10">
                @foreach($category as $cate)
                    <a href="/japanese/{{ $cate->id }}">{{ $cate->name }}  <i class="fa-solid fa-lock icon-lock"></i></a>
                @endforeach
            </div>
        </div>
        <div class="japanese-container-right">
            <div class="error-content lesson1">
                <ol class="ol-cards alternate" >
                    @foreach ($paragraph as $item)
                    <li style="--ol-cards-color-accent:#8cccff">
                        <a href="/paragraph/{{ $path_id }}">
                            <div class="step"><i class="fa-solid fa-book-open-reader"></i></div>
                            <div class="title"><p>{{$item->name}}</p> <p><i class="fa-solid fa-lock icon-lock"></i></p></div>
                            <div class="content">
                                <p>{{ __('messages.Date Created') }}: {{$item->created_at}} </p>
                                <p>{{ __('messages.Create by') }}: Admin </p>
                                <p>{{ __('messages.If you truly want to learn, please don’t give up. Thank you very much.') }}</p>
                            </div>
                        </a>
                    </li>
                    <li style="--ol-cards-color-accent:#ff9a9e">
                        <a href="/vocabularies/{{ $path_id }}">
                            <div class="step"><i class="fa-solid fa-book-open-reader"></i></div>
                            <div class="title"><p>Từ vựng</p> <p><i class="fa-solid fa-lock icon-lock"></i></p></div>
                            <div class="content">
                                <p>{{ __('messages.Date Created') }}: {{$item->created_at}} </p>
                                <p>{{ __('messages.Create by') }}: Admin </p>
                                <p>{{ __('messages.If you truly want to learn, please don’t give up. Thank you very much.') }}</p>
                            </div>
                        </a>
                    </li>
                    <li style="--ol-cards-color-accent:#eea1f1">
                        <a href="/structures/{{ $path_id }}">
                            <div class="step"><i class="fa-solid fa-book-bookmark"></i></div>
                            <div class="title"><p>Ngữ pháp</p> <p><i class="fa-solid fa-lock icon-lock"></i></p></div>
                            <div class="content">
                                <p>{{ __('messages.Date Created') }}: {{$item->created_at}} </p>
                                <p>{{ __('messages.Create by') }}: Admin </p>
                                <p>{{ __('messages.If you truly want to learn, please don’t give up. Thank you very much.') }}</p>
                            </div>
                        </a>
                    </li>
                    <li style="--ol-cards-color-accent:#ffc998">
                        <a href="/quiz/{{ $path_id }}">
                            <div class="step"><i class="fa-solid fa-circle-question"></i></div>
                            <div class="title"><p>Câu hỏi</p> <p><i class="fa-solid fa-lock icon-lock"></i></p></div>
                            <div class="content">
                                <p>{{ __('messages.Date Created') }}: {{$item->created_at}} </p>
                                <p>{{ __('messages.Create by') }}: Admin </p>
                                <p>{{ __('messages.If you truly want to learn, please don’t give up. Thank you very much.') }}</p>
                            </div>
                        </a>
                    </li>
                    @endforeach
                </ol>
            </div>
        </div>
    </div>
</div>
<script>

</script>
@endsection