<?php
require 'dbConnect.php';
session_start();

$numQuestions = 0;

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

<form class = "questionPage" action="setScore.php" method="POST">

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
	<?php if(count($questions_array) >=1) : $numQuestions++;?>	

		<input class = "questionPage"type="radio" name="q1" class = "option" id="q1" onclick="myFunction(1)"<?php if(count($choices_array) >= 1) $choice=$choices_array[0]; else $choice="" ?> value="<?php echo $choice ?>"> <?php echo $choice ?> <br>
		<input class = "questionPage"type="radio" name="q1" class = "option" id="q2" onclick="myFunction(2)"<?php if(count($choices_array) >= 2) $choice=$choices_array[1]; else $choice="" ?> value="<?php echo $choice ?>"> <?php echo $choice ?> <br>
		<input class = "questionPage"type="radio" name="q1" class = "option" id="q3" onclick="myFunction(3)"<?php if(count($choices_array) >= 3) $choice=$choices_array[2]; else $choice="" ?> value="<?php echo $choice ?>"> <?php echo $choice ?> <br>
		<input class = "questionPage"type="radio" name="q1" class = "option" id="q4" onclick="myFunction(4)"<?php if(count($choices_array) >= 4) $choice=$choices_array[3]; else $choice="" ?> value="<?php echo $choice ?>"> <?php echo $choice ?> <br>

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
	<?php if(count($questions_array) >=2) : $numQuestions++;?>

		<input class = "questionPage"type="radio" name="q2" class = "option" id="q1" onclick="myFunction(1)"<?php if(count($choices_array) >= 1) $choice=$choices_array[0]; else $choice="" ?> value="<?php echo $choice ?>"> <?php echo $choice ?> <br>
		<input class = "questionPage"type="radio" name="q2" class = "option" id="q2" onclick="myFunction(2)"<?php if(count($choices_array) >= 2) $choice=$choices_array[1]; else $choice="" ?> value="<?php echo $choice ?>"> <?php echo $choice ?> <br>
		<input class = "questionPage"type="radio" name="q2" class = "option" id="q3" onclick="myFunction(3)"<?php if(count($choices_array) >= 3) $choice=$choices_array[2]; else $choice="" ?> value="<?php echo $choice ?>"> <?php echo $choice ?> <br>
		<input class = "questionPage"type="radio" name="q2" class = "option" id="q4" onclick="myFunction(4)"<?php if(count($choices_array) >= 4) $choice=$choices_array[3]; else $choice="" ?> value="<?php echo $choice ?>"> <?php echo $choice ?> <br>

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
	<?php if(count($questions_array) >=3) : $numQuestions++;?>

		<input class = "questionPage"type="radio" name="q3" class = "option" id="q1" onclick="myFunction(1)"<?php if(count($choices_array) >= 1) $choice=$choices_array[0]; else $choice="" ?> value="<?php echo $choice ?>"> <?php echo $choice ?> <br>
		<input class = "questionPage"type="radio" name="q3" class = "option" id="q2" onclick="myFunction(2)"<?php if(count($choices_array) >= 2) $choice=$choices_array[1]; else $choice="" ?> value="<?php echo $choice ?>"> <?php echo $choice ?> <br>
		<input class = "questionPage"type="radio" name="q3" class = "option" id="q3" onclick="myFunction(3)"<?php if(count($choices_array) >= 3) $choice=$choices_array[2]; else $choice="" ?> value="<?php echo $choice ?>"> <?php echo $choice ?> <br>
		<input class = "questionPage"type="radio" name="q3" class = "option" id="q4" onclick="myFunction(4)"<?php if(count($choices_array) >= 4) $choice=$choices_array[3]; else $choice="" ?> value="<?php echo $choice ?>"> <?php echo $choice ?> <br>

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
	<?php if(count($questions_array) >=4) : $numQuestions++;?>

		<input class = "questionPage"type="radio" name="q4" class = "option" id="q1" onclick="myFunction(1)"<?php if(count($choices_array) >= 1) $choice=$choices_array[0]; else $choice="" ?> value="<?php echo $choice ?>"> <?php echo $choice ?> <br>
		<input class = "questionPage"type="radio" name="q4" class = "option" id="q2" onclick="myFunction(2)"<?php if(count($choices_array) >= 2) $choice=$choices_array[1]; else $choice="" ?> value="<?php echo $choice ?>"> <?php echo $choice ?> <br>
		<input class = "questionPage"type="radio" name="q4" class = "option" id="q3" onclick="myFunction(3)"<?php if(count($choices_array) >= 3) $choice=$choices_array[2]; else $choice="" ?> value="<?php echo $choice ?>"> <?php echo $choice ?> <br>
		<input class = "questionPage"type="radio" name="q4" class = "option" id="q4" onclick="myFunction(4)"<?php if(count($choices_array) >= 4) $choice=$choices_array[3]; else $choice="" ?> value="<?php echo $choice ?>"> <?php echo $choice ?> <br>

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
	<?php if(count($questions_array) >=5) : $numQuestions++;?>

		<input class = "questionPage"type="radio" name="q5" class = "option" id="q1" onclick="myFunction(1)"<?php if(count($choices_array) >= 1) $choice=$choices_array[0]; else $choice="" ?> value="<?php echo $choice ?>"> <?php echo $choice ?> <br>
		<input class = "questionPage"type="radio" name="q5" class = "option" id="q2" onclick="myFunction(2)"<?php if(count($choices_array) >= 2) $choice=$choices_array[1]; else $choice="" ?> value="<?php echo $choice ?>"> <?php echo $choice ?> <br>
		<input class = "questionPage"type="radio" name="q5" class = "option" id="q3" onclick="myFunction(3)"<?php if(count($choices_array) >= 3) $choice=$choices_array[2]; else $choice="" ?> value="<?php echo $choice ?>"> <?php echo $choice ?> <br>
		<input class = "questionPage"type="radio" name="q5" class = "option" id="q4" onclick="myFunction(4)"<?php if(count($choices_array) >= 4) $choice=$choices_array[3]; else $choice="" ?> value="<?php echo $choice ?>"> <?php echo $choice ?> <br>

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
	<?php if(count($questions_array) >=6) : $numQuestions++;?>

		<input class = "questionPage"type="radio" name="q6" class = "option" id="q1" onclick="myFunction(1)"<?php if(count($choices_array) >= 1) $choice=$choices_array[0]; else $choice="" ?> value="<?php echo $choice ?>"> <?php echo $choice ?> <br>
		<input class = "questionPage"type="radio" name="q6" class = "option" id="q2" onclick="myFunction(2)"<?php if(count($choices_array) >= 2) $choice=$choices_array[1]; else $choice="" ?> value="<?php echo $choice ?>"> <?php echo $choice ?> <br>
		<input class = "questionPage"type="radio" name="q6" class = "option" id="q3" onclick="myFunction(3)"<?php if(count($choices_array) >= 3) $choice=$choices_array[2]; else $choice="" ?> value="<?php echo $choice ?>"> <?php echo $choice ?> <br>
		<input class = "questionPage"type="radio" name="q6" class = "option" id="q4" onclick="myFunction(4)"<?php if(count($choices_array) >= 4) $choice=$choices_array[3]; else $choice="" ?> value="<?php echo $choice ?>"> <?php echo $choice ?> <br>

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
	<?php if(count($questions_array) >=7) : $numQuestions++;?>

		<input class = "questionPage"type="radio" name="q7" class = "option" id="q1" onclick="myFunction(1)"<?php if(count($choices_array) >= 1) $choice=$choices_array[0]; else $choice="" ?> value="<?php echo $choice ?>"> <?php echo $choice ?> <br>
		<input class = "questionPage"type="radio" name="q7" class = "option" id="q2" onclick="myFunction(2)"<?php if(count($choices_array) >= 2) $choice=$choices_array[1]; else $choice="" ?> value="<?php echo $choice ?>"> <?php echo $choice ?> <br>
		<input class = "questionPage"type="radio" name="q7" class = "option" id="q3" onclick="myFunction(3)"<?php if(count($choices_array) >= 3) $choice=$choices_array[2]; else $choice="" ?> value="<?php echo $choice ?>"> <?php echo $choice ?> <br>
		<input class = "questionPage"type="radio" name="q7" class = "option" id="q4" onclick="myFunction(4)"<?php if(count($choices_array) >= 4) $choice=$choices_array[3]; else $choice="" ?> value="<?php echo $choice ?>"> <?php echo $choice ?> <br>
		
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
	<?php if(count($questions_array) >=8) : $numQuestions++;?>

		<input class = "questionPage"type="radio" name="q8" class = "option" id="q1" onclick="myFunction(1)"<?php if(count($choices_array) >= 1) $choice=$choices_array[0]; else $choice="" ?> value="<?php echo $choice ?>"> <?php echo $choice ?> <br>
		<input class = "questionPage"type="radio" name="q8" class = "option" id="q2" onclick="myFunction(2)"<?php if(count($choices_array) >= 2) $choice=$choices_array[1]; else $choice="" ?> value="<?php echo $choice ?>"> <?php echo $choice ?> <br>
		<input class = "questionPage"type="radio" name="q8" class = "option" id="q3" onclick="myFunction(3)"<?php if(count($choices_array) >= 3) $choice=$choices_array[2]; else $choice="" ?> value="<?php echo $choice ?>"> <?php echo $choice ?> <br>
		<input class = "questionPage"type="radio" name="q8" class = "option" id="q4" onclick="myFunction(4)"<?php if(count($choices_array) >= 4) $choice=$choices_array[3]; else $choice="" ?> value="<?php echo $choice ?>"> <?php echo $choice ?> <br>

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
	<?php if(count($questions_array) >=9) : $numQuestions++;?>
	
		<input class = "questionPage"type="radio" name="q9" class = "option" id="q1" onclick="myFunction(1)"<?php if(count($choices_array) >= 1) $choice=$choices_array[0]; else $choice="" ?> value="<?php echo $choice ?>"> <?php echo $choice ?> <br>
		<input class = "questionPage"type="radio" name="q9" class = "option" id="q2" onclick="myFunction(2)"<?php if(count($choices_array) >= 2) $choice=$choices_array[1]; else $choice="" ?> value="<?php echo $choice ?>"> <?php echo $choice ?> <br>
		<input class = "questionPage"type="radio" name="q9" class = "option" id="q3" onclick="myFunction(3)"<?php if(count($choices_array) >= 3) $choice=$choices_array[2]; else $choice="" ?> value="<?php echo $choice ?>"> <?php echo $choice ?> <br>
		<input class = "questionPage"type="radio" name="q9" class = "option" id="q4" onclick="myFunction(4)"<?php if(count($choices_array) >= 4) $choice=$choices_array[3]; else $choice="" ?> value="<?php echo $choice ?>"> <?php echo $choice ?> <br>

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
	<?php if(count($questions_array) >=10) : $numQuestions++;?>
		<a href="http://yahoo.com">This will only display if $condition is true</a>

	
			<input class = "questionPage"type="radio" name="q10" class = "option" id="q1" onclick="myFunction(1)"<?php if(count($choices_array) >= 1) $choice=$choices_array[0]; else $choice="" ?> value="<?php echo $choice ?>"> <?php echo $choice ?> <br>
			<input class = "questionPage"type="radio" name="q10" class = "option" id="q2" onclick="myFunction(2)"<?php if(count($choices_array) >= 2) $choice=$choices_array[1]; else $choice="" ?> value="<?php echo $choice ?>"> <?php echo $choice ?> <br>
			<input class = "questionPage"type="radio" name="q10" class = "option" id="q3" onclick="myFunction(3)"<?php if(count($choices_array) >= 3) $choice=$choices_array[2]; else $choice="" ?> value="<?php echo $choice ?>"> <?php echo $choice ?> <br>
			<input class = "questionPage"type="radio" name="q10" class = "option" id="q4" onclick="myFunction(4)"<?php if(count($choices_array) >= 4) $choice=$choices_array[3]; else $choice="" ?> value="<?php echo $choice ?>"> <?php echo $choice ?> <br>

	<?php endif; ?>
	<br><br><br>
	

	<input type="hidden" name="numQuestions" value=<?php echo $numQuestions ?>>
	<input type="hidden" name="catID" value=<?php echo $catID ?>>
	
	<input type="submit" class = "questionPage" onclick = "location.href = '../PHP/setScore.php';">
		
</form>




</body>
</html>
