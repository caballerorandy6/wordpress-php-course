<?php 
  include_once './includes/header.php'; 
?>

<?php

$estudiante = [

  "nombre" => "Juan",
  "apellido" => "De la Torre",
  "pais" => "Mexico",
];

echo $estudiante["nombre"];
echo "<br>";
echo $estudiante["apellido"];
echo "<br>";
echo $estudiante["pais"];
echo "<br>";

echo $estudiante["nombre"] . " " . $estudiante["apellido"] . " del pais " . $estudiante["pais"];

echo "<pre>";
 var_dump($estudiante);
 "</pre>";

?>