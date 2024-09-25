<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
  <meta name="description" content=""/>
  <meta name="author" content=""/>
  <title>Dashboard - Agnisia</title>
  <!-- loader-->
  <script type="module" src="https://unpkg.com/@dotlottie/player-component@1.0.0/dist/dotlottie-player.js"></script>
  <link href="<?= base_url('assets/web/css/pace.min.css') ?>" rel="stylesheet"/>
  <script src="<?= base_url('assets/web/js/pace.min.js') ?>"></script>
  
  <!-- Favicon -->
  <link href="<?= base_url('assets/web/imgs/favicon.png') ?>" rel="icon">
  <!-- Vector CSS -->
  <link href="<?= base_url('assets/web/plugins/vectormap/jquery-jvectormap-2.0.5.css') ?>" rel="stylesheet"/>
  <!-- simplebar CSS-->
  <link href="<?= base_url('assets/web/plugins/simplebar/css/simplebar.css') ?>" rel="stylesheet"/>
  <link href="<?= base_url('assets/web/css/select2.min.css') ?>" rel="stylesheet"/>
  <!-- Bootstrap core CSS-->
  <link href="<?= base_url('assets/web/css/bootstrap.min.css') ?>" rel="stylesheet"/>
  <link href="<?= base_url('assets/web/css/bootstrap.css') ?>" rel="stylesheet"/>


  <!-- animate CSS-->
  <link href="<?= base_url('assets/web/css/animate.css') ?>" rel="stylesheet" type="text/css"/>
  <!-- Icons CSS-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link href="<?= base_url('assets/web/css/icons.css') ?>" rel="stylesheet" type="text/css"/>
  
  
  <!-- Sidebar CSS-->
  <link href="<?= base_url('assets/web/css/sidebar-menu.css') ?>" rel="stylesheet"/>
  <!-- Custom Style-->
  <link href="<?= base_url('assets/web/css/app-style.css') ?>" rel="stylesheet"/>
  
</head>

<body class="bg-theme bg-theme1">
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
    
<?php $userid= session('id'); ?>
 <!-- Edit User Modal -->

