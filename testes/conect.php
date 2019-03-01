<?php

require_once '../controllers/Controller.php';
require_once '../domains/Usuario.php';
$c = new Controller();
$u = new Usuario();
$q = $_REQUEST["q"];
$r = explode("%", $q);

$u->setNome($r[0]);
$u->setSenha($r[1]);

$read = $c->process("READ", $u);
if (count($read[1]) === 1) {
    $u = $read[1][0];
    echo '<table>
            <tr><th>id</th><th>Nome</th><th>Senha</th></tr>
            <tr><td>' . $u->getId() . '</td><td>' . $u->getNome() . '</td><td>' . $u->getSenha() . '</td></tr>
        </table>';
} else {
    echo '<p><h2>Usuário e/ou senha inválidos!</h2></p>';
}
