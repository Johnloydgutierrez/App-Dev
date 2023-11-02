<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'AdminController::login');
$routes->get('/login', 'AdminController::login');
$routes->get('/register', 'AdminController::register');
$routes->get('/forgotpass', 'AdminController::forgotpass');
$routes->get('/website', 'AdminController::website');
$routes->get('/charts', 'AdminController::charts');
$routes->get('/tables', 'AdminController::tables');
$routes->get('/products', 'AdminController::products');




