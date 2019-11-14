
<?php
include_once('PDO.php');
if(!empty($_POST['nombre'])){
  $nombre=$_POST["nombre"];
  $eliminar=$db->prepare("DELETE from eventos where nombre=:nombreEliminar");
  $eliminar->bindValue(':nombreEliminar',$nombre);
  $eliminar->execute();
}
header('Location: perfil.php');
 ?>
