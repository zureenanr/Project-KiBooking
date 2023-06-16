<?php
$host= "localhost";
$user = "root";
$password="";
$database= "user_db";
$conn = mysqli_connect($host, $user,$password,$database);

if (!$conn){
    echo "connection failed";
}
?>