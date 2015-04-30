<?php
    include_once('conexion.php');
    $id = $_POST['id'];

    $sql="delete from contactos where idcontacto = '".$id."'";
    $query = mysql_query($sql);

  if ($query)
    {
      echo "Registro Eliminado";
    }
  else
    {
      echo "Ups!, Problemas para eliminar el contacto <br> Error".mysql_error();
    }
 ?>
