<?php

require_once 'Identificacao.php';

class Usuario extends Identificacao{

    private $senha;

    function getId() {
        return $this->id;
    }

    function getNome() {
        return $this->nome;
    }

    function getSenha() {
        return $this->senha;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setSenha($senha) {
        $this->senha = $senha;
    }

}
