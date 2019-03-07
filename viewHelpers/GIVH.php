<?php

$flag = true;
if (isset($_POST['GITxtNomeDoItem'])) {
    if (!empty($_POST['GITxtNomeDoItem'])) {
        $nome = $_POST['GITxtNomeDoItem'];
    } else {
        $msg = "Nome </br>";
        $flag = false;
    }
}
if (isset($_POST['GITxtDescricaoDoItem']) && !empty($_POST['GITxtDescricaoDoItem'])) {
    $desc = $_POST['GITxtDescricaoDoItem'];
} else {
    $flag = false;
    $msg .= "Descrição </br>";
}
if (isset($_POST['GITxtOtimista']) && !empty($_POST['GITxtOtimista'])) {
    $otimista = $_POST['GITxtOtimista'];
    print_r($otimista);
} else {
    $flag = false;
    $msg .= "Otimista </br>";
}
if (isset($_POST['GITxtMaisProvavel']) && !empty($_POST['GITxtMaisProvavel'])) {
    $maisProv = $_POST['GITxtMaisProvavel'];
} else {
    $flag = false;
    $msg .= "Mais Provável </br>";
}
if (isset($_POST['GITxtPessimista']) && !empty($_POST['GITxtPessimista'])) {
    $pessimista = $_POST['GITxtPessimista'];
} else {
    $flag = false;
    $msg .= "Pessimista </br>";
}
if (isset($_POST['GITxtDesvios']) && !empty($_POST['GITxtDesvios'])) {
    $qtdDesvios = $_POST['GITxtDesvios'];
} else {
    $flag = false;
}
if (isset($_POST['GITxtMoedas']) && !empty($_POST['GITxtMoedas'])) {
    $moeda = $_POST['GITxtMoedas'];
} else {
    $flag = false;
}
if (isset($_POST['GITxtValorUnitario']) && !empty($_POST['GITxtValorUnitario'])) {
    $valor = $_POST['GITxtValorUnitario'];
} else {
    $flag = false;
    $msg .= "Valor Unitário </br>";
}
if (isset($_POST['GITxtCategoria']) && !empty($_POST['GITxtCategoria'])) {
    $categoria = $_POST['GITxtCategoria'];
} else {
    $flag = false;
}
if (isset($_POST['GITxtSubcategoria']) && !empty($_POST['GITxtSubcategoria'])) {
    $subCategoria = $_POST['GITxtSubcategoria'];
} else {
    $flag = false;
}
if (isset($_POST['GITxtPagamento']) && !empty($_POST['GITxtPagamento'])) {
    $pagamento = $_POST['GITxtPagamento'];
} else {
    $flag = false;
}
if (isset($_POST['GITxtAssociarTemlate']) && !empty($_POST['GITxtAssociarTemlate'])) {
    $template = $_POST['GITxtAssociarTemlate'];
} else {
    $flag = false;
}
if ($flag) {
    $m = new Moeda();
    $c = new Categoria();
    $s = new Subcategoria();
    $p = new Pagamento();
    $e = new Equipe();
    $t = new Template();
    $i = new Item();
    $m->setId($moeda);
    $c->setId($categoria);
    $s->setId($subCategoria);
    $p->setId($pagamento);
    $e->setId(2); //provisório até adequar a página
    $i->setMoeda($m);
    $i->setCategoria($c);
    $i->setSubCategoria($s);
    $i->setPagamento($p);
    $i->setEquipe($e);
    $i->setNome($nome);
    $i->setDescricao($desc);
    $i->setOtimista($otimista);
    $i->setMaisProvavel($maisProv);
    $i->setPessimista($pessimista);
    $i->setQtdDesvios($qtdDesvios);
    $i->setValorUnitario($valor);
    $i->setIdTemplate($template);
    $control->process("CREATE", $i);
} else {
    '<h2>Os campos obrigatórios abaixo não foram preenchidos:</h2>' . $msg;
}
