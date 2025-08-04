<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="description" content="<?= $meta_description; ?>">
    <meta name="author" content="manoj">
    <meta name="robots" content="noindex, follow" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="<?= base_url('assets/images/favicon.ico') ?>">

    <meta property="og:title" content="<?= $title; ?>">
    <meta property="og:description" content="<?= $meta_description; ?>">

    <!-- CSS here -->
    <link rel="stylesheet" href="<?= base_url('assets/css/vendor/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/vendor/animate.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/plugins/swiper.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/vendor/fontawesome-pro.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/vendor/spacing.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/plugins/odometer-theme-default.css') ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.2.0/magnific-popup.min.css" integrity="sha512-lvaVbvmbHhG8cmfivxLRhemYlTT60Ly9Cc35USrpi8/m+Lf/f/T8x9kEIQq47cRj1VQIFuxTxxCcvqiQeQSHjQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="<?= base_url('assets/css/newstyle.css') ?>">

    <!-- fonts-family -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter+Tight:ital,wght@0,100..900;1,100..900&family=Righteous&display=swap" rel="stylesheet">

    <!-- jQuery -->
   <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

   <!-- Owl Carousel CSS -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">

   <!-- Owl Carousel JS -->
   <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>   
    
</head>
<body>
<div class="container mt-3">
<nav class="navbar navbar-expand-lg navbar-light navbar-bg sticky-top">
    <a href="<?= base_url() ?>">
        <img src="<?= base_url('assets/images/maxvita-logo-small.png') ?>" alt="Maxvita logo">
    </a>
   <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">
         <li class="nav-item active">
            <a class="nav-link" href="<?= base_url() ?>">Home</a>
         </li>
         <li class="nav-item">
            <a class="nav-link" href="<?= base_url('about-us') ?>">About</a>
         </li>
         <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Products
            </a>
            <div class="dropdown-menu imgdropdown" aria-labelledby="navbarDropdown">
               <a class="dropdown-item potatochips" href="<?= base_url('potato-chips') ?>"><img src="<?= base_url('assets/images/product/tomato-ketchup.png') ?>" alt="Potato Chips"> Potato Chips</a>
               <a class="dropdown-item bakedcornsnacks" href="<?= base_url('corn-snacks') ?>"><img src="<?= base_url('assets/images/product/corn-rings-chatpata-masala.png') ?>" alt="Baked Corn Snacks"> Baked Corn Snacks</a>
               <a class="dropdown-item namkeensnacks" href="<?= base_url('namkeen-snacks') ?>"><img src="<?= base_url('assets/images/product/karumkure-chat-masala.png') ?>" alt="Namkeen Snacks"> Namkeen Snacks</a>
               <a class="dropdown-item fryumssnacks" href="<?= base_url('fryums-snacks') ?>"><img src="<?= base_url('assets/images/product/crunchy-noodles-veg-biriyani.png') ?>" alt="Fryums Snacks"> Fryums Snacks</a>
               <a class="dropdown-item rusks" href="<?= base_url('rusks-and-cookies') ?>"><img src="<?= base_url('assets/images/product/premium-milk-rusk.png') ?>" alt="Rusks and Cookies"> Rusks and Cookies</a>
            </div>
         </li>
         <li class="nav-item">
            <a class="nav-link" href="<?= base_url('blog') ?>">News</a>
         </li>
         <li class="nav-item">
            <a class="nav-link" href="<?= base_url('contact-us') ?>">Contact Us</a>
         </li>
      </ul>
   </div>
</nav>
<main>
