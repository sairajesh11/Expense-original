<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;
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
    return redirect('form/new');
});

Route::get('form/new', [App\Http\Controllers\FormController::class, 'index'])->name('form/new');
Route::post('form/save', [App\Http\Controllers\FormController::class, 'saveRecord'])->name('form/save');
Route::get('dashboard', [App\Http\Controllers\DashController::class, 'index'])->name('dashboard');
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
Route::get('/expenses',function(){
    return view('expenses');
});
