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
                        <p class="createAtSup">{{ __('messages.Create at') }}: {{$issue->created_at}}</p>
                    </div>
                </div>
                <div class="issueHeader-title">
                    <h3>{{ $issue->subject }}</h3>
                </div>
                <div class="issueHeader-body">
                    {!! $issue->description !!}
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
                                <img src="../assets/images/user.jpg" alt="" srcset="">
                            </div>
                            <div class="userAsHome">
                                <p>{{ $comment->user->full_name }}</p>
                                <p class="createAtSup">{{ __('messages.Create at') }}: {{ $comment->created_at->format('d/m/Y') }}</p>
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
                    </li>
                    <button class="assignUserBtn" onclick="openAssignUser()">{{ __('messages.Assign') }}</button>
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
            <div class="commentFooter">
                {{-- <div class="commentForm">
                    <form action="{{ route('comments.store', $issue->id) }}" method="POST">
                    @csrf
                        <input type="hidden" id="issue_id" name="issue_id" value="{{$issue->id}}"/>
                        @if (Auth::check())
                            <input type="hidden" id="user_id" name="user_id" value="{{ Auth::user()->id }}"/>
                        @endif
                        <div class="form-input-comment">
                            <input type="text" name="comment" id="comment">
                            <button type="submit"><i class="fa-solid fa-paper-plane"></i></button>
                        </div>
                    </form>
                </div> --}}
                <form action="{{ route('comments.store', $issue->id) }}" method="POST">
                    @csrf
                    <input type="hidden" id="issue_id" name="issue_id" value="{{$issue->id}}"/>
                    @if (Auth::check())
                        <input type="hidden" id="user_id" name="user_id" value="{{ Auth::user()->id }}"/>
                    @endif
                    <div class="container-comment">
                        <div class="comment-section">
                            <textarea placeholder="Write a comment, use @mention to notify a colleague..." name="comment" id="comment"></textarea>
                            <div class="comment-toolbar">
                                <button><i class="fa fa-paperclip"></i></button>
                                <button><i class="fa fa-at"></i></button>
                                <button><i class="fa fa-smile"></i></button>
                                <button><b>B</b></button>
                                <button><i>I</i></button>
                                <button><u>S</u></button>
                                <button><i class="fa fa-list"></i></button>
                                <button><i class="fa fa-quote-left"></i></button>
                                <button><i class="fa fa-code"></i></button>
                                <button><i class="fa fa-link"></i></button>
                                <button><i class="fa fa-question"></i></button>
                            </div>
                            <input type="text" placeholder="Notify comment to:">
                            <div class="action-buttons">
                                <button class="preview">Preview</button>
                                <button class="submit">Submit</button>
                            </div>
                        </div>
                    
                        <div class="details-section">
                            <div class="status">
                                <label>Status</label>
                                <select>
                                    <option>In Progress</option>
                                    <option>Resolved</option>
                                </select>
                            </div>
                            <div class="assignee">
                                <label>Assignee</label>
                                <input type="text" value="Phan Tuan Kiet">
                            </div>
                            <div class="dates">
                                <label>Start Date</label>
                                <input type="date">
                                <label>Due Date</label>
                                <input type="date">
                            </div>
                            <div class="resolution">
                                <label>Resolution</label>
                                <select>
                                    <option>Fixed</option>
                                    <option>Unresolved</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </form>
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