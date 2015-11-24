/**
* Array Associativo
*/

window.onload = function(){



var SobrinhosPatoDonald = new Array();
SobrinhosPatoDonald = {nome:"Huguinho",cor:"vermelho"};

//console.log(SobrinhosPatoDonald);

var table = '<table border="1" style="float:left">';
for(var nomeAssociacao in SobrinhosPatoDonald ){
	table += '<tr>';
	table += '<td>'+ nomeAssociacao +'</td>';
	table += '</tr>';
};

table+= '</table>';

console.log(table);

document.getElementById('minhaTabela').innerHTML = table;

};