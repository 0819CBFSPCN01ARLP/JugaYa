<?php

require_once('db/DB.php');
/*EN UN FORMULARIO PEDIMOS EL NOMBRE DEL EVENTO A MODOFICAR y los datos a modificar*/
$nombreViejo=$_POST["nombre"];
$fecha_hora=$_POST["fecha"];
$ubicacion=$_POST["ubicacion"];
$nombreNuevo=$_POST["nombreNuevo"];
$query=$db->prepare("UPDATE eventos SET nombre=$nombreNuevo,fecha_hora=$fecha_hora,ubicacion=$ubicacion
WHERE nombre=$nombreViejo");
$query->execute();
  ?>
