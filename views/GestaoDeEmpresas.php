<!DOCTYPE html>
<html>
    <head>
        <title>Gestão de Empresas</title>
        <!-- Estilos -->
        <link rel="stylesheet" type="text/css" href="../styles/geral.css">
        <link rel="stylesheet" type="text/css" href="../styles/menu.css">
        <link rel="stylesheet" type="text/css" href="../styles/FormulariosDeGestao.css">

    </head>
    <body>
        <?php include "../menu.php"; ?>
        <div class="conteudo">
            <h3>Gestão de Empresas</h3>
            <form>
                <table class="estruturaFormulario">
                    <tr>
                        <td class="nomeDosCampos">
                            <label>Nome da empresa</label>
                        </td>
                        <td colspan="5">
                            <input type="text" name="GETxtNomeDaEmpresa" id="GETxtNomeDaEmpresa">
                        </td>
                    </tr>
                    <tr>
                        <td class="nomeDosCampos">
                            <label>Descrição</label>
                        </td>
                        <td colspan="5">
                            <textarea rows="5" cols="30" name="GETxtDescricaoDaEmpresa" id="GETxtDescricaoDaEmpresa">
                            </textarea>
                        </td>
                    </tr>
                    <tr>
                        <td class="nomeDosCampos">
                            <label>Logotipo</label>
                        </td>
                        <td colspan="3">
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
            <table class="gestao">                    
                <br />
                <br />
                <label>Clientes cadastrados</label>
                <br />
                <br />
                <th>Gestão</th><th>Nome do cliente</th><th>Descrição</th><th>Criado por</th><th>Criado em</th><th>Modificado por</th><th>Modificado em</th><th>Opção</th>
                <tr class="linhaGestao">
                    <td class="colunaGestao">Exibir | Editar | Excluir</td>    					
                    <td class="colunaGestao">Petrobras</td>
                    <td class="colunaGestao">Empresa nacional de Petróleo</td>
                    <td class="colunaGestao">Danilo Brayan Souza Taborda</td>
                    <td class="colunaGestao">05/02/2019</td>
                    <td class="colunaGestao">Danilo Brayan Souza Taborda</td>
                    <td class="colunaGestao">05/02/2019</td>
                    <td class="colunaGestao">Ativo</td>
                </tr>
                <tr class="linhaGestao">
                    <td class="colunaGestao">Exibir | Editar | Excluir</td>    					
                    <td class="colunaGestao">Raízen</td>
                    <td class="colunaGestao">Empresa sucroalcoleira</td>
                    <td class="colunaGestao">Danilo Brayan Souza Taborda</td>
                    <td class="colunaGestao">05/02/2019</td>
                    <td class="colunaGestao">Danilo Brayan Souza Taborda</td>
                    <td class="colunaGestao">05/02/2019</td>
                    <td class="colunaGestao">Ativo</td>
                </tr>
            </table>
        </div>
    </body>
</html>