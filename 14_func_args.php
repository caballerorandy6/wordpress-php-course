<?php 
  include_once './includes/header.php'; 
?>

<?php

function saludar($nombre) {
  echo "Hola $nombre";
  echo "<br>";
  echo "Hola {$nombre}";
}

echo saludar('Juan');

echo "<br>";

  function sum($num1, $num2) {
    return $num1 + $num2;
  }

  echo sum(10, 20);

?>