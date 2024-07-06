    <div class="container-fluid py-5 bg-dark hero-header mb-5">
        <section id="home">   
            <div class="container my-5 py-5">
                <div class="row  g-5">
                    <div class="col-lg-6 text-center text-lg-start">
                        <div class="hero-container">
                            <div class="environment"></div>
                            <h2 class="sanskrit-name hero glitch layers" data-text="AAVIRBHAV"><span>AAVIRBHAV</span></h2>
                        </div>
                        
                        
                        <h1 class="motivation animated slideInLeft  mb-5 pb-2">WHERE <span class="underlined underline-clip"> TALENT</span> MEETS OPPORTUNITY!!</h1>
                        
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
                            <img class="img-fluid mandal-1" src="<?= base_url('assets/web/imgs/image-mandal-3.png') ?>" alt="">
                        
                            <!-- <img class="img-fluid mandal-2" src="<?= base_url('assets/web/imgs/image-mandal-3.png') ?>" alt=""> -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
        
        <!-- Service Start -->
        <!-- Counter Section Begin  **edited-->
        <div class="container-fluid">
            <div class="container">
                <div class="row g-4">
                    <div class="col-lg-12 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                        <!-- Counter Section Begin  **edited-->
                        <div class="counter main-example text-center text-lg-start">
                            <h1 class="display-1 text-center text-white animated slideInLeft"><strong>The Event Starts In.</strong></h1>
                            <h1 class="display-5 text-center text-white animated slideInLeft"><strong>Every Second Counts...</strong></h1>
                            <div class="text-center countdown-container" data-timer="2024/05/15" id="main-example"></div>
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
                            
        
        <!-- <div class="container-fluid py-5">
            <div class="container">
                <div class="row g-4">
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="service-item rounded pt-3">
                            <div class="p-4">
                                <i class="fa-solid fa-3x fa-calendar-days text-primary mb-4"></i>
                                <h5>Events</h5>
                                <p>It’s time to get your game face on</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="service-item rounded pt-3">
                            <div class="p-4">
                                <i class="fa fa-3x fa-utensils text-primary mb-4"></i>
                                <h5>Quality Food</h5>
                                <p>Diam elitr kasd sed at elitr sed ipsum justo dolor sed clita amet diam</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="service-item rounded pt-3">
                            <div class="p-4">
                                <i class="fa fa-3x fa-cart-plus text-primary mb-4"></i>
                                <h5>Online Order</h5>
                                <p>Diam elitr kasd sed at elitr sed ipsum justo dolor sed clita amet diam</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="service-item rounded pt-3">
                            <div class="p-4">
                                <i class="fa fa-3x fa-headset text-primary mb-4"></i>
                                <h5>24/7 Service</h5>
                                <p>Diam elitr kasd sed at elitr sed ipsum justo dolor sed clita amet diam</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- Service End -->


        <!-- About Start -->
        <section id="about">
            <div class="container-fluid py-5">
                <div class="container">
                    <div class="row g-5 align-items-center">
                        <div class="col-lg-6">
                            <div class="row g-3">
                                <div class="col-6 text-start">
                                    <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.1s" src="<?= base_url('assets/web/imgs/events/coding2-nobg.png') ?>">
                                </div>
                                <div class="col-6 text-start">
                                    <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.3s" src="<?= base_url('assets/web/imgs/events/Quiz-nobg.png') ?>" style="margin-top: 25%;">
                                </div>
                                <div class="col-6 text-end">
                                    <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.5s" src="<?= base_url('assets/web/imgs/events/gaming2-nobg.png') ?>">
                                </div>
                                <div class="col-6 text-end">
                                    <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.7s" src="<?= base_url('assets/web/imgs/events/It manager-nobg.png') ?>">
                                </div>
                            </div>
                        </div>
                        <div class="section col-lg-6">
                            <h5 class="section-title ff-secondary text-start text-light fw-normal">About event</h5>
                            <h1 class="abt-header display-5 mb-4">Welcome to <span class="sanskrit-name-abt">AAVIRBHAV</span> </h1>
                            <p class="abt-sub display-7 mb-1">DIVE INTO </p>
                            <p class="abt-sub display-7 mb-4">EXITING COMPITION AND SHOWCASE YOUR TALENT WITH REWARDS AND CASH PRIZE</p>
                            <div class="row g-4 mb-4">
                                <div class="col-sm-6">
                                    <div class="d-flex align-items-center border-start border-5 border-light px-3">
                                        <h1 class="flex-shrink-0 display-5 text-warning mb-0" data-toggle="counter-up">15</h1><p class="text-warning">+</p>
                                        <div class="ps-4">
                                            <p class="mb-0">Events to</p>
                                            <h6 class="text-uppercase mb-0">Participate</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="d-flex align-items-center border-start border-5 border-light px-3">
                                        <h1 class="flex-shrink-0 display-5 text-warning mb-0" data-toggle="counter-up">30</h1><p class="text-warning">+</p>
                                        <div class="ps-4">
                                            <p class="mb-0">Trophies to</p>
                                            <h6 class="text-uppercase mb-0">Win</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <a href="<?= base_url('about-us') ?>" class="abt-btn py-sm-3 px-sm-5 me-3 animated slideInLeft"style="--clr:#000000"><span>About us</span><i></i></a>
                            
                                    
                            
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- About End -->

         <!-- Event  Start -->
        <section id="events"></section>
            <div class="container-fluid py-5 wow fadeInUp"  data-wow-delay="0.1s">
                <div class="container">
                    <div class="text-center">
                        <h5 class="section-title ff-secondary text-center text-primary fw-normal">Events</h5>
                        <h1 class="mb-5">Events to register!!!</h1>
                    </div>
                    <div class="owl-carousel testimonial-carousel">
                        <div class="testimonial-item bg-transparent border rounded p-0">
                            <img class="img-fluid mx-auto d-block flex-shrink-1" src="<?= base_url('assets/web/imgs/events/coding2-nobg.png') ?>" alt="">
                            <div class="align-item-center" style="border-bottom: 5px solid white">
                                <h3 class="sanskrit-name text-center">khodhasangam</h3>
                                <h3 class="text-center">CODING</h3>
                            </div>
                            <div class="d-flex align-items-center" >
                            
                                <div onclick="toggleOverlayUg()" id="readmore-btn" class="button-inside-card align-items-center">
                                    <button class="button-card-inside">
                                        Read More
                                        <svg fill="currentColor" viewBox="0 0 24 24" class="icon">
                                            <path clip-rule="evenodd"
                                                d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zm4.28 10.28a.75.75 0 000-1.06l-3-3a.75.75 0 10-1.06 1.06l1.72 1.72H8.25a.75.75 0 000 1.5h5.69l-1.72 1.72a.75.75 0 101.06 1.06l3-3z"
                                                fill-rule="evenodd"></path>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                                </div>
                        <div class="testimonial-item bg-transparent border rounded p-0">
                            <img class="img-fluid mx-auto d-block flex-shrink-1" src="<?= base_url('assets/web/imgs/events/Quiz-nobg.png') ?>" alt="">
                            <div class="align-item-center" style="border-bottom: 5px solid white">
                                <h3 class="sanskrit-name text-center">Gyanvedha</h3>
                                <h3 class="text-center">IT QUIZ</h3>
                            </div>
                            <div class="d-flex align-items-center" >
                            
                                <div onclick="toggleOverlayUg()" id="readmore-btn" class="button-inside-card align-items-center">
                                    <button class="button-card-inside">
                                        Read More
                                        <svg fill="currentColor" viewBox="0 0 24 24" class="icon">
                                            <path clip-rule="evenodd"
                                                d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zm4.28 10.28a.75.75 0 000-1.06l-3-3a.75.75 0 10-1.06 1.06l1.72 1.72H8.25a.75.75 0 000 1.5h5.69l-1.72 1.72a.75.75 0 101.06 1.06l3-3z"
                                                fill-rule="evenodd"></path>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-item bg-transparent border rounded p-0">
                            <img class="img-fluid mx-auto d-block flex-shrink-1" src="<?= base_url('assets/web/imgs/events/videography-nobg.png') ?>" alt="">
                            <div class="align-item-center" style="border-bottom: 5px solid white">
                                <h3 class="sanskrit-name text-center">Tattva Chitram</h3>
                                <h3 class="text-center">VIDEOGRAPHY</h3>
                            </div>
                            <div class="d-flex align-items-center" >
                            
                                <div onclick="toggleOverlayUg()" id="readmore-btn" class="button-inside-card align-items-center">
                                    <button class="button-card-inside">
                                        Read More
                                        <svg fill="currentColor" viewBox="0 0 24 24" class="icon">
                                            <path clip-rule="evenodd"
                                                d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zm4.28 10.28a.75.75 0 000-1.06l-3-3a.75.75 0 10-1.06 1.06l1.72 1.72H8.25a.75.75 0 000 1.5h5.69l-1.72 1.72a.75.75 0 101.06 1.06l3-3z"
                                                fill-rule="evenodd"></path>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-item bg-transparent border rounded p-0">
                            <img class="img-fluid mx-auto d-block flex-shrink-1" src="<?= base_url('assets/web/imgs/events/photography-nobg.png') ?>" alt="">
                            <div class="align-item-center" style="border-bottom: 5px solid white">
                                <h3 class="sanskrit-name text-center">Rasadarpana</h3>
                                <h3 class="text-center">PHOTOGRAPHY</h3>
                            </div>
                            <div class="d-flex align-items-center" >
                            
                                <div onclick="toggleOverlayUg()" id="readmore-btn" class="button-inside-card align-items-center">
                                    <button class="button-card-inside">
                                        Read More
                                        <svg fill="currentColor" viewBox="0 0 24 24" class="icon">
                                            <path clip-rule="evenodd"
                                                d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zm4.28 10.28a.75.75 0 000-1.06l-3-3a.75.75 0 10-1.06 1.06l1.72 1.72H8.25a.75.75 0 000 1.5h5.69l-1.72 1.72a.75.75 0 101.06 1.06l3-3z"
                                                fill-rule="evenodd"></path>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-item bg-transparent border rounded p-0">
                            <img class="img-fluid mx-auto d-block flex-shrink-1" src="<?= base_url('assets/web/imgs/events/It manager-nobg.png') ?>" alt="">
                            <div class="align-item-center" style="border-bottom: 5px solid white">
                                <h3 class="sanskrit-name text-center">Shreshta Nirvahak</h3>
                                <h3 class="text-center">IT MANAGER</h3>
                            </div>
                            <div class="d-flex align-items-center" >
                            
                                <div onclick="toggleOverlayUg()" id="readmore-btn" class="button-inside-card align-items-center">
                                    <button class="button-card-inside">
                                        Read More
                                        <svg fill="currentColor" viewBox="0 0 24 24" class="icon">
                                            <path clip-rule="evenodd"
                                                d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zm4.28 10.28a.75.75 0 000-1.06l-3-3a.75.75 0 10-1.06 1.06l1.72 1.72H8.25a.75.75 0 000 1.5h5.69l-1.72 1.72a.75.75 0 101.06 1.06l3-3z"
                                                fill-rule="evenodd"></path>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-item bg-transparent border rounded p-0">
                            <img class="img-fluid mx-auto d-block flex-shrink-1" src="<?= base_url('assets/web/imgs/events/gaming2-nobg.png') ?>" alt="">
                            <div class="align-item-center" style="border-bottom: 5px solid white">
                                <h3 class="sanskrit-name text-center">Kurukshetra</h3>
                                <h3 class="text-center">GAMING</h3>
                            </div>
                            <div class="d-flex align-items-center" >
                            
                                <div onclick="toggleOverlayUg()" id="readmore-btn" class="button-inside-card align-items-center">
                                    <button class="button-card-inside">
                                        Read More
                                        <svg fill="currentColor" viewBox="0 0 24 24" class="icon">
                                            <path clip-rule="evenodd"
                                                d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zm4.28 10.28a.75.75 0 000-1.06l-3-3a.75.75 0 10-1.06 1.06l1.72 1.72H8.25a.75.75 0 000 1.5h5.69l-1.72 1.72a.75.75 0 101.06 1.06l3-3z"
                                                fill-rule="evenodd"></path>
                                        </svg>
                                    </button>
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
        <section id="teams"></section>
            <div class="container-fluid pt-5 pb-3">
                <div class="container">
                    <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                        <h5 class=" section-title ff-secondary text-center text-primary fw-normal">Team Members</h5>
                        <h1 class="committee-header mb-5">ORGANIZING COMMITTEE</h1>
                    </div>
                    <div class="row g-4">
                        <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="team-item text-center rounded overflow-hidden">
                                <div class="rounded-circle overflow-hidden m-4">
                                    <img class="img-fluid" src="<?= base_url('assets/web/imgs/committee/principal2.jpg') ?>">
                                </div>
                                <h5 class="mb-0">Sr Dr M. Venissa A. C.</h5>
                                <small>Principal</small>
                                <div class="d-flex justify-content-center mt-3">
                                    <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="team-item text-center rounded overflow-hidden">
                                <div class="rounded-circle overflow-hidden m-4">
                                    <img class="img-fluid" src="<?= base_url('assets/web/imgs/committee/vice-princi2.jpg') ?>">
                                </div>
                                <h5 class="mb-0">Sr M. Clera Rodrigues A. C</h5>
                                <small>Vice Principal</small>
                                <div class="d-flex justify-content-center mt-3">
                                    <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                            <div class="team-item text-center rounded overflow-hidden">
                                <div class="rounded-circle overflow-hidden m-4">
                                    <img class="img-fluid" src="<?= base_url('assets/web/imgs/committee/pgco2.jpg') ?>" alt="">
                                </div>
                                <h5 class="mb-0">Sr M. Carmel Rita A.C</h5>
                                <small>Administrator</small>
                                <div class="d-flex justify-content-center mt-3">
                                    <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                            <div class="team-item text-center rounded overflow-hidden">
                                <div class="rounded-circle overflow-hidden m-4">
                                    <img class="img-fluid" src="<?= base_url('assets/web/imgs/committee/admin2.jpg') ?>" alt="">
                                </div>
                                <h5 class="mb-0">Sr Dr M. Vinora A. C.</h5>
                                <small>PG Co-ordinator</small>
                                <div class="d-flex justify-content-center mt-3">
                                    <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- faculty coordinators -->
                    <div class="text-center wow fadeInUp mt-3" data-wow-delay="0.1s">
                        
                        <h1 class="committee-header mb-5">STAFF COORDINATORS</h1>
                    </div>
                    <div class="g-4 staff-container ">
                        <div class="col-lg-3 col-md-6  wow fadeInUp" data-wow-delay="0.1s">
                            <div class="team-item text-center rounded overflow-hidden">
                                <div class="rounded-circle overflow-hidden m-4">
                                    <img class="img-fluid" src="<?= base_url('assets/web/imgs/committee/Hod.jpg') ?>" alt="">
                                </div>
                                <h5 class="mb-0">Mrs Panchajanyeswari M Achar</h5>
                                <small>HOD & Assistant Professor</small>
                                <div class="mt-4 d-flex justify-content-center ">
                                    <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 staff-item wow fadeInUp" data-wow-delay="0.3s">
                            <div class="team-item text-center rounded overflow-hidden">
                                <div class="rounded-circle overflow-hidden m-4">
                                    <img class="img-fluid" src="<?= base_url('assets/web/imgs/committee/akshatha-mam.jpg') ?>" alt="">
                                </div>
                                <h5 class="mb-0">Mrs Akshatha Shetty</h5>
                                <small>Assistant Professor</small>
                                <div class="mt-5 d-flex justify-content-center mt-3">
                                    <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 staff-item wow fadeInUp" data-wow-delay="0.5s">
                            <div class="team-item text-center rounded overflow-hidden">
                                <div class="rounded-circle overflow-hidden m-4">
                                    <img class="img-fluid rounded-circle" src="<?= base_url('assets/web/imgs/committee/Raina-mam.jpg') ?>" alt="">
                                </div>
                                <h5 class="mb-0">Mrs Baji Raina Banu</h5>
                                <small>Assistant Professor</small>
                                <div class="mt-5 d-flex justify-content-center mt-3">
                                    <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 staff-item wow fadeInUp" data-wow-delay="0.7s">
                            <div class="team-item text-center rounded overflow-hidden">
                                <div class="rounded-circle overflow-hidden m-4">
                                    <img class="img-fluid" src="<?= base_url('assets/web/imgs/committee/akshitha.jpg') ?>" alt="">
                                </div>
                                <h5 class="mb-0">Ms Akshitha Menon</h5>
                                <small>Assistant Professor</small>
                                <div class="mt-5 d-flex justify-content-center mt-3">
                                    <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 staff-item wow fadeInUp" data-wow-delay="0.7s">
                            <div class="team-item text-center rounded overflow-hidden">
                                <div class="rounded-circle overflow-hidden m-4">
                                    <img class="img-fluid" src="<?= base_url('assets/web/imgs/committee/ramya.jpg') ?>" alt="">
                                </div>
                                <h5 class="mb-0">Ms Ramya Balyaya</h5>
                                <small>Assistant Professor</small>
                                <div class="mt-5 d-flex justify-content-center mt-3">
                                    <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    <!-- student coordinators  -->
                    <div class="text-center wow fadeInUp mt-3" data-wow-delay="0.1s">
                        
                        <h1 class="committee-header mb-5">STUDENT COORDINATORS</h1>
                    </div>
                    <div class="g-4 staff-container ">
                        <div class="col-lg-3 col-md-6  wow fadeInUp" data-wow-delay="0.1s">
                            <div class="team-item text-center rounded overflow-hidden">
                                <div class="rounded-circle overflow-hidden m-4">
                                    <img class="img-fluid" src="<?= base_url('assets/web/imgs/committee/susan.jpg') ?>" alt="">
                                </div>
                                <h5 class="mb-0">Mr Sushan Roy Pinto</h5>
                                <small>President</small>
                                <div class="mt-5 d-flex justify-content-center ">
                                    <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 staff-item wow fadeInUp" data-wow-delay="0.3s">
                            <div class="team-item text-center rounded overflow-hidden">
                                <div class="rounded-circle overflow-hidden m-4">
                                    <img class="img-fluid" src="<?= base_url('assets/web/imgs/committee/dev.jpg') ?>" alt="">
                                </div>
                                <h5 class="mb-0">Dev Kiran Nayak</h5>
                                <small>Class Representative</small>
                                <div class="mt-5 d-flex justify-content-center mt-3">
                                    <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 staff-item wow fadeInUp" data-wow-delay="0.5s">
                            <div class="team-item text-center rounded overflow-hidden">
                                <div class="rounded-circle overflow-hidden m-4">
                                    <img class="img-fluid rounded-circle" src="<?= base_url('assets/web/imgs/committee/vaish.jpg') ?>" alt="">
                                </div>
                                <h5 class="mb-0">Ms Vaishnavi Shenoy</h5>
                                <small>Class Representative</small>
                                <div class="mt-5 d-flex justify-content-center mt-3">
                                    <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 staff-item wow fadeInUp" data-wow-delay="0.7s">
                            <div class="team-item text-center rounded overflow-hidden">
                                <div class="rounded-circle overflow-hidden m-4">
                                    <img class="img-fluid" src="<?= base_url('assets/web/imgs/committee/karthi.jpg') ?>" alt="">
                                </div>
                                <h5 class="mb-0">Mr Karthi Shettygar</h5>
                                <small>II MCA</small>
                                <div class="mt-5 d-flex justify-content-center mt-3">
                                    <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 staff-item wow fadeInUp" data-wow-delay="0.7s">
                            <div class="team-item text-center rounded overflow-hidden">
                                <div class="rounded-circle overflow-hidden m-4">
                                    <img class="img-fluid" src="<?= base_url('assets/web/imgs/committee/ganesh.jpg') ?>" alt="">
                                </div>
                                <h5 class="mb-0">Mr Ganesh Nayak</h5>
                                <small>II MCA</small>
                                <div class="mt-5 d-flex justify-content-center mt-3">
                                    <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </section>
        <!-- Team End -->


       