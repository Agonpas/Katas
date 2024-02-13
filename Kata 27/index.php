<?php
include_once 'Jugador.php';

$jugador1 = new Jugador ("Alberto", ['madera' => 3, 'lana' => 2, 'arcilla' => 2, 'mineral' => 5, 'cereal' => 7]);
$jugador1->verMateriales();
$jugador1->comprarCarretera();
$jugador1->comprarPoblado();
$jugador1->comprarCiudad();
$jugador1->verMateriales();
$jugador1->verCompras();

?>
