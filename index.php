<?php
$useragent=$_SERVER['HTTP_USER_AGENT'];
$isFromMobile=$_GET['mobile'];
if($isFromMobile=='1'){
}
else if(preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i',$useragent)||preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i',substr($useragent,0,4))){
header('Location: http://axefone.com/mobile');
exit();
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
<title>&yen;&yen;AxeFone.com&yen;&yen;</title>
<meta charset="iso-8859-1">
<link rel="stylesheet" href="styles/layout.css" type="text/css">
<!--[if lt IE 9]><script src="scripts/html5shiv.js"></script><![endif]-->
<!-- Featured Slider Elements -->
<script src="scripts/jquery-1.4.1.min.js"></script>
<script src="scripts/jquery-s3slider.js"></script>
<script src="scripts/jquery-s3slider.setup.js"></script>
<!-- End Featured Slider Elements -->
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
      <li class="active"><a href="index.php">Home</a></li>
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
	<li class ="last"><a href="contact_us.html">Contact US</a></li>
    </ul>
  </nav>
</div>
<!-- content -->
<div class="wrapper row3">
  <div id="container" class="clear">
    <!-- Slider -->
    <section id="featured_slide_">
      <!-- ########################################################################################## -->
      <ul id="featured_slide_Content">
        <li class="featured_slide_Image">
          <figure><a href="#"><img src="images/demo/ban1.jpg" alt="" /></a>
            <figcaption>
              <h2>Platform Support</h2>
              <p>The VOIP dialers are now available in all major mobile platforms</p>
            </figcaption>
          </figure>
        </li>
        <li class="featured_slide_Image">
          <figure><a href="#"><img src="images/demo/ban3.jpg" alt="" /></a>
            <figcaption>
              <h2>Phone to Phone free VOIP calls</h2>
              <p>Make free calls to all VOIP enabled phones</p>
            </figcaption>
          </figure>
        </li>
        <li class="featured_slide_Image">
          <figure><a href="#"><img src="images/demo/ban4.jpg" alt="" /></a>
            <figcaption>
              <h2>Cheap International calls</h2>
              <p>Make calls all arround the world without worrying about the call rate. We provide cheapest call rate arround the world.</p>
            </figcaption>
          </figure>
        </li>
        <li class="clear featured_slide_Image">
          <!-- Important - Leave This Empty -->
        </li>
      </ul>
      <!-- ########################################################################################## -->
    </section>
    <!-- main content -->
    <div id="homepage">
      <!-- Introduction -->
      <section id="intro" class="clear">
        <article class="one_third"><a href="#"><img src="images/demo/powered.jpg" width="300" height="200" alt=""></a>
          <h2>Major Dialers</h2>
          <p>The Axefone services can be availed using all the major VOIP dialers like Fring, Nimbuzz, Skype etc. See the download page to see the full listing of supported software.</p>
          <footer class="more"><a href="#">Read More &raquo;</a></footer>
        </article>
        <article class="one_third"><a href="#"><img src="images/demo/reseller.jpg" width="300" height="200" alt=""></a>
          <h2>Become a Reseller</h2>
          <p>Become a reseller and lets progress together. Axefone is a next generation internet telephony services powered by the latest voice over internet protocol technology.</p>
          <footer class="more"><a href="#">Read More &raquo;</a></footer>
        </article>
        <article class="one_third"><a href="#"><img src="images/demo/supports.jpg" width="300" height="200" alt=""></a>
          <h2>Platform Support</h2>
          <p>The VOIP Dialers which supports Axefone services are now available in major platforms like Apple Appstore, Google Play, Nokia Store, Blackberry Store etc.</p>
          <footer class="more"><a href="#">Read More &raquo;</a></footer>
        </article>
        
      </section>
      <!-- / Introduction -->
      <!-- ########################################################################################## -->
    </div>
    <!-- / content body -->
  </div>
</div>
<!-- Footer -->

<div class="wrapper row5">
  <footer id="copyright" class="clear">
    <p class="fl_left">Copyright &copy; 2012 - All Rights Reserved - <a href="#">Axefone.com</a></p>
    <p class="fl_right">Designed by&nbsp;<a href="http://www.sksarts.com/" title="">SKS Arts</a></p>
  </footer>
</div>
</body>
</html>
