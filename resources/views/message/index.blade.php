@extends('app')

@section('title', 'Home Page')

@section('content')

<div class="chat-container">
    <div class="sidebar-chat">
        <div class="chat-user">
            <div class="chat-user-img">
                <img src="{{asset('assets/images/english.jpg')}}">
            </div>
            <div class="chat-user-content">
                <p class="user-box">David Peters</p>
                <p class="status">Senior Developer</p>
            </div>
        </div>
        <div class="">

        </div>
        <div class="search-box">
            <input type="text" placeholder="Search Here...">
        </div>
        <ul class="contacts-list">
            <li class="contact active">
                <img src="{{asset('assets/images/english.jpg')}}">
                <div>
                    <p>David Peters</p>
                    <p class="status">Senior Developer</p>
                </div>
            </li>
            <li class="contact">
                <img src="{{asset('assets/images/english.jpg')}}">
                <div>
                    <p>Lisa Roy</p>
                    <p class="status">Hi, are you available tomorrow?</p>
                </div>
            </li>
        </ul>
    </div>

    <!-- Chat Area -->
    <div class="chat-area">
        <div class="chat-header">
            <img src="{{asset('assets/images/english.jpg')}}">
            <div>
                <p class="chat-name">Dianne Jhonson</p>
                <p class="chat-status">Online</p>
            </div>
        </div>
      <div class="chat-messages">
        <div class="message received">
          <p>Hi David, have you got the project report pdf?</p>
        </div>
        <div class="message sent">
          <p>NO. I did not get it.</p>
        </div>
        <div class="message received">
          <p>
            Ok, I will just send it here. Plz be sure to fill the details by today end of the day.
          </p>
          <div class="attachment">
            <span>📄 project_report.pdf</span>
          </div>
        </div>
        <div class="message sent">
          <p>Ok. Should I send it over email as well after filling the details?</p>
        </div>
        <div class="message received">
          <p>Ya, I'll be adding more team members to it.</p>
        </div>
      </div>
      <div class="chat-input">
        <div class="input-area">
            <form class="message-input-form">
                <i class="fa-solid fa-circle-plus chat-icon"></i>
                <input type="text" name="text" placeholder="Enter Message...">
                <i class="fa-regular fa-face-smile chat-icon"></i>
                <button> <i class="fa-regular fa-paper-plane chat-icon"></i></button>
            </form>
        </div>
      </div>
    </div>

    <!-- Profile Details -->
    <div class="profile-details">
    <img src="{{asset('assets/images/english.jpg')}}">
      <h2>Dianne Jhonson</h2>
      <p>Junior Developer</p>
      <div class="actions">
        <button>Chat</button>
        <button>Video Call</button>
      </div>
      <div class="attachments">
        <h3>Attachments</h3>
        <div class="file-icons">
          <span>📄 PDF</span>
          <span>🖼️ Image</span>
          <span>📁 File</span>
        </div>
      </div>
    </div>
  </div>
<script>
    ClassicEditor
        .create(document.querySelector('#editor'))
        .then(editor => {
            editorInstance = editor; 
        })
        .catch(error => {
            console.error(error);
        });
    
</script>


@endsection
