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
                            <button type="submit" class="login-button">Reset password</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<script>


</script>
@endsection