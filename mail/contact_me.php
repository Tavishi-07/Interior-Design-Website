<?php
// Check for empty fields
if(empty($_POST['name'])  		||
   empty($_POST['phone']) 		||
   empty($_POST['message'])	||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
	echo "No arguments Provided!";
	return false;
   }
	
$name = $_POST['name'];
$phone_number = $_POST['phone'];
$message = $_POST['message'];
	
// Create the email and send the message
$to = 'tavishisehrawat@gmail.com'; // This is where the form will send a message to.
$email_subject = "Website Contact Form:  $name";
$email_body = "You have received a new message from your website contact form.\n\n"."Here are the details:\n\nName: $name\n\nPhone: $phone_number\n\nMessage:\n$message";
$headers = "From: noreply@yourdomain.com\n"; // This is the email address the generated message will be from.
mail($to,$email_subject,$email_body,$headers);
return true;			
?>