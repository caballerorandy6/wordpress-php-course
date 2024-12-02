<?php 
  include_once './includes/header.php'; 
?>

<?php

$frutas =[ "Manzana", "Naranja", "Melon", "Uvas"];

//For loop
for($i = 0; $i < count($frutas); $i++){
      echo $frutas[$i] . "<br>";
  } //Se ejecuta un NUMERO DETERMINADO de veces
  //echo count($frutas); //Cuenta los elementos del array

//Foreach loop
  foreach($frutas as $fruta){
    echo $fruta . "<br>"; //Se ejecuta para CADA ELEMENTO del array
  } 
?>