<?php

    require('connection.php');

?>  
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/mobi.css">
    <link rel="stylesheet" href="all.min.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css">
    <title>Mobi Men</title>



</head>

<body>

<?php

    include('loader.html');
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

<section id="smw-sec">





</section>

 







    <?php
    
            require("footer.html");
    
    ?>








    <script src="jquery/jquery-3.5.1.min.js"></script>
    <script src="jquery/typed.js"></script>
    <script src="js/mobi.js"></script>
    <script src="all.min.js"></script>
    <script src="cycle/cycle2.js"></script>


    <script>
        $(document).ready(function(){ 


            function loadSmwData(){
                $.ajax({
                    url : "Load.php",
                    type : "POST",
                    data : {load:true , cat:"mobiles"},
                    success : function(smwData){
                        $("#smw-sec").html(smwData);
                    }
                });
            }
            loadSmwData();

            $("#navSearchBar").on("keyup" , function(){
                var smwSearchVal = $("#navSearchBar").val();

                load = false;
                $.ajax({
                    url : "SearchLive.php",
                    type : "POST",
                    data : {smwSearchValue : smwSearchVal , scat:"mobiles"},
                    success : function(smwSearch){
                        $("#smw-sec").html(smwSearch);
                    }
                });

            });


        });


    </script>




</body>

</html>