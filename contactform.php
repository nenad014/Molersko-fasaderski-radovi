<?php

if(isset($_POST['submit'])) {
	$name = $_POST['name'];
	$subject = $_POST['subject'];
	$email = $_POST['email'];
	$message = $_POST['message'];

	$mailTo = "tadicvlada8@gmail.com";
	$headers = "From: " . $email;
	$txt = "Primili ste e-mail od " . $name . ".\n\n" . $message;

	mail($mailTo, $subject, $txt, $headers);
	header("Location: index.php?mailsend");
}