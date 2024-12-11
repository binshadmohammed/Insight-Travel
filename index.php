<!DOCTYPE html>
<html lang="zxx">

<!-- Mirrored from duruthemes.com/demo/html/travol/multipage-slideshow/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 28 Nov 2024 05:48:32 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <title>Travol Agency</title>
    <link rel="shortcut icon" href="img/favicon.png" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Barlow:wght@300;400;500&amp;family=Poppins:wght@300;400;500;600;700&amp;display=swap">
    <link rel="stylesheet" href="css/plugins.css" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/new-style.css" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <style>
    .img-div {
    position: relative;
    width: 600%; 
    height: 600px; 
    overflow: hidden;
    }

    .img-div img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    }

    .img-div:hover img {
    transform: scale(1);
    }
    @keyframes kenburnsUpRight {
    0% {
        transform: scale(1.3);
    }
    100% {
        transform: scale(1);
    }
    }

    .img-div img {
    animation: kenburnsUpRight 20s ease-in-out infinite; 
    }

    .headline {
    color: #fff; 
    text-shadow: 3px 3px 5px #000;
    font-weight: 700;
    letter-spacing: 2px;    
    margin: 20px 0;
    animation-delay: .4s;
    position: relative;
    margin-bottom: 0;
    font-family: 'Poppins', sans-serif;
    font-size: 55px;
    text-transform: uppercase;

}

.headline span {
    color:#fff;
}


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
                    <li class="nav-item"><a class="nav-link" href="index.html">Home</a></li>
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

