<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Agnesia - National Level Fest</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

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
        <!-- <div class="overlay overlay-popup" onclick="closePopup()"></div>
            <div class="popup-container-main">
                <div id="popup-container" class="popup-container">
                    <span class="close-btn" onclick="closePopup()">&times;</span>
                    <div class="popup-content">
                        <p class="pop-txt1">Early Bird Tickets!!
                             <br>Grab your tickets for AGNESIA at ₹1<span class="flicker-text">6</span>00 before
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
        </div> -->
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
                        <a href="#teams" class="nav-item nav-link land-nav">Teams</a>
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