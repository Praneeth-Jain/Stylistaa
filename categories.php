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
    <title>Categories</title>
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700|Montserrat:300" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Chivo:300,700|Playfair+Display:700i" rel="stylesheet">
    <link rel="stylesheet" href="css/style_index.css">
    <link rel="stylesheet" href="css/demo.css">
    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="css/categories.css">
    <link rel="shortcut icon" href="./images/icons/favicon-color.png" type="image/x-icon">
</head>
<body>
  
  <!-- navbar -->
    <nav>
      <div class="logo">
        </div>
        
        <h3><a href="merlin.php" class="logo-name"><img src="./images/icons/color-logo.png" class="logo-img" alt=""></a></h3>
      <ul class="nav-links">
        <li><a href="products.php">Products</a></li>
        <li><a href="categories.php">Categories</a></li>
        <li><a href="index.php">Home</a></li>
        <li><a href="contact.php">ContactUs</a></li>
        <li><a href="./php/logout.php" id="login">Logout</a></li>
      </ul>
      <div class="burger">
        <div class="line1"></div>
        <div class="line2"></div>
        <div class="line3"></div>
      </div>
    </nav>
  <!-- navbar -->
    
      <h1 class="main-head-of-color-gold">Unskippable Categories</h1>
        <center><hr></center> 
      <div class="product-img">
          <img class="product-center-img" src="images/categories-img/nordwood-themes-Nv4QHkTVEaI-unsplash (1).jpg" alt="" srcset="">
      </div> 
      <br> <br>
      <center><h2 class="trends-header">TRENDING NOW</h2></center><br><br>
      <div class="trends-categories">
        <a href="products.php"><img src="images/categories-img/category1.png" alt=""></a>
        <a href="products.php"><img src="images/categories-img/category2.png" alt=""></a>
        <a href="products.php"><img src="images/categories-img/category6.png" alt=""></a>
        <a href="products.php"><img src="images/categories-img/cat-1.jpg" alt=""></a>
        <a href="products.php"><img src="images/categories-img/cat-2.jpg" alt=""></a>
        <a href="products.php"><img src="images/categories-img/cat-4.jpg" alt=""></a>
    </div><br><br>
    <center><h2 class="trends-header">For her</h2></center><br><br>
    <div class="for-her">
      <a href="products.php"><img src="images/categories-img/for-her1.png" alt=""></a>
      <a href="products.php"><img src="images/categories-img/for-her2.png" alt=""></a>
    </div><br><br>
    <center><h2 class="trends-header">For him</h2></center><br>
    <div class="for-him">
      <a href="products.php"><img src="images/categories-img/brands-for-him1.png" alt=""></a>
      <a href="products.php"><img src="images/categories-img/brands-for-him2.png" alt=""></a>
      <a href="products.php"><img src="images/categories-img/brands-for-him3.png" alt=""></a>
      <a href="products.php"><img src="images/categories-img/brands-for-him4.png" alt=""></a>
      <a href="products.php"><img src="images/categories-img/brands-for-him5.png" alt=""></a>
    </div>
  <script type="text/javascript" src="js/nav.js"></script>
  </body>
</html>