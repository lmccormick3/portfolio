<?php
$name 		= $_POST['name'];
$email 		= $_POST['email'];
$msg 		= $_POST['message'];
$output 	= "Name: ".$name."\n\nEmail: ".$email."\n\nMessage: ".$message;

$to 		= 'hello@leahmccormick.io';
$headers	= 'FROM: "'.$email.'"';

$send		= mail($to, $name, $output."\n\n***This message has been sent from LeahMcCormick.io", $headers);
?>