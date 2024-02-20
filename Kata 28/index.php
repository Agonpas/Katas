<?php
$numero = 45678;
$unidad1 = 4;
$unidad2 = 3;
$cifra = $numero;
$numeros = array();
while($cifra!= 0){ 
$numeros[] = $cifra % 10;
$cifra = intval($cifra/10); // intval convierte el resultado en entero
}
var_dump ($numeros);

$contiene1 = array_search($unidad1, $numeros); 
echo $contiene1;
$contiene2 = array_search($unidad2, $numeros); 
echo $contiene2;
if ($contiene1 !== false){
    echo "La cifra $unidad1 está dentro de: " . $numero;
} else {
    echo "La cifra $unidad1 no está dentro de $numero";
}
if ($contiene2 !== false){
    echo "La cifra $unidad2 está dentro de: " . $numero;
} else {
    echo "La cifra $unidad2 no está dentro de $numero";
}
?>