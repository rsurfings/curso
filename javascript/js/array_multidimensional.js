/**
* Array multidimensional
*/

var SobrinhosPatoDonald = new Array(); //padrão
SobrinhosPatoDonald = [[{nome:"Huguinho",cor:"vermelho"},{nome:"Zezinho",cor:"azul"},{nome:"Luizinho",cor:"verde"}]];

for(var primeiroIndice in SobrinhosPatoDonald ){

	console.log(SobrinhosPatoDonald[primeiroIndice]);

	for(var segundoIndice in SobrinhosPatoDonald[primeiroIndice] ){
			//console.log(associado);
			//console.log(SobrinhosPatoDonald[primeiroIndice][segundoIndice].nome);
		
	}
}