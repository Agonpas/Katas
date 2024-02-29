<?php
echo "Introduce una cifra" . PHP_EOL;
$numero = (int) fgets(STDIN); 
/*
function restar(int $numero) {
    return $numero - 1;
}

function imprimir($numero) {
    while ($numero != 0) {
        echo $numero . PHP_EOL;  
        $numero = restar($numero);  
    }
}


$numero = restar($numero);
imprimir($numero);
*/
function recursiva(int $numero){
    if ($numero >= 0) {
        echo $numero . PHP_EOL;
    }
    recursiva($numero - 1);
}
recursiva($numero);
?>
