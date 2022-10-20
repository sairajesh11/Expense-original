<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;
use App\Http\Controllers\DashController;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\socialauthcontroller;
use Laravel\Socialite\Facades\Socialite;


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
    return redirect('dashboard/new');
});

// Route::get('form/new', [App\Http\Controllers\FormController::class, 'show']);
// Route::post('form/save', [App\Http\Controllers\FormController::class, 'saveRecord'])->name('form/save');
Route::get('dashboard/new', [App\Http\Controllers\DashController::class, 'index'])->name('dashboard/new');
Route::get('dashboard', [CustomAuthController::class, 'dashboard']); 
Route::get('login', [CustomAuthController::class, 'index'])->name('login');
Route::post('custom-login', [CustomAuthController::class, 'customLogin'])->name('login.custom'); 
Route::get('registration', [CustomAuthController::class, 'registration'])->name('register-user');
Route::post('custom-registration', [CustomAuthController::class, 'customRegistration'])->name('register.custom'); 
Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout');

Route::get('/auth/google/redirect', [socialauthcontroller::class, 'googleredirect'])->name('googleredirect');
Route::get('/auth/google/callback', [socialauthcontroller::class, 'googlecallaback'])->name('googlecallaback');

Route::get('/form',function(){
    return redirect('form/new');
});
Route::get('/dashboard',function(){
    return view('dashboard/new');
});
