<?php

session_start();

view_cart();
if(isset($_POST['action']) && $_POST['action'] == "add"){
    add_to_cart();
}
elseif(isset($_POST['action']) && $_POST['action'] == "delete"){
    delete_cart();
    view_cart();
}
elseif(isset($_POST['action']) && $_POST['action'] == "update"){
    add_to_cart_updated();
    view_cart();
    
}


//Cart Update
function update_cart(){
    if(isset($_POST['action']) && $_POST['action'] == "update"){
        $upqty = $_POST['value'];
        $upname = $_POST['upname'];
        $upsno = $_POST['upsno'];
        $upcat = $_POST['upcat'];
        $upprice = $_POST['upprice'];

        foreach ($_SESSION[$upname.$upsno] as $product) {
            if(is_array($product)){
                foreach ($product as $key => $value){
                    $product[1] = $upqty;

                }               
   
            }
        }


    }
    else{
        $upqty = 1;
    }
}

//Delete Cart
function delete_cart(){
    $sno = $_POST['proSno'];
    $name = $_POST['proName'];
    $cat = $_POST['proCat'];
    
    $product = $name.$sno;
    // $output= $product;
    unset($_SESSION[$product]);
    if(!isset($_SESSION['shopping_cart'])&&$_SESSION['shopping_cart'] !== true){
        $output = "No items Selected";
    }
    echo($output);
}


// <li class="product">
// <div class="prodet">
//     <img src="images/smartwatches/W26/W26-1.jpg" alt="">
//     <p class="det">W26 aas asaskas askja asas asas as</p>
//     <p>20,000 PKR</p>
// </div>
// <div class="actions">
//     <select name="" id="">
//         <option value="1">1</option>
//         <option value="1">1</option>
//         <option value="1">1</option>
//         <option value="1">1</option>
//     </select>
//     <button>&times;</button>
// </div>
// </li>

//View Cart
function view_cart(){
    if(isset($_SESSION['shopping_cart'])&&$_SESSION['shopping_cart'] == true){
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
                            $output .= '<li class="product">';
                            $output .= '<div class="prodet">
                                <img src="images/'.$product[4].'/'.$product[0].'/'.$product[0].'-1.jpg" alt="">
                                <p class="det">'.$product[0].'</p>';
                                $value1 = $product[2]*$product[1];
                                $format = number_format($value1);
                                $output .= '<p>'.$format.' PKR</p>';
                                $total_price = $total_price + $value1;
                            $output .= '</div>
                            <div class="actions">';
                            $output .="<input type='hidden' name='CPname' value='$product[0]'/>";
                            $output .="<input type='hidden' name='CPsno' value='$product[3]'/>";
                            $output .="<input type='hidden' name='CPcat' value='$product[4]'/>";
                            $output .="<input type='hidden' name='CPprice' value='$product[2]'/>";
                            $output .="<input type='hidden' name='CPClr' value='$product[5]'/>";
                            $output .="<select name='clr' class='cartClr'>";
                            for($lsel = 1;$lsel <= 10 ; $lsel++){
                                if($lsel == $product[1]){
                                    $selected = "selected";
                                }else{
                                    $selected = "";
                                }
                                $output .="<option value='$lsel' class='$lsel' $selected>$lsel</option>";
                            }

                        $output .="</select>";

                                $output .= '<section>';
                                $output .="<input type='hidden' name='CPname' value='$product[0]'>";
                                $output .="<input type='hidden' name='CPsno' value='$product[3]'>";
                                $output .="<input type='hidden' name='CPcat' value='$product[4]'>";
                                $output .= '<button class="deleteCartPro">Remove</button>
                                </section>
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
            $output .= "<li class='total'>
            <p>Total</p>
            <p style='font-weight:bold;'>$total_price_format PKR</p>
            </li>
            <section>
            <form action='confirm' method='POST'>
            <input type='hidden' name='action' value='cart'>
            <input type='submit' value='Confirm Cart' class='confirmCart'>     
            </form>  
            </section>";    
        }
        
        else{
            $output = "<div class='emptyCart'>Your Cart is Empty</div>";
        }
           echo $output;
        
    }


//Add Cart

function add_to_cart(){
    if(isset($_POST['cartsno'])){
    
    
        $_SESSION['shopping_cart'] = true;
        $smw_sno = $_POST['cartsno'];
        $cat = $_POST['cartcat'];
        $_SESSION['cate'] = $cat;
        $_SESSION['cpsno'] = $smw_sno;
        $qty = $_POST['cartqty'];
        $clr = $_POST['cartclr'];
    
        echo $cat;

        require('connection.php');

        $sql = "SELECT * FROM `$cat` WHERE `Sr.no` = '$smw_sno'";
        $result = mysqli_query($connection , $sql);
    
        $num = mysqli_num_rows($result);
        if($num>0){
            $row = mysqli_fetch_assoc($result);
            $smw_name = $row['item_name'];
            $smw_price = $row['item_price'];
            $sno = $row['Sr.no'];
            $count = count($_SESSION) - 10;
    
            $_SESSION['name'] = $smw_name;
            $_SESSION['price'] = $smw_price;
            $_SESSION['qty'] = $qty;
            $_SESSION['count'] = $count;
            $res = $_SESSION['count'];

            

            $productcart = array($_SESSION['name'],$_SESSION['qty'],$_SESSION['price'],$sno,$cat,$clr);
            $productName = $_SESSION['name'].$smw_sno;
            $_SESSION['productName'] = $productName;
            $_SESSION[$productName] = $productcart;

    
        }
    
        if(!$result){
            echo "Failed". mysqli_error($connection);
        }
        else{
            echo "Success";
        }
    }
    else{
        $_SESSION['shopping_cart'] = false;
    }
    $array = array($res , $output);
    echo $array;
}

function add_to_cart_updated(){
    if(isset($_POST['upsno'])){
    
    
        $_SESSION['shopping_cart'] = true;
        $smw_sno = $_POST['upsno'];
        $cat = $_POST['upcat'];
        $_SESSION['cate'] = $cat;
        $_SESSION['cpsno'] = $smw_sno;
        $qty = $_POST['value'];
        $clr = $_POST['upcolor'];
    
        echo $cat;

        require('connection.php');

        $sql = "SELECT * FROM `$cat` WHERE `Sr.no` = '$smw_sno'";
        $result = mysqli_query($connection , $sql);
    
        $num = mysqli_num_rows($result);
        if($num>0){
            $row = mysqli_fetch_assoc($result);
            $smw_name = $row['item_name'];
            $smw_price = $row['item_price'];
            $sno = $row['Sr.no'];
    
            $_SESSION['name'] = $smw_name;
            $_SESSION['price'] = $smw_price;
            $_SESSION['qty'] = $qty;
            

            $productcart = array($_SESSION['name'],$_SESSION['qty'],$_SESSION['price'],$sno,$cat,$clr);
            $productName = $_SESSION['name'].$smw_sno;
            $_SESSION['productName'] = $productName;
            $_SESSION[$productName] = $productcart;

    
        }
    
        if(!$result){
            echo "Failed". mysqli_error($connection);
        }
        else{
            echo "Success";
        }
    }
    else{
        $_SESSION['shopping_cart'] = false;
    }
}
// session_unset();
// session_destroy();

?>