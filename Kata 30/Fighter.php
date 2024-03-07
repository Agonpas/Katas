<?php
class Fighter {
    private string $name;
    private int $live;
    private int $strength;
    private int $defense;
    
    public function __construct(string $name, int $strength, int $defense) {
        $this->name = $name;
        $this->live = 10;
        $this->strength = $strength;
        $this->defense = $defense;
    }
    public function __toString(){
        return "Nombre: $this->name" . PHP_EOL . "Vida: $this->live" . "Fuerza: $this->strength" . "Defensa: $this->defense";
    }
}
?>