<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Gestão dos itens</title>
    </head>
    <body>
        <?php
        require_once '../controllers/Controller.php';
        require_once '../domains/Categoria.php';
        
        $control = new Controller();
        $obj = new Categoria();
        
        $obj->setNome("OPEX");
        
        //$control->process("CREATE", $obj);
        
        ?>
    </body>
</html>


