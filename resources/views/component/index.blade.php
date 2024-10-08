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
            <button type="button" class="create"><i class="fa-solid fa-plus"></i> Tạo mới</button>
        </div>
    </div>
    <div class="component-container">
        <div class="component-container-right">
            <div class="component-card">
                <div class="c_card">
                    <img src="../assets/images/path.jpg" alt="Image">
                    <div class="overlay">
                        Thông tin hiển thị
                        <button>xem</button>
                    </div>
                </div>
                <div class="c_card">
                    <img src="../assets/images/path.jpg" alt="Image">
                    <div class="overlay">
                        Thông tin hiển thị
                        <button>xem</button>
                    </div>
                </div>
                <div class="c_card">
                    <img src="../assets/images/path.jpg" alt="Image">
                    <div class="overlay">
                        Thông tin hiển thị
                        <button>xem</button>
                    </div>
                </div>
                <div class="c_card">
                    <img src="../assets/images/path.jpg" alt="Image">
                    <div class="overlay">
                        Thông tin hiển thị
                        <button>xem</button>
                    </div>
                </div>
                <div class="c_card">
                    <img src="../assets/images/path.jpg" alt="Image">
                    <div class="overlay">
                        Thông tin hiển thị
                        <button>xem</button>
                    </div>
                </div>
                <div class="c_card">
                    <img src="../assets/images/path.jpg" alt="Image">
                    <div class="overlay">
                        Thông tin hiển thị
                        <button>xem</button>
                    </div>
                </div>

                <div class="c_card">
                    <img src="../assets/images/path.jpg" alt="Image">
                    <div class="overlay">
                        Thông tin hiển thị
                        <button>xem</button>
                    </div>
                </div>
                <div class="c_card">
                    <img src="../assets/images/path.jpg" alt="Image">
                    <div class="overlay">
                        Thông tin hiển thị
                        <button>xem</button>
                    </div>
                </div>
                <div class="c_card">
                    <img src="../assets/images/path.jpg" alt="Image">
                    <div class="overlay">
                        Thông tin hiển thị
                        <button>xem</button>
                    </div>
                </div>
                <div class="c_card">
                    <img src="../assets/images/path.jpg" alt="Image">
                    <div class="overlay">
                        Thông tin hiển thị
                        <button>xem</button>
                    </div>
                </div>
                <div class="c_card">
                    <img src="../assets/images/path.jpg" alt="Image">
                    <div class="overlay">
                        Thông tin hiển thị
                        <button>xem</button>
                    </div>
                </div>
                <div class="c_card">
                    <img src="../assets/images/path.jpg" alt="Image">
                    <div class="overlay">
                        Thông tin hiển thị
                        <button id="openModalCard">xem</button>
                    </div>
                </div>
                <div class="c_card">
                    <img src="../assets/images/path.jpg" alt="Image">
                    <div class="overlay">
                        Thông tin hiển thị
                        <button id="openModalCard">xem</button>
                    </div>
                </div>
                <div class="c_card">
                    <img src="../assets/images/path.jpg" alt="Image">
                    <div class="overlay">
                        Thông tin hiển thị
                        <button id="openModalCard">xem</button>
                    </div>
                </div>
                <div class="c_card">
                    <img src="../assets/images/path.jpg" alt="Image">
                    <div class="overlay">
                        Thông tin hiển thị
                        <button>xem</button>
                    </div>
                </div>
                <div class="c_card">
                    <img src="../assets/images/path.jpg" alt="Image">
                    <div class="overlay">
                        Thông tin hiển thị
                        <button id="openModalCard">xem</button>
                    </div>
                </div>
                <div class="c_card">
                    <img src="../assets/images/path.jpg" alt="Image">
                    <div class="overlay">
                        Thông tin hiển thị
                        <button id="openModalCard">xem</button>
                    </div>
                </div>
                <div class="c_card">
                    <img src="../assets/images/path.jpg" alt="Image">
                    <div class="overlay">
                        Thông tin hiển thị
                        <button id="openModalCard">xem</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="model">
    <div class="modelCreateFromBig" id="createComponent">
        <form method="POST" action="{{ route('question.store') }}">
        @csrf
            <div class="saveAction">
                <button type="submit">Save changes</button>
                <h2 class="text-center">{{ __('messages.Add New') }}</h5>
            </div>
            <div class="modelForm mt-20">
                <div class="modelFormLeft">
                    @if (Auth::check())
                        <input type="hidden" id="user_id" name="user_id" value="{{ Auth::user()->id }}"/>
                    @endif
                    <div class="form-input-category">
                        <label for="name">{{ __('messages.Name') }}</label>
                        <input type="text" class="input-name" id="todo-name" name="name">
                    </div>
                    <div class="modelContent">
                        <div class="modelContentDescription">
                            <div class="form-textarea-category">
                                <label for="description">{{ __('messages.Description') }}</label>
                                <textarea class="textareaBigSize" name="question"></textarea> 
                            </div>
                        </div>
                        <div class="preview">
                            <div class="img-preview">
                                <img id="img-preview" src="{{asset('assets/images/preview.jpg')}}" />
                            </div>
                            <label for="file-input">Upload Image</label>
                            <input accept="image/*" type="file" id="file-input" />
                        </div>  
                    </div>
                    <div class="form-textarea-category">
                        <label for="description">HTML</label>
                        <textarea id="editor" name="question"></textarea> 
                    </div>
                </div>
                <div class="modelFormRight">
                    <div class="form-textarea-category">
                        <textarea id="editor1" name="question"></textarea> 
                    </div>
                    <div class="form-textarea-category">
                        <label for="description" class="mt-10">Javascript</label>
                        <textarea id="editor2" name="question"></textarea> 
                    </div>
                    <div class="form-input-category mt-10">
                        <label for="name">{{ __('messages.Link') }}</label>
                        <input type="text" class="input-name" id="todo-name" name="name">
                    </div>
                </div>
            </div>
        </form>
        <div class="BtnCloseCategoryTask" onclick="closeQuestionForm()">
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