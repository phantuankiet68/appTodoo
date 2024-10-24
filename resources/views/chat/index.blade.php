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
                            @if($item->images->isNotEmpty())
                                <section class="wrapper" data-post-id="{{ $item->id }}">
                                <i class="fa-solid fa-arrow-left button prev" style="visibility: hidden;"></i>
                                    <div class="image-container">
                                        <div class="carousel">
                                            @foreach($item->images as $image)
                                                <img src="{{ asset($image->image_path) }}" alt="Image" class="fruit">
                                            @endforeach
                                        </div>
                                    </div>
                                    <i class="fa-solid fa-arrow-right button next"></i>
                                </section>
                            @else
                                <p>No images available for this post.</p>
                            @endif
                            <div class="localPost">
                                <i class="fa-solid fa-location-dot"></i> <p>{{$item->location}}</p>
                            </div>
                            <div class="spaceBettween">
                                <div class="infoIcon">
                                    <form action="{{ route('postlikes.store', $item->id) }}" method="POST">
                                        @csrf
                                        <button><i class="fa-solid fa-heart"></i> {{ $item->likes_count }}</button>
                                    </form>
                                    <button><i class="fa-solid fa-comment"></i> {{ $item->comments_count }}</button>
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
                                        <input type="text" id="commentContentPost" oninput="updateComment()">
                                        <button><i class="fa-solid fa-face-smile"></i></button>
                                        <button><i class="fa-solid fa-image"></i></button>
                                    </div>
                                    <div class="commentSendPost">
                                        <form action="{{ route('postcomments.store', $item->id) }}" method="POST">
                                        @csrf
                                            <input type="hidden" id="post_id" name="post_id" value="{{$item->id}}"/>
                                            @if (Auth::check())
                                                <input type="hidden" id="user_id" name="user_id" value="{{ Auth::user()->id }}"/>
                                            @endif
                                            <input type="hidden" id="comment" name="comment"/>
                                            <button class="btnSendComment"><i class="fa-solid fa-paper-plane"></i></button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            @if($item->images->isNotEmpty())
                                @foreach($item->comments as $comment)
                                <div class="commentShare">
                                    <div class="commentUserSharePost">
                                        <div class="commentUserImage">
                                            <img src="{{asset('assets/images/user2.jpg')}}" alt="" srcset="">
                                        </div>
                                    </div>
                                    <div class="commentSection">
                                        <div class="commentShareContent">
                                            <div class="commentShareUser">
                                                <i class="fa-solid fa-heart"></i> <p>{{$comment->user->full_name}}</p> <i class="fa-solid fa-heart"></i>
                                            </div>
                                            <p>{{$comment->comment}}</p>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            @else
                                <p>No images available for this post.</p>
                            @endif 
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
                                <a href="{{ route('info.index') }}">
                                    <p><i class="fa-solid fa-camera-retro"></i></p>
                                    <p>Photo</p>
                                </a>
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

            <div class="BtnCloseCreate" onclick="closeCreatePost()">
                <p>X</p>
            </div>
        </form>
    </div>
</div>

<script>

// Lấy tất cả các wrapper của các bài post
const wrappers = document.querySelectorAll(".wrapper");

wrappers.forEach(wrapper => {
    const carousel = wrapper.querySelector(".carousel"),
          images = wrapper.querySelectorAll(".fruit"),
          prevButton = wrapper.querySelector(".prev"),
          nextButton = wrapper.querySelector(".next");

    let imageIndex = 0; // Bắt đầu từ ảnh đầu tiên cho mỗi bài post

    // Cập nhật hiển thị của carousel
    const slideImage = () => {
        // Di chuyển carousel dựa trên chỉ số ảnh hiện tại
        carousel.style.transform = `translateX(-${imageIndex * 100}%)`;

        // Kiểm tra và ẩn/hiện nút Prev và Next
        if (imageIndex === 0) {
            prevButton.style.visibility = "hidden"; // Ẩn Prev nếu ở ảnh đầu tiên
        } else {
            prevButton.style.visibility = "visible";
        }

        if (imageIndex === images.length - 1) {
            nextButton.style.visibility = "hidden"; // Ẩn Next nếu ở ảnh cuối cùng
        } else {
            nextButton.style.visibility = "visible";
        }
    };

    // Khi người dùng click nút Next
    nextButton.addEventListener("click", () => {
        if (imageIndex < images.length - 1) {
            imageIndex++;
            slideImage();
        }
    });

    // Khi người dùng click nút Prev
    prevButton.addEventListener("click", () => {
        if (imageIndex > 0) {
            imageIndex--;
            slideImage();
        }
    });

    // Hiển thị lần đầu tiên, điều chỉnh trạng thái nút Prev (ẩn nếu đang ở ảnh đầu tiên)
    slideImage();
});




    function updateComment() {
        let commentContent = document.getElementById('commentContentPost').value;
        document.getElementById('comment').value = commentContent;
    }
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
    function closeCreatePost() {
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