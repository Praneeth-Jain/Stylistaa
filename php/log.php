<?php
session_start();


include './config.php';

$email=$_POST['email'];
$password=md5($_POST['password']);

$_SESSION['csrf'] = bin2hex(random_bytes(32));

$csrf = $_SESSION['csrf'];

if(!empty($email && $password)){
    $sel=$conn->prepare("SELECT * FROM users WHERE email=? AND password=?");
    $sel->bind_param('ss',$email,$password);
    $sel->execute();
    $res=$sel->get_result();
    $row=$res->fetch_assoc();

    if(count($row) > 0){
        $_SESSION['id']=$row['userid'];
        echo "<script>alert('Login Success');
        window.location.href='../index.php'; </script> ";        
    }else{
        echo "<script>alert('Account not found'); window.location.href='../login.php';</script>";
    }
}
else
{
    echo "<script>alert('Enter Details properly'); window.location.href='../login.php'; </script>";
}
?>