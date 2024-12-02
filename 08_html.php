<?php 
  include_once './includes/header.php'; 
?>

<?php

$estudiante = [

  "nombre" => "Juan",
  "apellido" => "De la Torre",
  "pais" => "Mexico",
  "edad" => 18,
  "autenticado" => true,
];

// HTML en PHP
echo "<h1> Hola! ".$estudiante["nombre"]."</h1>"

?>

<!-- PHP en HTML -->
<h1>Hola! <?php echo $estudiante["nombre"]; ?></h1>