<<<<<<< HEAD
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
 $extension=pathinfo($_FILES["fotoperfil"]["name"], PATHINFO_EXTENSION);
  if ($extension !="jpg" && $extension !="jpeg" && $extencion !="png") {
    $errores[]="El formato de la foto no es valido";
  }

return $errores;
}

 ?>
=======
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
  }
  else {
    $errores[]="Hubo un error en la subida de la foto";
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

  $archivoNombre=$_FILES["foto_perfil"]["name"];
  $ext=strtolower(pathinfo($archivoNombre,PATHINFO_EXTENSION));
  $archivo=$_FILES['foto_perfil']['tmp_name'];
  $foto="perfil".$_POST['usuario'].".".$ext;
  move_uploaded_file($archivo,'img/'.$foto);
  $usuario=[
    'id'=> count($arregloUsuarios),
    'name'=>$_POST['nombre'],
    'apellido'=>$_POST['apellido'],
    'usuario'=>$_POST['usuario'],
    'email'=>$_POST['email'],
    'password'=> password_hash($_POST["password"], PASSWORD_DEFAULT),
    'foto_perfil'=> $foto
  ];

  $arregloUsuarios[]=$usuario;
  $usuariosJSON=json_encode($arregloUsuarios,JSON_PRETTY_PRINT); //Sacar el pretty print despues de haber hecho la prueba;
  file_put_contents($path,$usuariosJSON);
  return $errores;
}

/* function verificaLogin($email,$password) {
  if (isset($_POST)) {
    $path="db/usuarios.json";
    $usuariosJSON = json_decode($path,true);

    foreach ($usuariosJSON as $email) {
      if ($usuariosJSON["email"] == $email && $usuariosJSON["password"] == $password){
        header('Location: noticiascartas.php');
      } else {
        $error = "Por favor verifique los datos ingresados";
      }
    }
  }
} */
?>
>>>>>>> 13b88074a0be6468672031a76a70bdea835c3139
