<?php
session_start();
if (!isset($_COOKIE['sess_id'])) {
  setcookie('sess_id',date('Ymdhis'),time()+(60*60*24),'/');
}

require '_inc/config.php';
require 'model/crud.php';
require 'model/material.php';
require 'model/props_func.php';

$conn = dbconnect();


if ($conn) {

  if (isset($_SESSION['idno'])) {
    $owner = $_SESSION['idno'];
  } else {
    $owner = $_COOKIE['sess_id'];
  }

  $categories = getCategories($conn);
  $cartCount = getCartCount($conn,$owner);
  if ($cartCount =='') {
    $cartCount = 0;
  }
}

?>
<!DOCTYPE html>
<html lang="en-US" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--  
    Document Title
    =============================================
    -->
    <title>Welcome | Eburol Dalisy Funeral Home</title>
    <!--  
    Favicons
    =============================================
    -->
    <link rel="icon" type="image/png" sizes="192x192" href="images/logo.png">
    <link rel="icon" type="image/png" sizes="32x32" href="images/logo.png">
    <link rel="icon" type="image/png" sizes="96x96" href="images/logo.png">
    <link rel="icon" type="image/png" sizes="16x16" href="images/logo.png">
    <link rel="manifest" href="/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="images/logo.png">
    <meta name="theme-color" content="#ffffff">
    <!--  
    Stylesheets
    =============================================
    
    -->
    <!-- Default stylesheets-->
    <link href="assets/lib/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Template specific stylesheets-->
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Volkhov:400i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
    <link href="assets/lib/animate.css/animate.css" rel="stylesheet">
    <link href="assets/lib/components-font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/lib/et-line-font/et-line-font.css" rel="stylesheet">
    <link href="assets/lib/flexslider/flexslider.css" rel="stylesheet">
    <link href="assets/lib/owl.carousel/dist/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="assets/lib/owl.carousel/dist/assets/owl.theme.default.min.css" rel="stylesheet">
    <link href="assets/lib/magnific-popup/dist/magnific-popup.css" rel="stylesheet">
    <link href="assets/lib/simple-text-rotator/simpletextrotator.css" rel="stylesheet">
    <!-- Main stylesheet and color file-->
    <link href="assets/css/style.css" rel="stylesheet">
    <link id="color-scheme" href="assets/css/colors/default.css" rel="stylesheet">

    <style type="text/css">
      
      .count {
          background-color: white;
          color: purple;
          border-radius: 5%;
          padding-left: 10px;
          padding-right: 7px;
          padding-top: 5px;
          padding-bottom: 5px;
          font-weight: bold;

      }
    </style>
  </head>
  <body data-spy="scroll" data-target=".onpage-navigation" data-offset="60">
    <main>
      <div class="page-loader">
        <div class="loader">Loading...</div>
      </div>
      <nav class="navbar navbar-custom navbar-fixed-top navbar-transparent" role="navigation">
        <div class="container">
          <div class="navbar-header">
            <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#custom-collapse"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button><a class="navbar-brand" href="index.html"><img style="margin-top: -15px; height: 50px;" src="images/logo.png"></a>
          </div>
          <div class="collapse navbar-collapse" id="custom-collapse">
            <ul class="nav navbar-nav navbar-right">
              <li class=""><a class="" href="#" data-toggle=""><i class="fa fa-home"></i> Home</a></li>

              <li class=""><a class="" href="gallery" data-toggle=""><i class="fa fa-image"></i> Gallery</a></li>

              <li class=""><a class="" href="obituaries" data-toggle=""><i class="fa fa-users"></i> Obituaries</a></li>
              
              <li class=""><a class="" href="shop" data-toggle=""><i class="fa fa-bank"></i> Shop</a></li>

            <?php if (!isset($_SESSION['role']) || $_SESSION['role'] != 'admin'): ?>
              <li class=""><a class="" href="cart" data-toggle=""><i class="icon-basket"></i> My Cart <span class="count"><?=$cartCount?></span></a></li> 
            <?php endif ?>

            <?php if (isset($_SESSION['idno'])): ?>
              <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown"><i class="fa fa-user"></i> My Account</a>
                <ul class="dropdown-menu" role="menu">  
                <?php if ($_SESSION['role'] == 'admin'): ?>
                  <li><a href="admin"><i class="fa fa-tachometer"></i> Dashboard</a></li>
                <?php else: ?>
                  <li><a href="home"><i class="fa fa-tachometer"></i> Dashboard</a></li>
                <?php endif ?>                
                  <li><a href="logout"><i class="fa fa-sign-out"></i> Logout</a></li>
                </ul>
              </li>
               
            <?php else: ?>
              <li class=""><a class="" href="login" data-toggle=""> Login <i class="fa fa-sign-in"></i></a> </li>
               
            <?php endif ?>
             
            </ul>
          </div>
        </div>
      </nav>
      <section class="home-section home-fade home-full-height" id="home">
        <div class="hero-slider">
          <ul class="slides">

            <li class="bg-dark-30 bg-dark shop-page-header" style="background-image:url(&quot;images/slide1.jpg&quot;);">
              <div class="titan-caption">
                <div class="caption-content">
                  <div class="font-alt mb-30 titan-title-size-1">Welcome to</div>
                  <div class=" mb-30 titan-title-size-4" style="color: #E70AEF;text-shadow: -1px -1px 0 #fff, 1px -1px 0 #fff, -1px 1px 0 #fff, 1px 1px 0 #fff;"">E-BUROL DALISAY FUNERAL HOME</div>
                  <div class="font-alt mb-40 titan-title-size-1" style="text-shadow: -1px -1px 0 #000, 1px -1px 0 #000, -1px 1px 0 #000, 1px 1px 0 #000;">Shop with us for quality Funeral Services.</div><a class="section-scroll btn btn-border-w btn-round" href="shop"><i class="fa fa-star"></i> Start Shopping</a>
                </div>
              </div>
            </li>

        <?php if ($categories): ?>
          <?php foreach ($categories as $category): ?>
            <li class="bg-dark-30 bg-dark shop-page-header" style="background-image:url(&quot;images/categories/<?=$category['barner']?>&quot;);">
              <div class="titan-caption">
                <div class="caption-content">
                  <div class="font-alt mb-40 titan-title-size-4" style="color: #E70AEF;text-shadow: -1px -1px 0 #fff, 1px -1px 0 #fff, -1px 1px 0 #fff, 1px 1px 0 #fff;""><?=ucwords($category['title'])?></div>
                  <div class="font-alt mb-30 titan-title-size-1" style="text-shadow: -1px -1px 0 #000, 1px -1px 0 #000, -1px 1px 0 #000, 1px 1px 0 #000;"> Starting from</div>
                  <div class="font-alt mb-40 titan-title-size-1" style="text-shadow: -1px -1px 0 #000, 1px -1px 0 #000, -1px 1px 0 #000, 1px 1px 0 #000;">PHP. <?=number_format($category['least_price'],0,".",",")?></div>
                  <a class="section-scroll btn btn-border-w btn-round" href="shop#<?=$category['id']?>"><i class="fa fa-star"></i> More <?=ucwords($category['title'])?></a>
                </div>
              </div>
            </li>
          <?php endforeach ?>
        <?php endif ?>

          </ul>
        </div>
      </section>
      <div class="main">

      <?php if ($categories): ?>        
        <section class="module-small">
          <div class="container">
            <div class="row">
              <div class="col-sm-6 col-sm-offset-3">
                <h2 class="module-title font-alt" style="color: #9c27b0;">Products Categories</h2>
              </div>
            </div>
            <div class="row multi-columns-row">

            <?php foreach ($categories as $category): ?>
              <div class="col-sm-6 col-md-3 col-lg-3">
                <div class="shop-item" style="color: #9c27b0;">
                  <div class="shop-item-image"><img src="images/categories/<?=$category['sticker']?>" alt="Accessories Pack"/>
                    <div class="shop-item-detail"><a href="shop#<?=$category['id']?>" class="btn btn-round btn-b"><span class="icon-basket">More <?=ucwords($category['title'])?></span></a></div>
                  </div>
                  <h4 class="shop-item-title font-alt"><a href="shop#<?=$category['id']?>" style=""><?=ucwords($category['title'])?></a></h4>PHP. <?=number_format($category['least_price'],0,".",",")?>
                </div>
              </div>
            <?php endforeach ?>

            </div>
            <div class="row mt-30">
              <div class="col-sm-12 align-center"><a class="btn btn-b btn-round" href="shop" style="background: purple;"> See all products</a></div>
            </div>
          </div>
        </section>      
      <?php endif ?>

        <footer class="footer bg-dark">
          <div class="container">
            <div class="row">
              <div class="col-sm-6">
                <p style="color: #9c27b0;" class="copyright font-alt">&copy; 2019&nbsp;<a href="#">E-Burol Dalisy Funeral Home</a> | All Rights Reserved</p>
              </div>
              <div class="col-sm-6">
                <div class="footer-social-links"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-dribbble"></i></a><a href="#"><i class="fa fa-skype"></i></a>
                </div>
              </div>
            </div>
          </div>
        </footer>
      </div>
      <div class="scroll-up"><a href="#totop"><i class="fa fa-angle-double-up"></i></a></div>
    </main>
    <!--  
    JavaScripts
    =============================================
    -->
    <script src="assets/lib/jquery/dist/jquery.js"></script>
    <script src="assets/lib/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="assets/lib/wow/dist/wow.js"></script>
    <script src="assets/lib/jquery.mb.ytplayer/dist/jquery.mb.YTPlayer.js"></script>
    <script src="assets/lib/isotope/dist/isotope.pkgd.js"></script>
    <script src="assets/lib/imagesloaded/imagesloaded.pkgd.js"></script>
    <script src="assets/lib/flexslider/jquery.flexslider.js"></script>
    <script src="assets/lib/owl.carousel/dist/owl.carousel.min.js"></script>
    <script src="assets/lib/smoothscroll.js"></script>
    <script src="assets/lib/magnific-popup/dist/jquery.magnific-popup.js"></script>
    <script src="assets/lib/simple-text-rotator/jquery.simple-text-rotator.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/main.js"></script>
  </body>
</html>