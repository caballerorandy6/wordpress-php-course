<?php 
  include_once './includes/header.php';
?>

<?php

// For loop
// for($i = 0; $i <= 5; $i++){
// echo "El numero es ".  $i . "<br>";
// }

// For loop con continue
// for($i = 0; $i <= 5; $i++){
//   if($i == 3 ){
//   echo "El numero es TRES <br>";
//   continue; //Imprime el mensaje y continua con el ciclo
//   }
//   echo "El numero es ".  $i . "<br>";
//   }


  for($i = 0; $i <= 5; $i++){
    if($i == 3 ){
    echo "El numero es TRES <br>";
    break; //Imprime el mensaje y termina el ciclo
    }
    echo "El numero es ".  $i . "<br>";
    }

?>


