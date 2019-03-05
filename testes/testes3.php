<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Testes 3</title>
        <?php
        session_start();
        if (!isset($_POST['valor1'])) {
            $_SESSION['v1'] = 1;
            $_SESSION['v2'] = 2;
            echo 'Passei por aqui!';
        } else {
            $_SESSION['v1'] = 10;
            $_SESSION['v2'] = 20;
            echo '<p>Passei pelo novo valor!';
        }
        ?>
        <script>
            function alerta (){
                alert("Teste");
                document.getElementById('vl1').setAttribute("value", "35");
            }
        </script>
    </head>
    <body>
        <h1>Teste de Procedimentos</h1>
        <form method="post">
            <p><label>Valor 1</label>
                <input type="text" <?php echo 'value = ' . $_SESSION['v1'] ?> name="valor1" id="vl1"></p>
            <p><label>Valor 2</label>
                <input type="text" <?php echo 'value = ' . $_SESSION['v2'] ?> name="valor2"></p>
            <p><input type="submit" value="Salvar"></p>
            <p><input type="button" value="Alterar" onclick="alerta()"></p>
            <p><span id="retorno"></span></p>
        </form>
        <?php
        echo '<p>Valor 1: ' . $_SESSION['v1'];
        echo '<p>Valor 2: ' . $_SESSION['v2'];
        if (isset($_POST['valor1'])) {
            if (!empty($_POST['valor1'])) {
                $valor1 = $_POST['valor1'];
                echo '<p>Novo Valor 1: ' . $valor1;
            } else {
                echo '<p>Valor 1 não preenchido!';
            }
        }
        if (isset($_POST['valor2'])) {
            if (!empty($_POST['valor2'])) {
                $valor1 = $_POST['valor2'];
                echo '<p>Novo Valor 2: ' . $valor1;
            } else {
                echo '<p>Valor 2 não preenchido!';
            }
        }
        ?>
    </body>
</html>
