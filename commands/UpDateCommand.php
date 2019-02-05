<?php

class upDateCommand extends Command {

    public function executar($object) {
        $f = new fachada();
        return $f->update($object);
    }

}
