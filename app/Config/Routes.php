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



// Auth routes
$routes->match(['get', 'post'], 'login', 'Login::index', ['filter' => 'noAuth']);

$routes->group('dashboard', ['filter' => 'Auth'], function ($routes) {
    $routes->get('/', 'Dashboard::index');
});

$routes->group('admin', ['filter' => 'Auth'], function ($routes) {
    $routes->get('/', 'AdminController::index');
    //update user
    $routes->post('updateUserRole/(:num)', 'AdminController::update/$1');
    //delete user
    
    
    



});

//fetch user detail for modal
    $routes->post('admin/getUserDetails/(:num)', 'User::getUserDetails/$1');

//fetch users details
    $routes->get('admin/getusers', 'User::getUsers');
//delete user
    $routes->get('admin/deleteUser/(:num)', 'User::deleteUser/$1');

    //update user
        $routes->post('admin/updateUser/(:num)', 'User::updateUser/$1');


//event reg route
$routes->post('admin/event-register', 'EventRegister::register');
$routes->get('admin/fetchData', 'EventRegister::fetchData');


//accomodation routes
$routes->post('admin/accomodation', 'Accomodation::accomodate');


$routes->group('student', ['filter' => 'Auth'], function ($routes) {
    $routes->get('/', 'StudentController::index');
});


//logout routes
$routes->get('logout', 'Dashboard::logout');




//email routes
$routes->get('email', 'EmailController::index');
$routes->post('email', 'EmailController::sendMail');



// 404 routes
// $routes->set404Override(function(){
//     return view('app/common/404');
// });

