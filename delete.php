<?php
include ('config.php');
$nama = $_GET['nama'];
$sql = "DELETE FROM produk WHERE nama = '$nama'";
$result = mysqli_query($conn, $sql);
if ($result)
    echo "<script>alert ('Berjaya padam rekod')</script>";
else
    echo "<script>alert ('Tidak berjaya padam rekod')</script>";
    echo "<script> window.location = 'product.php'</script>";
?> 