<?php
include "config.php";
if (isset($_POST['nama'])){
    $nama =  $_POST['nama'];
    $harga =  $_POST['harga'];
    $kuantiti = $_POST['kuantiti'];
    $gambar = $_POST['gambar'];

$sql ="INSERT INTO produk (nama, harga, kuantiti, gambar) 
VALUE ('$nama','$harga', '$kuantiti', '$gambar')";
$result = mysqli_query($conn,$sql);

if ($result){
    echo "<script> alert ('done!');
    window.location ='product.php'</script>";
}
else{
    echo "<script> alert ('user already exist!');
    window.location ='addproduk.php'</script>";
}
}
?>  

<!DOCTYPE html>
<html lang="en">
<head>
  
  <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add</title>

    <!--custom css file link -->
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="form-container">
<form action="" method="post">
    <h3>Product Form</h3>
    <?php
    if(isset($error)){
        foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
        }
    }
    ?> 
    <!-- <input type="text" name="Id" require placeholder="enter your Id"> -->
    <input type="text" name="nama" require placeholder="item">
    <input type="text" name="harga" require placeholder="price">
    <input type="text" name="kuantiti" require placeholder="kuantiti">
    <input type="file" name="gambar" require placeholder="upload picture">
    <input type="submit" name="submit" value="add" class="form-btn">
    
</form>
</div>
</body>
</html>