<?php


    require('connection.php');
    


?> 


<?php

session_start();

if(isset($_POST['fullName']) && $_SERVER['REQUEST_METHOD'] == 'POST'){
    $fullName = $_POST['fullName'];
    $Email = $_POST['Email'];
    $Phone = $_POST['Phone'];
    $Address = $_POST['Address'];
    $City = $_POST['City'];
    $Comments = $_POST['Comments'];
    $ordersql = "INSERT INTO `userdetail` (`Name`, `Email`, `Address`, `Phone-no`, `City`, `Comment`, `Date and Time`) VALUES ('$fullName', '$Email', '$Address', '$Phone', '$City', '$Comments', current_timestamp())";
    $orderquery = mysqli_query($connection,$ordersql);
    if(!$orderquery){
        echo 'Failed'. mysqli_error($connection);
    }
    $order_id = mysqli_insert_id($connection);

    foreach ($_SESSION as $product){
        if(is_array($product)){
            foreach ($product as $key => $value){
                if($key == 5){
                    $pro_clr = $product[5];
                }
                if($key == 4){

                }
                if($key == 3){
                    $pro_sno = $product[3];
                }
                if($key == 2){
                    $pro_price = $product[2];
                }
                if($key == 1){
                    $pro_qty = $product[1];
                }
                if($key == 0){
                    $pro_name = $product[0];
                }

                
            }               
            // echo "Name" .$pro_name;
            // echo "Qty ".$pro_qty;
            // echo "Price".$pro_price;
            // echo "Sno".$pro_sno;
            // echo "Clr".$pro_clr;
            // echo "<br>";
            $sql = "INSERT INTO `products` (`product_id`, `Product_name`, `Product_price`, `Product_qty`, `Product_clr`, `Date and Time`) VALUES ('$order_id', '$pro_name', '$pro_price', '$pro_qty', '$pro_clr', current_timestamp())";
            $result = mysqli_query($connection,$sql);

        }
    }









    $to = "solemannoushad31@gmail.com";
    $subject = "New Order";
    $message = "cust_name :" . $fullName;
    $headers = "From: mobimen12@gmail.com";

    if(mail($to,$subject,$message,$headers)){
        echo "Sent";
    }
    else{
        // echo "Failed to sent mail";
    }
}




?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/mobi.css">
    <link rel="stylesheet" href="css/navbar-footer.css">
    <link rel="stylesheet" href="all.min.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css">
    <title>Mobi Men</title>
</head>

<body>

    <?php
    
        include('mobi_nav.php');
        


    ?>

<section id="sec-nav">

<div id="second-nav">
    <ul>
        <li><a href="smartphones" class="nav-a nav-aa">Smart Phones</a></li>
        <li><a href="smartwatches" class="nav-a nav-aa">Smart Watches</a></li>
        <li><a href="" class="nav-a nav-aa">Tablets</a></li>
        <li><a href="accessories" class="nav-a nav-aa">Accessories</a></li>

    </ul>
</div>
</section>


       
<section id="congheader">
    <h1 class="content">Thank You!</h1>
    <p>Serving You will be an Honour for us.</p>
</section>






    <?php
    
            require("footer.html");
            session_destroy();
            session_unset();
    
    ?>








    <script src="jquery/jquery-3.5.1.min.js"></script>
    <script src="js/mobi.js"></script>
    <script src="all.min.js"></script>
    <script src="all_cart.js"></script>
    <!-- <script src="jquery/fireworks.js"></script>
    <script>
        $('#congheader').fireworks({
            sound: true,// sound effect
            opacity: 1,
            width:'100%',
            height:'100%'
        });
    </script> -->



</body>

</html>