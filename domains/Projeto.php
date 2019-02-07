<?php

require_once 'Identificacao.php';

class Projeto extends Identificacao {

    private $cliente;
    private $solicitante;
    private $desvios;
    private $itens;
    private $templates;

    function getCliente(): Cliente {
        return $this->cliente;
    }

    function getSolicitante() : Solicitante{
        return $this->solicitante;
    }

    function getDesvios() : float{
        return $this->desvios;
    }

    function getItens() : array{
        return $this->itens;
    }

    function getTemplates() : array{
        return $this->templates;
    }

    function setCliente(Cliente $cliente) {
        $this->cliente = $cliente;
    }

    function setSolicitante(Solicitante $solicitante) {
        $this->solicitante = $solicitante;
    }

    function setDesvios(float $desvios) {
        $this->desvios = $desvios;
    }

    function setItens(Item $item) {
        $this->itens[] = $item;
    }

    function setTemplates(Template $template) {
        $this->templates[] = $template;
    }

}
