@extends('app')

@section('title', 'Home Page')

@section('content')
<div class="todo">
    <div class="showIssue">
        <div class="col-8">
            <div class="issueHeader">
                <div class="table_user">
                    <div class="table_user_image">
                        <img src="../assets/images/user.jpg" alt="" srcset="">
                    </div>
                    <div class="userAsHome">
                        <p>{{ $issue->user ? $issue->user->full_name : 'Không có danh mục' }}</p>
                        <p class="createAtSup">{{ __('messages.Create at') }}: {{$issue->created_at}}</p>
                    </div>
                </div>
                <div class="issueHeader-title">
                    <h3>{{ $issue->subject }}</h3>
                </div>
                <div class="issueHeader-body">
                    {!! $issue->description !!}
                    <div class="issueImage">
                        @foreach($issueImages as $item)
                            <div class="issueImageItem">
                                <img class="popup-image" src="{{ asset('assets/images/' . $item->image_path) }}" alt="">
                            </div>
                        @endforeach
                    </div>
                </div>
                
                <div class="commentHeader">
                    <h3>{{ __('messages.Comment') }}</h3>
                    <div class="commentHeaderList">
                        <button type="button">{{ __('messages.All') }}</button>
                    </div>
                </div>
                <div class="commentBody">
                    @if($comments->count())
                        @foreach($comments as $comment)
                            <div class="commentBodyBox">
                                <div class="table_user">
                                    <div class="table_user_image">
                                        <img src="{{ $comment->user->profile_image_url ?? '../assets/images/user.jpg' }}" alt="User Image">
                                    </div>
                                    <div class="userAsHome">
                                        <p>{{ $comment->user->full_name }}</p>
                                        <p class="createAtSup">{{ __('messages.Create at') }}: {{ $comment->created_at->format('d-m-Y H:i') }}</p>
                                    </div>
                                </div>
                                <div class="commentDetails">
                                    <p><strong>Status   <i class="fa-regular fa-circle-right"></i>  </strong> {{ $comment->status }}</p>
                                    @if($comment->assignee)
                                        <p><strong>Assignee  <i class="fa-regular fa-circle-right"></i>  </strong> {{ $comment->assignee->full_name }}</p>
                                    @endif
                                    @if($comment->start_date)
                                        <p><strong>Start Date  <i class="fa-regular fa-circle-right"></i>  </strong> {{ \Carbon\Carbon::parse($comment->start_date)->format('d-m-Y') }}</p>
                                    @endif
                                    @if($comment->end_date)
                                        <p><strong>End Date   <i class="fa-regular fa-circle-right"></i>  </strong> {{ \Carbon\Carbon::parse($comment->end_date)->format('d-m-Y') }}</p>
                                    @endif
                                </div>
                                <div class="commentDesc">
                                    <p>{{ $comment->content }}</p>
                                </div>
                            </div>
                        @endforeach
                    @else
                        <p>No comments available.</p>
                    @endif
                </div>
            </div>
        </div>
        <div class="col-4">
            <div class="issueHeader-footer">
                <ul class="alternate-list">
                    <li>
                        <div class="alternate-list-left">
                            <p>{{ __('messages.Assign') }}</p>
                            <p><i class="fa-regular fa-circle-right"></i></p>
                        </div>
                        <div class="alternate-list-right">
                            @foreach($issueUsers as $issueUser)
                            <div class="assignUser">
                                {{ $issueUser->user ? $issueUser->user->full_name : 'Không có danh mục' }}
                            </div>
                            @endforeach
                        </div>
                    </li>
                    <li>
                        <div class="alternate-list-left">
                            <p>{{ __('messages.Priority') }}</p>
                            <p><i class="fa-regular fa-circle-right"></i></p>
                        </div>
                        <div class="alternate-list-right">
                            @if ($issue->level = 1)
                            <div class="priorityYes">{{ __('messages.Priority') }}</div>
                            @else
                            <div class="priorityNormal">{{ __('messages.Normal') }}</div>
                            @endif
                        </div>
                    </li>
                    <li>
                        <div class="alternate-list-left">
                            <p>{{ __('messages.Category') }}</p>
                            <p><i class="fa-regular fa-circle-right"></i></p>
                        </div>
                        <div class="alternate-list-right">
                            {{ $issue->category ? $issue->category->name : 'Không có danh mục' }}
                        </div>
                    </li>
                    <li>
                        <div class="alternate-list-left">
                            <p>{{ __('messages.Level') }}</p>
                            <p><i class="fa-regular fa-circle-right"></i></p>
                        </div>
                        <div class="alternate-list-right">
                            @if ($issue->level = 1)
                            <div class="priorityImportant">{{ __('messages.Important') }}</div>
                            @else
                            <div class="priorityNormal">{{ __('messages.Normal') }}</div>
                            @endif
                        </div>
                    </li>
                    <li>
                        <div class="alternate-list-left">
                            <p>{{ __('messages.Start Date') }}</p>
                            <p><i class="fa-regular fa-circle-right"></i></p>
                        </div>
                        <div class="alternate-list-right">
                        {!! $issue->start_date !!}
                        </div>
                    </li>
                    <li>
                        <div class="alternate-list-left">
                            <p>{{ __('messages.End Date') }}</p>
                            <p><i class="fa-regular fa-circle-right"></i></p>
                        </div>
                        <div class="alternate-list-right">
                        {!! $issue->end_date !!}
                        </div>
                    </li>
                    <li>
                        <div class="alternate-list-left">
                            <p>{{ __('messages.Reference') }}</p>
                            <p><i class="fa-regular fa-circle-right"></i></p>
                        </div>
                        <div class="alternate-list-right">
                            <div class="linkBlank">
                                <a href="{{ $issue->reference }}">
                                    {{ __('messages.Link') }}
                                </a>
                            </div>
                            <p>{{ $issue->reference }}</p>
                        </div>
                    </li>
                    <li>
                        <div class="alternate-list-left">
                            <p>{{ __('messages.Status') }}</p>
                            <p><i class="fa-regular fa-circle-right"></i></p>
                        </div>
                        <div class="alternate-list-right">
                            @if ($issue->stutus = 2)
                            <div class="StatusInpross">{{ __('messages.In progress') }}</div>
                            @elseif ($issue->stutus = 1)
                            <div class="StatusDone">{{ __('messages.Done') }}</div>
                            @else
                            <div class="StatusOpen">{{ __('messages.Open') }}</div>
                            @endif
                        </div>
                    </li
                </ul>
            </div>
            <div class="commentFooter">
                <div id="comments-section" class="container-comment">
                    <input type="hidden" id="issue_id" name="issue_id" value="{{ $issue->id }}">
                    <div class="comment-section">
                        <textarea id="new-comment" placeholder="Write a comment..."></textarea>
                        <div class="action-buttons">
                            <button id="submit-comment" class="submit">Submit</button>
                        </div>
                    </div>
            
                    <div class="details-section">
                        <div class="status">
                            <label for="status">Status</label>
                            <select id="status">
                                <option value="Pending">Pending</option>
                                <option value="In Progress">In Progress</option>
                                <option value="Resolved">Resolved</option>
                            </select>
                        </div>
            
                        <div class="assignee">
                            <label for="assignee">Assignee</label>
                            <select name="user_id" id="assignee">
                                <option value="" selected disabled>Select Assignee</option>
                                @foreach($users as $user)
                                    <option value="{{ $user->id }}">{{ $user->full_name }}</option>
                                @endforeach
                            </select>
                        </div>
            
                        <div class="dates">
                            <label for="start-date">Start Date</label>
                            <input type="date" id="start-date">
                            <label for="end-date">Due Date</label>
                            <input type="date" id="end-date">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="popup" class="popup">
    <span id="close-popup" class="close-btn">&times;</span>
    <img id="popup-img" class="popup-img" src="" alt="">
