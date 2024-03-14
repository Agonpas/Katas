<?php 
$cifint = 10;
$suma = 0;
$suma2 = 0;
for ($i = 1; $i <= $cifint; $i++) {
    echo "Introduce la cifra " . $i . " entre 1 y 9" . PHP_EOL;
    $numero = (int) fgets(STDIN); 
    $suma = $suma + $numero;
    echo "actualmente tu suma para el código está en " . $suma . PHP_EOL;
}
if ($suma == 67) {
    echo "Felicidades has activado el primer freno" . PHP_EOL;
} else {
    echo "Lo siento has muerto" . PHP_EOL;
}
if ($suma == 67) {
    for ($z = 1; $z <= $cifint; $z++) {
        echo "Introduce la cifra " . $i . " entre 1 y 9" . PHP_EOL;
        $numero = (int) fgets(STDIN); 
        $suma2 = $suma2 + $numero;
        //echo "actualmente tu suma para el código está en " . $suma . PHP_EOL;
    }
}
if ($suma2 == 81) {
    echo "Felicidades has activado el segundo freno" . PHP_EOL;
} else {
    echo "Lo siento has muerto" . PHP_EOL;
}