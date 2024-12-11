<!DOCTYPE html>
<html lang="zxx">

<!-- Mirrored from duruthemes.com/demo/html/travol/multipage-slideshow/gallery.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 28 Nov 2024 05:49:00 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <title>Travol Agency</title>
    <link rel="shortcut icon" href="img/favicon.png" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Barlow:wght@300;400;500&amp;family=Poppins:wght@300;400;500;600;700&amp;display=swap">
    <link rel="stylesheet" href="css/plugins.css" />
    <link rel="stylesheet" href="css/style.css" />
    <!-- <link rel="stylesheet" href="css/new-style.css" /> -->
     <style>
        /* .gallery-item {
            position: relative;
            overflow: hidden;
            margin-bottom: 30px; 
        }
        
        .gallery-box {
            position: relative;
            border-radius: 15px; 
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); 
            overflow: hidden; 
        }
        
        .gallery-img img {
            width: 100%;
            height: 100%;
            object-fit: cover; 
            border-radius: 15px;
            transition: transform 0.3s ease, filter 0.3s ease; 
        }
        
        
        .gallery-item:hover .gallery-img img {
            transform: scale(1.05);
            filter: brightness(1.1); 
        }
        
        .gallery-item:hover .gallery-box {
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2); 
        }
         */
     </style>
</head>
<body>
    <!-- Preloader -->
    <div class="preloader-bg"></div>
    <div id="preloader">
        <div id="preloader-status">
            <div class="preloader-position loader"> <span></span> </div>
        </div>
    </div>
    <!-- Progress scroll totop -->
    <div class="progress-wrap cursor-pointer">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>
    <!-- Navbar -->
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg">
    <div class="container">
        <!-- Logo -->
        <div class="logo-wrapper">
            <a class="logo" href="index.html"> <img src="img/slider/insight-logo-1.png" class="logo-img" alt=""> </a>
            <!-- <a class="logo" href="index.html"> <h2>TRAVOL <span>explore the world</span></h2> </a> -->
        </div>
        <!-- Button -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"><i class="ti-menu"></i></span> </button>
        <!-- Menu -->
        <div class="collapse navbar-collapse" id="navbar">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="about.html">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="about.html">About</a></li>
                </li>
                <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">Service<i class="ti-angle-down"></i></a>
                    <ul class="dropdown-menu">
                        <li><a href="holiday-package.html" class="dropdown-item"><span>Holiday Packages</span></a></li>
                        <li><a href="visa-assistence.html" class="dropdown-item"><span>Global Visa Assistance</span></a></li>
                        <li><a href="umrah-package.html" class="dropdown-item"><span>Umrah Packages</span></a></li>
                    </ul>
                </li>
                <li class="nav-item"><a class="nav-link" href="gallery.html">Gallery</a></li>
                <li class="nav-item"><a class="nav-link" href="contact.html">Contact</a></li>
            </ul>
        </div>
    </div>
    
