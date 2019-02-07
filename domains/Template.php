<?php

require_once 'Identificacao.php';

class Template extends Identificacao {

    private $cliente;
    private $itens;

    function getCliente() : array{
        return $this->cliente;
    }

    function getItens() : array{
        return $this->itens;
    }

    function setCliente(Cliente $cliente) {
        $this->cliente[] = $cliente;
    }

    function setItens(Item $itens) {
        $this->itens[] = $itens;
    }

}
