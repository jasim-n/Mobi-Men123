<?php

session_start();
// echo $_SESSION['shopping_cart'];
if(isset($_POST['buyname'])){
    $sno = $_POST['buysno'];
    $name = $_POST['buyname'];
    $price = $_POST['buyprice'];
    $category = $_POST['buycat'];
    $Qty = $_POST['Qty'];
    $Clr = $_POST['Clr'];


    $format = number_format($price);


}

?>

<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="css/mobi.css">
<link rel="stylesheet" href="css/confirm.css">
<link rel="stylesheet" href="all.css">
<link rel="stylesheet" href="css/navbar-footer.css">
<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css">
<style>
    input[type=number]::-webkit-inner-spin-button,
    input[type=number]::-webkit-outer-spin-button {
        -webkit-appearance: none;
    }


</style>
<title>Mobi Men</title>
</head>

<body>

<?php

require("mobi_nav.php");
require("loader.html");
$val = 0;
?>

<section id="mainConfirm">


    <section id="leftConfirm">

        <!-- <li class="product">
            <div class="proimg">
                <img src="images/smartwatches/W26/W26-1.jpg" alt=""><span class="qty">1</span>
            </div>
            <div class="prodet">
                <p>W26</p>
                <p>White</p>
                <p>20,000 PKR</p>
            </div>
        </li>
        <li class="total">
            <p>Total</p>
            <p style="font-weight:bold;">20000 PKR</p>
        </li> -->

        <?php

