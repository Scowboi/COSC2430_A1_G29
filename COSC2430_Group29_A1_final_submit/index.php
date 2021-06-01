<?php

function write_normal_stores(){
$normal_stores = array();
$file = fopen('stores.csv', 'r');

while (($result = fgetcsv($file)) !== false)
{
    if($result[4] == 'FALSE'){
    $normal_stores[] = $result;
    }
   
}
fclose($file);

if(count($normal_stores) > 10){
    for($x = 0; $x <= 9; $x++){
        $name = $normal_stores[$x]['1'];
        echo<<<"STORE"
        <div>
            <a href="store-pages.php?store_id={$normal_stores[$x]['0']}"><img src="images/Amd.png" width="40px"  height="40px" alt="amd-logo"></a>
            <a href="store-pages.php?store_id={$normal_stores[$x]['0']}"><p>$name</p></a>
        </div>
        STORE;
        }
    }

  if(count($normal_stores) <= 10){
      for($x = 0; $x <= count($normal_stores)-1; $x++){
          $name = $normal_stores[$x]['1'];
          echo<<<"STORE"
          <div>
              <a href="store-pages.php?store_id={$normal_stores[$x]['0']}"><img src="images/Amd.png" width="40px"  height="40px" alt="amd-logo"></a>
              <a href="store-pages.php?store_id={$normal_stores[$x]['0']}"><p>$name</p></a>
          </div>
          STORE;
          }
      }
}


