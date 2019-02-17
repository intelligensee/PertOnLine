<?php

require_once '../interfaces/IDAO.php';
require_once '../util/ConnectionFactory.php';
require_once '../domains/Item.php';

class ItemDAO implements IDAO {

    private $conn;
    private $itensFake;

    function __construct() {
        //$this->conn = ConnectionFactory::getMySQLConnection();
        $this->criaItensFake();
    }

    private function criaItensFake() {
        require_once '../domains/Categoria.php';
        require_once '../domains/SubCategoria.php';
        require_once '../domains/Moeda.php';
        require_once '../domains/Pagamento.php';
        //primeiro item
        $c = new Categoria();
        $s = new Subcategoria();
        $m = new Moeda();
        $p = new Pagamento();
        $i = new Item();
        $c->setNome("CAPEX");
        $s->setNome("Aquisição de reposiçao");
        $p->setNome("Uma vez");
        $m->setNome("Dólar");
        $m->setSimbolo("US$");
        $m->setCotacao(4);
        $i->setId(1);
        $i->setNome("Máquina virtual");
        $i->setValorUnitario(100);
        $i->setOtimista(1);
        $i->setMaisProvavel(1);
        $i->setPessimista(1);
        $i->setCategoria($c);
        $i->setSubCategoria($s);
        $i->setMoeda($m);
        $i->setPagamento($p);
        $i->getPert();
        $i->getDesvio();
        $i->getTotal();
        $this->itensFake[] = $i;
        //segundo item
        $c = new Categoria();
        $s = new Subcategoria();
        $m = new Moeda();
        $p = new Pagamento();
        $i = new Item();
        $c->setNome("CAPEX");
        $s->setNome("Mão de Obra");
        $p->setNome("Uma vez");
        $m->setNome("Real");
        $m->setSimbolo("R$");
        $m->setCotacao(1);
        $i->setId(2);
        $i->setNome("Configuração de máquina virtual");
        $i->setValorUnitario(100);
        $i->setOtimista(1.5);
        $i->setMaisProvavel(3);
        $i->setPessimista(5.5);
        $i->setCategoria($c);
        $i->setSubCategoria($s);
        $i->setMoeda($m);
        $i->setPagamento($p);
        $i->getPert();
        $i->getDesvio();
        $i->getTotal();
        $this->itensFake[] = $i;
    }

    public function create($object) {
        
    }

    public function delete($object) {
        
    }

    public function read($object) {
        return $this->itensFake;
    }

    public function upDate($object) {
        
    }

}
