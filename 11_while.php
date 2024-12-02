<?php 
  include_once './includes/header.php'; 
?>

<?php

$frutas =[ "Manzana", "Naranja", "Melon", "Uvas"];

//For loop
for($i = 0; $i < count($frutas); $i++){
  echo $frutas[$i] . "<br>";
}

//While loop
$i = 0;

while($i < count($frutas)){
echo $frutas[$i] . "<br>";
 $i++;
}

?>