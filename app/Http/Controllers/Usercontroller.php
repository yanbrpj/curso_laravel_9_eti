<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class Usercontroller extends Controller
{
    public function index() {
        $users = User::get();

        return view('users.index', [
            'users' => $users,
        ]);
    }

    public function show($id) {
        dd('UserController@show', $id);
    }
}
