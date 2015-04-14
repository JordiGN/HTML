<?php

  $colonias=array("centro","viska","almendros","las palmas","lomas altas");
  echo "<pre>";
  print_r($colonias);
  echo "</pre>";

  echo json_encode($colonias, JSON_FORCE_OBJECT);
 ?>
