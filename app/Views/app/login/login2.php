<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login V2</title>
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

    <!-- Animate CSS -->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/web/css/animate.css') ?>">

    <!-- Hamburgers CSS -->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/web/css/hamburgers.min.css') ?>">

    <!-- Animsition CSS -->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/web/css/animsition.min.css') ?>">

    <!-- Select2 CSS -->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/web/css/select2.min.css') ?>">

    <!-- Date Range Picker CSS -->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/web/css/daterangepicker.css') ?>">

    <!-- Your Custom CSS Files -->
    <link rel="stylesheet"  href="<?= base_url('assets/web/css/util.css') ?>">
    <link rel="stylesheet"  href="<?= base_url('assets/web/css/main.css') ?>">

</head>
    <body>
        
        <div class="limiter">
            <div id="particles-js">
                <div class="wrap-login100">
                    <form class="login100-form validate-form" action="<?= base_url('login/authenticate') ?>" method="post">
                        <span class="login100-form-title p-b-26">
                            Welcome 
                        </span>
                        <span class="login100-form-title p-b-48">
                            <i class="zmdi zmdi-font"></i>
                        </span>
    
                        <div class="wrap-input100 validate-input" data-validate = "Valid email is: a@b.c">
                            <input class="input100" type="text" name="email">
                            <span class="focus-input100" data-placeholder="Email"></span>
                        </div>
    
                        <div class="wrap-input100 validate-input" data-validate="Enter password">
                            <span class="btn-show-pass">
                                <i class="zmdi zmdi-eye"></i>
                            </span>
                            <input class="input100" type="password" name="pass">
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
    
                        <div class="text-center p-t-115">
                            <span class="txt1">
                                Don’t have an account?
                            </span>
    
                            <a class="txt2" href="<?= base_url('/register') ?>">
                                Sign Up
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    
        <div id="dropDownSelect1"></div>
        
    <!-- jQuery -->
    <script src="<?= base_url('vendor/jquery/jquery-3.2.1.min.js') ?>"></script>

    <!-- Animsition JS -->
    <script src="<?= base_url('vendor/animsition/js/animsition.min.js') ?>"></script>

    <!-- Popper.js and Bootstrap JS -->
    <script src="<?= base_url('vendor/bootstrap/js/popper.js') ?>"></script>
    <script src="<?= base_url('vendor/bootstrap/js/bootstrap.min.js') ?>"></script>

    <!-- Select2 JS -->
    <script src="<?= base_url('vendor/select2/select2.min.js') ?>"></script>

    <!-- Date Range Picker JS -->
    <script src="<?= base_url('vendor/daterangepicker/moment.min.js') ?>"></script>
    <script src="<?= base_url('vendor/daterangepicker/daterangepicker.js') ?>"></script>

    <!-- Your Custom JS File -->
    <script src="<?= base_url('js/main.js') ?>"></script>
    <script src="<?= base_url('assets/web/js/particles.min.js') ?>"></script>
    <script src="<?= base_url('assets/web/js/app.js') ?>"></script>

</body>
</html>