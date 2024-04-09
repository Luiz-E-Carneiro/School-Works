<?php

final class Serie extends Obra{

    private $temporadas = [];

    public function __construct($nome, $personagem, $temporadas)
    {
        $this->nome = $nome;
        $this->personagem[] = $personagem;
        $this->temporadas[] = $temporadas;
    }

    public function getTemporadas(){
        return $this->temporadas;
    }
    public function addTemporada($temporada){
        $this->temporadas[] = $temporada;
    }
    public function obterNota() {
        $notas_soma = 0;
        foreach ($this->temporadas as $temps) {
            $notas_soma += $temps->getNota();
        }
        return ($notas_soma / count($this->temporadas));
    }
}