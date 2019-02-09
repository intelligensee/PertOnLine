<!DOCTYPE html>
<html>
    <head>
        <title>Gestão de Marcas</title>
        <!-- Estilos -->
        <link rel="stylesheet" type="text/css" href="../styles/geral.css">
        <link rel="stylesheet" type="text/css" href="../styles/menu.css">
        <link rel="stylesheet" type="text/css" href="../styles/FormulariosDeGestao.css">

    </head>
    <body>
        <?php include "../menu.php"; ?>
        <div class="conteudo">
            <h3>Gestão de Marcas</h3>
            <form>
                <table class="estruturaFormulario">
                    <tr>                        
                        <td class="nomeDosCampos">
                            <label>Cliente</label>
                        </td>
                        <td colspan="3">
                            <select name="GMTxtCliente" id="GMTxtCliente">
                                <option value="1">Petrobras</option>
                                <option value="2">Raízen</option>
                                <option value="3">Rumo</option>
                            </select>
                        </td>
                    <tr>
                    </tr>
                        <td class="nomeDosCampos">
                            <label>Nome da marca</label>
                        </td>
                        <td colspan="5">
                            <input type="text" name="GMTxtNomeDaMarca" id="GMTxtNomeDaMarca">
                        </td>
                    </tr>
                    </tr>
                        <td class="nomeDosCampos">
                            <label>Descrição</label>
                        </td>
                        <td colspan="5">
                            <textarea rows="5" cols="30" name="GMTxtDescricaoDaMarca" id="GMTxtDescricaoDaMarca"></textarea>
                        </td>
                    </tr>
                    </tr>
                        <td class="nomeDosCampos">
                            <label>Linhas do títulos</label>
                        </td>
                        <td>
                            <input type="text" name="GMTxtLinhasDoTitulo" id="GMTxtLinhasDoTitulo">
                        </td>
                        <td class="nomeDosCampos">
                            <label>Linhas das tabelas</label>
                        </td>
                        <td>
                            <input type="text" name="GMTxtLinhasdasTabelas" id="GMTxtLinhasdasTabelas">
                        </td>
                        <td class="nomeDosCampos">
                            <label>Colunas das tabelas</label>
                        </td>
                        <td>
                            <input type="text" name="GMTxtColunasDasTabelas" id="GMTxtColunasDasTabelas">
                        </td>
                    </tr>
                    </tr>
                        <td class="nomeDosCampos">
                            <label>Fontes dos títulos</label>
                        </td>
                        <td>
                            <input type="text" name="GMTxtFontesDosTitulos" id="GMTxtFontesDosTitulos">
                        </td>
                        <td class="nomeDosCampos">
                            <label>Fontes dos dados</label>
                        </td>
                        <td>
                            <input type="text" name="GMTxtFontesDosDados" id="GMTxtFontesDosDados">
                        </td>
                        <td class="nomeDosCampos">
                            <label>Totais</label>
                        </td>
                        <td>
                            <input type="text" name="GMTxtTotais" id="GMTxtTotais">
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
                <label>Usuários cadastrados</label>
                <br />
                <br />
                <th>Gestão</th><th>Nome da marca</th><th>Descrição</th><th>Criado por</th><th>Criado em</th><th>Modificado por</th><th>Modificado em</th><th>Opção</th>
                    <tr class="linhaGestao">
                        <td>Exibir | Editar | Excluir</td>
                        <td>Raízen</td>
                        <td>Código de cores</td>
                        <td>Danilo Brayan Souza Taborda</td>
                        <td>09/0/2019</td>
                        <td>Danilo Brayan Souza Taborda</td>
                        <td>09/02/2019</td>
                        <td>Ativo</td>
                    </tr>
            </table>
        </div>
    </body>
</html>