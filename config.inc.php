<?php


// Database connection details
$servername = "localhost";
$username = "root";
$password = "";
$dBName = "test" ;

// Create connection
$conn = mysqli_connect ($servername, $username, $password, $dBName);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
