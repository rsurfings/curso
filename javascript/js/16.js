

window.onload = function(){
	window.document.getElementById("lampada").onclick = ligar;
	setInterval(horas, 1000);

	var nome = getCookie("nome");
    if (nome == "" && nome == null) {
        nome = prompt("Qual é seu nome?");
        setCookie("nome", nome, 1);
    }

}

function ligar(){
     var lampada = window.document.getElementById("lampada");
     lampada.src = "image/lampada_on.png";
     setTimeout(desligar,3000);

     var nome = getCookie("nome");
     if (nome != "" && nome != null) {
        alert("Bem vindo" + nome);  
    }
}

function desligar(){
	var lampada = window.document.getElementById("lampada");
     lampada.src = "image/lampada_off.png";
}

function horas(){
	var agora = new Date();
	var horas = agora.getHours() + ":" + agora.getMinutes() + ":" + agora.getSeconds();
	window.document.getElementById("horas").innerHTML = horas;
}