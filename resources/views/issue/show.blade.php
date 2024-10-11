@extends('app')

@section('title', 'Home Page')

@section('content')
<div class="todo">
    <div class="projecTodoBody">
        <div class="col-8">
            <div class="issueHeader">
                <div class="table_user">
                    <div class="table_user_image">
                        <img src="../assets/images/user.jpg" alt="" srcset="">
                    </div>
                    <div class="userAsHome">
                        <p>{{ $issue->user ? $issue->user->full_name : 'Không có danh mục' }}</p>
                        <p class="createAtSup">create at: {{$issue->created_at}}</p>
                    </div>
                </div>
                <div class="issueHeader-title">
                    <h2>{{ $issue->subject }}</h2>
                </div>
                <div class="issueHeader-body">
                    {!! $issue->description !!}
                </div>
                <div class="issueHeader-footer">
                    <ul class="alternate-list">
                        <li>
                            <div class="alternate-list-left">
                                <p>Assign</p>
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
                                <p>Priority</p>
                                <p><i class="fa-regular fa-circle-right"></i></p>
                            </div>
                            <div class="alternate-list-right">
                                @if ($issue->level = 1)
                                <div class="priorityYes">Priority</div>
                                @else
                                <div class="priorityNormal">Normal</div>
                                @endif
                            </div>
                        </li>
                        <li>
                            <div class="alternate-list-left">
                                <p>Category</p>
                                <p><i class="fa-regular fa-circle-right"></i></p>
                            </div>
                            <div class="alternate-list-right">
                                {{ $issue->category ? $issue->category->name : 'Không có danh mục' }}
                            </div>
                        </li>
                        <li>
                            <div class="alternate-list-left">
                                <p>Level</p>
                                <p><i class="fa-regular fa-circle-right"></i></p>
                            </div>
                            <div class="alternate-list-right">
                                @if ($issue->level = 1)
                                <div class="priorityImportant">Important</div>
                                @else
                                <div class="priorityNormal">Normal</div>
                                @endif
                            </div>
                        </li>
                        <li>
                            <div class="alternate-list-left">
                                <p>Start date</p>
                                <p><i class="fa-regular fa-circle-right"></i></p>
                            </div>
                            <div class="alternate-list-right">
                            {!! $issue->start_date !!}
                            </div>
                        </li>
                        <li>
                            <div class="alternate-list-left">
                                <p>End date</p>
                                <p><i class="fa-regular fa-circle-right"></i></p>
                            </div>
                            <div class="alternate-list-right">
                            {!! $issue->end_date !!}
                            </div>
                        </li>
                        <li>
                            <div class="alternate-list-left">
                                <p>Reffence</p>
                                <p><i class="fa-regular fa-circle-right"></i></p>
                            </div>
                            <div class="alternate-list-right">
                                <div class="linkBlank">
                                    <a href="{{ $issue->reference }}">
                                        link
                                    </a>
                                </div>
                                <p>{{ $issue->reference }}</p>
                            </div>
                        </li>
                        <li>
                            <div class="alternate-list-left">
                                <p>Status</p>
                                <p><i class="fa-regular fa-circle-right"></i></p>
                            </div>
                            <div class="alternate-list-right">
                                @if ($issue->stutus = 2)
                                <div class="StatusInpross">Inpross</div>
                                @elseif ($issue->stutus = 1)
                                <div class="StatusDone">Done</div>
                                @else
                                <div class="StatusOpen">Open</div>
                                @endif
                            </div>
                        </li>
                        <button class="assignUserBtn" onclick="openAssignUser()">Assign User</button>
                        <div class="assignUserBtnTonggle">
                            <form action="{{ route('assign.index_add', $issue->id) }}" method="POST">
                            @csrf
                                <p class="text-center">Assign User</p>
                                <input type="hidden" class="input-name" id="issue_id" name="issue_id" value="{{$issue->id}}">
                                <div class="form-select-category mt-10">
                                    <label for="user_id">{{ __('messages.User') }}</label>
                                    <select name="user_id" id="user_id">
                                    @foreach($users as $user)
                                        <option value="{{ $user->id }}">{{ $user->full_name }}</option>
                                    @endforeach
                                    </select>
                                </div>
                                <div class="form-btn">
                                    <button type="submit">{{ __('messages.Add') }}</button>
                                </div>
                            </form>
                        </div>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-4">
            <div class="commentHeader">
                <h3>Comments</h3>
                <div class="commentHeaderList">
                    <button type="button">All Comment</button>
                </div>
            </div>
            <div class="commentBody">
                @if($comments->count())
                @foreach($comments as $comment)
                <div class="commentBodyBox">
                    <div class="table_user">
                        <div class="table_user_image">
                            <img src="../assets/images/user.jpg" alt="" srcset="">
                        </div>
                        <div class="userAsHome">
                            <p>{{ $comment->user->full_name }}</p>
                            <p class="createAtSup">create at: {{ $comment->created_at->format('d/m/Y') }}</p>
                        </div>
                    </div>
                    <div class="commentDesc">
                        <p>{{ $comment->comment }}</p>
                    </div>
                </div>
                @endforeach
                @else
                    <p>No comments available.</p>
                @endif
            </div>
            <div class="commentFooter">
                <div class="commentForm">
                    <form action="{{ route('comments.store', $issue->id) }}" method="POST">
                    @csrf
                        <input type="hidden" id="issue_id" name="issue_id" value="{{$issue->id}}"/>
                        @if (Auth::check())
                            <input type="hidden" id="user_id" name="user_id" value="{{ Auth::user()->id }}"/>
                        @endif
                        <div class="form-input-comment">
                            <input type="text" name="comment" id="comment">
                            <button type="submit">Comment</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const menu = document.querySelector('.nav-link');
        menu.style.display = 'none';
    });
    function openAssignUser() {
        const openAssignUser = document.querySelector('.assignUserBtnTonggle');
        
        // Kiểm tra nếu popup đang ẩn (display: none)
        if (openAssignUser.style.display === 'none' || openAssignUser.style.display === '') {
            openAssignUser.style.display = 'block'; // Hiển thị popup
        } else {
            openAssignUser.style.display = 'none'; // Ẩn popup
        }
    }
</script>

@endsection