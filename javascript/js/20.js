var Carro = new Object();

Carro.nome = "Ferrari";
Carro.modelo = "Spider 488";
Carro.cor = "Vermelha";

Carro.init = function init(motorista){

	//alert('nome:' + Carro.nome + '\n' + 'modelo:' + Carro.modelo + '\n' + 'cor:' + Carro.cor);

	Carro.ligar = function ligar (args)
	{
		alert(motorista + ' está ligando a ' + Carro.nome + ' ' + args);
	}

	Carro.acelear = function acelear(args)
	{
		alert(motorista + ' acelerando a ' + Carro.nome);
	}

	Carro.frear = function frear(args)
	{
		alert(motorista + ' freando a ' + Carro.nome);
	}

}

var motorista = prompt('Digite o nome do motorista');
Carro.init(motorista);
Carro.ligar();
Carro.acelear();
Carro.frear();