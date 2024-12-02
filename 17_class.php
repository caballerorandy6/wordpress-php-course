<?php
  include_once './includes/header.php'; 
?>

<?php

//Programacion orientada a objetos en PHP
//Clase: Es un modelo que se utiliza para crear objetos que comparten un mismo comportamiento, estado e identidad.
class Cliente{
public function __construct($nombre)//El constructor se manda a llamar automaticamente cuando se crea una instancia de la clase.
  {
    $this-> nombre = $nombre;
  }

  //Metodos
  public function mostrarNombre(){
    echo "El nombre del cliente es " . $this->nombre . "<br>";
  }
}

//Instanciar una clase y anadir el valor del constructor
$cliente = new Cliente("Juan");
$cliente2 = new Cliente("Karen");

//Acceder a los metodos de la clase
$cliente->mostrarNombre();
$cliente2->mostrarNombre();

echo "<br>";

echo "<pre>";
var_dump($cliente);
"</pre>";

echo "<pre>";
var_dump($cliente2);
"</pre>";

?>