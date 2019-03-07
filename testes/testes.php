<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Gestão dos itens</title>
        <script type="text/javascript" src="../AJAXs/gi.js"></script>
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
                    <h3 class="tituloSeccao">Gestão dos itens - Teste</h3>
                </legend>
                <form>
                    <table class="estruturaFormulario">
                        <tr>
                            <td class="nomeDosCampos">
                                <label>Nome do item</label>
                            </td>
                            <td colspan="5">
                                <?php
                                //$item->setNome("Teste");
                                if (empty($item->getNome())) {
                                    $nome = "";
                                } else {
                                    $nome = "value = " . $item->getNome();
                                }
                                echo '
                                    <input type = "text" ' . $nome . ' name = "GITxtNomeDoItem" id = "GITxtNomeDoItem">
                                    '
                                ?>
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
                                <label>Otimista</label>
                            </td>
                            <td>
                                <input type="number" <?php echo 'value =' . $item->getOtimista() ?> name="GITxtOtimista" id="GITxtOtimista">
                            </td>
                            <td class="nomeDosCampos">
                                <label>Mais provável</label>
                            </td>
                            <td>
                                <input type="text" <?php echo 'value =' . $item->getMaisProvavel() ?> name="GITxtMaisProvavel" id="GITxtMaisProvavel">
                            </td>
                            <td class="nomeDosCampos">
                                <label>Pessimista</label>
                            </td>
                            <td>
                                <input type="text" <?php echo 'value =' . $item->getPessimista() ?> name="GITxtPessimista" id="GITxtPessimista">
                            </td>
                        </tr>
                        <tr>
                            <td class="nomeDosCampos">
                                <label>PERT</label>
                            </td>
                            <td>
                                <input type="text" <?php echo 'value =' . $item->getPert() ?> name="GITxtPERT" id="GITxtPERT">
                            </td>
                            <td class="nomeDosCampos">
                                <label>Desvio padrão</label>
                            </td>
                            <td>
                                <input type="text" <?php echo 'value =' . $item->getDesvio() ?> name="GITxtDesvioPadrao" id="GITxtDesvioPadrao">
                            </td>
                            <td class="nomeDosCampos">
                                <label>Desvios</label>
                            </td>
                            <td>
                                <select name="GITxtDesvios" id="GITxtDesvios">
                                    <option value="2">2</option>
                                    <option value="1">1</option>
                                    <option value="0">0</option>
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
                                <input type="text" <?php echo 'value =' . $item->getValorUnitario() ?> name="GITxtValorUnitario" id="GITxtValorUnitario">
                            </td>
                            <td class="nomeDosCampos">
                                <label>Total</label>
                            </td>
                            <td>
                                <input type="text" <?php echo 'value =' . $item->getTotal() ?> name="GITxtTotal" id="GITxtTotal">
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
                                    <?php
                                    $read = $control->process("READ", new Template());
                                    foreach ($read[1] as $obj) {
                                        $t = new Template();
                                        $t = $obj;
                                        echo '<option value = ' . $t->getId() . '> ' . $t->getNome() . '</option>';
                                    }
                                    //<option value="1">Ambiente virtual windows</option>
                                    //<option value="2">Ambiente virtual linux </option>
                                    ?>
                                </select>
                            </td>
                            <td colspan="2">
                                <input class="botoes" type="button" value="Salvar" onclick="execute()">
                            </td>
                        </tr>
                    </table>
                </form>
            </fieldset>
            <span id="retorno"></span>
            <fieldset>
                <legend>
                    <h3 class="tituloSeccao">Itens cadastrados</h3>
                </legend>
                <table class="gestao">
                    <th>Opção</th><th>Nome do item</th><th>PERT</th><th>Desvio Padrão</th><th>PERT + Desvios</th><th>Moeda</th><th>Valor unitário</th><th>Total</th><th>Categoria</th><th>Subcategoria</th><th>Pagamento</th><th>Template associado</th>
                    <?php
                    $readItens = $control->process("READ", new Item());
                    foreach ($readItens[1] as $obj) {
                        $item = new Item();
                        $item = $obj;
                        echo '<tr class = "linhaGestao">
                              <td>
                              <a href = "#"><img class = "icones" src = "../images/icones/ver.png" alt = "Visualizar cadastro"></a>
                              <a href = "#"><img class = "icones" src = "../images/icones/editar.png" alt = "Visualizar cadastro"></a>
                              <a href = "#"><img class = "icones" src = "../images/icones/excluir.png" alt = "Visualizar cadastro"></a>
                              </td>';
                        echo '<td>' . $item->getNome() . '</td>';
                        echo '<td>' . number_format($item->getPert(), 2, ',', '.') . '</td>';
                        echo '<td>' . number_format($item->getDesvio(), 2, ',', '.') . '</td>';
                        echo '<td>' . number_format(($item->getPert() + $item->getDesvio()), 2, ',', '.') . '</td>';
                        echo '<td>(' . $item->getMoeda()->getSimbolo() . ') ' . $item->getMoeda()->getNome() . '</td>';
                        echo '<td>' . number_format($item->getValorUnitario(), 2, ',', '.') . '</td>';
                        echo '<td>R$ ' . number_format($item->getTotal(), 2, ',', '.') . '</td>';
                        echo '<td>' . $item->getCategoria()->getNome() . '</td>';
                        echo '<td>' . $item->getSubCategoria()->getNome() . '</td>';
                        echo '<td>' . $item->getPagamento()->getNome() . '</td>';
                        $read = $control->process("READ", new Template());
                        foreach ($read[1] as $obj) {
                            $templ = new Template();
                            $templ = $obj;
                            foreach ($templ->getItens() as $objI) {
                                $it = new Item();
                                $it = $objI;
                                if ($it->getId() === $item->getId()) {
                                    echo '<td>' . $templ->getNome() . '</td>';
                                    break;
                                }
                            }
                        }
                        echo '</tr>';
                    }
                    ?>
                </table>
            </fieldset>
        </div>
        <?php include "../rodape.php"; ?>
    </body>
</html>