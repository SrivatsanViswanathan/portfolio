<?php

$myEmail = "sriv.viswanathan@gmail.com";

$firstname = $_POST["firstname"];
$lastname = $_POST["lastname"];
$email_address = $_POST["email"];
$subject = $_POST["subject"];
$message = $_POST["message"];

$email_subject = $subject;

$email_body = "Details of Email: \n Name: $firstname"." "."$lastname\n"."Email Address: $email_address \n
Message: $message";

$email_from = "From: $email_address"."\r\n";
$email_from .= "Reply-To: $email_address"."\r\n";
$email_from .= "Content-type: text/html; charset=iso-8859-1\r\n";

mail($myEmail, $email_subject, $email_body, $email_from);


?>