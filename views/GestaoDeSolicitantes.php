<!DOCTYPE html>
<html>
    <head>
        <title>Gestão de Solicitantes</title>
        <!-- Estilos -->
        <link rel="stylesheet" type="text/css" href="../styles/geral.css">
        <link rel="stylesheet" type="text/css" href="../styles/menu.css">
        <link rel="stylesheet" type="text/css" href="../styles/FormulariosDeGestao.css">

    </head>
    <body>
        <?php include "../menu.php"; ?>
        <div class="conteudo">
            <h3>Gestão de Solicitantes</h3>
            <form>
                <table class="estruturaFormulario">
                    <tr>
                        <td class="nomeDosCampos">
                            <label>Nome da empresa</label>
                        </td>
                        <td>
                            <input type="text" name="GSTxtNomeDoSolicitante" id="GSTxtNomeDoSolicitante">
                        </td>
                    </tr>
                    <tr>
                        <td class="nomeDosCampos">
                            <label>Descrição</label>
                        </td>
                        <td>
                            <textarea rows="5" cols="30" name="GSTxtDescricaoDoSolicitante" id="GSTxtDescricaoDoSolicitante"></textarea>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input class="botoes" type="button" value="Salvar" onclick="#">                            
                        </td>                       
                    </tr>
                </table>
            </form>
            <table class="gestao">
                <br />
                <br />
                <label>Solicitantes cadastrados</label>
                <br />
                <br />
                <th>Gestão</th><th>Nome do solicitante</th><th>Descrição</th><th>Criado por</th><th>Criado em</th><th>Modificado por</th><th>Modificado em</th><th>Opção</th>
                <tr class="linhaGestao">
                    <td class="colunaGestao">Exibir | Editar | Excluir</td>    					
                    <td class="colunaGestao">Danilo Brayan Souza Taborda</td>
                    <td class="colunaGestao">Responsável por solicitar projetos</td>
                    <td class="colunaGestao">Danilo Brayan Souza Taborda</td>
                    <td class="colunaGestao">05/02/2019</td>
                    <td class="colunaGestao">Danilo Brayan Souza Taborda</td>
                    <td class="colunaGestao">05/02/2019</td>
                    <td class="colunaGestao">Ativo</td>
                </tr>
                <tr class="linhaGestao">
                    <td class="colunaGestao">Exibir | Editar | Excluir</td>    					
                    <td class="colunaGestao">Ronaldo dos Santos Pinheiro</td>
                    <td class="colunaGestao">Responsável por desenvolver o sistema da PERT Online</td>
                    <td class="colunaGestao">Danilo Brayan Souza Taborda</td>
                    <td class="colunaGestao">05/02/2019</td>
                    <td class="colunaGestao">Danilo Brayan Souza Taborda</td>
                    <td class="colunaGestao">05/02/2019</td>
                    <td class="colunaGestao">Ativo</td>
                </tr>
            </table>	
        </div>
    </body>
</html>