<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- SEO Meta Tags -->
    <meta name="description" content="Aria is a business focused HTML landing page template built with Bootstrap to help you create lead generation websites for companies and their services.">
    <meta name="author" content="Inovatik">

    <!-- OG Meta Tags to improve the way the post looks when you share the page on LinkedIn, Facebook, Google+ -->
	<meta property="og:site_name" content="" /> <!-- website name -->
	<meta property="og:site" content="" /> <!-- website link -->
	<meta property="og:title" content=""/> <!-- title shown in the actual shared post -->
	<meta property="og:description" content="" /> <!-- description shown in the actual shared post -->
	<meta property="og:image" content="" /> <!-- image link, make sure it's jpg -->
	<meta property="og:url" content="" /> <!-- where do you want your post to link to -->
	<meta property="og:type" content="article" />

    <!-- Website Title -->
    <title>Projeler</title>
    
    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:500,700&display=swap&subset=latin-ext" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,600&display=swap&subset=latin-ext" rel="stylesheet">
    <link href="<?= base_url('css/bootstrap.css') ?>" rel="stylesheet">
    <link href="<?= base_url('css/fontawesome-all.css') ?>" rel="stylesheet">
    <link href="<?= base_url('css/swiper.css') ?>" rel="stylesheet">
    <link href="<?= base_url('css/magnific-popup.css') ?>" rel="stylesheet">
    <link href="<?= base_url('css/styles.css') ?>" rel="stylesheet">
    
    <!-- Favicon  -->
    <link rel="icon" href="<?= base_url('images/favicon.png') ?>">
