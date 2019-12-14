<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class userController extends Controller
{



  public function miProfile()
  {
       $id=Auth::id();
       $user=User::find($id);
      return view('profile', compact("user"));
  }



  public function profile($id)
  {
       $user=User::find($id);
      return view('profile', compact("user"));
  }
}
