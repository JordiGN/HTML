<?php

  include_once('conexion.php');


  $nombre=$_POST['nombre'];
  $tel1=$_POST['tel1'];
  $tel2=$_POST['tel2'];
  $email=$_POST['email'];
  $fnac=date('y-m-d',strtotime($_POST['fnac']));
  $id = $_POST['id'];
  //Aqui deberiamos validar los datos para evitar la inyección de código

  $sql="UPDATE contactos SET nombre = '$nombre',tel1 = '$tel1',tel2 = '$tel2',email = '$email',fnac = '$fnac'
       WHERE idcontacto = '$id'";


  $alta=mysql_query($sql,$con);
  if ($alta)
    {
      echo "Contacto actualizado correctamente";
    }
  else
    {
      echo "Ups!, Problemas al actualizar el contacto <br> Error".mysql_error();
    }
 ?>
