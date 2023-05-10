<?php

namespace App\Http\Controllers;

use App\Models\Film;
use App\Models\Role;
use App\Models\User;
use App\Models\Admin;
use App\Models\Feedback;
use App\Models\Publisher;
use App\Models\Membership;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Validator;


class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function dashboard()
    {
        $films = count(Film::select('*')->get());
        $roles = count(Role::select('*')->get());
        $publisher = count(Publisher::select('*')->get());
        $member = count(Membership::select('*')->get());
        return view('/admin/dashboard', [
            "title" => "Administrator",
            "filmAmount" => $films,
            "roleAmount" => $roles,
            "publisherAmount" => $publisher,
            "memberAmount" => $member
        ]);
    }
    
    public function film() {
        $films = Film::select('*')->get();
        return view('/admin/movies', [
            "title" => "Movies",
            "films" => $films
        ]);
    }
    public function deleteFilm($id) {
        $delMovie = Film::findOrFail($id);
        $file = public_path('img/temp/' . $delMovie->img_cover);
        if (File::exists($file)) {
            unlink($file);
        }
        $delMovie->delete();

        return redirect('/admin/all-movies');
    }

    public function role() {
        $roles = Role::select('*')->get();
        return view('/admin/roles', [
            "title" => "Role Settings",
            "roles" => $roles
        ]);
    }
    public function addRole() {
        return view('/admin/role/add', [
            "title" => "Add Role"
        ]);
    }
    public function storeRole(Request $request) {
        $validator = Validator::make($request->all(), [
            'name' => 'required|unique:membership_role|max:50',
            'features' => 'required',
            'price' => 'required',
        ],[
            'name.required' => 'Isi nama role terebih dahulu',
            'name.unique' => 'Nama role sudah terdaftar',
            'features.required' => 'Pilih fitur minimal satu',
            'price.required' => 'Harga tidak boleh kosong',
        ]);
        if ($validator->fails()) {
            dd($validator->errors()->messages());
            return redirect()->withErrors($validator->errors()->messages());
        }
        $features = implode(', ', $request->features);
        $upRole = new Role();
        $upRole->name = $request->name;
        $upRole->features = $features;
        $upRole->price = $request->price;
        $upRole->role_limit = $request->role_limit;
        $upRole->save();
        return redirect('/admin/roles');
    }
    public function editRole($id) {
        $role = Role::find($id);
        return view('/admin/role/update', [
            "title" => "Update Role",
            "role" => $role
        ]);
    }
    public function updateRole(Request $request, $id) {
        $validator = Validator::make($request->all(), [
            'name' => 'required|unique:membership_role|max:50',
            'features' => 'required',
            'price' => 'required',
        ],[
            'name.required' => 'Isi nama role terebih dahulu',
            'name.unique' => 'Nama role sudah terdaftar',
            'features.required' => 'Pilih fitur minimal satu',
            'price.required' => 'Harga tidak boleh kosong',
        ]);
        if ($validator->fails()) {
            dd($validator->errors()->messages());
            return redirect()->withErrors($validator->errors()->messages());
        }
        $upRole = Role::findorFail($id);
        $features = implode(', ', $request->features);
        $upRole->update([
            'name' => $request->name,
            'features' => $features,
            'price' => $request->price,
            'role_limit' => $request->role_limit
        ]);
        return redirect('/admin/roles');
    }
    public function deleteRole($id) {
        $delRole = Role::find($id);
        $delRole->delete($id);

        return redirect('/admin/roles');
    }

    public function publisher() {
        $publisher = Publisher::select('*')->get();
        return view('/admin/publishers', [
            "title" => "Publisher Settings",
            "publisher" => $publisher
        ]);
    }
    public function addPublisher() {
        return view('/admin/publisher/add', [
            "title" => "Add Publisher"
        ]);
    }
    public function storePublisher(Request $request) {
        $validator = Validator::make($request->all(), [
            'username' => 'required|unique:user_publisher|alpha|min:6',
            'no_telp' => 'required|numeric',
            'password' => 'required|confirmed',
            'address' => 'required',
        ], [
            'username.required' => 'isi username terlebih dahulu',
            'username.unique' => 'username sudah terdaftar',
            'username.alpha' => 'username hanya boleh terdiri dari huruf',
            'no_telp.required' => 'nomor telpon tidak boleh kosong',
            'no_telp.numeric' => 'nomor telpon tidak valid',
            'password.required' => 'password tidak boleh kosong',
            'password.confirmed' => 'password tidak sama',
            'address.required' => 'Alamat tidak boleh kosong',
        ]);
        if ($validator->fails()) {
            dd($validator->errors()->messages());
            return redirect('/publisher-register')->withErrors($validator->errors()->messages());
        }
        $username = Str::lower($request->username);
        $data = User::create([
            "name" => time(),
            "email" => microtime(true),
            "username" => $username,
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
        return redirect('/admin/publishers');
    }
    public function editPublisher($id) {
        $pub = Publisher::find($id);
        return view('/admin/publisher/update', [
            "title" => "Add Publisher",
            "pub" => $pub
        ]);
    }
    public function updatePublisher(Request $request, $id) {
        $validator = Validator::make($request->all(), [
            'username' => 'required|unique:user_publisher|alpha|min:6',
            'no_telp' => 'required|numeric',
            'address' => 'required',
        ], [
            'username.required' => 'isi username terlebih dahulu',
            'username.unique' => 'username sudah terdaftar',
            'username.alpha' => 'username hanya boleh terdiri dari huruf',
            'no_telp.required' => 'nomor telpon tidak boleh kosong',
            'no_telp.numeric' => 'nomor telpon tidak valid',
            'address.required' => 'Alamat tidak boleh kosong',
        ]);
        if ($validator->fails()) {
            dd($validator->errors()->messages());
            return redirect('/publisher-register')->withErrors($validator->errors()->messages());
        }
        $publisher = Publisher::findOrFail($id);
        $user_id = DB::table('user_publisher')->where('id', $id)->value('user_id');
        $username = Str::lower($request->username);
        DB::table('users')->where('id', $user_id)->update([
            "username" => $username,
            "email" => microtime(true),
            "role" => "publisher",
        ]);
        $publisher->user_id = $user_id;
        $publisher->username = $username;
        $publisher->no_telp = $request->no_telp;
        $publisher->address = $request->address;
        $publisher->save();
        return redirect('/admin/publishers');
    }
    public function deletePublisher($id) {
        $rmPublisher = Publisher::find($id);
        $user_id = DB::table('user_publisher')->where('id', $id)->value('user_id');
        $rmUserPublisher = User::find($user_id);
        $rmPublisher->delete($id);
        $rmUserPublisher->delete($user_id);
        return redirect('admin/publishers');
    }
    
    public function membership() {
        $member = Membership::select('*')->get();
        $roles = Role::all();
        return view('/admin/members', [
            "title" => "Membership Settings",
            "member" => $member,
            "roles" => $roles
        ]);
    }
    public function addMember() {
        $roles = Role::all();
        return view('/admin/member/add', [
            "title" => "Add Membership",
            "roles" => $roles
        ]);
    }
    public function storeMember(Request $request) {
        $validator = Validator::make($request->all(), [
            "name" => 'required|alpha',
            "email" => 'required|unique:user_membership|email',
            "password" => 'required|confirmed',
            "gender" => 'required',
            "role_id" => 'required',
        ], [
            'name.required' => 'Nama tidak boleh kosong',
            'name.alpha' => 'Nama harus terdiri dari huruf',
            'email.required' => 'Nama tidak boleh kosong',
            'email.unique' => 'Email sudah terdaftar',
            'email.email' => 'Email tidak valid',
            'password.required' => 'Password tidak boleh kosong',
            'password.confirmed' => 'Password tidak sama',
            'gender.required' => 'Pilih gender terlebih dahulu',
            'role_id.required' => 'Pilih role terlebih dahulu',
        ]);
        if ($validator->fails()) {
            dd($validator->errors()->messages());
            return redirect('/admin/memberships')->withErrors($validator->errors()->messages());
        }
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
        return redirect('/admin/memberships');
    }
    public function editMember($id) {
        $member = Membership::findOrFail($id);
        $roles = Role::all();
        return view('/admin/member/update', [
            "title" => "Update Membership",
            "member" => $member,
            "roles" => $roles
        ]);
    }
    public function updateMember(Request $request, $id) {
        $validator = Validator::make($request->all(), [
            "name" => 'required|alpha',
            "email" => 'required|unique:user_membership|email',
            "gender" => 'required',
            "role_id" => 'required',
        ], [
            'name.required' => 'Nama tidak boleh kosong',
            'name.alpha' => 'Nama harus terdiri dari huruf',
            'email.required' => 'Nama tidak boleh kosong',
            'email.unique' => 'Email sudah terdaftar',
            'email.email' => 'Email tidak valid',
            'gender.required' => 'Pilih gender terlebih dahulu',
            'role_id.required' => 'Pilih role terlebih dahulu',
        ]);
        if ($validator->fails()) {
            dd($validator->errors()->messages());
            return redirect()->withErrors($validator->errors()->messages());
        }
        $membership = Membership::findOrFail($id);
        $user_id = DB::table('user_membership')->where('id', $id)->value('user_id');
        DB::table('users')->where('id', $user_id)->update([
            "name" => $request->name,
            "username" => microtime(true),
            "email" => $request->email,
            "role" => "membership",
        ]);
        $membership->user_id = $user_id;
        $membership->name = $request->name;
        $membership->email = $request->email;
        $membership->gender = $request->gender;
        $membership->role_id = $request->role_id;
        $membership->save();
        return redirect('/admin/memberships');
    }
    public function deleteMember($id) {
        $rmMember = Membership::find($id);
        $user_id = DB::table('user_membership')->where('id', $id)->value('user_id');
        $rmUserMember = User::find($user_id);
        $rmMember->delete($id);
        $rmUserMember->delete($user_id);

        return redirect('/admin/memberships');
    }

    public function feedback() {
        $feedback = Feedback::select('*')->get();
        $feedAmount = count($feedback);
        return view('/admin/feedback', [
            "title" => "Feedback Settings",
            "feedback" => $feedback,
            "feedAmount" => $feedAmount
        ]);
    }
    public function addFeedback() {
        return view('feedback', [
            "title" => "User Feedback"
        ]);
    }
    public function storeFeedback(Request $request) {
        $validator = Validator::make($request->all(), [
            "name" => 'required|alpha',
            "email" => 'required|unique:user_membership|email',
            "feedback" => 'required'
        ], [
            'name.required' => 'Nama tidak boleh kosong',
            'name.alpha' => 'Nama tidak valid',
            'email.required' => 'Nama tidak boleh kosong',
            'email.unique' => 'Anda sudah memberikan ulasan',
            'email.email' => 'Email tidak valid',
            'feedback.required' => 'Feedback tidak boleh kosong',
        ]);
        if ($validator->fails()) {
            dd($validator->errors()->messages());
            return redirect()->withErrors($validator->errors()->messages());
        }
        $upFeedback = new Feedback();
        $upFeedback->name = $request->name;
        $upFeedback->email = $request->email;
        $upFeedback->feedback = $request->feedback;
        $upFeedback->save();

        return redirect('/');
    }
    public function editFeedback($id) {
        $feed = Feedback::find($id);
        return view('/admin/feedback/update', [
            "title" => "Update Feedback",
            "feed" => $feed
        ]);
    }
    public function updateFeedback(Request $request, $id) {
        $validator = Validator::make($request->all(), [
            "name" => 'required|alpha',
            "email" => 'required|unique:user_membership|email',
            "feedback" => 'required',
        ], [
            'name.required' => 'Nama tidak boleh kosong',
            'name.alpha' => 'Nama harus terdiri dari huruf',
            'email.required' => 'Nama tidak boleh kosong',
            'email.unique' => 'Email sudah terdaftar',
            'email.email' => 'Email tidak valid',
            'feedback.required' => 'Feedback tidak boleh kosong',
        ]);
        if ($validator->fails()) {
            dd($validator->errors()->messages());
            return redirect()->withErrors($validator->errors()->messages());
        }
        $upFeedback = Feedback::findorFail($id);
        $upFeedback->update([
            'name' => $request->name,
            'email' => $request->email,
            'feedback' => $request->feedback,
        ]);
        $upFeedback->update($request->all());
        return redirect('/admin/feedback');
    }
    public function deleteFeedback($id) {
        $rmFeedback = Feedback::find($id);
        $rmFeedback->delete($id);
        return redirect('/admin/feedback');
    }
}