<!-- Kenburns Slider -->
    <section class="section-1 filter">
    <div class="kenburnsSliderContainer">
        <div class="row">
        <?php
        include('dashboard/root/db.php');
    $query = $mysqli->prepare('SELECT * FROM `battery`');
    $query->execute();
    $query_result = $query->get_result();
    $nextUrls = array();
    for (; $row = $query_result->fetch_assoc(); ) {
        $table = 'battery';
        $_SESSION['table'] = $table;
        ?>
        <div class="col-lg-3 col-md-4 col-6">
            <div class="card" onclick="window.location.href='battery/<?php echo $row['url'] ?>'">
                <div class="img-div">
                    <img src="dashboard/gallery/battery/<?php echo $row['images']; ?>" alt="" srcset="">
                </div>
            </div>
        </div>
        <div class="v-middle caption text-center">
                <div class="container">
                    <div class="row h-100 justify-content-center">
                        <div class="col-md-10 text-center">
                            <h1 class="headline">Explore The World With <span>Travel</span></h1>
                        </div>
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
    </section><br><br><br>

    <!-- <aside class="kenburns-section" id="kenburnsSliderContainer" data-overlay-dark="3">
        <div class="kenburns-inner h-100">
            <div class="v-middle caption text-center">

            
                <div class="container">
                    <div class="row h-100 justify-content-center">
                        <div class="col-md-10 text-center">
                            <h4>Let's travel the world with us</h4>
                            <h1>Explore The World With <span>Travol</span></h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </aside> -->
    </div>
    <!-- About -->
    <section class="about cover section-padding-1">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mb-30 animate-box" data-animate-effect="fadeInUp">
                    <div class="section-subtitle">The best travel agency</div>
                    <div class="section-title">Discover the <span>world</span> with our guide</div>
                    <p>You can choose any country with good tourism. Agency elementum sesue the aucan vestibulum aliquam justo in sapien rutrum volutpat. Donec in quis the pellentesque velit. Donec id velit ac arcu posuere blane.</p>
                    <p>Hotel ut nisl quam nestibulum ac quam nec odio elementum ceisue the miss varius natoque penatibus et magnis dis parturient monte.</p>
                    <ul class="list-unstyled about-list mb-30">
                        <li>
                            <div class="about-list-icon"> <span class="ti-check"></span> </div>
                            <div class="about-list-text">
                                <p>20 Years of Experience</p>
                            </div>
                        </li>
                        <li>
                            <div class="about-list-icon"> <span class="ti-check"></span> </div>
                            <div class="about-list-text">
                                <p>150+ Tour Destinations</p>
                            </div>
                        </li>
                    </ul>
                    <!-- Info -->
                    <!-- <div class="phone-call mb-30">
                        <div class="icon"><span class="flaticon-phone-call"></span></div>
                        <div class="text">
                            <p>For information</p> <a href="tel:855-333-4444">855 333 4444</a>
                        </div>
                    </div> -->
                </div>
                <div class="col-md-5 offset-md-1 animate-box" data-animate-effect="fadeInUp">
                    <div class="img-exp">
                        <div class="about-img">
                            <div class="img"> <img src="img/about/home-11.png" class="img-fluid" alt=""> </div>
                        </div>
                        <div id="circle">
                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="300px" height="300px" viewBox="0 0 300 300" enable-background="new 0 0 300 300" xml:space="preserve">
                                <defs>
                                    <path id="circlePath" d=" M 150, 150 m -60, 0 a 60,60 0 0,1 120,0 a 60,60 0 0,1 -120,0 " />
                                </defs>
                                <circle cx="150" cy="100" r="75" fill="none" />
                                <g>
                                    <use xlink:href="#circlePath" fill="none" />
                                    <text fill="#0f2454">
                                        <textPath xlink:href="#circlePath"> . travel agency . travel agency </textPath>
                                    </text>
                                </g>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
 
    <!-- Tours 1 -->
    <section class="tours1 section-padding bg-lightnav" data-scroll-index="1">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-subtitle"><span>Choose your place</span></div>
                    <div class="section-title">Popular <span>Tours</span></div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8">
                    <div class="item">
                        <div class="position-re o-hidden"> <img src="img/about/top-view-dubai.jpg" alt=""> </div> <span class="category"><a href="#0">$2.500</a></span>
                        <div class="con">
                            <div class="rating"> <i class="star active"></i> <i class="star active"></i> <i class="star active"></i> <i class="star active"></i> <i class="star"></i>
                                <div class="reviews-count">(2 Reviews)</div>
                            </div>
                            <h5><a href="tour-details.html">Maldives Tour</a></h5>
                            <div class="line"></div>
                            <div class="row facilities">
                                <div class="col col-md-12">
                                    <ul>
                                        <li><i class="ti-time"></i> 10 Days</li>
                                        <li><i class="ti-user"></i> 12+</li>
                                        <li><i class="ti-location-pin"></i> Maldives</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="item">
                        <div class="position-re o-hidden"><img src="img/about/tour-1.jpg" alt=""></div> <span class="category"><a href="#0"></a></span>
                        <div class="con">
                            <h5><a href="tour-details.html">Italy Tour</a> </h5>
                            <div class="line"></div>
                            <div class="row facilities">
                                <div class="col col-md-12">
                                    <ul>
                                        <li><i class="ti-time"></i> 6 Days</li>
                                        <li><i class="ti-user"></i> 10+</li>
                                        <li><i class="ti-location-pin"></i> Italy</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="item">
                        <div class="position-re o-hidden"><img src="img/tours/france1.jpg" alt=""></div> <span class="category"><a href="#0"></a></span>
                        <div class="con">
                            <h5><a href="tour-details.html">France Tour</a> </h5>
                            <div class="line"></div>
                            <div class="row facilities">
                                <div class="col col-md-12">
                                    <ul>
                                        <li><i class="ti-time"></i> 10 Days</li>
                                        <li><i class="ti-user"></i> 6+</li>
                                        <li><i class="ti-location-pin"></i> France</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="item">
                        <div class="position-re o-hidden"><img src="img/tours/greece1.jpg" alt=""></div> <span class="category"><a href="#"></a></span>
                        <div class="con">
                            <h5><a href="tour-details.html">Greece Tour</a> </h5>
                            <div class="line"></div>
                            <div class="row facilities">
                                <div class="col col-md-12">
                                    <ul>
                                        <li><i class="ti-time"></i> 10 Days</li>
                                        <li><i class="ti-user"></i> 12+</li>
                                        <li><i class="ti-location-pin"></i> Greece</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="item">
                        <div class="position-re o-hidden"><img src="img/tours/canada1.jpg" alt=""></div> <span class="category"><a href="#0"></a></span>
                        <div class="con">
                            <h5><a href="tour-details.html">Canada Tour</a></h5>
                            <div class="line"></div>
                            <div class="row facilities">
                                <div class="col col-md-12">
                                    <ul>
                                        <li><i class="ti-time"></i> 7 Days</li>
                                        <li><i class="ti-user"></i> 10+</li>
                                        <li><i class="ti-location-pin"></i> Canada</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Numbers -->
    <section class="numbers">
        <div class="section-padding bg-img bg-fixed back-position-center" data-background="img/slider/16.jpg" data-overlay-dark="6">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <div class="item text-center">  
                            <span class="icon">
                                <i class="front flaticon-air-freight"></i>
                                <i class="back flaticon-air-freight"></i>
                            </span>
                            <h3 class="count">600</h3>
                            <h6>Flight Booking</h6>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="item text-center"> 
                             
                            <span class="icon">
                                <i class="font flaticon-house"></i>
                                <i class="back flaticon-house"></i>
                            </span>
                            <h3 class="count">250</h3>
                            <h6>Amazing Tour</h6>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="item text-center"> 
                            <span class="icon">
                                <i class="front flaticon-ship"></i>
                                <i class="back flaticon-ship"></i>
                            </span>
                            <h3 class="count">100</h3>
                            <h6>Cruises Booking</h6>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="item text-center"> 
                            <span class="icon">
                                <i class="front flaticon-tag"></i>
                                <i class="back flaticon-tag"></i>
                            </span>
                            <h3 class="count">100</h3>
                            <h6>Ticket Booking</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><br><br><br>
    <!-- Banner Tour Video -->
    <section class="dynamic-video-wrapper" data-overlay-dark="3">
        <video width="100%" height="100%" autoplay="autoplay" muted preload="auto" loop="loop">
            <source src="https://duruthemes.com/demo/html/travol/travel-video.mp4" type="video/mp4">
        </video>
        <div class="wrap-content v-middle">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 offset-md-2">
                        
                        <h1>Costa Victoria UAE</h1>
                        <h4><i class="ti-location-pin"></i> Maldives &nbsp;&nbsp; <i class="ti-timer"></i> 4 Days + 3 Nights</h4>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Italy & France Tours 1 -->
    <section class="tours1 section-padding">
        <div class="container">
            <div class="row mb-30">
                <div class="col-md-12">
                    <div class="section-subtitle">Most Popular</div>
                    <div class="section-title"><span>Travel</span> Countries</div>
                </div>
            </div>
            <!-- Italy Tours -->
            <div class="row mb-90">
                <div class="col-md-5">
                    <div class="country country1 mt-30">
                        <div class="section-title2">UAE</div>
                        <p>We provide you with interesting and exciting tours to different parts of the world. Orci varius natoque penatibus et magnis disney turien nascete ridiculus duru in the mus nellen.</p>
                        <div class="row tour-list">
                                        <div class="col-md-4">
                                            <ul>
                                                <li><i class="ti-location-pin"></i> <a href="#" class="link-btn">Roma</a></li>
                                                <li><i class="ti-location-pin"></i> <a href="#" class="link-btn">Milan</a></li>
                                                <li><i class="ti-location-pin"></i> <a href="#" class="link-btn">Verona</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-md-4">
                                            <ul>
                                                <li><i class="ti-location-pin"></i> <a href="#" class="link-btn">Venice</a></li>
                                                <li><i class="ti-location-pin"></i> <a href="#" class="link-btn">Florence</a></li>
                                                <li><i class="ti-location-pin"></i> <a href="#" class="link-btn">Perugia</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-md-4">
                                            <ul>
                                                <li><i class="ti-location-pin"></i> <a href="#" class="link-btn">San Marino</a></li>
                                                <li><i class="ti-location-pin"></i> <a href="#" class="link-btn">Parma</a></li>
                                                <li><i class="ti-location-pin"></i> <a href="#" class="link-btn">Aosta</a></li>
                                            </ul>
                                        </div>
                                    </div>
                        <div class="butn-dark mt-30 mb-30"> <a href="#" data-scroll-nav="1"><span>All Tours <i class="ti-arrow-right"></i></span></a> </div>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="owl-carousel owl-theme">
                        <div class="item">
                            <div class="position-re o-hidden"><img src="img/destination/rome1.jpg" alt=""></div> 
                            <span class="category"><a href="#0"></a></span>
                            <div class="con">
                                <h5><a href="tour-details.html">Rome</a> </h5>
                                <div class="line"></div>
                                <div class="row facilities">
                                    <div class="col col-md-12">
                                        <ul>
                                            <li><i class="ti-time"></i> 3 Days</li>
                                            <li><i class="ti-user"></i> 10+</li>
                                            <li><i class="ti-location-pin"></i> Italy</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="position-re o-hidden"><img src="img/destination/venice1.jpg" alt=""></div> 
                            <span class="category"><a href="#"></a></span>
                            <div class="con">
                                <h5><a href="tour-details.html">Venice</a></h5>
                                <div class="line"></div>
                                <div class="row facilities">
                                    <div class="col col-md-12">
                                        <ul>
                                            <li><i class="ti-time"></i> 4 Days</li>
                                            <li><i class="ti-user"></i> 8+</li>
                                            <li><i class="ti-location-pin"></i> Italy</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="position-re o-hidden"><img src="img/destination/milano.jpg" alt=""></div>
                            <span class="category"><a href="#0">$1.500</a></span>
                            <div class="con">
                                <h5><a href="tour-details.html">Milan</a> </h5>
                                <div class="line"></div>
                                <div class="row facilities">
                                    <div class="col col-md-12">
                                        <ul>
                                            <li><i class="ti-time"></i> 6 Days</li>
                                            <li><i class="ti-user"></i> 4+</li>
                                            <li><i class="ti-location-pin"></i> Italy</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="position-re o-hidden"><img src="img/destination/perugia1.jpg" alt=""></div>
                            <span class="category"><a href="#0"></a></span>
                            <div class="con">
                                <h5><a href="tour-details.html">Perugia</a></h5>
                                <div class="line"></div>
                                <div class="row facilities">
                                    <div class="col col-md-12">
                                        <ul>
                                            <li><i class="ti-time"></i> 4 Days</li>
                                            <li><i class="ti-user"></i> 5+</li>
                                            <li><i class="ti-location-pin"></i> Italy</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="position-re o-hidden"><img src="img/destination/parma1.jpg" alt=""></div> 
                            <span class="category"><a href="#0"></a></span>
                            <div class="con">
                                <h5><a href="tour-details.html">Parma</a></h5>
                                <div class="line"></div>
                                <div class="row facilities">
                                    <div class="col col-md-12">
                                        <ul>
                                            <li><i class="ti-time"></i> 7 Days</li>
                                            <li><i class="ti-user"></i> 8+</li>
                                            <li><i class="ti-location-pin"></i> Italy</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="position-re o-hidden"><img src="img/destination/aosta1.jpg" alt=""></div> 
                            <span class="category"><a href="#0"></a></span>
                            <div class="con">
                                <h5><a href="tour-details.html">Aosta</a></h5>
                                <div class="line"></div>
                                <div class="row facilities">
                                    <div class="col col-md-12">
                                        <ul>
                                            <li><i class="ti-time"></i> 9 Days</li>
                                            <li><i class="ti-user"></i> 10+</li>
                                            <li><i class="ti-location-pin"></i> Italy</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- France Tours -->
            <div class="row">
                <div class="col-md-7">
                    <div class="owl-carousel owl-theme">
                        <div class="item">
                            <div class="position-re o-hidden"><img src="img/destination/france-paris1.jpg" alt=""></div> 
                            <span class="category"><a href="#0"></a></span>
                            <div class="con">
                                <h5><a href="tour-details.html">Paris</a> </h5>
                                <div class="line"></div>
                                <div class="row facilities">
                                    <div class="col col-md-12">
                                        <ul>
                                            <li><i class="ti-time"></i> 7 Days</li>
                                            <li><i class="ti-user"></i> 12+</li>
                                            <li><i class="ti-location-pin"></i> France</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="position-re o-hidden"><img src="img/destination/france-lyon1.jpg" alt=""></div> 
                            <span class="category"><a href="#0"></a></span>
                            <div class="con">
                                <h5><a href="tour-details.html">Lyon</a> </h5>
                                <div class="line"></div>
                                <div class="row facilities">
                                    <div class="col col-md-12">
                                        <ul>
                                            <li><i class="ti-time"></i> 4 Days</li>
                                            <li><i class="ti-user"></i> 6+</li>
                                            <li><i class="ti-location-pin"></i> France</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="position-re o-hidden"><img src="img/destination/france-cannes1.jpg" alt=""></div> 
                            <span class="category"><a href="#0"></a></span>
                            <div class="con">
                                <h5><a href="tour-details.html">Cannes</a></h5>
                                <div class="line"></div>
                                <div class="row facilities">
                                    <div class="col col-md-12">
                                        <ul>
                                            <li><i class="ti-time"></i> 7 Days</li>
                                            <li><i class="ti-user"></i> 10+</li>
                                            <li><i class="ti-location-pin"></i> France</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="position-re o-hidden"><img src="img/destination/france-normandiya1.jpg" alt=""></div> 
                            <span class="category"><a href="#0"></a></span>
                            <div class="con">
                                <h5><a href="tour-details.html">Normandiya</a></h5>
                                <div class="line"></div>
                                <div class="row facilities">
                                    <div class="col col-md-12">
                                        <ul>
                                            <li><i class="ti-time"></i> 12 Days</li>
                                            <li><i class="ti-user"></i> 10+</li>
                                            <li><i class="ti-location-pin"></i> France</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="position-re o-hidden"><img src="img/destination/france-bordeaux1.jpg" alt=""></div> 
                            <span class="category"><a href="tours2.html"></a></span>
                            <div class="con">
                                <h5><a href="tour-details.html">Bordeaux</a></h5>
                                <div class="line"></div>
                                <div class="row facilities">
                                    <div class="col col-md-12">
                                        <ul>
                                            <li><i class="ti-time"></i> 6 Days</li>
                                            <li><i class="ti-user"></i> 5+</li>
                                            <li><i class="ti-location-pin"></i> France</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="position-re o-hidden"><img src="img/destination/france-marsielle1.jpg" alt=""></div>
                            <span class="category"><a href="#0"></a></span>
                            <div class="con">
                                <h5><a href="tour-details.html">Marseille</a></h5>
                                <div class="line"></div>
                                <div class="row facilities">
                                    <div class="col col-md-12">
                                        <ul>
                                            <li><i class="ti-time"></i> 5 Days</li>
                                            <li><i class="ti-user"></i> 7+</li>
                                            <li><i class="ti-location-pin"></i> France</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="country country2 mt-30">
                        <div class="section-title2">France, Europe</div>
                        <p>We provide you with interesting and exciting tours to different parts of the world. Orci varius natoque penatibus et magnis disney turien nascete in the ridiculus duru in the mus nellen.</p>
                        <div class="row tour-list">
                                        <div class="col-md-4">
                                            <ul>
                                                <li><i class="ti-location-pin"></i> <a href="#" class="link-btn">Paris</a></li>
                                                <li><i class="ti-location-pin"></i> <a href="#" class="link-btn">Orleans</a></li>
                                                <li><i class="ti-location-pin"></i> <a href="#" class="link-btn">Nantes</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-md-4">
                                            <ul>
                                                <li><i class="ti-location-pin"></i> <a href="#" class="link-btn">Lyon</a></li>
                                                <li><i class="ti-location-pin"></i> <a href="#" class="link-btn">Bordeaux</a></li>
                                                <li><i class="ti-location-pin"></i> <a href="#" class="link-btn">Toulouse</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-md-4">
                                            <ul>
                                                <li><i class="ti-location-pin"></i> <a href="#" class="link-btn">Marseille</a></li>
                                                <li><i class="ti-location-pin"></i> <a href="#" class="link-btn">Cannes</a></li>
                                                <li><i class="ti-location-pin"></i> <a href="#" class="link-btn">Nice</a></li>
                                            </ul>
                                        </div>
                                    </div>
                        <div class="butn-dark mt-30 mb-30"> <a href="#" data-scroll-nav="1"><span>All Tours <i class="ti-arrow-right"></i></span></a> </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog -->
    <section class="blog section-padding-1 bg-navy">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-subtitle"><span>Travel Blog</span></div>
                    <div class="section-title"><span>Travel</span> Experience</div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="owl-carousel owl-theme">
                        <div class="item">
                            <div class="position-re o-hidden"> <img src="img/blog/1.jpg" alt="">
                                <div class="date">
                                    <a href="post.html"> <span>Dec</span> <i>02</i> </a>
                                </div>
                            </div>
                            <div class="con"> <span class="category">
                                    <a href="blog.html">Travel</a>
                                </span>
                                <h5><a href="post.html">Practical information for traveling to Egypt</a></h5>
                            </div>
                        </div>
                        <div class="item">
                            <div class="position-re o-hidden"> <img src="img/blog/2.jpg" alt="">
                                <div class="date">
                                    <a href="post.html"> <span>Dec</span> <i>04</i> </a>
                                </div>
                            </div>
                            <div class="con"> <span class="category">
                                    <a href="blog.html">Tours</a>
                                </span>
                                <h5><a href="post.html">Most Popular Yacht Charter Routes</a></h5>
                            </div>
                        </div>
                        <div class="item">
                            <div class="position-re o-hidden"> <img src="img/blog/3.jpg" alt="">
                                <div class="date">
                                    <a href="post.html"> <span>Dec</span> <i>06</i> </a>
                                </div>
                            </div>
                            <div class="con"> <span class="category">
                                    <a href="blog.html">Travel</a>
                                </span>
                                <h5><a href="post.html">Tips Towards a Flawless Honeymoon</a></h5>
                            </div>
                        </div>
                        <div class="item">
                            <div class="position-re o-hidden"> <img src="img/blog/4.jpg" alt="">
                                <div class="date">
                                    <a href="post.h"> <span>Dec</span> <i>10</i> </a>
                                </div>
                            </div>
                            <div class="con"> <span class="category">
                                    <a href="blog.html">Travel</a>
                                </span>
                                <h5><a href="post.html">5 things you can not miss in Miami</a></h5>
                            </div>
                        </div>
                        <div class="item">
                            <div class="position-re o-hidden"> <img src="img/blog/5.jpg" alt="">
                                <div class="date">
                                    <a href="post.html"> <span>Dec</span> <i>15</i> </a>
                                </div>
                            </div>
                            <div class="con"> <span class="category">
                                    <a href="blog.html">Tours</a>
                                </span>
                                <h5><a href="post.html">Family Adventure Tours for Teens & Kids</a></h5>
                            </div>
                        </div>
                        <div class="item">
                            <div class="position-re o-hidden"> <img src="img/blog/6.jpg" alt="">
                                <div class="date">
                                    <a href="post.html"> <span>Dec</span> <i>18</i> </a>
                                </div>
                            </div>
                            <div class="con"> <span class="category">
                                    <a href="blog.html">Tours</a>
                                </span>
                                <h5><a href="post.html">Small group tours with flights from the USA</a></h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
   <!-- Footer -->
   <footer class="footer clearfix">
    <div class="container">
        <!-- Second footer -->
        <div class="second-footer">
            <div class="row">
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
                <div class="col-md-3 offset-md-1 widget-area">
                    <div class="widget clearfix usful-links">
                        <h3 class="widget-title">Quick Links</h3>
                        <ul>
                            <li><a href="about.html">About</a></li>
                            <li><a href="tours.html">Tours</a></li>
                            <li><a href="destination.html">Destinations</a></li>
                            <li><a href="blog.html">Blog</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4 widget-area">
                    <div class="widget clearfix">
                        <h3 class="widget-title">Subscribe</h3>
                        <p>Sign up for our monthly blogletter to stay informed about travel and tours</p>
                        <div class="widget-newsletter">
                            <form action="#">
                                <input type="email" placeholder="Email Address" required>
                                <button type="submit">Send</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bottom-footer-text">
            <div class="row copyright">
                <div class="col-md-12">
                    <p class="mb-0">©2023 <a href="#">DuruThemes</a>. All rights reserved.</p>
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
<script src="js/vegas.slider.min.js"></script>
<script src="js/custom.js"></script>






<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<!-- Vegas Background Slideshow (vegas.slider kenburns) -->


<script>

    $(document).ready(function() {
        $('.kenburnsSliderContainer').vegas({
            slides: [{
                src: ""
            }, {
                src: ""
            }, {
                src: "#"
            }, {
                src: ""
            }],
            overlay: true,
            transition: 'fade2',
            animation: 'kenburnsUpRight',
            transitionDuration: 1000,
            delay: 10000,
            animationDuration: 20000
        });
    });
</script>





</body>

<!-- Mirrored from duruthemes.com/demo/html/travol/multipage-slideshow/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 28 Nov 2024 05:48:53 GMT -->
</html>

