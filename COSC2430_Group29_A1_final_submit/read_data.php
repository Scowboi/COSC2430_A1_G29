<?php
function read_stores(){
    $fp = fopen('stores.csv','r');
    $firstrow = fgetcsv($fp);
    $stores = [];
    while($row = fgetcsv($fp)){
        $i = 0;
        $store=[];
        foreach ($firstrow as $col_name){
            $store[$col_name] = $row[$i];
            $i++;
        }
        $stores[] = $store;
    }
    return $stores;
  }
  
  function read_categories(){
    $fp = fopen('categories.csv','r');
    $firstrow = fgetcsv($fp);
    $categories = [];
    while($row = fgetcsv($fp)){
        $i = 0;
        $category=[];
        foreach ($firstrow as $col_name){
            $category[$col_name] = $row[$i];
            $i++;
        }
        $categories[] = $category;
    }
    return $categories;
}



function read_products(){
    $fp = fopen('products.csv','r');
    $firstrow = fgetcsv($fp);
    $products = [];
    while($row = fgetcsv($fp)){
        $i = 0;
        $product=[];
        foreach ($firstrow as $col_name){
            $product[$col_name] = $row[$i];
            $i++;
        }
        $products[] = $product;
    }
    return $products;
}





// echo "<pre>";

// var_dump(read_products());
// echo "</pre>";
?>