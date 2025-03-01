<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryTasksController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\TodoController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\WorkflowController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\SalaryController;
use App\Http\Controllers\ExpenseController;
use App\Http\Controllers\IssueController;
use App\Http\Controllers\ProblemProcessController;
use App\Http\Controllers\CvController;
use App\Http\Controllers\SentController;
use App\Http\Controllers\ChatController;
use App\Http\Controllers\JapaneseController;
use App\Http\Controllers\EnglishController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\ComponentController;
use App\Http\Controllers\ColorController;
use App\Http\Controllers\TableController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LocalizationController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\AssignController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\VocabularyController;
use App\Http\Controllers\StructureController;
use App\Http\Controllers\QuizItemController;
use App\Http\Controllers\FoodController;
use App\Http\Controllers\ParagraphController;
use App\Http\Controllers\CodeController;
use App\Http\Controllers\JavascriptController;
use App\Http\Controllers\VuejsController;
use App\Http\Controllers\ReactjsController;
use App\Http\Controllers\PostCommentController;
use App\Http\Controllers\PostLikeController;
use App\Http\Controllers\LearnMoreController;
use App\Http\Controllers\LearnMoreEngLishController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FriendshipController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\InformationController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\FriendController;
use App\Http\Controllers\NoteController;
use Illuminate\Support\Facades\App;
use App\Http\Controllers\Home\HomeProjectController;
use App\Http\Controllers\News\NewsController;
use App\Http\Controllers\Home\HomeCalendarController;
use App\Http\Controllers\Home\HomeTeamController;
use App\Http\Controllers\Home\HomeDocumentController;
use App\Http\Controllers\Home\HomeInterfaceController;
use App\Http\Controllers\Home\HomeWikiController;
use App\Http\Controllers\Home\HomeBlogController;
use App\Http\Controllers\V1\V1DashboardController;
use App\Http\Controllers\V1\V1MessageController;
use App\Models\News;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::fallback(function () {
    return view('error'); 
});

Route::get('/', [HomeController::class, 'index'])->name('home.index');


Route::post('send-contact', [ContactController::class, 'sendContactForm'])->name('send.contact');


Route::get('lang/{locale}', [LocalizationController::class, 'index'])->name('lang');

Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');;
Route::post('/register', [AuthController::class, 'register'])->name('register');

Route::get('/vi/login', [AuthController::class, 'showLoginForm'])->middleware('check.registration');
Route::post('/vi/login', [AuthController::class, 'login'])->name('login');
Route::post('/en/login', [AuthController::class, 'login'])->name('login');
Route::post('/ja/login', [AuthController::class, 'login'])->name('login');

Route::post('/vi/logout', [AuthController::class, 'logout'])->name('logout');
Route::post('/en/logout', [AuthController::class, 'logout'])->name('logout');
Route::post('/ja/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/expenses/export-pdf', [ExpenseController::class, 'exportPdf'])->name('expenses.export.pdf');
Route::get('/learn-more/pdf', [LearnMoreController::class, 'exportPdf'])->name('learn_more.pdf');

Route::get('/profile/{full_name}', [HomeController::class, 'profile'])->name('profile.show');

//new_experience
Route::get('/new_experience/{id}', [HomeInterfaceController::class, 'view'])->name('new_experience.view');
Route::get('/new_experience', [HomeInterfaceController::class, 'index_home'])->name('new_experience.list');
Route::post('/new_experience/store_like/{id}', [HomeInterfaceController::class, 'store_like'])->name('store_like.new_experience');
Route::post('/new_experience/store_share/{id}', [HomeInterfaceController::class, 'store_share'])->name('store_share.new_experience');


//teams
Route::get('/teams', [HomeTeamController::class, 'index_home'])->name('teams.list');


//documents
Route::get('/documents', [HomeDocumentController::class, 'index_home'])->name('documents.list');
Route::get('/documents/{id}', [HomeDocumentController::class, 'view'])->name('documents.view');
Route::post('/documents/store_like/{id}', [HomeDocumentController::class, 'store_like'])->name('store_like.documents');
Route::post('/documents/store_share/{id}', [HomeDocumentController::class, 'store_share'])->name('store_share.documents');


//wiki
Route::get('/wikis', [HomeWikiController::class, 'index_home'])->name('wikis.list');
Route::get('/wikis/{id}', [HomeWikiController::class, 'view'])->name('wikis.view');
Route::post('/wikis/store_like/{id}', [HomeWikiController::class, 'store_like'])->name('store_like.wikis');
Route::post('/wikis/store_share/{id}', [HomeWikiController::class, 'store_share'])->name('store_share.wikis');


