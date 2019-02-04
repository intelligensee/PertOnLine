<?php

interface IDAO {
    public function create($object);
    public function read($object);
    public function upDate($object);
    public function delete($object);
}
