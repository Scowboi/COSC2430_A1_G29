<?php
session_start();


if( !isset($_SESSION["LOGGEDIN"]) ){
  header("location:login.php");
  exit();
}

function checksite(){
  if(array_key_exists('copyright',$_POST)){
    $contents = $_REQUEST['contents'];
    $contents_seperate = str_replace('<br />', "\n",$contents);
    $_SESSION['copyright_text'] = $contents_seperate;
  }
  else if(array_key_exists('tos',$_POST)){
    $contents = $_REQUEST['contents'];
    $contents_seperate = str_replace('<br />', "\n",$contents);
    $_SESSION['tos_text'] = $contents_seperate;
  }
  else if(array_key_exists('privacy',$_POST)){
    $contents = $_REQUEST['contents'];
    $contents_seperate = str_replace('<br />', "\n",$contents);
    $_SESSION['privacy_text'] = $contents_seperate;
  }
}

function checkmember(){
  if(array_key_exists('member1',$_POST)){
    $picture = $_REQUEST['select_img'];
    $_SESSION['member1img'] = $picture;
  }
  else if(array_key_exists('member2',$_POST)){
    $picture = $_REQUEST['select_img'];
    $_SESSION['member2img'] = $picture;
  }
  else if(array_key_exists('member3',$_POST)){
    $picture = $_REQUEST['select_img'];
    $_SESSION['member3img'] = $picture;
  }
  else if(array_key_exists('member4',$_POST)){
    $picture = $_REQUEST['select_img'];
    $_SESSION['member4img'] = $picture;
  }
}

if(array_key_exists('submit1',$_POST)){
 
   echo $_POST['contents'];
   checksite();
}
else if(array_key_exists'submit2',$_POST)){

  echo $_POST['select_img'];
  checkmember();
}

?>




<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="mall_styles.css">
    <!-- <script src="Popup.js"></script> -->

    <title>Admin Dashboard</title>
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
    Edit contents
    <form name="form1" method="post" action="dashboard.php">
    <textarea name = 'contents' cols='100' rows='50'></textarea><br>
    <input type='radio' name='copyright' value='copyright' />Copyright
    <input type='radio' name='tos' value='tos' />Terms of Service
    <input type='radio' name='privacy' value='privacy' />Privacy Policy 
    <input type='submit' name='submit1' value='submit' />
</form>


    <div>
    Edit Photo of developer
    <form name='form2' method="post" action="dashboard.php">
    <input type='radio' name='member1' value='member1' />Vuong Viet Dung
    <input type='radio' name='member2' value='member2' />Truong Dai Duong
    <input type='radio' name='member3' value='member3' />Hayato Tokunaga
    <input type='radio' name='member4' value='member4' />Vu Gia Thinh <br>
    <input type='file' name='select_img' value='select_img' />
    <input type='submit' name='submit2' value='submit' />
</form>
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
  
  <script src="Popup.js" async></script>
</html>
