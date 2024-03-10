<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// jwt register routes 
$routes->get('jwtregister', 'User::register');
$routes->post('/jwtregister/create', 'User::create');


// jwt login routes 
$routes->post('/jwtlogin/auth', 'User::login');
$routes->get('jwtlogin', 'User::login_view');
$routes->get('/jwtread', 'User::readUser', ['filter' => 'auth']);


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



// Auth routes
$routes->match(['get', 'post'], 'login', 'Login::index', ['filter' => 'noAuth']);

$routes->group('dashboard', ['filter' => 'Auth'], function ($routes) {
    $routes->get('/', 'Dashboard::index');
});

$routes->group('admin', ['filter' => 'Auth'], function ($routes) {
    $routes->get('/', 'AdminController::index');
    $routes->post('updateUserRole/(:num)', 'AdminController::update/$1');
    $routes->get('deleteUser/(:num)', 'AdminController::delete/$1');
    

});
$routes->post('admin/event-register', 'EventRegister::register');
$routes->group('student', ['filter' => 'Auth'], function ($routes) {
    $routes->get('/', 'StudentController::index');
});


//logout routes
$routes->get('logout', 'Dashboard::logout');




//email routes
$routes->get('email', 'EmailController::index');
$routes->post('email', 'EmailController::sendMail');



//404 route
// $routes->set404Override(function(){
//     return view('app/common/404');
// });

