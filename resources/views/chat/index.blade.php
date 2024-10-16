@extends('app')

@section('title', 'Home Page')

@section('content')
<div class="todo">
    <div class="chat-container">
        <div class="chat_post">
            <div class="chat_row">
                <div class="chat-left">
                    <div class="chat-center">
                        <div class="createPost">
                            <div class="titlePost">
                                <h3>Recent Stories</h3>
                            </div>
                            <p class="space"></p>
                            <div class="recentStoriesView">
                                <div class="recentView">
                                    <div class="recentViewUser">
                                        <div class="recentViewUserImage">
                                            <i class="fa-solid fa-plus"></i>
                                        </div>
                                    </div>
                                    <div class="recentViewImage">
                                        <img src="{{asset('assets/images/background-login.jpg')}}" alt="">
                                    </div>
                                </div>
                                <div class="recentView">
                                    <div class="recentViewUser">
                                        <div class="recentViewUserImage">
                                            <img src="{{asset('assets/images/preview.jpg')}}" alt="">
                                        </div>
                                    </div>
                                    <div class="recentViewImage">
                                        <img src="{{asset('assets/images/background-login.jpg')}}" alt="">
                                    </div>
                                </div>
                                <div class="recentView">
                                    <div class="recentViewUser">
                                        <div class="recentViewUserImage">
                                            <img src="{{asset('assets/images/preview.jpg')}}" alt="">
                                        </div>
                                    </div>
                                    <div class="recentViewImage">
                                        <img src="{{asset('assets/images/background-login.jpg')}}" alt="">
                                    </div>
                                </div>
                                <div class="recentView">
                                    <div class="recentViewUser">
                                        <div class="recentViewUserImage">
                                            <img src="{{asset('assets/images/user1.jpg')}}" alt="">
                                        </div>
                                    </div>
                                    <div class="recentViewImage">
                                        <img src="{{asset('assets/images/background-login.jpg')}}" alt="">
                                    </div>
                                </div>
                                <div class="recentView">
                                    <div class="recentViewUser">
                                        <div class="recentViewUserImage">
                                            <img src="{{asset('assets/images/user1.jpg')}}" alt="">
                                        </div>
                                    </div>
                                    <div class="recentViewImage">
                                        <img src="{{asset('assets/images/background-login.jpg')}}" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @foreach($posts as $item)
                    <div class="chat-center">
                        <div class="createPost">
                            <div class="chatPostUser">
                                <div class="chatImage">
                                    <div class="imgUser">
                                        <img src="{{asset('assets/images/vietnam.jpg')}}" alt="" srcset="">
                                    </div>
                                </div>
                                <div class="thinkUser userName">
                                    <span>{{$item->user->full_name}}</span>
                                    <p>Date create: {{$item->created_at}}</p>
                                </div>
                            </div>
                            <div class="descriptionContent">
                                {!!$item->description!!}
                            </div>
                            <div class="imagePost">
                            @if($item->images->isNotEmpty())
                                @foreach($item->images as $image)
                                    <img src="{{ asset($image->image_path) }}" alt="Image" srcset="">
                                @endforeach
                            @else
                                <p>No images available for this post.</p>
                            @endif
                            </div>
                            <div class="localPost">
                                <i class="fa-solid fa-location-dot"></i> <p>{{$item->location}}</p>
                            </div>
                            <div class="spaceBettween">
                                <div class="infoIcon">
                                    <button><i class="fa-solid fa-heart"></i> 2 lượt</button>
                                    <button><i class="fa-solid fa-comment"></i> 2 lượt</button>
                                    <button><i class="fa-solid fa-share-from-square"></i> 2 lượt</button>
                                </div>
                            </div>
                            <div class="commentPost">
                                <div class="spaceBettween">
                                    <div class="commentUserPost">
                                        <div class="commentUserImage">
                                            <img src="{{asset('assets/images/user1.jpg')}}" alt="" srcset="">
                                        </div>
                                    </div>
                                    <div class="commentContentPost">
                                        <input type="text">
                                        <button><i class="fa-solid fa-face-smile"></i></button>
                                        <button><i class="fa-solid fa-image"></i></button>
                                        <button class="btnSendComment"><i class="fa-solid fa-paper-plane"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div class="commentShare">
                                <div class="commentUserSharePost">
                                    <div class="commentUserImage">
                                        <img src="{{asset('assets/images/user2.jpg')}}" alt="" srcset="">
                                    </div>
                                </div>
                                <div class="commentShareContent">
                                    <p>🎯 Tiện ích nhanh chóng, phù hợp với mọi người :lắp ráp tinh dầuvà tận</p>
                                    <span>Date create:</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="chat-right">
                    <div class="infoUser">
                        <div class="titlePost">
                            <h3>Your Page</h3>
                        </div>
                        <p class="space"></p>
                        <div class="settingUser">
                            <div class="settingUserImage">
                                <img src="{{asset('assets/images/user2.jpg')}}" alt="">
                            </div>
                            <div class="settingUserInfo">
                                <span><b>My create Page</b></span>
                                <button><i class="fa-solid fa-message"></i> Message</button>
                                <button><i class="fa-solid fa-bell"></i> Notify</button>
                                <button><i class="fa-solid fa-gear"></i> Settings</button>
                            </div>
                        </div>
                        <p class="space"></p>
                        <div class="actionUserChat">
                            <div class="actionUserChatTeam" onclick="showPost()">
                                <p><i class="fa-solid fa-pen-to-square"></i></p>
                                <p>Publish</p>
                            </div>
                            <div class="actionUserChatTeam">
                                <p><i class="fa-solid fa-camera-retro"></i></p>
                                <p>Photo</p>
                            </div>
                            <div class="actionUserChatTeam">
                                <p><i class="fa-brands fa-linkedin"></i></p>
                                <p>Link in</p>
                            </div>
                            <div class="actionUserChatTeam">
                                <p><i class="fa-solid fa-camera-retro"></i></p>
                                <p>Photo</p>
                            </div>
                        </div>
                        <p class="space"></p>
                        <div class="buttonList">
                            <button class="buttonLike"><i class="fa-regular fa-thumbs-up"></i> Likes</button>
                            <button class="buttonView"><i class="fa-regular fa-eye"></i> View</button>
                        </div>
                        <div class="showInfoUserF">
                            <div class="showInfoUserLike">
                                <button class="buttonLike"><i class="fa-regular fa-thumbs-up"></i> Likes: 50</button>
                            </div>
                            <div class="showInfoUserContent">
                                <p><i class="fa-solid fa-user-group"></i> Number of friends: 500</p>
                            </div>
                        </div>
                    </div>
                    <div class="infoUser">
                        <div class="titlePost">
                            <h3>Your Share</h3>
                        </div>
                        <p class="space"></p>
                        <div class="sales">
                            <div class="salesYellow">
                                <div>
                                    <i class="fa-solid fa-gift"></i>
                                    <p>Số lượng 20 chai đang được share với giá 270k.</p>
                                </div>
                            </div>
                        </div>
                        <p class="space"></p>
                        <div class="sales">
                            <div class="salesYellow">
                                <div>
                                    <i class="fa-solid fa-gift"></i>
                                    <p> Nếu thêm đầu pod giá 340k</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="chatUserList">
                <div class="chatUserItem">
                    <div class="chatUserItemImage">
                        <img src="{{asset('assets/images/user2.jpg')}}" alt="">
                    </div>
                </div>
                <div class="chatUserItem">
                    <div class="chatUserItemImage">
                        <img src="{{asset('assets/images/user2.jpg')}}" alt="">
                    </div>
                </div>
            </div>    
        </div>
    </div>
