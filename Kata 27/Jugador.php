<?php
class Jugador{
    private string $nombre;
    private array $materiales;
    private array $compras;

    public function __construct(string $nombre, array $materiales) {
        $this->nombre = $nombre; // nombre del jugador
        $this->materiales = $materiales; // array para los materiales y las cantidades
        $this->compras = []; // array para almacenar las compras
    }
    /*Función para verificar si tenemos materiales para hacer la compra*/
    private function verificarMateriales(array $costo): bool { // la función recibe el array $costo (precio de la compra)
        foreach ($costo as $material => $cantidad) { //recorremos array para ver el material y la cantidad requerida
            if (!isset($this->materiales[$material]) || $this->materiales[$material] < $cantidad) { // en el caso de que el material no exista o la cantidad sea menor que la requerida 
                return false; // devolvemos false
            }
        }
        return true; // si ninguna de las 2 condiciones se han cumplido podemos efectuar la compra 
    }
    /*Función para descontar los materiales una vez efectuada la compra*/
    private function realizarCompra(array $costo, string $tipoCompra): void { // la función recibe el array $costo (precio de la compra) y el nombre del elemento comprado
        foreach ($costo as $material => $cantidad) { // recorremos el array de costos para extraer el material y la cantidad
            $this->materiales[$material] -= $cantidad; // restamos el material 
        }
        /* ahora añadimos el elemento comprado al array de compras*/
        if (isset($this->compras[$tipoCompra])) { //verificamos si el tipo de compra existe
            $this->compras[$tipoCompra]++; // si existe añadimos 1 al tipo de compra en el array compras
        } else {
            $this->compras[$tipoCompra] = 1; // en el caso de no existir la compra la creamos la añadimos el array y le damos la cantidad de 1
        }
    }
    /* funcion para comprar camino*/
    public function comprarCamino() {
        $costo = ['madera' => 1, 'arcilla' => 1]; // creamos array costo con los materiales y la cantidad necesario para la compra de un camino
        if ($this->verificarMateriales($costo)) { // usamos la funciónn para ver si tenemos los materiales necesarios
            $this->realizarCompra($costo, 'camino'); // en el caso de cumplir la condición realizamos la compra
            echo "Se ha realizado la compra correctamente" . PHP_EOL; // comunicamos que la compra se ha realizado
        } else {
            echo "No tienes materiales suficentes para un camino" . PHP_EOL; // informamos en el caso de no tener los materiales para realizar la compra
        }
    }
    /*creamos una función para ver los materiales que disponemos*/
    public function verMateriales() {
        echo "Materiales de $this->nombre:" . PHP_EOL;
        foreach ($this->materiales as $material => $cantidad) {
            echo "$material: $cantidad" . PHP_EOL;
        }
    }
    public function verCompras() {
        echo "Las compras de $this->nombre:" . PHP_EOL;
        foreach ($this->compras as $compra => $cantidad) {
            echo "$compra: $cantidad" . PHP_EOL;
        }
    }
}
?>