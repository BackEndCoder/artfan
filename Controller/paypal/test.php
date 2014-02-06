<?php
$to      = 'pgmr.anil@gmail.com';
$subject = 'the subject';
$message = 'hello';
$headers = 'From: idreams.anil.shr@gmail.com' . "\r\n" ;

mail($to, $subject, $message, $headers);
?>