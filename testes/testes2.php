<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Gestão dos itens</title>
    </head>
    <body>
        <?php
        require_once '../controllers/Controller.php';
        require_once '../domains/Usuario.php';
        
        $control = new Controller();
        $u = new Usuario();
        
        $u->setNome("Ronaldo Pinheiro");
        $u->setSenha("ronaldo");
        
        $control->process("CREATE", $u);
        $read = $control->process("READ", new Usuario());
        
        echo '<pre>';
        print_r($read);
        echo '</pre>';
        
        ?>
    </body>
</html>


