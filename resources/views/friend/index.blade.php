@extends('app')

@section('title', 'Home Page')

@section('content')
<div class="todo">
    <div class="infoController">
        @include('info-user')
        <div class="InformationRight">
            <div class="friends_container">
                <input type="text" id="searchInput" placeholder="Search friends..." onkeyup="filterFriends()">
                <ul id="friendsList">
                    @foreach($friends as $item)
                    <li class="friend online">
                        <img src="{{ asset($item->user->image ?? 'assets/images/background.jpg') }}" alt="Image Description" />
                        <div>
                            <p id="chatName">{{$item-> full_name}}</p>
                            <span class="status">Online</span>
                        </div>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>


<script>


</script>
@endsection