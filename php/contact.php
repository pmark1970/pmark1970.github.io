<?php
$to      = 'pastor.mark.s@gmail.com';
$subject = 'MDL Form Email';

foreach($_POST as $key=>$value) {
	$message .= $key."\r\n";
	if (is_array($value)) {
		$message .= var_export($value,true)."\r\n\r\n";
	} else {
		$message .= $value."\r\n\r\n";
	}
	$message .= "----------------\r\n";
}
$headers = 'From: mark@moderndaylevite.com' . "\r\n" .
   'Reply-To: pastor.mark.s@gmail.com' . "\r\n" .
   'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);

// send the user back to the website
header("Location: http://moderndaylevite.com/#profile");
?>