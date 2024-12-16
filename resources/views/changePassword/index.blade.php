@extends('app')

@section('title', 'Home Page')

@section('content')
<div class="todo">
    <div class="infoController">
        @include('info-user')
        <div class="InformationRight">
            <div class="resset-password">
                <div class="login-container">
                    <div class="form-box">
                        <p class="signup-prompt">Bạn muốn thay đổi mật khẩu đúng không?</p>
                        <form id="loginForm" action="{{ route('change.password', Auth::id()) }}" method="POST">
                            @csrf
                            <div class="input-box">
                                <span class="icon">🔒</span>
                                <input type="password" name="current_password" placeholder="Current Password" required>
                            </div>
                            <div class="input-box">
                                <span class="icon">🔒</span>
                                <input type="password" name="new_password" placeholder="New Password" required>
                            </div>
                            <div class="input-box">
                                <span class="icon">🔒</span>
                                <input type="password" name="new_password_confirmation" placeholder="Confirm Password" required>
                            </div>
                            <button type="submit" class="login-button">Reset</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="manage-auth">
              
            </div>
        </div>
    </div>
</div>

@if (session('success'))
<div id="popup-success">
    <ul class="notifications">
        <li class="toast success hide">
            <div class="column">
                <i class="fa-solid fa-circle-check"></i>
                <span>Success:  {{ session('success') }}.</span>
            </div>
        </li>
    </ul>
</div>
@endif
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const popup = document.querySelector('#popup-success');
        if (popup) {
            popup.style.display = 'flex';
            setTimeout(() => {
                popup.style.display = 'none';
            }, 6000);
        }
    });

</script>
@endsection