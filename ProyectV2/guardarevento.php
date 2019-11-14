<?php
require_once('db/DB.php');
$fecha_hora=$_POST["fecha"];
$ubicacion=$_POST["ubicacion"];
$nombre=$_POST["nombre"];
$fec_ins=date("Y-m-d H:i:s");
$fec_upd=date("Y-m-d H:i:s");;
$dia="martes";
if(!empty($fecha_hora) || !empty($ubicacion) || !empty($nombre)){
$query=$db->prepare("INSERT into eventos
  (id,nombre,dia,fecha_hora,ubicacion_id,fec_ins,fec_upd)
  values (default,:nombre,:dia,:fecha_hora,:ubicacion,:fec_ins,:fec_upd)");
  $query->bindValue(":nombre",$nombre);
  $query->bindValue(":dia",$dia);
  $query->bindValue(":fecha_hora",$fecha_hora);
  $query->bindValue(":ubicacion",$ubicacion);
  $query->bindValue(":fec_ins",$fec_ins);
  $query->bindValue(":fec_upd",$fec_upd);
  $query->execute();
$query2=$db->prepare("SELECT * FROM eventos");
$query2->execute();
$eventos=$query2->fetchAll(PDO::FETCH_ASSOC);
}
header('Location: perfil.php');
  ?>
