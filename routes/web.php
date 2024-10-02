<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryTasksController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\TodoController;
use App\Http\Controllers\WorkflowController;
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
    return view('app');
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

Route::group(['middleware' => 'auth'], function() {
    Route::resource('dashboard', DashboardController::class);
    Route::resource('category', CategoryController::class);
    Route::resource('category_task', CategoryTasksController::class);
    Route::resource('todo', TodoController::class);
    Route::resource('work_flow', WorkflowController::class);
    Route::resource('salary', SalaryController::class);
    Route::resource('expense', ExpenseController::class);
    Route::get('/calendar', [EventController::class, 'index']);
    Route::post('/events', [EventController::class, 'store']);
    Route::put('/events/{id}', [EventController::class, 'update']);
    Route::delete('/events/{id}', [EventController::class, 'destroy']);
    Route::post('/comment', [CommentController::class, 'store']);
    Route::resource('issue', IssueController::class);
    Route::resource('problem_process', ProblemProcessController::class);
    Route::resource('cv', CvController::class);
    Route::resource('sent', SentController::class);
    Route::resource('chat', ChatController::class);
    Route::resource('japanese', JapaneseController::class);
    Route::resource('english', EnglishController::class);
    Route::resource('question', QuestionController::class);
    Route::resource('component', ComponentController::class);
    Route::resource('color', ColorController::class);
    Route::resource('table', TableController::class);
});
