@extends('app')

@section('title', 'Home Page')

@section('content')
<div class="todo">
    <div class="infoController">
        @include('info-user')
        <div class="InformationRight">
            <div class="note-container">
                <div class="taskeu-container">
                    <div class="todo-container">
                        <div class="searchLink">
                            <form action="">
                                <div class="input-container">
                                    <input type="text" name="link" placeholder="Search text link...">
                                </div>
                            </form>
                        </div>
                        <form action="{{ route('link.store')}}" method="POST">
                            @csrf
                            @if (Auth::check())
                                <input type="hidden" name="user_id" value="{{ Auth::user()->id }}" />
                            @endif
                            <div class="input-container">
                                <input type="text" name="link" placeholder="Add a new link...">
                                <button type="submit" >+</button>
                            </div>
                        </form>
                        @foreach($links as $item)
                            <div class="button-group">
                                <a href="{{$item->link}}" target="_blank">Link tab</a>
                                <p>{{$item->link}}</p>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="taskeu-container">
                    <div class="todo-container">
                        <div class="searchLink">
                            <form action="">
                                <div class="input-container">
                                    <input type="text" name="link" placeholder="Search text note...">
                                </div>
                            </form>
                        </div>
                        <form action="{{ route('note.store')}}" method="POST">
                            @csrf
                            @if (Auth::check())
                                <input type="hidden" name="user_id" value="{{ Auth::user()->id }}" />
                            @endif
                            <div class="input-container">
                                <input type="text" name="note" placeholder="Add a new note...">
                                <button type="submit">+</button>
                            </div>
                        </form>
                        @foreach($notes as $item)
                            <div class="button-group">
                                <a href="" target="_blank">Link tab</a>
                                <p>{{$item->note}}</p>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<script>


</script>
@endsection