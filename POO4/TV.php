<?php

class TV
{
    
    protected $marca;
    protected $polegadas;
    protected $ligada = false;
    protected $canal = 12;
    protected $volume = 10;


    public function __construct($marca, $polegadas) {
        $this->marca = $marca;
        $this->polegadas = $polegadas;
    }

    public function setMarca($marca){
        $this-> marca= $marca;
    }
    public function getMarca($marca){
        return $this->marca;
    }
    public function setPolegadas($polegadas){
        $this->polegadas= $polegadas;
    }
    public function getCanal($canal){
        $this->canal= $canal;
    }
    public function getVolume($volume){
        return $this->volume;
    }
    public function isLigada(){
        return $this->ligada;
    }
    public function ligar(){
        $this->ligada= true;
    }
    public function desligar(){
        $this->ligada= false;
    }
    public function aumentarVolume($volume){
        $this->volume= $volume;
    }
    public function diminuirVolume($volume){
        $this->volume= $volume;
    }
    public function trocarCanal($canal){
        $this->canal= $canal;
    }
}
