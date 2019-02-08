<?php

require_once '../interfaces/IDAO.php';
require_once '../util/ConnectionFactory.php';
require_once '../domains/Solicitante.php';

class SolicitanteDAO implements IDAO {

    function __construct() {
        //$this->conn = ConnectionFactory::getMySQLConnection();
    }

    public function create($object) {
        
    }

    public function delete($object) {
        
    }

    public function read($object) {
        for ($i = 0; $i < 5; $i++) {
            $o = new Solicitante();
            $o->setId($i + 1);
            $o->setNivel("Solicitante Nível Fake " . ($i + 1));
            $list[] = $o;
        }
        return $list;
    }

    public function upDate($object) {
        
    }

}
