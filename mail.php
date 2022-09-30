<?php $name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['comments'];
$formcontent="From: $name \n Subject: $subject \n Message: $message";
$recipient = "shubhammeshram@rocketmail.com";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
header("Location: index.html");
?>
