<?php

require_once '../commands/Command.php';
require_once '../commands/CreateCommand.php';
require_once '../commands/ReadCommand.php';
require_once '../commands/UpDateCommand.php';
require_once '../commands/DeleteCommand.php';

class Controller {

    public function process($command, $object) {
        //Criação do mapa de comandos
        $mapa["CREATE"] = new createCommand();
        $mapa["READ"] = new readCommand();
        $mapa["UPDATE"] = new upDateCommand();
        $mapa["DELETE"] = new deleteCommand();
        
        //Execução do comando
        $c = $mapa[$command];
        $r = $c->executar($object);
        return $r;
    }

}
