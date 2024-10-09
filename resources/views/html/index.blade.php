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
            <button type="button" class="create" onclick="CreateHtmlForm()"><i class="fa-solid fa-plus"></i> Tạo mới</button>
        </div>
    </div>
    <div class="component-container">
        <div class="html-container">
            <div class="component-card">
                @foreach($htmls as $item)
                <div class="c_card">
                    <img src="" alt="Image Description" />
                    <div class="overlay">
                        Thông tin hiển thị
                        <button onclick="showEditHtml()">xem</button>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>

<div class="model" id="createHtml">
    <div class="modelCreateFromNormal">
        <form method="POST" action="{{ route('htmls.store') }}" enctype="multipart/form-data">
        @csrf
            <div class="saveAction mb-10">
                <button type="submit">Save changes</button>
                <h2 class="text-center">{{ __('messages.Add New') }}</h5>
            </div>
            <input type="hidden" name="category_id" id="" value="24"/>
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
        <div class="BtnCloseCategoryTask" onclick="closeHtmlForm()">
            <p>X</p>
        </div>
    </div>
</div>


<div class="model" id="showComponentForm">
    <div class="modelCreateFromBig">
        <div class="buttonAction">
            <button class="show" onclick="showTab('show')"><i class="fa-solid fa-eye"></i> Show</button>
            <button class="edit" onclick="showTab('edit')"><i class="fa-solid fa-pen-to-square"></i> Edit</button>
            <button class="delete" onclick="showTab('delete')"><i class="fa-solid fa-trash"></i> Delete</button>
        </div>

        <div class="showContentComponent" id="show">
            <div class="showNameComponent">
                <h3 id="shownamecomponent"></h3>
                <p id="showdescriptioncomponent"></p>
                <a href="" target="_blank" id="showlinkcomponent"></a>
            </div>
            <div class="showCodeComponent">
                <div class="popupShowCode">
                    <p id="showcomponent1"></p>
                </div>
                <div class="popupShowCode">
                    <p id="showcomponent2"></p>
                </div>
                <div class="popupShowCode">
                    <p id="showcomponent3"></p>
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
            <form method="POST" id="delete-Component">
                @csrf
                @method('DELETE')
                <input type="hidden" id="component_id" value="{{ $component->id ?? '' }}" />
                <h3 class="text-center">{{ __('messages.Are you sure you want to delete?') }}</h3>
                <p class="text-center" id="deleteComponent">{{ $component->name ?? '' }}</p> 
                <div class="form-btn-delete">
                    <button type="submit">{{ __('messages.Delete') }}</button>
                </div>
            </form>            
        </div>
        <div class="BtnCloseCategoryTask" onclick="closeDeleteComponentForm()">
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
    function showEditComponent(componentId) {
        const showComponentForm = document.getElementById('showComponentForm');
        showComponentForm.style.display = 'block';
        fetch(`/component/${componentId}`)
        .then(response => response.json())
        .then(data => {
            document.getElementById('component_id').value = data.id;
            document.getElementById('shownamecomponent').innerHTML = data.name;
            document.getElementById('showdescriptioncomponent').innerHTML = data.description;
            document.getElementById('showlinkcomponent').innerHTML = data.link;
            document.getElementById('showlinkcomponent').href = data.link;
            document.getElementById('showcomponent1').innerHTML = data.c_html;
            document.getElementById('showcomponent2').innerHTML = data.c_css;
            document.getElementById('showcomponent3').innerHTML = data.c_javascript;
            document.getElementById('deleteComponent').innerHTML = data.name;
        })
    }
    document.addEventListener('DOMContentLoaded', function() {
        document.getElementById('delete-Component').onsubmit = function(event) {
            event.preventDefault(); // Ngăn chặn hành động mặc định của form
            
            const componentIdElement = document.getElementById('component_id');
            const componentId = componentIdElement.value; // Lấy giá trị component_id

            // Kiểm tra nếu componentId không rỗng
            if (componentId) {
                this.action = `/component/${componentId}`; // Thiết lập action cho form
                this.submit(); // Gửi form
            } else {
                console.error('Component ID is missing.'); // Ghi log lỗi nếu không tìm thấy ID
            }
        };
    });



    function closeDeleteComponentForm() {
        const closeDeleteComponentForm = document.getElementById('showComponentForm')
        if (closeDeleteComponentForm.style.display === 'none' || closeDeleteComponentForm.style.display === '') {
            closeDeleteComponentForm.style.display = 'block'; 
        } else {
            closeDeleteComponentForm.style.display = 'none';
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
     function CreateHtmlForm(){
        const CreateHtmlForm = document.getElementById('createHtml')
        if (CreateHtmlForm.style.display === 'none' || CreateHtmlForm.style.display === '') {
            CreateHtmlForm.style.display = 'block'; 
        } else {
            CreateHtmlForm.style.display = 'none';
        }
    }

    function closeHtmlForm() {
        const CreateHtmlForm = document.getElementById('createHtml')
        if (CreateHtmlForm.style.display === 'none' || CreateHtmlForm.style.display === '') {
            CreateHtmlForm.style.display = 'block'; 
        } else {
            CreateHtmlForm.style.display = 'none';
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