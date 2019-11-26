<?php

require_once('db/DB.php');
/*EN UN FORMULARIO PEDIMOS EL NOMBRE DEL EVENTO A MODOFICAR y los datos a modificar*/
$nombreViejo=$_POST["nombre"];
$fecha_hora=$_POST["fecha"];
$ubicacion=$_POST["ubicacion"]; //Por ahora solo un numero por favor
$nombreNuevo=$_POST["nombreNuevo"];
if(!empty($nombreViejo)|| !empty($fecha_hora) || !empty($ubicacion) || !empty($nombreNuevo)){
$query=$db->prepare("UPDATE eventos SET nombre=:nombreNuevo,fecha_hora=:fecha_hora,ubicacion_id=:ubicacion WHERE nombre=:nombreViejo");
$query->bindValue(":nombreNuevo",$nombreNuevo);
$query->bindValue(":fecha_hora",$fecha_hora);
$query->bindValue(":ubicacion",$ubicacion);
$query->bindValue(":nombreViejo",$nombreViejo);
$query->execute();
}
header('Location: perfil.php');
  ?>
