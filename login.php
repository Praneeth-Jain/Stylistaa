<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login-Stylistaa</title>
    <link rel="stylesheet" href="./css/new.css">
    <link rel="shortcut icon" href="./pics/favicon-color.png" type="image/x-icon">
</head>
<body>
    <!-- Create a container element that holds the login form -->
    <div class="container">
    
        <img src="./pics/logo.png" alt="logo" class="main-logo">
    
        <!-- Create a form element that contains the input fields and buttons -->
        <form class="form" method="POST" action="./php/log.php">
    
            <!-- Create a label element that shows the username input name -->
            <label for="email" class="label">Email</label>
    
            <!-- Create an input element that takes the username -->
            <input type="text" id="email" name="email" class="input" placeholder="Enter your username">
    
            <!-- Create a label element that shows the password input name -->
            <label for="password" class="label">Password</label>
    
            <!-- Create an input element that takes the password -->
            <input type="password" id="password" name="password" class="input" placeholder="Enter your password">
    
            <!-- Create a button element that submits the form -->
            <button type="submit" class="button submit-button">Login</button>
    
            <!-- Create a button element that resets the form -->
            <button type="reset" class="button reset-button">Reset</button>
    
        </form>
    <p>Dont have an account ? ,<a href="signup.php">Click here</a></p>
    </div>

</body>
</html>