<?php
/*
This first bit sets the email address that you want the form to be submitted to.
You will need to change this value to a valid email address that you can access.
*/
$webmaster_email = "contact@touchvisiontech.com";

/*
This bit sets the URLs of the supporting pages.
If you change the names of any of the pages, you will need to change the values here.
*/


$thankyou_page = "thank_you.html";

/*
This next bit loads the form field data into variables.
If you add a form field, you will need to add it here.
*/
$email_address = $_REQUEST['email_address'] ;
$subject = $_REQUEST['subject'] ;
$message = $_REQUEST['message'] ;
$firstname = $_REQUEST['firstname'] ;
$msg = 
"First Name: " . $firstname . "\r\n" . 
"Email: " . $email_address . "\r\n" . 
"Subject: " . $subject . "\r\n" .
"Message: " . $message .; 

/*
The following function checks for email injection.
Specifically, it checks for carriage returns - typically used by spammers to inject a CC list.
*/

	mail( $webmaster_email, "ContactUs Form Results", $msg );

	header( "Location: $thankyou_page" );

?>