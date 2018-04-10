<?php
require 'dbConnect.php';

$category = $_POST['category'];
$questionName = $mysqli->escape_string($_POST['questionName']);
$answer1 = $mysqli->escape_string($_POST['answer1']);
$answer2 = $mysqli->escape_string($_POST['answer2']);
$answer3 = $mysqli->escape_string($_POST['answer3']);
$answer4 = $mysqli->escape_string($_POST['answer4']);

echo $category;
echo $_POST['cAnswer1'];


if ($_POST['cAnswer1'] == '1') {
	$canswer1 = $mysqli->escape_string($_POST['cAnswer1']);
} else {
	$canswer1 = 0;
};
if ($_POST['cAnswer2'] == '1') {
	$canswer2 = $mysqli->escape_string($_POST['cAnswer2']);
}else {
	$canswer2 = 0;
};
if ($_POST['cAnswer3'] == '1') {
	$canswer3 = $mysqli->escape_string($_POST['cAnswer3']);
}else {
	$canswer3 = 0;
};
if ($_POST['cAnswer4'] == '1') {
	$canswer4 = $mysqli->escape_string($_POST['cAnswer4']);
}else {
	$canswer4 = 0;
};


//fetch category ID
$que = "SELECT * FROM category WHERE categoryName = '$category'";
echo "SELECT * FROM category WHERE categoryName = $category";

if(mysqli_query($mysqli, $que)){

	$cat = $que->fetch_assoc();
	$catID = escape_string($cat['categoryID']);
} else{
    echo "ERROR: Could not able to execute $query. "; //. mysqli_error($mysqli);
}


//Insert into question
$result2 = $mysqli->query("INSERT INTO question(categoryID, questionName) 
	VALUES('$catID', '$questionName');");
		
	
//Fetch ID from question
$query2 = $mysqli->query("SELECT * FROM question WHERE questionName = '$questionName'");

$quest = $query2->fetch_assoc();
$questID = $quest['questionID'];
	


$result = $mysqli->query("INSERT INTO choice(questionID,choiceName,correct) 
	VALUES('$questID','$answer1','$canswer1');");
$result = $mysqli->query("INSERT INTO choice(questionID,choiceName,correct) 
	VALUES('$questID','$answer2','$canswer2');");
$result = $mysqli->query("INSERT INTO choice(questionID,choiceName,correct) 
	VALUES('$questID','$answer3','$canswer3');");
$result = $mysqli->query("INSERT INTO choice(questionID,choiceName,correct) 
	VALUES('$questID','$answer4','$canswer4');");
	
		
	//$mysqli->multi_query($result);
	
	header("location: ../PHP/AddQuestion.php");
?>