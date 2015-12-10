$(function(){

	$(":text").trigger(validaTributos);

	function msg(e){
		$("#msg").text($(this).val());
	}

	$(".meutext").keyup(msg).focus(msg).blur(msg);

	$(":text").unbind("keyup focus blur",msg); //associa evento ao elemento
	var text = $('<input type="text" class="meutext"/>');

	$("form").delegate(text,"keyup",msg);

	$(":button").bind("click",function(e){
		$(":text").unbind("keyup",msg);
		//$(":text").val("Texto incluido via button");

		//minhafuncao();
		

		//$("form").prepend("outro <input/>",{type:"text"});
	});

	function validaTributos(){
		ajax validaTributos

		$("#resp").html(json)
	}
});