<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function users() {
        $users = User::select('id', 'name')->get();
        return view('welcome')->with([
            'users' => $users
        ]);
    }
}
