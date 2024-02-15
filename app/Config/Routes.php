<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Pages::index');
$routes->add('/about', 'Pages::about');
$routes->add('/contact', 'Pages::contact');
$routes->get('/komik', 'Komik::index');

$routes->get('/komik/(:segment)', 'Komik::detail/$1');
