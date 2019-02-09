<!DOCTYPE html>
<html>
    <head>
        <title>Gestão de Aprovadores</title>
        <!-- Estilos -->
        <link rel="stylesheet" type="text/css" href="../styles/geral.css">
        <link rel="stylesheet" type="text/css" href="../styles/menu.css">
        <link rel="stylesheet" type="text/css" href="../styles/FormulariosDeGestao.css">

    </head>
    <body>
        <?php include "../menu.php"; ?>
        <div class="conteudo">
            <h3>Gestão de Aprovadores</h3>
            <form>
                <table class="estruturaFormulario">
                    <tr>
                        <td class="nomeDosCampos">
                            <label>Descrição do aprovador</label>
                        </td>
                        <td colspan="3">
                            <input type="text" name="GATxtDescricaoDoAprovador" id="GATxtDescricaoDoAprovador">
                        </td>
                    </tr>
                    <tr>
                        <td class="nomeDosCampos">
                            <label>Mínimo</label>
                        </td>
                        <td>
                            <input type="text" name="GATxtValorMinimo" id="GATxtValorMinimo">
                        </td>
                        <td class="nomeDosCampos">
                            <label>Máximo</label>
                        </td>
                        <td>
                            <input type="text" name="GATxtValorMaximo" id="GATxtValorMaximo">
                        </td>
                    <tr>
                    </tr>
                        <td class="nomeDosCampos">
                            <label>Email do aprovador</label>
                        </td>
                        <td>
                            <input type="text" name="GATxtEmailDoAprovador" id="GATxtEmailDoAprovador">
                        </td>
                        <td class="nomeDosCampos">
                            <label>Email do backup</label>
                        </td>
                        <td>
                            <input type="text" name="GATxtEmailDoBackupDoAprovador" id="GATxtEmailDoBackupDoAprovador">
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
                <label>Aprovadores cadastrados</label>
                <br />
                <br />
                <th>Gestão</th><th>Descrição</th><th>Mínimo</th><th>Máximo</th><th>Email do aprovador</th><th>Email do backup</th><th>Criado por</th><th>Criado em</th><th>Opção</th>
                <tr class="linhaGestao">
                    <td class="colunaGestao">Exibir | Editar | Excluir</td>    					
                    <td class="colunaGestao">Aprovação do Especialista</td>
                    <td class="colunaGestao">R$ 0,00</td>
                    <td class="colunaGestao">R$ 50.000,00</td>
                    <td class="colunaGestao">especialista@email.com</td>
                    <td class="colunaGestao">backupDoespecialista@email.com</td>
                    <td class="colunaGestao">Danilo Brayan Souza Taborda</td>
                    <td class="colunaGestao">09/02/2019</td>
                    <td class="colunaGestao">Ativo</td>
                </tr>
                <tr class="linhaGestao">
                    <td class="colunaGestao">Exibir | Editar | Excluir</td>    					
                    <td class="colunaGestao">Aprovação do Especialista</td>
                    <td class="colunaGestao">R$ 50.000,00</td>
                    <td class="colunaGestao">R$ 100.000,00</td>
                    <td class="colunaGestao">especialista@email.com</td>
                    <td class="colunaGestao">backupDoespecialista@email.com</td>
                    <td class="colunaGestao">Danilo Brayan Souza Taborda</td>
                    <td class="colunaGestao">09/02/2019</td>
                    <td class="colunaGestao">Ativo</td>
                </tr>
            </table>
        </div>
    </body>
</html>