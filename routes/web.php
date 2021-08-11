<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserSettingsController;
use App\Http\Controllers\PublicFacing\HomeController;
use App\Http\Controllers\Quizzes\EvaluationController;
use App\Http\Controllers\Quizzes\FirstProgressionQuiz;
use App\Http\Controllers\Account\ParentAvatarController;
use App\Http\Controllers\Forums\ForumDashboardController;
use App\Http\Controllers\Account\ParentSettingsController;
use App\Http\Controllers\Switchs\SwitchKidsModeController;
use App\Http\Controllers\Consultation\ConsultationController;
use App\Http\Controllers\Switchs\SwitchParentsModeController;
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
    if (Auth::user() == null) {
       return Redirect::route('home');
    }

    return Redirect::route('dashboard');
});


Route::get('/dashboard', [DashboardController:: class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/home', [HomeController:: class, 'index'])->name('home');


// Switchers
Route::post('/switch/kids', [SwitchKidsModeController:: class, 'index'])->middleware(['auth', 'verified']);
Route::post('/switch/parents', [SwitchParentsModeController:: class, 'index'])->middleware(['auth', 'verified']);

// Settings 
Route::get('/settings', [UserSettingsController:: class, 'index'])->middleware(['auth', 'verified', 'role']);
Route::get('/profile', [ParentSettingsController:: class, 'index'])->middleware(['auth', 'verified', 'role'])->name('user_settings');
Route::post('/profile/avatar', [ParentAvatarController:: class, 'update'])->middleware(['auth', 'verified', 'role']);



// Forum
Route::get('/forum', [ForumDashboardController:: class, 'index'])->middleware(['auth', 'verified', 'role']);

// Quiz
Route::get('/quiz/parent/progressive', [FirstProgressionQuiz:: class, 'index'])->middleware(['auth', 'verified', 'role'])->name('parent_signup_quiz');
Route::post('/quiz/parent/progressive', [FirstProgressionQuiz:: class, 'create'])->middleware(['auth', 'verified', 'role'])->name('parent_signup_quiz');

Route::get('/evaluate', [EvaluationController:: class, 'index'])->middleware(['auth', 'verified', 'role']);

// Consultation
Route::get('/consultation', [ConsultationController:: class, 'index'])->middleware(['auth', 'verified', 'role']);





require __DIR__.'/auth.php';
