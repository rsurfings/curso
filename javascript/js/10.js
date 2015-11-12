/*
     funcao: ligar()
     autor: Ronaldo
     desc:  funcao ligar lampada
*/

const PAIS = "BR"; //Constante

function ligar(){
     var nome = new String(); //variavel tipo string
     nome = "Ronaldo";

     var idade = new Number(); //variavel tipo numero
     idade = 33;

     var estadoCivil = new Boolean(); //variavel tipo boleano
     estadoCivil = true;

     alert(PAIS);

     var lampada = window.document.getElementById("lampada");
     lampada.src = "image/lampada_on.png";
}