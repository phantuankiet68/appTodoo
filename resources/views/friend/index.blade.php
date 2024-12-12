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
                    <li class="friend online">
                        <img src="{{asset('assets/images/user1.jpg')}}" alt="Friend 1">
                        <div>
                            <p id="chatName">Jane Doe</p>
                            <span class="status">Online</span>
                        </div>
                    </li>
                    <li class="friend offline">
                        <img src="{{asset('assets/images/user2.jpg')}}" alt="Friend 2">
                        <div>
                            <p>John Smith</p>
                            <span class="status">Offline</span>
                        </div>
                    </li>
                    <li class="friend online">
                        <img src="{{asset('assets/images/user3.jpg')}}" alt="Friend 3">
                        <div>
                            <p>Alice Johnson</p>
                            <span class="status">Online</span>
                        </div>
                    </li>
                    <li class="friend offline">
                        <img src="{{asset('assets/images/user4.jpg')}}" alt="Friend 4">
                        <div>
                            <p>Michael Brown</p>
                            <span class="status">Offline</span>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>


<script>


</script>
@endsection