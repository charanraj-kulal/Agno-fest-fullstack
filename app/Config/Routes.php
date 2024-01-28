<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */



//login routes
$routes->get('login', 'Login::index');
$routes->post('login/authenticate', 'Login::authenticate');


//register routes
$routes->get('register', 'Register::index');
$routes->post('register/create', 'Register::create');
$routes->get('register/success', 'Register::success');

//landing page routes
$routes->get('/', 'LandingPage::index');
$routes->get('/about-us', 'LandingPage::aboutus');


//dashboard routes
// $routes->group('dashboard', function ($routes) {
    // Your dashboard routes go here
    // $routes->get('/', 'Dashboard::index',['filter' => 'auth']);
    // Add more routes as needed
// });
// $routes->group('dashboard', ['filter' => 'noauth'], function ($routes) {
//     // Your dashboard routes go here
//     $routes->get('/', 'Dashboard::index');
//     // Add more routes as needed
// });

$routes->get('dashboard', 'Dashboard::index');
$routes->get('logout', 'Dashboard::logout');




//email routes
$routes->get('email', 'EmailController::index');
$routes->post('email', 'EmailController::sendMail');



//404 route
$routes->set404Override(function(){
    return view('app/common/404');
});

