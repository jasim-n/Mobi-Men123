<?php
require("../connection.php");
session_start();
if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] == false){
    header("location:login.php");
}
if(isset($_POST['logout']) && $_POST['logout'] == true){
    $_SESSION['loggedin'] = false;
    header("location:login.php");

}

if(isset($_POST['action']) && $_POST['action'] == "delete"){
    $sno = $_POST['sno'];
    $dsql = "DELETE FROM `smartwatches` WHERE `Sr.no` = '$sno'";
    $result = mysqli_query($connection,$dsql);
    if(!$result){
        echo "not deleted" . mysqli_error($connection);
    }
}
if(isset($_POST['action']) && $_POST['action'] == 'edit'){
  $editSno = $_POST['editSno'];
  $editName = $_POST['editName'];
  $editDesc = $_POST['editDesc'];
  $editImgNo = $_POST['editImgNo'];
  $editPrice = $_POST['editPrice'];
  $editColorNo = $_POST['editColorNo'];
  $editColor1 = $_POST['editColor1'];
  $editColor2 = $_POST['editColor2'];
  $editColor3 = $_POST['editColor3'];
  $editColor4 = $_POST['editColor4'];
  $editColor5 = $_POST['editColor5'];
  $editColor6 = $_POST['editColor6'];


  $editsql = "UPDATE `smartwatches` SET `item_name` = '$editName', `item_desc` = '$editDesc', `img_no` = '$editImgNo', `item_price` = '$editPrice', `color_no` = '$editColorNo', `color-1` = '$editColor1', `color-2` = '$editColor2', `color-3` = '$editColor3', `color-4` = '$editColor4', `color-5` = '$editColor5', `color-6` = '$editColor6' WHERE `smartwatches`.`Sr.no` = $editSno";
  $editresult = mysqli_query($connection,$editsql);

  if(!$editresult){
    echo "Prank" . mysqli_error($connection);
  }else{
    echo '<div class="alert alert-success alert-dismissible fade show my-0" role="alert">
    <strong>Successfully Edited</strong>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
  }
}

