<?php
include('includes/header.php');
        
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
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
      form {
        max-width: 500px;
        margin: 0 auto;
        padding: 30px;
        background-color: white;
        box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.3);
      }
      label {
        display: block;
        margin-bottom: 10px;
        font-weight: bold;
      }
      input[type="text"], input[type="email"], input[type="password"] {
        padding: 10px;
        margin-bottom: 20px;
        width: 100%;
        border-radius: 4px;
        border: 1px solid #ccc;
      }
      input[type="submit"] {
        background-color: #004080;
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        font-size: 16px;
        transition: background-color 0.3s ease;
      }
      input[type="submit"]:hover {
        background-color: #00264d;
      }
      select {
        padding: 10px;
        margin-bottom: 20px;
        width: 100%;
        border-radius: 4px;
        border: 1px solid #ccc;
      }
    </style>
  </head>
  <body>
    <h1>Login</h1>
    <?php if (isset($_GET['error']) && $_GET['error'] === '1'): ?>
        <p class="error">Invalid email and password. Please try again.</p>
    <?php endif; ?>
    <form method="post" action="code2.php">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" placeholder="Enter your email" required>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" placeholder="Enter your password" required>
        <input type="submit" value="Login">
        <p>Don't have an account? <a href="Register.php">SignUP</a></p>
    </form>
</body>

  </html>    

  <?php
include('includes/footer.php');
        
?>