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

    if (alvo === "D") {//Delete
        if (!confirm("Deseja realmente excluir o item \"" + array[2] + "\"?")) {
            return;
        }
    }

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
        'GISpanId'//13
    ];

    function encode_utf8(s)
    {
        return unescape(encodeURIComponent(s));
    }

    map["GI"] = listaGI;
    map["PERT"] = listaPERT;

    if (map[alvo] !== undefined) {//GI e PERT
        query = alvo;
        map[alvo].forEach(criarQuery);
        query += sep + complemento;
    } else {//outros (U e D)
        query = modo;
    }

    function criarQuery(valor) {//apenas para GI e PERT
        query += sep + encode_utf8(document.getElementById(valor).value);
    }

    xmlhttp.onreadystatechange = function () {
        if (this.readyState === 4 && this.status === 200) {
            if (alvo === 'GI' || alvo === 'D') {//Resposta para GI ou Delete
                var array = this.responseText.split("?");
                if (array[0] === 'ERROS') {
                    var mapaErros = [];
                    mapaErros['ErroNome01'] = ['GILabelErroNome', 'O nome é obrigatório!'];
                    mapaErros['ErroDescricao01'] = ['GILabelErroDescricao', 'A descrição é obrigatória!'];
                    for (i = 1; i < array.length; i++) {
                        var elemento = mapaErros[array[i]][0];
                        var mensagem = mapaErros[array[i]][1];
                        document.getElementById(elemento).innerHTML = mensagem;
                        window.scrollTo(0, 0);
                    }
                } else {
                    alert(array[1]);
                    window.location.href = "GestaoDeItens.php";
                }
            } else if (alvo === 'PERT') {//Resposta para PERT
                xmlDoc = parser.parseFromString(this.responseText, "text/xml");
                inserirNumeros(false);
            } else if (alvo === 'U') {
                xmlDoc = parser.parseFromString(this.responseText, "text/xml");
                inserirNumeros(true);
                var id = xmlDoc.getElementsByTagName("id")[0].childNodes[0].nodeValue;
                var nome = xmlDoc.getElementsByTagName("nome")[0].childNodes[0].nodeValue;
                var descricao = xmlDoc.getElementsByTagName("descricao")[0].childNodes[0].nodeValue;
                var equipe = xmlDoc.getElementsByTagName("equipe")[0].childNodes[0].nodeValue;
                var qtdDesvios = xmlDoc.getElementsByTagName("qtdDesvios")[0].childNodes[0].nodeValue;
                var moeda = xmlDoc.getElementsByTagName("moeda")[0].childNodes[0].nodeValue;
                var categoria = xmlDoc.getElementsByTagName("categoria")[0].childNodes[0].nodeValue;
                var subCategoria = xmlDoc.getElementsByTagName("subCategoria")[0].childNodes[0].nodeValue;
                var pagamento = xmlDoc.getElementsByTagName("pagamento")[0].childNodes[0].nodeValue;
                document.getElementById("GISpanId").value = id;
                document.getElementById("GITxtNomeDoItem").value = nome;
                document.getElementById("GITxtDescricaoDoItem").value = descricao;
                document.getElementById("GITxtEquipe").value = equipe;
                document.getElementById("GITxtDesvios").value = qtdDesvios;
                document.getElementById("GITxtMoedas").value = moeda;
                document.getElementById("GITxtCategoria").value = categoria;
                document.getElementById("GITxtSubcategoria").value = subCategoria;
                document.getElementById("GITxtPagamento").value = pagamento;
                document.getElementById("GIBtC").hidden = true;
                document.getElementById("GITdBtC").hidden = true;
                document.getElementById("GIBtU").hidden = false;
                document.getElementById("GIBtCancel").hidden = false;
                document.getElementById("GITxtNomeDoItem").focus();
                window.scrollTo(0, 0);
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
            if (completo) {
                var otimista = xmlDoc.getElementsByTagName("otimista")[0].childNodes[0].nodeValue;
                var maisProvavel = xmlDoc.getElementsByTagName("maisProvavel")[0].childNodes[0].nodeValue;
                var pessimista = xmlDoc.getElementsByTagName("pessimista")[0].childNodes[0].nodeValue;
                var valorUnitario = xmlDoc.getElementsByTagName("valorUnitario")[0].childNodes[0].nodeValue;
                otimista = Number(otimista).toFixed(2).replace(".", ",");
                maisProvavel = Number(maisProvavel).toFixed(2).replace(".", ",");
                pessimista = Number(pessimista).toFixed(2).replace(".", ",");
                valorUnitario = Number(valorUnitario).toFixed(2).replace(".", ",");
                document.getElementById("GITxtOtimista").setAttribute("value", otimista);
                document.getElementById("GITxtMaisProvavel").setAttribute("value", maisProvavel);
                document.getElementById("GITxtPessimista").setAttribute("value", pessimista);
                document.getElementById("GITxtValorUnitario").setAttribute("value", valorUnitario);
            }
        }
    };

    xmlhttp.open("GET", "../AJAXs/gi.php?q=" + query, true);
    xmlhttp.send();
}