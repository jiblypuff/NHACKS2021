<?php
session_start();
$host = "jiblypuff.local";
$dbUsername = "root";
$dbPassword = "";
$dbName = "ads";

$conn = new mysqli($host, $dbUsername, $dbPassword, $dbName);
?>

<!DOCTYPE html>
<html class="no-js" lang="zxx">
   <head>
      <meta charset="utf-8" />
      <meta http-equiv="x-ua-compatible" content="ie=edge" />
      <title>Category - ClassiGrids Classified Ads and Listing Website Template</title>
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
                                 <a href="category.php" class="active" aria-label="Toggle navigation">Categories</a>
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
                     <h1 class="page-title">Category</h1>
                  </div>
               </div>
               <div class="col-lg-6 col-md-6 col-12">
                  <ul class="breadcrumb-nav">
                     <li><a href="index.html">Home</a></li>
                     <li>category</li>
                  </ul>
               </div>
            </div>
         </div>
      </div>

      <section class="category-page section">
         <div class="container">
            <div class="row">
               <div class="col-lg-3 col-md-6 col-12">
                  <div class="category-sidebar">
                  <form class="default-form-style" method="POST">
                     <div class="single-widget search">
                        <div class="form-group button mb-0">
                           <button name="submit" value="submit" class="btn ">Search</button>
                        </div>
                        
                     </div>

                     
                     <div class="single-widget">
                        <h3>Select A Category</h3>
                        <div class="form-group">
                           <div class="selector-head">
                              <span class="arrow"><i class="lni lni-chevron-down"></i></span>
                              <select name="category" class="user-chosen-select">
                                 <option value="Outdoor">Outdoor</option>
                                 <option value="Tutoring">Tutoring</option>
                                 <option value="Digital">Digital</option>
                                 <option value="Caretaking">Caretaking</option>
                                 <option value="Housework">Housework</option>
                                 <option value="Assistance">Assistance</option>
                                 <option value="Miscellaneous">Miscellaneous</option>
                              </select>
                           </div>
                        </div>
                     </div>
                     <div class="single-widget range">
                        <h3>Pay Range</h3>
                        <input type="range" class="form-range" name="range" step="1" min="5" max="1000" value="10" onchange="rangePrimary.value=value">
                        <div class="range-inner">
                           <label>$</label>
                           <input type="text" id="rangePrimary" placeholder="5" />
                        </div>
                     </div>
                     <div class="single-widget condition">
                        <h3>Pay Type</h3>
                        <div class="form-group">
                           <div class="selector-head">
                              <span class="arrow"><i class="lni lni-chevron-down"></i></span>
                              <select name="price_type" class="user-chosen-select">
                                 <option value="fixed">Fixed</option>
                                 <option value="hourly">Price Per Hour</option>
                              </select>
                           </div>
                        </div>
                     </div>
                     </form>
                  </div>
               </div>

               <div class="col-lg-9 col-md-8 col-12">
                  <div class="category-grid-list">
                     <div class="row">
                        <div class="col-12">
                           <div class="category-grid-topbar">
                              <div class="row align-items-center">
                                 <div class="col-lg-6 col-md-6 col-12">
                                    <h3 class="title">Showing ads found</h3>
                                 </div>
                              </div>
                           </div>

                           <div class="row">
                              <!--iterate and shit here  -->
                              <?php 
                              $category = '';
                              $price = 0;
                              $price_type = '';
                              if (isset($_POST['submit'])) {
                                 if (isset($_POST['category']) && isset($_POST['range']) && isset($_POST['price_type'])) {
                                    $category = $_POST['category']; 
                                    $price = $_POST['range'];
                                    $price_type = $_POST['price_type'];
                                 }
                              }

                              $sql = "SELECT * FROM posts where price >= '$price';";
                              if($category != '') {
                                 $sql = "SELECT * FROM posts where category='$category' && price >= '$price' && price_type = '$price_type';";
                              } 
                              $result = mysqli_query($conn, $sql);
                              $resultCheck = mysqli_num_rows($result);

                              if($resultCheck > 0) {
                                 while ($row = mysqli_fetch_assoc($result)) {
                                    ?>
                                    
                                    <div class="col-lg-12 col-md-12 col-12">
                                          <div class="single-item-grid">
                                             <div class="row align-items-center">
                                                <div class="col-lg-5 col-md-7 col-12">
                                                   <div class="image">
                                                   <a href="redirect.php?role=<?php echo $row['id'];?>"><img src=<?php echo $row['image_link'];?> alt="#"></a>
                                                   </div>
                                                </div>
                                                <div class="col-lg-7 col-md-5 col-12">
                                                   <div class="content">
                                                      <a href="javascript:void(0)" class="tag"><?php echo $row['category'];?></a>
                                                      <h3 class="title">
                                                         <a href="redirect.php?role=<?php echo $row['id'];?>"><?php echo $row['title'];?></a>
                                                      </h3>
                                                      <p class="location"><a href="javascript:void(0)"><i class="lni lni-map-marker">
                                                         </i><?php echo $row['address'];?></a>
                                                      </p>
                                                      <ul class="info">
                                                         <li class="price">$<?php echo $row['price'];?> <?php echo $row['price_type'];?></li>
                                                      </ul>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    <?php
                                 }
                              }
                              ?>
                           </div>
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
   </body>
</html>