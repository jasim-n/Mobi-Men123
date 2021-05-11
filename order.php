 <?php

require('connection.php');



?> 

<?php

if(isset($_POST['smwtype']) && $_POST['smwtype'] == "smartwatches"){
    $type = "smartwatches";
}
else if(isset($_POST['smwtype']) && $_POST['smwtype'] == "mobiles"){
    $type = "mobiles";    
}
else if(isset($_POST['smwtype']) && $_POST['smwtype'] == "accessories"){
    $type = "accessories";    
}


 $name = $_POST['smwname'];
 $srno = $_POST['smwsrno'];

                $selordersql = "SELECT * FROM `$type` WHERE `Sr.no` =  '$srno'";
                $selorderquery = mysqli_query($connection,$selordersql);
                if(!$selorderquery){
                    echo "Failed".mysqli_error($connection);
                }
                $selorderrow1 = mysqli_fetch_assoc($selorderquery);

                $smwprice = $selorderrow1['item_price'];
                $smw_img_no = $selorderrow1['img_no'];
                $format = number_format($smwprice);
                

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



<div id="imageModal">
    <div class="imgModalMain" id="MainMIng">
        <i class="fas fa-times" id="ExitModal"></i>
        <img src="" alt="" id="ModImg">
    </div>
</div>

    <?php
        include('loader.html');
        require("mobi_nav.php");


        ?>
    <?php
    
        if(isset($_POST['smwtype']) && $_POST['smwtype'] == "smartwatches"){
            $catType = "smartwatches";
            echo '<section id="order-sec">
        <section id="circle-slider-sec">
            <div class="circle-slider-main">
                <div class="arrow-prev c-arrows"><i class="fas fa-chevron-circle-left" id="cslidePrev1"></i></div>
                <div class="sliderCircle sliderCircleLeft" id="cslideLeft">';
                    for($smwImg = 0;$smwImg < $smw_img_no;$smwImg++){
                        $un1 = $smwImg + 1;
                        echo '<img class="csImg" src="images/smartwatches/'.$name.'/'.$name.'-'.$un1.'.jpg" alt="">';
                    }
                echo '</div>
                <div class="sliderCircle sliderCircleCenter" id="cslideCenter">';
                    for($smwImg1 = 0;$smwImg1 < $smw_img_no;$smwImg1++){
                        $un2 = $smwImg1 + 1;
                        echo '<img class="csImg" src="images/smartwatches/'.$name.'/'.$name.'-'.$un2.'.jpg" alt="">';
                    }      
                echo '</div>
                <div class="sliderCircle sliderCircleRight" id="cslideRight">';
                    for($smwImg2 = 0;$smwImg2 < $smw_img_no;$smwImg2++){
                        $un3 = $smwImg2 + 1;
                        echo '<img class="csImg" src="images/smartwatches/'.$name.'/'.$name.'-'.$un3.'.jpg" alt="">';
                    } 
                echo '</div>
                <div class="arrow-next c-arrows"><i class="fas fa-chevron-circle-right" id="cslideNext1"></i></div>
            </div>
        </section>
        <div class="name_price">
            <div class="fnp">'.$name.'</div>
            <div class="snp">'.$format.' PKR</div>
        </div>
        <div id="order-right">
            <h2>Specifications</h2>';

                
                $num = mysqli_num_rows($selorderquery);
                if($num == 1){
                    $selordersql1 = "SELECT * FROM `smartwatches` WHERE `Sr.no` =  '$srno'";
                    $selorderquery1 = mysqli_query($connection,$selordersql1);
                    if(!$selorderquery1){
                        echo "Failed".mysqli_error($connection);
                    }
                    while($selorderrow = mysqli_fetch_assoc($selorderquery1)){
                        $price=$selorderrow['item_price'];
                        $buyName=$selorderrow['item_name'];
                        $item_desc=$selorderrow['item_desc'];
                        $color_no = $selorderrow['color_no'];
                        $smwClr = $selorderrow['color-2'];
                        echo "<div class='order-item-desc'>$item_desc</div>";
                    }
                }



                
            

            echo '<div id="order_right_desc">

                    <div>
                    <select form="BuyForm" name="Qty" class="selQty qtyClr">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                    </select>
                    <div class="smw-clrs">';
                    if($color_no>0){
                        echo '<select form="BuyForm" name="Clr" class="CartColor qtyClr">';
                            for($csmw = 1;$csmw <= $color_no;$csmw++){
                                $selordersql2 = "SELECT * FROM `smartwatches` WHERE `Sr.no` =  '$srno'";
                                $selorderquery2 = mysqli_query($connection,$selordersql2);
                                $rowSql = mysqli_fetch_assoc($selorderquery2);
                                $smwClr = $rowSql['color-'.$csmw.''];
                                echo'<div class="smwClr">
                                    <option value-"'.$smwClr.'">'.$smwClr.'</option>
                            </div>';
                    }
                    echo '</select>';
                    }
                    else{
                        echo '<select form="BuyForm" name="Clr" class="CartColor" style="display:none;">
                                <option value-"No Color">No Color</option>
                        </div>';
                echo '</select>';
                    }
                    echo '</div>
                    <input type="hidden" name="smwsrno" value="'.$srno.'">                             
                    <input type="hidden" name="smwtype" value=""> 
                    <input type="submit" name="smwname" value="">
                    <input type="hidden" class="sno" name="smwsrnoCart" value="'.$srno.'">                             
                    <input type="hidden" class="qty" name="qty" value="">
                    <input type="hidden" class="type" name="smwtypeCart" value="'.$catType.'"> 
                    <input type="hidden" class="name" name="smwnameCart" value="">
                    <input type="hidden" class="price" name="smwpriceCart" value="">
                    <button class="cartBtn addCartBtn">Add to Cart</button>  
                    <form name="BuyForm" id="BuyForm" action="confirm" method="POST">
                    <input type="hidden" name="buysno" value="'.$srno.'">
                    <input type="hidden" name="buyname" value="'.$buyName.'">
                    <input type="hidden" name="buyprice" value="'.$price.'">
                    <input type="hidden" name="buycat" value="'.$catType.'">
                    <input type="hidden" name="action" value="buy">
                    <button type="submit" class="buyBtn">Buy</button>     
                    </form>         
                    </div>
    
    
    
        </section>';
        }
        else if(isset($_POST['smwtype']) && $_POST['smwtype'] == "accessories"){
            $catType = "accessories";
            echo '<section id="order-sec">
        <section id="circle-slider-sec">
            <div class="circle-slider-main">
                <div class="arrow-prev c-arrows"><i class="fas fa-chevron-circle-left" id="cslidePrev1"></i></div>
                <div class="sliderCircle sliderCircleLeft" id="cslideLeft">';
                    for($smwImg = 0;$smwImg < $smw_img_no;$smwImg++){
                        $un1 = $smwImg + 1;
                        echo '<img class="csImg" src="images/accessories/'.$name.'/'.$name.'-'.$un1.'.jpg" alt="">';
                    }
                echo '</div>
                <div class="sliderCircle sliderCircleCenter" id="cslideCenter">';
                    for($smwImg1 = 0;$smwImg1 < $smw_img_no;$smwImg1++){
                        $un2 = $smwImg1 + 1;
                        echo '<img class="csImg" src="images/accessories/'.$name.'/'.$name.'-'.$un2.'.jpg" alt="">';
                    }      
                echo '</div>
                <div class="sliderCircle sliderCircleRight" id="cslideRight">';
                    for($smwImg2 = 0;$smwImg2 < $smw_img_no;$smwImg2++){
                        $un3 = $smwImg2 + 1;
                        echo '<img class="csImg" src="images/accessories/'.$name.'/'.$name.'-'.$un3.'.jpg" alt="">';
                    } 
                echo '</div>
                <div class="arrow-next c-arrows"><i class="fas fa-chevron-circle-right" id="cslideNext1"></i></div>
            </div>
        </section>
        <div class="name_price">
            <div class="fnp">'.$name.'</div>
            <div class="snp">'.$format.' PKR</div>
        </div>
        <div id="order-right">
            <h2>Specifications</h2>';

            $num = mysqli_num_rows($selorderquery);
            if($num == 1){
                $selordersql1 = "SELECT * FROM `accessories` WHERE `Sr.no` =  '$srno'";
                $selorderquery1 = mysqli_query($connection,$selordersql1);
                if(!$selorderquery1){
                    echo "Failed".mysqli_error($connection);
                }
                while($selorderrow = mysqli_fetch_assoc($selorderquery1)){
                    $price=$selorderrow['item_price'];
                    $buyName=$selorderrow['item_name'];
                    $color_no = $selorderrow['color-no'];
                    $smwClr = $selorderrow['color-2'];
                    $col_no = $selorderrow['col_no'];
                    echo "<div class='order-item-desc'>
                        <div class='desc-ul'>
                            <ul>";
                            for($collv = 1;$collv<=$col_no;$collv++){
                                $col = $selorderrow['col-'.$collv.''];
                                echo "<li>$col</li>";
                            }
                            "</ul>
                        </div>
                    </div>";
                }
            }



                
            

            echo '<div id="order_right_desc">

                    <div>
                    <select form="BuyForm" name="Qty" class="selQty qtyClr">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                    </select>
                    <div class="smw-clrs">';
                    if($color_no>0){
                        echo '<select form="BuyForm" name="Clr" class="CartColor qtyClr">';
                            for($csmw = 1;$csmw <= $color_no;$csmw++){
                                $selordersql2 = "SELECT * FROM `accessories` WHERE `Sr.no` =  '$srno'";
                                $selorderquery2 = mysqli_query($connection,$selordersql2);
                                $rowSql = mysqli_fetch_assoc($selorderquery2);
                                $smwClr = $rowSql['color-'.$csmw.''];
                                echo'<div class="smwClr">
                                    <option value-"'.$smwClr.'">'.$smwClr.'</option>
                            </div>';
                    }
                    echo '</select>';
                    }
                    else{
                        echo '<select form="BuyForm" name="Clr" class="CartColor" style="display:none;">
                                <option value-"No Color">No Color</option>
                </select>';
                    }
                    echo '</div>
                    <input type="hidden" name="smwsrno" value="'.$srno.'">                             
                    <input type="hidden" name="smwtype" value=""> 
                    <input type="submit" name="smwname" value="">
                    <input type="hidden" class="sno" name="smwsrnoCart" value="'.$srno.'">                             
                    <input type="hidden" class="qty" name="qty" value="">
                    <input type="hidden" class="type" name="smwtypeCart" value="'.$catType.'"> 
                    <input type="hidden" class="name" name="smwnameCart" value="">
                    <input type="hidden" class="price" name="smwpriceCart" value="">
                    <button class="cartBtn addCartBtn">Add to Cart</button>  
                    <form name="BuyForm" id="BuyForm" action="confirm" method="POST">
                    <input type="hidden" name="buysno" value="'.$srno.'">
                    <input type="hidden" name="buyname" value="'.$buyName.'">
                    <input type="hidden" name="buyprice" value="'.$price.'">
                    <input type="hidden" name="buycat" value="'.$catType.'">
                    <input type="hidden" name="action" value="buy">
                    <button type="submit" class="buyBtn">Buy</button>     
                    </form>         
                    </div>
    
    
    
        </section>';
        }

        else if(isset($_POST['smwtype']) && $_POST['smwtype'] == 'mobiles'){
            $catType = "mobiles";
            echo '<section id="order-sec">
            <section id="circle-slider-sec">
                <div class="circle-slider-main">
                    <div class="arrow-prev c-arrows"><i class="fas fa-chevron-circle-left" id="cslidePrev1"></i></div>
                    <div class="sliderCircle sliderCircleLeft" id="cslideLeft">';
                        for($smwImg = 0;$smwImg < $smw_img_no;$smwImg++){
                            $un1 = $smwImg + 1;
                            echo '<img class="csImg" src="images/mobiles/'.$name.'/'.$name.'-'.$un1.'.jpg" alt="">';
                        }
                    echo '</div>
                    <div class="sliderCircle sliderCircleCenter" id="cslideCenter">';
                        for($smwImg1 = 0;$smwImg1 < $smw_img_no;$smwImg1++){
                            $un2 = $smwImg1 + 1;
                            echo '<img class="csImg" src="images/mobiles/'.$name.'/'.$name.'-'.$un2.'.jpg" alt="">';
                        }      
                    echo '</div>
                    <div class="sliderCircle sliderCircleRight" id="cslideRight">';
                        for($smwImg2 = 0;$smwImg2 < $smw_img_no;$smwImg2++){
                            $un3 = $smwImg2 + 1;
                            echo '<img class="csImg" src="images/mobiles/'.$name.'/'.$name.'-'.$un3.'.jpg" alt="">';
                        } 
                    echo '</div>
                    <div class="arrow-next c-arrows"><i class="fas fa-chevron-circle-right" id="cslideNext1"></i></div>
                </div>
            </section>
            <div class="name_price">
                <div class="fnp">'.$name.'</div>
                <div class="snp">'.$format.' PKR</div>
            </div>
            <div id="order-right">
                <h2>Specifications</h2>';
    
                    
                    $num = mysqli_num_rows($selorderquery);
                    if($num == 1){
                        $selordersql1 = "SELECT * FROM `mobiles` WHERE `Sr.no` =  '$srno'";
                        $selorderquery1 = mysqli_query($connection,$selordersql1);
                        if(!$selorderquery1){
                            echo "Failed".mysqli_error($connection);
                        }
                        while($selorderrow = mysqli_fetch_assoc($selorderquery1)){
                            $price=$selorderrow['item_price'];
                            $buyName=$selorderrow['item_name'];
                            $color_no = $selorderrow['color_no'];
                            $smwClr = $selorderrow['color-2'];
                            $col_no = $selorderrow['col_no'];
                            echo "<div class='order-item-desc'>
                                <div class='desc-ul'>
                                    <ul>";
                                    for($collv = 1;$collv<=$col_no;$collv++){
                                        $col = $selorderrow['col-'.$collv.''];
                                        echo "<li>$col</li>";
                                    }
                                    "</ul>
                                </div>
                            </div>";
                        }
                    }
    
    
    
                    
                
    
                    echo '<div id="order_right_desc">

                    <div>
                    <select name="Qty" class="selQty qtyClr" form="BuyForm">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                    </select>
                    <div class="smw-clrs">';
                    if($color_no>0){
    
                        echo '<select form="BuyForm" name="Clr" class="CartColor qtyClr">';
                            for($csmw = 1;$csmw <= $color_no;$csmw++){
                                $selordersql2 = "SELECT * FROM `mobiles` WHERE `Sr.no` =  '$srno'";
                                $selorderquery2 = mysqli_query($connection,$selordersql2);
                                $rowSql = mysqli_fetch_assoc($selorderquery2);
                                $smwClr = $rowSql['color-'.$csmw.''];
                                echo'<div class="smwClr">
                                    <option value-"'.$smwClr.'">'.$smwClr.'</option>
                            </div>';
                    }
                    echo '</select>';
                    }
                    else{
                        echo '<select form="BuyForm" name="Clr" class="CartColor" style="display:none;">
                                <option value-"No Color">No Color</option>
                </select>';
                    }
 
                    echo '</div>
                    <input type="hidden" name="smwsrno" value="'.$srno.'">                             
                    <input type="hidden" name="smwtype" value=""> 
                    <input type="submit" name="smwname" value="">
                    <input type="hidden" class="sno" name="smwsrnoCart" value="'.$srno.'">                             
                    <input type="hidden" class="qty" name="qty" value="">
                    <input type="hidden" class="type" name="smwtypeCart" value="'.$catType.'"> 
                    <input type="hidden" class="name" name="smwnameCart" value="">
                    <input type="hidden" class="price" name="smwpriceCart" value="">
                    <button class="cartBtn addCartBtn">Add to Cart</button>  
                    <form name="BuyForm" id="BuyForm" action="confirm" method="POST">
                    <input type="hidden" name="buysno" value="'.$srno.'">
                    <input type="hidden" name="buyname" value="'.$buyName.'">
                    <input type="hidden" name="buyprice" value="'.$price.'">
                    <input type="hidden" name="buycat" value="'.$catType.'">
                    <input type="hidden" name="action" value="buy">
                    <button type="submit" class="buyBtn">Buy</button>     
                    </form>         
                    </div>
    
    
    
        </section>';
        }
    

    ?>

    

    <?php
        
            require("footer.html");
    
    ?>



    <script src="jquery/jquery-3.5.1.min.js"></script>
    <script src="js/mySlider.js"></script>
    <script src="js/mobi.js"></script>
    <script src="all.min.js"></script>
    <script src="js/loader.js"></script>
    <script src="all_cart.js"></script>
    <!-- <script>
                    function add_cart_table(){
                $.ajax({
                    url : "view_cart.php",
                    type : "POST",
                    success : function(data){
                        $("#cartData").html(data);
                    }
                });
            }
            add_cart_table();
    </script> -->



</body>

</html>