</head>
<body data-spy="scroll" data-target=".fixed-top">
    
    <!-- Preloader -->
	<div class="spinner-wrapper">
        <div class="spinner">
            <div class="bounce1"></div>
            <div class="bounce2"></div>
            <div class="bounce3"></div>
        </div>
    </div>
    <!-- end of preloader -->
    

    <!-- Navbar -->
    <nav class="navbar navbar-expand-md navbar-dark navbar-custom fixed-top">
        <!-- Text Logo - Use this if you don't have a graphic logo -->
        <!-- <a class="navbar-brand logo-text page-scroll" href="index.html">Aria</a> -->

        <!-- Image Logo -->
        <a class="navbar-brand logo-image" href="<?= base_url('/') ?>"><img src="<?= base_url('images/logo.svg') ?>" alt="alternative"></a>
        
        <!-- Mobile Menu Toggle Button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-awesome fas fa-bars"></span>
            <span class="navbar-toggler-awesome fas fa-times"></span>
        </button>
        <!-- end of mobile menu toggle button -->

        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                <a class="nav-link page-scroll" href="<?=base_url('/')?>">ANA SAYFA <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="<?=base_url('/#intro')?>">ÖN BİLGİ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="<?=base_url('/#services')?>">SERVİSLER</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="<?=base_url('/callMe')?>">İLETİŞİM</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="<?=base_url('projeler')?>">PROJELER</a>
                </li>


                <!-- Dropdown Menu -->          
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle page-scroll" href="<?=base_url('hakkimizda')?>" id="navbarDropdown" role="button" aria-haspopup="true" aria-expanded="false">HAKKIMIZDA</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="terms-conditions.html"><span class="item-text">ŞARTLAR VE KOŞULLAR</span></a>
                        <div class="dropdown-items-divide-hr"></div>
                        <a class="dropdown-item" href="privacy-policy.html"><span class="item-text">GİZLİLİK POLİTİKASI</span></a>
                    </div>
                </li>
                <!-- end of dropdown menu -->


                <li class="nav-item">
                    <a class="nav-link page-scroll" href="<?=base_url('login')?>">GİRİŞ</a>
                </li>
            </ul>
            <span class="nav-item social-icons">
                <span class="fa-stack">
                    <a href="#your-link">
                        <span class="hexagon"></span>
                        <i class="fab fa-facebook-f fa-stack-1x"></i>
                    </a>
                </span>
                <span class="fa-stack">
                    <a href="#your-link">
                        <span class="hexagon"></span>
                        <i class="fab fa-twitter fa-stack-1x"></i>
                    </a>
                </span>
            </span>
        </div>
    </nav> <!-- end of navbar -->
    <!-- end of navbar -->


    <!-- Header -->
    <header id="header" class="ex-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1>Projeler</h1>

                     <!-- Yeni Proje Ekleme Formu -->
     <!-- Yeni Proje Ekleme Formu -->
     <h2>Add New Project</h2>
    <form action="/projekontrol/add" method="post">
        <label for="name">Project Name:</label><br>
        <input type="text" id="name" name="name" required><br>
        
        <label for="description">Project Description:</label><br>
        <textarea id="description" name="description" required></textarea><br>
        
        <input type="submit" value="Add Project">
    </form>
    <br>

    <!-- Proje Listeleme -->
    <h2>Existing Projects</h2>
    <ul>
        <?php foreach ($projects as $project): ?>
            <li>
                <?php echo $project['name']; ?> - <?php echo $project['description']; ?>
                <a href="/projeler/delete/<?php echo $project['_id']; ?>">Delete</a>
            </li>
        <?php endforeach; ?>
    </ul>
    
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </header> <!-- end of ex-header -->
    <!-- end of header -->


    <!-- Breadcrumbs -->
    <div class="ex-basic-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumbs">
                        <a href="<?= base_url('/') ?>">Ana Sayfa</a><i class="fa fa-angle-double-right"></i><span>Projeler</span>
                    </div> <!-- end of breadcrumbs -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of ex-basic-1 -->
    <!-- end of breadcrumbs -->


 <!-- Projects -->
 <div id="projects" class="filter">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">PROJECTS</div>
                <h2>Projects That We're Proud Of</h2>
            </div> <!-- end of col -->
        </div> <!-- end of row -->
        <div class="row">
            <div class="col-lg-12">
                <!-- Filter -->
                <div class="button-group filters-button-group">
                    <a class="button is-checked" data-filter="*"><span>SHOW ALL</span></a>
                    <a class="button" data-filter=".design"><span>DESIGN</span></a>
                    <a class="button" data-filter=".development"><span>DEVELOPMENT</span></a>
                    <a class="button" data-filter=".marketing"><span>MARKETING</span></a>
                    <a class="button" data-filter=".seo"><span>SEO</span></a>
                </div> <!-- end of button group -->
                <div class="grid">
                    <div class="element-item development">
                        <a class="popup-with-move-anim" href="#project-1"><div class="element-item-overlay"><span>Online Banking</span></div><img src="<?= base_url('images/project-1.jpg') ?>" alt="alternative"></a>
                    </div>
                    <div class="element-item development">
                        <a class="popup-with-move-anim" href="#project-2"><div class="element-item-overlay"><span>Classic Industry</span></div><img src="<?= base_url('images/project-2.jpg') ?>" alt="alternative"></a>
                    </div>
                    <div class="element-item design development marketing">
                        <a class="popup-with-move-anim" href="#project-3"><div class="element-item-overlay"><span>BoomBap Audio</span></div><img src="<?= base_url('images/project-3.jpg') ?>" alt="alternative"></a>
                    </div>
                    <div class="element-item design development marketing">
                        <a class="popup-with-move-anim" href="#project-4"><div class="element-item-overlay"><span>Van Moose</span></div><img src="<?= base_url('images/project-4.jpg') ?>" alt="alternative"></a>
                    </div>
                    <div class="element-item design development marketing seo">
                        <a class="popup-with-move-anim" href="#project-5"><div class="element-item-overlay"><span>Joy Moments</span></div><img src="<?= base_url('images/project-5.jpg') ?>" alt="alternative"></a>
                    </div>
                    <div class="element-item design marketing seo">
                        <a class="popup-with-move-anim" href="#project-6"><div class="element-item-overlay"><span>Spark Events</span></div><img src="<?= base_url('images/project-6.jpg') ?>" alt="alternative"></a>
                    </div>
                    <div class="element-item design marketing">
                        <a class="popup-with-move-anim" href="#project-7"><div class="element-item-overlay"><span>Casual Wear</span></div><img src="<?= base_url('images/project-7.jpg') ?>" alt="alternative"></a>
                    </div>
                    <div class="element-item design marketing">
                        <a class="popup-with-move-anim" href="#project-8"><div class="element-item-overlay"><span>Zazoo Apps</span></div><img src="<?= base_url('images/project-8.jpg') ?>" alt="alternative"></a>
                    </div>
                </div> <!-- end of grid -->
                <!-- end of filter -->
                
            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of container -->
