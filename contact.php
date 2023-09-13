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
    <link href="https://fonts.googleapis.com/css?family=Beth+Ellen|Nova+Cut&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="css/style_index.css">
    <link rel="stylesheet" href="css/demo.css">
    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="css/categories.css">
    <link rel="shortcut icon" href="./images/icons/favicon-color.png" type="image/x-icon">
</head>
<style>
  .footer-container{
    position: fixed;
    bottom: 0px;
    width: 100%;
    background-color: #fff;
    display: flex;
    justify-content: center;
    align-items: center;
    border: 2px rgba(0, 0, 0,0.6) double;
  }
  
  .news-con label{
    color: firebrick;
    font-family:Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
    font-weight: 300;
    font-size: 1.2em;
  }

  .news-con{
    margin-top: 60px;
  }

  #news{
    height: 30px;
    width: 300px;    
  }
  #sub-btn{
    height: 30px;
    width: 70px;
    border-radius: 50% ;
    background-color: red;
    border: none;
    color: #fff;
  }

  #sub-btn:hover{
    background-color: #f84258;
  }


   .slogan{
    font-family: 'Beth Ellen', cursive;
    color:black;
    font-size: 36px;
  }
   .author{
    font-family: 'Nova Cut', cursive;
    color:black;
  } 
  .contact-info{
    padding-top:170px;
  }
</style>
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
    <center>
      <div class="contact-info">
        <p class="slogan">"Stylistaa Fashion hub."</p>
        <p class="author">Praneeth Jain</p>
        
        <p class="author">praneethjain15@gmail.com</p>
        <p class="author"><a href="https://www.linkedin.com/in//" class="logo-name">On LinkedIn</a></p>
        <div class="news-con">
        <form action="./contact.php" method="post">
          <label for="news">Subscribe for our News Letter : </label>
          <input type="email" name="news" id="news">
          <input type="submit" value="Subscribe" id="sub-btn">
        </form>
        </div>
      </div>
    </center>
    <?php 
    if(isset($_POST['news'])){
    $mail=$_POST['news'];
    $id=$_SESSION['id'];
    if(isset($mail,$id)){
      $ins="INSERT INTO newsletter (userid,email) VALUES ('$id','$mail')";
      $res=$conn->prepare($ins);
      $result=$res->execute();
      if($result){
        echo "<script>alert('Subscribed successfully');</script>";
      }
      else{
      }
    }
    else{
      echo "<script>alert('Provide email properly');</script>";
    }}
    ?>
    <!-- FOOTER -->
    <div class="footer-container">
    <p class="copy-right"><a href="index.php">Stylistaa</a>&copy;</p>
    </div>
    <br>
    <!-- FOOTER -->
  
  <script type="text/javascript" src="js/nav.js"></script>
  </body>
</html>
