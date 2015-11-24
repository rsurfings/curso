window.onload = function (){

	var nodes = document.querySelectorAll('.link');
	var arr = [];
	for (var i = 0, max = nodes.length; i < max; i++){
		nodes[i].onclick = function (){
			
			requisitar(this.href);

			return false;

		}
	}

	function mostar(ajax){
		var resposta = document.getElementById("resposta");
		resposta.innerHTML = ajax.responseText;
	}

	function requisitar(url){

		var ajax = iniciaAjax();
		
		var resposta = document.getElementById("resposta");

		carregando(resposta);

		ajax.onreadystatechange = function(){ // ouve resposta a requisição
				if (ajax.readyState == 4 && ajax.status == 200) {

					mostar(ajax);
				}
		}

		ajax.open("POST",url,true);
		ajax.send();
	}

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

	function carregando(resposta){

		var img = document.createElement("img");
		img.setAttribute("src","image/ajax-loader.gif");

		resposta.appendChild(img);
	}

	var catalogo = document.getElementById('catalogo').onclick = function carregarAjax(){

		var ajax = new XMLHttpRequest();
			ajax.onreadystatechange = function(){ // ouve resposta a requisição

				console.log(ajax.readyState);
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

				console.log(ajax.status);
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

				if (ajax.readyState == 4 && ajax.status == 200) {
					//document.getElementById("resposta").innerHTML = ajax.responseXML;

					contruirTabela(ajax);
				}

			}

			ajax.open("GET",'cd_catalog.xml',true);
			ajax.send(); //param=1&param2

			return false;
	};

	function contruirTabela(ajax) {

	  var i;
	  var xmlDoc = ajax.responseXML;
	  
	  var table = '<table border="2">';
	  table += "<tr><th>Artist</th><th>Title</th></tr>";
	  var x = xmlDoc.getElementsByTagName("CD");
	  for (i = 0; i <x.length; i++) { 
	    table += "<tr><td>" +
	    x[i].getElementsByTagName("ARTIST")[0].childNodes[0].nodeValue +
	    "</td><td>" +
	    x[i].getElementsByTagName("TITLE")[0].childNodes[0].nodeValue +
	    "</td></tr>";
	  }
	  table += '</table>';

	  console.log(table);

	  document.getElementById("resposta").innerHTML = table;
	}
}




