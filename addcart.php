<?php 
session_start();
 if (!isset($_SESSION['id'])) {
        header('location:login.php');
    }
include './php/config.php'
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add to Cart</title>
    <link rel="stylesheet" href="./css/cart.css">
</head>
<body>
    <div class="con">
    <?php
    if (isset($_GET["product_id"])){
        $product_id=$_GET["product_id"];
        $user_id=$_SESSION["id"];
        $check_sql = "SELECT * FROM cart WHERE userid = ? AND product_id = ?";
        $check_stmt = $conn->prepare($check_sql);
        $check_stmt->bind_param("ii", $user_id, $product_id);
        $check_stmt->execute();
        $check_result = $check_stmt->get_result();
        
        if ($check_result->num_rows > 0) {
            // Product already in cart, increment quantity
            $update_sql = "UPDATE cart SET quantity = quantity + 1 WHERE userid = ? AND product_id = ?";
            $update_stmt = $conn->prepare($update_sql);
            $update_stmt->bind_param("ii", $user_id, $product_id);
            $update_stmt->execute();
        }else{
        $sql="INSERT INTO cart(userid,product_id,quantity) VALUES (?,?,1)";
        $stmt=$conn->prepare($sql);
        $stmt->bind_param('ii',$user_id,$product_id);
        $res=$stmt->execute();
        if($res){
            echo "<script> alert('Product added to cart succesfully');</script>";
        }
        else{
            echo "<script> alert('Error while adding product to cart');</script>";
        }
    }  }
    else{
        echo "<script> alert('Product id not proided');</script>";
    }
    $sel="SELECT products.product_name,products.price,cart.quantity FROM cart INNER JOIN products ON cart.product_id = products.product_id
    WHERE cart.userid=?";
    $smt=$conn->prepare($sel);
    $smt->bind_param('i',$user_id);
    $smt->execute();
    $result=$smt->get_result();
    if($result->num_rows > 0){
        echo "<h1>MY CART</h1>";
        echo "<table>";
        echo "<tr><th>Product Name</th><th>Price</th><th>Quantity</th></tr>";
        while($row=$result->fetch_assoc()){
            echo "<tr>";
            echo "<td>".$row["product_name"]."</td>";
            echo "<td>".$row["price"]."</td>";
            echo "<td>".$row["quantity"]."</td>";
            echo "</tr>";
        }

        echo "</table>";
    }
    else{
        echo "<script> alert('Cart is Empty');</script>";
    }
    ?>
    <div class="button-container">
        <a href="products.php">Back to shopping</a>
        <!-- <a href="order.php">Buy now</a> -->
        <a href="php/clear.php">Clear cart</a>
    </div>
    </div>

</body>
</html>