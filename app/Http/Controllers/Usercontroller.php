<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Usercontroller extends Controller
{
    public function index() {
        return view('users.index');
    }

    public function show($id) {
        dd('UserController@show', $id);
    }
}
