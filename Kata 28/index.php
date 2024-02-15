<?php
$numero = 45678;
$unidad1 = 4;
$unidad2 = 3;

$numeros = array();
$numero = 45678;
while($numero!= 0){ 
$numeros[] = $numero % 10;
$numero = intval($numero/10); 
}
var_dump ($numeros);

$contiene1 = array_search($unidad1, $numeros); 
echo $contiene1;
$contiene2 = array_search($unidad2, $numeros); 
echo $contiene2;
?>