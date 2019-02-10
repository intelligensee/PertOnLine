<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Gestão dos acessos</title>
    </head>
    <body>
        <?php include "../menu.php"; ?>
        <div class="conteudo">
            <fieldset>
                <legend>
                    <h3 class="tituloSeccao">Gestão dos acessos</h3>
                </legend>
                <form>
                    <table class="estruturaFormulario">
                        <tr>                        
                            <td class="nomeDosCampos">
                                <label>Perfil de acesso</label>
                            </td>
                            <td colspan="3">
                                <select name="GATxtPerfilDeAcesso" id="GATxtPerfilDeAcesso">
                                    <option value="1">Administrador</option>
                                    <option value="2">Desenvolvedor</option>
                                    <option value="3">Colaborador</option>
                                    <option value="4">Leitura</option>
                                </select>
                            </td>
                        <tr>
                        </tr>
                            <td class="nomeDosCampos">
                                <label>Usuário</label>
                            </td>
                            <td col>
                                <input type="text" name="GATxtNomedoUsuario" id="GATxtNomedoUsuario">
                            </td>
                        </tr>
                        </tr>
                            <td class="nomeDosCampos">
                                <label>Descrição</label>
                            </td>
                            <td colspan="3">
                                <textarea rows="5" cols="30" name="GATxtDescricaoDoAcesso" id="GATxtDescricaoDoAcesso"></textarea>
                            </td>
                        </tr>
                        </tr>
                            <td class="nomeDosCampos">
                                <label>Email</label>
                            </td>
                            <td>
                                <input type="text" name="GATxtEmailDoUsuario" id="GATxtEmailDoUsuario">
                            </td>
                            <td class="nomeDosCampos">
                                <label>Confirmar email</label>
                            </td>
                            <td>
                                <input type="text" name="GATxtConfirmacaoDoEmailDoUsuario" id="GATxtConfirmacaoDoEmailDoUsuario">
                            </td>
                        </tr>
                        </tr>
                            <td class="nomeDosCampos">
                                <label>Senha</label>
                            </td>
                            <td>
                                <input type="text" name="GATxtSenhaDoUsuario" id="GATxtSenhaDoUsuario">
                            </td>
                            <td class="nomeDosCampos">
                                <label>Confirmar senha</label>
                            </td>
                            <td>
                                <input type="text" name="GATxtConfirmarSenhaDoUsuario" id="GATxtConfirmarSenhaDoUsuario">
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
                    <h3 class="tituloSeccao">Acessos cadastrados</h3>
                </legend>
                <table class="gestao">
                    <th>Gestão</th><th>Usuário</th><th>Descrição</th><th>Perfil de acesso</th><th>Criado por</th><th>Criado em</th><th>Modificado por</th><th>Modificado em</th><th>Opção</th>
                        <tr class="linhaGestao">
                            <td>
                                <a href="#"><img class="icones" src="../images/icones/ver.png" alt="Visualizar cadastro"></a>
                                <a href="#"><img class="icones" src="../images/icones/editar.png" alt="Visualizar cadastro"></a>
                                <a href="#"><img class="icones" src="../images/icones/excluir.png" alt="Visualizar cadastro"></a>
                            </td>
                            <td>dbrayan</td>
                            <td>Usário responsável pelo frontend do sistema</td>
                            <td>Desenvolvedor</td>
                            <td>Danilo Brayan Souza Taborda</td>
                            <td>09/0/2019</td>
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
                            <td>ronaldospin</td>
                            <td>Usário responsável pelo backend do sistema</td>
                            <td>Desenvolvedor</td>
                            <td>Danilo Brayan Souza Taborda</td>
                            <td>09/0/2019</td>
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
                            <td>ronaldospin</td>
                            <td>Usário responsável pelo backend do sistema</td>
                            <td>Desenvolvedor</td>
                            <td>Danilo Brayan Souza Taborda</td>
                            <td>09/0/2019</td>
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