<?php
echo "Introduce una cifra" . PHP_EOL;
$numero = fgets(STDIN);
echo "Introduce una unidad" . PHP_EOL;
$unidad = fgets(STDIN);
$numeros = crearArray($numero, $unidad);

function crearArray(int $numero, int $unidad) {

    $numeros = array();
    while($numero!= 0){ 
        $numeros[] = $numero % 10;
        $numero = intval($numero/10); // intval convierte el resultado en entero
        }
    return $numeros;
    
}
function buscarCifra(array $numeros,int $numero, int $unidad) {
    
    $contiene = array_search($unidad, $numeros); 
     if ($contiene !== false){
         return "La cifra " . $unidad . " está dentro de: " . $numero;
      } else {
          return "La cifra $unidad no está dentro de $numero";
     }
}

$resultado = buscarCifra($numeros, $numero, $unidad);
echo $resultado;

?>