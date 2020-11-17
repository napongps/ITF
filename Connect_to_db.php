<?php

$servername = "napongps.mysql.database.azure.com";
$username   = "napongps@napongps";
$password   = "Jklhgdf1123";
$dbname     = "ITFlab";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$conn->query("set names utf8");

?>
