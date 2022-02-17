<?php
	$email = $_POST['email'];
	$message = $_POST['message'];

	$error = '';
	if(trim($email) == '')
		$error='Некорректный email';
	else if(trim($message) == '')
		$error='Нельзя отправить пустое сообщение';
	else if(strlen($email) < 10)
		$error='Сообщение должно быть более 10 символов';

	if($error !=''){
		echo $error;
		exit;
	}

	$subject = "=?utf-8?B?".base64_encode("Тест")."?=";
	$headers = "From: $email\r\nReply-to: $email\r\nContent-type: text/html;charset=utf-8\r\n"

	mail('boichenko-01@mail.ru', $subject, $message, $headers);

?>