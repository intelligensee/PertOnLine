<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Página de Testes 4</title>
    </head>
    <body>
        <?php
        require_once '../strategies/verificarNome.php';
        require_once '../domains/Item.php';
        $i = new Item();
        $v = new verificarNome();
        $v->verificar($i);
        $teste = "A";
        if(!empty($teste)){
            $teste .= '?' . $teste;
            echo $teste;
        }
        ?>
    </body>
</html>