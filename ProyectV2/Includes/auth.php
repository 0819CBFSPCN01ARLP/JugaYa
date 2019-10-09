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
  if($_FILES["foto_perfil"]["error"]==0){ //Cambiar el nombre del archivo de ser necesario
    $permitidos=array('jpeg','png','jpg');
    $archivo=$_FILES["foto_perfil"]["name"];
    $ext=strtolower(pathinfo($archivo, PATHINFO_EXTENSION));
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
  if(!file_exists($path))
  {
    $arregloUsuarios=[];
  }
    $usuarioJson=file_get_contents($path);
    $arregloUsuarios=json_decode($usuarioJson,true);
if(!empty($arregloUsuarios)){
  if(array_search($_POST['email'],array_column($arregloUsuarios,'email'))!==false){
    $errores[]= "El mail ya esta registrado <br>";
    if(array_search($_POST['usuario'],array_column($arregloUsuarios,'usuario'))!==false){
      $errores[]= "El usuario ya esta registrado <br>";
      return $errores;
   }
  }
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
  $usuarioJSON=json_encode($arregloUsuarios,JSON_PRETTY_PRINT); //Sacar el pretty print despues de haber hecho la prueba;
  file_put_contents($path,$usuarioJSON);
  return $errores;

}
function verificaLogin() {

    $path="db/usuarios.json";
    $usuarioJson=file_get_contents($path);
    $usuarioJSON = json_decode($usuarioJson,true);

    foreach ($usuarioJSON as $usuario)
    {
      if ($usuario["email"] == $_POST['email'] && password_verify($_POST["password"], $usuario["password"])){
        $_SESSION['usuario']=$usuario['usuario'];
        $_SESSION['nombre']=$usuario['name'];

        include_once('bienvenida.php');
      }

   }

}

?>
