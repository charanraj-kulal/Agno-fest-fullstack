<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */



//login routes
$routes->get('/', 'Login::index');
$routes->post('login/authenticate', 'Login::authenticate');
$routes->post('login/register', 'Login::register');

//register routes
$routes->get('register', 'Register::index');
$routes->post('register/create', 'Register::create');
$routes->get('register/success', 'Register::success');
$routes->get('landingpage/landing-page', 'LandingPage::index'); 

//email routes
$routes->get('email', 'EmailController::index');
$routes->post('email', 'EmailController::sendMail');

