<?php

session_start();
require_once '../interfaces/IDAO.php';
require_once '../util/ConnectionFactory.php';
require_once '../domains/Usuario.php';
require_once '../domains/Equipe.php';

class EquipeDAO implements IDAO {

    private $conn;
    private $user;

    function __construct() {
        $this->conn = ConnectionFactory::getMySQLConnection();
        $this->user = $_SESSION['user'];
    }

    public function create($object) {
        $u = new Usuario();
        $u = $this->user;
        $o = new Equipe();
        $o = $object;
        $nome = $o->getNome();
        $descricao = $o->getDescricao();
        $criadoEm = $o->getCriadoEm()->format("y-m-d H:m:s");
        $criadoPor = $u->getId();
        $sql = "INSERT INTO equipe VALUES (0, ?, ?, ?, ?, null, null, 1)";
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
        $o = new Equipe();
        $o = $object;
        $id = $o->getId();
        $nome = $o->getNome();
        $first = true;
        $sql = "SELECT * FROM equipe JOIN usuario ON (criadoPor = idUsuario)";
        if ($id != 0 || !empty($nome)) {
            $sql .= " WHERE";
            if ($id != 0) {
                $sql .= " idEquipe = " . $id;
                $first = false;
            }
            if (!empty($nome)) {
                if (!$first) {
                    $sql .= " AND";
                }
                $sql .= " nome = '" . $nome . "'";
                $first = false;
            }
        }
        echo $sql;
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        $rs = $stmt->fetchAll(PDO::FETCH_ASSOC);
        foreach ($rs as $obj) {
            $o = new Equipe();
            $o->setId($obj["idEquipe"]);
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
        $u = new Usuario();
        $u = $this->user;
        $o = new Equipe();
        $o = $object;
        $id = $o->getId();
        $nome = $o->getNome();
        $descricao = $o->getDescricao();
        $modificadoEm = $o->getModificadoEm()->format("y-m-d H:m:s");
        $modificadoPor = $u->getId();
        $sql = "UPDATE equipe SET nome = ?, descricao = ?,";
        $sql .= " modificadoEm = ?, modificadoPor = ?";
        $sql .= " WHERE idEquipe = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(1, $nome);
        $stmt->bindParam(2, $descricao);
        $stmt->bindParam(3, $modificadoEm);
        $stmt->bindParam(4, $modificadoPor);
        $stmt->bindParam(5, $id);
        $stmt->execute();
        return true;
    }

}
