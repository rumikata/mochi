<?php
$session = session();

if (! $session->has('durum') || $session->get('durum') !== true) {
    return redirect()->to(base_url('login'))->send();
}
?>

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
    <title>Panel Sayfası</title>
    
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
                    <a class="nav-link page-scroll" href="<?=base_url('/')?>">ANA SAYFA</a>
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
                    <a class="nav-link page-scroll" href="projeler.php">PROJELER</a>
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
                    <a class="nav-link page-scroll" href="<?=base_url('logout')?>">ÇIKIŞ</a> 
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
                    <h1>Panel İşlemleri</h1>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </header> <!-- end of ex-header -->
    <!-- end of header -->


 
        
    <div class="container mt-5">
        <form method="post" action="<?= base_url('projekontrol/add') ?>" class="mb-4">
            <div class="row g-3">
                <div class="col-md-5">
                    <input type="text" name="name" class="form-control" placeholder="Proje Adı" required>
                </div>
                <div class="col-md-5">
                    <input type="text" name="description" class="form-control" placeholder="Proje Açıklaması" required>
                </div>
                <div class="col-md-2">
                    <button type="submit" class="btn btn-primary w-100">Ekle</button>
                </div>
            </div>
        </form>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Proje Adı</th>
                    <th>Açıklama</th>
                    <th>İşlemler</th>
                </tr>
            </thead>
            <tbody>
                <?php if (!empty($projects)): ?>
                    <?php foreach ($projects as $index => $project): ?>
                    <tr>
                        <td><?= $index + 1 ?></td>
                        <td><?= $project['name'] ?></td>
                        <td><?= $project['description'] ?></td>
                        <td>
                            <a href="<?= base_url('projekontrol/delete/' . $project['_id']) ?>" class="btn btn-danger btn-sm">Sil</a>
                            <button type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#editModal<?= $project['_id'] ?>">Güncelle</button>
                        </td>
                    </tr>
                    <div class="modal fade" id="editModal<?= $project['_id'] ?>" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <form method="post" action="<?= base_url('projekontrol/update/' . $project['_id']) ?>">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="editModalLabel">Proje Güncelle</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="mb-3">
                                            <label for="name" class="form-label">Proje Adı</label>
                                            <input type="text" name="name" class="form-control" value="<?= $project['name'] ?>" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="description" class="form-label">Açıklama</label>
                                            <input type="text" name="description" class="form-control" value="<?= $project['description'] ?>" required>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">İptal</button>
                                        <button type="submit" class="btn btn-success">Kaydet</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                <?php else: ?>
                <tr>
                    <td colspan="4" class="text-center">Henüz proje yok.</td>
                </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>







    
    <!-- Breadcrumbs -->
    <div class="ex-basic-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumbs">
                        <br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                    </div> <!-- end of breadcrumbs -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of ex-basic-1 -->
    <!-- end of breadcrumbs -->



</html>
