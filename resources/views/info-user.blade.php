<div class="InformationLeft">
    <div class="InformationLeftUser">
        <div class="InformationLeftUserImage">
            <img src="{{asset('assets/images/user1.jpg')}}">
        </div>
        <div class="InformationLeftUserContent">
            <div class="InformationLeftUserContentTop">
                @if (Auth::check())
                    <p class="info-name">{{ Auth::user()->full_name }}</p>
                @endif
                <button class="info-btn-edit"><i class="fa-solid fa-pen-to-square"></i></button>
            </div>
            <div id="digital-clock" class="digital-clock"> </div>
            <div class="InformationLeftUserContentBottom">
                @if (Auth::check())
                    <p class="info-status"><i class="fa-solid fa-envelope"></i> {{ Auth::user()->email }}</p>
                @endif
                @if (Auth::check())
                    <p class="info-status"><i class="fa-solid fa-droplet"></i> Đang cập nhật</p>
                @endif
                @if (Auth::check())
                    <p class="info-status"><i class="fa-solid fa-phone-volume"></i> 0{{ Auth::user()->phone }}</p>
                @endif
            </div>
        </div>
    </div>
    <div class="InformationLeftMenu">
        <a href="{{ route('information.index') }}" class="menu-item" data-menu="information"><i class="fa-solid fa-message"></i> Information</a>
        <a href="{{ route('profile.index') }}" class="menu-item" data-menu="profile"><i class="fa-solid fa-id-badge"></i> Profile</a>
        <a href="{{ route('post.index') }}" class="menu-item" data-menu="posts"><i class="fa-solid fa-pen-to-square"></i> Posts</a>
        <a href="{{ route('friend.index') }}" class="menu-item" data-menu="friends"><i class="fa-solid fa-user-group"></i> Friends</a>
        <a href="{{ route('cv.index') }}" class="menu-item" data-menu="cv"><i class="fa-solid fa-file-lines"></i> CV</a>
        <a href="{{ route('salaries.index') }}" class="menu-item" data-menu="salaries"><i class="fa-solid fa-note-sticky"></i> {{ __('messages.Salary') }}</a>
        <a href="{{ route('expense.index') }}" class="menu-item" data-menu="expenses"><i class="fa-solid fa-file-lines"></i> {{ __('messages.Expenses') }}</a>
        <a href="{{ route('changePassword.index') }}" class="menu-item" data-menu="password"><i class="fa-solid fa-key"></i> Password</a>
        <a href="{{ route('note.index') }}" class="menu-item" data-menu="note"><i class="fa-solid fa-note-sticky"></i> Note</a>
    </div>
    <div class="InformationLeftListCard">
        <a href="" class="InformationLeftCard info-card-one">
            <div class="InformationLeftCardIcon">
                <i class="fa-solid fa-user ri-user-2-line"></i>
            </div>
            <div class="InformationLeftCardBody">
                <p>Component</p>
            </div>
            <div class="InformationLeftCardFooter">
                <button class="button-background">120</button>
            </div>
        </a>
        <a href="" class="InformationLeftCard info-card-two">
            <div class="InformationLeftCardIcon">
                <i class="fa-solid fa-user ri-user-2-line"></i>
            </div>
            <div class="InformationLeftCardBody">
                <p>Component</p>
            </div>
            <div class="InformationLeftCardFooter">
                <button class="button-background">120</button>
            </div>
        </a>
        <a href="" class="InformationLeftCard  info-card-two">
            <div class="InformationLeftCardIcon">
                <i class="fa-solid fa-user ri-user-2-line"></i>
            </div>
            <div class="InformationLeftCardBody">
                <p>Component</p>
            </div>
            <div class="InformationLeftCardFooter">
                <button class="info-btn-edit button-background">120</button>
            </div>
        </a>
        <a href="" class="InformationLeftCard info-card-one">
            <div class="InformationLeftCardIcon">
                <i class="fa-solid fa-user ri-user-2-line"></i>
            </div>
            <div class="InformationLeftCardBody">
                <p>Component</p>
            </div>
            <div class="InformationLeftCardFooter">
                <button class="info-btn-edit button-background">120</button>
            </div>
        </a>
        <a href="" class="InformationLeftCard info-card-one">
            <div class="InformationLeftCardIcon">
                <i class="fa-solid fa-user ri-user-2-line"></i>
            </div>
            <div class="InformationLeftCardBody">
                <p>Component</p>
            </div>
            <div class="InformationLeftCardFooter">
                <button class="button-background">120</button>
            </div>
        </a>
        <a href="" class="InformationLeftCard info-card-two">
            <div class="InformationLeftCardIcon">
                <i class="fa-solid fa-user ri-user-2-line"></i>
            </div>
            <div class="InformationLeftCardBody">
                <p>Component</p>
            </div>
            <div class="InformationLeftCardFooter">
                <button class="button-background">120</button>
            </div>
        </a>
        <a href="" class="InformationLeftCard  info-card-two">
            <div class="InformationLeftCardIcon">
                <i class="fa-solid fa-user ri-user-2-line"></i>
            </div>
            <div class="InformationLeftCardBody">
                <p>Component</p>
            </div>
            <div class="InformationLeftCardFooter">
                <button class="info-btn-edit button-background">120</button>
            </div>
        </a>
        <a href="" class="InformationLeftCard info-card-one">
            <div class="InformationLeftCardIcon">
                <i class="fa-solid fa-user ri-user-2-line"></i>
            </div>
            <div class="InformationLeftCardBody">
                <p>Component</p>
            </div>
            <div class="InformationLeftCardFooter">
                <button class="info-btn-edit button-background">120</button>
            </div>
        </a>
        <a href="" class="InformationLeftCard info-card-one">
            <div class="InformationLeftCardIcon">
                <i class="fa-solid fa-user ri-user-2-line"></i>
            </div>
            <div class="InformationLeftCardBody">
                <p>Component</p>
            </div>
            <div class="InformationLeftCardFooter">
                <button class="button-background">120</button>
            </div>
        </a>
        <a href="" class="InformationLeftCard info-card-two">
            <div class="InformationLeftCardIcon">
                <i class="fa-solid fa-user ri-user-2-line"></i>
            </div>
            <div class="InformationLeftCardBody">
                <p>Component</p>
            </div>
            <div class="InformationLeftCardFooter">
                <button class="button-background">120</button>
            </div>
        </a>
    </div>
</div>