<!DOCTYPE html>
<html>
<head>
	<title>Consumer Login</title>
</head>
<body>
	<h2>Consumer Login</h2>
	<form action="consumer_login.php" method="post">
		<label for="username">Username:</label>
		<input type="text" id="username" name="username"><br><br>
		<label for="password">Password:</label>
		<input type="password" id="password" name="password"><br><br>
		<input type="submit" value="Login">
	</form>

	<?php
		// I check if the form is submitted
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			// Retrieve the form data
			$username = $_POST["username"];
			$password = $_POST["password"];

			// I will add authentication here
			
			// Redirect user to home page after successfull login
			header("Location: home.php");
			exit;
		}
	?>
</body>
</html>
