<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// register routes 
$routes->get('register', 'User::register');
$routes->post('/register/create', 'User::create');
$routes->post('/register/verify', 'User::verifyOTP');
$routes->get('/verify-email', 'User::verify_email_view');
$routes->post('register/regenerate-otp', 'User::regenerateOTP');



//  login routes 
$routes->post('/login/auth', 'User::login');
$routes->get('login', 'User::login_view');
// $routes->get('/jwtread', 'User::readUser', ['filter' => 'auth']);


//landing page routes
$routes->get('/', 'LandingPage::index');
$routes->get('/about-us', 'LandingPage::aboutus');


$routes->group('dashboard', ['filter' => 'Auth'], function ($routes) {
    $routes->get('/', 'Dashboard::index');
    // edit user 
    $routes->post('updateUserRole/(:num)', 'AdminController::update/$1');
    $routes->get('deleteUser/(:num)', 'User::deleteUser/$1');
    $routes->post('updateUser/(:num)', 'User::updateUser/$1');


    //change password 
    $routes->post('update-password', 'Dashboard::changePassword');

    // close account 
    $routes->post('close-account', 'Dashboard::closeAccount');
    

    // data fetch 
    $routes->post('getUserDetails/(:num)', 'User::getUserDetails/$1');
    $routes->get('getusers', 'User::getUsers');

    //reports routes
    //all user route
    $routes->get('fetchAllUserData', 'Dashboard::getAllUserData');
    //all event route
    $routes->get('fetchAllEventData', 'Dashboard::getAllEventRegistrationData');
    //all event route
    $routes->get('getAllAccommodationData', 'Dashboard::getAllAccommodationData');



    //event reg route
    $routes->post('event-register', 'EventRegister::register');
    $routes->get('fetchEnrollData', 'EventRegister::fetchEnrollData');


    //accomodation routes
    $routes->post('accomodation', 'Accomodation::accomodate');
    // payment gateway routes 
    $routes->post('razorpay/initiate', 'RazorpayController::initiate');
    $routes->post('razorpay/verify', 'RazorpayController::verify');
  
    
});

//logout routes
$routes->get('logout', 'Dashboard::logout');

//email routes
$routes->get('email', 'EmailController::index');
$routes->post('email', 'EmailController::sendMail');

// 404 routes
$routes->set404Override(function(){
    return view('app/common/404');
});








