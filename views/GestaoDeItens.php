<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Gestão dos itens</title>
    </head>
    <body>
        <?php
        require_once '../controllers/Controller.php';
        require_once '../domains/Item.php';
        require_once '../domains/Moeda.php';
        require_once '../domains/Categoria.php';
        require_once '../domains/Subcategoria.php';
        require_once '../domains/Pagamento.php';
        require_once '../domains/Equipe.php';
        $control = new Controller();
        $item = new Item();
        $item->setMoeda(new Moeda());
        $categoria = new Categoria();
        $subcategoria = new Subcategoria();
        $moeda = new Moeda();
        $pagamento = new Pagamento();
        $equipe = new Equipe();
        ?>
        <?php include "../menu.php"; ?>
        <div class="conteudo">
            <fieldset>
                <legend>
                    <h3 class="tituloSeccao">Gestão dos itens</h3>
                </legend>
                <form>
                    <table class="estruturaFormulario">
                        <tr>
                            <td class="nomeDosCampos">
                                <label>Nome do item</label>
                            </td>
                            <td colspan="5">
                                <input type="text" name="GITxtNomeDoItem" id="GITxtNomeDoItem">
                            </td>
                        </tr>
                        <tr>
                            <td class="nomeDosCampos">
                                <label>Descrição</label>
                            </td>
                            <td colspan="5">
                                <textarea rows="5" cols="30" name="GITxtDescricaoDoItem" id="GITxtDescricaoDoItem"></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td class="nomeDosCampos">
                                <label>Equipe</label>
                            </td>
                            <td colspan="5">
                                <select name="GITxtEquipe" id="GITxtEquipe">
                                    <option value="1">Infra Projetos</option>
                                    <option value="1">Redes</option>
                                    <option value="2">Windows</option>
                                    <option value="2">Arquitetura</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td class="nomeDosCampos">
                                <label>Otimista</label>
                            </td>
                            <td>
                                <input class="alinhaCentro" type="text" name="GITxtOtimista" id="GITxtOtimista">
                            </td>
                            <td class="nomeDosCampos">
                                <label>Mais provável</label>
                            </td>
                            <td>
                                <input class="alinhaCentro" type="text" name="GITxtMaisProvavel" id="GITxtMaisProvavel">
                            </td>
                            <td class="nomeDosCampos">
                                <label>Pessimista</label>
                            </td>
                            <td>
                                <input class="alinhaCentro" type="text" name="GITxtPessimista" id="GITxtPessimista">
                            </td>
                        </tr>                        
                        <tr>
                            <td class="nomeDosCampos">
                                <label>PERT</label>
                            </td>
                            <td>
                                <input class="disable" type="text" disabled name="GITxtPERT" id="GITxtPERT">
                            </td>
                            <td class="nomeDosCampos">
                                <label>Desvio padrão</label>
                            </td>
                            <td>
                                <input class="disable" type="text" disabled name="GITxtDesvioPadrao" id="GITxtDesvioPadrao">
                            </td>
                            <td class="nomeDosCampos">
                                <label>Desvios</label>
                            </td>
                            <td>
                                <select name="GITxtDesvios" id="GITxtDesvios">
                                    <option value="1">2</option>
                                    <option value="2">1</option>
                                    <option value="3">0</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td class="nomeDosCampos">
                                <label>Moeda</label>
                            </td>
                            <td>
                                <select name="GITxtMoedas" id="GITxtMoedas">
                                    <?php
                                    $read = $control->process("READ", new Moeda());
                                    foreach ($read[1] as $obj) {
                                        $m = new Moeda();
                                        $m = $obj;
                                        echo '<option value = ' . $m->getId() . '>(' . $m->getSimbolo() . ') ' . $m->getNome() . '</option>';
                                    }
                                    //<option value="1">(R$) Reais</option>
                                    //<option value="2">(U$) Dólar</option>
                                    ?>
                                </select>
                            </td>
                            <td class="nomeDosCampos">
                                <label>Valor unitário</label>
                            </td>
                            <td>
                                <input class="alinhaCentro" type="text" name="GITxtValorUnitario" id="GITxtValorUnitario">
                            </td>
                            <td class="nomeDosCampos">
                                <label>Total</label>
                            </td> 
                            <td>
                                <input class="disable" type="text" disabled name="GITxtTotal" id="GITxtTotal">
                            </td>
                        </tr>
                        <tr>
                            <td class="nomeDosCampos">
                                <label>Categoria</label>
                            </td>
                            <td>
                                <select name="GITxtCategoria" id="GITxtCategoria">
                                    <?php
                                    $read = $control->process("READ", new Categoria());
                                    foreach ($read[1] as $obj) {
                                        $cat = new Categoria();
                                        $cat = $obj;
                                        echo '<option value = ' . $cat->getId() . '> ' . $cat->getNome() . '</option>';
                                    }
                                    //<option value="1">CAPEX</option>
                                    //<option value="2">OPEX</option>
                                    ?>
                                </select>
                            </td>
                            <td class="nomeDosCampos">
                                <label>Subcategoria</label>
                            </td>
                            <td>
                                <select name="GITxtSubcategoria" id="GITxtSubcategoria">
                                    <?php
                                    $read = $control->process("READ", new Subcategoria());
                                    foreach ($read[1] as $obj) {
                                        $scat = new Subcategoria();
                                        $scat = $obj;
                                        echo '<option value = ' . $scat->getId() . '> ' . $scat->getNome() . '</option>';
                                    }
                                    //<option value="1">Mão de Obra</option>
                                    //<option value="2">Viagens</option>
                                    ?>
                                </select>
                            </td>
                            <td class="nomeDosCampos">
                                <label>Pagamento</label>
                            </td>
                            <td>
                                <select name="GITxtPagamento" id="GITxtPagamento">
                                    <?php
                                    $read = $control->process("READ", new Pagamento());
                                    foreach ($read[1] as $obj) {
                                        $p = new Subcategoria();
                                        $p = $obj;
                                        echo '<option value = ' . $p->getId() . '> ' . $p->getNome() . '</option>';
                                    }
                                    //<option value="1">Mensal</option>
                                    //<option value="2">Anual</option>
                                    ?>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td class="nomeDosCampos">
                                <label>Associar template</label>
                            </td>
                            <td colspan="3">
                                <select name="GITxtAssociarTemlate" id="GITxtAssociarTemlate">
                                    <option value="1">Ambiente virtual windows</option>
                                    <option value="2">Ambiente virtual linux </option>
                                </select>
                            </td>
                            <td colspan="2">
                                <input class="botoes" type="button" value="Salvar" onclick="#">
                            </td>
                        </tr>
                    </table>
                </form>
            </fieldset>
            <fieldset>
                <legend>
                    <h3 class="tituloSeccao">Itens cadastrados</h3>
                </legend>
                <table class="gestao">
                    <th>Opção</th><th>Nome do item</th><th>PERT</th><th>Desvio Padrão</th><th>Desvios</th><th>PERT + Desvios</th><th>Moeda</th><th>Valor unitário</th><th>Total</th><th>Categoria</th><th>Subcategoria</th><th>Pagamento</th><th>Template associado</th>
                    <tr class="linhaGestao">
                        <td>
                            <a href="#"><img class="icones" src="../images/icones/ver.png" alt="Visualizar cadastro"></a>
                            <a href="#"><img class="icones" src="../images/icones/editar.png" alt="Visualizar cadastro"></a>
                            <a href="#"><img class="icones" src="../images/icones/excluir.png" alt="Visualizar cadastro"></a>
                        </td>    					
                        <td>Máquina virtual</td>
                        <td>1</td>
                        <td>0</td>
                        <td>2</td>
                        <td>1</td>
                        <td>(U$) Dólar</td>
                        <td>100,00</td>
                        <td>R$ 400,00</td>
                        <td>CAPEX</td>
                        <td>Aquisição de reposição</td>
                        <td>Uma vez</td>
                        <td>Ambiente virtual windows</td>
                    </tr>
                    <tr class="linhaGestao">
                        <td>
                            <a href="#"><img class="icones" src="../images/icones/ver.png" alt="Visualizar cadastro"></a>
                            <a href="#"><img class="icones" src="../images/icones/editar.png" alt="Visualizar cadastro"></a>
                            <a href="#"><img class="icones" src="../images/icones/excluir.png" alt="Visualizar cadastro"></a>
                        </td>    					
                        <td>Configurar máquina virtual</td>
                        <td>2,5</td>
                        <td>0,5</td>
                        <td>2</td>
                        <td>3,5</td>
                        <td>(R$) Reais</td>
                        <td>100,00</td>
                        <td>R$ 350,00</td>
                        <td>CAPEX</td>
                        <td>Mão de Obra</td>
                        <td>Uma vez</td>
                        <td>Ambiente virtual windows</td>
                    </tr>
                </table>
            </fieldset>
        </div>
        <?php include "../rodape.php"; ?>
    </body>
</html>