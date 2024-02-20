<?php
echo "Introduce una cifra" . PHP_EOL;
$numero = fgets(STDIN);
echo "Introduce una unidad" . PHP_EOL;
$unidad = fgets(STDIN);
$numeros = crearArray($numero);
$unidades = crearArrayUnidad($unidad);

function crearArray(int $numero) {

    $numeros = array();
    while($numero!= 0){ 
        $numeros[] = $numero % 10;
        $numero = intval($numero/10); // intval convierte el resultado en entero
        }
    return $numeros;  
}
function crearArrayUnidad(int $unidad){
    $unidades = array();
    while($unidad!= 0){ 
        $unidades[] = $unidad % 10;
        $unidad = intval($unidad/10); // intval convierte el resultado en entero
        }
    return $unidades;
}
function buscarCifra(array $numeros, array $unidades, int $numero, int $unidad) {

    

    
}
foreach ($unidades as $uni) {
    $contiene = array_search($uni, $numeros); 
 if ($contiene !== false){
     echo "La cifra " . $uni . " está dentro de: " . $numero . PHP_EOL;
  } else {
      echo "La cifra $uni no está dentro de $numero" . PHP_EOL;
 }

}

/*$resultado = buscarCifra($numeros, $unidades, $numero, $unidad);
echo $resultado;*/

?>