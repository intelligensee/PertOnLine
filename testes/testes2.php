<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Página de Testes 2</title>
        <script type="text/javascript" src="hints.js"></script>
        <script type="text/javascript" src="conect.js"></script>
    </head>
    <body>
        <h1>Teste do site w3schools.com</h1>
        <p><b>Start typing a name in the input field below:</b></p>
        <form> 
            First name: <input type="text" onkeyup="showHint(this.value, 'txtHint')">
        </form>
        <p>Suggestions: <span id="txtHint"></span></p>

        <hr>

        <h1>Teste de conexão com AJAX</h1>
        <form>
            <p><label>Usuário</label>
                <input type="text" id="usuario"></p>
            <p><label>Senha</label>
                <input type="password" id="senha"></p>
            <p><input type="button" value="Entrar" onclick="consultar('retorno')" ></p>
            <p><span id="retorno"></span></p>
        </form>
    </body>
</html>