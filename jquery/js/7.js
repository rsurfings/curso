$(function(){

	var titulo =
		$("<h1/>",{
			text: "Criar Elementos Com JQuery"
		});

	$("body").append(titulo);

	var paragrafo =
		$("<p/>");

	$("body").append(paragrafo);

	var lampada = 
		$("<img/>",{
			id:"lampada",
			name:"lampada",
			src:"../javascript/image/pic_bulboff.gif",
			click:function(){
				this.src = "../javascript/image/pic_bulbon.gif"
			}
			
		});

	paragrafo.append(lampada);

	var horas = 
		$("<div/>",{
			id:"horas",
			text:"00:00:00"
	});

	$("body").append(horas);

});