function write_normal_products(){
  $normalp_csv = array();
  $file = fopen('products.csv', 'r');
  
  while (($result = fgetcsv($file)) !== false)
  {
      if($result[5] == 'FALSE'){
      $normalp_csv[] = $result;
      }
     
  }
  fclose($file);

    $store_csv = array();
    $file2 = fopen('stores.csv', 'r');
    while (($result2 = fgetcsv($file2)) !== false){
      $store_csv[] = $result2;
    }
    fclose($file2); 
    $stores_name = array ();
    if(count($normalp_csv) <= 10){
    for($x = 0; $x <= count($normalp_csv)-1; $x++){
      $normlap_id = $normalp_csv[$x]['4'];
      foreach($store_csv as $key1 => $st_name){
        if($st_name['0'] == $normlap_id){
          $stores_name[] = $st_name['1'];
      }
    }
  }
}
   else if(count($normalp_csv) > 10)
    for($x = 0; $x <= 9; $x++){
  $normlap_id = $normalp_csv[$x]['4'];
  foreach($store_csv as $key1 => $st_name){
        if($st_name['0'] == $normlap_id){
          $stores_name[] = $st_name['1'];
        }
      } 
    }
      
      for($x = 0; $x <= 9; $x++){
          $name = $normalp_csv[$x]['1'];
          $price = $normalp_csv[$x]['2'];
          $sname = $stores_name[$x];
          echo '<div>';
          echo'<a href="Store Pages/store-pages.html"><img src="images/Amd.png" width="40px"  height="40px" alt="amd-logo"></a>';
          echo '<a href="Store Pages/store-pages.html"><p>'.$sname.'</p><p>'.$name.'</p><p>'.$price.'</p></a>';
          echo'</div>';
          }
    }

    function write_featured_stores(){

      $featured_stores = array();
      $file = fopen('stores.csv', 'r');
      
      while (($result = fgetcsv($file)) !== false)
      {
          if($result[4] == 'TRUE'){
          $featured_stores[] = $result;
          }
         
      }
      fclose($file);
      
      if(count($featured_stores) > 10){
          for($x = 0; $x <= 9; $x++){
              $name = $featured_stores[$x]['1'];
              echo<<<"STORE"
              <div>
                  <a href="store-pages.php?store_id={$featured_stores[$x]['0']}"><img src="images/Amd.png" width="40px"  height="40px" alt="amd-logo"></a>
                  <a href="store-pages.php?store_id={$featured_stores[$x]['0']}"><p>$name</p></a>
              </div>
              STORE;
              }
          }

          if(count($featured_stores) <= 10){
            for($x = 0; $x <= count($featured_stores)-1; $x++){
                $name = $featured_stores[$x]['1'];
                echo<<<"STORE"
                <div>
                    <a href="store-pages.php?store_id={$featured_stores[$x]['0']}"><img src="images/Amd.png" width="40px"  height="40px" alt="amd-logo"></a>
                    <a href="store-pages.php?store_id={$featured_stores[$x]['0']}"><p>$name</p></a>
                </div>
                STORE;
                }
            }
      }

      function write_featured_products(){
        $featuredp_csv = array();
        $file = fopen('products.csv', 'r');
        
        while (($result = fgetcsv($file)) !== false)
        {
            if($result[5] == 'TRUE'){
            $featuredp_csv[] = $result;
            }
           
        }
        fclose($file);
      
          $store_csv = array();
          $file2 = fopen('stores.csv', 'r');
          while (($result2 = fgetcsv($file2)) !== false){
            $store_csv[] = $result2;
          }
          fclose($file2); 
          $stores_name = array ();
          if(count($featuredp_csv) <= 10){
          for($x = 0; $x <= count($featuredp_csv)-1; $x++){
            $normlap_id = $featuredp_csv[$x]['4'];
            foreach($store_csv as $key1 => $st_name){
              if($st_name['0'] == $normlap_id){
                $stores_name[] = $st_name['1'];
            }
          }
        }
      }
         else if(count($featuredp_csv) > 10)
          for($x = 0; $x <= 9; $x++){
        $normlap_id = $featuredp_csv[$x]['4'];
        foreach($store_csv as $key1 => $st_name){
              if($st_name['0'] == $normlap_id){
                $stores_name[] = $st_name['1'];
              }
            } 
          }
            
            for($x = 0; $x <= 9; $x++){
                $name = $featuredp_csv[$x]['1'];
                $price = $featuredp_csv[$x]['2'];
                $sname = $stores_name[$x];
                echo '<div>';
                echo'<a href="Store Pages/store-pages.html"><img src="images/Amd.png" width="40px"  height="40px" alt="amd-logo"></a>';
                echo '<a href="Store Pages/store-pages.html"><p>'.$sname.'</p><p>'.$name.'</p><p>'.$price.'</p></a>';
                echo'</div>';
                }
          }
      

    


    

 ?>
 <!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="mallStyles.css">
    <!-- <script src="Popup.js"></script> -->

    <title>Box Model</title>
    <style>
      * {
        margin: 0;
      }
    </style>

  </head>
  <body>
    <header>
      <div id="header">
        <section id ='headerLogo'>
          <img src="images/Logo.png" alt ="headrLogo">
        </section>
        <nav id="headerNav2">
          <a href="mallFees.html">Fees</a>
          &emsp;
          <br>
          <a href="contact_form.html">Contact</a>
          &emsp;
          <br>
          <a href="FAQ.html">FAQs</a>
          &emsp;
        </nav>
        <nav id="headerNav">
          <a href="index.html">Home</a>
          &emsp;
          <br>
          <a href="my_account.html">Myaccount</a>
          &emsp;
          <br>
          <a href="browse.html">Browse</a>
      </nav>
      <p id="headerP">
        Welcome to the mall
      </p>
    </div>
    </header>
    <main>
         
      <section id="new-storesS">
        <p>New stores</p>
        <div class="new-stores">
        <?php write_normal_stores();
       ?>
            
          <div id="clear">
            <div id=""></div>
        </div>
      </section>
      <section id="new-productsS">
       <p>New products</p>
        <div class="new-products">
        <?php write_normal_products();
       ?>
      
        <div id="clear">
          <div id=""></div>
      </div>
        </section>

        <section id="featured-storesS">
          <p>Featured stores</p>
          <div class="featured-stores">
          <?php write_featured_stores();
          ?>
 
              <div id="clear">
                <div id=""></div>
            </div>
          </section>
          <section id="fetured-productsS">
          <p>Featured products</p>
          <div class="featured-products">
          <?php write_featured_products();
            ?>
            <!-- <div>
            <a href="Store Pages/product-details.html"><img src="images/product.jpg" width="40px" height="40px" alt="product-image"></a>
            <a href="Store Pages/product-details.html"><p>Product name</p></a>
            <p>1000$</p>
            <a href="Store Pages/store-pages.html"><p>store name</p></a>
          </div>
          <div>
            <a href="Store Pages/product-details.html"><img src="images/product.jpg" width="40px" height="40px" alt="product-image"></a>
            <a href="Store Pages/product-details.html"><p>Product name</p></a>
            <p>1000$</p>
            <a href="Store Pages/store-pages.html"><p>store name</p></a>
          </div>
          <div>
            <a href="Store Pages/product-details.html"><img src="images/product.jpg" width="40px" height="40px" alt="product-image"></a>
            <a href="Store Pages/product-details.html"><p>Product name</p></a>
            <p>1000$</p>
            <a href="Store Pages/store-pages.html"><p>store name</p></a>
          </div>
          <div>
            <a href="Store Pages/product-details.html"><img src="images/product.jpg" width="40px" height="40px" alt="product-image"></a>
            <a href="Store Pages/product-details.html"><p>Product name</p></a>
            <p>1000$</p>
            <a href="Store Pages/store-pages.html"><p>store name</p></a>
          </div>
          <div>
            <a href="Store Pages/product-details.html"><img src="images/product.jpg" width="40px" height="40px" alt="product-image"></a>
            <a href="Store Pages/product-details.html"><p>Product name</p></a>
            <p>1000$</p>
            <a href="Store Pages/store-pages.html"><p>store name</p></a>
          </div>
          <div>
            <a href="Store Pages/product-details.html"><img src="images/product.jpg" width="40px" height="40px" alt="product-image"></a>
            <a href="Store Pages/product-details.html"><p>Product name</p></a>
            <p>1000$</p>
            <a href="Store Pages/store-pages.html"><p>store name</p></a>
          </div> --> 
        
        <div id="clear">
          <div id=""></div>
      </div>
        </section>



    </main>
    <footer>
        <div id=footerDiv>
            <nav>
                <a href="mallCopyright.html">Copyright</a>
                &emsp;
                <a href="mallTermsOfService.html">Term of Service</a>
                &emsp;
                <a href="mallPrivacyPolicy.html">Privacy Policy</a>
            </nav>
        </div>
    </footer>
  </body>
  
  <script src="Popup.js" async></script>
</html>
