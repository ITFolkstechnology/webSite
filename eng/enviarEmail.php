<?php
if (isset($_POST['SubmitForm'])) {

    $para = "douglas.anderson@itfolkstechnology.com";

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $assunto = $_POST['assunto'];
    $mens = $_POST['mensagem'];

    $mensagem = "<strong>SOLICITAÇÃO DE INFORMAÇÕES VIA SITE IT FOLKS</strong>";
    $mensagem .= "<br><br> <strong>Nome:  </strong>" . $nome;
    $mensagem .= "<br>  <strong>E-mail: </strong>" .$email;
    $mensagem .= "<br>  <strong>Mensagem: </strong>" . $mens;

    $headers =  "Content-Type:text/html; charset=UTF-8\n";
    $headers .= "From:  Site IT FOlks\n";
    $headers .= "IT Folks:  <contato@itfolkstechnology.com>\n";
    $headers .= "X-Mailer: PHP  v" . phpversion() . "\n";
    $headers .= "X-IP:  " . $_SERVER['REMOTE_ADDR'] . "\n";
    $headers .= "Return-Path:  <contato@itfolkstechnology.com>\n";
    $headers .= "MIME-Version: 1.0\n";

    mail($para, $assunto, $mensagem, $headers); 
}
?>
?>