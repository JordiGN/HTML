<?php
  include_once('conexion.php');
  $cad=$_GET['term'];

  $sql="select nombre as value,idcontacto as id from contactos where nombre like '%".$cad."%'";
  $query= mysql_query($sql);

  while($row=mysql_fetch_array($query,MYSQL_ASSOC) ){
    $rows[]=$row;
  }
  echo json_encode($rows);

?>
