<?php
include "config.php";
session_start();
if (isset($_POST['password'])){
    $password =  $_POST['password'];

    $sql = " SELECT * FROM user_form WHERE password = '$password' ";
    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result)){

        $_SESSION['password'] = $password;
        header("location:admin_page.php");
     }else{
      echo "<script> alert ('password not matched!');
      window.location ='login_form.php'</script>";
  }
}
?>  



<!DOCTYPE html>
<html lang="en">
<head>
  
  <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login form</title>

    <!--custom css file link -->
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="form-container">

<form method="POST">
    <h3>Login Now</h3> 
    <h4>KiBooking</h4>
    <input type="email" name="email" require placeholder="enter your email">
    <input type="password" name="password" require placeholder="enter your password">
    <select name="user_type">
        <option value="user">select
        <option value="admin">Admin</option>
        <option value="user">User</option>
    </select>
    <input type="submit" value="login now" class="form-btn">
    <p>don't have an account? <a href="register_form.php">Register Now</a></p>
</form>

</div>
</body>
</html>