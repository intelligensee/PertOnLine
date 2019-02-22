<?php

abstract class Identificacao {

    private $id = 0;
    private $nome = "";
    private $descricao = "";
    private $criadoEm;
    private $criadoPor;
    private $modificadoEm;
    private $modificadoPor;

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
        if (!$this->criadoEm) {
            $this->criadoEm = new DateTime('now');
            $fuso = new DateTimeZone('America/Sao_Paulo');
            $this->criadoEm->setTimezone($fuso);
        }
        return $this->criadoEm;
    }

    function getCriadoPor() : Usuario {
        return $this->criadoPor;
    }

    function getModificadoEm(): DateTime {
        if (!$this->modificadoEm) {
            $this->modificadoEm = new DateTime("now");
        }
        return $this->modificadoEm;
    }

    function getModificadoPor() : Usuario {
        return $this->modificadoPor;
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

    function setCriadoPor(Usuario $criadoPor) {
        $this->criadoPor = $criadoPor;
    }

    function setModificadoEm(DateTime $modificadoEm) {
        $this->modificadoEm = $modificadoEm;
    }

    function setModificadoPor(Usuario $modificadoPor) {
        $this->modificadoPor = $modificadoPor;
    }

}
