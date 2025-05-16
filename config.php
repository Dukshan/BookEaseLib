<?php
$servername = "localhost";
$username = "root";
$password = ""; 
$dbname = "ebooks"; 

$conn = new mysqli($servername, $username, $password, $ebooks);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
