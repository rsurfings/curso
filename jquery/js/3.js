$(document).ready(function(){
	$("li span").css("background-color","yellow"); //descendente
	$( "#item1_1 > ul" ).css( "background", "red" ); //filhos do elemento
	$( "#item1_1 + li" ).css("background-color","green"); // primeiro irmão
	$( "#item1_1 ~ li" ).css( "color", "white" ); //todos irmãos
});