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
    private function verificarRecursos(array $costo): bool {
        foreach ($costo as $recurso => $cantidad) {
            if (!isset($this->materiales[$recurso]) || $this->materiales[$recurso] < $cantidad) {
                return false;
            }
        }
        return true;
    }
    private function realizarCompra(array $costo, string $tipoCompra): void {
        foreach ($costo as $recurso => $cantidad) {
            $this->materiales[$recurso] -= $cantidad;
        }

        if (isset($this->compras[$tipoCompra])) {
            $this->compras[$tipoCompra]++;
        } else {
            $this->compras[$tipoCompra] = 1;
        }
    }
    public function comprarCamino() {
        $costo = ['madera' => 1, 'arcilla' => 1];
        if ($this->verificarRecursos($costo)) {
            $this->realizarCompra($costo, 'camino');
            echo "Se ha realizado la compra correctamente" . PHP_EOL;
        } else {
            echo "No tienes materiales suficentes para un camino" . PHP_EOL;
        }
    }
}
?>