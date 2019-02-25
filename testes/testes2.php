<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Gestão dos itens</title>
    </head>
    <body>
        <?php
        require_once '../controllers/Controller.php';
        require_once '../domains/Equipe.php';
        
        $control = new Controller();
        $obj = new Equipe();
        
        $obj->setNome("Desenvolvimento PERT");
        //$control->process("CREATE", $obj);
        
        $obj = new Template();
        $read = $control->process("READ", $obj);
        echo '<pre>';
        print_r($read);
        echo '</pre>';
        
        ?>
    </body>
</html>


