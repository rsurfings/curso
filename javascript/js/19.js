var idade = 17;
alert((idade >= 18 ? "Maior de idade":"Menor de Idade"));

var nome = "Ronaldo", esposa = "Joyce", filho = "Caua";
alert(esposa);

var Pessoa = {
	nome:"Ronaldo",
	email:"ronado.goncalves@erpflex.com.br"
}

alert(Pessoa.email);

delete(Pessoa.email);

alert(Pessoa.email);

alert("email" in Pessoa);

var idadeFilho = new Number(8);
alert( idadeFilho instanceof Number);

var Esporte = new Object();

alert(this.document.title);

function mostrar(){
	alert(this);
}

alert(typeof(mostrar));