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
        $control = new Controller();
        $moeda = new Moeda();
        $categoria = new Categoria();
        $subcategoria = new Subcategoria();
        $pagamento = new Pagamento();
        ?>
        <?php include "../menu.php"; ?>
        <div class="conteudo">
            <fieldset>
                <legend>
                    <h3 class="tituloSeccao">Gestão dos itens</h3>
                </legend>
                <form method="post">
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
                                <label>Otimista</label>
                            </td>
                            <td>
                                <input type="text" name="GITxtOtimista" id="GITxtOtimista">
                            </td>
                            <td class="nomeDosCampos">
                                <label>Mais provável</label>
                            </td>
                            <td>
                                <input type="text" name="GITxtMaisProvavel" id="GITxtMaisProvavel">
                            </td>
                            <td class="nomeDosCampos">
                                <label>Pessimista</label>
                            </td>
                            <td>
                                <input type="text" name="GITxtPessimista" id="GITxtPessimista">
                            </td>
                        </tr>
                        <tr>
                            <td class="nomeDosCampos">
                                <label>PERT</label>
                            </td>
                            <td>
                                <input type="text" name="GITxtPERT" id="GITxtPERT">
                            </td>
                            <td class="nomeDosCampos">
                                <label>Desvio padrão</label>
                            </td>
                            <td>
                                <input type="text" name="GITxtDesvioPadrao" id="GITxtDesvioPadrao">
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
                                <input type="text" name="GITxtValorUnitario" id="GITxtValorUnitario">
                            </td>
                            <td class="nomeDosCampos">
                                <label>Total</label>
                            </td>
                            <td>
                                <input type="text" name="GITxtTotal" id="GITxtTotal">
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
                                <input class="botoes" type="submit" value="Salvar">
                            </td>
                        </tr>
                    </table>
                </form>
            </fieldset>
            <?php
            $flag = true;
            if (isset($_POST['GITxtNomeDoItem']) && !empty($_POST['GITxtNomeDoItem'])) {
                $nome = $_POST['GITxtNomeDoItem'];
            } else {
                $flag = false;
            }
            if (isset($_POST['GITxtDescricaoDoItem']) && !empty($_POST['GITxtDescricaoDoItem'])) {
                $desc = $_POST['GITxtDescricaoDoItem'];
            } else {
                $flag = false;
            }
            if (isset($_POST['GITxtOtimista']) && !empty($_POST['GITxtOtimista'])) {
                $otimista = $_POST['GITxtOtimista'];
            } else {
                $flag = false;
            }
            if (isset($_POST['GITxtMaisProvavel']) && !empty($_POST['GITxtMaisProvavel'])) {
                $maisProv = $_POST['GITxtMaisProvavel'];
            } else {
                $flag = false;
            }
            if (isset($_POST['GITxtPessimista']) && !empty($_POST['GITxtPessimista'])) {
                $pessimista = $_POST['GITxtPessimista'];
            } else {
                $flag = false;
            }
            if (isset($_POST['GITxtDesvios']) && !empty($_POST['GITxtDesvios'])) {
                $qtdDesvios = $_POST['GITxtDesvios'];
            } else {
                $flag = false;
            }
            if (isset($_POST['GITxtMoedas']) && !empty($_POST['GITxtMoedas'])) {
                $moeda = $_POST['GITxtMoedas'];
            } else {
                $flag = false;
            }
            if (isset($_POST['GITxtValorUnitario']) && !empty($_POST['GITxtValorUnitario'])) {
                $valor = $_POST['GITxtValorUnitario'];
            } else {
                $flag = false;
            }
            if (isset($_POST['GITxtCategoria']) && !empty($_POST['GITxtCategoria'])) {
                $categoria = $_POST['GITxtCategoria'];
            } else {
                $flag = false;
            }
            if (isset($_POST['GITxtSubcategoria']) && !empty($_POST['GITxtSubcategoria'])) {
                $subCategoria = $_POST['GITxtSubcategoria'];
            } else {
                $flag = false;
            }
            if (isset($_POST['GITxtPagamento']) && !empty($_POST['GITxtPagamento'])) {
                $pagamento = $_POST['GITxtPagamento'];
            } else {
                $flag = false;
            }
            $m = new Moeda();
            $c = new Categoria();
            $s = new Subcategoria();
            $p = new Pagamento();
            $i = new Item();
            $m->setId($moeda);
            $c->setId($categoria);
            $s->setId($subCategoria);
            $p->setId($pagamento);
            $i->setMoeda($m);
            $i->setCategoria($c);
            $i->setSubCategoria($s);
            $i->setPagamento($p);
            $i->setNome($nome);
            $i->setDescricao($desc);
            $i->setOtimista($otimista);
            $i->setMaisProvavel($maisProv);
            $i->setPessimista($pessimista);
            $i->setQtdDesvios($qtdDesvios);
            echo '<pre>';
            print_r($i);
            echo '</pre>';
            ?>
            <fieldset>
                <legend>
                    <h3 class="tituloSeccao">Itens cadastrados</h3>
                </legend>
                <table class="gestao">
                    <th>Opção</th><th>Nome do item</th><th>PERT</th><th>Desvio Padrão</th><th>PERT + Desvios</th><th>Moeda</th><th>Valor unitário</th><th>Total</th><th>Categoria</th><th>Subcategoria</th><th>Pagamento</th><th>Template associado</th>
                    <tr class="linhaGestao">
                        <td>
                            <a href="#"><img class="icones" src="../images/icones/ver.png" alt="Visualizar cadastro"></a>
                            <a href="#"><img class="icones" src="../images/icones/editar.png" alt="Visualizar cadastro"></a>
                            <a href="#"><img class="icones" src="../images/icones/excluir.png" alt="Visualizar cadastro"></a>
                        </td>    					
                        <td>Máquina virtual</td>
                        <td>1</td>
                        <td>0</td>
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
        <?php
        ?>
    </body>
</html>