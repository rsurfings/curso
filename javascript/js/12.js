var idade = 18;

if(idade >= 18){
	alert("Maior de Idade");
}else{
	alert("Menor de Idade");
}

switch(idade)
{
	case 18:
		alert("Maior de Idade");
		break;
	default:
		alert("Menor de Idade");
}

var texto = "";
for (var i = 0; i<=20; i++) {
	if(i%2 == 0){ //usando o modulo se o resto da divisão for 0 é par
		if(i == 20){
			texto += i;
		}else{
			texto += i + ",";
		}
	}
};

alert(texto);

var i = 0;
var texto = "";
while(i<3){
	texto +=i;
	i++;
}
alert(texto);

var Carro = new Array();
Carro["marca"] = "Ferrari";
Carro["modelo"] = "enzo";
Carro["velocidade"] = "355km/h";
Carro["motor"] = "6.0L";

//percorre as chaves(key)
for(var key in Carro as ){
	alert(key + "=" + Carro[key]);
}


//tratamento de erro

var x = prompt("Informe um numero maior que 10");
try{
	
	if(x < 10){
		throw "numero menor que 10";
	}

	var x = a;
	var b = x + 10;
	//alert(b);
}catch(e){
	alert(e.name + "=" + e.message);
	alert(e.toString());
}