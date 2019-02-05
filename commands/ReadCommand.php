<?php

class readCommand extends Command {

    public function executar($object) {
        $f = new fachada();
        return $f->read($object);
    }

}
