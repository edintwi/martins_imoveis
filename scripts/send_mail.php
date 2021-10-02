<?php
if(isset($_POST['name']) && !empty($_POST['name'])){
    $name =  addslashes ($_POST['name']);
    $email = addslashes ($_POST['email']);
    $msg = addslashes ($_POST['msg']);
    
    $to = "martinsimoveis@martinsimoveis.com";
    $assunto = "Fale Conosco | Martins Imóveis";
    $corpo = "Nome.$name. - E-mail.$email. - Mensagem.$msg";

    $cabecalho = "From: martinsimoveis@martinsimoveis.com"."r\n".
                "Reply-To:".$email."\r\n".
                "X-Mailer: PHP/".phpversion();

    mail($to, $assunto, $corpo, $cabecalho);
    echo "<script>alert('Mensagem enviada com Sucesso!);</script>";

}


