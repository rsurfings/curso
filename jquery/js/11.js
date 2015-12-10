$(function(){

	var meuSpan = $("span");
	
	meuSpan.click(function(){

		//$(".conteudo").text("evento click").css("background-color","#00CC66");
	});

	meuSpan.dblclick(function(){

		//$(".conteudo").text("evento double click").css("background-color","#0000CC");

	});

	meuSpan.mouseover(function(){
		//$(".conteudo").text("evento mouseover").css("background-color","#CCC");;
	});

	meuSpan.mouseout(function(){
		//$(".conteudo").text("evento mouseout").css("background-color","#FFFF00");;
	});

	meuSpan.mouseup(function(){
		//$(".conteudo").text("evento mouseup").css("background-color","#FF0000");;
	});

	meuSpan.mousedown(function(){
		//$(".conteudo").text("evento mousedown").css("background-color","#336600");;
	});

	meuSpan.mousemove(function(event){

		console.log("clientX: " + event.clientX + " " + "clientY: " + event.clientY);
		
		$(".conteudo").text("evento mousemove").css("background-color","#669900");;
	});

});