<?php
    session_start();

    if (!isset($_SESSION['id'])) {
        header('location:login.php');
    }

    include 'php/config.php';
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Products</title>
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700|Montserrat:300" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Chivo:300,700|Playfair+Display:700i" rel="stylesheet">
    <link rel="stylesheet" href="css/style_index.css">
    <link rel="stylesheet" href="css/categories.css">
    <link rel="stylesheet" href="css/products.css">
    <link rel="stylesheet" href="css/nav.css">
    <link rel="shortcut icon" href="./images/icons/favicon-color.png" type="image/x-icon">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  </head>
  <body>
    
    <!-- navbar -->
      <nav> 
        <div class="logo">
          <h3><a href="merlin.php" class="logo-name"><img src="./images/icons/favicon-color.png" alt="" class="logo-img-s"></a></h3>
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
    <!-- navbar -->
      <h2 class="main-head-of-products">Everyone Has A Style Statment<br>
        <span class="colored-word-bigger-size">FIND YOURS HERE!</span>
      </h2>

      <br>
      <div class="bg-images">
        <a href="products.php"><img src="images/products-img/marcus-loke-xXJ6utyoSw0-unsplash (1).jpg" alt=""></a>
      </div>

      <center><p class="msg-ps">
        <span class="colored-word">Click</span> on the product to add in your shopping list.
        <br>Go below and check <span class="colored-word">YOUR CART</span> for details.
      </p></center>

      <div>
        <h1>For <span class="colored-word">Her</span></h1>
        <center><hr class="products-hr"></center>
        <br><br>

        <div class="kurti">        
          <?php
         $sql_prod="SELECT * FROM products where product_cat ='female'";
         $result=mysqli_query($conn,$sql_prod);
         if($result->num_rows>0){
          while($row=$result->fetch_assoc()){ ?>
          <a href="<?php echo "addcart.php?product_id=".$row['product_id'] ?>">
             <img src="<?php echo $row["image_url"].'" alt="'.$row['product_name'].'"/>';
             echo "</a>";
          }
         }
         ?>
         
         
         </div>
         
        <div class="western">
          <?php
         $sql_prod="SELECT * FROM products where product_cat ='western'";
         $result=mysqli_query($conn,$sql_prod);
         if($result->num_rows>0){
          while($row=$result->fetch_assoc()){ ?>
           <a href="<?php echo "addcart.php?product_id=".$row['product_id'] ?>">
             <img src="<?php echo $row["image_url"].'" alt="'.$row['product_name'].'"/>';
             echo "</a>";
          }
         }
         ?> 
        </div>

        <h1>For <span class="colored-word">Him</span></h1>
        <center><hr class="products-hr"></center>
        <br><br>

        <div class="shirts">
          <?php
         $sql_prod="SELECT * FROM products where product_cat ='shirts'";
         $result=mysqli_query($conn,$sql_prod);
         if($result->num_rows>0){
          while($row=$result->fetch_assoc()){ ?>
           <a href="<?php echo "addcart.php?product_id=".$row['product_id'] ?>">
             <img src="<?php echo $row["image_url"].'" alt="'.$row['product_name'].'"/>';
             echo "</a>";
          }
         }
         ?>  
        </div>
        <div class="jeans">
          <?php
         $sql_prod="SELECT * FROM products where product_cat ='jeans'";
         $result=mysqli_query($conn,$sql_prod);
         if($result->num_rows>0){
          while($row=$result->fetch_assoc()){ ?>
           <a href="<?php echo "addcart.php?product_id=".$row['product_id'] ?>">
             <img src="<?php echo $row["image_url"].'" alt="'.$row['product_name'].'"/>';
             echo "</a>";
          }
         }
         ?>  
        </div>
        <div class="joggers">
          <?php
         $sql_prod="SELECT * FROM products where product_cat ='joggers'";
         $result=mysqli_query($conn,$sql_prod);
         if($result->num_rows>0){
          while($row=$result->fetch_assoc()){ ?>
           <a href="<?php echo "addcart.php?product_id=".$row['product_id'] ?>">
             <img src="<?php echo $row["image_url"].'" alt="'.$row['product_name'].'"/>';
             echo "</a>";
          }
         }
         ?>  
        </div>

        <h4 class="sry-msg">Uh-Oh! We are<span class="colored-word"> done</span>🛒</h4>
        <center><hr class="last-hr-of-product"></center>
        <br><br>

        <div class="cart-details">
            <hr class="hr-of-cart-head">
            <br>
          <ul id="ul_pr">
            
          </ul>
        </div>
        <br><br><br>
      </div>
      
    <script src="nav.js"></script>
    <script src="js/products.js"></script>
  </body>
</html>
