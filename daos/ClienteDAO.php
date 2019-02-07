<?php

require_once '../interfaces/IDAO.php';
require_once '../util/ConnectionFactory.php';
require_once '../domains/Cliente.php';

class ClienteDAO implements IDAO {

    private $conn;

    function __construct() {
        $this->conn = ConnectionFactory::getMySQLConnection();
    }

    public function create($object) {
        $o = new Cliente();
        $o = $object;
        $nome = $o->getNome();
        $sql = "INSERT INTO clientes VALUES (0, ?)";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(1, $nome);
        $stmt->execute();
        return true;
    }

    public function delete($object) {
        
    }

    public function read($o) {
        /*
          $o = new Cliente();
          $o = $object;
          $sql = "SELECT * FROM clientes";
          $stmt = $this->conn->prepare($sql);
          $stmt->execute();
          $rs = $stmt->fetchAll(PDO::FETCH_ASSOC);
          foreach ($rs as $obj) {
          $o = new Cliente();
          $o->setId($obj["id"]);
          $o->setNome($obj["nome"]);
          $list[] = $o;
          }
          return $list;
         * 
         */
        for ($i = 0; $i < 5; $i++) {
            $o = new Cliente();
            $o->setId($i + 1);
            $o->setNome("Cliente Fake " . ($i + 1));
            $list[] = $o;
        }
        return $list;
    }

    public function upDate($object) {
        
    }

}
