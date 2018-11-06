<?php
if (isset ($_POST["email"])){
$emailfirst = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
$email = $emailfirst.","." ";
//MODIFICA IL PERCORSO DEL FILE newsletter_email.txt
$txtfile = 'newsletter_email.txt';
// Write the contents to the file, 
// using the FILE_APPEND flag to append the content to the end of the file
// and the LOCK_EX flag to prevent anyone else writing to the file at the same time
file_put_contents($txtfile, $email.PHP_EOL, FILE_APPEND | LOCK_EX);
}
?>