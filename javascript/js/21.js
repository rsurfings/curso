window.onload = function (){

	var carregarAjax = document.getElementById('link').onclick = function carregarAjax(){

		var resposta = document.getElementById("resposta");

		var ajax = new XMLHttpRequest();

		//console.log(ajax);
		ajax.onreadystatechange = function(){ // ouve resposta a requisição
			
			debugRetornoAjax(ajax);

			if (ajax.readyState == 4 && ajax.status == 200) {

				resposta.appendChild(document.createTextNode(ajax.responseText));

				//resposta.innerHTML = ajax.responseText; //responseXML

				//contruirTabela(ajax);
			}
		}

		ajax.open("POST",'texto.txt',true); //texto.txt | conteudo.html | catalogo_cd.xml
		ajax.send(); //param=1&param2

		return false;
	};

	function debugRetornoAjax(ajax){

		//console.log(ajax.readyState); //codigo de retorno
			switch(ajax.readyState)
			{
				case 0:
					console.log("pedido não inicializado");
					break;
				case 1:
					console.log("conexão do servidor estabelecido");
					break;
				case 2:
					console.log("pedido recebido");
					break;
				case 3:
					console.log("solicitação de processamento");
					break;
				case 4:
					console.log("solicitar resposta acabado e está pronto");
					break;	
				default:
			}

			//console.log(ajax.status);
			switch(ajax.status)
			{
				case 200:
					console.log("OK");
					break;
				case 404:
					console.log("Page not found");
					break;
				default:
			}
	}


	/*
	*	contruir Tabela
	*/
	function contruirTabela(ajax) {

		var xml = ajax.responseXML;

		var resposta = document.getElementById("resposta");

		var table = '<table border="2">';
		table += "<tr><th>Artista</th><th>Titulo</th></tr>";
		var x = xml.getElementsByTagName("CD");
		for (var i = 0; i <x.length; i++) {
		   table += "<tr><td>" +
			x[i].getElementsByTagName("ARTIST")[0].childNodes[0].nodeValue +
		    "</td><td>" +
		    x[i].getElementsByTagName("TITLE")[0].childNodes[0].nodeValue +
		    "</td></tr>";
		 }

		
		table += '</table>';

		//console.log(table);

		resposta.innerHTML = table;
	}

	var nodes = document.querySelectorAll('.link');

	//console.log(nodes);

	for (var i = 0, max = nodes.length; i < max; i++){
		nodes[i].onclick = function (){
			
			console.log(this);

			fazRequisicao(this.href);

			return false;

		}
	}

	/*
	*	mostra Resposta
	*/
	function mostraResposta(ajax){
		var resposta = document.getElementById("resposta");
		resposta.innerHTML = ajax.responseText;
	}

	/*
	*	faz a Requisição
	*/
	function fazRequisicao(url){

		var ajax = iniciaAjax();
		
		var resposta = document.getElementById("resposta");

		carregarResposta(resposta);

		ajax.onreadystatechange = function(){ // ouve resposta a requisição
				if (ajax.readyState == 4 && ajax.status == 200) {

					mostraResposta(ajax);
				}
		}

		ajax.open("POST",url,true);
		ajax.send();
	}

	/*
	* Estancia (inicia) O Objeto
	*/
	function iniciaAjax(){
		var ajax = null;
		if(window.XMLHttpRequest){
			ajax = new XMLHttpRequest();
		}else if(window.ActiveXObject){
			try{
				ajax = new ActiveXObject("Msxm12.XMLHTTP");

			}catch(e){
				ajax = new ActiveXObject("Microsoft.XMLHTTP");
			}
		}

		return ajax;
	}

	/*
	* Carregar a resposta
	*/
	function carregarResposta(resposta){

		var img = document.createElement("img");
		img.setAttribute("src","image/ajax-loader.gif");

		resposta.appendChild(img);
	}
}




