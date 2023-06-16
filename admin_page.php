<?
@include 'config.php';
session_start();
if(!isset ($_SESSION['user_name'])){
    header('location:login_form.php');
}
?>


<!DOCTYPE html>
<html lang="en">
    
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device, initial-scale=1.0">
        <title>Admin page</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <!--custom css file link -->
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="container">

            <div class="content">
                <h3>Hi, <span>admin</span></h3>
                <h1>Welcome to KiBooking <span> </h1>
                <p>This is an admin page</p>
                <a href="product.php" class="btn btn-warning" style="background: #C88EA7;">Product</a> <br><br>
                <a href="logout.php" class="btn" style="background: black;">Logout</a>
            </div>
        </div>
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="gambar/notebook.png" class="d-block w-100" alt="..." width="10px">
    </div>
    <div class="carousel-item">
      <img src="gambar/pen1.png" class="d-block w-100" alt="..." width="10px">
    </div>
    <div class="carousel-item">
      <img src="gambar/tape.png" class="d-block w-100" alt="..." width="10px">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

    </body>
</html>