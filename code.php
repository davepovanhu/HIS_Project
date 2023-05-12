<?php
session_start();

// Include the configuration file
require_once 'config.php';



// Check if the registration form was submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the form data
    $name = $_POST['name'] ?? '';
    $email = $_POST['email'] ?? '';
    $phone = $_POST['phone'] ?? '';
    $role = $_POST['role'] ?? '';
    $password = $_POST['password'] ?? '';

    // Check if the user is already registered
    $userRef = $database->getReference('users')->orderByChild('email')->equalTo($email)->getSnapshot();
    if ($userRef->numChildren() > 0) {
        // User is already registered, redirect to login page
        header('Location: login.php');
        exit;
    }

    // Generate a new user ID
    $userId = $database->getReference('users')->push()->getKey();

    // Save the user data to the database
    $userData = [
        'name' => $name,
        'email' => $email,
        'phone' => $phone,
        'role' => $role,
        'password' => password_hash($password, PASSWORD_DEFAULT)
    ];
    $database->getReference('users')->getChild($userId)->set($userData);

    // Store the user data in the session and redirect to the corresponding profile page
    $_SESSION['user'] = [
        'id' => $userId,
        'name' => $name,
        'email' => $email,
        'phone' => $phone,
        'role' => $role
    ];
    switch ($role) {
        case 'patient':
            header('Location: patient.php');
            break;
        case 'doctor':
            header('Location: doctor.php');
            break;
        case 'nurse':
            header('Location: nurse.php');
            break;
        default:
            // Invalid role, redirect to login page
            header('Location: login.php');
            break;
    }

    exit;
}
else {
    // Redirect to the registration form
    header('Location: register.php');
    exit;
}
?>
