<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Gestão dos templates</title>
    </head>
    <body>
        <?php
        require_once '../controllers/Controller.php';
        require_once '../domains/Cliente.php';
        $control = new Controller();
        $cliente = new Cliente();
        ?>
        <?php include "../menu.php"; ?>
        <div class="conteudo">
            <fieldset>
                <legend>
                    <h3 class="tituloSeccao">Gestão dos templates</h3>
                </legend>
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
                                    <?php
                                    $read = $control->process("READ", new Cliente());
                                    foreach ($read[1] as $obj) {
                                        $c = new Cliente();
                                        $c = $obj;
                                        echo '<option value = ' . $c->getId() . '>' . $c->getNome() . '</option>';
                                    }
                                    //<option value="1">Petrobras</option>
                                    //<option value="2">Raízen</option>
                                    //<option value="3">Rumo</option>
                                    ?>
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
                    </table>
                </form>
            </fieldset>
            <fieldset>
                <legend>
                    <h3 class="tituloSeccao">Itens adicionados</h3>
                </legend>
                <table class="gestao">
                    <th>Opção</th><th>Template</th><th>Categoria</th><th>Subcategoria</th><th>Nome dos itens</th><th>Equipe</th><th>Custos</th>
                    <tr class="linhaGestao">
                        <td>
                            <a href="#"><img class="icones" src="../images/icones/ver.png" alt="Visualizar cadastro"></a>
                            <a href="#"><img class="icones" src="../images/icones/editar.png" alt="Visualizar cadastro"></a>
                            <a href="#"><img class="icones" src="../images/icones/excluir.png" alt="Visualizar cadastro"></a>
                        </td>    					
                        <td>Ambiente de desenvolvimento na Cloud</td>
                        <td>OPEX</td>
                        <td>Serviços</td>
                        <td>Nome dos itens</td>
                        <td>Fornecedores Externos</td>
                        <td>R$ 100,00</td>
                    </tr>
                    <tr class="linhaGestao">
                        <td>
                            <a href="#"><img class="icones" src="../images/icones/ver.png" alt="Visualizar cadastro"></a>
                            <a href="#"><img class="icones" src="../images/icones/editar.png" alt="Visualizar cadastro"></a>
                            <a href="#"><img class="icones" src="../images/icones/excluir.png" alt="Visualizar cadastro"></a>
                        </td>
                        <td>Ambiente de desenvolvimento na Cloud</td>
                        <td>OPEX</td>
                        <td>Serviços</td>
                        <td>Nome dos itens</td>
                        <td>Fornecedores Externos</td>
                        <td>R$ 100,00</td>
                    </tr>
                </table>
            </fieldset>
            <fieldset>
                <legend>
                    <h3 class="tituloSeccao">Totais</h3>
                </legend>
                <label>
                    Total do CAPEX
                </label>
                <input type="text" name="GTTxtTotalDoCAPEX" id="GTTxtTotalDoCAPEX">
                <br />
                <br />
                <label>
                    Total do OPEX
                </label>
                <input type="text" name="GTTxtTotalDoCAPEX" id="GTTxtTotalDoCAPEX">
            </fieldset>
        </div>
        <?php include "../rodape.php"; ?>
    </body>
</html>