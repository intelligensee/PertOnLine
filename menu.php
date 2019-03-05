<!DOCTYPE html>
<html lang="pt-br">
    <?php
    session_start();
    require_once 'domains/Usuario.php';
    $u = new Usuario();
    $u->setId(1);
    $_SESSION['user'] = $u;
    ?>
    <head>
        <!-- Estudar depois -->
        <meta charset=”utf-8″>
        <!-- <meta name=”viewport” content=”width=device-width, initial-scale=1, shrink-to-fit=no”> -->
        <!-- Estilos próprios -->
        <link rel="stylesheet" type="text/css" href="http://localhost/PertOnLine/styles/geral.css">
        <link rel="stylesheet" type="text/css" href="http://localhost/PertOnLine/styles/menu.css">
        <link rel="stylesheet" type="text/css" href="http://localhost/PertOnLine/styles/rodape.css">
        <link rel="stylesheet" type="text/css" href="http://localhost/PertOnLine/styles/formularios.css">
    </head>
    <body>
        <div class="navbar">         
            <ul>
                <li id="IconePrincipal"><a href="http://localhost/PertOnLine/index.php"><img src="http://localhost/PertOnLine/images/icones/home.png"></a></li>
                <li class="dropdown">
                    <a href="javascript:void(0)" class="dropbtn">Cadastro</a>
                    <div class="dropdown-content">
                        <a href="http://localhost/PertOnLine/views/GestaoDeProjetos.php">Novo projeto</a>
                        <a href="http://localhost/PertOnLine/views/GestaoDeTemplates.php">Novo template</a>
                        <a href="http://localhost/PertOnLine/views/GestaoDeItens.php">Novo item</a>
                    </div>
                </li>
                <li class="dropdown">
                    <a href="javascript:void(0)" class="dropbtn">Configuração</a>
                    <div class="dropdown-content">
                        <a href="http://localhost/PertOnLine/views/GestaoDeEmpresas.php">Gestão das empresas</a>
                        <a href="http://localhost/PertOnLine/views/GestaoDeEquipes.php">Gestão das equipes</a>
                        <a href="http://localhost/PertOnLine/views/GestaoDeProjetos.php">Gestão dos projetos</a>
                        <a href="http://localhost/PertOnLine/views/GestaoDeTemplates.php">Gestão dos templates</a>
                        <a href="http://localhost/PertOnLine/views/GestaoDeItens.php">Gestão do itens</a>
                        <a href="http://localhost/PertOnLine/views/GestaoDeAprovadores.php">Gestão do aprovadores</a>
                        <a href="http://localhost/PertOnLine/views/GestaoDeClientes.php">Gestão dos clientes</a>
                        <a href="http://localhost/PertOnLine/views/GestaoDeAcessos.php">Gestão dos acessos</a>
                        <a href="http://localhost/PertOnLine/views/GestaoDeMarcas.php">Gestão das marcas</a>
                        <a href="http://localhost/PertOnLine/views/RegistroDeAprovacoes.php">Registro das aprovações</a>
                    </div>
                </li>
                <li style="float:left"><a class="active" href="#about">Sobre o desenvolvimento</a></li>
                <li style="float:right"><a class="active" href="#about"><u>Login</u></a></li>                
                <li style="float: right" class="dropdown">
                    <a href="javascript:void(0)" class="dropbtn">Testes - Provisório</a>
                    <div class="dropdown-content">
                        <a href="http://localhost/PertOnLine/testes/testes.php">Teste</a>
                        <a href="http://localhost/PertOnLine/testes/testes2.php">Teste2</a>
                        <a href="http://localhost/PertOnLine/testes/testes3.php">Teste3</a>
                    </div>
                </li>
            </ul>
        </div>
    </body>
</html>
