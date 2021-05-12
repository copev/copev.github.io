<?php

//check if form was sent
if($_POST){

	$to = 'victoriaecope@email.com';
	$subject = 'New message from portfolio';
	$header = "From: $name <$name>";

	$name = $_POST['name'];
	$email = $_POST['email'];
  $subjectsender = $_POST['subject'];
	$message = $_POST['message'];

	//honey pot field
	$honeypot = $_POST['firstname'];

	//check if the honeypot field is filled out. If not, send a mail.
	if( ! empty( $honeypot ) ){
		return; //you may add code here to echo an error etc.
	}else{
		mail( $to, $subject, $subjectsender, $message, $header );
	}
}

?>