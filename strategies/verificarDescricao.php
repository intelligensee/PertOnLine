<?php

require_once '../interfaces/IStrategy.php';
require_once '../domains/Identificacao.php';

class verificarDescricao implements IStrategy {

    public function verificar($object) {
        $descricao = $object->getDescricao();
        if (empty(trim($descricao))) {
            return 'ErroDescricao01';
        }
        return null;
    }

}
