<?php

final class Serie extends Obra{

    private $temporada;

    public function __construct($temporada, $personagens)
    {
        $this->personagem = $personagens;
        $this->temporada = $temporada;
    }

    public function getTemporadas(){
        return $this->temporada;
    }
    public function addTemporada($temporada){
        $this->temporada[] = $temporada;
    }
    public function obterNota() {
        $arrayNotas = [];
        foreach ($this->temporada as $temps) {
            $arrayNotas[] = $temps->getNota();
        }
        return count($arrayNotas);
    }
}