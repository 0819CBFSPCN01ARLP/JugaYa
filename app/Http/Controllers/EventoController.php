<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Evento;
use App\location;
use App\evento_participante;
use App\User;
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


    protected function agregarParticipante($evento_id)
      {
        $user_id=Auth::id();
        $user = User::find($user_id);
        $user->eventos()->attach($evento_id);

    return redirect('/eventos');
      }
      protected function eliminarParticipante($evento_id)
        {
          $user_id=Auth::id();
          $user = User::find($user_id);
          $user->eventos()->detach($evento_id);
      return redirect('/eventos');
        }


  protected function directory()
   {
     $locations=\App\location::all();
     $eventos=\App\evento::orderBy('date','asc')->get();
     $vac=compact('locations','eventos');
     return  view('evento',$vac);
   }
   protected function mineDirectory()
    {
      $locations=\App\location::all();
      $eventos=\App\evento::where('user_id',Auth::id())->get();
      $vac=compact('locations','eventos');
      return  view('evento',$vac);
    }

    protected function editar($id)
     {
       $locations=\App\location::all();
       $evento=Evento::find($id);
       $vac=compact('locations','evento');
       return  view('editarEvento',$vac);
     }

     protected function sobrescribir(Request $req,$id)
      {
        $locations=\App\location::all();
        $evento=Evento::find($id);
        $evento->descripcion = $req["descripcion"];
        $evento->name = $req["name"];
        $evento->date = $req["date"];
        $evento->deporte = $req["deporte"];
        $evento->location_id = $req["location_id"];
        $evento->save();
        $eventos=\App\evento::orderBy('date','asc')->get();
        $vac=compact('locations','evento','eventos');
          return redirect('/eventos');
      }



}
