<?php

  $colonias[] = array("Id"=>0,"nombre"=>"centro");
  $colonias[] = array("Id"=>1,"nombre"=>"las palmas");
  $colonias[] = array("Id"=>2,"nombre"=>"linda vista");
  $colonias[] = array("Id"=>3,"nombre"=>"San pablo");

  echo json_encode($colonias, JSON_FORCE_OBJECT);
 ?>
