<?php
session_start();

// Include the configuration file
require_once 'config.php';




// Check if the login form was submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the form data
    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';

    // Get the user data from the database based on the provided email
    $userRef = $database->getReference('users')->orderByChild('email')->equalTo($email)->getSnapshot();

    // Check if the user exists and the password is correct
    if ($userRef->numChildren() === 1) {
        $userData = current($userRef->getValue());
        if (password_verify($password, $userData['password'])) {
            // Store the user data in the session and redirect to the corresponding profile page
            $_SESSION['user'] = [
                'id' => $userRef->getKey(),
                'name' => $userData['name'],
                'email' => $userData['email'],
                'phone' => $userData['phone'],
                'role' => $userData['role']
            ];

            switch ($userData['role']) {
                case 'patient':
                    header('Location: patient.php');
                    exit;
                case 'doctor':
                    header('Location: doctor.php');
                    exit;
                case 'nurse':
                    header('Location: nurse.php');
                    exit;
                default:
                    // Invalid role, redirect to login page
                    header('Location: login.php');
                    echo('Invalid email or password');
                    exit;
            }
        }
    }

    // Invalid email or password, redirect back to the login page
    header('Location: login.php');
    echo('Invalid email or password');
    exit;
}
?>