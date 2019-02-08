<!DOCTYPE html>
<html>
    <head>
        <title>Gestão de Itens</title>
        <!-- Estilos -->
        <link rel="stylesheet" type="text/css" href="../styles/geral.css">
        <link rel="stylesheet" type="text/css" href="../styles/menu.css">
        <link rel="stylesheet" type="text/css" href="../styles/FormulariosDeGestao.css">

    </head>
    <body>
        <?php
        require_once '../controllers/Controller.php';
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
            <h3 align="center">Gestão de Itens</h3>
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
                            <label>Desvio Padrão</label>
                        </td>
                        <td>
                            <input type="text" name="GITxtDesvioPadrao" id="GITxtDesvioPadrao">
                        </td>
                        <td class="nomeDosCampos">
                            <label>Devios</label>
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
                                <option value="1">Criação de ambiente Windows</option>
                                <option value="2">Criação de ambiente Linux </option>
                            </select>
                        </td>
                        <td colspan="2">
                            <input class="botoes" type="button" value="Salvar" onclick="#">
                        </td>
                    </tr>
                </table>
            </form>

        </div>
    </body>
</html>