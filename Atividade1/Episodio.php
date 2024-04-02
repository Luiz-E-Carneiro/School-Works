<?php

class Episodio 
implements Midia{

    private $nome;
    private $numero;
    private $duracao;


    public function __construct($nome, $numero, $duracao)
    {
        $this->nome = $nome;
        $this->numero = $numero;
        $this->duracao = $duracao;
    }

    public function getNome(){
        return $this->nome;
    }
    public function setNome($nome){
        $this->nome = $nome;
    }
    public function getNumero(){
        return $this->numero;
    }
    public function setNumero($numero){
        $this->numero = $numero;
    }
    public function getDuracao(){
        return $this->duracao;
    }
    public function setDuracao($duracao) {
        $this->duracao = $duracao;
    }
}