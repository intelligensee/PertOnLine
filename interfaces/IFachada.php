<?php

interface IFachada {

    public function create($object);

    public function read($object);

    public function update($object);

    public function delete($object);
}
