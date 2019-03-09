function execute(tipo) {
    var map = [];
    var query = null;
    var sep = "?";
    var xmlhttp = new XMLHttpRequest();
    var parser = new DOMParser();
    var xmlDoc;

    var listaPERT = [
        'GITxtOtimista', //1
        'GITxtMaisProvavel', //2
        'GITxtPessimista', //3
        'GITxtValorUnitario'//4
    ];

    var listaGI = [
        'GITxtNomeDoItem', //1
        'GITxtDescricaoDoItem', //2
        'GITxtEquipe', //3
        'GITxtOtimista', //4
        'GITxtMaisProvavel', //5
        'GITxtPessimista', //6
        'GITxtDesvios', //7
        'GITxtMoedas', //8
        'GITxtValorUnitario', //9
        'GITxtCategoria', //10
        'GITxtSubcategoria', //11
        'GITxtPagamento', //12
        'GITxtAssociarTemlate'//13
    ];

    map["GI"] = listaGI;
    map["PERT"] = listaPERT;

    query = tipo;
    map[tipo].forEach(criarQuery);

    function criarQuery(valor) {
        query += sep + document.getElementById(valor).value;
    }

    xmlhttp.onreadystatechange = function () {
        if (this.readyState === 4 && this.status === 200) {
            if (tipo === 'GI') {//Resposta para GI
                alert(this.responseText);
            } else {//Resposta para PERT
                xmlDoc = parser.parseFromString(this.responseText, "text/xml");
                var pert = xmlDoc.getElementsByTagName("pert")[0].childNodes[0].nodeValue;
                var desvio = xmlDoc.getElementsByTagName("desvio")[0].childNodes[0].nodeValue;
                var total = xmlDoc.getElementsByTagName("total")[0].childNodes[0].nodeValue;
                pert = Number(pert).toFixed(2).replace(".", ",");
                desvio = Number(desvio).toFixed(2).replace(".", ",");
                total = Number(total).toFixed(2).replace(".", ",");
                document.getElementById("GITxtPERT").setAttribute("value", pert);
                document.getElementById("GITxtDesvioPadrao").setAttribute("value", desvio);
                document.getElementById("GITxtTotal").setAttribute("value", total);
            }
        }
    };

    xmlhttp.open("GET", "../AJAXs/gi.php?q=" + query, true);
    xmlhttp.send();
}