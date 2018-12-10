function Enviando(email, assunto,mensagem){
    Email.send(email,//remetente
"email",//destinatário
assunto,//assunto
mensagem,//mensagem
"smtp.yourisp.com",//servidor
"contaServirdor",
"senhaServidor");
}

function enviarInfo(){

    var email;
    var assunto;
    var mensagem;

    email = document.getElementById("email").value;
    assunto = document.getElementById("assunto").value;
    mensagem = document.getElementById("mensagem").value;

    Enviando(email,assunto,mensagem);

}