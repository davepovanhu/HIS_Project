
<?php
include('includes/header.php');
        
?>




<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Doctor Profile</title>
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
		<h1>Doctor Profile</h1>
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
		</table>
		<?php ?>
		<div style="text-align: right; margin-top: 20px;">
            <button class="button" onclick="window.print()">Print Medical Information</button>
            <button class="button">Edit New Medical Information</button>
          </div>

          <h1>Doctor View For Appointment</h1>

<table>
    <thead>
        <tr>
            <th>Appointment Date</th>
            <th>Patient Name</th>
            <th>Reason for Appointment</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>May 10, 2023</td>
            <td>John Smith</td>
            <td>Checkup</td>
            <td>Pending</td>
            <td>
                <button onclick="acceptAppointment()">Accept</button>
                <button onclick="rescheduleAppointment()">Reschedule</button>
            </td>
        </tr>
        <tr>
            <td>May 12, 2023</td>
            <td>Jane Doe</td>
            <td>Flu Symptoms</td>
            <td>Pending</td>
            <td>
                <button onclick="acceptAppointment()">Accept</button>
                <button onclick="rescheduleAppointment()">Reschedule</button>
            </td>
        </tr>
    </tbody>
</table>

<script>
    function acceptAppointment() {
        // Code to accept appointment goes here
        alert("Appointment accepted!");
    }

    function rescheduleAppointment() {
        // Code to reschedule appointment goes here
        alert("Appointment rescheduled!");
    }
</script>
          
	</div>

</body>
</html>

<?php
include('includes/footer.php');
        
?>
