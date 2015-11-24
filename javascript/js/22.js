var idade = 17;
//alert((idade >= 18 ? "Maior de idade":"Menor de Idade"));

var nome = "Ronaldo", esposa = "Joyce", filho = "Caua";
//alert(filho);

var Pessoa = {
	nome:"Ronaldo",
	email:"ronado.goncalves@erpflex.com.br"
}

//alert(Pessoa.email);

delete(Pessoa.email);

//alert(Pessoa.email);

/*var y;
if(y){
	alert('tete');
}*/

/*var idadeFilho = new Number(8);
alert( idadeFilho instanceof Number);
*/

function mostrar(){
	alert(this);
}

mostrar();

//alert(typeof(mostrar));

alert(this.value);

var meuObjeto = {
    init: function () {
        this.link = document.getElementsByTagName('a');
        this.link.onclick = function (e) {
            console.log(this);   
        };
    }
};
 
meuObjeto.init();
