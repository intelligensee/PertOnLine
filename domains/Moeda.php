<?php

require_once 'Identificacao.php';

class Moeda extends Identificacao {

    private $simbolo;

    function getSimbolo() : string{
        return $this->simbolo;
    }

    function setSimbolo(string $simbolo) {
        $this->simbolo = $simbolo;
    }

}
