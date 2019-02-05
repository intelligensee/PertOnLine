<!DOCTYPE html>
<html>
<head>
	<title>Gestão de Projetos</title>
	<!-- Estilos -->
	<link rel="stylesheet" type="text/css" href="../styles/geral.css">
        <link rel="stylesheet" type="text/css" href="../styles/menu.css">
	<link rel="stylesheet" type="text/css" href="../styles/FormulariosDeGestao.css">

</head>
    <body>
    	<?php include "../menu.php";?>
    	<div class="conteudo">
    		<h3 align="center">Gestão de projeto</h3>
    		<form>
    			<table class="estruturaFormulario">
        			<tr>
        				<td class="nomeDosCampos">
        					<label>Nome do projeto</label>
        				</td>
        				<td colspan="3">
        					<input type="text" name="GPTxtNomeDoProjeto" id="GPTxtNomeDoProjeto">
        				</td>
        			</tr>
        			<tr>
        				<td class="nomeDosCampos">
        					<label>Descrição</label>
        				</td>
        				<td colspan="3">
        					<textarea rows="5" cols="30" name="GPTxtDescricaoDoProjeto" id="GPTxtDescricaoDoProjeto"></textarea>
        				</td>
        			</tr>
        			<tr>
        				<td class="nomeDosCampos">
        					<label>Cliente</label>
        				</td>
        				<td>
        					<select name="GPTxtCliente" id="GPTxtCliente">
                                <option value="1">Petrobras</option>
                                <option value="2">Raízen</option>
                                <option value="3">Rumo</option>
                            </select>
        				</td>
        				<td class="nomeDosCampos">
        					<label>Nível do Solicitante</label>
        				</td>
        				<td>
        					<select name="GPTxtNivelDoSolicitante" id="GPTxtCliente">
                                <option value="1">Coordenador</option>
                                <option value="2">Gerente Funcional</option>
                                <option value="3">Gerente Executivo</option>
                            </select>
        				</td>
        			</tr>
        			<tr>
        				<td class="nomeDosCampos">
        					<label>Desvios Padrão</label>
        				</td>
        				<td>
        					<select name="GPTxtDesviosPadrao" id="GPTxtDesviosPadrao">
                                <option value="1">2</option>
                                <option value="2">1</option>
                                <option value="3">0</option>
                            </select>
        				</td>
        				<td class="nomeDosCampos">
        					<label>Data da criação</label>
        				</td>
        				<td>
        					<input type="text" name="GPTxtNomeDoProjeto" id="GPTxtNomeDoProjeto">
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
    						<input class="botoes" type="button" value="Limpar estimativa" onclick="#">
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
    			<input type="text" name="GPTxtTotalDoCAPEX" id="GPTxtTotalDoCAPEX">
    			<label>
    				Total do OPEX
    			</label>
    			<input type="text" name="GPTxtTotalDoCAPEX" id="GPTxtTotalDoCAPEX">
    		</form>

        </div>
    </body>
</html>