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


Route::get('/', function () {
    return view('layout');
});

Route::fallback(function () {
    return view('error'); 
});
Route::get('lang/{locale}', [LocalizationController::class, 'index'])->name('lang');

Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');;
Route::post('/register', [AuthController::class, 'register'])->name('register');

Route::get('/login', [AuthController::class, 'showLoginForm'])->middleware('check.registration');
Route::post('/login', [AuthController::class, 'login'])->name('login');

Route::get('/expenses/export-pdf', [ExpenseController::class, 'exportPdf'])->name('expenses.export.pdf');
Route::get('/learn-more/pdf', [LearnMoreController::class, 'exportPdf'])->name('learn_more.pdf');

Route::group(['middleware' => 'auth'], function() {
    Route::resource('dashboard', DashboardController::class);
    Route::resource('category', CategoryController::class);
    Route::resource('category_task', CategoryTasksController::class);
    Route::resource('posts', PostController::class);
    Route::post('/post/{id}/comments', [PostCommentController::class, 'store'])->name('postcomments.store');
    Route::post('/post/{id}/likes', [PostLikeController::class, 'store'])->name('postlikes.store');
    Route::resource('todo', TodoController::class);
    Route::resource('tasks', TaskController::class);
    Route::resource('workflows', WorkflowController::class);
    Route::patch('/update-status/{id}', [WorkflowController::class, 'updateStatus']);
    Route::resource('salaries', SalaryController::class);
    Route::resource('expense', ExpenseController::class);
    Route::resource('food', FoodController::class);
    Route::resource('vocabularies', VocabularyController::class);
    Route::resource('learn_more', LearnMoreController::class);
    Route::get('/learn_more_test', [LearnMoreController::class, 'addTest'])->name('learn_more_test.index');
    Route::get('/learn_more_test/test/{status}', [LearnMoreController::class, 'addTest'])->name('learn_more_test.test');
    Route::resource('learn_more_english', LearnMoreEngLishController::class);
    Route::resource('structures', StructureController::class);
    Route::resource('quiz', QuizItemController::class);
    Route::post('/paragraph/store', [ParagraphController::class, 'store'])->name('paragraph.store');
    Route::post('/quiz/submit', [JapaneseController::class, 'submitQuiz'])->name('quiz.submit');
    Route::post('/send-email', [MailController::class, 'sendMail'])->name('send.email');
    Route::get('/events', [EventController::class, 'getEvents']);
    Route::get('/calendar', [EventController::class, 'index'])->name('calendar.index');
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
