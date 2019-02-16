<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Gestão dos itens</title>
    </head>
    <body>
        <?php
        require_once '../controllers/Controller.php';
        $control = new Controller();
        $control->process('CREATE', new Item());
        ?>
    </body>
</html>


