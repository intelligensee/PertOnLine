function execute(modo) {
    var array = modo.split("?");
    var alvo = array[0];//GI, PERT, U, D
    var complemento = array[1];//C, U, id
    var map = [];
    var query = null;
    var sep = "?";
    var xmlhttp = new XMLHttpRequest();
    var parser = new DOMParser();
    var xmlDoc;
    var pert;
    var desvio;
    var total;

    var listaPERT = [
        'GITxtOtimista', //1
        'GITxtMaisProvavel', //2
        'GITxtPessimista', //3
        'GITxtDesvios', //4
        'GITxtValorUnitario', //5
        'GITxtMoedas'//6
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

    if (map[alvo] !== undefined) {//GI e PERT
        query = alvo;
        map[alvo].forEach(criarQuery);
        query += sep + complemento;
    } else {//outros
        query = modo;
    }

    function criarQuery(valor) {
        query += sep + document.getElementById(valor).value;
    }


    xmlhttp.onreadystatechange = function () {
        if (this.readyState === 4 && this.status === 200) {
            //alert(this.responseText);
            if (alvo === 'GI') {//Resposta para GI
                alert(this.responseText);
            } else if (alvo === 'PERT') {//Resposta para PERT
                xmlDoc = parser.parseFromString(this.responseText, "text/xml");
                inserirNumeros(false);
            } else if (alvo === 'U') {
                xmlDoc = parser.parseFromString(this.responseText, "text/xml");
                var nome = xmlDoc.getElementsByTagName("nome")[0].childNodes[0].nodeValue;
                var descricao = xmlDoc.getElementsByTagName("descricao")[0].childNodes[0].nodeValue;
                var equipe = xmlDoc.getElementsByTagName("equipe")[0].childNodes[0].nodeValue;
                var otimista = xmlDoc.getElementsByTagName("otimista")[0].childNodes[0].nodeValue;
                var maisProvavel = xmlDoc.getElementsByTagName("maisProvavel")[0].childNodes[0].nodeValue;
                var pessimista = xmlDoc.getElementsByTagName("pessimista")[0].childNodes[0].nodeValue;
                var pert = xmlDoc.getElementsByTagName("pert")[0].childNodes[0].nodeValue;
                var desvio = xmlDoc.getElementsByTagName("desvio")[0].childNodes[0].nodeValue;
                var qtdDesvios = xmlDoc.getElementsByTagName("qtdDesvios")[0].childNodes[0].nodeValue;
                var moeda = xmlDoc.getElementsByTagName("moeda")[0].childNodes[0].nodeValue;
                var valorUnitario = xmlDoc.getElementsByTagName("valorUnitario")[0].childNodes[0].nodeValue;
                var total = xmlDoc.getElementsByTagName("total")[0].childNodes[0].nodeValue;
                var categoria = xmlDoc.getElementsByTagName("categoria")[0].childNodes[0].nodeValue;
                var subCategoria = xmlDoc.getElementsByTagName("subCategoria")[0].childNodes[0].nodeValue;
                var pagamento = xmlDoc.getElementsByTagName("pagamento")[0].childNodes[0].nodeValue;
                var template = xmlDoc.getElementsByTagName("template")[0].childNodes[0].nodeValue;
            }
        }
        function inserirNumeros(completo) {
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
    };


    xmlhttp.open("GET", "../AJAXs/gi.php?q=" + query, true);
    xmlhttp.send();
}