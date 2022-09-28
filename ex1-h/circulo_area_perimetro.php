<?php
class Circulo_area_perimetro {
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

    public function calcularArea() {
        return pi() * ($this->getRaio() * $this->getRaio());
    }

    public function perimetro() {
        return 2 * pi() * $this->getRaio();
    }
}
?>