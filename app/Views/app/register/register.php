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
                        <span class="login100-form-title p-b-26">
                            Register
                        </span>
                        <span class="login100-form-title p-b-48">
                            <i class="zmdi zmdi-account"></i>
                        </span>

                        <div class="wrap-input100 validate-input" data-validate="Enter your name">
                            <input class="input100" type="text" name="name">
                            <span class="focus-input100" data-placeholder="Name"></span>
                        </div>

                        <div class="wrap-input100 validate-input" data-validate="Enter your college name">
                            <input class="input100" type="text" name="college_name">
                            <span class="focus-input100" data-placeholder="College Name"></span>
                        </div>

                        <div class="wrap-input100 validate-input" data-validate="Enter your phone number">
                            <input class="input100" type="text" name="phone_number">
                            <span class="focus-input100" data-placeholder="Phone Number"></span>
                        </div>

                        <div class="wrap-input100 validate-input" data-validate="Valid email is: a@b.c">
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
                                    Register
                                </button>
                            </div>
                        </div>

                        <div class="text-center p-t-115">
                            <span class="txt1">
                                Already have an account?
                            </span>

                            <a class="txt2" href="<?= base_url('login') ?>">
                                Login
                            </a>
                        </div> -->
                    <!-- </form>
                </div>
                <!-- <div class="card card-authentication1 mx-5 my-4 ">
            <div class="card-body">
            <div class="card-content p-2">
                <div class="text-center">
                    <img src="assets/images/logo-icon.png" alt="logo icon">
                </div>
            <div class="card-title text-uppercase text-center py-3">Sign Up</div>
                <form>
                <div class="form-group">
                <label for="exampleInputName" class="sr-only">Name</label>
                <div class="position-relative has-icon-right">
                    <input type="text" id="exampleInputName" class="form-control input-shadow" placeholder="Enter Your Name">
                    <div class="form-control-position">
                        <i class="icon-user"></i>
                    </div>
                </div>
                </div>
                <div class="form-group">
                <label for="exampleInputEmailId" class="sr-only">Email ID</label>
                <div class="position-relative has-icon-right">
                    <input type="text" id="exampleInputEmailId" class="form-control input-shadow" placeholder="Enter Your Email ID">
                    <div class="form-control-position">
                        <i class="icon-envelope-open"></i>
                    </div>
                </div>
                </div>
                <div class="form-group">
                <label for="exampleInputPassword" class="sr-only">Password</label>
                <div class="position-relative has-icon-right">
                    <input type="text" id="exampleInputPassword" class="form-control input-shadow" placeholder="Choose Password">
                    <div class="form-control-position">
                        <i class="icon-lock"></i>
                    </div>
                </div>
                </div>
                
                <div class="form-group">
                    <div class="icheck-material-white">
                    <input type="checkbox" id="user-checkbox" checked="" />
                    <label for="user-checkbox">I Agree With Terms & Conditions</label>
                    </div>
                    </div>
                
                <button type="button" class="btn btn-light btn-block waves-effect waves-light">Sign Up</button>
                
                
                </form>
            </div>
            </div>
            <div class="card-footer text-center py-3">
                <p class="text-warning mb-0">Already have an account? <a href="login.html"> Sign In here</a></p>
            </div>
            </div> -->
        
        <!--Start Back To Top Button-->
        <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
        <!--End Back To Top Button-->
            
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
    <script src="<?= base_url('assets/web/js/main.js') ?>"></script>
    <script src="<?= base_url('assets/web/js/particles.min.js') ?>"></script>
    <script src="<?= base_url('assets/web/js/app.js') ?>"></script>

</body>
</html>
