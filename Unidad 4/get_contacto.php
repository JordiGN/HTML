<?php
    include_once('conexion.php');
    $id = $_POST['id'];

    $sql="select * from contactos where idcontacto = '".$id."'";
    $query = mysql_query($sql);
    while($row=mysql_fetch_array($query, MYSQL_ASSOC)){
      echo json_encode($row);}
 ?>