//blog
Route::get('/blogs', [HomeBlogController::class, 'index_home'])->name('blogs.list');
Route::get('/blogs/{id}', [HomeBlogController::class, 'view'])->name('blogs.view');
Route::post('/blogs/store_like/{id}', [HomeBlogController::class, 'store_like'])->name('store_like.blogs');
Route::post('/blogs/store_share/{id}', [HomeBlogController::class, 'store_share'])->name('store_share.blogs');


Route::group(['prefix' => 'v1', 'middleware' => ['auth', 'role.check'],], function () {
    Route::resource('/calendar', HomeCalendarController::class);
    Route::get('/blog', [NewsController::class, 'index_home'])->name('index_home.news');
    Route::get('/blog/{id}', [NewsController::class, 'show_home'])->name('show_home.news');
    Route::resource('/home', V1DashboardController::class);
    Route::resource('/messages', V1MessageController::class);
    
});

Route::group(['middleware' => ['auth', 'role.check']], function() {
    Route::post('/change-password/{id}', [AuthController::class, 'changePassword'])->name('change.password');
    Route::post('/link/store', [ChatController::class, 'storeLink'])->name('link.store');
    
    Route::resource('/v2/news', NewsController::class);
    Route::get('show/news/{id}', [NewsController::class, 'show'])->name('news.show');
    Route::get('show/project/{id}', [HomeProjectController::class, 'show']);
    Route::resource('/v2/project', HomeProjectController::class);
    Route::resource('/v1/calendar', HomeCalendarController::class);


    Route::resource('/v2/teams', HomeTeamController::class);

    Route::resource('/v2/documents', HomeDocumentController::class);

    Route::resource('/v2/interfaces', HomeInterfaceController::class);
    Route::get('/interfaces/show/{id}', [HomeInterfaceController::class, 'show'])->name('interfaces.show');
    Route::put('/interfaces/{id}', [HomeInterfaceController::class, 'update'])->name('interfaces.update');


    Route::resource('/v2/wikis', HomeWikiController::class);

    Route::resource('/v2/blogs', HomeBlogController::class);


    Route::post('/forgot-password', [AuthController::class, 'sendResetLink'])->name('forgot.password');

    Route::get('information', [InformationController::class, 'index'])->name('information.index');
    Route::resource('projects', ProjectController::class);
    Route::get('profile', [ProfileController::class, 'index'])->name('profile.index');
    Route::resource('posts', PostController::class);
    Route::get('friend', [FriendController::class, 'index'])->name('friend.index');
    Route::get('changePassword', [AuthController::class, 'changePasswordView'])->name('changePassword.index');
    Route::resource('salaries', SalaryController::class);
    Route::resource('expense', ExpenseController::class);
    Route::resource('note', NoteController::class);

    Route::delete('/v1/system/link/{id}', [NoteController::class, 'destroy'])->name('link.destroy');
    Route::delete('/v1/system/notes/{id}', [NoteController::class, 'destroyA'])->name('note.destroyA');
    Route::post('/v1/system/upload-image/{id}', [InformationController::class, 'uploadImage'])->name('uploadImage.public');


    Route::get('/v1/system/chart-component', [ComponentController::class, 'index_chart_component'])->name('chartComponent.index');

    Route::get('/message', [MessageController::class, 'index'])->name('message.index');
    Route::get('/user/{itemId}', [SettingController::class, 'index'])->name('settings.index');
    Route::post('/update-setting/{id}', [SettingController::class, 'updateSetting'])->name('update.setting');
    Route::post('/update-issue/{id}', [SettingController::class, 'updateissue'])->name('update.issue');
    Route::post('/update-posts/{id}', [SettingController::class, 'updateposts'])->name('update.posts');
    Route::post('/update-chat/{id}', [SettingController::class, 'updatechat'])->name('update.chat');
    Route::post('/update-task/{id}', [SettingController::class, 'updatetask'])->name('update.task');
    Route::post('/update-Workflow/{id}', [SettingController::class, 'updateWorkflow'])->name('update.Workflow');
    Route::post('/update-salary/{id}', [SettingController::class, 'update_salary'])->name('update.salary');
    Route::post('/update-expense/{id}', [SettingController::class, 'update_expense'])->name('update.expense');
    Route::post('/update-add_japanese/{id}', [SettingController::class, 'update_add_japanese'])->name('update.add_japanese');
    Route::post('/update-japanese/{id}', [SettingController::class, 'update_japanese'])->name('update.japanese');
    Route::post('/update-learn_japanese/{id}', [SettingController::class, 'update_learn_japanese'])->name('update.learn_japanese');
    Route::post('/update-add_english/{id}', [SettingController::class, 'update_add_english'])->name('update.add_english');
    Route::post('/update-english/{id}', [SettingController::class, 'update_english'])->name('update.english');
    Route::post('/update-learn_english/{id}', [SettingController::class, 'update_learn_english'])->name('update.learn_english');
    Route::post('/update-question/{id}', [SettingController::class, 'update_question'])->name('update.question');
    Route::post('/update-word/{id}', [SettingController::class, 'update_word'])->name('update.word');
    Route::post('/update-excel/{id}', [SettingController::class, 'update_excel'])->name('update.excel');
    Route::post('/update-test_code/{id}', [SettingController::class, 'update_test_code'])->name('update.test_code');
    Route::post('/update-component/{id}', [SettingController::class, 'update_component'])->name('update.component');
    Route::post('/update-color/{id}', [SettingController::class, 'update_color'])->name('update.color');
    Route::post('/update-html/{id}', [SettingController::class, 'update_html'])->name('update.html');
    Route::post('/update-js/{id}', [SettingController::class, 'update_js'])->name('update.js');
    Route::post('/update-vue/{id}', [SettingController::class, 'update_vue'])->name('update.vue');
    Route::post('/update-react/{id}', [SettingController::class, 'update_react'])->name('update.react');
    Route::post('/update-jquery/{id}', [SettingController::class, 'update_jquery'])->name('update.jquery');
    Route::post('/update-angular/{id}', [SettingController::class, 'update_angular'])->name('update.angular');
    Route::post('/update-php/{id}', [SettingController::class, 'update_php'])->name('update.php');
    Route::post('/update-laravel/{id}', [SettingController::class, 'update_laravel'])->name('update.laravel');
    Route::post('/update-node/{id}', [SettingController::class, 'update_node'])->name('update.node');
    Route::post('/update-cshap/{id}', [SettingController::class, 'update_cshap'])->name('update.cshap');
    Route::post('/update-java/{id}', [SettingController::class, 'update_java'])->name('update.java');
    Route::post('/update-javascript/{id}', [SettingController::class, 'update_javascript'])->name('update.javascript');
    Route::post('/update-ftp/{id}', [SettingController::class, 'update_ftp'])->name('update.ftp');
    Route::post('/update-ubuntu/{id}', [SettingController::class, 'update_ubuntu'])->name('update.ubuntu');
    Route::post('/update-mysql/{id}', [SettingController::class, 'update_mysql'])->name('update.mysql');
    Route::post('/update-sqlsever/{id}', [SettingController::class, 'update_sqlsever'])->name('update.sqlsever');

    Route::post('/update-mongo/{id}', [SettingController::class, 'update_mongo'])->name('update.mongo');
    Route::post('/update-mysqlworkbench/{id}', [SettingController::class, 'update_mysqlworkbench'])->name('update.mysqlworkbench');
    Route::post('/update-postgreSQL/{id}', [SettingController::class, 'update_postgreSQL'])->name('update.postgreSQL');
    Route::post('/update-error/{id}', [SettingController::class, 'update_error'])->name('update.error');


    Route::get('/user', [UserController::class, 'index'])->name('user.index');

    Route::post('/comment_issue', [IssueController::class, 'storeComment'])->name('commentIssue.store');
    Route::get('/comment_issue/{issueId}', [IssueController::class, 'getComments'])->name('commentIssue.get');
    
    Route::post('/user/update-roles/{id}', [UserController::class, 'updateRoles'])->name('user.updateRoles');

    Route::post('/note/store', [ChatController::class, 'storeNote'])->name('note.store');
    Route::resource('dashboard', DashboardController::class);
    Route::get('/monthly-costs', [DashboardController::class, 'getMonthlyCosts']);
    Route::post('/idea', [DashboardController::class, 'createIdea'])->name('idea.store');
    Route::resource('category', CategoryController::class);
    Route::resource('category_task', CategoryTasksController::class);
    Route::post('/post/{id}/comments', [PostCommentController::class, 'store'])->name('postcomments.store');
    Route::get('/comments/{postId}', [PostCommentController::class, 'getComments'])->name('comments.get');
    Route::post('/send-friend-request', [FriendshipController::class, 'sendRequest'])->name('friend.send');
    Route::post('/accept-friend-request/{friendship}', [FriendshipController::class, 'acceptRequest'])->name('friend.accept');
    Route::post('/reject-friend-request/{friendship}', [FriendshipController::class, 'rejectRequest'])->name('friend.reject');
    Route::post('/post/{id}/likes', [PostLikeController::class, 'store'])->name('postlikes.store');
    Route::resource('todo', TodoController::class);
    Route::resource('tasks', TaskController::class);
    Route::resource('workflows', WorkflowController::class);
    Route::patch('/update-status/{id}', [WorkflowController::class, 'updateStatus']);
    Route::resource('expense', ExpenseController::class);
    Route::resource('food', FoodController::class);
    Route::resource('vocabularies', VocabularyController::class);
    Route::resource('learn_more', LearnMoreController::class);
    Route::get('/learn_more_test', [LearnMoreController::class, 'addTest'])->name('learn_more_test.index');
    Route::get('/learn_more_test/test/{status}', [LearnMoreController::class, 'addTest'])->name('learn_more_test.test');
    Route::resource('learn_more_english', LearnMoreEngLishController::class);
    Route::resource('structures', StructureController::class);
    Route::resource('quiz', QuizItemController::class);
    Route::resource('paragraph', ParagraphController::class);
    Route::post('/quiz/submit', [JapaneseController::class, 'submitQuiz'])->name('quiz.submit');
    Route::post('/send-email', [MailController::class, 'sendMail'])->name('send.email');
    Route::get('/events', [EventController::class, 'getEvents']);
    Route::get('/calendars', [EventController::class, 'index']);
    Route::post('/event', [EventController::class, 'store'])->name('event.store');
    Route::put('/event/{id}', [EventController::class, 'update']);
    Route::delete('/event/{id}', [EventController::class, 'destroy']);
    Route::post('/issue/{id}/comments', [CommentController::class, 'store'])->name('comments.store');
    Route::get('/issue/{id}/assign', [AssignController::class, 'show'])->name('assign.show');
    Route::post('/issue/{id}/assign', [AssignController::class, 'assign'])->name('assign.index_add');
    Route::resource('comment', CommentController::class);
    Route::resource('issue', IssueController::class);
    Route::resource('problem_process', ProblemProcessController::class);
    Route::resource('cv', CvController::class);
    Route::resource('sent', SentController::class);
    Route::resource('chat', ChatController::class);
    Route::get('/info', [ChatController::class, 'indexInfo'])->name('info.index');
    Route::post('/store_language', [ChatController::class, 'storeProfileLanguage'])->name('languageProfile.store');;
    Route::put('/profile/{id}', [ChatController::class, 'updateProfile'])->name('profile.update');
    Route::post('/updateLanguage/{id}', [ChatController::class, 'updateLanguageProfile'])->name('languageProfile.update');
    Route::post('/store_skills', [ChatController::class, 'storeProfessionalSkills'])->name('SkillProfile.store');
    Route::post('/updateSkill/{id}', [ChatController::class, 'updateSkillProfile'])->name('SkillProfile.update');
    Route::post('/store_educations', [ChatController::class, 'storeProfileEducation'])->name('educationProfile.store');
    Route::post('/updateEducations/{id}', [ChatController::class, 'updateEducationProfile'])->name('educationProfile.update');
    Route::post('/messages', [ChatController::class, 'sendMessage'])->name('messages.send');
    Route::get('/messages/{userId}/{friendId}', [ChatController::class, 'fetchMessages'])->name('messages.fetch');
    Route::get('/friend/{id}', [FriendshipController::class, 'show'])->name('friend.show');

    Route::post('/store_futures', [ChatController::class, 'storeFutureDirection'])->name('FutureDirection.store');
    Route::post('/updateFutures/{id}', [ChatController::class, 'updateFutureDirection'])->name('FutureDirection.update');

    Route::post('/store_projects', [ChatController::class, 'storeProfileProject'])->name('ProfileProject.store');
    Route::post('/updateProjects/{id}', [ChatController::class, 'updateProfileProject'])->name('ProfileProject.update');

    Route::post('/store_experiences', [ChatController::class, 'storeProfileExperience'])->name('ProfileExperience.store');
    Route::post('/updateExperiences/{id}', [ChatController::class, 'updateProfileExperience'])->name('ProfileExperience.update');

    Route::post('/store_hobbies', [ChatController::class, 'storeProfileHobbies'])->name('ProfileHobbies.store');
    Route::post('/updateHobbies/{id}', [ChatController::class, 'updateProfileHobbies'])->name('ProfileHobbies.update');

    Route::post('/store_objectives', [ChatController::class, 'storeProfileObjective'])->name('ProfileObjective.store');
    Route::post('/updateObjectives/{id}', [ChatController::class, 'updateProfileObjective'])->name('ProfileObjective.update');

    Route::resource('japanese', JapaneseController::class);
    Route::get('add_japanese', [JapaneseController::class, 'addJapanese'])->name('japanese.addJapanese');
    Route::resource('japanese', JapaneseController::class);
    Route::get('add_english', [EnglishController::class, 'addEnglish'])->name('english.addEnglish');
    Route::resource('english', EnglishController::class);
    Route::resource('question', QuestionController::class);
    Route::resource('component', ComponentController::class);
    Route::get('/test_code', [ComponentController::class, 'testCode'])->name('test_code.index');
    Route::resource('colors', ColorController::class);
    Route::resource('table', TableController::class);
    Route::resource('codes', CodeController::class);
    Route::resource('javascripts', JavascriptController::class);
    Route::resource('vuejs', VuejsController::class);
    Route::resource('reactjs', ReactjsController::class);
});
