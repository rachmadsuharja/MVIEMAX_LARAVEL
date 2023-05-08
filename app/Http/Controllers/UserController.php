<?php

namespace App\Http\Controllers;

use Session;
use App\Models\Role;
use App\Models\User;
use App\Models\Admin;
use App\Models\Publisher;
use App\Models\Membership;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function registerMembership() {
        $roles = Role::all();
        return view('users/reg-member', [
            "title" => "Register Membership",
            "roles" => $roles
        ]);
    }
    public function storeRegMember(Request $request) {
        // $request->validate([
        //     "name" => 'required',
        //     "email" => 'required|unique',
        //     "password" => 'required',
        //     "gender" => 'required',
        //     "role_id" => 'required',
        // ], [
        //     'name.required' => 'Nama tidak boleh kosong',
        //     'email.required' => 'Nama tidak boleh kosong',
        //     'email.unique' => 'Email sudah terdaftar',
        //     'password.required' => 'Password tidak boleh kosong',
        //     'gender.required' => 'Pilih gender terlebih dahulu',
        //     'role_id.required' => 'Pilih role terlebih dahulu',
        // ]);
        $data = User::create([
            "name" => $request->name,
            "username" => microtime(true),
            "email" => $request->email,
            "password" => Hash::make($request->password),
            "role" => "membership",
        ]);
        $member = Membership::create([
            "user_id" => $data->id,
            "name" => $data->name,
            "email" => $data->email,
            "password" => $data->password,
            "gender" => $request->gender,
            "role_id" => $request->role_id,
        ]);
        $data->save();
        $member->save();
        return redirect('/membership-login');
    }

    public function loginMembership() {
        return view('users/login-member', [
            "title" => "Login Membership"
        ]);
    }
    public function storeLoginMember(Request $request) {
        $login = [
            'email' => $request->input('email'),
            'password' => $request->input('password'),
        ];
        if (Auth::attempt($login)) {
            return redirect('/membership');
        }
        return redirect('/membership-login');
    }
    public function memberLogout() {
        Auth::logout();
        return redirect('/membership-login');
    }
    
    public function registerPublisher() {
        return view('users/reg-publish', [
            "title" => "Register Publisher"
        ]);
    }
    public function storeRegPublisher(Request $request) {
        $data = User::create([
            "name" => time(),
            "email" => microtime(true),
            "username" => $request->username,
            "password" => Hash::make($request->password),
            "role" => "publisher",
        ]);
        $publisher = Publisher::create([
            "user_id" => $data->id,
            "username" => $data->username,
            "no_telp" => $request->no_telp,
            "password" => $data->password,
            "address" => $request->address,
        ]);
        $data->save();
        $publisher->save();
        return redirect('/publisher-login');
    }
    
    public function loginPublisher() {
        return view('users/login-publisher', [
            "title" => "Login Publisher"
        ]);
    }
    public function forgotPublisher() {
        return view('users/forgot/publisher-forgot-password', [
            "title" => "Forgot Password Publisher"
        ]);
    }
    public function storeLoginPublisher(Request $request) {
        $request->validate([
            'username'=> 'required',
            'password'=> 'required',
        ]);
        $login = [
            'username' => $request->input('username'),
            'password' => $request->input('password'),
        ];
        if (Auth::attempt($login)) {
            return redirect('/publisher');
        }
        return redirect('/publisher-login');
    }
    public function publisherLogout() {
        Auth::logout();
        return redirect('/publisher-login');
    }

    public function loginAdministrator() {
        return view('users/login-admin', [
            "title" => "Login Admin"
        ]);
    }
    public function storeLoginAdmin(Request $request) {
        // $request->validate([
        //     'username'=> 'required',
        //     'password'=> 'required',
        // ]);
        $login = [
            'username' => $request->input('username'),
            'password' => $request->input('password'),
        ];
        if (Auth::attempt($login)) {
            return redirect('/administrator');
        }
        
        return redirect('/admin-login');
    }
    public function adminLogout() {
        Auth::logout();
        return redirect('/admin-login');
    }
}
