<?php 
	require 'dbConnect.php';
?>


<html>
	<head>
		<link rel="stylesheet" type="text/css" href="../CSS/style.css">
		<!--<script rel="javascript" type="text/javascript" src="../JS/JavaScripts.js"></script>-->
	</head>
	<body>
		<div id="content">
		
			<ul>
			
				<li><a href="../HTML/Homepage.html">Home</a></li>
				<li><a href="../HTML/profile.html">View Profile</a></li>
				<li><a href="../HTML/questionPage.html">Category</a></li>
				<li><a class="active" href="../HTML/CreateCategory.html">Admin</a></li>
				<li style="float:right"><a href="#logout">Log out</a></li>
			</ul>
			
		</div>
		
		<div id="container">
		
		
			<h2>Add Questions</h2>
			
			<ul>
				<li><a href="../HTML/CreateCategory.html">Create New Category</a></li>
				<li><a class="active" href="../HTML/AddQuestion.html">Add New Questions</a></li>
				<li><a href="../HTML/DeleteCategory.html">Delete Category</a></li>
				<li><a href="../HTML/DeleteQuestion.html">Delete Question</a></li>
				<li><a href="../HTML/EditQuestion.html">Edit Question</a></li>
			</ul>
			
			<br>
			<form action="../PHP/question.php" method = "post">
				<label for="SelectCategory">Select Category</label><br>
				<input list="Categories" name="category">
				<datalist id="Categories">
				<?php 
					$sql = $mysqli->query("SELECT categoryName FROM category");
					while ($row = $sql->fetch_assoc()){
						echo "<option>" . $row['categoryName'] . "</option>";
					}
					
				?>
				</datalist>
				
				<br>
				<label for="NameQuestion">Name of Question</label><br>
				<input type="text" id="NameQuestion" name="questionName" ><br>
				<label for="Answer1">Answer 1</label><br>
				<input type="text" id="Answer1" name="answer1" >
				<input type="checkbox" id="cAnswer1" class="Answer1" name="cAnswer1" value="1">
				<br>
				<label for="Answer2">Answer 2</label><br>
				<input type="text" id="Answer2" name="answer2" >
				<input type="checkbox" id="cAnswer2" class="Answer2" name="cAnswer2" value="1">
				<br>
				<label for="Answer3">Answer 3</label><br>
				<input type="text" id="Answer3" name="answer3" >
				<input type="checkbox" id="cAnswer3" class="Answer3" name="cAnswer3" value="1">
				<br>
				<label for="Answer4">Answer 4</label><br>
				<input type="text" id="Answer4" name="answer4" >
				<input type="checkbox" id="cAnswer4" class="Answer4" name="cAnswer4" value="1">
				<br>
				<label>Tick the box which is the answer</label>
				<br><br>
				<input type="submit" value="Save changes">
			</form>
			
		</div>
		
	</body>
</html>
