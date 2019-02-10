<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Gestão das empresas</title>
    </head>
    <body>
        <?php include "../menu.php"; ?>
        <div class="conteudo">
            <fieldset>
                <legend>
                    <h3 class="tituloSeccao">Gestão das empresas</h3>
                </legend>
                <form>
                    <table class="estruturaFormulario">
                        <tr>
                            <td class="nomeDosCampos">
                                <label>Nome da empresa</label>
                            </td>
                            <td colspan="3">
                                <input type="text" name="GETxtNomeDaEmpresa" id="GETxtNomeDaEmpresa">
                            </td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td class="nomeDosCampos">
                                <label>Descrição</label>
                            </td>
                            <td colspan="3">
                                <textarea rows="5" cols="30" name="GETxtDescricaoDaEmpresa" id="GETxtDescricaoDaEmpresa"></textarea>
                            </td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td class="nomeDosCampos">
                                <label>Logotipo</label>
                            </td>
                            <td>
                                <input type="text" name="GETxtLogotipo" id="GETxtLogotipo">
                            </td>
                            <td>
                                <input class="botoes" type="button" value="Fazer upload" onclick="alert('Adicionar template')">
                            </td>
                            <td>
                                <input class="botoes" type="button" value="Salvar" onclick="#">                            
                            </td>                       
                        </tr>
                    </table>
                </form>
            </fieldset>
            <fieldset>
                <legend>
                    <h3 class="tituloSeccao">Empresas cadastradas</h3>
                </legend>            
                <table class="gestao">                    
                    <th>Gestão</th><th>Nome do cliente</th><th>Descrição</th><th>Criado por</th><th>Criado em</th><th>Modificado por</th><th>Modificado em</th><th>Opção</th>
                        <tr class="linhaGestao">
                            <td>
                                <a href="#"><img class="icones" src="../images/icones/ver.png" alt="Visualizar cadastro"></a>
                                <a href="#"><img class="icones" src="../images/icones/editar.png" alt="Visualizar cadastro"></a>
                                <a href="#"><img class="icones" src="../images/icones/excluir.png" alt="Visualizar cadastro"></a>
                            </td>   					
                            <td>Petrobras</td>
                            <td>Empresa nacional de Petróleo</td>
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
                            <td>Raízen</td>
                            <td>Empresa sucroalcoleira</td>
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