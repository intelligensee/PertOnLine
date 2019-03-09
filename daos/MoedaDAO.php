<?php

//session_start();
require_once '../interfaces/IDAO.php';
require_once '../util/ConnectionFactory.php';
require_once '../domains/Usuario.php';
require_once '../domains/Moeda.php';

class MoedaDAO implements IDAO {

    private $conn;
    private $user;

    function __construct() {
        $this->conn = ConnectionFactory::getMySQLConnection();
        $this->user = $_SESSION['user'];
    }

    public function create($object) {
        $u = new Usuario();
        $u = $this->user;
        $o = new Moeda();
        $o = $object;
        $nome = $o->getNome();
        $descricao = $o->getDescricao();
        $criadoEm = $o->getCriadoEm()->format("y-m-d H:m:s");
        $criadoPor = $u->getId();
        $simbolo = $o->getSimbolo();
        $cotacao = $o->getCotacao();
        $sql = "INSERT INTO moeda VALUES (0, ?, ?, ?, ?, null, null, ?, ?, 1)";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(1, $nome);
        $stmt->bindParam(2, $descricao);
        $stmt->bindParam(3, $criadoEm);
        $stmt->bindParam(4, $criadoPor);
        $stmt->bindParam(5, $simbolo);
        $stmt->bindParam(6, $cotacao);
        $stmt->execute();
        return true;
    }

    public function delete($object) {
        
    }

    public function read($object) {
        $o = new Moeda();
        $o = $object;
        $id = $o->getId();
        $nome = $o->getNome();
        $first = true;
        $sql = "SELECT * FROM moeda JOIN usuario ON (criadoPor = idUsuario)";
        if ($id != 0 || !empty($nome)) {
            $sql .= " WHERE";
            if ($id != 0) {
                $sql .= " idMoeda = " . $id;
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
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        $rs = $stmt->fetchAll(PDO::FETCH_ASSOC);
        foreach ($rs as $obj) {
            $o = new Moeda();
            $o->setId($obj["idMoeda"]);
            $o->setNome($obj["nome"]);
            $o->setDescricao($obj["descricao"]);
            $data = new DateTime($obj["criadoEm"], new DateTimeZone("America/Sao_Paulo"));
            $o->setCriadoEm($data);
            $u = new Usuario();
            $u->setId($obj["idUsuario"]);
            $u->setNome($obj["nomeUsuario"]);
            $o->setCriadoPor($u);
            $o->setSimbolo($obj["simbolo"]);
            $o->setCotacao($obj["cotacao"]);
            $list[] = $o;
        }
        return $list;
    }

    public function upDate($object) {
        
    }

}
