<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup-Stylistaa</title>
    <link rel="stylesheet" href="./css/sign.css">
    <link rel="shortcut icon" href="./pics/logo-no-background.svg" type="image/x-icon">
    
</head>
<body>
    <img src="./pics/logo-color.png" alt="Logo" class="logo">
    <!-- Create a container element that holds the sign-up form -->
    <div class="container">
    
        <!-- Create a title element that shows the name of the website -->
        <h1 class="title">Stylistaa</h1>
    
        <!-- Create a subtitle element that shows the tagline of the website -->
        <p class="subtitle">The ultimate fashion destination</p>
    
        <!-- Create a form element that contains the input fields and buttons -->
        <form class="form" action="./php/process.php" method="post">
    
            <!-- Create a label element that shows the name input name -->
            <label for="name" class="label">Name</label>
    
            <!-- Create an input element that takes the name -->
            <input type="text" id="name" name="name" class="input" placeholder="Enter your name">
    
            <!-- Create a label element that shows the email input name -->
            <label for="email" class="label">Email</label>
    
            <!-- Create an input element that takes the email -->
            <input type="email" id="email" name="email" class="input" placeholder="Enter your email">
    
            <label for="gender">Gender : </label>
            
            <label for="#gender1">Male</label>
            
            <input type="checkbox" name="gender" id="gender1" value="male">
            
            <label for="#gender2">Female</label>
            
            <input type="checkbox" name="gender" id="gender2" value="female">
            

            <!-- Create a label element that shows the password input name -->
            <label for="password" class="label">Password</label>
    
            <!-- Create an input element that takes the password -->
            <input type="password" id="password" name="password" class="input" placeholder="Enter your password">
    
            <!-- Create a label element that shows the confirm password input name -->
            <label for="confirm-password" class="label">Confirm Password</label>
    
            <!-- Create an input element that takes the confirm password -->
            <input type="password" id="confirm-password" name="cpassword" class="input"
                placeholder="Confirm your password">
    
            <!-- Create a button element that submits the form -->
            <button type="submit" class="button submit-button">Sign Up</button>
    
            <!-- Create a button element that resets the form -->
            <button type="reset" class="button reset-button">Reset</button>
    
        </form>
    
    </div>
</body>
</html>