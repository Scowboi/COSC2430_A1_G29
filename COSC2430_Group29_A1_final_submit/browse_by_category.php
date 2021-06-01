<?php

require("read_data.php");

// echo "<pre>";
// var_dump(read_categories());
// echo "</pre>";



function print_categories(){
  $default = "1";
  $categories = read_categories();
  if(isset($_GET["category"])){
    foreach ($categories as $cnum => $item){
      if ($_GET["category"] == $item["name"]){
        $default = $item["id"];
      }
    }
  }
  foreach ($categories as $c => $i){
    if ($i["id"] == $default){
    echo<<<"CATEDE"
    <option value="{$i["name"]}" id = "{$i["id"]}" selected>{$i["name"]}</option>
    CATEDE;}
    else{
      echo<<<"CATE"
      <option value="{$i["name"]}" id = "{$i["id"]}">{$i["name"]}</option>
      CATE;
    }
    
  }
  return  $default;
}



function display_stores(){
  $default = "1";
  $categories = read_categories();
  $stores = read_stores();
  if(isset($_GET["category"])){
      foreach ($categories as $cnum => $item){
        if ($_GET["category"] == $item["name"]){
          $default = $item["id"];
        }
      }
    }
  foreach($stores as $store => $col){
      $count = 0;
      if ($col["category_id"] == $default){
        echo<<<"MATCHSTORE"
        <div class="store" id="{$col["id"]}">
            <a href="store-pages.php?store_id={$col["id"]}"><img src="images/Amd.png" alt="Storeimage" class="store-logo"></a>
            <a href="store-pages.php?store_id={$col["id"]}" class="sname">{$col["name"]}</a>
        </div>
        MATCHSTORE;
        $count++;
        }

      }

    if ($count = 0 ){
      echo "No stores found.";
    }
  }



// function get_category(){
//     $fp = fopen("categories.csv", "r");
//     flock($fp, LOCK_EX);
//     while ($line = fgets($fp))
//         $records[] = explode(",", $line);
//     flock($fp, LOCK_UN);
//     fclose($fp);
  
//     $fp = fopen("categories.csv", "r");
//     flock($fp, LOCK_SH);
//     $headings = fgetcsv($fp);
//     while ($aLineOfCells = fgetcsv($fp)) {
//         $records[] = $aLineOfCells;
//     }
//     flock($fp, LOCK_UN);
//     fclose($fp);
// return $records;}
 

// function category_option(){
//   $new_records = get_category();
//   // echo "<pre>";
//   // var_dump($new_records);
//   // echo "</pre>";
//   foreach ($new_records as $index => $value){
//     if($index != 0){
//     echo<<<"CATE"
//     <option value="{$value[1]}" id = "{$value[0]}">{$value[1]}</option>
//     CATE;
//     }
// } 

    

//   }
//   echo "<pre>";
//   var_dump($_GET);
//   echo "</pre>";
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
    <!--store list-->
    <main class="container">
    <h1>Browse by Category</h1>
    <div class="category-opt">
        <form action="" method="GET">
        <select name="category" id="cate-select" style="width:250px;" onchange="this.form.submit()">
        <?php print_categories();?>
        </select>

        <!--nav to browse by category-->
        <div class="cate-nav">
            <a href="browse_by_name.php">browse by name</a>
        </div>
    </div>

    <!--each link to the stores-->
    <div class="show-stores">


      <?php
      display_stores();
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