<!-- Start wrapper-->
<div id="wrapper">
    

 
  <!--Start sidebar-wrapper-->
    
    <div class="main-contents">

        <section class="left-fixed-nav">
            <nav class="sidebar-wrapper" data-simplebar="" data-simplebar-auto-hide="true">
                <div class="sidebar-contents">
                    <div class="brand-logo">
                        <a href="<?= base_url('/') ?>">
                            <img src="<?= base_url('assets/web/imgs/logo-no-bg-letters.png') ?>" class="logo-icon" alt="logo icon">
                          
                        </a>
                    </div>
                    <ul class="sidebar-menu do-nicescrol">
                        <li class="sidebar-header">MAIN NAVIGATION</li>

                        <?php 
                        // Check if the user type is set in the session
                        if (isset($_SESSION['user_type'])) {
                            $userType = $_SESSION['user_type'];
                            if ($userType == 1) : ?> <!-- Check if user type is student -->
                                <li>
                                    <a class="active enroll enroll-clicked" href="#enroll-section-id" onclick="handleClick('enroll-nav')" id="enroll-nav">
                                        <i class="zmdi zmdi-hospital"></i> <span>Register</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#accomodation-section-id" onclick="handleClick('accomodation_nav')" id="accomodation_nav">
                                        <i class="zmdi zmdi-hotel"></i> <span>Accommodation</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#rules-section-id" onclick="handleClick('rules_nav')" id="rules_nav">
                                        <i class="zmdi zmdi-format-list-bulleted"></i> <span>Rules</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#settings-section-id" onclick="handleClick('settings_nav')" id="settings_nav">
                                        <i class="zmdi zmdi-info"></i> <span>Info</span>
                                    </a>
                                </li>
                            <?php elseif ($userType == 2) : ?> <!-- Check if user type is admin -->
                                <li>
                                    <a class="active manage-user manage-user-clicked" href="#manageuser-section-id" onclick="handleClick('manage_user_nav')" id="manage_user_nav">
                                        <i class="zmdi zmdi-edit"></i> <span>Manage users</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#qual-section-id" onclick="handleClick('qual_nav')" id="qual_nav">
                                        <i class="zmdi zmdi-format-list-bulleted"></i> <span>Qual Teams</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#settings-section-id" onclick="handleClick('settings_nav')" id="settings_nav">
                                        <i class="zmdi zmdi-info"></i> <span>Info</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#reports-section-id" onclick="handleClick('reports_nav')" id="reports_nav">
                                        <i class="zmdi zmdi-chart"></i> <span>Reports</span> <i class="fas fa-angle-left right"></i>
                                    </a>
                                    <ul class="extra-links" id="extra-links">
                                        <li>
                                            <a href="#all-students-reports-section-id" onclick="handleClick('all-students-reports_nav')" id="all-students-reports_nav"><i class="far fa-circle"></i><span>All users</span></a>
                                        </li>
                                        <li>
                                            <a href="#all-events-reports-section-id" onclick="handleClick('all-events-reports_nav')" id="all-events-reports_nav"><i class="far fa-circle"></i><span>Event reg details</span></a>
                                        </li>
                                        <li>
                                            <a href="#all-accomodations-reports-section-id" onclick="handleClick('all-accomodations-reports_nav')" id="all-accomodations-reports_nav"><i class="far fa-circle"></i><span>Accommodation details</span></a>
                                        </li>
                                        <!-- <li>
                                            <a href="#all-total-reports-section-id" onclick="handleClick('all-total-reports_nav')" id="all-total-reports_nav"><i class="far fa-circle"></i><span>All Reports</span></a>
                                        </li> -->
                                    </ul>
                                </li>
                            <?php endif; ?>
                        <?php } ?>

                    </ul>
                
                </div>
            </nav>




            <div class="clearfix"></div>
        
            <div class="content-wrapper">
                <div class="container-fluid">
                   <!-- change user details modal  -->
                    <input type="checkbox" name="dialog_state" id="dialog_state" class="dialog_state">
                    <div id='dialog'>
                        <label id="dlg-back" for="dialog_state"></label>
                        <div id='dlg-wrap'>
                            <label id="dlg-close" for="dialog_state"><i class="fa fa-times"></i></label>
                            <h2 id='dlg-header'>Edit User</h2>
                            <div class="modal-body">
                                <form id="editUserForm">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-8 col-sm-6 col-4">
                                            <div class="form-group">
                                                <label for="editUserName">Name</label>
                                                <input  type="text" class="form-control  input100" id="editUserName" name="editUserName">
                                            </div>
                                            <div class="form-group">
                                                <label for="editCollegeName">College Name</label>
                                                <input  type="text" class="form-control input100" style="color: black;" id="editCollegeName" name="editCollegeName" readonly>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-8 col-sm-6 col-4">
                                            <div class="form-group">
                                                <label for="editEmail">Email</label>
                                                <input  type="email" class="form-control input100" id="editEmail" name="editEmail" readonly>
                                            </div>
                                            <div class="form-group">
                                                <label for="editUserRole">User Type</label>
                                                <select  class="form-control input100" id="editUserRole" name="editUserRole">
                                                    <option value="2">Admin</option>
                                                    <option value="1">Student</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div align="center">
                                        <div id="updateUser" class='button positive'><i class="fa fa-check"></i>Save</div><span style="margin-left:20px; margin-right:20px"></span>
                                        <label class='button' for="dialog_state"><i class="fa fa-times"></i> Cancel</label>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- change user details modal  -->          
                    <!-- change password modal  -->
                    <input type="checkbox" name="dialog_state" id="pswd_dialog_state" class="dialog_state">
                    <div id='dialog'>
                        <label id="dlg-back" for="pswd_dialog_state"></label>
                        <div id='dlg-wrap'>
                            <label id="dlg-close" for="pswd_dialog_state"><i class="fa fa-times"></i></label>
                            <h2 id='dlg-header'>Change Password</h2>
                            <div class="modal-body">
                                <form id="changePassForm">
                                    <div class="form-group-pswd">
                                        <label for="currentPassword">Current Password</label>
                                        <input type="password" class="form-control input100" id="currentPassword" name="currentPassword">
                                    </div>
                                    <div class="form-group-pswd">
                                        <label for="newPassword">New Password</label>
                                        <input type="password" class="form-control input100" id="newPassword" name="newPassword">
                                    </div>
                                    <div class="form-group-pswd">
                                        <label for="confirmPassword">Confirm Password</label>
                                        <input type="password" class="form-control input100" id="confirmPassword" name="confirmPassword">
                                    </div>
                                    <div align="center">
                                        <div class="modal-buttons">
                                            <div style="background-color:#008000; color:white"  id="changePassword" class='button positive'><i class="fa fa-check" style="margin-right: 10px;"></i>Change</div>
                                            <span style="margin-left:20px; margin-right:20px"></span>
                                            <label style="background-color:#FF0000; color:white" class='button' for="pswd_dialog_state"><i class="fa fa-times" style="margin-right: 10px;"></i> Cancel</label>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- change password modal  -->
                    <!-- confirmation modal for closing account  -->
                    <input type="checkbox" name="dialog_state" id="cls_dialog_state" class="dialog_state">
                    <div id='dialog'>
                        <label id="dlg-back" for="cls_dialog_state"></label>
                        <div id='dlg-wrap'>
                            <label id="dlg-close" for="cls_dialog_state"><i class="fa fa-times"></i></label>
                            <h2 id='dlg-header'>Confirm to close your account?</h2>
                            <div class="modal-body">
                                <form id="confirmform">
                                    <div class="form-group-pswd">
                                     <p style="color:#FFCC00"><i class="fa-solid fa-triangle-exclamation" style="margin-right: 10px;"></i>By closing your account, all your enrollment and accommodation data will be permanently deleted. This action is irreversible.  </p>   
                                    </div>
                                    <div align="center">
                                        <div class="modal-buttons">
                                        
                                        
                                        <label  class='button negetive' for="cls_dialog_state"><i class="fa-solid fa-circle-xmark" style="margin-right: 10px;"></i> Cancel </label>
                                        <div style="background-color:#FF0000; color:white" id="closeAccount" class='button positive'><i class="fa-solid fa-circle-check" style="margin-right: 10px;"></i>Confirm</div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- confirmation modal for closing account  -->
                     <!-- delete user confirmation modal   -->
                    <input type="checkbox" name="dialog_state" id="del_user_dialog_state" class="dialog_state">
                    <div id='dialog'>
                        <label id="dlg-back" for="cls_dialog_state"></label>
                        <div id='dlg-wrap'>
                            <label id="dlg-close" for="del_user_dialog_state"><i class="fa fa-times"></i></label>
                            <h2 id='dlg-header'>Confirm to delete selected user?</h2>
                            <div class="modal-body">
                                <form id="confirmform">
                                    <div class="form-group-pswd">
                                     <p style="color:#FFCC00"><i class="fa-solid fa-triangle-exclamation" style="margin-right: 10px;"></i>Are you sure want to delete this user?</p>   
                                    </div>
                                    <div align="center">
                                        <div class="modal-buttons">
                                            <label  class='button' for="del_user_dialog_state"><i class="fa-solid fa-circle-xmark"></i> Cancel </label>
                                            <div style="background-color:#FF0000; color:white" id="deleteUser" class='button positive'><i class="fa-solid fa-circle-check"style="margin-right: 10px;"></i>confirm</div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- delete user confirmation modal   -->
                    <!-- enroll starts -->
                    <div class="card mt-3 enroll-dashboard-cards" id="enroll-section-id">
                        <div cass="card-content">
                            <div class="row row-group m-0">
                                <div class="enroll-section" >
                                   
                                   

                                    <div class="section-heading">
                                        <p class="enroll-title">EVENT REGISTRATION FORM</p>
                                    </div>

                                    <form id="eventForm">
                                    
                                        <div class="forms-events">
                                            <div class="twoblock-event-container">
                                                <!-- coding -->
                                                <div class="event">
                                                    <div class="event-name">
                                                        <p class="sanskrit-name">drudavishti</p>
                                                        <p class="normal-name">(Coding)</p>
                                                    </div>
                                                        <div class="member">
                                                            <div class="member-name">
                                                                <div class="member-input">
                                                                    <input class="form-inputbox memname" id="coding-mem1" name="coding-mem1" type="text" oninput="validateTextInput(this)" placeholder="">
                                                                    <label for="coding-mem1">Team Member 1</label>
                                                                </div>
                                                                <p class="error-msg" id="coding-tmem1-err">Name is required!</p>
                                                            </div>

                                                            <div class="member-contact">
                                                                <div class="contact-input">
                                                                    <input class="form-inputbox memcontact" id="coding-mem1-con1" name="coding-mem1-con1" type="tel" inputmode="numeric" pattern="[6789][0-9]{9}" maxlength="10" oninput="validateNumericInput(this)" placeholder="">
                                                                    <label for="coding-mem1-con1">Contact Number</label>
                                                                </div>
                                                                <p class="error-msg" id="coding-con1-err">Contact number is required!</p>
                                                            </div>
                                                        </div>
                                                    

                                                        <div class="member">
                                                            <div class="member-name">
                                                                <div class="member-input">
                                                                    <input class="form-inputbox memname" id="coding-mem2" name="coding-mem2" type="text" oninput="validateTextInput(this)" placeholder="">
                                                                    <label for="coding-mem2">Team Member 2</label>
                                                                </div>
                                                                <p class="error-msg" id="coding-tmem2-err">Name is required!</p>
                                                            </div>

                                                            <div class="member-contact">
                                                            
                                                                <div class="contact-input">
                                                                    <input class="form-inputbox memcontact" id="coding-mem2-con2" name="coding-mem2-con2" type="tel" inputmode="numeric" pattern="[6789][0-9]{9}" maxlength="10" oninput="validateNumericInput(this)" placeholder="">
                                                                    <label for="coding-mem2-con2">Contact Number</label>
                                                                </div>
                                                                <p class="error-msg" id="coding-con2-err">Contact number is required!</p>
                                                            </div>
                                                        </div>
                                                
                                                </div>

                                                <!-- Web design -->
                                                <div class="event">
                                                    <div class="event-name">
                                                        <p class="sanskrit-name">Vebkalpana</p>
                                                        <p class="normal-name">(Web Design)</p>
                                                    </div>

                                                    <div class="member">
                                                        <div class="member-name">
                                                            <div class="member-input">
                                                                <input class="form-inputbox memname" id="web-mem1" name="web-mem1" type="text" oninput="validateTextInput(this)" placeholder="">
                                                                <label for="web-mem1">Team Member 1</label>
                                                            </div>
                                                            <p class="error-msg" id="web-tmem1-err">Name is required!</p>
                                                        </div>

                                                        <div class="member-contact">
                                                            <div class="contact-input">
                                                                <input class="form-inputbox memcontact" id="web-mem1-con1" name="web-mem1-con1" type="tel" inputmode="numeric" pattern="[6789][0-9]{9}" maxlength="10" oninput="validateNumericInput(this)" placeholder="">
                                                                <label for="web-mem1-con1">Contact Number</label>
                                                            </div>
                                                            <p class="error-msg" id="web-con1-err">Contact number is required!</p>
                                                        </div>
                                                    </div>

                                                    <div class="member">
                                                        <div class="member-name">
                                                            <div class="member-input">
                                                                <input class="form-inputbox memname" id="web-mem2" name="web-mem2" type="text" oninput="validateTextInput(this)" placeholder="">
                                                                <label for="web-mem2">Team Member 2</label>
                                                            </div>
                                                            <p class="error-msg" id="web-tmem2-err">Name is required!</p>
                                                        </div>

                                                        <div class="member-contact">
                                                            <div class="contact-input">
                                                                <input class="form-inputbox memcontact" id="web-mem2-con2" name="web-mem2-con2" type="tel" inputmode="numeric" pattern="[6789][0-9]{9}" maxlength="10" oninput="validateNumericInput(this)" placeholder="">
                                                                <label for="web-mem2-con2">Contact Number</label>
                                                            </div>
                                                            <p class="error-msg" id="web-con2-err">Contact number is required!</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class="threeblock-event-container">
                                                <div class="threeblock-event-1st-container">
                                                    <!-- Gaming -->
                                                    <div class="event">
                                                        <div class="event-name">
                                                            <p class="sanskrit-name">Kurukshetra</p>
                                                            <p class="normal-name">(Gaming)</p>
                                                        </div>

                                                        <div class="member">
                                                            <div class="member-name">
                                                                <div class="member-input">
                                                                    <input class="form-inputbox memname" id="gaming-mem1" name="gaming-mem1" type="text" oninput="validateTextInput(this)" placeholder="">
                                                                    <label for="gaming-mem1">Team Member 1</label>
                                                                </div>
                                                                <p class="error-msg" id="gaming-tmem1-err">Name is required!</p>
                                                            </div>

                                                            <div class="member-contact">
                                                                <div class="contact-input">
                                                                    <input class="form-inputbox memcontact" id="gaming-mem1-con1" name="gaming-mem1-con1" type="tel" inputmode="numeric" pattern="[6789][0-9]{9}" maxlength="10" oninput="validateNumericInput(this)" placeholder="">
                                                                    <label for="gaming-mem1-con1">Contact Number</label>
                                                                </div>
                                                                <p class="error-msg" id="gaming-con1-err">Contact number is required!</p>
                                                            </div>
                                                        </div>

                                                        <div class="member">
                                                            <div class="member-name">
                                                                <div class="member-input">
                                                                    <input class="form-inputbox memname" id="gaming-mem2" name="gaming-mem2" type="text" oninput="validateTextInput(this)" placeholder="">
                                                                    <label for="gaming-mem2">Team Member 2</label>
                                                                </div>
                                                                <p class="error-msg" id="gaming-tmem2-err">Name is required!</p>
                                                            </div>

                                                            <div class="member-contact">
                                                                <div class="contact-input">
                                                                    <input class="form-inputbox memcontact" id="gaming-mem2-con2" name="gaming-mem2-con2" type="tel" inputmode="numeric" pattern="[6789][0-9]{9}" maxlength="10" oninput="validateNumericInput(this)" placeholder="">
                                                                    <label for="gaming-mem2-con2">Contact Number</label>
                                                                </div>
                                                                <p class="error-msg" id="gaming-con2-err">Contact number is required!</p>
                                                            </div>
                                                        </div>

                                                        <div class="member">
                                                            <div class="member-name">
                                                                <div class="member-input">
                                                                    <input class="form-inputbox memname" id="gaming-mem3" name="gaming-mem3" type="text" oninput="validateTextInput(this)" placeholder="">
                                                                    <label for="gaming-mem3">Team Member 3</label>
                                                                </div>
                                                                <p class="error-msg" id="gaming-tmem3-err">Name is required!</p>
                                                            </div>

                                                            <div class="member-contact">
                                                                <div class="contact-input">
                                                                    <input class="form-inputbox memcontact" id="gaming-mem3-con3" name="gaming-mem3-con3" type="tel" inputmode="numeric" pattern="[6789][0-9]{9}" maxlength="10" oninput="validateNumericInput(this)" placeholder="">
                                                                    <label for="gaming-mem3-con3">Contact Number</label>
                                                                </div>
                                                                <p class="error-msg" id="gaming-con3-err">Contact number is required!</p>
                                                            </div>
                                                        </div>

                                                        <div class="member">
                                                            <div class="member-name">
                                                                <div class="member-input">
                                                                    <input class="form-inputbox memname" id="gaming-mem4" name="gaming-mem4" type="text" oninput="validateTextInput(this)" placeholder="">
                                                                    <label for="gaming-mem4">Team Member 4</label>
                                                                </div>
                                                                <p class="error-msg" id="gaming-tmem4-err">Name is required!</p>
                                                            </div>

                                                            <div class="member-contact">
                                                                <div class="contact-input">
                                                                    <input class="form-inputbox memcontact" id="gaming-mem4-con4" name="gaming-mem4-con4" type="tel" inputmode="numeric" pattern="[6789][0-9]{9}" maxlength="10" oninput="validateNumericInput(this)" placeholder="">
                                                                    <label for="gaming-mem4-con4">Contact Number</label>
                                                                </div>
                                                                <p class="error-msg" id="gaming-con4-err">Contact number is required!</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                    <!-- IT manager -->
                                                    <div class="event">
                                                        <div class="event-name">
                                                            <p class="sanskrit-name">Yantra vimarshak</p>
                                                            <p class="normal-name">(IT Manager)</p>
                                                        </div>

                                                        <div class="member">
                                                            <div class="member-name">
                                                                <div class="member-input">
                                                                    <input class="form-inputbox memname" id="it-mem1" name="it-mem1" type="text" oninput="validateTextInput(this)" placeholder="">
                                                                    <label for="it-mem1">Team Member 1</label>
                                                                </div>
                                                                <p class="error-msg" id="it-tmem1-err">Name is required!</p>
                                                            </div>

                                                            <div class="member-contact">
                                                                <div class="contact-input">
                                                                    <input class="form-inputbox memcontact" id="it-mem1-con1" name="it-mem1-con1" type="tel" inputmode="numeric" pattern="[6789][0-9]{9}" maxlength="10" oninput="validateNumericInput(this)" placeholder="">
                                                                    <label for="it-mem1-con1">Contact Number</label>
                                                                </div>
                                                                <p class="error-msg" id="it-con1-err">Contact number is required!</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="threeblock-event-2nd-container">
                                                    <!-- Mad Ad -->
                                                    <div class="event">
                                                        <div class="event-name">
                                                            <p class="sanskrit-name">Srujanatmak Vignapan</p>
                                                            <p class="normal-name">(Mad Ad)</p>
                                                        </div>

                                                        <div class="member">
                                                            <div class="member-name">
                                                                <div class="member-input">
                                                                    <input class="form-inputbox memname" id="mad-mem1" name="mad-mem1" type="text" oninput="validateTextInput(this)" placeholder="">
                                                                    <label for="mad-mem1">Team Member 1</label>
                                                                </div>
                                                                <p class="error-msg" id="mad-tmem1-err">Name is required!</p>
                                                            </div>

                                                            <div class="member-contact">
                                                                <div class="contact-input">
                                                                    <input class="form-inputbox memcontact" id="mad-mem1-con1" name="mad-mem1-con1" type="tel" inputmode="numeric" pattern="[6789][0-9]{9}" maxlength="10" oninput="validateNumericInput(this)" placeholder="">
                                                                    <label for="mad-mem1-con1">Contact Number</label>
                                                                </div>
                                                                <p class="error-msg" id="mad-con1-err">Contact number is required!</p>
                                                            </div>
                                                        </div>

                                                        <div class="member">
                                                            <div class="member-name">
                                                                <div class="member-input">
                                                                    <input class="form-inputbox memname" id="mad-mem2" name="mad-mem2" type="text" oninput="validateTextInput(this)" placeholder="">
                                                                    <label for="mad-mem2">Team Member 2</label>
                                                                </div>
                                                                <p class="error-msg" id="mad-tmem2-err">Name is required!</p>
                                                            </div>

                                                            <div class="member-contact">
                                                                <div class="contact-input">
                                                                    <input class="form-inputbox memcontact" id="mad-mem2-con2" name="mad-mem2-con2" type="tel" inputmode="numeric" pattern="[6789][0-9]{9}" maxlength="10" oninput="validateNumericInput(this)" placeholder="">
                                                                    <label for="mad-mem2-con2">Contact Number</label>
                                                                </div>
                                                                <p class="error-msg" id="mad-con2-err">Contact number is required!</p>
                                                            </div>
                                                        </div>

                                                        <div class="member">
                                                            <div class="member-name">
                                                                <div class="member-input">
                                                                    <input class="form-inputbox memname" id="mad-mem3" name="mad-mem3" type="text" oninput="validateTextInput(this)" placeholder="">
                                                                    <label for="mad-mem3">Team Member 3</label>
                                                                </div>
                                                                <p class="error-msg" id="mad-tmem3-err">Name is required!</p>
                                                            </div>

                                                            <div class="member-contact">
                                                                <div class="contact-input">
                                                                    <input class="form-inputbox memcontact" id="mad-mem3-con3" name="mad-mem3-con3" type="tel" inputmode="numeric" pattern="[6789][0-9]{9}" maxlength="10" oninput="validateNumericInput(this)" placeholder="">
                                                                    <label for="mad-mem3-con3">Contact Number</label>
                                                                </div>
                                                                <p class="error-msg" id="mad-con3-err">Contact number is required!</p>
                                                            </div>
                                                        </div>

                                                        <div class="member">
                                                            <div class="member-name">
                                                                <div class="member-input">
                                                                    <input class="form-inputbox memname" id="mad-mem4" name="mad-mem4" type="text" oninput="validateTextInput(this)" placeholder="">
                                                                    <label for="mad-mem4">Team Member 4</label>
                                                                </div>
                                                                <p class="error-msg" id="mad-tmem4-err">Name is required!</p>
                                                            </div>

                                                            <div class="member-contact">
                                                                <div class="contact-input">
                                                                    <input class="form-inputbox memcontact" id="mad-mem4-con4" name="mad-mem4-con4" type="tel" inputmode="numeric" pattern="[6789][0-9]{9}" maxlength="10" oninput="validateNumericInput(this)" placeholder="">
                                                                    <label for="mad-mem4-con4">Contact Number</label>
                                                                </div>
                                                                <p class="error-msg" id="mad-con4-err">Contact number is required!</p>
                                                            </div>
                                                        </div>
                                                        <div class="member">
                                                            <div class="member-name">
                                                                <div class="member-input">
                                                                    <input class="form-inputbox memname" id="mad-mem5" name="mad-mem5" type="text" oninput="validateTextInput(this)" placeholder="">
                                                                    <label for="mad-mem5">Team Member 5</label>
                                                                </div>
                                                                <p class="error-msg" id="mad-tmem4-err">Name is required!</p>
                                                            </div>

                                                            <div class="member-contact">
                                                                <div class="contact-input">
                                                                    <input class="form-inputbox memcontact" id="mad-mem5-con5" name="mad-mem5-con5" type="tel" inputmode="numeric" pattern="[6789][0-9]{9}" maxlength="10" oninput="validateNumericInput(this)" placeholder="">
                                                                    <label for="mad-mem5-con5">Contact Number</label>
                                                                </div>
                                                                <p class="error-msg" id="mad-con5-err">Contact number is required!</p>
                                                            </div>
                                                        </div>
                                                        <div class="member">
                                                            <div class="member-name">
                                                                <div class="member-input">
                                                                    <input class="form-inputbox memname" id="mad-mem6" name="mad-mem6" type="text" oninput="validateTextInput(this)" placeholder="">
                                                                    <label for="mad-mem6">Team Member 6</label>
                                                                </div>
                                                                <p class="error-msg" id="mad-tmem6-err">Name is required!</p>
                                                            </div>

                                                            <div class="member-contact">
                                                                <div class="contact-input">
                                                                    <input class="form-inputbox memcontact" id="mad-mem6-con6" name="mad-mem6-con6" type="tel" inputmode="numeric" pattern="[6789][0-9]{9}" maxlength="10" oninput="validateNumericInput(this)" placeholder="">
                                                                    <label for="mad-mem6-con6">Contact Number</label>
                                                                </div>
                                                                <p class="error-msg" id="mad-con6-err">Contact number is required!</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="twoblock-event-container">
                                                <!-- Treasure hunt -->
                                                <div class="event">
                                                    <div class="event-name">
                                                        <p class="sanskrit-name">Anveshana</p>
                                                        <p class="normal-name">(Treasure Hunt)</p>
                                                    </div>

                                                    <div class="member">
                                                        <div class="member-name">
                                                            <div class="member-input">
                                                                <input class="form-inputbox memname" id="hunt-mem1" name="hunt-mem1" type="text" oninput="validateTextInput(this)" placeholder="">
                                                                <label for="hunt-mem1">Team Member 1</label>
                                                            </div>
                                                            <p class="error-msg" id="hunt-tmem1-err">Name is required!</p>
                                                        </div>

                                                        <div class="member-contact">
                                                            <div class="contact-input">
                                                                <input class="form-inputbox memcontact" id="hunt-mem1-con1" name="hunt-mem1-con1" type="tel" inputmode="numeric" pattern="[6789][0-9]{9}" maxlength="10" oninput="validateNumericInput(this)" placeholder="">
                                                                <label for="hunt-mem1-con1">Contact Number</label>
                                                            </div>
                                                            <p class="error-msg" id="hunt-con1-err">Contact number is required!</p>
                                                        </div>
                                                    </div>

                                                    <div class="member">
                                                        <div class="member-name">
                                                            <div class="member-input">
                                                                <input class="form-inputbox memname" id="hunt-mem2" name="hunt-mem2" type="text" oninput="validateTextInput(this)" placeholder="">
                                                                <label for="hunt-mem2">Team Member 2</label>
                                                            </div>
                                                            <p class="error-msg" id="hunt-tmem2-err">Name is required!</p>
                                                        </div>

                                                        <div class="member-contact">
                                                            <div class="contact-input">
                                                                <input class="form-inputbox memcontact" id="hunt-mem2-con2" name="hunt-mem2-con2" type="tel" inputmode="numeric" pattern="[6789][0-9]{9}" maxlength="10" oninput="validateNumericInput(this)" placeholder="">
                                                                <label for="hunt-mem2-con2">Contact Number</label>
                                                            </div>
                                                            <p class="error-msg" id="hunt-con2-err">Contact number is required!</p>
                                                        </div>
                                                    </div>
                                                </div>

                                                
                                                <!-- Photography -->
                                                <div class="event">
                                                    <div class="event-name">
                                                        <p class="sanskrit-name">Tattva chitram</p>
                                                        <p class="normal-name">(Videography)</p>
                                                    </div>

                                                    <div class="member">
                                                        <div class="member-name">
                                                            <div class="member-input">
                                                                <input class="form-inputbox memname" id="photo-mem1" name="photo-mem1" type="text" oninput="validateTextInput(this)" placeholder="">
                                                                <label for="photo-mem1">Team Member 1</label>
                                                            </div>
                                                            <p class="error-msg" id="photo-tmem1-err">Name is required!</p>
                                                        </div>

                                                        <div class="member-contact">
                                                            <div class="contact-input">
                                                                <input class="form-inputbox memcontact" id="photo-mem1-con1" name="photo-mem1-con1" type="tel" inputmode="numeric" pattern="[6789][0-9]{9}" maxlength="10" oninput="validateNumericInput(this)" placeholder="">
                                                                <label for="photo-mem1-con1">Contact Number</label>
                                                            </div>
                                                            <p class="error-msg" id="photo-con1-err">Contact number is required!</p>
                                                        </div>
                                                    </div>
                                                    <div class="member">
                                                        <div class="member-name">
                                                            <div class="member-input">
                                                                <input class="form-inputbox memname" id="photo-mem2" name="photo-mem2" type="text" oninput="validateTextInput(this)" placeholder="">
                                                                <label for="photo-mem2">Team Member 1</label>
                                                            </div>
                                                            <p class="error-msg" id="photo-tmem2-err">Name is required!</p>
                                                        </div>

                                                        <div class="member-contact">
                                                            <div class="contact-input">
                                                                <input class="form-inputbox memcontact" id="photo-mem2-con2" name="photo-mem2-con2" type="tel" inputmode="numeric" pattern="[6789][0-9]{9}" maxlength="10" oninput="validateNumericInput(this)" placeholder="">
                                                                <label for="photo-mem2-con2">Contact Number</label>
                                                            </div>
                                                            <p class="error-msg" id="photo-con2-err">Contact number is required!</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- IT Quiz -->
                                            <div class="oneblock-event-container">
                                                <div class="event">
                                                    <div class="event-name">
                                                        <p class="sanskrit-name">Gyanvedh</p>
                                                        <p class="normal-name">(IT Quiz)</p>
                                                    </div>

                                                    <div class="member">
                                                        <div class="member-name">
                                                            <div class="member-input">
                                                                <input class="form-inputbox memname" id="quiz-mem1" name="quiz-mem1" type="text" oninput="validateTextInput(this)" placeholder="">
                                                                <label for="quiz-mem1">Team Member 1</label>
                                                            </div>
                                                            <p class="error-msg" id="quiz-tmem1-err">Name is required!</p>
                                                        </div>

                                                        <div class="member-contact">
                                                            <div class="contact-input">
                                                                <input class="form-inputbox memcontact" id="quiz-mem1-con1" name="quiz-mem1-con1" type="tel" inputmode="numeric" pattern="[6789][0-9]{9}" maxlength="10" oninput="validateNumericInput(this)" placeholder="">
                                                                <label for="quiz-mem1-con1">Contact Number</label>
                                                            </div>
                                                            <p class="error-msg" id="quiz-con1-err">Contact number is required!</p>
                                                        </div>
                                                    </div>

                                                    <div class="member">
                                                        <div class="member-name">
                                                            <div class="member-input">
                                                                <input class="form-inputbox memname" id="quiz-mem2" name="quiz-mem2" type="text" oninput="validateTextInput(this)" placeholder="">
                                                                <label for="quiz-mem2">Team Member 2</label>
                                                            </div>
                                                            <p class="error-msg" id="quiz-tmem2-err">Name is required!</p>
                                                        </div>

                                                        <div class="member-contact">
                                                            <div class="contact-input">
                                                                <input class="form-inputbox memcontact" id="quiz-mem2-con2" name="quiz-mem2-con2" type="tel" inputmode="numeric" pattern="[6789][0-9]{9}" maxlength="10" oninput="validateNumericInput(this)" placeholder="">
                                                                <label for="quiz-mem2-con2">Contact Number</label>
                                                            </div>
                                                            <p class="error-msg" id="quiz-con2-err">Contact number is required!</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- enroll footer  -->

                                            <div class="enroll-footer">
                                            <!-- <div class="scrolling-container">
                                                <p class="scrolling-text">Note: Participants of Coding, Web Designing, Photography, IT Manager cannot participate in any other 
                                                    events. You can check out the rules for more details.</p>
                                            </div> -->


                                               <button id="payment-btn" class="animated-button">
                                                    <span>PAY & ENROLL</span>
                                                    <span></span>
                                                </button>

                                                <button id="enroll-save-btn" class="animated-button" style="display: none;">
                                                    <span>UPDATE</span>
                                                    <span></span>
                                                </button>
                                       
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end of enroll  -->
                    
                    <!-- start of edit user -->
                    <?php
                        if (isset($_SESSION['user_type'])) {
                                $userType = $_SESSION['user_type'];
                                if ($userType == 2) : ?> 
                        <div class="card mt-3 dashboard-cards forallsec hide" id="manageuser-section-id">
                            <div class="card-content">
                                <div class="row row-group m-0">
                                    <div class="manageuser-section">
                                        <div class="section-heading">
                                            <p class="enroll-title">USERS</p>
                                        </div>
                                        <div class="forms-events">
                                            <div class="col-lg-12 col-md-8 col-sm-6 col-4">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <h5 align="center" class="card-title">Edit Users</h5>
                                                        <div class="table-responsive">
                                                            <table class="table table-bordered" id="userTable">
                                                                <thead>
                                                                    <tr align="center">
                                                                        <th>Name</th>
                                                                        <th>College Name</th>
                                                                        <th>Email</th>
                                                                        <th>User Role</th>
                                                                        <th>Action</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <!-- Table content will go here -->
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php elseif ($userType == 1) : ?>
                                <div class="card mt-3 dashboard-cards forallsec hide" id="manageuser-section-id">
                                    <p>You don't have enough permission to view this page</p>
                                </div>
                        <?php endif; ?>
                    <?php } ?>
                    <!-- end of edit user -->

                   
                    

                    <!-- start of accomodation -->
                     
                    <form id="accomodateForm" novalidate>
                        <div class="card mt-3 dashboard-cards forallsec hide" id="accomodation-section-id">
                            <div class="row row-group m-0">
                                <div class="accomodation-section">
                                    <div class="section-heading">
                                        <p class="enroll-title">ACCOMMODATION</p>
                                    </div>
                                    <div class="accom_card event">
                                        <div class="card-body">
                                        <div class="card-title">Accomodation Details</div>
                                        <hr>
                                            <form>
                                        <div class="form-group">
                                            <label for="input-6">Number Of Men</label>
                                            <input type="text" class="form-control form-control-rounded" id="no-b" inputmode="numeric" oninput="validateNumericInput(this)" placeholder="Enter Number Of Men">
                                        </div>
                                        <div class="form-group">
                                            <label for="input-7">Number Of Women</label>
                                            <input type="text" class="form-control form-control-rounded" id="no-g" inputmode="numeric" oninput="validateNumericInput(this)" placeholder="Enter Number Of Women">
                                        </div>
                                        <div class="form-group">
                                            <label for="input-8">Emergency Contact Number</label>
                                            <input class="form-control form-control-rounded" id="emg-contact" placeholder="Enter Mobile Number" type="tel" maxlength="10" inputmode="numeric" pattern="[6789][0-9]{9}" oninput="validateNumericInput(this)">
                                        </div>
                                        <div class="form-group py-2">
                                            <div class="icheck-material-white">
                                            <input type="checkbox" id="user-checkbox1" name="req_food" />
                                            <label for="user-checkbox1">We require food facility (incur some charges)</label>
                                            </div>
                                        </div>
                                        <div class="form-group py-2">
                                            <div class="icheck-material-white">
                                            <input type="checkbox" id="user-checkbox2" name="agree_tandm" required/>
                                            <label for="user-checkbox2">We Agree Terms & Conditions</label>
                                            </div>
                                        </div>
                                        <div class="form-group" align="center">
                                             <button align="center" class="accom-animated-button" id="accomodation-btn">
                                                <span>SAVE</span>
                                                <span></span>
                                            </button>
                                        </div>
                                        </form>
                                        </div>
                                        </div>

                                    <div class="acc-nums-txt1">
                                        <p class="acc-check-txt1"><span class="note-text">Note:</span> Any queries regarding accommodation, please reach out to the number given below</p>
                                    </div>

                                    <div align="center" class="acc-contacts">
                                        <div class="acc-con">
                                            <p class="acc-con-name">Ms. Vaishnavi Shenoy</p>
                                            <p class="acc-con-number">+91 8310985191</p>
                                        </div>
                                        <div class="acc-con">
                                            <p class="acc-con-name">Mr. Karthik K R</p>
                                            <p class="acc-con-number">+91 9481539064</p>
                                        </div>
                                    </div>

                                   
                                </div>
                            </div>
                        </div>
                    </form>
                    <!-- end of accomodation   -->

                     

                    <!-- start of rules -->
                    <div class="card mt-6 dashboard-cards  forallsec hide" id="rules-section-id">
                        <div class="card-content">
                            <div class="row row-group m-0">
                                <div class="rules-section ">
                                    <div class="d-flex justify-content-center main" >
                                        <div class="content mt-5 mb-5 text-light">
                                            <h1 align="center" class="h1 mt-1 mb-2 heading enroll-title">RULES</h1>
                                            <div class="ms-2 me-2">
                                                    <ul class="list-rules-ul">
                                                        <!-- <div class="list-rule-group">
                                                            <img src="<?= base_url('assets/web/imgs/bullets/bullets.png')?>"  alt="bullets"><li class="rule-text">The number of participants from each college is limited to 15 students.

                                                            </li>
                                                        </div> -->
                                                         <div class="list-rule-group">
                                                            <img src="<?= base_url('assets/web/imgs/bullets/bullets.png')?>"  alt="bullets"><li class="rule-text">Only one team is allowed to participate from a college.

                                                        </li>
                                                        </div>
                                                         <div class="list-rule-group">
                                                            <img src="<?= base_url('assets/web/imgs/bullets/bullets.png')?>"  alt="bullets"><li class="rule-text">The registration fee is ₹1,500 per team.

                                                        </li>
                                                        </div>
                                                         <!-- <div class="list-rule-group">
                                                            <img src="<?= base_url('assets/web/imgs/bullets/bullets.png')?>"  alt="bullets"><li class="rule-text">Teams must confirm their participation through <a href='/' style="color:#4af3ff" id='linktologin'>Website.</a>
                                                        </li>
                                                        </div> -->
                                                         <div class="list-rule-group">
                                                            <img src="<?= base_url('assets/web/imgs/bullets/bullets.png')?>"  alt="bullets"><li class="rule-text">The fest is open to students from MCA and MSc (Computer Science related branches).</li>
                                                        </div>
                                                         <div class="list-rule-group">
                                                            <img src="<?= base_url('assets/web/imgs/bullets/bullets.png')?>"  alt="bullets"><li class="rule-text">Each participant should carry identity proof and an authorization letter from either the Head of Department or Principal.

                                                        </li>
                                                        </div>
                                                         <div class="list-rule-group">
                                                            <img src="<?= base_url('assets/web/imgs/bullets/bullets.png')?>"  alt="bullets"><li class="rule-text">Participants of Yantra Vimarshak and Tattva Chitram are not allowed to participate in any other events.

                                                        </li>
                                                        </div>
                                                         <div class="list-rule-group">
                                                            <img src="<?= base_url('assets/web/imgs/bullets/bullets.png')?>"  alt="bullets"><li class="rule-text">The details of the rounds will be revealed on the spot.

                                                        </li>
                                                        </div>
                                                         <div class="list-rule-group">
                                                            <img src="<?= base_url('assets/web/imgs/bullets/bullets.png')?>"  alt="bullets"><li class="rule-text">The judges’ decision is final and binding.

                                                        </li>
                                                        </div>
                                                         <div class="list-rule-group">
                                                            <img src="<?= base_url('assets/web/imgs/bullets/bullets.png')?>"  alt="bullets"><li class="rule-text">If accommodation is needed, it should be specified during registration.
                                                        </li>
                                                        </div>
                                                         <div class="list-rule-group">
                                                            <img src="<?= base_url('assets/web/imgs/bullets/bullets.png')?>"  alt="bullets"><li class="rule-text">All the events will commence at the scheduled time; Punctuality will be appreciated.

                                                        </li>
                                                        </div> 
                                                        <div class="list-rule-group">
                                                            <img src="<?= base_url('assets/web/imgs/bullets/bullets.png')?>"  alt="bullets"><li class="rule-text">Rules are subject to changes at the discretion of the Organizers.

                                                        </li>
                                                        </div>
                                                        <div class="list-rule-group">
                                                            <img src="<?= base_url('assets/web/imgs/bullets/bullets.png')?>"  alt="bullets"><li class="rule-text">Criteria for Overall championship include participation in all the events as well as the total scores obtained in the competitions.

                                                        </li>
                                                        </div>
                                                        
                                                        
                                                    </ul>
                                            </div>
                                        </div>    
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end of rules   -->
                    

                    <!-- start of Manage Qual Teams -->
                     <?php
                        if (isset($_SESSION['user_type'])) {
                                $userType = $_SESSION['user_type'];
                                if ($userType == 2) : ?> 
                        <div class="card mt-6 dashboard-cards forallsec hide" id="qual-section-id">
                            <div class="card-content">
                                <div class="row row-group m-0">
                                    <div class="qual-section">
                                        <div class="d-flex justify-content-center main">
                                            <div class="content mt-5 mb-5 text-light">
                                                <h1 align="center" class="h1 mt-1 mb-2 heading enroll-title">Manage Qualified Team</h1>
                                                <form id="qualTeamsForm">
                                                    <div class="form-group">
                                                        <table class="qual-selection-table">
                                                            <tr>
                                                                <th>Select Qualified Teams for coding:</th>
                                                                <td>
                                                                    <select class="form-control qual-select" id="code-qualTeams" name="qual_code[]" multiple>
                                                                        <!-- Options will be populated dynamically -->
                                                                    </select>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th>Select Qualified Teams for webdesign:</th>
                                                                <td>
                                                                    <select class="form-control qual-select" id="web-qualTeams" name="qual_web[]" multiple>
                                                                        <!-- Options will be populated dynamically -->
                                                                    </select>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th>Select Qualified Teams for Gaming:</th>
                                                                <td>
                                                                    <select class="form-control qual-select" id="game-qualTeams" name="qual_game[]" multiple>
                                                                        <!-- Options will be populated dynamically -->
                                                                    </select>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th>Select Qualified Teams for Mad AD:</th>
                                                                <td>
                                                                    <select class="form-control qual-select" id="mad-qualTeams" name="qual_mad[]" multiple>
                                                                        <!-- Options will be populated dynamically -->
                                                                    </select>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th>Select Qualified Teams for Treasure Hunt:</th>
                                                                <td>
                                                                    <select class="form-control qual-select" id="thunt-qualTeams" name="qual_thunt[]" multiple>
                                                                        <!-- Options will be populated dynamically -->
                                                                    </select>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th>Select Qualified Teams for Videography:</th>
                                                                <td>
                                                                    <select class="form-control qual-select" id="photo-qualTeams" name="qual_photo[]" multiple>
                                                                        <!-- Options will be populated dynamically -->
                                                                    </select>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th>Select Qualified Teams for IT Quiz:</th>
                                                                <td>
                                                                    <select class="form-control qual-select" id="quiz-qualTeams" name="qual_quiz[]" multiple>
                                                                        <!-- Options will be populated dynamically -->
                                                                    </select>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                    </div>
                                                    <div class="table-button text-center mt-4">
                                                        <button type="submit" class="btn btn-light">Save Qualified Teams</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php elseif ($userType == 1) : ?>
                                <div class="card mt-3 dashboard-cards forallsec hide" id="manageuser-section-id">
                                    <p>You don't have enough permission to view this page</p>
                                </div>
                        <?php endif; ?>
                    <?php } ?>

                    <!-- end of Manage Qual Teams   -->

                    <!-- start of site settings -->
                    <div class="card mt-6 dashboard-cards forallsec hide" id="settings-section-id">
                        <div class="card-body">
                            <div class="settings-section">
                            <div class="section-heading mb-4">
                                <h2 class="enroll-title">ACCOUNT INFO</h2>
                            </div>

                            <div class="settings-content-div mb-4">
                                <div class="settings-item">
                                <span class="settings-label">College Name</span>
                                <span class="settings-value" id="set-clg-name">: <?php echo session('college_name'); ?></span>
                                </div>
                                <div class="settings-item">
                                <span class="settings-label">Team Name</span>
                                <span class="settings-value" id="set-team-name">: <?php echo session('team_name'); ?></span>
                                </div>
                                <div class="settings-item">
                                <span class="settings-label">Payment Status</span>
                                <span class="settings-value" id="set-reg-status">: Not Completed!</span>
                                </div>
                                <div class="settings-item">
                                <span class="settings-label">Ticket Number</span>
                                <span class="settings-value" id="ticket-number">: N/A</span>
                                </div>

                                <div class="settings-buttons">
                                <button class="btn btn-light" id="changePasswordBtn"><i class="fa-solid fa-user-pen"></i> Change Password</button>
                                <button class="btn btn-light" id="closeAccountBtn"><i class="fa-solid fa-circle-xmark"></i> Close Account</button>
                                </div>
                            </div>

                            <div class="section-heading mb-4">
                                <h2 class="enroll-title">QUALIFIED TEAMS FOR DAY 2</h2>
                            </div>

                            <div class="settings-content-div mb-4">
                                <div class="settings-item">
                                <span class="settings-label">Coding</span>
                                <span class="settings-value" id="set-qual_code">: Not Yet Disclosed..!</span>
                                </div>
                                <div class="settings-item">
                                <span class="settings-label">Web Design</span>
                                <span class="settings-value" id="set-qual_web">: Not Yet Disclosed..!</span>
                                </div>
                                <div class="settings-item">
                                <span class="settings-label">Gaming</span>
                                <span class="settings-value" id="set-qual_game">: Not Yet Disclosed..!</span>
                                </div>
                                <div class="settings-item">
                                <span class="settings-label">Mad ad</span>
                                <span class="settings-value" id="set-qual_mad">: Not Yet Disclosed..!</span>
                                </div>
                                <div class="settings-item">
                                <span class="settings-label">Treasure Hunt</span>
                                <span class="settings-value" id="set-qual_thunt">: Not Yet Disclosed..!</span>
                                </div>
                                <div class="settings-item">
                                <span class="settings-label">Videography</span>
                                <span class="settings-value" id="set-qual_photo">: Not Yet Disclosed..!</span>
                                </div>
                                <div class="settings-item">
                                <span class="settings-label">IT Quiz</span>
                                <span class="settings-value" id="set-qual_quiz">: Not Yet Disclosed..!</span>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>

                    <!-- end of site settings   -->

                    <!-- start of all students reports -->
                     <?php
                        if (isset($_SESSION['user_type'])) {
                                $userType = $_SESSION['user_type'];
                                if ($userType == 2) : ?> 
                    <div class="card mt-6 dashboard-cards  forallsec hide" id="all-students-reports-section-id">
                        <div class="card-content">
                            <div class="row row-group m-0">
                                
                                    
                                        
                                    
                                <div class="manageuser-section" >
                                   
                                    
                                   
                                    <div class="section-heading">
                                        <p class="enroll-title">ALL USERS</p>
                                        
                                    </div>
                                    <div class="forms-events">
                                        
                                        <div class="col-lg-8 col-md-6 col-sm-4 col-3">
                                            <div class="card">
                                                <div class="card-body">                   
                                                    
                                                    <h5 align="center" class="card-title">All Users</h5>
                                                    <div id="searchBarContainer" class="fixed-center">
                                                        <div class="input-group mb-3">
                                                            <input type="text" id="searchInput" class="form-control" placeholder="Search...">
                                                            <span style="margin: 0 8px;"></span>
                                                            <button id="all-user-report-export-pdf-btn" class="btn btn-light" ><i class="fa-solid fa-file-pdf"></i>
                                                                PDF
                                                            </button>
                                                        </div>
                                                    </div>
                                                    <div class="table-responsive">
                                                        <table class="table table-bordered" id="allUserTable">
                                                            <thead>
                                                                <tr>
                                                                    <th>Name</th>
                                                                    <th>College Name</th>
                                                                    <th>Email</th>
                                                                    <th>Team Name</th>
                                                                    <th>Phone No</th>
                                                                    <th>User Role</th>
                                                                    <th>Verified</th>
                                                                    <th>Enrolled</th>
                                                                    <th>Accommodation needed</th>
                                                                    <th>Prsent For Fest</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody id="userTableBody">
                                                                <!-- data updated via ajax  -->
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php elseif ($userType == 1) : ?>
                                <div class="card mt-3 dashboard-cards forallsec hide" id="manageuser-section-id">
                                    <p>You don't have enough permission to view this page</p>
                                </div>
                        <?php endif; ?>
                    <?php } ?>
                    <!-- end of all students  reports   -->                   
                    
                    <!-- start of all event reg reports -->
                    <?php
                        if (isset($_SESSION['user_type'])) {
                                $userType = $_SESSION['user_type'];
                                if ($userType == 2) : ?> 
                        <div class="card mt-6 dashboard-cards forallsec hide" id="all-events-reports-section-id">
                            <div class="card-content">
                                <div class="row row-group m-0">
                                    
                                    <div class="manageevent-section">
                                        <div class="section-heading">
                                            <p class="enroll-title">ALL EVENT REPORTS</p>
                                        </div>
                                        <div class="forms-events">
                                            <div class="col-lg-1 col-md-1 col-sm-1 col-1">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <h5 align="center" class="card-title">All Event Reports</h5>
                                                        <div id="searchBarContainer" class="fixed-center">
                                                            <div class="input-group mb-3">
                                                                <input type="text" id="eventsearchInput" class="form-control" placeholder="Search...">
                                                                <span style="margin: 0 8px;"></span>
                                                                <button id="all-event-report-export-pdf-btn" class="btn btn-light">
                                                                    <i class="fa-solid fa-file-pdf"></i> PDF
                                                                </button>
                                                            </div>
                                                        </div>
                                                        <div class="table-responsive">
                                                            <table class="table table-bordered" id="allEventTable">
                                                                <thead>
                                                                    <tr>
                                                                        <th>Ticket Number</th>
                                                                        <th>Team Name</th>
                                                                        <th>Coding Member 1</th>
                                                                        <th>Coding Member Contact 1</th>
                                                                        <th>Coding Member 2</th>
                                                                        <th>Coding Member Contact 2</th>
                                                                        <th>Quiz Member 1</th>
                                                                        <th>Quiz Member Contact 1</th>
                                                                        <th>Quiz Member 2</th>
                                                                        <th>Quiz Member Contact 2</th>
                                                                        <th>Web Member 1</th>
                                                                        <th>Web Member Contact 1</th>
                                                                        <th>Web Member 2</th>
                                                                        <th>Web Member Contact 2</th>
                                                                        <th>Game Member 1</th>
                                                                        <th>Game Member Contact 1</th>
                                                                        <th>Game Member 2</th>
                                                                        <th>Game Member Contact 2</th>
                                                                        <th>Game Member 3</th>
                                                                        <th>Game Member Contact 3</th>
                                                                        <th>Game Member 4</th>
                                                                        <th>Game Member Contact 4</th>
                                                                        <th>IT Manager Member 1</th>
                                                                        <th>IT Manager Member Contact 1</th>
                                                                        <th>Photo Member 1</th>
                                                                        <th>Photo Member Contact 1</th>
                                                                        <th>Photo Member 2</th>
                                                                        <th>Photo Member Contact 2</th>
                                                                        <th>Mad AD Member 1</th>
                                                                        <th>Mad AD Member Contact 1</th>
                                                                        <th>Mad AD Member 2</th>
                                                                        <th>Mad AD Member Contact 2</th>
                                                                        <th>Mad AD Member 3</th>
                                                                        <th>Mad AD Member Contact 3</th>
                                                                        <th>Mad AD Member 4</th>
                                                                        <th>Mad AD Member Contact 4</th>
                                                                        <th>Mad AD Member 5</th>
                                                                        <th>Mad AD Member Contact 5</th>
                                                                        <th>Mad AD Member 6</th>
                                                                        <th>Mad AD Member Contact 6</th>
                                                                        <th>Treasure Hunt Member 1</th>
                                                                        <th>Treasure Hunt Member Contact 1</th>
                                                                        <th>Treasure Hunt Member 2</th>
                                                                        <th>Treasure Hunt Member Contact 2</th>
                                                                        
                                                                    </tr>
                                                                </thead>
                                                                <tbody id="eventTableBody">
                                                                    <!-- data updated via ajax  -->
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php elseif ($userType == 1) : ?>
                                <div class="card mt-3 dashboard-cards forallsec hide" id="manageuser-section-id">
                                    <p>You don't have enough permission to view this page</p>
                                </div>
                        <?php endif; ?>
                    <?php } ?>
                    <!-- end of all event reg  reports   --> 

                    <!-- start of all accomodation reports -->
                    <?php
                        if (isset($_SESSION['user_type'])) {
                                $userType = $_SESSION['user_type'];
                                if ($userType == 2) : ?> 
                        <div class="card mt-6 dashboard-cards  forallsec hide" id="all-accomodations-reports-section-id">
                            <div class="card-content">
                                <div class="row row-group m-0">
                                    <div class="manageuser-section" >
                                    <div class="section-heading">
                                        <p class="enroll-title">ALL ACCOMMODATION REPORTS</p>
                                    </div>
                                    <div class="forms-events">
                                        <div class="col-lg-12 col-md-8 col-sm-6 col-5">
                                            <div class="card">
                                                <div class="card-body">
                                                    <h5 align="center" class="card-title">All Accommodation Reports</h5>
                                                    <div id="searchBarContainer" class="fixed-center">
                                                        <div class="input-group mb-3">
                                                            <input type="text" id="accommodationSearchInput" class="form-control" placeholder="Search...">
                                                            <span style="margin: 0 8px;"></span>
                                                            <button id="all-accommodation-report-export-pdf-btn" class="btn btn-light">
                                                                <i class="fa-solid fa-file-pdf"></i> PDF
                                                            </button>
                                                        </div>
                                                    </div>
                                                    <div class="table-responsive">
                                                        <table class="table table-bordered" id="allAccommodationTable">
                                                            <thead>
                                                                <tr>
                                                                    <th>Team Name</th>
                                                                    <th>Number of Boys</th>
                                                                    <th>Number of Girls</th>
                                                                    <th>EMG Contact</th>
                                                                    <th>Require Food</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody id="accommodationTableBody">
                                                                <!-- Data will be updated via AJAX -->
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php elseif ($userType == 1) : ?>
                                <div class="card mt-3 dashboard-cards forallsec hide" id="manageuser-section-id">
                                    <p>You don't have enough permission to view this page</p>
                                </div>
                        <?php endif; ?>
                    <?php } ?>
                    <!-- end of all students  reports   --> 

                    <!-- start of all total  reports -->
                     <?php
                        if (isset($_SESSION['user_type'])) {
                                $userType = $_SESSION['user_type'];
                                if ($userType == 2) : ?> 
                        <div class="card mt-6 dashboard-cards  forallsec hide" id="all-total-reports-section-id">
                            <div class="card-content">
                                <div class="row row-group m-0">
                                    <div class="manageuser-section" >
                                        <div class="section-heading">
                                            <p class="enroll-title">TOTAL REPORTS</p>
                                        </div>
                                        <div class="forms-events">
                                            
                                            <div class="col-lg-12 col-md-8 col-sm-6 col-4">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <h5 align="center" class="card-title">All Users</h5>
                                                        <div class="table-responsive">
                                                            <table class="table table-bordered" id="allUserTable">
                                                                <thead>
                                                                    <tr>
                                                                        <th>Name</th>
                                                                        <th>College Name</th>
                                                                        <th>Email</th>
                                                                        <th>Team Name</th>
                                                                        <th>Phone No</th>
                                                                        <th>User Role</th>
                                                                        <th>Enrolled</th>
                                                                        <th>Accomodation needed</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <?php foreach ($users as $user) : ?>
                                                                        <tr>
                                                                            <td><?= esc($user['name']) ?></td>
                                                                            <td><?= esc($user['college_name']) ?></td>
                                                                            <td><?= esc($user['email']) ?></td>
                                                                            <td><?= esc($user['team_name']) ?></td>
                                                                            <td><?= esc($user['phone_number']) ?></td>
                                                                            <td><?= ($user['user_type'] == 1) ? 'Student' : 'Admin' ?></td>
                                                                            <td><?= isset($user['isenrolled']) && $user['isenrolled'] == 1 ? 'Yes' : 'No' ?></td>
                                                                            <td><?= isset($user['accomodation_needed']) ? ($user['accomodation_needed'] ? 'Yes' : 'No') : 'No' ?></td>
                                                                        </tr>
                                                                    <?php endforeach; ?>
                                                                </tbody>
                                                            </table>


                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php elseif ($userType == 1) : ?>
                                <div class="card mt-3 dashboard-cards forallsec hide" id="manageuser-section-id">
                                    <p>You don't have enough permission to view this page</p>
                                </div>
                        <?php endif; ?>
                    <?php } ?>
                </div>
                    <!-- end of all students  reports   --> 
                                                                
                    <!--End sidebar-wrapper-->
                    <!--Start topbar header-->
                    <header class="topbar-nav">
                        <nav class="navbar navbar-expand fixed-top">
                            <ul class="navbar-nav mr-auto align-items-center">
                                <li class="nav-item">
                                <a class="nav-link toggle-menu" href="javascript:void();">
                                <i class="icon-menu menu-icon"></i>
                                </a>
                                </li>
                            </ul>

                            <ul class="navbar-nav align-items-center right-nav-link">
                                <p class="team-name mt-2">Welcome Team!!.. <span class="header-team-name"> <?php echo session('team_name'); ?> </span></p>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="#" data-toggle="dropdown" aria-expanded="true">
                                        <span class="user-profile"><img src="<?= base_url('assets/web/imgs/user3.png')?>" class="img-circle" alt="user avatar"></span>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li class="dropdown-item user-details">
                                            <a href="javascript:void(0);">
                                                <div class="media">
                                                    <div class="avatar">
                                                        <img class="align-self-start mr-3" src="<?= base_url('assets/web/imgs/user.jpg')?>" alt="user avatar">
                                                    </div>
                                                    <div class="media-body">
                                                        <h6 class="mt-2 user-title"><?php echo session('name'); ?></h6>
                                                        <p class="user-subtitle"><?php echo session('email'); ?></p>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="dropdown-divider"></li>
                                        <li class="dropdown-item">
                                            <a href="<?= base_url('/') ?>">
                                                <i class="icon-home mr-2"></i> Home
                                            </a>
                                        </li>
                                        <li class="dropdown-divider"></li>
                                        <li class="dropdown-item">
                                            <a href="<?= base_url('logout') ?>">
                                                <i class="icon-power mr-2"></i> Logout
                                            </a>
                                        </li>
                                         
                                    </ul>
                                </li>

                            </ul>
                        </nav>
                    </header>
                    <!--End topbar header-->


        
                    
            
                </div>
                <!-- End container-fluid-->
        
            </div><!--End content-wrapper-->
        </section>
    </div>
                                                                                                                               
   <!--Start Back To Top Button-->
    <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
    <!--End Back To Top Button-->
	
	<!--Start footer-->
	<footer class="card-footer">
      <div class="container">
        <div class="text-center">
          Copyright © 2024 AAVIRBHAV
        </div>
      </div>
    </footer>
	<!--End footer-->
	
  <!--start color switcher-->
   <div class="right-sidebar">
        <div class="switcher-icon">
            <i class="zmdi zmdi-settings zmdi-hc-spin"></i>
        </div>
        <div class="right-sidebar-content">

            <p class="mb-0">Gaussion Texture</p>
            <hr>
        
            <ul class="switcher">
                <li id="theme1"></li>
                <li id="theme2"></li>
                <li id="theme3"></li>
                <li id="theme4"></li>
                <li id="theme5"></li>
                <li id="theme6"></li>
            </ul>

            <p class="mb-0">Gradient Background</p>
            <hr>
        
            <ul class="switcher">
                <li id="theme7"></li>
                <li id="theme8"></li>
                <li id="theme9"></li>
                <li id="theme10"></li>
                <li id="theme11"></li>
                <li id="theme12"></li>
                <li id="theme13"></li>
                <li id="theme14"></li>
                <li id="theme15"></li>
            </ul>
        
        </div>
    </div>
    <!--end color switcher-->
   
