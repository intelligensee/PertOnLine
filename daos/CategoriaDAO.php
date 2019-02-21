<?php

session_start();
require_once '../interfaces/IDAO.php';
require_once '../util/ConnectionFactory.php';
require_once '../domains/Usuario.php';
require_once '../domains/Categoria.php';

class CategoriaDAO implements IDAO {

    private $conn;
    private $user;

    function __construct() {
        $this->conn = ConnectionFactory::getMySQLConnection();
        $this->user = $_SESSION['user'];
    }

    public function create($object) {
        $u = new Usuario();
        $u = $this->user;
        $o = new Categoria();
        $o = $object;
        $nome = $o->getNome();
        $descricao = $o->getDescricao();
        $criadoEm = $o->getCriadoEm()->format("y-m-d H:m:s");
        $criadoPor = $u->getId();
        $sql = "INSERT INTO categoria VALUES (0, ?, ?, ?, ?, null, null)";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(1, $nome);
        $stmt->bindParam(2, $descricao);
        $stmt->bindParam(3, $criadoEm);
        $stmt->bindParam(4, $criadoPor);
        $stmt->execute();
        return true;
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
