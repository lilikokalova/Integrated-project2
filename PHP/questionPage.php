<?php
require 'dbConnect.php';
session_start();


$cat = $_POST['cat'];

if($cat == "No Category"){
	header("location: ../PHP/Homepage.php");
}


$result = $mysqli->query("SELECT * FROM category WHERE categoryName = '$cat'");
$catIDD = $result->fetch_assoc();
$catID = $catIDD['categoryID'];

$questions = $mysqli->query("SELECT * FROM question WHERE categoryID = '$catID'");
$questions_array = array();

while($row = mysqli_fetch_assoc($questions))
{
	if(!empty($row['questionName'])){
		$questions_array[] = $row['questionName'];
		
	}
	else{
		$questions_array[] = "";
	}
}



?>

<!DOCTYPE HTML>
<html lang="en">
<head>
<link rel="stylesheet" type="text/css" href="../CSS/style.css">
<script rel="javascript" type="text/javascript" src="../JS/JavaScripts.js"></script>
<meta charset="utf-8">
<title class = "questionPage">Question Page</title>
</head>
<body class = "questionPage" onload="load_Master()">

		<div id="content">
		
			<ul>
				<li><a class="active" href="../PHP/Homepage.php">Home</a></li>
				<li><a href="../PHP/profile.php">View Profile</a></li>
				<li><a href="../HTML/questionPage.html">Category</a></li>
				<li style="float:right"><a href="#logout">Log out</a></li>
			</ul>
			
		</div>


<div id="head">
		
</div>
<br/>
<br/>
 

<h1 class="questionPage">

<?php echo $cat; ?>

</h1>