</div><!--End wrapper-->

<!-- Bootstrap core JavaScript-->
<script src="<?= base_url('assets/web/js/jquery-3.6.0.min.js') ?>"></script>
<script src="<?= base_url('assets/web/js/jquery-3.4.1.js') ?>"></script>
<script src="<?= base_url('assets/web/js/popper.min.js') ?>"></script>
<!-- Bootstrap JavaScript -->
<script src="<?= base_url('assets/web/js/bootstrap.min.js') ?>"></script>
<!-- jQuery library -->
<!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> -->

<!-- Bootstrap JavaScript -->
<!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> -->


<!-- Bootstrap JavaScript -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<!-- <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" /> -->
<!-- simplebar js -->
<script src="<?= base_url('assets/web/plugins/simplebar/js/simplebar.js') ?>"></script>
<!-- sidebar-menu js -->
<script src="<?= base_url('assets/web/js/sidebar-menu.js') ?>"></script>

<!-- Custom scripts -->
<script src="<?= base_url('assets/web/js/app-script.js') ?>"></script>
<script src="<?= base_url('assets/web/js/preventlinks.js') ?>"></script>
<script src="<?= base_url('assets/web/js/accomodation.js') ?>"></script>

<script src="<?= base_url('assets/web/js/enroll.js') ?>"></script>
<script src="<?= base_url('assets/web/js/dashboard.js') ?>"></script>
<script src="<?= base_url('assets/web/js/qual_team.js') ?>"></script>
<!-- Chart js -->

 <script>
    $(function () {
  "use strict";

  //sidebar menu js
  $.sidebarMenu($(".sidebar-menu"));

  

    $("#enroll-nav").click(function (event) {
    handleClick(event, "enroll-nav");
  });

  $("#manage_user_nav").click(function (event) {
    handleClick(event, "manage_user_nav");
  });

  $("#accomodation_nav").click(function (event) {
    handleClick(event, "accomodation_nav");
  });

  $("#rules_nav").click(function (event) {
    handleClick(event, "rules_nav");
  });
  $("#qual_nav").click(function (event) {
    handleClick(event, "qual_nav");
  });

  $("#settings_nav").click(function (event) {
    handleClick(event, "settings_nav");
  });

  $("#reports_nav").click(function (event) {
    handleClick(event, "reports_nav");
  });

  $("#all-students-reports_nav").click(function (event) {
    handleClick(event, "all-students-reports_nav");
  });
  $("#all-events-reports_nav").click(function (event) {
    handleClick(event, "all-events-reports_nav");
  });
  $("#all-accomodations-reports_nav").click(function (event) {
    handleClick(event, "all-accomodations-reports_nav");
  });
  $("#all-total-reports_nav").click(function (event) {
    handleClick(event, "all-total-reports_nav");
  });
 // sidebar sections
  const navLinks = document.querySelector(".left-fixed-nav");
  const manuIcon = document.querySelector(".menu-icon");
  const overlay = document.querySelector(".overlay");

  const enrollSec = document.querySelector("#enroll-section-id");
  const manageuserSec = document.querySelector("#manageuser-section-id");
  const accomodationSec = document.querySelector("#accomodation-section-id");
  const rulesSec = document.querySelector("#rules-section-id");
  const qualSec = document.querySelector("#qual-section-id");
  const settingSec = document.querySelector("#settings-section-id");
  const allStudentsReportsSec = document.querySelector(
    "#all-students-reports-section-id"
  );
  const allEventsReportsSec = document.querySelector(
    "#all-events-reports-section-id"
  );
  const allAccomodationsReportsSec = document.querySelector(
    "#all-accomodations-reports-section-id"
  );
  const allTotalReportsSec = document.querySelector(
    "#all-total-reports-section-id"
  );

  const enrollBtn = document.querySelector("#enroll-nav");

  const manageuserBtn = document.querySelector("#manage_user_nav");
  const accomodationBtn = document.querySelector("#accomodation_nav");
  const rulesBtn = document.querySelector("#rules_nav");
  const qualBtn = document.querySelector("#qual_nav");
  const settingBtn = document.querySelector("#settings_nav");
  // const reportsBtn = document.querySelector("#reports_nav");
  const allStudentsReportsBtn = document.querySelector(
    "#all-students-reports_nav"
  );
  const allEventsReportsBtn = document.querySelector("#all-events-reports_nav");
  const allAccomodationsReportsBtn = document.querySelector(
    "#all-accomodations-reports_nav"
  );
  const allTotalReportsBtn = document.querySelector("#all-total-reports_nav");

  const showSection = (section) => {
    const sections = [
      enrollSec,
      manageuserSec,
      accomodationSec,
      rulesSec,
      qualSec,
      settingSec,
      allStudentsReportsSec,
      allEventsReportsSec,
      allAccomodationsReportsSec,
      allTotalReportsSec,
    ];

    sections.forEach((sec) => {
      if (sec) {
        sec.classList.add("hide");
      }
    });

    if (section) {
      section.classList.remove("hide");
    }
  };

 

  // Define click event handlers only if the buttons exist
  if (enrollBtn) {
    enrollBtn.onclick = () => {
      showSection(enrollSec);
     
    };
  }

  if (manageuserBtn) {
    manageuserBtn.onclick = () => {
      showSection(manageuserSec);
      
    };
  }

  if (accomodationBtn) {
    accomodationBtn.onclick = () => {
      showSection(accomodationSec);
      
    };
  }

  if (rulesBtn) {
    rulesBtn.onclick = () => {
      showSection(rulesSec);
      
    };
  }
  if (qualBtn) {
    qualBtn.onclick = () => {
      showSection(qualSec);
      
    };
  }

  if (settingBtn) {
    settingBtn.onclick = () => {
      showSection(settingSec);
      
    };
  }

  if (allStudentsReportsBtn) {
    allStudentsReportsBtn.onclick = () => {
      showSection(allStudentsReportsSec);
      
    };
  }

  if (allEventsReportsBtn) {
    allEventsReportsBtn.onclick = () => {
      showSection(allEventsReportsSec);
      
    };
  }

  if (allAccomodationsReportsBtn) {
    allAccomodationsReportsBtn.onclick = () => {
      showSection(allAccomodationsReportsSec);
      
    };
  }

  if (allTotalReportsBtn) {
    allTotalReportsBtn.onclick = () => {
      showSection(allTotalReportsSec);
      
    };
  }
  $(document).ready(function() {
    // Show appropriate section based on user type
    if (userType == 1) {
        showSection(enrollSec);
    } else if (userType == 2) {
         showSection(manageuserSec);
    }
});
    });

