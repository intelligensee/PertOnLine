<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Gestão dos itens</title>
    </head>
    <body>
        <?php
        require_once '../controllers/Controller.php';
        require_once '../domains/Subcategoria.php';
        
        $control = new Controller();
        $obj = new Subcategoria();
        
        $obj->setNome("Viagem");
        $control->process("CREATE", $obj);
        
        $obj = new Subcategoria();
        $read = $control->process("READ", $obj);
        echo '<pre>';
        print_r($read);
        echo '</pre>';
        
        ?>
    </body>
</html>


