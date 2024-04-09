<?php

abstract class Obra {

    protected $nome;
    protected $personagem = [];

    public function __construct($nome, $personagem)
    {
        $this->nome = $nome;
        $this->personagem[] = $personagem;
    }

    public function getNome(){
        return $this->nome;
    }
    public function setNome($nome){
        $this->nome = $nome;
    }
    public function getPersonagens(){
        return $this->personagem;
    }
    public function addPersonagem($personagem){
        $this->personagem[] = $personagem;
    }
    public function obterProtagonista() {
        $arrayProtagonistas = [];
        foreach ($this->personagem as $person) {
            if($person->isProtagonista()){
                $arrayProtagonistas[] = $person;
            }
        }
        return $arrayProtagonistas;
    }
    abstract function obterNota();

}