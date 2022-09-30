<?php
$email = $_POST['email'];
$name = $_POST['name'];
$subject = "Thank you for downloading my resume";
$body= "

please enter this password: 1982128

*This is a system generated email - PLEASE DO NOT reply to this email*";
$headers = 'From: shubhammeshram.tk' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
    //to me
    $recipient = "shubhammeshram@rocketmail.com";
    $formcontent="From: $name \n Email: $email ";

mail($email,$subject,$body,$headers) or die("Error!");
mail($recipient, $subject, $formcontent, $headers) or die("Error!");
header("Location: shubhammeshram.tk.pdf");
?>
