@extends('page')
@section('title', 'Home Page')
@section('content')

<div class="code">
    <div class="code-header">
        <div class="code-header-left">
            <form action="">
                <input type="text" name="" class="input" id="">
                <select name="choose" class="seclect">
                    <option value="0">free</option>
                    <option value="1">Pay a fee</option>
                </select>
            </form>
        </div>
        <div class="code-header-right">
            <div class="code-header-right-up">
                <button class="prev"><i class="fa-solid fa-circle-up"></i> Up</button>
                <button class="next">Down <i class="fa-solid fa-circle-down"></i></button>
            </div>
            <div class="code-header-right-up">
                <button class="prev"><i class="fa-solid fa-thumbs-up"></i> 100</button>
                <button class="next"><i class="fa-solid fa-thumbs-down"></i></i> 100</button>
            </div>
            <div class="code-header-right-pagi">
                <button class="prev"><i class="fa-solid fa-circle-left"></i> Prev</button>
                <button class="next">Next <i class="fa-solid fa-circle-right"></i></button>
            </div>
        </div>
    </div>
    <div class="code-body">
        @foreach ($blogs as $item)
        <a class="code-body-card">
            <div class="code-body-card-img">
                <img src="{{ asset($item->image_path) }}" alt="">
            </div>
            <div class="w-full d-flex space-between">
                <p class="user-add"><i class="fa-solid fa-user-nurse"></i> {{ $item->user ? $item->user->full_name : __('messages.Updating') }}</p>
                <p class="date-add"><i class="fa-solid fa-calendar-week"></i> {{ $item->created_at->format('Y-m-d') }}</p>
            </div>
            <p class="trustTitle1">{{ $item->title }}</p>
        </a>
        @endforeach
    </div>
</div>


<script>

</script>
@endsection