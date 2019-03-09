<?php

require_once '../controllers/Controller.php';
require_once '../domains/Item.php';
require_once '../domains/Moeda.php';
require_once '../domains/Categoria.php';
require_once '../domains/Subcategoria.php';
require_once '../domains/Pagamento.php';
require_once '../domains/Equipe.php';


$q = $_REQUEST["q"];
$exp = explode("?", $q);

if ($exp[0] === 'GI') {
    GI($exp);
} else {
    PERT($exp);
}

function GI($exp) {
    $control = new Controller();
    $i = new Item();
    $m = new Moeda();
    $c = new Categoria();
    $s = new Subcategoria();
    $p = new Pagamento();
    $e = new Equipe();
    $t = new Template();

    $i->setNome($exp[1]);
    $i->setDescricao($exp[2]);
    $e->setId($exp[3]);
    $i->setOtimista(str_ireplace(',', '.', str_ireplace('.', '', $exp[4])));
    $i->setMaisProvavel(str_ireplace(',', '.', str_ireplace('.', '', $exp[5])));
    $i->setPessimista(str_ireplace(',', '.', str_ireplace('.', '', $exp[6])));
    $i->setQtdDesvios($exp[7]);
    $m->setId($exp[8]);
    $i->setValorUnitario(str_ireplace(',', '.', str_ireplace('.', '', $exp[9])));
    $c->setId($exp[10]);
    $s->setId($exp[11]);
    $p->setId($exp[12]);
    $i->setIdTemplate($exp[13]);
    $i->setMoeda($m);
    $i->setCategoria($c);
    $i->setSubCategoria($s);
    $i->setPagamento($p);
    $i->setEquipe($e);

    //$response = $control->process("CREATE", $i);

    echo 'Item salvo com sucesso!';
}

function PERT($exp) {
    $control = new Controller();
    $i = new Item();
    $m = new Moeda();
    $i->setOtimista(str_ireplace(',', '.', str_ireplace('.', '', $exp[1])));
    $i->setMaisProvavel(str_ireplace(',', '.', str_ireplace('.', '', $exp[2])));
    $i->setPessimista(str_ireplace(',', '.', str_ireplace('.', '', $exp[3])));
    $i->setQtdDesvios(str_ireplace(',', '.', str_ireplace('.', '', $exp[4])));
    $i->setValorUnitario(str_ireplace(',', '.', str_ireplace('.', '', $exp[5])));
    $m->setId($exp[6]);
    $read = $control->process("READ", $m);
    $m = $read[1][0];
    $i->setMoeda($m);
    echo '<Item>
            <pert>' . $i->getPert() . '</pert>
            <desvio>' . $i->getDesvio() . '</desvio>
            <total>' . $i->getTotal() . '</total>
          </Item>';
}
