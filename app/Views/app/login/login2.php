<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login-AAVIRBHAV</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Login to AGNISIA - Your trusted platform">
    <meta name="keywords" content="login, AGNISIA, secure login">

   <!-- Favicon -->
  <link href="<?= base_url('assets/web/imgs/favicon.png') ?>" rel="icon">

    <!-- loader-->
    <script type="module" src="https://unpkg.com/@dotlottie/player-component@1.0.0/dist/dotlottie-player.js"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/web/css/bootstrap.min.css') ?>">

    <!-- Font Awesome CSS -->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/web/fonts/font-awesome-4.7.0/css/font-awesome.min.css') ?>">

    <!-- Material Design Iconic Font CSS -->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/web/fonts/iconic/css/material-design-iconic-font.min.css') ?>">

    <!-- Animate CSS -->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/web/css/animate.css') ?>">

    <!-- Hamburgers CSS -->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/web/css/hamburgers.min.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/web/css/minimal.css') ?>">


    <!-- Animsition CSS -->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/web/css/animsition.min.css') ?>">

    <!-- Select2 CSS -->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/web/css/select2.min.css') ?>">

    <!-- Date Range Picker CSS -->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/web/css/daterangepicker.css') ?>">

    <!-- Your Custom CSS Files -->
    <link rel="stylesheet"  href="<?= base_url('assets/web/css/util.css') ?>">
    <link rel="stylesheet"  href="<?= base_url('assets/web/css/main.css') ?>">
         <script src="https://cdnjs.cloudflare.com/ajax/libs/bodymovin/5.7.5/lottie.min.js"></script>


</head>
    <body>
        <div id="loader-lottie-div" class="loader" style="display: none;">
            <dotlottie-player 
                src="<?= base_url('assets/web/imgs/loader/loader2.lottie')?>"
                background="transparent"
                
                style="width: 200px; height: 200px;"
                loop
                autoplay
            ></dotlottie-player>
        </div>
        <div class="info">
            <div class="info__icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" viewBox="0 0 24 24" height="24" fill="none">
                    <path fill="#393a37"
                        d="m12 1.5c-5.79844 0-10.5 4.70156-10.5 10.5 0 5.7984 4.70156 10.5 10.5 10.5 5.7984 0 10.5-4.7016 10.5-10.5 0-5.79844-4.7016-10.5-10.5-10.5zm.75 15.5625c0 .1031-.0844.1875-.1875.1875h-1.125c-.1031 0-.1875-.0844-.1875-.1875v-6.375c0-.1031.0844-.1875.1875-.1875h1.125c.1031 0 .1875.0844.1875.1875zm-.75-8.0625c-.2944-.00601-.5747-.12718-.7808-.3375-.206-.21032-.3215-.49305-.3215-.7875s.1155-.57718.3215-.7875c.2061-.21032.4864-.33149.7808-.3375.2944.00601.5747.12718.7808.3375.206.21032.3215.49305.3215.7875s-.1155.57718-.3215.7875c-.2061.21032-.4864.33149-.7808.3375z">
                    </path>
                </svg>
            </div>
            <div class="info__title" id="alert-title"></div>
            <div class="info__close" id="closeAlert">
                <svg height="20" viewBox="0 0 20 20" width="20" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="m15.8333 5.34166-1.175-1.175-4.6583 4.65834-4.65833-4.65834-1.175 1.175 4.65833 4.65834-4.65833 4.6583 1.175 1.175 4.65833-4.6583 4.6583 4.6583 1.175-1.175-4.6583-4.6583z"
                        fill="#393a37"></path>
                </svg>
            </div>
        </div>
        
        <div class="limiter">
            <div id="particles-js">
                <div class="wrap-login100">
                    <div class="login100-form">
                        <!-- <div id="lottie-animation" style="width: 100%; height: 200px; margin: 20px 0;"> -->

                            <form class="validate-form" id="loginVerifyForm" action="<?= base_url('login/auth') ?>" method="post">
                                <span class="login100-form-title p-b-10">
                                    Welcome to AGNISIA
                                </span>
                                <span class="login100-form-title p-b-15">
                                    <img src="<?= base_url('assets/web/imgs/favicon.png') ?>" class="logo-icon" style="width: 50px;" alt="logo icon">
                                </span>
            
                                <div class="wrap-input100 validate-input" data-validate = "Enter valid email">
                                    <input class="input100" type="text" name="email">
                                    <span class="focus-input100" data-placeholder="Email"></span>
                                </div>
            
                                <div class="wrap-input100 validate-input" data-validate="Minimus password 8 charecter">
                                    <span class="btn-show-pass">
                                        <i class="zmdi zmdi-eye" id="togglePassword"></i>
                                    </span>
                                    <input class="input100" type="password" name="password" id="passwordField">
                                    <span class="focus-input100" data-placeholder="Password"></span>
                                </div>

            
                                <div class="container-login100-form-btn">
                                    <div class="wrap-login100-form-btn">
                                        <div class="login100-form-bgbtn"></div>
                                        <button class="login100-form-btn">
                                            Login
                                        </button>
                                    </div>
                                </div>
            
                                <div class="text-center p-t-30">
                                    <span class="txt1">
                                        Don’t have an account?
                                    </span>
            
                                    <a class="txt2"  href="<?= base_url('/register') ?>">
                                        Sign Up
                                    </a>
                                </div>
                            </form>
                        <!-- </div> -->
                    </div>
                </div>
            </div>
        </div>
    
        <div id="dropDownSelect1"></div>
        
    <!-- jQuery -->
    <script src="<?= base_url('assets/web/js/jquery-3.6.0.min.js') ?>"></script>
    <!-- Animsition JS -->
    <script src="<?= base_url('assets/web/js/animsition.min.js') ?>"></script>

    <!-- Popper.js and Bootstrap JS -->
    <script src="<?= base_url('assets/web/js/popper-2.11.8.js') ?>"></script>
    <script src="<?= base_url('assets/web/js/bootstrap.min.js') ?>"></script>

    <!-- Select2 JS -->
    <script src="<?= base_url('assets/web/js/select2.min.js') ?>"></script>

    <!-- Date Range Picker JS -->
    <script src="<?= base_url('assets/web/js/moment.min.js') ?>"></script>
    <!-- <script src="<?= base_url('assets/web/js/daterangepicker.js') ?>"></script> -->
     <script src="https://cdnjs.cloudflare.com/ajax/libs/pace/1.2.4/pace.min.js"></script> <!-- Include Pace.js here -->



     <script>
        document.addEventListener('DOMContentLoaded', function() {
            var animation = lottie.loadAnimation({
            container: document.getElementById('lottie-animation'), // the dom element that will contain the animation
            renderer: 'svg',
            loop: true,
            autoplay: true,
            path: 'assets/web/imgs/loader/animation.json' // the path to the animation json
            });
        });
    </script>


    <!-- Your Custom JS File -->
    <script src="<?= base_url('assets/web/js/mainlogin.js') ?>"></script>
    <script src="<?= base_url('assets/web/js/particles.min.js') ?>"></script>
    <script src="<?= base_url('assets/web/js/app.js') ?>"></script>

</body>
</html>