<?php

abstract class Identificacao {

    private $id;
    private $nome;
    private $descricao;
    private $criadoEm;
    private $modificadoEm;

    function getId() {
        return $this->id;
    }

    function getNome() {
        return $this->nome;
    }

    function getDescricao() {
        return $this->descricao;
    }

    function getCriadoEm() {
        return $this->criadoEm;
    }

    function getModificadoEm() {
        return $this->modificadoEm;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setDescricao($descricao) {
        $this->descricao = $descricao;
    }

    function setCriadoEm($criadoEm) {
        $this->criadoEm = $criadoEm;
    }

    function setModificadoEm($modificadoEm) {
        $this->modificadoEm = $modificadoEm;
    }

}
