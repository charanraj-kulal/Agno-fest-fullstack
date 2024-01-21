<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */



//user routes
$routes->get('/', 'Login::index');
$routes->post('login/authenticate', 'Login::authenticate');
$routes->get('register', 'User::index');
$routes->post('register/create', 'User::create');
$routes->get('register/success', 'User::success');
$routes->get('landingpage/landing-page', 'User::success'); // Add a success route if needed

