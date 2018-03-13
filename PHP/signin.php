<?php
require 'dbConnect.php';
session_start();
$uname = $mysqli->escape_string($_POST['username']);

$result = $mysqli->query("SELECT * FROM users WHERE username='$uname'");

if ($result->num_rows == 0){
		$_Session['Message'] = "This username does not exsist";
		header("location: ../PHP/Login.php");
	}
	else{
		$user = $result->fetch_assoc();
		
		if(password_verify($_POST['password'], $user['password'])){
			
			 $_session['fname'] = $user['fname'];
			 $_session['lname'] = $user['lname'];
			 $_session['uname'] = $user['uname'];
			
			header("location: ../PHP/AddQuestion.php");
			
			 
			
			
		}
		
		else{
			echo 'broke';
		}
		
	}
	
	
	
	
	
?>