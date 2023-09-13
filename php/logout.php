<?php
session_start();
session_unset();
echo "<script>alert('Logged Out Succesfully');</script>";
header('location:../login.php');
?>