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
  <link href="<?= base_url('assets/web/css/pace.min.css') ?>" rel="stylesheet"/>
  <script src="<?= base_url('assets/web/js/pace.min.js') ?>"></script>
  <!--favicon-->
  <link rel="icon" href="<?= base_url('assets/web/images/favicon.ico') ?>" type="image/x-icon">
  <!-- Vector CSS -->
  <link href="<?= base_url('assets/web/plugins/vectormap/jquery-jvectormap-2.0.5.css') ?>" rel="stylesheet"/>
  <!-- simplebar CSS-->
  <link href="<?= base_url('assets/web/plugins/simplebar/css/simplebar.css') ?>" rel="stylesheet"/>
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
                <div class="brand-logo">
                    <a href="<?= base_url('/') ?>">
                        <img src="<?= base_url('assets/web/imgs/favicon.png') ?>" class="logo-icon" alt="logo icon">
                        <h5 class="logo-text">  Dashboard</h5>
                    </a>
                </div>
                <ul class="sidebar-menu do-nicescrol">
                    <li class="sidebar-header">MAIN NAVIGATION</li>

                    <li>
                        <a class="active" href="#enroll-section-id" onclick="handleClick('enroll-nav')" id="enroll-nav">
                        <i class="zmdi zmdi-hospital"></i> <span>Enroll</span>
                        </a>
                    </li>

                    <li>
                        <a  href="#manageuser-section-id" onclick="handleClick('manage_user_nav')" id="manage_user_nav">
                            <i class="zmdi zmdi-edit"></i> <span>Manage users</span>
                        </a>
                    </li>
                    
                    <li>
                        <a  href="#accomodation-section-id" onclick="handleClick('accomodation_nav')" id="accomodation_nav">
                        <i class="zmdi zmdi-hotel"></i> <span>Accomodation</span>
                        </a>
                    </li>

                    <li>
                        <a href="#rules-section-id" onclick="handleClick('rules_nav')" id="rules_nav">
                        <i class="zmdi zmdi-format-list-bulleted"></i> <span>Rules</span>
                        </a>
                    </li>

                    <li>
                        <a href="tables.html">
                        <i class="zmdi zmdi-settings"></i> <span>Site settings</span>
                        </a>
                    </li>
                    <li>
                        <a href="icons.html">
                        <i class="zmdi zmdi-chart"></i> <span>Reports</span>
                        </a>
                    </li>

                    

                </ul>
            
    
            </nav>
            <div class="clearfix"></div>
        
            <div class="content-wrapper">
                <div class="container-fluid">
                    <div class="modal" id="editUserModal" tabindex="-1" role="dialog" aria-labelledby="editUserModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="editUserModalLabel">Edit User</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form id="editUserForm">
                                        <div class="form-group">
                                            <label for="editUserName">Name</label>
                                            <input type="text" class="form-control" id="editUserName" name="editUserName" readonly>
                                        </div>
                                        <div class="form-group">
                                            <label for="editCollegeName">College Name</label>
                                            <input type="text" class="form-control" id="editCollegeName" name="editCollegeName"
                                                readonly>
                                        </div>
                                        <div class="form-group">
                                            <label for="editEmail">Email</label>
                                            <input type="email" class="form-control" id="editEmail" name="editEmail" readonly>
                                        </div>
                                        <div class="form-group">
                                            <label for="editUserRole">User Type</label>
                                            <select class="form-control" id="editUserRole" name="editUserRole" disabled>
                                                <option value="admin">Admin</option>
                                                <option value="student">Student</option>
                                            </select>
                                        </div>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                    <button type="button" class="btn btn-primary" id="updateUserBtn">Update</button>
                                </div>
                            </div>
                        </div>
                    </div>
        
                    <!-- enroll starts -->
                    <div class="card mt-3 dashboard-cards" id="enroll-section-id">
                        <div cass="card-content">
                            <div class="row row-group m-0">
                                <div class="enroll-section" >

                                    <div id="loader-lottie-div" class="loader">
                                        <dotlottie-player id="loader-lottie" autoplay loop mode="normal"
                                            src="/assets/icon/loader-yellow.lottie" style="width: 70px;height:70px;"></dotlottie-player>
                                    </div>

                                    <div class="section-heading">
                                        <p class="enroll-title">ENROLL FOR THE EVENTS...</p>
                                    </div>

                                    <form id="eventForm" action="<?= base_url('admin/event-register') ?>" method="post">
                                    <!-- <form id="myForm" method="post"> -->
                                        <div class="forms-events">
                                            <!-- coding -->
                                            <div class="event">
                                                <div class="event-name">
                                                    <p class="sanskrit-name">Kodhasangam</p>
                                                    <p class="normal-name">(CODING)</p>
                                                </div>

                                                <div class="member">
                                                    <div class="member-name">
                                                        <div class="member-title">
                                                            <p class="input-title-name">Team Member 1</p>
                                                        </div>
                                                        <div class="member-input">
                                                            <input class="form-inputbox memname" id="coding-mem1" name="coding-mem1" type="text" placeholder="N/A">
                                                        </div>
                                                        <p class="error-msg" id="coding-tmem1-err">Name is required!</p>
                                                    </div>

                                                    <div class="member-contact">
                                                        <div class="contact-title">
                                                            <p class="input-title-contact">Contact Number</p>
                                                        </div>
                                                        <div class="contact-input">
                                                            <input class="form-inputbox memcontact" id="coding-mem1-con1" name="coding-mem1-con1" type="tel" inputmode="numeric" pattern="[6789][0-9]{9}" maxlength="10" oninput="validateNumericInput(this)" placeholder="N/A">
                                                        </div>
                                                        <p class="error-msg" id="coding-con1-err">Contact number is required!</p>
                                                    </div>
                                                </div>

                                                <div class="member">
                                                    <div class="member-name">
                                                        <div class="member-title">
                                                            <p class="input-title-name">Team Member 2</p>
                                                        </div>
                                                        <div class="member-input">
                                                            <input class="form-inputbox memname" id="coding-mem2" name="coding-mem2" type="text" placeholder="N/A">
                                                        </div>
                                                        <p class="error-msg" id="coding-tmem2-err">Name is required!</p>
                                                    </div>

                                                    <div class="member-contact">
                                                        <div class="contact-title">
                                                            <p class="input-title-contact">Contact Number</p>
                                                        </div>
                                                        <div class="contact-input">
                                                            <input class="form-inputbox memcontact" id="coding-mem2-con2" name="coding-mem2-con2" type="tel" inputmode="numeric" pattern="[6789][0-9]{9}" maxlength="10" oninput="validateNumericInput(this)" placeholder="N/A">
                                                        </div>
                                                        <p class="error-msg" id="coding-con2-err">Contact number is required!</p>
                                                    </div>
                                                </div>
                                            </div>

                                            
                                            <!-- Gaming -->
                                            <div class="event">
                                                <div class="event-name">
                                                    <p class="sanskrit-name">Kurukshetra</p>
                                                    <p class="normal-name">(Gaming)</p>
                                                </div>

                                                <div class="member">
                                                    <div class="member-name">
                                                        <div class="member-title">
                                                            <p class="input-title-name">Team Member 1</p>
                                                        </div>
                                                        <div class="member-input">
                                                            <input class="form-inputbox memname" id="gaming-mem1" name="gaming-mem1" type="text" placeholder="N/A">
                                                        </div>
                                                        <p class="error-msg" id="gaming-tmem1-err">Name is required!</p>
                                                    </div>

                                                    <div class="member-contact">
                                                        <div class="contact-title">
                                                            <p class="input-title-contact">Contact Number</p>
                                                        </div>
                                                        <div class="contact-input">
                                                            <input class="form-inputbox memcontact" id="gaming-mem1-con1" name="gaming-mem1-con1" type="tel" inputmode="numeric" pattern="[6789][0-9]{9}" maxlength="10" oninput="validateNumericInput(this)" placeholder="N/A">
                                                        </div>
                                                        <p class="error-msg" id="gaming-con1-err">Contact number is required!</p>
                                                    </div>
                                                </div>

                                                <div class="member">
                                                    <div class="member-name">
                                                        <div class="member-title">
                                                            <p class="input-title-name">Team Member 2</p>
                                                        </div>
                                                        <div class="member-input">
                                                            <input class="form-inputbox memname" id="gaming-mem2" name="gaming-mem2" type="text" placeholder="N/A">
                                                        </div>
                                                        <p class="error-msg" id="gaming-tmem2-err">Name is required!</p>
                                                    </div>

                                                    <div class="member-contact">
                                                        <div class="contact-title">
                                                            <p class="input-title-contact">Contact Number</p>
                                                        </div>
                                                        <div class="contact-input">
                                                            <input class="form-inputbox memcontact" id="gaming-mem2-con2" name="gaming-mem2-con2" type="tel" inputmode="numeric" pattern="[6789][0-9]{9}" maxlength="10" oninput="validateNumericInput(this)" placeholder="N/A">
                                                        </div>
                                                        <p class="error-msg" id="gaming-con2-err">Contact number is required!</p>
                                                    </div>
                                                </div>
                                                <div class="member">
                                                    <div class="member-name">
                                                        <div class="member-title">
                                                            <p class="input-title-name">Team Member 3</p>
                                                        </div>
                                                        <div class="member-input">
                                                            <input class="form-inputbox memname" id="gaming-mem3" name="gaming-mem3" type="text" placeholder="N/A">
                                                        </div>
                                                        <p class="error-msg" id="gaming-tmem3-err">Name is required!</p>
                                                    </div>

                                                    <div class="member-contact">
                                                        <div class="contact-title">
                                                            <p class="input-title-contact">Contact Number</p>
                                                        </div>
                                                        <div class="contact-input">
                                                            <input class="form-inputbox memcontact" id="gaming-mem3-con3" name="gaming-mem3-con3" type="tel" inputmode="numeric" pattern="[6789][0-9]{9}" maxlength="10" oninput="validateNumericInput(this)" placeholder="N/A">
                                                        </div>
                                                        <p class="error-msg" id="gaming-con3-err">Contact number is required!</p>
                                                    </div>
                                                </div>
                                                <div class="member">
                                                    <div class="member-name">
                                                        <div class="member-title">
                                                            <p class="input-title-name">Team Member 4</p>
                                                        </div>
                                                        <div class="member-input">
                                                            <input class="form-inputbox memname" id="gaming-mem4" name="gaming-mem4" type="text" placeholder="N/A">
                                                        </div>
                                                        <p class="error-msg" id="gaming-tmem4-err">Name is required!</p>
                                                    </div>

                                                    <div class="member-contact">
                                                        <div class="contact-title">
                                                            <p class="input-title-contact">Contact Number</p>
                                                        </div>
                                                        <div class="contact-input">
                                                            <input class="form-inputbox memcontact" id="gaming-mem4-con4" name="gaming-mem4-con4" type="tel" inputmode="numeric" pattern="[6789][0-9]{9}" maxlength="10" oninput="validateNumericInput(this)" placeholder="N/A">
                                                        </div>
                                                        <p class="error-msg" id="gaming-con4-err">Contact number is required!</p>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <!-- IT manager -->
                                            <div class="event">
                                                <div class="event-name">
                                                    <p class="sanskrit-name">Shreshta Nirvahak</p>
                                                    <p class="normal-name">(IT Manager)</p>
                                                </div>

                                                <div class="member">
                                                    <div class="member-name">
                                                        <div class="member-title">
                                                            <p class="input-title-name">Team Member 1</p>
                                                        </div>
                                                        <div class="member-input">
                                                            <input class="form-inputbox memname" id="it-mem1" name="it-mem1" type="text" placeholder="N/A">
                                                        </div>
                                                        <p class="error-msg" id="it-tmem1-err">Name is required!</p>
                                                    </div>

                                                    <div class="member-contact">
                                                        <div class="contact-title">
                                                            <p class="input-title-contact">Contact Number</p>
                                                        </div>
                                                        <div class="contact-input">
                                                            <input class="form-inputbox memcontact" id="it-mem1-con1" name="it-mem1-con1" type="tel" inputmode="numeric" pattern="[6789][0-9]{9}" maxlength="10" oninput="validateNumericInput(this)" placeholder="N/A">
                                                        </div>
                                                        <p class="error-msg" id="it-con1-err">Contact number is required!</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Photography -->
                                            <div class="event">
                                                <div class="event-name">
                                                    <p class="sanskrit-name">Rasadarpana</p>
                                                    <p class="normal-name">(Photography)</p>
                                                </div>

                                                <div class="member">
                                                    <div class="member-name">
                                                        <div class="member-title">
                                                            <p class="input-title-name">Team Member 1</p>
                                                        </div>
                                                        <div class="member-input">
                                                            <input class="form-inputbox memname" id="photo-mem1" name="photo-mem1" type="text" placeholder="N/A">
                                                        </div>
                                                        <p class="error-msg" id="photo-tmem1-err">Name is required!</p>
                                                    </div>

                                                    <div class="member-contact">
                                                        <div class="contact-title">
                                                            <p class="input-title-contact">Contact Number</p>
                                                        </div>
                                                        <div class="contact-input">
                                                            <input class="form-inputbox memcontact" id="photo-mem1-con1" name="photo-mem1-con1" type="tel" inputmode="numeric" pattern="[6789][0-9]{9}" maxlength="10" oninput="validateNumericInput(this)" placeholder="N/A">
                                                        </div>
                                                        <p class="error-msg" id="photo-con1-err">Contact number is required!</p>
                                                    </div>

                                                </div>
                                                
                                            </div>
                                            <!-- videography -->
                                            <div class="event">
                                                <div class="event-name">
                                                    <p class="sanskrit-name">Tattva Chitram</p>
                                                    <p class="normal-name">(Videography)</p>
                                                </div>

                                                <div class="member">
                                                    <div class="member-name">
                                                        <div class="member-title">
                                                            <p class="input-title-name">Team Member 1</p>
                                                        </div>
                                                        <div class="member-input">
                                                            <input class="form-inputbox memname" id="video-mem1" name="video-mem1" type="text" placeholder="N/A">
                                                        </div>
                                                        <p class="error-msg" id="video-tmem1-err">Name is required!</p>
                                                    </div>

                                                    <div class="member-contact">
                                                        <div class="contact-title">
                                                            <p class="input-title-contact">Contact Number</p>
                                                        </div>
                                                        <div class="contact-input">
                                                            <input class="form-inputbox memcontact" id="video-mem1-con1" name="video-mem1-con1" type="tel" inputmode="numeric" pattern="[6789][0-9]{9}" maxlength="10" oninput="validateNumericInput(this)" placeholder="N/A">
                                                        </div>
                                                        <p class="error-msg" id="video-con1-err">Contact number is required!</p>
                                                    </div>


                                                </div>

                                                <div class="member">
                                                    <div class="member-name">
                                                        <div class="member-title">
                                                            <p class="input-title-name">Team Member 2</p>
                                                        </div>
                                                        <div class="member-input">
                                                            <input class="form-inputbox memname" id="video-mem2" name="video-mem2" type="text" placeholder="N/A">
                                                        </div>
                                                        <p class="error-msg" id="video-tmem2-err">Name is required!</p>
                                                    </div>

                                                    <div class="member-contact">
                                                        <div class="contact-title">
                                                            <p class="input-title-contact">Contact Number</p>
                                                        </div>
                                                        <div class="contact-input">
                                                            <input class="form-inputbox memcontact" id="video-mem2-con2" name="video-mem2-con2" type="tel" inputmode="numeric" pattern="[6789][0-9]{9}" maxlength="10" oninput="validateNumericInput(this)" placeholder="N/A">
                                                        </div>
                                                        <p class="error-msg" id="video-con2-err">Contact number is required!</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- IT Quiz -->
                                            <div class="event">
                                                <div class="event-name">
                                                    <p class="sanskrit-name">Gyanvedh</p>
                                                    <p class="normal-name">(IT Quiz)</p>
                                                </div>

                                                <div class="member">
                                                    <div class="member-name">
                                                        <div class="member-title">
                                                            <p class="input-title-name">Team Member 1</p>
                                                        </div>
                                                        <div class="member-input">
                                                            <input class="form-inputbox memname" id="quiz-mem1" name="quiz-mem1" type="text" placeholder="N/A">
                                                        </div>
                                                        <p class="error-msg" id="quiz-tmem1-err">Name is required!</p>
                                                    </div>

                                                    <div class="member-contact">
                                                        <div class="contact-title">
                                                            <p class="input-title-contact">Contact Number</p>
                                                        </div>
                                                        <div class="contact-input">
                                                            <input class="form-inputbox memcontact" id="quiz-mem1-con1" name="quiz-mem1-con1" type="tel" inputmode="numeric" pattern="[6789][0-9]{9}" maxlength="10" oninput="validateNumericInput(this)" placeholder="N/A">
                                                        </div>
                                                        <p class="error-msg" id="quiz-con1-err">Contact number is required!</p>
                                                    </div>


                                                </div>

                                                <div class="member">
                                                    <div class="member-name">
                                                        <div class="member-title">
                                                            <p class="input-title-name">Team Member 2</p>
                                                        </div>
                                                        <div class="member-input">
                                                            <input class="form-inputbox memname" id="quiz-mem2" name="quiz-mem2" type="text" placeholder="N/A">
                                                        </div>
                                                        <p class="error-msg" id="quiz-tmem2-err">Name is required!</p>
                                                    </div>

                                                    <div class="member-contact">
                                                        <div class="contact-title">
                                                            <p class="input-title-contact">Contact Number</p>
                                                        </div>
                                                        <div class="contact-input">
                                                            <input class="form-inputbox memcontact" id="quiz-mem2-con2" name="quiz-mem2-con2" type="tel" inputmode="numeric" pattern="[6789][0-9]{9}" maxlength="10" oninput="validateNumericInput(this)" placeholder="N/A">
                                                        </div>
                                                        <p class="error-msg" id="quiz-con2-err">Contact number is required!</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Web design -->
                                            <div class="event">
                                                <div class="event-name">
                                                    <p class="sanskrit-name">Parikalpana</p>
                                                    <p class="normal-name">(Web Design)</p>
                                                </div>

                                                <div class="member">
                                                    <div class="member-name">
                                                        <div class="member-title">
                                                            <p class="input-title-name">Team Member 1</p>
                                                        </div>
                                                        <div class="member-input">
                                                            <input class="form-inputbox memname" id="web-mem1" name="web-mem1" type="text" placeholder="N/A">
                                                        </div>
                                                        <p class="error-msg" id="web-tmem1-err">Name is required!</p>
                                                    </div>

                                                    <div class="member-contact">
                                                        <div class="contact-title">
                                                            <p class="input-title-contact">Contact Number</p>
                                                        </div>
                                                        <div class="contact-input">
                                                            <input class="form-inputbox memcontact" id="web-mem1-con1" name="web-mem1-con1" type="tel" inputmode="numeric" pattern="[6789][0-9]{9}" maxlength="10" oninput="validateNumericInput(this)" placeholder="N/A">
                                                        </div>
                                                        <p class="error-msg" id="web-con1-err">Contact number is required!</p>
                                                    </div>


                                                </div>

                                                <div class="member">
                                                    <div class="member-name">
                                                        <div class="member-title">
                                                            <p class="input-title-name">Team Member 2</p>
                                                        </div>
                                                        <div class="member-input">
                                                            <input class="form-inputbox memname" id="web-mem2" name="web-mem2" type="text" placeholder="N/A">
                                                        </div>
                                                        <p class="error-msg" id="web-tmem2-err">Name is required!</p>
                                                    </div>

                                                    <div class="member-contact">
                                                        <div class="contact-title">
                                                            <p class="input-title-contact">Contact Number</p>
                                                        </div>
                                                        <div class="contact-input">
                                                            <input class="form-inputbox memcontact" id="web-mem2-con2" name="web-mem2-con2" type="tel" inputmode="numeric" pattern="[6789][0-9]{9}" maxlength="10" oninput="validateNumericInput(this)" placeholder="N/A">
                                                        </div>
                                                        <p class="error-msg" id="web-con2-err">Contact number is required!</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Treasure hunt -->
                                            <div class="event">
                                                <div class="event-name">
                                                    <p class="sanskrit-name">Anveshana</p>
                                                    <p class="normal-name">(Trasure Hunt)</p>
                                                </div>

                                                <div class="member">
                                                    <div class="member-name">
                                                        <div class="member-title">
                                                            <p class="input-title-name">Team Member 1</p>
                                                        </div>
                                                        <div class="member-input">
                                                            <input class="form-inputbox memname" id="hunt-mem1" name="hunt-mem1" type="text" placeholder="N/A">
                                                        </div>
                                                        <p class="error-msg" id="hunt-tmem1-err">Name is required!</p>
                                                    </div>

                                                    <div class="member-contact">
                                                        <div class="contact-title">
                                                            <p class="input-title-contact">Contact Number</p>
                                                        </div>
                                                        <div class="contact-input">
                                                            <input class="form-inputbox memcontact" id="hunt-mem1-con1" name="hunt-mem1-con1" type="tel" inputmode="numeric" pattern="[6789][0-9]{9}" maxlength="10" oninput="validateNumericInput(this)" placeholder="N/A">
                                                        </div>
                                                        <p class="error-msg" id="hunt-con1-err">Contact number is required!</p>
                                                    </div>


                                                </div>

                                                <div class="member">
                                                    <div class="member-name">
                                                        <div class="member-title">
                                                            <p class="input-title-name">Team Member 2</p>
                                                        </div>
                                                        <div class="member-input">
                                                            <input class="form-inputbox memname" id="hunt-mem2" name="hunt-mem2" type="text" placeholder="N/A">
                                                        </div>
                                                        <p class="error-msg" id="hunt-tmem2-err">Name is required!</p>
                                                    </div>

                                                    <div class="member-contact">
                                                        <div class="contact-title">
                                                            <p class="input-title-contact">Contact Number</p>
                                                        </div>
                                                        <div class="contact-input">
                                                            <input class="form-inputbox memcontact" id="hunt-mem2-con2" name="hunt-mem2-con2" type="tel" inputmode="numeric" pattern="[6789][0-9]{9}" maxlength="10" oninput="validateNumericInput(this)" placeholder="N/A">
                                                        </div>
                                                        <p class="error-msg" id="hunt-con2-err">Contact number is required!</p>
                                                    </div>
                                                </div>
                                            </div>

                                        
                                            <div class="enroll-footer">
                                            <!-- <div class="scrolling-container">
                                                <p class="scrolling-text">Note: Participants of Coding, Web Designing, Photography, IT Manager cannot participate in any other 
                                                    events. You can check out the rules for more details.</p>
                                            </div> -->

                                                <button id="enroll-save-btn" class="animated-button" type="submit">
                                                    <span>ENROLL</span>
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
                    <div class="card mt-3 dashboard-cards forallsec hide " id="manageuser-section-id">
                        <div class="card-content ">
                            <div class="row row-group m-0">
                                <div class="manageuser-section" >
                                    <div class="section-heading">
                                        <p class="enroll-title">USERS</p>
                                    </div>
                                    <div class="forms-events">
                                        
                                        <div class="col-lg-12 col-md-6 col-sm-3">
                                            <div class="card">
                                                <div class="card-body">
                                                    <h5 align="center" class="card-title">Edit Users</h5>
                                                    <div class="table-responsive">
                                                        <table class="table table-bordered" id="userTable">
                                                            <thead>
                                                                <tr>
                                                                    <th>Name</th>
                                                                    <th>College Name</th>
                                                                    <th>Email</th>
                                                                    <th>Edit</th>
                                                                    
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                            
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

                    <!-- end of edit user  -->
                   
                    

                    <!-- start of accomodation -->
                    <form id="accomodateForm" action="<?= base_url('admin/accomodation') ?>" method="post">
                        <div class="card mt-3 dashboard-cards forallsec hide" id="accomodation-section-id">
                            <!-- <div class="card-content "> -->
                                <div class="row row-group m-0">
                                    <div class="accomodation-section ">
                                        <div class="section-heading">
                                            <p class="enroll-title">ACCOMMODATION</p>
                                        </div>

                                        <div class="acc-points-div">
                                            <ul>
                                                <li class="acc-points">Accommodation may incur some charges.</li>
                                            </ul>
                                        </div>

                                        <div class="acc-check-div">
                                            <div class="cntr" style="height: 36px; width:32px">
                                                <input type="checkbox" id="cbx" onchange="toggleAccNumsDiv()" style="display: none;">
                                                <label for="cbx" class="check">
                                                    <svg class="acc-checkbox" width="2.5vw" height="2.5vw" viewBox="0 0 18 18">
                                                        <path
                                                            d="M1,9 L1,3.5 C1,2 2,1 3.5,1 L14.5,1 C16,1 17,2 17,3.5 L17,14.5 C17,16 16,17 14.5,17 L3.5,17 C2,17 1,16 1,14.5 L1,9 Z">
                                                        </path>
                                                        <polyline points="1 9 7 14 15 4"></polyline>
                                                    </svg>
                                                </label>
                                            </div>
                                            <p class="acc-check-txt">Accomodation Required!</p>
                                        </div>

                                        <div class="acc-nums-div acc-hide">
                                            <input class="acc-nums" id="no-b" type="number" oninput="this.value = this.value.slice(0, 2)"
                                                placeholder="Number of Men">
                                            <input class="acc-nums" id="no-g" type="number" oninput="this.value = this.value.slice(0, 2)"
                                                placeholder="Number of Women">
                                        </div>

                                        <div class="acc-nums-txt1">
                                            <p class="acc-check-txt1">For any queries regarding Accommodation, Please feel free to contact:</p>
                                        </div>

                                        <div class="acc-contacts">
                                            <div class="acc-con">
                                                <p class="acc-con-name">XXX</p>
                                                <p class="acc-con-number">+91 00000000</p>
                                            </div>
                                            <div class="acc-con">
                                                <p class="acc-con-name">YYYY</p>
                                                <p class="acc-con-number">+91 0000000000</p>
                                            </div>
                                        </div>

                                        <button class="accom-animated-button"  id="accomodation-btn">
                                            <span>SAVE</span>
                                            <span></span>
                                        </button>
                                    </div>
                                </div>
                            <!-- </div> -->
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
                                            <h1 class="h1 mt-1  heading">Privacy and Policy</h1>
                                            <div class="ms-2 me-2">
                                                <p class="h6">These terms and conditions outline the rules and regulations for the use of Sambhram 24's Website, located at https://abc.com/.</p>

                                                <p class="h6">By accessing this website we assume you accept these terms and conditions. Do not continue to use Sambhram 24 if you do not agree to take all of the terms and conditions stated on this page.
                                                    
                                                    ABC is a National level techno-cultural festival for the students of technical institutes across the country. However, some events like Battle of the Bands, Fashion Show, Vibe and Stomp That! (Termed as semi-pro events here onwards) are open to all the colleges in the country.</p>
                                                    <ul>
                                                        <li>
                                                            <p class="h6">Participants from only same colleges can form a team.</p>
                                                        </li>
                                                        <li>
                                                            <p class="h6">Participants must follow all the rules and regulations of the college.</p>
                                                        </li>
                                                        <li>
                                                            <p class="h6">Display of any unruly behaviour shall lead to disqualification of the team and expulsion of the participant from the fest.</p>
                                                        </li>
                                                        <li>
                                                            <p class="h6">Consumption of any alcoholic drinks, use of any hallucinogenic drugs and other illegal substances anywhere in the institute campus is strictly prohibited and any person who has consumed such substances and makes an attempt to enter the campus will not be allowed inside.</p>
                                                        </li>
                                                        <li>
                                                            <p class="h6">Organisers hold the right to change the rules of the event before the event begins without prior notice.</p>
                                                        </li>
                                                        <li>
                                                            <p class="h6">The entry for the events will be through the Sambhram22 website.</p>
                                                        </li>
                                                        <li>
                                                            <p class="h6">The participant must also present their college ID card (compulsory) and Valid government issued ID Proof (Any one) (Aadhaar, Driving license, Voter ID, etc.).</p>
                                                        </li>
                                                        <li>
                                                            <p class="h6">Any participant found violating the above rules may be immediately expelled from the campus. His/her registration from all the events may be cancelled and he/she will be penalised appropriately. Organiser reserves the right to take appropriate legal actions in such cases.</p>
                                                        </li>  
                                                    </ul>
                                                    <h1 class="h3 mt-1 heading">Cancellation Policy</h1>
                                                    <p class="h6">*Cancellation is not allowed once registered.</p>
                                                    <p class="h6">The participant registered for the event cannot withdraw the registration and no refund will issued.</p>
                                                
                                            
                                                    <h1 class="h3 mt-1 heading">Refund Policy</h1>
                                                    <p class="h6">Refunds in any particular case can only be initiated upon request. Please reach out to the Technical Heads of Sambhram24 for refunds.</p>
                                                    <p class="h6">Name:   xxx xxx xxxx</p>
                                                    <p class="h6">Name:   xxx xxx xxxx</p>
                                            </div>
                                        </div>    
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end of accomodation   -->
                    
            
        


                <!--End sidebar-wrapper-->
                    <!--Start topbar header-->
                    <header class="topbar-nav">
                        <nav class="navbar navbar-expand fixed-top">
                            <ul class="navbar-nav mr-auto align-items-center">
                                <li class="nav-item">
                                <a class="nav-link toggle-menu" href="javascript:void();">
                                <i class="icon-menu menu-icon"></i>
                                </a>
                                </li> <!-- 
                                <li class="nav-item">
                                <form class="search-bar">
                                    <input type="text" class="form-control" placeholder="Enter keywords">
                                    <a href="javascript:void();"><i class="icon-magnifier"></i></a>
                                </form>
                                </li> -->
                                
                            </ul>

                            <ul class="navbar-nav align-items-center right-nav-link">
                                <p class="team-name mt-2">Welcome Team!!.. <span class="header-team-name"> <?php echo session('team_name'); ?> </span></p>
                                <li class="nav-item">
                                    <!-- <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">
                                        <span class="user-profile"><img src="<?= base_url('assets/web/imgs/user.jpg')?>" class="img-circle" alt="user avatar"></span>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li class="dropdown-item user-details">
                                            <a href="javaScript:void();">
                                                <div class="media">
                                                    <div class="avatar"><img class="align-self-start mr-3" src="<?= base_url('assets/web/imgs/user.jpg')?>" alt="user avatar"></div>
                                                    <div class="media-body">
                                                        <h6 class="mt-2 user-title"><?php echo session('name'); ?></h6>
                                                        <p class="user-subtitle"><?php echo session('email'); ?></p>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="dropdown-divider"></li>
                                        <li class="dropdown-item"><i class="icon-power mr-2"></i> Logout</li>
                                    </ul> -->
                                     
                                    <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown" href="#">
                                        <span class="user-profile"><img src="<?= base_url('assets/web/imgs/user.jpg')?>" class="img-circle" alt="user avatar"></span>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li class="dropdown-item user-details">
                                            <a href="javaScript:void();">
                                            <div class="media">
                                                <div class="avatar"><img class="align-self-start mr-3" src="<?= base_url('assets/web/imgs/user.jpg')?>" alt="user avatar"></div>
                                                <div class="media-body">
                                                    <h6 class="mt-2 user-title"><?php echo session('name'); ?></h6>
                                                    <p class="user-subtitle"><?php echo session('email'); ?></p>
                                                </div>
                                            </div>
                                            </a>
                                        </li>
                                        <li class="dropdown-divider"></li>
                                        <!-- <a href="<?= base_url('logout') ?>"class='glowing-btn'><span class='glowing-txt'>C<span class='faulty-letter'>L</span>ICK</span></a> -->

                                        <a href="<?= base_url('logout') ?>">
                                        
                                        <li class="dropdown-item"><i class="icon-power mr-2"></i> Logout</li> 
                                        </a> 
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                    </header>
                    <!--End topbar header-->


        
                    <!--start overlay-->
                    <div class="overlay toggle-menu" onclick="hideHambergerMenu()"></div>
                    <!--end overlay-->
            
                </div>
                <!-- End container-fluid-->
        
            </div><!--End content-wrapper-->
        </section>
    </div>
                                                                                                                               
   <!--Start Back To Top Button-->
    <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
    <!--End Back To Top Button-->
	
	<!--Start footer-->
	<footer class="footer">
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
<!-- Chart js -->



<!-- Index js -->
<!-- <script src="<?= base_url('assets/web/js/index.js') ?>"></script> -->


  
</body>
</html>