</nav>
    <!-- Header Banner -->
    <div class="banner-header section-padding valign bg-img bg-fixed" data-overlay-dark="6" data-background="img/slider/slider-1.jpg">
        <div class="container">
            <div class="row">
                <div class="col-md-12 caption mt-90">
                    <h5></h5>
                    <h1><span>Gallery</span></h1>
                </div>
            </div>
        </div>
    </div>
    <!-- Image Gallery -->
    <section class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-subtitle">Images</div>
                    <div class="section-title">Image <span>Gallery</span></div>
                </div>
                <section class="section-1 filter">
                <div class="container">
                    <div class="row">
                    <?php
                    include('dashboard/root/db.php');
                $query = $mysqli->prepare('SELECT * FROM `ac_parts`');
                $query->execute();
                $query_result = $query->get_result();
                $nextUrls = array();
                for (; $row = $query_result->fetch_assoc(); ) {
                    $table = 'ac_parts';
                    $_SESSION['table'] = $table;
                    ?>
                    <div class="col-lg-3 col-md-4 col-6">
                        <div class="card" onclick="window.location.href='ac-parts/<?php echo $row['url'] ?>'">
                            <div class="img-div">
                                <img src="dashboard/gallery/ac_parts/<?php echo $row['images']; ?>" alt="" srcset="">
                            </div>
                        </div>
                    </div>

                <?php
                }
                // Store all next URLs in the session
                $_SESSION['next_urls'] = $nextUrls;
                ?>
                    </div>
                </div>
                </section>
                <div class="col-md-4 gallery-item">
                    <!-- <a href="img/slider/2.jpg" title="" class="img-zoom"> -->
                        <div class="">
                            <div class="gallery-img">
                                <img src="" class="img-fluid mx-auto d-block" >
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 gallery-item">
                    <!-- <a href="" title="" class="img-zoom"> -->
                        <div class="gallery-box">
                            <div class="gallery-img">
                                <img src="" class="img-fluid mx-auto d-block">
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 gallery-item">
                    <!-- <a href="img/slider/16.jpg" title="" class="img-zoom"> -->
                        <div class="gallery-box">
                            <div class="gallery-img">
                                <img src="" class="img-fluid mx-auto d-block" >
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-6 gallery-item">
                    <!-- <a href="img/slider/15.jpg" title="" class="img-zoom"> -->
                        <div class="">
                            <div class="gallery-img">
                                <img src="" class="img-fluid mx-auto d-block">
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-6 gallery-item">
                    <!-- <a href="img/slider/17.jpg" title="" class="img-zoom"> -->
                        <div class="">
                            <div class="">
                                <img src="" class="img-fluid mx-auto d-block">
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    
    
 <!-- Footer -->
 <footer class="footer clearfix">
    <div class="container">
        <!-- First footer -->
        <div class="first-footer">
            <div class="row">
                <div class="col-md-12">
                    <!-- <div class="links dark footer-contact-links">
                        <div class="footer-contact-links-wrapper">
                            <div class="footer-contact-link-wrapper">
                                <div class="image-wrapper footer-contact-link-icon">
                                    <div class="icon-footer"> <i class="flaticon-phone-call"></i> </div>
                                </div>
                                <div class="footer-contact-link-content">
                                    <h6>Call us</h6>
                                    <p>+1 123-456-0606</p>
                                </div>
                            </div>
                            <div class="footer-contact-links-divider"></div>
                            <div class="footer-contact-link-wrapper">
                                <div class="image-wrapper footer-contact-link-icon">
                                    <div class="icon-footer"> <i class="flaticon-message"></i> </div>
                                </div>
                                <div class="footer-contact-link-content">
                                    <h6>Write to us</h6>
                                    <p>info@travolagency.com</p>
                                </div>
                            </div>
                            <div class="footer-contact-links-divider"></div>
                            <div class="footer-contact-link-wrapper">
                                <div class="image-wrapper footer-contact-link-icon">
                                    <div class="icon-footer"> <i class="flaticon-placeholder"></i> </div>
                                </div>
                                <div class="footer-contact-link-content">
                                    <h6>Address</h6>
                                    <p>24 King St, SC 29401 USA</p>
                                </div>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
        <!-- Second footer -->
        <div class="second-footer">
            <div class="row">
                <!-- about & social icons -->
                <div class="col-md-4 widget-area">
                    <div class="widget clearfix">
                        <div class="footer-logo"> <img class="img-fluid" src="img/insight-logo-white.png" alt=""> </div>
                        <div class="widget-text">
                            <p>Quisque imperdiet sapien porttito the bibendum sellentesque the commodo erat acar accumsa lobortis, enim diam the nesuen.</p>
                            <div class="social-icons">
                                <ul class="list-inline">
                                    <li><a href="#"><i class="ti-instagram"></i></a></li>
                                    <li><a href="#"><i class="ti-twitter"></i></a></li>
                                    <li><a href="#"><i class="ti-facebook"></i></a></li>
                                    <li><a href="#"><i class="ti-youtube"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- quick links -->
                <div class="col-md-3 offset-md-1 widget-area">
                    <div class="widget clearfix usful-links">
                        <h3 class="widget-title">Quick Links</h3>
                        <ul>
                            <li><a href="index.html">Home</a></li>
                                <li><a href="about.html">About</a></li>
                                <li><a href="#">Service</a></li>
                                <li><a href="gallery.html">Gallery</a></li>
                               <li><a href="contact.html">Contact</a></li>
                        </ul>
                    </div>
                </div>
                <!-- subscribe -->
                <div class="col-md-4 widget-area">
                    <div class="widget clearfix">
                        <h3 class="widget-title">Address</h3>
                        <p>Sign up for our monthly blogletter to stay informed about travel and tours</p>
                        <!--<div class="widget-newsletter">-->
                        <!--    <form action="#">-->
                        <!--        <input type="email" placeholder="Email Address" required>-->
                        <!--        <button type="submit">Send</button>-->
                        <!--    </form>-->
                        <!--</div>-->
                    </div>
                </div>
            </div>
        </div>
        <!-- Bottom footer -->
        <div class="bottom-footer-text">
            <div class="row copyright">
                <div class="col-md-12">
                  <p class="mb-0">©2024 <a href="#">Designed By Iberrtechnology</a></p>
                </div>
            </div>
        </div>
    </div>
</footer>
    <!-- jQuery -->
    <script src="js/jquery-3.6.3.min.js"></script>
    <script src="js/jquery-migrate-3.0.0.min.js"></script>
    <script src="js/modernizr-2.6.2.min.js"></script>
    <script src="js/imagesloaded.pkgd.min.js"></script>
    <script src="js/jquery.isotope.v3.0.2.js"></script>
    <script src="js/pace.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scrollIt.min.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/jquery.magnific-popup.js"></script>
    <script src="js/YouTubePopUp.js"></script>
    <script src="js/select2.js"></script>
    <script src="js/datepicker.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/smooth-scroll.min.js"></script>
    <script src="js/custom.js"></script>
</body>

<!-- Mirrored from duruthemes.com/demo/html/travol/multipage-slideshow/gallery.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 28 Nov 2024 05:49:01 GMT -->
</html>