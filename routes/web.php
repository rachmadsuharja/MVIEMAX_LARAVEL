<?php

use App\Models\Film;
use App\Models\Role;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FilmController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
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

/*INDEX PAGE*/
Route::get('/', function() {
    return view('index', [
        "title" => "Halaman Utama"
    ]);
});

/*
LOGIN, REGISTER, & FORGOT PASSWORD
================
- Login Admin
- Register Member
- Login Member
- Register Publisher
- Login Publisher
*/
Route::get('/admin-login', [UserController::class, 'loginAdministrator']);
Route::get('/membership-register', [UserController::class, 'registerMembership']);
Route::get('/membership-login', [UserController::class, 'loginMembership']);
Route::get('/publisher-register', [UserController::class, 'registerPublisher']);
Route::get('/publisher-login', [UserController::class, 'loginPublisher']);

/*
DASHBOARD PAGE
==============
Admin, Publisher, & Membership
*/
Route::get('/administrator', function() {
    return view('/admin/dashboard', [
        "title" => "Administrator"
    ]);
});
Route::get('/publisher', function() {
    return view('/publisher/dashboard', [
        "title" => "Publisher"
    ]);
});
Route::get('/membership', function() {
    return view('/membership/dashboard', [
        "title" => "Membership"
    ]);
});

/*
TABLE
=====
- Movie Table [admin, publisher, & member]
- Role Table
- Membership & Publisher Table
- Feedback Table
*/
Route::get('/admin/all-movies', function() {
    $films = Film::select('*')->get();
    return view('/admin/movies', [
        "title" => "Movies",
        "films" => $films
    ]);
});
Route::get('/publisher/film-settings', [FilmController::class, 'index'])->name('films');
Route::get('/membership/all-movies', function() {
    $films = Film::select('*')->get();
    return view('/membership/all-movies', [
        "title" => "All Movies",
        "films" => $films
    ]);
});
Route::get('/admin/roles', function() {
    $roles = Role::select('*')->get();
    return view('/admin/roles', [
        "title" => "Role Settings",
        "roles" => $roles
    ]);
});
Route::get('/admin/publishers', function() {
    return view('/admin/publishers', [
        "title" => "Publisher Settings"
    ]);
});
Route::get('/admin/memberships', function() {
    return view('/admin/members', [
        "title" => "Membership Settings"
    ]);
});
Route::get('/admin/feedback', function() {
    return view('/admin/feedback', [
        "title" => "Feedback Settings"
    ]);
});

/*
CRUD FORM
=========
- Movies CRUD
- Role CRUD
- Publisher & Membership CRUD
- Feedback
*/
//Movies
Route::get('/publisher/film-settings/add-movies', [FilmController::class, 'create']);
Route::get('/publisher/film-settings/store', [FilmController::class, 'store']);
Route::get('/publisher/film-settings/update-movies', [FilmController::class, 'update']);
//Role
Route::get('/admin/roles/add-role', [RoleController::class, 'create']);
Route::get('/admin/roles/store', [RoleController::class, 'store']);
Route::get('/admin/roles/update-role', [RoleController::class, 'update']);
//Publisher
Route::get('/admin/publishers/update-publisher', function() {
    return view('/admin/publisher/update', [
        "title" => "User Feedback"
    ]);
});
//Membership

//Feedback
Route::get('/user-feedback', function() {
    return view('feedback', [
        "title" => "User Feedback"
    ]);
});
Route::get('/admin/feedback', function() {
    return view('/admin/feedback', [
        "title" => "Feedback Settings"
    ]);
});
Route::get('/admin/feedback/update-feedback', function() {
    return view('/admin/feedback/update', [
        "title" => "Update Feedback"
    ]);
});

Route::get('/about-laravel', function () {
    return view('welcome');
});
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
