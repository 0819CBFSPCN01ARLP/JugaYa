<?php

namespace App\Http\Controllers;
use App\User;
use App\Evento;
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

  public function buscar($variable){
    $user=User::where('name','LIKE','%'.$variable.'%')->orWhere('username','LIKE','%'.$variable.'%')->orWhere('last_name','LIKE','%'.$variable.'%')->get();
    $evento=Evento::where('name','LIKE','%'.$variable.'%')->orWhere('deporte',$variable)->get();
    $vac=compact("user","evento");
    return view('search',$vac);
  }
}
