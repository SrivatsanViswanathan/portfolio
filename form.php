
<?php

$myfile = fopen("contact.txt", "a") or die("Unable to open file!");

$first_name = $_POST["firstname"]."|";
$last_name = $_POST["lastname"]."|";
$email = $_POST["email"]."|";
$subject = $_POST["subject"]."|";
$comment = $_POST["comment"]."\n";

fwrite($myfile, $first_name);
fwrite($myfile, $last_name);
fwrite($myfile, $email);
fwrite($myfile, $subject);
fwrite($myfile, $comment);

fclose($myfile);
?>