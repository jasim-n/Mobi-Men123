
            <table>
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
                session_start();

                    $total_price = 0;
    
                    $cat = $_SESSION['cate'];
                    $name = $_SESSION['name'];
                    $price = $_SESSION['price'];
                    $qty = $_SESSION['qty'];
                    $productName = $_SESSION['productName'];
                

                echo "<tr>";
                $proarr = array($_SESSION);
                echo "<br>";
                $proarr1 = array($_SESSION);
                $serialno = 1;
                foreach ($_SESSION['or1'] as $products){
                    if(is_array($products)){
                        foreach($products as $product){
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

                    }
                }
                $total_price_format = number_format($total_price);
                echo "<tr><td>Total</td><td></td><td>$total_price_format PKR</td><td></td></tr>";
                echo "</section>";  
                ?>      
            </tbody>
        </table>

