<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Gestão dos itens</title>
    </head>
    <body>
        <form method="post">
            <label>Nome</label>
            <input type="text" name="nomeTxt">
            <input type="submit" value="Salvar" name="salvarBt">
        </form> 

        <?php
        if (isset($_POST['nomeTxt']) && !empty($_POST['nomeTxt'])) {
            $nome = $_POST['nomeTxt'];
            echo 'Nome: ' . $nome;
        }
        ?>
    </body>
</html>


