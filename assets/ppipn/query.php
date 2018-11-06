<?php
require ('connection.php');

$email = $_POST['email'];
$motivazione = $_POST['motivazione']; 

// Usando statement sql 'prepared' non sarà possibile attuare un attacco di tipo SQL injection.
$stmt = $conn->prepare("INSERT into motivazione (email, motivazione) VALUES (?,?)");
$stmt->bind_param("ss",$email,$motivazione);
$stmt->execute();
$stmt->close();
$conn->close();
?>