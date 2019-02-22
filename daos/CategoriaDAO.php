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
        $sql = "INSERT INTO categoria VALUES (0, ?, ?, ?, ?, null, null, 1)";
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
        $o = $object;
        $id = $o->getId();
        $nome = $o->getNome();
        $first = true;
        $sql = "SELECT * FROM categoria JOIN usuario ON (criadoPor = idUsuario)";
        if ($id != 0 || !empty($nome) || !empty($senha)) {
            $sql .= " WHERE";
            if ($id != 0) {
                $sql .= " idCategoria = " . $id;
                $first = false;
            }
            if(!empty($nome)){
                if(!$first){
                    $sql .= " AND";
                }
                $sql .= " nome = '" .$nome . "'";
                $first = false;
            }
        }
        echo $sql;
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        $rs = $stmt->fetchAll(PDO::FETCH_ASSOC);
        foreach ($rs as $obj) {
            $o = new Categoria();
            $o->setId($obj["idCategoria"]);
            $o->setNome($obj["nome"]);
            $o->setDescricao($obj["descricao"]);
            $data = new DateTime($obj["criadoEm"], new DateTimeZone("America/Sao_Paulo"));
            $o->setCriadoEm($data);
            $u = new Usuario();
            $u->setId($obj["idUsuario"]);
            $u->setNome($obj["nomeUsuario"]);
            $o->setCriadoPor($u);
            $list[] = $o;
        }
        return $list;
    }

    public function upDate($object) {
        
    }

}
