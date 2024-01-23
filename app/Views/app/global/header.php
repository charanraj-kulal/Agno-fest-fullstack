<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="<?= base_url('assets/vendors/themify-icons/css/themify-icons.css'); ?>" />
    <link rel="stylesheet" href="<?= base_url('assets/css/meyawo.css'); ?>" />
    <style>
    .container {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
        -ms-flex-align: center;
            align-items: center;
    -webkit-box-pack: center;
        -ms-flex-pack: center;
            justify-content: center;
    min-height: 100vh;
    }

    .loader {
    max-width: 15rem;
    width: 100%;
    height: auto;
    stroke-linecap: round;
    }
   

    circle {
    fill: none;
    stroke-width: 3.5;
    -webkit-animation-name: preloader;
            animation-name: preloader;
    -webkit-animation-duration: 3s;
            animation-duration: 3s;
    -webkit-animation-iteration-count: infinite;
            animation-iteration-count: infinite;
    -webkit-animation-timing-function: ease-in-out;
            animation-timing-function: ease-in-out;
    -webkit-transform-origin: 170px 170px;
            transform-origin: 170px 170px;
    will-change: transform;
    }
    circle:nth-of-type(1) {
    stroke-dasharray: 550;
    }
    circle:nth-of-type(2) {
    stroke-dasharray: 500;
    }
    circle:nth-of-type(3) {
    stroke-dasharray: 450;
    }
    circle:nth-of-type(4) {
    stroke-dasharray: 300;
    }
    circle:nth-of-type(1) {
    -webkit-animation-delay: -0.15s;
            animation-delay: -0.15s;
    }
    circle:nth-of-type(2) {
    -webkit-animation-delay: -0.3s;
            animation-delay: -0.3s;
    }
    circle:nth-of-type(3) {
    -webkit-animation-delay: -0.45s;
    -moz-animation-delay:  -0.45s;
            animation-delay: -0.45s;
    }
    circle:nth-of-type(4) {
    -webkit-animation-delay: -0.6s;
    -moz-animation-delay: -0.6s;
            animation-delay: -0.6s;
    }

    @-webkit-keyframes preloader {
    50% {
        -webkit-transform: rotate(360deg);
                transform: rotate(360deg);
    }
    }

    @keyframes preloader {
    50% {
        -webkit-transform: rotate(360deg);
                transform: rotate(360deg);
    }
    .animate-bottom {
  position: relative;
  -webkit-animation-name: animatebottom;
  -webkit-animation-duration: 1s;
  animation-name: animatebottom;
  animation-duration: 1s
}

@-webkit-keyframes animatebottom {
  from { bottom:-100px; opacity:0 } 
  to { bottom:0px; opacity:1 }
}

@keyframes animatebottom { 
  from{ bottom:-100px; opacity:0 } 
  to{ bottom:0; opacity:1 }
}
    }

    </style>
        <title>header   </title>
</head>

<body data-spy="scroll" data-target=".navbar" data-offset="40" id="home" >
<div class="container">	
	<svg class="loader" viewBox="0 0 340 340">
		 <circle cx="170" cy="170" r="160" stroke="#FF0000"/>
		 <circle cx="170" cy="170" r="135" stroke="#000000"/>
		 <circle cx="170" cy="170" r="110" stroke="#FF0000"/>
		 <circle cx="170" cy="170" r="85" stroke="#000000"/>//Red
	</svg>
</div>

<div id="content" >
        
    <nav class="custom-navbar" data-spy="affix" data-offset-top="20">
        <div class="container">
            <a class="logo" href="#">Meyawo</a>
            <ul class="nav">
                <li class="item">
                    <a class="link" href="#home">Home</a>
                </li>
                <li class="item">
                    <a class="link" href="#about">About</a>
                </li>
                <li class="item">
                    <a class="link" href="#portfolio">Portfolio</a>
                </li>
                <li class="item">
                    <a class="link" href="#testmonial">Testimonial</a>
                </li>
                <li class="item">
                    <a class="link" href="#blog">Blog</a>
                </li>
                <li class="item">
                    <a class="link" href="#contact">Contact</a>
                </li>
                <li class="item ml-md-3">
                    <a href="<?= base_url('components.html'); ?>" class="btn btn-primary">Components</a>
                </li>
            </ul>
            <a href="javascript:void(0)" id="nav-toggle" class="hamburger hamburger--elastic">
                <div class="hamburger-box">
                    <div class="hamburger-inner"></div>
                </div>
            </a>
        </div>
    </nav>
    <!-- End of Page Navbar -->

    <!-- page header -->
    <header id="home" class="header"></header>
          <!-- footer -->
    <div class="container">
        <footer class="footer">
            <p class="mb-0">
                Copyright
                <script>
                    document.write(new Date().getFullYear());
                </script>
                &copy; <a href="http://www.devcrud.com">DevCRUD</a> Distribution
                <a href="https://themewagon.com">ThemeWagon</a>
            </p>
            <div class="social-links text-right m-auto ml-sm-auto">
                <a href="javascript:void(0)" class="link"><i class="ti-facebook"></i></a>
                <a href="javascript:void(0)" class="link"><i class="ti-twitter-alt"></i></a>
                <a href="javascript:void(0)" class="link"><i class="ti-google"></i></a>
                <a href="javascript:void(0)" class="link"><i class="ti-instagram"></i></a>
            </div>
        </footer>
    </div>
    <!-- end of page footer -->





<script src="<?= base_url('assets/vendors/jquery/jquery-3.4.1.js'); ?>"></script>
    <script src="<?= base_url('assets/vendors/bootstrap/bootstrap.bundle.js'); ?>"></script>
    <script src="<?= base_url('assets/vendors/bootstrap/bootstrap.affix.js'); ?>"></script>
    <script src="<?= base_url('assets/js/meyawo.js'); ?>"></script>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        // Simulate page load delay
        setTimeout(function () {
            // Hide loader and show content
            document.querySelector(".container").style.display = "none";
            document.getElementById("content").style.display = "block";
        }, 3000); // You can adjust the delay time as needed
    });
</script>

</body>
</html>