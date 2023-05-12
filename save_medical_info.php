<?php


// Include the configuration file
require_once 'config.php';

// Check if the form was submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve the submitted form data
    $date = $_POST['date'];
    $nurse = $_POST['nurse'];
    $reason = $_POST['reason'];
    $notes = $_POST['notes'];
    $vitalSigns = $_POST['vital_signs'];

    // Create a new medical information entry in the database
    $newMedicalInfo = [
        'date' => $date,
        'nurse' => $nurse,
        'reason' => $reason,
        'notes' => $notes,
        'vitalSigns' => $vitalSigns
    ];

    // Push the new medical information to the database
    $database->getReference('medical_information')->push($newMedicalInfo);

    $userId = $database->getReference('users')->push()->getKey();

    // Save the user data to the database
    $userData = [
        'date' => $date,
        'nurse' => $nurse,
        'reason' => $reason,
        'notes' => $notes,
        'vitalSigns' => $vitalSigns
    ];
    $database->getReference('users')->getChild($userId)->set($userData);

    // Redirect back to the medical history page or display a success message
    header('Location :medical_history.php');
        echo("Medical record successfullu Saved");
    exit;
}
?>
