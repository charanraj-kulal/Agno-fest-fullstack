<!DOCTYPE html>
<html lang="en">

<head>
    <!--  Title -->
    <?php // $last_segment = $this->uri->segment($this->uri->total_segments()); if($last_segment == 'login' || $last_segment == 'registration' || $last_segment == 'passwordreset'){ ?>
    <title>Site Name - Login</title>
    <?php //} else { ?>
    <title><?php //echo ' - '.$page_title; ?></title>
    <?php //} ?>
    <!--  Required Meta Tag -->
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="handheldfriendly" content="true">
    <meta name="MobileOptimized" content="width">
    <meta name="description" content="Mordenize">
    <meta name="author" content>
    <meta name="keywords" content="Mordenize">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!--  Favicon -->
    <link rel="shortcut icon" type="image/png" href="<?php echo site_url('assets/app/images/favicon.ico');?>">
    <!-- Owl Carousel  -->
    <link rel="stylesheet" href="<?php echo site_url('assets/app/css/owl.carousel.min.css');?>">

    <!-- --------------------------------------------------- -->
    <!-- Prism Js -->
    <!-- --------------------------------------------------- -->
    <link rel="stylesheet" href="<?php echo site_url('assets/app/css/prism-okaidia.min.css');?>">
    

    <!-- --------------------------------------------------- -->
    <!-- datatable  Js -->
    <!-- --------------------------------------------------- -->
    <link rel="stylesheet" href="<?php echo site_url('assets/app/css/dataTables.bootstrap5.min.css');?>">
    <link rel="stylesheet" href="<?php echo site_url('assets/app/css/bootstrap-datepicker.min.css');?>">

    <!-- Core Css -->
    <link id="themeColors" rel="stylesheet" href="<?php echo site_url('assets/app/css/style.min.css');?>">
    <link id="themeColors" rel="stylesheet" href="<?php echo site_url('assets/app/css/select2.min.css');?>">
</head>

<body>
    <!-- Preloader -->
    <div class="preloader">
        <img src="<?php echo site_url('assets/app/images/favicon.ico');?>" alt="loader" class="lds-ripple img-fluid">
    </div>
