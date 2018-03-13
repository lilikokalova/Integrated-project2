<?php
$servername = "localhost";
$username = "root";
$database = "fdmquiz";
$password = "";

// Create connection
$mysqli = mysqli_connect($servername, $username, $password , $database);

// Check connection
if (!$mysqli) {
    die("Connection failed: " . mysqli_connect_error());
}

?>