<?php
	$name = htmlspecialchars($_POST['name']);
	$email = htmlspecialchars($_POST['email']);
	$subject = htmlspecialchars($_POST['subject']);
	$message = htmlspecialchars($_POST['message']);
	$subject = "Pink.com: ".$subject;
	$subject = "=?utf-8?B?".base64_encode($subject)."?=";
	$toSend = "Сообщение: ".$message."\n\rИмя: $name \n\rПочта: $email";

	if(mail("olesov198@mail.ru",$subject, $toSend)) 
		echo "Sent";
	else
		echo "Error";
?>