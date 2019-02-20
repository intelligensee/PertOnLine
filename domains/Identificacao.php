<?php

abstract class Identificacao {

    private $id = 0;
    private $nome = "";
    private $descricao = "";
    private $criadoEm;
    private $modificadoEm;

    function getId(): int {
        return $this->id;
    }

    function getNome(): string {
        return $this->nome;
    }

    function getDescricao(): string {
        return $this->descricao;
    }

    function getCriadoEm(): DateTime {
        return $this->criadoEm;
    }

    function getModificadoEm(): DateTime {
        return $this->modificadoEm;
    }

    function setId(int $id) {
        $this->id = $id;
    }

    function setNome(string $nome) {
        $this->nome = $nome;
    }

    function setDescricao(string $descricao) {
        $this->descricao = $descricao;
    }

    function setCriadoEm(DateTime $criadoEm) {
        $this->criadoEm = $criadoEm;
    }

    function setModificadoEm(DateTime $modificadoEm) {
        $this->modificadoEm = $modificadoEm;
    }

}
