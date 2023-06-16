<?php
include "config.php";
if (isset($_POST['nama'])){
    $nama =  $_POST['nama'];
    $email =  $_POST['email'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];
    $user_type = $_POST['user_type'];

    // $select = " SELECT * FROM user_form WHERE email = '$email' && password '$password' ";
    // $result = mysqli_query $select);

//     if(mysqli_num_rows($result) > 0){
//         $error[] = 'user already exist!';
    
//     }else{

//     if($password != $cpassword){
//         $error[] = 'password not matched!';

//     }else{

//         $insert = "INSERT INTO user_form(nama, email, password, user_type) VALUES ('$nama', '$email', '$password', '$user_type')";
//         mysqli_query($conn, $insert);
//         header('location:login_form.php');
//     }
//     }
// } 

$sql ="INSERT INTO user_form (nama,email,password,cpassword,user_type) VALUE ('$nama','$email','$password','$cpassword','$user_type')";
$result = mysqli_query($conn,$sql);

if ($result){
    echo "<script> alert ('done!');
    window.location ='admin_page.php'</script>";
}
else{
    echo "<script> alert ('user already exist!');
    window.location ='register_form.php'</script>";
}
}
?>  

<!DOCTYPE html>
<html lang="en">
<head>
  
  <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register form</title>

    <!--custom css file link -->
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="form-container">

<form action="" method="post">
    <h3>Registor Now</h3>
    <!-- <?php
    if(isset($error)){
        foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
        }
    };
    ?> -->
    <!-- <input type="text" name="Id" require placeholder="enter your Id"> -->
    <input type="email" name="email" require placeholder="enter your email">
    <input type="text" name="nama" require placeholder="enter your name">
    <input type="password" name="password" require placeholder="enter your password">
    <input type="password" name="cpassword" require placeholder="confirm your password">
    <select name="user_type">
        <option value="user">select
        <option value="admin">Admin</option>
        <option value="user">User</option>
    </select>
    <input type="submit" name="submit" value="registor now" class="form-btn">
    <p>already have an account? <a href="login_form.php">Login Now</a></p>
</form>
</div>
</body>
</html>