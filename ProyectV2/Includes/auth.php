<?php

require_once('db\DB.php');

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

  $email=$_POST['email'];

  $usuario=$_POST['usuario'];

  $stmt=$db->prepare("SELECT * from jugadores where email=:email");

  $stmt->bindvalue(':email',$email);

  $stmt->execute();

  $consulta=$stmt->fetch(PDO::FETCH_ASSOC);

  if($consulta>0){

    if($consulta['email']==$email){

      $errores[]="El email ya esta en uso <br>";

    }

    if($consulta['usuario']==$usuario){

      $errores[]="El nombre de usuario ya esta en uso <br>";

      return $errores;

    }

  }

  $archivoNombre=$_FILES['foto_perfil']['name'];

  $ext=strlower(pathinfo($archivoNombre,PATHINFO_EXTENSION));

  $archivo=$_FILES['foto_perfil']['tmp_name'];

  $foto='perfil'.$usuario.".".$ext;

  move_uploaded_file($archivo,'img/'.$foto);

  $nombre=$_POST['nombre'];

  $apellido=$_POST['apellido'];

  $contrasenia=password_hash($_POST["password"], PASSWORD_DEFAULT);

  $stmt=$db->prepare("INSERT into jugadores values (:null,:nombre,:apellido,:usuario,:password,:email,:telefono,:fec_ins,:fec_upd)");

  $date=date("Y-m-d H:i:s");

  $stmt->bindvalue(':id',null);

  $stmt->bindvalue(':nombre',$nombre);

  $stmt->bindValue(':apellido',$apellido);

  $stmt->bindValue(':usuario',$usuario);

  $stmt->bindValue(':password',$contrasenia);

  $stmt->bindValue(':email',$email);

  $stmt->bindValue(':telefono',null);

  $stmt->bindValue(':fec_ins',$date);

  $stmt->bindValue(':fec_upd',null);

  $stmt->execute();

  $consulta=$stmt->fetchAll();

  return $errores;

  /*$path="db/usuarios.json";

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

*/

}




function verificaLogin($errores) {



    /*$path="db/usuarios.json";

    $usuarioJson=file_get_contents($path);

    $usuarioJSON = json_decode($usuarioJson,true);*/

    $usuario=$_POST['usuario'];

    $password=$_POST['password'];

    $encontreUsuario=false;

    $encontrePassword=false;

    $stmt=$db->prepare("SELECT * FROM usuarios where usuario=:usuario");

    $stmt->bindValue(':usuario',$usuario);

    $stmt->execute();

    $consulta=$stmt->fetch(PDO::FETCH_ASSOC);

    if($consulta>0){

      $encontreUsuario=true;

      if(password_verify($password,$consulta['password'])){

          $_SESSION['usuario']=$usuario['usuario'];

          $_SESSION['nombre']=$usuario['name'];

          $_SESSION['previoLogueo']=false;

          $encontrePassword=true;

          header('Location: bienvenida.php');

          if(empty($errores)){

            if (!empty($_POST["guardar_clave"])){

             setcookie("email", $_POST['email'], time() + 365 * 24 * 60 * 60);

             echo $_COOKIE['email'];

             setcookie("password", $_POST['password'], time() + 365 * 24 * 60 * 60);

           }

          else {

            if(isset($_COOKIE['email'])){

              setcookie('email',"");

            }

            if(isset($_COOKIE['password'])){

              setcookie('password',"");

            }

          }

        }

      }

      else{

        $errores[]="Verifique los datos";

        return $errores;

      }

    }

    else {

      $errores[]="No existe el usuario";

      return $errores;

    }



    /*foreach ($usuarioJSON as $usuario)

    {

      if ($usuario["email"] == $_POST['email']){

        $encontreUsuario=true;

        //

        if(password_verify($_POST["password"], $usuario["password"])){

          $_SESSION['usuario']=$usuario['usuario'];

          $_SESSION['nombre']=$usuario['name'];

          $_SESSION['previoLogueo']=false;

          $encontrePassword=true;

          header('Location: bienvenida.php');

          if(empty($errores)){

          if (!empty($_POST["guardar_clave"])){

             setcookie("email", $_POST['email'], time() + 365 * 24 * 60 * 60);

             echo $_COOKIE['email'];

             setcookie("password", $_POST['password'], time() + 365 * 24 * 60 * 60);

          }

          else {

            if(isset($_COOKIE['email'])){

              setcookie('email',"");

            }

            if(isset($_COOKIE['password'])){

              setcookie('password',"");

            }

          }

          }

        }

      }

    }

    if($encontreUsuario!=true){

      array_push($errores,'Por Favor verifique el nombre de usuario');

    }

    if ($encontrePassword!=true) {

      array_push($errores,'Contraseña incorrecta');

    }

    return $errores;*/

}
?>

<!DOCTYPE html>

<html lang="en" dir="ltr">

  <head>

    <meta charset="utf-8">

    <title></title>

    <?php

    //$email=$_POST['email'];

    $email="juan98@gmail.com";

    $stmt=$db->prepare("SELECT * from jugadores where email=:email");

    $stmt->bindvalue(':email',$email);

    $stmt->execute();

    $result=$stmt->fetch(PDO::FETCH_ASSOC);

    var_dump($result);

    if($result>0){

      if($result['email']==$email){

        echo "ya esta en uso";

      }

      else {

        echo "esta disponible";

      }

    }

    else {

      echo "no hay nada";

    }

    echo date("Y-m-d H:i:s");

     ?>

  </head>

  <body>



  </body>

</html>
