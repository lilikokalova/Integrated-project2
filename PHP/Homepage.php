<?php
require 'dbConnect.php';
session_start();

$cats = $mysqli->query("SELECT * FROM category");
$cats_array = array();

while($row = mysqli_fetch_assoc($cats))
{
	if(!empty($row['categoryName'])){
		$cats_array[] = $row['categoryName'];
	}
	else{
		$cats_array[] = "";
	}
}

?>

<!DOCTYPE HTML>
<html lang="en">
<head>
  <meta charset="utf-8">
 		<title>HomePage</title>
		
		<link rel="stylesheet" type="text/css" href="../CSS/style.css">
		<script rel="javascript" type="text/javascript" src="../JS/JavaScripts.js"></script>
		
</head>
<body>

		<div id="content">
		
			<ul>
				<li><a class="active" href="../PHP/Homepage.php">Home</a></li>
				<li><a href="../HTML/profile.html">View Profile</a></li>
				<li><a href="../HTML/questionPage.html">Category</a></li>
				<li style="float:right"><a href="#logout">Log out</a></li>
			</ul>
			
		</div>

<div id="container">

<h3>Categories</h3>

<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>


<form action="questionPage.php" method="POST">

<p class="categories123">

<div style="float: right;">  


	<input type="submit" name = "cat" value="<?php if(count($cats_array) >= 3)echo $cats_array[2]; else echo "No Category"?>">
	</div>

	<div style="float: right;">
	<input type="submit" name = "cat" value="<?php if(count($cats_array) >= 2)echo $cats_array[1]; else echo "No Category" ?>">
	</div>

	<div style="float: right;">
	<input type="submit" name = "cat" value="<?php if(count($cats_array) >= 1)echo $cats_array[0]; else echo "No Category" ?>">
	</div>

</p>


<br/>
<br/>
<br/>



<p class="categories456">

<div style="float: right;">
<input type="submit" name= "cat" value="<?php if(count($cats_array) >= 6) echo $cats_array[5]; else echo "No Category" ?>">
</div>


<div style="float: right;">
<input type="submit" name= "cat" value="<?php if(count($cats_array) >= 5) echo $cats_array[4]; else echo "No Category" ?>">
</div>


<div style="float: right;">
<input type="submit" name= "cat" value="<?php if(count($cats_array) >= 4) echo $cats_array[3]; else echo "No Category" ?>">
</div>

</p>
</form>
<br/>
<br/>
<br/>
<br/>

<h1>High Score Table of all Quiz Users</h1>

<br/>
<br/>
<br/>
<br/>
<br/>
<br/>


   
   
   <table style = "width:60%;">
     <tr>
	   <th>#</th>
	   <th>Make</th>
	   <th>Model</th>
	   <th>Year</th>
	   <th>Cost</th>
	 </tr>
	 <tr>
	   <td>1</td>
	   <td>Honda</td>
	   <td>Accord</td>
	   <td>2009</td>
	   <td>£500</td>
	 </tr>
	 <tr>
	   <td>2</td>
	   <td>Toyota</td>
	   <td>Camry</td>
	   <td>2012</td>
	   <td>£800</td>
	 </tr>
	 <tr>
	   <td>3</td>
	   <td>Hyundai</td>
	   <td>Elantra</td>
	   <td>2010</td>
	   <td>£600</td>
	 </tr>
	 <tr>
	   <td>4</td>
	   <td>Honda</td>
	   <td>Accord</td>
	   <td>2009</td>
	   <td>£500</td>
	 </tr>
	 <tr>
	   <td>5</td>
	   <td>Toyota</td>
	   <td>Camry</td>
	   <td>2012</td>
	   <td>£800</td>
	 </tr>
	 </table>
	 

</div>






</body>
</html>