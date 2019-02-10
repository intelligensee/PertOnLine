<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Gestão dos aprovadores</title>
    </head>
    <body>
        <?php include "../menu.php"; ?>
        <div class="conteudo">
            <fieldset>
                <legend>
                    <h3 class="tituloSeccao">Gestão dos aprovadores</h3>
                </legend>
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
                            <td></td>
                            <td></td>
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
                    <h3 class="tituloSeccao">Aprovadores cadastrados</h3>
                </legend>
                <table class="gestao">
                    <th>Gestão</th><th>Descrição</th><th>Mínimo</th><th>Máximo</th><th>Email do aprovador</th><th>Email do backup</th><th>Criado por</th><th>Criado em</th><th>Opção</th>
                        <tr class="linhaGestao">
                            <td>
                                <a href="#"><img class="icones" src="../images/icones/ver.png" alt="Visualizar cadastro"></a>
                                <a href="#"><img class="icones" src="../images/icones/editar.png" alt="Visualizar cadastro"></a>
                                <a href="#"><img class="icones" src="../images/icones/excluir.png" alt="Visualizar cadastro"></a>
                            </td>    					
                            <td>Aprovação do Especialista</td>
                            <td>R$ 0,00</td>
                            <td>R$ 50.000,00</td>
                            <td>especialista@email.com</td>
                            <td>backupDoespecialista@email.com</td>
                            <td>Danilo Brayan Souza Taborda</td>
                            <td>09/02/2019</td>
                            <td>Ativo</td>
                        </tr>
                        <tr class="linhaGestao">
                            <td>
                                <a href="#"><img class="icones" src="../images/icones/ver.png" alt="Visualizar cadastro"></a>
                                <a href="#"><img class="icones" src="../images/icones/editar.png" alt="Visualizar cadastro"></a>
                                <a href="#"><img class="icones" src="../images/icones/excluir.png" alt="Visualizar cadastro"></a>
                            </td>    					
                            <td>Aprovação do Especialista</td>
                            <td>R$ 50.000,00</td>
                            <td>R$ 100.000,00</td>
                            <td>especialista@email.com</td>
                            <td>backupDoespecialista@email.com</td>
                            <td>Danilo Brayan Souza Taborda</td>
                            <td>09/02/2019</td>
                            <td>Ativo</td>
                        </tr>
                </table>
            </fieldset>
        </div>
        <?php include "../rodape.php"; ?>
    </body>
</html>