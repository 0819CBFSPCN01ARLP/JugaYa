<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Evento;
class EventoController extends Controller
{
  protected function create(Request $data)
    {
            Evento::create([
            'name' => $data['name'],
            'date' => $data['date'],
            'location_id' => $data['location_id'],
            'user_id'=>Auth::id(),
            'descripcion'=>$data['descripcion'],
            'deporte'=>$data['deporte'],
        ]);
return redirect('/eventos');
    }
  }
