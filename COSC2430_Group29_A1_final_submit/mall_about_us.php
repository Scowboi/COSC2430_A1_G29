<?php
session_start();

function edit1(){
if(isset($_SESSION['member1img'])){
  $value = $_SESSION['member1img'];

echo  '<img src=.'$value'. width="160px" height="160px" alt="profile-1">'
}
else echo  '<img src="images/profilePic.png" width="160px" height="160px" alt="profile-1">'
}

function edit2(){
    if(isset($_SESSION['member2img'])){
      $value = $_SESSION['member2img'];
    
    echo  '<img src=.'$value'. width="160px" height="160px" alt="profile-1">'
    }
    else echo  '<img src="images/profilePic.png" width="160px" height="160px" alt="profile-1">'
}

function edit3(){
    if(isset($_SESSION['member3img'])){
      $value = $_SESSION['member3img'];
    
    echo  '<img src=.'$value'. width="160px" height="160px" alt="profile-1">'
    }
    else echo  '<img src="images/profilePic.png" width="160px" height="160px" alt="profile-1">'
}

function edit4(){
    if(isset($_SESSION['member4img'])){
      $value = $_SESSION['member4img'];
    
    echo  '<img src=.'$value'. width="160px" height="160px" alt="profile-1">'
    }
    else echo  '<img src="images/profilePic.png" width="160px" height="160px" alt="profile-1">'
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
      <section id="member-profile">
        <p>About us</p>
        <div class="member-profile">  
            <?php edit1(); ?>
            <button class="btns" id = "btn1">Open Modal</button>
            <p>member name</p>
            <p>member role</p>
        </div>
        <div class="member-profile">
        <?php edit2(); ?>
          <button class="btns" id="btn2">Open Modal2</button>
        
          <p>member name</p>
          <p>member role</p>
        </div>
        <div class="member-profile">
          <<?php edit3(); ?>
          <button class="btns" id="btn3">Open Modal3</button>
          <p>member name</p>
          <p>member role</p>
        </div>
        <div class="member-profile">
        <?php edit4(); ?>
          <button class="btns" id="btn4">Open Modal4</button>
          <p>member name</p>
          <p>member role</p>
        </div>

        <div id="modal1" class="modal">
          <div class="modal-content">
                <img src="images/profilePic.png" width="500px" height="500px" alt="modalProfile-1">
                  <span id="close1" class="close">&times;</span>                                                               
                  <p>Vuong Viet Dung</p>
                  <p>Developer</p>
                </div>
      
         
          <div id="modal2" class="modal">
            <div class="modal-content">
              <img src="images/profilePic.png" width="500px" height="500px" alt="modalProfile-2">
              <span id="close2" class="close">&times;</span>                                                               
              <p>Truong Dai Duong</p>
              <p>Developer2</p>
          </div>
          <div id="modal3" class="modal">
            <div class="modal-content">
                <img src="images/profilePic.png" width="500px" height="500px" alt="modalProfile-3">
                <span id="close3" class="close">&times;</span>                                                               
                <p>Hayato Tokunaga</p>
                <p>Developer3</p>
                </div>
          <div id="modal4" class="modal">
            <div class="modal-content">
                  <img src="images/profilePic.png" width="500px" height="500px" alt="modalProfile-4">
                    <span id="close4" class="close">&times;</span>                                                               
                    <p>Vu Gia Thinh</p>
                    <p>Developer4</p>
                  </div>
        </div>
        <div id="clear">
          <div id=""></div>
      </div>
    </div>
      </section>
  </div>
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
    <script src="mallModal.js"></script> 
  </body>
    
</html>