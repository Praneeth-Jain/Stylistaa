<?php
session_start();
 if (!isset($_SESSION['id'])) {
        header('location:login.php');
    }
include './config.php';
$id=$_SESSION['id'];
$sql="DELETE FROM cart WHERE userid=?";
$del=$conn->prepare($sql);
$del->bind_param('i',$id);
$res=$del->execute();
if($res){
    echo "<script>alert('Cart is cleared');";
    header('location:../addcart.php');
}
else{
    echo "<script>alert('No item to clear');";
    header('location:../products.php');
}
?>