</div>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const menu = document.querySelector('.nav-link');
        menu.style.display = 'none';
    });
    document.addEventListener('DOMContentLoaded', function () {
    const issueId = document.getElementById('issue_id').value;
    const newComment = document.getElementById('new-comment');
    const statusDropdown = document.getElementById('status');
    const assigneeDropdown = document.getElementById('assignee');
    const startDateInput = document.getElementById('start-date');
    const endDateInput = document.getElementById('end-date');
    const submitButton = document.getElementById('submit-comment');

    // Gửi bình luận mới
    submitButton.addEventListener('click', async () => {
        const content = newComment.value;
        const status = statusDropdown.value;
        const assigneeId = assigneeDropdown.value;
        const startDate = startDateInput.value;
        const endDate = endDateInput.value;

        if (!content.trim()) return alert('Comment cannot be empty.');

        try {
            const response = await fetch('/comment_issue', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                },
                body: JSON.stringify({
                    issue_id: issueId,
                    content,
                    status,
                    assignee_id: assigneeId,
                    start_date: startDate,
                    end_date: endDate,
                }),
            });

            if (!response.ok) {
                const errorData = await response.json();
                throw new Error(errorData.message || 'Failed to submit comment');
            }

            // Nếu gửi thành công, load lại trang
            window.location.reload();
        } catch (error) {
            console.error('Error submitting comment:', error);
            alert('Failed to submit comment. Please try again.');
        }
    });
});

document.addEventListener('DOMContentLoaded', function () {
    // Get all image elements
    const images = document.querySelectorAll('.popup-image');
    const popup = document.getElementById('popup');
    const popupImg = document.getElementById('popup-img');
    const closeBtn = document.getElementById('close-popup');

    // Show the popup when an image is clicked
    images.forEach(img => {
        img.addEventListener('click', function() {
            const imgSrc = this.src; // Get the src of the clicked image
            popup.style.display = 'flex'; // Show the popup
            popupImg.src = imgSrc; // Set the clicked image as the popup image
        });
    });

    // Close the popup when the close button is clicked
    closeBtn.addEventListener('click', function() {
        popup.style.display = 'none'; // Hide the popup
    });

    // Close the popup when clicking outside of the image
    window.addEventListener('click', function(event) {
        if (event.target === popup) {
            popup.style.display = 'none'; // Hide the popup if clicked outside the image
        }
    });
});

</script>

@endsection