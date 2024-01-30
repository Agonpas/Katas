<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Resultado Sorteo</title>
</head>
<body>
    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $jsonAlumnos = file_get_contents('C:\Users\agonp\Documents\Programación\Especialización\Archivos\alumnos.json'); //esto convierte el archivo json en un string
        $alumnos = json_decode($jsonAlumnos, true); //esto decodifica el string y lo convierte en un array asociativo
    
        /*reducimos el array*/
        $alumnosReduccion = array ();
        foreach ($alumnos["alumnes"] as $alumno) {
            $nombreApellido = $alumno["nom"] . " " . $alumno["cognom"];
            $alumnosReduccion[] = $nombreApellido;
        }
        //var_dump($alumnosReduccion);
        /* rellenamos los arrays con los alumnos*/
        $masterClass = $alumnosReduccion;
        $shortCut = $alumnosReduccion;
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
        echo "    <h1>Resultados del Sorteo</h1>\n";
        $contador = 0; // contador para ideentificar la semana que debe presentar cada alumno
        while (!empty($masterClass) & !empty($shortCut)) { //mientras no se vacien los arrays
            
            $indiceMaster = elegirMasterClass($masterClass);// elegiremos un alumno para la master
            $indiceShort = elegirShortCut($shortCut, $indiceMaster);// elegiremos otro alumno para el shortcut
            ++$contador; //suma al contador de la semana
            /* mostramos el listado de las presentaciones*/
            echo "    <p>El alumno que debe hacer la masterclass la semana " . $contador . " es: " . $masterClass[$indiceMaster] . "</p>\n";
            echo "    <p>El alumno que debe mostrar el shortcut la semana " . $contador . " es: " . $shortCut[$indiceShort] . "</p>\n";
            unset($masterClass[$indiceMaster]); // en cada iteración borramos el alumno que ha presentado la master
            unset($shortCut[$indiceShort]); // en cada iteración borramos el alumno que ha presentado el shortcut
        }
        
    }
    ?>
    <a href="index.html">
        <button>Volver</button>
    </a>
</body>
</html>


