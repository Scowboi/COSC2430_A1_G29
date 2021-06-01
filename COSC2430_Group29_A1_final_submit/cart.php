<?php
session_start();
require("read_data.php");
$title = [];
$pricestr = [];
$imageSrc = "";
$iniquantity = [];
$all_products = read_products();
if (isset($_SESSION['products']) && !empty($_SESSION['products'])){
    foreach($all_products as $pd => $col){
        $count=0;
        foreach($_SESSION['products'] as $added){
            if ($added == $col['id']){
                $count++;
            }
        }
        if ($count > 0){
            $title[] = $col['name'];
            $pricestr[] = $col['price'];
            $iniquantity[]=$count;
        }
    }
}
// echo '<pre>';
// for($x = 0; $x < count($title); $x++){
// var_dump($iniquantity[$x]);}
// echo '</pre>';


?>



<!DOCTYPE html>
    <head>
        <meta charset="utf-8">
        <title>Your Cart</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">


        <link rel="stylesheet" href="styles.css">
        <script src="cart-script.js" async></script>
    </head>
    <body>
    <!--header bar-->
    <header>
		<div id="header">
		  <section id ='headerLogo'>
			<img src="images/Logo.png" alt ="headrLogo">
		  </section>
		  <nav id="headerNav">
			  <a href="index.php">Home</a>
			  &emsp;
			  <a href="login.php">Account</a>
			  &emsp;
			  <a href="cart.php">Cart</a>
		  </nav>
		  <p id="headerP">
			Welcome to the mall
		  </p>
	  </div>
	  </header>
    <!--cart detail-->
    <main>
        <div class="container content-group">
            <h2 class="cart-header">CART</h2>
            <div class="cart-row">
                <span class="cart-item cart-header cart-column">ITEM</span>
                <span class="cart-price cart-header cart-column">PRICE</span>
                <span class="cart-quantity cart-header cart-column">QUANTITY</span>
            </div>
            <div class="cart-items">
            </div>

            <div class="cart-total">
                <strong class="cart-total-title">Sumary</strong>
                <span class="cart-total-price">$0</span>
            </div>

            <div class="cart-coupon">
                <strong class="cart-total-title">Coupon</strong>
                <input type="text" width="30px">
            </div>

            <div class="cart-final">
                <strong class="cart-final-title">Total</strong>
                <span class="cart-total-price">$0</span>
            </div>


            
            <div class="cart-btn">
               <a href="../Store Pages/product-details.html"> <button class="btn btn-primary btn-continue" type="button">Continue Shopping</button></a>
                <a href="thank_you.html"><button class="btn btn-primary btn-purchase" type="button">PURCHASE</button></a>
            </div>
        </div>

        <?php
            if(count($title) > 0){
                for($x = 0; $x < count($title); $x++){
                    echo '<script defer> addItemToCart("'.$title[$x].'","'.$pricestr[$x].'","'.$imageSrc.'","'.$iniquantity[$x].'") </script>';
                }
            }
        ?>
    </main>

    <!--footer bar-->
    <footer>
    <div id=footerDiv>
		<nav>
			<a href="mallCopyright.html">Copyright</a>
			&emsp;
			<a href="mallTermsOfService.html">Term of Service</a>
			&emsp;
			<a href="mallPrivacyPolicy.html">Privacy Policy</a>
			&emsp;
			<a href="mallAboutUs.html">About us</a>
			&emsp;
			<a href="mallFees.html">Our Fees</a>
			&emsp;
			<a href="contact_form.html">Contact</a>
			&emsp;
			<a href="FAQ.html">FAQ</a>
		</nav>
	</div>
</footer>
    </body>
</html>