</div>

@if ($errors->any())
    <div id="popup-category" class="popup-category error">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="model" id="showPost">
    <div class="ModelCreateTodo">
        <form id="contentForm" method="POST" action="{{ route('posts.store') }}" enctype="multipart/form-data">
            @csrf
            <h2>{{ __('messages.Add New Workflow') }}</h2>

            @if (Auth::check())
                <input type="hidden" name="user_id" value="{{ Auth::user()->id }}"/>
            @endif

            <div class="form-textarea-category">
                @include('components.editor')
            </div>

            <div class="form-input-category mt-10">
                <label for="name">{{ __('messages.Location') }}</label>
                <input type="text" class="input-name" name="location" required>
            </div>
            <input type="text" name="description" id="hiddenContent" style="display:none;">
            <div class="form-input-category mt-10">
                <div id="drop-area">
                    <p>Drag & Drop images here or click to select files</p>
                    <input type="file" id="fileElem" name="images[]" multiple>
                </div>
                <div id="preview"></div>
            </div>

            <div class="form-btn">
                <button type="submit">{{ __('messages.Add New') }}</button>
            </div>

            <div class="BtnCloseCreate" onclick="closeCreateWorkflow()">
                <p>X</p>
            </div>
        </form>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const popup = document.querySelector('#popup-category');
        if (popup) {
            popup.style.display = 'block';

            setTimeout(() => {
                popup.style.display = 'none';
            }, 5000);
        }
    });

    function showPost() {
        const showPost = document.getElementById('showPost')
        if (showPost.style.display === 'none' || showPost.style.display === '') {
            showPost.style.display = 'block'; 
        } else {
            showPost.style.display = 'none';
        }
    }

    document.addEventListener('DOMContentLoaded', function () {
        const form = document.getElementById('contentForm');
        if (form) {
            form.onsubmit = function() {
                document.getElementById('hiddenContent').value = document.getElementById('content').innerHTML;
            };
        }
    });
    function formatDoc(cmd, value = null) {
        document.execCommand(cmd, false, value);
    }
    document.addEventListener('DOMContentLoaded', function() {
    const dropArea = document.getElementById('drop-area');
    const fileInput = document.getElementById('fileElem');
    const preview = document.getElementById('preview');

    // Khi người dùng nhấn vào khu vực drop, mở trình duyệt file
    dropArea.addEventListener('click', () => fileInput.click());

    // Xử lý khi có file được chọn
    fileInput.addEventListener('change', handleFiles);

    // Kéo-thả các tệp vào khu vực drop
    ['dragenter', 'dragover', 'dragleave', 'drop'].forEach(eventName => {
        dropArea.addEventListener(eventName, preventDefaults, false);
    });

    ['dragenter', 'dragover'].forEach(eventName => {
        dropArea.addEventListener(eventName, () => dropArea.classList.add('highlight'));
    });

    ['dragleave', 'drop'].forEach(eventName => {
        dropArea.addEventListener(eventName, () => dropArea.classList.remove('highlight'));
    });

    dropArea.addEventListener('drop', handleDrop);

    // Ngăn các sự kiện mặc định
    function preventDefaults(e) {
        e.preventDefault();
        e.stopPropagation();
    }

    // Xử lý các file sau khi kéo-thả
    function handleDrop(e) {
        const dt = e.dataTransfer;
        const files = dt.files;
        handleFiles({ target: { files } });
    }

    // Xử lý việc hiển thị ảnh xem trước
    function handleFiles(e) {
        const files = e.target.files;
        console.log('Number of files selected: ', files.length); // Ghi log số lượng file được chọn

        // Xóa ảnh xem trước cũ nếu có
        preview.innerHTML = '';

        Array.from(files).forEach(file => previewFile(file));
    }

    function previewFile(file) {
        const reader = new FileReader();
        reader.readAsDataURL(file);
        reader.onloadend = function() {
            const img = document.createElement('img');
            img.src = reader.result;
            img.classList.add('preview-image');
            img.style.width = '100px'; // Bạn có thể điều chỉnh kích thước hình ảnh ở đây
            img.style.margin = '5px'; // Thêm khoảng cách giữa các hình ảnh
            preview.appendChild(img);
        }
    }
});

</script>


@endsection