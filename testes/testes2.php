<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Gestão dos itens</title>
    </head>
    <body>
        <?php
        require_once '../util/ConnectionFactory.php';
        $conn = ConnectionFactory::getMySQLConnection();
        echo '<pre>';
        print_r($conn);
        echo '</pre>';
        ?>
    </body>
</html>


