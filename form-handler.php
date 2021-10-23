<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];
$email_from = 'https://ankit6899.github.io/university/';
$email_subject = 'New Form Submission';
$email_body = "user Name: $name.\n".
                "user Email: $vistior_email.\n".
                "subject: $subject.\n".
                "user Message: $message .\n";
$to = 'rankitaj9@gmail.com';
$header = "from: $email_from \r\n";
$header .="Reply-To: $visitor_email \r\n";
mail($to,$email_subject,$email_body,$header);
header("location: contact.html");
?>