<?php
$name = $_POST['name'];
$email = $_POST['name'];
$whatsapp = $_POST['name'];
$subject = $_POST['name'];
$message = $_POST['name'];

$mailheader = "From:".$name."<".$email.">\r\n";
$recipient = "oloyakennedy7@gmail.com";
mail($recipient,$subject,$message,$mailheader)
or die('Error');

echo"successss";






?>