<?php

require_once '../interfaces/IDAO.php';
require_once '../util/ConnectionFactory.php';
require_once '../domains/Subcategoria.php';

class SubCategoriaDAO implements IDAO {

    private $conn;

    function __construct() {
        //$this->conn = ConnectionFactory::getMySQLConnection();
    }

    public function create($object) {
        
    }

    public function delete($object) {
        
    }

    public function read($object) {
        $o = new SubCategoria();
        $o->setId(1);
        $o->setNome("Mão de Obra");
        $list[] = $o;
        $o = new SubCategoria();
        $o->setId(2);
        $o->setNome("Viagem");
        $list[] = $o;
        return $list;
    }

    public function upDate($object) {
        
    }

}
