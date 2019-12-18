<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{
  public $fillable = [
      'name', 'date','location_id','user_id','descripcion','deporte',
  ];

  public function Users(){
    return $this->belongsToMany('App\User', 'evento_participante','evento_id','user_id');
  }
}


/// $evento->Users
/// $evento->Users()->attach($idUsuario);
/// $evento->Users()->detach($idUsuario);
/// $evento->Users()->detach()
