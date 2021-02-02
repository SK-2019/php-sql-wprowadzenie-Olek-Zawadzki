<?php
$servername = "mysql-ramzes.alwaysdata.net";
$username = "ramzes";
$password = "olek123";
$dbname = "ramzes_1";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>