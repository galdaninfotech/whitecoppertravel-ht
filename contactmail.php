<?php
ob_start();

$name = $_POST['name'];
$email = $_POST['email'];
$comments = $_POST['comments'];



$message= <<<MSG
Recently an online form is been filled out on Contact page of White Copper Travel with the following details.

Name: $name
Email: $email
Message: $comments

Thanking You

System Administrator
MSG;

mail("whitecoppertravel@gmail.com", "An Online Enquiry Form Filled", $message, "From: White Copper Travel<whitecoppertravel@gmail.com>");

header("Location: thanks.html");
exit;

?>
