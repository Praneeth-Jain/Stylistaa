<?php
$servername='localhost';
$username='root';
$password='';
$dbname='fashion';

$conn=mysqli_connect($servername,$username,$password,$dbname);
if(!$conn){
    echo "Database is not connected";
}
?>