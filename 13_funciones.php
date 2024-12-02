<?php 
  include_once './includes/header.php'; 
?>

<?php

function saludar(){
  echo "Bienvenido al sitio!";
}

saludar();

echo "<br>";

function sumar(){
  return 2 + 2;
}

echo sumar();
?>