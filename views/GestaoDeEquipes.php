<!DOCTYPE html>
<html>
    <head>
        <title>Gestão de Equipes</title>
        <!-- Estilos -->
        <link rel="stylesheet" type="text/css" href="../styles/geral.css">
        <link rel="stylesheet" type="text/css" href="../styles/menu.css">
        <link rel="stylesheet" type="text/css" href="../styles/FormulariosDeGestao.css">

    </head>
    <body>
        <?php include "../menu.php"; ?>
        <div class="conteudo">
            <h3>Gestão de Equipes</h3>
            <form>
                <table class="estruturaFormulario">
                    <tr>
                        <td class="nomeDosCampos">
                            <label>Nome da equipe</label>
                        </td>
                        <td>
                            <input type="text" name="GETxtNomeDaEquipe" id="GETxtNomeDaEquipe">
                        </td>
                    </tr>
                    <tr>
                        <td class="nomeDosCampos">
                            <label>Descrição</label>
                        </td>
                        <td>
                            <textarea rows="5" cols="30" name="GETxtDescricaoDaEquipes" id="GETxtDescricaoDaEquipes"></textarea>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            
                        </td>
                        <td>
                            <input class="botoes" type="button" value="Salvar" onclick="#">                            
                        </td>                       
                    </tr>
                </table>
            </form>
            <table class="gestao">
                <br />
                <br />
                <label>Equipes cadastradas</label>
                <br />
                <br />
                <th>Gestão</th><th>Nome da equipe</th><th>Descrição</th><th>Criado por</th><th>Criado em</th><th>Modificado por</th><th>Modificado em</th><th>Opção</th>
                <tr class="linhaGestao">
                    <td class="colunaGestao">Exibir | Editar | Excluir</td>    					
                    <td class="colunaGestao">Gestão de Projetos</td>
                    <td class="colunaGestao">Responsável por gerenciar projetos</td>
                    <td class="colunaGestao">Danilo Brayan Souza Taborda</td>
                    <td class="colunaGestao">05/02/2019</td>
                    <td class="colunaGestao">Danilo Brayan Souza Taborda</td>
                    <td class="colunaGestao">05/02/2019</td>
                    <td class="colunaGestao">Ativo</td>
                </tr>
                <tr class="linhaGestao">
                    <td class="colunaGestao">Exibir | Editar | Excluir</td>    					
                    <td class="colunaGestao">Arquitetura</td>
                    <td class="colunaGestao">Responsável por estabelecer os padrões das tecnologias</td>
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