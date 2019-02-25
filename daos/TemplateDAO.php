<?php

//session_start();
require_once '../interfaces/IDAO.php';
require_once '../util/ConnectionFactory.php';
require_once '../domains/Usuario.php';
require_once '../domains/Template.php';
require_once '../domains/Item.php';
require_once '../domains/Categoria.php';
require_once '../domains/Subcategoria.php';
require_once '../domains/Moeda.php';
require_once '../domains/Pagamento.php';
require_once '../domains/Equipe.php';

class TemplateDAO implements IDAO {

    private $conn;
    private $user;

    function __construct() {
        $this->conn = ConnectionFactory::getMySQLConnection();
        $this->user = $_SESSION['user'];
    }

    public function create($object) {
        $u = new Usuario();
        $u = $this->user;
        $o = new Template();
        $o = $object;
        $nome = $o->getNome();
        $descricao = $o->getDescricao();
        $criadoEm = $o->getCriadoEm()->format("y-m-d H:m:s");
        $criadoPor = $u->getId();
        $itens = $o->getItens();
        $sql = "INSERT INTO template VALUES (0, ?, ?, ?, ?, null, null, 1)";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(1, $nome);
        $stmt->bindParam(2, $descricao);
        $stmt->bindParam(3, $criadoEm);
        $stmt->bindParam(4, $criadoPor);
        $stmt->execute();
        //Obeter o id do novo template
        $sql = "SELECT idTemplate from template WHERE nome = " . $nome;
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        $rs = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $idT = $rs[0]["idTemplate"];
        //Salvar os itens vinculados a este template
        foreach ($itens as $objI) {
            $i = new Item();
            $i = $objI;
            $idI = $i->getId();
            $sql = "INSERT INTO templates_itens VALUES (?, ?)";
            $stmt = $this->conn->prepare($sql);
            $stmt->bindParam(1, $idT);
            $stmt->bindParam(2, $idI);
            $stmt->execute();
        }
        return true;
    }

    public function delete($object) {
        
    }

    public function read($object) {
        $o = new Template();
        $o = $object;
        $id = $o->getId();
        $nome = $o->getNome();
        $first = true;
        $sql = "SELECT * FROM template JOIN usuario ON (criadoPor = idUsuario)";
        if ($id != 0 || !empty($nome)) {
            $sql .= " WHERE";
            if ($id != 0) {
                $sql .= " idTemplate = " . $id;
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
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        $rs = $stmt->fetchAll(PDO::FETCH_ASSOC);
        foreach ($rs as $obj) {
            $o = new Template();
            $o->setId($obj["idTemplate"]);
            $o->setNome($obj["nome"]);
            $o->setDescricao($obj["descricao"]);
            $data = new DateTime($obj["criadoEm"], new DateTimeZone("America/Sao_Paulo"));
            $o->setCriadoEm($data);
            $u = new Usuario();
            $u->setId($obj["idUsuario"]);
            $u->setNome($obj["nomeUsuario"]);
            $o->setCriadoPor($u);
            //Buscar itens vinculados a este template
            $IDAO = new ItemDAO();
            $it = new Item();
            $it->setIdTemplate($o->getId());
            $i = $IDAO->read($it);
            foreach ($i as $objI) {
                $o->setItens($objI);
            }
            $list[] = $o;
        }
        return $list;
    }

    public function upDate($object) {
        
    }

}
