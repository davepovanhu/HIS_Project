

<?php
include('includes/header.php');
        
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Registration</title>
	<style>
		body {
			background-color: #f1f1f1;
			font-family: Arial, sans-serif;
		}
		h1 {
			color: #004080;
			margin-top: 30px;
			margin-bottom: 20px;
		}
		.container {
			max-width: 500px;
			margin: 0 auto;
			padding: 30px;
			background-color: white;
			box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.3);
		}
		.form {
			margin-top: 20px;
			padding: 20px;
			border: 1px solid #ddd;
			background-color: #f2f2f2;
			box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.3);
			display: flex;
			flex-direction: column;
			align-items: flex-start;
		}
		.form label {
			margin-bottom: 10px;
			font-weight: bold;
		}
		.form input[type="text"], .form input[type="email"], .form input[type="tel"], .form input[type="password"] {
			padding: 10px;
			margin-bottom: 20px;
			width: 100%;
			border-radius: 4px;
			border: 1px solid #ccc;
		}
		.form input[type="submit"] {
			background-color: #004080;
			color: white;
			padding: 10px 20px;
			border: none;
			border-radius: 4px;
			cursor: pointer;
			font-size: 16px;
			transition: background-color 0.3s ease;
		}
		.form input[type="submit"]:hover {
			background-color: #00264d;
		}
		.form p {
			margin-top: 10px;
		}
	</style>
</head>
<body>
	<div class="container">
		<h1>Registration</h1>
		<form class="form" action="code.php" method="post">
			<label for="name">Name:</label>
			<input type="text" id="name" name="name" placeholder="Enter your name" required>
			<label for="email">Email:</label>
			<input type="email" id="email" name="email" placeholder="Enter your email" required>
			<label for="phone">Phone:</label>
			
			<input type="tel" id="phone" name="phone" placeholder="Enter your phone number" required>
			<label for="role">Role:</label>
  <select name="role" id="role" required>
      <option value="patient">Patient</option>
      <option value="doctor">Doctor</option>
      <option value="nurse">Nurse</option>
  </select><br>
			<label for="password">Password:</label>
			<input type="password" id="password" name="password" placeholder="Enter your password" required>
			<input type="submit" value="Register">
			<p>Already have an account? <a href="login.php">Login</a></p>
		</form>
	</div>
</body>
</html>

<?php
include('includes/footer.php');
        
?>
