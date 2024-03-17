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

    <!-- Your Custom CSS Files -->
    <link rel="stylesheet"  href="<?= base_url('assets/web/css/util.css') ?>">
    <link rel="stylesheet"  href="<?= base_url('assets/web/css/main.css') ?>">

</head>
<body>
    
    <div class="limiter">
        <div id="particles-js">
            <div class="wrap-login100">
                <div class="login100-form">
                    <form class="validate-form" action="<?= base_url('register/verify') ?>" method="post">
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
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div id="dropDownSelect1"></div>
    
<!-- jQuery -->
<script src="<?= base_url('assets/web/js/jquery-3.6.0.min.js') ?>"></script>
<!-- Your Custom JS File -->
<script src="<?= base_url('assets/web/js/main.js') ?>"></script>
<script src="<?= base_url('assets/web/js/particles.min.js') ?>"></script>
<script src="<?= base_url('assets/web/js/app.js') ?>"></script>

</body>
</html>
