<?php
$servername = 'localhost';
$username = 'aaniketh';
$password = '2004';
$dbname = 'admission_portal';

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>