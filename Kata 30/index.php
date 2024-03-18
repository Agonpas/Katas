<?php
include_once 'Fighter.php';

$fighter1 = new Fighter("Conan", 5, 5);
$fighter2 = new Fighter("He-Man", 5, 4);
$defensor = null;
$atacante = null;
$damage = 0;

echo $fighter1;
echo $fighter2;

function establecerIniciativa(Fighter $fighter1, Fighter $fighter2, &$defensor, &$atacante) {
    if ($fighter1->getStrength() === $fighter2->getStrength()){
        $iniciativa = rand(1,2);
        if ($iniciativa == 1) {
            $defensor = $fighter2;
            $atacante = $fighter1;
            return $fighter1->getName() . " Pega primero" . PHP_EOL;
        } else {
            $defensor = $fighter1;
            $atacante = $fighter2;         
            return $fighter2->getName() . " Pega primero" . PHP_EOL;
        }
    } elseif ($fighter1->getStrength() > $fighter2->getStrength()) {
        $iniciativa = rand(1,10);
        if ($iniciativa <= 3) {
            $defensor = $fighter1;
            $atacante = $fighter2;
            return $fighter2->getName() . " Pega primero" . PHP_EOL;
        }  else {          
            $defensor = $fighter2;
            $atacante = $fighter1;
            return $fighter1->getName() . " Pega primero" . PHP_EOL;
        }
    } else {
        $iniciativa = rand(1,10);
        if ($iniciativa <= 3) {
            $defensor = $fighter2;
            $atacante = $fighter1;
            return $fighter1->getName() . " Pega primero" . PHP_EOL;
        }  else {
            $defensor = $fighter1;
            $atacante = $fighter2;
            return $fighter2->getName() . " Pega primero" . PHP_EOL;
        }
    }
}

function ataque(Fighter $atacante, Fighter $defensor, &$damage){
    $damage = $atacante->getStrength() - $defensor->getDefense();
    if ($damage <= 0) {
        $damage = 1;
    }
    $defensor->setLive($defensor->getLive() - $damage);
}

function battle(Fighter $atacante, Fighter $defensor, &$damage){
    $ronda = 1;
    while ($atacante->getLive() > 0 && $defensor->getLive() > 0) {
        echo "ROUND " . $ronda . PHP_EOL;
        echo establecerIniciativa($atacante, $defensor, $defensor, $atacante);
        ataque($atacante, $defensor, $damage);
        echo "{$atacante->getName()} ataca a {$defensor->getName()} y causa $damage puntos de daño." . PHP_EOL;
        echo PHP_EOL;
        echo $atacante;
        echo PHP_EOL;
        echo $defensor;
        echo PHP_EOL;

        $ronda++;
    }
    if ($atacante->getLive() <= 0) {
        echo "{$defensor->getName()} es el ganador!" . PHP_EOL;
    } elseif ($defensor->getLive() <= 0) {
        echo "{$atacante->getName()} es el ganador!" . PHP_EOL;
    }
     echo "La batalla ha terminado." . PHP_EOL;
    
}

battle($fighter1, $fighter2, $damage);
?>
