<?php
require 'dbConnect.php';

$fname = $mysqli->escape_string($_POST['fname']);
$lname = $mysqli->escape_string($_POST['lname']);
$uname = $mysqli->escape_string($_POST['uname']);
$pword = $mysqli->escape_string(password_hash($_POST['pword'],PASSWORD_BCRYPT));

$result = $mysqli->query("INSERT INTO users(username,password,firstname,lastname,isadmin) 
	VALUES('$uname','$pword','$fname','$lname',0)");
?>