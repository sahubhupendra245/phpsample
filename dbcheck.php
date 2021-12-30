<?php
$servername = "mariadb-1-fcwmk";
$username = "webappdb";
$password = "webappdb";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>
