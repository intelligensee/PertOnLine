<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Gestão das equipes</title>
    </head>
    <body>
        <?php include "../menu.php"; ?>
        <div class="conteudo">
            <fieldset>
                <legend>
                    <h3 class="tituloSeccao">Gestão das equipes</h3>
                </legend>            
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
                            <td></td>
                            <td>
                                <input class="botoes" type="button" value="Salvar" onclick="#">                            
                            </td>                       
                        </tr>
                    </table>
                </form>
            </fieldset>
            <fieldset>
                <legend>
                    <h3 class="tituloSeccao">Equipes cadastradas</h3>
                </legend>
                <table class="gestao">
                    <th>Gestão</th><th>Nome da equipe</th><th>Descrição</th><th>Criado por</th><th>Criado em</th><th>Modificado por</th><th>Modificado em</th><th>Opção</th>
                    <tr class="linhaGestao">
                        <td>
                            <a href="#"><img class="icones" src="../images/icones/ver.png" alt="Visualizar cadastro"></a>
                            <a href="#"><img class="icones" src="../images/icones/editar.png" alt="Visualizar cadastro"></a>
                            <a href="#"><img class="icones" src="../images/icones/excluir.png" alt="Visualizar cadastro"></a>
                        </td>    					
                        <td>Gestão de Projetos</td>
                        <td>Responsável por gerenciar projetos</td>
                        <td>Danilo Brayan Souza Taborda</td>
                        <td>05/02/2019</td>
                        <td>Danilo Brayan Souza Taborda</td>
                        <td>05/02/2019</td>
                        <td>Ativo</td>
                    </tr>
                    <tr class="linhaGestao">
                        <td>
                            <a href="#"><img class="icones" src="../images/icones/ver.png" alt="Visualizar cadastro"></a>
                            <a href="#"><img class="icones" src="../images/icones/editar.png" alt="Visualizar cadastro"></a>
                            <a href="#"><img class="icones" src="../images/icones/excluir.png" alt="Visualizar cadastro"></a>
                        </td>    					
                        <td>Arquitetura</td>
                        <td>Responsável por estabelecer os padrões das tecnologias</td>
                        <td>Danilo Brayan Souza Taborda</td>
                        <td>05/02/2019</td>
                        <td>Danilo Brayan Souza Taborda</td>
                        <td>05/02/2019</td>
                        <td>Ativo</td>
                    </tr>
                </table>
            </fieldset>
        </div>
        <?php include "../rodape.php"; ?>
    </body>
</html>