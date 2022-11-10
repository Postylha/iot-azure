<?php
  echo '<h1>Params page</h1>';
  
  $a = $_GET["a"];
  $b = $_GET["b"];
  
  $c = $a+$b;
  
  echo "sum of params = $c";

?>
