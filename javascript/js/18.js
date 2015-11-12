window.onload = function(){

}

function comprar(id){

	var id = document.getElementById(id);
	meuAjax();
	id.remove();
}

function meuAjax(){
	var xhttp = new XMLHttpRequest();
	alert(xhttp);
	xhttp.onreadystatechange = function(){
		if (xhttp.readyState == 4 && xhttp.status == 200) {
			document.getElementById("carrinho").innerHTML = xhttp.responseText;
		};
	}
	xhttp.open("GET","carrinho.html",true);
	xhttp.send();
}