<?php

require_once 'Identificacao.php';

class Solicitante extends Identificacao {

    private $nivel;

    function getNivel() : string{
        return $this->nivel;
    }

    function setNivel(string $nivel) {
        $this->nivel = $nivel;
    }

}
