<?php

require_once '../interfaces/IDAO.php';
require_once '../util/ConnectionFactory.php';
require_once '../domains/Moeda.php';

class MoedaDAO implements IDAO {

    private $conn;

    function __construct() {
        //$this->conn = ConnectionFactory::getMySQLConnection();
    }

    public function create($object) {
        
    }

    public function delete($object) {
        
    }

    public function read($object) {
        $o = new Moeda();
        $o->setId(1);
        $o->setNome("Reais");
        $o->setSimbolo("R$");
        $list[] = $o;
        $o = new Moeda();
        $o->setId(2);
        $o->setNome("Dólar");
        $o->setSimbolo("US$");
        $list[] = $o;
        return $list;
    }

    public function upDate($object) {
        
    }

}
