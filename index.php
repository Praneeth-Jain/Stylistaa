<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700|Montserrat:300" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Chivo:300,700|Playfair+Display:700i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Beth+Ellen&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nova+Cut|Nova+Script&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style_index.css">
    <link rel="stylesheet" href="css/merlin.css">
    <link rel="stylesheet" href="css/demo.css">
    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="css/categories.css">
    <link rel="shortcut icon" href="./images/icons/favicon-color.png" type="image/x-icon">
</head> 
<body>
  <?php
  
  ?>  
  <!-- navbar -->
    <nav>
      <div class="logo">
        <h3><a href="merlin.php" class="logo-name"><img src="./images/icons/color-logo.png" class="logo-img" alt=""></a></h3>
      </div>

      <ul class="nav-links">
        <li><a href="index.php">Home</a></li>
        <li><a href="products.php">Products</a></li>
        <li><a href="categories.php">Categories</a></li>
        <li><a href="contact.php">ContactUs</a></li>
        <li><a href="./login.php" id="login">Login</a></li>
      </ul>
      <div class="burger">
        <div class="line1"></div>
        <div class="line2"></div>
        <div class="line3"></div>
      </div>
    </nav>
    <!-- navbar -->

    <!-- ALL THE LINKS WILL GO TO categories.html -->
      <div class="index-main-img">
        <a href="merlin.php"><img id="main-index-img" src="images/index-img/Off-the-Wall.jpg" alt="" srcset=""></a> 
      </div>
      
      <br>

      <div class="index-offers-img">
        <a href="categories.php"><img src="images/index-img/2.png" alt=""></a>
        <a href="categories.php"><img src="images/index-img/3.png" alt=""></a>
        <a href="categories.php"><img src="images/index-img/4.png" alt=""></a>
        <a href="categories.php"><img src="images/index-img/1.png" alt=""></a>
      </div>

      <br><br>

      <div class="index-grid-img-1">
        <a href="categories.php"><img src="images/index-img/anton-levin-P8prss71psk-unsplash.jpg" alt="" srcset=""></a>
        <a href="categories.php"><img src="images/index-img/bogdan-glisik-2WgOPYJuPsU-unsplash (1).jpg" alt="" srcset=""></a>
        <a href="categories.php"><img src="images/index-img/calvin-lupiya--yPg8cusGD8-unsplash.jpg" alt=""></a>
        <a href="categories.php"><h4 class="info-of-img-below">For the Young, Wild & Stylish</h4></a>          
        <a href="categories.php"><h4 class="info-of-img-below">Just like your way to Conquer</h4></a>
        <a href="categories.php"><h4 class="info-of-img-below">Stands out like the Sun</h4></a>
      </div>
    <!-- ALL THE LINKS WILL GO TO categories.html -->
        
      <br> <br> <br>

      <h2 class="head-of-offer">TRENDING NOW</h2><br>
      <p class="para-of-offer">From the runway to your wadrobe</p>
    
      <br><br>

    <!-- ALL THE LINKS WILL GO TO products.html -->
      <div class="index-grid-img-2">
        <a href="products.php"><img src="images/index-img/sharara.jpg" alt=""></a>
        <a href="products.php"><img src="images/index-img/suitsets.jpg" id="trans-img" alt=""></a> 
        <a href="products.php"><img src="images/index-img/denim.jpg" alt=""></a>
        <a href="products.php"><img src="images/index-img/casual.jpg" alt="" srcset=""></a>
        <a href="products.php"><img src="images/index-img/tshirt.jpg" alt="" srcset=""></a>         
        <a href="products.php"><img src="images/index-img/kurta.jpg" alt="" srcset=""></a>
    </div>

      <h2 class="head-of-offer">STYLES TO STEAL</h2><br>


      <br><br>

      <div class="index-grid-img-3">
        <a href="products.php"><img src="images/index-img/girl1.png" alt=""></a>
        <a href="products.php"><img src="images/index-img/girl2.png" alt="" srcset=""></a>
        <a href="products.php"><img src="images/index-img/girl3.png" alt=""></a>
        <a href="products.php"><img src="images/index-img/girl4.png" alt="" srcset=""></a>
    </div>
    <!-- ALL THE LINKS WILL GO TO products.html -->

      <br><br>

    <!-- FOOTER -->
    <div class="footer-container">
      <div class="footer-1">
        <a href="index.php"><h2>STYLISTAA FASHION HUB🦋</h2></a>
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
    <p class="copy-right"><a href="index.php">Stylistaa</a>&copy;</p>
    <br>
  <!-- FOOTER -->

  <script type="text/javascript" src="js/nav.js"></script>
  </body>
</html>