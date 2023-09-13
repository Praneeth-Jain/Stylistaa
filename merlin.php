<?php
    session_start();

    if (!isset($_SESSION['id'])) {
        header('location:login.php');
    }

    include 'php/config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>STYLISTAA FASHION HUB</title>
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700|Montserrat:300" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Chivo:300,700|Playfair+Display:700i" rel="stylesheet">
    <link rel="stylesheet" href="css/style_index.css">
    <link rel="stylesheet" href="css/demo.css">
    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="css/categories.css">
    <link rel="stylesheet" href="css/merlin.css">
    <link rel="shortcut icon" href="./images/icons/favicon-color.png" type="image/x-icon">
</head> 
<body>  
    
  <nav>
    <div class="logo">
      <h3><a href="merlin.php" class="logo-name"><img src="./images/icons/favicon-color.png" alt=""
            class="logo-img-s"></a></h3>
    </div>
  
    <ul class="nav-links">
      <li><a href="index.php">Home</a></li>
      <li><a href="products.php">Products</a></li>
      <li><a href="categories.php">Categories</a></li>
      <li><a href="contact.php">ContactUs</a></li>
      <li><a href="./php/logout.php" id="login">Logout</a></li>
    </ul>
    <div class="burger">
      <div class="line1"></div>
      <div class="line2"></div>
      <div class="line3"></div>
    </div>
  </nav>
 
    <h1 class="main-head-of-color-gold">Explore More!</h1>
        <center><hr></center> 
    <div class="merlin-grids1">
      <a href="index.php"><img src="images/merlin-img/merlin-1.jpg" alt=""></a>
     <img src="images/merlin-img/quote1.png" alt="">
      <a href="index.php"><img src="images/merlin-img/merlin-2.jpg" alt=""></a>
    </div>

    <br><br>

    <div class="merlin-grids2">
      <a href="index.php"><img src="images/merlin-img/merlin-5.jpg" alt=""></a>
      <img src="images/merlin-img/quote2.png" alt="">
      <a href="index.php"><img src="images/merlin-img/merlin-6.jpg" alt=""></a>
    </div>

    <br><br>

  <!-- FOOTER -->
    <div class="footer-container">
      <div class="footer-1">
        <a href="index.php"><h2>STYLISTAA FASHION HUB 🦋</h2></a>
        <br>
        <p><b>ONLINE SHOPPING</b></p>
          <h6>
            Men<br><br>
            Women <br><br>
            Kids <br><br>
            Stylistaa Exclusive<br><br>
          </h6>
      </div>

      <div class="footer-2">
        <p><b>USEFUL LINKS</b></p>
        <h6>
          Contact Us<br><br>
          FAQ<br><br>
          T&C<br><br>
          Blog<br><br>
          Privacy Policy<br><br>
        </h6>
      </div>

      <div class="footer-3">
        <p><b>100% Original</b> guarantee</p>
          <h6>
            for all products at stylistaa.com
          </h6>
        <p><b>Return within 30days</b> of</p>
          <h6>
            receiving you order
          </h6>
        <p><b>Get free delivery</b> for every</p>
          <h6>
            order above Rs.699
          </h6>
        <br><br>
      </div>
    
    </div>
    <p class="copy-right"><a href="index.php">@stylistaa</a>&copy;</p>
    <br>
  <!-- FOOTER -->
    
  <script type="text/javascript" src="js/nav.js"></script>
</body>
</html>

