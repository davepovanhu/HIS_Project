<?php
// Include the configuration file
require_once 'config.php';

// Get the medical information from the database
$medicalInfoRef = $database->getReference('medical_information');
$medicalInfoSnapshot = $medicalInfoRef->getSnapshot();
$medicalInfo = $medicalInfoSnapshot->getValue();

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
    <?php
    // Loop through the medical information and display each entry
    foreach ($medicalInfo as $entry) {
        ?>
        <tr>
            <td><?php echo $entry['date']; ?></td>
            <td><?php echo $entry['nurse']; ?></td>
            <td><?php echo $entry['reason']; ?></td>
            <td><?php echo $entry['notes']; ?></td>
            <td><?php echo $entry['vitalSigns']; ?></td>
        </tr>
        <?php
    }
    ?>
</table>
