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
                    <button><i class="fa-solid fa-id-badge"></i> {{ __('messages.Personal Information') }}</button>
                    <button><i class="fa-solid fa-message"></i> {{ __('messages.Messages') }}</button>
                    <button><i class="fa-solid fa-pen-to-square"></i> {{ __('messages.Posts') }}</button>
                    <button><i class="fa-solid fa-image"></i> {{ __('messages.Photos') }}</button>
                    <button><i class="fa-solid fa-user-group"></i> {{ __('messages.Friends') }}</button>
                    <button><i class="fa-solid fa-key"></i> {{ __('messages.Change Password') }}</button>
                    <button><i class="fa-solid fa-link"></i> {{ __('messages.Important Links') }}</button>
                    <button><i class="fa-solid fa-note-sticky"></i> {{ __('messages.Note') }}</button>
                    <button><i class="fa-solid fa-file-lines"></i> {{ __('messages.CV') }}</button>
                </div>
            </div>
        </div>
        <div class="infoControllerRight">
            <div class="infoControllerRightUser">
                @foreach($profiles as $item)
                <form method="POST" id="edit-profile-form-{{ $item->id }}" class="edit-profile-form">
                    @csrf
                    @method('PUT')
                    <div class="infoControllerRightContentUser">
                        <input type="hidden" id="profile_id" value="{{ $item->id }}"/>
                        @if (Auth::check())
                            <input type="hidden" id="user_id" name="user_id" value="{{ Auth::user()->id }}"/>
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
                                <input type="hidden" id="language_id" value="{{ $lang->id }}"/>
                                <div class="language-fields">
                                    <input placeholder="{{ __('messages.Enter here') }}" class="form-control" name="name" value="{{$lang->name}}" />
                                </div>
                                <button type="submit" class="btn btn-primary btn-sm"><i class="fa-solid fa-pen-to-square"></i></button>
                            </form>
                        @endforeach
                        <form action="{{ route('languageProfile.store') }}" method="POST">
                            @csrf
                            @if (Auth::check())
                                <input type="hidden" id="user_id" name="user_id" value="{{ Auth::user()->id }}" />
                            @endif
                            <div id="language-fields">
                                <input placeholder="{{ __('messages.Enter here') }}" class="form-control laField" name="languages[]" />
                            </div>
                            <button type="button" class="btn btn-primary btn-sm" id="laAddButton" onclick="addNewLanField()">Add Another Language</button>
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
                                <input type="hidden" id="education_id" value="{{ $education->id }}"/>
                                <div class="edFields">
                                    <textarea placeholder="{{ __('messages.Enter here') }}" class="textarea edField mt-2 form-control" rows="3" name="description">{{$education->description}}</textarea>
                                </div>
                                <button type="submit" class="btn btn-primary btn-sm"><i class="fa-solid fa-pen-to-square"></i></button>
                            </form>
                        @endforeach
                        <form action="{{ route('educationProfile.store') }}" method="POST">
                            @csrf
                            @if (Auth::check())
                                <input type="hidden" id="user_id" name="user_id" value="{{ Auth::user()->id }}" />
                            @endif
                            <div id="edFields" class="edFields">
                                <textarea placeholder="{{ __('messages.Enter here') }}" class="textarea edField mt-2 form-control" rows="3" name="educations[]"></textarea>
                            </div>
                            <button type="button" class="btn btn-primary btn-sm" id="laAddButton" onclick="addNewEducationField()">Add Another Education</button>
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
                                <input type="hidden" id="user_id" name="user_id" value="{{ Auth::user()->id }}" />
                            @endif
                            <div id="futureFieldsContainer">
                                <textarea placeholder="{{ __('messages.Enter here') }}" class="textarea edField mt-2 form-control" rows="3" name="futures[]"></textarea>
                            </div>
                            <button type="button" class="btn btn-primary btn-sm" id="laAddButton" onclick="addNewFutureField()">Add Another Future</button>
                            <button type="submit" class="btn btn-primary btn-sm">Submit</button>
                        </form>
                    </div>
                    <div class="form-item-info" id="ed">
                        <div class="AddButtonEd">
                            <label for="">{{ __('messages.Hobbies') }}</label>
                            <div class="container text-center mt-2" id="aqAddButton">
                                <button onclick="addNewEdField()" class="btn btn-primary btn-sm">
                                    {{ __('messages.Add') }}
                                </button>
                            </div>
                        </div>
                        <div id="edFields">
                            <textarea placeholder="{{ __('messages.Enter here') }}" class="textarea edField mt-2" rows="3"></textarea>
                        </div>
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
                                <input type="hidden" id="user_id" name="user_id" value="{{ Auth::user()->id }}" />
                            @endif
                            <div id="skill-fields">
                                <input placeholder="{{ __('messages.Enter here') }}" class="form-control skillField" name="skills[]" />
                            </div>
                            <button type="button" class="btn btn-primary btn-sm" id="skillAddButton" onclick="addNewSkillField()">Add Another Skill</button>
                            <button type="submit" class="btn btn-primary btn-sm">Submit</button>
                        </form>
                    </div>
                    <div class="form-item-info" id="ed">
                        <div class="AddButtonEd">
                            <label for="">{{ __('messages.Objective') }}</label>
                        </div>
                        <div id="edFields">
                            <textarea placeholder="{{ __('messages.Enter here') }}" class="textarea edField mt-2" rows="3"></textarea>
                        </div>
                    </div>
                    <div class="form-item-info" id="Experience">
                        <div class="AddButtonEd">
                            <label for="">{{ __('messages.Experience') }}</label>
                            <div class="container text-center mt-2" id="aqAddExperienceButton">
                                <button onclick="addNewExperienceField()" class="btn btn-primary btn-sm">
                                    {{ __('messages.Add') }}
                                </button>
                            </div>
                        </div>
                        <div id="edFields">
                            <textarea placeholder="{{ __('messages.Enter here') }}" class="textarea edField" rows="3"></textarea>
                        </div>
                    </div>
                    <div class="form-item-info" id="Project">
                        <div class="AddButtonEd">
                            <label for="">{{ __('messages.Project') }}</label>
                            <div class="container text-center mt-2" id="aqAddProjectButton">
                                <button onclick="addNewProjectField()" class="btn btn-primary btn-sm">
                                    {{ __('messages.Add') }}
                                </button>
                            </div>
                        </div>
                        <div id="edFields">
                            <textarea placeholder="{{ __('messages.Enter here') }}" class="textarea edField" rows="3"></textarea>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
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
    function addNewExperienceField() {
        let newNode = document.createElement("textarea");
        newNode.classList.add("form-control");
        newNode.classList.add("edField");
        newNode.classList.add("mt-2");
        newNode.setAttribute("rows", 3);
        newNode.setAttribute("placeholder", "{{ __('messages.Enter here') }}");

        let aqOb = document.getElementById("Experience");
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