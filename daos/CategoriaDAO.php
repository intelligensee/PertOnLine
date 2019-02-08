<?php

require_once '../interfaces/IDAO.php';
require_once '../util/ConnectionFactory.php';
require_once '../domains/Categoria.php';

class CategoriaDAO implements IDAO {

    private $conn;

    function __construct() {
        //$this->conn = ConnectionFactory::getMySQLConnection();
    }

    public function create($object) {
        
    }

    public function delete($object) {
        
    }

    public function read($object) {
        $o = new Categoria();
        $o->setId(1);
        $o->setNome("CAPEX");
        $list[] = $o;
        $o = new Categoria();
        $o->setId(2);
        $o->setNome("OPEX");
        $list[] = $o;
        return $list;
    }

    public function upDate($object) {
        
    }

}
