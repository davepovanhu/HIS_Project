
<?php
include('includes/header.php');
        
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>About Us</title>
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
		h2 {
			color: #004080;
			margin-top: 20px;
			margin-bottom: 15px;
		}
		p {
			margin-bottom: 20px;
		}
		.container {
			max-width: 800px;
			margin: 0 auto;
			padding: 30px;
			background-color: white;
			box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.3);
		}
		.contact-info {
			margin-top: 20px;
			padding: 20px;
			border: 1px solid #ddd;
			background-color: #f2f2f2;
			box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.3);
			display: flex;
			flex-direction: column;
			align-items: flex-start;
		}
		.contact-info label {
			margin-bottom: 10px;
			font-weight: bold;
		}
		.contact-info p {
			margin-bottom: 0;
		}
	</style>
</head>
<body>
	<div class="container">
		<h1>About Us</h1>
		<p>Our Healthcare Information System (HIS) is a web-based application designed to provide patients with easy access to healthcare services and healthcare professionals with an efficient way to manage their appointments and patient records.</p>
		<p>Our vision is to create a healthcare system that is accessible, affordable, and efficient for everyone, regardless of their location or financial situation.</p>
		<p>Our mission is to leverage technology to improve healthcare outcomes and empower patients to take control of their health.</p>
		<h2>Contact Us</h2>
		<div class="contact-info">
			<label>Email:</label>
			<p>support@hisapp.com</p>
			<label>Phone:</label>
			<p>+1 (123) 456-7890</p>
			<label>Address:</label>
			<p>123 Main St, Suite 100<br>Anytown, USA 12345</p>
		</div>
	</div>
</body>
</html>

<?php
include('includes/footer.php');
        
?>
