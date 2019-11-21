<?php
$servername = "localhost";
$username = "root";
$password = "";
$databaseName = 'financial_inclusion';

// Create connection
$conn = new mysqli($servername, $username, $password,$databaseName);

// Check connection
if ($conn->connect_error) {
    die("Failed connecting: " . $conn->connect_error);
}
echo "Connected successfully";
?>