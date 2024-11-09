@extends('app')

@section('title', 'Home Page')

@section('content')
<div class="todo">
    <div class="infoController">
        <div class="infoControllerLeft">
            <div class="infoControllerUser">
                <div class="infoControllerUserImage">
                    <img src="{{asset('assets/images/user1.jpg')}}">
                </div>   
            </div>
            <div class="infoUserContent">
                <h2 class="text-center">Phan Tuấn kiệt</h2>
            </div>
            <div class="infoControllerMenu">
                <div class="infoControllerMenuList">
                    <button onclick="showContent('item1', this)" id="menu-item1"><i class="fa-solid fa-id-badge"></i> Personal Information</button>
                    <button onclick="showContent('item2', this)" id="menu-item2"><i class="fa-solid fa-message"></i> Messages</button>
                    <button onclick="showContent('item3', this)" id="menu-item3"><i class="fa-solid fa-pen-to-square"></i> Posts</button>
                    <button onclick="showContent('item4', this)" id="menu-item4"><i class="fa-solid fa-user-group"></i> Friends</button>
                    <button onclick="showContent('item5', this)" id="menu-item5"><i class="fa-solid fa-key"></i> Change Password</button>
                    <button onclick="showContent('item6', this)" id="menu-item6"><i class="fa-solid fa-link"></i> Important Links</button>
                    <button onclick="showContent('item7', this)" id="menu-item7"><i class="fa-solid fa-note-sticky"></i> Note</button>
                    <button onclick="showContent('item8', this)" id="menu-item8"><i class="fa-solid fa-file-lines"></i> CV</button>
                </div>
            </div>
        </div>
        <div class="infoControllerRight" id="item1">
            <div class="infoControllerRightUser">
                @foreach($profiles as $item)
                <form method="POST" id="edit-profile-form-{{ $item->id }}" class="edit-profile-form">
                    @csrf
                    @method('PUT')
                    <div class="infoControllerRightContentUser">
                        <input type="hidden" id="profile_id" value="{{ $item->id }}"/>
                        @if (Auth::check())
                            <input type="hidden" name="user_id" value="{{ Auth::user()->id }}"/>
                        @endif
                        <div class="form-input-category">
                            <input type="text" class="input-name" name="name" value="{{ $item->name }}" placeholder="Nhập họ và tên....">
                        </div>
                        <div class="form-input-category">
                            <input type="text" class="input-name" name="email" value="{{ $item->email }}" placeholder="Nhập email....">
                        </div>
                        <div class="form-input-category">
                            <input type="text" class="input-name" name="phone" value="0{{ $item->phone }}" placeholder="Nhập số điện thoại....">
                        </div>
                        <div class="form-input-category">
                            <input type="date" class="input-name" name="date_of_birth" value="{{ $item->date_of_birth }}">
                        </div>
                        <div class="form-input-category">
                            <input type="text" class="input-name" name="gender" value="{{ $item->gender}}">
                        </div>
                    </div>
                    <div class="infoControllerRightContentUser col-4">
                        <div class="form-input-category">
                            <input type="text" class="input-name" name="link_facebook" value="{{ $item->link_facebook == NULL ? __('messages.Please update the Facebook link') : $item->link_facebook }}">
                        </div>
                        <div class="form-input-category">
                            <input type="text" class="input-name" name="link_instagram" value="{{ $item->link_instagram == NULL ? __('messages.Please update the Instagram link') : $item->link_instagram }}">
                        </div>
                        <div class="form-input-category">
                            <input type="text" class="input-name" name="link_linkin" value="{{ $item->link_linkin == NULL ? __('messages.Please update the LinkedIn link') : $item->link_linkin }}">
                        </div>
                        <div class="form-input-category">
                            <input type="text" class="input-name" name="link_link" value="{{ $item->link_link == NULL ? __('messages.Please update the personal link') : $item->link_link }}">
                        </div>
                        <div class="form-input-category">
                            <input type="text" class="input-name" name="address" value="{{ $item->address }}">
                        </div>
                    </div>
                    <div class="infoControllerRightContentUser col-4">
                        <div class="form-textarea-category">
                            <textarea name="description" class="textarea" placeholder="{{ __('messages.Enter personal introduction...') }}">{{ $item->description }}</textarea>
                        </div>
                        <div class="form-input-category">
                            <input type="text" class="input-name" name="roles" disabled value="{{ $item->roles == 1 ? 'Người dùng' : 'Admin' }}">
                            <button type="submit" class="input-name">{{ __('messages.Save changes') }}</button>
                        </div>
                    </div>
                </form>
                @endforeach
            </div>
            <div class="infoControllerRightInfo">
                <div class="infoControllerRightInfoList">
                    <div class="form-item-info mt-2" id="la">
                        <div class="AddButtonEd">
                            <label for="">{{ __('messages.Languages') }}</label>
                        </div>
                        @foreach($languages as $lang)
                            <form class="EditProfileLanguage " action="{{ route('languageProfile.update', ['id' => $lang->id]) }}" method="POST">
                                @csrf
                                <div class="language-fields">
                                    <input placeholder="{{ __('messages.Enter here') }}" class="form-control" name="name" value="{{$lang->name}}" />
                                </div>
                                <button type="submit" class="btn btn-primary btn-sm"><i class="fa-solid fa-pen-to-square"></i></button>
                            </form>
                        @endforeach
                        <form action="{{ route('languageProfile.store') }}" method="POST">
                            @csrf
                            @if (Auth::check())
                                <input type="hidden" name="user_id" value="{{ Auth::user()->id }}" />
                            @endif
                            <div id="language-fields">
                                <input placeholder="{{ __('messages.Enter here') }}" class="form-control laField" name="languages[]" />
                            </div>
                            <button type="button" class="btn btn-primary btn-sm" onclick="addNewLanField()">Add Another Language</button>
                            <button type="submit" class="btn btn-primary btn-sm">Submit</button>
                        </form>
                    </div>
                    <div class="form-item-info" id="Objective">
                        <div class="AddButtonEd">
                            <label for="">{{ __('messages.Objective') }}</label>
                        </div>
                        @foreach($objectives as $item)
                            <form class="EditProfileLanguage " action="{{ route('ProfileObjective.update', ['id' => $item->id]) }}" method="POST">
                                @csrf
                                <input type="hidden" id="future_id" value="{{ $item->id }}"/>
                                <div class="futureFields">
                                    <textarea placeholder="{{ __('messages.Enter here') }}" class="textarea edField mt-2 form-control" rows="3" name="description">{{$item->description}}</textarea>
                                </div>
                                <button type="submit" class="btn btn-primary btn-sm"><i class="fa-solid fa-pen-to-square"></i></button>
                            </form>
                        @endforeach
                        <form action="{{ route('ProfileObjective.store') }}" method="POST">
                            @csrf
                            @if (Auth::check())
                                <input type="hidden" name="user_id" value="{{ Auth::user()->id }}" />
                            @endif
                            <div id="futureFieldsContainer">
                                <textarea placeholder="{{ __('messages.Enter here') }}" class="textarea edField mt-2 form-control" rows="3" name="objectives[]"></textarea>
                            </div>
                            <button type="button" class="btn btn-primary btn-sm" onclick="addNewObjectiveField()">Add Another Objective</button>
                            <button type="submit" class="btn btn-primary btn-sm">Submit</button>
                        </form>
                    </div>
                    <div class="form-item-info" id="ed">
                        <div class="AddButtonEd">
                            <label for="">{{ __('messages.Education') }}</label>
                        </div>
                        @foreach($educations as $education)
                            <form class="EditProfileLanguage " action="{{ route('educationProfile.update', ['id' => $education->id]) }}" method="POST">
                                @csrf
                                <div class="edFields">
                                    <textarea placeholder="{{ __('messages.Enter here') }}" class="textarea edField mt-2 form-control" rows="3" name="description">{{$education->description}}</textarea>
                                </div>
                                <button type="submit" class="btn btn-primary btn-sm"><i class="fa-solid fa-pen-to-square"></i></button>
                            </form>
                        @endforeach
                        <form action="{{ route('educationProfile.store') }}" method="POST">
                            @csrf
                            @if (Auth::check())
                                <input type="hidden" name="user_id" value="{{ Auth::user()->id }}" />
                            @endif
                            <div id="edFields" class="edFields">
                                <textarea placeholder="{{ __('messages.Enter here') }}" class="textarea edField mt-2 form-control" rows="3" name="educations[]"></textarea>
                            </div>
                            <button type="button" class="btn btn-primary btn-sm" onclick="addNewEducationField()">Add Another Education</button>
                            <button type="submit" class="btn btn-primary btn-sm">Submit</button>
                        </form>
                    </div>
                    <div class="form-item-info" id="Future">
                        <div class="AddButtonEd">
                            <label for="">{{ __('messages.Future Direction') }}</label>
                        </div>
                        @foreach($futures as $item)
                            <form class="EditProfileLanguage " action="{{ route('FutureDirection.update', ['id' => $item->id]) }}" method="POST">
                                @csrf
                                <input type="hidden" id="future_id" value="{{ $item->id }}"/>
                                <div class="futureFields">
                                    <textarea placeholder="{{ __('messages.Enter here') }}" class="textarea edField mt-2 form-control" rows="3" name="description">{{$item->description}}</textarea>
                                </div>
                                <button type="submit" class="btn btn-primary btn-sm"><i class="fa-solid fa-pen-to-square"></i></button>
                            </form>
                        @endforeach
                        <form action="{{ route('FutureDirection.store') }}" method="POST">
                            @csrf
                            @if (Auth::check())
                                <input type="hidden" name="user_id" value="{{ Auth::user()->id }}" />
                            @endif
                            <div id="futureFieldsContainer">
                                <textarea placeholder="{{ __('messages.Enter here') }}" class="textarea edField mt-2 form-control" rows="3" name="futures[]"></textarea>
                            </div>
                            <button type="button" class="btn btn-primary btn-sm" onclick="addNewFutureField()">Add Another Future</button>
                            <button type="submit" class="btn btn-primary btn-sm">Submit</button>
                        </form>
                    </div>
                    <div class="form-item-info" id="hobbies">
                        <div class="AddButtonEd">
                            <label for="">{{ __('messages.Hobbies') }}</label>
                        </div>
                        @foreach($hobbies as $item)
                            <form class="EditProfileLanguage" action="{{ route('ProfileHobbies.update', ['id' => $item->id]) }}" method="POST">
                                @csrf
                                <input type="hidden" id="future_id" value="{{ $item->id }}"/>
                                <div class="hobbiesFields">
                                    <textarea placeholder="{{ __('messages.Enter here') }}" class="textarea edField mt-2 form-control" rows="3" name="description">{{$item->description}}</textarea>
                                </div>
                                <button type="submit" class="btn btn-primary btn-sm"><i class="fa-solid fa-pen-to-square"></i></button>
                            </form>
                        @endforeach
                        <form action="{{ route('ProfileHobbies.store') }}" method="POST">
                            @csrf
                            @if (Auth::check())
                                <input type="hidden" name="user_id" value="{{ Auth::user()->id }}" />
                            @endif
                            <div id="HobbiesFieldsContainer">
                                <textarea placeholder="{{ __('messages.Enter here') }}" class="textarea edField mt-2 form-control" rows="3" name="hobbies[]"></textarea>
                            </div>
                            <button type="button" class="btn btn-primary btn-sm" onclick="addNewHobbyField()">Add Another Future</button>
                            <button type="submit" class="btn btn-primary btn-sm">Submit</button>
                        </form>
                    </div>
                </div>
                <div class="infoControllerRightInfoList">
                    <div class="form-item-info mt-2" id="skills">
                        <div class="AddButtonEd">
                            <label for="">{{ __('messages.Professional Skills') }}</label>
                        </div>
                        @foreach($skills as $skill)
                            <form class="EditProfileLanguage " action="{{ route('SkillProfile.update', ['id' => $skill->id]) }}" method="POST">
                                @csrf
                                <input type="hidden" value="{{ $skill->id }}"/>
                                <div class="language-fields">
                                    <input placeholder="{{ __('messages.Enter here') }}" class="form-control laField" name="name" value="{{$skill->name}}" />
                                </div>
                                <button type="submit" class="btn btn-primary btn-sm"><i class="fa-solid fa-pen-to-square"></i></button>
                            </form>
                        @endforeach
                        <form action="{{ route('SkillProfile.store') }}" method="POST">
                            @csrf
                            @if (Auth::check())
                                <input type="hidden" name="user_id" value="{{ Auth::user()->id }}" />
                            @endif
                            <div id="skill-fields">
                                <input placeholder="{{ __('messages.Enter here') }}" class="form-control skillField" name="skills[]" />
                            </div>
                            <button type="button" class="btn btn-primary btn-sm" onclick="addNewSkillField()">Add Another Skill</button>
                            <button type="submit" class="btn btn-primary btn-sm">Submit</button>
                        </form>
                    </div>
                    <div class="form-item-info" id="Experience">
                        <div class="AddButtonEd">
                            <label for="">{{ __('messages.Experience') }}</label>
                        </div>
                        @foreach($experiences as $item)
                            <form class="EditProfileLanguage" action="{{ route('ProfileHobbies.update', ['id' => $item->id]) }}" method="POST">
                                @csrf
                                <input type="hidden" id="future_id" value="{{ $item->id }}"/>
                                <div class="hobbiesFields">
                                    <textarea placeholder="{{ __('messages.Enter here') }}" class="textarea edField mt-2 form-control" rows="3" name="description">{{$item->description}}</textarea>
                                </div>
                                <button type="submit" class="btn btn-primary btn-sm"><i class="fa-solid fa-pen-to-square"></i></button>
                            </form>
                        @endforeach
                        <form action="{{ route('ProfileExperience.store') }}" method="POST">
                            @csrf
                            @if (Auth::check())
                                <input type="hidden" name="user_id" value="{{ Auth::user()->id }}" />
                            @endif
                            <div id="ExperiencesFieldsContainer">
                                <textarea placeholder="{{ __('messages.Enter here') }}" class="textarea edField mt-2 form-control" rows="3" name="experiences[]"></textarea>
                            </div>
                            <button type="button" class="btn btn-primary btn-sm" onclick="addNewExperienceField()">Add Another Skill</button>
                            <button type="submit" class="btn btn-primary btn-sm">Submit</button>
                        </form>
                    </div>
                    <div class="form-item-info" id="Project">
                        <div class="AddButtonEd">
                            <label for="">{{ __('messages.Project') }}</label>
                        </div>
                        @foreach($projects as $item)
                            <form class="EditProfileLanguage" action="{{ route('ProfileProject.update', ['id' => $item->id]) }}" method="POST">
                                @csrf
                                <input type="hidden" id="future_id" value="{{ $item->id }}"/>
                                <div class="hobbiesFields">
                                    <textarea placeholder="{{ __('messages.Enter here') }}" class="textarea edField mt-2 form-control" rows="3" name="description">{{$item->description}}</textarea>
                                </div>
                                <button type="submit" class="btn btn-primary btn-sm"><i class="fa-solid fa-pen-to-square"></i></button>
                            </form>
                        @endforeach
                        <form action="{{ route('ProfileProject.store') }}" method="POST">
                            @csrf
                            @if (Auth::check())
                                <input type="hidden" name="user_id" value="{{ Auth::user()->id }}" />
                            @endif
                            <div id="ProjectFieldsContainer">
                                <textarea placeholder="{{ __('messages.Enter here') }}" class="textarea edField mt-2 form-control" rows="3" name="projects[]"></textarea>
                            </div>
                            <button type="button" class="btn btn-primary btn-sm" onclick="addNewProjectField()">Add Another Skill</button>
                            <button type="submit" class="btn btn-primary btn-sm">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="infoControllerRight" id="item2" style="display:none">
            <div class="chat-container-one">
                <div class="contact-list">
                    <div class="search-bar">
                        <input type="text" placeholder="Search...">
                        <button><i class="fa-solid fa-magnifying-glass"></i></button>
                    </div>
                    <div class="contacts">
                        <div class="contact">
                            <img src="{{asset('assets/images/user4.jpg')}}" alt="Chaymae Naim">
                            <div>
                                <p>Chaymae Naim</p>
                                <span class="status">Left 7 mins ago</span>
                            </div>
                            <span class="status-dot offline"></span>
                        </div>
                        <div class="contact">
                            <img src="{{asset('assets/images/user1.jpg')}}" alt="Sami Rafi">
                            <div>
                                <p>Sami Rafi</p>
                                <span class="status">Online</span>
                            </div>
                            <span class="status-dot online"></span>
                        </div>
                        <div class="contact">
                            <img src="{{asset('assets/images/user2.jpg')}}" alt="Hassan Agmir">
                            <div>
                                <p>Hassan Agmir</p>
                                <span class="status">Left 30 mins ago</span>
                            </div>
                            <span class="status-dot offline"></span>
                        </div>
                        <div class="contact">
                            <img src="{{asset('assets/images/user3.jpg')}}" alt="Abdou Chatabi">
                            <div>
                                <p>Abdou Chatabi</p>
                                <span class="status">Left 50 mins ago</span>
                            </div>
                            <span class="status-dot offline"></span>
                        </div>
                    </div>
                </div>

                <!-- Chat Window -->
                <div class="chat-window">
                    <div class="chat-header">
                        <img src="{{asset('assets/images/user1.jpg')}}" alt="Khalid Charif">
                        <div>
                            <p>Khalid Charif</p>
                            <span>1767 Messages</span>
                        </div>
                        <div class="chat-options">
                            <button><i class="fa-solid fa-phone"></i></button>
                            <button><i class="fa-solid fa-video"></i></button>
                            <button>⋮</button>
                        </div>
                    </div>
                    <div class="chat-messages">
                        <div class="message received">Hi, how are you Samim?</div>
                        <div class="message sent">Hi Khalid, I am good tnx. How about you?</div>
                        <div class="message received">I am good too, thank you for your chat template</div>
                        <div class="message sent">You are welcome</div>
                        <div class="message received">I am looking for your next templates</div>
                    </div>
                    <div class="chat-input">
                        <input type="text" placeholder="Type a message...">
                        <button>📎</button>
                        <button>Send</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="infoControllerRight" id="item3" style="display:none">
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
                                    <img src="{{asset('assets/images/user1.jpg')}}" alt="" srcset="">
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

        <div class="infoControllerRight" id="item4" style="display:none">
            <div class="friends_container">
                <input type="text" id="searchInput" placeholder="Search friends..." onkeyup="filterFriends()">
                <ul id="friendsList">
                    <li class="friend online">
                        <img src="{{asset('assets/images/user1.jpg')}}" alt="Friend 1">
                        <div>
                            <p>Jane Doe</p>
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

        <div class="infoControllerRight" id="item5" style="display:none">
            <div class="resset-password">
                <div class="login-container">
                    <div class="form-box">
                        <p class="signup-prompt">Bạn muốn thay đổi mật khẩu đúng không?</p>
                        <form id="loginForm">
                            <div class="input-box">
                                <span class="icon">🔒</span>
                                <input type="password" placeholder="Password" required>
                            </div>
                            <div class="input-box">
                                <span class="icon">🔒</span>
                                <input type="password" placeholder="Password" required>
                            </div>
                            <div class="input-box">
                                <span class="icon">🔒</span>
                                <input type="password" placeholder="Password" required>
                            </div>
                            <button type="submit" class="login-button">Reset password</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="infoControllerRight" id="item6" style="display:none">
            <div class="taskeu-container">
                <div class="todo-container">
                    <h1>Link List</h1>
                    <div class="input-container">
                        <input type="text" placeholder="Add a new task...">
                        <button onclick="addTask()">+</button>
                    </div>
                    <div class="button-group">
                        <button onclick="showComplete()">Link tab</button>
                        <p>https://fontawesome.com/start</p>
                    </div>
                    <div class="button-group">
                        <button onclick="showComplete()">Link tab</button>
                        <p>The easiest way to get icons on your website is with a Kit. It's</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="infoControllerRight" id="item7" style="display:none">
            <div class="taskeu-container">
                <div class="todo-container">
                    <h1>Note List</h1>
                    <div class="input-container">
                        <input type="text" placeholder="Add a new task...">
                        <button onclick="addTask()">+</button>
                    </div>
                    <div class="button-group">
                        <button onclick="showComplete()">Link tab</button>
                        <p>https://fontawesome.com/start</p>
                    </div>
                    <div class="button-group">
                        <button onclick="showComplete()">Link tab</button>
                        <p>The easiest way to get icons on your website is with a Kit. It's</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="infoControllerRight" id="item8" style="display:none">
           
        </div>
    </div>
