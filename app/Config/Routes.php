<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'AdminController::login');
$routes->get('/register', 'AdminController::register');
$routes->get('/forgotpass', 'AdminController::forgotpass');
$routes->get('/website', 'AdminController::website');


