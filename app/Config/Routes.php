<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */



//login routes
$routes->get('/', 'Login::index');
$routes->post('login/authenticate', 'Login::authenticate');

//register routes
$routes->get('register', 'User::index');
$routes->post('register/create', 'User::create');
$routes->get('register/success', 'User::success');
$routes->get('landingpage/landing-page', 'User::success'); 

//email routes
$routes->get('email', 'EmailController::index');
$routes->post('email', 'EmailController::sendMail');

