<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$order = $_POST['order'];
$message = $_POST['message'];

$email_from = 'muneneneshy@gmail.com';

$email_subject = 'new form submission';

$email_body = "User Name: $name.\n".
              "User Email: $visitor_email.\n".
              "Order: $visitor_email.\n".
              "User Message: $message.\n";

$to = 'njerubrianmunene@gmail.com';

$headers = "From: $email_from \r\n";

$headers .= "Reply-To: $visitor_email \r\n";


mail($to,$email_subject,$email_body,$headers);

header("Location: contact.html");


?>