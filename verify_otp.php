
<?php
use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;

// Check if the form was submitted to send OTP
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['phone'])) {
    // Include Firebase PHP SDK
    require_once __DIR__ . '/vendor/autoload.php'; // Replace with the path to your autoloader file

    $firebase = (new Factory)
        ->withServiceAccount('hisproject-6c7b0-firebase-adminsdk-5vroo-efa07ca6dd.json')
        ->withDatabaseUri('https://hisproject-6c7b0-default-rtdb.firebaseio.com/');

    $auth = $firebase->createAuth(); // Create the Firebase Authentication instance

    $phoneNumber = $_POST['phone'];

    // Send OTP using Firebase Authentication
    try {
        $verification = $auth->signInWithPhoneNumber($phoneNumber);

        // Get the verification ID for later use during OTP verification
        $verificationId = $verification->getVerificationId();

        // Redirect to the OTP verification page with the verification ID
        header("Location: otp.php?verificationId=$verificationId");
        exit;
    } catch (\Throwable $e) {
        // Handle the error, display an error message, or redirect back to the form page
        echo 'Error: ' . $e->getMessage();
    }
}

// Check if the form was submitted to verify OTP
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['otp'])) {
    // Include Firebase PHP SDK
    require_once __DIR__ . '/vendor/autoload.php'; // Replace with the path to your autoloader file

    $firebase = (new Factory)
        ->withServiceAccount('hisproject-6c7b0-firebase-adminsdk-5vroo-efa07ca6dd.json')
        ->withDatabaseUri('https://hisproject-6c7b0-default-rtdb.firebaseio.com/');

    $auth = $firebase->createAuth(); // Create the Firebase Authentication instance

    $otp = $_POST['otp'];
    $verificationId = $_POST['verificationId'];

    try {
        // Verify OTP using Firebase Authentication
        $credential = $auth->signInWithPhoneNumber($verificationId, $otp);

        // Get the user ID from the credential
        $userId = $credential->getUid();

        // Perform further actions or redirect to a success page
        header('Location: success.php');
        exit;
    } catch (\Throwable $e) {
        // Invalid OTP, display an error message or redirect back to the OTP verification page
        echo 'Error: ' . $e->getMessage();
    }
}
