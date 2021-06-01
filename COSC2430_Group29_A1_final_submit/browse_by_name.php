<?php
require("read_data.php");

$stores = read_stores();
$selected = "";
$condition = true;

if(!isset($_GET["letter"])){
  $condition = false;
}
else{
  $selected = $_GET["letter"];
  $condition = true;
} 
function display_name_stores($stores,$selected){
    $count = 0; 
    $numstring = "0123456789";
  foreach($stores as $store => $col){
    $first_letter = $col["name"][0];
    
  
    if ((strtoupper($first_letter) == strtoupper($selected)) || (strpos($numstring,$first_letter) && ($selected == "num"))){
      echo<<<"MATCHSTORE"
      <div class="store" id="{$col["id"]}">
          <a href="store-pages.php?store_id={$col["id"]}"><img src="images/Amd.png" alt="Storeimage" class="store-logo"></a>
          <a href="store-pages.php?store_id={$col["id"]}" class="sname">{$col["name"]}</a>
      </div>
      MATCHSTORE;
      $count++;
      }
}
    if ($count == 0 ){
      echo "<h3>No stores found.</h3>";
    }

}
// var_dump($_GET["letter"]);
// var_dump($selected);

// if ($selected == "#"){
//   echo "ok";
// }
// else{
//   echo "error";
// }


function print_letters($select){
  for ($x = 65; $x <= 90; $x++){
    $letter = chr($x);
    if ($select == $letter){
      echo<<<"CHARSE"
      <a href="browse_by_name.php?letter={$letter}" class="letter Lselected">{$letter}</a>
      CHARSE;
    }
    
    else{
      echo<<<"CHAR"
      <a href="browse_by_name.php?letter={$letter}" class="letter">{$letter}</a>
      CHAR;
    }
    }

    if ($select == "num"){
      echo<<<"NUMSE"
      <a href="browse_by_name.php?letter=num" class="letter Lselected">#</a>
      NUMSE;
    }
    
    else{
      echo<<<"NUM"
      <a href="browse_by_name.php?letter=num" class="letter">#</a>
      NUM;
    }
  }



// $selected = $_GET["letter"];


?>


<!Doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="browse-styles.css">
    <title>Browse Store</title>
</head>
<body>
    <!--header-->
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
      <main class="container">
    <!--store list-->
    <h1>Browse by name</h1>
    <div class="letter-opt">
      <?php print_letters($selected); ?>
        <!-- <a href="index.php?letter=A" class="letter">A</a>
        <a href="" class="letter">B</a>
        <a href="" class="letter">C</a>
        <a href="" class="letter">D</a>
        <a href="" class="letter">E</a>
        <a href="" class="letter">F</a>
        <a href="" class="letter">G</a>
        <a href="" class="letter">H</a>
        <a href="" class="letter">I</a>
        <a href="" class="letter">J</a>
        <a href="" class="letter">K</a>
        <a href="" class="letter">L</a>
        <a href="" class="letter">M</a>
        <a href="" class="letter">N</a>
        <a href="" class="letter">O</a>
        <a href="" class="letter">P</a>
        <a href="" class="letter">Q</a>
        <a href="" class="letter">R</a>
        <a href="" class="letter">S</a>
        <a href="" class="letter">T</a>
        <a href="" class="letter">U</a>
        <a href="" class="letter">V</a>
        <a href="" class="letter">W</a>
        <a href="" class="letter">X</a>
        <a href="" class="letter">Y</a>
        <a href="" class="letter">Z</a> -->
        <!--nav to browse by category-->
        <div class="cate-nav">
            <a href="browse_by_category.php">browse by category</a>
        </div>
    </div>

    
    
        <div class="show-stores">
              <?php
              if ($condition === true){
                display_name_stores($stores,$selected);
              }
              else{
                echo "<h3>Please select one letter</h3>";
              }
              ?>
            <!-- <div class="store">
                <a href="Store Pages/store-pages.html"><img src="images/Amd.png" alt="store1 logo" class="store-logo"></a>
                <a href="Store Pages/store-pages.html" class="sname">AMD</a>
            </div>
    
            <div class="store">
                <a href="Store Pages/store-pages.html"><img src="images/Apple.png" alt="store2 logo" class="store-logo"></a>
                <a href="Store Pages/store-pages.html" class="sname">Apple</a>
            </div> -->
<!-- 
        <div class="store">
            <a href=""><img src="store.jpg" alt="store3 logo"></a>
            <a href="" class="sname">store3</a>
        </div>

        <div class="store">
            <a href=""><img src="store.jpg" alt="store4 logo"></a>
            <a href="" class="sname">store4</a>
        </div>

        <div class="store">
            <a href=""><img src="store.jpg" alt="store5 logo"></a>
            <a href="" class="sname">store5</a>
        </div>

        <div class="store">
            <a href=""><img src="store.jpg" alt="store6 logo"></a>
            <a href="" class="sname">store6</a>
        </div>-->
    </div> 
</main>
    <!--footer-->
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
