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
                                <h3>Create Post</h3>
                            </div>
                            <p class="space"></p>
                            <div class="chatPostUser mt-10">
                                <div class="chatImage">
                                    <div class="imgUser">
                                        <img src="{{asset('assets/images/vietnam.jpg')}}" alt="" srcset="">
                                    </div>
                                </div>
                                <div class="thinkUser">
                                    <input type="text" placeholder="Share some what you are thinking?">
                                </div>
                            </div>
                            <div class="spaceBettween mt-10">
                                <div class="infoIcon">
                                    <button><i class="fa-solid fa-location-dot"></i></button>
                                    <button><i class="fa-solid fa-music"></i></button>
                                    <button><i class="fa-solid fa-image"></i></button>
                                    <button><i class="fa-solid fa-video"></i></button>
                                    <button><i class="fa-solid fa-camera"></i></button>
                                </div>
                                <div class="infoPreview">
                                    <button>preview</button>    
                                </div>
                            </div>
                            <div class="btn-Post">
                                <button>Post</button>    
                            </div>
                        </div>
                    </div>
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
                            </div>
                        </div>
                    </div>
                    <div class="chat-center">
                        <div class="createPost">
                            <div class="chatPostUser">
                                <div class="chatImage">
                                    <div class="imgUser">
                                        <img src="{{asset('assets/images/vietnam.jpg')}}" alt="" srcset="">
                                    </div>
                                </div>
                                <div class="thinkUser userName">
                                    <span>Phan Tuấn Kiệt</span>
                                    <p>Date create: </p>
                                </div>
                            </div>
                            <div class="descriptionContent">
                                <p><b>✨ Khám phá thế giới Pod Vape - Trải nghiệm đỉnh cao cho mọi người yêu thích hương vị! 🚬💨</b></p>
                                <p>🔥 Tại sao nên chọn Pod</p>
                                <p> - ✨ Thiết kế thu gọn, thời thượng:phong cách sốngkhả năng động</p>
                                <p> - 🍓 Hương vị đa dạng, trải nghiệm hoàn hảo:Thương vị phong phú ,</p>
                                <p> - 🔧 Công nghệ chống rò rỉ tiên tiến:</p>
                                <p> - 🎯 Tiện ích nhanh chóng, phù hợp với mọi người :lắp ráp tinh dầuvà tận</p>
                                <p> - ⚡ sạc nhanh, pin dài :Pin bền bỉ để</p>
                            </div>
                            <div class="imagePost">
                                <img src="{{asset('assets/images/pod.jpg')}}" alt="" srcset="">
                            </div>
                            <div class="localPost">
                                <i class="fa-solid fa-location-dot"></i> <p>KCN Long Hậu 3 (Giai đoạn 1),xã Long Hậu, huyện Cần Giuộc, tỉnh Long An, Việt Nam.</p>
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
                    <div class="chat-center">
                        <div class="createPost">
                            <div class="chatPostUser">
                                <div class="chatImage">
                                    <div class="imgUser">
                                        <img src="{{asset('assets/images/vietnam.jpg')}}" alt="" srcset="">
                                    </div>
                                </div>
                                <div class="thinkUser userName">
                                    <span>Phan Tuấn Kiệt</span>
                                    <p>Date create: </p>
                                </div>
                            </div>
                            <div class="descriptionContent">
                                <p><b>✨ Khám phá thế giới Pod Vape - Trải nghiệm đỉnh cao cho mọi người yêu thích hương vị! 🚬💨</b></p>
                                <p>🔥 Tại sao nên chọn Pod</p>
                                <p> - ✨ Thiết kế thu gọn, thời thượng:phong cách sốngkhả năng động</p>
                                <p> - 🍓 Hương vị đa dạng, trải nghiệm hoàn hảo:Thương vị phong phú ,</p>
                                <p> - 🔧 Công nghệ chống rò rỉ tiên tiến:</p>
                                <p> - 🎯 Tiện ích nhanh chóng, phù hợp với mọi người :lắp ráp tinh dầuvà tận</p>
                                <p> - ⚡ sạc nhanh, pin dài :Pin bền bỉ để</p>
                            </div>
                            <div class="imagePost">
                                <img src="{{asset('assets/images/bannersales2.jpg')}}" alt="" srcset="">
                            </div>
                            <div class="localPost">
                                <i class="fa-solid fa-location-dot"></i> <p>KCN Long Hậu 3 (Giai đoạn 1),xã Long Hậu, huyện Cần Giuộc, tỉnh Long An, Việt Nam.</p>
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
                </div>
                <div class="chat-right">

                </div>
            </div>
        </div>
    </div>
</div>
@endsection