<?php
echo "Introduce una cifra" . PHP_EOL;
$numero = fgets(STDIN);
echo "Introduce una unidad" . PHP_EOL;
$unidad = fgets(STDIN);


function buscarCifra(int $numero, int $unidad) {
    $numeros = array();
    $cifra = $numero;
    while($numero!= 0){ 
        $numeros[] = $numero % 10;
        $numero = intval($numero/10); // intval convierte el resultado en entero
        }
        $contiene = array_search($unidad, $numeros); 
        if ($contiene !== false){
            return "La cifra " . $unidad . " está dentro de: " . $cifra;
        } else {
            return "La cifra $unidad no está dentro de $cifra";
        }
}

$resultado = buscarCifra($numero, $unidad);
echo $resultado;





/*if ($contiene2 !== false){
    echo "La cifra $unidad2 está dentro de: " . $numero;
} else {
    echo "La cifra $unidad2 no está dentro de $numero";
}*/
?>