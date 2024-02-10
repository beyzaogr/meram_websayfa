<?php
$name= $_POST['name'];
$surname = $_POST['surname']
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_from = 'info@yourwebsite.com';

$email_subject = 'New Form Submission';

$email_body = "User Name: $name.\n".
                "User Surname: $surname.\n".
                "User Email: $visitor_email.\n".
                "Subject: $subject.\n".
                "User Message: $message .\n";

$to = 'beyzaogr@gmail.com';

$headers = "Form: $email_from \r\n";

$headers .= "Reply- To: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);

header("Location: contact.html");


?>