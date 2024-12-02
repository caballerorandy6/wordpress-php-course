<?php 
  include_once './includes/header.php'; 
?>

<?php

//Template tag es una funcion que maneja la salida de datos en un tema de WordPress
function the_title() {
echo 'Titulo de mi blog';
}

function the_date() {
echo date('d/m/Y');
}

function the_author(){
  echo 'Randy';
}
?>

<div class="entrada">
<h2><?php  the_title();?></h2>
<p>Publicado el: <?php the_date();?></p>
<p>Escrito por: <?php the_author();?></p>
</div>