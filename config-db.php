<?php
$servername = "volkan";
$username = "adminVolkan";
$password = "volkan";
$dbname = "prova1";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>