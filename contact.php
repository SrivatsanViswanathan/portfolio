<?php

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['firstname']) != '') {

 $to = "sriv.viswanathan@gmail.com";

 $firstname = $_POST["firstname"];
 $lastname = $_POST["lastname"];
 $email_address = $_POST["email"];
 $subject = $_POST["subject"];
 $message = $_POST["message"];

 $email_subject = $subject;


 $email_body = "From: " . $firstname . " " . $lastname;
 $email_body .= "Email: " . $email_address;
 $email_body .= "Message: " . $message;

 $email_header = "From: " . $email_address;
  
 mail($to, $email_subject, $email_body, $email_header);

 if (mail($to, $email_subject, $email_body, $email_header)) {
  echo "Message accepted";
 } else {
  echo "Error: Message not accepted";
 }
}

?>