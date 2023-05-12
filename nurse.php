

<?php
include('includes/header.php');
        
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Nurse Profile</title>
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
	</style>
</head>
<body>
	<div class="container">
		<h1>Nurse Profile</h1>
		<h2>Personal Information</h2>
		<table>
			<tr>
				<th>Name</th>
				<td>Jane Doe</td>
			</tr>
			<tr>
				<th>Email</th>
				<td>jane.doe@example.com</td>
			</tr>
			<tr>
				<th>Phone</th>
				<td>0816409856</td>
			</tr>
			<tr>
				<th>Address</th>
				<td>Khomasdaal Disa St, Windhoek, Namibia</td>
			</tr>
			<tr>
				<th>Medical License Number</th>
				<td>1234567890</td>
			</tr>
		</table>
		<h2>Search Patient</h2>
		<form method="post">
			<label for="name">Username:</label>
			<input type="text" id="name" name="name">
			<input type="submit" value="Search">
		</form>
		<?php
		// Database connection
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "health";

		$conn = mysqli_connect($servername, $username, $password, $dbname);

		// Check connection
		if (!$conn) {
		    die("Connection failed: " . mysqli_connect_error());
		}

		// Search for patient
		if(isset($_POST['name'])) {
			$name = $_POST['name'];
			$query = "SELECT * FROM users WHERE name='$name'";
			$result = mysqli_query($conn, $query);
			if(mysqli_num_rows($result) == 1) {
				$row = mysqli_fetch_assoc($result);
				$patient_name = $row['name'];
				$patient_dob = $row['dob'];
				$patient_gender = $row['gender'];
				$patient_email = $row['email'];
				$patient_phone = $row['phone'];
				$patient_address = $row['address'];
			} else {
				echo "No patient found with that username.";
			}
		}
	?>
	
    <h2>Medical History</h2>
		<table>
			<tr>
				<th>Date</th>
				<th>Nurse</th>
				<th>Reason</th>
				<th>Notes</th>
				<th>Vital Signs</th>
			</tr>
			<tr>
				<td>April 1, 2023</td>
				<td>Dr. Jane Doe</td>
				<td>Annual checkup</td>
				<td>No issues found</td>
				<td>Blood pressure: 120/80<br>Heart rate: 72 bpm<br>Temperature: 98.6 F<br>Respiration rate: 16 breaths/min</td>
			</tr>
			<tr>
				<td>March 15, 2023</td>
				<td>Dr. John Smith</td>
				<td>Chest pain</td>
				<td>Prescribed medication for heartburn</td>
				<td>Blood pressure: 140/90<br>Heart rate: 84 bpm<br>Temperature: 99.1 F<br>Respiration rate: 20 breaths/min</td>
			</tr>
			<tr>
        <td colspan="5">
            <form action="save_medical_info.php" method="POST">
                <label for="date">Date:</label>
                <input type="text" name="date" id="date"><br>
                <label for="nurse">Nurse:</label>
                <input type="text" name="nurse" id="nurse"><br>
                <label for="reason">Reason:</label>
                <input type="text" name="reason" id="reason"><br>
                <label for="notes">Notes:</label>
                <input type="text" name="notes" id="notes"><br>
                <label for="vital_signs">Vital Signs:</label>
                <input type="text" name="vital_signs" id="vital_signs"><br>
                <input type="submit" value="Save New Medical Information">
            </form>
        </td>
    </tr>
    <tr>
        <td colspan="5">
            <form action="save_medical_info.php" method="POST">
                <label for="date">Date:</label>
                <input type="text" name="date" id="date"><br>
                <label for="nurse">Nurse:</label>
                <input type="text" name="nurse" id="nurse"><br>
                <label for="reason">Reason:</label>
                <input type="text" name="reason" id="reason"><br>
                <label for="notes">Notes:</label>
                <input type="text" name="notes" id="notes"><br>
                <label for="vital_signs">Vital Signs:</label>
                <input type="text" name="vital_signs" id="vital_signs"><br>
                <input type="submit" value="Save New Medical Information">
            </form>
        </td>
    </tr>
		</table>
		<?php ?>
		<div style="text-align: right; margin-top: 20px;">
            <button class="button" onclick="medical_history.php">Print Medical Information</button>
            
          </div>
          
	</div>

</body>
</html>


<?php
include('includes/footer.php');
        
?>
