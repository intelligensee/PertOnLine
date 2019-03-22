<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Página de Testes 4</title>
    </head>
    <body>
        <?php
        require_once '../controllers/Controller.php';
        require_once '../domains/Item.php';
        $c = new Controller();
        $i = new Item();
        $i->setId(4);
        $c->process("DELETE", $i);
        
        ?>
    </body>
</html>