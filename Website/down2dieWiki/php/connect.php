<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "down2diewiki";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>