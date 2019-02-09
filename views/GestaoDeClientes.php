<!DOCTYPE html>
<html>
    <head>
        <title>Gestão de Clientes</title>
        <!-- Estilos -->
        <link rel="stylesheet" type="text/css" href="../styles/geral.css">
        <link rel="stylesheet" type="text/css" href="../styles/menu.css">
        <link rel="stylesheet" type="text/css" href="../styles/FormulariosDeGestao.css">

    </head>
    <body>
        <?php include "../menu.php"; ?>
        <div class="conteudo">
            <h3>Gestão de Clientes</h3>
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
                        <td>
                            <input class="botoes" type="button" value="Salvar" onclick="#">                            
                        </td>                       
                    </tr>
                </table>
            </form>
            <table class="gestao">
                <br />
                <br />
                <label>Clientes cadastrados</label>
                <br />
                <br />
                <th>Gestão</th><th>Cliente</th><th>Email</th><th>Confirmar email</th><th>Email do backup</th><th>Confirmar email do backup</th><th>Opção</th>                    
            </table>
        </div>
    </body>
</html>