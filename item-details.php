<?php
session_start();
$host = "jiblypuff.local";
$dbUsername = "root";
$dbPassword = "";
$dbName = "ads";

$conn = new mysqli($host, $dbUsername, $dbPassword, $dbName);
$id = $_SESSION['role']; 
$sql = "SELECT * FROM posts where id = '$id';";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);    
?>
<!DOCTYPE html>
<html class="no-js" lang="zxx">
   <head>
      <meta charset="utf-8" />
      <meta http-equiv="x-ua-compatible" content="ie=edge" />
      <title>Ads Details - ClassiGrids Classified Ads and Listing Website Template</title>
      <meta name="description" content="" />
      <meta name="viewport" content="width=device-width, initial-scale=1" />
      <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.svg" />
      <link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
      <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
      <link rel="stylesheet" href="assets/css/LineIcons.2.0.css" />
      <link rel="stylesheet" href="assets/css/animate.css" />
      <link rel="stylesheet" href="assets/css/tiny-slider.css" />
      <link rel="stylesheet" href="assets/css/glightbox.min.css" />
      <link rel="stylesheet" href="assets/css/main.css" />
   </head>
   <body>
      <!--[if lte IE 9]>
      <p class="browserupgrade">
         You are using an <strong>outdated</strong> browser. Please
         <a href="https://browsehappy.com/">upgrade your browser</a> to improve
         your experience and security.
      </p>
      <![endif]-->
      <div class="preloader">
         <div class="preloader-inner">
            <div class="preloader-icon">
               <span></span>
               <span></span>
            </div>
         </div>
      </div>
      <header class="header navbar-area">
         <div class="container">
            <div class="row align-items-center">
               <div class="col-lg-12">
                  <div class="nav-inner">
                     <nav class="navbar navbar-expand-lg">
                        <a class="navbar-brand" href="index.html">
                        <img src="assets/images/logo/logo.svg" alt="Logo">
                        </a>
                        <button class="navbar-toggler mobile-menu-btn" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="toggler-icon"></span>
                        <span class="toggler-icon"></span>
                        <span class="toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                           <ul id="nav" class="navbar-nav ms-auto">
                              <li class="nav-item">
                                 <a href="index.html" aria-label="Toggle navigation">Home</a>
                              </li>
                              <li class="nav-item">
                                 <a href="category.php" aria-label="Toggle navigation">Categories</a>
                              </li>
                           </ul>
                        </div>
                        <div class="button header-button">
                           <a href="post-item.html" class="btn">Post an Ad</a>
                        </div>
                     </nav>
                  </div>
               </div>
            </div>
         </div>
      </header>
      <div class="breadcrumbs">
         <div class="container">
            <div class="row align-items-center">
               <div class="col-lg-6 col-md-6 col-12">
                  <div class="breadcrumbs-content">
                     <h1 class="page-title">Ad Details</h1>
                  </div>
               </div>
               <div class="col-lg-6 col-md-6 col-12">
                  <ul class="breadcrumb-nav">
                     <li><a href="index.html">Home</a></li>
                     <li>Ad Details</li>
                  </ul>
               </div>
            </div>
         </div>
      </div>
      <section class="item-details section">
         <div class="container">
            <div class="top-area">
               <div class="row">
                  <div class="col-lg-6 col-md-12 col-12">
                     <div class="product-images">
                        <main id="gallery">
                           <div class="main-img">
                              <img src=<?php echo $row['image_link'];?> id="current" alt="#">
                           </div>
                        </main>
                     </div>
                  </div>
                  <div class="col-lg-6 col-md-12 col-12">
                     <div class="product-info">
                        <h2 class="title"><?php echo $row['title'];?></h2>
                        <p class="location"><i class="lni lni-map-marker"></i><a href="javascript:void(0)"><?php echo $row['address'];?></a></p>
                        <h3 class="price">$<?php echo $row['price'];?> <?php echo $row['price_type'];?></h3>
                        <div class="list-info">
                           <h4>Job Information</h4>
                           <ul>
                              <li><span>Date:</span> <?php echo $row['date'];?></li>
                              <li><span>Time:</span> <?php echo $row['time'];?></li>
                           </ul>
                        </div>
                        <div class="contact-info">
                           <ul>
                              <li>
                                 <a href="tel:<?php echo $row['phone'];?>" class="call">
                                 <i class="lni lni-phone-set"></i>
                                 <?php echo $row['phone'];?>
                                 <span>Call & Get more info</span>
                                 </a>
                              </li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="item-details-blocks">
               <div class="row">
                  <div class="col-lg-8 col-md-7 col-12">
                     <div class="single-block description">
                        <h3>Description</h3>
                        <p><?php echo $row['description'];?></p>
                     </div>
                  </div>
                  <div class="col-lg-4 col-md-5 col-12">
                     <div class="item-details-sidebar">
                        <div class="single-block contant-seller comment-form ">
                           <h3>Contact Employer</h3>
                           
                           <h5><span class="lni lni-postcard"> Name of Employer:</span> <?php echo $row['name'];?></li> 
                           <h5><span class="lni lni-phone"> Phone number:</span> <?php echo $row['phone'];?></li> 
                           <h5><span class="lni lni-envelope"> E-mail:</span> <?php echo $row['email'];?></li>
                        
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      
      <a href="#" class="scroll-top btn-hover">
      <i class="lni lni-chevron-up"></i>
      </a>
      <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="assets/js/bootstrap.min.js"></script>
      <script src="assets/js/wow.min.js"></script>
      <script src="assets/js/tiny-slider.js"></script>
      <script src="assets/js/glightbox.min.js"></script>
      <script src="assets/js/main.js"></script>
      <script type="text/javascript">
         const current = document.getElementById("current");
         const opacity = 0.6;
         const imgs = document.querySelectorAll(".img");
         imgs.forEach(img => {
             img.addEventListener("click", (e) => {
                 //reset opacity
                 imgs.forEach(img => {
                     img.style.opacity = 1;
                 });
                 current.src = e.target.src;
                 //adding class 
                 //current.classList.add("fade-in");
                 //opacity
                 e.target.style.opacity = opacity;
             });
         });
      </script>
   </body>
</html>