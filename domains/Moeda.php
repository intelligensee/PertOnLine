<?php

require_once 'Identificacao.php';

class Moeda extends Identificacao {

    private $simbolo;
    private $cotacao;

    function getSimbolo(): string {
        return $this->simbolo;
    }

    function getCotacao() : float {
        return $this->cotacao;
    }

    function setSimbolo(string $simbolo) {
        $this->simbolo = $simbolo;
    }

    function setCotacao(float $cotacao) {
        $this->cotacao = $cotacao;
    }

}
