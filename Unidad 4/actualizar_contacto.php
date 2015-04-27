<?php

  include_once('conexion.php');
 $id = $_POST['id'];

  $nombre=$_POST['nombre'];
  $tel1=$_POST['tel1'];
  $tel2=$_POST['tel2'];
  $email=$_POST['email'];
  $fnac=$_POST['fnac'];
  //Aqui deberiamos validar los datos para evitar la inyección de código

  $sql="update contactos set (nombre,tel1,tel2,email,fnac) values
          ('$nombre','$tel1','$tel2','$email','$fnac') where idcontacto = '".$id."'";
  $alta=mysql_query($sql,$con);
  if ($alta)
    {
      echo "Alta exitosa de contacto";
    }
  else
    {
      echo "Ups!, No se pudo agregar el contacto <br> Error".mysql_error();
    }
 ?>
