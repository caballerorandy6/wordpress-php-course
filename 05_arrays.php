<?php 
  include_once './includes/header.php'; 
?>

<?php

$frutas = array("Manzana", "Naranja", "Melon", "Uvas");

$frutas2 =[ "Manzana", "Naranja", "Melon", "Uvas"];

array_push($frutas, "Pera", );
unset($frutas[2]);

 echo "<pre>";
 var_dump($frutas);
 "</pre>";

 echo "<pre>";
 var_dump($frutas2);
 "</pre>";

  // Arrays
  $fruits = array('Apple', 'Banana', 'Orange', 'Mango', 'Grapes');
  echo $fruits[0];
  echo '<br>';
  echo $fruits[1];
  echo '<br>';
  echo $fruits[2];
  echo '<br>';
  echo $fruits[3];
  echo '<br>';
  echo $fruits[4];
  echo '<br>';

  echo '<br>';

  // Associative Arrays
  $fruits = array('a' => 'Apple', 'b' => 'Banana', 'o' => 'Orange', 'm' => 'Mango', 'g' => 'Grapes');
  echo $fruits['a'];
  echo '<br>';
  echo $fruits['b'];
  echo '<br>';
  echo $fruits['o'];
  echo '<br>';
  echo $fruits['m'];
  echo '<br>';
  echo $fruits['g'];
  echo '<br>';

  echo '<br>';

  // Multidimensional Arrays
  $fruits = array(
    'a' => array('Apple', 'Apricot', 'Avocado'),
    'b' => array('Banana', 'Blackberry', 'Blueberry'),
    'o' => array('Orange', 'Olive', 'Oregano'),
    'm' => array('Mango', 'Melon', 'Mulberry'),
    'g' => array('Grapes', 'Guava', 'Gooseberry')
  );
  echo $fruits['a'][0];
  echo '<br>';
  echo $fruits['b'][1];
  echo '<br>';
  echo $fruits['o'][2];
  echo '<br>';
  echo $fruits['m'][1];
  echo '<br>';
  echo $fruits['g'][0];
  echo '<br>';

?>