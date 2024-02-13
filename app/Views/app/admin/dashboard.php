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
  <link href="<?= base_url('assets/web/plugins/vectormap/jquery-jvectormap-2.0.2.css') ?>" rel="stylesheet"/>
  <!-- simplebar CSS-->
  <link href="<?= base_url('assets/web/plugins/simplebar/css/simplebar.css') ?>" rel="stylesheet"/>
  <!-- Bootstrap core CSS-->
  <link href="<?= base_url('assets/web/css/bootstrap.min.css') ?>" rel="stylesheet"/>
  <!-- animate CSS-->
  <link href="<?= base_url('assets/web/css/animate.css') ?>" rel="stylesheet" type="text/css"/>
  <!-- Icons CSS-->
  <link href="<?= base_url('assets/web/css/icons.css') ?>" rel="stylesheet" type="text/css"/>
  <!-- Sidebar CSS-->
  <link href="<?= base_url('assets/web/css/sidebar-menu.css') ?>" rel="stylesheet"/>
  <!-- Custom Style-->
  <link href="<?= base_url('assets/web/css/app-style.css') ?>" rel="stylesheet"/>
  
</head>

<body class="bg-theme bg-theme1">
 
<!-- Start wrapper-->
 <div id="wrapper">
 
  <!--Start sidebar-wrapper-->
   <div id="sidebar-wrapper" data-simplebar="" data-simplebar-auto-hide="true">
     <div class="brand-logo">
      <a href="<?= base_url('/') ?>">
       <img src="assets/web/imgs/favicon.png" class="logo-icon" alt="logo icon">
       <h5 class="logo-text">  Dashboard</h5>
     </a>
   </div>
   <ul class="sidebar-menu do-nicescrol">
      <li class="sidebar-header">MAIN NAVIGATION</li>
      <li>
        <a href="#enroll-section-id">
          <i class="zmdi zmdi-hospital"></i> <span>Enroll</span>
        </a>
      </li>

      <li>
        <a href="#manageuser-section-id">
          <i class="zmdi zmdi-edit"></i> <span>Manage users</span>
        </a>
      </li>

      <li>
        <a href="icons.html">
          <i class="zmdi zmdi-hotel"></i> <span>Accomodation</span>
        </a>
      </li>

      <li>
        <a href="forms.html">
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
   
   </div>

   <div class="clearfix"></div>
	
    <div class="content-wrapper">
      <div class="container-fluid">
      <!-- enroll starts -->
      <div class="card mt-3">
    <div class="card-content">
        <div class="row row-group m-0">
        <div class="enroll-section" id="enroll-section-id">

                <div id="loader-lottie-div" class="loader">
                    <dotlottie-player id="loader-lottie" autoplay loop mode="normal"
                        src="/assets/icon/loader-yellow.lottie" style="width: 70px;height:70px;"></dotlottie-player>
                </div>

                <div class="section-heading">
                    <p class="enroll-title">ENROLL FOR THE EVENTS...</p>
                </div>

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

                                    <input class="form-inputbox memname" id="coding-mem1" type="text" placeholder="N/A">

                                </div>
                                <p class="error-msg" id="coding-tmem1-err">Name is required!</p>
                            </div>

                            <div class="member-contact">
                                <div class="contact-title">

                                    <p class="input-title-contact">Contact Number</p>

                                </div>
                                <div class="contact-input">

                                    <input class="form-inputbox" id="coding-mem1-con1" type="tel" inputmode="numeric"
                                        pattern="[6789][0-9]{9}" maxlength="10" oninput="validateNumericInput(this)"
                                        placeholder="N/A">

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

                                    <input class="form-inputbox memname" id="dance-mem2" type="text" placeholder="N/A">

                                </div>
                                <p class="error-msg" id="dance-tmem4-err">Name is required!</p>
                            </div>

                            <div class="member-contact">
                                <div class="contact-title">

                                    <p class="input-title-contact">Contact Number</p>

                                </div>
                                <div class="contact-input">

                                    <input class="form-inputbox" id="dance-mem4-con4" type="tel" inputmode="numeric"
                                        pattern="[6789][0-9]{9}" maxlength="10" oninput="validateNumericInput(this)"
                                        placeholder="N/A">


                                </div>
                                <p class="error-msg" id="dance-con4-err">Contact number is required!</p>
                            </div>
                      </div>


                    </div>
                    <!-- IT quiz -->
                    <div class="event">
                        <div class="event-name">
                            <p class="sanskrit-name">Gyanvedha</p>
                            <p class="normal-name">(IT Quiz)</p>
                        </div>

                        <div class="member">
                            <div class="member-name">
                                <div class="member-title">

                                    <p class="input-title-name">Team Member 1</p>

                                </div>
                                <div class="member-input">

                                    <input class="form-inputbox memname" id="quiz-mem1" type="text" placeholder="N/A">

                                </div>
                                <p class="error-msg" id="quiz-tmem1-err">Name is required!</p>
                            </div>

                            <div class="member-contact">
                                <div class="contact-title">

                                    <p class="input-title-contact">Contact Number</p>

                                </div>
                                <div class="contact-input">

                                    <input class="form-inputbox" id="quiz-mem1-con1" type="tel" inputmode="numeric"
                                        pattern="[6789][0-9]{9}" maxlength="10" oninput="validateNumericInput(this)"
                                        placeholder="N/A">

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

                                    <input class="form-inputbox memname" id="quiz-mem2" type="text" placeholder="N/A">

                                </div>
                                <p class="error-msg" id="quiz-tmem4-err">Name is required!</p>
                            </div>

                            <div class="member-contact">
                                <div class="contact-title">

                                    <p class="input-title-contact">Contact Number</p>

                                </div>
                                <div class="contact-input">

                                    <input class="form-inputbox" id="quiz-mem4-con4" type="tel" inputmode="numeric"
                                        pattern="[6789][0-9]{9}" maxlength="10" oninput="validateNumericInput(this)"
                                        placeholder="N/A">


                                </div>
                                <p class="error-msg" id="quiz-con4-err">Contact number is required!</p>
                            </div>


                        </div>
                    </div>
                    <!-- web design -->
                    <div class="event">
                        <div class="event-name">
                            <p class="sanskrit-name">Rachana Sutra</p>
                            <p class="normal-name">(Web Design)</p>
                        </div>

                        <div class="member">
                            <div class="member-name">
                                <div class="member-title">

                                    <p class="input-title-name">Team Member 1</p>

                                </div>
                                <div class="member-input">

                                    <input class="form-inputbox memname" id="web-mem1" type="text" placeholder="N/A">

                                </div>
                                <p class="error-msg" id="web-tmem1-err">Name is required!</p>
                            </div>

                            <div class="member-contact">
                                <div class="contact-title">

                                    <p class="input-title-contact">Contact Number</p>

                                </div>
                                <div class="contact-input">

                                    <input class="form-inputbox" id="web-mem1-con1" type="tel" inputmode="numeric"
                                        pattern="[6789][0-9]{9}" maxlength="10" oninput="validateNumericInput(this)"
                                        placeholder="N/A">

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

                                    <input class="form-inputbox memname" id="web-mem2" type="text" placeholder="N/A">

                                </div>
                                <p class="error-msg" id="web-tmem4-err">Name is required!</p>
                            </div>

                            <div class="member-contact">
                                <div class="contact-title">

                                    <p class="input-title-contact">Contact Number</p>

                                </div>
                                <div class="contact-input">

                                    <input class="form-inputbox" id="web-mem4-con4" type="tel" inputmode="numeric"
                                        pattern="[6789][0-9]{9}" maxlength="10" oninput="validateNumericInput(this)"
                                        placeholder="N/A">


                                </div>
                                <p class="error-msg" id="web-con4-err">Contact number is required!</p>
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

                                    <input class="form-inputbox memname" id="gaming-mem1" type="text" placeholder="N/A">

                                </div>
                                <p class="error-msg" id="gaming-tmem1-err">Name is required!</p>
                            </div>

                            <div class="member-contact">
                                <div class="contact-title">

                                    <p class="input-title-contact">Contact Number</p>

                                </div>
                                <div class="contact-input">

                                    <input class="form-inputbox" id="gaming-mem1-con1" type="tel" inputmode="numeric"
                                        pattern="[6789][0-9]{9}" maxlength="10" oninput="validateNumericInput(this)"
                                        placeholder="N/A">

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

                                    <input class="form-inputbox memname" id="gaming-mem2" type="text" placeholder="N/A">

                                </div>
                                <p class="error-msg" id="gaming-tmem4-err">Name is required!</p>
                            </div>

                            <div class="member-contact">
                                <div class="contact-title">

                                    <p class="input-title-contact">Contact Number</p>

                                </div>
                                <div class="contact-input">

                                    <input class="form-inputbox" id="gaming-mem4-con4" type="tel" inputmode="numeric"
                                        pattern="[6789][0-9]{9}" maxlength="10" oninput="validateNumericInput(this)"
                                        placeholder="N/A">


                                </div>
                                <p class="error-msg" id="gaming-con4-err">Contact number is required!</p>
                            </div>


                        </div>
                        <div class="member">
                            <div class="member-name">
                                <div class="member-title">

                                    <p class="input-title-name">Team Member 3</p>

                                </div>
                                <div class="member-input">

                                    <input class="form-inputbox memname" id="gaming-mem3" type="text" placeholder="N/A">

                                </div>
                                <p class="error-msg" id="gaming-tmem3-err">Name is required!</p>
                            </div>

                            <div class="member-contact">
                                <div class="contact-title">

                                    <p class="input-title-contact">Contact Number</p>

                                </div>
                                <div class="contact-input">

                                    <input class="form-inputbox" id="gaming-mem3-con3" type="tel" inputmode="numeric"
                                        pattern="[6789][0-9]{9}" maxlength="10" oninput="validateNumericInput(this)"
                                        placeholder="N/A">

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

                                    <input class="form-inputbox memname" id="gaming-mem4" type="text" placeholder="N/A">

                                </div>
                                <p class="error-msg" id="gaming-tmem4-err">Name is required!</p>
                            </div>

                            <div class="member-contact">
                                <div class="contact-title">

                                    <p class="input-title-contact">Contact Number</p>

                                </div>
                                <div class="contact-input">

                                    <input class="form-inputbox" id="gaming-mem4-con1" type="tel" inputmode="numeric"
                                        pattern="[6789][0-9]{9}" maxlength="10" oninput="validateNumericInput(this)"
                                        placeholder="N/A">

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

                                    <input class="form-inputbox memname" id="quiz-mem1" type="text" placeholder="N/A">

                                </div>
                                <p class="error-msg" id="quiz-tmem1-err">Name is required!</p>
                            </div>

                            <div class="member-contact">
                                <div class="contact-title">

                                    <p class="input-title-contact">Contact Number</p>

                                </div>
                                <div class="contact-input">

                                    <input class="form-inputbox" id="quiz-mem1-con1" type="tel" inputmode="numeric"
                                        pattern="[6789][0-9]{9}" maxlength="10" oninput="validateNumericInput(this)"
                                        placeholder="N/A">

                                </div>
                                <p class="error-msg" id="quiz-con1-err">Contact number is required!</p>
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

                                    <input class="form-inputbox memname" id="photo-mem1" type="text" placeholder="N/A">

                                </div>
                                <p class="error-msg" id="photo-tmem1-err">Name is required!</p>
                            </div>

                            <div class="member-contact">
                                <div class="contact-title">

                                    <p class="input-title-contact">Contact Number</p>

                                </div>
                                <div class="contact-input">

                                    <input class="form-inputbox" id="photo-mem1-con1" type="tel" inputmode="numeric"
                                        pattern="[6789][0-9]{9}" maxlength="10" oninput="validateNumericInput(this)"
                                        placeholder="N/A">

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

                                    <input class="form-inputbox memname" id="video-mem1" type="text" placeholder="N/A">

                                </div>
                                <p class="error-msg" id="video-tmem1-err">Name is required!</p>
                            </div>

                            <div class="member-contact">
                                <div class="contact-title">

                                    <p class="input-title-contact">Contact Number</p>

                                </div>
                                <div class="contact-input">

                                    <input class="form-inputbox" id="video-mem1-con1" type="tel" inputmode="numeric"
                                        pattern="[6789][0-9]{9}" maxlength="10" oninput="validateNumericInput(this)"
                                        placeholder="N/A">

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

                                    <input class="form-inputbox memname" id="video-mem2" type="text" placeholder="N/A">

                                </div>
                                <p class="error-msg" id="video-tmem4-err">Name is required!</p>
                            </div>

                            <div class="member-contact">
                                <div class="contact-title">

                                    <p class="input-title-contact">Contact Number</p>

                                </div>
                                <div class="contact-input">

                                    <input class="form-inputbox" id="video-mem4-con4" type="tel" inputmode="numeric"
                                        pattern="[6789][0-9]{9}" maxlength="10" oninput="validateNumericInput(this)"
                                        placeholder="N/A">


                                </div>
                                <p class="error-msg" id="video-con4-err">Contact number is required!</p>
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

                                    <input class="form-inputbox memname" id="hunt-mem1" type="text" placeholder="N/A">

                                </div>
                                <p class="error-msg" id="hunt-tmem1-err">Name is required!</p>
                            </div>

                            <div class="member-contact">
                                <div class="contact-title">

                                    <p class="input-title-contact">Contact Number</p>

                                </div>
                                <div class="contact-input">

                                    <input class="form-inputbox" id="hunt-mem1-con1" type="tel" inputmode="numeric"
                                        pattern="[6789][0-9]{9}" maxlength="10" oninput="validateNumericInput(this)"
                                        placeholder="N/A">

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

                                    <input class="form-inputbox memname" id="hunt-mem2" type="text" placeholder="N/A">

                                </div>
                                <p class="error-msg" id="hunt-tmem4-err">Name is required!</p>
                            </div>

                            <div class="member-contact">
                                <div class="contact-title">

                                    <p class="input-title-contact">Contact Number</p>

                                </div>
                                <div class="contact-input">

                                    <input class="form-inputbox" id="hunt-mem4-con4" type="tel" inputmode="numeric"
                                        pattern="[6789][0-9]{9}" maxlength="10" oninput="validateNumericInput(this)"
                                        placeholder="N/A">


                                </div>
                                <p class="error-msg" id="hunt-con4-err">Contact number is required!</p>
                            </div>


                        </div>
                    </div>
                    

                    <div class="enroll-footer">
                        <!-- <div class="scrolling-container">
                            <p class="scrolling-text">Note: Participants of Coding, Web Designing, Photography, IT Manager cannot participate in any other 
                                events. You can check out the rules for more details.</p>
                        </div> -->
                        <button id="enroll-save-btn" class="animated-button">
                            <span>ENROLL</span>
                            <span></span>
                        </button>
                    </div>

                  </div>
                </div>
              </div>
            </div>

            </div>
   <!--End sidebar-wrapper-->

   <!-- start of edit user -->
   <div class="card mt-3">
    <div class="card-content">
        <div class="row row-group m-0">
        <div class="enroll-section" id="#manageuser-section-id">

                <div id="loader-lottie-div" class="loader">
                    <dotlottie-player id="loader-lottie" autoplay loop mode="normal"
                        src="/assets/icon/loader-yellow.lottie" style="width: 70px;height:70px;"></dotlottie-player>
                </div>

                <div class="section-heading">
                    <p class="enroll-title">ENROLL FOR THE EVENTS...</p>
                </div>

                <div class="forms-events">
                <!-- edit user table  -->
                    <table>
                        <thead>
                            <tr>
                                <th>Sl. No</th>
                                <th>Name</th>
                                <th>College Name</th>
                                <th>Email</th>
                                <th>User Type</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if(isset($data) && is_array($data)): ?>
                                <?php foreach ($data as $user): ?>
                                    <tr>
                                        <td><?php echo $user['slno']; ?></td>
                                        <td><?php echo $user['name']; ?></td>
                                        <td><?php echo $user['college_name']; ?></td>
                                        <td><?php echo $user['email']; ?></td>
                                        <td>
                                            <form method="post" action="<?php echo base_url('admin/updateUserRole'); ?>">
                                                <input type="hidden" name="user_id" value="<?php echo $user['id']; ?>">
                                                <select name="user_role">
                                                    <option value="admin" <?php echo ($user['user_type'] == 'admin') ? 'selected' : ''; ?>>Admin</option>
                                                    <option value="student" <?php echo ($user['user_type'] == 'student') ? 'selected' : ''; ?>>Student</option>
                                                </select>
                                                <button type="submit">Update</button>
                                            </form>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            <?php else: ?>
                                <tr>
                                    <td colspan="6">No data available</td>
                                </tr>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>
                                        

                    <div class="enroll-footer">
                        <!-- <div class="scrolling-container">
                            <p class="scrolling-text">Note: Participants of Coding, Web Designing, Photography, IT Manager cannot participate in any other 
                                events. You can check out the rules for more details.</p>
                        </div> -->
                        <button id="enroll-save-btn" class="animated-button">
                            <span>ENROLL</span>
                            <span></span>
                        </button>
                    </div>

                  </div>
                </div>
              </div>
            </div>

            </div>
   <!-- end of edit user  -->
