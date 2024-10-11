@extends('app')

@section('title', 'Home Page')

@section('content')
<div class="todo">
    <div class="todoHeader">
        <div class="topHeader">
            <h2>Email</h2> | <span>Home</span>
        </div>
        <div class="bodyHeader">
            <form action="">
                <div class="Users--right--btns">
                    <select name="date" id="date" class="select-dropdown doctor--filter">
                        <option>Date of Month</option>
                        <option value="free">Admin</option>
                        <option value="scheduled">Users</option>
                    </select>
                </div>
            </form>
            <form action="" class="formSearch">
                <div class="formInputSearch">
                    <input type="text" value="">
                </div>
                <button class="add-search"><i class="fa-solid fa-magnifying-glass"></i></button>
            </form>
        </div>
        <div class="headerToQuesionRight">
            <button type="button" class="change"><i class="fa-solid fa-cash-register"></i> Thay đổi</button>
            <button type="button" class="create" onclick="createJavascript()"><i class="fa-solid fa-plus"></i> Tạo mới</button>
        </div>
    </div>
    <div class="component-container">
        <div class="Javascript-container">
            <div class="component-card">
                @foreach($javascripts as $item)
                <div class="c_card">
                    <img src="{{ asset('assets/images/' . $item->image) }}" alt="Image Description" />
                    <div class="overlay">
                        Thông tin hiển thị
                        @if($item->id)
                            <button onclick="showEditJavascript({{ $item->id }})">xem</button>
                        @else
                            <p>ID is not available for this item.</p>
                        @endif
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>




<div class="model" id="createJavascript">
    <div class="modelCreateFromNormal">
        <form method="POST" action="{{ route('javascripts.store') }}" enctype="multipart/form-data">
        @csrf
            <div class="saveAction mb-10">
                <button type="submit">Save changes</button>
                <h2 class="text-center">{{ __('messages.Add New') }}</h5>
            </div>
            <input type="hidden" name="category_id" id="" value="27"/>
            <div class="form-input-category">
                <label for="name">{{ __('messages.Name') }}</label>
                <input type="text" class="input-name" id="" name="name">
            </div>
            <div class="form-textarea-category">
                <label for="description">{{ __('messages.Code') }}</label>
                <textarea id="editor" name="code"></textarea> 
            </div>
            <div class="form-input-category mx-10">
                <label for="name">{{ __('messages.Link') }}</label>
                <input type="url" class="input-name" id="" name="link">
            </div>
            <div class="modelForm">
                @if (Auth::check())
                    <input type="hidden" id="" name="user_id" value="{{ Auth::user()->id }}"/>
                @endif
                <div class="modelContent">
                    <div class="preview">
                        <div class="img-preview">
                            <img id="img-preview" src="{{asset('assets/images/preview.jpg')}}" />
                        </div>
                        <label for="file-input">Upload Image</label>
                        <input accept="image/*" type="file" id="file-input" name="image" />
                    </div>  
                </div>
                <div class="form-textarea-big">
                    <textarea id="editor1" name="description"></textarea> 
                </div>
            </div>
        </form>
        <div class="BtnCloseCategoryTask" onclick="closeJavascriptForm()">
            <p>X</p>
        </div>
    </div>
</div>