if(isset($_POST['action']) && $_POST['action'] == 'add'){
  $addName = $_POST['addName'];
  $addDesc = $_POST['addDesc'];
  $addImgNo = $_POST['addImgNo'];
  $addPrice = $_POST['addPrice'];
  $addColorNo = $_POST['addColorNo'];
  $addColor1 = $_POST['addColor1'];
  $addColor2 = $_POST['addColor2'];
  $addColor3 = $_POST['addColor3'];
  $addColor4 = $_POST['addColor4'];
  $addColor5 = $_POST['addColor5'];
  $addColor6 = $_POST['addColor6'];

  $addsql = "INSERT INTO `smartwatches` (`Sr.no`, `item_name`, `item_desc`,`img_no` , `item_price`, `color_no`, `color-1`, `color-2`, `color-3`, `color-4`, `color-5`, `color-6`) VALUES (NULL,'$addName', '$addDesc', '$addImgNo', '$addPrice', '$addColorNo', '$addColor1', '$addColor2', '$addColor3', '$addColor4', '$addColor5', '$addColor6')";
  $addresult = mysqli_query($connection,$addsql);
  if(!$addresult){
    echo "Prank" . mysqli_error($connection);
  }else{
    echo '<div class="alert alert-success alert-dismissible fade show my-0" role="alert">
    <strong>Successfully Added</strong>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
  }


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

  <!-- Edit Modal -->
<div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form method="POST">
      <input type="hidden" name="editSno" id="editSno">
    <div class="mb-3">
        <label for="editName" class="form-label">Name</label>
        <input type="text" class="form-control" id="editName" name="editName">
    </div>
    <div class="mb-3">
        <label for="editDesc" class="form-label">Description</label>
        <textarea class="form-control" id="editDesc" name="editDesc" rows="3"></textarea>
    </div>
    <div class="mb-3">
        <label for="editImgNo" class="form-label">Image Number</label>
        <input type="number" class="form-control" id="editImgNo" name="editImgNo">
    </div>
    <div class="mb-3">
        <label for="editPrice" class="form-label">Price</label>
        <input type="text" class="form-control" id="editPrice" name="editPrice">
    </div>

    <div class="mb-3">
        <label for="editColorNo" class="form-label">Color No</label>
        <input type="number" class="form-control" id="editColorNo" name="editColorNo">
    </div>
    <div class="mb-3">
        <label for="editColor1" class="form-label">Color 1</label>
        <input type="text" class="form-control" id="editColor1" name="editColor1">
    </div>
    <div class="mb-3">
        <label for="editColor2" class="form-label">Color 2</label>
        <input type="text" class="form-control" id="editColor2" name="editColor2">
    </div>
    <div class="mb-3">
        <label for="editColor3" class="form-label">Color 3</label>
        <input type="text" class="form-control" id="editColor3" name="editColor3">
    </div>
    <div class="mb-3">
        <label for="editColor4" class="form-label">Color 4</label>
        <input type="text" class="form-control" id="editColor4" name="editColor4">
    </div>
    <div class="mb-3">
        <label for="editColor5" class="form-label">Color 5</label>
        <input type="text" class="form-control" id="editColor5" name="editColor5">
    </div>
    <div class="mb-3">
        <label for="editColor6" class="form-label">Color 6</label>
        <input type="text" class="form-control" id="editColor6" name="editColor6">
    </div>
    <input type="hidden" name="action" value="edit">
    </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-outline-dark">Edit</button>
      </div>
      </div>
    </form>
 
    </div>
  </div>
</div>

<!-- Add Modal -->
<div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Mobile</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form method="POST">
      <div class="mb-3">
        <label for="addName" class="form-label">Name</label>
        <input type="text" class="form-control" id="addName" name="addName">
    </div>
    <div class="mb-3">
        <label for="addDesc" class="form-label">Description</label>
        <textarea class="form-control" id="addDesc" name="addDesc" rows="3"></textarea>
    </div>
    <div class="mb-3">
        <label for="addImgNo" class="form-label">Image Number</label>
        <input type="number" class="form-control" id="addImgNo" name="addImgNo">
    </div>
    <div class="mb-3">
        <label for="addPrice" class="form-label">Price</label>
        <input type="text" class="form-control" id="addPrice" name="addPrice">
    </div>

    <div class="mb-3">
        <label for="addColorNo" class="form-label">Color No</label>
        <input type="number" class="form-control" id="addColorNo" name="addColorNo">
    </div>
    <div class="mb-3">
        <label for="addColor1" class="form-label">Color 1</label>
        <input type="text" class="form-control" id="addColor1" name="addColor1">
    </div>
    <div class="mb-3">
        <label for="addColor2" class="form-label">Color 2</label>
        <input type="text" class="form-control" id="addColor2" name="addColor2">
    </div>
    <div class="mb-3">
        <label for="addColor3" class="form-label">Color 3</label>
        <input type="text" class="form-control" id="addColor3" name="addColor3">
    </div>
    <div class="mb-3">
        <label for="addColor4" class="form-label">Color 4</label>
        <input type="text" class="form-control" id="addColor4" name="addColor4">
    </div>
    <div class="mb-3">
        <label for="addColor5" class="form-label">Color 5</label>
        <input type="text" class="form-control" id="addColor5" name="addColor5">
    </div>
    <div class="mb-3">
        <label for="addColor6" class="form-label">Color 6</label>
        <input type="text" class="form-control" id="addColor6" name="addColor6">
    </div>

        <input type="hidden" name="action" value="add"> 
    </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-outline-dark">Add</button>
      </div>
      </form>
    </div>
  </div>
</div>

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

<h2 class="text-center mt-5">Smart Watches</h2>
<div class="container">
<div style="text-align:right;">
        <button type="button" class="btn btn-outline-dark" data-bs-toggle="modal" data-bs-target="#addModal">Add</button>
    </div>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Price</th>
      <th scope="col">Edit</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>
      <?php

        $sql = "SELECT * FROM `smartwatches`";
        $result = mysqli_query($connection,$sql);
        $num = mysqli_num_rows($result);
        if($num>0){
            while($row = mysqli_fetch_assoc($result)){
                echo '<tr>
                <th scope="row">'.$row['Sr.no'].'</th>
                <input type="hidden" value="'.$row['Sr.no'].'">
                <td>'.$row['item_name'].'</td>
                <td>'.$row['item_price'].'</td>
                <section>
                <td>
                <input type="hidden" name="act" value="edit">
                <input type="hidden" name="Name" value="'.$row['item_name'].'">
                <input type="hidden" name="Description" value="'.$row['item_desc'].'">
                <input type="hidden" name="ImgNo" value="'.$row['img_no'].'">       
                <input type="hidden" name="Price" value="'.$row['item_price'].'">
                <input type="hidden" name="ClrNo" value="'.$row['color_no'].'">        
                <input type="hidden" name="Clr1" value="'.$row['color-1'].'">        
                <input type="hidden" name="Clr2" value="'.$row['color-2'].'">        
                <input type="hidden" name="Clr3" value="'.$row['color-3'].'">        
                <input type="hidden" name="Clr4" value="'.$row['color-4'].'">        
                <input type="hidden" name="Clr5" value="'.$row['color-5'].'">        
                <input type="hidden" name="Clr6" value="'.$row['color-6'].'">
                <input type="hidden" name="action" value="edit">
                <button type="" class="btn btn-outline-dark editModal" data-bs-toggle="modal" data-bs-target="#editModal">Edit</button>
                </td>
                </section>
                <form method="POST">
                <input type="hidden" name="action" value="delete">
                <input type="hidden" name="sno" value="'.$row['Sr.no'].'">
                <td><button type="submit" class="btn btn-outline-dark">Delete</button></td>
                </form>
                </tr>';
            }

        }else{
            echo "No Data";
        }

      ?>

  </tbody>
</table>
</div>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <script>
            var editModal = document.getElementsByClassName("editModal");
            Array.from(editModal).forEach((element)=>{
              element.addEventListener("click" , (e)=>{
                editpn = e.target.parentNode;
                editpn1 = e.target.parentNode.parentNode;
                sno = editpn1.getElementsByTagName("input")[0].value;
                console.log(sno);
                action = editpn.getElementsByTagName("input")[0].value;
                name = editpn.getElementsByTagName("input")[1].value;
                description = editpn.getElementsByTagName("input")[2].value;
                imageno = editpn.getElementsByTagName("input")[3].value;
                price = editpn.getElementsByTagName("input")[4].value;
                clrno = editpn.getElementsByTagName("input")[5].value;
                clr1 = editpn.getElementsByTagName("input")[6].value;
                clr2 = editpn.getElementsByTagName("input")[7].value;
                clr3 = editpn.getElementsByTagName("input")[8].value;
                clr4 = editpn.getElementsByTagName("input")[9].value;
                clr5 = editpn.getElementsByTagName("input")[10].value;
                clr6 = editpn.getElementsByTagName("input")[11].value;
                editSno.value = sno;
                editName.value = name;
                editDesc.value = description;
                editImgNo.value = imageno;  
                editPrice.value = price;            
                editColorNo.value = clrno;      
                editColor1.value = clr1;      
                editColor2.value = clr2;      
                editColor3.value = clr3;      
                editColor4.value = clr4;      
                editColor5.value = clr5;      
                editColor6.value = clr6;      
              });
            });
        </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    -->
  </body>
</html>