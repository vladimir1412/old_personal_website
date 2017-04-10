<?php $name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$formcontent="From: $name \n Message: $message";
$recipient = "vladimir.nikolic123@gmail.com";
$subject = "Vladimir Nikolic Personal Website Message";
$mailheader = "From: $email \r\n";


mail($recipient, $subject, $formcontent, $mailheader);


?>
