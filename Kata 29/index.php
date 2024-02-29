<?php
echo "Introduce una cifra" . PHP_EOL;
$numero = (int) fgets(STDIN); 
/*
function restar(int $numero): int {
    return $numero - 1;
}

function imprimir($numero): int {
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
        echo $numero . ", ";
        recursiva($numero - 1);
    }
    
}
recursiva($numero);
?>
