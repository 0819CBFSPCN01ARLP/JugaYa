<?php
  if(isset($_SESSION["usuario"]) && $_SESSION["usuario"]!=""){
    header('Location:noticiascartas.php');
  }
?>
