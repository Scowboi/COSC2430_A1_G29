<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login</title>
	<style>
		.container {
			position: relative;
			width: 100%;
		}

		form {
			display: flex;
			align-items: center;
			justify-content: center;
			flex-direction: column;
			padding: 0rem 5rem;
			overflow: hidden;
		}
		
		.input-field {
			max-width: 380px;
			width: 100%;
			background-color: #f0f0f0;
			margin: 10px 0;
			height: 55px;
			border-radius: 10px;
			display: grid;
			grid-template-columns: 100%;
			padding: 0 0.4rem;
			position: relative;
		}
		
		.input-field input {
			max-width: 380px;
			width: 100%;
			background: none;
			outline: none;
			border: none;
			line-height: 1;
			font-weight: 600;
			font-size: 1.1rem;
			color: #333;
		}

		.input-field input::placeholder {
			color: #aaa;
			font-weight: 500;
		}
		
		.btn {
			width: 150px;
			background-color: #11a711;
			border: none;
			outline: none;
			height: 49px;
			border-radius: 05px;
			color: #fff;
			text-transform: uppercase;
			font-weight: 600;
			margin: 15px 0;
			cursor: pointer;
		}		
		
		/* Responsive layout - when the screen is less than 320px high, make the text stays on the log-reg-area */
		@media screen and (max-height: 320px) {
			.log-reg-area {
				top: 10%;
				transform: translate(-50%, -10%);
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
		
		h2 {
			margin-bottom: -1px;
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
		<p id="headerP">
		  Welcome to the mall
		</p>
	  </div>
	</header>
	<main>
		<?php
		require_once 'functions.php';
		login_user();
		?>
		<div class="container">
		  <div class="forms-container">
			<div class="signin-signup">
				<form method="POST" class="sign-in-form">
					<h2 class="title">Sign in</h2>
					<div class="input-field">
						<input type="text" placeholder="Email or Phone Number" name="username"/>
					</div>
					<div class="input-field">
						<input type="password" placeholder="Password" name="password"/>
					</div>
					<input type="submit" value="Login" name="btn_login" class="btn solid" />
				</form>
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