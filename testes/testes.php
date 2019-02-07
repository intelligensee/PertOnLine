<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>PERT On Line - Página de Testes</title>
    </head>
    <body>
        <?php
        require_once '../controllers/Controller.php';
        require_once '../domains/Cliente.php';
        $control = new Controller();
        $read = $control->process("READ", new Cliente());
        ?>

        </br>
        <label>Cliente: </label>
        <select name="GPTxtCliente" id="GPTxtCliente">
            <?php
            foreach ($read[1] as $obj) {
                $c = new Cliente;
                $c = $obj;
                echo '<option value = ' . $c->getId() . '>' . $c->getNome() . '</option>';
            }
            ?>
        </select>
    </body>
</html>
