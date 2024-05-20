<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_from = 'info@gitamnss.com'

$email_subject = 'New Suggestion Submission'

$email_body = "User Name: $name.\n".
               "User Email: $visitor_email.\n".
               "subject: $subject.\n".
               "User message: $message.\n";

$to = 'kmandre@gitam.in';

$headers = "Form: $email_from \r\n";

$headers .= "Reply-To: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);

header("Location: suggestions.html");

?>