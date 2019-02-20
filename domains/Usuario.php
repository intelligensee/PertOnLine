<?php

require_once 'Identificacao.php';

class Usuario extends Identificacao{

    private $senha = "";

    function getSenha() : string {
        return $this->senha;
    }

    function setSenha(string $senha) {
        $this->senha = $senha;
    }

}
