<?php

require_once 'Identificacao.php';
require_once 'Marca.php';

class Cliente extends Identificacao {

    private $logo;
    private $opcao;
    private $gestao;
    private $marca;

    function getLogo() : string{
        return $this->logo;
    }

    function getOpcao() : bool{
        return $this->opcao;
    }

    function getGestao() : string{
        return $this->gestao;
    }

    function getMarca(): Marca {
        return $this->marca;
    }

    function setLogo(string $logo) {
        $this->logo = $logo;
    }

    function setOpcao(bool $opcao) {
        $this->opcao = $opcao;
    }

    function setGestao(string $gestao) {
        $this->gestao = $gestao;
    }

    function setMarca(Marca $marca) {
        $this->marca = $marca;
    }

}
