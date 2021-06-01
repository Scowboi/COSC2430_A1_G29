<?php

session_start();

function edit(){
if(isset($_SESSION['copyright_text'])){
  $value = $_SESSION['copyright_text'];

echo  '<div>
<p id="copyRight">'.$value'</p>
</div>'
}
else echo    '<div>
<p id="copyRight">© 2021 - 2021 COSC2430 Group 29 - All Rights Reserved.
  <br>
  Last Updated : 04/17/2021 15:47:36</p>
</div>';
}


?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="mall_styles.css">
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
          <a href="mall_fees.html">Fees</a>
          &emsp;
          <br>
          <a href="contact_form.html">Contact</a>
          &emsp;
          <br>
          <a href="FAQ.html">FAQs</a>
          &emsp;
        </nav>
        <nav id="headerNav">
          <a href="index.php">Home</a>
          &emsp;
          <br>
          <a href="my_account.html">Myaccount</a>
          &emsp;
          <br>
          <a href="browse.html">Browse</a>
          &emsp;
          <br>
          <a href="mall_about_us.php">AboutUs</a>
      </nav>
      <p id="headerP">
        Welcome to the mall
      </p>
    </div>
    </header>
    <main>
      <?php edit();?>
    </main>
    <footer>
        <div id=footerDiv>
          <nav>
                <a href="mall_copyright.php">Copyright</a>
                &emsp;
                <a href="mall_terms_of_service.php">Term of Service</a>
                &emsp;
                <a href="mall_privacy_policy.php">Privacy Policy</a>

            </nav>
        </div>
    </footer>
  </body>
</html>