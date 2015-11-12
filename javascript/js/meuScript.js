//var nome = prompt("Qual é seu nome?");

window.onload = function(){
	//document.getElementById("lampada").onclick = ligar();
	setInterval(mostrarHoras,1000);
}

function ligar(){
     var lampada = document.getElementById("lampada");
     lampada.src = "image/pic_bulbon.gif";

     //alert("Olá " +nome);

     setTimeout(desligar,3000);
}

function desligar(){
	var lampada = document.getElementById("lampada");
	lampada.src = "image/pic_bulboff.gif";
	//setInterval(ligar,1000);
}

function mostrarHoras(){
	var agora = new Date();
	var horas = agora.getHours() + ":" + agora.getMinutes() + ":" + agora.getSeconds();
	document.getElementById("horas").innerHTML = horas;
}