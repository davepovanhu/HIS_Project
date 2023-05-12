
<?php
include('includes/header.php');
        
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>User Profile</title>
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
		.container {
			max-width: 800px;
			margin: 0 auto;
			padding: 30px;
			background-color: white;
			box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.3);
		}
		table {
			margin-top: 20px;
			border-collapse: collapse;
			width: 100%;
		}
		th, td {
			padding: 10px;
			text-align: left;
			border-bottom: 1px solid #ddd;
		}
		th {
			background-color: #f2f2f2;
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
		.button {
			background-color: #004080;
			color: white;
			padding: 10px 20px;
			border: none;
			border-radius: 4px;
			cursor: pointer;
			margin-right: 10px;
			font-size: 16px;
			transition: background-color 0.3s ease;
		}
		.button:hover {
			background-color: #00264d;
		}
	</style>
</head>
<body>
<h1>Patient Profile</h1>
<table>
			<tr>
				<th>Name</th>
				<td>David Povanhu</td>
			</tr>
			<tr>
				<th>Date of Birth</th>
				<td>January 1, 1998</td>
			</tr>
			<tr>
				<th>Gender</th>
				<td>Male</td>
			</tr>
			<tr>
				<th>Email</th>
				<td>nandepovanhu@example.com</td>
			</tr>
			<tr>
				<th>Phone</th>
				<td>0816409856</td>
			</tr>
			<tr>
				<th>Address</th>
				<td>Khomasdaal Disa St, Windhoek, Windhoek</td>
			</tr>
		</table>
		<h2>Medical History</h2>
		<table>
			<tr>
				<th>Date</th>
				<th>Doctor</th>
				<th>Reason</th>
				<th>Notes</th>
			</tr>
			<tr>
				<td>April 1, 2023</td>
				<td>Dr. Jane Doe</td>
				<td>Annual checkup</td>
				<td>No issues found</td>
			</tr>
			<tr>
				<td>March 15, 2023</td>
				<td>Dr. John Smith</td>
				<td>Chest pain</td>
				<td>Prescribed medication for heartburn</td>
			</tr>
		</table>
  
	
		<div style="text-align: right; margin-top: 20px;">
            <button class="button" onclick="window.print()">Print Profile</button>
            <button class="button">Change Password</button>
          </div>
          
</div>

</body>
</html> 







<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Appointment Scheduling</title>
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
		.container {
			max-width: 800px;
			margin: 0 auto;
			padding: 30px;
			background-color: white;
			box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.3);
		}
		table {
			margin-top: 20px;
			border-collapse: collapse;
			width: 100%;
		}
		th, td {
			padding: 10px;
			text-align: left;
			border-bottom: 1px solid #ddd;
		}
		th {
			background-color: #f2f2f2;
		}
		.button {
			background-color: #004080;
			color: white;
			padding: 10px 20px;
			border: none;
			border-radius: 4px;
			cursor: pointer;
			margin-right: 10px;
			font-size: 16px;
			transition: background-color 0.3s ease;
		}
		.button:hover {
			background-color: #00264d;
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
		.form input[type="text"], .form input[type="email"], .form select, .form textarea {
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
		.success {
			background-color: #c8e6c9;
			color: #2e7d32;
			padding: 10px;
			border-radius: 4px;
			margin-top: 20px;
			display: none;
		}
	</style>
</head>
<body>
	<div class="container">
		<h1>Appointment Scheduling</h1>
		<h2>Patient View</h2>
		<table>
			<tr>
				<th>Doctor</
				</tr>
				<tr>
					<td>Dr. Jane Doe</td>
					<td>Cardiologist</td>
					<td>123 Main St, Anytown USA</td>
					<td>555-1234</td>
					<td>
						<button class="button">Schedule Appointment</button>
					</td>
				</tr>
				<tr>
					<td>Dr. John Smith</td>
					<td>Neurologist</td>
					<td>456 Maple Ave, Anytown USA</td>
					<td>555-5678</td>
					<td>
						<button class="button">Schedule Appointment</button>
					</td>
				</tr>
				<tr>
					<td>Dr. Sarah Lee</td>
					<td>Dermatologist</td>
					<td>789 Oak St, Anytown USA</td>
					<td>555-9012</td>
					<td>
						<button class="button">Schedule Appointment</button>
					</td>
				</tr>
			</table>
			<h2>Appointment Request Form</h2>
	<form class="form" id="appointment-form">
		<label for="doctor">Doctor</label>
		<select name="doctor" id="doctor">
			<option value="Dr. Jane Doe">Dr. Jane Doe</option>
			<option value="Dr. John Smith">Dr. John Smith</option>
			<option value="Dr. Sarah Lee">Dr. Sarah Lee</option>
		</select>

		<label for="date">Date</label>
		<input type="text" id="date" name="date" placeholder="MM/DD/YYYY">

		<label for="time">Time</label>
		<input type="text" id="time" name="time" placeholder="HH:MM AM/PM">

		<label for="reason">Reason for Appointment</label>
		<textarea id="reason" name="reason" placeholder="Enter reason for appointment"></textarea>

		<label for="name">Full Name</label>
		<input type="text" id="name" name="name" placeholder="Enter your full name">

		<label for="email">Email</label>
		<input type="email" id="email" name="email" placeholder="Enter your email">

		<input type="submit" value="Request Appointment">
	</form>

	<div class="success" id="success-message">
		Your appointment request has been submitted. You will receive a confirmation email shortly.
	</div>
</div>

<script>
	const form = document.querySelector('#appointment-form');
	const successMessage = document.querySelector('#success-message');

	form.addEventListener('submit', (e) => {
		e.preventDefault();

		successMessage.style.display = 'block';
		form.reset();
	});
</script>
</body>
</html>

<?php
include('includes/footer.php');
        
?>





