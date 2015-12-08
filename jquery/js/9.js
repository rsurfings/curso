$(function(){
	
	$("span").click(function(){
		console.log($("#conteudo"));

		//$("input").addClass("input-error").removeClass("input-default");

		//$("input").attr("value","teste").removeAttr("class");
		$("input").toggleClass("input-error","input-default");
		var total = 1+2;
		$("input").attr("value","Este Campo é Obrigatório");
	});

});