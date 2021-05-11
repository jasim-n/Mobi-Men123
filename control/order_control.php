
<?php
require('../connection.php');
session_start();
if(isset($_POST['logout']) && $_POST['logout'] == true){
    $_SESSION['loggedin'] = false;
    header("location:login.php");

}

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] == false){
  header("location:login.php");
}



?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title>Admin Panel</title>
  </head>
  <body>

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="../index.php">Mobi Men</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="admin.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="adminsmp.php">Smart Phones</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="adminsmw.php">Smart Watches</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="adminacc.php">Accessories</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="admintab.php">Tablets</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="order_control.php">Orders</a>
        </li>

      </ul>
    </div>
    <form method="POST" class="d-flex">
    <input type="hidden" name="logout" value="true">
    <button class="btn btn-outline-light" type="submit">Logout</button>
  </form>
  </div>
</nav>

<h2 class="text-center mt-5">Admin Panel</h2>

<div class="container">
  <h3>User Detail</h3>
  <table class="table">
  <thead>
    <tr>
      <th scope="col">User id</th>
      <th scope="col">Product Name</th>
      <th scope="col">Product Price</th>
      <th scope="col">Quantity</th>
      <th scope="col">Color</th>
      <th scope="col">Date and Time</th>
    </tr>
  </thead>
  <tbody>
  <?php
  
    $sql = "SELECT * FROM `products`";
    $result = mysqli_query($connection , $sql);
    $num = mysqli_num_rows($result);
    while($row = mysqli_fetch_assoc($result)){
      echo '<tr>
      <th scope="row">'.$row['product_id'].'</th>
      <td>'.$row['Product_name'].'</td>
      <td>'.$row['Product_price'].'</td>
      <td>'.$row['Product_qty'].'</td>
      <td>'.$row['Product_clr'].'</td>
      <td>'.$row['Date and Time'].'</td>
    </tr>';
    }

  ?>


  </tbody>
</table>
</div>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    -->
  </body>
</html>