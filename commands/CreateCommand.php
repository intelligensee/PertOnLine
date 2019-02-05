<?php

class createCommand extends Command {

    public function executar($object) {
        $f = new fachada();
        return $f->create($object);
    }

}
