$(function(){

	var meuSpan = $("span");

	$("#meuTexto").keyup(function(event){
		
		console.log(this);

		//$("#msg").html($(this).val());

	});

	$("#meuTexto").keypress(function(event){
		//$("#msg").html($(this).val());
	});

	$("#meuTexto").keydown(function(event){
		//$("#msg").html($(this).val());
	});

	$("button").click(function(event){
		
		$("#meuTexto").focus().css("background-color","red").val("Campo obrigatório");

		event.preventDefault();
	});

	$("form").submit(function(event){
		event.preventDefault();

		console.log(event);
	});

	function validaCampos(){
	
		if(!$("#meuTexto").val()){
			$("#meuTexto").focus().css("background-color","red").val("Campo obrigatório");
		}
	}

	$("select").change(function(event){
		console.log(this);
	});

});