</div> <!-- end of filter -->
<!-- end of projects -->

 <!-- Project Lightboxes -->
    <!-- Lightbox -->
    <div id="project-1" class="lightbox-basic zoom-anim-dialog mfp-hide">
        <div class="row">
            <button title="Close (Esc)" type="button" class="mfp-close x-button">×</button>
            <div class="col-lg-8">
                <img class="img-fluid" src="<?= base_url('images/project-1.jpg') ?>" alt="alternative">
            </div> <!-- end of col -->
            <div class="col-lg-4">
                <h3>Online Banking</h3>
                <hr class="line-heading">
                <h6>Strategy Development</h6>
                <p>Need a solid foundation for your business growth plans? Aria will help you manage sales and meet your current needs</p>
                <p>By offering the best professional services and quality products in the market. Don't hesitate and get in touch with us.</p>
                <div class="testimonial-container">
                    <p class="testimonial-text">Need a solid foundation for your business growth plans? Aria will help you manage sales and meet your current requirements.</p>
                    <p class="testimonial-author">General Manager</p>
                </div>
                <a class="btn-solid-reg" href="#your-link">DETAILS</a> <a class="btn-outline-reg mfp-close as-button" href="#projects">BACK</a> 
            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of lightbox-basic -->
    <!-- end of lightbox -->

    <!-- Lightbox -->
    <div id="project-2" class="lightbox-basic zoom-anim-dialog mfp-hide">
        <div class="row">
            <button title="Close (Esc)" type="button" class="mfp-close x-button">×</button>
            <div class="col-lg-8">
                <img class="img-fluid" src="<?= base_url('images/project-2.jpg') ?>" alt="alternative">
            </div> <!-- end of col -->
            <div class="col-lg-4">
                <h3>Classic Industry</h3>
                <hr class="line-heading">
                <h6>Strategy Development</h6>
                <p>Need a solid foundation for your business growth plans? Aria will help you manage sales and meet your current needs</p>
                <p>By offering the best professional services and quality products in the market. Don't hesitate and get in touch with us.</p>
                <div class="testimonial-container">
                    <p class="testimonial-text">Need a solid foundation for your business growth plans? Aria will help you manage sales and meet your current requirements.</p>
                    <p class="testimonial-author">General Manager</p>
                </div>
                <a class="btn-solid-reg" href="#your-link">DETAILS</a> <a class="btn-outline-reg mfp-close as-button" href="#projects">BACK</a> 
            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of lightbox-basic -->
    <!-- end of lightbox -->

    <!-- Lightbox -->
    <div id="project-3" class="lightbox-basic zoom-anim-dialog mfp-hide">
        <div class="row">
            <button title="Close (Esc)" type="button" class="mfp-close x-button">×</button>
            <div class="col-lg-8">
                <img class="img-fluid" src="<?= base_url('images/project-3.jpg') ?>" alt="alternative">
            </div> <!-- end of col -->
            <div class="col-lg-4">
                <h3>BoomBap Audio</h3>
                <hr class="line-heading">
                <h6>Strategy Development</h6>
                <p>Need a solid foundation for your business growth plans? Aria will help you manage sales and meet your current needs</p>
                <p>By offering the best professional services and quality products in the market. Don't hesitate and get in touch with us.</p>
                <div class="testimonial-container">
                    <p class="testimonial-text">Need a solid foundation for your business growth plans? Aria will help you manage sales and meet your current requirements.</p>
                    <p class="testimonial-author">General Manager</p>
                </div>
                <a class="btn-solid-reg" href="#your-link">DETAILS</a> <a class="btn-outline-reg mfp-close as-button" href="#projects">BACK</a> 
            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of lightbox-basic -->
    <!-- end of lightbox -->

    <!-- Lightbox -->
    <div id="project-4" class="lightbox-basic zoom-anim-dialog mfp-hide">
        <div class="row">
            <button title="Close (Esc)" type="button" class="mfp-close x-button">×</button>
            <div class="col-lg-8">
                <img class="img-fluid" src="<?= base_url('images/project-4.jpg') ?>" alt="alternative">
            </div> <!-- end of col -->
            <div class="col-lg-4">
                <h3>Van Moose</h3>
                <hr class="line-heading">
                <h6>Strategy Development</h6>
                <p>Need a solid foundation for your business growth plans? Aria will help you manage sales and meet your current needs</p>
                <p>By offering the best professional services and quality products in the market. Don't hesitate and get in touch with us.</p>
                <div class="testimonial-container">
                    <p class="testimonial-text">Need a solid foundation for your business growth plans? Aria will help you manage sales and meet your current requirements.</p>
                    <p class="testimonial-author">General Manager</p>
                </div>
                <a class="btn-solid-reg" href="#your-link">DETAILS</a> <a class="btn-outline-reg mfp-close as-button" href="#projects">BACK</a> 
            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of lightbox-basic -->
    <!-- end of lightbox -->

    <!-- Lightbox -->
    <div id="project-5" class="lightbox-basic zoom-anim-dialog mfp-hide">
        <div class="row">
            <button title="Close (Esc)" type="button" class="mfp-close x-button">×</button>
            <div class="col-lg-8">
                <img class="img-fluid" src="<?= base_url('images/project-5.jpg') ?>" alt="alternative">
            </div> <!-- end of col -->
            <div class="col-lg-4">
                <h3>Joy Moments</h3>
                <hr class="line-heading">
                <h6>Strategy Development</h6>
                <p>Need a solid foundation for your business growth plans? Aria will help you manage sales and meet your current needs</p>
                <p>By offering the best professional services and quality products in the market. Don't hesitate and get in touch with us.</p>
                <div class="testimonial-container">
                    <p class="testimonial-text">Need a solid foundation for your business growth plans? Aria will help you manage sales and meet your current requirements.</p>
                    <p class="testimonial-author">General Manager</p>
                </div>
                <a class="btn-solid-reg" href="#your-link">DETAILS</a> <a class="btn-outline-reg mfp-close as-button" href="#projects">BACK</a> 
            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of lightbox-basic -->
    <!-- end of lightbox -->

    <!-- Lightbox -->
    <div id="project-6" class="lightbox-basic zoom-anim-dialog mfp-hide">
        <div class="row">
            <button title="Close (Esc)" type="button" class="mfp-close x-button">×</button>
            <div class="col-lg-8">
                <img class="img-fluid" src="<?= base_url('/images/project-6.jpg') ?>" alt="alternative">
            </div> <!-- end of col -->
            <div class="col-lg-4">
                <h3>Spark Events</h3>
                <hr class="line-heading">
                <h6>Strategy Development</h6>
                <p>Need a solid foundation for your business growth plans? Aria will help you manage sales and meet your current needs</p>
                <p>By offering the best professional services and quality products in the market. Don't hesitate and get in touch with us.</p>
                <div class="testimonial-container">
                    <p class="testimonial-text">Need a solid foundation for your business growth plans? Aria will help you manage sales and meet your current requirements.</p>
                    <p class="testimonial-author">General Manager</p>
                </div>
                <a class="btn-solid-reg" href="#your-link">DETAILS</a> <a class="btn-outline-reg mfp-close as-button" href="#projects">BACK</a> 
            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of lightbox-basic -->
    <!-- end of lightbox -->

    <!-- Lightbox -->
    <div id="project-7" class="lightbox-basic zoom-anim-dialog mfp-hide">
        <div class="row">
            <button title="Close (Esc)" type="button" class="mfp-close x-button">×</button>
            <div class="col-lg-8">
                <img class="img-fluid" src="<?= base_url('images/project-7.jpg') ?>" alt="alternative">
            </div> <!-- end of col -->
            <div class="col-lg-4">
                <h3>Casual Wear</h3>
                <hr class="line-heading">
                <h6>Strategy Development</h6>
                <p>Need a solid foundation for your business growth plans? Aria will help you manage sales and meet your current needs</p>
                <p>By offering the best professional services and quality products in the market. Don't hesitate and get in touch with us.</p>
                <div class="testimonial-container">
                    <p class="testimonial-text">Need a solid foundation for your business growth plans? Aria will help you manage sales and meet your current requirements.</p>
                    <p class="testimonial-author">General Manager</p>
                </div>
                <a class="btn-solid-reg" href="#your-link">DETAILS</a> <a class="btn-outline-reg mfp-close as-button" href="#projects">BACK</a> 
            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of lightbox-basic -->
    <!-- end of lightbox -->

    <!-- Lightbox -->
    <div id="project-8" class="lightbox-basic zoom-anim-dialog mfp-hide">
        <div class="row">
            <button title="Close (Esc)" type="button" class="mfp-close x-button">×</button>
            <div class="col-lg-8">
                <img class="img-fluid" src="<?= base_url('images/project-8.jpg') ?>" alt="alternative">
            </div> <!-- end of col -->
            <div class="col-lg-4">
                <h3>Zazoo Apps</h3>
                <hr class="line-heading">
                <h6>Strategy Development</h6>
                <p>Need a solid foundation for your business growth plans? Aria will help you manage sales and meet your current needs</p>
                <p>By offering the best professional services and quality products in the market. Don't hesitate and get in touch with us.</p>
                <div class="testimonial-container">
                    <p class="testimonial-text">Need a solid foundation for your business growth plans? Aria will help you manage sales and meet your current requirements.</p>
                    <p class="testimonial-author">General Manager</p>
                </div>
                <a class="btn-solid-reg" href="#your-link">DETAILS</a> <a class="btn-outline-reg mfp-close as-button" href="#projects">BACK</a> 
            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of lightbox-basic -->
    <!-- end of lightbox -->
    <!-- end of project lightboxes -->


    
    <!-- Breadcrumbs -->
    <div class="ex-basic-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumbs">
                        <a href="<?= base_url('/') ?>">Ana Sayfa</a><i class="fa fa-angle-double-right"></i><span>Projeler</span>
                    </div> <!-- end of breadcrumbs -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of ex-basic-1 -->
    <!-- end of breadcrumbs -->




	
    <!-- Scripts -->
    <script src="../../../public/js/jquery.min.js"></script> <!-- jQuery for Bootstrap's JavaScript plugins -->
    <script src="../../../public/js/popper.min.js"></script> <!-- Popper tooltip library for Bootstrap -->
    <script src="../../../public/js/bootstrap.min.js"></script> <!-- Bootstrap framework -->
    <script src="../../../public/js/jquery.easing.min.js"></script> <!-- jQuery Easing for smooth scrolling between anchors -->
    <script src="../../../public/js/swiper.min.js"></script> <!-- Swiper for image and text sliders -->
    <script src="../../../public/js/jquery.magnific-popup.js"></script> <!-- Magnific Popup for lightboxes -->
    <script src="../../../public/js/morphext.min.js"></script> <!-- Morphtext rotating text in the header -->
    <script src="../../../public/js/isotope.pkgd.min.js"></script> <!-- Isotope for filter -->
    <script src="../../../public/js/validator.min.js"></script> <!-- Validator.js - Bootstrap plugin that validates forms -->
    <script src="../../../public/js/scripts.js"></script> <!-- Custom scripts -->
</body>
</html>