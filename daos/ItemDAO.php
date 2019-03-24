<?php

require_once '../interfaces/IDAO.php';
require_once '../util/ConnectionFactory.php';
require_once '../domains/Usuario.php';
require_once '../domains/Item.php';

class ItemDAO implements IDAO {

    private $conn;
    private $user;

    function __construct() {
        $this->conn = ConnectionFactory::getMySQLConnection();
        $this->user = $_SESSION['user'];
    }

    public function create($object) {
        $this->createUpdate($object, true);
    }

    public function delete($object) {
        $u = new Usuario();
        $u = $this->user;
        $o = new Item();
        $o = $object;
        $id = $o->getId();
        $modificadoEm = $o->getModificadoEm()->format("y-m-d H:m:s");
        $modificadoPor = $u->getId();
        $sql = "UPDATE item SET ativo = 0,";
        $sql .= " modificadoEm = ?, modificadoPor = ?";
        $sql .= " WHERE idItem = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(1, $modificadoEm);
        $stmt->bindParam(2, $modificadoPor);
        $stmt->bindParam(3, $id);
        $stmt->execute();
        return true;
    }

    public function read($object) {
        $o = new Item();
        $o = $object;
        $id = $o->getId();
        $nome = $o->getNome();
        $sql = "SELECT";
        $sql .= " idItem, item.nome, item.descricao, item.criadoEm, item.criadoPor, item.modificadoEm, item.modificadoPor,";
        $sql .= " idUsuario, nomeUsuario,";
        $sql .= " otimista, maisProvavel, pessimista, qtdDesvios, valorUnitario, categoria, subCategoria, moeda, pagamento, equipe,";
        $sql .= " idCategoria, categoria.nome as nomeCategoria,";
        $sql .= " idSubCategoria, subCategoria.nome as nomeSubCategoria,";
        $sql .= " idMoeda, moeda.nome as nomeMoeda, simbolo, cotacao,";
        $sql .= " idPagamento, pagamento.nome as nomePagamento,";
        $sql .= " idEquipe, equipe.nome as nomeEquipe";
        $sql .= " FROM item";
        $sql .= " JOIN usuario ON (criadoPor = idUsuario)";
        $sql .= " JOIN categoria ON (categoria = idCategoria)";
        $sql .= " JOIN subCategoria ON (subCategoria = idSubCategoria)";
        $sql .= " JOIN moeda ON (moeda = idMoeda)";
        $sql .= " JOIN pagamento ON (pagamento = idPagamento)";
        $sql .= " JOIN equipe ON (equipe = idEquipe)";
        $sql .= " WHERE item.ativo = 1";
        if ($id !== 0 || !empty($nome)) {
            if ($id != 0) {
                $sql .= " AND idItem = " . $id;
            }
            if (!empty($nome)) {
                $sql .= " AND nome = '" . $nome . "'";
            }
        }
        $sql .= " GROUP BY idItem";
        //echo '<br>' . $sql . '</br>';
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        $rs = $stmt->fetchAll(PDO::FETCH_ASSOC);
        foreach ($rs as $obj) {
            $i = new Item();
            $i->setId($obj["idItem"]);
            $i->setNome($obj["nome"]);
            $i->setDescricao($obj["descricao"]);
            $data = new DateTime($obj["criadoEm"], new DateTimeZone("America/Sao_Paulo"));
            $i->setCriadoEm($data);
            $u = new Usuario();
            $u->setId($obj["idUsuario"]);
            $u->setNome($obj["nomeUsuario"]);
            $i->setCriadoPor($u);
            $i->setOtimista($obj["otimista"]);
            $i->setMaisProvavel($obj["maisProvavel"]);
            $i->setPessimista($obj["pessimista"]);
            $i->setQtdDesvios($obj["qtdDesvios"]);
            $i->setValorUnitario($obj["valorUnitario"]);
            $a = new Categoria();
            $a->setId($obj["idCategoria"]);
            $a->setNome($obj["nomeCategoria"]);
            $i->setCategoria($a);
            $a = new Subcategoria();
            $a->setId($obj["idSubCategoria"]);
            $a->setNome($obj["nomeSubCategoria"]);
            $i->setSubCategoria($a);
            $a = new Moeda();
            $a->setId($obj["idMoeda"]);
            $a->setNome($obj["nomeMoeda"]);
            $a->setSimbolo($obj["simbolo"]);
            $a->setCotacao($obj["cotacao"]);
            $i->setMoeda($a);
            $a = new Pagamento();
            $a->setId($obj["idPagamento"]);
            $a->setNome($obj["nomePagamento"]);
            $i->setPagamento($a);
            $a = new Equipe();
            $a->setId($obj["idEquipe"]);
            $a->setNome($obj["nomeEquipe"]);
            $i->setEquipe($a);
            $list[] = $i;
        }
        return $list;
    }

    public function upDate($object) {
        $this->createUpdate($object, false);
    }

    private function createUpdate($object, $isCreate) {
        $u = new Usuario();
        $u = $this->user;
        $o = new Item();
        $o = $object;
        $nome = $o->getNome();
        $descricao = $o->getDescricao();
        if ($isCreate) {
            $criadoEm = $o->getCriadoEm()->format("y-m-d H:m:s");
            $criadoPor = $u->getId();
        } else {
            $id = $o->getId();
            $modificadoEm = $o->getModificadoEm()->format("y-m-d H:m:s");
            $modificadoPor = $u->getId();
        }
        $otimista = $o->getOtimista();
        $maisProvavel = $o->getMaisProvavel();
        $pessimista = $o->getPessimista();
        $qtdDesvios = $o->getQtdDesvios();
        $valorUnitario = $o->getValorUnitario();
        $idCategoria = $o->getCategoria()->getId();
        $idSubCategoria = $o->getSubCategoria()->getId();
        $idMoeda = $o->getMoeda()->getId();
        $idPagamento = $o->getPagamento()->getId();
        $idEquipe = $o->getEquipe()->getId();
        if ($isCreate) {
            $sql = "INSERT INTO item VALUES (0, ?, ?, ?, ?, null, null, 1, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
        } else {
            $sql = "UPDATE item SET nome = ?, descricao = ?,";
            $sql .= " modificadoEm = ?, modificadoPor = ?,";
            $sql .= " otimista = ?, maisProvavel = ?, pessimista = ?,";
            $sql .= " qtdDesvios = ?, valorUnitario = ?,";
            $sql .= " categoria = ?, subCategoria = ?,";
            $sql .= " moeda = ?, pagamento = ?, equipe = ?";
            $sql .= " WHERE idItem = ?";
        }
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(1, $nome);
        $stmt->bindParam(2, $descricao);
        if ($isCreate) {
            $stmt->bindParam(3, $criadoEm);
            $stmt->bindParam(4, $criadoPor);
        } else {
            $stmt->bindParam(3, $modificadoEm);
            $stmt->bindParam(4, $modificadoPor);
        }
        $stmt->bindParam(5, $otimista);
        $stmt->bindParam(6, $maisProvavel);
        $stmt->bindParam(7, $pessimista);
        $stmt->bindParam(8, $qtdDesvios);
        $stmt->bindParam(9, $valorUnitario);
        $stmt->bindParam(10, $idCategoria);
        $stmt->bindParam(11, $idSubCategoria);
        $stmt->bindParam(12, $idMoeda);
        $stmt->bindParam(13, $idPagamento);
        $stmt->bindParam(14, $idEquipe);
        if (!$isCreate) {
            $stmt->bindParam(15, $id);
        }
        $stmt->execute();
        return true;
    }

}
