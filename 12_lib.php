<?php 
  include_once './includes/header.php'; 
?>

<?php

$frutas =[ "Manzana", "Naranja", "Melon", "Uvas"];

echo count($frutas);

//Cuenta el numero de elementos en el array

echo "<br>";

$mi_nombre = "Randy";

echo strtoupper($mi_nombre);
echo "<br>";
echo strtolower($mi_nombre);

echo "<br>";

$password = "      password  ";
echo trim($password);
echo "<br>";
var_dump($password);

echo "<br>";

if(strlen(trim($password)) < 10){
  echo "La contraseña es muy debil";
}else{
  echo "Contraseña es fuerte";
}
?>