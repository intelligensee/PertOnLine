<?php
error_reporting(0);
require_once '../controllers/Controller.php';
require_once '../domains/Usuario.php';
$c = new Controller();
$u = new Usuario();
$q = $_REQUEST["q"];
$exp = explode("%", $q);

$u->setNome($exp[0]);
$u->setSenha($exp[1]);

$read = $c->process("READ", $u);
if (count($read[1]) === 1) {
    $u = $read[1][0];
    echo '<Usuario>
            <id>'. $u->getId() .'</id>
            <nome>' . $u->getNome() . '</nome>
            <senha>' . $u->getSenha() . '</senha>
          </Usuario>';
} else {
    //echo '<p><h2>Usuário e/ou senha inválidos!</h2></p>';
    echo '<Usuario><id>0</id></Usuario>';
}