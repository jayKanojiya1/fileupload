<!DOCTYPE html>
<html class="no-js" lang="en">

<head lang="en">
   <meta charset="UTF-8">
   <meta name="description" content="">
   <meta name="author" content="">
   <META http-equiv="Content-Type" content="text/html; charset= ISO-8859-1">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="keywords" content="">
   <meta name="viewport"
      content="width=devicep-width, initial-scale=1.0, user-scalable=no, maximum-scale=1, shrink-to-fit=no">
   <title> Welcome to bigbullestate.in</title>
   <link rel="icon" href="<?php echo base_url();?>/assets/images/favicon.png">
   <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
      integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
   <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>./assets/css/bootstrap.css">
   <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>./assets/css/style.css">
   <script src="<?php echo base_url();?>./assets/js/modernizr.custom.js"></script>
   <!-- <script src="//platform-api.sharethis.com/js/sharethis.js#property=5be16c4bafad5b00117c8a50&product=inline-share-buttons"></script> -->
   <style type="text/css">
      body {
         overflow: hidden;
      }

      /* Preloader */
      #preloader {
         position: fixed;
         top: 0;
         left: 0;
         right: 0;
         bottom: 0;
         background-color: #fff;
         /* change if the mask should have another color then white */
         z-index: 99;
         /* makes sure it stays on top */
      }

      #status {
         width: 200px;
         height: 200px;
         position: absolute;
         left: 50%;
         /* centers the loading animation horizontally one the screen */
         top: 50%;
         /* centers the loading animation vertically one the screen */
         background-image: url(assets/img/status.gif);
         /* path to your loading animation */
         background-repeat: no-repeat;
         background-position: center;
         margin: -100px 0 0 -100px;
         /* is width and height divided by two */
      }
   </style>
   <!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-P4JZWCK');</script>
<!-- End Google Tag Manager -->

</head>

<body class="ct-headroom--scrollUpMenu cssAnimate">
  <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-P4JZWCK"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
   <script type="text/javascript">
      $(window).on('load', function () { // makes sure the whole site is loaded
         $('#status').fadeOut(); // will first fade out the loading animation
         $('#preloader').delay(350).fadeOut('slow'); // will fade out the white DIV that covers the website.
         $('body').delay(350).css({
            'overflow': 'visible'
         });
      })
   </script>
   <nav class="ct-menuMobile">
      <ul class="ct-menuMobile-navbar">
         <li class="dropdown">
            <a href="<?php echo base_url();?>">
               Home
               <!-- <span class="caret"></span> -->
            </a>
         </li>
         <li class="dropdown">
            <a href="<?php echo base_url();?>#latestprojects">Projects</a>
         </li>
         <li>
            <a href="<?php echo base_url();?>#amenities">
                Amenities
               <!-- <span class="caret"> --></span>
            </a>
         <li><a href="<?php echo base_url();?>#faq">FAQ</a></li>
         <li><a href="<?php echo base_url('privacy');?>">Privacy Policy</a></li>
      </ul>
   </nav>
   <div id="ct-js-wrapper" class="ct-pageWrapper">
      <div class="ct-navbarMobile">
         <button type="button" class="navbar-toggle">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
         </button>
         <!--logo-->
         <a class="navbar-brand" href="<?php echo base_url();?>">
            <img src="<?php echo base_url();?>./assets/images/logo.png" alt="logo">
         </a>
         <button type="button" class="searchForm-toggle">
            <span class="sr-only">Toggle navigation</span>
            <span><i class="fa fa-search"></i></span>
         </button>
      </div>
      <nav class="navbar yamm" role="navigation" data-heighttopbar="40px" data-startnavbar="0">
         <div class="container d-flex justify-content-between align-items-center">
            <div class="navbar-header ct-panel--navbar">
               <a href="<?php echo base_url();?>">
                  <img src="<?php echo base_url();?>./assets/images/logo.png" alt="logo"
                     style="margin-left:0px;margin-top:0px;width:200px;padding: 0px 0;">
               </a>
            </div>
            <div class="collapse navbar-collapse">
               <ul class="nav navbar-nav ct-navbar--fadeInUp">
                  <li class="dropdown">
                     <a href="<?php echo base_url();?>">Home<span class=""></span></a>
                  </li>
                  <li class="dropdown"><a href="<?php echo base_url();?>#latestprojects">Projects</a>
                  </li>
                  <li><a href="<?php echo base_url();?>#amenities">Amenities</a></li>
                  <li><a href="<?php echo base_url();?>#faq">FAQ</a></li>
                  <li><a href="<?php echo base_url('privacy');?>">Privacy Policy</a></li>
               </ul>
            </div>
            <div class="clearfix"></div>
            <div class="ct-shapeBottom"></div>
         </div>
      </nav>
