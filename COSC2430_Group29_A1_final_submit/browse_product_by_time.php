<?php
require("read_data.php");
if(isset($_GET["list"])){
    $listarr = explode("|",$_GET["list"]);
    $storeID = $listarr[1];
    $time = $listarr[0];
}
if(isset($_GET["store-id"])){
    $storeID = $_GET["store-id"];
    $time="Newest";
}

var_dump($storeID);
function print_time($time,$storeID){
    if(isset($_GET["list"]) && isset($storeID)){

        if ($time == "Newest"){
            echo<<<"ITEM"
            <option value="Newest|{$storeID}" selected>Newest First</option>
            <option value="Oldest|{$storeID}">Oldest First</option>
            ITEM;
      }
        elseif($time == "Oldest"){
            echo <<<"ITEM2"
            <option value="Newest|{$storeID}">Newest First</option>
            <option value="Oldest|{$storeID}" selected>Oldest First</option>
            ITEM2;
    }
    }
    else{
        echo<<<"ITEM3"
            <option value="Newest|{$storeID}" selected>Newest First</option>
            <option value="Oldest|{$storeID}">Oldest First</option>
            ITEM3;

    }
}

function old_chose($p1,$p2){
    return strtotime($p1['created_time']) - strtotime($p2['created_time']);
}


function new_chose($p1,$p2){
    return strtotime($p2['created_time']) - strtotime($p1['created_time']);
}
// var_dump($storeID);
// var_dump($time);
// var_dump($listarr);
// var_dump($_GET["list"]);
function search_page_products($time,$storeid = ""){
    $products = read_products();
    if(isset($_GET["store-id"]) || $storeid){
        if (isset($_GET["store-id"])){
            $store = $_GET["store-id"];
        }
        else{
            $store = $storeid;
        }
        if($time == "Newest"){
            usort($products, 'new_chose');
        }
        if($time == "Oldest"){
            usort($products, 'old_chose');
        }

        foreach($products as $pd => $col){
            $count = 0;
            if ($col["store_id"] == $store){
              echo<<<"MATCHP"
                <section>
                    <a href="product_detail.php?pid={$col["id"]}">
                        <img src="images/hp pavilion.png" width="300" alt="{$col["name"]}">
                    </a>
                    <a href="product_detail.php?pid={$col["id"]}">
                        <h2>{$col["name"]}</h2>
                    </a>
                    <p>Price: {$col["price"]}</p>
                    <p>Description:</p>
                    <p>Created Date:{$col["created_time"]}</p>
                </section>
                <br>
              MATCHP;
              $count++;
              }
      
            }
      
          if ($count = 0 ){
            echo "No stores found.";
          }
    }
    else{
        echo "<h1>PAGE NOT FOUND</h1";
    }

}


?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="uft-8">
        <meta name='viewport' content="width=device-width, initial-scale=1">
        <title>Category</title>
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
    </style>
    <body>
        <header>
            <nav>
                <a href="store-pages.html">HOME</a>
                &emsp;
                <a href="about-us.html">ABOUT US</a>
                &emsp;
                <a href="store-pages.html">CONTACT</a> <!-- Use 5.1.6 Contact link-->
                &emsp;
                <details>
                    <summary>PRODUCTS</summary>
                    <a href="category.html">Browse Products by Category</a>
                    <br>
                    <a href="browse_product_by_time.php?store-id=2">Browse Products by Created Time</a>
                </details>
            </nav>
        </header>
        <main>
            <h1>Please Select An Option</h1>

            <form action="" method="GET">
                <select name="list" onchange="this.form.submit()">
                <?php print_time($time,$storeID); ?>
                    <!-- <option value="Newest">Newest First</option>
                    <option value="Oldest">Oldest First</option> -->
                </select>
            </form>

            <?php
            search_page_products($time,$storeID);
             ?>

        </main>
        <br>
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
