var nome;
nome= "Jão do Pão";
var idade = 2018 - 1980;

function mensagem(){
    alert("Olha a mensagem");
}

function somando(a, b){
    return a+b;
}

function maioridade(){

    if(idade >= 18){
        alert(nome+" é maior de idade");
    }else{
        alert(nome+" é menor de idade");
    }

}

function seuNome(){
    nome = prompt("Qual é seu nome?");
    alert("Bem-vindo, "+ nome);
}

function clicaBotao(){
    alert("Clicou no botão.");
}

mensagem();
maioridade();
seuNome();
maioridade();