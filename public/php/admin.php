<?php
session_start();

// Session timeout duration
$session_duration = 300; // 5 minutes

// Check if user is logged in
if (!isset($_SESSION['admin_login'])) {
    header("Location: login.php");
    exit();
}

// Session timeout logic
if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > $session_duration)) {
    session_unset();
    session_destroy();
    header("Location: logout.php");
    exit();
}
$_SESSION['LAST_ACTIVITY'] = time();

?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Usagi</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Free HTML5 Template by FREEHTML5.CO" />
    <meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />
    <meta name="author" content="FREEHTML5.CO" />

    <!--
      //////////////////////////////////////////////////////

      FREE HTML5 TEMPLATE
      DESIGNED & DEVELOPED by FREEHTML5.CO

      Website: 		http://freehtml5.co/
      Email: 			info@freehtml5.co
      Twitter: 		http://twitter.com/fh5co
      Facebook: 		https://www.facebook.com/fh5co

      //////////////////////////////////////////////////////
       -->

    <!-- Facebook and Twitter integration -->
    <meta property="og:title" content=""/>
    <meta property="og:image" content=""/>
    <meta property="og:url" content=""/>
    <meta property="og:site_name" content=""/>
    <meta property="og:description" content=""/>
    <meta name="twitter:title" content="" />
    <meta name="twitter:image" content="" />
    <meta name="twitter:url" content="" />
    <meta name="twitter:card" content="" />

    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    <link rel="shortcut icon" href="fonts/icomoon/apple-touch-icon.png">

    <!-- <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css'> -->

    <!-- Animate.css -->
    <link rel="stylesheet" href="../css/animate.css">
    <!-- Icomoon Icon Fonts-->
    <link rel="stylesheet" href="../css/icomoon.css">
    <!-- Bootstrap  -->
    <link rel="stylesheet" href="../css/bootstrap.css">
    <!-- Superfish -->
    <link rel="stylesheet" href="../css/superfish.css">

    <link rel="stylesheet" href="../css/style.css">


    <!-- Modernizr JS -->
    <script src="js/modernizr-2.6.2.min.js"></script>
    <!-- FOR IE9 below -->
    <!--[if lt IE 9]>
    <script src="js/respond.min.js"></script>
    <![endif]-->

</head>
<body>
<div id="fh5co-wrapper">
    <div id="fh5co-page">
        <div id="fh5co-header">
            <header id="fh5co-header-section">
                <div class="container">
                    <div class="nav-header">
                        <a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle"><i></i></a>
                        <h1 id="fh5co-logo"><a href="../index.html">Usagi</a></h1>
                        <!-- START #fh5co-menu-wrap -->
                        <nav id="fh5co-menu-wrap" role="navigation">
                            <ul class="sf-menu" id="fh5co-primary-menu">
                                <li>
                                    <a href="../index.html">Ana Sayfa</a>
                                </li>
                                <li>
                                    <a href="../listing.html" class="fh5co-sub-ddown">Listeler</a>
                                    <ul class="fh5co-sub-menu">
                                        <li><a href="http://freehtml5.co/preview/?item=build-free-html5-bootstrap-template" target="_blank">Build</a></li>
                                        <li><a href="http://freehtml5.co/preview/?item=work-free-html5-template-bootstrap" target="_blank">Work</a></li>
                                        <li><a href="http://freehtml5.co/preview/?item=light-free-html5-template-bootstrap" target="_blank">Light</a></li>
                                        <li><a href="http://freehtml5.co/preview/?item=relic-free-html5-template-using-bootstrap" target="_blank">Relic</a></li>
                                        <li><a href="http://freehtml5.co/preview/?item=display-free-html5-template-using-bootstrap" target="_blank">Display</a></li>
                                        <li><a href="http://freehtml5.co/preview/?item=sprint-free-html5-template-bootstrap" target="_blank">Sprint</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#" class="fh5co-sub-ddown">Dropdown</a>
                                    <ul class="fh5co-sub-menu">
                                        <li><a href="left-sidebar.html">Web Development</a></li>
                                        <li><a href="right-sidebar.html">Branding &amp; Identity</a></li>
                                        <li>
                                            <a href="#" class="fh5co-sub-ddown">Free HTML5</a>
                                            <ul class="fh5co-sub-menu">
                                                <li><a href="http://freehtml5.co/preview/?item=build-free-html5-bootstrap-template" target="_blank">Build</a></li>
                                                <li><a href="http://freehtml5.co/preview/?item=work-free-html5-template-bootstrap" target="_blank">Work</a></li>
                                                <li><a href="http://freehtml5.co/preview/?item=light-free-html5-template-bootstrap" target="_blank">Light</a></li>
                                                <li><a href="http://freehtml5.co/preview/?item=relic-free-html5-template-using-bootstrap" target="_blank">Relic</a></li>
                                                <li><a href="http://freehtml5.co/preview/?item=display-free-html5-template-using-bootstrap" target="_blank">Display</a></li>
                                                <li><a href="http://freehtml5.co/preview/?item=sprint-free-html5-template-bootstrap" target="_blank">Sprint</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">UI Animation</a></li>
                                        <li><a href="#">Copywriting</a></li>
                                        <li><a href="#">Photography</a></li>
                                    </ul>
                                </li>
                                <li><a href="../contact.html">İletişim</a></li>
                                <li class="active"><a href="logout.php">Çıkış</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </header>

        </div>


        <div class="fh5co-hero">
            <div class="fh5co-overlay"></div>
            <div class="fh5co-cover text-center" data-stellar-background-ratio="0.5" style="background-image: url(../images/cover_bg_1.jpg);">
                <div class="desc animate-box">
                    <h3>Admin Paneli</h3>
                    <div class="input-container" style="display: flex; justify-content: center; gap: 20px;">
                        <input type="text" class="form-control" placeholder="Ülke Ekle" style="width: 250px;">
                        <input type="text" class="form-control" placeholder="Şehir Ekle" style="width: 250px;">
                        <span><a class="btn btn-primary btn-lg" href="#">Ekle</a></span>
                    </div>
                    </div>
            </div>

        </div>


        <div id="fh5co-contact" class="fh5co-section animate-box">
            <div class="container">
                <form action="#">
                    <div class="row">
                        <div class="col-md-6">
                            <h3 class="section-title">Our Address</h3>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                            <ul class="contact-info">
                                <li><i class="icon-location-pin"></i>198 West 21th Street, Suite 721 New York NY 10016</li>
                                <li><i class="icon-phone2"></i>+ 1235 2355 98</li>
                                <li><i class="icon-mail"></i><a href="#">info@yoursite.com</a></li>
                                <li><i class="icon-globe2"></i><a href="#">www.yoursite.com</a></li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Name">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Email">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <textarea name="" class="form-control" id="" cols="30" rows="7" placeholder="Message"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="submit" value="Send Message" class="btn btn-primary btn-lg">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- END fh5co-contact -->
        <div id="map" class="fh5co-map"></div>
        <!-- END map -->




        <footer>
            <div id="footer">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3 text-center">
                            <p class="fh5co-social-icons">
                                <a href="#"><i class="icon-twitter2"></i></a>
                                <a href="#"><i class="icon-facebook2"></i></a>
                                <a href="#"><i class="icon-instagram"></i></a>
                                <a href="#"><i class="icon-dribbble2"></i></a>
                                <a href="#"><i class="icon-youtube"></i></a>
                            </p>
                            <p> <a href="#">Usagi</a> <br> <i class="icon-heart3"></i> </p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
