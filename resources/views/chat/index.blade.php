@extends('app')

@section('title', 'Home Page')

@section('content')
<div class="todo">
    <div class="post-container">
        <div class="post-sidebar">
            <div class="post-sidebar-list">
                <a href="" class="menu-post">
                    <div class="post-sidebar-user">
                        <div class="imgUser">
                            <img src="{{ asset(Auth::user()->image ?? 'assets/images/background.jpg') }}" alt="Image Description" />
                        </div>
                        <div class="thinkUser userName">
                            <span>{{ Auth::user()->full_name }}</span>
                        </div>
                    </div>
                </a>
                <hr />
                <a href="" class="menu-post">
                    <div class="menu-post-box">
                        <i class="fa-solid fa-plus"></i> Thêm mới
                    </div>
                </a>
                <a href="" class="menu-post">
                    <div class="menu-post-box">
                        <i class="fa-regular fa-calendar-minus"></i> Bài viết
                    </div>
                </a>
                <a href="" class="menu-post">
                    <div class="menu-post-box">
                        <i class="fa-solid fa-people-group"></i> Nhóm
                    </div>
                </a>
                <a href="" class="menu-post">
                    <div class="menu-post-box">
                        <i class="fa-solid fa-layer-group"></i> Đã lưu
                    </div>
                </a>
                <a href="" class="menu-post">
                    <div class="menu-post-box">
                        <i class="fa-solid fa-store"></i> Chợ mới
                    </div>
                </a>
                <a href="" class="menu-post">
                    <div class="menu-post-box">
                        <i class="fa-solid fa-store"></i> Đồ ăn vặt
                    </div>
                </a>
                <a href="" class="menu-post">
                    <div class="menu-post-box">
                        <i class="fa-solid fa-mug-hot"></i> Đồ uống
                    </div>
                </a>
                <a href="" class="menu-post">
                    <div class="menu-post-box">
                        <i class="fa-solid fa-mug-hot"></i> Pháp luật
                    </div>
                </a>
                <a href="" class="menu-post">
                    <div class="menu-post-box">
                        <i class="fa-solid fa-mug-hot"></i> Sức khỏe
                    </div>
                </a>
                <a href="" class="menu-post">
                    <div class="menu-post-box">
                        <i class="fa-solid fa-headphones"></i> Giải trí
                    </div>
                </a>
            </div>
        </div>
        <div class="chat_post">
            <div class="chat_row">
                <div class="chat-left">
                    <div class="chat-center">
                        <div class="createPost">
                            <div class="titlePost">
                                <h3>{{ __('messages.Recent Stories') }}</h3>
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
                                        <img src="{{ asset(Auth::user()->image ?? 'assets/images/background.jpg') }}" alt="Image Description" />
                                    </div>
                                </div>
                                <div class="recentView">
                                    <div class="recentViewUser">
                                        <div class="recentViewUserImage">
                                        <img src="{{ asset('assets/images/background.jpg') }}" alt="Image Description" />
                                        </div>
                                    </div>
                                    <div class="recentViewImage">
                                        <img src="{{ asset('assets/images/background.jpg') }}" alt="Image Description" />
                                    </div>
                                </div>
                                <div class="recentView">
                                    <div class="recentViewUser">
                                        <div class="recentViewUserImage">
                                            <img src="{{asset('assets/images/body.jpg')}}" alt="">
                                        </div>
                                    </div>
                                    <div class="recentViewImage">
                                        <img src="{{asset('assets/images/body.jpg')}}" alt="">
                                    </div>
                                </div>
                                <div class="recentView">
                                    <div class="recentViewUser">
                                        <div class="recentViewUserImage">
                                            <img src="{{asset('assets/images/body.jpg')}}" alt="">
                                        </div>
                                    </div>
                                    <div class="recentViewImage">
                                        <img src="{{asset('assets/images/body.jpg')}}" alt="">
                                    </div>
                                </div>
                                <div class="recentView">
                                    <div class="recentViewUser">
                                        <div class="recentViewUserImage">
                                            <img src="{{asset('assets/images/body.jpg')}}" alt="">
                                        </div>
                                    </div>
                                    <div class="recentViewImage">
                                        <img src="{{asset('assets/images/body.jpg')}}" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        @foreach($posts as $item)
                        <div class="createPost">
                            <div class="chatPostUser">
                                <div class="chatImage">
                                    <div class="imgUser">
                                        <img src="{{ asset($item->user->image ?? 'assets/images/body.jpg') }}" alt="Image Description" />
                                    </div>
                                </div>
                                <div class="thinkUser userName">
                                    <span>{{$item->user->full_name}}</span>
                                    <p>{{ __('messages.Date Created') }}: {{$item->created_at}}</p>
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
                                <p>{{ __('messages.No images available for this post') }}</p>
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
                                            <img src="{{ asset(Auth::user()->image ?? 'assets/images/background.jpg') }}" alt="Image Description" />
                                        </div>
                                    </div>
                                    <div class="commentSendPost">
                                        <form action="{{ route('postcomments.store', $item->id) }}" method="POST">
                                        @csrf
                                            <input type="hidden" id="post_id" name="post_id" value="{{$item->id}}"/>
                                            @if (Auth::check())
                                                <input type="hidden" id="user_id" name="user_id" value="{{ Auth::user()->id }}"/>
                                            @endif
                                            <input type="text" name="comment"/>
                                            <button class="btnSendComment"><i class="fa-solid fa-paper-plane"></i></button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            @if($item->images->isNotEmpty())
                                <div class="commentsContainer">
                                </div>
                            @else
                                <p>No images available for this post.</p>
                            @endif 
                        </div>
                    </div>
                    @endforeach
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
    function closeCreateCategoryFormPopup() {
        const modelCreateTask = document.querySelector('.ModelCreateCategory');
        if (modelCreateTask.style.display === 'none' || modelCreateTask.style.display === '') {
            modelCreateTask.style.display = 'block'; 
        } else {
            modelCreateTask.style.display = 'none';
        }
    }
   $(document).ready(function(){
        function loadComments() {
            $.ajax({
                url: "{{ route('comments.get', $item->id) }}",
                method: "GET",
                success: function(data) {
                    $('.commentsContainer').empty();
                    
                    data.forEach(comment => {
                        const formattedDate = comment.user.created_at.replace("T", " ").split(".")[0];
                        $('.commentsContainer').append(`
                            <div class="commentShare">
                                <div class="commentUserSharePost">
                                    <div class="commentUserImage">
                                        <img src="{{ asset(Auth::user()->image ?? 'assets/images/background.jpg') }}" alt="Image Description" />
                                    </div>
                                </div>
                                <div class="commentSection">
                                    <div class="commentShareContent">
                                        <div class="commentShareUser">
                                             <p>${comment.user.full_name}</p> | <p>${formattedDate}</p>
                                        </div>
                                        <p>${comment.comment}</p>
                                    </div>
                                </div>
                            </div>
                        `);
                    });
                }
            });
        }

        setInterval(loadComments, 10000);

        loadComments();


        $('form').on('submit', function(event) {
            event.preventDefault(); 

            var formData = $(this).serialize(); 
            
            $.ajax({
                url: "{{ route('postcomments.store', $item->id) }}",
                method: "POST",
                data: formData,
                success: function(response) {
                    loadComments(); 
                    $('input[name="comment"]').val(''); 
                },
                error: function(xhr) {
                    console.log("Lỗi:", xhr.responseText);
                }
            });
        });
    });
const wrappers = document.querySelectorAll(".wrapper");

wrappers.forEach(wrapper => {
    const carousel = wrapper.querySelector(".carousel"),
          images = wrapper.querySelectorAll(".fruit"),
          prevButton = wrapper.querySelector(".prev"),
          nextButton = wrapper.querySelector(".next");

    let imageIndex = 0; 

    const slideImage = () => {
        carousel.style.transform = `translateX(-${imageIndex * 100}%)`;
        if (imageIndex === 0) {
            prevButton.style.visibility = "hidden"; 
        } else {
            prevButton.style.visibility = "visible";
        }

        if (imageIndex === images.length - 1) {
            nextButton.style.visibility = "hidden";
        } else {
            nextButton.style.visibility = "visible";
        }
    };

    nextButton.addEventListener("click", () => {
        if (imageIndex < images.length - 1) {
            imageIndex++;
            slideImage();
        }
    });

    prevButton.addEventListener("click", () => {
        if (imageIndex > 0) {
            imageIndex--;
            slideImage();
        }
    });

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