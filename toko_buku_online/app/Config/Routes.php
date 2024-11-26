<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('search', 'Home::search');
$routes->get('/chart', 'Home::cart');
$routes->get('checkout', 'Home::checkout');
$routes->post('/submit', 'Home::submit');