<div class="model" id="showJavascriptForm">
    <div class="modelCreateFromBig">
        <div class="buttonAction">
            <button class="show" onclick="showTab('show')"><i class="fa-solid fa-eye"></i> Show</button>
            <button class="edit" onclick="showTab('edit')"><i class="fa-solid fa-pen-to-square"></i> Edit</button>
            <button class="delete" onclick="showTab('delete')"><i class="fa-solid fa-trash"></i> Delete</button>
        </div>

        <div class="showContentComponent" id="show">
            <div class="showNameComponent">
                <h3 id="shownamecode"></h3>
                <p id="showdescriptioncomponent"></p>
                <a href="" target="_blank" class="link_blank" id="showlinkcode"></a>
            </div>
            <div class="showCodeComponent">
                <div class="popupShowJavascript">
                    <p id="showcode"></p>
                </div>
                <div class="popupShowJavascript">
                    <p id="showdescriptioncode"></p>
                </div>
            </div>
        </div>

        <div class="editContentQuestion" id="edit" style="display: none;">
            <div class="titleEditError">
                <h2>🌟 Khám Phá Sự Đơn Giản trong Quản Lý Component! 🌟</h2>
                <p>Chúng tôi rất vui mừng thông báo rằng chức năng Chỉnh sửa (Edit) cho Component đang trong quá trình hoàn thiện! Với tính năng này, bạn sẽ có khả năng cập nhật và điều chỉnh nội dung một cách dễ dàng, giúp nội dung của bạn luôn nổi bật và phù hợp. Bên cạnh đó, tính năng Thêm cho phép bạn bổ sung những Component mới đầy sáng tạo, trong khi tính năng Xóa giúp loại bỏ những thành phần không còn cần thiết. Chúng tôi đang nỗ lực mang đến cho bạn trải nghiệm quản lý Component tốt nhất, giúp tối ưu hóa quy trình làm việc và nâng cao giá trị cho dự án của bạn. Hãy cùng chờ đón những cập nhật thú vị sắp tới!</p>
            </div>
        </div>

        <div class="deleteContentQuestion" id="delete" style="display: none;">
            <form method="POST" id="delete-Code">
                @csrf
                @method('DELETE')
                <input type="hidden" id="javascript_id" name="javascript_id" />
                <h3 class="text-center">{{ __('messages.Are you sure you want to delete?') }}</h3>
                <p class="text-center" id="shownamecodedelete"></p> 
                <div class="form-btn-delete">
                    <button type="submit">{{ __('messages.Delete') }}</button>
                </div>
            </form>
        </div>
        <div class="BtnCloseCategoryTask" onclick="closeDeleteCodeForm()">
            <p>X</p>
        </div>
    </div>
</div>



<script>
    CKEDITOR.replace('editor');
    CKEDITOR.replace('editor1');
    CKEDITOR.replace('editor2');
</script>
<script>
    function showEditJavascript(javascriptId) {
        const showEditJavascript = document.getElementById('showJavascriptForm');
        showEditJavascript.style.display = 'block';
        fetch(`/javascripts/${javascriptId}`)
        .then(response => response.json())
        .then(data => {
            document.getElementById('javascript_id').value = data.id;
            document.getElementById('shownamecode').innerHTML = data.name;
            document.getElementById('showdescriptioncode').innerHTML = data.description;
            document.getElementById('showcode').innerHTML = data.code;
            document.getElementById('showlinkcode').innerHTML = data.link;
            document.getElementById('showlinkcode').href = data.link;
            document.getElementById('shownamecodedelete').innerHTML = data.name;
        })
    }
    document.addEventListener('DOMContentLoaded', function() {
        document.getElementById('delete-Code').onsubmit = function(event) {
            event.preventDefault();
            const javascriptIdElement = document.getElementById('javascript_id');
            const javascriptId = javascriptIdElement.value; 
            if (javascriptId) {
                this.action = `/javascripts/${javascriptId}`;
                this.submit(); 
            } else {
                console.error('javascript ID is missing.');
            }
        };
    });



    function closeDeleteCodeForm() {
        const showJavascriptForm = document.getElementById('showJavascriptForm')
        if (showJavascriptForm.style.display === 'none' || showJavascriptForm.style.display === '') {
            showJavascriptForm.style.display = 'block'; 
        } else {
            showJavascriptForm.style.display = 'none';
        }
    }
    function showTab(tab) {
        // Ẩn tất cả các tab
        document.getElementById('show').style.display = 'none';
        document.getElementById('edit').style.display = 'none';
        document.getElementById('delete').style.display = 'none';

        // Hiển thị tab được nhấn
        document.getElementById(tab).style.display = 'block';
    }
     function createJavascript(){
        const CreateJavascriptForm = document.getElementById('createJavascript')
        if (CreateJavascriptForm.style.display === 'none' || CreateJavascriptForm.style.display === '') {
            CreateJavascriptForm.style.display = 'block'; 
        } else {
            CreateJavascriptForm.style.display = 'none';
        }
    }

    function closeJavascriptForm() {
        const CreateJavascriptForm = document.getElementById('createJavascript')
        if (CreateJavascriptForm.style.display === 'none' || CreateJavascriptForm.style.display === '') {
            CreateJavascriptForm.style.display = 'block'; 
        } else {
            CreateJavascriptForm.style.display = 'none';
        }
    }
    const input = document.getElementById('file-input');
    const image = document.getElementById('img-preview');

    input.addEventListener('change', (e) => {
        if (e.target.files.length) {
            const src = URL.createObjectURL(e.target.files[0]);
            image.src = src;
        }
    });
</script>
@endsection