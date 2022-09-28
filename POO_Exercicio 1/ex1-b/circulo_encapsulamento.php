<?php
class  Circulo_encapsulamento {
    private $centroX;
    private $centroY;
    private $raio;

    public function setCentroX($centroX){
        $this->centroX = $centroX;
    }

    public function getCentroX(){
        return $this->centroX;
    }

    public function setCentroY($centroY){
        $this->centroY = $centroY;
    }

    public function getCentroY(){
        return $this->centroY;
    }

    public function setRaio($raio){
        $this->raio = $raio;
    }
    
    public function getRaio(){
        return $this->raio;  
    }
}
?>