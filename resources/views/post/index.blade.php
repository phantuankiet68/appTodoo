@extends('app')

@section('title', 'Home Page')

@section('content')
<div class="todo">
    <div class="infoController">
        @include('info-user')
        <div class="InformationRight">
            @foreach($posts as $item)
            <div class="post-user-info">
                <div class="chat-center">
                    <div class="createPost">
                        <div class="chatPostUser">
                            <div class="chatImage">
                                <div class="imgUser">
                                    <img src="{{ asset(Auth::user()->image ?? 'assets/images/background.jpg') }}" alt="Image Description" />
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
                                            <input type="hidden" name="user_id" value="{{ Auth::user()->id }}"/>
                                        @endif
                                        <input type="text" name="comment"/>
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
                                        <img src="{{ asset($comment->user->image ?? 'assets/images/background.jpg') }}" alt="Image Description" />
                                    </div>
                                </div>
                                <div class="commentSection">
                                    <div class="commentShareContent">
                                        <div class="commentShareUser">
                                            <p>{{$comment->user->full_name}}</p> | <p>{{$item->created_at}}</p>
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
        </div>
    </div>
</div>


<script>


</script>
@endsection