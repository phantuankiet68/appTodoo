@extends('app')

@section('title', 'Home Page')

@section('content')
<div class="todo">
    <div class="infoController">
        @include('info-user')
        <div class="InformationRight">
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
                    <div class="infoControllerRightContentUser">
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
                    <div class="infoControllerRightContentUser">
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
                                <input type="hidden" value="{{ $item->id }}"/>
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
                                <input type="hidden" value="{{ $item->id }}"/>
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
                                <input type="hidden" value="{{ $item->id }}"/>
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
                                <input type="hidden" value="{{ $item->id }}"/>
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
                                <input type="hidden" value="{{ $item->id }}"/>
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
    </div>
</div>


<script>


</script>
@endsection