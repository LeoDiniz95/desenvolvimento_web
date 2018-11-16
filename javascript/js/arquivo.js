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
        document.getElementById("botao").style.display="flex";
        document.getElementById("visivel").value ="Sumiu";
        verificador = 0;
    }
}


function algumaCoisa(){
    
    nome1 ={

         idade: 52,
         jao: function(nome){
             return( "Nome: "+nome+". Idade: "+this.idade+".");
         }

        }

    outro = {
        idade: 43
    }
    
    
    

    document.getElementById("label").innerHTML=nome1.jao('sss');;
    document.getElementById("label").style.display="flex";
    
    alert(nome1.jao.call(outro,'sss'));

    alert(nome1.jao.apply(outro,['buia']));

}
/*
mensagem();
maioridade();
seuNome();
maioridade();*/