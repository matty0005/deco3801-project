<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PublicFacing\HomeController;
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

require __DIR__.'/auth.php';