<!--Start topbar header-->
<header class="topbar-nav">
 <nav class="navbar navbar-expand fixed-top">
  <ul class="navbar-nav mr-auto align-items-center">
    <li class="nav-item">
      <a class="nav-link toggle-menu" href="javascript:void();">
       <i class="icon-menu menu-icon"></i>
     </a>
    </li>
    <li class="nav-item">
      <form class="search-bar">
        <input type="text" class="form-control" placeholder="Enter keywords">
         <a href="javascript:void();"><i class="icon-magnifier"></i></a>
      </form>
    </li>
  </ul>
     
  <ul class="navbar-nav align-items-center right-nav-link">
    
    
    
    <li class="nav-item">
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
        <li class="dropdown-item"><i class="icon-envelope mr-2"></i> Inbox</li>
        <li class="dropdown-divider"></li>
        <li class="dropdown-item"><i class="icon-wallet mr-2"></i> Account</li>
        <li class="dropdown-divider"></li>
        <li class="dropdown-item"><i class="icon-settings mr-2"></i> Setting</li>
        <li class="dropdown-divider"></li>
        <li class="dropdown-item"><i class="icon-power mr-2"></i> Logout</li>
      </ul>
    </li>
  </ul>
</nav>
</header>
<!--End topbar header-->


	  
	<!--start overlay-->
		  <div class="overlay toggle-menu"></div>
		<!--end overlay-->
		
    </div>
    <!-- End container-fluid-->
    
    </div><!--End content-wrapper-->
   <!--Start Back To Top Button-->
    <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
    <!--End Back To Top Button-->
	
	<!--Start footer-->
	<footer class="footer">
      <div class="container">
        <div class="text-center">
          Copyright © 2018 Dashtreme Admin
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
  <script src="<?= base_url('assets/web/js/jquery.min.js') ?>"></script>
  <script src="<?= base_url('assets/web/js/popper.min.js') ?>"></script>
  <script src="<?= base_url('assets/web/js/bootstrap.min.js') ?>"></script>
	
 <!-- simplebar js -->
  <script src="<?= base_url('assets/web/plugins/simplebar/js/simplebar.js') ?>"></script>
  <!-- sidebar-menu js -->
  <script src="<?= base_url('assets/web/js/sidebar-menu.js') ?>"></script>
  <!-- loader scripts -->
  <script src="<?= base_url('assets/web/js/jquery.loading-indicator.js') ?>"></script>
  <!-- Custom scripts -->
  <script src="<?= base_url('assets/web/js/app-script.js') ?>"></script>
  <!-- Chart js -->
  
  <script src="<?= base_url('ssets/web/plugins/Chart.js/Chart.min.js') ?>"></script>
 
  <!-- Index js -->
  <script src="<?= base_url('assets/web/js/index.js') ?>"></script>

  
</body>
</html>
