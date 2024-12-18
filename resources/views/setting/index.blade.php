@extends('app')

@section('title', 'Home Page')

@section('content')
<div class="todo">
    <div class="todoHeader">
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
            <form action="">
                <div class="Users--right--btns">
                    <select name="date" id="date" class="select-dropdown doctor--filter">
                        <option>Category</option>
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
            <button type="button" class="create" onclick="CreateColorForm()"><i class="fa-solid fa-plus"></i> Tạo mới</button>
        </div>
    </div>
    <div class="component-container UserContainer">
        <div class="component-color">
            @foreach($settings as $item)
            <div class="setting-action">
                <form action="{{ route('user.updateRoles', $item->user->id) }}" method="POST" class="form-switch">
                    @csrf
                    <label for="toggle100">{{ __('messages.Confirm') }} </label>
                    <div class="switch">
                        <input type="checkbox" id="toggle100" name="roles" value="{{ $item->user->roles }}" {{ $item->user->roles == 1 ? 'checked' : '' }} />
                        <label for="toggle100"></label>
                    </div>
                    <button type="submit" style="display: none;">Submit</button>
                </form>
                <form action="{{ route('update.setting', $item->id) }}" method="POST" class="form-switch">
                    @csrf
                    @method('POST')
                    <label for="toggle1">{{ __('messages.Settings') }}</label>
                    <div class="switch">
                        <input type="checkbox" id="toggle1" name="setting" value="{{$item->setting}}" {{ $item->setting == 1 ? 'checked' : '' }} />
                        <label for="toggle1"></label>
                    </div>
                    <button type="submit" style="display: none;">Submit</button>
                </form>
                <form action="{{ route('update.issue', $item->id) }}" method="POST" class="form-switch">
                    @csrf
                    @method('POST')
                    <label for="toggle2">{{ __('messages.Issues') }}</label>
                    <div class="switch">
                        <input type="checkbox" id="toggle2" name="issue" value="{{$item->issue}}" {{ $item->issue == 1 ? 'checked' : '' }} />
                        <label for="toggle2"></label>
                    </div>
                    <button type="submit" style="display: none;">Submit</button>
                </form>
                <form action="{{ route('update.cv', $item->id) }}" method="POST" class="form-switch">
                    @csrf
                    @method('POST')
                    <label for="toggle3">{{ __('messages.Curriculum Vitae') }}</label>
                    <div class="switch">
                        <input type="checkbox" id="toggle3" name="cv" value="{{$item->cv}}" {{ $item->cv == 1 ? 'checked' : '' }} />
                        <label for="toggle3"></label>
                    </div>
                    <button type="submit" style="display: none;">Submit</button>
                </form>
                <form action="{{ route('update.calendar', $item->id) }}" method="POST" class="form-switch">
                    @csrf
                    @method('POST')
                    <label for="toggle4">{{ __('messages.Calendar') }}</label>
                    <div class="switch">
                        <input type="checkbox" id="toggle4" name="calendar" value="{{$item->calendar}}" {{ $item->calendar == 1 ? 'checked' : '' }} />
                        <label for="toggle4"></label>
                    </div>
                    <button type="submit" style="display: none;">Submit</button>
                </form>
                <form action="{{ route('update.task', $item->id) }}" method="POST" class="form-switch">
                    @csrf
                    @method('POST')
                    <label for="toggle5">{{ __('messages.Tasks') }}</label>
                    <div class="switch">
                        <input type="checkbox" id="toggle5" name="task" value="{{$item->task}}" {{ $item->task == 1 ? 'checked' : '' }} />
                        <label for="toggle5"></label>
                    </div>
                    <button type="submit" style="display: none;">Submit</button>
                </form>
                <form action="{{ route('update.Workflow', $item->id) }}" method="POST" class="form-switch">
                    @csrf
                    @method('POST')
                    <label for="toggle6">{{ __('messages.Workflow') }}</label>
                    <div class="switch">
                        <input type="checkbox" id="toggle6" name="workflow" value="{{$item->workflow}}" {{ $item->workflow == 1 ? 'checked' : '' }} />
                        <label for="toggle6"></label>
                    </div>
                    <button type="submit" style="display: none;">Submit</button>
                </form>
                <form action="{{ route('update.salary', $item->id) }}" method="POST" class="form-switch">
                    @csrf
                    @method('POST')
                    <label for="toggle7">{{ __('messages.Salary') }}</label>
                    <div class="switch">
                        <input type="checkbox" id="toggle7" name="salary" value="{{$item->salary}}" {{ $item->salary == 1 ? 'checked' : '' }} />
                        <label for="toggle7"></label>
                    </div>
                    <button type="submit" style="display: none;">Submit</button>
                </form>
                <form action="{{ route('update.expense', $item->id) }}" method="POST" class="form-switch">
                    @csrf
                    @method('POST')
                    <label for="toggle8">{{ __('messages.Expenses') }}</label>
                    <div class="switch">
                        <input type="checkbox" id="toggle8" name="expense" value="{{$item->expense}}" {{ $item->expense == 1 ? 'checked' : '' }} />
                        <label for="toggle8"></label>
                    </div>
                    <button type="submit" style="display: none;">Submit</button>
                </form>

                <form action="{{ route('update.add_japanese', $item->id) }}" method="POST" class="form-switch">
                    @csrf
                    @method('POST')
                    <label for="toggle9">{{ __('messages.Add New') }}</label>
                    <div class="switch">
                        <input type="checkbox" id="toggle9" name="add_japanese" value="{{$item->add_japanese}}" {{ $item->add_japanese == 1 ? 'checked' : '' }} />
                        <label for="toggle9"></label>
                    </div>
                    <button type="submit" style="display: none;">Submit</button>
                </form>

                <form action="{{ route('update.japanese', $item->id) }}" method="POST" class="form-switch">
                    @csrf
                    @method('POST')
                    <label for="toggle10">{{ __('messages.Japanese') }}</label>
                    <div class="switch">
                        <input type="checkbox" id="toggle10" name="japanese" value="{{$item->japanese}}" {{ $item->japanese == 1 ? 'checked' : '' }} />
                        <label for="toggle10"></label>
                    </div>
                    <button type="submit" style="display: none;">Submit</button>
                </form>
                <form action="{{ route('update.learn_japanese', $item->id) }}" method="POST" class="form-switch">
                    @csrf
                    @method('POST')
                    <label for="toggle11">{{ __('messages.Learn vocabulary') }}</label>
                    <div class="switch">
                        <input type="checkbox" id="toggle11" name="learn_japanese" value="{{$item->learn_japanese}}" {{ $item->learn_japanese == 1 ? 'checked' : '' }} />
                        <label for="toggle11"></label>
                    </div>
                    <button type="submit" style="display: none;">Submit</button>
                </form>

                <form action="{{ route('update.add_english', $item->id) }}" method="POST" class="form-switch">
                    @csrf
                    @method('POST')
                    <label for="toggle12">{{ __('messages.Add New') }}</label>
                    <div class="switch">
                        <input type="checkbox" id="toggle12" name="add_english" value="{{$item->add_english}}" {{ $item->add_english == 1 ? 'checked' : '' }} />
                        <label for="toggle12"></label>
                    </div>
                    <button type="submit" style="display: none;">Submit</button>
                </form>

                <form action="{{ route('update.english', $item->id) }}" method="POST" class="form-switch">
                    @csrf
                    @method('POST')
                    <label for="toggle13">{{ __('messages.English') }}</label>
                    <div class="switch">
                        <input type="checkbox" id="toggle13" name="english" value="{{$item->english}}" {{ $item->english == 1 ? 'checked' : '' }} />
                        <label for="toggle13"></label>
                    </div>
                    <button type="submit" style="display: none;">Submit</button>
                </form>
                <form action="{{ route('update.learn_english', $item->id) }}" method="POST" class="form-switch">
                    @csrf
                    @method('POST')
                    <label for="toggle14">{{ __('messages.Learn vocabulary') }}</label>
                    <div class="switch">
                        <input type="checkbox" id="toggle14" name="learn_english" value="{{$item->learn_english}}" {{ $item->learn_english == 1 ? 'checked' : '' }} />
                        <label for="toggle14"></label>
                    </div>
                    <button type="submit" style="display: none;">Submit</button>
                </form>
                <form action="{{ route('update.question', $item->id) }}" method="POST" class="form-switch">
                    @csrf
                    @method('POST')
                    <label for="toggle15">{{ __('messages.Question') }}</label>
                    <div class="switch">
                        <input type="checkbox" id="toggle15" name="question" value="{{$item->question}}" {{ $item->question == 1 ? 'checked' : '' }} />
                        <label for="toggle15"></label>
                    </div>
                    <button type="submit" style="display: none;">Submit</button>
                </form>
                <form action="{{ route('update.word', $item->id) }}" method="POST" class="form-switch">
                    @csrf
                    @method('POST')
                    <label for="toggle16">{{ __('messages.Word') }}</label>
                    <div class="switch">
                        <input type="checkbox" id="toggle16" name="word" value="{{$item->word}}" {{ $item->word == 1 ? 'checked' : '' }} />
                        <label for="toggle16"></label>
                    </div>
                    <button type="submit" style="display: none;">Submit</button>
                </form>
                <form action="{{ route('update.excel', $item->id) }}" method="POST" class="form-switch">
                    @csrf
                    @method('POST')
                    <label for="toggle17">{{ __('messages.Excel') }}</label>
                    <div class="switch">
                        <input type="checkbox" id="toggle17" name="excel" value="{{$item->excel}}" {{ $item->excel == 1 ? 'checked' : '' }} />
                        <label for="toggle17"></label>
                    </div>
                    <button type="submit" style="display: none;">Submit</button>
                </form>
                <form action="{{ route('update.test_code', $item->id) }}" method="POST" class="form-switch">
                    @csrf
                    @method('POST')
                    <label for="toggle18">{{ __('messages.Test code') }}</label>
                    <div class="switch">
                        <input type="checkbox" id="toggle18" name="test_code" value="{{$item->test_code}}" {{ $item->test_code == 1 ? 'checked' : '' }} />
                        <label for="toggle18"></label>
                    </div>
                    <button type="submit" style="display: none;">Submit</button>
                </form>
                <form action="{{ route('update.component', $item->id) }}" method="POST" class="form-switch">
                    @csrf
                    @method('POST')
                    <label for="toggle19">{{ __('messages.Component') }}</label>
                    <div class="switch">
                        <input type="checkbox" id="toggle19" name="component" value="{{$item->component}}" {{ $item->component == 1 ? 'checked' : '' }} />
                        <label for="toggle19"></label>
                    </div>
                    <button type="submit" style="display: none;">Submit</button>
                </form>
                <form action="{{ route('update.color', $item->id) }}" method="POST" class="form-switch">
                    @csrf
                    @method('POST')
                    <label for="toggle20">{{ __('messages.Color') }}</label>
                    <div class="switch">
                        <input type="checkbox" id="toggle20" name="color" value="{{$item->color}}" {{ $item->color == 1 ? 'checked' : '' }} />
                        <label for="toggle20"></label>
                    </div>
                    <button type="submit" style="display: none;">Submit</button>
                </form>

                <form action="{{ route('update.html', $item->id) }}" method="POST" class="form-switch">
                    @csrf
                    @method('POST')
                    <label for="toggle21">{{ __('messages.HTML/CSS') }}</label>
                    <div class="switch">
                        <input type="checkbox" id="toggle21" name="html" value="{{$item->html}}" {{ $item->html == 1 ? 'checked' : '' }} />
                        <label for="toggle21"></label>
                    </div>
                    <button type="submit" style="display: none;">Submit</button>
                </form>
                <form action="{{ route('update.js', $item->id) }}" method="POST" class="form-switch">
                    @csrf
                    @method('POST')
                    <label for="toggle22">{{ __('messages.Javascript') }}</label>
                    <div class="switch">
                        <input type="checkbox" id="toggle22" name="js" value="{{$item->js}}" {{ $item->js == 1 ? 'checked' : '' }} />
                        <label for="toggle22"></label>
                    </div>
                    <button type="submit" style="display: none;">Submit</button>
                </form>
                <form action="{{ route('update.vue', $item->id) }}" method="POST" class="form-switch">
                    @csrf
                    @method('POST')
                    <label for="toggle23">{{ __('messages.VueJS') }}</label>
                    <div class="switch">
                        <input type="checkbox" id="toggle23" name="vue" value="{{$item->vue}}" {{ $item->vue == 1 ? 'checked' : '' }} />
                        <label for="toggle23"></label>
                    </div>
                    <button type="submit" style="display: none;">Submit</button>
                </form>

                <form action="{{ route('update.react', $item->id) }}" method="POST" class="form-switch">
                    @csrf
                    @method('POST')
                    <label for="toggle24">{{ __('messages.ReactJS') }}</label>
                    <div class="switch">
                        <input type="checkbox" id="toggle24" name="react" value="{{$item->react}}" {{ $item->react == 1 ? 'checked' : '' }} />
                        <label for="toggle24"></label>
                    </div>
                    <button type="submit" style="display: none;">Submit</button>
                </form>
                <form action="{{ route('update.jquery', $item->id) }}" method="POST" class="form-switch">
                    @csrf
                    @method('POST')
                    <label for="toggle25">{{ __('messages.JqueryJS') }}</label>
                    <div class="switch">
                        <input type="checkbox" id="toggle25" name="jquery" value="{{$item->jquery}}" {{ $item->jquery == 1 ? 'checked' : '' }} />
                        <label for="toggle25"></label>
                    </div>
                    <button type="submit" style="display: none;">Submit</button>
                </form>
                <form action="{{ route('update.angular', $item->id) }}" method="POST" class="form-switch">
                    @csrf
                    @method('POST')
                    <label for="toggle26">{{ __('messages.Angular') }}</label>
                    <div class="switch">
                        <input type="checkbox" id="toggle26" name="angular" value="{{$item->angular}}" {{ $item->angular == 1 ? 'checked' : '' }} />
                        <label for="toggle26"></label>
                    </div>
                    <button type="submit" style="display: none;">Submit</button>
                </form>

                <form action="{{ route('update.php', $item->id) }}" method="POST" class="form-switch">
                    @csrf
                    @method('POST')
                    <label for="toggle27">{{ __('messages.PHP') }}</label>
                    <div class="switch">
                        <input type="checkbox" id="toggle27" name="php" value="{{$item->php}}" {{ $item->php == 1 ? 'checked' : '' }} />
                        <label for="toggle27"></label>
                    </div>
                    <button type="submit" style="display: none;">Submit</button>
                </form>
                <form action="{{ route('update.laravel', $item->id) }}" method="POST" class="form-switch">
                    @csrf
                    @method('POST')
                    <label for="toggle28">{{ __('messages.Laravel') }}</label>
                    <div class="switch">
                        <input type="checkbox" id="toggle28" name="laravel" value="{{$item->laravel}}" {{ $item->laravel == 1 ? 'checked' : '' }} />
                        <label for="toggle28"></label>
                    </div>
                    <button type="submit" style="display: none;">Submit</button>
                </form>
                <form action="{{ route('update.node', $item->id) }}" method="POST" class="form-switch">
                    @csrf
                    @method('POST')
                    <label for="toggle29">{{ __('messages.NodeJS') }}</label>
                    <div class="switch">
                        <input type="checkbox" id="toggle29" name="node" value="{{$item->node}}" {{ $item->node == 1 ? 'checked' : '' }} />
                        <label for="toggle29"></label>
                    </div>
                    <button type="submit" style="display: none;">Submit</button>
                </form>

                <form action="{{ route('update.cshap', $item->id) }}" method="POST" class="form-switch">
                    @csrf
                    @method('POST')
                    <label for="toggle30">{{ __('messages.C#') }}</label>
                    <div class="switch">
                        <input type="checkbox" id="toggle30" name="cshap" value="{{$item->cshap}}" {{ $item->cshap == 1 ? 'checked' : '' }} />
                        <label for="toggle30"></label>
                    </div>
                    <button type="submit" style="display: none;">Submit</button>
                </form>
                <form action="{{ route('update.java', $item->id) }}" method="POST" class="form-switch">
                    @csrf
                    @method('POST')
                    <label for="toggle31">{{ __('messages.Java') }}</label>
                    <div class="switch">
                        <input type="checkbox" id="toggle31" name="java" value="{{$item->java}}" {{ $item->java == 1 ? 'checked' : '' }} />
                        <label for="toggle31"></label>
                    </div>
                    <button type="submit" style="display: none;">Submit</button>
                </form>
                <form action="{{ route('update.javascript', $item->id) }}" method="POST" class="form-switch">
                    @csrf
                    @method('POST')
                    <label for="toggle32">{{ __('messages.JqueryJS') }}</label>
                    <div class="switch">
                        <input type="checkbox" id="toggle32" name="javascript" value="{{$item->javascript}}" {{ $item->javascript == 1 ? 'checked' : '' }} />
                        <label for="toggle32"></label>
                    </div>
                    <button type="submit" style="display: none;">Submit</button>
                </form>

                <form action="{{ route('update.ftp', $item->id) }}" method="POST" class="form-switch">
                    @csrf
                    @method('POST')
                    <label for="toggle33">{{ __('messages.FTP') }}</label>
                    <div class="switch">
                        <input type="checkbox" id="toggle33" name="ftp" value="{{$item->ftp}}" {{ $item->ftp == 1 ? 'checked' : '' }} />
                        <label for="toggle33"></label>
                    </div>
                    <button type="submit" style="display: none;">Submit</button>
                </form>
                <form action="{{ route('update.ubuntu', $item->id) }}" method="POST" class="form-switch">
                    @csrf
                    @method('POST')
                    <label for="toggle34">{{ __('messages.UBUTU') }}</label>
                    <div class="switch">
                        <input type="checkbox" id="toggle34" name="ubuntu" value="{{$item->ubuntu}}" {{ $item->ubuntu == 1 ? 'checked' : '' }} />
                        <label for="toggle34"></label>
                    </div>
                    <button type="submit" style="display: none;">Submit</button>
                </form>
                <form action="{{ route('update.mysql', $item->id) }}" method="POST" class="form-switch">
                    @csrf
                    @method('POST')
                    <label for="toggle35">{{ __('messages.MySQL') }}</label>
                    <div class="switch">
                        <input type="checkbox" id="toggle35" name="mysql" value="{{$item->mysql}}" {{ $item->mysql == 1 ? 'checked' : '' }} />
                        <label for="toggle35"></label>
                    </div>
                    <button type="submit" style="display: none;">Submit</button>
                </form>
                <form action="{{ route('update.sqlsever', $item->id) }}" method="POST" class="form-switch">
                    @csrf
                    @method('POST')
                    <label for="toggle36">{{ __('messages.SQLServer') }}</label>
                    <div class="switch">
                        <input type="checkbox" id="toggle36" name="sqlsever" value="{{$item->sqlsever}}" {{ $item->sqlsever == 1 ? 'checked' : '' }} />
                        <label for="toggle36"></label>
                    </div>
                    <button type="submit" style="display: none;">Submit</button>
                </form>

                <form action="{{ route('update.mongo', $item->id) }}" method="POST" class="form-switch">
                    @csrf
                    @method('POST')
                    <label for="toggle37">{{ __('messages.Mongo') }}</label>
                    <div class="switch">
                        <input type="checkbox" id="toggle37" name="mongo" value="{{$item->mongo}}" {{ $item->mongo == 1 ? 'checked' : '' }} />
                        <label for="toggle37"></label>
                    </div>
                    <button type="submit" style="display: none;">Submit</button>
                </form>
                <form action="{{ route('update.mysqlworkbench', $item->id) }}" method="POST" class="form-switch">
                    @csrf
                    @method('POST')
                    <label for="toggle38">{{ __('messages.MySqlWorkBench') }}</label>
                    <div class="switch">
                        <input type="checkbox" id="toggle38" name="mysqlworkbench" value="{{$item->mysqlworkbench}}" {{ $item->mysqlworkbench == 1 ? 'checked' : '' }} />
                        <label for="toggle38"></label>
                    </div>
                    <button type="submit" style="display: none;">Submit</button>
                </form>
                <form action="{{ route('update.postgreSQL', $item->id) }}" method="POST" class="form-switch">
                    @csrf
                    @method('POST')
                    <label for="toggle39">{{ __('messages.postgreSQL') }}</label>
                    <div class="switch">
                        <input type="checkbox" id="toggle39" name="postgreSQL" value="{{$item->postgreSQL}}" {{ $item->postgreSQL == 1 ? 'checked' : '' }} />
                        <label for="toggle39"></label>
                    </div>
                    <button type="submit" style="display: none;">Submit</button>
                </form>
                <form action="{{ route('update.error', $item->id) }}" method="POST" class="form-switch">
                    @csrf
                    @method('POST')
                    <label for="toggle40">{{ __('messages.Error') }}</label>
                    <div class="switch">
                        <input type="checkbox" id="toggle40" name="error" value="{{$item->error}}" {{ $item->error == 1 ? 'checked' : '' }} />
                        <label for="toggle40"></label>
                    </div>
                    <button type="submit" style="display: none;">Submit</button>
                </form>
            </div>
            @endforeach
        </div>
    </div>
</div>

<script>
     document.querySelectorAll('.form-switch input[type="checkbox"]').forEach((checkbox) => {
        checkbox.addEventListener('change', function() {
            this.closest('form').submit();
        });
    });
</script>
@endsection