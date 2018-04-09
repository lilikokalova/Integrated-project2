<?php 
	require 'dbConnect.php';

	$result = $mysqli->query("SELECT categoryName FROM category");


$rowcount = mysqli_num_rows($result);


while($listrow = mysqli_fetch_assoc($result)) {
	$GLOBALS[] = $listrow;
};




?>

<!DOCTYPE HTML>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="../CSS/style.css">
		<script rel="javascript" type="text/javascript" src="../JS/JavaScripts.js"></script>
	</head>
	<body>
		<div id="content">
		
			<ul>
			
				<li><a href="../PHP/Homepage.php">Home</a></li>
				<li><a href="../PHP/profile.php">View Profile</a></li>
				<li><a href="../PHP/questionPage.php">Category</a></li>
				<li><a class="active" href="../PHP/CreateCategory.php">Admin</a></li>
				<li style="float:right"><a href="../PHP/Logout.php">Log out</a></li>
			</ul>
			
		</div>
		
		<div id="container">
		
			<h2>Delete Category</h2>
			
			<ul>
				<li><a href="../PHP/CreateCategory.php">Create New Category</a></li>
				<li><a href="../PHP/AddQuestion.PHP">Add New Questions</a></li>
				<li><a class="active" href="../PHP/DeleteCategory.php">Delete Category</a></li>
				<li><a href="../PHP/DeleteQuestion.php">Delete Question</a></li>
				<li><a href="../PHP/EditQuestion.php">Edit Question</a></li>
			</ul>
			<form action="DropCategory.php">
			<label for="SelectCategory">Select Category</label><br>
			<select name ="Categories">
				<?php
              if($result->num_rows > 0){
              	$number = 0;
              	   while($number < $rowcount){
              	   	echo '<option value = "'.$GLOBALS[$number]['categoryName'].'">'.$GLOBALS[$number]['categoryName'].'</option>';
              	   	$number ++;
              	   }
              }
              	?>
			</select>
			<br><br>
			<br><br>
			<input type="submit" value="Save changes">
			</form>
			
		</div>
		
	</body>
</html>