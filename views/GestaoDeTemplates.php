<!DOCTYPE html>
<html>
    <head>
        <title>Gestão de Templates</title>
        <!-- Estilos -->
        <link rel="stylesheet" type="text/css" href="../styles/geral.css">
        <link rel="stylesheet" type="text/css" href="../styles/menu.css">
        <link rel="stylesheet" type="text/css" href="../styles/FormulariosDeGestao.css">

    </head>
    <body>
        <?php include "../menu.php"; ?>
        <div class="conteudo">
            <h3 align="center">Gestão de Templates</h3>
            <form>
                <table class="estruturaFormulario">
                    <tr>
                        <td class="nomeDosCampos">
                            <label>Nome do Template</label>
                        </td>
                        <td colspan="3">
                            <input type="text" name="GTTxtNomeDoTemplate" id="GTTxtNomeDoTemplate">
                        </td>
                    </tr>
                    <tr>
                        <td class="nomeDosCampos">
                            <label>Descrição</label>
                        </td>
                        <td colspan="3">
                            <textarea rows="5" cols="30" name="GTTxtDescricaoDoTemplate" id="GTTxtDescricaoDoTemplate"></textarea>
                        </td>
                    </tr>
                    <tr>
                        <td class="nomeDosCampos">
                            <label>Cliente</label>
                        </td>
                        <td>
                            <select name="GTTxtCliente" id="GTTxtCliente">
                                <option value="1">Petrobras</option>
                                <option value="2">Raízen</option>
                                <option value="3">Rumo</option>
                            </select>
                        </td>
                        <td class="nomeDosCampos">
                            <label>Data da criação</label>
                        </td>
                        <td>
                            <input type="text" name="GTTxtDataDaCriacaoDoTemplate" id="GTTxtDataDaCriacaoDoTemplate" value="04/02/2019">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input class="botoes" type="button" value="Adicionar template" onclick="alert('Adicionar template')">
                        </td>
                        <td>
                            <input class="botoes" type="button" value="Adicionar item" onclick="#">
                        </td>
                        <td>
                            <input class="botoes" type="button" value="Limpar template" onclick="#">
                        </td>
                        <td>
                            <input class="botoes" type="button" value="Salvar" onclick="#">
                        </td>
                    </tr>
                    <table align="center" class="gestao">
                        <th>Opção</th><th>Template</th><th>Categoria</th><th>Subcategoria</th><th>Nome dos itens</th><th>Equipe</th><th>Custos</th>
                        <tr class="linhaGestao">
                            <td class="colunaGestao">Exibir | Editar | Excluir</td>    					
                            <td class="colunaGestao">Ambiente de desenvolvimento na Cloud</td>
                            <td class="colunaGestao">OPEX</td>
                            <td class="colunaGestao">Serviços</td>
                            <td class="colunaGestao">Nome dos itens</td>
                            <td class="colunaGestao">Fornecedores Externos</td>
                            <td class="colunaGestao">R$ 100,00</td>
                        </tr>
                        <tr class="linhaGestao">
                            <td class="colunaGestao">Exibir | Editar | Excluir</td>
                            <td class="colunaGestao">Ambiente de desenvolvimento na Cloud</td>
                            <td class="colunaGestao">OPEX</td>
                            <td class="colunaGestao">Serviços</td>
                            <td class="colunaGestao">Nome dos itens</td>
                            <td class="colunaGestao">Fornecedores Externos</td>
                            <td class="colunaGestao">R$ 100,00</td>
                        </tr>
                    </table>	
                </table>
                <br />
                <br />
                <label>
                    Total do CAPEX
                </label>
                <input type="text" name="GTTxtTotalDoCAPEX" id="GTTxtTotalDoCAPEX">
                <label>
                    Total do OPEX
                </label>
                <input type="text" name="GTTxtTotalDoCAPEX" id="GTTxtTotalDoCAPEX">
            </form>

        </div>
    </body>
</html>