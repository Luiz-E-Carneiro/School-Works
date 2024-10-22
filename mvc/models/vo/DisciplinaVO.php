<?php

namespace Model\VO;

final class DisciplinaVO extends VO {

    private $nome;
    private $emenda;

    public function __construct($id = 0, $nome = "", $emenda = "") {
        parent::__construct($id);
        $this->nome = $nome;
        $this->emenda = $emenda;
    }

    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getEmenda() {
        return $this->emenda;
    }

    public function setEmenda($emenda) {
        $this->emenda = $emenda;
    }

}