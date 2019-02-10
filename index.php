<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <!-- Estilos -->
        <link rel="stylesheet" type="text/css" href="styles/index.css">

    </head>
    <body>
        <?php include "menu.php"; ?>
        <div class="conteudo">
            <p>A estimativa de 3 pontos é uma técnica que permite aperfeiçoar as estimativas considerando as incertezas e riscos. É um conceito que origina-se da Técnica de Revisão e Avaliação de Programa (PERT).  Conforme o próprio nome sugere, nesta estimativa, três valores são produzidos inicialmente para cada atividade, baseados no conhecimento e experiência da equipe do projeto
                (<b>Exemplo:</b> Construção de uma prédio, Desenvolvimento de Software, Instalação de Hardware, Construção de um Navio e Pesquisa e desenvolvimento de um produto).
            </p>
            <p><br />
                <b> - Otimista (O):</b> É o cenário perfeito, onde tudo dá certo.<br />
                <b> - Pessimista (P):</b>b É o pior cenário, onde tudo vai dar errado.<br />
                <b> - Mais Provável (M):</b> É um cenário razoável, onde a atividade acontecerá dentro da normalidade.<br /><br />
                Em posse destas três variáveis é possível efetuar a estimativa PERT (Program Evaluation Review Technique) da atividade, onde:
            </p>
            <center><img src="images/pert.png"></center>
            <p>
                <b>Desvio Padrão:</b> o desvio padrão por sua vez, serve para medir o quanto de variação ou dispersão existem em relação a média, e sua forma se estabelece pela raiz quadrada da variância de cada atividade, segue:
            </p>
            <center><img src="images/pert.png"></center>
            <p>
                Logo, para se obter uma estimativa com 68,2% de assertividade, a seguinte fórmula é aplicada: PERT + 1x(Desvio Padrão). Caso seja necessário uma estimativa com 95,4% de assertividade, deve-se multiplicar o desvio padrão por 2 e com 99,6%, deve-se multiplicar por 3.
            </p>
        </div>
        <?php include "rodape.php"; ?>
    </body>
</html>