<form class = "questionPage" action="setScore.php">

	<p class = "questionPage"><?php if(count($questions_array) >= 1)echo $questions_array[0]; else echo "" ?></p>
	<?php
		
		if(count($questions_array) >=1){
		$result = $mysqli->query("SELECT * FROM question WHERE questionName = '$questions_array[0]'");
		$qIDD = $result->fetch_assoc();
		$qID = $qIDD['questionID'];
	
		$choices = $mysqli->query("SELECT * FROM choice WHERE questionID = '$qID'");
		$choices_array = array();
		while($row = mysqli_fetch_assoc($choices))
		{
			if(!empty($row['choiceName'])){
				$choices_array[] = $row['choiceName'];
			}
			else{
				$choices_array[] = "";
			}
		}	
		}
	?>
	<?php if(count($questions_array) >=1) : ?>
	<form class = "questionPage" id="question1">
		<input class = "questionPage"type="radio" name="q1" class = "option" id="q1" onclick="myFunction(1)"> <?php if(count($choices_array) >= 1)echo $choices_array[0]; else echo "" ?> <br>
		<input class = "questionPage"type="radio" name="q1" class = "option" id="q2" onclick="myFunction(2)"> <?php if(count($choices_array) >= 2)echo $choices_array[1]; else echo "" ?> <br>
		<input class = "questionPage"type="radio" name="q1" class = "option" id="q3" onclick="myFunction(3)"> <?php if(count($choices_array) >= 3)echo $choices_array[2]; else echo "" ?> <br>
		<input class = "questionPage"type="radio" name="q1" class = "option" id="q4" onclick="myFunction(4)"> <?php if(count($choices_array) >= 4)echo $choices_array[3]; else echo "" ?> <br>
	</form>
	<br><br><br>
	<?php endif; ?>
	<p class = "questionPage"><?php if(count($questions_array) >= 2)echo $questions_array[1]; else echo "" ?></p>
	<?php
	if(count($questions_array) >=2){
		$result = $mysqli->query("SELECT * FROM question WHERE questionName = '$questions_array[1]'");
		$qIDD = $result->fetch_assoc();
		$qID = $qIDD['questionID'];
	
		$choices = $mysqli->query("SELECT * FROM choice WHERE questionID = '$qID'");
		$choices_array = array();
		while($row = mysqli_fetch_assoc($choices))
		{
			if(!empty($row['choiceName'])){
				$choices_array[] = $row['choiceName'];
			}
			else{
				$choices_array[] = "";
			}
		}
	}		
	?>
	<?php if(count($questions_array) >=2) : ?>
	<form class = "questionPage" id="question1">
		<input class = "questionPage"type="radio" name="q1" class = "option" id="q1" onclick="myFunction(1)"> <?php if(count($choices_array) >= 1)echo $choices_array[0]; else echo "" ?> <br>
		<input class = "questionPage"type="radio" name="q1" class = "option" id="q2" onclick="myFunction(2)"> <?php if(count($choices_array) >= 2)echo $choices_array[1]; else echo "" ?> <br>
		<input class = "questionPage"type="radio" name="q1" class = "option" id="q3" onclick="myFunction(3)"> <?php if(count($choices_array) >= 3)echo $choices_array[2]; else echo "" ?> <br>
		<input class = "questionPage"type="radio" name="q1" class = "option" id="q4" onclick="myFunction(4)"> <?php if(count($choices_array) >= 4)echo $choices_array[3]; else echo "" ?> <br>
	</form>
	<br><br><br>
	<?php endif; ?>
	<p class = "questionPage"><?php if(count($questions_array) >= 3)echo $questions_array[2]; else echo "" ?></p>
	<?php
	if(count($questions_array) >=3){
		$result = $mysqli->query("SELECT * FROM question WHERE questionName = '$questions_array[2]'");
		$qIDD = $result->fetch_assoc();
		$qID = $qIDD['questionID'];
	
		$choices = $mysqli->query("SELECT * FROM choice WHERE questionID = '$qID'");
		$choices_array = array();
		while($row = mysqli_fetch_assoc($choices))
		{
			if(!empty($row['choiceName'])){
				$choices_array[] = $row['choiceName'];
			}
			else{
				$choices_array[] = "";
			}
		}
	}
	?>
	<?php if(count($questions_array) >=3) : ?>
	<form class = "questionPage" id="question1">
		<input class = "questionPage"type="radio" name="q1" class = "option" id="q1" onclick="myFunction(1)"> <?php if(count($choices_array) >= 1)echo $choices_array[0]; else echo "" ?> <br>
		<input class = "questionPage"type="radio" name="q1" class = "option" id="q2" onclick="myFunction(2)"> <?php if(count($choices_array) >= 2)echo $choices_array[1]; else echo "" ?> <br>
		<input class = "questionPage"type="radio" name="q1" class = "option" id="q3" onclick="myFunction(3)"> <?php if(count($choices_array) >= 3)echo $choices_array[2]; else echo "" ?> <br>
		<input class = "questionPage"type="radio" name="q1" class = "option" id="q4" onclick="myFunction(4)"> <?php if(count($choices_array) >= 4)echo $choices_array[3]; else echo "" ?> <br>
	</form>
	<br><br><br>
	<?php endif; ?>	
	<p class = "questionPage"><?php if(count($questions_array) >= 4)echo $questions_array[3]; else echo "" ?></p>
	<?php
	if(count($questions_array) >=4){
		$result = $mysqli->query("SELECT * FROM question WHERE questionName = '$questions_array[3]'");
		$qIDD = $result->fetch_assoc();
		$qID = $qIDD['questionID'];
	
		$choices = $mysqli->query("SELECT * FROM choice WHERE questionID = '$qID'");
		$choices_array = array();
		while($row = mysqli_fetch_assoc($choices))
		{
			if(!empty($row['choiceName'])){
				$choices_array[] = $row['choiceName'];
			}
			else{
				$choices_array[] = "";
			}
		}	
	}
	?>
	<?php if(count($questions_array) >=4) : ?>
	<form class = "questionPage" id="question1">
		<input class = "questionPage"type="radio" name="q1" class = "option" id="q1" onclick="myFunction(1)"> <?php if(count($choices_array) >= 1)echo $choices_array[0]; else echo "" ?> <br>
		<input class = "questionPage"type="radio" name="q1" class = "option" id="q2" onclick="myFunction(2)"> <?php if(count($choices_array) >= 2)echo $choices_array[1]; else echo "" ?> <br>
		<input class = "questionPage"type="radio" name="q1" class = "option" id="q3" onclick="myFunction(3)"> <?php if(count($choices_array) >= 3)echo $choices_array[2]; else echo "" ?> <br>
		<input class = "questionPage"type="radio" name="q1" class = "option" id="q4" onclick="myFunction(4)"> <?php if(count($choices_array) >= 4)echo $choices_array[3]; else echo "" ?> <br>
	</form>
	<br><br><br>
	<?php endif; ?>	
	<p class = "questionPage"><?php if(count($questions_array) >= 5)echo $questions_array[4]; else echo "" ?></p>
	<?php
	if(count($questions_array) >=5){
		$result = $mysqli->query("SELECT * FROM question WHERE questionName = '$questions_array[4]'");
		$qIDD = $result->fetch_assoc();
		$qID = $qIDD['questionID'];
	
		$choices = $mysqli->query("SELECT * FROM choice WHERE questionID = '$qID'");
		$choices_array = array();
		while($row = mysqli_fetch_assoc($choices))
		{
			if(!empty($row['choiceName'])){
				$choices_array[] = $row['choiceName'];
			}
			else{
				$choices_array[] = "";
			}
		}
	}		
	?>
	<?php if(count($questions_array) >=5) : ?>
	<form class = "questionPage" id="question1">
		<input class = "questionPage"type="radio" name="q1" class = "option" id="q1" onclick="myFunction(1)"> <?php if(count($choices_array) >= 1)echo $choices_array[0]; else echo "" ?> <br>
		<input class = "questionPage"type="radio" name="q1" class = "option" id="q2" onclick="myFunction(2)"> <?php if(count($choices_array) >= 2)echo $choices_array[1]; else echo "" ?> <br>
		<input class = "questionPage"type="radio" name="q1" class = "option" id="q3" onclick="myFunction(3)"> <?php if(count($choices_array) >= 3)echo $choices_array[2]; else echo "" ?> <br>
		<input class = "questionPage"type="radio" name="q1" class = "option" id="q4" onclick="myFunction(4)"> <?php if(count($choices_array) >= 4)echo $choices_array[3]; else echo "" ?> <br>
	</form>
	<br><br><br>
	<?php endif; ?>	
	<p class = "questionPage"><?php if(count($questions_array) >= 6)echo $questions_array[5]; else echo "" ?></p>
	<?php
	if(count($questions_array) >=6){
		$result = $mysqli->query("SELECT * FROM question WHERE questionName = '$questions_array[5]'");
		$qIDD = $result->fetch_assoc();
		$qID = $qIDD['questionID'];
	
		$choices = $mysqli->query("SELECT * FROM choice WHERE questionID = '$qID'");
		$choices_array = array();
		while($row = mysqli_fetch_assoc($choices))
		{
			if(!empty($row['choiceName'])){
				$choices_array[] = $row['choiceName'];
			}
			else{
				$choices_array[] = "";
			}
		}	
	}
	?>
	<?php if(count($questions_array) >=6) : ?>
	<form class = "questionPage" id="question1">
		<input class = "questionPage"type="radio" name="q1" class = "option" id="q1" onclick="myFunction(1)"> <?php if(count($choices_array) >= 1)echo $choices_array[0]; else echo "" ?> <br>
		<input class = "questionPage"type="radio" name="q1" class = "option" id="q2" onclick="myFunction(2)"> <?php if(count($choices_array) >= 2)echo $choices_array[1]; else echo "" ?> <br>
		<input class = "questionPage"type="radio" name="q1" class = "option" id="q3" onclick="myFunction(3)"> <?php if(count($choices_array) >= 3)echo $choices_array[2]; else echo "" ?> <br>
		<input class = "questionPage"type="radio" name="q1" class = "option" id="q4" onclick="myFunction(4)"> <?php if(count($choices_array) >= 4)echo $choices_array[3]; else echo "" ?> <br>
	</form>
	<br><br><br>
	<?php endif; ?>	
	<p class = "questionPage"><?php if(count($questions_array) >= 7)echo $questions_array[6]; else echo "" ?></p>
	<?php
	if(count($questions_array) >=7){
		$result = $mysqli->query("SELECT * FROM question WHERE questionName = '$questions_array[6]'");
		$qIDD = $result->fetch_assoc();
		$qID = $qIDD['questionID'];
	
		$choices = $mysqli->query("SELECT * FROM choice WHERE questionID = '$qID'");
		$choices_array = array();
		while($row = mysqli_fetch_assoc($choices))
		{
			if(!empty($row['choiceName'])){
				$choices_array[] = $row['choiceName'];
			}
			else{
				$choices_array[] = "";
			}
		}
	}		
	?>
	<?php if(count($questions_array) >=7) : ?>
	<form class = "questionPage" id="question1">
		<input class = "questionPage"type="radio" name="q1" class = "option" id="q1" onclick="myFunction(1)"> <?php if(count($choices_array) >= 1)echo $choices_array[0]; else echo "" ?> <br>
		<input class = "questionPage"type="radio" name="q1" class = "option" id="q2" onclick="myFunction(2)"> <?php if(count($choices_array) >= 2)echo $choices_array[1]; else echo "" ?> <br>
		<input class = "questionPage"type="radio" name="q1" class = "option" id="q3" onclick="myFunction(3)"> <?php if(count($choices_array) >= 3)echo $choices_array[2]; else echo "" ?> <br>
		<input class = "questionPage"type="radio" name="q1" class = "option" id="q4" onclick="myFunction(4)"> <?php if(count($choices_array) >= 4)echo $choices_array[3]; else echo "" ?> <br>
	</form>
	<br><br><br>
	<?php endif; ?>	
	<p class = "questionPage"><?php if(count($questions_array) >= 8)echo $questions_array[7]; else echo "" ?></p>
	<?php
	if(count($questions_array) >=8){
		$result = $mysqli->query("SELECT * FROM question WHERE questionName = '$questions_array[7]'");
		$qIDD = $result->fetch_assoc();
		$qID = $qIDD['questionID'];
	
		$choices = $mysqli->query("SELECT * FROM choice WHERE questionID = '$qID'");
		$choices_array = array();
		while($row = mysqli_fetch_assoc($choices))
		{
			if(!empty($row['choiceName'])){
				$choices_array[] = $row['choiceName'];
			}
			else{
				$choices_array[] = "";
			}
		}
	}		
	?>
	<?php if(count($questions_array) >=8) : ?>
	<form class = "questionPage" id="question1">
		<input class = "questionPage"type="radio" name="q1" class = "option" id="q1" onclick="myFunction(1)"> <?php if(count($choices_array) >= 1)echo $choices_array[0]; else echo "" ?> <br>
		<input class = "questionPage"type="radio" name="q1" class = "option" id="q2" onclick="myFunction(2)"> <?php if(count($choices_array) >= 2)echo $choices_array[1]; else echo "" ?> <br>
		<input class = "questionPage"type="radio" name="q1" class = "option" id="q3" onclick="myFunction(3)"> <?php if(count($choices_array) >= 3)echo $choices_array[2]; else echo "" ?> <br>
		<input class = "questionPage"type="radio" name="q1" class = "option" id="q4" onclick="myFunction(4)"> <?php if(count($choices_array) >= 4)echo $choices_array[3]; else echo "" ?> <br>
	</form>
	<br><br><br>
	<?php endif; ?>	
	<p class = "questionPage"><?php if(count($questions_array) >= 9)echo $questions_array[8]; else echo "" ?></p>
	<?php
	if(count($questions_array) >=9){
		$result = $mysqli->query("SELECT * FROM question WHERE questionName = '$questions_array[8]'");
		$qIDD = $result->fetch_assoc();
		$qID = $qIDD['questionID'];
	
		$choices = $mysqli->query("SELECT * FROM choice WHERE questionID = '$qID'");
		$choices_array = array();
		while($row = mysqli_fetch_assoc($choices))
		{
			if(!empty($row['choiceName'])){
				$choices_array[] = $row['choiceName'];
			}
			else{
				$choices_array[] = "";
			}
		}
	}		
	?>
	<?php if(count($questions_array) >=9) : ?>
	<form class = "questionPage" id="question1">
		<input class = "questionPage"type="radio" name="q1" class = "option" id="q1" onclick="myFunction(1)"> <?php if(count($choices_array) >= 1)echo $choices_array[0]; else echo "" ?> <br>
		<input class = "questionPage"type="radio" name="q1" class = "option" id="q2" onclick="myFunction(2)"> <?php if(count($choices_array) >= 2)echo $choices_array[1]; else echo "" ?> <br>
		<input class = "questionPage"type="radio" name="q1" class = "option" id="q3" onclick="myFunction(3)"> <?php if(count($choices_array) >= 3)echo $choices_array[2]; else echo "" ?> <br>
		<input class = "questionPage"type="radio" name="q1" class = "option" id="q4" onclick="myFunction(4)"> <?php if(count($choices_array) >= 4)echo $choices_array[3]; else echo "" ?> <br>
	</form>	
	<br><br><br>
	<?php endif; ?>
	
	<p class = "questionPage"><?php if(count($questions_array) >= 10)echo $questions_array[9]; else echo "" ?></p>
	<?php
	
	if(count($questions_array) >=10){
		$result = $mysqli->query("SELECT * FROM question WHERE questionName = '$questions_array[9]'");
		$qIDD = $result->fetch_assoc();
		$qID = $qIDD['questionID'];
	
		$choices = $mysqli->query("SELECT * FROM choice WHERE questionID = '$qID'");
		$choices_array = array();
		while($row = mysqli_fetch_assoc($choices))
		{
			if(!empty($row['choiceName'])){
				$choices_array[] = $row['choiceName'];
			}
			else{
				$choices_array[] = "";
			}
		}	
	}
	?>
	<?php if(count($questions_array) >=10) : ?>
		<a href="http://yahoo.com">This will only display if $condition is true</a>

		<form class = "questionPage" id="question1">
			<input class = "questionPage"type="radio" name="q1" class = "option" id="q1" onclick="myFunction(1)"> <?php if(count($choices_array) >= 1)echo $choices_array[0]; else echo "" ?> <br>
			<input class = "questionPage"type="radio" name="q1" class = "option" id="q2" onclick="myFunction(2)"> <?php if(count($choices_array) >= 2)echo $choices_array[1]; else echo "" ?> <br>
			<input class = "questionPage"type="radio" name="q1" class = "option" id="q3" onclick="myFunction(3)"> <?php if(count($choices_array) >= 3)echo $choices_array[2]; else echo "" ?> <br>
			<input class = "questionPage"type="radio" name="q1" class = "option" id="q4" onclick="myFunction(4)"> <?php if(count($choices_array) >= 4)echo $choices_array[3]; else echo "" ?> <br>
		</form>
	<?php endif; ?>
	<br><br><br>
	

	<input type="submit" class = "questionPage" onclick = "location.href = '../PHP/setScore.php';">
		
</form>



</body>
</html>
