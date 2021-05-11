$(document).ready(function(){

//Add Cart
function add_cart(){
    var cartBtn = document.getElementsByClassName('cartBtn');
    Array.from(cartBtn).forEach((element)=>{
        element.addEventListener("click",(e)=>{
            pn = e.target.parentNode;
            var pnsno = pn.getElementsByTagName("input")[3].value;    
            var pncat = pn.getElementsByTagName("input")[5].value;
            var pnsel = pn.getElementsByTagName("select")[0].value;
            var pnclr = pn.getElementsByTagName("select")[1].value;
            console.log(pn);
            // var pnclr = pn.getElementsByTagName("input")[8].value;
            // var Clr = document.getElementsByClassName("CartColor");
            // console.log(Clr.value);
            var action = "add";
            $.ajax({
                url : "all_cart.php",
                type : "POST",
                data : {cartsno : pnsno , cartcat : pncat , action : action , cartqty : pnsel , cartclr : pnclr},
                success : function(cartdata){
                    view_cart_table();
                    deleteCart();
                    update_cart();
                    // alert(cartdata);
                }
            });
        });
    });
}
add_cart();

//View Cart            
function view_cart_table(){
    $.ajax({
        url : "all_cart.php",
        type : "POST",
        data : {action : "view"},
        success : function(data){
            $("#cartData").html(data);
            deleteCart();
            update_cart();

            var length = document.getElementsByClassName("product").length;
            var cartNumber = document.getElementById("cartNumber");
            cartNumber.innerHTML = length;
        }
    });
}
view_cart_table();

//Update Cart
function update_cart(){
    var cartClr = document.getElementsByClassName("cartClr");
    Array.from(cartClr).forEach((element)=>{
        element.addEventListener("change", (e)=>{
            var uppn = e.target.parentNode.parentNode;
            var upname = uppn.getElementsByTagName("input")[0].value;
            var upsno = uppn.getElementsByTagName("input")[1].value;
            var upcat = uppn.getElementsByTagName("input")[2].value;
            var upprice = uppn.getElementsByTagName("input")[3].value;
            var upclr = uppn.getElementsByTagName("input")[4].value;
            console.log(uppn);

            var value = element.value;
            $.ajax({
                url : "all_cart.php",
                type: "POST",
                data: {value: value , action: "update" , upname : upname , upsno : upsno , upcat : upcat , upprice : upprice , upcolor: upclr},
                success : function(data){
                    // alert(data);
                    view_cart_table();
                    deleteCart();
                }
            });
            // add_cart();
      });
    });
}
// update_cart();

//Delete Cart

function deleteCart(){
    var deleteCartPro = document.getElementsByClassName("deleteCartPro");
    Array.from(deleteCartPro).forEach((element)=>{
        element.addEventListener("click" , (e)=>{
            section = e.target.parentNode.parentNode.parentNode;
            name = section.getElementsByTagName("input")[0].value;
            sno = section.getElementsByTagName("input")[1].value;
            cat = section.getElementsByTagName("input")[2].value;
            var action = "delete";
                $.ajax({
                    url: "all_cart.php",
                    type: "POST",
                    data: {proName: name,proSno: sno,proCat: cat , action : action},
                    success: function(data){
                        // alert(data);
                        $("#cartData").html(data);
                        view_cart_table();
                        deleteCart();
                        update_cart();
                    }
                });
        });
      });
}
deleteCart();
});
