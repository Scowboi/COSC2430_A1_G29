<?php

require("read_data.php");
session_start();
if(!isset($_GET['pid'])){
    header("location: index.php");
}
$product_id = $_GET['pid'];
$all_products = read_products();

function print_product_detail($products,$product_id){
    foreach($products as $pd => $col){
        if($col['id'] == $product_id){
            echo<<<"DETAILS"
                <h1 class="product-title">{$col['name']}</h1>
                <img class="product-img" src="images/Laptop Asus.png" width="300" alt="Laptop Asus">
                <p>Price: <span class="product-price">{$col['price']}</span></p>
                <p>Description:</p>
            DETAILS;
        }

    }
}


if(isset($_GET['act'])){
    $_SESSION['products'][] = $product_id;
}

// echo "<pre>";
// var_dump($_SESSION['products']);
// echo "</pre>";
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="uft-8">
        <meta name='viewport' content="width=device-width, initial-scale=1">
        <title>Product Detail</title>
    </head>
    <style>
        header {
            font-size: 30px;
            background-color: aqua;
            position: fixed;
            top: 0;
        }
        footer {
            font-size: large;
        }
        main {
            margin-top: 40px;
        }
        h1 {
            color: red;
        }
        details {
            float: right;
        }
        button {
            display: inline-block;
            width: 100px;
            height: 30px;
            font-size: 16px;
        }
        h3 {
            color:coral;
            background-color: yellow;
            font-size: 50px;
        }
    </style>
    <body>
        <header>
            <nav>
                <a href="store-pages.php">HOME</a>
                &emsp;
                <a href="about-us.html">ABOUT US</a>
                &emsp;
                <a href="store-pages.php">CONTACT</a> <!-- Use 5.1.6 Contact link-->
                &emsp;
            </nav>
        </header>
        <br>
        <!-- <script> now use PHP
            function adder(){
                var product_name = document.getElementsByClassName('product-title')[0].innerText;
                var priceNum = document.getElementsByClassName('product-price')[0].innerText;
                var imgSRC = document.getElementsByClassName('product-img')[0].src
               alert("THIS PRODUCT HAS BEEN ADDED TO THE SHOPPING CART!");
               alert("PLEASE REFRESH THE SHOPPING CART PAGE TO SEE CHANGES")
               if (typeof(Storage) !== "undefined") {

                   if (localStorage.quantityNumber) {
                       localStorage.product = product_name;
                       localStorage.price = priceNum;
                       localStorage.quantityNumber = Number(localStorage.quantityNumber) + 1;
                       localStorage.image = imgSRC;
                   }
                   else {
                        localStorage.product = product_name
                       localStorage.quantityNumber = 1;
                       localStorage.price = priceNum;
                       localStorage.image = imgSRC;
                   }
               }
               else {}
            }
        </script> -->
        <main>
            <?php print_product_detail($all_products,$product_id); ?>
            <!-- Original image below sourced for educational purposes:
                https://dienmaythienhoa.vn/may-tinh-xach-tay-asus-core-i5-s330fn-ey037t-mau-vang-253432.html -->

            <form action="" method="GET" id="thisform" >
                <input type="hidden" name="act" value="" class="invisible">
                <input type="hidden" name="pid" value="<?php echo $product_id; ?>" class="invisible">
            <button type="submit" form="thisform" value="Add">Add</button>
                &emsp;
            </form> 
            
            <a href="cart.php"><button value="BUY">Buy Now!</button></a>

            <br>
            <br>
            <br>
            <br>
            <h3>Recommended Products</h3>
            
            <br>
        </main>
        <footer>
            <div>
                <nav>
                    <a href="store-copyright.html">Copyright</a>
                    &emsp;
                    <a href="store-tos.html">Term of Service</a>
                    &emsp;
                    <a href="store-privacy-policy.html">Privacy Policy</a>
                </nav>
            </div>
        </footer>
    </body>
</html>