function handleClick(event, navId) {
  // Remove the 'active' class from all nav items
  $(".sidebar-menu a").removeClass("active");
  // Add the 'active' class to the clicked nav item
  $("#" + navId).addClass("active");

  if (navId === "reports_nav") {
    $("#extra-links").slideToggle(); // Apply slide animation for smooth transition
    $(".right").toggleClass("rotate-down"); // Rotate the angle-left icon
  }
   // Toggle the class of the clicked icon from far to fas
  $("#" + navId + " i").toggleClass("far fa-circle fas fa-circle");

  // Reset all other icons to far fa-circle
  $("#extra-links li a i").not($("#" + navId + " i")).removeClass("fas fa-circle").addClass("far fa-circle");

  $("#extra-links li").removeClass("active"); // Remove active class from all items
  $("#extra-links").on("click", "li", function () {
    $(this).addClass("active").siblings().removeClass("active");
    });
}
var userType = <?php echo $userType; ?>;

</script>

<!-- Index js -->
<!-- <script src="<?= base_url('assets/web/js/index.js') ?>"></script> -->

<script src="<?= base_url('assets/web/js/jsPdf.js') ?>"></script>
<script src="<?= base_url('assets/web/js/tableexport.js') ?>"></script>
<script src="<?= base_url('assets/web/js/jspdfautotable.js') ?>"></script>

<script src="<?= base_url('assets/web/js/allusersreports.js') ?>"></script>
<script src="<?= base_url('assets/web/js/alleventsreports.js') ?>"></script>
<script src="<?= base_url('assets/web/js/allaccomodation.js') ?>"></script>

<script src="https://checkout.razorpay.com/v1/checkout.js"></script>  
</body>
</html>
