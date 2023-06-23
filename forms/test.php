<?php
$name = $_POST['name']
$email = $_POST['email']
$message = $_POST['message']
$to = "revanthraju789@gmail.com"
$subject = "mail from website"

$headers = "From: ".$name. "\r\n" .
"CC: revanthraju789@gmail.com"
 
$txt = "you have received an e-mail from ".$name ."\r\nEmail: .$email ."\r\n"
     message: ". $message;

     if($email!NULL){
        mail($to, $subject, $txt, $headers);
     }
     header('thank you')
?>