</div>

@if (session('success'))
    <div id="popup-category" class="popup-category success">
        {{ session('success') }}
    </div>
@endif

@if (session('success'))
    <div id="popup-category" class="popup-category success">
        {{ session('success') }}
    </div>
@endif

@if ($errors->any())
    <div id="popup-category" class="popup-category error">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif


@if ($errors->any())
    <div id="popup-category" class="popup-category error">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<script>
    let isDragging = false;
    
    function showContent(itemId, button) {
        const allItems = document.querySelectorAll('.infoControllerRight');
        allItems.forEach(item => item.style.display = 'none');
        document.getElementById(itemId).style.display = 'block';
        const allButtons = document.querySelectorAll('.infoControllerMenuList button');
        allButtons.forEach(btn => btn.classList.remove('active'));
        button.classList.add('active');
        localStorage.setItem('activeButtonId', button.id);
    }

    window.onload = function() {
        const activeButtonId = localStorage.getItem('activeButtonId');
        if (activeButtonId) {
            const activeButton = document.getElementById(activeButtonId);
            if (activeButton) {
                showContent(activeButton.getAttribute('onclick').match(/'([^']+)'/)[1], activeButton);
            }
        } else {
            showContent('item1', document.getElementById('menu-item1'));
        }
    };
    function filterFriends() {
        const input = document.getElementById('searchInput');
        const filter = input.value.toLowerCase();
        const friendsList = document.getElementById('friendsList');
        const friends = friendsList.getElementsByClassName('friend');

        for (let i = 0; i < friends.length; i++) {
            const friendName = friends[i].getElementsByTagName('p')[0].textContent;
            const friendStatus = friends[i].getElementsByClassName('status')[0].textContent;

            if (friendName.toLowerCase().indexOf(filter) > -1 || friendStatus.toLowerCase().indexOf(filter) > -1) {
                friends[i].style.display = '';
            } else {
                friends[i].style.display = 'none';
            }
        }
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
    function addNewHobbyField() {
        const container = document.getElementById("HobbiesFieldsContainer");
        const newTextArea = document.createElement("textarea");
        newTextArea.className = "textarea edField mt-2 form-control";
        newTextArea.rows = 3;
        newTextArea.name = "hobbies[]";
        newTextArea.placeholder = "{{ __('messages.Enter here') }}";
        container.appendChild(newTextArea);
    }

    function addNewObjectiveField() {
        const container = document.getElementById("futureFieldsContainer");
        const newTextArea = document.createElement("textarea");
        newTextArea.className = "textarea edField mt-2 form-control";
        newTextArea.rows = 3;
        newTextArea.name = "futures[]";
        newTextArea.placeholder = "{{ __('messages.Enter here') }}";
        container.appendChild(newTextArea);
    }

    function addNewExperienceField() {
        const container = document.getElementById("ExperiencesFieldsContainer");
        const newTextArea = document.createElement("textarea");
        newTextArea.className = "textarea edField mt-2 form-control";
        newTextArea.rows = 3;
        newTextArea.name = "experiences[]";
        newTextArea.placeholder = "{{ __('messages.Enter here') }}";
        container.appendChild(newTextArea);
    }

    document.addEventListener('DOMContentLoaded', function() {
        document.querySelectorAll('.edit-profile-form').forEach(function(form) {
            form.addEventListener('submit', function(event) {
                event.preventDefault();

                const profileId = form.querySelector('#profile_id').value;
                const formData = new FormData(form);

                const csrfTokenMeta = document.querySelector('meta[name="csrf-token"]');
                if (!csrfTokenMeta) {
                    console.error("CSRF token not found in the HTML.");
                    return;
                }
                const csrfToken = csrfTokenMeta.getAttribute('content');

                fetch(`/profile/${profileId}`, {
                    method: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': csrfToken,
                        'X-HTTP-Method-Override': 'PUT' // Override để chuyển thành PUT
                    },
                    body: formData
                })
                .then(response => {
                    if (response.ok) {
                        return response.json();
                    }
                    console.error('Error response:', response);
                    throw new Error('Network response was not ok.');
                })
                .then(data => {
                    alert('Profile updated successfully');
                    window.location.reload();
                })
                .catch(error => {
                    console.error('Error:', error);
                    alert('An error occurred while updating the profile.');
                });
            });
        });
        // document.querySelectorAll('.edit-languages-form').forEach(function(form) {
        //     form.addEventListener('submit', function(event) {
        //         event.preventDefault();

        //         const profileLanguageId = form.querySelector('#language_id').value;
        //         const formData = new FormData(form);

        //         const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

        //         fetch(`/updateLanguage/${profileLanguageId}`, {
        //             method: 'POST',
        //             headers: {
        //                 'X-CSRF-TOKEN': csrfToken,
        //                 'X-HTTP-Method-Override': 'PUT'
        //             },
        //             body: formData
        //         })
        //         .then(response => {
        //             if (response.ok) {
        //                 return response.json();
        //             }
        //             console.error('Error response:', response);
        //             throw new Error('Network response was not ok.');
        //         })
        //         .then(data => {
        //             alert('Profile updated successfully');
        //             window.location.reload();
        //         })
        //         .catch(error => {
        //             console.error('Error:', error);
        //             alert('An error occurred while updating the profile.');
        //         });
        //     });
        // });

    });
    function addNewProfessinalField() {
        let newNode = document.createElement("input");
        newNode.classList.add("form-control");
        newNode.classList.add("laField");
        newNode.classList.add("mt-2");
        newNode.setAttribute("placeholder", "{{ __('messages.Enter here') }}");

        let aqOb = document.getElementById("skills");
        aqOb.appendChild(newNode);
    }
    function addNewProjectField() {
        let newNode = document.createElement("textarea");
        newNode.classList.add("form-control");
        newNode.classList.add("edField");
        newNode.classList.add("mt-2");
        newNode.setAttribute("rows", 3);
        newNode.setAttribute("placeholder", "{{ __('messages.Enter here') }}");

        let aqOb = document.getElementById("Project");

        // Thay vì insertBefore, append newNode vào cuối của aqOb
        aqOb.appendChild(newNode);
    }
    function addNewFutureField() {
        const newFutureField = document.createElement('textarea');
        newFutureField.setAttribute('placeholder', '{{ __('messages.Enter here') }}');
        newFutureField.setAttribute('class', 'textarea edField mt-2 form-control');
        newFutureField.setAttribute('rows', '3');
        newFutureField.setAttribute('name', 'futures[]');
        
        document.getElementById('futureFieldsContainer').appendChild(newFutureField);
    }

    function addNewEducationField() {
        const newEducationField = document.createElement('textarea');
        newEducationField.setAttribute('placeholder', '{{ __('messages.Enter here') }}');
        newEducationField.setAttribute('class', 'textarea edField mt-2 form-control');
        newEducationField.setAttribute('rows', '3');
        newEducationField.setAttribute('name', 'educations[]');
        
        document.getElementById('edFields').appendChild(newEducationField);
    }


    function addNewLanField() {
        let newNode = document.createElement("input");
        newNode.classList.add("form-control", "laField", "mt-2");
        newNode.setAttribute("placeholder", "{{ __('messages.Enter here') }}");
        newNode.setAttribute("name", "languages[]");

        let languageFieldsDiv = document.getElementById("language-fields");
        languageFieldsDiv.appendChild(newNode);
    }

    function addNewSkillField() {
        const newSkillField = document.createElement('input');
        newSkillField.setAttribute('type', 'text');
        newSkillField.setAttribute('placeholder', '{{ __('messages.Enter here') }}');
        newSkillField.setAttribute('class', 'form-control skillField');
        newSkillField.setAttribute('name', 'skills[]');
        
        document.getElementById('skill-fields').appendChild(newSkillField);
    }
    function addNewProjectField() {
        const newField = document.createElement('textarea');
        newField.className = 'textarea edField mt-2 form-control';
        newField.rows = 3;
        newField.name = 'projects[]';
        newField.placeholder = 'Enter here'; 
        document.getElementById('ProjectFieldsContainer').appendChild(newField);
    }

  function initImageUpload(box) {
  let uploadField = box.querySelector('.image-upload');

  uploadField.addEventListener('change', getFile);

  function getFile(e){
    let file = e.currentTarget.files[0];
    checkType(file);
  }
  
  function previewImage(file){
    let thumb = box.querySelector('.js--image-preview'),
        reader = new FileReader();

    reader.onload = function() {
      thumb.style.backgroundImage = 'url(' + reader.result + ')';
    }
    reader.readAsDataURL(file);
    thumb.className += ' js--no-default';
  }

  function checkType(file){
    let imageType = /image.*/;
    if (!file.type.match(imageType)) {
      throw 'Datei ist kein Bild';
    } else if (!file){
      throw 'Kein Bild gewählt';
    } else {
      previewImage(file);
    }
  }
  
}