$count = count($_SESSION);
$actualCount = $count-10;
$serialno = 1;
if(isset($_POST['action']) && $_POST['action'] == "buy"){  
    
    $productcart = array($name,$Qty,$price,$sno,$category,$Clr);
    $productName = $name.$sno;
    $_SESSION['productName'] = $productName;
    $_SESSION[$productName] = $productcart;

    $total_price = 0;
    
    
    $output = "";

    foreach ($_SESSION as $product) {
        if(is_array($product)){
            foreach ($product as $key => $value){
                if($key == 5){
                    $value1 = $product[2]*$product[1];
                    $format = number_format($value1);
                    $total_price = $total_price + $value1;
                    echo '<li class="product">
                    <div class="proimg">
                    <img src="images/'.$product[4].'/'.$product[0].'/'.$product[0].'-1.jpg" alt=""><span class="qty">'.$product[1].'</span>
                    </div>
                    <div class="prodet">
                        <p>'.$product[0].'</p>
                        <p>'.$product[5].'</p>
                        <p>'.$format.' PKR</p>
                    </div>
                </li>';
                }
                if($key == 4){

                }      
                if($key == 3){
                }      
                if($key == 2){

                }      
   
                if($key == 1){

                }             
                if($key == 0){                            


                }   
            }               

        }


    }
    $total_price_format = number_format($total_price);
    echo "<li class='total'>
    <p>Total</p>
    <p style='font-weight:bold;'>$total_price_format PKR</p>
    </li>";  

}
else{
        
        $total_price = 0;
    
        $cat = $_SESSION['cate'];
        $name = $_SESSION['name'];
        $price = $_SESSION['price'];
        $qty = $_SESSION['qty'];
        $productName = $_SESSION['productName'];
        
        $output = "";

        foreach ($_SESSION as $product) {
            if(is_array($product)){
                foreach ($product as $key => $value){
                    if($key == 5){
                        $value1 = $product[2]*$product[1];
                        $format = number_format($value1);
                        $total_price = $total_price + $value1;
                        echo '<li class="product">
                        <div class="proimg">
                        <img src="images/'.$product[4].'/'.$product[0].'/'.$product[0].'-1.jpg" alt=""><span class="qty">'.$product[1].'</span>
                        </div>
                        <div class="prodet">
                            <p>'.$product[0].'</p>
                            <p>'.$product[5].'</p>
                            <p>'.$format.' PKR</p>
                        </div>
                    </li>';
                    }
                    if($key == 4){

                    }      
                    if($key == 3){
                    }      
                    if($key == 2){

                    }      
       
                    if($key == 1){

                    }             
                    if($key == 0){                            


                    }   
                }               

            }


        }
        $total_price_format = number_format($total_price);
        echo "<li class='total'>
        <p>Total</p>
        <p style='font-weight:bold;'>$total_price_format PKR</p>
        </li>";  
} 

        ?>
        <!-- <table>
            <thead>
                <tr>
                    <td>Serial #</td>
                    <td>Item Name</td>
                    <td>Quantity</td>
                    <td>Color</td>
                    <td>Price</td>
                </tr>
            </thead>
            <tbody>
                <?php
                $count = count($_SESSION);
                $actualCount = $count-10;
                $serialno = 1;
                if(isset($_POST['action']) && $_POST['action'] == "buy"){                    
                    echo "<tr>
                        <td>1</td>
                        <td>$name</td>
                        <td>$Qty</td>
                        <td>$Clr</td>
                        <td>$format PKR</td>
                    </tr>";
                }
                else{
                    $total_price = 0;
    
                    $cat = $_SESSION['cate'];
                    $name = $_SESSION['name'];
                    $price = $_SESSION['price'];
                    $qty = $_SESSION['qty'];
                    $productName = $_SESSION['productName'];
                

                echo "<tr>";
                foreach ($_SESSION as $product) {
                    if(is_array($product)){
                        foreach ($product as $key => $value){
                            if($key == 4){
                                // echo "<td>$product[0]</td>";
                                $value1 = $product[2]*$product[1];
                                $format = number_format($value1);
                                echo "<td>$format</td>";
                                $_SESSION['cartProPrice'] = $value;
                                $total_price = $total_price + $value1;
                            }      
                            if($key == 3){
                                if($product[5] == ''){
                                    echo "<td>No Color</td>";
                                }else{
                                    echo "<td>$product[5]</td>";
                                }
                            }      
                            if($key == 2){
                                echo "<td>$product[1]</td>";
                            }      
            
                            if($key == 1){
                                echo "<td>$product[0]</td>";
                            }             
                            if($key == 0){

                                echo "<td>$serialno</td>";
                                $serialno++;
                            }   
        
                        }               

                                    echo  "</tr>";    
                    }
                }
                $total_price_format = number_format($total_price);
                echo "<tr><td>Total</td><td></td><td>$total_price_format PKR</td><td></td></tr>";
                echo "<tr><td><form action='confirm.php' method='POST'>
                <input type='hidden' name='action' value='cart'>
                <button type='submit'>Confirm Order</button>
                </td></tr>";
                echo "</section>";  
                }
                ?>      
            </tbody>
        </table> -->
    </section>
    <section id="rightConfirm">
        <h4>Provide Details to Place Your Order</h4>
            <form action="cong" method="post" id="form"> 
                <div class="mainLabel">
                    <input type="text"  id="fullName" name="fullName" autocomplete="off" placeholder=" " class="input" required>
                    <label for="fullName" class="label">Name</label>
                </div>
                <div class="mainLabel">
                    <input type="email" id="Email" name="Email" autocomplete="off" placeholder=" " class="input" required>
                    <label for="Email" class="label">Email</label>
                </div>
                <div class="mainLabel">
                    <input type="number" id="Phone" name="Phone" placeholder=" " maxlength="11" class="input"  minlength="11"
                    autocomplete="off" required>
                    <label for="Phone" class="label">Phone</label>
                </div>
                        <span id="spanphone"></span>
                <div class="mainLabel">
                    <input type="text" id="Address" name="Address" placeholder=" " class="input" autocomplete="off" required>
                    <label for="Address" class="label">Address</label>
                </div>
                <div class="mainLabel">
                    <input type="text" id="City" name="City" placeholder=" " class="input" autocomplete="off" required>
                    <label for="City" class="label">City</label>
                </div>
                <div class="mainLabel">
                    <textarea name="Comments" id="Comments" cols="22" rows="5" class="input" placeholder=" "></textarea>
                    <label for="Comments" class="label">Comments</label>
                </div>
                <button type="submit" class="alert">Confirm Order</button>
            </form>
        </div>
    </section>
</section>
<?php
    
    require("footer.html");

?>


<script src="jquery/jquery-3.5.1.min.js"></script>
<script src="js/mobi.js"></script>
<script src="all.min.js"></script>
<script src="js/loader.js"></script>
<script src="all_cart.js"></script>

</body>

</html> 