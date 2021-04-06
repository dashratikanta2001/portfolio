<?php
$name = $_POST['Name'];
$email = $_POST['Email'];
$phone = $_POST['Phone'];
// $call = $_POST['call'];
// $website = $_POST['website'];
// $priority = $_POST['priority'];
// $type = $_POST['type'];
$message = $_POST['Message'];
$formcontent=" From: $Name \n Phone: $Phone \n Message: $Message";
$recipient = "dashrati9999@gmail.com";
$subject = "Contact Form";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");

?>
