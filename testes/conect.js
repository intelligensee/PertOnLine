function consultar() {
    var usuario = document.getElementById('usuario').value;
    var senha = document.getElementById('senha').value;
    var xmlhttp = new XMLHttpRequest();
    var parser = new DOMParser();
    var xmlDoc;
    
    alert(window.location.href);

    xmlhttp.onreadystatechange = function () {
        if (this.readyState === 4 && this.status === 200) {
            xmlDoc = parser.parseFromString(this.responseText, "text/xml");
            if (xmlDoc.getElementsByTagName("id")[0].childNodes[0].nodeValue === "0") {
                document.getElementById("msg").innerHTML = "Usuário e/ou Senha Inválidos!";
            } else {
                var i = xmlDoc.getElementsByTagName("id")[0].childNodes[0].nodeValue;
                var n = xmlDoc.getElementsByTagName("nome")[0].childNodes[0].nodeValue;
                var s = xmlDoc.getElementsByTagName("senha")[0].childNodes[0].nodeValue;
                document.getElementById("tdId").innerHTML = i;
                document.getElementById("tdNome").innerHTML = n;
                document.getElementById("tdSenha").innerHTML = s;

            }
        }
    };
    xmlhttp.open('GET', 'conect.php?q=' + usuario + '%' + senha, true);
    xmlhttp.send();
}