$(function(){
	$("#hide").click(function(){
		$(".conteudo").hide("fast",function(){

		});
	});

	$("#show").click(function(){
		$(".conteudo").show(1000);
	});

	$("#toggle").click(function(){
		$(".conteudo").toggle(1000);
	});

	$("#fadeIn").click(function(){
		$(".conteudo").fadeIn(3000);
	});

	$("#fadeOut").click(function(){
		$(".conteudo").fadeOut(3000);
	});

	$("#fadeToggle").click(function(){
		$(".conteudo").fadeToggle(3000);
	});
	
	$("#slideUp").click(function(){
		$(".conteudo").slideUp(3000);
	});

	$("#slideDown").click(function(){
		$(".conteudo").slideDown(3000);
	});

	$("#slideToggle").click(function(){
		$(".conteudo").slideToggle(3000);
	});
});