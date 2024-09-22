<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Aavirbhav - National Level IT Fest</title>
    
    <!-- General Meta Tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="Aavirbhav, IT Fest, National Level Fest, Technology Event, Coding Competition, Web Development Contest, Gaming Competitions, College IT Events">
    <meta name="description" content="Aavirbhav-2k24 is a national-level IT fest bringing together tech enthusiasts for competitions in coding, web development, gaming, and more. Join us for an exciting showcase of skills and innovation.">
    <meta name="author" content="Aavirbhav Team">
    
    <!-- Open Graph Meta Tags (Facebook, LinkedIn, etc.) -->
    <meta property="og:title" content="Aavirbhav - National Level IT Fest">
    <meta property="og:description" content="Join us at Aavirbhav, the premier national-level IT fest featuring exciting coding, web development, gaming, and innovation competitions.">
    <meta property="og:image" content="https://ik.imagekit.io/charanraj/UI/image%20(6).png">
    <meta property="og:url" content="https://aavirbhav.tech/">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Aavirbhav IT Fest">
    <meta property="og:locale" content="en_US">

    <!-- Twitter Card Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Aavirbhav - National Level IT Fest">
    <meta name="twitter:description" content="Discover Aavirbhav, the national-level IT fest where you can showcase your skills in coding, web design, gaming, and more.">
    <meta name="twitter:image" content="https://ik.imagekit.io/charanraj/UI/image%20(6).png">
    <meta name="twitter:site" content="@AavirbhavFest"> <!-- Replace with your Twitter handle -->
    <meta name="twitter:creator" content="@AavirbhavTeam">

    <!-- Additional SEO -->
    <link rel="canonical" href="https://aavirbhav.tech/">
    <meta name="robots" content="index, follow">

    <!-- Favicon -->
    <link href="<?= base_url('assets/web/imgs/favicon.png') ?>" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&family=Pacifico&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="<?= base_url('assets/web/vendors/animate/animate.min.css') ?>" rel="stylesheet">
    <link href="<?= base_url('assets/web/vendors/owlcarousel/assets/owl.carousel.min.css') ?>" rel="stylesheet">
    <link href="<?= base_url('assets/web/vendors/tempusdominus/css/tempusdominus-bootstrap-4.min.css') ?>" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="<?= base_url('assets/web/css/bootstrap.min.css') ?>" rel="stylesheet">

 

    <!-- Template Stylesheet -->
    <link href="<?= base_url('assets/web/css/landingpage.css') ?>" rel="stylesheet">
    <link href="<?= base_url('assets/web/css/countdown.css') ?>" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('assets/web/css/aboutus.css') ?>">
</head>

<body>
    
    <div class=" container-fluid bg-dark p-0 main-contents">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->

        <!-- popup overlay start -->
        <div class="overlay overlay-popup" onclick="closePopup()"></div>
            <div class="popup-container-main">
                <div id="popup-container" class="popup-container">
                    <span class="close-btn" onclick="closePopup()">&times;</span>
                    <div class="popup-content">
                        <p class="pop-txt1">Early Bird Tickets!!
                             <br>Grab your tickets for Aavirbhav at ₹1<span class="flicker-text">5</span>00 before
                             <br> <b><h1 class="pop-flicker-text">03 OCTOBER 2024</h1></b>
                        </p>
                       <p class="pop-txt2">Don't miss your chance to be part of an unforgettable experience! <br> Register now and dive into an exciting, enriching adventure that's waiting for you!</p>

                            <?php if( isset($_SESSION['isLoggedIn']) && !empty($_SESSION['isLoggedIn']) )
                        {
                        ?>
                            <button onclick="window.location.href='<?= base_url('dashboard') ?>'" class='glowing-btn'>
                                <span class='glowing-txt'>DAS<span class='faulty-letter'>H</span>BOARD</span>
                            </button>
                             <?php }else{ ?>
                            <button onclick="window.location.href='<?= base_url('login') ?>'" class='glowing-btn'>
                                <span class='glowing-txt'>L<span class='faulty-letter'>O</span>GIN</span>
                            </button>
                            
                        <?php } ?>
                </div>
            </div>
        </div>
         <!-- popup overlay end -->

        <!-- Navbar & Hero Start -->
        <div class="container-fluid position-relative p-0">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark px-4 px-lg-5 py-3 py-lg-0">
                <a href="" class="navbar-brand p-0">
                    <h1 class="logo-text  m-0">Agnesia</h1>
                    <!-- <img src="img/logo.png" alt="Logo"> -->
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0 pe-4">
                        <a href="#home" class="nav-item nav-link land-nav active">Home</a>
                        <a href="#about" class="nav-item nav-link land-nav">About</a>
                        <a href="#events" class="nav-item nav-link land-nav">Events</a>
                        <a href="#teams" class="nav-item nav-link land-nav">Committee</a>
                    </div>
                    <?php if( isset($_SESSION['isLoggedIn']) && !empty($_SESSION['isLoggedIn']) )
                        {
                        ?>
                            <a href="<?= base_url('dashboard') ?>" class="nav-btn  py-3 px-4" style="--color: #ff1867;"><span>Dashboard</span><i></i></a>
                        <?php }else{ ?>
                            <a href="<?= base_url('login') ?>" class="nav-btn  py-3 px-4" style="--color: #ff1867;"><span>Login</span><i></i></a>
                            
                        <?php } ?>
                    
                    
                </div>
            </nav>