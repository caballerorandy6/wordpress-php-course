<?php 
  include_once './includes/header.php'; 
?>

<?php

$frutas = array("Manzana", "Naranja", "Melon", "Uvas");

$estudiante = [

  "nombre" => "Juan",
  "apellido" => "De la Torre",
  "pais" => "Mexico",
  "edad" => 18,
  "autenticado" => true,
];

echo "<pre>";
var_dump($estudiante);
"</pre>";

echo "<pre>";
print_r($estudiante);
"</pre>";
  ?>