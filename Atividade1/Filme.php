<?php

final class Filme extends Obra implements Midia{

    private $duracao;
    private $nota;
    private $genero;

    public function __construct($duracao, $nota, $genero)
    {
        $this->duracao = $duracao;
        $this->nota = $nota;
        $this->genero = $genero;
    }

    public function getDuracao(){
        return $this->duracao;
    }
    public function setDuracao($duracao){
        $this->duracao = $duracao;
    }
    public function getNota(){
        return $this->nota;
    }
    public function setNota($nota){
        $this->nota = $nota;
    }
    public function getGenero(){
        return $this->genero;
    }
    public function setGenero($genero){
        $this->genero = $genero;
    }    
    public function obterNota() {
        return $this->nota;
    }
}