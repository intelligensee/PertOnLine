<?php

require_once 'Identificacao.php';

class Marca extends Identificacao {

    private $linhasTitulos;
    private $linhasTabelas;
    private $colunasTabelas;
    private $fontesTitulos;
    private $fontesDados;
    private $totais;

    function getLinhasTitulos() : string {
        return $this->linhasTitulos;
    }

    function getLinhasTabelas() : string{
        return $this->linhasTabelas;
    }

    function getColunasTabelas() : string{
        return $this->colunasTabelas;
    }

    function getFontesTitulos() : string{
        return $this->fontesTitulos;
    }

    function getFontesDados() : string{
        return $this->fontesDados;
    }

    function getTotais() : string{
        return $this->totais;
    }

    function setLinhasTitulos(string $linhasTitulos) {
        $this->linhasTitulos = $linhasTitulos;
    }

    function setLinhasTabelas(string $linhasTabelas) {
        $this->linhasTabelas = $linhasTabelas;
    }

    function setColunasTabelas(string $colunasTabelas) {
        $this->colunasTabelas = $colunasTabelas;
    }

    function setFontesTitulos(string $fontesTitulos) {
        $this->fontesTitulos = $fontesTitulos;
    }

    function setFontesDados(string $fontesDados) {
        $this->fontesDados = $fontesDados;
    }

    function setTotais(string $totais) {
        $this->totais = $totais;
    }

}
