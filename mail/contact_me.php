<?php
// Check for empty fields
if(empty($_POST['name'])  		||
   empty($_POST['email']) 		||
   empty($_POST['phone']) 		||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
	echo "No arguments Provided!";
	return false;
   }
	
$name = $_POST['name'];
$email_address = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];
$country = $_POST['country'];


	
// Create the email and send the message
$to = 'clare@traversepublishing.com'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
$email_subject = "Form Submitted by:  $name";
$email_body = "You have received a new message from your website contact form.\n\n".
"If this email contains an AGE and COUNTRY, it was from a subscriber. Otherwise, it is from the contact form.
\nHere are the details:\n\nName: $name\n\nEmail: $email_address\n
Age or Last Name: $phone\n
Country -Only if a Subscriber- : $country\n
Message:\n$message";
$headers = "From: noreply@yourdomain.com\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
$headers .= "Reply-To: $email_address";	
mail($to,$email_subject,$email_body,$headers);
return true;			
?>