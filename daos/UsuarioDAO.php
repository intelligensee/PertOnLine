<?php

require_once '../interfaces/IDAO.php';
require_once '../util/ConnectionFactory.php';
require_once '../domains/Usuario.php';

class UsuarioDAO implements IDAO {

    private $conn;

    function __construct() {
        $this->conn = ConnectionFactory::getMySQLConnection();
    }

    public function create($object) {
        $o = new Usuario();
        $o = $object;
        $nome = $o->getNome();
        $senha = $o->getSenha();
        $sql = "INSERT INTO usuario VALUES (0, ?, ?, 1)";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(1, $nome);
        $stmt->bindParam(2, $senha);
        $stmt->execute();
        return true;
    }

    public function delete($object) {
        
    }

    public function read($object) {
        $o = new Usuario();
        $o = $object;
        $id = $o->getId();
        $nome = $o->getNome();
        $senha = $o->getSenha();
        $list;
        $first = true;
        $sql = "SELECT * FROM usuario";
        if ($id != 0 || !empty($nome) || !empty($senha)) {
            $sql .= " WHERE";
            if ($id != 0) {
                $sql .= " idUsuario = " . $id;
                $first = false;
            }
            if (!empty($nome)) {
                if (!$first) {
                    $sql .= " AND";
                }
                $sql .= " nomeUsuario = '" . $nome . "'";
                $first = false;
            }
            if (!empty($senha)) {
                if (!$first) {
                    $sql .= " AND";
                }
                $sql .= " senha = '" . $senha . "'";
            }
        }
        //echo $sql;
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        $rs = $stmt->fetchAll(PDO::FETCH_ASSOC);
        foreach ($rs as $obj) {
            $o = new Usuario();
            $o->setId($obj["idUsuario"]);
            $o->setNome($obj["nomeUsuario"]);
            $o->setSenha($obj["senha"]);
            $list[] = $o;
        }
        return $list;
    }

    public function upDate($object) {
        
    }

}
