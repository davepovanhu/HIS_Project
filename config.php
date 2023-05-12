

<?php
session_start();
// Set up Firebase Realtime Database
require_once __DIR__ . '/vendor/autoload.php'; // Replace with the path to your autoloader file
use Kreait\Firebase\Factory;


    $firebase = (new Factory)
  ->withServiceAccount('hisproject-6c7b0-firebase-adminsdk-5vroo-efa07ca6dd.json')
  ->withDatabaseUri('https://hisproject-6c7b0-default-rtdb.firebaseio.com/');


$database = $firebase->createDatabase();

?>
