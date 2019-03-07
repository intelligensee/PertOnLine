function execute(tipo) {
    var map = [];
    var first = true;
    var query = null;
    var sep = "?";
    var xmlhttp = new XMLHttpRequest();
    //var parser = new DOMParser();
    //var xmlDoc;

    var listaPERT = [
        'GITxtOtimista', //3
        'GITxtMaisProvavel', //4
        'GITxtPessimista'//5
    ];

    var listaGI = [
        'GITxtNomeDoItem', //0
        'GITxtDescricaoDoItem', //1
        'GITxtEquipe', //2
        'GITxtOtimista', //3
        'GITxtMaisProvavel', //4
        'GITxtPessimista', //5
        'GITxtDesvios', //6
        'GITxtMoedas', //7
        'GITxtValorUnitario', //8
        'GITxtCategoria', //9
        'GITxtSubcategoria', //10
        'GITxtPagamento', //11
        'GITxtAssociarTemlate'//12
    ];

    map["GI"] = listaGI;
    map["PERT"] = listaPERT;

    map[tipo].forEach(criarQuery);

    function criarQuery(valor) {
        if (first) {
            query = document.getElementById(valor).value;
            first = false;
        } else {
            query += sep + document.getElementById(valor).value;
        }
    }

    xmlhttp.onreadystatechange = function () {
        if (this.readyState === 4 && this.status === 200) {
            document.getElementById("retorno").innerHTML = this.responseText;
        }
    };

    xmlhttp.open("GET", "../AJAXs/gi.php?q=" + query, true);
    xmlhttp.send();
}