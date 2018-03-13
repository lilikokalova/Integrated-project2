<html>
	<head>
		<link rel="stylesheet" type="text/css" href="../CSS/style.css">
		<script rel="javascript" type="text/javascript" src="../JS/JavaScripts.js"></script>
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
		
			<h2>Delete Category</h2>
			
			<ul>
				<li><a href="../HTML/CreateCategory.html">Create New Category</a></li>
				<li><a href="../HTML/AddQuestion.html">Add New Questions</a></li>
				<li><a class="active" href="../HTML/DeleteCategory.html">Delete Category</a></li>
				<li><a href="../HTML/DeleteQuestion.html">Delete Question</a></li>
				<li><a href="../HTML/EditQuestion.html">Edit Question</a></li>
			</ul>
			<form action="/action_page.php">
			<label for="SelectCategory">Select Category</label><br>
			<input name="Categories" list="Categories">
			<datalist id="Categories"></datalist>
			<br><br>
			<br><br>
			<input type="submit" value="Save changes">
			</form>
			
		</div>
		
	</body>
</html>