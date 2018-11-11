<?php

    //Incluir o phpmailer
    require_once("phpmailer/PHPMailerAutoload.php");

    //Criando instância do phpmailer
    $mail = new PHPMailer();

    //Habilitando SMTP
    $mail->isSMTP();

    $mail->SMTPOptions = array(
        'ssl' => array(
            'verify_peer'=> false,
            'verify_peer_name' => false,
            'allow_self_signed'=> true
        )
    );

    //Debug para informar os erros
    $mail->SMTPDebug=2; // 0-nada 1-msg cliente 2- msg cliente e servidor 3-tudo

    //Host
    $mail->Host = 'smtp.gmail.com';

    //Tipo de proteção
    $mail->SMTPSecure = 'tls';

    //Porta
    $mail-> Port = 587;
    
    //Autenticação
    $mail->STMPAuth = true;
    
    //Detalhes da conta de email
    $mail->Username = 'exemplo@email.com';
    $mail->Password = 'XXXXXXXXXXXXXX';

    //Detalhes do email
    $mail->setFrom ('exemplo@email.com', 'xxxx');//Quem Mandou
    $mail->addAddress('exemplo@email.com');//Destinatário
    $mail->Subject = 'Teste phpmailer';
    $mail->Body = 'Lá vem um email!!!';
    
    //Mensagem de envio ou erro
    if($mail->send()){
        echo "Enviado com sucesso!";
    }else{
        echo "Erro no envio! ";
        echo "Erro: ".$mail->ErrorInfo;
    }

?>