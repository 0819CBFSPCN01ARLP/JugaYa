
<?php
include_once('PDO.php');
$nombre=$_POST["nombre"];
$eliminar=$db->prepare("DELETE from eventos where nombre==$nombre");
$eliminar->execute();
 ?>
