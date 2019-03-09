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
        $categoria = new Categoria();
        $subcategoria = new Subcategoria();
        $moeda = new Moeda();
        $pagamento = new Pagamento();
        $equipe = new Equipe();
        ?>
        <?php include "../menu.php"; ?>
        <div class="conteudo">
            <span id="retorno"></span>
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
                                    <?php
                                    $read = $control->process("READ", new Equipe());
                                    foreach ($read[1] as $obj) {
                                        $e = new Equipe();
                                        $e = $obj;
                                        echo '<option value = ' . $e->getId() . '>' . $e->getNome() . '</option>';
                                    }
                                    ?>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td class="nomeDosCampos">
                                <label>Otimista</label>
                            </td>
                            <td>
                                <input class="alinhaCentro" type="number" <?php echo 'value =' . number_format($item->getOtimista(), 2, ',', '.') ?> name="GITxtOtimista" id="GITxtOtimista" onchange="execute('PERT')">
                            </td>
                            <td class="nomeDosCampos">
                                <label>Mais provável</label>
                            </td>
                            <td>
                                <input class="alinhaCentro" type="number" <?php echo 'value =' . number_format($item->getMaisProvavel(), 2, ',', '.') ?> name="GITxtMaisProvavel" id="GITxtMaisProvavel" onchange="execute('PERT')">
                            </td>
                            <td class="nomeDosCampos">
                                <label>Pessimista</label>
                            </td>
                            <td>
                                <input class="alinhaCentro" type="number" <?php echo 'value =' . number_format($item->getPessimista(), 2, ',', '.') ?> name="GITxtPessimista" id="GITxtPessimista" onchange="execute('PERT')">
                            </td>
                        </tr>                        
                        <tr>
                            <td class="nomeDosCampos">
                                <label>PERT</label>
                            </td>
                            <td>
                                <input class="disable" type="number" <?php echo 'value =' . number_format($item->getPert(), 2, ',', '.') ?> disabled name="GITxtPERT" id="GITxtPERT">
                            </td>
                            <td class="nomeDosCampos">
                                <label>Desvio padrão</label>
                            </td>
                            <td>
                                <input class="disable" type="number" <?php echo 'value =' . number_format($item->getDesvio(), 2, ',', '.') ?> disabled name="GITxtDesvioPadrao" id="GITxtDesvioPadrao">
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
                                    ?>
                                </select>
                            </td>
                            <td class="nomeDosCampos">
                                <label>Valor unitário</label>
                            </td>
                            <td>
                                <input class="alinhaCentro" type="number" <?php echo 'value =' . number_format($item->getValorUnitario(), 2, ',', '.') ?> name="GITxtValorUnitario" id="GITxtValorUnitario" onchange="execute('PERT')">
                            </td>
                            <td class="nomeDosCampos">
                                <label>Total</label>
                            </td> 
                            <td>
                                <input class="disable" type="number" <?php echo 'value =' . number_format($item->getTotal(), 2, ',', '.') ?> disabled name="GITxtTotal" id="GITxtTotal">
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
                                    ?>
                                </select>
                            </td>
                            <td colspan="2">
                                <input class="botoes" type="button" value="Salvar" onclick="execute('GI')">
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