// initialize box-scope
var boxes = document.querySelectorAll('.box');

for (let i = 0; i < boxes.length; i++) {
  let box = boxes[i];
  initDropEffect(box);
  initImageUpload(box);
}



/// drop-effect
function initDropEffect(box){
  let area, drop, areaWidth, areaHeight, maxDistance, dropWidth, dropHeight, x, y;
  
  // get clickable area for drop effect
  area = box.querySelector('.js--image-preview');
  area.addEventListener('click', fireRipple);
  
  function fireRipple(e){
    area = e.currentTarget
    // create drop
    if(!drop){
      drop = document.createElement('span');
      drop.className = 'drop';
      this.appendChild(drop);
    }
    // reset animate class
    drop.className = 'drop';
    
    // calculate dimensions of area (longest side)
    areaWidth = getComputedStyle(this, null).getPropertyValue("width");
    areaHeight = getComputedStyle(this, null).getPropertyValue("height");
    maxDistance = Math.max(parseInt(areaWidth, 10), parseInt(areaHeight, 10));

    // set drop dimensions to fill area
    drop.style.width = maxDistance + 'px';
    drop.style.height = maxDistance + 'px';
    
    // calculate dimensions of drop
    dropWidth = getComputedStyle(this, null).getPropertyValue("width");
    dropHeight = getComputedStyle(this, null).getPropertyValue("height");
    
    // calculate relative coordinates of click
    // logic: click coordinates relative to page - parent's position relative to page - half of self height/width to make it controllable from the center
    x = e.pageX - this.offsetLeft - (parseInt(dropWidth, 10)/2);
    y = e.pageY - this.offsetTop - (parseInt(dropHeight, 10)/2) - 30;
    
    // position drop and animate
    drop.style.top = y + 'px';
    drop.style.left = x + 'px';
    drop.className += ' animate';
    e.stopPropagation();
    
  }
}

</script>
@endsection