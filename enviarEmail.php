<?php

include("PHPMailer-master/class.phpmailer.php");
include("PHPMailer-master/class.smtp.php");
	$mail = new PHPMailer();
	$mail->IsSMTP();
	$mail->SMTPAuth = true;
	$mail->Username = "contato@xmlreader.com.br";
	$mail->Password = "dbz34575790";
	$mail->Host = "email-ssl.com.br";
	$mail->Port = 465;
	$mail->SMTPSecure = 'ssl';  
	$mail->From = "contato@xmlreader.com.br"; //remetente
	$mail->FromName = utf8_decode($_POST['nome']); //remetente nome
	$mail->AddReplyTo($_POST['email'], utf8_decode($_POST['nome']));
	$mail->IsHTML(true);
	$mail->Subject = utf8_decode("Duvida/Sugestão"); //assunto
	$mail->Body = utf8_decode($_POST['message']); //mensagem
	$mail->AddAddress("contato@xmlreader.com.br", utf8_decode("Leitor XML")); //email e nome destino
	
	$mail->Send();
?>

   
        
