<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function registerMembership() {
        return view('users/reg-member', [
            "title" => "Register Membership"
        ]);
    }

    public function loginMembership() {
        return view('users/login-member', [
            "title" => "Login Membership"
        ]);
    }

    public function registerPublisher() {
        return view('users/reg-publish', [
            "title" => "Register Publisher"
        ]);
    }
    
    public function loginPublisher() {
        return view('users/login-publisher', [
            "title" => "Login Publisher"
        ]);
    }

    public function loginAdministrator() {
        return view('users/login-admin', [
            "title" => "Login Admin"
        ]);
    }
}
