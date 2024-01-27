<?php

    $nome = addslashes($_POST['infoNome']);
    $email = addcslashes($_POST['infoEmail']);
    $cel = addcslashes($_POST['indoCel']);
    $texto = addcslashes($_POST['infoTexto']);

    $para = "joseleandro2807@gmail.com";
    $assunto = "CONTATOS - PORTFOLIO"

    $corpo = "Nome: ".$nome."\n"."Email: ".$email."\n"."Celular: ".cel."\n"."Mensagem: ".texto;

    $cabeca = "From: joseleandro2807@gmail.com"."\n"."Reply-to: ".$email."\n"."X=Mailer:PHP/".phpversion();

    if(mail($para, $assunto, $corpo, $cabeca)){
        echo("E-mail Enviado com sucesso!");
    }else{
        echo("Houve um erro ao enviar o email!");
    }

?>