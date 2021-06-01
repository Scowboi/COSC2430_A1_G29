<?php

require("read_data.php");
$storeid = $_GET['store_id'];

function get_store_name($somestore) {
    $list = read_stores();
    foreach ($list as $p) {
        if ($p['id'] == $somestore) {
            return $p['name'];
        }
    }
    return false;
}

function get_feature_products($someid) {
    $pro = read_products();
    foreach ($pro as $a) {
        if ($a['featured_in_store'] == TRUE && $a['store_id'] == $someid) {
            echo '<div>';
            echo'<img src="images/Amd.png" width="40px"  height="40px" alt="amd-logo">';
            echo '<p>'.$a['name'].'</p>';
            echo'</div>';
            
        }
    }
}


?>

<style>
    .feature-product > div {
        padding: 10px 10px;
        display: inline-block;
    }
</style>



<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="uft-8">
        <meta name='viewport' content="width=device-width, initial-scale=1">
        <title>Store</title>
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
                    <a href="time.html">Browse Products by Created Time</a>
                </details>
            </nav>
        </header>
        <main>
            <div id="new-product">
                <?php echo '<h1>'.get_store_name($storeid).'</h1>'; ?>
                <h2>NEW PRODUCTS</h2>
                
            </div>
            <div class="feature-product">
                <h2>FEATURE PRODUCTS</h2>
                <?php get_feature_products($storeid) ?>
                <br>
            </div>
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