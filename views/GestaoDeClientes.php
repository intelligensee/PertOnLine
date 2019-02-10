<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Gestão dos clientes</title>
    </head>
    <body>
        <?php include "../menu.php"; ?>
        <div class="conteudo">
            <fieldset>
                <legend>
                    <h3 class="tituloSeccao">Gestão dos clientes</h3>
                </legend>
                <form>
                    <table class="estruturaFormulario">
                        <tr>                        
                            <td class="nomeDosCampos">
                                <label>Nome do cliente</label>
                            </td>
                            <td>
                                <input type="text" name="GCTxtNomeDoCliente" id="GCTxtNomeDoCliente">
                            </td>
                            <td class="nomeDosCampos">
                                <label>Cliente</label>
                            </td>
                            <td>
                                <select name="GCTxtClientes" id="GCTxtClientes">
                                    <option value="1">Petrobras</option>
                                    <option value="2">Raízen</option>
                                    <option value="3">Rumo</option>
                                </select>
                            </td>
                        <tr>
                        </tr>
                            <td class="nomeDosCampos">
                                <label>Email</label>
                            </td>
                            <td>
                                <input type="text" name="GCTxtEmailDoCliente" id="GCTxtEmailDoCliente">
                            </td>
                            <td class="nomeDosCampos">
                                <label>Confirmar email</label>
                            </td>
                            <td>
                                <input type="text" name="GCTxtConfirmacaoDoEmail" id="GCTxtConfirmacaoDoEmail">
                            </td>
                        </tr>
                        </tr>
                            <td class="nomeDosCampos">
                                <label>Email do backup</label>
                            </td>
                            <td>
                                <input type="text" name="GCTxtEmailDoBackupDoCliente" id="GCTxtEmailDoBackupDoCliente">
                            </td>
                            <td class="nomeDosCampos">
                                <label>Confirmar email do backup</label>
                            </td>
                            <td>
                                <input type="text" name="GCTxtConfirmacaoDoEmailDoBackup" id="GCTxtConfirmacaoDoEmailDoBackup">
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
                    <h3 class="tituloSeccao">Clientes cadastrados</h3>
                </legend>
                <table class="gestao">                    
                    <th>Gestão</th><th>Cliente</th><th>Email</th><th>Confirmar email</th><th>Email do backup</th><th>Confirmar email do backup</th><th>Opção</th>
                    <tr class="linhaGestao">
                            <td>
                                <a href="#"><img class="icones" src="../images/icones/ver.png" alt="Visualizar cadastro"></a>
                                <a href="#"><img class="icones" src="../images/icones/editar.png" alt="Visualizar cadastro"></a>
                                <a href="#"><img class="icones" src="../images/icones/excluir.png" alt="Visualizar cadastro"></a>
                            </td>
                            <td>Ronaldo dos Santos Pinheiro</td>
                            <td>ronaldospin@hotmail.com</td>
                            <td>ronaldospin@hotmail.com</td>
                            <td>danilobrayan@gmail.com</td>
                            <td>danilobrayan@gmail.com</td>
                            <td>Ativo</td>
                        </tr>
                </table>
            </fieldset>
        </div>
        <?php include "../rodape.php"; ?>
    </body>
</html>