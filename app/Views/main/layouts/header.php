<!doctype html>
<html lang="en">

<head>

   <!-- Required meta tags -->
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

   <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css') ?>">
   <link rel="stylesheet" href="<?= base_url('assets/css/magnific-popup.css') ?>">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   <link rel="stylesheet" href="<?= base_url('assets/css/animate.css') ?>">
   <link rel="stylesheet" href="<?= base_url('assets/css/style.css?v=3.5') ?>">
   <link rel="stylesheet" href="<?= base_url('assets/css/newstyles.css?v=3.5') ?>">

   <title><?= esc($title) ?></title>

   <meta name="title" content="<?= esc($title) ?>">
   <meta name="description" content="<?= esc($meta_description) ?>">
   <meta name="robots" content="index, follow">
   <meta name="author" content="Ipopi Ads">
   <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
   <meta name="language" content="English">
   <link rel="icon" type="image/x-icon" href="<?= base_url('favicon.ico') ?>">

</head>

<body>

   <div class="container mt-3">
      <nav class="navbar navbar-expand-lg navbar-light navbar-bg sticky-top">
         <a class="navbar-brand" href="<?= base_url() ?>">
            <img src="img/maxvita-logo-small.png" alt="Maxvita Logo">
         </a>
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
         </button>

         <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
               <li class="nav-item <?= $active == 'index' ? 'active' : '' ?>">
                  <a class="nav-link" href="/">Home</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="about-us">About</a>
               </li>
               <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                     Products
                  </a>
                  <div class="dropdown-menu imgdropdown" aria-labelledby="navbarDropdown">
                     <a class="dropdown-item potatochips" href="potato-chips"><img src="img/product/tomato-ketchup.png" alt=""> Potato Chips</a>
                     <a class="dropdown-item bakedcornsnacks" href="corn-snacks"><img src="img/product/corn-rings-chatpata-masala.png" alt=""> Baked Corn Snacks</a>
                     <a class="dropdown-item namkeensnacks" href="namkeen-snacks"><img src="img/product/karumkure-chat-masala.png" alt=""> Namkeen Snacks</a>
                     <a class="dropdown-item fryumssnacks" href="fryums-snacks"><img src="img/product/crunchy-noodles-veg-biriyani.png" alt=""> Fryums Snacks</a>
                     <a class="dropdown-item rusks" href="rusks-and-cookies"><img src="img/product/premium-milk-rusk.png" alt=""> Rusks and Cookies</a>
                  </div>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="blog">News</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="contact-us">Contact Us</a>
               </li>
            </ul>
         </div>
      </nav>