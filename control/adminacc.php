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
    $dsql = "DELETE FROM `accessories` WHERE `Sr.no` = '$sno'";
    $result = mysqli_query($connection,$dsql);
    if(!$result){
        echo "not deleted" . mysqli_error($connection);
    }else{
      echo '<div class="alert alert-success alert-dismissible fade show my-0" role="alert">
      <strong>Successfully Deleted</strong>
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }
}

if(isset($_POST['action']) && $_POST['action'] == 'edit'){
  $editSno = $_POST['editSno'];
  $editName = $_POST['editName'];
  $editCompany = $_POST['editCompany'];
  $editCompany = $_POST['editCompany'];
  $editPrice = $_POST['editPrice'];
  $editImgNo = $_POST['editImgNo'];
  $editColNo = $_POST['editColNo'];
  $editCol1 = $_POST['editCol1'];
  $editCol2 = $_POST['editCol2'];
  $editCol3 = $_POST['editCol3'];
  $editCol4 = $_POST['editCol4'];
  $editCol5 = $_POST['editCol5'];
  $editCol6 = $_POST['editCol6'];
  $editCol7 = $_POST['editCol7'];
  $editCol8 = $_POST['editCol8'];
  $editCol9 = $_POST['editCol9'];
  $editCol10 = $_POST['editCol10'];
  $editColorNo = $_POST['editColorNo'];
  $editColor1 = $_POST['editColor1'];
  $editColor2 = $_POST['editColor2'];
  $editColor3 = $_POST['editColor3'];
  $editColor4 = $_POST['editColor4'];
  $editColor5 = $_POST['editColor5'];
  $editColor6 = $_POST['editColor6'];


  $editsql = "UPDATE `accessories` SET `item_name` = '$editName', `company` = '$editCompany', `item_price` = '$editPrice', `img_no` = '$editImgNo', `col_no` = '$editColNo', `col-1` = '$editCol1', `col-2` = '$editCol2', `col-3` = '$editCol3', `col-4` = '$editCol4', `col-5` = '$editCol5', `col-6` = '$editCol6', `col-7` = '$editCol7', `col-8` = '$editCol8', `col-9` = '$editCol9', `col-10` = '$editCol10', `color-no` = '$editColorNo', `color-1` = '$editColor1', `color-2` = '$editColor2', `color-3` = '$editColor2', `color-4` = '$editColor4', `color-5` = '$editColor5', `color-6` = '$editColor6' WHERE `accessories`.`Sr.no` = $editSno";
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
  $addCompany = $_POST['addCompany'];
  $addPrice = $_POST['addPrice'];
  $addImgNo = $_POST['addImgNo'];
  $addColNo = $_POST['addColNo'];
  $addCol1 = $_POST['addCol1'];
  $addCol2 = $_POST['addCol2'];
  $addCol3 = $_POST['addCol3'];
  $addCol4 = $_POST['addCol4'];
  $addCol5 = $_POST['addCol5'];
  $addCol6 = $_POST['addCol6'];
  $addCol7 = $_POST['addCol7'];
  $addCol8 = $_POST['addCol8'];
  $addCol9 = $_POST['addCol9'];
  $addCol10 = $_POST['addCol10'];
  $addColorNo = $_POST['addColorNo'];
  $addColor1 = $_POST['addColor1'];
  $addColor2 = $_POST['addColor2'];
  $addColor3 = $_POST['addColor3'];
  $addColor4 = $_POST['addColor4'];
  $addColor5 = $_POST['addColor5'];
  $addColor6 = $_POST['addColor6'];

  $addsql = "INSERT INTO `accessories` (`Sr.no`, `item_name`, `company`, `item_price`, `img_no`, `col_no`, `col-1`, `col-2`, `col-3`, `col-4`, `col-5`, `col-6`, `col-7`, `col-8`, `col-9`, `col-10`, `color-no`, `color-1`, `color-2`, `color-3`, `color-4`, `color-5`, `color-6`) VALUES (NULL,'$addName', '$addCompany', '$addPrice', '$addImgNo', '$addColNo', '$addCol1', '$addCol2', '$addCol3', '$addCol4', '$addCol5', '$addCol6', '$addCol7', '$addCol8', '$addCol9', '$addCol10', '$addColorNo', '$addColor1', '$addColor2', '$addColor3', '$addColor4', '$addColor5', '$addColor6')";
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
        <label for="editCompany" class="form-label">Company</label>
        <input type="text" class="form-control" id="editCompany" name="editCompany">
    </div>
    <div class="mb-3">
        <label for="editPrice" class="form-label">Price</label>
        <input type="text" class="form-control" id="editPrice" name="editPrice">
    </div>
    <div class="mb-3">
        <label for="editImgNo" class="form-label">Image Number</label>
        <input type="number" class="form-control" id="editImgNo" name="editImgNo">
    </div>
    <div class="mb-3">
        <label for="editColNo" class="form-label">Column No</label>
        <input type="number" class="form-control" id="editColNo" name="editColNo">
    </div>
    <div class="mb-3">
        <label for="editCol1" class="form-label">Column 1</label>
        <textarea class="form-control" id="editCol1" name="editCol1" rows="3"></textarea>
    </div>
    <div class="mb-3">
        <label for="editCol2" class="form-label">Column 2</label>
        <textarea class="form-control" id="editCol2" name="editCol2" rows="3"></textarea>
    </div>
    <div class="mb-3">
        <label for="editCol3" class="form-label">Column 3</label>
        <textarea class="form-control" id="editCol3" name="editCol3" rows="3"></textarea>
    </div>
    <div class="mb-3">
        <label for="editCol4" class="form-label">Column 4</label>
        <textarea class="form-control" id="editCol4" name="editCol4" rows="3"></textarea>
    </div>
    <div class="mb-3">
        <label for="editCol5" class="form-label">Column 5</label>
        <textarea class="form-control" id="editCol5" name="editCol5" rows="3"></textarea>
    </div>
    <div class="mb-3">
        <label for="editCol6" class="form-label">Column 6</label>
        <textarea class="form-control" id="editCol6" name="editCol6" rows="3"></textarea>
    </div>
    <div class="mb-3">
        <label for="editCol7" class="form-label">Column 7</label>
        <textarea class="form-control" id="editCol7" name="editCol7" rows="3"></textarea>
    </div>
    <div class="mb-3">
        <label for="editCol8" class="form-label">Column 8</label>
        <textarea class="form-control" id="editCol8" name="editCol8" rows="3"></textarea>
    </div>
    <div class="mb-3">
        <label for="editCol9" class="form-label">Column 9</label>
        <textarea class="form-control" id="editCol9" name="editCol9" rows="3"></textarea>
    </div>
    <div class="mb-3">
        <label for="editCol10" class="form-label">Column 10</label>
        <textarea class="form-control" id="editCol10" name="editCol10" rows="3"></textarea>
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
        <input type="text" class="form-control" id="addName" name="addName" required>
    </div>
    <div class="mb-3">
        <label for="addCompany" class="form-label">Company</label>
        <input type="text" class="form-control" id="addCompany" name="addCompany">
    </div>
    <div class="mb-3">
        <label for="addPrice" class="form-label">Price</label>
        <input type="text" class="form-control" id="addPrice" name="addPrice" required>
    </div>
    <div class="mb-3">
        <label for="addImgNo" class="form-label">Image Number</label>
        <input type="number" class="form-control" id="addImgNo" name="addImgNo">
    </div>
    <div class="mb-3">
        <label for="addColNo" class="form-label">Column No</label>
        <input type="number" class="form-control" id="addColNo" name="addColNo">
    </div>
    <div class="mb-3">
        <label for="addCol1" class="form-label">Column 1</label>
        <textarea class="form-control" id="addCol1" name="addCol1" rows="3"></textarea>
    </div>
    <div class="mb-3">
        <label for="addCol2" class="form-label">Column 2</label>
        <textarea class="form-control" id="addCol2" name="addCol2" rows="3"></textarea>
    </div>
    <div class="mb-3">
        <label for="addCol3" class="form-label">Column 3</label>
        <textarea class="form-control" id="addCol3" name="addCol3" rows="3"></textarea>
    </div>
    <div class="mb-3">
        <label for="addCol4" class="form-label">Column 4</label>
        <textarea class="form-control" id="addCol4" name="addCol4" rows="3"></textarea>
    </div>
    <div class="mb-3">
        <label for="addCol5" class="form-label">Column 5</label>
        <textarea class="form-control" id="addCol5" name="addCol5" rows="3"></textarea>
    </div>
    <div class="mb-3">
        <label for="addCol6" class="form-label">Column 6</label>
        <textarea class="form-control" id="addCol6" name="addCol6" rows="3"></textarea>
    </div>
    <div class="mb-3">
        <label for="addCol7" class="form-label">Column 7</label>
        <textarea class="form-control" id="addCol7" name="addCol7" rows="3"></textarea>
    </div>
    <div class="mb-3">
        <label for="addCol8" class="form-label">Column 8</label>
        <textarea class="form-control" id="addCol8" name="addCol8" rows="3"></textarea>
    </div>
    <div class="mb-3">
        <label for="addCol9" class="form-label">Column 9</label>
        <textarea class="form-control" id="addCol9" name="addCol9" rows="3"></textarea>
    </div>
    <div class="mb-3">
        <label for="addCol10" class="form-label">Column 10</label>
        <textarea class="form-control" id="addCol10" name="addCol10" rows="3"></textarea>
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

<h2 class="text-center">Accessories</h2>
<div class="container">
    <div style="text-align:right;">
        <button type="button" class="btn btn-outline-dark" data-bs-toggle="modal" data-bs-target="#addModal">Add</button>
    </div>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Company</th>
      <th scope="col">Price</th>
      <th scope="col">Edit</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>
      <?php

        $sql = "SELECT * FROM `accessories`";
        $result = mysqli_query($connection,$sql);
        $num = mysqli_num_rows($result);
        if($num>0){
            while($row = mysqli_fetch_assoc($result)){
                echo '<tr>
                <th scope="row">'.$row['Sr.no'].'</th>
                <input type="hidden" value="'.$row['Sr.no'].'">
                <td>'.$row['item_name'].'</td>
                <td>'.$row['company'].'</td>
                <td>'.$row['item_price'].'</td>
                <section>
                <td>
                <input type="hidden" name="act" value="edit">
                <input type="hidden" name="Name" value="'.$row['item_name'].'">
                <input type="hidden" name="Company" value="'.$row['company'].'">
                <input type="hidden" name="Price" value="'.$row['item_price'].'">
                <input type="hidden" name="ImgNo" value="'.$row['img_no'].'">
                <input type="hidden" name="ColNo" value="'.$row['col_no'].'">        
                <input type="hidden" name="Col1" value="'.$row['col-1'].'">        
                <input type="hidden" name="Col2" value="'.$row['col-2'].'">        
                <input type="hidden" name="Col3" value="'.$row['col-3'].'">        
                <input type="hidden" name="Col4" value="'.$row['col-4'].'">        
                <input type="hidden" name="Col5" value="'.$row['col-5'].'">        
                <input type="hidden" name="Col6" value="'.$row['col-6'].'">        
                <input type="hidden" name="Col7" value="'.$row['col-7'].'">        
                <input type="hidden" name="Col8" value="'.$row['col-8'].'">        
                <input type="hidden" name="Col9" value="'.$row['col-9'].'">        
                <input type="hidden" name="Col10" value="'.$row['col-10'].'">        
                <input type="hidden" name="ClrNo" value="'.$row['color-no'].'">        
                <input type="hidden" name="Clr1" value="'.$row['color-1'].'">        
                <input type="hidden" name="Clr2" value="'.$row['color-2'].'">        
                <input type="hidden" name="Clr3" value="'.$row['color-3'].'">        
                <input type="hidden" name="Clr4" value="'.$row['color-4'].'">        
                <input type="hidden" name="Clr5" value="'.$row['color-5'].'">        
                <input type="hidden" name="Clr6" value="'.$row['color-6'].'">
                <input type="hidden" name="action" value="edit">
                <button type="" class="btn btn-outline-dark editModal" data-bs-toggle="modal" data-bs-target="#editModal">Edit</button>
                </td>
                </section>                <form method="POST">
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
                action = editpn.getElementsByTagName("input")[0].value;
                name = editpn.getElementsByTagName("input")[1].value;
                company = editpn.getElementsByTagName("input")[2].value;
                price = editpn.getElementsByTagName("input")[3].value;
                imageno = editpn.getElementsByTagName("input")[4].value;
                colno = editpn.getElementsByTagName("input")[5].value;
                col1 = editpn.getElementsByTagName("input")[6].value;
                col2 = editpn.getElementsByTagName("input")[7].value;
                col3 = editpn.getElementsByTagName("input")[8].value;
                col4 = editpn.getElementsByTagName("input")[9].value;
                col5 = editpn.getElementsByTagName("input")[10].value;
                col6 = editpn.getElementsByTagName("input")[11].value;
                col7 = editpn.getElementsByTagName("input")[12].value;
                col8 = editpn.getElementsByTagName("input")[13].value;
                col9 = editpn.getElementsByTagName("input")[14].value;
                col10 = editpn.getElementsByTagName("input")[15].value;
                clrno = editpn.getElementsByTagName("input")[16].value;
                clr1 = editpn.getElementsByTagName("input")[17].value;
                clr2 = editpn.getElementsByTagName("input")[18].value;
                clr3 = editpn.getElementsByTagName("input")[19].value;
                clr4 = editpn.getElementsByTagName("input")[20].value;
                clr5 = editpn.getElementsByTagName("input")[21].value;
                clr6 = editpn.getElementsByTagName("input")[22].value;
                editSno.value = sno;
                editName.value = name;
                editCompany.value = company;
                editPrice.value = price;        
                editImgNo.value = imageno;  
                editColNo.value = colno;          
                editCol1.value = col1;      
                editCol2.value = col2;      
                editCol3.value = col3;      
                editCol4.value = col4;      
                editCol5.value = col5;      
                editCol6.value = col6;      
                editCol7.value = col7;      
                editCol8.value = col8;      
                editCol9.value = col9;      
                editCol10.value = col10;      
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