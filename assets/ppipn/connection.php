<?php
$DB_HOST = "localhost";
$DB_USER = "ffthrthr_phpsos";
$DB_PASS = "w3ar3pirat3s";
$DB_NAME = "ffthrthr_sos2017";

// Create connection
$conn = new mysqli($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME, 3306);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>