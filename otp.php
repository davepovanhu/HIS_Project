



<!DOCTYPE html>










<html>
<head>
	<title>Health-Connect - OTP Verification</title>
	<style>
		body {
			font-family: Arial, sans-serif;
			background-color: #f2f2f2;
			margin: 0;
			padding: 0;
		}
		h1 {
			color: #336699;
			font-size: 32px;
			margin-top: 40px;
			margin-bottom: 20px;
			text-align: center;
		}
		form {
			background-color: #fff;
			border-radius: 5px;
			box-shadow: 0 0 5px rgba(0,0,0,0.2);
			margin: 0 auto;
			padding: 20px;
			width: 400px;
		}
		label {
			display: block;
			margin-bottom: 10px;
		}
		input[type="text"], input[type="password"], input[type="email"] {
			border-radius: 3px;
			border: 1px solid #ccc;
			box-sizing: border-box;
			font-size: 16px;
			margin-bottom: 20px;
			padding: 10px;
			width: 100%;
		}
		input[type="submit"] {
			background-color: #336699;
			border: none;
			border-radius: 3px;
			color: #fff;
			cursor: pointer;
			font-size: 16px;
			padding: 10px;
			width: 100%;
		}
		input[type="submit"]:hover {
			background-color: #1a4473;
		}
        .error {
			color: red;
			margin-top: 10px;
		}
	</style>
</head>
<body>
    <h1>OTP Verification</h1>
     <p>Enter your phone number below to receive a 6-digit OTP:</p>
<form method="post" action="verify_otp.php">
	<label for="phone">Phone number:</label>
	<input type="text" id="phone" name="phone"><br>
	<input type="submit" value="Send OTP">
</form>
     <p>Enter the 6-digit OTP you received:</p>
<form method="post" action="otp.php">
	<label for="otp">OTP:</label>
	<input type="text" id="otp" name="otp"><br>
	<input type="submit" value="Verify OTP">
</form>
</body>
</html>

<?php
include('includes/footer.php');
        
?>
