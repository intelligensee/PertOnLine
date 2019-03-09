<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Página de Testes 4</title>
    </head>
    <body>
        <h1>Teste 4</h1>
        <?php
        require_once '../domains/Item.php';
        $i = new Item();
        //$n = str_ireplace('.', '', '1.000,87');
        $x = str_ireplace(',', '.', str_ireplace('.', '', '1.010,87'));
        $i->setOtimista($x);
        echo 'Retorno: ' . $i->getOtimista();
        
        ?>
    </body>
</html>