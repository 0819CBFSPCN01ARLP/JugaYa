<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Auth;

class userController extends Controller
{



public function profile($id)
{
    $user=User::find($id);
    return view('profile', compact("user"));
}
}
