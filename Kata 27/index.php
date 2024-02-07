<?php
include_once 'Jugador.php';

$jugador1 = new Jugador ("Alberto", ['madera' => 3, 'lana' => 2, 'arcilla' => 2, 'mineral' => 1, 'cereal' => 2]);
$jugador1->verMateriales();
$jugador1->comprarCamino();
$jugador1->verMateriales();
$jugador1->verCompras();

?>
