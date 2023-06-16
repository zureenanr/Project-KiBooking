<?php
include "config.php";
?>
<head>
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <style>
body{
    font-family: 'Poppins', sans-serif;
    margin: 0; padding: 0;
    box-sizing: border-box;
    outline: none; border:none;
    text-decoration: none;
    background-image: linear-gradient(#AFD3E2,#A6D0DD,#B9EDDD,#C7E9B0);
}
.navigation .link{
    text-align: end;
    margin-right: 30px;
}
.add{
    margin-left: 30px;
    height: 30px;
    width: 65px;
}
.navigation h1{
    text-align: center;
    
}
.card-body .btn{
    background-image: linear-gradient(#AC7088,#E4D1B9,#B9EDDD,#F3E9DD);
    height: 40px;
    width:60px;
}
.card{
    margin: 10px;
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;
    justify-content: space-between;
}

    </style>

</head>
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<html>
<body>  
    <div class="navigation"> <br> 
<h1>SERVICE PRODUCT</h1>
    <div class="add">
        <button type="button" class="btn btn-info"><a href="addproduk.php" style=text-decoration:none;color:black>Add Item</button>
    </div>

     <div class="link">
        <button type="button" class="btn btn-warning"><a href="logout.php" style=text-decoration:none;color:black>Logout</button>
     </div>         
    </div>
        
        
    <table>
    <?php
     //tambah rekod baru ke dalam table
     $rekod = "SELECT * FROM produk ORDER BY nama ASC";
     $data = mysqli_query($conn,$rekod);
     while($produk = mysqli_fetch_array($data)){
    ?>
        <div class="container"> 
            <div class="card" style="width: 20rem;">
                    <img src="gambar/pendrive.png " class="card-img-top" alt="...">
                    <div class="card-body">
                    <p class="card-text"> 
                        <?php echo $produk ['gambar'] ?> 
                        <h4><?php echo $produk ['nama'] ?></h4>
                        <h4>Harga Barang : RM <?php echo $produk ['harga'] ?> </h4>
                        <h4>Kuantiti : <?php echo $produk['kuantiti'] ?> </h4> 
                        <button type="button" class="btn" ><a href="delete.php? nama=<?php echo $produk['nama'];?>" style=text-decoration:none;> Delete </a></button></p>
  </div>
</div>
        </div>
    </table>
    <?php
      }
      ?>
</body>
</html>