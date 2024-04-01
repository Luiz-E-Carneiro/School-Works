<?php

final class SmartTV extends TV {

    private  $sistemaOperacional;

    public function __construct($marca, $polegadas, $sistemaOperacional){
        parent::__construct($marca, $polegadas);
        $this->sistemaOperacional = $sistemaOperacional;
    }

    public function setSistemaOperacional($sistemaOperacional){
        $this->sistemaOperacional = $sistemaOperacional;
    }

    public function getSistemaOperacional(){
        return $this->sistemaOperacional;
    }
}