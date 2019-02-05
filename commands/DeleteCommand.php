<?php

class deleteCommand extends Command {

    public function executar($object) {
        $f = new fachada();
        return $f->delete($object);
    }

}
