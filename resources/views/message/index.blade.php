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
        <div class="chat-user-friend">
            <p>Tìm kiếm bạn bè</p>
            <form action="{{ route('friend.send') }}" method="POST">
              @csrf
                <div class="search-bar">
                    <input type="text" name="email" placeholder="Nhập email của bạn bè" required>
                    <button><i class="fa-solid fa-users"></i></button>
                </div>
            </form>
            @foreach ($receivedFriendRequests as $request)
              <div class="needFriends">
                  <p class="text-center" >Yêu cầu từ: {{ $request->user ? $request->user->full_name : 'Người dùng không tồn tại' }}</p>
                  <div class="formNeedFriends">
                      <form action="{{ route('friend.accept', $request->id) }}" method="POST">
                          @csrf
                          <button type="submit">Chấp nhận</button>
                      </form>

                      <form action="{{ route('friend.reject', $request->id) }}" method="POST">
                          @csrf
                          <button type="submit">Từ chối</button>
                      </form>
                  </div>
              </div>
              @endforeach
        </div>
        <div class="search-box">
            <input type="text" placeholder="Search Here...">
        </div>
        @if($friends->isEmpty())
            <p class="red">Bạn chưa có bạn bè nào.</p>
        @else
          <ul class="contacts-list">
              @foreach ($friends as $friend)
              <li class="contact" data-id="{{ $friend->id }}">
                  <img src="{{asset('assets/images/english.jpg')}}">
                  <div>
                      <p>{{ $friend->full_name }}</p>
                      <p class="status">Developer</p>
                  </div>
              </li>
              @endforeach
          </ul>
        @endif
    </div>

    <!-- Chat Area -->
    <div class="chat-area">
        <div class="chat-header">
            <img id="chatImage" src="{{asset('assets/images/english.jpg')}}">
            <div>
                <p class="chat-name" id="chatName">Chưa có lựa chọn</p>
                <p class="chat-status">Online</p>
            </div>
        </div>
        <div class="chat-messages" id="chatMessages">
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
              <form class="message-input-form" action="{{ route('messages.send') }}" method="POST">
                  @csrf
                  @if (Auth::check())
                      <input type="hidden" name="user_id" value="{{ Auth::user()->id }}"/>
                  @endif
                  <input type="hidden" id="friend_id" name="friend_id" placeholder="Type a message..." />
                  <i class="fa-solid fa-circle-plus chat-icon"></i>
                  <input type="text" name="message" placeholder="Enter Message...">
                  <i class="fa-regular fa-face-smile chat-icon"></i>
                  <button type="submit"> <i class="fa-regular fa-paper-plane chat-icon"></i></button>
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
  $(document).ready(function() {
        $('.message-input-form').on('submit', function(event) {
            event.preventDefault();

            const formData = $(this).serialize();

            $.ajax({
                url: "{{ route('messages.send') }}",
                type: "POST",
                data: formData,
                success: function(response) {
                    console.log("Message sent successfully!");
                    $('.message-input-form input[name="message"]').val('');
                },
                error: function(xhr) {
                    console.error("Error sending message.");
                }
            });
        });
    });
  document.querySelectorAll('.contact').forEach(contact => {
        contact.addEventListener('click', function () {
            const friendId = this.getAttribute('data-id');
            const userId = "{{ Auth::id() }}";

            localStorage.setItem('currentUserId', userId);
            localStorage.setItem('currentFriendId', friendId);

           fetch(`/messages/${userId}/${friendId}`)
                .then(response => response.json())
                .then(messages => {
                    const chatMessages = document.getElementById('chatMessages');
                    chatMessages.innerHTML = '';

                    messages.forEach(message => {
                        const messageDiv = document.createElement('div');
                        messageDiv.classList.add('message');

                        if (message.sender_id == userId) {
                            messageDiv.classList.add('sent');
                        } else {
                            messageDiv.classList.add('received');
                        }

                        messageDiv.textContent = message.message;
                        chatMessages.appendChild(messageDiv);
                    });
                })
                .catch(error => console.error('Error fetching messages:', error));
            setInterval(loadMessages, 10000);
        });
    });
    function loadMessages() {
        const savedUserId = localStorage.getItem('currentUserId');
        const savedFriendId = localStorage.getItem('currentFriendId');

        if (savedUserId && savedFriendId) {
            fetch(`/messages/${savedUserId}/${savedFriendId}`)
                .then(response => response.json())
                .then(messages => {
                    const chatMessages = document.getElementById('chatMessages');
                    chatMessages.innerHTML = ''; // Xóa các tin nhắn cũ

                    messages.forEach(message => {
                        const messageDiv = document.createElement('div');
                        messageDiv.classList.add('message');

                        // Xác định người gửi
                        if (message.sender_id == savedUserId) {
                            messageDiv.classList.add('sent');
                        } else {
                            messageDiv.classList.add('received');
                        }

                        messageDiv.textContent = message.message;
                        chatMessages.appendChild(messageDiv);
                    });
                })
                .catch(error => console.error('Error fetching messages:', error));
        } else {
            console.log('User ID or Friend ID not found in localStorage');
        }
    }

    window.addEventListener('load', () => {
        loadMessages();
        setInterval(loadMessages, 1000);
    });

    document.querySelectorAll('.contact').forEach(contact => {
        contact.addEventListener('click', function () {
            const friendId = this.getAttribute('data-id');
            const userId = "{{ Auth::id() }}";

            localStorage.setItem('currentUserId', userId);
            localStorage.setItem('currentFriendId', friendId);

            loadMessages();
        });
    });

    document.querySelectorAll('.contact').forEach(contact => {
        contact.addEventListener('click', function () {
            const friendId = this.getAttribute('data-id');

            fetch(`/friend/${friendId}`)
                .then(response => {
                    if (!response.ok) {
                        throw new Error('Network response was not ok ' + response.statusText);
                    }
                    return response.json();
                })
                .then(data => {
                    if (data.error) {
                        console.error(data.error);
                    } else {
                        document.getElementById('chatName').textContent = data.full_name;
                        document.getElementById('friend_id').value = data.id;

                        localStorage.setItem('selectedFriendName', data.full_name);
                        localStorage.setItem('selectedFriendId', data.id);
                    }
                })
                .catch(error => console.error('Error fetching friend details:', error));
        });
    });

    window.addEventListener('load', () => {
        const savedFriendName = localStorage.getItem('selectedFriendName');
        const savedFriendId = localStorage.getItem('selectedFriendId');
        
        if (savedFriendName && savedFriendId) {
            document.getElementById('chatName').textContent = savedFriendName;
            document.getElementById('friend_id').value = savedFriendId;
        }
    });

</script>

@endsection
