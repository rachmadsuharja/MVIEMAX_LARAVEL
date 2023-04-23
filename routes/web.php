<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/', function() {
    return view('index', [
        "title" => "Halaman Utama"
    ]);
});
Route::get('/member-register', function() {
    return view('users/reg-member', [
        "title" => "Register Membership"
    ]);
});
Route::get('/publisher-register', function() {
    return view('users/reg-publish', [
        "title" => "Register Publisher"
    ]);
});
Route::get('/login-admin', function() {
    return view('users/login-admin', [
        "title" => "Login Admin"
    ]);
});
Route::get('/user-feedback', function() {
    return view('feedback', [
        "title" => "User Feedback"
    ]);
});
Route::get('/about-laravel', function () {
    return view('welcome');
});

//Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
