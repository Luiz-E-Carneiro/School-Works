<?php

class sistemaOperacional 
{
    private $nome;

    public function __construct($nome){
        $this->nome= $nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }
    public function getNome() {
        return $this->nome;
    }
}   