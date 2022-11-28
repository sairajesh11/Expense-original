<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;
use App\Http\Controllers\DashController;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\socialauthcontroller;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\GoogleAuthController;



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

Route::get('form/new', [App\Http\Controllers\FormController::class, 'show']);
Route::post('form/save', [App\Http\Controllers\FormController::class, 'saveRecord'])->name('form/save');
Route::get('dashboard/new', [App\Http\Controllers\DashController::class, 'index'])->name('dashboard/new');
Route::get('dashboard', [CustomAuthController::class, 'dashboard']); 
Route::get('login', [CustomAuthController::class, 'index'])->name('login');
Route::post('custom-login', [CustomAuthController::class, 'customLogin'])->name('login.custom'); 
Route::get('registration', [CustomAuthController::class, 'registration'])->name('register-user');
Route::post('custom-registration', [CustomAuthController::class, 'customRegistration'])->name('register.custom'); 
Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout');



Route::get('/form',function(){
    return redirect('form/new');
});

Route::get('/requesthistory',function(){
    return redirect('requesthistory');
});

// Route::middleware('auth:api')->group(function () {
//     Route::get('/details', 'UserController@details');
// });






Route::get('forget-password', [ForgotPasswordController::class, 'ForgetPassword'])->name('ForgetPasswordGet');
Route::post('forget-password', [ForgotPasswordController::class, 'ForgetPasswordStore'])->name('ForgetPasswordPost');
Route::get('reset-password/{token}', [ForgotPasswordController::class, 'ResetPassword'])->name('ResetPasswordGet');
Route::post('reset-password', [ForgotPasswordController::class, 'ResetPasswordStore'])->name('ResetPasswordPost');

// Route::get('/dashboard',function(){
//     return view('dashboard/new');
// })->middleware(['auth'])->name('dashboard/new');

Route::get('/auth/google', [GoogleAuthController::class, 'redirect'])->name('google-auth');
Route::get('/auth/google/call-back', [GoogleAuthController::class, 'callbackGoogle']);
