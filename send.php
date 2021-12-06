<!--this is the page you need to make the contact form work-->
<?php
$adminEmail = 'gabro180@gmail.com';
$userEmail = trim($_POST["email"]);
$userName = trim($_POST["name"]);
$userMessage = trim($_POST["message"]);
$headers[] = 'MIME-Version: 1.0';
$headers[] = 'Content-type: text/html; charset=iso-8859-1';
// Additional headers
$headers[] = 'To: ';
$headers[] = 'From: ';
mail($adminEmail, $userName, $userMessage, implode("\r\n", $headers));
echo "The message has been successfully sent";
?>