var nome;
nome= "Jão do Pão";
var idade = 2018 - 1980;
var verificador = 0;

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

function alterarVisibilidade(){

    if(verificador == 0){
        document.getElementById("botao").style.display="none";
        document.getElementById("visivel").value ="Apareça";
        verificador = 1;
    }else{
        document.getElementById("botao").style.display="block";
        document.getElementById("visivel").value ="Sumiu";
        verificador = 0;
    }
}

mensagem();
maioridade();
seuNome();
maioridade();