<?php

$to = "sriv.viswanathan@gmail.com";

$firstname = $_POST["firstname"];
$lastname = $_POST["lastname"];
$email_address = $_POST["email"];
$subject = $_POST["subject"];
$message = $_POST["message"];

$email_subject = $subject;

$email_body = "From: ".$firstname." ".$lastname."\r\n";
$email_body .= "Email: ".$email_address."\r\n";
$email_body .= "Message: ".$message."\r\n";

$email_header = "From: ".$email_address;

mail($to, $email_subject, $email_body, $email_header);

?>