<?php 
	require 'dbConnect.php';
?>

<!DOCTYPE HTML>
<html lang="en">
<head>
  <meta charset="utf-8">
 		<title>Login Page</title>
		
		<link rel="stylesheet" type="text/css" href="../CSS/style.css">
		<script rel="javascript" type="text/javascript" src="../JS/JavaScripts.js"></script>
		
</head>
<body>
 
		<div id="content">
		
		
			<ul>
				<form action="signin.php" method="POST">
				<li><input type="text" placeholder="Username" name="username" required></li>
				<li><input type="password" placeholder="Password" name="password" required></li>
				<li><a href="#">Forgot your password?</a></li>
				<li><input type="submit" value = "Sign In" id="in"></li>
				</form>
			</ul>
			
		</div>
	

<div id="container">


<p class="new account" style="margin-left:60%;margin-right:10%;">
<label>Create New Account!</label>
<br/>
<br/>

<form class="signup" action = "register.php" method = "POST">

<input type="text" placeholder="First Name" name="fname" required>

<input type="text" placeholder="Last Name" name="lname" required>

<input type="text" placeholder="Username" name="uname" required>

<input type="password" placeholder="Password" name="pword" required>

<input type="submit" value = "Sign Up">

</form>

</p>



<p class="more" style="margin-left:10%;margin-right:55%;">
<label>More about our Quiz Website</label>
<br/>
<br/>
Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
</p>


</div>

</body>
</html>