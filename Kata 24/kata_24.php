<?php
/* rellenamos los arrays con los alumnos*/
$masterClass = array ("Leidy Zhang", "Ricardo Dellazari", "Toni Muñoz", "Carles Ruiz");
$shortCut = array ("Leidy Zhang", "Ricardo Dellazari", "Toni Muñoz", "Carles Ruiz");

/*Cremaos función para elegir alumno para la masterclass*/
function elegirMasterClass(array &$masterClass) {
     $indiceMaster = array_rand($masterClass);
     return $indiceMaster;
  
}
/*Cremaos función para elegir alumno para la masterclass*/
function elegirShortCut(array $shortCut, int $indiceMaster) {
    /* con el do while buscamos que el alumno no haga 2 presentaciones la misma semana*/
     do {
         $indiceShort = array_rand($shortCut);
    } while ($indiceShort == $indiceMaster);
    return $indiceShort;
    
}
$contador = 0; // contador para ideentificar la semana que debe presentar cada alumno
while (!empty($masterClass) & !empty($shortCut)) { //mientras no se vacien los arrays
    
    $indiceMaster = elegirMasterClass($masterClass);// elegiremos un alumno para la master
    $indiceShort = elegirShortCut($shortCut, $indiceMaster);// elegiremos otro alumno para el shortcut
    ++$contador; //suma al contador de la semana
    /* mostramos el listado de las presentaciones*/
    echo "El alumno que debe hacer la masterclass la semana " . $contador . " es: " . $masterClass[$indiceMaster] . PHP_EOL;
    echo "El alumno que debe mostrar el shortcut la semana " . $contador . " es: " . $shortCut[$indiceShort] . PHP_EOL;
    unset($masterClass[$indiceMaster]); // en cada iteración borramos el alumno que ha presentado el master
    unset($shortCut[$indiceShort]); // en cada iteración borramos el alumno que ha presentado el master
}

?>