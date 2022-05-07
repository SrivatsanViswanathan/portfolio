<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

 $to = "sriv.viswanathan@gmail.com";

 $firstname = $_POST["firstname"];
 $lastname = $_POST["lastname"];
 $email_address = $_POST["email"];
 $subject = $_POST["subject"];
 $message = $_POST["message"];

 $email_subject = $subject;


 $email_body = "From: " . $firstname . " " . $lastname . "\n";
 $email_body .= "Email: " . $email_address . "\n";
 $email_body .= "Message: " . $message . "\n";

 $email_header = "From: " . $email_address . "\r\n";
  
 mail($to, $email_subject, $email_body, $email_header);

}

?>