<?php
$servername = "";
$username = "root";
$password = "";
$dbname=information_schema
// Create connection
$conn = new mysqli($servername, $username, $password,information_schema);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>