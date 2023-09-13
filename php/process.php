<?php
include './config.php';

$name=$_POST['name'];
$email=$_POST['email'];
$gender=$_POST['gender'];
$password=md5($_POST['password']);
$cpassword=md5($_POST['cpassword']);

if(!empty($name && $email && $gender && $password && $cpassword)){
    if($password == $cpassword){

        $dbemail="SELECT email from users WHERE email='$email'";
        $sql_email=mysqli_query($conn,$dbemail);

        if(mysqli_num_rows($sql_email)>0){
                echo "<script>alert('Account already exists with provided email'); window.location.href='../signup.php';</script>";
        }
        else{

        $sql="INSERT INTO users(name,email,gender,password) VALUES ('$name','$email','$gender','$password');";
        $res=mysqli_query($conn,$sql);
        if($res){
            echo "<script> alert('Registration Succesfull'); window.location.href='../index.php';</script>";
        }else{
            echo "<script> alert('Registration not Succesfull'); window.location.href='../signup.php';</script>";
        }

    }}
    else{
    echo "<script>alert('Password does not match'); window.location.href='../signup.php';</script>";
}
}
else{
    echo "<script>alert('Enter details propely'); window.location.href='../signup.php';</script>";
}



?>