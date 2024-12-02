<?php 
  include_once './includes/header.php'; 
?>

<?php
//Dividiendo los problemas en partes más pequeñas
function calcular_total($cantidad){
  $total = $cantidad * 1.16;
  return $total;
}

$cantidad_pagar = calcular_total(1000);

echo "El total a pagar es: $cantidad_pagar";

echo "<br>";

function pagar($total){
  $balance = 5000;

  if($total > $balance){
    echo "Hubo un error al pagar";
  }else{
    echo "Pago exitoso";
  }
}

pagar($cantidad_pagar);

?>