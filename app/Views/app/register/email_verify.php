<!DOCTYPE html>
<html lang="en">
<head>
    <title>Registration-AAVIRBHAV</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="<?= base_url('images/icons/favicon.ico') ?>"/>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/web/css/bootstrap.min.css') ?>">

    <!-- Font Awesome CSS -->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/web/fonts/font-awesome-4.7.0/css/font-awesome.min.css') ?>">

    <!-- Material Design Iconic Font CSS -->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/web/fonts/iconic/css/material-design-iconic-font.min.css') ?>">

    <!-- loader-->
    <script type="module" src="https://unpkg.com/@dotlottie/player-component@1.0.0/dist/dotlottie-player.js"></script>

    <!-- Your Custom CSS Files -->
    <link rel="stylesheet"  href="<?= base_url('assets/web/css/util.css') ?>">
    <link rel="stylesheet"  href="<?= base_url('assets/web/css/main.css') ?>">

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
                    <form class="validate-form" id="verifyForm" action="<?= base_url('register/verify') ?>" method="post">
                        <span class="login100-form-title p-b-10">
                            Verify Your Email
                        </span>
                        <span class="login100-form-title p-b-15">
                            <i class="zmdi zmdi-email"></i>
                        </span>
    
                        <div class="wrap-input100 validate-input" data-validate = "Inavlid Otp">
                            <input class="input100" type="number" name="otp">
                            <span class="focus-input100" data-placeholder="OTP"></span>
                        </div>
    
                        <div class="container-login100-form-btn">
                            <div class="wrap-login100-form-btn">
                                <div class="login100-form-bgbtn"></div>
                                <button class="login100-form-btn" type="submit">
                                    Verify
                                </button>
                            </div>
                        </div>
                        <p class="vtxt1" id="otp-timer" style="color: white;">Regenerate OTP in: 01:00</p>
                        <!-- Add this HTML for the regenerate OTP link -->
                        <a class="vtxt2" href="<?= base_url('register/regenerateOTP') ?>" style="color: white; display: none;" id="regenerate-otp-link">Regenerate OTP</a>
                        <div class="text-center p-t-30">
                            <span class="vtxt1">
                                Not Your Email?
                            </span>
    
                            <a class="vrtxt2"  href="<?= base_url('/register') ?>">
                                Sign Up
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div id="dropDownSelect1"></div>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    
<!-- jQuery -->
<script src="<?= base_url('assets/web/js/jquery-3.6.0.min.js') ?>"></script>
<!-- Your Custom JS File -->
<script src="<?= base_url('assets/web/js/mainverifyemail.js') ?>"></script>
<script src="<?= base_url('assets/web/js/particles.min.js') ?>"></script>
<script src="<?= base_url('assets/web/js/app.js') ?>"></script>

</body>
</html>
