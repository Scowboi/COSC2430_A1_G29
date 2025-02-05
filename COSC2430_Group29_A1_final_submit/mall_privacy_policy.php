<?php

session_start();


function edit(){
if(isset($_SESSION['privacy_text'])){
  $value = $_SESSION['privacy_text'];

echo  '<div>
<p id="PP-titles">'.$value'</p>
</div>';
}
else echo '<div id = "PP">
<p id="PP-titles">At COSC2430 Group29, accessible from COSC2430 Group29.html, one of our main priorities is the privacy of our visitors.
  <br> This Privacy Policy document contains types of information that is collected and recorded by COSC2430 Group29 and how we use it.
</p>
  <br>
  If you have additional questions or require more information about our Privacy Policy, do not hesitate to contact us.
  
  This Privacy Policy applies only to our online activities and is valid for visitors to our website with regards to the information that they shared and/or collect in COSC2430 Group29. This policy is not applicable to any information collected offline or via channels other than this website. Our Privacy Policy was created with the help of the Online Generator of Privacy Policy.
  <br>
  <p id="PP-titles">
  Consent</p>
  By using our website, you hereby consent to our Privacy Policy and agree to its terms.
  <br>
  <p id="PP-titles">
  Information we collect</p>
  The personal information that you are asked to provide, and the reasons why you are asked to provide it, will be made clear to you at the point we ask you to provide your personal information.
  <br>
  If you contact us directly, we may receive additional information about you such as your name, email address, phone number, the contents of the message and/or attachments you may send us, and any other information you may choose to provide.
  <br>
  When you register for an Account, we may ask for your contact information, including items such as name, company name, address, email address, and telephone number.
  <br>
  <p id="PP-titles">
  How we use your information</p>
  We use the information we collect in various ways, including to:
  <br>
  Provide, operate, and maintain our website
  Improve, personalize, and expand our website
  Understand and analyze how you use our website
  Develop new products, services, features, and functionality
  Communicate with you, either directly or through one of our partners, including for customer service, to provide you with updates and other information relating to the website, and for marketing and promotional purposes
  <p id="PP-titles">
  Log Files</p>
  COSC2430 Group29 follows a standard procedure of using log files. These files log visitors when they visit websites. All hosting companies do this and a part of hosting services' analytics. The information collected by log files include internet protocol (IP) addresses, browser type, Internet Service Provider (ISP), date and time stamp, referring/exit pages, and possibly the number of clicks. These are not linked to any information that is personally identifiable. The purpose of the information is for analyzing trends, administering the site, tracking users' movement on the website, and gathering demographic information.
  <br>
  <p id="PP-titles">
  Cookies and Web Beacons</p>
  Like any other website, COSC2430 Group29 uses 'cookies'. These cookies are used to store information including visitors preferences, and the pages on the website that the visitor accessed or visited. The information is used to optimize the users' experience by customizing our web page content based on visitors' browser type and/or other information.

  
  <br>
  <p id="PP-titles">
  Google DoubleClick DART Cookie</p>
  Google is one of a third-party vendor on our site. It also uses cookies, known as DART cookies, to serve ads to our site visitors based upon their visit to www.website.com and other sites on the internet. However, visitors may choose to decline the use of DART cookies by visiting the Google ad and content network Privacy Policy at the following URL – https://policies.google.com/technologies/ads
  <br>
  <p id="PP-titles">
  Our Advertising Partners</p>
  Some of advertisers on our site may use cookies and web beacons. Our advertising partners are listed below. Each of our advertising partners has their own Privacy Policy for their policies on user data. For easier access, we hyperlinked to their Privacy Policies below.
  <br>
  <p id="PP-titles">
  Children Information</p>
  Another part of our priority is adding protection for children while using the internet. We encourage parents and guardians to observe, participate in, and/or monitor and guide their online activity.
  <br>
  COSC2430 Group29 does not knowingly collect any Personal Identifiable Information from children under the age of 13. If you think that your child provided this kind of information on our website, we strongly encourage you to contact us immediately and we will do our best efforts to promptly remove such information from our records.</p>
</div>' ;
  }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="mall_styles.css">
    <title>Box Model</title>

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