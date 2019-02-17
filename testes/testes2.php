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
        $read = $control->process('READ', new Template());
        echo '<pre>';
        print_r($read);
        echo '</pre>';
        ?>
    </body>
</html>


