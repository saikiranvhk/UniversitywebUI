<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$message = $_POST['message'];

$email_form = 'nobitha1432@gmail.com';

$email_subject ='NEW COMMENT POSTED';

$email_body = "User Name: $name.\n".
               "User Email:$visitor_email.\n";
               "Subject:$subject.\n";
               "User Message: $message .\n";
$to ='vishnu2004kalayan@gmail.com';

$header = "From: $email_form \r\n";

$headers .="Reply-to: $visitor_email \r\n";

mail($to,$email subject,$email body,$headers);

header("Location:contact.html");


?>