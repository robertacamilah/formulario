<?php

if(isset($_POST['email'] && !empty($_POST['email'])) {



$nome = addslashes($_POST(['name']))
$email = addslashes($_POST(['email']))
$mensagem = addslashes($_POST(['message']))


$to = "robertasannttos@hotmail.com";
$subjet = "Contato - Roberta Desenvolvedora";
$body = "Nome: ".$nome. "\n"
     "Email: ".$email."\n
    "Mensagem: ".$mensagem";
$header = "From:robertasannttos@hotmail.com.br"

}

?>