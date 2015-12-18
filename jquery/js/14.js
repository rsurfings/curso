<?php

$resp = array();

try{

	if(!$_POST['email']){
		throw new Exception("Campo email Obrigatório");
	}

	$db = new DB;
	$sql = "insert usuario";
	$exc = $db->execute($sql);


	$resp['message'] = "Usuário cadastrado com sucesso";


$data = array("icms"=>17,"ipi"=>10,"cofins"=>2);
echo json_encode($data);

}catch(Exception $e){

}
?>



$(function(){

	$("#meuForm").submit(function(event){
		event.preventDefault();

		var data = $(this).serialize();

		console.log(data);

		data.push("compVend","SF1Le");

function enviarViaAjax(settings){
		var jqXHR = $.ajax({
			method : settings.type,
			url : settings.url,
			dataType : settings.dataType,
			data : settings.data,
			async : settings.async
		});

		return jqXHR;
}


		$.ajax({
		  method: "POST",	
		  url: "Controller.php",
		  data: data
		  success: function(resp){
		  	
		  },
		  dataType: "json"
		});
		
	});
});