<?php
require 'dbConnect.php';
session_start();

$score = 0;

	$numQuestions = $_POST['numQuestions'];
	
	
	for($x = 1; $x <= $numQuestions; $x++){
		
			if( isset($_POST['q'.$x]) ){
			
				$cName = $_POST['q'.$x];
				$result = $mysqli->query("SELECT * FROM choice WHERE choiceName = '$cName'");
				$c = $result->fetch_assoc();
				
				
				
				if($c['correct']){
					$score++;
				}
			}

	}
	
	$score = ($score/$numQuestions)*100;
	$uName = $_SESSION['uname'];
	$result = $mysqli->query("SELECT * FROM user WHERE userName = '$uName'");
	$userID = $result->fetch_assoc();
	$userID = $userID['userID'];
	$catID = $_POST['catID'];
	
	$result = $mysqli->query("INSERT INTO quizScore(userID, categoryID, score, date) 
	VALUES($userID,$catID,$score,now())");
		
	header("location: ../PHP/Homepage.php");	
?>
