<?php

session_start();

function edit(){
if(isset($_SESSION['tos_text'])){
  $value = $_SESSION['tos_text'];

echo  '<div>
<p id="TOS-contet">'.$value'</p>
</div>'
}
else echo    ' <div id="TOS"  >
<p id="TOS-title">Welcome to COSC2430 Group29 (“Company”, “we”, “our”, “us”)!</p>

  <p id="TOS-contet">These Terms of Service (“Terms”, “Terms of Service”) govern your use of our website located at mall.com (together or individually “Service”) operated by COSC2430 Group29.
  
  Our Privacy Policy also governs your use of our Service and explains how we collect, safeguard and disclose information that results from your use of our web pages.
  
  Your agreement with us includes these Terms and our Privacy Policy (“Agreements”). You acknowledge that you have read and understood Agreements, and agree to be bound of them.
  
  If you do not agree with (or cannot comply with) Agreements, then you may not use the Service, but please let us know by emailing at s3741366@rmit.edu.vn so we can try to find a solution. These Terms apply to all visitors, users and others who wish to access or use Service.</p>
  </p>
 <p id="TOS-title"> 2. Communications </p>
  
  <p id="TOS-contet"></p>
  By using our Service, you agree to subscribe to newsletters, marketing or promotional materials and other information we may send. However, you may opt out of receiving any, or all, of these communications from us by following the unsubscribe link or by emailing at s3741366@rmit.edu.vn.
 </p>
  
 <p id="TOS-title">3. Purchases </p>
 <p id="TOS-contet">
  If you wish to purchase any product or service made available through Service (“Purchase”), you may be asked to supply certain information relevant to your Purchase including but not limited to, your credit or debit card number, the expiration date of your card, your billing address, and your shipping information.
  
  You represent and warrant that: (i) you have the legal right to use any card(s) or other payment method(s) in connection with any Purchase; and that (ii) the information you supply to us is true, correct and complete.
  
  We may employ the use of third party services for the purpose of facilitating payment and the completion of Purchases. By submitting your information, you grant us the right to provide the information to these third parties subject to our Privacy Policy.
  
  We reserve the right to refuse or cancel your order at any time for reasons including but not limited to: product or service availability, errors in the description or price of the product or service, error in your order or other reasons.
  
  We reserve the right to refuse or cancel your order if fraud or an unauthorized or illegal transaction is suspected.
 </p>
  
 <p id="TOS-title">
  4. Contests, Sweepstakes and Promotions
 </p>
 <p id="TOS-contet">
  Any contests, sweepstakes or other promotions (collectively, “Promotions”) made available through Service may be governed by rules that are separate from these Terms of Service. If you participate in any Promotions, please review the applicable rules as well as our Privacy Policy. If the rules for a Promotion conflict with these Terms of Service, Promotion rules will apply.
 </p>

 <p id="TOS-title">
  5. Refunds
 </p>
 <p id="TOS-contet">
  We issue refunds for Contracts within 14 days of the original purchase of the Contract.
 </p>
  
 <p id="TOS-title">
  6. Content
 </p>
 <p id="TOS-contet">
  Our Service allows you to post, link, store, share and otherwise make available certain information, text, graphics, videos, or other material (“Content”). You are responsible for Content that you post on or through Service, including its legality, reliability, and appropriateness.
  
  By posting Content on or through Service, You represent and warrant that: (i) Content is yours (you own it) and/or you have the right to use it and the right to grant us the rights and license as provided in these Terms, and (ii) that the posting of your Content on or through Service does not violate the privacy rights, publicity rights, copyrights, contract rights or any other rights of any person or entity. We reserve the right to terminate the account of anyone found to be infringing on a copyright.
  
  You retain any and all of your rights to any Content you submit, post or display on or through Service and you are responsible for protecting those rights. We take no responsibility and assume no liability for Content you or any third party posts on or through Service. However, by posting Content using Service you grant us the right and license to use, modify, publicly perform, publicly display, reproduce, and distribute such Content on and through Service. You agree that this license includes the right for us to make your Content available to other users of Service, who may also use your Content subject to these Terms.
  
  COSC2430 Group29 has the right but not the obligation to monitor and edit all Content provided by users.
  
  In addition, Content found on or through this Service are the property of COSC2430 Group29 or used with permission. You may not distribute, modify, transmit, reuse, download, repost, copy, or use said Content, whether in whole or in part, for commercial purposes or for personal gain, without express advance written permission from us.
  
</p>

<p id="TOS-title">
  7. Prohibited Uses
</p>
<p id="TOS-contet">
  You may use Service only for lawful purposes and in accordance with Terms. You agree not to use Service:
  
  0.1. In any way that violates any applicable national or international law or regulation.
  
  0.2. For the purpose of exploiting, harming, or attempting to exploit or harm minors in any way by exposing them to inappropriate content or otherwise.
  
  0.3. To transmit, or procure the sending of, any advertising or promotional material, including any “junk mail”, “chain letter,” “spam,” or any other similar solicitation.
  
  0.4. To impersonate or attempt to impersonate Company, a Company employee, another user, or any other person or entity.
  
  0.5. In any way that infringes upon the rights of others, or in any way is illegal, threatening, fraudulent, or harmful, or in connection with any unlawful, illegal, fraudulent, or harmful purpose or activity.
  
  0.6. To engage in any other conduct that restricts or inhibits anyone’s use or enjoyment of Service, or which, as determined by us, may harm or offend Company or users of Service or expose them to liability.
  
  Additionally, you agree not to:
  
  0.1. Use Service in any manner that could disable, overburden, damage, or impair Service or interfere with any other party’s use of Service, including their ability to engage in real time activities through Service.
  
  0.2. Use any robot, spider, or other automatic device, process, or means to access Service for any purpose, including monitoring or copying any of the material on Service.
  
  0.3. Use any manual process to monitor or copy any of the material on Service or for any other unauthorized purpose without our prior written consent.
  
  0.4. Use any device, software, or routine that interferes with the proper working of Service.
  
  0.5. Introduce any viruses, trojan horses, worms, logic bombs, or other material which is malicious or technologically harmful.
  
  0.6. Attempt to gain unauthorized access to, interfere with, damage, or disrupt any parts of Service, the server on which Service is stored, or any server, computer, or database connected to Service.
  
  0.7. Attack Service via a denial-of-service attack or a distributed denial-of-service attack.
  
  0.8. Take any action that may damage or falsify Company rating.
  
  0.9. Otherwise attempt to interfere with the proper working of Service.
</p>
  
<p id="TOS-title">
  8. Copyright Policy
  
</p>
<p id="TOS-contet">
  We respect the intellectual property rights of others. It is our policy to respond to any claim that Content posted on Service infringes on the copyright or other intellectual property rights (“Infringement”) of any person or entity.
  
  If you are a copyright owner, or authorized on behalf of one, and you believe that the copyrighted work has been copied in a way that constitutes copyright infringement, please submit your claim via email to s3741366@rmit.edu.vn, with the subject line: “Copyright Infringement” and include in your claim a detailed description of the alleged Infringement as detailed below, under “DMCA Notice and Procedure for Copyright Infringement Claims”
  
  You may be held accountable for damages (including costs and attorneys’ fees) for misrepresentation or bad-faith claims on the infringement of any Content found on and/or through Service on your copyright.
  
</p>

<p id="TOS-title">
  9. Contact Us
</p>
  <p id="TOS-contet">
  Please send your feedback, comments, requests for technical support by email: s3741366@rmit.edu.vn.</p>
</div>';
}


?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="mallStyles.css">
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
      <?php edit(); ?>
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