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
        // $user = User::where('id', '=', $id)->first();
        // $user = User::where('id', $id)->first();
        
        if (!$user = User::find($id)) {
            // return redirect()->back();
            return redirect()->route('users.index');
        }

        return view('users.show', [
            'user' => $user,
        ]);
    }
}
