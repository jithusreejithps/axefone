<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
	<meta charset="iso-8859-1">
      <title>Contact us</title>
      <link rel="STYLESHEET" type="text/css" href="styles/contactForm.css">
      <script type="text/javascript" src="scripts/gen_validatorv31.js"></script>
<link rel="stylesheet" href="styles/layout.css" type="text/css">
<!--[if lt IE 9]><script src="scripts/html5shiv.js"></script><![endif]-->
</head>
<body>
<div class="wrapper row1"  style="background-image:url('images/headerTexture.jpg')">
  <header id="header" class="clear">
    <hgroup>
      <div><img src="images/logo1.png"></div>
    </hgroup>
    <form action="#" method="post">
      <fieldset>
        <legend>Search:</legend>
        <input type="text" value="Search Our Website&hellip;" onFocus="this.value=(this.value=='Search Axefone.com;')? '' : this.value ;">
        <input type="submit" id="sf_submit" value="submit">
      </fieldset>
    </form>
  </header>
</div>

<div class="wrapper row2">
  <nav id="topnav" class="clear">
    <ul>
      <li><a href="index.php">Home</a></li>
      <li><a href="#">Rates</a></li>
      <li><a href="#">Dialers</a>
        <ul>
          <li><a href="pc_download.html">PC Dialer</a></li>
          <li><a href="mobile_download.html">Mobile Dialer</a></li>
        </ul>
      </li>
      <li><a href="#">Login</a>
        <ul>
          <li><a href="http://login.axefone.com/">Reseller Old</a></li>
          <li><a href="http://reseller.axefone.com/">Reseller</a></li>
        </ul>
      </li>
	<li  class="active"><a href="contact_us.html">Contact US</a></li>
    </ul>
  </nav>
</div>
<!-- Footer -->

<div class="wrapper row3">
  <div id="container" class="clear"  style="min-height:300px">
<?php
function spamcheck($field)
  {
  //filter_var() sanitizes the e-mail
  //address using FILTER_SANITIZE_EMAIL
  $field=filter_var($field, FILTER_SANITIZE_EMAIL);

  //filter_var() validates the e-mail
  //address using FILTER_VALIDATE_EMAIL
  if(filter_var($field, FILTER_VALIDATE_EMAIL))
    {
    return TRUE;
    }
  else
    {
    return FALSE;
    }
  }

if (isset($_REQUEST['email']))
  {//if "email" is filled out, proceed

  //check if the email address is invalid
  $mailcheck = spamcheck($_REQUEST['email']);
  if ($mailcheck==FALSE)
    {
    echo "Invalid input";
    }
  else
    {//send email
    $email = $_REQUEST['email'] ;
    $name = $_REQUEST['name'] ;
	$subject=$_REQUEST['subject'];
    $message = $_REQUEST['comment'] ;
    mail("indianxpressdialer@gmail.com", "Subject: $subject",
    $message, "From: $email" );
    echo "<h2>Your message have been submitted to the Admin. We will contact you soon.</h2>";
	echo "$name\n$email\n$subject\n$message";
    }
  }
  else{
	 echo "<h2>Our server is experiencing some problem, Please try again later.</h2>";
  }
?>
  </div>
</div>
<div class="wrapper row5">
  <footer id="copyright" class="clear">
    <p class="fl_left">Copyright &copy; 2012 - All Rights Reserved - <a href="#">Axefone.com</a></p>
    <p class="fl_right">Designed by&nbsp;<a href="http://www.sksarts.com/" title="">SKS Arts</a></p>
  </footer>
</div>
</body>
</html>
