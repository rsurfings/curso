window.onload = function(){

}

function comprar(id){

	var id = document.getElementById(id);
	
	id.remove();

	meuAjax();
}

function meuAjax(){

	var xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function(){

		console.log(xhttp);
		if (xhttp.readyState == 4 && xhttp.status == 200) {
			

			data = JSON.parse(xhttp.responseText);

			console.log(data);

			document.getElementById("carrinho").innerHTML = data.nome;
		};
	}

	xhttp.open("GET","data.json",true);
	xhttp.send();
}