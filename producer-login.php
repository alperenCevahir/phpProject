<?php
    // I check if the form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get the form data
        $username = $_POST["username"];
        $password = $_POST["password"];

      // Open the file for reading
			$fp = fopen("producers.txt", "r");

			// Read the producers.txt file line by line
			while (!feof($fp)) {
				// Gets the current line and splits it to username and password
				$line = fgets($fp);
				$parts = explode(":", $line);
				$storedUsername = trim($parts[0]);
				$storedPassword = trim($parts[1]);

				// Checks if the entered username and passowrd are correct
				if ($username == $storedUsername && $password == $storedPassword) {
					// Redirect user to home page after successful login
					header("Location: producer-home.php");
					exit;
				}
			}

			echo "Invalid username or password";
		
    }
?>

<!DOCTYPE html>
<html>
<head>
    <title>Producer Login</title>
</head>
<body style="background-color: grey;">
    <h2 style="text-align: center; margin-top:150px">Producer Login</h2>
    <div style="text-align: center; margin-top:20px">
    <form action="consumer-login.php" method="post">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username"><br><br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password"><br><br>
        <input type="submit" value="Login">
    </form>
    </div>
</body>
</html>
