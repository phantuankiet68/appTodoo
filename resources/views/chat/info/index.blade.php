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
                    <button>Thông tin cá nhân</button>
                    <button>Tin nhắn</button>
                    <button>Bài viết</button>
                    <button>Hình ảnh</button>
                    <button>Bạn bè</button>
                    <button>Đổi mật khẩu</button>
                    <button>Link cần thiết</button>
                    <button>Note</button>
                    <button>CV</button>
                    <button>Bằng cấp</button>
                </div>
            </div>
        </div>
        <div class="infoControllerRight">
            <div class="infoControllerRightUser">
                <div class="infoControllerUser">   
                    <div class="box">
                        <div class="js--image-preview"></div>
                        <div class="upload-options">
                            <label>
                                <input type="file" class="image-upload" accept="image/*" />
                            </label>
                        </div>
                    </div>
                </div>
                @foreach($profiles as $item)
                <form method="POST" id="edit-profile-form">
                    @csrf
                    @method('PUT')
                    <div class="infoControllerRightContentUser">
                        <input type="hidden" id="profile_id" value="{{ $item->id }}"/>
                        @if (Auth::check())
                            <input type="hidden" id="user_id" name="user_id" value="{{ Auth::user()->id }}"/>
                        @endif
                        <div class="form-input-category">
                            <input type="text" class="input-name"  name="name" value="{{ $item->name }}" placeholder="Nhập họ và tên....">
                        </div>
                        <div class="form-input-category">
                            <input type="text" class="input-name"  name="email" value="{{ $item->email }}" placeholder="Nhập email....">
                        </div>
                        <div class="form-input-category">
                            <input type="text" class="input-name"  name="phone" value="0{{ $item->phone }}" placeholder="Nhập số điện thoại....">
                        </div>
                        <div class="form-input-category">
                            <input type="date" class="input-name"  name="date_of_birth" value="{{ $item->date_of_birth }}">
                        </div>
                        <div class="form-input-category">
                            <input type="text" class="input-name" name="gender" value="{{ $item->gender == 0 ? 'Nam' : 'Nữ' }}">
                        </div>
                    </div>
                    <div class="infoControllerRightContentUser col-4">
                        <div class="form-input-category">
                            <input type="text" class="input-name" name="link_facebook" value="{{ $item->link_facebook }}">
                        </div>
                        <div class="form-input-category">
                            <input type="text" class="input-name" name="link_instagram" value="{{ $item->link_instagram }}">
                        </div>
                        <div class="form-input-category">
                            <input type="text" class="input-name" name="link_linkin" value="{{ $item->link_linkin }}">
                        </div>
                        <div class="form-input-category">
                            <input type="text" class="input-name" name="link_link" value="{{ $item->link_link }}">
                        </div>
                        <div class="form-input-category">
                            <input type="text" class="input-name" name="address" value="{{ $item->address }}">
                        </div>
                    </div>
                    <div class="infoControllerRightContentUser col-4">
                        <div class="form-textarea-category">
                            <textarea name="description" class="textarea" placeholder="Nhập giới thiệu cá nhân....">{{ $item->description }}</textarea> 
                        </div>
                        <div class="form-input-category">
                            <input type="text" class="input-name" name="roles" value="{{ $item->roles }}">
                            <button class="input-name">Save changes</button>
                        </div>
                    </div>
                </form>
                @endforeach
            </div>
            <div class="infoControllerRightInfo">
                <div class="infoControllerRightInfoList">
                    <div class="form-item-info mt-2" id="la">
                        <div class="AddButtonEd">
                            <label for="">languages</label>
                            <div class="container text-center mt-2" id="aqAddButton">
                                <button onclick="addNewLanField()" class="btn btn-primary btn-sm">
                                    Add
                                </button>
                            </div>
                        </div>
                        <input placeholder="Enter here" class="form-control laField"></input>
                    </div>
                    <div class="form-item-info" id="ed">
                        <div class="AddButtonEd">
                            <label for="">Education</label>
                            <div class="container text-center mt-2" id="aqAddButton">
                                <button onclick="addNewEdField()" class="btn btn-primary btn-sm">
                                    Add
                                </button>
                            </div>
                        </div>
                        <div id="edFields">
                            <textarea placeholder="Enter here" class="textarea edField mt-2" rows="3"></textarea>
                        </div>
                    </div>
                    <div class="form-item-info" id="Future">
                        <div class="AddButtonEd">
                            <label for="">Future Direction</label>
                            <div class="container text-center mt-2" id="aqAddNewFuture">
                                <button onclick="aqAddNewFuture()" class="btn btn-primary btn-sm">
                                    Add
                                </button>
                            </div>
                        </div>
                        <div id="edFields">
                            <textarea placeholder="Enter here" class="textarea edField mt-2" rows="3"></textarea>
                        </div>
                    </div>
                    <div class="form-item-info" id="ed">
                        <div class="AddButtonEd">
                            <label for="">Education</label>
                            <div class="container text-center mt-2" id="aqAddButton">
                                <button onclick="addNewEdField()" class="btn btn-primary btn-sm">
                                    Add
                                </button>
                            </div>
                        </div>
                        <div id="edFields">
                            <textarea placeholder="Enter here" class="textarea edField mt-2" rows="3"></textarea>
                        </div>
                    </div>
                </div>
                <div class="infoControllerRightInfoList">
                    <div class="form-item-info" id="ed">
                        <div class="AddButtonEd">
                            <label for="">Objective</label>
                        </div>
                        <div id="edFields">
                            <textarea placeholder="Enter here" class="textarea edField mt-2" rows="3"></textarea>
                        </div>
                    </div>
                    <div class="form-item-info" id="Experience">
                        <div class="AddButtonEd">
                            <label for="">Experience</label>
                            <div class="container text-center mt-2" id="aqAddExperienceButton">
                                <button onclick="addNewExperienceField()" class="btn btn-primary btn-sm">
                                    Add
                                </button>
                            </div>
                        </div>
                        <div id="edFields">
                            <textarea placeholder="Enter here" class="textarea edField" rows="3"></textarea>
                        </div>
                    </div>
                    <div class="form-item-info" id="Project">
                        <div class="AddButtonEd">
                            <label for="">Project</label>
                            <div class="container text-center mt-2" id="aqAddProjectButton">
                                <button onclick="addNewProjectField()" class="btn btn-primary btn-sm">
                                    Add
                                </button>
                            </div>
                        </div>
                        <div id="edFields">
                            <textarea placeholder="Enter here" class="textarea edField" rows="3"></textarea>
                        </div>
                    </div>
                    <div class="form-item-info mt-2" id="skills">
                        <div class="AddButtonEd">
                            <label for="">Professinal skills</label>
                            <div class="container text-center mt-2" id="aqAddButton">
                                <button onclick="addNewProfessinalField()" class="btn btn-primary btn-sm">
                                    Add
                                </button>
                            </div>
                        </div>
                        <input placeholder="Enter here" class="form-control laField"></input>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    document.getElementById('edit-profile-form').onsubmit = function(event) {
        event.preventDefault();
        const profile_id = document.getElementById('profile_id').value;
        this.action = `/profile/${profile_id}`;
        this.submit();
    }
    function addNewProfessinalField() {
        let newNode = document.createElement("input");
        newNode.classList.add("form-control");
        newNode.classList.add("laField");
        newNode.classList.add("mt-2");
        newNode.setAttribute("placeholder", "Enter here");

        let aqOb = document.getElementById("skills");
        aqOb.appendChild(newNode);
    }
    function addNewProjectField() {
        let newNode = document.createElement("textarea");
        newNode.classList.add("form-control");
        newNode.classList.add("edField");
        newNode.classList.add("mt-2");
        newNode.setAttribute("rows", 3);
        newNode.setAttribute("placeholder", "Enter here");

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
        newNode.setAttribute("placeholder", "Enter here");

        let aqOb = document.getElementById("Experience");

        // Thay vì insertBefore, append newNode vào cuối của aqOb
        aqOb.appendChild(newNode);
    }
    function aqAddNewFuture() {
        let newNode = document.createElement("textarea");
        newNode.classList.add("form-control");
        newNode.classList.add("edField");
        newNode.classList.add("mt-2");
        newNode.setAttribute("rows", 3);
        newNode.setAttribute("placeholder", "Enter here");

        let aqOb = document.getElementById("Future");

        // Thay vì insertBefore, append newNode vào cuối của aqOb
        aqOb.appendChild(newNode);
    }

    function addNewEdField() {
        let newNode = document.createElement("textarea");
        newNode.classList.add("textarea", "edField", "mt-2");
        newNode.setAttribute("rows", 3);
        newNode.setAttribute("placeholder", "Enter here");

        let edFields = document.getElementById("edFields");
        edFields.appendChild(newNode);
    }


    function addNewLanField() {
        let newNode = document.createElement("input");
        newNode.classList.add("form-control");
        newNode.classList.add("laField");
        newNode.classList.add("mt-2");
        newNode.setAttribute("placeholder", "Enter here");

        let aqOb = document.getElementById("la");
        let aqAddButtonOb = document.getElementById("laAddButton");

        aqOb.insertBefore(newNode, aqAddButtonOb);
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