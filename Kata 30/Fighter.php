<?php
class Fighter
{
    private string $name;
    private int $live;
    private int $strength;
    private int $defense;

    public function __construct(string $name, int $strength, int $defense)
    {
        $this->name = $name;
        $this->live = 10;
        $this->strength = $strength;
        $this->defense = $defense;
    }
    public function __toString()
    {
        return "Nombre: $this->name" . PHP_EOL . "Vida: $this->live" . PHP_EOL . "Fuerza: $this->strength" . PHP_EOL . "Defensa: $this->defense" . PHP_EOL;
    }
    //getters
    public function getName()
    {
        return $this->name;
    }
    public function getLive()
    {
        return $this->live;
    }
    public function getStrength()
    {
        return $this->strength;
    }
    public function getDefense()
    {
        return $this->defense;
    }
    public function setLive(int $live)
    {
        $this->live = $live;
    }
}
?>