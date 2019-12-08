<?php

namespace App\Http\Controllers;

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
            'user_id'=>10,
        ]);
return redirect('/inicio');
    }
  }
