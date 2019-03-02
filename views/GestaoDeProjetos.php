<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Gestão dos projetos</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="http://localhost/PertOnLine/styles/modal.css">
    </head>
    <body>
        <?php
        require_once '../controllers/Controller.php';
        require_once '../domains/Cliente.php';
        require_once '../domains/Solicitante.php';
        $control = new Controller();
        $cliente = new Cliente();
        $solicitante = new Solicitante();
        ?>
        <?php include "../menu.php"; ?>
        <div class="conteudo">
            <fieldset>
                <legend>
                    <h3 class="tituloSeccao">Gestão dos projetos</h3>
                </legend>
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
                                <label>Nível do Solicitante</label>
                            </td>
                            <td>
                                <select name="GPTxtNivelDoSolicitante" id="GPTxtCliente">
                                    <?php
                                    $read = $control->process("READ", new Solicitante());
                                    foreach ($read[1] as $obj) {
                                        $s = new Solicitante();
                                        $s = $obj;
                                        echo '<option value = ' . $s->getId() . '>' . $s->getNivel() . '</option>';
                                    }
                                    //<option value="1">Coordenador</option>
                                    //<option value="2">Gerente Funcional</option>
                                    //<option value="3">Gerente Executivo</option>
                                    ?>
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
                                <input type="date" name="GPTxtDataDeCriacaoDoProjeto" id="GPTxtDataDeCriacaoDoProjeto" value="04/02/2019">
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
                                <input class="botoes" id="myBtn" type="button" value="Salvar" onclick="#">
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
                <input type="text" name="GPTxtTotalDoCAPEX" id="GPTxtTotalDoCAPEX">
                <br />
                <br />
                <label>
                    Total do OPEX
                </label>
                <input type="text" name="GPTxtTotalDoCAPEX" id="GPTxtTotalDoCAPEX">
            </fieldset>            

            <!-- O Modal do orçamento -->
            <div id="myModal" class="modal">

                <!-- Conteúdo do modal orçamento -->    
                <div class="modal-content">
                    <!-- Botão para fechar o modal -->
                    <span class="close">&times;</span>
                    <br />
                    <table class="tabelasDosOrcamentos">
                        <tr id="cabecalhoDoOrcamento">
                            <td id="logoDoCliente">Logo do cliente</td>                
                            <td id="tituloDoOrcamento">Orçamento do Projeto</td>
                            <td id="logoDaEmpresaDonaDaPERTOnline">Seu logo</td>
                        </tr>
                    </table>
                    <fieldset class="seccoesDoOrcamento">
                        <legend class="titulosDasSeccoesDoOrcamento">Nome do projeto</legend>
                        <span>Sistema para elaboração de estimativas PERT</span>
                    </fieldset>
                    <fieldset class="seccoesDoOrcamento">
                        <legend class="titulosDasSeccoesDoOrcamento">Critérios de classificação</legend>
                        <table class="tabelasDosOrcamentos">
                            <th class="cabecalhosDasSeccoesDoOrcabemento">Custo</th>
                            <th class="cabecalhosDasSeccoesDoOrcabemento">Equipe</th>
                            <th class="cabecalhosDasSeccoesDoOrcabemento">Horas</th>
                            <th class="cabecalhosDasSeccoesDoOrcabemento">Solicitante</th>
                                <tr>
                                    <td class="espacoDasSeccoesDoOrcabemento">
                                        <span>Até R$ 50.000,00</span>
                                    </td>
                                    <td class="espacoDasSeccoesDoOrcabemento">
                                        <span>Acima de 3 até 8 equipes</span>
                                    </td>
                                    <td class="espacoDasSeccoesDoOrcabemento">
                                        <span>Acima de 80 até 352 horas</span>
                                    </td>
                                    <td class="espacoDasSeccoesDoOrcabemento">
                                        <span>Coordenadores</span>
                                    </td>
                                </tr>
                                  <tr>
                                    <td class="cabecalhosDasSeccoesDoOrcabemento">
                                        <span>Classificação</span>
                                    </td>
                                        <td class="espacoDasSeccoesDoOrcabemento">
                                        <span>20 pontos</span>
                                    </td>
                                    <td class="cabecalhosDasSeccoesDoOrcabemento">
                                        <span>Número do projeto</span>
                                    </td>
                                    <td class="espacoDasSeccoesDoOrcabemento">
                                        <span>123</span>
                                    </td>
                                </tr>                
                            </table>
                            <br />
                            <span>Importante: Solicitações de alteração de escopo, podem impactar o tempo e o custo específicados neste documento.</span>
                    </fieldset>
                    <fieldset class="seccoesDoOrcamento">
                        <legend class="titulosDasSeccoesDoOrcamento">CAPEX</legend>
                        <table class="tabelasDosOrcamentos">
                            <th class="cabecalhosDasSeccoesDoOrcabemento">Aquisições</th>
                            <th class="cabecalhosDasSeccoesDoOrcabemento">Mão de Obra</th>
                            <th class="cabecalhosDasSeccoesDoOrcabemento">Viagens</th>
                            <th class="cabecalhosDasSeccoesDoOrcabemento">Total</th>
                                <tr>
                                    <td class="espacoDasSeccoesDoOrcabemento">
                                        <span>R$ 0,00</span>
                                    </td>
                                    <td class="espacoDasSeccoesDoOrcabemento">
                                        <span>R$ 50.000,00</span>
                                    </td>
                                    <td class="espacoDasSeccoesDoOrcabemento">
                                        <span>R$ 0,00</span>
                                    </td>
                                    <td class="espacoDasSeccoesDoOrcabemento">
                                        <span>50.000,00</span>
                                    </td>
                                </tr>                                          
                        </table>
                    </fieldset>
                    <fieldset class="seccoesDoOrcamento">
                        <legend class="titulosDasSeccoesDoOrcamento">OPEX</legend>
                        <table class="tabelasDosOrcamentos">
                            <th class="cabecalhosDasSeccoesDoOrcabemento">Serviços</th>
                            <th class="cabecalhosDasSeccoesDoOrcabemento">Headcount</th>
                            <th class="cabecalhosDasSeccoesDoOrcabemento">Viagens</th>
                            <th class="cabecalhosDasSeccoesDoOrcabemento">Total (Mensal)</th>
                                <tr>
                                    <td class="espacoDasSeccoesDoOrcabemento">
                                        <span>R$ 0,00</span>
                                    </td>
                                    <td class="espacoDasSeccoesDoOrcabemento">
                                        <span>R$ 50.000,00</span>
                                    </td>
                                    <td class="espacoDasSeccoesDoOrcabemento">
                                        <span>R$ 0,00</span>
                                    </td>
                                    <td class="espacoDasSeccoesDoOrcabemento">
                                        <span>50.000,00</span>
                                    </td>
                                </tr>                                          
                        </table>
                    </fieldset>
                    <fieldset class="seccoesDoOrcamento">
                        <legend class="titulosDasSeccoesDoOrcamento">Descrição</legend>
                        <table class="tabelasDosOrcamentos">
                            <th class="cabecalhosDasSeccoesDoOrcabemento">N. Itens</th>
                            <th class="cabecalhosDasSeccoesDoOrcabemento">Categoria</th>
                            <th class="cabecalhosDasSeccoesDoOrcabemento">Itens</th>
                            <th class="cabecalhosDasSeccoesDoOrcabemento">Custos</th>
                            <tr>
                                <td class="espacoDasSeccoesDoOrcabemento">
                                    <span>1</span>
                                </td>
                                <td class="espacoDasSeccoesDoOrcabemento">
                                    <span>CAPEX</span>
                                </td>
                                <td class="espacoDasSeccoesDoOrcabemento">
                                    <span>Máquina virtual</span>
                                </td>
                                <td class="espacoDasSeccoesDoOrcabemento">
                                    <span>100,00</span>
                                </td>
                            </tr>
                            <tr>
                                <td class="espacoDasSeccoesDoOrcabemento">
                                    <span>2</span>
                                </td>
                                <td class="espacoDasSeccoesDoOrcabemento">
                                    <span>CAPEX</span>
                                </td>
                                <td class="espacoDasSeccoesDoOrcabemento">
                                    <span>Configurar máquina virtual</span>
                                </td>
                                <td class="espacoDasSeccoesDoOrcabemento">
                                    <span>350,00</span>
                                </td>
                            </tr>
                            <tr>
                                <td class="espacoDasSeccoesDoOrcabemento">
                                    <span>3</span>
                                </td>
                                <td class="espacoDasSeccoesDoOrcabemento">
                                    <span>CAPEX</span>
                                </td>
                                <td class="espacoDasSeccoesDoOrcabemento">
                                    <span>Implantação do projeto</span>
                                </td>
                                <td class="espacoDasSeccoesDoOrcabemento">
                                    <span>28.550,00</span>
                                </td>
                            </tr>                            
                        </table>                    
                    </fieldset>
                    <table>
                        <tr>
                            <td class="botoesOrcamento"></td>
                            <td class="botoesOrcamento"></td>
                            <td class="botoesOrcamento">
                                <input class="botoes" type="button" value="Imprimir">
                            </td>
                            <td class="botoesOrcamento">
                                <input class="botoes" type="button" value="Enviar">
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <?php include "../rodape.php"; ?>
        <script type="text/javascript" src="http://localhost/PertOnline/styles/modal.js"></script>
    </body>
</html>