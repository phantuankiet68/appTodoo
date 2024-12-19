<div class="InformationLeft">
    <div class="InformationLeftUser">
        <div class="InformationLeftUserImage">
            <img src="{{ asset(Auth::user()->image) }}" alt="Image Description" />
        </div>
        <div class="InformationLeftUserContent">
            <div class="InformationLeftUserContentTop">
                @if (Auth::check())
                    <p class="info-name">{{ Auth::user()->full_name }}</p>
                @endif
                <button class="info-btn-edit" onclick="PopupUpdateImage()"><i class="fa-solid fa-pen-to-square"></i></button>
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
        <a href="{{ route('information.index') }}" class="menu-item-1" data-menu="information"><i class="fa-solid fa-message"></i> Information</a>
        <a href="{{ route('profile.index') }}" class="menu-item-1" data-menu="profile"><i class="fa-solid fa-id-badge"></i> Profile</a>
        <a href="{{ route('posts.index') }}" class="menu-item-1" data-menu="posts"><i class="fa-solid fa-pen-to-square"></i> Posts</a>
        <a href="{{ route('friend.index') }}" class="menu-item-1" data-menu="friends"><i class="fa-solid fa-user-group"></i> Friends</a>
        <a href="{{ route('cv.index') }}" class="menu-item-1" data-menu="cv"><i class="fa-solid fa-file-lines"></i> CV</a>
        <a href="{{ route('salaries.index') }}" class="menu-item-1" data-menu="salaries"><i class="fa-solid fa-note-sticky"></i> {{ __('messages.Salary') }}</a>
        <a href="{{ route('expense.index') }}" class="menu-item-1" data-menu="expenses"><i class="fa-solid fa-file-lines"></i> {{ __('messages.Expenses') }}</a>
        <a href="{{ route('changePassword.index') }}" class="menu-item-1" data-menu="password"><i class="fa-solid fa-key"></i> Password</a>
        <a href="{{ route('note.index') }}" class="menu-item-1" data-menu="note"><i class="fa-solid fa-note-sticky"></i> Note</a>
    </div>
    <div class="InformationLeftListCard">
        <a href="{{ route('chartComponent.index') }}" class="InformationLeftCard info-card-one">
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

<div class="model" id="uploadImageUser">
    <div class="ModelUpload">
        <form id="contentForm" action="{{ route('uploadImage.public', ['id' => Auth::user()->id]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @if (Auth::check())
                <input type="hidden" name="user_id" value="{{ Auth::user()->id }}"/>
            @endif
            <div id="uploadArea" class="upload-area">
                <div class="upload-area__header">
                    <h1 class="upload-area__title">Upload your file</h1>
                    <p class="upload-area__paragraph">
                    File should be an image
                    <strong class="upload-area__tooltip">
                        Like
                        <span class="upload-area__tooltip-data"></span>
                    </strong>
                    </p>
                </div>
                <div id="dropZoon" class="upload-area__drop-zoon drop-zoon">
                    <span class="drop-zoon__icon">
                        <i class='bx bxs-file-image'></i>
                    </span>
                    <span id="loadingText" class="drop-zoon__loading-text">Please Wait</span>
                    <img src="" alt="Preview Image" id="previewImage" class="drop-zoon__preview-image" draggable="false">
                    <input type="file" name="image" id="fileInput" accept="image/*" required class="drop-zoon__file-input">
                </div>
                <div id="fileDetails" class="upload-area__file-details file-details">
                    <div id="uploadedFile" class="uploaded-file">
                    <div class="uploaded-file__icon-container">
                        <i class='bx bxs-file-blank uploaded-file__icon'></i>
                        <span class="uploaded-file__icon-text"></span>
                    </div>

                    <div id="uploadedFileInfo" class="uploaded-file__info">
                        <span class="uploaded-file__name">Proejct 1</span>
                        <span class="uploaded-file__counter">0%</span>
                    </div>
                    </div>
                </div>
            </div>
            <div class="form-btn">
                <button type="submit" id="submitButton">{{ __('messages.Save changes') }}</button>
            </div>
            <div class="BtnCloseCreate" onclick="closeUploadImage()">
                <p>X</p>
            </div>
        </form>
    </div>
</div>