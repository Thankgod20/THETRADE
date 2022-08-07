<?php
$servername = "localhost";
$username = "u905763656_user";
$password = "Micheal200";
$dbname = "u905763656_user_details";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>