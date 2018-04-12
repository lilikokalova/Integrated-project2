<?php
require 'dbConnect.php';
session_start();
$cat = $_POST['Categories'];
$result = $mysqli_query->query("DELETE FROM category WHERE categoryName = '$cat'");
header("location: ../PHP/CreateCategory.php");
?>
