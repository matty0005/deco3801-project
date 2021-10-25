<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TextToSpeechController;
use App\Http\Controllers\UserSettingsController;
use App\Http\Controllers\Account\BillingController;
use App\Http\Controllers\Forums\ForumTopicController;
use App\Http\Controllers\PublicFacing\HomeController;
use App\Http\Controllers\Forums\ForumThreadController;
use App\Http\Controllers\Quizzes\EvaluationController;
use App\Http\Controllers\Quizzes\FirstProgressionQuiz;
use App\Http\Controllers\Resources\ResourceController;
use App\Http\Controllers\Account\ManageChildController;
use App\Http\Controllers\Forums\ForumApproveController;
use App\Http\Controllers\Kids\KidsActivitiesController;
use App\Http\Controllers\Switchs\CreateChildController;
use App\Http\Controllers\Account\ParentAvatarController;
use App\Http\Controllers\Kids\KidsDrawingPageController;
use App\Http\Controllers\Account\NotificationsController;
use App\Http\Controllers\Forums\ForumDashboardController;
use App\Http\Controllers\Account\ChangePasswordController;
use App\Http\Controllers\Account\ParentSettingsController;
use App\Http\Controllers\Quizzes\EvaluateParentController;
use App\Http\Controllers\Switchs\SwitchKidsModeController;
use App\Http\Controllers\Kids\KidsProfileSettingsController;
use App\Http\Controllers\PublicFacing\AttributionController;
use App\Http\Controllers\Consultation\ConsultationController;
use App\Http\Controllers\Switchs\SwitchParentsModeController;
use App\Http\Controllers\Resources\ResourceDashboardController;
use App\Http\Controllers\Consultation\BookConsultationController;
use App\Http\Controllers\Consultation\DoctorsConsultationController;
use App\Http\Controllers\Consultation\IndividualConsultationController;

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
Route::get('/attributions', [AttributionController:: class, 'index'])->name('attributions');


// Switchers
Route::post('/switch/kids', [SwitchKidsModeController:: class, 'index'])->middleware(['auth', 'verified']);
Route::post('/switch/parents', [SwitchParentsModeController:: class, 'index'])->middleware(['auth', 'verified']);

Route::get('/create/kid', [CreateChildController:: class, 'index'])->middleware(['auth', 'verified', 'role'])->name('create_kid_account');
Route::post('/create/kid', [CreateChildController:: class, 'create'])->middleware(['auth', 'verified',  'role'])->name('create_kid_account');



// Settings 
Route::get('/settings', [UserSettingsController:: class, 'index'])->middleware(['auth', 'verified', 'role']);
Route::get('/account', [ParentSettingsController:: class, 'index'])->middleware(['auth', 'verified', 'role'])->name('user_settings');
Route::get('/account/change-password', [ChangePasswordController:: class, 'index'])->middleware(['auth', 'verified', 'role']);
Route::get('/account/billing', [BillingController:: class, 'index'])->middleware(['auth', 'verified', 'role'])->name('user_billing');
Route::get('/account/notifications', [NotificationsController:: class, 'index'])->middleware(['auth', 'verified', 'role'])->name('user_notifications');
Route::get('/account/manage/child', [ManageChildController:: class, 'index'])->middleware(['auth', 'verified', 'role']);

Route::post('/account/billing', [BillingController:: class, 'store'])->middleware(['auth', 'verified', 'role']);
Route::post('/account/notifications', [NotificationsController:: class, 'update'])->middleware(['auth', 'verified', 'role']);
Route::post('/account/manage/child', [ManageChildController:: class, 'update'])->middleware(['auth', 'verified', 'role'])->name('parent_kids_edit');



Route::post('/account', [ParentSettingsController:: class, 'update'])->middleware(['auth', 'verified', 'role']);
Route::post('/account/avatar', [ParentAvatarController:: class, 'update'])->middleware(['auth', 'verified']);
Route::post('/account/change-password', [ChangePasswordController:: class, 'update'])->middleware(['auth', 'verified', 'role']);



