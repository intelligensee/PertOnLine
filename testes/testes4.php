<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Página de Testes 4</title>
    </head>
    <body>
        <h1>Teste 4</h1>
        <?php
        require_once '../controllers/Controller.php';
        require_once '../domains/Equipe.php';

        $c = new Controller();
        $e = new Equipe();

        $e->setNome("Arquitetura");
        //$c->process("CREATE", $e);
        
        ?>
    </body>
</html>