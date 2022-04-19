<?php
//get data from form
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$subject = "Mail From Website";

$to = "domanglad@gmail.com";

$headers = "From: ".$name. "\r\n" .
"CC: domanglad@gmail";

$txt = "you received an e-mail from ".$name ."\r\nEmail: " .$email ."\r\nMessage: ". $message;
	
	if($email!=NULL){
		mail($to, $subject, $txt, $headers);
	}
	//redirect
	header('Location: thankyou.html');
	header('Location: contact.html');

?>