<?php

require_once 'Identificacao.php';

class Cliente extends Identificacao {

    private $logo;
    private $opcao;
    private $gestao;

    function getLogo() {
        return $this->logo;
    }

    function getOpcao() {
        return $this->opcao;
    }

    function getGestao() {
        return $this->gestao;
    }

    function setLogo($logo) {
        $this->logo = $logo;
    }

    function setOpcao($opcao) {
        $this->opcao = $opcao;
    }

    function setGestao($gestao) {
        $this->gestao = $gestao;
    }

}
