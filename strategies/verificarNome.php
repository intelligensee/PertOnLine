<?php

require_once '../interfaces/IStrategy.php';
require_once '../domains/Identificacao.php';

class verificarNome implements IStrategy {

    public function verificar($object) {
        $nome = $object->getNome();
        if (empty(trim($nome))) {
            return 'ErroNome01';
        }
        return null;
    }
}
