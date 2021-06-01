<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>My Account</title>
	<style>
		.container {
			background: #f4f7f6 none repeat scroll 0 0;
			display: block;
			position: relative;
			left: 10vw;
			right: 10vw;
			padding: 35px 50px;
			width: 700px;
			height: 350px;
		}
		
		.left-side {
			float: left;
			width: 30%;
			font-size: 1.3em;
		}
		
		.right-side {
			font-size: 1.3em;
		}
			
		
		.user-img {
			padding-left: 40px;
			padding-top: 30px;
		}
		
		h2 {
			padding-left: 10vw;
		}
		

		}
		@media screen and (min-width: 768px) and (max-width: 1023px) {
        header {
            width: 100%;
            float: left;
          }

  
          main {
            width: 100%;
            float: left;
          }
  
          footer {
            width: 100%;
            float: left;
          }
      }

      
      @media screen and (min-width: 1024px) {
        header {
          width: 100%;
          float: left;
          position: fixed;
            top: 0;
 
            left: 0;
            right: 0;
        }

        main {
          width: 100%;
          float: left;
          padding-top: 100px;
        }

        footer {
          width: 100%;
          float: left;
        }



      }

      @media screen and (max-width: 767px) {
        header {
            width: 100%;
            float: left;
          }
  
          main {
            width: 100%;
            float: left;
          }
  
          footer {
            width: 100%;
            float: left;
          }
      }

      header {
        background-color: orange;
        height: 100px;
        top: 0;
        color: green;
      }
      footer {
        background-color: lightgreen;
        height: fit-content;
        clear: both;

      }
      main {
        background-color: wheat;
        height: 90%;
        
      }

      #headerLogo{
        text-align: initial;
        width: 10%;
        height: 10%;
        max-width: 100%;
        max-height: 100%;
        float: left;
        
        }
 
        #headerNav{
          float: right;
          width: 15%;
          max-width: 100%;
          box-sizing: content-box;
          
        }

        #headerNav2{
            float: right;
            width: 15%;
            max-width: 100%;
            box-sizing: content-box;
            
          }
 
        #headerP {
         width: calc(100% - 10% - 30%);
         text-align: center;
         font-size: 22px;
         max-width: 100%;
         float: left;
        }
 
        #footerDiv {
          text-align: center;
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
			<p id="headerP">Welcome to the mall</p>
		</div>
	</header>
	
	<?php

		require_once 'functions.php';
		require_once 'db.php';
		
		if(!isset($_SESSION['ID']) && !isset($_SESSION['EMAIL']))
		{
			header("location: login.php");
		}

		$id = $_SESSION['ID'];
		$query = "select * from user where id='$id'";
		$result = mysqli_query($con,$query);
		$row = mysqli_fetch_assoc($result);

	?>
	
	<main>
		<!-- Account info display example-->
		<div><h2>Account Information</h2></div>
		
		<div class="container">
			
			<div class="user-img"><img src="images/user.png" alt="User Image" width="100vw" height="100vh" style="clear:right"></div>
			
			<div class="info">
				<span class="left-side">
					<br>
					<p>Full Name:</p>
					<p>Date Of Birth:</p>
					<p>Email:</p>
					<p>Phone Number:</p>
				</span>
				<span class="right-side">
					<br>
					<p>Anonymous</p>
					<p>01/01/1990</p>
					<p><span></span><span><?php echo $row['email'] ?></span></p>
					<p><span><span><?php echo $row['username'] ?></span></span></p>
				</span>
			</div>
			
		</div>
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

</html>