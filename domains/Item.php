<?php

require_once 'Identificacao.php';
require_once '../domains/Moeda.php';

class Item extends Identificacao {

    private $otimista;
    private $maisProvavel;
    private $pessimista;
    private $qtdDesvios;
    private $valorUnitario;
    private $categoria;
    private $subCategoria;
    private $moeda;
    private $pagamento;
    private $equipe;

    function getOtimista(): float {
        return $this->otimista;
    }

    function getMaisProvavel(): float {
        return $this->maisProvavel;
    }

    function getPessimista(): float {
        return $this->pessimista;
    }

    function getPert(): float {
        $o = $this->otimista;
        $m = $this->maisProvavel;
        $p = $this->pessimista;
        return ($o + 4 * $m + $p)/6;
    }

    function getDesvio(): float {
        $o = $this->otimista;
        $p = $this->pessimista;
        return ($p - $o) / 6;
    }

    function getQtdDesvios(): float {
        return $this->qtdDesvios;
    }

    function getValorUnitario(): float {
        return $this->valorUnitario;
    }

    function getTotal(): float {
        $total = $this->getPert() + $this->getDesvio();
        $cotacao = $this->getMoeda()->getCotacao();
        $total = $total * $this->valorUnitario * $cotacao;
        return $total;
    }

    function getCategoria() : Categoria {
        return $this->categoria;
    }

    function getSubCategoria() : Subcategoria{
        return $this->subCategoria;
    }

    function getMoeda() : Moeda{
        return $this->moeda;
    }

    function getPagamento() : Pagamento{
        return $this->pagamento;
    }

    function getEquipe() : Equipe{
        return $this->equipe;
    }

    function setOtimista(float $otimista) {
        $this->otimista = $otimista;
    }

    function setMaisProvavel(float $maisProvavel) {
        $this->maisProvavel = $maisProvavel;
    }

    function setPessimista(float $pessimista) {
        $this->pessimista = $pessimista;
    }

    function setQtdDesvios(float $qtdDesvios) {
        $this->qtdDesvios = $qtdDesvios;
    }

    function setValorUnitario(float $valorUnitario) {
        $this->valorUnitario = $valorUnitario;
    }

    function setCategoria(Categoria $categoria) {
        $this->categoria = $categoria;
    }

    function setSubCategoria(Subcategoria $subCategoria) {
        $this->subCategoria = $subCategoria;
    }

    function setMoeda(Moeda $moeda) {
        $this->moeda = $moeda;
    }

    function setPagamento(Pagamento $pagamento) {
        $this->pagamento = $pagamento;
    }

    function setEquipe(Equipe $equipe) {
        $this->equipe = $equipe;
    }

}
