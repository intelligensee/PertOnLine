function consultar(element) {
    var usuario = document.getElementById('usuario').value;
    var senha = document.getElementById('senha').value;
    var xmlhttp = new XMLHttpRequest();

    xmlhttp.onreadystatechange = function () {
        if (this.readyState === 4 && this.status === 200) {
            document.getElementById('retorno').innerHTML = this.responseText;
        }
    };
    xmlhttp.open('GET', 'conect.php?q=' + usuario + '%' + senha, true);
    xmlhttp.send();
    document.getElementById(element).innerHTML = nome;
}