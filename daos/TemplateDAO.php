<?php

require_once '../interfaces/IDAO.php';
require_once '../util/ConnectionFactory.php';
require_once '../domains/Template.php';

class TemplateDAO implements IDAO{

    private $conn;
    private $templatesFake;

    function __construct() {
        //$this->conn = ConnectionFactory::getMySQLConnection();
        $this->criaTemplatesFake();
    }
    
    private function criaTemplatesFake(){
        require_once '../domains/Item.php';
        $t = new Template();
        $i = new Item();
        $i->setId(1);
        $t->setItens($i);
        $i = new Item();
        $i->setId(2);
        $t->setItens($i);
        $t->setId(1);
        $t->setNome("Ambiente virtual Windows");
        $this->templatesFake[] = $t;
        $i = new Item();
        $i->setId(3);
        $t = new Template();
        $t->setId(2);
        $t->setItens($i);
        $t->setNome("Ambiente virtual Linux");
        $this->templatesFake[] = $t;
    }

    public function create($object) {
        
    }

    public function delete($object) {
        
    }

    public function read($object) {
        return $this->templatesFake;
    }

    public function upDate($object) {
        
    }

}
