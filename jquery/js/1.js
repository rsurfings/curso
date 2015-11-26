window.onload = function(){
	document.getElementsByTagName("a")[0].onclick = alterarCorDoTitulo;
}

function alterarCorDoTitulo(){
	document.getElementById("titulo").style.color = "red";
}