// Forum
Route::get('/forum/approve', [ForumApproveController:: class, 'index'])->middleware(['auth', 'verified', 'role'])->name('forum_approve');
Route::post('/forum/approve', [ForumApproveController:: class, 'store'])->middleware(['auth', 'verified', 'role']);
Route::get('/forum', [ForumDashboardController:: class, 'index'])->middleware(['auth', 'verified', 'role'])->name('forum_home');
Route::get('/forum/topic/{topic_title}', [ForumTopicController:: class, 'index'])->middleware(['auth', 'verified', 'role'])->name('forum_topic');
Route::get('/forum/topic/{topic_title}/{thread_id}', [ForumThreadController::class, 'index'])->middleware(['auth', 'verified', 'role'])->name('forum_thread');

Route::post('/forum/newthread', [ForumDashboardController::class, 'newThread']);
Route::get('/forum/getthreads', [ForumDashboardController::class, 'getThreads']);
Route::post('/forum/addthreadmessage', [ForumDashboardController::class, 'addThreadMessage']);
Route::get('/forum/gettopics', [ForumDashboardController::class, 'getTopics']);
Route::post('/forum/likethread', [ForumDashboardController::class, 'likeThread']);
Route::post('/forum/likethreadmessage', [ForumDashboardController::class, 'likeThreadMessage']);

// Quiz
Route::get('/quiz/parent/progressive', [FirstProgressionQuiz:: class, 'index'])->middleware(['auth', 'verified', 'role'])->name('parent_signup_quiz');
Route::post('/quiz/parent/progressive', [FirstProgressionQuiz:: class, 'create'])->middleware(['auth', 'verified', 'role'])->name('parent_signup_quiz');

Route::get('/evaluate', [EvaluationController:: class, 'index'])->middleware(['auth', 'verified', 'role'])->name('evaluate');
Route::get('/evaluate/parent/{id}', [EvaluateParentController:: class, 'index'])->middleware(['auth', 'verified', 'role'])->name('evaluate/parent');
Route::post('/evaluate/parent/{id}', [EvaluateParentController:: class, 'store'])->middleware(['auth', 'verified', 'role']);


// Consultation
Route::get('/consultation', [ConsultationController:: class, 'index'])->middleware(['auth', 'verified', 'role'])->name('consult_home');
Route::get('/consultation/book', [DoctorsConsultationController:: class, 'index'])->middleware(['auth', 'verified', 'role']);
Route::get('/consultation/book/{doctor_id}', [BookConsultationController:: class, 'index'])->middleware(['auth', 'verified', 'role'])->name('book_doctor');
Route::get('/consultation/{consultation_id}', [IndividualConsultationController:: class, 'index'])->middleware(['auth', 'verified', 'role'])->name('individual_consultation');
Route::post('/consultation/create', [BookConsultationController::class, 'addConsultation']);
Route::post('/consultation/delete', [IndividualConsultationController::class, 'deleteConsultation']);


// Resources
Route::get('/resources', [ResourceDashboardController:: class, 'index'])->middleware(['auth', 'verified', 'role']);
Route::get('/resources/{resource_id}', [ResourceController:: class, 'index'])->middleware(['auth', 'verified', 'role']);
Route::post('/resources/like', [ResourceController:: class, 'likeResource'])->middleware(['auth', 'verified', 'role']);


// Kids 
Route::get('/kids/draw', [KidsDrawingPageController:: class, 'index'])->middleware(['auth', 'verified'])->name('kids_drawing');

Route::get('/kids/profile', [KidsProfileSettingsController:: class, 'index'])->middleware(['auth', 'verified'])->name('kids_settings');
Route::get('/kids/activities', [KidsActivitiesController:: class, 'index'])->middleware(['auth', 'verified']);

Route::post('/kids/draw', [KidsDrawingPageController:: class, 'store'])->middleware(['auth', 'verified']);
Route::post('/kids/draw/redraw', [KidsDrawingPageController:: class, 'update'])->middleware(['auth', 'verified']);
Route::post('/kids/activities/count', [KidsActivitiesController:: class, 'add'])->middleware(['auth', 'verified']);


//Route::post('/kids/profile', [KidsProfileSettingsController:: class, 'update'])->middleware(['auth', 'verified']);

Route::post('/kids/audio', [KidsProfileSettingsController:: class, 'update'])->middleware(['auth', 'verified']);
Route::post('/text/to/speech', [TextToSpeechController:: class, 'index'])->middleware(['auth', 'verified']);
Route::post('/kids/mascot', [KidsProfileSettingsController:: class, 'update'])->middleware(['auth', 'verified']);
require __DIR__.'/auth.php';
