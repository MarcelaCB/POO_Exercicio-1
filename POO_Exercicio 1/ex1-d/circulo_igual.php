<?php
class Circulo_igual {
    private $centroX;
    private $centroY;
    private $raio;

    public function __construct(float $x = 0, float $y = 0, float $raio = 0) {
        $this->centroX = $x;
        $this->centroY = $y;
        $this->raio = $raio;
    }
 
    public function setCentroX($centroX) {
        $this->centroX = $centroX;
    }

    public function getCentroX() {
        return $this->centroX;
    }

    public function setCentroY($centroY) {
        $this->centroY = $centroY;
    }

    public function getCentroY() {
        return $this->centroY;
    }

    public function setRaio($raio) {
        $this->raio = $raio;
    }

    public function getRaio() {
        return $this->raio;
    }

    public function comparaCirculo(Circulo_igual $circulo) {
        return $circulo->getCentroX() === $this->centroX && $circulo->getCentroY() === $this->centroY && $circulo->getRaio() === $this->raio ? "True" : "False";
    }
}
?>