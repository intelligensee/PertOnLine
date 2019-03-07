<?php

require_once '../controllers/Controller.php';
require_once '../domains/Item.php';
require_once '../domains/Moeda.php';
require_once '../domains/Categoria.php';
require_once '../domains/Subcategoria.php';
require_once '../domains/Pagamento.php';
require_once '../domains/Equipe.php';
$control = new Controller();

$q = $_REQUEST["q"];
$exp = explode("?", $q);

$m = new Moeda();
$c = new Categoria();
$s = new Subcategoria();
$p = new Pagamento();
$e = new Equipe();
$t = new Template();
$i = new Item();

$i->setNome($exp[0]);
$i->setDescricao($exp[1]);
$e->setId($exp[2]);
$i->setOtimista($exp[3]);
$i->setMaisProvavel($exp[4]);
$i->setPessimista($exp[5]);
$i->setQtdDesvios($exp[6]);
$m->setId($exp[7]);
$i->setValorUnitario($exp[8]);
$c->setId($exp[9]);
$s->setId($exp[10]);
$p->setId($exp[11]);
$i->setIdTemplate($exp[12]);
$i->setMoeda($m);
$i->setCategoria($c);
$i->setSubCategoria($s);
$i->setPagamento($p);
$i->setEquipe($e);

//$response = $control->process("CREATE", $i);

echo '<pre>';
print_r($i);
echo '</pre>';

