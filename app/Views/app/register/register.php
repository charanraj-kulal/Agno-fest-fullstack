<!DOCTYPE html>
<html lang="en">
<head>
    <title>Registration V2</title>
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
                <form class="login100-form validate-form" action="<?= base_url('register/create') ?>" method="post">
                <!-- <form class="login100-form validate-form" action="<?= base_url('jwtregister/create') ?>" method="post"> -->
                    <span class="login100-form-title p-b-16">
                        Register
                    </span>
                    <span class="login100-form-title p-b-20">
                        <i class="zmdi zmdi-account"></i>
                    </span>
                    <table>
                        <tr>
                            <td>
                                <div class="wrap-input100 validate-input" data-validate="Enter your name">
                                    <input class="input100" type="text" name="name">
                                    <span class="focus-input100" data-placeholder="Name"></span>
                                </div>
                            </td>
                            <td>
                                <div class="wrap-input100 validate-input" data-validate="Enter your college name">
                                    <input class="input100" type="text" name="college_name">
                                    <span class="focus-input100" data-placeholder="College Name"></span>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="wrap-input100 validate-input" data-validate="Enter valid phone number">
                                    <input class="input100" type="text" name="phone_number">
                                    <span class="focus-input100" data-placeholder="Phone Number"></span>
                                </div>
                            </td>
                            <td>
                                <div class="wrap-input100 validate-input" data-validate="Enter valid email">
                                    <input class="input100" type="text" name="email">
                                    <span class="focus-input100" data-placeholder="Email"></span>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <div class="wrap-input100-pass validate-input" data-validate="Enter password">
                                    <span class="btn-show-pass">
                                        <i class="zmdi zmdi-eye"></i>
                                    </span>
                                    <input class="input100" type="password" name="pass">
                                    <span class="focus-input100" data-placeholder="Password"></span>
                                </div>
                            </td>
                        </tr>
                    </table>
                    <div class="container-login100-form-btn">
                        <div class="wrap-login100-form-btn">
                            <div class="login100-form-bgbtn"></div>
                            <button class="login100-form-btn">
                                Register
                            </button>
                        </div>
                    </div>
                    <div class="text-center p-t-10">
                        <span class="txt1">
                            Already have an account?
                        </span>
                        <a class="txt2" href="<?= base_url('login') ?>">
                            Login
                        </a>
                    </div>
                </form>

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

    <!-- Your Custom JS File -->
    <script src="<?= base_url('assets/web/js/main.js') ?>"></script>
    <script src="<?= base_url('assets/web/js/particles.min.js') ?>"></script>
    <script src="<?= base_url('assets/web/js/app.js') ?>"></script>

</body>
</html>
