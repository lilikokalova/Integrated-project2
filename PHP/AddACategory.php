<?php
require 'dbConnect.php';
session_start();

$NameCategory = $mysqli->escape_string($_POST['NameCategory']);

$result = $mysqli->query("INSERT INTO category(categoryName) 
	VALUES('$NameCategory')");

header("location: ../PHP/CreateCategory.php");
?>