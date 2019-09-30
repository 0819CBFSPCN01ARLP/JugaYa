<?php
function validacion(){
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
  if($_FILES["foto_perfil"]["error"]!=0){ //Cambiar el nombre del archivo de ser necesario
    $permitidos=array('jpeg','png','jpg');
    $archivo=$_FILES["foto_perfil"]["name"];
    $ext=pathinfo($archivo, PATHINFO_EXTENSION);
    if(!in_array($ext,$permitidos)){
      $errores[]="El formato de la foto no es valido";
    }
    else {
      $errores[]="Hubo un error en la subida de la foto"
    }
  }
  if(empty($errores)){
    $errores=agregarUsuarios($errores);
  }
  return $errores;
}

function agregarUsuarios($errores){
  $path="db/usuarios.json";
  $arregloUsuarios=[];

  if(file_exists($path)){
    $usuarioJson=file_get_contents($path);
    $arregloUsuarios=json_decode($usuariosJson,true);
  }
  if(array_search($_POST['email'],array_column($arregloUsuarios,'email'))!==false){
    $errores[]= "El usuario ya existe";
    return $errores;
  }

  $usuario=[
    'id'=> count($arregloUsuarios);
    'name'=>$_POST['nombre'],
    'apellido'=>$_POST['apellido'],
    'usuario'=>$_POST['usuario'],
    'email'=>$_POST['email'],
    'password'=> password_hash($_POST["password"], PASSWORD_DEFAULT),
    //falta agregar foto de perfil
  ];

  $arregloUsuarios[]=$usuario;
  $usuariosJSON=json_encode($arregloUsuarios,JSON_PRETTY_PRINT); //Sacar el pretty print despues de haber hecho la prueba;
  file_put_contents($path,$usuariosJSON);
  return $errores;
}
?>
