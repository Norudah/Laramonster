<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    function index() {
        $users = User::all();
        return view('users.list', ["users" => $users]);
    }

    function delete($id) {
        $user = User::find($id);
        $user->delete();
        return redirect("users");
    }

    function modify($id) {
        $user = User::find($id);
        return view('users.modify', ['user' => $user]);
    }

    function modifyPersist($id, Request $request) {
        $user = User::find($id);
        
        $user->name = $request->name;
        $user->email = $request->email;
        $user->save();

        return redirect()->route('users');
    }
}
