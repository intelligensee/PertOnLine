<?php

require_once '../interfaces/IDAO.php';
require_once '../util/ConnectionFactory.php';
require_once '../domains/Pagamento.php';

class PagamentoDAO implements IDAO {

    private $conn;

    function __construct() {
        //$this->conn = ConnectionFactory::getMySQLConnection();
    }

    public function create($object) {
        
    }

    public function delete($object) {
        
    }

    public function read($object) {
        $o = new Pagamento();
        $o->setId(1);
        $o->setNome("Mensal");
        $list[] = $o;
        $o = new Pagamento();
        $o->setId(2);
        $o->setNome("Anual");
        $list[] = $o;
        return $list;
    }

    public function upDate($object) {
        
    }

}
