$(function(){
	function msg(e){
		$("#msg").text($(this).val());
	}

	//$(":text").keyup(msg).focus(msg).blur(msg);

	$(":text").bind("keyup focus blur",msg); //associa evento ao elemento

	//$("form").delegate(":text","keyup",msg);

	$(":button").bind("click",function(e){
		$(":text").unbind("keyup",msg);
		//$(":text").val("Texto incluido via button");
		//$(":text").trigger("focus");

		//$("form").prepend("outro <input/>",{type:"text"});
	});

});