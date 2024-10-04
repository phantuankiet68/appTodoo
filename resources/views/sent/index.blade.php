@extends('app')

@section('title', 'Home Page')

@section('content')
<div class="todo">
    <div class="email-container">
        <div class="email-container-left">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
            <form action="{{ route('send.email') }}" method="POST" enctype="multipart/form-data">
            @csrf
                <h4>{{ __('messages.Compose a message') }}</h4>
                <div class="form-input-category mt-10">
                    @if (Auth::check())
                        <input type="hidden" class="input-name" id="email" name="send_email" value="{{ Auth::user()->email }}">
                    @endif
                    <input type="hidden" class="input-name" id="subject" name="subject" value="">
                </div>
                <div class="form-input-category mt-10">
                    <label for="name">{{ __('messages.Subject') }}</label>
                    <input type="text" class="input-name" id="subject" name="subject" value="{{ __('messages.[LAMPART] Confirmation of.....') }}"  oninput="updateSubject()">
                </div>
                <div class="form-input-category mt-10">
                    <label for="name">{{ __('messages.Send to') }}</label>
                    <input type="text" class="input-name" id="email" name="to_email" value="{{ __('messages.nguyenvana@gmail.com') }}"  oninput="updateEmail()">
                </div>
                <div class="form-input-category mt-10">
                    <label for="name">{{ __('messages.Cc') }}</label>
                    <input type="text" class="input-name" id="cc" name="cc" value="{{ __('messages.nguyenvana@gmail.com') }}" oninput="updateCc()">
                </div>
                <div class="form-textarea-category">
                    <label for="description">{{ __('messages.Description') }}</label>
                    <textarea id="editor" name="description"></textarea> 
                </div>
                <div class="form-input-category mt-10">
                    <label for="file">{{ __('messages.File') }}</label>
                    <input type="file" class="input-name" id="file" name="file" multiple onchange="updateFileNames()">
                </div>
                <div class="form-btn mt-50">
                    <button type="submit">{{ __('messages.Send to') }}</button>
                </div>
            </form>
        </div>
        <div class="email-container-right">
            <div class="email-content">
                <div class="email-subject">
                    <h2 id="Tsubject">{{ __('messages.[LAMPART] Confirmation of.....') }}</h2>
                    @if (Auth::check())
                    <p>< <i>{{ Auth::user()->email }}</i> ></p>
                    @endif
                </div>
                <div class="email-subject">
                    <p>{{ __('messages.To') }}: < <i id="Temail">{{ __('messages.nguyenvana@gmail.com') }} </i> ></p>
                    <p>{{ __('messages.Cc') }}: < <i id="TCc">{{ __('messages.nguyenvana@gmail.com') }} </i> ></p>
                </div>
                <p class="spaceWait">...................................................................................................................................................</p>
                <div id="Idescription">
                    {{ __('messages.Dear Human Resources Department,') }} <br/><br/>
                    {{ __('messages.My name is [Your Name], and I am currently seeking job opportunities in the field of Information Technology. I am pleased to submit my application for the position of [Position Name] at [Company Name], which I found on [Source of Information, e.g., company website, LinkedIn, etc.].') }}<br/><br/>
                    {{ __('messages.I believe that my knowledge and experience will allow me to contribute positively to [Company Name], and I am eager to discuss further how I can contribute to the success of the team.') }}<br/><br/>
                    {{ __('messages.Thank you for considering my application. I look forward to hearing from you and hope to have the opportunity to interview.')}}<br/><br/>
                    <br/>
                    {{ __('messages.Best regards,')}}<br/>
                    {{ __('messages.Phan Tuan Kiet')}}<br/>
                    {{ __('messages.[Phone Number]')}}: 0909.....<br/>
                    <p>{{ __('messages.[Email]')}}:  @if (Auth::check()) < <i>{{ Auth::user()->email }}</i> ></p> @endif
                    {{ __('messages.[LinkedIn (if applicable)]')}}<br/>
                </div>
                <p class="spaceWait">...................................................................................................................................................</p>
                <p><b>{{ __('messages.Attachment')}}:</b></p>
                <div class="cardfileEmail">
                    <div class="cardEmail Tfile" style="display: none;">
                        <img src="{{asset('assets/images/file.jpg')}}" alt="File Image" class="cardEmail-img">
                        <div class="cardEmail-info">
                            <p class="file-name"></p>
                        </div>
                    </div>
                    <div class="cardEmail Tfile" style="display: none;">
                        <img src="{{asset('assets/images/file.jpg')}}" alt="File Image" class="cardEmail-img">
                        <div class="cardEmail-info">
                            <p class="file-name"></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    CKEDITOR.replace('editor');
    CKEDITOR.on('instanceReady', function() {
        var descriptionContent = document.getElementById('Idescription').innerHTML;
        CKEDITOR.instances.editor.setData(descriptionContent);
    });

    // Cập nhật nội dung của Idescription mỗi khi có thay đổi trong CKEditor
    CKEDITOR.instances.editor.on('change', function() {
        var editorData = CKEDITOR.instances.editor.getData();
        document.getElementById('Idescription').innerHTML = editorData;
    });
</script>
<script>
     function updateSubject() {
        var inputValue = document.getElementById("subject").value;
        document.getElementById("Tsubject").innerText = inputValue;
    }
    function updateEmail() {
        var inputValue = document.getElementById("email").value;
        document.getElementById("Temail").innerText = inputValue;
    }
    function updateCc() {
        var inputValue = document.getElementById("cc").value;
        document.getElementById("TCc").innerText = inputValue;
    }
    function updateFileNames() {
        const fileInput = document.getElementById('file');
        const fileCards = document.querySelectorAll('.Tfile'); // Chọn tất cả phần tử có class Tfile
        
        // Ẩn tất cả các thẻ Tfile trước khi hiển thị file mới
        fileCards.forEach(card => {
            card.style.display = 'none';
            card.querySelector('.file-name').textContent = ''; // Reset nội dung tên file
        });

        // Lặp qua các file đã chọn và hiển thị tương ứng
        Array.from(fileInput.files).forEach((file, index) => {
            if (fileCards[index]) {
                fileCards[index].style.display = 'block'; // Hiển thị thẻ Tfile tương ứng
                fileCards[index].querySelector('.file-name').textContent = file.name; // Cập nhật tên file
            }
        });
    }
</script>
@endsection