<?php
require 'dbConnect.php';
session_start();
$uname = $mysqli->escape_string($_POST['username']);

$result = $mysqli->query("SELECT * FROM user WHERE username='$uname'");

if ($result->num_rows == 0){
		$_Session['Message'] = "This username does not exsist";
		header("location: ../PHP/Login.php");
	}
	else{
		$user = $result->fetch_assoc();
		
		if(password_verify($_POST['password'], $user['password'])){
			
			 $_SESSION['fname'] = $user['firstName'];
			 $_SESSION['lname'] = $user['lastName'];
			 $_SESSION['uname'] = $user['userName'];
			
			header("location: ../PHP/Homepage.php");
			
			 
			
			
		}
		
		else{
			echo 'broke';
		}
		
	}
	
	
	
	
	
?>
