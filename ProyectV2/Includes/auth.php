<?php
function validacion()

{
  $errores=[];
  if(strlen($_POST["nombre"])==0){
  $errores[]="Debe indicar un nombre";
}
  if(strlen($_POST["apellido"])==0){
  $errores[]="Debe indicar un apellido";
}
  if(strlen($_POST["usuario"])<=3){
  $errores[]="El usuario debe tener mas de 3 caracteres";
}

  if(filter_var($_POST["email"],FILTER_VALIDATE_EMAIL)==false){
  $errores[]="El email no es valido";
}
/*  $extension=pathinfo($_FILES["fotoperfil"]["name"], PATHINFO_EXTENSION);
  if ($extension !="jpg" && $extension !="jpeg" && $extencion !="png") {
    $errores[]="El formato de la foto no es valido";
  }
*/
return $errores;
}

 ?>
