    <div class="container-fluid py-5 bg-dark hero-header mb-5">
        <section id="home">   
            <div class="container my-5 py-5">
                <div class="row  g-5">
                    <div class="col-lg-6 text-center text-lg-start">
                        <div class="hero-container">
                            
                            <h2 class="sanskrit-name hero glitch layers" data-text="AAVIRBHAV"><span>AAVIRBHAV</span></h2>
                        </div>
                        
                        
                        <h1 class="motivation animated slideInLeft  mb-5 pb-2">WHERE TALENT MEETS OPPORTUNITY!!</h1>
                        
                        <p class="motivation-sub text-white  animated slideInLeft mb-5 pb-2">National Level IT & Management Fest</p>
                        <?php if (isset($_SESSION['name']) && !empty($_SESSION['name'])): ?>
                            
                            <a href="<?= base_url('dashboard') ?>" class="lan-btn py-sm-3 px-sm-5 me-3 animated slideInLeft" style="--clr:#000000">
                                <span>Dashboard</span><i></i>
                            </a>
                        <?php else: ?>
                            <a href="<?= base_url('login') ?>" class="lan-btn py-sm-3 px-sm-5 me-3 animated slideInLeft" style="--clr:#000000">
                                <span>Login</span><i></i>
                            </a>
                        <?php endif; ?>
                        
                        
                        

                        </div>
                        <div class="col-lg-6 text-center text-lg-end ">
                            <img class="img-fluid mandal-1 d-none d-sm-none d-md-block" src="<?= base_url('assets/web/imgs/image-mandal-3.png') ?>" alt="">
                        
                   
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
        
      
        <!-- Counter Section Begin  **edited-->
        <div class="container-fluid">
            <div class="container">
                <div class="row g-4">
                    <div class="col-lg-12 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                        <!-- Counter Section Begin  **edited-->
                        <div class="counter main-example text-center text-lg-start">
                            <h1 class="display-1 text-center text-white animated slideInLeft"><strong>Event Starts In</strong></h1>
                            <h1 class="display-5 text-center text-white animated slideInLeft"><strong>Every Second Counts...</strong></h1>
                            <div class="text-center countdown-container" data-timer="2025/10/03" id="main-example"></div>
                        </div>
                        <div class="counter">
                            <script type="text/template" id="main-example-template">
                                <div class="time <%= label %> m-1">
                                    <span class="count curr top"><%= curr %></span>
                                    <span class="count next top"><%= next %></span>
                                    <span class="count next bottom"><%= next %></span>
                                    <span class="count curr bottom"><%= curr %></span>
                                    <span class="label"><%= label.length < 6 ? label : label.substr(0, 3)  %></span>
                                </div>
                            </script>
                        </div>
                        <!-- Counter Section End -->
                </div>
            </div>
        </div>       
                            
       


        <!-- About Start -->
        <section id="about">
            <div class="container-fluid py-5">
                <div class="container">
                    <div class="row g-5 align-items-center">
                        <div class="col-lg-6">
                            <div class="row g-3">
                                <div class="col-6 text-start">
                                    <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.1s" src="<?= base_url('assets/web/imgs/events/coding_logo.png') ?>">
                                </div>
                                <div class="col-6 text-start">
                                    <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.3s" src="<?= base_url('assets/web/imgs/events/It_manager_logo.png') ?>" style="margin-top: 25%;">
                                </div>
                                <div class="col-6 text-end">
                                    <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.5s" src="<?= base_url('assets/web/imgs/events/TT_logo.jpg') ?>">
                                </div>
                                <div class="col-6 text-end">
                                    <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.7s" src="<?= base_url('assets/web/imgs/events/gaming_logo.png') ?>">
                                </div>
                            </div>
                        </div>
                        <div class="section col-lg-6">
                            <h5 class="section-title ff-secondary text-start text-light fw-normal">About event</h5>
                            <h1 class="abt-header display-5 mb-4">Welcome to <span class="sanskrit-name-abt">AAVIRBHAV-2k24</span> </h1>
                            <p class="abt-sub display-7 mb-1">DIVE INTO </p>
                            <p class="abt-sub display-7 mb-4">EXCITING COMPETITION TO SHOWCASE YOUR TALENT WITH REWARDS.</p>
                            <div class="row g-4 mb-4">
                                <div class="col-sm-6">
                                    <div class="d-flex align-items-center border-start border-5 border-light px-3">
                                        <h1 class="flex-shrink-0 display-5 text-warning mb-0" data-toggle="counter-up">8</h1><p class="text-warning">+</p>
                                        <div class="ps-4">
                                            <p class="mb-0">Events to</p>
                                            <h6 class="text-uppercase mb-0">Participate</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="d-flex align-items-center border-start border-5 border-light px-3">
                                        <h1 class="flex-shrink-0 display-5 text-warning mb-0" data-toggle="counter-up">10</h1><p class="text-warning">+</p>
                                        <div class="ps-4">
                                            <p class="mb-0">Trophies to</p>
                                            <h6 class="text-uppercase mb-0">Win</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <a target="_blank" href="https://www.stagnescollege.edu.in/about-college/" class="abt-btn py-sm-3 px-sm-5 me-3 animated slideInLeft"style="--clr:#000000"><span>About us</span><i></i></a>
                            
                                    
                            
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- About End -->

        <!-- Event  Start -->
        <section id="events">
            <div class="container-fluid py-5 wow fadeInUp"  data-wow-delay="0.1s">
                <div class="container">
                    <div class="text-center">
                        <h5 class="section-title ff-secondary text-center text-primary fw-normal">Events</h5>
                        <h1 class="mb-5 section-sub-title">Events to register!!!</h1>
                    </div>
                    <div class="owl-carousel testimonial-carousel">
                        <div class="testimonial-item bg-transparent border rounded p-0">
                            <img class="img-fluid mx-auto d-block flex-shrink-1 mb-2" src="<?= base_url('assets/web/imgs/events/coding_logo.png') ?>" alt="">
                            <div class="align-item-center" style="border-bottom: 5px solid white">
                                <h3 class="sanskrit-name text-center">Drudavishti</h3>
                                <h3 class="text-center">CODING</h3><br>
                            </div>
                            <div class="d-flex align-items-center justify-content-center my-2" >
                            
                                
                                <button  class="view-more-btn" onclick="toggleOverlayMcaRules(1)">
                                    <div class="me-2"><span class="circle" aria-hidden="true">
                                    <span class="icon arrow"></span>
                                    </span>
                                    </div>
                                    <span class="button-text">Read More</span>
                                </button>
                            </div>
                        </div>
                         <div class="testimonial-item bg-transparent border rounded p-0">
                            <img class="img-fluid mx-auto d-block flex-shrink-1 mb-2" src="<?= base_url('assets/web/imgs/events/web_design_logo.jpg') ?>" alt="">
                            <div class="align-item-center" style="border-bottom: 5px solid white">
                                <h3 class="sanskrit-name text-center">Vebkalpana</h3>
                                <h3 class="text-center">Web Designing</h3><br>
                            </div>
                            <div class="d-flex align-items-center justify-content-center my-2" >
                            
                                
                                <button  class="view-more-btn" onclick="toggleOverlayMcaRules(0)">
                                    <div class="me-2"><span class="circle" aria-hidden="true">
                                    <span class="icon arrow"></span>
                                    </span>
                                    </div>
                                    <span class="button-text">Read More</span>
                                </button>
                            </div>
                        </div>
                        <div class="testimonial-item bg-transparent border rounded p-0">
                            <img class="img-fluid mx-auto d-block flex-shrink-1 mb-2" src="<?= base_url('assets/web/imgs/events/it_quiz_logo.jpeg') ?>" alt="">
                            <div class="align-item-center" style="border-bottom: 5px solid white">
                                <h3 class="sanskrit-name text-center">Gyanvedha</h3>
                                <h3 class="text-center">IT QUIZ</h3><br>
                            </div>
                           <div class="d-flex align-items-center justify-content-center my-2" >
                            
                                
                                <button  class="view-more-btn" onclick="toggleOverlayMcaRules(2)">
                                    <div class="me-2"><span class="circle" aria-hidden="true">
                                    <span class="icon arrow"></span>
                                    </span>
                                    </div>
                                    <span class="button-text">Read More</span>
                                </button>
                            </div>
                        </div>
                        <div class="testimonial-item bg-transparent border rounded p-0">
                            <img class="img-fluid mx-auto d-block flex-shrink-1 mb-2" src="<?= base_url('assets/web/imgs/events/TT_logo.jpg') ?>" alt="">
                            <div class="align-item-center" style="border-bottom: 5px solid white">
                                <h3 class="sanskrit-name text-center">ANVESHAN</h3>
                                <h3 class="text-center">TREASURE HUNT</h3> <br>
                            </div>
                           <div class="d-flex align-items-center justify-content-center my-2" >
                            
                                
                                <button  class="view-more-btn" onclick="toggleOverlayMcaRules(6)">
                                    <div class="me-2"><span class="circle" aria-hidden="true">
                                    <span class="icon arrow"></span>
                                    </span>
                                    </div>
                                    <span class="button-text">Read More</span>
                                </button>
                            </div>
                        </div>
                        <div class="testimonial-item bg-transparent border rounded p-0">
                            <img class="img-fluid mx-auto d-block flex-shrink-1 mb-2" src="<?= base_url('assets/web/imgs/events/mad_ad_logo.png') ?>" alt="">
                            <div class="align-item-center" style="border-bottom: 5px solid white">
                                <h3 class="sanskrit-name text-center">Srujanatmak Vignapan</h3>
                                <h3 class="text-center">MAD AD</h3>
                                <br>
                            </div>
                           <div class="d-flex align-items-center justify-content-center my-2" >
                            
                                
                                <button  class="view-more-btn" onclick="toggleOverlayMcaRules(7)">
                                    <div class="me-2"><span class="circle" aria-hidden="true">
                                    <span class="icon arrow"></span>
                                    </span>
                                    </div>
                                    <span class="button-text">Read More</span>
                                </button>
                            </div>
                        </div>
                         <div class="testimonial-item bg-transparent border rounded p-0">
                            <img class="img-fluid mx-auto d-block flex-shrink-1 mb-2" src="<?= base_url('assets/web/imgs/events/videography_logo.jpg') ?>" alt="">
                            <div class="align-item-center" style="border-bottom: 5px solid white">
                                <h3 class="sanskrit-name text-center">TATVA CHITRAM</h3>
                                <h3 class="text-center">VIDEOGRAPHY</h3>
                                <br>
                            </div>
                           <div class="d-flex align-items-center justify-content-center my-2" >
                            
                                
                                <button  class="view-more-btn" onclick="toggleOverlayMcaRules(5)">
                                    <div class="me-2"><span class="circle" aria-hidden="true">
                                    <span class="icon arrow"></span>
                                    </span>
                                    </div>
                                    <span class="button-text">Read More</span>
                                </button>
                            </div>
                        </div>
                       
                        <div class="testimonial-item bg-transparent border rounded p-0">
                            <img class="img-fluid mx-auto d-block flex-shrink-1 mb-2" src="<?= base_url('assets/web/imgs/events/It_manager_logo.png') ?>" alt="">
                            <div class="align-item-center" style="border-bottom: 5px solid white">
                                <h3 class="sanskrit-name text-center">Yantra vimarsha</h3>
                                <h3 class="text-center">IT MANAGER</h3>
                                <br>
                            </div>
                           <div class="d-flex align-items-center justify-content-center my-2" >
                            
                                
                                <button  class="view-more-btn" onclick="toggleOverlayMcaRules(3)">
                                    <div class="me-2"><span class="circle" aria-hidden="true">
                                    <span class="icon arrow"></span>
                                    </span>
                                    </div>
                                    <span class="button-text">Read More</span>
                                </button>
                            </div>
                        </div>
                        <div class="testimonial-item bg-transparent border rounded p-0">
                            <img class="img-fluid mx-auto d-block flex-shrink-1 mb-2" src="<?= base_url('assets/web/imgs/events/gaming_logo.png') ?>" alt="">
                            <div class="align-item-center" style="border-bottom: 5px solid white">
                                <h3 class="sanskrit-name text-center">Kurukshetra</h3>
                                <h3 class="text-center">GAMING</h3>
                                <br>
                            </div>
                           <div class="d-flex align-items-center justify-content-center my-2" >
                            
                                
                                <button  class="view-more-btn" onclick="toggleOverlayMcaRules(4)">
                                    <div class="me-2"><span class="circle" aria-hidden="true">
                                    <span class="icon arrow"></span>
                                    </span>
                                    </div>
                                    <span class="button-text">Read More</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- readmore overlay  -->
                <div id="readmore-card-overlay">
                    <div class="card-readmore-overlay">
                    
                            <span class="close-btn" onclick="toggleOverlayMcaRules()">&times;</span>
                    

                        <div class="text-contents-readmore">

                            <div class="title-text-readmore" id="mca-text-container">
                                <h3 id="title-readmore"></h3>
                                <p id="title-readmore-norm"></p>
                                <ul id="mca-list"></ul>
                                   <h2 class="event-head-heading justify-content-center">Event Heads</h2>
                                <div class="event-heads-container">
                                    <!-- <div class="centering-heads">
                                        <h3 id="heads-text">Event Heads: </h3>
                                    </div> -->

                                 
                                    <div class="event-head1-container">
                                        <div class="event-head1-headname">
                                            <i class="fa-solid fa-user" style="color: #FFFFFF;"></i>
                                            <h3 id="event-head1-name"></h3>
                                        </div>
                                        <div class="event-head1-phone">
                                           <i class="fa-solid fa-phone" style="color: #FFFFFF;"></i>

                                            <h3 id="event-head1-phn-number"></h3>

                                        </div>



                                    </div>
                                    <div class="event-head2-container">
                                        <div class="event-head1-headname">
                                            <i class="fa-solid fa-user" style="color: #FFFFFF;"></i>
                                            <h3 id="event-head2-name"></h3>
                                        </div>
                                        
                                        <div class="event-head1-phone">
                                            <i class="fa-solid fa-phone" style="color: #FFFFFF;"></i>

                                            <h3 id="event-head2-phn-number"></h3>

                                        </div>

                                    </div>

                                </div>

                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- EVENT End -->
       


        <!-- Video starts-->
        <!-- <div class="container-fluid py-5 px-0 wow fadeInUp" data-wow-delay="0.1s">
            <div class="row g-0">
                <div class="col-lg-12 col-md-6">
                    <div class="video">
                        <button type="button" class="btn-play" data-bs-toggle="modal" data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-bs-target="#videoModal">
                            <span></span>
                        </button>
                    </div>
                </div>
                
            </div>
        </div> -->

        <!-- <div class="modal fade" id="videoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content rounded-0">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Youtube Video</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <!-- 16:9 aspect ratio -->
                        <!--<div class="ratio ratio-16x9">
                            <iframe class="embed-responsive-item" src="" id="video" allowfullscreen allowscriptaccess="always"
                                allow="autoplay"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- Video ends -->


        <!-- Team Start -->
       
       <section id="teams" class="py-5">
            <div class="container">
                <div class="text-center mb-5">
                    <h5 class="section-title ff-secondary text-primary fw-normal">Committee</h5>
                    <h1 class="committee-header wow fadeInUp" data-wow-delay="0.1s">ORGANIZING COMMITTEE</h1>
                </div>
                <div class="row justify-content-center g-4">
                    <div class="col-6 col-md-3 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="team-item text-center rounded overflow-hidden">
                            <div class="rounded-circle overflow-hidden m-4">
                                <img class="img-fluid" src="<?= base_url('assets/web/imgs/committee/principal2.jpg') ?>" alt="Sr Dr M. Venissa A. C.">
                            </div>
                            <h5 class="mb-0">Sr Dr M. Venissa A. C.</h5>
                            <small>Principal</small>
                        </div>
                    </div>
                    <div class="col-6 col-md-3 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="team-item text-center rounded overflow-hidden">
                            <div class="rounded-circle overflow-hidden m-4">
                                <img class="img-fluid" src="<?= base_url('assets/web/imgs/committee/vice-princi2.png') ?>" alt="Sr Roopa Rodrigues A. C">
                            </div>
                            <h5 class="mb-0">Sr Roopa Rodrigues A. C.</h5>
                            <small>Vice Principal</small>
                        </div>
                    </div>
                    <div class="col-6 col-md-3 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="team-item text-center rounded overflow-hidden">
                            <div class="rounded-circle overflow-hidden m-4">
                                <img class="img-fluid" src="<?= base_url('assets/web/imgs/committee/admin2.jpg') ?>" alt="Sr M. Carmel Rita A.C">
                            </div>
                            <h5 class="mb-0">Sr M. Carmel Rita A. C.</h5>
                            <small>Administrator</small>
                        </div>
                    </div>
                    <div class="col-6 col-md-3 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="team-item text-center rounded overflow-hidden">
                            <div class="rounded-circle overflow-hidden m-4">
                                <img class="img-fluid" src="<?= base_url('assets/web/imgs/committee/pgco2.jpg') ?>" alt="Sr Dr M. Vinora A. C.">
                            </div>
                            <h5 class="mb-0">Sr Dr M. Vinora A. C.</h5>
                            <small>PG Co-ordinator</small>
                        </div>
                    </div>
                </div>

                <!-- faculty coordinators -->
                <div class="text-center mt-5 mb-5">
                    <h1 class="committee-header wow fadeInUp" data-wow-delay="0.1s">STAFF COORDINATORS</h1>
                </div>
                <div class="row justify-content-center g-4">
                    <div class="col-6 col-md-4 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="team-item text-center rounded overflow-hidden">
                            <div class="rounded-circle overflow-hidden m-4">
                                <img class="img-fluid" src="<?= base_url('assets/web/imgs/committee/Hod.jpg') ?>" alt="Mrs Panchajanyeswari M Achar">
                            </div>
                            <h5 class="mb-0">Mrs. Panchajanyeswari M Achar</h5>
                            <small>HOD & Assistant Professor</small>
                        </div>
                    </div>
                    <div class="col-6 col-md-4 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="team-item text-center rounded overflow-hidden">
                            <div class="rounded-circle overflow-hidden m-4">
                                <img class="img-fluid" src="<?= base_url('assets/web/imgs/committee/akshatha-mam.jpg') ?>" alt="Mrs Akshatha Shetty">
                            </div>
                            <h5 class="mb-0">Mrs. Akshatha Shetty</h5>
                            <small>Assistant Professor</small>
                        </div>
                    </div>
                    <div class="col-6 col-md-4 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="team-item text-center rounded overflow-hidden">
                            <div class="rounded-circle overflow-hidden m-4">
                                <img class="img-fluid" src="<?= base_url('assets/web/imgs/committee/Raina-mam.jpg') ?>" alt="Mrs Baji Raina Banu">
                            </div>
                            <h5 class="mb-0">Mrs. Baji Raina Banu</h5>
                            <small>Assistant Professor</small>
                        </div>
                    </div>
                </div>
                
                <!-- student coordinators  -->
                <div class="text-center mt-5 mb-5">
                    <h1 class="committee-header wow fadeInUp" data-wow-delay="0.1s">STUDENT COORDINATORS</h1>
                </div>
                <div class="row justify-content-center g-4">
                     <div class="col-6 col-md-4 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="team-item text-center rounded overflow-hidden student-coordinator">
                            <div class="rounded-circle overflow-hidden m-4">
                                <img class="img-fluid" src="<?= base_url('assets/web/imgs/committee/vaish.jpg') ?>" alt="Ms Vaishnavi Shenoy">
                            </div>
                            <h5 class="mb-0">Ms. Vaishnavi Shenoy</h5>
                            <small>Student Coordinator</small>
                        </div>
                    </div>
                    
                    <div class="col-6 col-md-4 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="team-item text-center rounded overflow-hidden student-coordinator">
                            <div class="rounded-circle overflow-hidden m-4">
                                <img class="img-fluid" src="<?= base_url('assets/web/imgs/committee/karthik.jpg') ?>" alt="Karthik">
                            </div>
                            <h5 class="mb-0">Mr. Karthik K R</h5>
                            <small>Student Coordinator</small>
                        </div>
                    </div>
                   
                </div>
            </div>
        </section>
        <!-- Team End -->
        
        <!-- Socia icons start  -->
        <section id="Social-icon">
            <div class="container-fluid py-5 wow fadeInUp"  data-wow-delay="0.1s">
                <div class="container">
                    <div class="text-center">
                        <h5 class="section-title ff-secondary text-center text-primary fw-normal">Social Connections</h5>
                        <h1 class="mb-5 section-sub-title">Connect with Us..!!</h1>
                    </div>
                    <div class="social-icons-container">
                        <ul class="social-icon-ul">
                            <li><a target="_blank" href="https://www.instagram.com/agnesia.aavirbhav"><i class="fa-brands fa-instagram instagram"></i></a></li>
                            <li><a target="_blank" href="https://wa.me/919481539064?text=Hello%20Aavirbhav%20team!%20I%20would%20like%20to%20know%20more%20about%20the%20event."><i class="fa-brands fa-whatsapp whatsapp"></i></a></li>
                           
                            
                        </ul>

                        
                    </div>
                    <div class="social-icons-container">
                         <a href="https://drive.google.com/uc?export=download&id=1HQ8HW016VVVpFraZt8868swCasXoIvsy" class="lan-btn py-sm-3 px-sm-5 me-3 " style="--clr:#000000">
                                <span>Schedule</span><i></i>
                        </a>
                        <a href="https://drive.google.com/uc?export=download&id=1-3tGTcSk2i66-qV3_t5n2l4FHYwP1lS5" class="lan-btn py-sm-3 px-sm-5 me-3 " style="--clr:#000000">
                                    <span>Brochure</span><i></i>
                        </a>
                    </div>


                   
                
                </div>
            </div>
        </section>
        <!-- Socia icons End  -->
          <!-- Event  Start -->
        <section id="Map">
            <div class="container-fluid py-5 wow fadeInUp"  data-wow-delay="0.1s">
                <div class="container">
                    <div class="text-center">
                        <h5 class="section-title ff-secondary text-center text-primary fw-normal">College Location</h5>
                        <h1 class="mb-5 section-sub-title">We Are Here!!</h1>
                    </div>
                    
                    <div class="row">
                        <div class="map-div">
                            <iframe class="map-iframe" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3889.488933821107!2d74.85668087491663!3d12.876251487430364!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ba35a36eaaaaaab%3A0x2f73de40395a69a3!2sSt.%20Agnes%20College(Autonomous)!5e0!3m2!1sen!2sin!4v1723784234752!5m2!1sen!2sin" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                
                </div>
            </div>
        </section>
        <!-- EVENT End -->


       
